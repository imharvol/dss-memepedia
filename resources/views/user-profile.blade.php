@extends('layouts.master')
@section('title', 'User Profile')

@section('head')
<link rel="stylesheet" href="{{URL('css/user-profile.css')}}">
@endsection

@section('content')
@parent
<p>Este Es el contenido de una página de usuario {{$user->nick}}.</p>
@endsection