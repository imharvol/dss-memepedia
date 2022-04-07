@extends('layouts.master')
@section('title', 'Ranking')

@section('head')
<link rel="stylesheet" href="{{URL('css/ranking.css')}}">
@endsection

@section('content')
@parent

    <div class="textoBienvenida">
        <div class="MEMEpedia">
            <scap>Ranking</scap>
        </div>
        <div>
            <scap>los memes mejor valorados</scap>
        </div>
    </div>

    <div class="clasificacion" align="center">
        <button>Semana</button>
        <button>Mes</button>
        <button>Año</button>
        <button>HISTÓRICO</button>
    </div>
    
    <div class="subRectangulo">
        <div class="rectanguloPublicacion layout">
            <div class="sidebar" style="margin-top: 7vh">
                <button class="botones"><span class="bx bx-up-arrow-alt"><i></i></span></button>
                <div class="upvotes">874k</div>
                <button class="botones"><span class="bx bx-down-arrow-alt"><i></i></span></button>
            </div>
            <div class="body">
                <scap class="autor">AutorRandom123</scap> <scap class="fecha">17/03/2022</scap>
                <div style="max-width: 100%;">
                    <img class="meme" src="https://c.tenor.com/9nZ5fdxEyQQAAAAC/chatting-twich-emote-xqc-asmongold-chat-tyler1.gif">
                </div>
                <div class="comentarioFoto">
                    <input class="botones" type=image src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTDsKvKUVOqbJsF5oD4KXaBa_hoEBiYLQrY1A&usqp=CAU" >
                    <scap class="fecha">12 comentarios</scap>
                    <input class="botones" type=image src="https://www.nicepng.com/png/detail/119-1193195_white-left-arrow-png-png-white-arrow-left.png" style="transform:rotate(180deg);">
                    <scap class="fecha">Compartir</scap>
                </div>
            </div>
        </div>

        <div class="rectanguloPublicacion layout">
            <div class="sidebar" style="margin-top: 7vh">
                <button class="botones"><span class="bx bx-up-arrow-alt"><i></i></span></button>
                <div class="upvotes">874k</div>
                <button class="botones"><span class="bx bx-down-arrow-alt"><i></i></span></button>
            </div>
            <div class="body">
                <scap class="autor">AutorRandom123</scap> <scap class="fecha">17/03/2022</scap>
                <div style="max-width: 100%;">
                    <img class="meme" src="https://c.tenor.com/9nZ5fdxEyQQAAAAC/chatting-twich-emote-xqc-asmongold-chat-tyler1.gif">
                </div>
                <div class="comentarioFoto">
                    <input class="botones" type=image src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTDsKvKUVOqbJsF5oD4KXaBa_hoEBiYLQrY1A&usqp=CAU" >
                    <scap class="fecha">12 comentarios</scap>
                    <input class="botones" type=image src="https://www.nicepng.com/png/detail/119-1193195_white-left-arrow-png-png-white-arrow-left.png" style="transform:rotate(180deg);">
                    <scap class="fecha">Compartir</scap>
                </div>
            </div>
            
        </div>
           
    </div>
    
    

@endsection