@extends('layouts.master')
@section('title', 'Meme Tierlist')

@section('head')
<link rel="stylesheet" href="{{URL('css/tierlist-buscar.css')}}">
@endsection

@section('content')
@parent

<div align=center>
    <div class="TierList">
            <span>Tier List</span>
    </div>
    <div class="lineaHorizontal1"> </div>

    <div class="botonBuscar">
    <form id="form"> 
     	 <input class="barraBusqueda" type="search" id="query" placeholder="  Introduce etiqueta">
    </form>
</div>
</div>
    <section class="layout">
        <div align=center>
            <input type="image" id=elemento1 src="https://upload.wikimedia.org/wikipedia/commons/e/ee/Sample_abc.jpg" class="Imagenes">  
        </div>
        <div align=center>
            <input type="image" id=elemento1 src="https://upload.wikimedia.org/wikipedia/commons/e/ee/Sample_abc.jpg" class="Imagenes">  
        </div>
        <div align=center>
            <input type="image" id=elemento1 src="https://upload.wikimedia.org/wikipedia/commons/e/ee/Sample_abc.jpg" class="Imagenes">  
        </div>
        <div align=center>
            <input type="image" id=elemento1 src="https://upload.wikimedia.org/wikipedia/commons/e/ee/Sample_abc.jpg" class="Imagenes">  
        </div>
        <div align=center>
            <input type="image" id=elemento1 src="https://upload.wikimedia.org/wikipedia/commons/e/ee/Sample_abc.jpg" class="Imagenes">  
        </div>
        <div align=center>
            <input type="image" id=elemento1 src="https://upload.wikimedia.org/wikipedia/commons/e/ee/Sample_abc.jpg" class="Imagenes">  
        </div>
        <div align=center>
            <input type="image" id=elemento1 src="https://upload.wikimedia.org/wikipedia/commons/e/ee/Sample_abc.jpg" class="Imagenes">  
        </div>
        
    </section>

@endsection