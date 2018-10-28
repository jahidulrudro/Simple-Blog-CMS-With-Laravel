@extends ('layouts.master')

@section ('content')
<div class="col-lg-9 col-md-9 col-xs-9 col-sm-9 main-content">
    <!-- Start Posts Loop -->
    @foreach ($posts as $post)
    @include ('posts.post')
    @endforeach
    <!-- End Posts Loop -->

    <!-- Start Pagination -->
    <nav class="text-center">
        {{$posts->links()}}
    </nav>
    <!--<nav class="blog-pagination">-->
    <!--    <a class="btn btn-paleutism btn-lg" href="#"><i class="fa fa-caret-left"></i> Older</a>-->
    <!--    <a class="btn btn-paleutism btn-lg pull-right" href="#">Newer <i class="fa fa-caret-right"></i></a>-->
    <!--</nav>-->
</div>
<!-- End Pagination -->
@endsection