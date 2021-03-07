@extends ('templates.master')

@section ('title', 'Trang tin')

@section('style-css')
        <link rel="stylesheet" href="{{asset('css/home.css')}}">

    @yield('style-css')

@section ('content')

<div class="home-page">
    <div class="home__page-wrap">
        <div class="main_home-page">
            <div class="main_home_page-wrap">
                <div class="main_home_page-inner d-flex flex-row-reverse">
                    <div class="main_home_page-left w-100">
                        <div class="main_home_page_left-wrap">
                            <img src="{{asset('image/doremon.png')}}" alt="" class="w-90">
                        </div>
                    </div>
                    <div class="main_home_page-right w-100 text-right align-self-center">
                        <div class="main_home_page_right-wrap mx-auto">
                            <div class="text-left main_home_page_right-title-main text-bold">
                                Bởi vì trái đất hình tròn
                            </div>
                            <div class="text-left main_home_page_right-content">
                                Nó kéo bạn về website của chúng tôi và tiêu tiền một cách hợp lý
                            </div>
                            <div class="text-left main_home_page_right-link d-flex">
                                <div class="main_home_page_right_link-left m-2 p-2 ">
                                    <a class="up-text" href="{{route('all.product')}}">About Me</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@stop
