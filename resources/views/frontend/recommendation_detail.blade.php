@extends('layouts.frontend')

@section('content')
<!--? Hero Start -->
<div class="slider-area2">
    <div class="slider-height2 hero-overly2 d-flex align-items-center">
          <div class="container">
             <div class="row">
                <div class="col-xl-12">
                      <div class="hero-cap hero-cap2 text-center">
                         <h2>Recommendation</h2>
                      </div>
                </div>
             </div>
          </div>
    </div>
 </div>
 <!-- Hero End -->
<!--================Blog Area =================-->
<section class="blog_area single-post-area section-padding">
    <div class="container">
       <div class="row">
          <div class="col-lg-8 posts-list">
             <div class="single-post">
                <div class="feature-img">
                   <img class="img-fluid" src="{{ $post->featured }}" alt="">
                </div>
                <div class="blog_details">
                   <h2>
                      {{  $post->title }}
                   </h2>
                   <p class="excert">
                     {!! $post->content !!}
                   </p>
                </div>
             </div>
          </div>
          <div class="col-lg-4">
             <div class="blog_right_sidebar">
                <aside class="single_sidebar_widget search_widget">
                   <form action="#">
                      <div class="form-group">
                         <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder='Search Keyword'
                               onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                            <div class="input-group-append">
                               <button class="btns" type="button"><i class="ti-search"></i></button>
                            </div>
                         </div>
                      </div>
                      <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                         type="submit">Search</button>
                   </form>
                </aside>
                <aside class="single_sidebar_widget popular_post_widget">
                   <h3 class="widget_title">Recent Recommendation</h3>
                   @foreach ($recommendations as $recommendation)
                     <div class="media post_item">
                        <img src="{{ $recommendation->featured }}" alt="post" width="60%" height="60%">
                        <div class="media-body">
                           <a href="{{ route('post.single', $recommendation->slug) }}">
                              <h3>{!! str_limit(strip_tags($recommendation->content), 10) !!}</h3>
                           </a>
                           <p>{{ $recommendation->created_at->diffForHumans() }}</p>
                        </div>
                     </div>
                   @endforeach
                </aside>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!--================ Blog Area end =================-->
@endsection