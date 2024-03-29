<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" href="{{ asset('image/fav-icon.png') }}" type="image/x-icon" />

  <title>{{ config('app.name', 'Domain') }}-@yield('title')</title>  

  @include('layouts.seo.meta')

  <!-- Icon css link -->
  <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
  <!-- Bootstrap -->
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  
  <!-- Rev slider css -->
  <link href="{{ asset('vendors/revolution/css/settings.css') }}" rel="stylesheet">
  <link href="{{ asset('vendors/revolution/css/layers.css') }}" rel="stylesheet">
  <link href="{{ asset('vendors/revolution/css/navigation.css') }}" rel="stylesheet">
  
  <!-- Extra plugin css -->
  <link href="{{ asset('vendors/owl-carousel/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendors/owl-carousel/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendors/magnify-popup/magnific-popup.css') }}" rel="stylesheet">
  <link href="{{ asset('vendors/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">
  
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  @stack('head')

  <style type="text/css">
    @font-face {
      font-family: vagrounde;
      src: url({{ asset('fonts/VAGRoundedBT.ttf')}});
      font-weight: 300;
    }

    /**   Top header */
    .header-top-border {
        /*border-bottom: 2px solid #A6D6FF;*/
        border-bottom: 2px solid #f2f2f2;
        padding: 8px 0;
    }

    .header-top-text p {
        color: #DEB5DC;
        font-size: 14px;
        margin-bottom: 0;
        font-weight: 400;
    }

    @media (max-width: 1260px){
       .header-top-text p {
            color: #fff;
        }
    }

    .header-top-text a {
      color: #113345 ;
    }

    .header-right {
        padding-top: 4px;
    }

    .header-info span:last-child {
        margin-right: 0;
    }

    .header-info span {
        color: #b1b1b1;
        font-size: 14px;
        font-weight: 400;
        margin-right: 28px;
    }
    /** ./Top Header  */
   
    #brand-logo {
      max-width: 120px;
    }

    .navbar-brand img {
      max-width: 95px;
      height: auto;
    }

    #brand-logo-1 {
      display: none;
    }

    .banner_area::before {
        top: -5px;
    }

    .main_menu_area .navbar 
    .navbar-nav li:hover a, 
    .main_menu_area .navbar 
    .navbar-nav li.active a {
        color: #E51A4B;
    }

    .main_menu_area 
    .navbar .navbar-nav 
    li.submenu .dropdown-menu {
      left: -106px;
      min-width: 310px;
    }

    .f_about_widget img {
      padding: 0px;
      margin-bottom: 25px;
    }

    .social-icon li {
      display: inline-block;
      width: 30px;
      margin: 25px 5px;
      background-color: white;
      text-align: center;
      border-radius: 4px;
    }  

    .footr_area {
      border-top: 6px solid rgba(204, 241, 255, 0.5);
    }  

    .footer_copyright h5{
      font-size: 14px;
      text-align: center;
    }

    .f_title h3 {
      font-size: 20px;
      color: #1D3F59;
      font-weight: 600;
    }

    .f_title {
      padding-bottom: 40px;
    }

    .banner_inner_text h2, 
    .banner_inner_text p, 
    .l_title h2 {
      font-family: vagrounde;
    }

    .banner_inner_text h2 {
      font-size: 64px;
      padding-top: 10px;
      padding-bottom: 10px;
    }

    .banner_inner_text p {
      font-size: 24px;
    }

    .l_title h2 {
      font-size: 38px;
    }

    /** Banner below line */
    .banner_inner_text::before {
      background: none;
    }
  </style>

</head>
<body>
  
  @include('layouts.web-inc.header')

  @yield('content')

  @include('layouts.web-inc.footer')  

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="{{ asset('js/popper.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <!-- Rev slider js -->
  <script src="{{ asset('vendors/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
  <script src="{{ asset('vendors/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
  <script src="{{ asset('vendors/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
  <script src="{{ asset('vendors/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
  <script src="{{ asset('vendors/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
  <script src="{{ asset('vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
  <script src="{{ asset('vendors/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
  <script src="{{ asset('vendors/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
  <!-- Extra plugin css -->
  <script src="{{ asset('vendors/counterup/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('vendors/counterup/jquery.counterup.min.js') }}"></script> 
  <script src="{{ asset('vendors/counterup/apear.js') }}"></script>
  <script src="{{ asset('vendors/counterup/countto.js') }}"></script>
  <script src="{{ asset('vendors/owl-carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('vendors/magnify-popup/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('vendors/sweetalert2/sweetalert2.min.js') }}"></script>
  <script src="{{ asset('js/smoothscroll.js') }}"></script>

  @stack('footer')

  <script src="{{ asset('js/theme.js') }}"></script> 

  <script type="text/javascript">
    @if (session('success'))
        Swal.fire('', '{{ session('success') }}', 'success' );
    @elseif (session('warning'))
        Swal.fire('', '{{ session('warning') }}', 'warning' );
    @elseif (session('error'))
        Swal.fire('', '{{ session('error') }}', 'error' );
    @elseif (session('info'))
        Swal.fire('', '{{ session('info') }}', 'info' );
    @endif 
  </script>

</body>
</html>
