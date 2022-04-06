@extends('layouts.master')
@section('title', 'Iniciar Sesión')

@section('head')
<link rel="stylesheet" href="{{URL('css/inicio-sesion.css')}}">
@endsection

@section('content')
@parent

<div class="textoBienvenida">
        <div class="MEMEpedia">
            <scap>Noticias</scap>
        </div>
</div>

<div class="subRectangulo">
     <div class="rectanguloPublicacion layout">
         <div class="body">
         	 <button class="boton" name="titulo" type="button" id="titulo">TituloRandom</button>
             <scap class="autor">AutorRandom123</scap> <scap class="fecha">17/03/2022</scap>
             <div style="max-width: 100%;">
                 <img class="meme" src="https://c.tenor.com/9nZ5fdxEyQQAAAAC/chatting-twich-emote-xqc-asmongold-chat-tyler1.gif">
             </div>
         </div>
     </div>  
     <div class="rectanguloPublicacion layout">
            <div class="body">
            	<button class="boton" name="titulo" type="button" id="titulo">TituloRandom</button>
                <scap class="autor">AutorRandom123</scap> <scap class="fecha">17/03/2022</scap>
                <div style="max-width: 100%;">
                    <img class="meme" src="https://c.tenor.com/9nZ5fdxEyQQAAAAC/chatting-twich-emote-xqc-asmongold-chat-tyler1.gif">
                </div>
            </div>
     </div>
</div>

@endsection