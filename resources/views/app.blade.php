<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/colors/blue.css')}}" type="text/css">
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />

    <!-- Scripts -->
    <script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery-migrate-3.0.0.min.js')}}"></script>

    <script src="{{asset('assets/js/mmenu.min.js')}}" defer ></script> {{-- mobile menu --}}
    <script src="{{asset('assets/js/tippy.all.min.js')}}" defer ></script> {{-- Fast load--}}
    <script src="{{asset('assets/js/simplebar.min.js')}}" defer ></script> {{-- scrollbars  --}}
    <script src="{{asset('assets/js/bootstrap-slider.min.js')}}" defer ></script>
    <script src="{{asset('assets/js/bootstrap-select.min.js')}}" defer ></script>
    <script src="{{asset('assets/js/snackbar.js')}}" defer ></script> {{-- NOTIFICATIONS  --}}
    <script src="{{asset('assets/js/clipboard.min.js')}}" defer ></script>
    <script src="{{asset('assets/js/counterup.min.js')}}" defer ></script>
    <script src="{{asset('assets/js/magnific-popup.min.js')}}" defer ></script>
    <script src="{{asset('assets/js/slick.min.js')}}" defer ></script> {{-- carousel  --}}
    <script src="{{asset('assets/js/custom.js')}}" ></script>
    <script src="{{ mix('/js/app.js') }}" defer></script>
    <script src="{{ mix('/js/manifest.js') }}" defer></script>
    <script src="{{ mix('/js/vendor.js') }}" defer></script>
    @inertiaHead
  </head>
  <body>
    @inertia
  </body>
</html>
