<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('front.news', [
            "posts" => \App\Models\Post::latest()->get(),
        ]);
    }

    public function galery()
    {
        return view('front.galery', [
            "posts" => \App\Models\Post::latest()->get(),
        ]);
    }

    public function home()
    {
        return view('front.home', [
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

    public function store(Request $request)
    {
        $posts = new Post;

        $posts->title = $request->input('title');
        $posts->slug = $request->input('slug');
        $posts->excerpt = $request->input('excerpt');
        $posts->body = $request->input('body');

        $posts->save();
        return back();
        return redirect()->route('front.news');

    }
}
