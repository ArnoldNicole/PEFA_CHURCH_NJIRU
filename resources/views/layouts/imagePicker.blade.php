<html lang="en">

<head>  
  <title>Image Picker</title>

  <!-- Favicons -->
  

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('css/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet') }}" />
  <link rel="stylesheet" type="text/css" href="{{ asset('css/lib/bootstrap-fileupload/bootstrap-fileupload.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ asset('css/lib/bootstrap-datepicker/css/datepicker.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ asset('css/lib/bootstrap-daterangepicker/daterangepicker.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ asset('css/lib/bootstrap-timepicker/compiled/timepicker.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ asset('css/lib/bootstrap-datetimepicker/datertimepicker.css') }}" />
  <!-- Custom styles for this template -->
  <link href="{{ asset('css/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('css/css/style-responsive.css') }}" rel="stylesheet">

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  @yield('content')
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="{{ asset('css/lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('css/lib/bootstrap/js/bootstrap.min.js') }}"></script>
  <script class="include" type="text/javascript" src="{{ asset('css/lib/jquery.dcjqaccordion.2.7.js') }}"></script>
  <script src="{{ asset('css/lib/jquery.scrollTo.min.js') }}"></script>
  <script src="{{ asset('css/lib/jquery.nicescroll.js') }}" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="{{ asset('css/lib/common-scripts.js') }}"></script>
  <!--script for this page-->
  <script src="{{ asset('css/lib/jquery-ui-1.9.2.custom.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('css/lib/bootstrap-fileupload/bootstrap-fileupload.js') }}"></script>
  <script type="text/javascript" src="{{ asset('css/lib/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
  <script type="text/javascript" src="{{ asset('css/lib/bootstrap-daterangepicker/date.js') }}"></script>
  <script type="text/javascript" src="{{ asset('css/lib/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
  <script type="text/javascript" src="{{ asset('css/lib/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js') }}"></script>
  <script type="text/javascript" src="{{ asset('css/lib/bootstrap-daterangepicker/moment.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('css/lib/bootstrap-timepicker/js/bootstrap-timepicker.js') }}"></script>
  <script src="{{ asset('css/lib/advanced-form-components.js') }}"></script>


</body>
</html>