@extends('layouts.app')

@section('content')

<h1> Add New </h1>
<form method="POST" action="/todo">
    @csrf

    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" value="{{old('title')}}">
      
    </div>
    <div class="form-group">
        <label for="content">Content</label>
        <textarea class="form-control" id="content" name="content" value="{{old('content')}}" rows="3"></textarea>
      </div>
    <div class="form-group">
        <label for="due">Due</label>
        <input type="text" class="form-control" id="due" name="due" value="{{old('due')}}" placeholder="Due">
      </div>
      <br>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>


@endsection