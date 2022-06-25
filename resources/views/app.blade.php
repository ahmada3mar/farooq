<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/colors/blue.css') }}" type="text/css">
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />

    <!-- Scripts -->
    {{-- <script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery-migrate-3.0.0.min.js')}}"></script> --}}


    {{-- <script src="{{asset('assets/js/custom.js')}}" ></script> --}}
    <script src="{{ mix('/js/app.js') }}" defer></script>
    <script src="{{ mix('/js/manifest.js') }}" defer></script>
    <script src="{{ mix('/js/vendor.js') }}" defer></script>
    @if (isset($page))
        @inertiaHead
    @endif
</head>

<body>
    @if (env('APP_ENV') != 'production')
        <div class="fullwidth dev-header">You'r on devlopment mode | Staging &#128187; &#128295; &#128296; </div>
    @endif
    @if (isset($page))
        @inertia
    @endif

    @yield('purchase')
</body>

</html>
