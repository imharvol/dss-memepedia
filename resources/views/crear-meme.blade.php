@extends('layouts.master')
@section('title', 'Crear Meme')

@section('head')
<link rel="stylesheet" href="{{URL('css/crear-meme.css')}}">
@endsection

@section('content')
@parent
<div class="col-2"></div>
<div class="rectanguloCrearMeme col-6">
        <div  class="textoCrearMeme row">
            <span>Sube tu MEME</span>
        </div>
        <div class="row">
            <div class="col pl-4 pr-4">
            <hr style="height:4px;color:black">
            </div>  
        </div>
        <div class="row">
            <form action="{{route('meme.store')}}" method="POST">
                @csrf
                @method('PUT')
                <div class="col p-3" name="formContent">
                    <div class="mb-3 row">
                    <label class="label" for="tituloMeme">Título</label>
                    <input type="textbox" name="tituloMeme" id="tituloMeme" placeholder="Título" size="50" auto>
                    </div>
                    <div class="mb-3 row">
                        <label for="">Etiquetas</label>
                        <input type="textbox" name="etiquetasMeme" id="etiquetasMeme" placeholder="Etiquetas (separadas por comas)" size="50">
                    </div>  
                    <div class="mb-3 row">
                        <label for="descripcionMeme">Descripción</label>
                        <textarea name="descripcionMeme" id="descripcionMeme" placeholder="Descripción del meme (max.500 caracteres)" maxlength="500" rows="8"></textarea>
                    </div> 
                    <label>Subir imagen(formatos jpg, tif y png. Máx. 200kB) </label> 
                    <img src="url" alt="icono imagen"> 
                    <div class="botonInicio" align="center">
                        <input class="boton" type="submit" name="btnSubirMeme" id="btnSubirMeme" value="Subir">
                    </div>
                </div>
                    
            </form>
    </div>
    
</div>
<div class="col-2"></div>
@endsection