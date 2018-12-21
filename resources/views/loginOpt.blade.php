@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <h3> Login Accordingly</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <a class="btn btn-outline-success" href="{{ route('login') }}">Demo Account</a>
                        <a class="btn btn-outline-danger">Live Account</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection