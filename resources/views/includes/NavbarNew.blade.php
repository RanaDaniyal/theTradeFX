<nav class="container-fluid navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="#">The Trade Fx</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link text-white" href="{{route('index')}}">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Trading Platfoms
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <h3 class="text-uppercase text-danger">PC & Phones</h3>
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('mt5_pc')}}">MT5 For PC</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('mt5_mob')}}">MT5 For Mobile</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.col-md-4  -->
                            {{--<div class="col-md-4">--}}
                                {{--<ul class="nav flex-column">--}}
                                    {{--<li class="nav-item">--}}
                                        {{--<a class="nav-link active" href="#">Active</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="nav-item">--}}
                                        {{--<a class="nav-link" href="#">Link item</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="nav-item">--}}
                                        {{--<a class="nav-link" href="#">Link item</a>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                            <!-- /.col-md-4  -->
                            <div class="col-md-4">
                                {{--<a href="">--}}
                                    {{--<img src="https://dummyimage.com/200x100/ccc/000&text=image+link" alt="" class="img-fluid">--}}
                                {{--</a>--}}
                                {{--<p class="text-white">Short image call to action</p>--}}
                                <div>
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a target="_blank" class="btn btn-outline-danger" href="{{route('live_account')}}">Open Live Account</a></br>
                                        </li>
                                        <li class="nav-item">
                                            <a target="_blank" class="btn btn-outline-danger" href="{{ route('register') }}">Open Demo Account</a>
                                        </li>
                                    </ul>


                                </div>
                            </div>
                            <!-- /.col-md-4  -->
                        </div>
                    </div>
                    <!--  /.container  -->


                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Account Types
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <h3 class="text-uppercase text-danger">Trading Accounts</h3>
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('micro_acc')}}">Micro Account</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('std_acc')}}">Standard Account</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('vip_acc')}}">VIP Account</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.col-md-4  -->
                            {{--<div class="col-md-4">--}}
                                {{--<ul class="nav flex-column">--}}
                                    {{--<li class="nav-item">--}}
                                        {{--<a class="nav-link active" href="#">Active</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="nav-item">--}}
                                        {{--<a class="nav-link" href="#">Link item</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="nav-item">--}}
                                        {{--<a class="nav-link" href="#">Link item</a>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                            <!-- /.col-md-4  -->
                            <div class="col-md-4">
                                {{--<a href="">--}}
                                    {{--<img src="https://dummyimage.com/200x100/ccc/000&text=image+link" alt="" class="img-fluid">--}}
                                {{--</a>--}}
                                {{--<p class="text-white">Short image call to action</p>--}}
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a target="_blank" class="btn btn-outline-danger" href="{{route('live_account')}}">Open Live Account</a></br>
                                    </li>
                                    <li class="nav-item">
                                        <a target="_blank" class="btn btn-outline-danger" href="{{ route('register') }}">Open Demo Account</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.col-md-4  -->
                        </div>
                    </div>
                    <!--  /.container  -->
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Partner
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <h3 class="text-uppercase text-danger">Partners Type</h3>
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('intro_brok')}}">Introducing Broker</a>
                                    </li>
                                    {{--<li class="nav-item">--}}
                                        {{--<a class="nav-link" href="{{route('affiliate_prog')}}">Affiliate</a>--}}
                                    {{--</li>--}}
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a target="_blank" class="btn btn-outline-danger" href="{{route('live_account')}}">Open Live Account</a></br>
                                    </li>
                                    <li class="nav-item">
                                        <a target="_blank" class="btn btn-outline-danger" href="{{ route('register') }}">Open Demo Account</a>
                                    </li>
                                </ul>

                            </div>
                            <!-- /.col-md-4  -->
                        </div>
                    </div>
                    <!--  /.container  -->


                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Payment Method
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <h3 class="text-uppercase text-danger">Payment Services</h3>
                                <ul class="nav flex-column">
                                    <li><a class="nav-link" href="{{route('paymentMethod')}}">BitCoin</a></li>
                                    <li><a class="nav-link" href="{{route('paymentMethod')}}">Skrill</a></li>
                                    <li><a class="nav-link" href="{{route('paymentMethod')}}">Neteller</a></li>
                                    <li><a class="nav-link" href="{{route('paymentMethod')}}">Wire Transfer</a></li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <h3 class="text-uppercase text-danger">Payment Services</h3>
                                <ul class="nav flex-column">
                                    <li><a class="nav-link" href="{{route('paymentMethod')}}">Master Card</a></li>
                                    <li><a class="nav-link" href="{{route('paymentMethod')}}">VISA</a></li>
                                    <li><a class="nav-link" href="{{route('paymentMethod')}}">American Express</a></li>
                                    <li><a class="nav-link" href="{{route('paymentMethod')}}">Perfect Money</a></li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a target="_blank" class="btn btn-outline-danger" href="{{route('live_account')}}">Open Live Account</a></br>
                                    </li>
                                    <li class="nav-item">
                                        <a target="_blank" class="btn btn-outline-danger" href="{{ route('register') }}">Open Demo Account</a>
                                    </li>
                                </ul>

                            </div>
                            <!-- /.col-md-4  -->
                        </div>
                    </div>
                    <!--  /.container  -->
                </div>
            </li>
        </ul>
        {{--Right side of hte navbar--}}
        <ul class="navbar-nav ml-auto" >
            <!-- Authentication Links -->
            @guest
            <li class="nav-item">
                {{--<a class="nav-link" href="{{ route('login') }}" style="color: #FFFFFF">{{ __('Login') }}</a>--}}
                <a class="nav-link text-white btn btn-outline-primary" href="{{ route('login') }}" >{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link text-white btn btn-outline-danger" href="{{ route('register') }}" >{{ __('Create A Demo Account') }}</a>
                </li>
            @endif
            @if (Route::has('register') || Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link text-white btn btn-outline-success" href="{{ route('live_account') }}" >{{ __('Create A Live Account') }}</a>
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

</nav>