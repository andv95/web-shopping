@extends ('templates.master')

@section('style-css')
    <!-- link css -->
    <link rel="stylesheet" href="{{ asset('css/user/login.css') }}">
@stop
@section('content')
    <div class="body-wrap">
        <div class="login-wrap">
            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <div class="logo text-center">
                <div class="logo-wrap mx-auto" style="width: 100px;">
                    <img class="w-100" src="{{asset('image/logo-login.png')}}">
                </div>
                <div class="logo-title">
                    <h5 class="text-bold">Please Login</h5>
                </div>
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf


                <div class="form-input-style">
                    <label id="label-email" class="form-input-style-label opacity-0" for="email">Email</label>
                    <input id="email" class="block form-input-style-input w-100" type="email" name="email"
                           placeholder="Email">
                </div>

                <div class="mt-4 form-input-style">
                    <label id="label-password" class="form-input-style-label opacity-0" for="password">Password</label>
                    <input id="password" name="password" class="block w-100 form-input-style-input" type="password"
                           placeholder="Password">
                </div>

                <div class="btn-sign-in-wrap text-center my-4">
                    <x-jet-button class="btn-sign-in w-100">
                        {{ __('Login') }}
                    </x-jet-button>
                </div>


                <div class="d-flex align-items-center justify-content-between">
                    @if (Route::has('password.request'))
                        <a class="link-login"
                           href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                    <div class="block">
                        <a class="link-login" href="{{route('register')}}">Register an account</a>
                    </div>
                </div>
            </form>
        </div>


    </div>

@stop

@section('js-custom')
    <script src="{{asset('js/login/login.js')}}"></script>

@stop








