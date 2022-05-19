@extends('layouts.master')
@section('title', 'Editar Perfil')

@section('head')
<link rel="stylesheet" href="{{URL('css/editar-perfil.css')}}">
@endsection

@section('content')
@parent

<div class="editarPerfil" align="center">
    <div class="textoEditar">
        <span> {{Auth::user()->username}} - Editar perfil </span>
    </div>
    <div class="lineaHorizontal1"> </div>
    <div class="form">
        <form action="{{route('user.update')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <input type="text" name="username" value="{{Auth::user()->username}}" hidden>

            <div class="espacio"></div>
            <div class="hueco">
                <span class="texto ">Id: </span>
                <input type="text" name="id" class="textbox" value="{{Auth::user()->id}}" hidden>
                <input type="text" name="id" class="textbox" value="{{Auth::user()->id}}" disabled>
            </div>

            <div class="espacio"></div>
            <div class="hueco">
                <span class="texto ">Nombre: </span>
                <input type="text" name="name" id="name" class="textbox" placeholder="Nombre" auto value="{{Auth::user()->name}}">
            </div>
            <div class="espacio"></div>
            <div>
                <span class="texto">Apellidos: </span>
                <input type="text" name="surname" id="surname" class="textbox" placeholder="Apellidos" auto value="{{Auth::user()->surname}}">
            </div>
            <div class="espacio"></div>

            <div>
                <span class="texto">Correo electrónico: </span>
                <input type="text" name="email" id="email" class="textbox" placeholder="Correo electrónico" auto value="{{Auth::user()->email}}">
            </div>

            <div class="espacio"></div>
            <div>
                <span class="texto">Cambiar Contraseña: </span>
                <input class="textbox" name="password" placeholder="Contraseña">
                <div class="espacio"></div>
                <input class="textbox" name="passwordConfirmation" placeholder="Repetir Contraseña">
            </div>
            <div class="espacio" style="margin-bottom: 3vh;"></div>

            <div>
                <span class="texto">Foto de Perfil: </span>

                <img class="user-photo" src="{{asset('storage/users/'.(string)Auth::user()->id)}}" alt="Actualmente no hay foto de perfil">

                <input type="file" name="photo" accept="image/png, image/jpeg">
            </div>
            <span style="font-size:1.3vmin;color:white;float:left">Formatos admitidos: .jpg, .jpeg y .png (máx 32MB)</span>

            <div class="botonInicio">
                <input class="boton" type="submit" value="Hecho">
            </div>
        </form>

        <form action="{{route('user.signout')}}" method="POST">
            @csrf
            @method('POST')
            <div class="botonInicio">
                <input class="boton" type="submit" value="Cerrar Sesión">
            </div>
        </form>
    </div>


</div>

@endsection