@extends('layouts.master')

@section('content')
    {{-- Page Header --}}
    <header class="masthead"
        style="background-image: url('assets/img/x2/pascal-muller-iSz0IMtulos-unsplash@2x.png'); height:25rem;">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-left">
                <div class="col-md-7 col-lg-8 col-xl-7">
                    <div class="">
                        <font color="white">
                            <h1><b>Tentang Kami</b></h1>
                        </font>
                    </div>
                </div>
            </div>
        </div>
    </header>
    {{-- End Page header --}}

    {{-- Main content --}}
    <main class="mb-4">
        <div class="container px-2 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-left">
                <div class="col-md-6">
                    <h1>Tropisianimal</h1>
                    <p>Lorem ipsum dolor sit amet, consectur adipiscing
                        elit, sed do euismod tempor incididunt ut labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis</p>
                    <P>Lorem ipsum dolor sit amet, consectur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequent. Duis aute
                        irure dolor in reprehenderit in voluptate velit esse cillum dolore
                        eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est
                        laborum</P>
                </div>

                <div class="col-md-6 ">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('assets/img/x2/kyaw-tun-_YIX48_4hgs-unsplash@2x.png') }}" width="97%"
                                height="">
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('assets/img/x2/dawn-armfield-84n7c9cLEKM-unsplash@2x.png') }}" width="99%"
                                height="99%">
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <img src="{{ asset('assets/img/x2/smit-patel-dGMcpbzcq1I-unsplash@2x.png') }}">
                    </div>
                </div>
            </div>
        </div>
    </main>

    <main class="mb-4">
        <div class="container px-2 px-lg-5">
            <h1>Visi</h1>
            <p>Lorem ipsum dolor sit amet, consectur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim <br> ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequent. Duis aute
                irure dolor in <br> reprehenderit in voluptate velit esse cillum dolore
                eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in <br> culpa qui officia deserunt mollit anim id est
                laborum</P>
        </div>
    </main>

    <main class="mb-4">
        <div class="container px-2 px-lg-5">
            <h1>Misi</h1>
            <p>Lorem ipsum dolor sit amet, consectur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim <br> ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequent. Duis aute
                irure dolor in <br> reprehenderit in voluptate velit esse cillum dolore
                eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in <br> culpa qui officia deserunt mollit anim id est
                laborum</P>
        </div>
    </main>
    {{-- End main content --}}
@endsection
