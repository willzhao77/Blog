@extends('main')
@section('title', '|View Post')

@section('content')
  <div class="row">
    <div class="col-md-8">
      <h1>{{ $post->title }}</h1>
      <p class="lead">{{ $post->body }}</p>
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
            <a href="{{ url('posts/'.$post->id.'/edit') }}" class="btn btn-primary btn-block">Edit</a>
          </div>
          <div class="col-sm-6">
            <form action="{{ url('posts/'.$post->id) }}" method="POST" style="display: inline;">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <button type="submit" class="btn btn-danger btn-block">Delete</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>




@endsection
