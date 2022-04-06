@extends('layouts.master')
@section('title', 'Crear Meme')

@section('head')
<link rel="stylesheet" href="{{URL('css/crear-meme.css')}}">
@endsection

@section('content')
@parent
<div class="rectanguloCrearMeme">
    <div class="textoCrearMeme">
        <span>Sube tu MEME</span>
        <div class="lineaHorizontal1"></div><!-- No sé cómo hacer que se quede centrada sin que el texto quede centrado también -->
    </div>
    <form action="/action_page.php">
            <label class="label" for="tituloMeme">Título</label>
            <input type="textbox" name="tituloMeme" id="tituloMeme" class="textbox" placeholder="Título" size="50" auto>
            <label for="">Etiquetas</label>
            <input type="textbox" name="etiquetasMeme" id="etiquetasMeme" class="textbox" placeholder="Etiquetas (separadas por comas)" size="50">  
            <label>Subir imagen(formatos jpg, tif y png. Máx. 200kB) </label> 
            <br>
            <img src="url" alt="icono imagen"> 
            <div class="botonInicio">
                <input class="boton" type="submit" name="btnSubirMeme" id="btnSubirMeme" value="Subir">
            </div>
    </form>
</div>
@endsection