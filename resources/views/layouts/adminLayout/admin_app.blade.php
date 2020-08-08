<!DOCTYPE html>
<html dir="ltr" lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/backend/images/favicon.png')}}">
    <title>Admin - Login</title>
    <!-- Custom CSS -->
    <link href="{{asset('assets/backend/libs/flot/css/float-chart.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <!-- Custom CSS -->
    <link href="{{asset('assets/backend/css/style.min.css')}}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="{{asset('assets/backend/js/html5shiv.js')}}"></script>
    <script src="{{asset('assets/backend/js/respond.min.js')}}"></script>
    <![endif]-->
  </head>

  <body>
    <div class="preloader">
      <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
      </div>
    </div>

    <div id="main-wrapper">
      @include('layouts.adminLayout.partials._header')

      @include('layouts.adminLayout.partials._sidebar')

      @yield('content')

      @include('layouts.adminLayout.partials._footer')
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{asset('assets/backend/libs/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('assets/backend/libs/popper.js/dist/popper.min.js')}}"></script>
    <script src="{{asset('assets/backend/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/backend/libs/perfect-scrollbar/dist/js/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('assets/backend/extra-libs/sparkline/sparkline.js')}}"></script>
    <script src="{{asset('assets/backend/js/toastr.min.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('assets/backend/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('assets/backend/js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('assets/backend/js/custom.min.js')}}"></script>
    <!--This page JavaScript -->
    <!-- <script src="../../dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="{{asset('assets/backend/libs/flot/excanvas.js')}}"></script>
    <script src="{{asset('assets/backend/libs/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('assets/backend/libs/flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('assets/backend/libs/flot/jquery.flot.time.js')}}"></script>
    <script src="{{asset('assets/backend/libs/flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('assets/backend/libs/flot/jquery.flot.crosshair.js')}}"></script>
    <script src="{{asset('assets/backend/libs/flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{asset('assets/backend/js/pages/chart/chart-page-init.js')}}"></script>

    {!! Toastr::message() !!}
  </body>

</html>
