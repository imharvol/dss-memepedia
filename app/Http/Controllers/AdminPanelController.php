<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Meme;
use App\Models\Evaluation;
use App\Models\Tag;
use Illuminate\Http\Request;

class AdminPanelController extends Controller
{
    public function usersInterface()
    {
        $users = User::all();
        return view('panel-control-user', ['users' => $users]);
    }

    public function memesInterface()
    {
        $memes = Meme::all();
        return view('panel-control-meme', ['memes' => $memes]);
    }

    public function evaluationsInterface()
    {
        $evaluations = Evaluation::all();
        return view('panel-control-evaluation', ['evaluations' => $evaluations]);
    }

    public function tagsInterface()
    {
        $tags = Tag::all();
        return view('panel-control-tag', ['tags' => $tags]);
    }
}
