@extends('templates.master')

@section('title', 'Trang tin')

@section('content')

<!-- Header Category -->
    <div class="category--header">
        <div class="category--header-wrapper">
            <div class="category--header-button d-flex justify-content-end text-center my-auto">
                <div class="header--text py-5 align-items-center align-middle">
                    <div class="header--title font-weight-bold">
                        Clear your skin <br> (and schedule)
                    </div>
                    <div class="header--content">
                        Wearing Vitamin C Marsk in meets is Not Safes for Work, but Safe's for all skin  types Espocity inlands, update, active, dddd.
                    </div>
                    <a href="#" class="header--button btn">
                        MORE
                    </a>
                </div>
            </div>
        </div>
    </div>
<!-- END Header Category -->

<!-- Icon Header -->
    <div class="icon--header-wrapper">
        <div class="icon--header text-center">
            <div class="d-flex justify-content-around text-center">
                <a href="#" class="btn btn-icon">
                    <i class="fab fa-d-and-d"></i>            
                </a>
                <a href="#" class="btn btn-icon">
                    <i class="fas fa-barcode"></i>            
                </a>
                <a href="#" class="btn btn-icon">
                    <i class="fab fa-critical-role"></i>            
                </a>
                <a href="#" class="btn btn-icon">
                    <i class="fab fa-galactic-senate"></i>            
                </a>
                <a href="#" class="btn btn-icon">
                    <i class="fab fa-wolf-pack-battalion"></i>            
                </a>
            </div>
        </div>
    </div>
<!-- END Icon Header -->

<!-- Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Library</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data</li>
        </ol>
    </nav>
<!-- END Breadcrumd -->

<!-- Products Category -->
    <div class="category-products">
        <div class="category-products-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <!-- product item -->
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="product-item">
                            <div class="product-item-image">
                                <div class="cat--img-main">
                                    <img class="w-100" src="{{asset('image/image-product.jpg')}}" alt="">
                                </div>
                                <div class="cat--img-hover">
                                    <img class="w-100" src="{{asset('image/image-hover-product.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="product-item-rating">
                                <div class="d-flex justify-content-around">
                                    <div class="jstars" 
                                        data-value="4.8" 
                                        data-total-stars="5" 
                                        data-color="#ffdcd2" 
                                        data-empty-color="black" 
                                        data-size="23px">
                                    </div>
                                    <div class="">
                                        1 Review
                                    </div>
                                </div>
                            </div>
                            <div class="product-item-name">
                                Fizzy Body Scrub
                            </div>
                            <div class="product-item-benefits">
                                <div class="d-flex justify-content-start">
                                    <div class="benefit-item">
                                        <i class="fab fa-gratipay"></i><br>
                                        Fizzy
                                    </div>
                                    <div class="benefit-item">
                                        <i class="fas fa-heartbeat"></i><br>
                                        Smooth
                                    </div>
                                    <div class="benefit-item">
                                        <i class="fas fa-heart-broken"></i><br>
                                        Vegans
                                    </div>
                                </div>
                            </div>
                            <div class="product-item-buy py-2">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-3 product-item-buy-1">
                                            <div class="text-center product-item-price">
                                                BUY
                                            </div>
                                        </div>
                                        <div class="col-9">
                                            <div class="text-center product-item-price">
                                                $35.2
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END product item -->
                    <!-- product item -->
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="product-item">
                            <div class="product-item-image">
                                <div class="cat--img-main">
                                    <img class="w-100" src="{{asset('image/image-product.jpg')}}" alt="">
                                </div>
                                <div class="cat--img-hover">
                                    <img class="w-100" src="{{asset('image/image-hover-product.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="product-item-rating">
                                <div class="d-flex justify-content-around">
                                    <div class="jstars" 
                                        data-value="4.8" 
                                        data-total-stars="5" 
                                        data-color="#ffdcd2" 
                                        data-empty-color="black" 
                                        data-size="23px">
                                    </div>
                                    <div class="">
                                        1 Review
                                    </div>
                                </div>
                            </div>
                            <div class="product-item-name">
                                Fizzy Body Scrub
                            </div>
                            <div class="product-item-benefits">
                                <div class="d-flex justify-content-start">
                                    <div class="benefit-item">
                                        <i class="fab fa-gratipay"></i><br>
                                        Fizzy
                                    </div>
                                    <div class="benefit-item">
                                        <i class="fas fa-heartbeat"></i><br>
                                        Smooth
                                    </div>
                                    <div class="benefit-item">
                                        <i class="fas fa-heart-broken"></i><br>
                                        Vegans
                                    </div>
                                </div>
                            </div>
                            <div class="product-item-buy py-2">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-3 product-item-buy-1">
                                            <div class="text-center product-item-price">
                                                BUY
                                            </div>
                                        </div>
                                        <div class="col-9">
                                            <div class="text-center product-item-price">
                                                $35.2
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END product item -->
                    <!-- product item -->
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="product-item">
                            <div class="product-item-image">
                                <div class="cat--img-main">
                                    <img class="w-100" src="{{asset('image/image-product.jpg')}}" alt="">
                                </div>
                                <div class="cat--img-hover">
                                    <img class="w-100" src="{{asset('image/image-hover-product.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="product-item-rating">
                                <div class="d-flex justify-content-around">
                                    <div class="jstars" 
                                        data-value="4.8" 
                                        data-total-stars="5" 
                                        data-color="#ffdcd2" 
                                        data-empty-color="black" 
                                        data-size="23px">
                                    </div>
                                    <div class="">
                                        1 Review
                                    </div>
                                </div>
                            </div>
                            <div class="product-item-name">
                                Fizzy Body Scrub
                            </div>
                            <div class="product-item-benefits">
                                <div class="d-flex justify-content-start">
                                    <div class="benefit-item">
                                        <i class="fab fa-gratipay"></i><br>
                                        Fizzy
                                    </div>
                                    <div class="benefit-item">
                                        <i class="fas fa-heartbeat"></i><br>
                                        Smooth
                                    </div>
                                    <div class="benefit-item">
                                        <i class="fas fa-heart-broken"></i><br>
                                        Vegans
                                    </div>
                                </div>
                            </div>
                            <div class="product-item-buy py-2">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-3 product-item-buy-1">
                                            <div class="text-center product-item-price">
                                                BUY
                                            </div>
                                        </div>
                                        <div class="col-9">
                                            <div class="text-center product-item-price">
                                                $35.2
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END product item -->
                    <!-- product item -->
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="product-item">
                            <div class="product-item-image">
                                <div class="cat--img-main">
                                    <img class="w-100" src="{{asset('image/image-product.jpg')}}" alt="">
                                </div>
                                <div class="cat--img-hover">
                                    <img class="w-100" src="{{asset('image/image-hover-product.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="product-item-rating">
                                <div class="d-flex justify-content-around">
                                    <div class="jstars" 
                                        data-value="4.8" 
                                        data-total-stars="5" 
                                        data-color="#ffdcd2" 
                                        data-empty-color="black" 
                                        data-size="23px">
                                    </div>
                                    <div class="">
                                        1 Review
                                    </div>
                                </div>
                            </div>
                            <div class="product-item-name">
                                Fizzy Body Scrub
                            </div>
                            <div class="product-item-benefits">
                                <div class="text-center product-item-price">
                                    $35.2
                                </div>
                            </div>
                            <div class="product-item-buy py-2">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-3 product-item-buy-1">
                                            <div class="text-center product-item-price">
                                                BUY
                                            </div>
                                        </div>
                                        <div class="col-9">
                                            
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END product item -->
                </div>
            </div>
        </div>
    </div>
<!-- END Products Category -->
@stop