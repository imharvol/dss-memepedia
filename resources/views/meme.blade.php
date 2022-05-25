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

  @if( Auth::check() )
  <div class="like-container">
    <form action="" method="POST">
      @csrf
      @method('POST')
      <input class="like-input" type="submit" value="👍 Me gusta">
    </form>
  </div>
  @endif

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

  @if( Auth::check() )
  <div class="camp-container evaluation-box">
    <span id="comentarios" class="camp-title">Comentar:</span>
    <form action="{{route('evaluation.store')}}" method="POST">
      @csrf
      @method('PUT')

      <input name="memeId" value="{{$meme->id}}" hidden>

      <textarea class="evaluation-comment" name="comment"></textarea>

      <div class="evaluation-comment">
        <label for="rating-input">Puntuación:</label>
        <input id="rating-input" name="rating" type="number" min="0" max="10" step="0.1" value="5" required>

        <input class="submit-comment" type="submit" value="Comentar">
      </div>

    </form>
  </div>
  @endif

  <hr class="camp-separator">

  <div class="camp-container evaluation-box">
    <span class="camp-title">Comentarios:</span>

    @foreach ($meme->evaluations as $evaluation)
    <div class="comment-container">
      <span class="comment-author">{{$evaluation->author->username}}</span> | <span class="comment-rating">{{$evaluation->rating}} puntos</span>
      <p class="comment-text">{{$evaluation->comment}}</p>
    </div>
    @endforeach
  </div>
</div>
@endsection