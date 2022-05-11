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
    {{-- Error messages --}}
        @if (count($errors) > 0)
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        @endif
    <form action="{{route('user.postsignin')}}" method="POST">
        @csrf
        @method('POST')
        <input type="text" name="username" value="{{ old('username') }}" id="username" class="textbox" placeholder="Nombre de usuario" auto>
        <input type="password" name="password" id="password" class="textbox" placeholder="Contraseña" auto>
        <div class="botonInicio">
            <input class="boton" type="submit" value="Inicio sesión">
        </div>
    </form>
    <div class="lineaHorizontal1"> </div>
    <div class="textoSpam">
        <span class="textoInicio"> ¿Aún no te has registrado?</span>
    </div>
    <div class="botonRegistro">
        <a href="{{route('user.signup')}}"><input class="boton" type="submit" value="Registrarse"></a>
    </div>
    <div class="espacio"> </div>
</div>

@endsection