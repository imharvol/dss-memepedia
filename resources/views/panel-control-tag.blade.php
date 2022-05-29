@extends('layouts.master')
@section('title', 'Panel Control de Tags')

@section('head')
<link rel="stylesheet" href="{{URL('css/panel-control-tag.css')}}">
@endsection

@section('content')
@parent
<h1 class="page-title"> Panel de Control - Tags </h1>

@foreach ($tags as $tag)
<div class="tag-box">
    <h1 class="tag-name-header">{{$tag->id}} - {{$tag->name}}</h1>

    <form action="{{route('tag.delete')}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="text" name="id" id="id" value="{{$tag->id}}" hidden>
        <input class="input-button" type="submit" value="Borrar tag">
    </form>
</div>
@endforeach


@endsection