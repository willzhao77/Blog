@extends('main')

@section('title', "| Edit Tag")

@section('content')
  <form class="" action="{{ url('tags/'.$tag->id) }}" method="post">
    {{ method_field('PATCH') }}
    {!! csrf_field() !!}
    <label for="">Title:</label>
    <input type="text" name="name" class="form-control" value="{{ $tag->name }}">
    <button type="submit" class="btn btn-success">Save Change</button>
  </form>

@endsection
