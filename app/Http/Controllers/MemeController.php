<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Meme;
use App\Models\Tag;
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
        // Parseamos las tags que vienen separadas por comas en forma de strings
        $tagsRaw = explode(',', $request->tags); // Separar por comas
        $tagsMapped = array_map(function ($tagRaw) { // Eliminar los espacios de delante y detras
            return strtolower(trim($tagRaw));
        }, $tagsRaw);
        $tagsString = array_filter($tagsMapped, function ($tagMapped) { // Eliminar las que se queden vacias
            return $tagMapped != '';
        });

        // Creamos un array de ORM tags para asignar al meme
        $tags = array();
        foreach ($tagsString as $tagString) {
            $tag = Tag::firstWhere('name', $tagString);
            if ($tag == null) { // Si no existe el tag, lo creamos
                $tag = new Tag();
                $tag->name = $tagString;
                $tag->save();
            }
            array_push($tags, $tag);
        }

        $meme = new Meme();
        $meme->name = $request->name;
        $meme->description = $request->description;
        $memeUser = User::first(); // En la implementación actual, nos da igual el usuario

        // Asociamos el usuario creador
        $meme->author()->associate($memeUser);

        $meme->save();

        // Asociamos las tags del meme
        foreach ($tags as $tag) {
            $meme->tags()->save($tag);
        }

        // Guardamos la imagen
        $path = $request->file('photo')->storeAs('public/memes', $meme->id);
        
        // Redirigimos al usuario a la pagina del meme que acaba de crear
        return redirect(route('meme.show', ['memeId' => $meme->id]));
    }

    public function show($memeId)
    {
        $meme = Meme::firstWhere('id', $memeId);

        if ($meme) {
            return view('meme', ['meme' => $meme]);
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
