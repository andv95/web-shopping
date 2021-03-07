@extends ('templates.master')

@section ('title', 'Trang tin')

@section ('content')
<div class="form-tiki">
    <div class="Name--user text-center mb3 mx-auto">
        <div class="header__name ">
            <h1>
                Chào User Name!
            </h1>
        </div>
        <div class="slogan-ran">
            <p>
                Everything you want to know before we get dirty
            </p>
        </div>
    </div>
    <!-- Body Wrapper -->
    <div class="customer-body mx-auto">
        <div class="customer-body-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <aside class="acc__menu px-2">
                            <ul class="acc__menu-style px-2 text-center">
                                <li class="acc__menu-item  ">
                                    <a href="/customer/edit" class="w-100 ">
                                        <span>INFO</span>
                                    </a>
                                </li>
                                <li class="acc__menu-item  ">
                                    <a href="/customer/order" class="w-100 ">
                                        <span>ORDERS MANAGEMENT</span>
                                    </a>
                                </li>
                                <li class="acc__menu-item">
                                    <a href="/customer/address" class="w-100 ">
                                        <span>ADDRESS</span>
                                    </a>
                                </li>
                                <li class="acc__menu-item bg-acc__menu-item">
                                    <a href="/customer/wishlist" class="w-100 ">
                                        <span>WISHLIST</span>
                                    </a>
                                </li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-md-9 px-0">
                        <div class="cus__content p-3">
                            <div class="wish-list-wrap">
                                <div class="wishlist-item  p-3">
                                    <div class="wishlist_item-info">
                                        <div class="wishlist_item-img">
                                            <img src="{{asset('image/img1000.jpg')}}" alt="">
                                        </div>
                                        <div class="wishlist_item-name align-self-center">
                                            <h5 class="up-text m-0 p-3">Egg Bacon Lovers</h5>
                                        </div>
                                    </div>
                                    <div class="whishlist_properti">
                                            <div class="whishlist_properti-item">
                                                <p>XL, Đen</p>
                                            </div>
                                            <div class="whishlist_properti-item">
                                                <p>x2</p>
                                            </div>
                                    </div>
                                    <div class="wishlist_item-act align-self-center">
                                        <div class="wishlist-add-to-bag">
                                            <a class="up-text" href="#">Add to bag</a>
                                        </div>
                                        <div class="wishlist-del text-center">
                                            <a class="up-text" href="">🗑️</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="line-opacity"></div>
                                <div class="wishlist-item  p-3">
                                    <div class="wishlist_item-info d-flex">
                                        <div class="wishlist_item-img">
                                            <img src="{{asset('image/img1000.jpg')}}" alt="">
                                        </div>
                                        <div class="wishlist_item-name align-self-center">
                                            <h5 class="up-text m-0 p-3">Egg Bacon Lovers</h5>
                                        </div>
                                    </div>
                                    <div class="whishlist_properti">
                                            <div class="whishlist_properti-item">
                                                <p>XL, Đen</p>
                                            </div>
                                            <div class="whishlist_properti-item">
                                                <p>x2</p>
                                            </div>
                                    </div>
                                    <div class="wishlist_item-act align-self-center">
                                        <div class="wishlist-add-to-bag">
                                            <a class="up-text" href="#">Add to bag</a>
                                        </div>
                                        <div class="wishlist-del text-center">
                                            <a class="up-text" href="">🗑️</a>
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
