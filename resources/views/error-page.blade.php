@extends('layouts.master')
@section('title', 'Error!')

@section('head')
<link rel="stylesheet" href="{{URL('css/error-page.css')}}">
@endsection

@section('content')
@parent
<h1>Ha habido un error!</h1>
<h2>{{$error_message}}</h2>
@endsection