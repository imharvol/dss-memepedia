@extends('layouts.master')
@section('title', 'User Profile')

@section('head')
<link rel="stylesheet" href="{{URL('css/user-list.css')}}">
@endsection

@section('content')
@parent

<h1>Lista de Memes</h1>

<table>
  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Description</th>
    <th>Author Id</th>
    <th>Created At</th>
    <th>Updated At</th>
    <th>Tags</th>
  </tr>

  @foreach ($memes as $meme)
  <tr>
    <td><a href="{{route('meme.show', ['memeId' => $meme->id])}}">{{$meme->id}}</a></td>
    <td>{{$meme->name}}</td>
    <td>{{$meme->description}}</td>
    <td><a href="{{route('search', ['q' => $meme->author->username])}}">{{$meme->author->username}}</a></td>
    <td>{{$meme->created_at}}</td>
    <td>{{$meme->updated_at}}</td>
    <td>
      @foreach ($meme->tags as $tag)
      <span>&#60;<a href="{{route('search', ['q' => $tag->name])}}">{{$tag->name}}</a>&#62;</span>
      @endforeach
    </td>
  </tr>
  @endforeach
</table>

@endsection