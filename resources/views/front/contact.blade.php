@extends('layouts.master')

@section('content')

    {{-- Head --}}

    <head>
        {{-- Circle CSS --}}
        <style type="text/css">
            .lingkaran1 {
                width: 80px;
                height: 80px;
                background: green;
                border-radius: 100%;
                justify-content: left;
                margin: auto;
                margin-bottom: 3%;
                margin-top: 20%
            }

        </style>
        {{-- End CIrcle CSS --}}

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!------ Include the above in your HEAD tag ---------->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{ asset('css/kontak.css') }}" />
    </head>
    {{-- End Head --}}

    {{-- Page Header --}}
    <header class="masthead" style="background-image: url('assets/img/x2/pascal-muller-iSz0IMtulos-unsplash@2x.png')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-left">
                <div class="col-md-7 col-lg-8 col-xl-7">
                    <div class="">
                        <font color="white">
                            <h1><b>Kontak Kami</b></h1>
                        </font>
                    </div>
                </div>
            </div>
        </div>
    </header>
    {{-- End Page Header --}}

    {{-- Main Content --}}
    <div class="container">
        {{-- Main Maps --}}
        <main class="mb-4">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <img src="{{ asset('assets/img/x1/1_qYUvh-EtES8dtgKiBRiLsA.png') }}" alt="" style="width: 100%;">
            </div>
        </main>
        {{-- End Main Maps --}}

        <br>

        <h1><b>Kontak Kami</b></h1>

        {{-- Form --}}
        <form action="{{ url('contact') }}" class="contact-form" method="post" id="form">
            @csrf

            <div class="row">
                <div class="col-md-8">
                    <div class="form-grup">
                        <textarea class="form-control textarea-contact" rows="11" id="des" name="des"
                            placeholder="Deskripsi" required="" background-color="grey"></textarea><br>
                    </div>
                </div>

                <br><br>

                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg" id="sub" name="sub" placeholder="Subject"
                            required="" autofocus="">
                    </div>

                    <br>

                    <div class="form-group form_left">
                        <input type="text" class="form-control form-control-lg" id="nama" name="nama" placeholder="Nama"
                            required="">
                    </div>

                    <br>

                    <div class="form-group">
                        <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="Email"
                            required="">
                    </div>

                    <br>

                    <div class="form-group">
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-success btn-lg btn-block">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor"
                                    class="bi bi-send" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z" />
                                </svg>
                                Kirim
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        {{-- End Form --}}

    </div>

    <br>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <center>
                    <div class="lingkaran1">
                        <br>
                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="35px" height="35px" viewBox="0 0 18.829 14.834">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: none;
                                            stroke: rgb(255, 255, 255);
                                            stroke-linecap: round;
                                            stroke-linejoin: round;
                                            stroke-width: 2px;
                                        }

                                    </style>
                                </defs>

                                <g id="mail" transform="translate(-0.607 -3)">
                                    <path id="Path_25" data-name="Path 25" class="cls-1"
                                        d="M3.6,4H16.439a1.609,1.609,0,0,1,1.6,1.6V15.23a1.609,1.609,0,0,1-1.6,1.6H3.6A1.609,1.609,0,0,1,2,15.23V5.6A1.609,1.609,0,0,1,3.6,4Z" />
                                    <path id="Path_26" data-name="Path 26" class="cls-1"
                                        d="M18.043,6l-8.022,5.615L2,6" transform="translate(0 -0.396)" />
                                </g>
                            </svg>
                            <br>
                        </p>
                    </div>
                    <h4><b>Email</b></h4>
                    <font color="grey">
                        <h5>tropisianimal@gmail.com</h5>
                    </font>
                </center>
            </div>

            <div class="col-md-4">
                <center>
                    <div class="lingkaran1">
                        <br>
                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="35px" height="35px" viewBox="0 0 18.044 18.077">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: none;
                                            stroke: #fff;
                                            stroke-linecap: round;
                                            stroke-linejoin: round;
                                            stroke-width: 2px;
                                        }

                                    </style>
                                </defs>

                                <path id="phone" class="cls-1"
                                    d="M18.155,14.035v2.42A1.613,1.613,0,0,1,16.4,18.068a15.963,15.963,0,0,1-6.961-2.476,15.73,15.73,0,0,1-4.84-4.84A15.963,15.963,0,0,1,2.118,3.758,1.613,1.613,0,0,1,3.724,2h2.42A1.613,1.613,0,0,1,7.757,3.387a10.357,10.357,0,0,0,.565,2.267,1.613,1.613,0,0,1-.363,1.7L6.934,8.381a12.906,12.906,0,0,0,4.84,4.84L12.8,12.2a1.613,1.613,0,0,1,1.7-.363,10.357,10.357,0,0,0,2.267.565,1.613,1.613,0,0,1,1.387,1.637Z"
                                    transform="translate(-1.111 -1)" />
                            </svg>
                        </p>
                    </div>
                    <h4><b>Phone</b></h4>
                    <font color="grey">
                        <h5>+62 821 3456 7890</h5>
                    </font>
                </center>
            </div>

            <div class="col-md-4">
                <center>
                    <div class="lingkaran1">
                        <br>
                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="35px" height="35px" viewBox="0 0 15.128 18.045">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: none;
                                            stroke: #fff;
                                            stroke-linecap: round;
                                            stroke-linejoin: round;
                                            stroke-width: 2px;
                                        }

                                    </style>
                                </defs>

                                <g id="map-pin" transform="translate(-2)">
                                    <path id="Path_27" data-name="Path 27" class="cls-1"
                                        d="M16.128,7.564c0,5.105-6.564,9.481-6.564,9.481S3,12.669,3,7.564a6.564,6.564,0,1,1,13.128,0Z" />
                                    <circle id="Ellipse_17" data-name="Ellipse 17" class="cls-1" cx="2.5" cy="2.5"
                                        r="2.5" transform="translate(7 5.046)" />
                                </g>
                            </svg>
                        </p>
                    </div>
                    <h4><b>Location</b></h4>
                    <font color="grey">
                        <h5>Kota Bandung, Jawa Barat <br> Indonesia</h5>
                    </font>
                </center>
            </div>
        </div>
    </div>
    {{-- End Main Content --}}
@endsection
