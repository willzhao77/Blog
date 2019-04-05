@extends('main')

@section('title', '| All Tags')

@section('content')
  <div class="row">
    <div class="col-md-8">
      <h1>Tags</h1>
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($tags as $tag)
          <tr>
            <th>{{ $tag->id }}</th>
            <td><a href="{{ route('tags.show', $tag->id) }}">{{ $tag->name }}</a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <!--end of col-md-8 -->
    <div class="col-md-3">
      <div class="card card-body bg-light">
        <form class="" action="{{ route('tags.store') }}" method="post">
          {!! csrf_field() !!}
          <h2>New Tag</h2>
          <label for="">Name:</label>
          <input type="text" name="name" value="" class="form-control">
          <button type="submit" class="btn btn-success btn-block">Create new Tag</button>
        </form>
      </div>
    </div>
  </div>

@endsection
