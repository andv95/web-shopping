@extends('templates.master')

@section('style-css')
    <!-- link css -->
    <link rel="stylesheet" href="{{ asset('css/user/login.css') }}">
@stop
@section('content')
    <div class="body-wrap text-center">
        <div class="login-wrap">
            <div class="logo text-center">
                <div class="logo-wrap mx-auto" style="width: 100px;">
                    <img class="w-100" src="{{asset('image/register-complete.png')}}">
                </div>
                <div class="logo-title p-3">
                    <h5 class="text-bold opacity-7 up-text">Here Comes Your Yolk</h5>
                </div>
                <div class="logo-title p-3">
                    <h5 class="text-bold opacity-7 up-text">You're a Bird Already</h5>
                </div>
            </div>
                <div class="thank-register p-3">
                    <h4 class="up-text text-bold">Thanks For Register</h4>
                </div>
            <div class="register-complete-link">
                <a href="{{route('home')}}" class="register-complete-link-a text-bold">Start to spent wisely</a>
            </div>
        </div>


    </div>

@stop

@section('js-custom')
    <script src="{{asset('js/login/login.js')}}"></script>

@stop









