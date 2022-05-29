@extends('layouts.master')
@section('title', 'Crear Meme')

@section('head')
<link rel="stylesheet" href="{{URL('css/crear-meme.css')}}">
@endsection

@section('content')
@parent
<div class="col-2"></div>
<div class="rectanguloCrearMeme col-6">
    <div class="textoCrearMeme row">
        <span>Sube tu MEME</span>
    </div>
    <div class="lineaHorizontal1"> </div>
    <div class="row">
        {{-- Error messages --}}
        @if (count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
        <form action="{{route('meme.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="col p-3" name="formContent">
                <div class="mb-3 row">
                    <label class="label" for="name">Título</label>
                    <input type="textbox" name="name" value="{{ old('name') }}" id="name" placeholder="Nombre" size="50" auto>
                </div>
                <div class="mb-3 row">
                    <label for="tags">Etiquetas (separadas por comas)</label>
                    <input type="textbox" name="tags" value="{{ old('tags') }}" id="tags" placeholder="Etiquetas" size="50">
                </div>
                <div class="mb-3 row">
                    <label for="description">Descripción</label>
                    <textarea name="description" id="description" value="{{ old('description') }}" placeholder="Descripción del meme" rows="8"></textarea>
                </div>

                <label for="meme-photo">Subir imagen (formatos jpg y png) </label>
                <input type="file" id="meme-photo" name="photo" accept="image/png, image/jpeg" required>

                <!-- <img src="url" alt="icono imagen">  -->
                <div class="botonInicio" align="center">
                    <input class="boton" type="submit" name="btnSubirMeme" id="btnSubirMeme" value="Subir">
                </div>
            </div>

        </form>
    </div>
</div>
<div class="col-2"></div>
@endsection