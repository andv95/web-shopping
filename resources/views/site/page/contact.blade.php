@extends ('templates.master')

@section ('title', 'Trang tin')
@section('style-css')
    <link rel="stylesheet" href="{{ asset('css/user/login.css') }}">
@stop

@section ('content')
    <div class="question-body mx-auto">
        <div class="question-body-wrap">
            <div class="logo text-center">
                <div class="logo-wrap mx-auto" style="width: 100px;">
                    <img class="w-100" src="{{ @($page->getImage()->src) }}" alt="{{ $page->getImage()->alt }}" title="{{ $page->getImage()->title }}">
                </div>
                <div class="logo-title">
                    <h5 class="text-bold">{{ @$page->title }}</h5>
                </div>
            </div>
            <div class="question-slogan text-center my-2">
                {!! @$page->description !!}
            </div>

            @if(request()->session()->has(\App\Helpers\Helper::MESSAGE_SUCCESS))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-check"></i> Thông báo!</h5>
                    {{ request()->session()->get(\App\Helpers\Helper::MESSAGE_SUCCESS) }}
                </div>
            @endif
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <p class="text-danger">{{ $error }}</p>
                @endforeach
            @endif
            <div class="alert print-msg" style="display:none">
                <ul></ul>
            </div>


            <form method="POST" action="{{ route('page.send-contact') }}" enctype="multipart/form-data" id="submit-form">
                {{ csrf_field() }}
                <div class="mt-2 form-input-style">
                    <label id="label-name" class="form-input-style-label opacity-0" for="name">Name</label>
                    <input required id="name" class="block form-input-style-input w-100" type="text" name="name"
                           placeholder="Name">
                </div>
                <div class="mt-2 form-input-style">
                    <label id="label-email" class="form-input-style-label opacity-0" for="email">Email</label>
                    <input id="email" class="block form-input-style-input w-100" type="email" name="email"
                           placeholder="Email">
                </div>
                <div class="mt-2 form-input-style">
                    <label id="label-your-hometown" class="form-input-style-label opacity-0" for="your-hometown ">Your
                        hometown</label>
                    <input required id="your-hometown" class="block form-input-style-input w-100" type="text"
                           name="address"
                           placeholder="Your hometown">
                </div>
                <div class="mt-2 form-input-style">
                    <label id="label-your-textarea-question" class="form-input-style-label opacity-0"
                           for="textarea-question">
                        What's are you looking for?
                    </label>
                    <textarea rows="4" class="block form-input-style-input w-100" id="textarea-question"
                              placeholder="What's are you looking for?" name="content"></textarea>
                </div>

                <div class="text-center">

                    <div class="box">
                        <input type="file" name="file" id="file-3" class="inputfile inputfile-3"
                               data-multiple-caption="{count} files selected" multiple/>
                        <label for="file-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">
                                <path
                                    d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/>
                            </svg>
                            <span>Choose a file&hellip;</span></label>
                    </div>

                </div>
                <div class="mt-2 form-group form-question mx-auto list--cart-info-user-submit">
                    <input class="w-100 py-2 btn-save" type="button" value="SUBMIT">
                </div>
            </form>
        </div>
    </div>



@stop

@section('js-custom')
    <script src="{{asset('js/login/login.js')}}"></script>

    <script src="{{ admin_asset('core/admin_base.js') }}"></script>
    <script>
        $('body').on('click', '.btn-save', function (e) {
            e.preventDefault();
            adminBase.helpers.ajax();
        })
    </script>
@stop

