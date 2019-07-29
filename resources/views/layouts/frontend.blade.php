<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>H A K A</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
{{--<link href="{{ asset('lib/img/favicon.png') }}" rel="icon">--}}
{{--<link href="{{ asset('lib/img/apple-touch-icon.png') }}" rel="apple-touch-icon">--}}

<!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900"
          rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{ asset('css/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{ asset('css/nivo-slider/css/nivo-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owlcarousel/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owlcarousel/owl.transitions.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">

    <!-- Nivo Slider Theme -->
    <link href="{{ asset('css/nivo-slider-theme.css') }}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Responsive Stylesheet File -->
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

    <style type="text/css">
        body {
            font-family: "Open Sans", sans-serif;
        }

        h2 {
            color: #333;
            text-align: center;
            text-transform: uppercase;
            font-family: "Roboto", sans-serif;
            font-weight: bold;
            position: relative;
            margin: 30px 0 60px;
        }

        h2::after {
            content: "";
            width: 100px;
            position: absolute;
            margin: 0 auto;
            height: 3px;
            background: #8fbc54;
            left: 0;
            right: 0;
            bottom: -10px;
        }

        .col-center {
            margin: 0 auto;
            float: none !important;
        }

        .carousel {
            margin: 50px auto;
            padding: 0 70px;
        }

        .carousel .item {
            color: #999;
            font-size: 14px;
            text-align: center;
            overflow: hidden;
            min-height: 290px;
        }

        .carousel .item .img-box {
            width: 135px;
            height: 135px;
            margin: 0 auto;
            padding: 5px;
            border: 1px solid #ddd;
            border-radius: 50%;
        }

        .carousel .img-box img {
            width: 100%;
            height: 100%;
            display: block;
            border-radius: 50%;
        }

        .carousel .testimonial {
            padding: 30px 0 10px;
        }

        .carousel .overview {
            font-style: italic;
        }

        .carousel .overview b {
            text-transform: uppercase;
            color: #7AA641;
        }

        .carousel .carousel-control {
            width: 40px;
            height: 40px;
            margin-top: -20px;
            top: 50%;
            background: none;
        }

        .carousel-control i {
            font-size: 68px;
            line-height: 42px;
            position: absolute;
            display: inline-block;
            color: rgba(0, 0, 0, 0.8);
            text-shadow: 0 3px 3px #e6e6e6, 0 0 0 #000;
        }

        .carousel .carousel-indicators {
            bottom: -40px;
        }

        .carousel-indicators li, .carousel-indicators li.active {
            width: 10px;
            height: 10px;
            margin: 1px 3px;
            border-radius: 50%;
        }

        .carousel-indicators li {
            background: #999;
            border-color: transparent;
            box-shadow: inset 0 2px 1px rgba(0, 0, 0, 0.2);
        }

        .carousel-indicators li.active {
            background: #555;
            box-shadow: inset 0 2px 1px rgba(0, 0, 0, 0.2);
        }
    </style>

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
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <!-- Brand -->
                            <a class="navbar-brand page-scroll sticky-logo" href="index.html">
                                <h1>
                                    <span style="color: #69d2e7">H</span>
                                    <span style="color: #69d2e7">A</span>
                                    <span style="color: #69d2e7">K</span>
                                    <span style="color: #69d2e7">A</span>
                                </h1>
                                {{--  <!-- Uncomment below if you prefer to use an image logo -->
                                <!-- <img src="img/logo.png" alt="" title=""> -->  --}}
                            </a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1"
                             id="navbar-example">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="active">
                                    <a class="page-scroll" href="#home" style="color: #69d2e7;font-size:15px;">Home</a>
                                </li>
                                <li>
                                    <a class="page-scroll" href="#about" style="color: #69d2e7;font-size:15px;">About
                                        Us</a>
                                </li>
                                <li>
                                    <a class="page-scroll" href="#program" style="color: #69d2e7;font-size:15px;">Programs</a>
                                </li>
                                <li>
                                    <a class="page-scroll" href="#recomend" style="color: #69d2e7;font-size:15px;">Recommendation</a>
                                </li>
                                <li>
                                    <a class="page-scroll" href="#trading" style="color: #69d2e7;font-size:15px;">Trading
                                        Guides</a>
                                </li>
                                <li>
                                    <a class="page-scroll" href="#screeners" style="color: #69d2e7;font-size:15px;">Screener
                                        Saham</a>
                                </li>
                                <li>
                                    <a class="page-scroll" href="#articles" style="color: #69d2e7;font-size:15px;">Articles</a>
                                </li>
                                <li>
                                    <a class="page-scroll" href="#" style="color: #69d2e7;font-size:15px;">Youtube</a>
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
            <img src="{{ asset('lib/img/slider/slider1.jpg') }}" alt="" title="#slider-direction-1"/>
            <img src="{{ asset('lib/img/slider/slider2.jpg') }}" alt="" title="#slider-direction-2"/>
        </div>

        <!-- direction 1 -->
        <div id="slider-direction-1" class="slider-direction slider-one">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="slider-content text-left">
                            <!-- layer 2 -->
                            <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                <h1 class="title2" style="color: white">Want to learn how to become a consistently
                                    profitable trader? Then youre in the right place.</h1>
                            </div>
                            <!-- layer 3 -->
                            <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                <a class="ready-btn right-btn page-scroll" href="#services">See Services</a>
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
                        <div class="slider-content text-left">
                        <!-- layer 2 -->
                            <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                <h1 class="title2">HAKA moment is when traders start believing in their strategy and in
                                    turn themselves.
                                </h1>
                            </div>
                            <!-- layer 3 -->
                            <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                <a class="ready-btn right-btn page-scroll" href="#services">See Services</a>
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

<!-- Start Service area -->
<div id="services" class="services-area area-padding" style="background-color: darkgrey">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-headline services-head text-center">
                    <h2>Here's What to Do Next</h2>
                </div>
                <br>
            </div>
        </div>
        <div class="col-md-12 ">
            <div>
                <div class="single-well">
                    <h4 class="text-center">
                        Subscribe below and become a better trader today, You'll get &nbsp;:
                    </h4>
                    <ul>
                        <li>
                            <p style="font-size:18px;"><i class="fa fa-check"></i>Practical trading strategies and
                                techniques you can use in your trading today.</p>
                        </li>
                        <li>
                            <p style="font-size:18px;"><i class="fa fa-check"></i>A weekly analysis of Indonesia Stock
                                Market so you're prepared for the week ahead.</p>
                        </li>
                        <li>
                            <p style="font-size:18px;"><i class="fa fa-check"></i>Access to a H A K A private trading
                                community of more than 1000 traders so you can interact and learn together.
                            </p>
                        </li>
                    </ul>
                    <br>
                    <p style="font-size:18px;">Thanks for reading and We'll see you on the battlefield!</p>
                    <br>
                    <p style="font-size:18px;">HAKA</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Service area -->

<!-- Start About area -->
<div id="about" class="about-area area-padding" style="background-color: white">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h2>About Us</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- single-well start-->
            <div class="col-md-12">
                <a href="#">
                    <img src="{{ asset('app/img/haka.jpeg') }}" alt="" class="img-responsive center-block"
                         style="height: 250px;width:200px">
                </a>
                <br>
                <p style="font-size: 15px">
                    HAKA was created with the vision of becoming the most trusted stock trading community in Indonesia.
                    HAKA is one of the most famous and fastest-growing community of traders in Indonesia.
                    HAKA shortly became well-known for sharing unique-written content which many traders found
                    interesting and helpful.
                </p>
                <ul>
                    <li>
                        <p style="font-size: 15px"><i class="fa fa-check"></i> Practical trading strategies and
                            techniques you can use in your trading today.</p>
                    </li>
                    <li>
                        <p style="font-size: 15px"><i class="fa fa-check"></i> A weekly analysis of Indonesia Stock
                            Market so you're prepared for the week ahead.</p>
                    </li>
                    <li>
                        <p style="font-size: 15px"><i class="fa fa-check"></i> Access to a H A K A private trading
                            community of more than 1000 traders so you can interact and learn together.</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End About area -->

<!-- Start program Area -->
<div id="program" class="blog-area">
    <div class="blog-inner area-padding">
        <div class="blog-overly"></div>
        <div class="container ">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h2>Programs</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Start Left Blog -->
                @foreach($programs as $program)
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="single-blog">
                            <div class="single-blog-img">
                                <a href="blog.html">
                                    <img src="{{ $program->featured }}" alt="" style="height: 200px;width:400px;">
                                </a>
                            </div>
                            <div class="blog-meta">
                  <span class="comments-type">
                      @foreach($program->tags as $t)
                          <a href="#">{{$t->tag}}</a>
                      @endforeach
                  </span>
                                <span class="date-type pull-right">
                      <i class="fa fa-calendar"></i>{{$program->created_at->toFormattedDateString()}}
                  </span>
                            </div>
                            <div class="blog-text">
                                <h4>
                                    <a href="blog.html">{{$program->title}}</a>
                                </h4>
                                <p>
                                    {!! str_limit(strip_tags($program->content), 150) !!}
                                </p>
                            </div>
                            <span>
                    <a href="{{route('programs')}}" class="ready-btn">Read more</a>
                </span>
                        </div>
                        <!-- Start single blog -->
                    </div>
            @endforeach
            <!-- End Left Blog-->
            </div>
        </div>
    </div>
</div>
<!-- End Blog -->

<!-- Start recomend Area -->
<div id="recomend" class="blog-area">
    <div class="blog-inner area-padding">
        <div class="blog-overly"></div>
        <div class="container ">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h2>Recomendation</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Start Left Blog -->
                @foreach($contents as $content)
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="single-blog">
                            <div class="single-blog-img">
                                <a href="blog.html">
                                    <img src="{{ $content->featured }}" alt="" style="height: 200px;width:400px;">
                                </a>
                            </div>
                            <div class="blog-meta">
                  <span class="comments-type">
                      @foreach($content->tags as $t)
                          <a href="#">{{$t->tag}}</a>
                      @endforeach
                  </span>
                                <span class="date-type pull-right">
                      <i class="fa fa-calendar"></i>{{$content->created_at->toFormattedDateString()}}
                  </span>
                            </div>
                            <div class="blog-text">
                                <h4>
                                    <a href="blog.html">{{$content->title}}</a>
                                </h4>
                                <p>
                                    {!! str_limit(strip_tags($content->content), 150) !!}
                                </p>
                            </div>
                            <span>
                    <a href="{{route('master.content')}}" class="ready-btn">Read more</a>
                </span>
                        </div>
                        <!-- Start single blog -->
                    </div>
            @endforeach
            <!-- End Left Blog-->
            </div>
        </div>
    </div>
</div>
<!-- End Blog -->

<!-- Start Screener Area -->
<div id="screeners" class="our-team-area area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h2>Screeners</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="team-top">
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="single-team-member">
                        <div class="team-img">
                            <a href="{{ route('frontend.breakout')  }}">
                                <img src="{{ asset('app/img/ranking_vol.jpeg')  }}" alt="" class="img-responsive"
                                     style="height: 370px;">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- End column -->
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="single-team-member">
                        <div class="team-img">
                            <a href="{{ route('frontend.trend-reversal')  }}">
                                <img src="{{ asset('app/img/bandarmology.jpeg')  }}" alt="" class="img-responsive">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- End column -->
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="single-team-member">
                        <div class="team-img">
                            <a href="{{ route('frontend.boom')  }}">
                                <img src="{{ asset('app/img/breakout.jpeg')  }}" alt="" class="img-responsive">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- End column -->
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="single-team-member">
                        <div class="team-img">
                            <a href="{{ route('frontend.foreign-accumulation')  }}">
                                <img src="{{ asset('app/img/foreign_accum.jpeg') }}" alt="" class="img-responsive">
                            </a>

                        </div>
                    </div>
                </div>
                <!-- End column -->
            </div>
        </div>
    </div>
</div>
<!-- End Team Area -->

{{--Articles--}}
<div id="articles" class="blog-area">
    <div class="blog-inner area-padding">
        <div class="blog-overly"></div>
        <div class="container ">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h2>Articles</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Start Left Blog -->
                @foreach($articles as $article)
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="single-blog">
                            <div class="single-blog-img">
                                <a href="blog.html">
                                    <img src="{{ $article->featured }}" alt="" style="height: 200px;width:400px;">
                                </a>
                            </div>
                            <div class="blog-meta">
                  <span class="comments-type">
                      @foreach($article->tags as $t)
                          <a href="#">{{$t->tag}}</a>
                      @endforeach
                  </span>
                                <span class="date-type pull-right">
                      <i class="fa fa-calendar"></i>{{$article->created_at->toFormattedDateString()}}
                  </span>
                            </div>
                            <div class="blog-text">
                                <h4>
                                    <a href="blog.html">{{$article->title}}</a>
                                </h4>
                                <p>
                                    {!! str_limit(strip_tags($article->content), 150) !!}
                                </p>
                            </div>
                            <span>
                    <a href="{{route('article')}}" class="ready-btn">Read more</a>
                </span>
                        </div>
                        <!-- Start single blog -->
                    </div>
            @endforeach
            <!-- End Left Blog-->
            </div>
        </div>
    </div>
</div>
{{--END Articles--}}

<!-- Start Wellcome Area -->
<div class="wellcome-area">
    <div class="well-bg">
        <div class="test-overly"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="wellcome-text">
                        <div class="well-text text-center">
                            <h2>Subscribe Become a Better Trader Today</h2>
                            <p>
                                Get Practical trading strategies and techniques that work.
                            </p>
                            <div class="subs-feilds">
                                <form action="{{ route('subscriber')  }}" method="post">
                                    {{ csrf_field() }}
                                    <div class="suscribe-input">
                                        <input type="email" class="email form-control width-80" id="sus_email"
                                               placeholder="Email" name="email">
                                        <button type="submit" id="sus_submit" class="add-btn width-20">Subscribe
                                        </button>
                                        <div id="msg_Submit" class="h3 text-center hidden"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Wellcome Area -->

<!-- Start trading Area -->
<div id="trading" class="blog-area">
    <div class="blog-inner area-padding">
        <div class="blog-overly"></div>
        <div class="container ">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h2>Trading Guides</h2>
                    </div>
                </div>
                a
            </div>
            <div class="row">
                <!-- Start Left Blog -->
                @foreach($tradingGuides as $tradingGuide)
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="single-blog">
                            <div class="single-blog-img">
                                <a href="blog.html">
                                    <img src="{{ $tradingGuide->featured }}" alt="" style="height: 200px;width:400px;">
                                </a>
                            </div>
                            <div class="blog-meta">
                  <span class="comments-type">
                      @foreach($tradingGuide->tags as $t)
                          <a href="#">{{$t->tag}}</a>
                      @endforeach
                  </span>
                                <span class="date-type pull-right">
                      <i class="fa fa-calendar"></i>{{$tradingGuide->created_at->toFormattedDateString()}}
                  </span>
                            </div>
                            <div class="blog-text">
                                <h4>
                                    <a href="blog.html">{{$tradingGuide->title}}</a>
                                </h4>
                                <p>
                                    {!! str_limit(strip_tags($tradingGuide->content), 150) !!}
                                </p>
                            </div>
                            <span>
                    <a href="{{route('trading.guides')}}" class="ready-btn">Read more</a>
                </span>
                        </div>
                        <!-- Start single blog -->
                    </div>
            @endforeach
            <!-- End Left Blog-->
            </div>
        </div>
    </div>
</div>
<!-- End Blog -->

<div class="container">
    <div class="row">
        <div class="col-md-8 col-center m-auto">
            <h2>Happy Clients</h2>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Carousel indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <!-- Wrapper for carousel items -->
                <div class="carousel-inner">
                    <div class="item carousel-item active">
                        <div class="img-box"><img src="/examples/images/clients/1.jpg" alt=""></div>
                        <p class="testimonial">
                            Haka premium membantu saya untuk trading harian, swing maupun invest. Pagi sblm market mulai
                            sdh dikasih rekomendasi buat haka /swing. Pas selesai session 1 selalu dikasih ulasan apa
                            yang dibeli asing dan volumenya. Begitu pula pas jam trading diberikan rekomendasi apa yg
                            bisa di haka. Setiap ada pertanyaan juga selalu cepat dijawab. Top deh pokoknya, terimakasih
                            haka premium.
                        </p>
                        <p class="overview"><b>Mia</b></p>
                    </div>
                    <div class="item carousel-item">
                        <div class="img-box"><img src="/examples/images/clients/2.jpg" alt=""></div>
                        <p class="testimonial">
                            Sebagai seorang trader pemula, memilih saham yang tepat merupakan pilihan yang tergolong
                            sulit, namun setelah bergabung dengan HAKA premium, hal ini bukan menjadi kendala lagi,
                            karena di HAKA premium rekomendasi dan juga timing yang di berikan tepat sasaran dan di
                            dukung dengan analisa yang kuat, sehingga kita dapat membantu untuk memilih saham yang
                            tepat, terima kasih HAKA premium. </p>
                        <p class="overview"><b>Elifas Felix</b></p>
                    </div>
                    <div class="item carousel-item">
                        <div class="img-box"><img src="/examples/images/clients/3.jpg" alt=""></div>
                        <p class="testimonial">Sejak gabung di HAKA premium, alhamdulillah tiap harinya profit terus.
                            Trading kian mantap & gak galau lagi. Gak ada lg yg namanya perasaan was-was saat trading.
                            Di tambah dengan rekomendasi & saran yg sangat membantu sekali dlm trading. Plus info market
                            yg cepat & up to date tiap harinya. HAKA premium jodoh terbaik untuk trading saya....gak
                            bakalan pindah ke lain.</p>
                        <p class="overview"><b>Okta</b></p>
                    </div>
                </div>
                <!-- Carousel controls -->
                <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>

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
{{--  <script src="{{ asset('js/app.js') }}"></script>--}}
<script src="{{ asset('js/toastr.min.js') }}"></script>
<script>
    @if (Session::has('success'))
    toastr.success("{{ Session::get('success') }}")
    @endif

    @if (Session::has('info'))
    toastr.info("{{ Session::get('info') }}")
    @endif
</script>
</body>

</html>
