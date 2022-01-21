@extends('layouts.admin')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <h3 class="my-3">Welcome back</h3>
            <hr>
        </div>
    </section>

    <div class="container">
        <div class="row">

            {{-- Pos Baru --}}
            @foreach ($posts as $post)
                <div class="col-md-4 mb-4">
                    <div class="card"
                        style="height: 440px; width:355px; overflow:hidden; background-color: rgb(233, 233, 233);">
                        <div>
                            @if ($post->image)
                                <div style="margin-top:-16px;">
                                    <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid my-3"
                                        style="height: 212px; width:352px overflow:hidden;">
                                </div>
                            @else
                                <img class="card-img-top" style="" src="https://source.unsplash.com/352x212?animal"
                                    alt="Card image cap">
                            @endif

                            <div class="card-body">
                                <p class="card-text d-block text-center" style="overflow: ">
                                    <b>
                                        <a href="/news/{{ $post->slug }}"
                                            style="text-decoration: none">{{ $post->title }}</a>
                                    </b>

                                    <br>

                                    <font style="color: grey" class="mb-5">
                                        {{ $post->excerpt }}
                                    </font>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    <!-- /.content -->
@endsection
