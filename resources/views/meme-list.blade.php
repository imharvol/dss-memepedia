@extends('layouts.master')
@section('title', 'User Profile')

@section('head')
<link rel="stylesheet" href="{{URL('css/user-list.css')}}">
@endsection

@section('content')
@parent

<h1>Lista de  Memes</h1>

<table>
  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Description</th>
    <th>Creator Id</th>
    <th>Article</th>
    <th>Created At</th>
    <th>Updated At</th>
  </tr>

  @foreach ($memes as $meme)
  <tr>
    <td>{{$meme->id}}</td>
    <td>{{$meme->name}}</td>
    <td>{{$meme->description}}</td>
    <td>{{$meme->user_id}}</td>
    <td>{{$meme->article}}</td>
    <td>{{$meme->created_at}}</td>
    <td>{{$meme->updated_at}}</td>
  </tr>
  @endforeach
</table>

@endsection