<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Artikel </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets2/img/logo/logoperusahaan.png')}}">

    <!-- CSS here -->
        <link rel="stylesheet" href="{{asset('assets2/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets2/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets2/css/slicknav.css')}}">
        <link rel="stylesheet" href="{{asset('assets2/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets2/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('assets2/css/fontawesome-all.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets2/css/themify-icons.css')}}">
        <link rel="stylesheet" href="{{asset('assets2/css/themify-icons.css')}}">
        <link rel="stylesheet" href="{{asset('assets2/css/slick.css')}}">
        <link rel="stylesheet" href="{{asset('assets2/css/nice-select.css')}}">
        <link rel="stylesheet" href="{{asset('assets2/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets2/css/responsive.css')}}">
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
    <header>
        <!-- Header Start -->
        @include('frontend.components.header')
        <!-- Header End -->
    </header>
    <main>

        <!-- Hero Start-->
        <div class="hero-area2  slider-height2 hero-overly2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center pt-50">
                            <h2>Artikel</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Hero End -->
        <!--================Blog Area =================-->
        <section class="blog_area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mb-5 mb-lg-0">
                        <div class="blog_left_sidebar">
                        @foreach($au as $data)
                        <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="{{ $data->image() }}" alt="">
                                </div>

                                <div class="blog_details">
                                    <a class="d-inline-block" href="{{ route('artikeluser.show',$data->id) }}">
                                        <h2>{{$data->nama_artikel}}</h2>
                                    </a>
                                   
                                </div>
                            </article>
                            @endforeach

                            <nav class="blog-pagination justify-content-center d-flex">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a href="#" class="page-link" aria-label="Previous">
                                            <i class="ti-angle-left"></i>
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">1</a>
                                    </li>
                                    <li class="page-item active">
                                        <a href="#" class="page-link">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link" aria-label="Next">
                                            <i class="ti-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            <aside class="single_sidebar_widget search_widget">
                                <form action="#">
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder='Search Keyword'
                                                onfocus="this.placeholder = ''"
                                                onblur="this.placeholder = 'Search Keyword'">
                                            <div class="input-group-append">
                                                <button class="btns" type="button"><i class="ti-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                        type="submit">Search</button>
                                </form>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Blog Area =================-->

    </main>
   
        <!-- Footer Start-->
        @include('frontend.components.footer')
        <!-- Footer End-->

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
		
		<!-- Nice-select, sticky -->
        <script src="{{asset('assets2/js/jquery.nice-select.min.js')}}"></script>
		<script src="{{asset('assets2/js/jquery.sticky.js')}}"></script>
        <script src="{{asset('assets2/js/jquery.magnific-popup.js')}}"></script>

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