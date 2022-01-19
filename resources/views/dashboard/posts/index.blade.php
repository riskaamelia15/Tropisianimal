@extends('layouts.admin')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <h3 class="my-3">My Posts</h3>
            <hr>
        </div>
    </section>

    @if (session()->has('posted'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('posted') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="table-responsive col-lg-12 p-lg-3">

        <a href="/dashboard/posts/create" class="btn btn-primary">Create new post</a>

        <table class="table table-striped table-sm my-4">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Title</th>
                    <th scope="col">Excerpt</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>

                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->excerpt }}</td>
                        <td>
                            <a href="/dashboard/posts/{{ $post->slug }}" class="badge text-info d-inline">
                                <i class="nav-icon far fa-eye"></i>
                            </a>
                            <a href="/dashboard/posts/{{ $post->id }}" class=" badge text-warning d-inline">
                                <i class="nav-icon far fa-edit"></i>
                            </a>

                            <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf

                                <button type="submit" class="badge text-danger border-0"
                                    onclick="return confirm('Are you sure?')">
                                    <i class="nav-icon fas fa-times"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.content -->
@endsection
