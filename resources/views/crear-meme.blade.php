@extends('layouts.master')
@section('title', 'Crear Meme')

@section('head')
<link rel="stylesheet" href="{{URL('css/crear-meme.css')}}">
@endsection

@section('content')
@parent
<p>Este Es el contenido de la página crear meme.</p>
@endsection