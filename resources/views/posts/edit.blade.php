@extends('main')

@section('title', '| Edit Blog Post')

@section('content')
<form class="" action="{{ url('posts/'.$post->id) }}" method="post">
  {{ method_field('PATCH') }}
  {!! csrf_field() !!}
  <div class="row">
    <div class="col-md-8">
      <div class="">
        <label for="">Post Title:</label><input type="text" name="title" class="form-control" value="{{ $post->title }}">
      </div>
      <div class="">
        <label for="">Body</label><textarea name="body" class="form-control">{{ $post->body }}</textarea>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card card-body bg-light">
        <dl class="row">
          <dt class="col-sm-5">Create At:</dt>
          <dd class="col-sm-7">{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</dd>
        </dl>

        <dl class="row">
          <dt class="col-sm-5">Last Updated:</dt>
          <dd class="col-sm-7">{{ date('M j, Y h:ia', strtotime($post->updated_at)) }}</dd>
        </dl>
        <hr>
        <div class="row">
          <div class="col-sm-6">
            <a href="{{ url('posts/'.$post->id) }}" class="btn btn-danger btn-block">Cancel</a>
          </div>
          <div class="col-sm-6">
            <button type="submit" class="btn btn-success btn-block">Submit</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>





@stop
