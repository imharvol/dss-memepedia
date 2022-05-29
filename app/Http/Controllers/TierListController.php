<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Tag;
use App\Models\TierList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TierListController extends Controller
{
    public function index()
    {
        $tierlists = TierList::all();

        return view('tierlist-buscar', ['tierlists' => $tierlists]);
    }

    public function create()
    {
        return view('tierlist-crear');
    }

    public function store(Request $request)
    {
        //validación
        $request->validate([
            'name' => 'required|regex:/^.*[A-Za-z0-9 ]$/',//alfanumerico
            'tags' => 'required|regex:/^\w+((,\w+)+)?$/',//lista de alfanumericos separada por comas(sin espacios)
            'memes' => 'required|min:1',
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

        $tierlist = new TierList();
        $tierlist->name = $request->name;
        $tierAuthor = Auth::user(); // En la implementación actual, nos da igual el usuario

        // Asociamos el usuario creador
        $tierlist->author()->associate($tierAuthor);
        $tierlist->visits = 0;
        $tierlist->save();

       // Asociamos las tags del meme
        foreach ($tags as $tag) 
        {
            $tierlist->tags()->save($tag);
        }

        // Guardamos las imagenes
        $memes = $request->file('memes');
        foreach ($memes as $index=>$meme)
            $path = $meme->storeAs('public/tierlist/'.$tierlist->id,$index );

        // Redirigimos al usuario a la pagina del meme que acaba de crear
        return redirect(route('tierlist.jugar', ['tierlistId' => $tierlist->id]));
    }

    public function jugar($tierlistId)
    {
        $tierlist = TierList::firstWhere('id', $tierlistId);
            
        //return $meme->likes;

        if ($tierlist) {
            return view('tierlist-jugar', ['tierlist' => $tierlist]);
        } else {
            return view('error-page', ['error_message' => 'No se ha encontrado la Tierlist!']);
        }
    }

    public function delete(Request $request)
    {
        $tierlist = TierList::firstWhere('id', $request->id);
        $tierlist->delete();
        return back();
    }

    public function update(Request $request)
    {
        $tierlist = TierList::firstWhere('id', $request->id);
        $tierlist->name = $request->name;
        $tierlist->description = $request->description;

        $newAuthor = User::firstWhere('username', $request->authorUsername);
        if ($newAuthor == null) {
            return view('error-page', ['error_message' => 'No se ha encontrado a ningun usuario con username <' . $request->authorUsername . '>']);
        }
        $tierlist->author()->associate($newAuthor);

        $tierlist->save();

        return back();
    }


}
