<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="{{ url('home') }}">
            <img src="{{ asset('assets/img/x1/Tropisianimal.png') }}" alt="" height="35rem">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ url('/') }}">HOME</a>
                </li>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4"
                        href="{{ url('about') }}">TENTANG</a>
                </li>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4"
                        href="{{ url('news') }}">BERITA</a></li>

                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4"
                        href="{{ url('galery') }}">GALERI</a>
                </li>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4"
                        href="{{ url('contact') }}">KONTAK</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
