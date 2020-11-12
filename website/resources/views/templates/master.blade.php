<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- link boostrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- link jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- link fontawesome -->
    <script src="https://kit.fontawesome.com/22ed4f26e7.js" crossorigin="anonymous"></script>
    <!-- link css -->
    <link rel="stylesheet"  href="{{ asset('css/web-shop.css') }}">
    
</head>
<body>
<div class="test">
    <p class="as">đá</p>
</div>
@section('content')

@yield('content')
    <!-- <div class="clickable-mainmenu-btn">
        <a class="clickable-mainmenu-active" href="https://d29u17ylf1ylz9.cloudfront.net/neha/index.html?fbclid=IwAR0ZCN8Jn0u8mfNLMpxjskOfpUjRA11OGFoowp3DkzZwG2hmHTbtt6MTAgo#"><i class="ion-navicon"></i></a>
    </div>
    <div class="clickable-mainmenu text-center">
        <div class="clickable-mainmenu-icon">
            <button class="clickable-mainmenu-close">
                <span class="ion-android-close"></span>
            </button>
        </div>
        <div id="menu" class="text-left slinky-menu slinky-theme-default" style="transition-duration: 300ms;">
            <ul style="transition-duration: 300ms;">
                <li>
                    <a href="https://d29u17ylf1ylz9.cloudfront.net/neha/index.html?fbclid=IwAR0ZCN8Jn0u8mfNLMpxjskOfpUjRA11OGFoowp3DkzZwG2hmHTbtt6MTAgo#" class="next"><span>home</span></a>
                    <ul><li class="header"><a href="https://d29u17ylf1ylz9.cloudfront.net/neha/index.html?fbclid=IwAR0ZCN8Jn0u8mfNLMpxjskOfpUjRA11OGFoowp3DkzZwG2hmHTbtt6MTAgo#" class="back"></a></li>
                        <li>
                            <a href="https://d29u17ylf1ylz9.cloudfront.net/neha/index.html"><span>furniture</span></a>
                        </li>
                        <li>
                            <a href="https://d29u17ylf1ylz9.cloudfront.net/neha/index-electronics.html"><span>electronics</span></a>
                        </li>
                        <li>
                            <a href="https://d29u17ylf1ylz9.cloudfront.net/neha/index-fashion.html"><span>fashion</span></a>
                        </li>
                        <li>
                            <a href="https://d29u17ylf1ylz9.cloudfront.net/neha/index-food-drink.html"><span>food &amp; drink</span></a>
                        </li>
                        <li>
                            <a href="https://d29u17ylf1ylz9.cloudfront.net/neha/index-jewellery.html"><span>jewellery</span></a>
                        </li>
                        <li>
                            <a href="https://d29u17ylf1ylz9.cloudfront.net/neha/index-toys.html"><span>Toys &amp; Games</span></a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="https://d29u17ylf1ylz9.cloudfront.net/neha/about-us.html"><span>about us</span></a>
                </li>
                <li>
                    <a href="https://d29u17ylf1ylz9.cloudfront.net/neha/index.html?fbclid=IwAR0ZCN8Jn0u8mfNLMpxjskOfpUjRA11OGFoowp3DkzZwG2hmHTbtt6MTAgo#" class="next"><span>shop</span></a>
                    <ul><li class="header"><a href="https://d29u17ylf1ylz9.cloudfront.net/neha/index.html?fbclid=IwAR0ZCN8Jn0u8mfNLMpxjskOfpUjRA11OGFoowp3DkzZwG2hmHTbtt6MTAgo#" class="back"></a></li>
                        <li>
                            <a href="https://d29u17ylf1ylz9.cloudfront.net/neha/index.html?fbclid=IwAR0ZCN8Jn0u8mfNLMpxjskOfpUjRA11OGFoowp3DkzZwG2hmHTbtt6MTAgo#" class="next"><span>shop grid</span></a>
                            <ul><li class="header"><a href="https://d29u17ylf1ylz9.cloudfront.net/neha/index.html?fbclid=IwAR0ZCN8Jn0u8mfNLMpxjskOfpUjRA11OGFoowp3DkzZwG2hmHTbtt6MTAgo#" class="back"></a></li>
                                <li>
                                    <a href="https://d29u17ylf1ylz9.cloudfront.net/neha/shop-grid-view-3-col.html"><span>grid 3 column</span></a>
                                </li>
                                <li>
                                    <a href="https://d29u17ylf1ylz9.cloudfront.net/neha/shop-grid-view-5-col.html"><span>grid 5 column</span></a>
                                </li>
                                <li>
                                    <a href="https://d29u17ylf1ylz9.cloudfront.net/neha/shop-grid-view-sidebar.html"><span>grid with sidebar</span></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="https://d29u17ylf1ylz9.cloudfront.net/neha/index.html?fbclid=IwAR0ZCN8Jn0u8mfNLMpxjskOfpUjRA11OGFoowp3DkzZwG2hmHTbtt6MTAgo#" class="next"><span>shop list</span></a>
                            <ul><li class="header"><a href="https://d29u17ylf1ylz9.cloudfront.net/neha/index.html?fbclid=IwAR0ZCN8Jn0u8mfNLMpxjskOfpUjRA11OGFoowp3DkzZwG2hmHTbtt6MTAgo#" class="back"></a></li>
                                <li>
                                    <a href="https://d29u17ylf1ylz9.cloudfront.net/neha/shop-list-view-1-col.html"><span>list 1 column</span></a>
                                </li>
                                <li>
                                    <a href="https://d29u17ylf1ylz9.cloudfront.net/neha/shop-list-view-2-col.html"><span>list 2 column</span></a>
                                </li>
                                <li>
                                    <a href="https://d29u17ylf1ylz9.cloudfront.net/neha/shop-list-view-sidebar.html"><span>list with sidebar</span></a>
                                </li>
                                <li>
                                    <a href="https://d29u17ylf1ylz9.cloudfront.net/neha/shop-list-view-1-col-container.html"><span>list 1 column box</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="https://d29u17ylf1ylz9.cloudfront.net/neha/index.html?fbclid=IwAR0ZCN8Jn0u8mfNLMpxjskOfpUjRA11OGFoowp3DkzZwG2hmHTbtt6MTAgo#" class="next"><span>product details</span></a>
                    <ul><li class="header"><a href="https://d29u17ylf1ylz9.cloudfront.net/neha/index.html?fbclid=IwAR0ZCN8Jn0u8mfNLMpxjskOfpUjRA11OGFoowp3DkzZwG2hmHTbtt6MTAgo#" class="back"></a></li>
                        <li>
                            <a href="https://d29u17ylf1ylz9.cloudfront.net/neha/product-details.html"><span>tab style 1</span></a>
                        </li>
                        <li>
                            <a href="https://d29u17ylf1ylz9.cloudfront.net/neha/product-details-2.html"><span>tab style 2</span></a>
                        </li>
                        <li>
                            <a href="https://d29u17ylf1ylz9.cloudfront.net/neha/product-details-3.html"><span>tab style 3</span></a>
                        </li>
                        <li>
                            <a href="https://d29u17ylf1ylz9.cloudfront.net/neha/product-details-4.html"><span>fixed image style</span></a>
                        </li>
                        <li>
                            <a href="https://d29u17ylf1ylz9.cloudfront.net/neha/product-details-5.html"><span>fixed image style 2</span></a>
                        </li>
                        <li>
                            <a href="https://d29u17ylf1ylz9.cloudfront.net/neha/product-details-6.html"><span>sticky style</span></a>
                        </li>
                        <li>
                            <a href="https://d29u17ylf1ylz9.cloudfront.net/neha/product-details-7.html"><span>sticky style 2</span></a>
                        </li>
                        <li>
                            <a href="https://d29u17ylf1ylz9.cloudfront.net/neha/product-details-8.html"><span>gallery style</span></a>
                        </li>
                        <li>
                            <a href="https://d29u17ylf1ylz9.cloudfront.net/neha/product-details-9.html"><span>gallery style 2</span></a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="https://d29u17ylf1ylz9.cloudfront.net/neha/index.html?fbclid=IwAR0ZCN8Jn0u8mfNLMpxjskOfpUjRA11OGFoowp3DkzZwG2hmHTbtt6MTAgo#" class="next"><span>blog</span></a>
                    <ul><li class="header"><a href="https://d29u17ylf1ylz9.cloudfront.net/neha/index.html?fbclid=IwAR0ZCN8Jn0u8mfNLMpxjskOfpUjRA11OGFoowp3DkzZwG2hmHTbtt6MTAgo#" class="back"></a></li>
                        <li>
                            <a href="https://d29u17ylf1ylz9.cloudfront.net/neha/blog.html"><span>blog </span></a>
                        </li>
                        <li>
                            <a href="https://d29u17ylf1ylz9.cloudfront.net/neha/blog-2-col.html"><span>blog 2 column</span></a>
                        </li>
                        <li>
                            <a href="https://d29u17ylf1ylz9.cloudfront.net/neha/blog-left-sidebar.html"><span>blog left sidebar</span></a>
                        </li>
                        <li>
                            <a href="https://d29u17ylf1ylz9.cloudfront.net/neha/blog-details.html"><span>blog details</span></a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="https://d29u17ylf1ylz9.cloudfront.net/neha/index.html?fbclid=IwAR0ZCN8Jn0u8mfNLMpxjskOfpUjRA11OGFoowp3DkzZwG2hmHTbtt6MTAgo#" class="next"><span>pages</span></a>
                    <ul><li class="header"><a href="https://d29u17ylf1ylz9.cloudfront.net/neha/index.html?fbclid=IwAR0ZCN8Jn0u8mfNLMpxjskOfpUjRA11OGFoowp3DkzZwG2hmHTbtt6MTAgo#" class="back"></a></li>
                        <li>
                            <a href="https://d29u17ylf1ylz9.cloudfront.net/neha/about-us.html"><span>about us</span></a>
                        </li>
                        <li>
                            <a href="https://d29u17ylf1ylz9.cloudfront.net/neha/cart.html"><span>cart</span></a>
                        </li>
                        <li>
                            <a href="https://d29u17ylf1ylz9.cloudfront.net/neha/checkout.html"><span>checkout</span></a>
                        </li>
                        <li>
                            <a href="https://d29u17ylf1ylz9.cloudfront.net/neha/wishlist.html"><span>wishlist</span></a>
                        </li>
                        <li>
                            <a href="https://d29u17ylf1ylz9.cloudfront.net/neha/contact.html"><span>contact</span></a>
                        </li>
                        <li>
                            <a href="https://d29u17ylf1ylz9.cloudfront.net/neha/login.html"><span>login</span></a>
                        </li>
                        <li>
                            <a href="https://d29u17ylf1ylz9.cloudfront.net/neha/register.html"><span>register</span></a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div> -->
    <div class="clickable-mainmenu-btn" data-toggle="modal" data-target="#exampleModal">
        <i class="fas fa-bars"></i>
    </div>

    <!-- Modal Menu -->
    <div id="main-menu" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <span class="close js-close-menu text-right">
                <i class="fas fa-times"></i>
            </span>
            <div class="menu-content text-center">
                <div class="menu-item">
                    menu1
                </div>
                <div class="menu-item">
                    menu2
                </div>
                <div class="menu-item">
                    menu3
                </div>
            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
    crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" 
    crossorigin="anonymous"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>