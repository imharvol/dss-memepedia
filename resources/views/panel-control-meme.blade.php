@extends('layouts.master')
@section('title', 'Panel Control Meme')

@section('head')
<link rel="stylesheet" href="{{URL('css/panel-control-meme.css')}}">
@endsection

@section('content')
@parent
<h1 class="page-title"> Panel de Control - User </h1>

<div class="textoEntrada">
    <h2> Panel de Control - Meme </h2>
</div>

<div class="fondo">
    @foreach ($memes as $meme)
    <div class="recuadroUsuario">
        <div class="fuenteTexto" contenteditable="true">
            <h3> {{$meme->id}}. </h3>
            <h3>{{$meme->name}}</h3>
        </div>
        <input type="image" name="redirect1" id="redirect1" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/56/Arrow_northeast.svg/640px-Arrow_northeast.svg.png">

        <form action="{{route('meme.delete')}}" method="POST">
            @csrf
            @method('DELETE')
            <input type="textbox" name="id" id="id" value="{{$meme->id}}" hidden>
            <input type="image" class="trashicon" name="delete1" id="delete1" src="https://cdn0.iconfinder.com/data/icons/social-messaging-ui-color-shapes/128/trash-circle-red-512.png">
        </form>
    </div>
    @endforeach
</div>
@endforeach

@endsection