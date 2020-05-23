@extends('layouts.app')
@section('links')
<link rel="stylesheet" href="{{asset('css/news.css')}}">
@endsection
@section('content')
<div class="container-fluid mb-4">
	<!-- >>>>>>>>>>>>>>>>>>>>
	     Main Posts Area
	<<<<<<<<<<<<<<<<<<<<< -->
	<div class="mag-posts-content mt-30 mb-30 p-30 box-shadow">
	    <!-- Trending Now Posts Area -->
	    <div class="trending-now-posts mb-30">
	        <!-- Section Title -->
	        <div class="section-heading">
	            <h5>In The News</h5>
	       
	    </div>

	    <!-- Feature Video Posts Area -->
	    <div class="feature-video-posts mb-30">
	        <!-- Section Title -->       

	        <div class="featured-video-posts">
	            <div class="row">
	                <div class="col-12 col-lg-7">
	                	@if($news=="")
								<div class="single-featured-post">	
											<div class="post-content">
											    <div class="post-meta">
											        <p>Nothing to show here</p>
											    </div>
											    <a href="#" class="post-title">No News Found</a>
											    <p>No content found on the news server. If you think this is a problem contact admin <a href="mailto:admin@pefachurchnjiru.org" target="_blank">Here</a></p>
											</div>

										
										<div class="post-thumbnail mb-50" align="center">
											<img src="/storage/oops.gif" class="img-thumbnail w-25 img-fluid text-center"  alt="Error gif">
										</div>
									</div>
								</div>

								@else								
								<div class="single-featured-post">
								    <!-- Thumbnail -->
								    <div class="post-thumbnail mb-50">
								        <img src="/img/news-thumbnail.jpeg" alt="">
								        {{-- <a href="#" class="video-play"><i class="fa fa-play"></i></a> --}}
								    </div>
								    <!-- Post Contetnt -->
								    <div class="post-content">
								        <div class="post-meta">
								            <a href="#">{{$news->created_at}}</a>
								            <a href="#">{{$news->title}}</a>
								        </div>
								        <a href="#" class="post-title">{{$news->user->name}}: Writer</a>
								        <article>{!! html_entity_decode($news->body) !!}</article>
								    </div>
								    <!-- Post Share Area -->	                   
								</div>
								
	                	@endif
	                    <!-- Single Featured Post -->
	                    
	                </div>

	           <div class="col-12 col-lg-5">
	                    <!-- Featured Video Posts Slide -->


	    <!-- Most Viewed Videos -->
	    <div class="most-viewed-videos mb-30">
	        <!-- Section Title -->
	        <div class="section-heading">
	            <h5>Also..</h5>
	        </div>
	        <ul class="list-group">
	        @foreach($allnews as $also)	        
	        	@if($also->id==$news->id)
	        	<span></span>
	        	@else
	        		<li class="list-group-item">
	        		<a href="/news/{{$also->id}}">
	        			<h5 class="h5 text-info text-capitalize">{{$also->title}}</h5>
	        		<p>{!!html_entity_decode(substr($also->body, 0, 150)) !!}...</p>
	        	</a>
	        	</li>	 
	        	@endif       
	        @endforeach
	        </ul>




	
</div>  
</div>
</div>
</div>
</div>
</div>
</div>

</div>


@endsection

@section('js')
<!-- Popper js -->
<script src="{{asset('js/js/bootstrap/popper.min.js')}}"></script>
<!-- Bootstrap js -->
<script src="{{asset('js/js/bootstrap/bootstrap.min.js')}}"></script>
<!-- All Plugins js -->
<script src="{{asset('js/js/plugins/plugins.js')}}"></script>
<!-- Active js -->
<script src="{{asset('js/js/active.js')}}"></script>
@endsection