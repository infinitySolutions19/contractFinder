<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    
    <meta charset="utf-8">

    <link rel="apple-touch-icon" sizes="180x180" href="src/images/logo-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="src/images/logo-icon.png">
  <link rel="icon" type="image/png" sizes="16x16" href="src/images/logo-icon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    {{-- include all css files and meta tags --}}
    @yield('header')
    <!-- Scripts -->
  </head>
  <body>
     @include('includes-admin.topbar')
      {{-- side bar navgation --}}
      @yield('sidebar')
      <!-- Content Wrapper -->
        @include('includes-admin.alerts')
       @yield('content')
      @yield('footer')
 

  </body>
</html>
