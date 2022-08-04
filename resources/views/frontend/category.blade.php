<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Directory HTML-5 Template </title>
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
                            <span>Kami menawarkan untuk Anda</span>
                            <h2>Kategori Wisata</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-list"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="#">Wisata Alam</a></h5>
                                <p>Must explain your how this keind denoun pleasure</p>
                                <a href="#">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-respect"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="#">Wisata Religi</a></h5>
                                <p>Must explain your how this keind denoun pleasure</p>
                                <a href="#">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-travel"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="#">Wisata Budaya</a></h5>
                                <p>Must explain your how this keind denoun pleasure</p>
                                <a href="#">View Details</a>
                            </div>
                        </div>
                    </div>

        <!-- Categories Area End -->
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
        <!-- Popular Locations Start -->
        <div class="popular-location section-padding30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-80">
                            <span>Most visited places</span>
                            <h2>Popular Locations</h2>
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