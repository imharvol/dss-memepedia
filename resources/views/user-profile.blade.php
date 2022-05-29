@extends('layouts.master')
@section('title', "$user->username | Memepedia")

@section('head')
<link rel="stylesheet" href="{{URL('css/user-profile.css')}}">
@endsection

@section('content')
@parent
<div class="wrapper">
  <div class="left-menu">
    <h1 class="title-username">{{$user->username}}</h1>

    @if( $user->is_admin )
    <div class="admin-tag">
      Administrador
    </div>
    @endif

    <div class="center-image">
      <img class="user-photo" src="{{asset('storage/users/'.(string)$user->id)}}" alt="¡{{$user->username}} no tiene foto de perfil!">
    </div>

    <div class="user-attributes">
      <div class="user-attribute">Nombre: {{$user->name}}</div>
      <div class="user-attribute">Fecha de creación: {{$user->created_at}}</div>
      <div class="user-attribute">Email: {{$user->email}}</div>
    </div>
  </div>
  <div class="right-content">
    @if( $user->is_admin )
    <h2>Noticias</h2>
    <div class="items">
      @foreach ($user->news->slice(0, 5) as $news_entry)
      <div class="item">
        <img class="item-image" src="{{asset('storage/news/'.(string)$news_entry->id)}}">
        <a href="{{route('news.show', ['newsId' => $news_entry->id])}}">
          <h3 class="item-title">{{$news_entry->title}}</h3>
        </a>
        <span class="item-date">{{$news_entry->created_at}}</span>
      </div>
      @endforeach
    </div>

    <hr>
    @endif

    <h2>Memes</h2>
    <div class="items">
      @foreach ($user->memes->slice(0, 5) as $meme)
      <div class="item">
        <img class="item-image" src="{{asset('storage/memes/'.(string)$meme->id)}}">
        <a href="{{route('meme.show', ['memeId' => $meme->id])}}">
          <h3 class="item-title">{{$meme->name}}</h3>
        </a>
        <span class="item-date">{{$meme->created_at}}</span>
      </div>
      @endforeach
    </div>

    <hr>

    <h2>Tierlists</h2>
    <div class="items">
      @foreach ($user->tierlists->slice(0, 5) as $tierlist)
      <div class="item">
        <!-- <img class="item-image" src="{{asset('storage/tierlists/'.(string)$tierlist->id)}}"> -->
        <!-- <a href="{{route('meme.show', ['memeId' => $meme->id])}}"> -->
        <a>
          <h3 class="item-title">{{$tierlist->name}}</h3>
        </a>
        <span class="item-date">{{$tierlist->created_at}}</span>
      </div>
      @endforeach
    </div>
  </div>
</div>

@endsection