@extends('master')

@section('master-content')
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
              <a href="{{ route('post.single', ['slug' => $content->slug]) }}" class="ready-btn">Read more</a>
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
@endsection