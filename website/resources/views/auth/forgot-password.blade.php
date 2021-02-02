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
                <div class="logo-title">
                    <h3 class="text-bold">Lost password?</h3>
                </div>
                <div class="logo-content">
                    <p class="no-wrap">Enter your email address and answer security question</p>
                    <p class="">If it's match, we'll send your new password</p>
                </div>
                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
            <form class="mt-4" method="POST" action="{{ route('password.email') }}">
                @csrf


                <div class="mt-4 form-input-style">
                    <label id="label-email" class="form-input-style-label opacity-0" for="email">Email</label>
                    <input required id="email" class="block form-input-style-input w-100" type="email" name="email"
                           placeholder="Email">
                </div>

                <div class="form-register-title text-center mt-3 text-bold">
                    Security question
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

                <div class="btn-register-wrap text-center mt-4">
                    <x-jet-button class="up-text text-bold w-100 btn-reset-password">
                        {{ __('Reset Password') }}
                    </x-jet-button>
                </div>
            </form>
        </div>


    </div>



@stop

@section('js-custom')
    <script src="{{asset('js/login/login.js')}}"></script>

@stop
