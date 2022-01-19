@extends('layouts.master')

@section('content')
    {{-- Page Header --}}
    <header class="masthead" style="background-image: url('assets/img/x2/pascal-muller-iSz0IMtulos-unsplash@2x.png')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-left">
                <div class="col-md-7 col-lg-8 col-xl-7">
                    <div class="">
                        <font color="white">
                            <h1><b>Galeri</b></h1>
                        </font>
                    </div>
                </div>
            </div>
        </div>
    </header>
    {{-- End Page Header --}}

    {{-- Main Content --}}
    <main class="mb-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <img src="{{ asset('assets/img/x1/Group 77.png') }}" width="100%">

                    @if ($posts->count())
                        <div class="card my-3">
                            <img src="https://source.unsplash.com/1200x400?nature,animal" class="card-img-top" alt="...">
                        </div>
                    @else
                        <p class="text-center fs-4">Tidak ada postingan</p>
                    @endif

                </div>
            </div>

            <br>

            <div class="row">
                @foreach ($posts->skip(1) as $post)
                    <div class="col-md-3 mb-4">
                        <img class="card-img-top" src="https://source.unsplash.com/190x150?nature,animal"
                            alt="Card image cap">
                    </div>
                @endforeach
            </div>

            <div class="row">
                <div class="col-md-3">
                    <img src="{{ asset('assets/img/x1/mathew-schwartz-OjQgsR1oyEw-unsplash.png') }}" width="97%">
                </div>

                <div class="col-md-3">
                    <img src="{{ asset('assets/img/x2/vladimir-kudinov-vmlJcey6HEU-unsplash@2x.png') }}" width="97%">
                </div>

                <div class="col-md-3">
                    <img src="{{ asset('assets/img/x1/alessandro-desantis-9_9hzZVjV8s-unsplash.png') }}" width="97%">
                </div>

                <div class="col-md-3">
                    <img src="{{ asset('assets/img/x1/david-clode-0lwa8Dprrzs-unsplash.png') }}" width="97%">
                </div>
            </div>

            <br>

            <div class="row">
                <div class="col-md-3">
                    <img src="{{ asset('assets/img/x2/david-clode-AtCChdVhAmA-unsplash@2x.png') }}" width="97%">
                </div>

                <div class="col-md-3">
                    <img src="{{ asset('assets/img/x1/dawn-armfield-84n7c9cLEKM-unsplash.png') }}" width="97%">
                </div>

                <div class="col-md-3">
                    <img src="{{ asset('assets/img/x2/TERUMBU-KARANG (1)@2x.png') }}" width="97%">
                </div>

                <div class="col-md-3">
                    <img src="{{ asset('assets/img/x1/joshua-j-cotten-VCzNXhMoyBw-unsplash.png') }}" width="97%">
                </div>
            </div>
        </div>
    </main>
    {{-- End Main Content --}}
@endsection
