@extends('layouts.master')
@section('title', 'Crear Meme')

@section('head')
<link rel="stylesheet" href="{{URL('css/crear-meme.css')}}">
@endsection

@section('content')
@parent
<div class="rectanguloCrearMeme container">
    <div  class="textoCrearMeme row">
        <span>Sube tu MEME</span>
    </div>
    <div class="row">
        <div class="col pl-4 pr-4">
        <hr style="height:4px;color:black">
        </div>  
    </div>
    <div class="row">
        <form action="/action_page.php">
            <div class="col">
                <div class="mb-3">
                <label class="label" for="tituloMeme">Título</label>
                <input type="textbox" name="tituloMeme" id="tituloMeme" placeholder="Título" size="50" auto>
                </div>
                <div class="mb-3">
                    <label for="">Etiquetas</label>
                    <input type="textbox" name="etiquetasMeme" id="etiquetasMeme" placeholder="Etiquetas (separadas por comas)" size="50">
                </div>  
                <label>Subir imagen(formatos jpg, tif y png. Máx. 200kB) </label> 
                <br>
                <img src="url" alt="icono imagen"> 
                <div class="botonInicio" align="center">
                    <input class="boton" type="submit" name="btnSubirMeme" id="btnSubirMeme" value="Subir">
                </div>
            </div>
                
        </form>
    </div>
    
</div>
@endsection