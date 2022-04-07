<?php

namespace App\Http\Controllers;

use App\Models\Meme;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $memes = null;
        if ($request->q == null || $request->q == '') {
            $memes = Meme::all()->toArray();
        } else {
            $memes = array_filter(Meme::all()->toArray(), function ($meme) use ($request) {
                return str_contains(strtolower($meme['name']), strtolower($request->q)) || str_contains(strtolower($meme['description']), strtolower($request->q));
            });
        }
        
        return view('search', ['q' => $request->q, 'memes' => $memes]);
    }
}
