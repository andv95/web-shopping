@extends ('templates.master')

@section ('title', 'Trang tin')

@section ('content')

    <div class="category-main">
        <div class="category_main-wrap">
            <div class="cat__header">
                <div class="cat__header-wrap">
                    <div class="top-line"></div>
                    <div class="cat__header-main text-center">
                        <div class="cat__header-title">
                            <h3 class="up-text">What Are You Looking For</h3>
                        </div>
                        <div class="cat__header-icon d-flex justify-content-center flex-wrap">
                            <div class="cat__header_icon-item">
                                🌎 All
                            </div>
                            <div class="cat__header_icon-item">
                                😀 Hello
                            </div>
                            <div class="cat__header_icon-item">
                                ❄ Snowflake
                            </div>
                            <div class="cat__header_icon-item">
                                ⚽ Activity
                            </div>
                            <div class="cat__header_icon-item">
                                🏂 Snowboarder
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cat--main">
                <div class="cat__main-wrap">
                    <div class="cat__main-breadcum">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Library</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="cat__main-content">
                        <div class="cat__main_content-wrap">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-xl-4 col-md-6 col-sm-12">
                                        <div class="cat__main-item">
                                            <a href="{{route('new.category')}}" class="cat__main_item-link">
                                                <div class="cat__main_item-img">
                                                    <img class="w-100" src="{{asset('image/user.jpg')}}">
                                                    <img class="w-100 cat__main_item-img-hover"
                                                         src="{{asset('image/vuong2.png')}}">
                                                </div>
                                                <div class="cat__main_item-name">
                                                    <h4 class="up-text cat__main_item-title">Clothing</h4>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6 col-sm-12">
                                        <div class="cat__main-item">
                                            <a href="{{route('new.category')}}" class="cat__main_item-link">
                                                <div class="cat__main_item-img">
                                                    <img class="w-100" src="{{asset('image/vuong2.png')}}">
                                                    <img class="w-100 cat__main_item-img-hover"
                                                         src="{{asset('image/user.jpg')}}">
                                                </div>
                                                <div class="cat__main_item-name">
                                                    <h4 class="up-text cat__main_item-title">Clothing</h4>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6 col-sm-12">
                                        <div class="cat__main-item">
                                            <a href="{{route('new.category')}}" class="cat__main_item-link">
                                                <div class="cat__main_item-img">
                                                    <img class="w-100" src="{{asset('image/user.jpg')}}">
                                                    <img class="w-100 cat__main_item-img-hover"
                                                         src="{{asset('image/vuong2.png')}}">
                                                </div>
                                                <div class="cat__main_item-name">
                                                    <h4 class="up-text cat__main_item-title">Clothing</h4>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6 col-sm-12">
                                        <div class="cat__main-item">
                                            <a href="{{route('new.category')}}" class="cat__main_item-link">
                                                <div class="cat__main_item-img">
                                                    <img class="w-100" src="{{asset('image/vuong2.png')}}">
                                                    <img class="w-100 cat__main_item-img-hover"
                                                         src="{{asset('image/user.jpg')}}">
                                                </div>
                                                <div class="cat__main_item-name">
                                                    <h4 class="up-text cat__main_item-title">Clothing</h4>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6 col-sm-12">
                                        <div class="cat__main-item">
                                            <a href="{{route('new.category')}}" class="cat__main_item-link">
                                                <div class="cat__main_item-img">
                                                    <img class="w-100" src="{{asset('image/user.jpg')}}">
                                                    <img class="w-100 cat__main_item-img-hover"
                                                         src="{{asset('image/vuong2.png')}}">
                                                </div>
                                                <div class="cat__main_item-name">
                                                    <h4 class="up-text cat__main_item-title">Clothing</h4>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6 col-sm-12">
                                        <div class="cat__main-item">
                                            <a href="{{route('new.category')}}" class="cat__main_item-link">
                                                <div class="cat__main_item-img">
                                                    <img class="w-100" src="{{asset('image/vuong2.png')}}">
                                                    <img class="w-100 cat__main_item-img-hover"
                                                         src="{{asset('image/user.jpg')}}">
                                                </div>
                                                <div class="cat__main_item-name">
                                                    <h4 class="up-text cat__main_item-title">Clothing</h4>
                                                </div>
                                            </a>
                                        </div>
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
