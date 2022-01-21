@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row my-3 p-lg-4">
            <div class="col-lg-8 mb-3">
                <article class="mb-3">
                    <h2 class="text-center"><b>{{ $post->title }}</b></h2>

                    <hr>

                    @if ($post->image)
                        <div style="max-height: 400px; overflow:hidden">
                            <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid my-3">
                        </div>
                    @else
                        <img src="https://source.unsplash.com/1200x400?animal" class="img-fluid my-3">
                    @endif

                    {!! $post->body !!}
                </article>
            </div>
        </div>
    </div>
@endsection
