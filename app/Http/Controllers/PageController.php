<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

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
}
