@extends('layouts.master')
@section('title', 'Meme Tierlist')

@section('head')
<link rel="stylesheet" href="{{URL('css/tierlist.css')}}">
@endsection

@section('content')
@parent
<h1>Este Es el contenido de la página tierlist.</h1>
@endsection