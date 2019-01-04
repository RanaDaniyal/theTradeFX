@extends('layouts.app')

@section('content')
<img class="d-block w-100" src="{{url('images/slider_images/slider_img3.jpg')}}" style="margin-top: -28px">
<div class="container-fluid">

    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4 text-danger">DESKTOP TRADER</h1>
            <p class="lead">MetaTrader 5 is the all-in-one platform for trading forex, stocks, indices, bonds,
                cryptocurrencies and commodities. <strong class="text-danger">TheTradeFX</strong> True ECN connectivity makes it the most powerful platform
                for active traders.The new platform is an updated and improved version of its predecessor which has
                long been the industry standard for traders around the world. <strong class="text-danger">TheTradeFX</strong> is proud to present the next
                generation MetaTrader 5 platform, designed to offer everything you need to trade the markets.
                MetaTrader 5’s advanced charting technology coupled with sophisticated order management tools help you
                to monitor and control your positions quickly and efficiently. It is a powerful platform packed with
                brand new features aimed at improving your trading experience. It is available on both of the <strong class="text-danger">TheTradeFX</strong>
                account types: True ECN and Standard.
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
            <a class="btn btn-danger" role="button"  href="https://download.mql5.com/cdn/web/alaska.capitals.ltd/mt5/alaskacapitals5setup.exe" style="margin-top: 20px">Download TheTradeFX MT5 </a>
            <p class="lead">
            </p>
        </div>
    </div>
</div>
@endsection
