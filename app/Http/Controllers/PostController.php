<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostController extends Controller
{
    public function index(){

      $recensioni= Post::all();
      return view('posts.posts',compact('recensioni'));

    }
}
