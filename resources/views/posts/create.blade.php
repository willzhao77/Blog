@extends('main')

@section('title', '| Creat New Post')

@section('stylesheets')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://cloud.tinymce.com/5/tinymce.min.js"></script>

    <script>
      tinymce.init({
        selector:'textarea',
        menubar: false
      });
    </script>
@endsection



@section('content')
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <h1>Create new Post</h1>
      <hr>

      <form class="" action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="form-group">
          <label for="" class="control-label">Title</label>
          <input type="text" class="form-control" id="title" name='title'>
        </div>
        <div class="form-group">
          <label for="" class="control-label">Slug</label>
          <input type="text" class="form-control" id="title" name='slug'>
        </div>

        <div class="form-group">
          <label for="" class="control-label">Category:</label>
          <select class="form-control" name="category_id">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
          </select>
        </div>

        <div class="form-group">
          <label for="" class="control-label">Tags:</label>
          <select class="form-control select2-multi" name="tags[]" multiple="multiple">
            @foreach ($tags as $tag)
                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
            @endforeach
          </select>
        </div>

        <div class="form-group">
          <label for="" class="control-label">Upload Featured Image:</label>
          <input class="form-control" type="file" name="featured_image">
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



@section('script')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
  <!-- <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script> -->
  <script>

  // In your Javascript (external .js resource or <script> tag)
  $(document).ready(function() {
      $('.select2-multi').select2();
  });

  </script>
@endsection
