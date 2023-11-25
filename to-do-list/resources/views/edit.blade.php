@extends('layouts.app')


@section('content')

<h1> Edit Todo </h1>
<form method="POST" action="/todo/{{$todo->id}}">

    @csrf

    @method('PUT')

    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" value="{{$todo->title}}">
      
    </div>
    <div class="form-group">
        <label for="content">Content</label>
        <textarea class="form-control" id="content" name="content" value="{{$todo->content}}" rows="3">{{$todo->content}}</textarea>
      </div>
    <div class="form-group">
        <label for="due">Due</label>
        <input type="text" class="form-control" id="due" name="due" value="{{$todo->due}}" placeholder="Due">
      </div>
      <br>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>



@endsection