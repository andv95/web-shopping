@extends('templates.master')

@section('title', 'Trang tin')

@section('content')

    <!-- Header Category -->
    <div class="category--header mx-auto mb-5">
        <div class="category--header-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-9 col-lg-9 col-md-12 category--header-img-wrapper text-center">
                        <div class="category--header-img">

                            <img class="h-100 w-100" src="{{asset('image/Baner.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-12 category--header-text-wrapper my-auto">
                        <div class="category--header-text text-center">
                            <div class="category--header-title font-weight-bold text-center my-2">
                                Clear your skin <br> (and schedule)
                            </div>
                            <div class="category--header-content text-center my-2">
                                Wearing Vitamin C Marsk in meets is Not Safes for Work, but Safe's for all skin types
                                Espocity inlands, update, active, dddd.
                            </div>
                            <div class="category--header-button btn text-center my-2">
                                MORE gjhgjhghjjhg
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Header Category -->

    <!-- Icon Header -->

    <!-- END Icon Header -->

    <!-- Breadcrumb -->

    <!-- END Breadcrumd -->

    <!-- Category Product -->
    <div class="content-outer mx-auto mt-5">
        <main class="main--product-list">
            <div class="mugs-products-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="productList-filter">
                                <ul class="ProductList-filter-list px-0">
                                    <li class="ProductList-filter-list-item text-nowrap ">
                                        <a class="ProductList-filter-list-item-link font-comfortaa color-gold-45"
                                           href="#">All</a>
                                    </li>
                                    <li class="ProductList-filter-list-item">
                                        <a class="ProductList-filter-list-item-link font-comfortaa"
                                           href="#">Animalia</a>
                                    </li>
                                    <li class="ProductList-filter-list-item text-nowrap">
                                        <a class="ProductList-filter-list-item-link font-comfortaa" href="#">Breakfast
                                            Time</a>
                                    </li>
                                    <li class="ProductList-filter-list-item">
                                        <a class="ProductList-filter-list-item-link font-comfortaa" href="#">Bud
                                            Vases</a>
                                    </li>
                                    <li class="ProductList-filter-list-item">
                                        <a class="ProductList-filter-list-item-link font-comfortaa" href="#">Jars</a>
                                    </li>
                                    <li class="ProductList-filter-list-item">
                                        <a class="ProductList-filter-list-item-link font-comfortaa" href="#">Jewelry</a>
                                    </li>
                                    <li class="ProductList-filter-list-item">
                                        <a class="ProductList-filter-list-item-link font-comfortaa" href="#">Maige-inspired</a>
                                    </li>
                                    <li class="ProductList-filter-list-item">
                                        <a class="ProductList-filter-list-item-link font-comfortaa" href="#">Mugs</a>
                                    </li>
                                    <li class="ProductList-filter-list-item">
                                        <a class="ProductList-filter-list-item-link font-comfortaa"
                                           href="#">Ornagaments</a>
                                    </li>
                                    <li class="ProductList-filter-list-item">
                                        <a class="ProductList-filter-list-item-link font-comfortaa" href="#">Votives</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="ProductList-grid">
                                <div class="container-fluid">
                                    <div class="row">
                                        @foreach($categories as $category)
                                            <div class="col-xl-4 col-md-6 col-sm-12 mb-5 mt-2 category-item">
                                                <div class="ProductList-item">
                                                    <a href="#" class="a-decoration">
                                                        <div class="Product-list-item a-decoration">
                                                            <div class="Product-list-item-img mb-2">
                                                                <img class="Product-list-item-img-main w-100 h-100"
                                                                     src="{{$category->image}}" alt="">
                                                                <img class="Product-list-item-img-hover w-100"
                                                                     src="{{$category->image_hover}}" alt="">
                                                            </div>
                                                            <div class="Product-list-item-name up-text">
                                                                {{$category->name}}
                                                            </div>
                                                            <div class="Product-list-item-price">
                                                                ${{$category->price}}
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="QuickView w-100 text-center">
                                                        <a href="#" class="QuickView-link up-text text-nowrap">
                                                            Quick View
                                                        </a>
                                                    </div>
                                                    <div class="whish_list-detail">
                                                        @if(1==1)
                                                            <a class="" href="#">
                                                                <img class="favourite"
                                                                     src="{{asset('image/heart_icon.png')}}" alt="">
                                                            </a>
                                                        @else
                                                            <a href="#">
                                                                <img class="favourite-red"
                                                                     src="{{asset('image/heart_icon_active-1.png')}}"
                                                                     alt="">
                                                            </a>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="productList-grid"></div>
            </div>
        </main>
    </div>
    <!-- END Category Product -->


@stop
