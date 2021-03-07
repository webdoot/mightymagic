<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>{{ config('app.name', 'Domain') }}-@yield('title')</title>

  <link rel="icon" href="{{ asset('img/fav-icon.png') }}" type="image/x-icon" />

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
  <link href="{{ asset('vendors/magnify-popup/magnific-popup.css') }}" rel="stylesheet">
  
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  @stack('head')

</head>
<body>
  
  @include('template.web-inc.header')

  @yield('content')

  @include('template.web-inc.footer')  

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="{{ asset('js/popper.min.js') }}"></script>
  <script src="js/bootstrap.min.js') }}"></script>
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
  <script src="{{ asset('js/smoothscroll.js') }}"></script>

  @stack('footer')

  <script src="{{ asset('js/theme.js') }}"></script> 

</body>
</html>
