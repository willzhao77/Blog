@extends('main')

@section('title', '| Creat New Post')

@section('content')
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <h1>Create new Post</h1>
      <hr>

      <form class="" action="{{ route('post.store') }}" method="post">
        {!! csrf_field() !!}
        <div class="form-group">
          <label for="" class="control-label">Title</label>
          <input type="text" class="form-control" id="title" name='title'>
        </div>
        <div class="form-group">
          <label for="" class="control-label">Post Body:</label>
          <textarea name="body" class="form-control"></textarea>
        </div>
        <div class="form-group">
          <input type="submit" name="button" id="button" value="submit" class="btn btn-success btn-lg">

        </div>
      </form>




    </div>
  </div>
@endsection
