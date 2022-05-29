@extends('layouts.master')
@section('title', 'Crear Noticia | Memepedia')

@section('head')
<link rel="stylesheet" href="{{URL('css/crear-noticia.css')}}">
@endsection

@section('content')
@parent
<div class="col-2"></div>
<div class="rectanguloCrearMeme col-6">
  <div class="textoCrearMeme row">
    <span>Sube tu Noticia</span>
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

    <form action="{{route('news.store')}}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="col p-3" name="formContent">
        <div class="mb-3 row">
          <label class="label" for="title">Título</label>
          <input type="textbox" name="title" value="{{ old('title') }}" id="title" placeholder="Titulo" size="50" auto>
        </div>
        <div class="mb-3 row">
          <label for="contents">Contenido</label>
          <textarea name="contents" id="contents" value="{{ old('contents') }}" placeholder="Contenido de la noticia" rows="8"></textarea>
        </div>

        <label for="news-photo">Subir imagen (formatos jpg y png) </label>
        <input type="file" id="news-photo" name="photo" accept="image/png, image/jpeg" required>

        <div class="botonInicio" align="center">
          <input class="boton" type="submit" name="btnSubirMeme" id="btnSubirMeme" value="Subir">
        </div>
      </div>

    </form>
  </div>
</div>
<div class="col-2"></div>
@endsection