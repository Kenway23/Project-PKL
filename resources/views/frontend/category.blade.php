<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Kategori Wisata </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

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
                            <h2>Kategori</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Hero End -->
        <!-- Categories Area Start -->
        <div class="categories-area section-padding30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-80">
                            <h2>Kami Menawarkan untuk Anda</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-travel"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="wisata_alam">Wisata Alam</a></h5>
                                <p>wisata alam sendiri adalah kegiatan perjalanan atau sebagian dari kegiatan tersebut yang dilakukan secara sukarela serta bersifat sementara untuk menikmati gejala keunikan dan keindahan alam di kawasan suaka margasatwa, taman nasional,dan taman hutan raya</p>
                                <a href="wisata_alam">Lihat Paket WIsata Alam</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-respect"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="wisata_religi">Wisata Religi</a></h5>
                                <p>Wisata religi dimaknai sebagai kegiatan wisata ke tempat yang memiliki makna khusus bagi umat beragama, biasanya beberapa tempat ibadah yang memiliki kelebihan. Ini misalnya dilihat dari sisi sejarah, adanya mitos dan legenda mengenai tempat tersebut, ataupun keunikan dan keunggulan arsitektur bangunannya.</p>
                                <a href="wisata_religi">Lihat Paket WIsata Religi</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-problem"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="wisata_budaya">Wisata Budaya</a></h5>
                                <p>Wisata Budaya adalah kegiatan perjalanan yang dilakukan oleh seseorang atau kelompok dengan mengunjungi tempat tertentu untuk tujuan rekreasi, pengembangan pribadi, atau mempelajari daya tarik budaya dengan memanfaatkan potensi budaya dari tempat yang dikunjungi tersebut.</p>
                                <a href="wisata_budaya">Lihat Paket WIsata Budaya</a>
                            </div>
                        </div>
                    </div>

        <!-- Categories Area End -->
        <!-- Popular Locations Start -->
        <div class="popular-location section-padding30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-80">
                            <h2>Top 3 Wisata Alam</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
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
                                <a href="#" class="location-btn">50 <i class="ti-plus"></i> Location</a>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="popular-location section-padding30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-80">
                            <h2>Top 3 Wisata Religi</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-location mb-30">
                            <div class="location-img">
                                <img src="{{asset('assets2/img/wisata/masjidagung.jpg')}}" alt="" style="height:240px">
                            </div>
                            <div class="location-details">
                                <p>Masjid Raya Bandung</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-location mb-30">
                            <div class="location-img">
                                <img src="{{asset('assets2/img/wisata/kampungmahmud.jpg')}}" alt="">
                            </div>
                            <div class="location-details">
                                <p>Kampung Mahmud</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-location mb-30">
                            <div class="location-img">
                                <img src="{{asset('assets2/img/wisata/masjidpusdai.jpg')}}" alt="">
                            </div>
                            <div class="location-details">
                                <p>Masjid Pusdai</p>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="popular-location section-padding30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-80">
                            <h2>Top 3 Wisata Budaya</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-location mb-30">
                            <div class="location-img">
                                <img src="{{asset('assets2/img/wisata/culturepark.jpg')}}" alt="" style="height:220px">
                            </div>
                            <div class="location-details">
                                <p>West Java Cultural Park</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-location mb-30">
                            <div class="location-img">
                                <img src="{{asset('assets2/img/wisata/SeniMayang.jpg')}}" alt="">
                            </div>
                            <div class="location-details">
                                <p>Padepokan Seni Mayang Sunda</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-location mb-30">
                            <div class="location-img">
                                <img src="{{asset('assets2/img/wisata/saungangklung.jpg')}}" alt="">
                            </div>
                            <div class="location-details">
                                <p>Saung Angklung Udjo</p>
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