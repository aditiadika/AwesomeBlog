@extends('layouts.frontend')

@section('content')
    <!-- slider Area Start-->
    <div id="home" class="slider-area ">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-7 col-md-8">
                            <div class="hero__caption">
                                <span data-animation="fadeInLeft" data-delay=".1s">Committed to success</span>
                                <h1 data-animation="fadeInLeft" data-delay=".5s" >We help to grow your business</h1>
                                <p data-animation="fadeInLeft" data-delay=".9s">Mollit anim laborum.Dvcuis aute serunt  iruxvfg dhjkolohr indd re voluptate<br> velit esscillumlore eu quife nrulla parihatur.</p>
                                <!-- Hero-btn -->
                                <div class="hero__btn" data-animation="fadeInLeft" data-delay="1.1s">
                                    <a href="industries.html" class="btn hero-btn">Our Services</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>          
            </div>
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-7 col-md-8">
                            <div class="hero__caption">
                                <span data-animation="fadeInLeft" data-delay=".1s">Committed to success</span>
                                <h1 data-animation="fadeInLeft" data-delay=".5s" >We help to grow your business</h1>
                                <p data-animation="fadeInLeft" data-delay=".9s">Mollit anim laborum.Dvcuis aute serunt  iruxvfg dhjkolohr indd re voluptate<br> velit esscillumlore eu quife nrulla parihatur.</p>
                                <!-- Hero-btn -->
                                <div class="hero__btn" data-animation="fadeInLeft" data-delay="1.1s">
                                    <a href="industries.html" class="btn hero-btn">Our Services</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>          
            </div>
        </div>
    </div>
    <!-- slider Area End-->

    <!--? About Area Start-->
    <div id="about" class="support-company-area pt-100 pb-100 section-bg fix" data-background="assets/img/gallery/section_bg02.jpg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="support-location-img">
                        <img src="assets/img/gallery/about.png" alt="">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="right-caption">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle2 mb-50">
                            <span>Our Top Services</span>
                            <h2>About Us</h2>
                        </div>
                        <div class="support-caption">
                            <p class="pera-top">
                                HAKA was created with the vision of becoming the most trusted stock trading community in Indonesia. HAKA is one of the most famous and fastest-growing community of traders in Indonesia. HAKA shortly became well-known for sharing unique-written content which many traders found interesting and helpful.
                            </p>
                            {{--<ul>--}}
                                {{--<li class="text-white"><p>Practical trading strategies and techniques you can use in your trading today.</p></li>--}}
                                {{--<li class="text-white"><p>A weekly analysis of Indonesia Stock Market so you're prepared for the week ahead.</p></li>--}}
                            {{--</ul>--}}
                            {{--<p class="mb-65">Mollit anim laborum.Dvcuis aute serunt  iruxvfg dhjkolohr indd re voluptate velit esscillumlore eu quife nrulla parihatur. Excghcepteur sfwsignjnt occa cupidatat non aute iruxvfg dhjinulpadeserunt moll.</p>--}}
                            <a href="about.html" class="btn post-btn">More About Us</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- About Area End-->

    <!--? Services Area Start -->
    <div id="services" class="categories-area section-padding30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Section Tittle -->
                    <div class="section-tittle mb-70">
                        <span>Our Top Services</span>
                        <h2>Our Best Services</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center mb-50">
                        <div class="cat-icon">
                            <span class="flaticon-development"></span>
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Practical Trading Strategies </a></h5>
                            <p>Practical trading strategies and techniques you can use in your trading today.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center mb-50">
                        <div class="cat-icon">
                            <span class="flaticon-result"></span>
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Weekly Analysis</a></h5>
                            <p>A weekly analysis of Indonesia Stock Market so you're prepared for the week ahead.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center mb-50">
                        <div class="cat-icon">
                            <span class="flaticon-team"></span>
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Private Trading Community</a></h5>
                            <p>Access HAKA private trading community, so you can interact and learn together.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Area End -->

    <!-- Recommendation Area Start -->
    <div id="recommendations" class="home-blog-area section-padding30" style="background-color: lightblue">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle mb-100">
                        <span>Our Recommendations</span>
                        <h2>Recommendations</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($recommendations->take(4) as $recommendation)
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="home-blog-single mb-30">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="{{ $recommendation->featured }}" alt="">
                                <ul>
                                    <li>By Admin   -   {{ $recommendation->created_at->diffForHumans() }}</li>
                                </ul>
                            </div>
                            <div class="blog-cap">
                                <h3><a href="blog_details.html">{{ $recommendation->title }}</a></h3>
                                <p>
                                    {!! str_limit(strip_tags($recommendation->content), 100) !!}
                                </p>
                                <a href="{{ route('post.single', $recommendation->slug) }}" class="more-btn">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Recommendation Area End -->

    <!-- Screeners Start -->
    <div id="screeners" class="team-area section-padding30" style="background-color: white">
        <div class="container">
            <div class="row">
                <div class="cl-xl-7 col-lg-8 col-md-10">
                    <!-- Section Tittle -->
                    <div class="section-tittle mb-70">
                        <span>Our Screeners </span>
                        <h2>Screeners</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- single Tem -->
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="img/resized/bandar.jpeg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="img/resized/volume.jpeg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="img/resized/breakout.jpeg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="img/resized/foreign.jpeg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Screeners End -->

    <!-- Youtube Start -->
    <div class="team-area section-padding30">
        <div class="container">
            <div class="row">
                {{--<div class="cl-xl-7 col-lg-8 col-md-10">--}}
                    {{--<div class="section-tittle mb-70">--}}
                        {{--<span>Our Youtube </span>--}}
                        {{--<h2>Introduction</h2>--}}
                    {{--</div>--}}
                {{--</div>--}}
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-">
                    <div id="container_youtube">
                        <iframe class="responsive-iframe"
                                src="https://www.youtube.com/embed/JCf5oRKhJgU?controls=0"
                                title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Youtube End -->

    <!-- Want To work -->
    <section class="wantToWork-area w-padding2 section-bg" data-background="assets/img/gallery/section_bg03.jpg">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-7 col-lg-9 col-md-8">
                    <div class="wantToWork-caption wantToWork-caption2">
                        <h2>Want to learn how to become a consistently profitable trader?<br> Then youre in the right place.</h2>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4">
                    <a href="#" class="btn btn-black f-right">More About Us</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Want To work End -->

    <!--? Testimonial Start -->
    <div class="testimonial-area testimonial-padding" data-background="assets/img/gallery/section_bg04.jpg">
        <div class="container ">
            <div class="row d-flex justify-content-center">
                <div class="col-xl-10 col-lg-10 col-md-9">
                    <div class="h1-testimonial-active">
                        <!-- Single Testimonial -->
                        <div class="single-testimonial text-center">
                            <!-- Testimonial Content -->
                            <div class="testimonial-caption ">
                                <div class="testimonial-top-cap">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="67px" height="49px">
                                    <path fill-rule="evenodd"  fill="rgb(240, 78, 60)"
                                    d="M57.053,48.209 L42.790,48.209 L52.299,29.242 L38.036,29.242 L38.036,0.790 L66.562,0.790 L66.562,29.242 L57.053,48.209 ZM4.755,48.209 L14.263,29.242 L0.000,29.242 L0.000,0.790 L28.527,0.790 L28.527,29.242 L19.018,48.209 L4.755,48.209 Z"/>
                                    </svg>
                                    <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis por incididunt ut labore et dolore mas. </p>
                                </div>
                                <!-- founder -->
                                <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                    <div class="founder-img">
                                        <img src="assets/img/gallery/Homepage_testi.png" alt="">
                                    </div>
                                    <div class="founder-text">
                                        <span>Jessya Inn</span>
                                        <p>Chif Photographer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Testimonial -->
                        <div class="single-testimonial text-center">
                            <!-- Testimonial Content -->
                            <div class="testimonial-caption ">
                                <div class="testimonial-top-cap">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="67px" height="49px">
                                    <path fill-rule="evenodd"  fill="rgb(240, 78, 60)"
                                    d="M57.053,48.209 L42.790,48.209 L52.299,29.242 L38.036,29.242 L38.036,0.790 L66.562,0.790 L66.562,29.242 L57.053,48.209 ZM4.755,48.209 L14.263,29.242 L0.000,29.242 L0.000,0.790 L28.527,0.790 L28.527,29.242 L19.018,48.209 L4.755,48.209 Z"/>
                                    </svg>
                                    <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis por incididunt ut labore et dolore mas. </p>
                                </div>
                                <!-- founder -->
                                <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                    <div class="founder-img">
                                        <img src="assets/img/gallery/Homepage_testi.png" alt="">
                                    </div>
                                    <div class="founder-text">
                                        <span>Jessya Inn</span>
                                        <p>Chif Photographer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Coun Down Start -->
    <div class="count-down-area pb-120">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <!-- Counter Up -->
                    <div class="single-counter text-center">
                        <span class="counter">8705</span>
                        <p>Projects Completed</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <!-- Counter Up -->
                    <div class="single-counter active text-center">
                        <span class="counter">480</span>
                        <p> Active Clients</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <!-- Counter Up -->
                    <div class="single-counter text-center">
                        <span class="counter">626</span>
                        <p>Cups of Coffee</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <!-- Counter Up -->
                    <div class="single-counter text-center">
                        <span class="counter">9774</span>
                        <p>Happy Clients</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Coun Down End -->
@endsection