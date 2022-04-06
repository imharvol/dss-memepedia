@extends('layouts.master')
@section('title', 'Memepedia')

@section('head')
<link rel="stylesheet" href="{{URL('css/index.css')}}">
@endsection

@section('content')
@parent
<?php include $_SERVER['DOCUMENT_ROOT'].'/../resources/views/layouts/bienvenidosybarra.blade.php'; ?> <!-- Unificar la barra y título -->


    <div class="subRectangulo row p-0 m-0">
        <div class="mensajeMemes row pl-3">
            <scap>MEMES destacados</scap>
        </div>
        <div class="rectanguloPublicacion">
            <scap class="autor">AutorRandom123</scap> <scap class="fecha">17/03/2022</scap>
            <div>
                <img src="https://c.tenor.com/9nZ5fdxEyQQAAAAC/chatting-twich-emote-xqc-asmongold-chat-tyler1.gif">
            </div>
            <div class="comentarioFoto">
                <input type=image src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTDsKvKUVOqbJsF5oD4KXaBa_hoEBiYLQrY1A&usqp=CAU" width="30" height="30">
                <scap class="fecha">12 comentarios</scap>
                <input type=image src="https://www.nicepng.com/png/detail/119-1193195_white-left-arrow-png-png-white-arrow-left.png" width="30" height="30" style="transform:rotate(180deg);">
                <scap class="fecha">Compartir</scap>
            </div>
        </div>   
    </div>
</div>

@endsection