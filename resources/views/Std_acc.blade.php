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
            <div class="serv_box">
                <div class="container">
                    <div class="contact_heding comparison text-center"> <h1 >Account Types</h1>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="servicess_box"><b><b> </b></b>

                                <div class="content_serv">

                                    <h3 style="text-align:center;"><b><b>Micro Account</b></b></h3></br>
                                    <ul>
                                        •	Minimum deposit  100$ </br>
                                        •	leverage 1:500 <br>
                                        •	Zero commission <br>
                                        •	EA Allowed  Yes <br>
                                        •	Swap free Yes* <br>

                                    </ul>
                                </div>
                                <b><b> <a href="{{ route('LiveAccountCreate') }}">Create Live Account</a></b></b></div>
                        </div>

                        <div class="col-md-4">
                            <div class="servicess_box"><b><b> </b></b>

                                <div class="content_serv">

                                    <h3 style="text-align:center;"><b><b>Standard Account</b></b></h3></br>
                                    <ul>
                                        •	Minimum Deposit 1000 </br>
                                        •	leverage 1:500 <br>
                                        •	Zero commission <br>
                                        •	EA Allowed  Yes <br>
                                        •	Swap free Yes* <br>
                                    </ul>
                                </div>
                                <b><b> <a href="{{ route('LiveAccountCreate') }}">Create Live Account</a></b></b></div>
                        </div>

                        <div class="col-md-4">
                            <div class="servicess_box"><b><b> </b></b>

                                <div class="content_serv">

                                    <h3 style="text-align:center;"><b><b>VIP Account</b></b></h3></br>
                                    <ul>
                                        •	Vip k lian Minimum Deposit 20000 </br>
                                        •	leverage 1:500 <br>
                                        •	Zero commission <br>
                                        •	EA Allowed  Yes <br>
                                        •	Swap free Yes* <br>
                                    </ul>
                                </div>
                                <b><b> <a href="{{ route('LiveAccountCreate') }}">Create Live Account</a></b></b></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('includes.footer')
</div>
</body>
</html>

