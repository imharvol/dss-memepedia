@extends('layouts.master')
@section('title', 'Panel Control Meme')

@section('head')
<link rel="stylesheet" href="{{URL('css/panel-control-meme.css')}}">
@endsection

@section('content')
@parent
<h1 class="page-title"> Panel de Control - Memes </h1>

@foreach ($memes as $meme)
<div class="user-box">
    <a href="{{route('meme.show', ['memeId' => $meme->id])}}">
        <h1 class="user-nick-header">{{$meme->id}} - {{$meme->name}}</h1>
    </a>

    <form action="{{route('meme.delete')}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="text" name="id" id="id" value="{{$meme->id}}" hidden>
        <input class="input-button" type="submit" value="Borrar meme">
    </form>

    <form action="{{route('meme.update')}}" method="POST">
        @csrf
        @method('POST')
        <div class="wrapper">
            <input type="text" name="id" id="id" value="{{$meme->id}}" hidden>
            <div class="wrapper-item">
                <label for="nick">Name:</label><br>
                <input type="text" name="name" id="name" value="{{$meme->name}}">
            </div>
            <div class="wrapper-item">
                <label for="nick">Description:</label><br>
                <input type="text" name="description" id="description" value="{{$meme->description}}">
            </div>
            <div class="wrapper-item">
                <label for="nick">Author:</label><br>
                <input type="text" name="author" id="author" value="{{$meme->author}}">
            </div>
            <div class="wrapper-item">
                <label for="nick">Article:</label><br>
                <input type="text" name="article" id="article" value="{{$meme->article}}">
            </div>
        </div>
        <input type="submit" value="Guardar meme">
    </form>
</div>
@endforeach


@endsection