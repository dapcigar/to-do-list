@extends('layouts.app')

@section('content')
<h1>Todo</h1>

@if(count($todos) > 0)
    @foreach ($todos as $todo)
        <div class="card m-2">
            <h2><a href="todo/{{$todo->id}}"> {{$todo->title }}</a></h2>
            
            <span class="label label-danger">{{ $todo->due }}</span>
        </div>
        
    @endforeach
@endif

@endsection