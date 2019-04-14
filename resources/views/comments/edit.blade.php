@extends('main')

@section('title', '| Edit Comment')

@section('content')
  <h1>Edit Comment</h1>
  <form class="" action="{{ url('comments/'.$comment->id) }}" method="post">
    {{ method_field('PUT') }}
    {!! csrf_field() !!}
    <div class="">
      <label for="">Name</label><input type="text" name="name" class="form-control" value="{{ $comment->name }}">
    </div>
    <div class="">
      <label for="">email</label><input type="text" name="email" class="form-control" value="{{ $comment->email }}">
    </div>

    <div class="">
      <label for="">Comment:</label><textarea name="comment" class="form-control">{{ $comment->comment }}</textarea>
    </div>
    <div class="">
      <button type="submit" class="btn btn-success btn-block">Submit</button>
    </div>
  </form>
@endsection
