@extends('layouts.master')
@section('title', 'Iniciar Sesión')

@section('head')
<link rel="stylesheet" href="{{URL('css/inicio-sesion.css')}}">
@endsection

@section('content')
@parent

<div class="textoEntrada">
	<h2> Panel de Control - Evaluation </h2>
</div>

<div class="fondo">
	<div class="recuadroUsuario">
        <div class="fuenteTexto" contenteditable="true">
            <h3> 1. </h3><h3>Muy buenooo jaja</h3>
        </div>
        <input type="image" name="ok1" id="ok1" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/Green_tick.svg/600px-Green_tick.svg.png">
        <input type="image" name="delete1" id="delete1" src="https://cdn0.iconfinder.com/data/icons/social-messaging-ui-color-shapes/128/trash-circle-red-512.png">
    </div>
    <div class="recuadroUsuario">
        <div class="fuenteTexto" contenteditable="true">
            <h3> 2. </h3><h3>Está bien</h3>
        </div>
        <input type="image" name="ok2" id="ok2" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/Green_tick.svg/600px-Green_tick.svg.png">
        <input type="image" name="delete2" id="delete2" src="https://cdn0.iconfinder.com/data/icons/social-messaging-ui-color-shapes/128/trash-circle-red-512.png">
    </div>
    <div class="recuadroUsuario">
        <div class="fuenteTexto" contenteditable="true">
            <h3> 3. </h3><h3>looool</h3>
        </div>
        <input type="image" name="ok3" id="ok3" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/Green_tick.svg/600px-Green_tick.svg.png">
        <input type="image" name="delete3" id="delete3" src="https://cdn0.iconfinder.com/data/icons/social-messaging-ui-color-shapes/128/trash-circle-red-512.png">
    </div>
</div>

@endsection