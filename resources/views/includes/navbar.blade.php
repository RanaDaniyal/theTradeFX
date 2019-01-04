<div class=" container-fluid navbar navbar-expand-md navbar-dark bg-dark navbar-toggle" role="navigation">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'TheTradeFX') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

                <li>
                    <ul class="collapse navbar-collapse navbar-nav mr-auto" id="navbar-menu">
                        <ul class="main_nav ml-auto">
                            <li>
                                <a href="#Trading Platform">Trading Platform</a>
                                <div class="submenu">
                                    <ul>
                                        <li><b>PC and Phone</b></li>
                                        <li><a href="{{route('mt5_pc')}}">MT5 for PC</a></li>
                                        <li><a href="{{route('mt5_mob')}}">MT5 for Mobile</a></li>
                                    </ul>
                                    <ul>
                                        <li><b>&nbsp;</b></li> </br>
                                        <li><b>&nbsp;</b></li>
                                    </ul>
                                    <div class="login_buttomn">
                                        <a target="_blank" href="{{route('live_account')}}">Open Live Account</a></br>
                                        <a target="_blank" href="{{ route('register') }}">Open Demo Account</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#services">Account Types</a>
                                <div class="submenu">
                                    <ul>
                                        <li><b>Trading Accounts</b></li>
                                        <li><a href="{{route('micro_acc')}}">Micro Account</a></li>
                                        <li><a href="{{route('std_acc')}}">Standard Account</a></li>
                                        <li><a href="{{route('vip_acc')}}">VIP Account</a></li>
                                    </ul>
                                    <ul>

                                        <li><b>&nbsp;</b></li> </br>
                                        <li><b>&nbsp;</b></li>
                                    </ul>
                                    <div class="login_buttomn">
                                        <a target="_blank" href="{{route('live_account')}}">Open Live Account</a>
                                        <a target="_blank" href="{{ route('register') }}">Open Demo Account</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#portfolio">Partner</a>
                                <div class="submenu">

                                    <ul>
                                        <li><b>Partner Types</b></li>
                                        <li><a href="{{route('intro_brok')}}">Introducing Brokers</a></li>
                                        <li><a href="{{route('affiliate_prog')}}">Affiliate</a></li>
                                    </ul>
                                    <ul>
                                        <li><b>&nbsp;</b></li> </br>
                                        <li><b>&nbsp;</b></li>
                                    </ul>

                                    <div class="login_buttomn">
                                        <a target="_blank" href="{{route('live_account')}}">Open Live Account</a>
                                        <a target="_blank" href="{{ route('register') }}">Open Demo Account</a>
                                    </div>

                                </div>
                            </li>
                            <li>
                                <a href="#contact_form">Payment Method</a>
                                <div class="submenu">
                                    <ul>
                                        <li><b>Payment Services</b></li>
                                        <li><a href="{{route('paymentMethod')}}">Bit Coin</a></li>
                                        <li><a href="{{route('paymentMethod')}}">Skrill</a></li>
                                        <li><a href="{{route('paymentMethod')}}">Neteller</a></li>
                                        <li><a href="{{route('paymentMethod')}}">Wire Transfer</a></li>
                                    </ul>
                                    <ul>
                                        <li><b>&nbsp;</b></li>
                                        <li><a href="{{route('paymentMethod')}}">Master Card</a></li>
                                        <li><a href="{{route('paymentMethod')}}">VISA</a></li>
                                        <li><a href="{{route('paymentMethod')}}">American Express</a></li>
                                        <li><a href="{{route('paymentMethod')}}">Perfect Money</a></li>
                                    </ul>
                                    <div class="login_buttomn">
                                        <a target="_blank" href="{{route('live_account')}}">Open Live Account</a>
                                        <a target="_blank" href="{{ route('register') }}">Open Demo Account</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </ul>
                </li>
            </ul>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto" >
                <!-- Authentication Links -->
                @guest
                <li class="nav-item" style="color: #FFFFFF; border: solid 2px; margin-right: 10px">
                    {{--<a class="nav-link" href="{{ route('login') }}" style="color: #FFFFFF">{{ __('Login') }}</a>--}}
                    <a class="nav-link" href="{{ route('login') }}" style="color: #FFFFFF">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item" style="color: #FFFFFF; border: solid 2px; margin-right: 10px">
                        <a class="nav-link" href="{{ route('register') }}" style="color: #FFFFFF">{{ __('Create A Demo Account') }}</a>
                    </li>
                @endif
                @if (Route::has('register') || Route::has('register'))
                    <li class="nav-item" style="color: #FFFFFF; border: solid 2px;">
                        <a class="nav-link" href="{{ route('live_account') }}" style="color: #FFFFFF">{{ __('Create A Live Account') }}</a>
                    </li>
                @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>

                    </li>
                    <li class="nav-item dropdown">
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('home') }}">
                                {{ __('Dashboard') }}
                            </a>
                        </div>
                    </li>
                    @endguest
            </ul>
        </div>
    </div>
</div>
