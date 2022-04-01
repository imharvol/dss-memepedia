@extends('layouts.master')
@section('title', 'Meme Tierlist')

@section('head')
<link rel="stylesheet" href="{{URL('css/tierlist.css')}}">
@endsection

@section('content')
@parent
<p>Este Es el contenido de la página tierlist.</p>
@endsection