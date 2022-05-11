<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Meme;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemeController extends Controller
{
    public function index()
    {
        $memes = Meme::all();

        return view('meme-list', ['memes' => $memes]);
    }

    public function create()
    {
        return view('crear-meme');
    }

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
        $memeAuthor = User::currentUser(); // En la implementación actual, nos da igual el usuario

        // Asociamos el usuario creador
        $meme->author()->associate($memeAuthor);

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

    public function update(Request $request)
    {
        $meme = Meme::firstWhere('id', $request->id);
        $meme->name = $request->name;
        $meme->description = $request->description;

        $newAuthor = User::firstWhere('username', $request->authorUsername);
        if ($newAuthor == null) {
            return view('error-page', ['error_message' => 'No se ha encontrado a ningun usuario con username <' . $request->authorUsername . '>']);
        }
        $meme->author()->associate($newAuthor);

        $meme->save();

        return back();
    }

    public function like(Request $request, $memeId)
    {
        $user = User::firstWhere('id', Auth::user()->id);
        return $user->where('meme_id', $memeId);
    }
}
