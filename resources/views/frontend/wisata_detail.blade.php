<!doctype html>
<html class="no-js" lang="zxx">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>Detail Wisata </title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

  <!-- CSS here -->
      <link rel="stylesheet" href="{{asset('assets2/css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{asset('assets2/css/owl.carousel.min.css')}}">
      <link rel="stylesheet" href="{{asset('assets2/css/slicknav.css')}}">
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
   <!-- Preloader Start-->
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
                           <h2>{{$wisata->nama_wisata}}</h2>
                     </div>
                  </div>
               </div>
         </div>
      </div>
      <!--Hero End -->
      <!--================Blog Area =================-->
      <section class="blog_area single-post-area section-padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 posts-list">
                  <div class="single-post">
                     <div class="feature-img">
                        <img class="img-fluid" src="{{ $wisata->image() }}" alt="" width="1800px">
                     </div>
                     <div class="blog_details">
                        <h2>{{$wisata->nama_wisata}}
                        </h2>
                        <h4>Alamat: {{$wisata->alamat}}
                        </h4>
                        <p class="excert">
                          {{$wisata->deskripsi}}
                        </p>
                     </div>
                  </div>
      <!--================ Blog Area end =================-->
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