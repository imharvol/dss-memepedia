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
    @foreach($tierlists as $index=>$tierlist)

        <div align=center>
            <a href="{{route('tierlist.jugar', ['tierlistId' => $tierlist->id])}}">
                <input type="image" src="{{asset('storage/tierlist/'.(string)$tierlist->id.'/'.(String)0)}}" class="Imagenes">  
                
                <span>{{$tierlist->name}}</span>
            </a>
        </div>
    @endforeach
    </section>

@endsection