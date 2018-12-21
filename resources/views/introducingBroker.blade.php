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
@include('includes.slider')
<div class="container-fluid">
   <div class="container">
    <div class="row">
        <div class="contact_heding comparison text-center"> <h1>Introducing Brokers</h1>
            <p style="text-align:center;"> An “Introducing Broker” is an agent (corporation or individual) that establishes direct relationships with clients while introducing their business and delegating their accounts administrative work to the licensed & regulated Thetradefx.com which will be holding clients funds and will be responsible of their trades execution while the “Introducing Broker” focuses on growing his business.
                Thetradefx.com works closely with its “Introducing Broker” partners to provide them with superior incentives and unparalleled success opportunities. The company’s “Introducing Broker” partnership program offers full support to corporations, individuals and traders of all experience levels in developing their own trading business.
                .</p>

            <h3>START TRADING</h3></br>
            <p style="text-align:center;">
                A low barrier to entry combined with a highly competitive volume based rebate structure makes company name ideal for introducers of all size.
            <h2>Key features of our Introducing Broker program</h2>
            </p>
            <p style="text-align:left-side;">
                •	An attractive rebate program <br>
                •	Regulated Broker <br>
                •	Personal IB account managers <br>
                •	Simple client onboarding <br>
                •	MetaTrader  5, Mobile Trading Platforms <br>
                •	Commissions paid into a trading account in real time <br>
                •	Advanced cookie tracking and web reporting
            </p>

            <p><a class="red_button" href="" target="_blank">CREATE BROKER ACCOUNT</a>
            </p>

        </div>
    </div>
   </div>
    @include('includes.footer')
</div>
</body>
</html>
