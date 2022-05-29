<?php

namespace App\Http\Controllers;

use App\Models\News;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();

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
}
