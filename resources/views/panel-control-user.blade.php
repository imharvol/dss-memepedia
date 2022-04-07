@extends('layouts.master')
@section('title', 'Iniciar Sesión')

@section('head')
<link rel="stylesheet" href="{{URL('css/panel-control-user.css')}}">
@endsection

@section('content')
@parent

<h1 class="page-title"> Panel de Control - User </h1>

@foreach ($users as $user)
<div class="user-box">
    <a href="{{route('user.show', ['username' => $user->nick])}}">
        <h1 class="user-nick-header">{{$user->id}} - {{$user->nick}}</h1>
    </a>

    <form action="{{route('user.delete')}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="text" name="id" id="id" value="{{$user->id}}" hidden>
        <input class="input-button" type="submit" value="Borrar usuario">
    </form>

    <form action="{{route('user.update')}}" method="POST">
        @csrf
        @method('POST')
        <div class="wrapper">
            <input type="text" name="id" id="id" value="{{$user->id}}" hidden>
            <div class="wrapper-item">
                <label for="nick">Username:</label><br>
                <input type="text" name="username" id="username" value="{{$user->nick}}">
            </div>
            <div class="wrapper-item">
                <label for="nick">Email:</label><br>
                <input type="text" name="email" id="email" value="{{$user->email}}">
            </div>
            <div class="wrapper-item">
                <label for="nick">Name:</label><br>
                <input type="text" name="name" id="name" value="{{$user->name}}">
            </div>
            <div class="wrapper-item">
                <label for="nick">Surname:</label><br>
                <input class="input-button" type="text" name="surname" id="surname" value="{{$user->surname}}">
            </div>
        </div>
        <input type="submit" value="Guardar usuario">
    </form>
</div>
@endforeach

@endsection