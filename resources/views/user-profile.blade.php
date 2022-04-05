@extends('layouts.master')
@section('title', 'User Profile')

@section('head')
<link rel="stylesheet" href="{{URL('css/user-profile.css')}}">
@endsection

@section('content')
@parent
<h1>{{$user->nick}}</h1>
<p>Este Es el contenido de una página de usuario {{$user->nick}}.</p>
@endsection