@extends('layouts.master')
@section('title', 'Panel Control Ev')

@section('head')
<link rel="stylesheet" href="{{URL('css/panel-control-evaluation.css')}}">
@endsection

@section('content')
@parent
<h1 class="page-title"> Panel de Control - Evaluation </h1>

@foreach ($evaluations as $evaluation)
<div class="user-box">
    <h1 class="user-nick-header">{{$evaluation->id}} - <a href="{{route('user.show', ['username' => $evaluation->author->username])}}">{{$evaluation->author->username}}</a> sobre <a href="{{route('meme.show', ['memeId' => $evaluation->meme->id])}}">{{$evaluation->meme->name}}</a></h1>

    <form action="{{route('evaluation.delete')}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="text" name="id" id="id" value="{{$evaluation->id}}" hidden>
        <input class="input-button" type="submit" value="Borrar evaluation">
    </form>

    <form action="{{route('evaluation.update')}}" method="POST">
        @csrf
        @method('POST')
        <div class="wrapper">
            <input type="text" name="id" id="id" value="{{$evaluation->id}}" hidden>
            <div class="wrapper-item">
                <label for="nick">Comment:</label><br>
                <textarea name="comment" id="comment">{{$evaluation->comment}}</textarea>
            </div>
            <div class="wrapper-item">
                <label for="rating-input">Rating:</label><br>
                <input id="rating-input" name="rating" type="number" min="0" max="10" step="0.1" value="{{$evaluation->rating}}" required>
            </div>
            <div class="wrapper-item">
                <label for="nick">Created At:</label><br>
                <input type="text" name="date" id="date" value="{{$evaluation->created_at}}" disabled>
            </div>
            <div class="wrapper-item">
                <label for="nick">Updated At:</label><br>
                <input type="text" name="date" id="date" value="{{$evaluation->updated_at}}" disabled>
            </div>
        </div>
        <input type="submit" value="Guardar evaluation">
    </form>
</div>
@endforeach

@endsection