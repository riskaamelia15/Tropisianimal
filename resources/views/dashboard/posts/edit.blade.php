@extends('layouts.admin')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <h3 class="my-3">Edit post</h3>
            <hr>
        </div>
    </section>

    <div class="col-lg-8">
        <form method="post" action="/dashboard/posts/{{ $post->slug }}" class="mb-5"
            enctype="multipart/form-data">
            @method('put')
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control border-0 @error('title') is-invalid @enderror" id="title" name="title"
                    value="{{ old('title', $post->title) }}" autofocus>

                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control border-0 @error('slug') is-invalid @enderror" id="slug" name="slug"
                    value="{{ old('slug', $post->slug) }}">

                @error('slug')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="hidden" name="oldImage" value="{{ $post->image }}">

                <input class="form-control form-control-sm border-0 @error('image') is-invalid @enderror" type="file"
                    id="image" name="image" disabled>

                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="body" class="form-label">Body</label>

                @error('body')
                    <p class="text-danger">{{ $message }}</p>
                @enderror

                <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}">
                <trix-editor input="body"></trix-editor>
            </div>

            <button type="submit" class="btn btn-primary">Edit Post</button>
        </form>
    </div>

    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/dashboard/posts/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        })

        document.addEventListener('text-file-accept', function(e) {
            e.preventDefault();
        })
    </script>
@endsection
