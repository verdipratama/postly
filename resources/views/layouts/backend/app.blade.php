<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Admin Dashboard</title>
  <link rel="shortcut icon" type="image/x-icon" href="">
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('backend/assets/css/font.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/assets/css/fontawesome.min.css') }}">
  @stack('css')
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/assets/css/components.css') }}">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      @include('layouts.backend.partials.header')

      @include('layouts.backend.partials.sidebar')

      <!-- Main Content -->
      @yield('content')

      @include('layouts.backend.partials.footer')
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="{{ asset('backend/assets/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('backend/assets/js/popper.min.js') }}"></script>
  <script src="{{ asset('backend/assets/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('backend/assets/js/jquery.nicescroll.min.js') }}"></script>
  @stack('js')
  <script src="{{ asset('backend/assets/js/scripts.js') }}"></script>
</body>

</html>
