@extends('layouts.master')
@section('title', $meme->name.' | Memepedia')

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

  <div class="camp-container evaluation-box">
    <span class="camp-title">Comentar:</span>
    <form>
      <textarea class="evaluation-comment" name="comment"></textarea>

      <div class="evaluation-comment">
        <label for="rating-input">Puntuación:</label>
        <input id="rating-input" name="rating" type="number" min="0" max="10" step="0.1" required>
        <input class="submit-comment" type="submit" value="Comentar">
      </div>
      
    </form>
  </div>

  <hr class="camp-separator">

  <div class="camp-container evaluation-box">
    <span class="camp-title">Comentarios:</span>

    <div class="comment-container">
      <span class="comment-author">imharvol</span> | <span class="comment-rating">9.5 puntos</span>
      <p class="comment-text">Esto es una mierda</p>
    </div>

    <div class="comment-container">
      <span class="comment-author">imharvol</span> | <span class="comment-rating">1.1 puntos</span>
      <p class="comment-text">Esto es una mierda</p>
    </div>
  </div>
</div>
@endsection