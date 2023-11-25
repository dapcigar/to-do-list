@extends('layouts.app')

@section('content')

<a href="/" class="btn btn-primary mt-2"> Go back </a>
<h1>{{$todo->title}}</h1>
<span class ="badge badge-pill badge-default">{{$todo->due}} </span>
<hr>
        {{$todo->content}}

        <p>
        <a href="/todo/{{$todo->id}}/edit" class="btn btn-success mt-2"> Edit </a>

@endsection