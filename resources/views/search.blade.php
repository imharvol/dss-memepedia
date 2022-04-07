@extends('layouts.master')
@section('title', 'Search')

@section('head')
<link rel="stylesheet" href="{{URL('css/search.css')}}">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

@section('content')
@parent
<div class="search-container">
  <form action="">
    <input class="search-input" type="text" placeholder="Busqueda ..." name="q" id="q" value="{{$q}}">
    <button type="submit"><i class="fa fa-search"></i></button>
  </form>
</div>

<div class="search-results">
  @foreach ($memes as $meme)
  <div class="meme-result">
    <a href="{{route('meme.show', ['memeId' => $meme['id']])}}">
      <h2>{{$meme['name']}}</h2>
    </a>
    <p>{{$meme['description']}}</p>
  </div>
  @endforeach
</div>
@endsection