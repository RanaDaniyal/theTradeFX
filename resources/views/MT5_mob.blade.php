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
            <h1 class="display-4 text-danger">MOBILE TRADER</h1>
            <p class="lead">Never miss an opportunity! Stay connected to the market at all times with the MetaTrader app for Android.
                The Company name MetaTrader P application gives you access to our market leading spreads and unrivalled
                execution speeds directly on your Android-based mobile. It features fast one click trading from multiple
                screens and customisable layouts. With full access to historical data and advanced charting facilities,
                you can manage your account, trade our full list of products, and use over 30 technical indicators for
                market analysis.
            </p>
            <hr class="my-4">
            <h3>Trade Forex on the go with your Phone device! Features
            </h3>
            <ul>
                <li>Real-time forex and CFD quotes</li>
                <li>Full set of trade orders, including pending orders</li>
                <li>Trade directly from the chart</li>
                <li>Support of all types of execution modes</li>
                <li>View your complete trading history</li>
                <li>Real-time interactive charts with zoom and scroll</li>
                <li>30+ of the most popular technical indicators</li>
                <li>Multiple timeframes to analyze price action and patterns</li>
                <li>3 chart types: Bars, Japanese Candlesticks, Line</li>
                <li>Adjustable settings of technical indicators</li>
            </ul>
            <h3>Benifits
            </h3>
            <ul>
                <li>User friendly interface</li>
                <li>Trade levels and volumes on the chart</li>
                <li>Offline mode (symbol prices and charts)</li>
                <li>Free and easily downloadable directly from the Android Play Store</li>
            </ul>
            <div style="display: inline-block">
                <a class="btn btn-outline-primary" role="button"  href="https://download.mql5.com/cdn/mobile/mt5/ios?server=AlaskaCapitals-Demo" style="margin-top: 20px">Download TheTradeFX MT5 For I-Phone </a>
                <a class="btn btn-outline-success" role="button"  href="https://download.mql5.com/cdn/mobile/mt5/android?server=AlaskaCapitals-Demo"style="margin-top: 20px">Download TheTradeFX MT5 For Android </a>
            </div>

            <p class="lead">
            </p>
        </div>
    </div>
</div>
@include('includes.footer')
{{--</body>--}}
{{--</html>--}}
