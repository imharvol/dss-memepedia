@extends('layouts.master')
@section('title', 'Iniciar Sesión')

@section('head')
<link rel="stylesheet" href="{{URL('css/panel-control-tier-list.css')}}">
@endsection

@section('content')
@parent

<h1 class="page-title"> Panel de Control - TierList </h1>

@foreach ($tiers as $tier)
<div class="user-box">
    <h1 class="user-nick-header">{{$tier->id}} - {{$tier->name}}</h1>
<!--
/*
    <form action="{{route('tier.delete')}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="text" name="id" id="id" value="{{$tier->id}}" hidden>
        <input class="input-button" type="submit" value="Borrar TierList">
    </form>

    <form action="{{route('tier.update')}}" method="POST">
        @csrf
        @method('POST')
        <div class="wrapper">
            <input type="text" name="id" id="id" value="{{$tier->id}}" hidden>
            <div class="wrapper-item">
                <label for="nick">Name:</label><br>
                <input type="text" name="name" id="name" value="{{$tier->name}}">
            </div>
            <div class="wrapper-item">
                <label for="nick">Visits:</label><br>
                <input type="text" name="visitas" id="visitas" value="{{$tier->visitas}}">
            </div>
        </div>
        <input type="submit" value="Guardar TierList">
    </form>
*/
-->
</div>
@endforeach

@endsection