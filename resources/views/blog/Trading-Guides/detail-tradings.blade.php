@extends('master')

@section('master-content')
<div class="col-md-8 col-sm-8 col-xs-12">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <!-- single-blog start -->
        <article class="blog-post-wrapper">
          <div class="post-thumbnail">
            <img src="{{ $post->featured }}" alt="" />
          </div>
          <div class="post-information">
            <h2>{{ $post->title }}</h2>
            <div class="entry-meta">
              <span class="author-meta"><i class="fa fa-user"></i> <a href="#">admin</a></span>
              <span><i class="fa fa-clock-o"></i> {{$post->created_at->toFormattedDateString()}}</span>
              <span>
                <i class="fa fa-tags"></i>
                @foreach($post->tags as $t)
                  <a href="#">{{$t->tag}}</a>
                @endforeach
              </span>
            </div>
            <div class="entry-content">
              <p>{{ $post->content }}</p>
            </div>
          </div>
        </article>
        <div class="clear"></div>
        <a href="{{ route('trading.guides') }}" class="btn btn-danger">Back</a>
        <!-- single-blog end -->
      </div>
    </div>
</div>
@endsection