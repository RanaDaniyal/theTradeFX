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
        <div class="contact_heding comparison text-center"> <h1>affiliate Program</h1>
            <h3>A fusion of affiliate marketing tools & payment plans to boost your profits!</h3></br>
            <p style="text-align:center;">Get the marketing resources you need to promote company name successfully. The company name Affiliates Program is one of the most pro
                fitable financial affiliate programs worldwide and always empowers you with the best tools to meet your targets!</p>
        </div>
        </br>


        <p style="text-align:center;"><a class="red_button" href="" target="_blank">CREATE AFFILIATE ACCOUNT</a>
        </p>
    </div>

</div>
@include('includes.footer')
</body>
</html>
