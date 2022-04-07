@extends('layouts.master')
@section('title', 'Iniciar Sesión')

@section('head')
<link rel="stylesheet" href="{{URL('css/panel-control-news.css')}}">
@endsection

@section('content')
@parent

<h1 class="page-title"> Panel de Control - News </h1>

@foreach ($news as $new)
<div class="user-box">
    <h1 class="user-nick-header">{{$new->id}} - {{$new->title}}</h1>

    <form action="{{route('new.delete')}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="text" name="id" id="id" value="{{$new->id}}" hidden>
        <input class="input-button" type="submit" value="Borrar noticia">
    </form>

    <form action="{{route('new.update')}}" method="POST">
        @csrf
        @method('POST')
        <div class="wrapper">
            <input type="text" name="id" id="id" value="{{$new->id}}" hidden>
            <div class="wrapper-item">
                <label for="nick">Title:</label><br>
                <input type="text" name="titulo" id="titulo" value="{{$new->titulo}}">
            </div>
            <div class="wrapper-item">
                <label for="nick">Date:</label><br>
                <input type="text" name="date" id="date" value="{{$new->date}}">
            </div>
        </div>
        <input type="submit" value="Guardar Noticia">
    </form>
</div>
@endforeach

@endsection