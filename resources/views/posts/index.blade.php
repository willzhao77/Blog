@extends('main')
@section('title', '| All Posts')
@section('content')
  <div class="row">
    <div class="col-md-9">
      <h1>All Posts</h1>
    </div>
    <div class="col-md-3">
      <a href="{{ route('posts.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Create new Post</a>
    </div>
  </div>
  <!-- end of  .row -->

  <div class="row">
    <div class="col-md-12">
      <table class="table">
        <thead>
          <th>#</th>
          <th>Title</th>
          <th>Body</th>
          <th>Created At</th>
          <th></th>
        </thead>

        <tbody>
          @foreach($posts as $post)
            <tr>
              <th>{{ $post->id }}</th>
              <td>{{ $post->title }}</td>
              <td>{{ substr(strip_tags($post->body), 0, 30) }}{{ strlen(strip_tags($post->body)) > 30? "..." : "" }}</td>
              <td>{{ date('M j, Y', strtotime($post->created_at)) }}</td>
              <td><a href="{{ route('posts.show', $post->id) }}" class="btn btn-info">View</a> <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-info">Edit</a></td>
            </tr>
          @endforeach
        </tbody>
      </table>
      <div class="">

          {{ $posts->links() }}
      </div>
    </div>
  </div>

@stop
