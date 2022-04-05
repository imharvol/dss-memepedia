@extends('layouts.master')
@section('title', 'User Profile')

@section('head')
<link rel="stylesheet" href="{{URL('css/user-list.css')}}">
@endsection

@section('content')
@parent

<h1>Lista de Usuarios</h1>

<table>
  <tr>
    <th>Id</th>
    <th>Username</th>
    <th>Name</th>
    <th>Surname</th>
    <th>Email</th>
    <th>Created At</th>
    <th>Updated At</th>
  </tr>

  @foreach ($users as $user)
  <tr>
    <td>{{$user->id}}</td>
    <td>{{$user->nick}}</td>
    <td>{{$user->name}}</td>
    <td>{{$user->surname}}</td>
    <td>{{$user->email}}</td>
    <td>{{$user->created_at}}</td>
    <td>{{$user->updated_at}}</td>
  </tr>
  @endforeach
</table>

@endsection