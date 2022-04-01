@extends('layouts.master')
@section('title', 'Memepedia')

@section('head')
<link rel="stylesheet" href="{{URL('css/index.css')}}">
@endsection

@section('content')
@parent
<p>Este Es el contenido de la página index.</p>
@endsection