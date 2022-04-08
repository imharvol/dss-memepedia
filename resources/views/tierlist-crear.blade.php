@extends('layouts.master')
@section('title', 'Meme Tierlist')

@section('head')
<link rel="stylesheet" href="{{URL('css/tierlist-crear.css')}}">
@endsection

@section('content')
@parent
<div class="TierList">
        <span>Crea tu Tier List</span>
</div>
<div class="CrearTierList">
    <div class="center">
        <div class="fuenteTexto">
            <scap style="text-align:left">Título</scap>
        </div>
        <div class="barraDatos">
            <form action="/action_page.php">
                <input class="textbox" placeholder="Título" size="50">
            </form>
        </div>
        <div class="fuenteTexto">
            <scap>Etiquetas</scap> <scap style="font-size: 14px"> (separadas por comas { , }) </scap>
        </div>
        <div class="barraDatos">
            <form action="/action_page.php">
                <input class="textbox" placeholder="Etiquetas" size="50">
            </form>
        </div>
        <div class="fuenteTexto">
            <scap>Seleccionar memes</scap>
        </div>
        <div class="fuenteTexto">
            <form action="/action_page.php">
                <img src="https://blog.cdn.own3d.tv/resize=fit:crop,width:600,height:600/uziu0uaGQ0K8EQFJGoOo" width="166" height="141">
                <div class="espaciadoMinimo">
                    <input type="file" id="files" name="files" multiple>
                </div>
            </form>
        </div>
        <div class="espacio"></div>
    </div>
        <div>
            <form action="/action_page.php">
                <input class="boton" type="submit" value="Finalizar">
            </form>
        </div>
</div>
@endsection