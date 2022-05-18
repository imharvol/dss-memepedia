@extends('layouts.master')
@section('title', 'Crear Cuenta')

@section('head')
<link rel="stylesheet" href="{{URL('css/crear-cuenta.css')}}">
@endsection

@section('content')
@parent
<div class="container" style="height: 100%;">

    <div class="rectanguloRegistro" align="center">
        <div class="textoRegistro">
            <span> Crea una cuenta </span>
        </div>
        <div class="textoRegistro2">
            <span> es rápido y sencillo </span>
        </div>
        <div class="lineaHorizontal1"> </div>
        <div class="form">
            <form action="{{route('user.create')}}" align="left" class="form" method="POST">
                @csrf
                @method('PUT')
                <input type="text" name="username" id="username" class="textbox" placeholder="Nombre de usuario" auto>
                <input type="text" name="name" id="name" class="textbox" placeholder="Nombre" auto>
                <input type="text" name="surname" id="surname" class="textbox" placeholder="Apellidos" auto>
                <input type="text" name="email" id="email" class="textbox" placeholder="Correo electrónico" auto>
                <input type="password" name="password" id="password" class="textbox" placeholder="Contraseña" auto>
                <input type="password" name="password-check" id="password-check" class="textbox" placeholder="Repetir contraseña" auto> <!-- TODO: Esto debería ser client-side realmente -->
                <div class="espacio"></div>

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