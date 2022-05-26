<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Meme;
use App\Models\Tag;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $memes = Meme::all();

        return view('index', ['memes' => $memes]);
    }

}
