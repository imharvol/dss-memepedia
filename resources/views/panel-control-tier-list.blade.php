@extends('layouts.master')
@section('title', 'Iniciar Sesión')

@section('head')
<link rel="stylesheet" href="{{URL('css/inicio-sesion.css')}}">
@endsection

@section('content')
@parent

<div class="textoEntrada">
	<h2> Panel de Control - TierList </h2>
</div>

<div class="fondo">
	<div class="recuadroUsuario">
        <div class="fuenteTexto">
        	<div class="nombre" contenteditable="true">
            	<h3> 1. </h3><h3>TierPepos</h3>
            </div>
        </div>
        <input type="image" name="delete1" id="delete1" src="https://cdn0.iconfinder.com/data/icons/social-messaging-ui-color-shapes/128/trash-circle-red-512.png">
    </div>
    <div class="recuadroUsuario">
        <div class="fuenteTexto" contenteditable="true">
            <h3> 2. </h3><h3>TierCC</h3>
        </div>
        <input type="image" name="delete2" id="delete2" src="https://cdn0.iconfinder.com/data/icons/social-messaging-ui-color-shapes/128/trash-circle-red-512.png">
    </div>
    <div class="recuadroUsuario">
        <div class="fuenteTexto" contenteditable="true">
            <h3> 3. </h3><h3>TierShinChan</h3>
        </div>
        <input type="image" name="delete3" id="delete3" src="https://cdn0.iconfinder.com/data/icons/social-messaging-ui-color-shapes/128/trash-circle-red-512.png">
    </div>
</div>

@endsection