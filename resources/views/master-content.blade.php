<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Saham Profit</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  {{--<link href="{{ asset('lib/img/favicon.png') }}" rel="icon">--}}
  {{--<link href="{{ asset('lib/img/apple-touch-icon.png') }}" rel="apple-touch-icon">--}}

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ asset('css/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ asset('css/nivo-slider/css/nivo-slider.css') }}" rel="stylesheet">
  <link href="{{ asset('css/owlcarousel/owl.carousel.css') }}" rel="stylesheet">
  <link href="{{ asset('css/owlcarousel/owl.transitions.css') }}" rel="stylesheet">
  <link href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/animate/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/venobox/venobox.css') }}" rel="stylesheet">

  <!-- Nivo Slider Theme -->
  <link href="{{ asset('css/nivo-slider-theme.css') }}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

  <!-- =======================================================
    Theme Name: eBusiness
    Theme URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body data-spy="scroll" data-target="#navbar-example">

  <div id="preloader"></div>

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
                <a class="navbar-brand page-scroll sticky-logo" href="{{ route('index') }}">
                  <h1><span>Saham</span>Profit</h1>
                  <!-- Uncomment below if you prefer to use an image logo -->
                  <!-- <img src="img/logo.png" alt="" title=""> -->
                </a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active">
                    <a class="page-scroll" href="{{ route('index') }}">Back Home Page</a>
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

  <!-- Start Bottom Header -->
  <div class="header-bg page-area">
    <div class="home-overly"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="slider-content text-center">
            <div class="header-bottom">
              <div class="layer2 wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
                <h1 class="title2">Analysis</h1>
              </div>
              <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s">
                <h2 class="title3">Profesional Content For Trader</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Header -->


  <div class="blog-page area-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <div class="page-head-blog">
            <div class="single-blog-page">
              <!-- search option start -->
              <form action="#">
                <div class="search-option">
                  <input type="text" placeholder="Search...">
                  <button class="button" type="submit">
                      <i class="fa fa-search"></i>
                  </button>
                </div>
              </form>
              <!-- search option end -->
            </div>
            <div class="single-blog-page">
              <!-- recent start -->
              <div class="left-blog">
                <h4>recent post</h4>
                @foreach($recentPosts as $recentPost)
                  <div class="recent-post">
                    <!-- start single post -->
                    <div class="recent-single-post">
                      <div class="post-img">
                        <a href="#">
                           <img src="{{ $recentPost->featured }}" alt="">
                        </a>
                      </div>
                      <div class="pst-content">
                        <p><a href="#"> {{ $recentPost->title }}</a></p>
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
              <!-- recent end -->
            </div>
            <div class="single-blog-page">
              <div class="left-tags blog-tags">
                <div class="popular-tag left-side-tags left-blog">
                  <h4>Categories</h4>
                  <ul>
                    @foreach($categories as $category)
                      <li>
                        <a href="#">{{ $category->name }}</a>
                      </li>
                    @endforeach
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End left sidebar -->


        <!-- Start single blog -->
        <div class="col-md-8 col-sm-8 col-xs-12">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              @foreach($contents as $content)
                <div class="single-blog">
                  <div class="single-blog-img">
                    <a href="blog-details.html">
                        <img src="{{ asset($content->featured) }}" alt="">
                    </a>
                  </div>
                  <div class="blog-meta">
                    <span class="comments-type">
                        <i class="fa fa-thumbtack"></i>
                        @foreach($content->tags as $t)
                          <a href="#">{{$t->tag}}</a>
                        @endforeach
                    </span>
                    <span class="date-type pull-right">
                        <i class="fa fa-calendar"></i>{{$content->created_at->toFormattedDateString()}}
                    </span>
                  </div>
                  <div class="blog-text">
                    <h4 class="text-center">
                        <a href="#">{{ $content->title }}</a>
                    </h4>
                    <p>
                        {!! str_limit(strip_tags($content->content), 150) !!}
                    </p>
                  </div>
                  <span>
                      <a href="blog-details.html" class="ready-btn">Read more</a>
                  </span>
              </div>
              @endforeach
            </div>
            <!-- End single blog -->


            <div class="blog-pagination text-center">
              <ul class="pagination">
                <li>{!! $contents->render() !!}</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Blog Area -->

  <div class="clearfix"></div>

  <!-- Start Footer bottom Area -->
  <footer>
    @include('layouts.frontend.footer')
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('lib/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('lib/venobox/venobox.min.js') }}"></script>
  <script src="{{ asset('lib/knob/jquery.knob.js') }}"></script>
  <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
  <script src="{{ asset('lib/parallax/parallax.js') }}"></script>
  <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
  <script src="{{ asset('lib/nivo-slider/js/jquery.nivo.slider.js') }}" type="text/javascript"></script>
  <script src="{{ asset('lib/appear/jquery.appear.js') }}"></script>
  <script src="{{ asset('lib/isotope/isotope.pkgd.min.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>

  <!-- Contact Form JavaScript File -->
  <script src="{{ asset('contactform/contactform.js') }}"></script>

  <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
