@extends ('layouts.master')

@section ('content')
<div class="col-lg-9 col-md-9 col-xs-9 col-sm-9 main-content">
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
                <img src="{{asset('storage')}}/{{ $post->author->avatar }}" alt="author" title="{{ $post->author->name }}">

                <p> {{ $post->author->name }} </p>

            </div>
            <h2><span><a href="{{url('/')}}/posts/{{ $post->id }}">{{ $post->title }}</a></span></h2>
            <span>{{ $post->created_at->toFormattedDateString() }}</span>
            <p>{!! $post->body !!}</p>
        </div>
        <div class="more-tabs">
            <div class="article-date">
                <p><strong>{{ $post->created_at->format('F jS') }}</strong></p>
                <p>{{ $post->created_at->format('Y') }}</p>
            </div>
        </div>
    </article>
</div>

@endsection