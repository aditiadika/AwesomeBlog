<!doctype html>
<html class="no-js" lang="zxx">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>HAKA SAHAM </title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="manifest" href="site.webmanifest">
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

	<!-- CSS here -->
	<link rel="stylesheet" href="{{  asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{  asset('assets/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{  asset('assets/css/slicknav.css') }}">
	<link rel="stylesheet" href="{{  asset('assets/css/flaticon.css') }}">
	<link rel="stylesheet" href="{{  asset('assets/css/animate.min.css') }}">
	<link rel="stylesheet" href="{{  asset('assets/css/magnific-popup.css') }}">
	<link rel="stylesheet" href="{{  asset('assets/css/fontawesome-all.min.css') }}">
	<link rel="stylesheet" href="{{  asset('assets/css/themify-icons.css') }}">
	<link rel="stylesheet" href="{{  asset('assets/css/slick.css') }}">
	<link rel="stylesheet" href="{{  asset('assets/css/nice-select.css') }}">
	<link rel="stylesheet" href="{{  asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.0/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css">

    <style>
        #container_youtube {
            position: relative;
            width: 100%;
            overflow: hidden;
            padding-top: 56.25%; /* 16:9 Aspect Ratio */
        }

        .responsive-iframe {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            width: 100%;
            height: 100%;
            border: none;
        }
    </style>
</head>

<body class="body-bg">
<!--? Preloader Start -->
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
    <div class="header-area">
        <div class="main-header ">
            <div class="header-top d-none d-lg-block">
                <div class="container">
                    <div class="col-xl-12">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="header-info-left">
                            </div>
                            <div class="header-info-right">
                                <ul class="header-social">    
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li> <a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom  header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                                <a href="/" style="font-size: 25px;color:#42879F" class="font-weight-bold">H A K A</a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10">
                            <div class="menu-wrapper  d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-lg-block">
                                    <nav> 
                                        <ul id="navigation">
                                            <li><a href="#home">{{ Route::current()->getName() == 'index' ? 'Home' : '' }}</a></li>
                                            <li><a href="#about">{{ Route::current()->getName() == 'index' ? 'About' : '' }}</a></li>
                                            <li><a href="#services">{{ Route::current()->getName() == 'index' ? 'Services' : '' }}</a></li>
                                            <li><a href="#recommendations">{{ Route::current()->getName() == 'index' ? 'Recommendations' : '' }}</a></li>
                                            <li><a href="#screeners">{{ Route::current()->getName() == 'index' ? 'Screenners' : '' }}</a></li>
                                        </ul>
                                    </nav>
                                </div>                            
                            </div>
                        </div> 
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
<main>

    @yield('content')

</main>
<footer>
    <!--? Footer Start-->
    <div class="footer-area section-bg" data-background="assets/img/gallery/footer_bg.jpg">
        <div class="container">
            <div class="footer-top footer-padding">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-4 col-md-5 col-sm-8">
                        <div class="single-footer-caption mb-50">
                            <!-- logo -->
                            <div class="footer-logo">
                                <a href="index.html">
                                    <h2 style="color: white">H A K A</h2>
                                    {{-- <img src="assets/img/logo/logo2_footer.png" alt=""> --}}
                                </a>
                            </div>
                            <div class="footer-tittle">
                                <div class="footer-pera">
                                    <p class="info1">
                                        HAKA was created with the vision of becoming the most trusted stock trading community in Indonesia. HAKA is one of the most famous and fastest-growing community of traders in Indonesia. HAKA shortly became well-known for sharing unique-written content which many traders found interesting and helpful.
                                    </p>
                                </div>
                            </div>
                            <div class="footer-number">
                                <h4><span>+62 </span>8111 571209</h4>
                                <p>haka.saham@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-xl-2 col-lg-2 col-md-3 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Location </h4>
                                <ul>
                                    <li><a href="#">Advanced</a></li>
                                    <li><a href="#"> Management</a></li>
                                    <li><a href="#">Corporate</a></li>
                                    <li><a href="#">Customer</a></li>
                                    <li><a href="#">Information</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Explore</h4>
                                <ul>
                                    <li><a href="#">Cookies</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Proparties</a></li>
                                    <li><a href="#">Licenses</a></li>
                                </ul>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Location</h4>
                                <div class="footer-pera">
                                    <p class="info1">Subscribe now to get daily updates</p>
                                </div>
                            </div>
                            <!-- Form -->
                            <div class="footer-form">
                                <div id="mc_embed_signup">
                                    <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative mail_part" novalidate="true">
                                        <input type="email" name="EMAIL" id="newsletter-form-email" placeholder=" Email Address " class="placeholder hide-on-focus" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email address'">
                                        <div class="form-icon">
                                            <button type="submit" name="submit" id="newsletter-submit" class="email_icon newsletter-submit button-contactForm">
                                                SIGN UP
                                            </button>
                                        </div>
                                        <div class="mt-10 info"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-xl-9 col-lg-8">
                        <div class="footer-copy-right">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <!-- Footer Social -->
                        <div class="footer-social f-right">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.facebook.com/sai4ull"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fas fa-globe"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
</footer>
<!-- Scroll Up -->
<div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

    <!-- JS here -->

    <script src="{{  asset('assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{  asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{  asset('assets/js/popper.min.js') }}"></script>
    <script src="{{  asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{  asset('assets/js/jquery.slicknav.min.js') }}"></script>

    <script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.0/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{  asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{  asset('assets/js/slick.min.js') }}"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="{{  asset('assets/js/wow.min.js') }}"></script>
    <script src="{{  asset('assets/js/animated.headline.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.js') }}"></script>

    <!-- Nice-select, sticky -->
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{  asset('assets/js/jquery.sticky.js') }}"></script>

    <!-- counter , waypoint -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="{{  asset('assets/js/jquery.counterup.min.js') }}"></script>
    
    <!-- contact js -->
    <script src="{{  asset('assets/js/contact.js') }}"></script>
    <script src="{{  asset('assets/js/jquery.form.js') }}"></script>
    <script src="{{  asset('assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{  asset('assets/js/mail-script.js') }}"></script>
    <script src="{{  asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{  asset('assets/js/main.js') }}"></script>

    @yield('scripts')

    </body>
</html>