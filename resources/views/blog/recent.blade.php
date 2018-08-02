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
            <p><a href="{{ route('post.single', ['slug' => $recentPost->slug]) }}"> {{ $recentPost->title }}</a></p>
          </div>
        </div>
      </div>
    @endforeach
</div>