@extends('templates.master')

@section('style-css')
    <link rel="stylesheet" href="{{asset('css/all-product/all-product.css')}}">
@stop

@section('content')
<div class="category--header mx-auto mb-5">
        <div class="category--header-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 category--header-img-wrapper text-center">
                        <div class="category--header-img">

                            <img class="h-100 w-100" src="http://127.0.0.1:8000/image/Baner.jpg" alt="">
                        </div>
                    </div>
                    <!-- <div class="col-xl-3 col-lg-3 col-md-12 category--header-text-wrapper my-auto">
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
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <div class="border_collection">
        <div class="container-fluid">
        <div class="row">
            <div class="col-xl-3 col-lg-12 sidebar-left">
                <div class="collection-category">
                    
                    <div class="aside-content">
                        <nav class="navbar-toggleable-md">
                            <ul class="navbar-ul" id="menu-product">
                                <li class="nav-item-lv1">
                                    <a href="#" class="nav-link-product">
                                        All
                                    </a>
                                </li>
                                <li class="nav-item-lv1">
                                    <a href="#" class="nav-link-product">
                                        An lành
                                    </a>
                                    <i class="fa fa-angle-down"></i>
                                    <ul class="dropdown--menu">
                                        <li class="dropdown-submenu nav-item-lv2">
                                            <a href="#" class="nav-link-product">
                                                Đậu lành
                                            </a>
                                            <i class="fa fa-angle-down"></i>
                                            <ul class="dropdown--menu">
                                                <li class="nav-item-lv3">
                                                    <a href="#" class="nav-link-product">
                                                        Đậu Đỏ
                                                    </a>
                                                </li>
                                                <li class="nav-item-lv3">
                                                    <a href="#" class="nav-link-product">
                                                        Đậu Đỏ
                                                    </a>
                                                </li>
                                                <li class="nav-item-lv3">
                                                    <a href="#" class="nav-link-product">
                                                        Đậu Đỏ
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item-lv2">
                                            <a href="#" class="nav-link-product">
                                                Đậu đen
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item-lv1 active">
                                    <a href="#" class="nav-link-product">
                                        An lành
                                    </a>
                                </li>
                                <li class="nav-item-lv1 active">
                                    <a href="#" class="nav-link-product">
                                        An lành
                                    </a>
                                </li>
                                <li class="nav-item-lv1 active">
                                    <a href="#" class="nav-link-product">
                                        An lành
                                    </a>
                                </li>
                                <li class="nav-item-lv1 active">
                                    <a href="#" class="nav-link-product">
                                        An lành
                                    </a>
                                </li>
                            </ul>
                            
                        </nav>

                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-12 sidebar-right">
                <div class="title_module">
                    <h4 class="">All</h4>
                </div>
                <div class="products-view-grid">
                    <div class="products-view-grid-wrap">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xl-4 col-md-6 col-sm-12 mb-3 mt-2 category-item">
                                    <div class="ProductList-item">
                                        <a href="{{route('new.detail')}}" class="a-decoration">
                                            <div class="Product-list-item a-decoration">
                                                <div class="Product-list-item-img mb-2">
                                                    <img class="Product-list-item-img-main"
                                                            src="https://via.placeholder.com/1000x1000.png/66FF33?text=impedit" alt="">
                                                    <img class="Product-list-item-img-hover"
                                                            src="https://via.placeholder.com/1000x1000.png/#FFCC66?text=1" alt="">
                                                </div>
                                                <div class="Product-list-item-name up-text">
                                                    ádklasjadk
                                                </div>
                                                <div class="Product-list-item-price">
                                                    $ 12.90
                                                </div>
                                            </div>
                                        </a>
                                        <div class="QuickView w-100 text-center" data-bs-toggle="modal" data-bs-target="#modal-product-1">
                                            <a href="#" class="QuickView-link up-text text-nowrap">
                                                Quick View
                                            </a>
                                        </div>
                                        <!-- Modal -->
                                        <div class="modal fade modal-quickview" id="modal-product-1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div type="button" class="btn-close btn-close-quickview" data-bs-dismiss="modal" aria-label="Close">x</div>
                                                <div class="modal-dialog modal-dialog-centered modal-lg show">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <form action="POST" class="form-quickview">
                                                                <div class="container-fluid">
                                                                    <div class="row">
                                                                        <div class="col-8 col-quickview">
                                                                            <div class="image-quickview">
                                                                                <img src="https://via.placeholder.com/1000x1000.png/66FF33?text=impedit" alt="">
                                                                            </div>
                                                                            <div class="image-quikckview-extra">
                                                                                <img src="https://via.placeholder.com/1000x1000.png/#FFCC66?text=1" alt="">
                                                                                <img src="https://via.placeholder.com/1000x1000.png/#FFCC66?text=1" alt="">
                                                                                <img src="https://via.placeholder.com/1000x1000.png/#FFCC66?text=1" alt="">
                                                                                <img src="https://via.placeholder.com/1000x1000.png/#FFCC66?text=1" alt="">
                                                                                <img src="https://via.placeholder.com/1000x1000.png/#FFCC66?text=1" alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-4">
                                                                            <div class="quickview-right">
                                                                                <div class="product-quickview-name">
                                                                                    <h1>
                                                                                        <a href="{{route('new.detail')}}"> Can't Stop Dreaming About You Mug № 12139</a>
                                                                                    </h1>
                                                                                </div>
                                                                                <div class="product-quickview-price">
                                                                                    <h5>$ 117.90</h5>
                                                                                </div>
                                                                                <div class="product-quickview-info">
                                                                                    A sleeping fox nestles into the mug den, among 3 white wildflowers. Aqua glaze breaks over the rounded design and dappled texture. Yellow stars and fireflies dot the skyline. 22k ...
                                                                                </div>
                                                                                <div class="product-quickview-properti">
                                                                                    
                                                                                    <div class="radio-detail">
                                                                                        <div class="radio-detail-label">
                                                                                            <div class="radio-detail-label-size">
                                                                                                <label class="radio-size-title font-comfortaa" for="">
                                                                                                    SIZE
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio-detai-label-color">
                                                                                                <label class="radio-color-title"
                                                                                                    class="radio-size-title font-comfortaa"
                                                                                                    for="">COLOR:</label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="radio-detail-input">
                                                                                            <div class="radio-detail-input-size">
                                                                                                <input type="radio" id="radio1" name="size-detail"
                                                                                                    value="all"
                                                                                                    checked>
                                                                                                <label class="label-product"
                                                                                                    for="radio1">S</label>

                                                                                                <input type="radio" id="radio2" name="size-detail"
                                                                                                    value="false">
                                                                                                <label class="label-product"
                                                                                                    for="radio2">M</label>

                                                                                                <input type="radio" id="radio3" name="size-detail"
                                                                                                    value="true">
                                                                                                <label class="label-product"
                                                                                                    for="radio3">L</label>
                                                                                            </div>
                                                                                            <div class="radio-detail-input-color">
                                                                                                <label class="text-bold label-product" for="radio4">Black</label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="colors">
                                                                                        <ul>
                                                                                            <li>
                                                                                                <label>
                                                                                                    <input type="radio" name="color" value="black">
                                                                                                    <span title="black" class="swatch"
                                                                                                        style="background-color:#222"></span>
                                                                                                </label>
                                                                                            </li>
                                                                                            <li>
                                                                                                <label>
                                                                                                    <input type="radio" name="color" value="blue">
                                                                                                    <span title="blue" class="swatch"
                                                                                                        style="background-color:#6e8cd5"></span>
                                                                                                </label>
                                                                                            </li>
                                                                                            <li>
                                                                                                <label>
                                                                                                    <input type="radio" name="color" value="green">
                                                                                                    <span title="green" class="swatch"
                                                                                                        style="background-color:#44c28d"></span>
                                                                                                </label>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="product-quickview-addcart">
                                                                                    <a href="#">Add To Cart</a>
                                                                                </div>
                                                                                <div class="product-quickview-linkfull">
                                                                                    <a href="{{route('new.detail')}}">View Full Item</a>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <!-- </div> -->
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
                                <div class="col-xl-4 col-md-6 col-sm-12 mb-3 mt-2 category-item">
                                    <div class="ProductList-item">
                                        <a href="{{route('new.detail')}}" class="a-decoration">
                                            <div class="Product-list-item a-decoration">
                                                <div class="Product-list-item-img mb-2">
                                                    <img class="Product-list-item-img-main "
                                                            src="https://via.placeholder.com/1000x1000.png/66FF33?text=impedit" alt="">
                                                    <img class="Product-list-item-img-hover"
                                                            src="https://via.placeholder.com/1000x1000.png/#FFCC66?text=1" alt="">
                                                </div>
                                                <div class="Product-list-item-name up-text">
                                                    ádklasjadk
                                                </div>
                                                <div class="Product-list-item-price">
                                                    $ 12.90
                                                </div>
                                            </div>
                                        </a>
                                        <div class="QuickView w-100 text-center">
                                            <a href="#" class="QuickView-link up-text text-nowrap" data-bs-toggle="modal" data-bs-target="#modal-product-2">
                                                Quick View
                                            </a>
                                        </div>
                                        <!-- Modal -->
                                        <div class="modal fade modal-quickview" id="modal-product-2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div type="button" class="btn-close btn-close-quickview" data-bs-dismiss="modal" aria-label="Close">x</div>
                                            <div class="modal-dialog modal-dialog-centered modal-lg show">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <form action="POST" class="form-quickview">
                                                            <div class="container-fluid">
                                                                <div class="row">
                                                                    <div class="col-8 col-quickview">
                                                                        <div class="image-quickview">
                                                                            <img src="https://via.placeholder.com/1000x1000.png/66FF33?text=impedit" alt="">
                                                                        </div>
                                                                        <div class="image-quikckview-extra">
                                                                            <img src="https://via.placeholder.com/1000x1000.png/#FFCC66?text=1" alt="">
                                                                            <img src="https://via.placeholder.com/1000x1000.png/#FFCC66?text=1" alt="">
                                                                            <img src="https://via.placeholder.com/1000x1000.png/#FFCC66?text=1" alt="">
                                                                            <img src="https://via.placeholder.com/1000x1000.png/#FFCC66?text=1" alt="">
                                                                            <img src="https://via.placeholder.com/1000x1000.png/#FFCC66?text=1" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <div class="quickview-right">
                                                                            <div class="product-quickview-name">
                                                                                <h1>
                                                                                    <a href="{{route('new.detail')}}"> Can't Stop Dreaming About You Mug № 12139</a>
                                                                                </h1>
                                                                            </div>
                                                                            <div class="product-quickview-price">
                                                                                <h5>$ 117.90</h5>
                                                                            </div>
                                                                            <div class="product-quickview-info">
                                                                                A sleeping fox nestles into the mug den, among 3 white wildflowers. Aqua glaze breaks over the rounded design and dappled texture. Yellow stars and fireflies dot the skyline. 22k ...
                                                                            </div>
                                                                            <div class="product-quickview-properti">
                                                                                
                                                                                <div class="radio-detail">
                                                                                    <div class="radio-detail-label">
                                                                                        <div class="radio-detail-label-size">
                                                                                            <label class="radio-size-title font-comfortaa" for="">
                                                                                                SIZE
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio-detai-label-color">
                                                                                            <label class="radio-color-title"
                                                                                                class="radio-size-title font-comfortaa"
                                                                                                for="">COLOR:</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="radio-detail-input">
                                                                                        <div class="radio-detail-input-size">
                                                                                            <input type="radio" id="radio1" name="size-detail"
                                                                                                value="all"
                                                                                                checked>
                                                                                            <label class="label-product"
                                                                                                for="radio1">S</label>

                                                                                            <input type="radio" id="radio2" name="size-detail"
                                                                                                value="false">
                                                                                            <label class="label-product"
                                                                                                for="radio2">M</label>

                                                                                            <input type="radio" id="radio3" name="size-detail"
                                                                                                value="true">
                                                                                            <label class="label-product"
                                                                                                for="radio3">L</label>
                                                                                        </div>
                                                                                        <div class="radio-detail-input-color">
                                                                                            <label class="text-bold label-product" for="radio4">Black</label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="colors">
                                                                                    <ul>
                                                                                        <li>
                                                                                            <label>
                                                                                                <input type="radio" name="color" value="black">
                                                                                                <span title="black" class="swatch"
                                                                                                    style="background-color:#222"></span>
                                                                                            </label>
                                                                                        </li>
                                                                                        <li>
                                                                                            <label>
                                                                                                <input type="radio" name="color" value="blue">
                                                                                                <span title="blue" class="swatch"
                                                                                                    style="background-color:#6e8cd5"></span>
                                                                                            </label>
                                                                                        </li>
                                                                                        <li>
                                                                                            <label>
                                                                                                <input type="radio" name="color" value="green">
                                                                                                <span title="green" class="swatch"
                                                                                                    style="background-color:#44c28d"></span>
                                                                                            </label>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-quickview-addcart">
                                                                                <a href="#">Add To Cart</a>
                                                                            </div>
                                                                            <div class="product-quickview-linkfull">
                                                                                <a href="{{route('new.detail')}}">View Full Item</a>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
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
                                <div class="col-xl-4 col-md-6 col-sm-12 mb-3 mt-2 category-item">
                                    <div class="ProductList-item">
                                        <a href="{{route('new.detail')}}" class="a-decoration">
                                            <div class="Product-list-item a-decoration">
                                                <div class="Product-list-item-img mb-2">
                                                    <img class="Product-list-item-img-main"
                                                            src="https://via.placeholder.com/1000x1000.png/66FF33?text=impedit" alt="">
                                                    <img class="Product-list-item-img-hover"
                                                            src="https://via.placeholder.com/1000x1000.png/#FFCC66?text=1" alt="">
                                                </div>
                                                <div class="Product-list-item-name up-text">
                                                    ádklasjadk
                                                </div>
                                                <div class="Product-list-item-price">
                                                    $ 12.90
                                                </div>
                                            </div>
                                        </a>
                                        <div class="QuickView w-100 text-center">
                                            <a href="#" class="QuickView-link up-text text-nowrap" data-bs-toggle="modal" data-bs-target="#modal-product-2">
                                                Quick View
                                            </a>
                                        </div>
                                        <!-- Modal -->
                                        <div class="modal fade modal-quickview" id="modal-product-2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div type="button" class="btn-close btn-close-quickview" data-bs-dismiss="modal" aria-label="Close">x</div>
                                            <div class="modal-dialog modal-dialog-centered modal-lg show">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <form action="POST" class="form-quickview">
                                                            <div class="container-fluid">
                                                                <div class="row">
                                                                    <div class="col-8 col-quickview">
                                                                        <div class="image-quickview">
                                                                            <img src="https://via.placeholder.com/1000x1000.png/66FF33?text=impedit" alt="">
                                                                        </div>
                                                                        <div class="image-quikckview-extra">
                                                                            <img src="https://via.placeholder.com/1000x1000.png/#FFCC66?text=1" alt="">
                                                                            <img src="https://via.placeholder.com/1000x1000.png/#FFCC66?text=1" alt="">
                                                                            <img src="https://via.placeholder.com/1000x1000.png/#FFCC66?text=1" alt="">
                                                                            <img src="https://via.placeholder.com/1000x1000.png/#FFCC66?text=1" alt="">
                                                                            <img src="https://via.placeholder.com/1000x1000.png/#FFCC66?text=1" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <div class="quickview-right">
                                                                            <div class="product-quickview-name">
                                                                                <h1>
                                                                                    <a href="{{route('new.detail')}}"> Can't Stop Dreaming About You Mug № 12139</a>
                                                                                </h1>
                                                                            </div>
                                                                            <div class="product-quickview-price">
                                                                                <h5>$ 117.90</h5>
                                                                            </div>
                                                                            <div class="product-quickview-info">
                                                                                A sleeping fox nestles into the mug den, among 3 white wildflowers. Aqua glaze breaks over the rounded design and dappled texture. Yellow stars and fireflies dot the skyline. 22k ...
                                                                            </div>
                                                                            <div class="product-quickview-properti">
                                                                                
                                                                                <div class="radio-detail">
                                                                                    <div class="radio-detail-label">
                                                                                        <div class="radio-detail-label-size">
                                                                                            <label class="radio-size-title font-comfortaa" for="">
                                                                                                SIZE
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio-detai-label-color">
                                                                                            <label class="radio-color-title"
                                                                                                class="radio-size-title font-comfortaa"
                                                                                                for="">COLOR:</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="radio-detail-input">
                                                                                        <div class="radio-detail-input-size">
                                                                                            <input type="radio" id="radio1" name="size-detail"
                                                                                                value="all"
                                                                                                checked>
                                                                                            <label class="label-product"
                                                                                                for="radio1">S</label>

                                                                                            <input type="radio" id="radio2" name="size-detail"
                                                                                                value="false">
                                                                                            <label class="label-product"
                                                                                                for="radio2">M</label>

                                                                                            <input type="radio" id="radio3" name="size-detail"
                                                                                                value="true">
                                                                                            <label class="label-product"
                                                                                                for="radio3">L</label>
                                                                                        </div>
                                                                                        <div class="radio-detail-input-color">
                                                                                            <label class="text-bold label-product" for="radio4">Black</label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="colors">
                                                                                    <ul>
                                                                                        <li>
                                                                                            <label>
                                                                                                <input type="radio" name="color" value="black">
                                                                                                <span title="black" class="swatch"
                                                                                                    style="background-color:#222"></span>
                                                                                            </label>
                                                                                        </li>
                                                                                        <li>
                                                                                            <label>
                                                                                                <input type="radio" name="color" value="blue">
                                                                                                <span title="blue" class="swatch"
                                                                                                    style="background-color:#6e8cd5"></span>
                                                                                            </label>
                                                                                        </li>
                                                                                        <li>
                                                                                            <label>
                                                                                                <input type="radio" name="color" value="green">
                                                                                                <span title="green" class="swatch"
                                                                                                    style="background-color:#44c28d"></span>
                                                                                            </label>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-quickview-addcart">
                                                                                <a href="#">Add To Cart</a>
                                                                            </div>
                                                                            <div class="product-quickview-linkfull">
                                                                                <a href="{{route('new.detail')}}">View Full Item</a>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
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
                                <div class="col-xl-4 col-md-6 col-sm-12 mb-3 mt-2 category-item">
                                    <div class="ProductList-item">
                                        <a href="{{route('new.detail')}}" class="a-decoration">
                                            <div class="Product-list-item a-decoration">
                                                <div class="Product-list-item-img mb-2">
                                                    <img class="Product-list-item-img-main"
                                                            src="https://via.placeholder.com/1000x1000.png/66FF33?text=impedit" alt="">
                                                    <img class="Product-list-item-img-hover"
                                                            src="https://via.placeholder.com/1000x1000.png/#FFCC66?text=1" alt="">
                                                </div>
                                                <div class="Product-list-item-name up-text">
                                                    ádklasjadk
                                                </div>
                                                <div class="Product-list-item-price">
                                                    $ 12.90
                                                </div>
                                            </div>
                                        </a>
                                        <div class="QuickView w-100 text-center">
                                            <a href="#" class="QuickView-link up-text text-nowrap" data-bs-toggle="modal" data-bs-target="#modal-product-2">
                                                Quick View
                                            </a>
                                        </div>
                                        <!-- Modal -->
                                        <div class="modal fade modal-quickview" id="modal-product-2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div type="button" class="btn-close btn-close-quickview" data-bs-dismiss="modal" aria-label="Close">x</div>
                                            <div class="modal-dialog modal-dialog-centered modal-lg show">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <form action="POST" class="form-quickview">
                                                            <div class="container-fluid">
                                                                <div class="row">
                                                                    <div class="col-8 col-quickview">
                                                                        <div class="image-quickview">
                                                                            <img src="https://via.placeholder.com/1000x1000.png/66FF33?text=impedit" alt="">
                                                                        </div>
                                                                        <div class="image-quikckview-extra">
                                                                            <img src="https://via.placeholder.com/1000x1000.png/#FFCC66?text=1" alt="">
                                                                            <img src="https://via.placeholder.com/1000x1000.png/#FFCC66?text=1" alt="">
                                                                            <img src="https://via.placeholder.com/1000x1000.png/#FFCC66?text=1" alt="">
                                                                            <img src="https://via.placeholder.com/1000x1000.png/#FFCC66?text=1" alt="">
                                                                            <img src="https://via.placeholder.com/1000x1000.png/#FFCC66?text=1" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <div class="quickview-right">
                                                                            <div class="product-quickview-name">
                                                                                <h1>
                                                                                    <a href="{{route('new.detail')}}"> Can't Stop Dreaming About You Mug № 12139</a>
                                                                                </h1>
                                                                            </div>
                                                                            <div class="product-quickview-price">
                                                                                <h5>$ 117.90</h5>
                                                                            </div>
                                                                            <div class="product-quickview-info">
                                                                                A sleeping fox nestles into the mug den, among 3 white wildflowers. Aqua glaze breaks over the rounded design and dappled texture. Yellow stars and fireflies dot the skyline. 22k ...
                                                                            </div>
                                                                            <div class="product-quickview-properti">
                                                                                
                                                                                <div class="radio-detail">
                                                                                    <div class="radio-detail-label">
                                                                                        <div class="radio-detail-label-size">
                                                                                            <label class="radio-size-title font-comfortaa" for="">
                                                                                                SIZE
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio-detai-label-color">
                                                                                            <label class="radio-color-title"
                                                                                                class="radio-size-title font-comfortaa"
                                                                                                for="">COLOR:</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="radio-detail-input">
                                                                                        <div class="radio-detail-input-size">
                                                                                            <input type="radio" id="radio1" name="size-detail"
                                                                                                value="all"
                                                                                                checked>
                                                                                            <label class="label-product"
                                                                                                for="radio1">S</label>

                                                                                            <input type="radio" id="radio2" name="size-detail"
                                                                                                value="false">
                                                                                            <label class="label-product"
                                                                                                for="radio2">M</label>

                                                                                            <input type="radio" id="radio3" name="size-detail"
                                                                                                value="true">
                                                                                            <label class="label-product"
                                                                                                for="radio3">L</label>
                                                                                        </div>
                                                                                        <div class="radio-detail-input-color">
                                                                                            <label class="text-bold label-product" for="radio4">Black</label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="colors">
                                                                                    <ul>
                                                                                        <li>
                                                                                            <label>
                                                                                                <input type="radio" name="color" value="black">
                                                                                                <span title="black" class="swatch"
                                                                                                    style="background-color:#222"></span>
                                                                                            </label>
                                                                                        </li>
                                                                                        <li>
                                                                                            <label>
                                                                                                <input type="radio" name="color" value="blue">
                                                                                                <span title="blue" class="swatch"
                                                                                                    style="background-color:#6e8cd5"></span>
                                                                                            </label>
                                                                                        </li>
                                                                                        <li>
                                                                                            <label>
                                                                                                <input type="radio" name="color" value="green">
                                                                                                <span title="green" class="swatch"
                                                                                                    style="background-color:#44c28d"></span>
                                                                                            </label>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-quickview-addcart">
                                                                                <a href="#">Add To Cart</a>
                                                                            </div>
                                                                            <div class="product-quickview-linkfull">
                                                                                <a href="{{route('new.detail')}}">View Full Item</a>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
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
                                <div class="col-xl-4 col-md-6 col-sm-12 mb-3 mt-2 category-item">
                                    <div class="ProductList-item">
                                        <a href="{{route('new.detail')}}" class="a-decoration">
                                            <div class="Product-list-item a-decoration">
                                                <div class="Product-list-item-img mb-2">
                                                    <img class="Product-list-item-img-main"
                                                            src="https://via.placeholder.com/1000x1000.png/66FF33?text=impedit" alt="">
                                                    <img class="Product-list-item-img-hover"
                                                            src="https://via.placeholder.com/1000x1000.png/#FFCC66?text=1" alt="">
                                                </div>
                                                <div class="Product-list-item-name up-text">
                                                    ádklasjadk
                                                </div>
                                                <div class="Product-list-item-price">
                                                    $ 12.90
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
                                <div class="col-xl-4 col-md-6 col-sm-12 mb-3 mt-2 category-item">
                                    <div class="ProductList-item">
                                        <a href="{{route('new.detail')}}" class="a-decoration">
                                            <div class="Product-list-item a-decoration">
                                                <div class="Product-list-item-img mb-2">
                                                    <img class="Product-list-item-img-main"
                                                            src="https://via.placeholder.com/1000x1000.png/66FF33?text=impedit" alt="">
                                                    <img class="Product-list-item-img-hover"
                                                            src="https://via.placeholder.com/1000x1000.png/#FFCC66?text=1" alt="">
                                                </div>
                                                <div class="Product-list-item-name up-text">
                                                    ádklasjadk
                                                </div>
                                                <div class="Product-list-item-price">
                                                    $ 12.90
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
                                <div class="col-xl-4 col-md-6 col-sm-12 mb-3 mt-2 category-item">
                                    <div class="ProductList-item">
                                        <a href="{{route('new.detail')}}" class="a-decoration">
                                            <div class="Product-list-item a-decoration">
                                                <div class="Product-list-item-img mb-2">
                                                    <img class="Product-list-item-img-main"
                                                            src="https://via.placeholder.com/1000x1000.png/66FF33?text=impedit" alt="">
                                                    <img class="Product-list-item-img-hover"
                                                            src="https://via.placeholder.com/1000x1000.png/#FFCC66?text=1" alt="">
                                                </div>
                                                <div class="Product-list-item-name up-text">
                                                    ádklasjadk
                                                </div>
                                                <div class="Product-list-item-price">
                                                    $ 12.90
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
                                <div class="col-xl-4 col-md-6 col-sm-12 mb-3 mt-2 category-item">
                                    <div class="ProductList-item">
                                        <a href="{{route('new.detail')}}" class="a-decoration">
                                            <div class="Product-list-item a-decoration">
                                                <div class="Product-list-item-img mb-2">
                                                    <img class="Product-list-item-img-main"
                                                            src="https://via.placeholder.com/1000x1000.png/66FF33?text=impedit" alt="">
                                                    <img class="Product-list-item-img-hover"
                                                            src="https://via.placeholder.com/1000x1000.png/#FFCC66?text=1" alt="">
                                                </div>
                                                <div class="Product-list-item-name up-text">
                                                    ádklasjadk
                                                </div>
                                                <div class="Product-list-item-price">
                                                    $ 12.90
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
                                <div class="col-xl-4 col-md-6 col-sm-12 mb-3 mt-2 category-item">
                                    <div class="ProductList-item">
                                        <a href="{{route('new.detail')}}" class="a-decoration">
                                            <div class="Product-list-item a-decoration">
                                                <div class="Product-list-item-img mb-2">
                                                    <img class="Product-list-item-img-main"
                                                            src="https://via.placeholder.com/1000x1000.png/66FF33?text=impedit" alt="">
                                                    <img class="Product-list-item-img-hover"
                                                            src="https://via.placeholder.com/1000x1000.png/#FFCC66?text=1" alt="">
                                                </div>
                                                <div class="Product-list-item-name up-text">
                                                    ádklasjadk
                                                </div>
                                                <div class="Product-list-item-price">
                                                    $ 12.90
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
                                <div class="col-xl-4 col-md-6 col-sm-12 mb-3 mt-2 category-item">
                                    <div class="ProductList-item">
                                        <a href="{{route('new.detail')}}" class="a-decoration">
                                            <div class="Product-list-item a-decoration">
                                                <div class="Product-list-item-img mb-2">
                                                    <img class="Product-list-item-img-main"
                                                            src="https://via.placeholder.com/1000x1000.png/66FF33?text=impedit" alt="">
                                                    <img class="Product-list-item-img-hover"
                                                            src="https://via.placeholder.com/1000x1000.png/#FFCC66?text=1" alt="">
                                                </div>
                                                <div class="Product-list-item-name up-text">
                                                    ádklasjadk
                                                </div>
                                                <div class="Product-list-item-price">
                                                    $ 12.90
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
        </div>
        
    </div> 
@stop