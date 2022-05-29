@extends('layouts.master')
@section('title', 'Iniciar Sesión')

@section('head')
<link rel="stylesheet" href="{{URL('css/panel-control-tier-list.css')}}">
@endsection

@section('content')
@parent

<h1 class="page-title"> Panel de Control - TierList </h1>

@foreach ($tiers as $tier)
<div class="user-box">
    <h1 class="user-nick-header">{{$tier->id}} - {{$tier->name}}</h1>

    <form action="{{route('tierlist.delete')}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="text" name="id" id="id" value="{{$tier->id}}" hidden>
        <input class="input-button" type="submit" value="Borrar TierList">
    </form>

</div>
@endforeach

@endsection