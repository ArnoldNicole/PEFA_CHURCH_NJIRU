@extends('layouts.app')
@section('content')
<div class="container-fluid">
	@if (\Session::has('success'))
	    <div class="alert alert-success my-alert" >
	        <ul>
	            <li>{!! \Session::get('success') !!}</li>
	        </ul>
	    </div>
	@endif
	<script>
		document.querySelector('.my-alert').style.display = 'block';
	setTimeout(function() {
	  document.querySelector('.my-alert').style.display = 'none';
	}, 4000);
		</script>
	<section id="contact" class="bg-primary">
	  <div class="container wow fadeInUp">
	    <div class="section-header">
	      <h3 class="section-title">Contact us</h3>	      
	    </div>
	  </div>              

	  <div class="container wow fadeInUp">
	  		  <div id="maps">
	  		  	

	  		  </div>
	  		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDsZ-uTLf9mW1pjJb-7cC3BcFPY3Wm5HuM&callback=initMap" async defer></script>

	  		<script>
	  	  function initMap() {
	  	  	// The location of Njiru -1.198139, 36.836949
	  		    var thindigua = {lat: -1.198139, lng: 36.836949};
	  		    // The map, centered at Nairobi
	  		    var map = new google.maps.Map(
	  		        document.getElementById('maps'), {zoom: 15, center: njiru});
	  		    // The marker, positioned at Uluru
	  		    var marker = new google.maps.Marker({position: thindigua, map: map});
	  		  }

	  		</script>
	    <div class="row justify-content-center">

	      <div class="col-lg-3 col-md-4">

	        <div class="info">
	          <div>
	            <i class="fa fa-map-marker"></i>
	            <p>Njiru <br>Nairobi</p>
	          </div>

	          <div>
	            <i class="fa fa-envelope"></i>
	            <p><a   class="text-dark" href="mailto:admin@pefachurchnjiru.com" target="_blank">admin@pefachurchnjiru.com</a></p>
	          </div>

	          <div>
	            <i class="fa fa-phone"></i>
	           <p> <a  class="text-dark"  href="tel:+254722260792" target="_blank">+254 (722) 260 792</a></p>
	          </div>
	        </div>

	        <div class="social-links">
	          <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
	          <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
	          <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
	          <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
	          <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
	        </div>

	      </div>

	      <div class="col-lg-5 col-md-8">
	        <div class="form">	          
	          <form id="contact_Form" method="POST" action="/message/save">
	          	@csrf
	            <div class="form-group">
	              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" value="" required >                 
	            </div>
	            <div class="form-group">
	              <input type="email" class="form-control" name="email" id="email" value="" placeholder="Your Email" required>
	              
	            </div>	            
	            <div class="form-group">
	              <textarea class="form-control" name="message" rows="5"   placeholder="Message" value="" id="message" required></textarea>
	             
	            </div>
	            <div class="text-center"><button type="submit">Send Message</button></div>
	          </form>
	        </div>
	      </div>

	    </div>

	  </div>
	  
	   
	</section><!-- #contact -->

	</div>

@endsection
