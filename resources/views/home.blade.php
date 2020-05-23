@extends('layouts.app')
@section('content')
<div class="container-fluid">
	<div class="row mt-5 mb-4 bg-primary justify-content-center justify-content-between">
	     	<div class="col-md-12 mt-3">
	     		<div class="text-center">
	     			<a href="#" style="font-size: xx-large;" class="h1 font-weight-bold text-white text-center">
	     				PEFA CHURCH NJIRU
	     				
	     			</a>
	     		</div>
	     		<h3 class="text-dark text-center font-weight-bold">{{date('Y')}} Theme</h3>
	     		<div class="quote_container text-center">
	     								<div class="font-weight-bold h4 text-danger">“Wherever the bishop appears, there let the people be, even as wheresoever Christ Jesus is, there is the catholic church.”</div>	     								
	     								<div class="font-weight-bold FONT-ITALIC">Ignatius of Antioch</div>
	     							</div>
	     	</div>
	     </div>
<div class="row justify-content-center">
	<div class="col-md-3">
		<div class="row">
			<div class="col-md-12 justify-content-center">
				<div class="m-2 mb-1">
					<h4 class="text-danger font-weight-bold float-left ">P</h4>
				<p>ENTECOSTAL</p>
				</div>
				
				<div class="m-2 mb-1">
					<h4 class="text-warning font-weight-bold float-left ">E</h4>
					<p>VANGELISTIC</p>
				</div>
				<div class="m-2 mb-1">
					<h4 class="text-success font-weight-bold float-left ">F</h4>
					<p>ELLOWSHIP OF</p> 
				</div>
				
				<div class="m-2 mb-1">
					<h4 class="text-info font-weight-bold float-left ">A</h4>
					<p>FRICA</p>
				</div>
			</div>
		</div>

		<div class="row card">
			<div class="card-body">
				<p class="text-center font-weight-bold text-danger">NJIRU SANCTUARY</p>
			</div>
		</div>
	</div>
	<div class="col-md-9">
		<div id="demo" class="carousel slide" data-ride="carousel">

		  <!-- Indicators -->
		  <ul class="carousel-indicators">
		    <li data-target="#demo" data-slide-to="0" class="active"></li>
		    <li data-target="#demo" data-slide-to="1"></li>
		    <li data-target="#demo" data-slide-to="2"></li>
		    <li data-target="#demo" data-slide-to="3"></li>
		  </ul>
		  
		  <!-- The slideshow -->
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img src="/storage/bible.jpeg" alt="Bible" width="1100" height="500">
		      <div class="carousel-caption d-none d-md-block">
		          <h5>The Bible</h5>
		          <p class="text-primary">The Bible is the living word of the Most High</p>
		        </div>
		    </div>
		    <div class="carousel-item">
		      <img src="/storage/flowers.jpeg" alt="flowers" width="1100" height="500">
		      <div class="carousel-caption d-none d-md-block">
		          <h5>Joy</h5>
		          <p class="text-primary">And there was love</p>
		        </div>
		    </div>
		    
		    <div class="carousel-item">
		      <img src="/storage/gates_chained.jpeg" alt=gates width="1100" height="500">
		      <div class="carousel-caption d-none d-md-block">
		          <h5>Broken Chains</h5>
		          <p class="text-primary">In the name of the Lord there is power to break every chain</p>
		        </div>
		    </div>

		    <div class="carousel-item">
		      <img src="/storage/wind_spirit.jpeg" alt=gates width="1100" height="500">
		      <div class="carousel-caption d-none d-md-block">
		          <h5>Spirit, Roaming</h5>
		          <p  class="text-primary">The Spirit is un seerbale. We see its actions</p>
		        </div>
		    </div>

		    
		  
		  <!-- Left and right controls -->
		  <a class="carousel-control-prev" href="#demo" data-slide="prev">
		    <span class="carousel-control-prev-icon"></span>
		  </a>
		  <a class="carousel-control-next" href="#demo" data-slide="next">
		    <span class="carousel-control-next-icon"></span>
		  </a>
		</div>
	</div>
</div>
	 <div class="row pt-5 ">
	 	<div class="col">
	 		<div class="mx-auto mb-5 mb-lg-0 mb-lg-3">
	 		           <div class="features-icons-icon d-flex">
	 		             <i class="icon-screen-desktop m-auto text-primary"></i>
	 		           </div>
	 		           <h3 class="text-center h3 font-weight-bold" style="color: #0115FC">Mission</h3>
	 		           <p class="lead mb-0 h4 text-center">Our Mission is to build and expand the Kingdom of God, by preaching and teaching the holistic Gospel of Jesus Christ for the transformation and fulfillment of lives
	 		           </p>
	 		         </div>
	 		</div>
	 	<div class="col">
	 		<div class="mx-auto mb-5 mb-lg-0 mb-lg-3">
	 		           <div class="features-icons-icon d-flex">
	 		             <i class="icon-screen-desktop m-auto text-primary"></i>
	 		           </div>
	 		           <h3 class="text-center h3 font-weight-bold" style="color: #0115FC">Vision</h3>
	 		           <p class="lead mb-0 h4 text-center">Our vision is to be A Church That Knows Christ and Makes Him Known To The World</p>
	 		         </div>

	 	</div>
	 	<div class="col">
	 		
	 		<div class="mx-auto mb-5 mb-lg-0 mb-lg-3">
	 		           <div class="features-icons-icon d-flex">
	 		             <i class="icon-screen-desktop m-auto text-primary"></i>
	 		           </div>
	 		           <h3 class="text-center font-weight-bold h3" style="color: #0115FC">Commitment</h3>
	 		           <p class="lead mb-0 h4 text-center">Commitment, Compassion, Competence, Innovation, Team Work, Transparency, Faith, Stewardship, Hope,Integrity, Service, Peace, Humanity & Accountability</p>
	 		         </div>
	 	</div>
	 </div><?php
	 /*
	 <section id="team">
	       <div class="container wow fadeInUp">
	         <div class="section-header">
	           <h3 class="section-title">United for a bigger purpose</h3>
	           <p class="section-description">At the wheel of PEFA Njiru</p>
	         </div>
	         <div class="row">
	           <div class="col-lg-3 col-md-6">
	             <div class="member">
	               <div class="pic"><img src="/storage/default.jpeg" alt=""></div>
	               <h4>Pastor</h4>
	               <span>Team Leader</span>
	               <div class="social">
	                 <a href=""><i class="fa fa-twitter"></i></a>
	                 <a href=""><i class="fa fa-facebook"></i></a>
	                 <a href=""><i class="fa fa-google-plus"></i></a>
	                 <a href=""><i class="fa fa-linkedin"></i></a>
	               </div>
	             </div>
	           </div>

	           <div class="col-lg-3 col-md-6">
	             <div class="member">
	               <div class="pic"><img src="/storage/default.jpeg" alt=""></div>
	               <h4>Mr .....</h4>
	               <span>Chairman </span>
	               <div class="social">
	                 <a href=""><i class="fa fa-twitter"></i></a>
	                 <a href=""><i class="fa fa-facebook"></i></a>
	                 <a href=""><i class="fa fa-google-plus"></i></a>
	                 <a href=""><i class="fa fa-linkedin"></i></a>
	               </div>
	             </div>
	           </div>

	           <div class="col-lg-3 col-md-6">
	             <div class="member">
	               <div class="pic"><img src="/storage/default.jpeg" alt=""></div>
	               <h4>Ms......</h4>
	               <span>Secretary </span>
	               <div class="social">
	                 <a href=""><i class="fa fa-twitter"></i></a>
	                 <a href=""><i class="fa fa-facebook"></i></a>
	                 <a href=""><i class="fa fa-google-plus"></i></a>
	                 <a href=""><i class="fa fa-linkedin"></i></a>
	               </div>
	             </div>
	           </div>

	           <div class="col-lg-3 col-md-6">
	             <div class="member">
	               <div class="pic img-fluid"><img src="/storage/default.jpeg" alt="" style="border-radius: 80px"></div>
	               <h4>Arnold Wamae</h4>
	               <span>Our web systems developer</span>
	               <div class="social">
	                 <a href="https://twitter.com/wamae_arnold"><i class="fa fa-twitter"></i></a>
	                 <a href="https://facebook.com/samearnoldnyaga"><i class="fa fa-facebook"></i></a>
	                 
	               </div>
	             </div>
	           </div>
	         </div>

	       </div>
	     </section><!-- #team -->
	     */
	     ?>

	     <div class="row justify-content-center" id="Trends">
	     	<div class="col-md-12 mb-3 mt-2">
	     		<h4 class="text-center text-info font-weight-bold">Just In...</h4>
	     		<div class="carousel slide" data-ride="carousel" id="NewsCarousel">	     			
	     			
	     			<div class="carousel-inner mt-2">
	     				<div class="carousel-item active">
	     					<img src="{{asset('/images/white.jpg')}}" class="d-block w-100" alt="" width="1100">
	     					<div class="carousel-caption">
	     						<a href="#Trends" class="animated wobble h1 font-weight-bold text-success">
	     							Trending At PEFA NJIRU</a>
	     					</div>
	     				</div>
	     				@foreach($news as $trend)
	     				<div class="carousel-item">
	     					<img src="{{asset('/images/white.jpg')}}" class="d-block w-100" alt="" width="1100">
	     					<div class="carousel-caption">
	     						<a href="/a_word/{{$trend->id}}" class="h3 pb-0 font-weight-bold text-success animated wobble">
	     							{{$trend->title}}</a>
	     						{{-- <p class="text-success">{!! html_entity_decode(substr($trend->word, 0, 100)) !!}...</p> --}}
	     					</div>
	     				</div>
	     				@endforeach
	     			</div>
	     			
	     			<a class="carousel-control-prev" href="#NewsCarousel" data-slide="prev" title="Previous">
	     			  <span class="carousel-control-prev-icon"></span>
	     			</a>
	     			<a class="carousel-control-next" href="#NewsCarousel" data-slide="next" title="next">
	     			  <span class="carousel-control-next-icon"></span>
	     			</a>
	     		</div>
	     	</div>
	     </div>
	     
	     <div class="row mb-5 justify-content-center bg-secondary">
	     	<div class="col-md-4 card">
	     		<div class="card-header m-0 p-0">
	     			<img src="/storage/uploads/sermon_1.jpg" alt="" class="w-100 animated rubberBand">
	     		</div>
	     		<div class="card-body">
	     			<h3 class="text-center font-weight-bold mt-3">STARTING WELL FINISHING STRONG</h3>
	     		</div>
	     	</div>

	     	<div class="col-md-4 card">
	     		<div class="card-header m-0 p-0">
	     			<img src="/storage/uploads/sermon_2.jpg" alt="" class="w-100 animated rubberBand">
	     		</div>
	     		<div class="card-body">
	     			<h3 class="text-center  font-weight-bold">A LIFE WORTH LIVING, A NEW PURPOSE</h3>
	     		</div>
	     	</div>

	     	<div class="col-md-4 card">
	     		<div class="card-header m-0 p-0">
	     			<img src="/storage/uploads/sermon_4.jpg" alt="" class="w-100 animated rubberBand">
	     		</div>
	     		<div class="card-body">
	     			<h3 class="text-center font-weight-bold">RECEIVE THE HOLYSPIRIT AND BLISSFUL BY JESUS CHRIST</h3>
	     		</div>
	     	</div>
	     </div>

	  

	</div>
@endsection