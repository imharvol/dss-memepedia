@extends('layouts.master')
@section('title', 'Meme Tierlist')

@section('head')
<link rel="stylesheet" href="{{URL('css/tierlist.css')}}">
@endsection

@section('content')
@parent
    <div class="TierList">
        <span>Tier List</span>
    </div>

    <div class="lineaHorizontal1"> </div>

    <div class="botonesBuscarCrear">
        <a href="{{route('tierlist-buscar')}}">
            <button >
                <i class='bx bx-search-alt-2'></i>
                <h2>Buscar</h2>
                <div class="parrafo">
                    <span >Buscar entre todas las Tier List y encuentra la que más te guste de entre todas ellas. Hay muchas!</span>
                </div>
            </button>
        </a>
        <a href="{{route('tierlist-crear')}}">
            <button>
                <i class='bx bx-list-ul'></i>   
                <h2>Crear</h2>
                <div class="parrafo">
                    <span class="parrafo">Crea tu Tier List a partir de tus memes favoritos para que otros usuarios puedan jugarla</span>
                </div>
                    
            </button>    
        </a> 
    </div>
</div>
@endsection