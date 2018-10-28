<article class="main-d">
  <div class="img">
    <div class="main-hov">
      <h5>{{$post->category->name}}</h5>
    </div>
    <a href="{{url('/')}}/posts/{{ $post->id }}">
      <img src="{{asset('storage')}}/{{ $post->image }}" title="{{ $post->title }}" alt="{{ $post->title }}">
    </a>
  </div>
  <div class="content">
    <div class="author">

      <!-- <img src="http://www.gravatar.com/avatar/e283432a7aa791efa45f3d29f2ea5f21?s=200" alt="author" title="{{ $post->author->name }}"> -->
      <img src="{{asset('storage')}}/{{ $post->author->avatar }}" alt="author" title="{{ $post->author->name }}">

      <p> {{ $post->author->name }} </p>

    </div>
    <h2><span><a href="{{url('/')}}/posts/{{ $post->id }}">{{ $post->title }}</a></span></h2>
    <p>{!! $post->excerpt !!}</p>
    <div class="read-btn">
      <a href="{{url('/')}}/posts/{{ $post->id }}" class="btn btn-paleutism btn-lg"> Read More... </a>
    </div>
  </div>
  <div class="more-tabs">
    <div class="article-date">
      <p><strong>{{ $post->created_at->format('F jS') }}</strong></p>
      <p>{{ $post->created_at->format('Y') }}</p>
    </div>
  </div>
</article>