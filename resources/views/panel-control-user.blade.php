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
    @foreach ($users as $user)
    <div class="recuadroUsuario">
        <div class="fuenteTexto" contenteditable="true">
            <h3> {{$user->id}}. </h3>
            <h3>{{$user->nick}}</h3>
        </div>
        <input type="image" name="redirect1" id="redirect1" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/56/Arrow_northeast.svg/640px-Arrow_northeast.svg.png">

        <form action="{{route('user.delete')}}" method="POST">
            @csrf
            @method('DELETE')
            <input type="textbox" name="username" id="username" value="{{$user->nick}}" hidden>
            <input type="image" name="delete1" id="delete1" src="https://cdn0.iconfinder.com/data/icons/social-messaging-ui-color-shapes/128/trash-circle-red-512.png">
        </form>
    </div>
    @endforeach
</div>

@endsection