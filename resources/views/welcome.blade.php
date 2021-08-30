<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="TLX" />
    <title>TLX - PT. DOKUMEN PAKET EKSPRES</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.png') }}" />
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic"
        rel="stylesheet" type="text/css" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset('assets/css/styles.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/new.css')}}" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#page-top"><img src="{{ asset('assets/img/tlx_logo.png') }}" style="width: 30%"></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#about">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Cek Resi</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Cek Ongkir</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Agen</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Pengajuan Klaim</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header>

        <!-- This div is  intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
        <div class="overlay"></div>

        <!-- The HTML5 video element that will create the background video on the header -->
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="{{ asset('assets/files/video/compro.mp4') }}" type="video/mp4">
        </video>

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


    <!-- Tracking -->
    <div class="container px-4 px-lg-5">
        <div class="timeline mx-auto my-5">
            <div class="entry">
                <div class="title">
                    <p>Senin</p>
                    <h6>22 May 2022</h6>
                </div>
                <div class="body">
                    <p>Voluptatibus veniam ea reprehenderit atque reiciendis non laborum adipisci ipsa pariatur omnis.</p>

                </div>
            </div>
            <div class="entry">
                <div class="title">
                </div>
                <div class="body">
                    <p>Voluptatibus veniam ea reprehenderit atque reiciendis non laborum adipisci ipsa pariatur omnis.</p>

                </div>
            </div>
            <div class="entry">
                <div class="title">
                    <p>Selasa</p>
                    <h6>23 May 2022</h6>
                </div>
                <div class="body">
                    <p>Voluptatibus veniam ea reprehenderit atque reiciendis non laborum adipisci ipsa pariatur omnis.</p>

                </div>
            </div>
            <div class="entry">
                <div class="title">
                </div>
                <div class="body">
                    <p>Voluptatibus veniam ea reprehenderit atque reiciendis non laborum adipisci ipsa pariatur omnis.</p>

                </div>
            </div>
            <div class="entry">
                <div class="title">
                </div>
                <div class="body">
                    <p>Voluptatibus veniam ea reprehenderit atque reiciendis non laborum adipisci ipsa pariatur omnis.</p>

                </div>
            </div>
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
                <img
                    src="{{ asset('assets/files/banner/1.jpg') }}"
                    class="d-block w-100" alt="...">
                {{-- <div class="carousel-caption">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div> --}}
            </div>
            <div class="carousel-item">
                <img
                    src="{{ asset('assets/files/banner/2.jpg') }}"
                    class="d-block w-100" alt="...">
                {{-- <div class="carousel-caption">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div> --}}
            </div>
            <div class="carousel-item">
                <img
                    src="{{ asset('assets/files/banner/3.jpg') }}"
                    class="d-block w-100" alt="...">
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
        <div class="container px-4 px-lg-5">
            <h2 class="text-center mt-0">Mengapa Memilih TLX</h2>
            <hr class="divider" />
            <div class="news-slider">
                <div class="text-center rounded bg-white mx-3 py-5">
                    <div class="mt-2">
                        <div class="mb-2"><i class="bi-gem fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Safe and Reliable</h3>
                        <p class="text-muted mb-0">Our themes are updated regularly to keep them bug free!</p>
                    </div>
                </div>
                <div class="text-center rounded bg-white mx-3 py-5">
                    <div class="mt-2">
                        <div class="mb-2"><i class="bi-laptop fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Closer To You</h3>
                        <p class="text-muted mb-0">All dependencies are kept current to keep things fresh.</p>
                    </div>
                </div>
                <div class="text-center rounded bg-white mx-3 py-5">
                    <div class="mt-2">
                        <div class="mb-2"><i class="bi-globe fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Worldwide Connected</h3>
                        <p class="text-muted mb-0">You can use this design as is, or you can make changes!</p>
                    </div>
                </div>
                <div class="text-center rounded bg-white mx-3 py-5">
                    <div class="mt-2">
                        <div class="mb-2"><i class="bi-heart fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Smile... Your Package is Guaranteed</h3>
                        <p class="text-muted mb-0">Is it really open source if it's not made with love?</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio-->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.8171679117722!2d107.5723156508684!3d-6.912451794980864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e797205cb175%3A0xd2176da4fcb21033!2sTLX%20(KIRIM%20PAKET%20KE%20LUAR%20NEGERI)!5e0!3m2!1sen!2sid!4v1612328872682!5m2!1sen!2sid" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    <!-- Footer-->
    <footer class="bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="info">
                        <h4 style="color: #000000; font-family: titillium-semi"><strong>TENTANG KAMI</strong></h4>
                        <p class="text-justify" style="color: #000000; font-size:16px; font-family: titillium-semi">
                            Memulai bisnis sejak 2010, kami sebagai penyedia jasa kurir internasional yang handal, menjamin pengiriman anda akan sampai di negara tujuan dengan baik karena kami memiliki relasi dengan partner-partner dari dalam maupun luar negeri.
                        </p><br>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info">
                        <h4 style="color: #000000; font-family: titillium-semi"><strong>KANTOR PUSAT</strong></h4>
                        <p class="text-left" style="color: #000000; font-size:16px; font-family: titillium-semi">
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
            <div class="copyright" style="font-size:22px; color: #000000;">
                <strong>
                    Copyright ©
                    <script>
                        document.write(new Date().getFullYear())
                    </script> PT. DOKUMEN PAKET EKSPRES
                </strong>
            </div>
        </center>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SimpleLightbox plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    <!-- Core theme JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
        integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{asset('assets/js/scripts.js')}}"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

    <script>
        $(document).ready(function(){
        $('.news-slider').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3,
           responsive: [
        {
        breakpoint: 1024,
        settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        }
        },
        {
        breakpoint: 600,
        settings: {
        slidesToShow: 2,
        slidesToScroll: 2
        }
        },
        {
        breakpoint: 480,
        settings: {
        slidesToShow: 1,
        slidesToScroll: 1
        }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
        ]
        });
        });
    </script>
</body>

</html>