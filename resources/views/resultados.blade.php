@extends('layouts.master')
@section('title', 'Resultados Búsqueda')

@section('head')
<link rel="stylesheet" href="{{URL('css/resultados.css')}}">
@endsection


@section('content')
@parent
<?php include $_SERVER['DOCUMENT_ROOT'].'/../resources/views/layouts/bienvenidosybarra.blade.php'; ?> <!-- Unificar la barra y título -->

<div class="subRectangulo row p-0 m-0">
        <div class="mensajeMemes row pl-3">
            <h2 style="text-align: left;">Resultados:
                <span id="buscada">Cosa que has buscado</span>
            </h2>
        </div>
        <div class="rectanguloPublicacion">
            <scap class="autor">AutorRandom123</scap> <scap class="fecha">17/03/2022</scap>
            <div>
                <img class="meme" src="https://c.tenor.com/9nZ5fdxEyQQAAAAC/chatting-twich-emote-xqc-asmongold-chat-tyler1.gif">
            </div>
            <div class="comentarioFoto">
                <input class="botones" type=image src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTDsKvKUVOqbJsF5oD4KXaBa_hoEBiYLQrY1A&usqp=CAU" width="30" height="30">
                <scap class="fecha">12 comentarios</scap>
                <input class="botones" type=image src="https://www.nicepng.com/png/detail/119-1193195_white-left-arrow-png-png-white-arrow-left.png" width="30" height="30" style="transform:rotate(180deg);">
                <scap class="fecha">Compartir</scap>
            </div>
        </div> 
        <div class="rectanguloPublicacion">
            <scap class="autor">AutorRandom123</scap> <scap class="fecha">17/03/2022</scap>
            <div>
                <img class="meme" src="https://c.tenor.com/9nZ5fdxEyQQAAAAC/chatting-twich-emote-xqc-asmongold-chat-tyler1.gif">
            </div>
            <div class="comentarioFoto">
                <input class="botones" type=image src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTDsKvKUVOqbJsF5oD4KXaBa_hoEBiYLQrY1A&usqp=CAU" width="30" height="30">
                <scap class="fecha">12 comentarios</scap>
                <input class="botones" type=image src="https://www.nicepng.com/png/detail/119-1193195_white-left-arrow-png-png-white-arrow-left.png" width="30" height="30" style="transform:rotate(180deg);">
                <scap class="fecha">Compartir</scap>
            </div>
        </div>   
</div>

@endsection