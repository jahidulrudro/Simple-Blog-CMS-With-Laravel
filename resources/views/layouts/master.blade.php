@include ('partials.header')

<!-- Start Content -->
<div class="main">
    <!-- Start Category Title and Description -->
    <section class="main-t">
        <h1> {{ Voyager::setting('site.title', 'Poly') }}</h1>
        <h4> {{ Voyager::setting('site.description', 'Next Generation Blogging Platform') }} </h4>
    </section>
    <!-- End Category Title and Description -->

    <div class="container">
        <div class="row">
            @yield ('content')
            @include ('partials.sidebar')
        </div>
    </div>
</div>
<!-- End Content -->
@include ('partials.footer')