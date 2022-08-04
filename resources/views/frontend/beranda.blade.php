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
                                <h1>Selamat Datang Website Kami</h1>
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
                                <h5><a href="catagori.html">Berpengalaman</a></h5>
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
                                <h5><a href="catagori.html">Kualitas Pelayanan</a></h5>
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
                                <h5><a href="catagori.html">Harga Bersaing</a></h5>
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
                                <h5><a href="catagori.html">Mudah dan Praktis</a></h5>
                                <p>Kami memberikan kemudahan dalam mempersiapkan akomodasi dan transportasi terbaik, agar rencana liburan Anda berjalanan dengan lancar.</p>
                            </div>
                        </div>
                    </div>
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
                            <h2>Paket Wisata Unggulan</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-location mb-30">
                            <div class="location-img">
                                <img src="{{asset('assets2/img/gallery/location1.png')}}" alt="">
                            </div>
                            <div class="location-details">
                                <p>New York</p>
                                <a href="#" class="location-btn">65 <i class="ti-plus"></i> Location</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-location mb-30">
                            <div class="location-img">
                                <img src="{{asset('assets2/img/gallery/location2.png')}}" alt="">
                            </div>
                            <div class="location-details">
                                <p>Paris</p>
                                <a href="#" class="location-btn">60 <i class="ti-plus"></i> Location</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-location mb-30">
                            <div class="location-img">
                                <img src="{{asset('assets2/img/gallery/location3.png')}}" alt="">
                            </div>
                            <div class="location-details">
                                <p>Rome</p>
                                <a href="#" class="location-btn">50 <i class="ti-plus"></i> Location</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-location mb-30">
                            <div class="location-img">
                                <img src="{{asset('assets2/img/gallery/location4.png')}}" alt="">
                            </div>
                            <div class="location-details">
                                <p>Italy</p>
                                <a href="#" class="location-btn">28 <i class="ti-plus"></i> Location</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-location mb-30">
                            <div class="location-img">
                                <img src="{{asset('assets2/img/gallery/location5.png')}}" alt="">
                            </div>
                            <div class="location-details">
                                <p>Nepal</p>
                                <a href="#" class="location-btn">99 <i class="ti-plus"></i> Location</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-location mb-30">
                            <div class="location-img">
                                <img src="{{asset('assets2/img/gallery/location6.png')}}" alt="">
                            </div>
                            <div class="location-details">
                                <p>indonesia</p>
                                <a href="#" class="location-btn">78 <i class="ti-plus"></i> Location</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- More Btn -->
                <div class="row justify-content-center">
                    <div class="room-btn pt-20">
                        <a href="catagori.html" class="btn view-btn1">View All Places</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Popular Locations End -->
        <!-- Services Area Start -->
        <div class="services-area pt-150 pb-150 section-bg" data-background="{{asset('assets2/img/gallery/section_bg02.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle2 text-center mb-80">
                            <span>Easy to explore</span>
                            <h2>How It Works</h2>
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
                                <h5><a href="#">1. Choose a Category</a></h5>
                                <p>incidid labore lore magna aliqua uisipsum suspendis loris.</p>
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
                                <h5><a href="#">2. what you want</a></h5>
                                <p>incidid labore lore magna aliqua uisipsum suspendis loris.</p>
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
                                <h5><a href="#">3. Go out & Explore</a></h5>
                                <p>incidid labore lore magna aliqua uisipsum suspendis loris.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Area End -->
         <!-- peoples-visit Start -->
         <div class="peoples-visit dining-padding-top">
            <!-- Single Left img -->
            <div class="single-visit left-img">
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-lg-8">
                            <div class="visit-caption">
                                <span>We are offering for you</span>
                                <h3>Every Month, Millions of People 
                                    visit this site We’ve Built.</h3>
                                <p>Unlike what its name implies, dry cleaning is not actually a 'dry' process. Clothes are soaked in a different solvent.</p>
                                <!--Single Visit categories -->
                                <div class="visit-categories mb-40">
                                    <div class="visit-location">
                                        <span class="flaticon-travel"></span>
                                    </div>
                                    <div class="visit-cap">
                                        <h4>Great places in the world</h4>
                                        <p>Unlike what its name implies, dry cleaning is not actu  process. Clothes soaked differentent.
                                        </p>
                                    </div>
                                </div>
                                <!--Single Visit categories -->
                                <div class="visit-categories">
                                    <div class="visit-location">
                                        <span class="flaticon-work"></span>
                                    </div>
                                    <div class="visit-cap">
                                        <h4>Biggest category listing</h4>
                                        <p>Unlike what its name implies, dry cleaning is not actu  process. Clothes soaked differentent.
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
        <!-- Blog Ara Start -->
        <div class="home-blog-area section-padding30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-70">
                            <span>Our blog</span>
                            <h2>News and tips</h2>
                        </div> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="{{asset('assets2/img/gallery/home_blog1.png')}}" alt="">
                            </div>
                            <div class="team-caption">
                                <span>HEALTH & CARE</span>
                                <h3><a href="blog.html">The Best SPA Salons For
                                    Your Relaxation</a></h3>
                                <p>October 6, 2020by Steve</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="{{asset('assets2/img/gallery/home_blog2.png')}}" alt="">
                            </div>
                            <div class="team-caption">
                                <span>HEALTH & CARE</span>
                                <h3><a href="blog.html">The Best SPA Salons For
                                    Your Relaxation</a></h3>
                                <p>October 6, 2020by Steve</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="{{asset('assets2/img/gallery/home_blog3.png')}}" alt="">
                            </div>
                            <div class="team-caption">
                                <span>HEALTH & CARE</span>
                                <h3><a href="blog.html">The Best SPA Salons For
                                    Your Relaxation</a></h3>
                                <p>October 6, 2020by Steve</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Ara End -->

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