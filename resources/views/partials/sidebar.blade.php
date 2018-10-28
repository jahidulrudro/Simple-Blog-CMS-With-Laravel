<!-- Start Sidebar -->
<div class="col-lg-3 col-md-3 col-xs-3 col-sm-3 side">
	<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

		<!-- Start Search Widget -->
		<div class="panel panel-pale">
			<div class="panel-heading" role="tab" id="headingFour">
				<h4 class="panel-title"><a class="" role="button" data-toggle="collapse" data-parent="#accordion4" href="#CollapseFour"
					 aria-expanded="false" aria-controls="CollapseFour">Search</a></h4>
			</div>
			<div id="CollapseFour" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingFour">
				<div class="panel-body search">
					<form method="get" action="search.php" id="search">
						<div class="searchblog">
							<button type="submit">
								<i class="fa fa-search"></i>
							</button>
							<div class="searchbox">
								<input type="search" class="form-control" name="search" placeholder="Search...">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- End Search Widget -->

		<!-- Start Latest Posts Widget -->
		<div class="panel panel-pale">
			<div class="panel-heading" role="tab" id="headingTwo">
				<h4 class="panel-title"><a class="" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo"
					 aria-expanded="true" aria-controls="collapseTwo">Latest Posts</a></h4>
			</div>
			<div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
				<div class="panel-body">
					@foreach ($posts as $post)
					@if($loop->count<6) <div class="panel-post">
						<img src="{{ asset('storage/') }}/{{$post->image}}" title="{{$post->title}}" alt="{{$post->title}}">
						<div class="desc">
							<h5><a href="{{url('/')}}/posts/{{$post->id}}">{{$post->title}}</a></h5>
							<p>{{ $post->created_at->toFormattedDateString() }} </p>
						</div>
				</div>
				@endif
				@endforeach
			</div>
		</div>
	</div>
	<!-- End Latest Posts Widget -->

	<!-- Start Categories Widget -->
	<div class="panel panel-pale">
		<div class="panel-heading" role="tab" id="headingThree">
			<h4 class="panel-title"><a class="" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapseThree"
				 aria-expanded="false" aria-controls="collapseThree">Categories</a></h4>
		</div>
		<div id="collapseThree" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingThree">
			<div class="panel-body">
				<ul class="panel-cat">
					@foreach ($categories as $category)
					<li><a href="{{url('/')}}/categories/{{ $category->id }}">{{ $category->name }}</a></li>
					@endforeach
				</ul>
			</div>
		</div>
	</div>
	<!-- End Categories Widget -->

</div>
</div>
<!-- End Sidebar -->