<?php

namespace App\Http\Controllers;

use App\Models\News;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    public function create()
    {
        return view('crear-noticia');
    }

    public function index()
    {
        $news = News::orderBy('created_at', 'desc')->get();

        return view('noticias', ['news' => $news]);
    }

    public function show($newsId)
    {
        $news = News::firstWhere('id', $newsId);

        if ($news) {
            return view('noticia-entrada', ['news' => $news]);
        } else {
            return view('error-page', ['error_message' => 'Noticia no encontrada!']);
        }
    }

    public function store(Request $request)
    {
        // validación
        $request->validate([
            'title' => 'required|regex:/^.*[A-Za-z0-9 ]$/', //alfanumerico
            'contents' => 'required|min:10',
        ]);

        $news = new News();
        $news->title = $request->title;
        $news->contents = $request->contents;
        $newsAuthor = Auth::user();

        // Asociamos el usuario creador
        $news->author()->associate($newsAuthor);

        $news->save();

        // Comprobamos que esta la imagen. En principio, en un uso normal de la página esta condicion nunca se cumpliría ya que el campo de la foto esta puesto como required.
        if ($request->file('photo') == null) return view('error-page', ['error_message' => '¡Debes adjuntar una imagen con el meme!']);

        // Guardamos la imagen
        $path = $request->file('photo')->storeAs('public/news', $news->id);

        return redirect(route('news.show', ['newsId' => $news->id]));
    }
}
