@extends('layouts.master')
@section('title', 'Ranking')

@section('head')
<link rel="stylesheet" href="{{URL('css/ranking.css')}}">
@endsection

@section('content')
@parent
<p>Este Es el contenido de la página ranking.</p>
@endsection