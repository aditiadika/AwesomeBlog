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
  <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">

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
                <a class="navbar-brand page-scroll sticky-logo" href="index.html">
                  <h1>
                    <span style="color: #69d2e7">H
                    </span>
                    <span style="color: #69d2e7">A
                      </span>
                      <span style="color: #69d2e7">K
                        </span>
                    <span style="color: #69d2e7">A</span>
                  </h1>
                  {{--  <!-- Uncomment below if you prefer to use an image logo -->
                  <!-- <img src="img/logo.png" alt="" title=""> -->  --}}
                </a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active">
                    <a class="page-scroll" href="#home" style="color: #69d2e7;font-size:15px;">Home</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#trading" style="color: #69d2e7;font-size:15px;">Trading Guides</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#recomend" style="color: #69d2e7;font-size:15px;">Recomendation</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#screeners" style="color: #69d2e7;font-size:15px;">Screeners</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#program" style="color: #69d2e7;font-size:15px;">Programs</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#about" style="color: #69d2e7;font-size:15px;">About Us</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#contact" style="color: #69d2e7;font-size:15px;">Contact Us</a>
                  </li>
                  {{--<li>--}}
                    {{--<a class="page-scroll" href="{{ route('login') }}" style="color: #69d2e7;font-size:18px;">Login</a>--}}
                  {{--</li>--}}
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
        <img src="{{ asset('app/img/abc.jpg') }}" alt="" title="#slider-direction-1" />
        <img src="{{ asset('app/img/def.jpg') }}" alt="" title="#slider-direction-2" />
        {{--<img src="{{ asset('lib/img/slider/slider3.jpg') }}" alt="" title="#slider-direction-3" />--}}
      </div>

      <!-- direction 1 -->
      <div id="slider-direction-1" class="slider-direction slider-one">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2" style="color: white">Want to learn how to become a consistently profitable trader? Then youre in the right place.</h1>
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
              <div class="slider-content text-center">
                <!-- layer 1 -->
                {{--  <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">The Best Business Information </h2>
                </div>  --}}
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">HAKA moment is when traders start believing in their strategy and in turn themselves.
                    <br>You will NOT succeed in this game without confidence.</h1>
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
  <div id="services" class="services-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline services-head text-center">
            <h2>Here's What to Do Next:</h2>
          </div>
          <br>
        </div>
      </div>
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="well-middle text-center">
          <div class="single-well">
            {{--<a href="#">--}}
              {{--<h4 class="sec-head">project Maintenance</h4>--}}
            {{--</a>--}}
            <h4>
              Subscribe below and become a better trader today.
            </h4>
            <h4>
              You'll get:
            </h4>
            <ul>
              <li>
                 <h4><i class="fa fa-check"></i>Practical trading strategies and techniques you can use in your trading today.</h4>
              </li>
              <li>
                 <h4><i class="fa fa-check"></i>A weekly analysis of Indonesia Stock Market so you're prepared for the week ahead.</h4>
              </li>
              <li>
                 <h4><i class="fa fa-check"></i>Access to a H A K A private trading community of more than 1000 traders so you can interact and learn together.</h4>
              </li>
            </ul>
            <br>
            <h4>Thanks for reading and We'll see you on the battlefield!</h4> <br>
            <h4>HAKA</h4>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Service area -->

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
                            <input type="email" class="email form-control width-80" id="sus_email" placeholder="Email" name="email">
                            <button type="submit" id="sus_submit" class="add-btn width-20">Subscribe</button>
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
                    <img src="{{ asset('app/img/ranking_vol.jpeg')  }}" alt="" style="height: 370px">
                </a>
              </div>
            </div>
          </div>
          <!-- End column -->
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="{{ route('frontend.trend-reversal')  }}">
                    <img src="{{ asset('app/img/bandarmology.jpeg')  }}" alt="">
                </a>
              </div>
            </div>
          </div>
          <!-- End column -->
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="{{ route('frontend.boom')  }}">
                    <img src="{{ asset('app/img/breakout.jpeg')  }}" alt="">
                </a>
              </div>
            </div>
          </div>
          <!-- End column -->
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="{{ route('frontend.foreign-accumulation')  }}">
                    <img src="{{ asset('app/img/foreign_accum.jpeg') }}" alt="">
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

  <!-- Start About area -->
  <div id="about" class="about-area area-padding">
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
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-left">
            <div class="single-well">
              <a href="#">
                <img src="{{ asset('app/img/haka.jpeg') }}" alt="" style="margin-left:150px;height:300px;">
			        </a>
            </div>
          </div>
        </div>
        <!-- single-well end-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-middle">
            <div class="single-well">
              <p>
                HAKA was created with the vision of becoming the most trusted stock trading community in Indonesia.
                HAKA is one of the most famous and fastest-growing community of traders in Indonesia.
                HAKA shortly became well-known for sharing unique-written content which many traders found interesting and helpful.
              </p>
              <ul>
                <li>
                  <i class="fa fa-check"></i> Practical trading strategies and techniques you can use in your trading today.
                </li>
                <li>
                  <i class="fa fa-check"></i> A weekly analysis of Indonesia Stock Market so you're prepared for the week ahead.
                </li>
                <li>
                  <i class="fa fa-check"></i> Access to a H A K A private trading community of more than 1000 traders so you can interact and learn together.
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- End col-->
      </div>
    </div>
  </div>
  <!-- End About area -->

  <div class="testimonials-area">
    <div class="testi-inner area-padding">
      <div class="testi-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <!-- Start testimonials Start -->
            <div class="testimonial-content text-center">
              <a class="quate" href="#"><i class="fa fa-quote-right"></i></a>
              <!-- start testimonial carousel -->
              <div class="testimonial-carousel">
                <div class="single-testi">
                  <div class="testi-text">
                    <p>
                      Akhirnya sy bisa trading dengan profit konsisten sejak bergabung dengan mas Iyan HAKA premium. Saya sangat terbantu dengan rekomendasi saham setiap pagi dan news news yang paling update. Jadi sy tidak perlu lagi screening chart satu per satu tiap hari. Rekomendasi HAKA premium bener bener mantap menghasilkan cuan maksimal👍👍👍 Ditambah lagi mas Iyan selalu ready diajak diskusi. Maju terus HAKA premium...thanks a lot mas Iyan
                    </p>
                    <h6>Early</h6>
                  </div>
                </div>
                <!-- End single item -->
                <div class="single-testi">
                  <div class="testi-text">
                    <p>
                      Pak iyan terima kasih sudah di izinkan gabung dengan grup haka premium,,,trading saham saya semakin baik karena di bimbing dan di arahkan sama pak iyan,,,dan saya pun skr semakin sering dapat profit,,,berita dan ulasan nya cepat dan bisa ato cukup di mengerti,,apalagi orang awam di saham.makasi pak iyan 👍🏻
                    </p>
                    <h6>Hendra</h6>
                  </div>
                </div>
                <!-- End single item -->
                <div class="single-testi">
                  <div class="testi-text">
                    <p>
                      Haka premium membantu saya untuk trading harian, swing maupun invest. Pagi sblm market mulai sdh dikasih rekomendasi buat haka /swing. Pas selesai session 1 selalu dikasih ulasan apa yang dibeli asing dan volumenya. Begitu pula pas jam trading diberikan rekomendasi apa yg bisa di haka. Setiap ada pertanyaan juga selalu cepat dijawab. Top deh pokoknya, terimakasih haka premium 👍👍👍
                    </p>
                    <h6>Mia</h6>
                  </div>
                </div>
                <!-- End single item -->
                <div class="single-testi">
                  <div class="testi-text">
                    <p>
                      Sebagai seorang trader pemula, memilih saham yang tepat merupakan pilihan yang tergolong sulit, namun setelah bergabung dengan HAKA premium, hal ini bukan menjadi kendala lagi, karena di HAKA premium rekomendasi dan juga timing yang di berikan tepat sasaran dan di dukung dengan analisa yang kuat, sehingga kita dapat membantu untuk memilih saham yang tepat, terima kasih HAKA premium.
                    </p>
                    <h6>Elifas Felix</h6>
                  </div>
                </div>
                <div class="single-testi">
                  <div class="testi-text">
                    <p>
                      Luar biasa hanya di grup hajarkanan.com rekomendasi saham harian sllu tepat sasaran target, disajikan beserta chart menjadi nilai plus utk pemula belajar TA.  news dan info ttg saham selalu up to date..anggota grupnya aktif dan belajar analisa saham bersama.. Smg grup haka makin sukses! Salam cuan! 👍
                    </p>
                    <h6>Tia Mutia</h6>
                  </div>
                </div>
                <div class="single-testi">
                  <div class="testi-text">
                    <p>
                      Sbg pemula di trading, sy sangat bersyukur diijinkan gabung dgn grup HAKA premium. Belajar banyak disini baik teori maupun prakteknya, yg jelas rekomendasinya sangat tokcer  dan diajarkan tetap disiplin pada trading plan.
                      HAKA Premium mantulll mantap betul...👍👍👍
                    </p>
                    <h6>Steve</h6>
                  </div>
                </div>
                <div class="single-testi">
                  <div class="testi-text">
                    <p>
                      Di group HAKA, kita dibimbing langsung mengenai price action, dan selama mengikuti rekomendasi dari group HAKA, lebih banyak untungnya dibanding cut lossnya..semoga group HAKA makin maju supaya bisa lebih banyak membantu orang dalam mewujudkan kebebasan finansial..
                    </p>
                    <h6>Andre</h6>
                  </div>
                </div>
                <div class="single-testi">
                  <div class="testi-text">
                    <p>
                      Sejak gabung di HAKA premium, alhamdulillah tiap harinya profit terus. Trading kian mantap & gak galau lagi. Gak ada lg yg namanya perasaan was-was saat trading. Di tambah dengan rekomendasi & saran yg sangat membantu sekali dlm trading. Plus info market yg cepat & up to date tiap harinya. HAKA premium jodoh terbaik untuk trading saya....gak bakalan pindah ke lain 👍👍
                    </p>
                    <h6>Okta</h6>
                  </div>
                </div>
                <div class="single-testi">
                  <div class="testi-text">
                    <p>
                      Senang rasanya saya bisa bergabung di Haka Premium..bnyk support data analisa dan keptusan buy dan sell yg tepat.saya jd sering cuan n jg bisa mengurangi resiko rugi krn di tuntun luar biasa.. thanks so much HAKA Premium ..salam cuan😘😘😘😘
                    </p>
                    <h6>Merry</h6>
                  </div>
                </div>
                <div class="single-testi">
                  <div class="testi-text">
                    <p>
                      Sebagai seorang trader yg punya kesibukan lain juga. Saya sangat terbantu oleh HAKA premium. Memberikan analisa yang bagus untuk buy dan sell nya. Tq HAKA premium.
                    </p>
                    <h6>Riantin</h6>
                  </div>
                </div>
                <div class="single-testi">
                  <div class="testi-text">
                    <p>
                      Sebelum bergabung dengan HAKA Premium,  saya mengalami kesulitan dalam menentukan kapan waktu yang tepat untuk membeli dan menjual suatu saham, sehingga seringkali keuntungan yang saya peroleh tidak maksimal bahkan saham yg saya beli di harga tinggi kemudian harganya terus merosot karena waktu masuk yg tidak tepat.

                      Namun setelah bergabung dengan HAKA Premium saya mendapatkan rekomendasi saham-saham dan juga waktu yang tepat untuk membeli dan menjual suatu saham.

                      Terima kasih HAKA Premium. 👍👍👍</p>
                    <h6>I Nyoman Satria</h6>
                  </div>
                </div>
              </div>
            </div>
            <!-- End testimonials end -->
          </div>
          <!-- End Right Feature -->
        </div>
      </div>
    </div>
  </div>


  <!-- Start contact Area -->
  <div id="contact" class="contact-area">
    <div class="contact-inner area-padding">
      <div class="contact-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Contact us</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-mobile"></i>
                <p>
                  Call: {{ $setting->contact_number }}<br>
                  <span>Monday-Friday (9am-5pm)</span>
                </p>
              </div>
            </div>
          </div>
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-envelope-o"></i>
                <p>
                  Email: {{ $setting->contact_email }}<br>
                  <span>Web: www.hajarkanan.com</span>
                </p>
              </div>
            </div>
          </div>
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-map-marker"></i>
                <p>
                  Location <br>
                  <span>{{$setting->address}}</span>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">

          <!-- Start Google Map -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <!-- Start Map -->
              <div id="google-map" data-latitude="40.713732" data-longitude="-74.0092704"></div>
            <!-- End Map -->
          </div>
          <!-- End Google Map -->

          <!-- Start  contact -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="form contact-form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>
          </div>
          <!-- End Left contact -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Contact Area -->

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
  <script src="{{ asset('js/app.js') }}"></script>
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
