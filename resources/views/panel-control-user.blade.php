@extends('layouts.master')
@section('title', 'Iniciar Sesión')

@section('head')
<link rel="stylesheet" href="{{URL('css/panel-control-user.css')}}">
@endsection

@section('content')
@parent

<div class="textoEntrada">
	<h2> Panel de Control - User </h2>
</div>

<div class="fondo">
	<div class="recuadroUsuario">
        <div class="fuenteTexto" contenteditable="true">
            <h3> 1. </h3><h3>juanillo54</h3>
        </div>
        <input type="image" name="redirect1" id="redirect1" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/56/Arrow_northeast.svg/640px-Arrow_northeast.svg.png">
        <input type="image" name="delete1" id="delete1" src="https://cdn0.iconfinder.com/data/icons/social-messaging-ui-color-shapes/128/trash-circle-red-512.png">
    </div>
    <div class="recuadroUsuario">
        <div class="fuenteTexto" contenteditable="true">
            <h3> 2. </h3><h3>pacoland</h3>
        </div>
        <input type="image" name="redirect2" id="redirect2" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/56/Arrow_northeast.svg/640px-Arrow_northeast.svg.png">
        <input type="image" name="delete2" id="delete2" src="https://cdn0.iconfinder.com/data/icons/social-messaging-ui-color-shapes/128/trash-circle-red-512.png">
    </div>
    <div class="recuadroUsuario">
        <div class="fuenteTexto" contenteditable="true">
            <h3> 3. </h3><h3>cristianoCR7</h3>
        </div>
        <input type="image" name="redirect3" id="redirect3" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/56/Arrow_northeast.svg/640px-Arrow_northeast.svg.png">
        <input type="image" name="delete3" id="delete3" src="https://cdn0.iconfinder.com/data/icons/social-messaging-ui-color-shapes/128/trash-circle-red-512.png">
    </div>
</div>

@endsection