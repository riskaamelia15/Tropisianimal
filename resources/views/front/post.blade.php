@extends('layouts.master')

@section('content')

    {{-- Page Header --}}
    <header class="masthead" style="background-image: url('https://source.unsplash.com/1200x300?nature,animal');">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-left">
                <div class="col-md-7 col-lg-8 col-xl-7">
                    <div class="">
                        <font color="white">
                            <h1><b>{{ $post->title }}</b></h1>
                        </font>
                    </div>
                </div>
            </div>
        </div>
    </header>
    {{-- End Page Header --}}

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <article class="mb-5">
                    <h2>{{ $post->title }}</h2>
                    <img src="https://source.unsplash.com/1200x400?nature,animal" class="img-fluid mt-3" alt="...">
                    {!! $post->body !!}
                </article>

                <a href="/news" class="btn btn-success" style="background-color: green" active>
                    Kembali
                </a>
            </div>
        </div>
    </div>
@endsection
