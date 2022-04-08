@extends('layouts.master')
@section('title', 'User Profile')

@section('head')
<link rel="stylesheet" href="{{URL('css/user-profile.css')}}">
@endsection

@section('content')
@parent
<h1>{{$user->username}}</h1>
<p>Este Es el contenido de una página de usuario {{$user->username}}.</p>
@endsection