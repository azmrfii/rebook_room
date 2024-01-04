<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Radar Bogor | Book Ruangan</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link rel="shortcut icon" href="{{ asset('assets/img/logo.png') }}" type="image/x-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{ asset('assets/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/lib/nivo-slider/css/nivo-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/owlcarousel/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/owlcarousel/owl.transitions.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/venobox/venobox.css') }}" rel="stylesheet">

    <!-- Nivo Slider Theme -->
    <link href="{{ asset('assets/css/nivo-slider-theme.css') }}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- Responsive Stylesheet File -->
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
</head>

<body data-spy="scroll" data-target="#navbar-example">
    <header>
        <!-- header-area start -->
        <div id="sticker" class="header-area">
        <div class="container">
            <div class="row">
            <div class="col-md-12 col-sm-12">

                <!-- Navigation -->
                <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Brand -->
                    <a class="navbar-brand page-scroll sticky-logo" href="index.html">
                    <h1><span>25</span>Radar Bogor</h1>
                    </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                    <ul class="nav navbar-nav navbar-right">
                    <li class="active">
                        <a class="page-scroll" href="#home">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#room">Room</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="https://www.radarbogor.id/" target="_blank">Blog</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                    <li>
                    @guest
                        @if (Route::has('login'))
                            <a class="page-scroll" href="{{ route('login') }}"><span class="btn btn-primary">Login</span></a>
                        @endif
                    @else
                        @if (Route::has('dashboard'))
                            <a class="page-scroll" href="{{ route('dashboard') }}"><span class="btn btn-primary">Dashboard</span></a>
                        @endif
                    @endguest
                    </li>
                    </ul>
                </div>
                <!-- navbar-collapse -->
                </nav>
                <!-- END: Navigation -->
            </div>
            </div>
        </div>
        </div>
        <!-- header-area end -->
    </header>
    <!-- header end -->

    <!-- Start Slider Area -->
    <div id="home" class="slider-area">
        <div class="bend niceties preview-2">
        <div id="ensign-nivoslider" class="slides">
            <img src="{{ asset('assets/img/slider/rdrbgr1 (1).jpeg') }}" alt="" title="#slider-direction-1" />
            <img src="{{ asset('assets/img/slider/rdrbgr1 (2).jpeg') }}" alt="" title="#slider-direction-2" />
            <img src="{{ asset('assets/img/slider/rdrbgr1 (3).jpeg') }}" alt="" title="#slider-direction-3" />
        </div>

        <!-- direction 1 -->
        <div id="slider-direction-1" class="slider-direction slider-one">
            <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="slider-content">
                    <!-- layer 1 -->
                    <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                    <h2 class="title1">Lebih Dekat Lebih Lengkap </h2>
                    </div>
                    <!-- layer 2 -->
                    <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                    <h1 class="title2">25 Radar Bogor</h1>
                    </div>
                    <!-- layer 3 -->
                    <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                    <a class="ready-btn right-btn page-scroll" href="#book_ruangan">Book Ruangan</a>
                    <a class="ready-btn page-scroll" href="#about">Learn More</a>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>

        <!-- direction 2 -->
        <div id="slider-direction-2" class="slider-direction slider-two">
            <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="slider-content text-center">
                    <!-- layer 1 -->
                    <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                    <h2 class="title1">Lebih Dekat Lebih Lengkap </h2>
                    </div>
                    <!-- layer 2 -->
                    <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                    <h1 class="title2">25 Radar Bogor</h1>
                    </div>
                    <!-- layer 3 -->
                    <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                    <a class="ready-btn right-btn page-scroll" href="#book_ruangan">Book Ruangan</a>
                    <a class="ready-btn page-scroll" href="#about">Learn More</a>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>

        <!-- direction 3 -->
        <div id="slider-direction-3" class="slider-direction slider-two">
            <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="slider-content">
                    <!-- layer 1 -->
                    <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                    <h2 class="title1">Lebih Dekat Lebih Lengkap </h2>
                    </div>
                    <!-- layer 2 -->
                    <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                    <h1 class="title2">25 Radar Bogor</h1>
                    </div>
                    <!-- layer 3 -->
                    <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                    <a class="ready-btn right-btn page-scroll" href="#book_ruangan">Book Ruangan</a>
                    <a class="ready-btn page-scroll" href="#about">Learn More</a>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    <!-- End Slider Area -->

    <!-- Start About area -->
    <div id="about" class="about-area area-padding">
        <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
                <h2>About 25Radar Bogor</h2>
            </div>
            </div>
        </div>
        <div class="row">
            <!-- single-well start-->
            <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="well-left">
                <div class="single-well">
                <a href="#">
                    <img src="{{ asset('assets/img/slider/rdrbgr1 (2).jpeg') }}" alt="" style="width: 500px;">
                </a>
                </div>
            </div>
            </div>
            <!-- single-well end-->
            <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="well-middle">
                <div class="single-well">
                <p>
                    Radar Bogor adalah sebuah surat kabar harian yang terbit di kota Bogor, Jawa Barat, Indonesia.
                    Surat kabar ini termasuk dalam grup Jawa Pos. Kantor pusatnya terletak di Jl. KH. R. Abdullah Bin Muhammad Nuh No. 30,
                    Taman Yasmin, Kota Bogor. Koran ini pertama kali terbit pada 2 November 1998. Koran ini dicetak sebanyak 15.000-20.000
                    ekslempar setiap harinya dan menjadi koran terbesar di Bogor. Slogan dari harian Radar Bogor adalah "Besar karena Tersebar".
                    Di ulang tahunnya yang ke 19 pada 2 November 2017, Radar Bogor melaunching versi digitalnya yang dapat diakses
                    di www.radarbogor.id dengan sajian berita teks dan e-paper serta mengunsung slogan dan "Jendela Informasi Bogor".
                    <br>
                    <br>
                    Radar Bogor juga merupakan bagian dari Radar Bogor Grup (RBG) yang membawahi surat kabar Radar Bogor, Radar Bandung,
                    Radar Depok, Radar Bekasi, Radar Karawang, Harian Metropolitan, dan portal berita pojoksatu.id
                    <br>
                    <br>
                    Sebanyak 75% dari isi harian ini adalah berita lokal, sementara 20% sisanya diisi dengan berita nasional,
                    dan 5% berupa berita internasional. Berita tersebut diperoleh dari humas lembaga pemerintah dan swasta,
                    Jawa Post News Network, tokoh masyarakat di Bogor, dan berburu berita yang dilakukan wartawan.
                </p>
                </div>
            </div>
            </div>
            <!-- End col-->
        </div>
        </div>
    </div>
    <!-- End About area -->

    <!-- Start room Area -->
    <div id="room" class="portfolio-area area-padding fix">
        <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
                <h2>Ruangan Kami</h2>
            </div>
            </div>
        </div>
        <div class="row">
            <!-- Start Portfolio -page -->

            <div class="awesome-project-content">
            <!-- single-awesome-project start -->
            @foreach ($ruangan as $item)
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="single-awesome-project">
                <div class="awesome-img">
                    <a href="#"><img src="{{ url('Image/Ruangan/'.$item->foto_room) }}" alt="" /></a>
                    <div class="add-actions text-center">
                    <div class="project-dec">
                        <a class="venobox" data-gall="myGallery" href="{{ url('Image/Ruangan/'.$item->foto_room) }}">
                        <h4>{{ $item->nm_room }}</h4>
                        <span>{{ $item->lokasi }}</span>
                        </a>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            @endforeach
            <!-- single-awesome-project end -->
            </div>
        </div>
        </div>
    </div>
    <!-- awesome-portfolio end -->

    <!-- Start contact Area -->
    <div id="contact" class="contact-area">
        <div class="contact-inner area-padding">
        <div class="contact-overly"></div>
        <div class="container ">
            <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                <h2>Contact us</h2>
                </div>
            </div>
            </div>
            <div class="row">
            <!-- Start contact icon column -->
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="contact-icon text-center">
                <div class="single-icon">
                    <i class="fa fa-mobile"></i>
                    <p>
                    Call: 0251-7544005
                    <br>
                    <span>
                        <a href="https://api.whatsapp.com/send?phone=628568336115&text=Hello, more information!">
                            0856-8336-115 (Iklan)
                        </a>
                        </span>
                    <br>
                    <span>
                        <a href="https://api.whatsapp.com/send?phone=6281558470103&text=Hello, more information!">
                            0815-5847-0103 (Langganan Koran/ ePaper)
                        </a>

                    </span>
                    </p>
                </div>
                </div>
            </div>
            <!-- Start contact icon column -->
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="contact-icon text-center">
                <div class="single-icon">
                    <i class="fa fa-envelope-o"></i>
                    <p>
                    Email: redaksi [at] radar-bogor.com<br>
                    <span>Web: www.radarbogor.id</span>
                    </p>
                </div>
                </div>
            </div>
            <!-- Start contact icon column -->
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="contact-icon text-center">
                <div class="single-icon">
                    <i class="fa fa-map-marker"></i>
                    <p>
                    Location: Graha Pena Bogor,
                    Jl KHR Abdullah Bin Nuh Jl. Ring Road Taman Yasmin No.30, RT.05/RW.04, Cibadak,

                    <br>
                    <span>Kec. Bogor Bar., Kota Bogor, Jawa Barat 16113​</span>
                    </p>
                </div>
                </div>
            </div>
            </div>
            <div class="row">

            <!-- Start Google Map -->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <!-- Start Map -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31708.617862089784!2d106.75946904049977!3d-6.574917428773414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c47d2e9705f1%3A0x2a3a75afa84b0714!2sRadar%20Bogor%20Graha%20Pena!5e0!3m2!1sid!2sid!4v1704338212905!5m2!1sid!2sid" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <!-- End Map -->
            </div>
            <!-- End Google Map -->

            <!-- Start  contact -->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="form contact-form">
                <h3>Booking Ruangan</h3>
                @if (Session::get('error'))
                    {{ Session::get('error') }}
                @endif
                @if (Session::get('message'))
                    {{ Session::get('message') }}
                @endif
                <form action="{{ route('booking') }}" id="book_ruangan" method="post">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                    <select name="id_room" id="" class="form-control" id="name" placeholder="Ruangan" >
                        <option value="">--Pilih Ruangan--</option>
                        @foreach ($ruangan as $item)
                        <option value="{{ $item->id }}">{{ $item->nm_room }}</option>
                        @endforeach
                    </select>
                    <div class="validation"></div>
                    </div>
                    <div class="form-group">
                    <input type="text" name="nama_rebook" class="form-control" id="name" placeholder="Your Name" />
                    <div class="validation"></div>
                    </div>
                    <div class="form-group">
                    <input type="text" name="no_hp_rebook" class="form-control" id="no_hp_rebook" placeholder="Nomor Handphone" />
                    <div class="validation"></div>
                    </div>
                    <div class="form-group">
                    <label for="waktu_mulai">Waktu Mulai</label>
                    <input type="datetime-local" name="waktu_mulai" class="form-control" id="waktu_mulai" />
                    <div class="validation"></div>
                    </div>
                    <div class="form-group">
                    <label for="waktu_berakhir">Waktu Berakhir</label>
                    <input type="datetime-local" name="waktu_berakhir" class="form-control" id="waktu_berakhir" />
                    <div class="validation"></div>
                    </div>
                    <div class="text-center"><button type="submit">Booking</button></div>
                </form>
                {{-- <form action="{{ route('booking') }}" method="post" role="form" class="contactForm">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                    <select name="id_room" id="" class="form-control" id="name" placeholder="Ruangan" >
                        <option value="">--Pilih Ruangan--</option>
                        @foreach ($ruangan as $item)
                        <option value="{{ $item->id }}">{{ $item->nm_room }}</option>
                        @endforeach
                    </select>
                    <div class="validation"></div>
                    </div>
                    <div class="form-group">
                    <input type="text" name="nama_rebook" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                    </div>
                    <div class="form-group">
                    <input type="text" name="no_hp_rebook" class="form-control" id="no_hp_rebook" placeholder="Nomor Handphone" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                    </div>
                    <div class="form-group">
                    <input type="date" name="tgl_rebook" class="form-control" id="tgl_rebook" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                    </div>
                    <div class="form-group">
                    <input type="time" name="waktu_mulai" class="form-control" id="waktu_mulai" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                    </div>
                    <div class="form-group">
                    <input type="time" name="waktu_berakhir" class="form-control" id="waktu_berakhir" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                    </div>
                    <div class="text-center"><button type="submit">Booking</button></div>
                </form> --}}
                </div>
            </div>
            <!-- End Left contact -->
            </div>
        </div>
        </div>
    </div>
    <!-- End Contact Area -->

    <!-- Start Footer bottom Area -->
    <footer>
        <div class="footer-area">
        <div class="container">
            <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="footer-content">
                <div class="footer-head">
                    <div class="footer-logo">
                    <h2><span>25</span>Radar Bogor</h2>
                    </div>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae tempore facere, modi sint dignissimos dolorum odio minus. Odio vel sapiente recusandae veniam natus voluptatum labore?</p>
                    <div class="footer-icons">
                    <ul>
                        <li>
                        <a href="https://id-id.facebook.com/radar.bogor/" target="_blank"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                        <a href="https://twitter.com/radarbogorID" target="_blank"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                        <a href="https://www.instagram.com/radar_bogor" target="_blank"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li>
                        <a href="https://www.youtube.com/channel/UCZ0d_a44D-aORvJze6V-0Kg" target="_blank"><i class="fa fa-youtube"></i></a>
                        </li>
                    </ul>
                    </div>
                </div>
                </div>
            </div>
            <!-- end single footer -->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="footer-content">
                <div class="footer-head">
                    <h4>information</h4>
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                    </p>
                    <div class="footer-contacts">
                    <p><span>Tel:</span> 0251-7544005</p>
                    <p><span>Email: <a href="mailto:redaksi [at] radar-bogor.com.com">redaksi [at] radar-bogor.com</a></span></p>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="footer-area-bottom">
        <div class="container">
            <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="copyright text-center">
                <p>
                    &copy; Copyright <strong>25Radar Bogor</strong>. All Rights Reserved
                </p>
                </div>
            </div>
            </div>
        </div>
        </div>
    </footer>

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>


    <script src="{{ asset('assets/lib/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/lib/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/lib/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('assets/lib/knob/jquery.knob.js') }}"></script>
    <script src="{{ asset('assets/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/lib/parallax/parallax.js') }}"></script>
    <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/lib/nivo-slider/js/jquery.nivo.slider.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/appear/jquery.appear.js') }}"></script>
    <script src="{{ asset('assets/lib/isotope/isotope.pkgd.min.js') }}"></script>

    <!-- Contact Form JavaScript File -->
    <script src="{{ asset('assets/contactform/contactform.js') }}"></script>

    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
