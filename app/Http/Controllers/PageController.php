<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Mail;
use Session;

class PageController extends Controller
{
  public function getIndex()
  {
    $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
    return view('pages/welcome')->withPosts($posts);
  }

  public function getAbout()
  {
    $first = 'Will';
    $last = 'Zhao';
    $fullname = $first . ' ' . $last;
    $email = 'myemail@gmail.com';
    $data = [];
    $data['fullname'] = $fullname;
    $data['email'] = $email;

    return view('pages/about')->withData($data);
  }

  public function getContact()
  {
    return view('pages/contact');
  }

  public function postContact(Request $request)
  {
    $this->validate($request, [
      'email' => 'required|email',
      'subject' => 'min:3',
      'message' => 'min:10',
    ]);

    $data = array(
      'email' => $request->email,
      'subject' => $request->subject,
      'bodymessage' => $request->message,
    );

    Mail::send('emails.contact', $data, function($message) use($data){
      $message->from($data['email']);
      $message->to('myemail@abc.com');
      $message->subject($data['subject']);
    });

    Session::flash('success', 'Your Email was Sent!');
    return redirect()-url('/');

  }
}
