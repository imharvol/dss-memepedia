@extends('layouts.master')
@section('title', 'Entrada')

@section('head')
<link rel="stylesheet" href="{{URL('css/entrada.css')}}">
@endsection

@section('content')
@parent
<div style="margin-left: 1vw;">
    <div class="layout2">
        <div class="textoBienvenida sidebar">
            <scap>Bienvenidos a </scap>
            <div class="MEMEpedia" style="display:inline">
                <scap>MEMEpedia</scap>
            </div>
            <div style="espacio"></div>
            <scap>la enciclopedia de memes oficial</scap>
            
        </div>
        <div class="search-container body" align=right>
                <form id="form"> 
                    <input class="barraBusqueda" type="search" id="query" placeholder=" Buscar">
                </form>
            </div>
    </div>
</div>
    <div class="subRectangulo">
        <div class="cosaBuscada">
            <h2 style="margin-left: 1vw">CosaBuscada</h2>
        </div>
        <div class="espacio"></div>
    </div>
<div style="margin-left: 1vw;">
    <section class="layout">
        <div class="sidebar" style="background-color:#ffffff;">
            <scap>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id. Sed rhoncus, tortor sed eleifend tristique, tortor mauris molestie elit, et lacinia ipsum quam nec dui. Quisque nec mauris sit amet elit iaculis pretium sit amet quis magna. Aenean velit odio, elementum in tempus ut, vehicula eu diam. Pellentesque rhoncus aliquam mattis. Ut vulputate eros sed felis sodales nec vulputate justo hendrerit. Vivamus varius pretium ligula, a aliquam odio euismod sit amet. Quisque laoreet sem sit amet orci ullamcorper at ultricies metus viverra. Pellentesque arcu mauris, malesuada quis ornare accumsan, blandit sed diam.</scap>
        </div>
        <div class="body" align="center">
            <div style="background-color:#903749;width:80%;">
                <h2>CosaBuscada</h2>
                <div class="fotoCosaQueBuscas">
                    <img src="https://i.kym-cdn.com/photos/images/newsfeed/001/734/410/676.jpg" alt="pepe">
                </div>
                <div class="etq" align=left>
                    <h2>Etiquetas: </h2>
                    <p class="etiquetas" style="margin-top:2vh">jaja,jeje,sojo</p>
                </div>
                <div class="espacio"></div>
            </div>

        </div>
    </section>
</div>

@endsection