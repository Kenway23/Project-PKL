<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Rental Mobil </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

		<!-- CSS here -->
            <link rel="stylesheet" href="{{asset('assets2/css/bootstrap.min.css')}}">
            <link rel="stylesheet" href="{{asset('assets2/css/owl.carousel.min.css')}}">
            <link rel="stylesheet" href="{{asset('assets2/css/slicknav.css')}}">
            <link rel="stylesheet" href="{{asset('assets2/css/flaticon.css')}}">
            <link rel="stylesheet" href="{{asset('assets2/css/animate.min.css')}}">
            <link rel="stylesheet" href="{{asset('assets2/css/magnific-popup.css')}}">
            <link rel="stylesheet" href="{{asset('assets2/css/fontawesome-all.min.css')}}">
            <link rel="stylesheet" href="{{asset('assets2/css/themify-icons.css')}}">
            <link rel="stylesheet" href="{{asset('assets2/css/slick.css')}}">
            <link rel="stylesheet" href="{{asset('assets2/css/nice-select.css')}}">
            <link rel="stylesheet" href="{{asset('assets2/css/style.css')}}">
   </head>

   <body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <header>
        <!-- Header Start -->
        @include('frontend.components.header')
        <!-- Header End -->
    </header>
    <main>

        <!-- Hero Start-->
        <div class="hero-area2  slider-height2 hero-overly2 d-flex align-items-center ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center pt-50">
                            <h2>Rental Mobil</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Hero End -->
        <!-- Card Paket Wisata -->
        <br>
        <div class="container">
        <div class="row">
        @foreach($au as $data)
        <div class="col-3">
        <div class="card shadow-lg" style="width: 18rem; height: 20rem;">
                <div class="card-body">
        <img src="{{$data->image()}}" class="card-img-top" alt="..." >
            <h5 class="card-title">{{$data->jenis_mobil}}</h5>
        </div>
        <a class="btn btn-primary" href="{{route('mobiluser.show',$data->id) }}">Lihat Detail</a>
        </div>
        </div>
        @endforeach
        </div>
        </div>
        <!-- End Card Paket Wisata -->
        <!-- Popular Locations Start -->
        <div class="popular-location section-padding30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-80">
                            <h2>Top 3 Mobil Terfavorit</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-location mb-30">
                            <div class="location-img">
                                <img src="{{asset('assets2/img/kendaraan/BusPariwisata.jpg')}}" alt="">
                            </div>
                            <div class="location-details">
                                <p>Bus Pariwisata</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-location mb-30"> , 
                            <div class="location-img">
                                <img src="{{asset('assets2/img/kendaraan/Alphard.png')}}" alt="">
                            </div>
                            <div class="location-details">
                                <p>Alphard</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-location mb-30">
                            <div class="location-img">
                                <img src="{{asset('assets2/img/kendaraan/avanza.jpeg')}}" alt="">
                            </div>
                            <div class="location-details">
                                <p>Toyota Avanza</p>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Popular Locations End -->

    </main>
        <!-- Footer Start-->
        @include('frontend.components.footer')
        <!-- Footer End-->
    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>


    <!-- JS here -->
		<!-- All JS Custom Plugins Link Here here -->
        <script src="{{asset('assets2/js/vendor/modernizr-3.5.0.min.js')}}"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="{{asset('assets2/js/vendor/jquery-1.12.4.min.js')}}"></script>
        <script src="{{asset('assets2/js/popper.min.js')}}"></script>
        <script src="{{asset('assets2/js/bootstrap.min.js')}}"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="{{asset('assets2/js/jquery.slicknav.min.js')}}"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="{{asset('assets2/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('assets2/js/slick.min.js')}}"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="{{asset('assets2/js/wow.min.js')}}"></script>
		<script src="{{asset('assets2/js/animated.headline.js')}}"></script>
        <script src="{{asset('assets2/js/jquery.magnific-popup.js')}}"></script>

		<!-- Nice-select, sticky -->
        <script src="{{asset('assets2/js/jquery.nice-select.min.js')}}"></script>
		<script src="{{asset('assets2/js/jquery.sticky.js')}}"></script>
        
        <!-- contact js -->
        <script src="{{asset('assets2/js/contact.js')}}"></script>
        <script src="{{asset('assets2/js/jquery.form.js')}}"></script>
        <script src="{{asset('assets2/js/jquery.validate.min.js')}}"></script>
        <script src="{{asset('assets2/js/mail-script.js')}}"></script>
        <script src="{{asset('assets2/js/jquery.ajaxchimp.min.js')}}"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="{{asset('assets2/js/plugins.js')}}"></script>
        <script src="{{asset('assets2/js/main.js')}}"></script>
        
    </body>
</html>