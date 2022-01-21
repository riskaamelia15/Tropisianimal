@extends('layouts.master')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <article class="my-5">
                    <h2>{{ $post->title }}</h2>

                    @if ($post->image)
                        <div>
                            <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" alt="...">
                        </div>
                    @else
                        <img src="https://source.unsplash.com/1200x400?animal" class="img-fluid mt-3" alt="...">
                    @endif

                    {!! $post->body !!}
                </article>

                <a href="/news" class="btn btn-success" style="background-color: green" active>
                    Kembali
                </a>
            </div>
        </div>
    </div>
@endsection
