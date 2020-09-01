@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-primary btn-md">BACK</a>
    <h1>{{$post->title}}</h1>
    <div>
        {{$post->body}}
    </div>
    <hr>
    <small>Written on: {{$post->created_at}}</small>
@endsection
