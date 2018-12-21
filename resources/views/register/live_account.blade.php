@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-danger" style="text-align: center">
                        <h2 style="color: #FFFFFF">Create Your Live Account</h2>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{route('createLiveAccount')}}">
                            @csrf
                            {{--Curency Input Start--}}

                            <div class="form-group row">
                                <label for="currency" class="col-md-4 col-form-label text-md-right">{{ __('Currency') }}</label>

                                <div class="col-md-6">
                                    <input id="currency" type="text" class="form-control{{ $errors->has('currency') ? ' is-invalid' : '' }}" name="currency" value="{{ old('currency') }}" required autofocus>

                                    @if ($errors->has('currency'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('currency') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            {{--Curency Input End--}}


                            {{--Account Type Input--}}

                            <div class="form-group row">
                                <label for="account_type" class="col-md-4 col-form-label text-md-right">{{ __('Account Type') }}</label>

                                <div class="col-md-6">
                                    {{--<input id="account_type" type="text" class="form-control{{ $errors->has('account_type') ? ' is-invalid' : '' }}" name="account_type" value="{{ old('account_type') }}" required autofocus>--}}
                                    <input list="account_type" class="form-control{{ $errors->has('account_type') ? ' is-invalid' : '' }}" name="account_type" value="{{ old('account_type') }}" required autofocus>
                                    <datalist id="account_type">
                                        <option value="Micro">
                                        <option value="Standard">
                                        <option value="VIP">
                                    </datalist>
                                    @if ($errors->has('account_type'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('account_type') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            {{--Account Type Input End --}}
                            {{--Leverage Start--}}
                            <div class="form-group row">
                                <label for="leverage" class="col-md-4 col-form-label text-md-right">{{ __('leverage') }}</label>

                                <div class="col-md-6">
                                    {{--<input id="leverage" type="text" class="form-control{{ $errors->has('leverage') ? ' is-invalid' : '' }}" name="leverage" value="{{ old('leverage') }}" required autofocus>--}}
                                    <input list="leverage" class="form-control{{ $errors->has('leverage') ? ' is-invalid' : '' }}" name="leverage" value="{{ old('leverage') }}" required autofocus>
                                    <datalist id="leverage">
                                        <option value="1:1000">
                                        <option value="1:500">
                                        <option value="1:400">
                                        <option value="1:300">
                                        <option value="1:200">
                                        <option value="1:100">
                                    </datalist>
                                    @if ($errors->has('leverage'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('leverage') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>



                            {{--Leverage End--}}
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            {{--User_name Added Start--}}
                            <div class="form-group row">
                                <label for="user_name" class="col-md-4 col-form-label text-md-right">{{ __('User Name') }}</label>

                                <div class="col-md-6">
                                    <input id="user_name" type="text" class="form-control{{ $errors->has('user_name') ? ' is-invalid' : '' }}" name="user_name" value="{{ old('user_name') }}" required autofocus>

                                    @if ($errors->has('user_name'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('user_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            {{--User_name Added End--}}

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            {{--Address Input Sart--}}
                            <div class="form-group row">
                                <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                                <div class="col-md-6">
                                    <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" required>

                                    @if ($errors->has('address'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            {{--Address Input end--}}
                            {{--City Input Start--}}
                            <div class="form-group row">
                                <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                                <div class="col-md-6">
                                    <input id="city" type="text" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ old('city') }}" required>

                                    @if ($errors->has('city'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            {{--City Input End--}}
                            {{--Country Input Start--}}
                            <div class="form-group row">
                                <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label>

                                <div class="col-md-6">
                                    <input id="country" type="text" class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" name="country" value="{{ old('country') }}" required>

                                    @if ($errors->has('country'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            {{--Country Input End--}}
                            {{--Mobile Num  Added Start--}}
                            <div class="form-group row">
                                <label for="phone_number" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                                <div class="col-md-6">
                                    <input id="phone_number" type="text" class="form-control{{ $errors->has('phone_number') ? ' is-invalid' : '' }}" name="phone_number" value="{{ old('phone_number') }}" required autofocus>

                                    @if ($errors->has('phone_number'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            {{--MObile Number Added End--}}

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
