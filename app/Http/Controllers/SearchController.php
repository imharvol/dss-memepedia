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

        // Filtrado
        $memes = null;
        if ($request->q == null || $request->q == '') {
            $memes = Meme::all();
        } else {
            $memes = Meme::all()->filter(function ($meme) use ($request, $keywordsString) {
                foreach ($keywordsString as $keywordString) {
                    // Check if name matches
                    if ($request->filter == null || $request->filter == "name")
                        if (str_contains(strtolower($meme->name), $keywordString)) return true;

                    // Check if description matches
                    if ($request->filter == null || $request->filter == "description")
                        if (str_contains(strtolower($meme->description), $keywordString)) return true;

                    // Check if author username matches
                    if ($request->filter == null || $request->filter == "author")
                        if (str_contains(strtolower($meme->author->username), $keywordString)) return true;

                    // Check if tag name matches
                    if ($request->filter == null || $request->filter == "tags")
                        foreach ($meme->tags as $tag) {
                            if (str_contains(strtolower($tag->name), $keywordString)) return true;
                        }
                }
                return false;
            });
        }

        // Ordenado
        if ($request->sort == null || $request->sort == "new") {
            $memes = $memes->sort(function ($m1, $m2) {
                return $m1->created_at < $m2->created_at;
            });
        } else if ($request->sort == "old") {
            $memes = $memes->sort(function ($m1, $m2) {
                return $m1->created_at > $m2->created_at;
            });
        } else if ($request->sort == "long") {
            $memes = $memes->sort(function ($m1, $m2) {
                return strlen($m1->description) < strlen($m2->description);
            });
        } else if ($request->sort == "short") {
            $memes = $memes->sort(function ($m1, $m2) {
                return strlen($m1->description) > strlen($m2->description);
            });
        } else if ($request->sort == "alphabetical") {
            $memes = $memes->sort(function ($m1, $m2) {
                return $m1->name > $m2->name;
            });
        }

        return view('search', ['q' => $request->q, 'filter' => $request->filter, 'sort' => $request->sort, 'memes' => $memes]);
    }
}
