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
                    <img class="w-100" src="{{asset('image/logo-register.png')}}">
                </div>
                <div class="logo-title">
                    <h5 class="text-bold">Create a new account</h5>
                </div>
            </div>
            <form class="mt-4" method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-input-style">
                    <label id="label-name" class="form-input-style-label opacity-0" for="name">Name</label>
                    <input required id="name" class="block form-input-style-input w-100" type="text" name="name"
                           placeholder="Name">
                </div>

                <div class="mt-4 form-input-style">
                    <label id="label-password" class="form-input-style-label opacity-0" for="password">Password</label>
                    <input required id="password" name="password" class="block w-100 form-input-style-input" type="password"
                           placeholder="Password">
                </div>

                <div class="mt-4 form-input-style">
                    <label id="label-email" class="form-input-style-label opacity-0" for="email">Email</label>
                    <input required id="email" class="block form-input-style-input w-100" type="email" name="email"
                           placeholder="Email">
                </div>

                <div class="form-register-title text-center mt-3 text-bold">
                    Security Information
                </div>

                <div class="mt-2 form-input-style">
                    <label id="label-your-hometown" class="form-input-style-label opacity-0" for="your-hometown ">Your
                        hometown</label>
                    <input required id="your-hometown" class="block form-input-style-input w-100" type="text" name="address"
                           placeholder="Your hometown">
                </div>



                <div class="mt-4 form-input-style">
                    <label id="label-lucky-number" class="form-input-style-label opacity-0"
                           for="lucky-number">Your lucky number</label>
                    <input required id="lucky-number" class="block form-input-style-input w-100" type="text"
                           name="password_confirmation"
                           placeholder="Your lucky number">
                </div>

                <div class="btn-register-wrap text-center mt-4 text-bold">
                    <x-jet-button class="up-text btn-register w-100">
                        {{ __('Register') }}
                    </x-jet-button>
                </div>


                <div class="d-flex items-center justify-content-between mt-4">
                    <a class="link-login underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{__('Forgot the password')}}
                    </a>

                    <a class="link-login underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Have an account? Login') }}
                    </a>


                </div>
            </form>
        </div>


    </div>


@stop

@section('js-custom')
    <script src="{{asset('js/login/login.js')}}"></script>

@stop







