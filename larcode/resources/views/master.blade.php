<!DOCTYPE html>

<html>

<head>

  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>{{ config('app.name') }} @yield('pagetitle') </title>

  <!-- Tell the browser to be responsive to screen width -->

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <!-- Bootstrap 3.3.6 -->

  <link rel="stylesheet" href="{{ asset('theme/bootstrap/css/bootstrap.min.css') }}">

  <!-- Font Awesome -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Ionicons -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

  <!-- Theme style -->

  <link rel="stylesheet" href="{{ asset('theme/dist/css/AdminLTE.min.css') }}">

  <!-- AdminLTE Skins. Choose a skin from the css/skins

       folder instead of downloading all of them to reduce the load. -->

<link rel="stylesheet" href="{{ asset('theme/dist/css/skins/_all-skins.min.css') }}">



@yield('styles')



  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

  <!--[if lt IE 9]>

  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>

  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

  <![endif]-->

</head>

<body class="hold-transition skin-blue-light sidebar-mini">

<!-- Site wrapper -->

<div class="wrapper">



  <header class="main-header">

    <!-- Logo -->

    <a href="{{ route('dashboard') }}" class="logo"> 

      <!-- mini logo for sidebar mini 50x50 pixels -->

      <span class="logo-mini"><b>A</b><span style="color: yellow; ">CS</span></span>

      <!-- logo for regular state and mobile devices -->

      <span class="logo-lg"><span style="color: #ffffff; font-weight: bold;">Abby</span><span style="color: yellow; ">CLICKS</span></span>

    </a>



    @include('partials.top-navs')



  </header>



  <!-- =============================================== -->



  <!-- Left side column. contains the sidebar -->

  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->

    <section class="sidebar">

      

     @include('partials.menu')





    </section>

    <!-- /.sidebar -->

  </aside>



  <!-- =============================================== -->



  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">


    <!-- Main content -->

    <section class="content">



      @yield('content')



    </section>

    <!-- /.content -->

  </div>

  <!-- /.content-wrapper -->



  <footer class="main-footer">

    <div class="pull-right hidden-xs">

      <b>Version</b> 1.0.0

    </div>

    <strong>Copyright &copy; {{date('Y')}} <a href="http://abbyclicks.com">AbbyCLICKS</a>.</strong> All rights

    reserved.

  </footer>



  



</div>

<!-- ./wrapper -->



<!-- jQuery 2.2.3 -->

<script src="{{ asset('theme/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>

<!-- Bootstrap 3.3.6 -->

<script src="{{ asset('theme/bootstrap/js/bootstrap.min.js') }}"></script>

<!-- SlimScroll -->

<script src="{{ asset('theme/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>

<!-- FastClick -->

<script src="{{ asset('theme/plugins/fastclick/fastclick.js') }}"></script>

<!-- AdminLTE App -->

<script src="{{ asset('theme/dist/js/app.min.js') }}"></script>



@yield('scripts')



</body>

</html>

