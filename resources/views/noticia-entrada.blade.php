@extends('layouts.master')
@section('title', 'Noticia Entrada')

@section('head')
<link rel="stylesheet" href="{{URL('css/noticias-entrada.css')}}">
@endsection

@section('content')
@parent
<div class="MEMEpedia">
    <a href="{{route('news.list')}}">Noticias</a>
</div>

<div class="rectanguloTitulo">
    <div class="formato">
        <h3>{{$news->title}}</h3>
        <h5><a href="{{route('user.show', ['username' => $news->author->username])}}">{{$news->author->username}}</a> - {{$news->author->created_at}}</h4>
    </div>
</div>

<div style="margin-top:1vh;">
    <p style="float: right;"><img class="myImage" src="{{asset('storage/news/'.(string)$news->id)}}"></p>
    <p class="news-contents">{{$news->contents}}</p>
</div>
@endsection