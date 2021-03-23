@extends('templates.master')

@section('title', 'Trang tin')

@section('content')

    <!-- Header Category -->
    <div class="category--header mx-auto mb-5">
        <div class="category--header-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 category--header-img-wrapper text-center">
                        <div class="category--header-img">
                            <img class="h-100 w-100" src="{{asset('image/Baner.jpg')}}" alt="">
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
                                            <div class="col-xl-4 col-md-6 col-sm-12 mb-3 mt-2 category-item">
                                                <div class="ProductList-item">
                                                    <a href="{{route('new.detail', 2)}}" class="a-decoration">
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
                                                        <a href="#" class="QuickView-link up-text text-nowrap" data-bs-toggle="modal" data-bs-target="#modal-product-{{$category->id}}">
                                                            Quick View
                                                        </a>
                                                    </div>
                                                    <!-- Modal -->
                                                    <div class="modal fade modal-quickview" id="modal-product-{{$category->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                                                <a href="{{route('new.detail', 2)}}">{{$category->name}}</a>
                                                                                            </h1>
                                                                                        </div>
                                                                                        <div class="product-quickview-price">
                                                                                            <h5>$ {{$category->price}}</h5>
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
                                                                                            <a href="{{route('new.detail', 2)}}">View Full Item</a>
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
