@extends('layouts.master')
@section('title', 'Noticias')

@section('head')
<link rel="stylesheet" href="{{URL('css/noticias.css')}}">
@endsection

@section('content')
@parent

<div class="textoBienvenida">
    <div class="MEMEpedia">
        <scap>Noticias</scap>
    </div>
</div>

<div class="subRectangulo">
    @foreach ($news as $news_entry)
    <div class="rectanguloPublicacion layout">
        <div class="body">
            <a class="boton" name="titulo" type="button" id="titulo" href="{{route('news.show', ['newsId' => $news_entry->id])}}">{{$news_entry->title}}</a><br>
            <scap class="autor">{{$news_entry->author->username}}</scap>
            <scap class="fecha">{{$news_entry->created_at}}</scap>
            <div style="max-width: 100%;">
                <img class="meme" src="{{asset('storage/news/'.(string)$news_entry->id)}}">
            </div>
            <p style="color:white;">{{substr($news_entry->contents, 0, 200)}} ...</p>
        </div>
    </div>
    @endforeach
</div>

@endsection