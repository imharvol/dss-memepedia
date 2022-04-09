@extends('layouts.master')
@section('title', 'Crear Cuenta')

@section('head')
<link rel="stylesheet" href="{{URL('css/meme.css')}}">
@endsection

@section('content')
@parent
<div class="meme-contents">
  <h1 class="meme-name">{{$meme->name}} <span class="meme-id">({{$meme->id}})</span></h1>
  
  <img src="{{asset('storage/memes/'.(string)$meme->id)}}" class="meme-photo">

  <div class="camp-container">
    <span class="camp-title">Tags:</span>

    <div class="tags-container">
      @foreach ($meme->tags as $tag) 
        <strong><a class="tag-element" href="{{route('search', ['q' => $tag->name])}}">{{$tag->name}}</a></strong>
      @endforeach
    </div>
  </div>

  <div class="camp-container">
    <span class="camp-title">Autor:</span>
    <strong><a class="tag-element" href="{{route('user.show', ['username' => $meme->author->username])}}">{{$meme->author->username}}</a></strong>
  </div>
  
  <div class="camp-container">
    <span class="camp-title">Descripción:</span>
    <p class="meme-description">{{$meme->description}}</p>
  </div>
</div>
@endsection