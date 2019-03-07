@extends('main')
@section('title', '| homepage')
      @section('content')
        <div class="row">
          <div class="col-md-12">
            <div class="jumbotron">
              <h1 class="display-4">Hello, world!</h1>
              <p class="lead">Thank you for visiting. Please read latest post!</p>
              <hr class="my-4">
              <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
              <a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a>
            </div>
          </div>
        </div>
        <!-- end of header row-->
        <div class="row">
          <div class="col-md-8">
            <div class="post">
              <h3>Post Heading</h3>
              <p>asdkfjasldfj  aksdfj; asdklfjkasdf asdfakdjf  alsdjfkasd asdfa sdfa </p>
              <a href="#" class="btn btn-primary">Read More...</a>
            </div>
            <hr>
            <div class="post">
              <h3>Post Heading</h3>
              <p>asdkfjasldfj  aksdfj; asdklfjkasdf asdfakdjf  alsdjfkasd asdfa sdfa </p>
              <a href="#" class="btn btn-primary">Read More...</a>
            </div>
            <hr>
            <div class="post">
              <h3>Post Heading</h3>
              <p>asdkfjasldfj  aksdfj; asdklfjkasdf asdfakdjf  alsdjfkasd asdfa sdfa </p>
              <a href="#" class="btn btn-primary">Read More...</a>
            </div>
            <hr>
            <div class="post">
              <h3>Post Heading</h3>
              <p>asdkfjasldfj  aksdfj; asdklfjkasdf asdfakdjf  alsdjfkasd asdfa sdfa </p>
              <a href="#" class="btn btn-primary">Read More...</a>
            </div>
            <hr>
          </div>
          <div class="col-md-3 offset-md-1">
            <h2>Sidebar</h2>
          </div>
        </div>
      @endsection
