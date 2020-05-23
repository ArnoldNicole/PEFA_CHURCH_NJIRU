<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title></title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('css/lib/bootstrap/css/bootstrap.min.css')}}      " rel="stylesheet">
  <!--external css-->
  <link href="{{asset('css/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
  <link href="{{asset('css/lib/bootstrap-wysihtml5/bootstrap-wysihtml5.css')}}" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <link href="{{asset('css/style-responsive.css')}}" rel="stylesheet"> 
</head>

<body>
  <section id="container">   
    <!--main content start-->
    <section id="main-content">
    @yield('content')
      </section>
      <!-- /wrapper -->
    </section>
    
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="{{asset('css/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('css/lib/bootstrap/js/bootstrap.min.js')}}"></script>
  <script class="include" type="text/javascript" src="{{asset('css/lib/jquery.dcjqaccordion.2.7.js')}}"></script>
  <script src="{{asset('css/lib/jquery.scrollTo.min.js')}}"></script>
  <script src="{{asset('css/lib/jquery.nicescroll.js')}}" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="{{asset('css/lib/common-scripts.js')}}"></script>
  <!--script for this page-->
  <script type="text/javascript" src="{{asset('css/lib/bootstrap-wysihtml5/wysihtml5-0.3.0.js')}}"></script>
  <script type="text/javascript" src="{{asset('css/lib/bootstrap-wysihtml5/bootstrap-wysihtml5.js')}}"></script>

  <script type="text/javascript">
    //wysihtml5 start

    $('.wysihtml5').wysihtml5();

    //wysihtml5 end
  </script>
</body>

</html>
