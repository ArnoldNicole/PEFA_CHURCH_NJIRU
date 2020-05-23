<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Pefa Church</title>
	 <link href="{{asset('libtemp/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{asset('css/libtemp/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="l{{asset('css/ibtemp/animate/animate.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{asset('css/css/owl.carousel.css') }}">
  <!-- Main Stylesheet File -->
  <link href="{{asset('css/css_temp/style.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <link rel="stylesheet" href="{{asset('css/pefa_custom.css')}}">
  <script src="{{asset('css/js/bootstrap.min.js')}}"></script>
	
</head>
<body>
	<header id="header" class="bg-info">
		<div class="row">			
			<div class="col">
				<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
				  <div class="container">
				    <a class="navbar-brand" href="#">
				          PEFA CHURCH NJIRU
				        </a>
				    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				          <span class="navbar-toggler-icon"></span>
				        </button>
				    <div class="collapse navbar-collapse" id="navbarResponsive">
				      <ul class="navbar-nav ml-auto">
				        <li class="nav-item active">
				          <a class="nav-link" href="/"><span class="text-primary">Home</span>
				                <span class="sr-only">(current)</span>
				              </a>
				        </li>	
				        <li class="nav-item">
				          <a class="nav-link" href="/a_word"><span class="text-primary">A word</span></a>
				        </li>			        
				        <li class="nav-item">
				          <a class="nav-link" href="/weekly"><span class="text-primary">Weekly</span></a>
				        </li>
				        <li class="nav-item">
				          <a class="nav-link" href="/history"><span class="text-primary">History</span></a>
				        </li>
				        <li class="nav-item">
				          <a class="nav-link" href="/gallery"><span class="text-primary">Gallery</span></a>
				        </li>
				        <li class="nav-item">
				          <a class="nav-link" href="/contact_us"><span class="text-primary">Contact</span></a>
				        </li>
				      </ul>
				    </div>
				 
				</nav>
			</div>
		</div>
		
	</header><!-- /header -->

	<main class="py-4">
            @yield('content')
        </main>

	<footer id="sticky-footer" class="bg-primary text-white-50 footer fixed-bottom">
	    <div class="container text-center">
	    	
	    	
	      <small><strong>Copyright &copy; <span>{{date('Y')}}</span> <span><strong>.</strong></span> pefachurch.org</strong></small>
	    	
	    </div>
	  </footer>	
	  
	    
   
  <script src="{{asset('css/lib/jquery/jquery.min.js')}}"></script>
  <!-- Contact Form JavaScript File -->
  
  <!--  Main Javascript File -->

<!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="{{asset('css/js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('css/js/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
  
    <!-- Plugins js -->
    <script src="{{asset('css/js/plugins.js')}}"></script>
    <script src="{{asset('css/js/classy-nav.min.js')}}"></script>
    <script src="{{asset('css/js/jquery-ui.min.js')}}"></script>
    <!-- Active js -->
    <script src="{{asset('css/js/active.js')}}"></script>
     <script src="{{asset('css/lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{asset('css/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('css/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('css/lib/superfish/hoverIntent.js')}}"></script>
    <script src="{{asset('css/lib/superfish/superfish.min.js')}}"></script>
    <script>
// Initialize and add the map
function initMap() {
  // The location of Thindigua -1.198139, 36.836949
  var thindigua = {lat: -1.198139, lng: 36.836949};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 15, center: thindigua});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: thindigua, map: map});
}
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDsZ-uTLf9mW1pjJb-7cC3BcFPY3Wm5HuM&callback=initMap"
  type="text/javascript"></script>
  <script src="js/jquery/jquery-2.2.4.min.js')}}"></script>
<script src="js/main.js"></script>
	      <script src="js/wow.min.js')}}"></script>
              <script>
              wow = new WOW(
                      
                    )
                    wow.init();
              </script> 
</body>
</html>