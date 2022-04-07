<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Meme;
use Illuminate\Http\Request;

class MemeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $memes = Meme::all();

        return view('meme-list', ['memes' => $memes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crear-meme');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $meme = new Meme();
        $meme->name = $request->titulo;
        $meme->description = $request->description;
        $meme->article = $request->article || ""; // TODO: Añadir input de article
        $memeUser = User::first();
        $meme->user()->associate($memeUser);
        $memeUser->memes()->save($meme);

        return redirect(route('index')); // TODO: Hacer que lo redirija a la página del meme
    }

    public function show($memeId)
    {
        $meme = Meme::firstWhere('id', $memeId);

        if ($meme) {
            return view('entrada', ['meme' => $meme]);
        } else {
            return view('error-page', ['error_message' => 'Meme no encontrado!']);
        }

    }

    public function delete(Request $request)
    {
        $meme = Meme::firstWhere('id', $request->id);
        $meme->delete();
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Meme  $meme
     * @return \Illuminate\Http\Response
     */
    public function edit(Meme $meme)
    {
        //
    }

    public function update(Request $request)
    {
        $meme = Meme::firstWhere('id', $request->id);
        $meme->name = $request->name;
        $meme->description = $request->description;
        $meme->article = $request->article;

        $meme->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Meme  $meme
     * @return \Illuminate\Http\Response
     */
    public function destroy(Meme $meme)
    {
        //
    }
}
