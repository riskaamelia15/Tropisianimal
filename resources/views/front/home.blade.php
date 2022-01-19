@extends('layouts.master')

@section('content')
    <!-- Page Header-->
    <header class="masthead" style="background-image: url('assets/img/x2/pascal-muller-iSz0IMtulos-unsplash@2x.png')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-left">
                <div class="col-md-7 col-lg-8 col-xl-7">
                    <div class="">
                        <font color="white">
                            <h1>
                                <b>
                                    Hewan <br>
                                    Tropis di Dunia
                                </b>
                            </h1>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis nobis voluptas delectus
                                at, ipsa deserunt officia? Dicta repudiandae voluptate amet dolorem facere sed in
                                consequatur, mollitia dignissimos nobis accusamus ducimus.
                            </p>
                        </font>
                    </div>
                </div>
            </div>
        </div>
    </header>
    {{-- End Page Header --}}

    <!-- Main Content-->

    {{-- About --}}
    <main class="mb-4">
        <div class="container px-2 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-left">

                {{-- About's Introduction --}}
                <div class="col-md-6">
                    <b>
                        <font color="MediumSeaGreen">
                            <a href="{{ url('about') }}" style="text-decoration: none; color: green;">
                                <b>TENTANG KAMI</b>
                            </a>

                        </font>
                        <h1>Membangun <br>
                            Komunitas Hewan </h1>
                    </b>

                    <p style="font-weight: bold; font-size: 16px;">Lorem ipsum dolor sit amet, consectur adipiscing
                        elit, sed do euismod tempor incididunt ut labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis
                    </p>

                    <P style="font-size: 16px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        euismod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat</P>

                    <a href="{{ url('about') }}">
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
                {{-- End About's Introduction --}}

                {{-- About's Grid Image --}}
                <div class="col-md-6 ">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('assets/img/x2/alessandro-desantis-9_9hzZVjV8s-unsplash@2x.png') }}"
                                width="97%" height="">
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('assets/img/x1/joshua-j-cotten-VCzNXhMoyBw-unsplash.png') }}" width="99%"
                                height="99%">
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <img src="{{ asset('assets/img/x1/kyle-nieber-3ryX0ShTMWg-unsplash.png') }}">
                    </div>
                </div>
                {{-- End About's Grid Image --}}

            </div>
        </div>
    </main>
    {{-- End About --}}

    <br>

    <header class="masthead" style="background-image: url('assets/img/x1/juliana-castro-LdEZjO3wjqQ-unsplash.png')">

        <div class="container position-relative px-4 px-lg-5">
            {{-- Title --}}
            <div class="row justify-content-left">
                <div class="col-xl-12">
                    <font color="white">
                        <h1>
                            <b>
                                Kami Membawa Anda <br>
                                Untuk Mengetahui Lebih Dalam
                            </b>
                        </h1>
                    </font>
                </div>
            </div>
            {{-- End Title --}}

            <br>

            {{-- Div Container Pawprint --}}
            <div class="container">
                {{-- Div Row --}}
                <div class="row">

                    @for ($i = 1; $i <= 4; $i++)
                        {{-- Div Col --}}
                        <div class="col-md-3">
                            {{-- Div Card --}}
                            <div class="card-panel center">
                                {{-- Div Background Color --}}
                                <div style="background-color: white">
                                    {{-- Div Card Body --}}
                                    <div class="card-body">

                                        {{-- Circle Pawprint --}}
                                        <center>
                                            <span class="fa-stack" style="vertical-align: top; margin-top: 15px;">
                                                <i class="fas fa-circle fa-stack-2x"
                                                    style="color: green; width: 60px; height: 60px;">
                                                </i>
                                                <i class="fas fa-paw fa-stack-1x fa-inverse"
                                                    style="width: 40px; height: 40px; margin-left: 10px;">
                                                </i>
                                            </span>
                                        </center>
                                        {{-- End Circle Pawprint --}}

                                        <center>
                                            {{-- Card Text --}}
                                            <div class="card-text">
                                                <p>
                                                    <b>Lorem Ipsum <br>
                                                        Dolor Sit Amet <br>
                                                    </b>
                                                </p>
                                                <p style="font-size: 14px; margin-bottom: 10px;">
                                                    Lorem ipsum dolor sit amet,
                                                    <br>consectur adipiscing elit,sed
                                                    <br>do eiusmod tempor incididunt
                                                </p>
                                            </div>
                                            {{-- End Card Text --}}
                                        </center>

                                    </div>
                                    {{-- End Div Card Body --}}
                                </div>
                                {{-- End Div Background Color --}}
                            </div>
                            {{-- End Div Card --}}
                        </div>
                        {{-- End Div Col --}}
                    @endfor

                </div>
                {{-- End Div Row --}}
            </div>
            {{-- End Div Container Pawprint --}}
        </div>
    </header>

    {{-- News --}}
    <main class="mb-4">

        {{-- News's Head --}}
        <div class="container px-2 px-lg-3">
            <div class="row justify-content-left">
                <div class="col-xl-12">
                    <font color="MediumSeaGreen">
                        <a href="{{ url('news') }}" style="text-decoration: none; color: green;">
                            <b>BERITA</b>
                        </a>

                    </font>
                    <h1>
                        <b>
                            Baca Cerita Terbaru Kami <br>
                            Dalam Tropisianimal
                        </b>
                    </h1>
                </div>
            </div>
        </div>
        {{-- End News's Head --}}

        <br>

        {{-- News's Body --}}
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <a href="{{ url('news') }}">
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
                        </a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <a href="{{ url('news') }}">
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
                        </a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <a href="{{ url('news') }}">
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
                        </a>
                    </div>
                </div>
            </div>

            <br>

            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <a href="{{ url('news') }}">
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
                        </a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <a href="{{ url('news') }}">
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
                        </a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <a href="{{ url('news') }}">
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
                        </a>
                    </div>
                </div>
            </div>
        </div>
        {{-- End News's Body --}}

        <br>
    </main>
    {{-- End Main Content --}}
@endsection

@section('galery')

    {{-- Galery's Head --}}
    <div class="container px-2 px-lg-3">
        <div class="row justify-content-left">
            <div class="col-xl-12">
                <font color="MediumSeaGreen">
                    <a href="/galery" style="text-decoration: none; color: green;">
                        <b>Galeri</b>
                    </a>

                </font>
                <h1>
                    <b>
                        Lihat Lebih Banyak Hewan Tropis <br>
                        Pada Galeri Kami
                    </b>
                </h1>
            </div>
        </div>
    </div>
    {{-- End Galery's Head --}}

    <br>

    {{-- Galery's Slider --}}
    <div id="carousel" class="carousel owl-carousel owl-theme" style="margin-bottom: -50px">

        <div class="item">
            <a href="/galery">
                <img src="{{ asset('assets/img/x1/kyaw-tun-_YIX48_4hgs-unsplash.png') }}">
            </a>
        </div>
        <div class="item">
            <a href="/galery">
                <img src="{{ asset('assets/img/x1/dawn-armfield-84n7c9cLEKM-unsplash.png') }}">
            </a>
        </div>
        <div class="item">
            <a href="/galery">
                <img src="{{ asset('assets/img/x1/oscar-merchant-sCt1TLNIxFw-unsplash.png') }}" style="height: 15rem">
            </a>
        </div>
        <div class="item">
            <a href="/galery">
                <img src="{{ asset('assets/img/x1/david-clode-0lwa8Dprrzs-unsplash.png') }}">
            </a>
        </div>

        @foreach ($posts as $post)
            <div class="item">
                <a href="/galery">
                    <img src="https://source.unsplash.com/190x135?nature,animal">
                </a>
            </div>
        @endforeach
    </div>
    {{-- End Galery's Slider --}}

    {{-- Script For Galery --}}
    <script src="js/carousel/jquery.min.js"></script>
    <script src="js/carousel/owl.carousel.js"></script>
    <script>
        $(document).ready(function() {
            var owl = $('.owl-carousel');
            owl.owlCarousel({
                loop: true,
                items: 4,
                autoplay: true,
                dots: false,
                animateOut: 'fadeOut'
            });
        })
    </script>
@endsection
