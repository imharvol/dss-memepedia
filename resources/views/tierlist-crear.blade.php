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
<div class="row mt-3" align="center">
    {{-- Error messages --}}
    @if (count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif
</div>
<div class="CrearTierList">
    <div class="center">
        <form action="{{route('tierlist.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="fuenteTexto">
                <scap style="text-align:left">Nombre del Tier List</scap>
            </div>
            <div class="barraDatos">
                    <input class="textbox" name="name" value="{{ old('name') }}" placeholder="Nombre del Tier List" size="50">
            </div>
            <div class="fuenteTexto">
                <scap>Etiquetas</scap> <scap style="font-size: 14px"> (separadas por comas { , }) </scap>
            </div>
            <div class="barraDatos">
                    <input class="textbox" name="tags" value="{{ old('tags') }}" placeholder="Etiquetas" size="50">
            </div>
            <div class="fuenteTexto">
                <scap>Seleccionar memes</scap>
            </div>
            <div class="fuenteTexto">
                    <img src="https://blog.cdn.own3d.tv/resize=fit:crop,width:600,height:600/uziu0uaGQ0K8EQFJGoOo" width="166" height="141">
                    <div class="espaciadoMinimo">
                        <input type="file" id="files" accept="image/png" name="memes[]" multiple required>
                    </div>
            </div>
            <div class="espacio"></div>
        </div>
            <div>
                    <input class="boton" type="submit" value="Finalizar">
            </div>
        </form><!-- -->
</div>
@endsection