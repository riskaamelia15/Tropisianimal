@extends('layouts.master')

@section('content')
    <article class="mb-5">
        <h2>{{ $post->title }}</h2>
        {!! $post->body !!}
    </article>

    <a href="/news">Back to News</a>
@endsection
