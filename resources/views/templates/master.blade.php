<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- link boostrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css"
          rel="stylesheet"/>
    <!-- link css -->
    <link rel="stylesheet" href="{{ asset('css/web-shop.css') }}">
    <link rel="stylesheet" href="{{asset('css/categoryLv3.css')}}">
    <link rel="stylesheet" href="{{asset('css/list-cart.css')}}">
    <link rel="stylesheet" href="{{asset('css/check-out.css')}}">
    <link rel="stylesheet" href="{{asset('css/customer.css')}}">
    <link rel="stylesheet" href="{{asset('css/question.css')}}">
    <link rel="stylesheet" href="{{asset('css/blog.css')}}">
    <link rel="stylesheet" href="{{asset('css/new-category.css')}}">
    <link rel="stylesheet" href="{{asset('css/detail.css')}}">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <link rel="stylesheet" href="{{asset('css/category.css')}}">



@section('style-css')
    @yield('style-css')

@section('owlcarousel-css')
@yield('owlcarousel-css')

@section('zoom-css')

    @yield('zoom-css')
    <!-- Link Navigation -->
        <link rel="stylesheet" href="{{asset('css/navigation.css')}}">



        <!-- link font-family -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karla">
        <link href="http://fonts.cdnfonts.com/css/josefin-slab" rel="stylesheet">
        <link href="//db.onlinewebfonts.com/c/34ac108190ba4a81af3a838a98c1942a?family=URW+Geometric+W15"
              rel="stylesheet"
              type="text/css"/>
        <!-- link toastr -->
        <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

        <style>
            body {
                background-color: #fafafa;
            }
        </style>
</head>
<body>
<div class="body-wrapper">
    <!-- Header -->
    <header class="position-relative">
        <div class="slogan-main">
            <div class="slogan-main-wrap text-center">
                <div class="slogan-main-content">
                    <p class="">{!! @$logan !!}</p>
                </div>
            </div>
        </div>
        <div class="container-fluid  my-0">
        <nav id="navigation" class="navigation">
    <div class="navigation-body">
        <div class="navigation-mobile">
            <!-- Nav Mobile -->
            <div class="navigation-mobile-wrap">
                <a class="text-decoration" href="#">
                    <img class="h-100" src="{{ @setting('logo')->src}}" title="{{ @setting('logo')->title}}" alt="{{ @setting('logo')->alt}}">
                </a>
                <div id="nav-icon2">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <!-- End Nav Mobile -->
        </div>

        <div class="navigation-wrap">
            <div class="navigation-logo">
                <a class="text-decoration" href="{{route('home')}}">
                    <img class="h-100" src="{{ @setting('logo')->src}}" title="{{ @setting('logo')->title}}" alt="{{ @setting('logo')->alt}}">
                </a>
                <span class="navigation-body-close-button">✕</span>
            </div>
            <div class="navigation-nav-wrap">
                <ul class="navigation-nav">
                <li class="navigation-list">
                    <ul class="navigation-list-main">
                        <li class="navigation-item">
                            <a href="{{route('home')}}" class="text-decoration navigation-link">Shop</a>
                        </li>
                        <li class="navigation-item has-menu">
                            <a href="#" class="text-decoration navigation-link">Category</a>
                            <div class=""></div>
                                <section class="megamenu" >
                                    <div class="megamenu-wrap">
                                        <div class="megamenu-body">
                                            <div class="rt-container">
                                                <!--Vertical Tab-->
                                                <div id="parentVerticalTab">
                                                    <ul class="resp-tabs-list hor_1 resp-tab-content-active">
                                                        <li>Vertical 1</li>
                                                        <li>Vertical 2</li>
                                                        <li>Vertical 3</li>
                                                    </ul>
                                                    <div class="resp-tabs-container hor_1 resp-tab-content-active">
                                                        <div>
                                                            <div class="navigation-tabs-pane">
                                                                <div class="navigation-row">
                                                                    <div class="navigation-col">
                                                                        <ul class="navigation-list">
                                                                            <li class="navigation-list-heading">
                                                                                <a class="navigation-list-item-link" href="{{route('new.category')}}">Lorem ipsum</a>
                                                                            </li>
                                                                            <li class="navigation-list-item">
                                                                                <a class="navigation-list-item-link" href="{{route('new.category')}}">
                                                                                    item 1
                                                                                </a>
                                                                            </li>
                                                                            <li class="navigation-list-item">
                                                                                <a class="navigation-list-item-link" href="{{route('new.category')}}">
                                                                                    item 2
                                                                                </a>
                                                                            </li>
                                                                            <li class="navigation-list-item">
                                                                                <a class="navigation-list-item-link" href="{{route('new.category')}}">
                                                                                    item 3
                                                                                </a>
                                                                            </li>
                                                                            <li class="navigation-list-item">
                                                                                <a class="navigation-list-item-link" href="{{route('new.category')}}">
                                                                                    item 4
                                                                                </a>
                                                                            </li>
                                                                            <li class="navigation-list-item">
                                                                                <a class="navigation-list-item-link" href="{{route('new.category')}}">
                                                                                    item 5
                                                                                </a>
                                                                            </li>
                                                                            <li class="navigation-list-item">
                                                                                <a class="navigation-list-item-link" href="{{route('new.category')}}">
                                                                                    item 6
                                                                                </a>
                                                                            </li>
                                                                            <li class="navigation-list-item">
                                                                                <a class="navigation-list-item-link" href="{{route('new.category')}}">
                                                                                    item 7
                                                                                </a>
                                                                            </li>
                                                                            <li class="navigation-list-item">
                                                                                <a class="navigation-list-item-link" href="{{route('new.category')}}">
                                                                                    item 8
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="navigation-col">
                                                                        <div class="navigation-col-wrap">
                                                                            <img class="w-100" src="{{asset('image/vuong2.png')}}" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="navigation-col">
                                                                    <div class="navigation-col-wrap">
                                                                            <img class="w-100" src="{{asset('image/vuong2.png')}}" alt="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            Lorem consectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel tortor. Integer laoreet placerat suscipit. Sed sodales scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. Proin consectetur nibh quis.
                                                            <br>
                                                            <br>
                                                            <p>Tab 2 Container</p>
                                                        </div>
                                                        <div>
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel tortor. Integer laoreet placerat suscipit. Sed sodales scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. Proin consectetur nibh quis urna gravida mollis.
                                                            <br>
                                                            <br>
                                                            <p>Tab 3 Container</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </section>

                        </li>
                        <li class="navigation-item">
                            <a href="" class="text-decoration navigation-link">Thrift</a>
                        </li>
                        <li class="navigation-item">
                            <a href="{{route('list.blog')}}" class="navigation-link text-decoration">Blog</a>
                        </li>
                        <li class="navigation-item">
                            <a href="{{route('faq')}}" class="navigation-link text-decoration">About</a>
                        </li>
                    </ul>
                </li>
                <!-- <li class="navigation-link">
                    daksd
                </li> -->
                <div class="navigation-social-menu">
                <ul class="navigation-social-menu-list">
                    <li class="navigation-social-menu-item">
                        <a class="navigation-social-menu-link" href="{{route('customer.show')}}">
                            <i class="fas fa-user"></i>
                        </a>
                    </li>
                    <li class="navigation-social-menu-item" id="cart">
                        <a class="navigation-social-menu-link" href="#">
                            <i class="fas fa-shopping-cart"></i>
                        </a>
                    </li>
                </ul>
            </div>
            </div>


        </div>
        <div class="overlay-panel is-visible" style="background: rgba(0, 0, 0, 0.7);"></div>
    </div>
</nav>

        </div>
    </header>
    <!-- End Header -->

    <!-- Your Cart -->
    <div class="your-cart js-your-cart alert px-0" id="your-cart">
        <!-- Cart Header -->
        <div class="cart__header d-flex justify-content-center ">
            <p class=" float-left align-middle  my-0 up-text text-bold">Your Cart <span class="emoji-cart">🛒</span></p>
            <span id="icon-close" class="btn p-0">&times;</span>
        </div>

        <!-- <div class="cart__cta-boder"></div> -->

        <!-- END Cart Header -->

        <!-- Cart Item Scroll -->
        @if(Session::has("Cart") != null)
            <div class="cart__scroll ">
                <div class="cart__scroll-wrapper overflow-auto">
                    <div class="cart__cta-boder"></div>
                    <div class="cart-line"></div>
                    <!-- Cart has items -->
                    <div class="cart__has-items">

                        <!-- FREE SHIPPING BARS -->
                        <div class="cart__cta-boder"></div>

                        <div class="cart__upsell mb1 bg--original">
                            <div class="d-flex justify-content-center">
                                <p class="my-0 " style=""> You've got free shipping.</p>
                                <div class="my-0 ">🚚</div>
                            </div>
                        </div>
                        <div class="cart__cta-boder mb-4"></div>
                        <!-- END FREE SHIPPING BARS -->

                        <!-- Cart Item -->
                        <div class="cart__items">
                            @foreach(Session::get("Cart")->products as $item)
                                <div class="cart-item alert" role="alert">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-4 px-0 cart-item-img-background">
                                                <div class="cart-item-img">
                                                    <img class="w-100" src="{{asset('image/image-product.jpg')}}"
                                                         alt="">
                                                </div>
                                            </div>
                                            <div class="col-8 pr-0">
                                                <div
                                                    class="cart-item-name d-flex flex-row align-items-stretch justify-content-between">
                                                    <div>{{$item["productInfo"]->name}}</div>
                                                    <span aria-hidden="true" id="close" class="btn p-0"
                                                          data-id="{{$item['productInfo']->id}}">&times;</span>
                                                    <span class="sr-only " data-dismiss="alert">Close</span>
                                                </div>
                                                <div class="d-flex flex-row justify-content-between">
                                                <div class="info__quantity--input font-comfortaa pro-qty">
                                                        <button type="button" class="dec qtybtn quantity__minus js--quantity-minus"></button>
                                                        <input id="inputDetail" type="number" name="" value="1" step="1"
                                                               required>
                                                               <button type="button" class="inc qtybtn quantity__add js--quantity-add"></button>
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
                        <p class="text__cart text-bold">{{number_format(Session::get("Cart")->totalPrice)}} USD</p>
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
            <a href="{{route('listCart')}}" class="cart__checkout btn w-100 my1">
                <p class="text__cart">GO TO CHECKOUT</p>
            </a><br>
            <!-- END Go To CheckOut -->

            <!-- Continue Shopping -->
            <a href="#" class="cart__continue btn w-100 my1">
                <p class="text__cart">CONTINUE SHOPPING</p>
            </a>
            <!-- END Continue Shopping -->
        </div>
        <!-- END Cart Cta -->
    </div>
    <!-- End Your Cart -->
    @section('content')


        @yield('content')
</div>
<footer class="footer-body">
    <div class="footer-wrap">
        <div class="footer-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl col-md-6 col-sm-12">
                        <div class="footer-right">
                            <div class="footer_right-item">
                                <h6 class="up-text text-bold">Integrity</h6>
                            </div>
{{--                            <div class="footer_right-item">--}}
{{--                            </div>--}}
                            <div class="footer_right-item">
                                <a class="up-text footer_right_item-link" href="{{route('faq')}}">
                                    Faq
                                </a>
                            </div>
                            <div class="footer_right-item">
                                <a class="footer_right_item-link" href="">
                                    Shiping
                                </a>
                            </div>
                            <div class="footer_right-item">
                                <a class="footer_right_item-link" href="">
                                    Refunds
                                </a>
                            </div>
                            <div class="footer_right-item">
                                <a class="footer_right_item-link" href="{{route('question')}}">
                                    Helping Hand
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-md-6 col-sm-12">
                        <div class="footer-mid text-center">
                            <div class="footer_mid-top">
                                🌞
                            </div>
                            <div class="footer_mid-content">
                                @if (session()->has('maxim_of_day'))
                                    <h6 class="footer_mid-content-text">
                                        "{{ session()->get('maxim_of_day')[1] }}"
                                    </h6>
                                    <p class="footer_mid-content-author my-0">
                                        {{ session()->get('maxim_of_day')[0] }}
                                    </p>
                                @endif
                            </div>
                            <div class="footer_mid-bot text-center">
                                🌼🌼🌼🌼🌼
                            </div>
                        </div>
                    </div>
                    <div class="col-xl col-md-6 col-sm-12">
                        <div class="footer-left">
                            <div class="footer_left-top d-flex justify-content-end">
                                <div class="footer_left_top-item">
                                    <a href="{{ setting('facebook_link') }}">
                                        <i class="fab fa-facebook-square"></i>
                                    </a>
                                </div>
                                <div class="footer_left_top-item">
                                    <a href="{{ setting('instar_link') }}">
                                        <i class="fab fa-instagram-square"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-vlist text-center">
            🌏 {{ setting('copy_right') }}
        </div>
    </div>
</footer>

<!-- Js Bootstrap and Jquery -->
<script src="{{asset('js/jquery/jquery-3.5.1.min.js')}}"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js'></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
<!-- Test rating star -->
<script type="text/javascript" src="{{asset('js/jstars.js')}}"></script>

<!-- link fontawesome -->
<script src="https://kit.fontawesome.com/22ed4f26e7.js" crossorigin="anonymous"></script>
<script src="{{ asset('js/main-all.js')}}" type="text/javascript"></script>
<!-- link js owlcaraousel -->
{{--<script src="{{asset('js/classie.js')}}"></script>--}}
<!-- Link JqZoom -->
{{--<script src="{{ asset('js/jqzoom.js') }}" type="text/javascript"></script>--}}
<script src="{{asset('js/image-zoom.js')}}" type="text/javascript"></script>
<!-- Link image Loader -->
<script src="{{asset('js/imagesloaded.pkgd.min.js')}}" type="text/javascript"></script>
<!-- <script src="{{asset('js/navigation.js')}}" type="text/javascript"></script> -->
<script src="{{asset('js/easyResponsiveTabs.js')}}" type="text/javascript"></script>


@section('owl-carousel')

    @yield('owl-carousel')

@section('js-custom')

    @yield('js-custom')

@section('zoom-js')

    @yield('zoom-js')

@section('js-style')
    @yield('js-style')

    <script type="text/javascript">
 $(document).ready(function() {
        //Horizontal Tab
        $('#parentHorizontalTab').easyResponsiveTabs({
            type: 'default',
            width: 'auto',
            fit: true,
            tabidentify: 'hor_1',
            activate: function(event) {
                var $tab = $(this);
                var $info = $('#nested-tabInfo');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });

        // Child Tab
        $('#ChildVerticalTab_1').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true,
            tabidentify: 'ver_1',
            activetab_bg: '#fff',
            inactive_bg: '#F5F5F5',
            active_border_color: '#c1c1c1',
            active_content_border_color: '#5AB1D0'
        });

        //Vertical Tab
        $('#parentVerticalTab').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true,
            closed: 'accordion',
            tabidentify: 'hor_1',
            activate: function(event) {
                var $tab = $(this);
                var $info = $('#nested-tabInfo2');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });
    });
</script>

</body>
</html>
