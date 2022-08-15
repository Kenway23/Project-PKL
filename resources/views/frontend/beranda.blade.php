<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Beranda</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="{{asset('assets2/img/logo/logoperusahaan.png')}}">

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
                    <img src="{{asset('assets2/img/logo/loder.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
   <!-- header -->
   @include('frontend.components.header')
   <!-- end header -->
    <main>

        <!-- Hero Area Start-->
        <div class="slider-area hero-overly">
            <div class="single-slider hero-overly  slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-9">
                            <!-- Hero Caption -->
                            <div class="hero__caption">
                                <h1>Selamat Datang Di Website Kami</h1>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--Hero Area End-->
         <!-- Categories Area Start -->
         <div class="categories-area section-padding30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-80">
                            <h2>Kenapa memilih ARSY Tours & Wisata ?</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-work"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="#">Berpengalaman</a></h5>
                                <p>Kami memiliki tim yang profesional dan berpengalaman dibidangnya masing-masing, sehingga dapat memberikan pelayanan yang optimal.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-problem"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="#">Kualitas Pelayanan</a></h5>
                                <p>Kerja keras dan memberikan pelayanan dengan hati merupakan dedikasi kami untuk memastikan liburan Anda berkesan dan menyenangkan.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-list"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="#">Harga Bersaing</a></h5>
                                <p>Dengan jaringan dan mitra yang kuat dibidang pariwisata, membuat kami dapat memberikan pelayanan dan harga terbaik untuk tour Anda.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-respect"></span>
                            </div>
                            <div class="cat-cap">
                            <ion-icon name="car-outline"></ion-icon>
                                <h5><a href="#">Mudah dan Praktis</a></h5>
                                <p>Kami memberikan kemudahan dalam mempersiapkan akomodasi dan transportasi terbaik, agar rencana liburan Anda berjalanan dengan lancar.</p>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
        <!-- Categories Area End -->
         <!-- peoples-visit Start -->
         <div class="peoples-visit dining-padding-top">
            <!-- Single Left img -->
            <div class="single-visit left-img">
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-lg-8">
                            <div class="visit-caption">
                                <h3>PROFIL PERUSAHAAN</h3>
                                <p>CV. Arsy Global Nusantara (Arsy Tours & Wisata), merupakan agen/biro wisata perjalanan yang didirikan pada tahun 2013. Kami terdiri dari profesional yang memiliki pengalaman dibidang pariwisata maupun penerbangan. Saat ini kami melayani Paket Perjalanan Tour ke Bandung Selain itu kami menyediakan jasa layanan Rental Mobil di Bandung tentunya dengan kualitas kendaraan yang bersih, aman, terawat dan nyaman.
                                     produk  yang kami tawarkan kepada anda :
                                    Paket Tour dan Berwisata.
                                        Totalitas, Loyalitas dan Integritas adalah modal kami dalam menjalankan usaha ini. Di tunjang dengan pengalaman yang kami miliki dalam jasa biro perjalanan, kami yakin perusahaan kami dapat menjadi mitra perjalanan anda dengan pelayanan yang baik dan memuaskan.</p>
                                <!--Single Visit categories -->
                                <div class="visit-categories mb-40">
                                    <div class="visit-location">
                                        <span class="flaticon-travel"></span>
                                    </div>
                                    <div class="visit-cap">
                                        <h4>Visi</h4>
                                        <p>Menjadi perusahaan multi nasional tingkat global dalam jasa pelayanan transportasi, akomodasi, tours & wisata yang dapat memberikan kontribusi pertumbuhan ekonomi.
                                        </p>
                                    </div>
                                </div>
                                <!--Single Visit categories -->
                                <div class="visit-categories">
                                    <div class="visit-location">
                                        <span class="flaticon-work"></span>
                                    </div>
                                    <div class="visit-cap">
                                        <h4>Misi</h4>
                                        <p>1. Melayani dan menyediakan produk yang terbaik kepada seluruh pelanggan dan mitra, untuk jasa transportasi, akomodasi dan tours & wisata.
                                        </p>
                                        <p>
                                        2. Menyiapkan SDM yang handal dan terampil dibidangnya dan berkomitmen pada standard kerja yang tinggi.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- peoples-visit End -->
        <!-- Services Area Start -->
        <div class="services-area pt-150 pb-150 section-bg" data-background="{{asset('assets2/img/gallery/section_bg02.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle2 text-center mb-80">
                            <h2>Moto Perusahaan</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-lg-3 col-md-6">
                        <div class="single-services text-center mb-50">
                            <div class="services-icon">
                                <span class="flaticon-list"></span>
                            </div>
                            <div class="services-cap">
                                <h5><a href="#">1. Kepuasan Pelanggan Nomor 1</a></h5>
                            </div>
                            <!-- Shpape -->
                            <img class="shape1 d-none d-lg-block" src="{{asset('assets2/img/icon/serices1.png')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-services text-center mb-50">
                            <div class="services-icon">
                                <span class="flaticon-problem"></span>
                            </div>
                            <div class="services-cap">
                                <h5><a href="#">2. Kepuasan Pelanggan Adalah Tujuan Kami</a></h5>
                            </div>
                            <img class="shape2 d-none d-lg-block" src="{{asset('assets2/img/icon/serices2.png')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-services text-center mb-50">
                            <div class="services-icon">
                                <span class="flaticon-respect"></span>
                            </div>
                            <div class="services-cap">
                                <h5><a href="#">3. Hadir Untuk Melayani Keinginan Pelanggan Dengan Maksimal</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Area End -->
    <!-- Popular Locations Start -->
    <div class="popular-location section-padding30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-80">
                            <h2>Top 3 Tempat Terfavorit</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-location mb-30">
                            <div class="location-img">
                                <img src="{{asset('assets2/img/wisata/tamanhutanraya.jpg')}}" alt="">
                            </div>
                            <div class="location-details">
                                <p>Taman Hutan Raya Ir. H. Djuanda</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-location mb-30">
                            <div class="location-img">
                                <img src="{{asset('assets2/img/wisata/tebingkeraton.jpg')}}" alt="">
                            </div>
                            <div class="location-details">
                                <p>Tebing Keraton</p>
                         
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-location mb-30">
                            <div class="location-img">
                                <img src="{{asset('assets2/img/wisata/forestwalk.jpg')}}" alt="">
                            </div>
                            <div class="location-details">
                                <p>Forest Walk Babakan Siliwangi</p>
                    
                            </div>
                        </div>
                    </div>
                </div>
                <!-- More Btn -->
                <div class="row justify-content-center">
                    <div class="room-btn pt-20">
                        <a href="paket_wisata" class="btn view-btn1">Lihat Senua Tempat</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Popular Locations End -->
    </main>
    <footer>
        <!-- Footer Start-->
		@include('frontend.components.footer')
        <!-- Footer End-->
    </footer>
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