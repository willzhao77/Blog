@extends('main')

@section('title', '| All Categories')

@section('content')
  <div class="row">
    <div class="col-md-8">
      <h1>Categories</h1>
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($categories as $category)
          <tr>
            <th>{{ $category->id }}</th>
            <td>{{ $category->name }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <!--end of col-md-8 -->
    <div class="col-md-3">
      <div class="card card-body bg-light">
        <form class="" action="{{ route('categories.store') }}" method="post">
          {!! csrf_field() !!}
          <h2>New Category</h2>
          <label for="">Name:</label>
          <input type="text" name="name" value="" class="form-control">
          <button type="submit" class="btn btn-success btn-block">Submit</button>
        </form>
      </div>
    </div>
  </div>

@endsection
