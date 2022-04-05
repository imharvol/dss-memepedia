@extends('layouts.master')
@section('title', 'Crear Cuenta')

@section('head')
<link rel="stylesheet" href="{{URL('css/crear-cuenta.css')}}">
@endsection

@section('content')
@parent
<div class="container">

    <div class="rectanguloRegistro" align="center">
        <div class="textoRegistro">
            <span> Crea una cuenta </span>
        </div>
        <div class="textoRegistro2">
            <span> es rápido y sencillo </span>
        </div>
        <div class="lineaHorizontal1"> </div>
        <div class = "form">
            <form action="/action_page.php" align="left" class="form" >
                <input class="textbox" placeholder="Nombre" auto>
                <input class="textbox" placeholder="Apellidos" auto>
                <input class="textbox" placeholder="Correo electrónico" auto>
                <input class="textbox" placeholder="Nombre de usuario" auto>
                <input class="textbox" placeholder="Contraseña" auto>
                <input class="textbox" placeholder="Repetir contraseña" auto>
                <div class="espacio"></div>
                <div ><label for="start" class="textos">Fecha de nacimiento</label>
                <input class="textbox" style="max-width: 15vw;" type="date" id="start" name="trip-start" value="2018-07-22" 
                min="1930-01-01" max="2021-12-31"></div>
                <div class="espacio"></div>
                <span  class="textos"> Género: </span>
                <input type="radio" id="Hombre" name="Genero" value="Hombre">
                <label class="textos" for="Hombre" style="color:white">Hombre</label>
                <input type="radio" id="Mujer" name="Genero" value="Mujer">
                <label class="textos" for="Mujer" style="color:white">Mujer</label>
                <input type="radio" id="Otros" name="Genero" value="Otros">
                <label class="textos" for="Otros" style="color:white">Otros</label>
        
                <div class="botonRegistro" align="center">
                    <input class="boton" type="submit" value="Registrarse">
                </div>
                <div class="textoCondiciones">
                    <span> Al hacer click en registrarse aceptas nuestras Condiciones. Obtén más información en nuestra Política de datos y Política de cookies </span>
                </div>
            </form>
            
        </div>

        
    </div>
</div>


@endsection