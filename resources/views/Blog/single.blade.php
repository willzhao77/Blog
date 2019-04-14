@extends('main')

@section('title', "| $post->title ")

@section('content')

<div class="row">
  <div class="col-md-8 offset-md-2">
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>
    <hr>
    <p>Posted In: {{ $post->category->name }}</p>
  </div>
</div>
<div class="row">
  <div class="col-md-8 offset-md-2">
    <h3 class="comments-title">{{ $post->comments()->count() }} Comments</h3>
    @foreach($post->comments as $comment)
      <div class="comment">
        <div class="author-info">
          <img src="\img\photo1.jpg" alt="" class="author-image">
          <div class="author-name">
            <h4>{{ $comment->name }}</h4>
            <p class="author-time">{{ $comment->created_at }}</p>
          </div>
        </div>
        <div class="comment-content">
          {{ $comment->comment }}
        </div>
      </div>
    @endforeach
  </div>
</div>

<div class="row">
  <div id="comment-form" class="col-md-8 offset-md-2" >
    <form class="" action="{{ url('comments/'.$post->id) }}" method="post">
      {!! csrf_field() !!}
      <div class="row">
        <div class="col-md-6">
          <label for="">Name:</label><input type="text" name="name" class="form-control" value="">
        </div>
        <div class="col-md-6">
          <label for="">Email:</label><input type="text" name="email" class="form-control" value="">
        </div>
        <div class="col-md-12">
          <label for="">Comment:</label>
          <textarea name="comment" rows="8" cols="80" class="form-control" ></textarea>
          <input type="submit" name="button" id="button" value="submit" class="btn btn-success btn-lg">
        </div>
      </div>
    </form>
  </div>
</div>
@endsection
