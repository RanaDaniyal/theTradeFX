@extends('layouts.app')
@section('content')
    <img class="d-block w-100" src="{{url('images/slider_images/slider_img6.jpg')}}" style="margin-top: -28px">
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

                                        </ul>
                                    </div>
                                    <b><b> <a href="{{ route('live_account') }}">Create Live Account</a></b></b></div>
                            </div>

                            <div class="col-md-4">
                                <div class="servicess_box"><b><b> </b></b>

                                    <div class="content_serv">

                                        <h3 style="text-align:center;"><b><b>Standard Account</b></b></h3></br>
                                        <ul>
                                            •	Minimum Deposit 1000$ </br>
                                            •	leverage 1:500 <br>
                                            •	Zero commission <br>
                                            •	EA Allowed  Yes <br>
                                        </ul>
                                    </div>
                                    <b><b> <a href="{{ route('live_account') }}">Create Live Account</a></b></b></div>
                            </div>

                            <div class="col-md-4">
                                <div class="servicess_box"><b><b> </b></b>

                                    <div class="content_serv">

                                        <h3 style="text-align:center;"><b><b>VIP Account</b></b></h3></br>
                                        <ul>
                                            •	Vip Minimum Deposit 20,000$ </br>
                                            •	leverage 1:500 <br>
                                            •	Zero commission <br>
                                            •	EA Allowed  Yes <br>
                                        </ul>
                                    </div>
                                    <b><b> <a href="{{ route('live_account') }}">Create Live Account</a></b></b></div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection