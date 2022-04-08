<?php

namespace App\Http\Controllers;

use App\Models\Meme;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        // Convertimos la cadena de busqueda en un array de palabras 
        $keywordsRaw = explode(' ', $request->q); // Separar por espacios
        $keywordsMapped = array_map(function ($keywordRaw) { // Eliminar los espacios de delante y detras
            return strtolower(trim($keywordRaw));
        }, $keywordsRaw);
        $keywordsString = array_filter($keywordsMapped, function ($keywordMapped) { // Eliminar las que se queden vacias
            return $keywordMapped != '';
        });

        $memes = null;
        if ($request->q == null || $request->q == '') {
            $memes = Meme::all();
        } else {
            $memes = Meme::all()->filter(function ($meme) use ($keywordsString) {
                foreach ($keywordsString as $keywordString) {
                    if (str_contains(strtolower($meme['name']), $keywordString)) return true; // Check if name matches
                    if (str_contains(strtolower($meme['description']), $keywordString)) return true; // Check if description matches

                    foreach ($meme->tags as $tag) {
                        if (str_contains(strtolower($tag->name), $keywordString)) return true; // Check tag name matches
                    }
                }
                return false;
            });
        }

        return view('search', ['q' => $request->q, 'memes' => $memes]);
    }
}
