<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="Description" CONTENT="Author: Arnold Nyaga, realsolutions.000webhostapp.com">
	<meta name="description" content="Official website for Pefa Chirch Njiru." />
	<meta name="robots" content="Arnold Wamae Nyaga, Aloice Matolo Nyamai, Pefa Church Njiru" />
	<title>Pefa Church Njiru</title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
	<link rel="stylesheet" href="{{asset('css/animate.css')}}">
	<link rel="stylesheet" href="{{asset('css/custom.css')}}">
	<link rel="stylesheet" href="{{asset('css/pefa_custom.css')}}">
	<link rel="stylesheet" href="{{asset('css/lib/font-awesome/css/font-awesome.css')}}">
	<link rel="stylesheet" href="{{asset('css/news.css')}}">
	@yield('links')
	<style>
		.section-header .section-title {
  font-size: 32px;
  color: #111;
  text-transform: uppercase;
  text-align: center;
  font-weight: 700;
  margin-bottom: 5px;
}

.section-header .section-description {
  text-align: center;
  padding-bottom: 40px;
  color: #999;
}
		#team {
		  background: #fff;
		  padding: 80px 0 60px 0;
		}

		#team .member {
		  text-align: center;
		  margin-bottom: 20px;
		}

		#team .member .pic {
		  margin-bottom: 15px;
		  overflow: hidden;
		  height: 260px;
		}

		#team .member .pic img {
		  max-width: 100%;
		}

		#team .member h4 {
		  font-weight: 700;
		  margin-bottom: 2px;
		  font-size: 18px;
		}

		#team .member span {
		  font-style: italic;
		  display: block;
		  font-size: 13px;
		}

		#team .member .social {
		  margin-top: 15px;
		}

		#team .member .social a {
		  color: #b3b3b3;
		}

		#team .member .social a:hover {
		  color: #2dc997;
		}

		#team .member .social i {
		  font-size: 18px;
		  margin: 0 2px;
		}
		.active{
			text-shadow: red;
		}

	</style>
	
</head>
<body>
	<header id="header" class="bg-info">
		<div class="row">			
			<div class="col">
				<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
				  <div class="container">
				    <a class="navbar-brand font-weight-bold h4" href="#">
				          PEFA CHURCH NJIRU
				        </a>
				    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				          <span class="navbar-toggler-icon"></span>
				        </button>
				    <div class="collapse navbar-collapse" id="navbarResponsive">
				      <ul class="navbar-nav ml-auto">
				        <li class="nav-item active">
				          <a class="nav-link  font-weigt-bold h5 {{(request()->is('/')) ? 'text-success' : ''}}" href="/"><span class="text-primary">HOME</span>
				                <span class="sr-only">(current)</span>
				              </a>
				        </li>	
				        <li class="nav-item">
				          <a class="nav-link font-weigt-bold h5 " href="/a_word"><span class="text-primary {{(request()->is('a_word*')) ? 'text-success' : ''}}">INSPIRATIONS</span></a>
				        </li>			        
				        <li class="nav-item">
				          <a class="nav-link font-weigt-bold h5 " href="/weekly"><span class="text-primary {{(request()->is('weekly')) ? 'text-success' : ''}}">WEEKLY</span></a>
				        </li>
				        <li class="nav-item">
				          <a class="nav-link font-weigt-bold h5 " href="/history"><span class="text-primary {{(request()->is('history')) ? 'text-success' : ''}}">OUR STORY</span></a>
				        </li>
				        <li class="nav-item">
				          <a class="nav-link font-weigt-bold h5 " href="/gallery"><span class="text-primary {{(request()->is('gallery*')) ? 'text-success' : ''}}">GALLERY</span></a>
				        </li>
				        <li class="nav-item">
				          <a class="nav-link font-weigt-bold h5 " href="/news"><span class="text-primary {{(request()->is('news')) ? 'text-success' : ''}}">NEWS</span></a>
				        </li>
				        <li class="nav-item">
				          <a class="nav-link font-weigt-bold h5 " href="/contact_us"><span class="text-primary {{(request()->is('contact_us')) ? 'text-success' : ''}}">CONTACT</span></a>
				        </li>
				      </ul>
				    </div>
				 
				</nav>
			</div>
		</div>
		
	</header><!-- /header -->

	<section class="wrapper">
		<main>
	
		<hr>
		@if (\Session::has('success'))
	    <div class="alert alert-success my-alert" >
	    	<hr>   	
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
		@yield('content')
		</main>		
	</section>

	<footer id="sticky-footer" class="row bg-primary text-white-50 footer fixed-bottom">
		<div class="container text-center col-md-12 mt-2 ">
		<a class="font-weight-bold text-white" target="_blank" href="https://web.facebook.com/pages/Pefa-Church-Njiru/110262200427725?_rdc=1&_rdr"><i class="fa fa-facebook btn btn-outline-warning rounded-circle"></i> | PEFA CHURCH NJIRU</a>    	
	    	
	      <p><small><strong>Copyright &copy; <span>{{date('Y')}}</span> <span><strong>.</strong></span> pefachurchnjiru.org</strong></small></p>
	    	
	    </div>
	  </footer>	
	  
	     <script src="{{asset('js/app.js')}}"></script>
	      <script src="{{asset('css/js/jquery/jquery-2.2.4.min.js')}}"></script>
	      @yield('js')
	      </body>
</html>