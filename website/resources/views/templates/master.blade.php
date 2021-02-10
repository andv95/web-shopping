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

@section('zoom-css')

    @yield('zoom-css')
    <!-- Link Navigation -->
        <link rel="stylesheet" href="{{asset('css/navigation.css')}}">


        <!-- link owlcarousel -->
        <link rel="stylesheet" href="{{asset('css/owl-carousel/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl-carousel/owl.theme.default.min.css')}}">
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
                    <p class="m-0 p-1">Logan gi do</p>
                </div>
            </div>
        </div>
        <div class="container-fluid position-relative my-0">
            <nav id="navigation" class="navigation navigation-justified navigation-landscape">
                <div class="navigation-header">
                    <div class="navigation-logo">
                        <a href="#">
                            <img src="./logo.png" alt="logo">
                        </a>
                    </div>
                    <div class="navigation-button-toggler">
                        <i class="hamburger-icon"></i>
                    </div>
                </div>
                <div class="navigation-body scroll-momentum">
                    <div class="navigation-body-header">
                        <div class="navigation-logo">
                            <a href="#">
                                <img src="./logo.png" alt="logo">
                            </a>
                        </div>
                        <span class="navigation-body-close-button">✕</span>
                    </div>
                    <ul class="navigation-menu">
                        <li class="navigation-item has-submenu">
                            <a class="navigation-link text-bold" href="{{url('home')}}">
                                SHOP
                                <!-- <span class="submenu-indicator"></span> -->
                            </a>
                            <!-- <ul class="navigation-dropdown navigation-submenu" style="right: auto;">
                                <li class="navigation-dropdown-item">
                                    <a class="navigation-dropdown-link" href="#">Simple item</a>
                                </li>
                                <li class="navigation-dropdown-item">
                                    <a class="navigation-dropdown-link" href="#">Another item</a>
                                </li>
                                <li class="navigation-dropdown-item has-submenu">
                                    <a class="navigation-dropdown-link" href="#">
                                        Dropdown at right
                                        <span class="submenu-indicator"></span>
                                    </a>
                                    <ul class="navigation-dropdown navigation-submenu">
                                        <li class="navigation-dropdown-item">
                                            <a class="navigation-dropdown-link" href="#">First item</a>
                                        </li>
                                        <li class="navigation-dropdown-item">
                                            <a class="navigation-dropdown-link" href="#">Second item</a>
                                        </li>
                                        <li class="navigation-dropdown-item">
                                            <a class="navigation-dropdown-link" href="#">Third item</a>
                                        </li>
                                        <li class="navigation-dropdown-item has-submenu">
                                            <a class="navigation-dropdown-link" href="#">
                                                Dropdown  at left
                                                <span class="submenu-indicator submenu-indicator-left"></span>
                                            </a>
                                            <ul class="navigation-dropdown navigation-dropdown-left navigation-submenu">
                                                <li class="navigation-dropdown-item">
                                                    <a class="navigation-dropdown-link" href="#">Simple item</a>
                                                </li>
                                                <li class="navigation-dropdown-item">
                                                    <a class="navigation-dropdown-link" href="#">Another item</a>
                                                </li>
                                                <li class="navigation-dropdown-item">
                                                    <a class="navigation-dropdown-link" href="#">Just an item</a>
                                                </li>
                                                <li class="navigation-dropdown-item">
                                                    <a class="navigation-dropdown-link" href="#">Simple item</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="navigation-dropdown-item">
                                            <a class="navigation-dropdown-link" href="#">Fourth item</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="navigation-dropdown-item">
                                    <a class="navigation-dropdown-link" href="#">Just an item</a>
                                </li>
                            </ul> -->
                        </li>
                        <li class="navigation-item has-submenu">
                            <a class="navigation-link text-bold" href="{{route('new.category')}}">
                                THRIFT
                                <!-- <span class="submenu-indicator"></span> -->
                            </a>
                            <div class="navigation-megamenu navigation-submenu" style="right: 0px;">
                                <div class="navigation-megamenu-container">
                                    <div class="navigation-tabs">
                                        <ul class="navigation-tabs-nav">
                                            <li class="navigation-tabs-nav-item is-active ">
                                                <a class="d-flex justify-content-between" href="#"><p class="my-0">
                                                        Images</p> <span><i class="fas fa-chevron-right"></i></span></a>
                                            </li>
                                            <li class="navigation-tabs-nav-item">
                                                <a class="d-flex justify-content-between" href="#"><p class="my-0">
                                                        Images</p> <span><i class="fas fa-chevron-right"></i></span>
                                                </a>
                                            </li>
                                            <li class="navigation-tabs-nav-item">
                                                <a class="d-flex justify-content-between" href="#"><p class="my-0">
                                                        Images</p> <span><i class="fas fa-chevron-right"></i></span>
                                                </a>
                                            </li>
                                            <li class="navigation-tabs-nav-item">
                                                <a class="d-flex justify-content-between" href="#"><p class="my-0">
                                                        Images</p> <span><i class="fas fa-chevron-right"></i></span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="navigation-tabs-pane is-active">
                                            <div class="navigation-row">
                                                <div class="navigation-col mr-lg-3">
                                                    <img src="./mega01.jpeg" class="img-fluid w-100"
                                                         alt="Responsive image">
                                                </div>
                                                <div class="navigation-col mr-lg-3">
                                                    <img src="./mega02.jpeg" class="img-fluid w-100"
                                                         alt="Responsive image">
                                                </div>
                                                <div class="navigation-col">
                                                    <img src="./mega03.jpeg" class="img-fluid w-100"
                                                         alt="Responsive image">
                                                </div>
                                            </div>
                                            <div class="navigation-row">
                                                <div class="navigation-col mr-lg-3">
                                                    <img src="./mega04.jpeg" class="img-fluid w-100"
                                                         alt="Responsive image">
                                                </div>
                                                <div class="navigation-col mr-lg-3">
                                                    <img src="./mega05.jpeg" class="img-fluid w-100"
                                                         alt="Responsive image">
                                                </div>
                                                <div class="navigation-col">
                                                    <img src="./mega06.jpeg" class="img-fluid w-100"
                                                         alt="Responsive image">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="navigation-tabs-pane">
                                            <div class="navigation-row">
                                                <div class="navigation-col">
                                                    <ul class="navigation-list border-right-1px">
                                                        <li class="navigation-list-heading"><a href="#">CATEGORY</a>
                                                        </li>
                                                        <li><a href="#">Coats</a></li>
                                                        <li><a href="#">Consequat</a></li>
                                                        <li><a href="#">Cras velit </a></li>
                                                        <li><a href="#">Aenean tempus</a></li>
                                                        <li><a href="#">Lorem ipsum</a></li>
                                                        <li><a href="#">Consequat</a></li>
                                                        <li><a href="#">Cras velit </a></li>
                                                        <li><a href="#">Aenean tempus</a></li>
                                                    </ul>
                                                </div>
                                                <div class="navigation-col">
                                                    <ul class="navigation-list">
                                                        <li class="navigation-list-heading"><a href="#">Category
                                                                Name</a></li>
                                                        <li><a href="#">Aliquam luctus</a></li>
                                                        <li><a href="#">Donec quis</a></li>
                                                        <li><a href="#">Maecenas</a></li>
                                                        <li><a href="#">Quisque</a></li>
                                                        <li><a href="#">Aliquam luctus</a></li>
                                                        <li><a href="#">Donec quis</a></li>
                                                        <li><a href="#">Maecenas</a></li>
                                                        <li><a href="#">Quisque</a></li>
                                                    </ul>
                                                </div>
                                                <div class="navigation-col">

                                                    <img class="w-100" src="{{asset('image/vuong2.png')}}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="navigation-tabs-pane text-justify">
                                            <div class="navigation-row">
                                                <div class="navigation-col">
                                                    <h6><b>Lorem ipsum dolor</b></h6>
                                                    <p class="m-0">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi
                                                        eu tempus nibh, a accumsan augue.
                                                        Fusce rutrum ex vel orci varius tempor. Curabitur vel sapien
                                                        lobortis, vestibulum nisl ac
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                        Scelerisque nibh mi, porttitor ipsum
                                                        primis in faucibus orci luctus augue adipiscing elit
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi
                                                        eu tempus nibh, a accumsan augue.
                                                        Fusce rutrum ex vel orci varius tempor. Curabitur vel sapien
                                                        lobortis, vestibulum nisl ac
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                        Scelerisque nibh mi, porttitor ipsum.
                                                        Fusce rutrum ex vel orci varius tempor. Curabitur vel sapien
                                                        lobortis, vestibulum nisl ac
                                                        vel sapien lobortis
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="navigation-row">
                                                <div class="navigation-col">
                                                    <h6><b>Fusce rutrum ex vel</b></h6>
                                                    <p class="m-0 pr-lg-3">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi
                                                        eu tempus nibh, a accumsan augue.
                                                        Fusce rutrum ex vel orci varius tempor. Curabitur vel sapien
                                                        lobortis, vestibulum nisl ac
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                        Scelerisque nibh mi, porttitor ipsum.
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi
                                                        eu tempus nibh, a accumsan augue.
                                                        Fusce rutrum ex vel orci varius tempor. Curabitur vel sapien
                                                        lobortis, vestibulum nisl ac
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing.
                                                    </p>
                                                </div>
                                                <div class="navigation-col">
                                                    <h6 class="pl-lg-3"><b>Scelerisque nibh mi</b></h6>
                                                    <p class="m-0 pl-lg-3">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi
                                                        eu tempus nibh, a accumsan augue.
                                                        Fusce rutrum ex vel orci varius tempor. Curabitur vel sapien
                                                        lobortis, vestibulum nisl ac
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                        Scelerisque nibh mi, porttitor ipsum.
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi
                                                        eu tempus nibh, a accumsan augue.
                                                        Fusce rutrum ex vel orci varius tempor. Curabitur vel sapien
                                                        lobortis, vestibulum nisl ac
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="navigation-tabs-pane">
                                            <div class="navigation-col p-2">
                                                <div class="navigation-row mb-3">
                                                    <div class="navigation-col-3">
                                                        <img src="./mega01.jpeg" class="img-fluid"
                                                             alt="Responsive image">
                                                    </div>
                                                    <div class="navigation-col-9 d-flex align-items-center">
                                                        <div>
                                                            <p class="m-0 px-lg-3 text-justify">
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Aliquam pellentesque nulla non neque tempor,
                                                                ac ultrices massa condimentum. Nunc semper dictum lectus
                                                                ultricies hendrerit. In ut lorem in urna.
                                                                Lorem ipsum dolor sit amet.
                                                            </p>
                                                            <button type="button"
                                                                    class="btn btn-outline-primary btn-sm mt-3 ml-lg-3">
                                                                Learn more
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="navigation-row mb-3">
                                                    <div class="navigation-col-3">
                                                        <img src="./mega05.jpeg" class="img-fluid"
                                                             alt="Responsive image">
                                                    </div>
                                                    <div class="navigation-col-9 d-flex align-items-center">
                                                        <div>
                                                            <p class="m-0 px-lg-3 text-justify">
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Aliquam pellentesque nulla non neque tempor,
                                                                ac ultrices massa condimentum. Nunc semper dictum lectus
                                                                ultricies hendrerit. In ut lorem in urna.
                                                                Lorem ipsum dolor sit amet.
                                                            </p>
                                                            <button type="button"
                                                                    class="btn btn-outline-primary btn-sm mt-3 ml-lg-3">
                                                                Learn more
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="navigation-row">
                                                    <div class="navigation-col-3">
                                                        <img src="./mega08.jpeg" class="img-fluid"
                                                             alt="Responsive image">
                                                    </div>
                                                    <div class="navigation-col-9 d-flex align-items-center">
                                                        <div>
                                                            <p class="m-0 px-lg-3 text-justify">
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Aliquam pellentesque nulla non neque tempor,
                                                                ac ultrices massa condimentum. Nunc semper dictum lectus
                                                                ultricies hendrerit. In ut lorem in urna.
                                                                Lorem ipsum dolor sit amet.
                                                            </p>
                                                            <button type="button"
                                                                    class="btn btn-outline-primary btn-sm mt-3 ml-lg-3">
                                                                Learn more
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="navigation-item has-submenu">
                            <a class="navigation-link text-bold" href="{{route('list.blog')}}">
                                BLOG
                                <!-- <span class="submenu-indicator"></span> -->
                            </a>
                            <!-- <ul class="navigation-dropdown navigation-dropdown-horizontal navigation-submenu" style="right: 0px;">
                                <li class="navigation-dropdown-item">
                                    <a class="navigation-dropdown-link" href="#">First item</a>
                                </li>
                                <li class="navigation-dropdown-item">
                                    <a class="navigation-dropdown-link" href="#">Second item</a>
                                </li>
                                <li class="navigation-dropdown-item">
                                    <a class="navigation-dropdown-link" href="#">Third item</a>
                                </li>
                                <li class="navigation-dropdown-item has-submenu">
                                    <a class="navigation-dropdown-link" href="#">
                                        Parent item
                                        <span class="submenu-indicator"></span>
                                    </a>
                                    <ul class="navigation-dropdown navigation-dropdown-horizontal navigation-submenu">
                                        <li class="navigation-dropdown-item">
                                            <a class="navigation-dropdown-link" href="#">First item</a>
                                        </li>
                                        <li class="navigation-dropdown-item has-submenu">
                                            <a class="navigation-dropdown-link" href="#">
                                                Parent item
                                                <span class="submenu-indicator"></span>
                                            </a>
                                            <ul class="navigation-dropdown navigation-dropdown-horizontal navigation-submenu">
                                                <li class="navigation-dropdown-item">
                                                    <a class="navigation-dropdown-link" href="#">Simple item</a>
                                                </li>
                                                <li class="navigation-dropdown-item">
                                                    <a class="navigation-dropdown-link" href="#">Another item</a>
                                                </li>
                                                <li class="navigation-dropdown-item">
                                                    <a class="navigation-dropdown-link" href="#">Just an item</a>
                                                </li>
                                                <li class="navigation-dropdown-item">
                                                    <a class="navigation-dropdown-link" href="#">Last item</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="navigation-dropdown-item">
                                            <a class="navigation-dropdown-link" href="#">Third item</a>
                                        </li>
                                        <li class="navigation-dropdown-item">
                                            <a class="navigation-dropdown-link" href="#">Fourth item</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul> -->
                        </li>
                        <li class="navigation-item has-submenu">
                            <a class="navigation-link text-bold" href="{{route('question')}}">
                                ABOUT
                                <!-- <span class="submenu-indicator"></span> -->
                            </a>
                            <!-- <div class="navigation-megamenu navigation-submenu" style="right: 0px;">
                                <div class="navigation-megamenu-container">
                                    <div class="navigation-row">
                                        <div class="navigation-col">
                                            <div class="navigation-row">
                                                <div class="navigation-col-3">
                                                    <img src="./mega01.jpeg" class="img-fluid w-100" alt="Responsive image">
                                                </div>
                                                <div class="navigation-col-8 d-flex align-items-center">
                                                    <div>
                                                        <h6 class="w-100 pl-lg-3"><b>Lorem ipsum dolor</b></h6>
                                                        <p class="m-0 pl-lg-3 text-justify">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu tempus nibh, a accumsan augue.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="navigation-col">
                                            <div class="navigation-row">
                                                <div class="navigation-col-3">
                                                    <img src="./mega02.jpeg" class="img-fluid w-100" alt="Responsive image">
                                                </div>
                                                <div class="navigation-col-8 d-flex align-items-center">
                                                    <div>
                                                        <h6 class="w-100 pl-lg-3"><b>Morbi eu tempus</b></h6>
                                                        <p class="m-0 pl-lg-3 text-justify">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu tempus nibh, a accumsan augue.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="navigation-row">
                                        <div class="navigation-col">
                                            <div class="navigation-row">
                                                <div class="navigation-col-3">
                                                    <img src="./mega03.jpeg" class="img-fluid w-100" alt="Responsive image">
                                                </div>
                                                <div class="navigation-col-8 d-flex align-items-center">
                                                    <div>
                                                        <h6 class="w-100 pl-lg-3"><b>Consectetur</b></h6>
                                                        <p class="m-0 pl-lg-3 text-justify">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu tempus nibh, a accumsan augue.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="navigation-col">
                                            <div class="navigation-row">
                                                <div class="navigation-col-3">
                                                    <img src="./mega04.jpeg" class="img-fluid w-100" alt="Responsive image">
                                                </div>
                                                <div class="navigation-col-8 d-flex align-items-center">
                                                    <div>
                                                        <h6 class="w-100 pl-lg-3"><b>Adipiscing elit</b></h6>
                                                        <p class="m-0 pl-lg-3 text-justify">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu tempus nibh, a accumsan augue.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="navigation-row">
                                        <div class="navigation-col">
                                            <div class="navigation-row">
                                                <div class="navigation-col-3">
                                                    <img src="./mega05.jpeg" class="img-fluid w-100" alt="Responsive image">
                                                </div>
                                                <div class="navigation-col-8 d-flex align-items-center">
                                                    <div>
                                                        <h6 class="w-100 pl-lg-3"><b>Accumsan augue</b></h6>
                                                        <p class="m-0 pl-lg-3 text-justify">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu tempus nibh, a accumsan augue.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="navigation-col">
                                            <div class="navigation-row">
                                                <div class="navigation-col-3">
                                                    <img src="./mega06.jpeg" class="img-fluid w-100" alt="Responsive image">
                                                </div>
                                                <div class="navigation-col-8 d-flex align-items-center">
                                                    <div>
                                                        <h6 class="w-100 pl-lg-3"><b>Tempus nibh</b></h6>
                                                        <p class="m-0 pl-lg-3 text-justify">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu tempus nibh, a accumsan augue.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="navigation-row">
                                        <div class="navigation-col">
                                            <div class="navigation-row">
                                                <div class="navigation-col-3">
                                                    <img src="./mega07.jpeg" class="img-fluid w-100" alt="Responsive image">
                                                </div>
                                                <div class="navigation-col-8 d-flex align-items-center">
                                                    <div>
                                                        <h6 class="w-100 pl-lg-3"><b>Dolor sit</b></h6>
                                                        <p class="m-0 pl-lg-3 text-justify">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu tempus nibh, a accumsan augue.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="navigation-col">
                                            <div class="navigation-row">
                                                <div class="navigation-col-3">
                                                    <img src="./mega08.jpeg" class="img-fluid w-100" alt="Responsive image">
                                                </div>
                                                <div class="navigation-col-8 d-flex align-items-center">
                                                    <div>
                                                        <h6 class="w-100 pl-lg-3"><b>Vestibulum</b></h6>
                                                        <p class="m-0 pl-lg-3 text-justify">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu tempus nibh, a accumsan augue.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </li>
                        <!-- <li class="navigation-item has-submenu">
                            <a class="navigation-link" href="#">
                                Lists -->
                        <!-- <span class="submenu-indicator"></span> -->
                        <!-- </a> -->
                        <!-- <div class="navigation-megamenu navigation-submenu" style="right: 0px;">
                            <div class="navigation-megamenu-container">
                                <div class="navigation-row">
                                    <div class="navigation-col">
                                        <ul class="navigation-list">
                                            <li class="navigation-list-heading"><a href="#">Lorem ipsum</a></li>
                                            <li><a href="#">Lorem ipsum</a></li>
                                            <li><a href="#">Consequat</a></li>
                                            <li><a href="#">Cras velit </a></li>
                                            <li><a href="#">Aenean tempus</a></li>
                                            <li><a href="#">Lorem ipsum</a></li>
                                            <li><a href="#">Consequat</a></li>
                                            <li><a href="#">Cras velit </a></li>
                                            <li><a href="#">Aenean tempus</a></li>
                                        </ul>
                                    </div>
                                    <div class="navigation-col">
                                        <ul class="navigation-list">
                                            <li class="navigation-list-heading"><a href="#">Aliquam luctus</a></li>
                                            <li><a href="#">Aliquam luctus</a></li>
                                            <li><a href="#">Donec quis</a></li>
                                            <li><a href="#">Maecenas</a></li>
                                            <li><a href="#">Quisque</a></li>
                                            <li><a href="#">Aliquam luctus</a></li>
                                            <li><a href="#">Donec quis</a></li>
                                            <li><a href="#">Maecenas</a></li>
                                            <li><a href="#">Quisque</a></li>
                                        </ul>
                                    </div>
                                    <div class="navigation-col">
                                        <ul class="navigation-list">
                                            <li class="navigation-list-heading"><a href="#">Donec vestibulum</a></li>
                                            <li><a href="#">Vestibulum</a></li>
                                            <li><a href="#">Collicitudin</a></li>
                                            <li><a href="#">Mauris</a></li>
                                            <li><a href="#">Curabitur</a></li>
                                            <li><a href="#">Vestibulum</a></li>
                                            <li><a href="#">Collicitudin</a></li>
                                            <li><a href="#">Mauris</a></li>
                                            <li><a href="#">Curabitur</a></li>
                                        </ul>
                                    </div>
                                    <div class="navigation-col">
                                        <ul class="navigation-list">
                                            <li class="navigation-list-heading"><a href="#">Fusce malesuada</a></li>
                                            <li><a href="#">Malesuada</a></li>
                                            <li><a href="#">Fusce a mattis</a></li>
                                            <li><a href="#">Donec pretium</a></li>
                                            <li><a href="#">Nunc molestie</a></li>
                                            <li><a href="#">Malesuada</a></li>
                                            <li><a href="#">Fusce a mattis</a></li>
                                            <li><a href="#">Donec pretium</a></li>
                                            <li><a href="#">Nunc molestie</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- </li> -->

                    </ul>
                    <ul class="navigation-menu navigation-social-menu">
                        <li class="navigation-item">
                            <a class="navigation-link" href="#">
                                <i class="fas fa-search"></i>
                            </a>
                        </li>
                        <li class="navigation-item">
                            <a class="navigation-link" href="#">
                                <i class="fas fa-user"></i>
                            </a>
                        </li>
                        <li class="navigation-item" id="cart-main">
                            <div class="navigation-link">
                                <i id="cart" class="fas fa-shopping-cart"></i>
                            </div>
                            {{--                            <a id="" class="navigation-link" href="#">--}}
                            {{--                                <i id="cart" class="fas fa-shopping-cart"></i>--}}
                            {{--                            </a>--}}
                        </li>
                    </ul>
                </div>
                <!-- <div class="overlay-panel" style="background: rgba(0, 0, 0, 0.7);"></div> -->
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
                                                    <div class="your--cart--amount-product">
                                                        <i class="fas fa-minus "></i>
                                                        <input
                                                            class="js--quantity text-center my-auto quantity-your-cart"
                                                            id="numberBox" type="number" min="1" max="10" step="1"
                                                            value="{{$item['quanty']}}" require>
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
            <a href="#" class="cart__checkout btn w-100 my1">
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
                                <h6 class="up-text text-bold">Shortcut to Integrity</h6>
                            </div>
                            <div class="footer_right-item">
                                ⚖️
                            </div>
                            <div class="footer_right-item">
                                <a class="up-text footer_right_item-link" href="#">
                                    Faq
                                </a>
                            </div>
                            <div class="footer_right-item">
                                <a class="footer_right_item-link" href="#">
                                    Shiping
                                </a>
                            </div>
                            <div class="footer_right-item">
                                <a class="footer_right_item-link" href="#">
                                    Refunds
                                </a>
                            </div>
                            <div class="footer_right-item">
                                <a class="footer_right_item-link" href="#">
                                    Helping Hand
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-md-6 col-sm-12">
                        <div class="footer-mid text-center">
                            {{--                        <div id="app-cover">--}}
                            {{--                            <div class="toggle-button-cover">--}}
                            {{--                                <div class="button-cover">--}}
                            {{--                                    <div class="button r" id="button-1">--}}
                            {{--                                        <input type="checkbox" class="checkbox" id="checkbox">--}}
                            {{--                                        <div class="knobs"></div>--}}
                            {{--                                        <div class="layer"></div>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            {{--                        </div>--}}
                            <div class="footer_mid-top">
                                🌞
                            </div>
                            <div class="footer_mid-content">
                                <h6 class="footer_mid-content-text">
                                    "It is great wealth to a soul to live frugally with a contented mind"
                                </h6>
                                <p class="footer_mid-content-author my-0">
                                    Lucretius
                                </p>
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
                                    <a href="#">
                                        <i class="fab fa-facebook-square"></i>
                                    </a>
                                </div>
                                <div class="footer_left_top-item">
                                    <a href="#">
                                        <i class="fab fa-instagram-square"></i>
                                    </a>
                                </div>
                            </div>
                            {{--                            <div class="footer_left-bot">--}}
                            {{--                                <div class="footer_phone d-flex">--}}
                            {{--                                    <i class="fas fa-hands-wash"></i>--}}
                            {{--                                    <p class="">0919106595</p>--}}
                            {{--                                </div>--}}
                            {{--                                <div class="footer_mail d-flex">--}}
                            {{--                                    <i class="fas fa-envelope-open-text"></i>--}}
                            {{--                                    <p class="">thefoolin.hanoi@gmail.com</p>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-vlist text-center">
            🌏 2021 A.C All content is free, the item isn't always so
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
<script src="{{ asset('js/main-all.js')}}"></script>
<!-- link js owlcaraousel -->
<script src="{{asset('js/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/classie.js')}}"></script>
<!-- Link JqZoom -->
<script src="{{ asset('js/jqzoom.js') }}" type="text/javascript"></script>
<script src="{{asset('js/image-zoom.js')}}" type="text/javascript"></script>
<!-- Link image Loader -->
<script src="{{asset('js/imagesloaded.pkgd.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/navigation.js')}}" type="text/javascript"></script>
<script src="{{asset('js/main.js')}}" type="text/javascript"></script>


@section('js-custom')

    @yield('js-custom')

@section('zoom-js')

    @yield('zoom-js')

    <script type="text/javascript">
        $('.info-user-manual-detail-content').on('click', function () {
            console.log('1');
        });
        $('.owl-carousel-detail').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        })
    </script>
</body>
</html>
