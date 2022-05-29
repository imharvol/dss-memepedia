@extends('layouts.master')
@section('title', 'Iniciar Sesión')

@section('head')
<link rel="stylesheet" href="{{URL('css/panel-control-news.css')}}">
@endsection

@section('content')
@parent

<h1 class="page-title"> Panel de Control - News </h1>

<form action="{{route('news.create')}}" method="GET">
            @csrf
            @method('GET')


            <div class="botonInicio" align="center">
                    <input class="boton" type="submit" name="btnSubirNew" id="btnSubirNew" value="Añadir notícia">
            </div>
</form>

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
        <div class="wrapper row">
            <input type="text" name="id" id="id" value="{{$new->id}}" hidden>
            <div class="wrapper-item row-6">
                <label for="titulo">Title:</label><br>
                <input type="text" name="titulo" id="titulo" value="{{$new->title}}">
            </div>
            <div class="wrapper-item">
                <label for="date">Date:</label><br>
                <input type="text" name="date" id="date" value="{{$new->created_at}}">
            </div>

        </div>
        <div class="row wrapper">
            <div class="wrapper-item mb-3">
                <label for="contents">Contenido:</label><br>
                <input type="textarea" rows="5" cols="50" name="contents" id="contents" value="{{$new->contents}}">
            </div>
        </div>
        <input type="submit" value="Guardar Noticia">
    </form>

</div>
@endforeach

@endsection