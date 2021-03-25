@extends('templates.master')
@section('style-css')
    <link rel="stylesheet" href="{{asset('css/list-category.css')}}">
@stop

@section('content')
    <div class="list-category ">
        <div class="list-category-wrap">
            <div class="list-category-wrap-border">
                <div class="list-category-header">
                    <h2>List Category</h2>
                </div>
                <div class="list-category-title">
                    <div class="list-category-title-wrap">
                        <div class="list-category-title-item">
                            <a href="#" class="list-category-title-link">
                                All
                            </a>
                        </div>
                        <div class="list-category-title-item">
                            <a href="#" class="list-category-title-link">
                                Fashion
                            </a>
                        </div>
                        <div class="list-category-title-item">
                            <a href="#" class="list-category-title-link active">
                                House Decor
                            </a>
                        </div>
                        <div class="list-category-title-item">
                            <a href="#" class="list-category-title-link">
                                Spirituality
                            </a>
                        </div>
                        <div class="list-category-title-item">
                            <a href="#" class="list-category-title-link">
                                Bathroom
                            </a>
                        </div>
                        <div class="list-category-title-item">
                            <a href="#" class="list-category-title-link">
                                Zero-Waste
                            </a>
                        </div>
                    </div>
                </div>
                <div class="list-category-content">
                    <div class="list-category-content-wrap">
                        <div class="list-category-content-wrap-item-parent">

                        </div>
                        <div class="list-category-header-content">
                            <h3>Fashion</h3>
                        </div>

                        <div class="list-category-content-item">
                            <div class="list-category-content-item-wrap">
                                <div class="list-category-content-item-img">
                                    <img class="img-list-cat-main" title="Ảnh ngành hàng" src="{{asset('image/vuong2.png')}}"
                                         alt="{{asset('image/vuong2.png')}}">
                                    <img class="img-list-cat-hover" title="Ảnh ngành hàng" src="{{asset('image/img1000.jpg')}}"
                                         alt="{{asset('image/img1000.jpg')}}">
                                </div>
                                <div class="list-category-content-item-header-parent">
                                    <div class="list-category-content-item-header">
                                        <div class="list-category-content-item-name">
                                            Men Vintage Shirt
                                        </div>
                                        <div class="list-category-content-item-link">
                                            <a href="#">
                                                be cool
                                            </a>
                                        </div>
                                    </div>
                                    <div class="list-category-content-item-text">
                                        Trang bị cho bạn những chiếc áo sơ mi đẹp đẽ và thời trang mùa hè
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-category-content-item">
                            <div class="list-category-content-item-wrap">
                                <div class="list-category-content-item-img">
                                    <img class="img-list-cat-main" title="Ảnh ngành hàng" src="{{asset('image/vuong2.png')}}"
                                         alt="{{asset('image/vuong2.png')}}">
                                    <img class="img-list-cat-hover" title="Ảnh ngành hàng" src="{{asset('image/img1000.jpg')}}"
                                         alt="{{asset('image/img1000.jpg')}}">
                                </div>
                                <div class="list-category-content-item-header-parent">
                                    <div class="list-category-content-item-header">
                                        <div class="list-category-content-item-name">
                                            Men Vintage Shirt
                                        </div>
                                        <div class="list-category-content-item-link">
                                            <a href="#">
                                                be cool
                                            </a>
                                        </div>
                                    </div>
                                    <div class="list-category-content-item-text">
                                        Trang bị cho bạn những chiếc áo sơ mi đẹp đẽ và thời trang mùa hè
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-category-content-item">
                            <div class="list-category-content-item-wrap">
                                <div class="list-category-content-item-img">
                                    <img class="img-list-cat-main" title="Ảnh ngành hàng" src="{{asset('image/vuong2.png')}}"
                                         alt="{{asset('image/vuong2.png')}}">
                                    <img class="img-list-cat-hover" title="Ảnh ngành hàng" src="{{asset('image/img1000.jpg')}}"
                                         alt="{{asset('image/img1000.jpg')}}">
                                </div>
                                <div class="list-category-content-item-header-parent">
                                    <div class="list-category-content-item-header">
                                        <div class="list-category-content-item-name">
                                            Men Vintage Shirt
                                        </div>
                                        <div class="list-category-content-item-link">
                                            <a href="#">
                                                be cool
                                            </a>
                                        </div>
                                    </div>
                                    <div class="list-category-content-item-text">
                                        Trang bị cho bạn những chiếc áo sơ mi đẹp đẽ và thời trang mùa hè
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-category-content-item">
                            <div class="list-category-content-item-wrap">
                                <div class="list-category-content-item-img">
                                    <img class="img-list-cat-main" title="Ảnh ngành hàng" src="{{asset('image/vuong2.png')}}"
                                         alt="{{asset('image/vuong2.png')}}">
                                    <img class="img-list-cat-hover" title="Ảnh ngành hàng" src="{{asset('image/img1000.jpg')}}"
                                         alt="{{asset('image/img1000.jpg')}}">
                                </div>
                                <div class="list-category-content-item-header-parent">
                                    <div class="list-category-content-item-header">
                                        <div class="list-category-content-item-name">
                                            Men Vintage Shirt
                                        </div>
                                        <div class="list-category-content-item-link">
                                            <a href="#">
                                                be cool
                                            </a>
                                        </div>
                                    </div>
                                    <div class="list-category-content-item-text">
                                        Trang bị cho bạn những chiếc áo sơ mi đẹp đẽ và thời trang mùa hè
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
