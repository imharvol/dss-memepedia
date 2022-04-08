@extends('layouts.master')
@section('title', 'Entrada')

@section('head')
<link rel="stylesheet" href="{{URL('css/entrada.css')}}">
@endsection


@section('content')
@parent
<?php include $_SERVER['DOCUMENT_ROOT'] . '/../resources/views/layouts/bienvenidosybarra.blade.php'; ?>
<!-- Unificar la barra y título -->

<div class="subRectangulo">
    <div class="cosaBuscada">
        <h2 style="margin-left: 1vw">{{$meme->name}}</h2>
    </div>
    <div class="espacio"></div>
</div>
<div style="margin-left: 1vw;">
    <section class="layout">
        <div class="sidebar" style="background-color:#ffffff;">
            <scap>{{$meme->description}}</scap>
        </div>
        <div class="body" align="center">
            <div style="background-color:#903749;width:80%;">
                <h2>{{$meme->name}}</h2>
                <div class="fotoCosaQueBuscas">
                    <img src="https://i.kym-cdn.com/photos/images/newsfeed/001/734/410/676.jpg" alt="pepe">
                </div>
                <div class="etq" align=left>
                    <h2>Etiquetas: </h2>
                    <p class="etiquetas" style="margin-top:2vh">
                        @foreach ($meme->tags as $tag)
                            {{$tag->name}}
                        @endforeach
                    </p>
                </div>
                <div class="espacio"></div>
            </div>

        </div>
    </section>
</div>

@endsection