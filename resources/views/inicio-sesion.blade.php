@extends('layouts.master')
@section('title', 'Iniciar Sesión')

@section('head')
<link rel="stylesheet" href="{{URL('css/inicio-sesion.css')}}">
@endsection

@section('content')
@parent
</div class="container">


<div class="rectanguloInicio" align="center">
        <div class="textoInicio">
            <span> Inicio de sesión </span>
        </div>
        <div class="lineaHorizontal1"> </div>
        <form action="/action_page.php">
            <input class="textbox" placeholder="Nombre de usuario" size="50" auto>
            <input class="textbox" placeholder="Contraseña" size="50">     
            <div class="botonInicio">
                <input class="boton" type="submit" value="Inicio sesión">
            </div>
        </form>
        <div class="lineaHorizontal1"> </div>
        <div class="textoSpam">
            <span class="textoInicio"> ¿Aún no te has registrado?</span>
        </div>
        <div class="botonRegistro">
            <input class="boton" type="submit" value="Registrarse">
        </div>
        <div class="espacio"> </div>
</div>

@endsection