@extends('layouts.admin')

@section('content')
    <!-- Main content -->

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Berita</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="container">
        <hr>

        @if (session()->has('success'))
            <div class="alert alert-success col-lg-8" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <div class="table-responsive col-lg-8 p-lg-3">

            <a href="/dashboard/posts/create" class="btn btn-primary">Create new post</a>

            <table class="table table-striped table-sm my-4 text-center">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Title</th>
                        <th scope="col">View</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>

                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $post->title }}</td>

                            {{-- Tombol kembali --}}
                            <td>
                                <a href="/dashboard/posts/{{ $post->slug }}" class="badge badge-info border-0">
                                    <i class="nav-icon far fa-eye"></i>
                                </a>
                            </td>

                            {{-- Tombol edit --}}
                            <td>
                                <a href="/dashboard/posts/{{ $post->slug }}/edit" class=" badge badge-warning border-0">
                                    <i class="nav-icon far fa-edit"></i>
                                </a>
                            </td>

                            {{-- Tombol delete --}}
                            <td>
                                <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                                    @method('delete')
                                    @csrf

                                    <button type="submit" class="badge badge-danger border-0"
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

    </div>
    <!-- /.content -->
@endsection
