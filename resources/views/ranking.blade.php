@extends('layouts.master')
@section('title', 'Ranking')

@section('head')
<link rel="stylesheet" href="{{URL('css/ranking.css')}}">
@endsection

@section('content')
@parent
<h1>Este Es el contenido de la página ranking.</h1>
@endsection