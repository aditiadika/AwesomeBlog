@extends('layouts.frontend')

@section('content')
    <!-- slider Area Start-->
    <div id="home" class="slider-area ">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center"></div>
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
                                <h3><a href="{{ route('post.single', $recommendation->slug) }}">{{ $recommendation->title }}</a></h3>
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
        <div class="text-center">
            <a href="{{ route('master.content') }}" class="btn btn-primary btn-sm text-center">Load More</a>
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
                            <a href="{{ route('frontend.trend-reversal') }}">
                                <img src="img/resized/bandar.jpeg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <a href="{{ route('frontend.breakout') }}">
                                <img src="img/resized/volume.jpeg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <a href="{{ route('frontend.boom') }}">
                                <img src="img/resized/breakout.jpeg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <a href="{{ route('frontend.foreign-accumulation') }}">
                                <img src="img/resized/foreign.jpeg" alt="">
                            </a>
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
                                    <p>Sejak gabung di HAKA premium, alhamdulillah tiap harinya profit terus. Trading kian mantap & gak galau lagi. Gak ada lg yg namanya perasaan was-was saat trading. Di tambah dengan rekomendasi & saran yg sangat membantu sekali dlm trading. Plus info market yg cepat & up to date tiap harinya. HAKA premium jodoh terbaik untuk trading saya....gak bakalan pindah ke lain.</p>
                                </div>
                                <!-- founder -->
                                <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                    <div class="founder-img">
                                        <img src="https://via.placeholder.com/80" class="rounded-circle" alt="">
                                    </div>
                                    <div class="founder-text">
                                        <span>Okta</span>
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
                                    <p>Haka premium membantu saya untuk trading harian, swing maupun invest. Pagi sblm market mulai sdh dikasih rekomendasi buat haka /swing. Pas selesai session 1 selalu dikasih ulasan apa yang dibeli asing dan volumenya. Begitu pula pas jam trading diberikan rekomendasi apa yg bisa di haka. Setiap ada pertanyaan juga selalu cepat dijawab. Top deh pokoknya, terimakasih haka premium.</p>
                                </div>
                                <!-- founder -->
                                <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                    <div class="founder-img">
                                        <img src="https://via.placeholder.com/80" class="rounded-circle" alt="">
                                    </div>
                                    <div class="founder-text">
                                        <span>Mia</span>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                    <p>Sebagai seorang trader pemula, memilih saham yang tepat merupakan pilihan yang tergolong sulit, namun setelah bergabung dengan HAKA premium, hal ini bukan menjadi kendala lagi, karena di HAKA premium rekomendasi dan juga timing yang di berikan tepat sasaran dan di dukung dengan analisa yang kuat, sehingga kita dapat membantu untuk memilih saham yang tepat, terima kasih HAKA premium.</p>
                                </div>
                                <!-- founder -->
                                <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                    <div class="founder-img">
                                        <img src="https://via.placeholder.com/80" class="rounded-circle" alt="">
                                    </div>
                                    <div class="founder-text">
                                        <span>Elifas Felix</span>
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
@endsection