@extends('layouts.master')

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#page-top"><img src="{{ asset('assets/img/favicon2.png') }}"
                    style="width: 50px;"></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li style="white-space: nowrap;" class="nav-item"><a class="nav-link"
                            href="#about">Beranda</a></li>
                    <li style="white-space: nowrap; font-family:gotham;" class="nav-item"><a class="nav-link"
                            href="#services">Cek Resi</a>
                    </li>
                    <li style="white-space: nowrap; font-family:gotham;" class="nav-item"><a class="nav-link"
                            href="#services">Cek
                            Ongkir</a></li>
                    <li style="white-space: nowrap; font-family:gotham;" class="nav-item"><a class="nav-link"
                            href="#services">Agen</a></li>
                    <li style="white-space: nowrap; font-family:gotham;" class="nav-item"><a class="nav-link"
                            href="#portfolio">Tentang
                            Kami</a></li>
                    <li style="white-space: nowrap; font-family:gotham;" class="nav-item"><a class="nav-link"
                            href="#services">Pengajuan
                            Klaim</a></li>
                    <li style="white-space: nowrap; font-family:gotham;" class="nav-item"><a class="nav-link"
                            href="#contact">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header>
        <!-- This div is  intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
        <div class="overlay"></div>

        <!-- The HTML5 video element that will create the background video on the header -->
        {{-- <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="{{ asset('assets/files/video/compro.mp4') }}" type="video/mp4">
        </video> --}}

        <!-- The header content -->
        <div class="container h-100">
            <div class="d-flex h-100 text-center align-items-center">
                <div class="w-100 text-white">
                    {{-- <h1 class="display-3">Halo</h1>
                    <p class="lead mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat, a.</p> --}}
                </div>
            </div>
        </div>
    </header>
    
    {{-- <section class="bg-white" style="border-radius: 20%; background: rgba(235, 235, 237, 0.9);box-shadow: 20px 10px 10px 10px rgba(0, 0, 0, 0.1);border-radius: 20px; font-family:gotham; width:50%; margin:auto;">
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-6">
                    <select class="form-control" name="ongkir" id="status_eng">
                        <option value="" selected disabled>Ongkir</option>
                            @foreach($ongkir as $item)
                                <option value="{{ $item->country_id }}">{{ $item->countries }}</option>
                            @endforeach

                    </select>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="bg-white" style="border-radius: 20%; background: rgba(235, 235, 237, 0.9);box-shadow: 20px 10px 10px 10px rgba(0, 0, 0, 0.1);border-radius: 20px; font-family:gotham; width:50%; margin:auto;">
        <div class="text-center">
            <div class="py-5" style="margin: 4%">

                <h3 class="h4 mb-2" style="font-family: gotham;">Cek Resi</h3>
                <p class="text-muted mb-0" style="font-family: gotham;">Lacak status pengiriman barang.</p>
                <input type="text" id="searching" name="searching" style="text-align: center; font-family: gotham;" class="form-control"
                    placeholder="622xxxxxxxxx">
                <button type="submit" id="search-btn" class="btn btn-info mt-2">
                    <div id="search-text" style="font-family: gotham;">SEARCH</div>
                    <div id="loading" style="display: none" class="loadingio-spinner-spinner-og8ww2g8awq">
                        <div class="ldio-70zupg3by86">
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>

                </button>

            </div>
        </div>
    </section>

    <!-- Tracking -->
    <div class="container px-4 px-lg-5">
        <div class="timeline mx-auto my-5">

            {{-- {{-- <div class="entry">
                <div class="title">
                </div>
                <div class="body">
                    <p>Voluptatibus veniam ea reprehenderit atque reiciendis non laborum adipisci ipsa pariatur omnis.
                    </p>

                </div>
            </div> --}}

            {{-- <div class="entry">
            <div class="title">
                <p>Selasa</p>
                <h6>23 May 2022</h6>
            </div>
            <div class="body">
                <p>Voluptatibus veniam ea reprehenderit atque reiciendis non laborum adipisci ipsa pariatur omnis.
                </p>

            </div>
        </div> --}}
            {{-- <div class="entry">
            <div class="title">
            </div>
            <div class="body">
                <p>Voluptatibus veniam ea reprehenderit atque reiciendis non laborum adipisci ipsa pariatur omnis.
                </p>

            </div>
        </div>
        <div class="entry">
            <div class="title">
            </div>
            <div class="body">
                <p>Voluptatibus veniam ea reprehenderit atque reiciendis non laborum adipisci ipsa pariatur omnis.
                </p>

            </div>
        </div> --}}
        </div>
    </div>


    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('assets/files/banner/1.jpg') }}" class="d-block w-100" alt="...">
                {{-- <div class="carousel-caption">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div> --}}
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/files/banner/2.jpg') }}" class="d-block w-100" alt="...">
                {{-- <div class="carousel-caption">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div> --}}
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/files/banner/3.jpg') }}" class="d-block w-100" alt="...">
                {{-- <div class="carousel-caption">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div> --}}
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <section class="page-section bg-light" id="services">
        <div class="container px-4 px-lg-5" data-aos="zoom-in">
            <h2 class="text-center mt-0" style="font-family: gotham;">Mengapa <font style="color: #008BD0"><b>Memilih TLX</b></h2></font>
            <hr class="divider" />
            <div class="news-slider" style="font-family: gotham;">
                <div class="text-center rounded bg-white mx-3 py-5">
                    <div class="mt-2">
                        <figure class="col-md-2">
                              <img alt="picture" src="{{  asset('assets/img/services/aman.png') }}" class="rounded mx-auto d-block" style="width=40%">
                        </figure>
                        <h3 class="h4 mb-2" style="font-family: gotham;">Safe and Reliable</h3>
                        <p class="text-muted mb-0">Our themes are updated regularly to keep them bug free!</p>
                    </div>
                </div>
                <div class="text-center rounded bg-white mx-3 py-5">
                    <div class="mt-2">
                        <div class="mb-2"><i class="bi-laptop fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2" style="font-family: gotham;">Closer To You</h3>
                        <p class="text-muted mb-0">All dependencies are kept current to keep things fresh.</p>
                    </div>
                </div>
                <div class="text-center rounded bg-white mx-3 py-5">
                    <div class="mt-2">
                        <div class="mb-2"><i class="bi-globe fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2" style="font-family: gotham;">Worldwide Connected</h3>
                        <p class="text-muted mb-0">You can use this design as is, or you can make changes!</p>
                    </div>
                </div>
                <div class="text-center rounded bg-white mx-3 py-5">
                    <div class="mt-2">
                        <div class="mb-2"><i class="bi-heart fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2" style="font-family: gotham;">Smile... Your Package is Guaranteed</h3>
                        <p class="text-muted mb-0">Is it really open source if it's not made with love?</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio-->
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.8171679117722!2d107.5723156508684!3d-6.912451794980864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e797205cb175%3A0xd2176da4fcb21033!2sTLX%20(KIRIM%20PAKET%20KE%20LUAR%20NEGERI)!5e0!3m2!1sen!2sid!4v1612328872682!5m2!1sen!2sid"
        width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
    </iframe>
    <!-- Footer-->
    <footer class="py-5" style="background-color: #008BD0">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="info">
                        <h4 style="color: #fff; font-family: gotham"><strong>TENTANG KAMI</strong></h4>
                        <p class="text-justify" style="color: #fff; font-size:16px; font-family: gotham">
                            Memulai bisnis sejak 2010, kami sebagai penyedia jasa kurir internasional yang handal,
                            menjamin pengiriman anda akan sampai di negara tujuan dengan baik karena kami memiliki
                            relasi dengan partner-partner dari dalam maupun luar negeri.
                        </p><br>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info">
                        <h4 style="color: #fff; font-family: gotham"><strong>KANTOR PUSAT</strong></h4>
                        <p class="text-left" style="color: #fff; font-size:16px; font-family: gotham">
                            JL. RAJAWALI BARAT NO. 89, BANDUNG 40184, INDONESIA
                        </p>
                    </div>
                </div>
                <div class="col-md-6">

                </div>
            </div>
            <hr style="border: 1px solid white;">
        </div>
        <center>
            <div class="copyright" style="font-size:22px; color: #fff; font-family: gotham;">
                <strong>
                    Copyright ©
                    <script>
                        document.write(new Date().getFullYear())
                    </script> PT. DOKUMEN PAKET EKSPRES
                </strong>
            </div>
        </center>
    </footer>