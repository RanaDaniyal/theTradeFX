<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{--<link href="images/fav.png" rel="icon" type="images/fav.png" />--}}
    <link href="{{asset('images/fav.png')}}" rel="icon" type="images/fav.png" />

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/newNavbar.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/custom_css/bootsnav.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom_css/newNavbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('stylesheet')
</head>
<body>
    <div id="app">
        <div class="container-fluid bg-secondary">
            <div class="row">
                @include('includes.NavbarNew')
            </div>
        </div>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @include('includes.footer')
</body>
    @yield('scripts')
</html>
