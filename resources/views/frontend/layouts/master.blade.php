<!DOCTYPE html>
<html lang="{{ $composer_locale }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=vietnamese"
          rel="stylesheet">
    <!-- Style -->
     <!-- Favicons -->
      <link href="/assets/img/favicon.png" rel="icon">
      <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap CSS File -->
    <link href="/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/assets/plugins/animate-css/animate.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="/assets/css/style.css" rel="stylesheet">

    @yield('style')
   
</head>
<body>

@include('frontend.layouts.partials.header')

<main @section('main_extend') class="main" @show>
    @yield('content')
</main>


@include('frontend.layouts.partials.footer')

@stack('content_footer')

@yield('script')
  <!-- JavaScript Libraries -->


  <script src="/assets/plugins/jquery/jquery.min.js"></script>
  
  <script src="/assets/plugins/easing/easing.min.js"></script>
  <script src="/assets/plugins/wow/wow.min.js"></script>



  <script src="/assets/plugins/waypoints/waypoints.min.js"></script>
  <script src="/assets/plugins/superfish/superfish.min.js"></script>
  
  <script src="/assets/plugins/counterup/counterup.min.js"></script>
  <script src="/assets/plugins/superfish/hoverIntent.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="/assets/js/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->

  <script src="/assets/js/main.js"></script>

</body>
</html>