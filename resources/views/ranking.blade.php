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
    <a href="{{route('ranking', ['r' => 'week'])}}">
        <button class="selected-button">Semana</button>
    </a>
    <a href="{{route('ranking', ['r' => 'month'])}}">
        <button>Mes</button>
    </a>
    <a href="{{route('ranking', ['r' => 'year'])}}">
        <button>Año</button>
    </a>
    <a href="{{route('ranking', ['r' => 'all'])}}">
        <button>HISTÓRICO</button>
    </a>
</div>

<div class="subRectangulo">
    @if( count($memes) <= 0 )
        <p class="no-memes">No se han publicado memes en este rango de dias!</p>
    @else

        @foreach ($memes as $meme)
        <div class="rectanguloPublicacion layout">
            <div class="body">
                <scap class="autor">{{$meme->author->username}}</scap>
                <scap class="fecha">{{$meme->created_at}}</scap>
                <a style="max-width: 100%;" href="{{route('meme.show', ['memeId' => $meme->id])}}">
                    <img class="meme" src="{{asset('storage/memes/'.(string)$meme->id)}}">
                </a>
                <div class="comentarioFoto" style="text-decoration: none;" href="{{route('meme.show', ['memeId' => $meme->id])}}">
                    <input class="botones" type=image src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fcdn.onlinewebfonts.com%2Fsvg%2Fimg_165452.png&f=1&nofb=1">
                    <scap class="fecha">{{count($meme->likes)}} me gusta</scap>
                    <input class="botones" type=image src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTDsKvKUVOqbJsF5oD4KXaBa_hoEBiYLQrY1A&usqp=CAU">
                    <scap class="fecha">{{count($meme->evaluations)}} comentarios</scap>
                </div>
            </div>
        </div>
        @endforeach
    @endif
</div>

<p class="pages">
    Páginas:
    @for ($i = 1; $i <= ceil($totalLength/$limit); $i++)
        <a class="{{ $i == $page ? 'selected-page' : null}}" href="{{route('ranking', ['l' => $limit, 'p' => $i, 'r' => $range])}}">{{ $i }}</a>
    @endfor
</p>

@endsection