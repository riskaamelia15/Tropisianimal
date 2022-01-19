@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row my-3 p-lg-4">
            <div class="col-lg-8 mb-3">
                <article class="mb-3">
                    <h2><b>{{ $post->title }}</b></h2>

                    <a href="/dashboard/posts" class="btn btn-success">
                        <i class="fas fa-arrow-left"></i>
                        Kembali
                    </a>
                    <a href="/posts/index" class="btn btn-warning">
                        <i class="far fa-edit"></i>
                        Edit
                    </a>
                    <a href="/posts/index" class="btn btn-danger">
                        <i class="fas fa-times"></i>
                        Hapus
                    </a>

                    <img src="https://source.unsplash.com/1200x400?nature,animal" class="img-fluid my-3" alt="...">
                    {!! $post->body !!}
                </article>
            </div>
        </div>
    </div>
@endsection
