<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- link boostrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css" rel="stylesheet"/>
    <!-- link css -->
    <link rel="stylesheet"  href="{{ asset('css/web-shop.css') }}">
    <link rel="stylesheet" href="{{asset('css/categoryLv3.css')}}">
    <link rel="stylesheet" href="{{asset('css/list-cart.css')}}">
    <!-- link owlcarousel -->
    <link rel="stylesheet" href="{{asset('dist/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('dist/assets/owl.theme.default.min.css')}}">
    <!-- link font-family -->
    <link href="//db.onlinewebfonts.com/c/34ac108190ba4a81af3a838a98c1942a?family=URW+Geometric+W15" rel="stylesheet" type="text/css"/>
    <!-- link toastr -->
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css"> 
    
    <style>
        body { background-color: #fafafa; font-family: 'Roboto Condensed' ; }
        .container { margin: 150px auto; max-width: 960px;}
    </style>
</head>
<body>
    <div class="body-wrapper">
        <!-- Header -->
        <header class="header-area">
            <nav class="navbar navbar-expand-lg navbar-light bg-light py-0">
                <a class="navbar-brand" href="#">
                    <img src="{{asset('image/Logo_Header.svg')}}" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto ">
                        
                        <li class="nav-item py-4 px-3 dropdown position-static"><a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="#">SHOP</a>
                            <div class="dropdown-menu w-100 top-auto dropdown-category">
                                <div class="container-fluid dropdown-category-wrapper">
                                    <div class="row w-100 my-3">
                                        <div class="col-4 col-boder px-5">
                                            <div class="nav--list-category">
                                                <div >
                                                    <a href="#" class="nav--list-category-highlight my-2">
                                                    NỔI BẬT
                                                    </a>
                                                </div>
                                                <div class="nav--list-category-1 my-4">
                                                    <div >
                                                        <a href="#" class="nav---list-title">
                                                            Best Seller
                                                        </a> 
                                                    </div>
                                                    <div >
                                                        <a href="#" class="nav---list-content">
                                                            New Arrial
                                                        </a> 
                                                    </div>
                                                    <div >
                                                        <a href="#" class="nav---list-content">
                                                            Sale Off
                                                        </a> 
                                                    </div>
                                                </div>
                                                <div class="nav--list-category-1 my-4">
                                                    <div >
                                                        <a href="#" class="nav---list-title">
                                                            Best Seller
                                                        </a> 
                                                    </div>
                                                    <div >
                                                        <a href="#" class="nav---list-content">
                                                            New Arrial
                                                        </a> 
                                                    </div>
                                                    <div >
                                                        <a href="#" class="nav---list-content">
                                                            Sale Off
                                                        </a> 
                                                    </div>
                                                </div>
                                                <div class="nav--list-category-1 my-4">
                                                    <div >
                                                        <a href="#" class="nav---list-title">
                                                            Best Seller
                                                        </a> 
                                                    </div>
                                                    <div >
                                                        <a href="#" class="nav---list-content">
                                                            New Arrial
                                                        </a> 
                                                    </div>
                                                    <div >
                                                        <a href="#" class="nav---list-content">
                                                            Sale Off
                                                        </a> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4 col-boder px-5">
                                            <div class="nav--list-category">
                                                <div >
                                                    <a href="#" class="nav--list-category-highlight my-2">
                                                    GIÀY
                                                    </a>
                                                </div>
                                                <div class="nav--list-category-1 my-4">
                                                    <div >
                                                        <a href="#" class="nav---list-title">
                                                        Dòng Sản Phẩm
                                                        </a> 
                                                    </div>
                                                    <div >
                                                        <a href="#" class="nav---list-content">
                                                             Adidas
                                                        </a>
                                                    </div>
                                                    <div >
                                                        <a href="#" class="nav---list-content">
                                                             Nike
                                                        </a>
                                                    </div>
                                                    <div >
                                                        <a href="#" class="nav---list-content">
                                                             Bitis
                                                        </a>
                                                    </div>
                                                    <div >
                                                        <a href="#" class="nav---list-content">
                                                             Convers
                                                        </a>
                                                    </div>
                                                    <div >
                                                        <a href="#" class="nav---list-content">
                                                             Basas
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="nav--list-category-1 my-4">
                                                    <div >
                                                        <a href="#" class="nav---list-title">
                                                        Style
                                                        </a>
                                                    </div>
                                                    <div >
                                                        <a href="#" class="nav---list-content">
                                                            High Top
                                                        </a>
                                                    </div>
                                                    <div >
                                                        <a href="#" class="nav---list-content">
                                                            Low Top
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="nav---list-img my-2">
                                                <img src="{{asset('image/nav---list-category.jpg')}}" alt="" class="w-100">
                                            </div>
                                            <div class="nav---list-caption">
                                                Citation templates provide a uniform, easy way to cite sources.
                                                The inclusion of a template here does not necessarily mean that the sources in question are appropriate references; for details, see Wikipedia:Reliable sources and the individual template pages.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slogan p-3 mx-auto">
                                    <div class="slogan-wrapper mx-auto text-center">
                                        <span class="slogan-text"> Đây là web của </span><span class="slogan-bold">VŨ HOÀNG!</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item py-4 px-3">
                            <a class="nav-link pl-0 " href="#">
                                <p class="nav-item-boder nav--item-2 my-0">
                                    THRIFT
                                </p>
                            </a>
                        </li>
                        <li class="nav-item py-4 px-3">
                            <a class="nav-link pl-0" href="#">
                                <p class="nav-item-boder nav--item-3 my-0">
                                    BLOG
                                </p>
                            </a>
                        </li>
                        <li class="nav-item py-4 px-3">
                            <a class="nav-link pl-0" href="#">
                                <p class="nav-item-boder nav--item-4 my-0">
                                    ABOUT US
                                </p>
                            </a>
                        </li>
                        
                    </ul>
                    <div class="nav--search btn">
                        <i class="fab fa-searchengin"></i>
                    </div>
                    <div class="nav--user btn">
                        <i class="far fa-user"></i>
                    </div>
                    <div class="nav--cart btn" id="cart">
                        <i class="fas fa-cart-plus">
                        @if(Session::get("Cart") != null)
                            <span id="js-quanty--cart-show">{{count(Session('Cart')->products)}}</span>
                        @endif
                        </i>
                    </div>
                </div>
            </nav>
        </header>
        <!-- End Header -->

        <!-- Your Cart -->
            <div class="your-cart js-your-cart alert px-0" id="your-cart">
                <!-- Cart Header -->
                <div class="cart__header d-flex justify-content-between ">
                    <p class=" float-left align-middle  my-0">Your Cart</p>
                    <span id="icon-close" class="btn p-0">&times;</span>
                </div>
                <div class="cart__cta-boder"></div>
                <!-- END Cart Header -->

                <!-- Cart Item Scroll -->
                @if(Session::has("Cart") != null)
                <div class="cart__scroll ">
                    <div class="cart__scroll-wrapper overflow-auto">
                        <!-- Cart has items -->
                        <div class="cart__has-items">
                            <!-- FREE SHIPPING BARS -->
                            <div class="cart__upsell mb1 bg--original">
                                <div class="d-flex justify-content-center">
                                    <p class="my-0 " style=""> You've got free shipping.</p>					
                                    <div class="my-0 ">🚚</div>
                                </div>
                            </div>
                            <div class="cart__cta-boder"></div>
                            <!-- END FREE SHIPPING BARS -->

                            <!-- Cart Item -->
                            <div class="cart__items">
                                @foreach(Session::get("Cart")->products as $item)
                                <div class="cart-item alert" role="alert">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-4 px-0 cart-item-img-background">
                                                <div class="cart-item-img">
                                                    <img class="w-100" src="{{asset('image/image-product.jpg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="col-8 pr-0">
                                                <div class="cart-item-name d-flex flex-row align-items-stretch justify-content-between">
                                                    <div>{{$item["productInfo"]->name}}</div>
                                                    <span aria-hidden="true" id="close" class="btn p-0" data-id="{{$item['productInfo']->id}}">&times;</span>
                                                    <span class="sr-only " data-dismiss="alert">Close</span>
                                                </div>
                                                <div class="d-flex flex-row justify-content-between">
                                                    <div class="your--cart--amount-product">
                                                        <i class="fas fa-minus "></i>
                                                        <input class="js--quantity text-center my-auto quantity-your-cart"  id="numberBox" type="number" min="1" max="10" step="1" value="{{$item['quanty']}}" require>
                                                        <i class="fas fa-plus "></i>
                                                    </div>
                                                    <div class="your--cart--price-product">
                                                        $ {{$item['price']}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <!-- END Cart Item -->
                        </div>

                    </div>
                    <div class="cart__cta-boder"></div>
                    <!-- Value Order -->
                    <div class="pitch caps clearfix my1 px-4">
                        <div class="float-left">
                            <p class="text__cart">Subtotal</p>
                        </div>
                        <div class="float-right">
                            <p class="text__cart">{{number_format(Session::get("Cart")->totalPrice)}} USD</p>
                        </div>
                    </div>
                </div>
                @else
                <!-- Cart no item -->
                    <div class="cart__no-items align-middle">
                        <h6 class="align-middle text-center">You have no item in your cart</h6>
                    </div>
                <!-- END Cart no item -->
                @endif
                <!-- END Cart Item Scroll -->

                <!-- Cart Cta -->
                <div class="cart__cta text-center">
                    <!-- Go To CheckOut -->
                    <a href="#" class="cart__checkout btn w-100 my1">
                        <p class="text__cart">GO TO CHECKOUT</p>
                    </a><br>
                    <!-- END Go To CheckOut -->

                    <!-- Continue Shopping -->
                    <a href="#" class="cart__continue btn w-100 my1">
                        <p class="text__cart">CONTINUE SHOPPING</p>
                    </a>
                    <!-- END Continue Shopping -->
                    <div class="cart__cta-boder"></div>
                    
                    <div class="my1">
                        <p class="text__cart">SAFE AND EASY PAYMENT.</p>
                    </div>
                    <div>
                        <img class="w-100" src="{{asset('image/payment-methods-us-1.svg')}}" alt="">
                    </div>
                </div>
                <!-- END Cart Cta -->
            </div>
        <!-- End Your Cart -->
    @section('content')


    @yield('content')
    </div>





    <!-- Js Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js'></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <!-- Test rating star -->
    <script type="text/javascript" src="{{asset('js/jstars.js')}}"></script>

    <!-- link fontawesome -->
    <script src="https://kit.fontawesome.com/22ed4f26e7.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <!-- link js owlcaraousel -->
    <script src="{{asset('dist/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/classie.js')}}"></script>
    <!-- link CDN Toastr -->
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    <script src="" type="text/javascript">
        
    </script>

</body>
</html>