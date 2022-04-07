@extends('layouts.master')
@section('title', 'Panel Control Ev')

@section('head')
<link rel="stylesheet" href="{{URL('css/panel-control-evaluation.css')}}">
@endsection

@section('content')
@parent

@foreach ($evaluation as $eva)
<div class="user-box">
    <h1 class="user-nick-header">{{$eva->id}} - {{$eva->nick}}</h1>

    <form action="{{route('eva.delete')}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="text" name="id" id="id" value="{{$eva->id}}" hidden>
        <input class="input-button" type="submit" value="Borrar evaluation">
    </form>

    <form action="{{route('eva.update')}}" method="POST">
        @csrf
        @method('POST')
        <div class="wrapper">
            <input type="text" name="id" id="id" value="{{$eva->id}}" hidden>
            <div class="wrapper-item">
                <label for="nick">Comment:</label><br>
                <input type="text" name="comment" id="comment" value="{{$eva->comment}}">
            </div>
            <div class="wrapper-item">
                <label for="nick">Rating:</label><br>
                <input type="text" name="rating" id="rating" value="{{$eva->rating}}">
            </div>
            <div class="wrapper-item">
                <label for="nick">postDate:</label><br>
                <input type="text" name="date" id="date" value="{{$eva->date}}">
            </div>
        </div>
        <input type="submit" value="Guardar evaluation">
    </form>
</div>
@endforeach

@endsection