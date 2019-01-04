<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'TheTradeFx') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/newNavbar.js') }}" defer></script>

    <!-- Fonts -->
    <link href="{{asset('images/fav.png')}}" rel="icon" type="images/fav.png" />
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{--<link href="{{ asset('css/custom_css/bootsnav.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('css/custom_css/newNavbar.css') }}" rel="stylesheet">
</head>
<body>
{{--    @include('includes.navbar')--}}
<div class="container-fluid">
    <div class="row">
        @include('includes.NavbarNew')
    </div>
    <div class="row">
        @include('includes.slider')
    </div>
</div>
        <div class="container-fluid">
            <div class="row bg-danger" style="text-align: center;padding: 10px 0 10px 0">
                <div class="col-md-3">
                    <div>
                        <img border="0" alt="" src="{{url('images/icon_images/icon5-white.png')}}" />
                    </div>
                    <div>
                        <span style="color:black;">Support</span> <span style="color:black;">24/5</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div>
                        <img border="0" alt="" src="{{url('images/icon_images/icon1-white.png')}}" />
                    </div>
                    <div>
                        <span style="color:black;">Pure STP</span> <span style="color:black;">ECN</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div>
                        <img border="0" alt="" src="{{url('images/icon_images/icon4-white.png')}}" />
                    </div>
                    <div>
                        <span style="color:black;">Variety of </span> <span style="color:black;">Platforms</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div>
                        <img border="0" alt="" src="{{url('images/icon_images/icon3-white.png')}}" />
                    </div>
                    <div>
                        <span class="color-light">Forex, Gold </span> <span>&amp; Silver</span>
                    </div>
                </div>
            </div>
        </div>

        {{--2nd Div Start--}}
        <div class="container-fluid" style="margin-top: 10px">
            <div class="row">
                <div class="col-md-8">
                    <h1 style="color: #d01919">Forex Platforms</h1></br>
                    <p>TheTradeFX pioneered the offering of an MT5 platform with trading execution quality in mind. Trade on an MT5 with No Requotes, No Rejections with flexible leverage ranging from 1:1 – to 1000:1.
                    </p>
                    </br>
                    <h3>FX TRADING MT5 Features:</h3></br>
                    <ul>
                        <li><span></span>&nbsp&nbsp&nbsp&nbspOver 100 Instruments Including Forex, CFDs and Futures</li>
                        <li><span></span>&nbsp&nbsp&nbsp&nbspSpreads as low as 0 pips</li>
                        <li><span></span>&nbsp&nbsp&nbsp&nbspFull EA (Expert Advisor) Functionality</li>
                        <li><span></span>&nbsp&nbsp&nbsp&nbsp1 Click Trading and Built in News Functionality</li>
                        <li><span></span>&nbsp&nbsp&nbsp&nbspTechnical Analysis Tools with 50 indicators and charting tools</li>
                        <li><span></span>&nbsp&nbsp&nbsp&nbsp3 Chart Types</li>
                        <li><span></span>&nbsp&nbsp&nbsp&nbspMicro Lot Accounts (Optional)</li>
                        <li><span></span>&nbsp&nbsp&nbsp&nbspHedging allowed</li>
                        <li><span></span>&nbsp&nbsp&nbsp&nbspSwap-free trading accounts available*</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <img src="{{url('images/forex-platform_screen.png')}}" style="width: 100%;height: 100%" alt="Forex Platform Screen"/>
                </div>
            </div>

        </div>
        {{--2nd Div end--}}
        {{--3rd Div--}}
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="accordion bmd-collapse-inline" id="accordionExample">
                        {{--First Cards Start--}}
                        <div class="card">
                            <div class="card-header bg-light border-top " id="headingOne">
                                <button class="btn btn-block  btn-outline-danger collapsed" style="font-size: 20px" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                     Why Choose FX Trading
                                </button>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body ">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h1 style="color: red">Why Choose TheTradeFX For Currenct Trading?</h1>
                                                <h5>There are plenty of forex brokers out there in the market and we have differentiated ourselves from rest of the herd by focusing on providing top notch customer service to everyone including advance traders & beginner forex traders. FX Trading consists of specialized team that have immense experience in currency trading and other commodities such as gold, oil, bonds and so on.
                                                </h5>
                                                <ul style="list-style-type: circle;">
                                                    <li><h5>We Know what you want</h5></li>
                                                    <li><h5>Better Technology</h5></li>
                                                    <li><h5>Best Customer service</h5></li>
                                                    <li><h5>Best Forex Brokers</h5></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4">
                                                <img src="{{url('images/home_img.png')}}" style="width: 100%;height: 100%" alt="Why Choose The Trade FX"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--First Card End--}}
                        {{--2nd Card Start--}}
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-block  btn-outline-danger collapsed" style="font-size: 20px" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                       What is Forex Market
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h1 style="color: red">What is forex Market All About?</h1>
                                                <h5>The roots of forex that is foreign exchange market can be traced backed to the end of 1970's after many countries decided to unpeg their currency against dollar and gold. Forex or FX or Forex market became a decentralized hub for currency trading. Currencies are bought, sold and exchanged at the live forex rate. FX is the largest trading market in terms of volumes traded. More than hundred thousand of forex beginners and traders have chosen FX  as their forex service providers and open their forex trading accounts.
                                                </h5>
                                            </div>
                                            <div class="col-md-4">
                                                <img src="{{url('images/forex_trading.jpg')}}" style="width: 100%;height: 100%" alt="Why Choose The Trade FX"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--2nd Card End--}}
                        {{--3rd Card Start--}}
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-block  btn-outline-danger collapsed" style="font-size: 20px" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Who Are Forex Broker
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h1 style="color: red">Whow are Forex Brokers</h1>
                                                <h5>Forex Broker or Traders, tries to predict the direction of specific currencies in which prices of currencies may shift whether the price will go up or down, and traders decide if it is a right time to buy or sell the currency. Furthermore, the basic rule is to buy a currency at a lower price and then sell it a higher price to gain profits sounds easy but it is not a piece of cake. It is high risk investment and there are many factors involved. All the factors has to be evaluated perfectly before reaching a decision. One can make profit either on currency deprecation or appreciation. One of the best features of Forex is that a trader can work from anywhere in the world. We are one of the best forex brokers in the market that will guide you in the whole process.
                                                </h5>
                                            </div>
                                            <div class="col-md-4">
                                                <img src="{{url('images/forex_brokers.jpg')}}" style="width: 100%;height: 100%" alt="Why Choose The Trade FX"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--3rd Card End--}}
                        {{--4th Card Start--}}
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h5 class="mb-0">
                                    <button class="btn btn-block  btn-outline-danger collapsed" style="font-size: 20px" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                       Forex Demo Account.
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h1 style="color: red">Learn Trading Risk Free With A Forex Demo Account
                                                </h1>
                                                <h5>FX offers a forex demo account to all the newbie traders who have developed a keen interest in trading currency. These demo accounts has been proven to be an excellent learning tool for beginners. Forex for beginners can be very challenging as there are many factors involved and it can also overwhelm the new trader moreover, beginners should know all the strategies before working in the live forex market. With a demo forex trading accounts you can begin your trade without putting your money at risk. We are one of the best forex brokers
                                                </h5>
                                                <ul style="list-style-type: circle;">
                                                    <li><h5>Trade virtual money</h5></li>
                                                    <li><h5>Get Live Forex Rates that is buy and sell prices</h5></li>
                                                    <li><h5>Trade online at any time, 5 days a week</h5></li>
                                                    <li><h5> Practice making trades</h5></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4">
                                                <img src="{{url('images/demo.jpg')}}" style="width: 100%;height: 100%" alt="Why Choose The Trade FX"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--4th Card End--}}
                        {{--5th Card Start--}}
                        <div class="card">
                            <div class="card-header" id="headingFive">
                                <h5 class="mb-0">
                                    <button class="btn btn-block  btn-outline-danger collapsed" style="font-size: 20px" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Forex For Beginers
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h1 style="color: red">Learn Trading Risk Free With A Forex Demo Account
                                                </h1>
                                                <h5>One of the best things about forex is that investors don't need to have a lot of capital to get started. They can begin their trade with few couple of dollars and predict the direction of the currencies. Furthermore, traders can trade at their own term which means that they can trade at any time or from anywhere in the world.
                                                    Forex market is open 5 days a week and traders can get their forex trading accounts and begin the trades. Moreover, there are many opportunities in the market and around 4 trillion dollars are traded each day. However, forex for beginners need to have proper strategies since if the price of one currency is depreciating there is another currency whose value will be increasing so there is always a chance to make profits.
                                                </h5>
                                            </div>
                                            <div class="col-md-4">
                                                <img src="{{url('images/beginners.jpg')}}" style="width: 100%;height: 100%" alt="Why Choose The Trade FX"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--5th Card End--}}
                    </div>
                </div>
            </div>
        </div>
        {{--3rd Div end--}}

        {{--last Div--}}
        <div class="container" style="margin-top: 20px;")>
            <div class="card-deck  mb-3">
                <div class="card mb-4  shadow-sm">
                    <div class="card-header text-white bg-danger text-center">
                        <h4 class="my-0 font-weight-normal">Account Types</h4>
                    </div>
                    <div class="card-body">
                        {{--<h1 class="card-title pricing-card-title">$0 <small class="text-muted">/ mo</small></h1>--}}
                        <ul>
                            <li>
                                <strong style="color: red;">
                                    Micro Account
                                </strong>
                                <ul>
                                    <li>
                                        Minimum Deposit $100
                                    </li>
                                    <li>
                                        1:500 Leverage
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <strong STYLE="color: red">
                                    Standard Account
                                </strong>
                                <ul>
                                    <li>
                                        Minimum Deposit $1000

                                    </li>
                                    <li>
                                        1:500 Leverage
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <strong STYLE="color: red">
                                    VIP Account
                                </strong>
                                <ul>
                                    <li>
                                        Minimum deposit $20,000

                                    </li>
                                    <li>
                                        Flexible Leverage from 1:1 up to 1:1000
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <a role="button" href="{{ route('live_account') }}" class="btn btn-lg btn-block btn-outline-dark">Create Live Account</a>
                    </div>
                </div>
                <div class="card mb-4 shadow-sm">
                    <div class="card-header text-white bg-danger text-center">
                        <h4 class="my-0 font-weight-normal">Licenses & Security of funds</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">Features</h1>
                        <ul  class="list-unstyled mt-3 mb-4">
                            <li>Investor compensation fund</li>
                            <li>Negative balance protection</li>
                            <li>Risk management</li>
                        </ul>
                        <div style="padding-top: 93px">
                            <a role="button"  href="{{ route('live_account') }}" class="btn btn-lg btn-block btn-outline-dark" >Create a Live Account</a>
                        </div>
                    </div>
                    <div class="row">
                    </div>
                </div>
                <div class="card mb-4 shadow-sm">
                    <div class="card-header text-white bg-danger text-center">
                        <h4 class="my-0 font-weight-normal">Introducing Broker
                        </h4>
                    </div>
                    <div class="card-body">
                        {{--<h1 class="card-title pricing-card-title">$29 <small class="text-muted">/ mo</small></h1>--}}
                        <h1 class="card-title pricing-card-title">Features</h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>An attractive rebate program</li>
                            <li>Personal IB account managers</li>
                            <li>Simple client onboarding</li>
                            <li>MetaTrader 5 for Phone & PC</li>
                            <li>Commissions paid into a trading account in real time</li>
                            <li>Commission Everyday Payment</li>
                        </ul>
                        <a role="button"  href="{{ route('live_account') }}" class="btn btn-lg btn-block btn-outline-dark">Create Live Account</a>
                    </div>
                </div>
            </div>

        </div>
        {{--last Div End--}}
    @include('includes.footer')
</body>
</html>
