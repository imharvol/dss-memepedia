<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Meme;
use App\Models\Tag;
use App\Models\Like;
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
        //validación
        $request->validate([
            'name' => 'required|regex:/^.*[A-Za-z0-9 ]$/', //alfanumerico
            'tags' => 'required|regex:/^\w+((,\w+)+)?$/', //lista de alfanumericos separada por comas(sin espacios)
            'description' => 'required|min:10',
        ]);

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
        $memeAuthor = Auth::user();

        // Asociamos el usuario creador
        $meme->author()->associate($memeAuthor);

        $meme->save();

        // Asociamos las tags del meme
        foreach ($tags as $tag) {
            $meme->tags()->save($tag);
        }

        // Comprobamos que esta la imagen. En principio, en un uso normal de la página esta condicion nunca se cumpliría ya que el campo de la foto esta puesto como required.
        if ($request->file('photo') == null) return view('error-page', ['error_message' => '¡Debes adjuntar una imagen con el meme!']);

        // Guardamos la imagen
        $path = $request->file('photo')->storeAs('public/memes', $meme->id);

        // Redirigimos al usuario a la pagina del meme que acaba de crear
        return redirect(route('meme.show', ['memeId' => $meme->id]));
    }

    public function show($memeId)
    {
        $meme = Meme::firstWhere('id', $memeId);

        //return $meme->likes;

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

    public function like(Request $request)
    {
        // Almacenar meme en la BD
        $like = new Like();
        $likeAuthor = Auth::user();
        $like->author()->associate($likeAuthor);
        $likeMeme = Meme::find($request->memeId);
        $like->meme()->associate($likeMeme);
        $like->save();

        return back();
    }

    public function dislike(Request $request)
    {
        $dislikeAuthor = Auth::user();
        $likeMeme = Meme::find($request->memeId);
        $like = $likeMeme->likes()->firstWhere('author_id', $dislikeAuthor->id);

        if ($like) {
            $like->delete();
        }

        return back();
    }
}
