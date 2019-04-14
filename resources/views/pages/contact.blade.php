@extends('main')
@section('title', '| Contact')
  @section('content')
        <div class="row">
          <div class="col-md-12">
            <h1>Contact us</h1>
            <hr>
            <form class="" action="{{ url('contact') }}" method="post">
                {!! csrf_field() !!}
              <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="">Subject</label>
                <input type="subject" name="subject" class="form-control" value="">
              </div>
              <div class="form-group">
                <label for="">Message</label>
                <textarea name="message" class="form-control">Type your message here...</textarea>
              </div>
              <input type="submit" name="" value="Send Message" class="btn btn-success">
            </form>
          </div>
        </div>
  @endsection
