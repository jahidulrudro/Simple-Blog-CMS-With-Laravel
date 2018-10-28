<!DOCTYPE html>
<html>

<head>
	<title>{{ Voyager::setting('site.title') }}</title>
	<meta name="description" content="{{ Voyager::setting('site.description') }}">
	<meta name="keywords" content="{{ Voyager::setting('site.title') }}, Blogging Software, Blog, {{ Voyager::setting('site.title') }} Blog">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta property="og:title" content="{{ Voyager::setting('site.title') }}">
	<meta property="og:description" content="{{ Voyager::setting('site.description') }}">

	<!-- FAVICON -->
	<link rel="icon" type="image/x-icon" href="template/default/assets/img/favicon.ico" />

	<!-- CSS & JS Library -->
	<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
	<link href="{{asset('css/style.css')}}" rel="stylesheet">
	<script src="{{asset('js/jquery-1.11.1.js')}}"></script>

	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Courgette' rel='stylesheet' type='text/css'>
</head>

<body>
	<!-- Start Header -->
	<header>
		<!-- Start Logo -->
		<div class="h-logo">
			<a href="{{url('/')}}">
				<img src="{{asset('storage')}}/{{Voyager::setting('site.logo')}}" title="{{ Voyager::setting('site.title') }}" alt="{{ Voyager::setting('site.title') }}">
			</a>
		</div>
		<!-- End Logo -->

		<!-- Start Menu -->
		<nav class="navbar navbar-pale">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"
					 aria-controls="navbar">
						<span class="sr-only">Menu</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav pull-left">
						<li><a href="{{ url('/')}}">Home</a></li>
						@foreach ($categories as $category)
						<li><a href="{{url('/')}}/categories/{{ $category->id }}">{{ $category->name }}</a></li>
						@endforeach
					</ul>
					<ul class="nav navbar-nav pull-right">
						<li><a href="{{url('/')}}/admin" target="_blank">
								@if(Auth::user())
								Dashboard
								@else
								Login
								@endif
							</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- End Menu -->

	</header>
	<!-- End Header -->