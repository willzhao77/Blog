@extends('main')

@section('title', '| Edit Blog Post')
@section('stylesheets')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
@endsection

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
        <label for="">Slug:</label><input type="text" name="slug" class="form-control" value="{{ $post->slug }}">
      </div>
      <div class="">
        <label for="">Category:</label>
        <select class="form-control" name="category_id">
          @foreach ($cats as $category)
            @if ($category->name == $post->category->name)
              <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
            @else
              <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endif
          @endforeach
        </select>

        <div class="form-group">
          <label for="" class="control-label">Tags:</label>
          <select class="form-control select2-multi" name="tags[]" multiple="multiple">
            @foreach ($tags as $tag)
                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
            @endforeach
          </select>
        </div>





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




@section('script')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
  <!-- <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script> -->
  <script>

  // In your Javascript (external .js resource or <script> tag)
  $(document).ready(function() {
      $('.select2-multi').select2();
      $('.select2-multi').select2().val({!! json_encode($post->tags()->allRelatedIds()) !!}).trigger('change');

  });

  </script>
@endsection
