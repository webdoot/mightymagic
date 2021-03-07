<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>{{ config('app.name', 'Domain') }}-@yield('title')</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('admin/css/fontawesome-free/css/all.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('admin/css/OverlayScrollbars.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('admin/css/adminlte.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  @stack('head')

</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  
  @include('template.admin-inc.top-navbar')

  @include('template.admin-inc.side-navbar')

  @yield('content')

  @yield('footer')  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  @include('template.admin-inc.footer')
  
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ asset('admin/js/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('admin/js/bootstrap.bundle.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('admin/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admin/js/adminlte.js') }}"></script>

  @stack('footer')

</body>
</html>
