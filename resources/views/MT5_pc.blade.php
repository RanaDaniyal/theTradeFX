<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom_css/bootsnav.css') }}" rel="stylesheet">
</head>
<body>
@include('includes.navbar')
<div class="container-fluid">

    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4 text-danger">DESKTOP TRADER</h1>
            <p class="lead">MetaTrader 5 is the all-in-one platform for trading forex, stocks, indices, bonds,
                cryptocurrencies and commodities. Company name True ECN connectivity makes it the most powerful
                platform for active traders.The new platform is an updated and improved version of its
                predecessor which has long been the industry standard for traders around the world.
                Company name is proud to present the next generation MetaTrader 5 platform, designed to offer
                everything you need to trade the markets. MetaTrader 5’s advanced charting technology coupled
                with sophisticated order management tools help you to monitor and control your positions quickly
                and efficiently. It is a powerful platform packed with brand new features aimed at improving your
                trading experience. It is available on both of the Company name account types: True ECN and Standard.
            </p>
            <hr class="my-4">
            <h3>Thetradefx MT5 Desktop  </h3>
            <ul>
                <li>Low spreads from 0.6 pips</li>
                <li>Market Execution</li>
                <li>Buy Stop Limit and Sell Stop Limit orders</li>
                <li>Market depth information</li>
                <li>Tick chart trading</li>
                <li>Integrated Development Environment for EAs</li>
            </ul>
            <a class="btn btn-danger" role="button"  href="https://download.mql5.com/cdn/web/alaska.capitals.ltd/mt5/alaskacapitals5setup.exe" style="margin-top: 20px">Download TheTradeFX MT5 Application </a>
            <p class="lead">
            </p>
        </div>
    </div>
</div>
@include('includes.footer')
{{--</body>--}}
{{--</html>--}}
