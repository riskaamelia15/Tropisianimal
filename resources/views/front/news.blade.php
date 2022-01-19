@extends('layouts.master')

@section('content')
    {{-- Page Header --}}
    <header class="masthead"
        style="background-image: url('assets/img/x2/pascal-muller-iSz0IMtulos-unsplash@2x.png'); height: 25rem;">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-left">
                <div class="col-md-7 col-lg-8 col-xl-7">
                    <div class="">
                        <font color="white">
                            <h1><b>Berita</b></h1>
                        </font>
                    </div>
                </div>
            </div>
        </div>
    </header>
    {{-- End Page Header --}}

    {{-- Main Content --}}
    @if ($posts->count())
        <main class="mb-4">
            <div class="container px-lg-1">

                <div class="row gx-4 gx-lg-5 justify-content-left">
                    <div class="col-md-6">
                        <table class="table table-borderless">
                            <tr>
                                <td rowspan="2">
                                    <img src="https://source.unsplash.com/300x500?nature,animal" class="card-img-top"
                                        alt="...">

                                    {{-- Default image --}}
                                    {{-- <img src="{{ asset('assets/img/x2/zoe-reeve-9hSejnboeTY-unsplash@2x.png') }}"
                                        style="height: 29rem"> --}}
                                </td>

                                <td>
                                    <img src="https://source.unsplash.com/300x200?nature,animal" class="card-img-top"
                                        alt="...">

                                    {{-- Default image --}}
                                    {{-- <img src="{{ asset('assets/img/x1/ronald-gijezen-7h06P9UKhYY-unsplash.png') }}"
                                        style="width: 100%; height: 12rem;"> --}}
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <img src="https://source.unsplash.com/300x280?nature,animal" class="card-img-top"
                                        alt="...">

                                    {{-- Default image --}}
                                    {{-- <img src="{{ asset('assets/img/x1/david-clode-AtCChdVhAmA-unsplash.png') }}"
                                        style="width: 100%; height: 253px;"> --}}
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div class="col-md-6">
                        <h1>{{ $posts[0]->title }}</h1>

                        {{-- Excerpt
                            {{ $posts[0]->excerpt }} --}}
                        <p style="font-weight: bold; font-size: 19px;">Lorem ipsum dolor sit amet, consectur adipiscing
                            elit, sed do euismod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis
                        </p>
                        <P style="font-size: 19px;">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            euismod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat
                        </P>

                        <a href="/news/{{ $posts[0]->slug }}">
                            <button type="button" class="btn btn-success" style="background-color: green" active>baca
                                selengkapnya
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                </svg>
                            </button>
                        </a>
                    </div>
                </div>

            </div>

            <br>

            <main class="mb-4">
                <div class="container px-2 px-lg-10">
                    <div class="row gx-4 gx-lg-5 justify-content-left">
                        <div class="col-md-10 col-lg-10 col-xl-7">
                            <h1><b>Berita Lainnya</b></h1>
                        </div>
                    </div>
                </div>

                <br>

                <div class="container">
                    <div class="row">

                        {{-- Pos Baru --}}
                        @foreach ($posts->skip(1) as $post)
                            <div class="col-md-4 mb-4">
                                <div class="card">
                                    <div style="background-color: rgb(245, 238, 238)">
                                        <img class="card-img-top" src="https://source.unsplash.com/352x212?nature,animal"
                                            alt="Card image cap">
                                        <div class="card-body">
                                            <p class="card-text">
                                                <center>
                                                    <b>
                                                        <a href="/news/{{ $post->slug }}">{{ $post->title }}</a>
                                                    </b>
                                                </center>
                                                <center>
                                                    <font color="grey">
                                                        {{ $post->excerpt }}
                                                    </font>
                                                </center>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>

                <br>

                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div style="background-color: rgb(245, 238, 238)">
                                    <img class="card-img-top"
                                        src="{{ asset('assets/img/x1/rick-l-037fCBgZB10-unsplash.png') }}"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text">
                                            <center>
                                                <b>
                                                    Apa Kabar Kebun Binatang <br>
                                                    Saat Wabah Covid 19?
                                                </b>
                                            </center>
                                            <center>
                                                <font color="grey">
                                                    Lorem ipsum dolor sit amet,<br>consectur adipiscing
                                                    elit,
                                                    sed do
                                                </font>
                                            </center>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card">
                                <div style="background-color: rgb(245, 238, 238)">
                                    <img class="card-img-top"
                                        src="{{ asset('assets/img/x1/hans-veth-o33FMDaXJS8-unsplash.png') }}"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text">
                                            <center>
                                                <b>
                                                    Anugerah dari Hutan<br>
                                                    Indonesia
                                                </b>
                                            </center>
                                            <center>
                                                <font color="grey">Lorem ipsum dolor sit amet,<br>consectur adipiscing
                                                    elit,
                                                    sed do
                                                </font>
                                            </center>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card">
                                <div style="background-color: rgb(245, 238, 238)">
                                    <img class="card-img-top"
                                        src="{{ asset('assets/img/x2/ronald-gijezen-7h06P9UKhYY-unsplash@2x.png') }}"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text">
                                            <center>
                                                <b>
                                                    10 Hewan Herbivora<br>
                                                    Yang Berbahaya
                                                </b>
                                            </center>
                                            <center>
                                                <font color="grey">Lorem ipsum dolor sit amet,<br>consectur adipiscing
                                                    elit,
                                                    sed do
                                                </font>
                                            </center>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <br>

                <div class="container">
                    <div class="row">

                        <div class="col-md-4">
                            <div class="card">
                                <div style="background-color: rgb(245, 238, 238)">
                                    <img class="card-img-top"
                                        src="{{ asset('assets/img/x1/smit-patel-dGMcpbzcq1I-unsplash.png') }}"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text">
                                            <center>
                                                <b>
                                                    4 Penyakit yang Ditularkan <br>
                                                    Hewa ke Manusia
                                                </b>
                                            </center>
                                            <center>
                                                <font color="grey">Lorem ipsum dolor sit amet,<br>consectur adipiscing
                                                    elit,
                                                    sed do
                                                </font>
                                            </center>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card">
                                <div style="background-color: rgb(245, 238, 238)">
                                    <img class="card-img-top" src="{{ asset('assets/img/x1/TERUMBU-KARANG (1).png') }}"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text">
                                            <center>
                                                <b>
                                                    Terumbu Karang: Pengertian, <br>
                                                    Jenis, Sebaran, dan Masalah
                                                </b>
                                            </center>
                                            <center>
                                                <font color="grey">Lorem ipsum dolor sit amet,<br>consectur adipiscing
                                                    elit,
                                                    sed do
                                                </font>
                                            </center>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card">
                                <div style="background-color: rgb(245, 238, 238)">
                                    <img class="card-img-top"
                                        src="{{ asset('assets/img/x1/vladimir-kudinov-vmlJcey6HEU-unsplash.png') }}"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text">
                                            <center>
                                                <b>
                                                    Ternyata, Tanduk Rusa Berasal <br>
                                                    dari Sel Kanker Tulang
                                                </b>
                                            </center>
                                            <center>
                                                <font color="grey">Lorem ipsum dolor sit amet,<br>consectur adipiscing
                                                    elit,
                                                    sed do
                                                </font>
                                            </center>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <br>

            </main>
        </main>

    @else
        <p class="text-center fs-4">Tidak ada postingan</p>
    @endif
    {{-- End Main Content --}}

@endsection
