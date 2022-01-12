<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('front.news', [
            "posts" => \App\Models\Post::latest()->get(),
        ]);
    }

    public function show(Post $post)
    {
        return view('front.post', [
            "title" => "Post",
            "post" => $post,
        ]);

    }
}
