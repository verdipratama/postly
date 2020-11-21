<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Postly - Laravel Crash Course</title>

  <!-- CSS here -->
  <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/fontawesome-all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/font.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/nprogress.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/default.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
</head>

<body>

  <!-- loading area start -->
  <div class="loading d-none">
    <div class="loader-effect"></div>
  </div>
  <!-- loading area end -->

  <!-- header area start -->
  @include('layouts.frontend.partials.header')
  <!-- header area end -->

  <!-- main area start -->
  <div id="pjax-container">
    @yield('content')
  </div>
  <!-- main area end -->

  <!-- footer area start -->
  @include('layouts.frontend.partials.footer')
  <!-- footer area end -->

  <!-- JS here -->
  <script src="{{ asset('frontend/js/vendor/jquery-3.5.1.js') }}"></script>
  <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
  <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('frontend/js/infinite-scroll.pkgd.min.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery.pjax.js') }}"></script>
  <script src="{{ asset('frontend/js/nprogress.js') }}"></script>
  <script src="{{ asset('frontend/js/main.js') }}"></script>
  <script src="{{ asset('frontend/js/custom-pjax.js') }}"></script>
  <script src="{{ asset('frontend/js/loadmore/loadmore.js') }}"></script>
  <script src="{{ asset('frontend/js/loadmore/videoloadmore.js') }}"></script>
  <script src="{{ asset('frontend/js/settings/settings.js') }}"></script>
  <script src="{{ asset('frontend/js/settings/customsettings.js') }}"></script>
  <script src="{{ asset('frontend/js/modal/modal.js') }}"></script>
  <script src="{{ asset('frontend/js/loadmore/userloadmore.js') }}"></script>

</body>

</html>
