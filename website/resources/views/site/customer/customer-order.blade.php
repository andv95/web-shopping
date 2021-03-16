@extends ('templates.master')

@section ('title', 'Trang tin')

@section ('content')
<div class="form-tiki">

    <div class="Name--user text-center mb3 mx-auto">
        <div class="header__name ">
            <h1 class="up-text">
                Chào Darling!
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
                                <li class="acc__menu-item py-2 pr-1">
                                    <a href="/customer/edit" class="w-100 ">
                                        <span>INFO</span>
                                    </a>
                                </li>
                                <li class="acc__menu-item py-2 pr-1  bg-acc__menu-item">
                                    <a href="/customer/order" class="w-100 ">
                                        <span>ORDERS MANAGEMENT</span>
                                    </a>
                                </li>
                                <li class="acc__menu-item py-2 pr-1">
                                    <a href="/customer/address" class="w-100 ">
                                        <span>ADDRESS</span>
                                    </a>
                                </li>
                                <li class="acc__menu-item py-2 pr-1">
                                    <a href="/customer/wishlist" class="w-100 ">
                                        <span>WISHLIST</span>
                                    </a>
                                </li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-md-9">
                        <div class="cus__content mb-2 px-4">
                            <div class="cus__order--nav p-2 ">
                                <div class="cus__order--nav-item-1">
                                    <a href="#" class="a-decoration">
                                        ALL
                                    </a>
                                </div>
                                <div class="cus__order--nav-item">
                                    <a href="#" class="p-2 a-decoration">
                                        UNCONFIRMED
                                    </a>
                                </div>
                                <div class="cus__order--nav-item">
                                    <a href="#" class="p-2 a-decoration">
                                        CONFIRMED
                                    </a>
                                </div>
                                <div class="cus__order--nav-item">
                                    <a href="#" class="p-2 a-decoration">
                                        RECEIVED
                                    </a>
                                </div>
                                <div class="cus__order--nav-item">
                                    <a href="#" class="p-2 a-decoration">
                                        CANCEL
                                    </a>
                                </div>
                            </div>

                        </div>
                        <div class="cus__order--search ">
                            <form class="cus__order--search-form" action="">
                                <!-- <label for=""></label> -->
                                <input class="w-100 cus__order--search-input p-2" type="text" name="" id="" placeholder="Tìm kiếm theo tên sản phẩm">
                            </form>
                        </div>
                        <div class="cus__order-lists my-2">
                            <div class="cus__order_lists-wrap">
                                <div class="cus__order-item">
                                    <div class="cus__order_item-header d-flex justify-content-between p-2">
                                        <div class="pl-2 order__code text-bold">
                                            #001-001
                                        </div>
                                        <div class="order_item-status d-flex">
                                        @if(1==11)
                                            <div class="order_item_status-btn p-1">
                                                <a class="a-decoration" href="#">🌧️</a>
                                            </div>
                                            <span class="p-1"> | </span>
                                            <div class="p-1 order_item_status-info-confirm">
                                                Xác nhận
                                            </div>
                                            @elseif(1==2)
                                            <div class="order_item_status-btn p-1">
                                                <a class="a-decoration" href="#">🌱</a>
                                            </div>
                                            <span class="p-1"> | </span>
                                            <div class="p-1 order_item_status-info-unconfirm">
                                                Chưa Xác Nhận
                                            </div>
                                            @elseif(1==1)
                                            <div class="order_item_status-btn p-1">
                                                <a class="a-decoration" href="#">🌻</a>
                                            </div>
                                            <span class="p-1"> | </span>
                                            <div class="p-1 order_item_status-info-received">
                                                Đã nhận
                                            </div>
                                            @else
                                            <div class="order_item_status-btn p-1">
                                                <a class="a-decoration" href="#">🥀</a>
                                            </div>
                                            <span class="p-1"> | </span>
                                            <div class="p-1 order_item_status-info-cancel">
                                                Hủy
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="cus__order_item-content">
                                        <div class="header__item">
                                            <div class="left__item">
                                                <div class="img__item">
                                                    <img src="{{asset('image/img1000.jpg')}}" alt="">
                                                </div>
                                                <div class="title__item">
                                                    <div class="left-item__name">Nụ Trầm Hương Tự Nhiên Thơm Dịu Khói Ngược</div>
                                                    <div class="left-item__properti"><span class="properti-first">Red color</span>, <span class="properti-second">Size L</span></div>
                                                    <div class="left-item__quantity">x10</div>
                                                </div>
                                            </div>
                                            <div class="right__item">
                                                <div class="right__item-price">
                                                    <p>₫ 36.000</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="header__item d-flex justify-content-between">
                                            <div class="left__item d-flex">
                                                <div class="img__item">
                                                    <img src="{{asset('image/img1000.jpg')}}" alt="">
                                                </div>
                                                <div class="title__item">
                                                    <div class="left-item__name">Nụ Trầm Hương Tự Nhiên Thơm Dịu Khói Ngược</div>
                                                    <div class="left-item__properti"><span class="properti-first">Red color</span>, <span class="properti-second">Size L</span></div>
                                                    <div class="left-item__quantity">x10</div>
                                                </div>
                                            </div>
                                            <div class="right__item">
                                                <div class="right__item-price">
                                                    <p>₫ 36.000</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="line-opacity"></div>
                                        <div class="order__item--price p-2  d-flex justify-content-between">
                                            <div class="item-origin">
                                                <div class="order-date">Date: 12/1/2022</div>
                                                <div class="item__sende">From: Hoàng</div>
                                            </div>
                                            <div class="item__price">
                                                <table class="table table-list-cart">
                                                    <tbody>
                                                        <tr>
                                                            <td class="title-check-out">SUBTOTAL</td>
                                                            <td class="text-right">₫ 36.000</td>

                                                        </tr>
                                                        <tr>
                                                            <td class="title-check-out">SHIPPING</td>
                                                            <td class="text-right">₫ 12.000</td>

                                                        </tr>
                                                        <tr>
                                                            <td class="title-check-out">TOTAL</td>
                                                            <td class="text-right text-bold price___total" >₫ 48.000</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                       </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cus__order-lists my-2">
                            <div class="cus__order_lists-wrap ">
                                <div class="cus__order-item">
                                    <div class="cus__order_item-header d-flex justify-content-between p-2">
                                        <div class="pl-2 order__code text-bold">
                                            #001-001
                                        </div>
                                        <div class="order_item-status d-flex">
                                        @if(1==12)
                                            <div class="order_item_status-btn p-1">
                                                <a class="a-decoration" href="#">🌧️</a>
                                            </div>
                                            <span class="p-1"> | </span>
                                            <div class="p-1 order_item_status-info-confirm">
                                                Xác nhận
                                            </div>
                                            @elseif(1==2)
                                            <div class="order_item_status-btn p-1">
                                                <a class="a-decoration" href="#">🌱</a>
                                            </div>
                                            <span class="p-1"> | </span>
                                            <div class="p-1 order_item_status-info-unconfirm">
                                                Chưa Xác Nhận
                                            </div>
                                            @elseif(1==3)
                                            <div class="order_item_status-btn p-1">
                                                <a class="a-decoration" href="#">🌻</a>
                                            </div>
                                            <span class="p-1"> | </span>
                                            <div class="p-1 order_item_status-info-received">
                                                Đã nhận
                                            </div>
                                            @else
                                            <div class="order_item_status-btn p-1">
                                                <a class="a-decoration" href="#">🥀</a>
                                            </div>
                                            <span class="p-1"> | </span>
                                            <div class="p-1 order_item_status-info-cancel">
                                                Hủy
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="line-opacity"></div>
                                    <div class="cus__order_item-content">
                                        <div class="header__item d-flex justify-content-between">
                                            <div class="left__item d-flex">
                                                <div class="img__item">
                                                    <img src="{{asset('image/img1000.jpg')}}" alt="">
                                                </div>
                                                <div class="title__item">
                                                    <div class="left-item__name">Nụ Trầm Hương Tự Nhiên Thơm Dịu Khói Ngược</div>
                                                    <div class="left-item__properti">Phân loại hàng: <span class="properti-first">Red color</span>, <span class="properti-second">Size L</span></div>
                                                    <div class="left-item__quantity">x10</div>
                                                </div>
                                            </div>
                                            <div class="right__item">
                                                <div class="right__item-price">
                                                    <p>₫ 36.000</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="header__item d-flex justify-content-between">
                                            <div class="left__item d-flex">
                                                <div class="img__item">
                                                    <img src="{{asset('image/img1000.jpg')}}" alt="">
                                                </div>
                                                <div class="title__item">
                                                    <div class="left-item__name">Nụ Trầm Hương Tự Nhiên Thơm Dịu Khói Ngược</div>
                                                    <div class="left-item__properti">Phân loại hàng: <span class="properti-first">Red color</span>, <span class="properti-second">Size L</span></div>
                                                    <div class="left-item__quantity">x10</div>
                                                </div>
                                            </div>
                                            <div class="right__item">
                                                <div class="right__item-price">
                                                    <p>₫ 36.000</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="line"></div>
                                        <div class="order__item--price p-2  d-flex justify-content-between">
                                        <div class="item-origin">
                                            <div class="order-date">Date: 12/1/2022</div>
                                                <div class="item__sende">From: Hoàng</div>
                                            </div>
                                            <div class="item__price">
                                                <table class="table table-list-cart">
                                                    <tbody>
                                                        <tr>
                                                            <td class="title-check-out">SUBTOTAL</td>
                                                            <td class="text-right">₫ 36.000</td>

                                                        </tr>
                                                        <tr>
                                                            <td class="title-check-out">SHIPPING</td>
                                                            <td class="text-right">₫ 12.000</td>

                                                        </tr>
                                                        <tr>
                                                            <td class="text-bold title-check-out">TOTAL</td>
                                                            <td class="text-right text-bold price___total" >₫ 48.000</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cus__order-lists my-2">
                            <div class="cus__order_lists-wrap ">
                                <div class="cus__order-item">
                                    <div class="cus__order_item-header d-flex justify-content-between p-2">
                                        <div class="pl-2 order__code text-bold">
                                            #001-001
                                        </div>
                                        <div class="order_item-status d-flex">
                                            @if(1==1)
                                            <div class="order_item_status-btn p-1">
                                                <a class="a-decoration" href="#">🌧️</a>
                                            </div>
                                            <span class="p-1"> | </span>
                                            <div class="p-1 order_item_status-info-confirm">
                                                Xác nhận
                                            </div>
                                            @elseif(1==2)
                                            <div class="order_item_status-btn p-1">
                                                <a class="a-decoration" href="#">🌱</a>
                                            </div>
                                            <span class="p-1"> | </span>
                                            <div class="p-1 order_item_status-info-unconfirm">
                                                Chưa Xác Nhận
                                            </div>
                                            @elseif(1==3)
                                            <div class="order_item_status-btn p-1">
                                                <a class="a-decoration" href="#">🌻</a>
                                            </div>
                                            <span class="p-1"> | </span>
                                            <div class="p-1 order_item_status-info-received">
                                                Đã nhận
                                            </div>
                                            @else
                                            <div class="order_item_status-btn p-1">
                                                <a class="a-decoration" href="#">🥀</a>
                                            </div>
                                            <span class="p-1"> | </span>
                                            <div class="p-1 order_item_status-info-cancel">
                                                Hủy
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="line-opacity"></div>
                                    <div class="cus__order_item-content">
                                        <div class="header__item d-flex justify-content-between">
                                            <div class="left__item d-flex">
                                                <div class="img__item">
                                                    <img src="{{asset('image/img1000.jpg')}}" alt="">
                                                </div>
                                                <div class="title__item">
                                                    <div class="left-item__name">Nụ Trầm Hương Tự Nhiên Thơm Dịu Khói Ngược</div>
                                                    <div class="left-item__properti">Phân loại hàng: <span class="properti-first">Red color</span>, <span class="properti-second">Size L</span></div>
                                                    <div class="left-item__quantity">x10</div>
                                                </div>
                                            </div>
                                            <div class="right__item">
                                                <div class="right__item-price">
                                                    <p>₫ 36.000</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="header__item d-flex justify-content-between">
                                            <div class="left__item d-flex">
                                                <div class="img__item">
                                                    <img src="{{asset('image/img1000.jpg')}}" alt="">
                                                </div>
                                                <div class="title__item">
                                                    <div class="left-item__name">Nụ Trầm Hương Tự Nhiên Thơm Dịu Khói Ngược</div>
                                                    <div class="left-item__properti">Phân loại hàng: <span class="properti-first">Red color</span>, <span class="properti-second">Size L</span></div>
                                                    <div class="left-item__quantity">x10</div>
                                                </div>
                                            </div>
                                            <div class="right__item">
                                                <div class="right__item-price">
                                                    <p>₫ 36.000</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="line"></div>
                                        <div class="order__item--price p-2  d-flex justify-content-between">
                                        <div class="item-origin">
                                            <div class="order-date">Date: 12/1/2022</div>
                                                <div class="item__sende">From: Hoàng</div>
                                            </div>
                                            <div class="item__price">
                                                <table class="table table-list-cart">
                                                    <tbody>
                                                        <tr>
                                                            <td class="title-check-out">SUBTOTAL</td>
                                                            <td class="text-right">₫ 36.000</td>

                                                        </tr>
                                                        <tr>
                                                            <td class="title-check-out">SHIPPING</td>
                                                            <td class="text-right">₫ 12.000</td>

                                                        </tr>
                                                        <tr>
                                                            <td class="text-bold title-check-out">TOTAL</td>
                                                            <td class="text-right text-bold price___total" >₫ 48.000</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cus__order-lists my-2">
                            <div class="cus__order_lists-wrap ">
                                <div class="cus__order-item">
                                    <div class="cus__order_item-header d-flex justify-content-between p-2">
                                        <div class="pl-2 order__code text-bold">
                                            #001-001
                                        </div>
                                        <div class="order_item-status d-flex">
                                            @if(1==2)
                                            <div class="order_item_status-btn p-1">
                                                <a class="a-decoration" href="#">🌧️</a>
                                            </div>
                                            <span class="p-1"> | </span>
                                            <div class="p-1 order_item_status-info-confirm">
                                                Xác nhận
                                            </div>
                                            @elseif(1==1)
                                            <div class="order_item_status-btn p-1">
                                                <a class="a-decoration" href="#">🌱</a>
                                            </div>
                                            <span class="p-1"> | </span>
                                            <div class="p-1 order_item_status-info-unconfirm">
                                                Chưa Xác Nhận
                                            </div>
                                            @elseif(1==3)
                                            <div class="order_item_status-btn p-1">
                                                <a class="a-decoration" href="#">🌻</a>
                                            </div>
                                            <span class="p-1"> | </span>
                                            <div class="p-1 order_item_status-info-received">
                                                Đã nhận
                                            </div>
                                            @else
                                            <div class="order_item_status-btn p-1">
                                                <a class="a-decoration" href="#">🥀</a>
                                            </div>
                                            <span class="p-1"> | </span>
                                            <div class="p-1 order_item_status-info-cancel">
                                                Hủy
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="line-opacity"></div>
                                    <div class="cus__order_item-content">
                                        <div class="header__item d-flex justify-content-between">
                                            <div class="left__item d-flex">
                                                <div class="img__item">
                                                    <img src="{{asset('image/img1000.jpg')}}" alt="">
                                                </div>
                                                <div class="title__item">
                                                    <div class="left-item__name">Nụ Trầm Hương Tự Nhiên Thơm Dịu Khói Ngược</div>
                                                    <div class="left-item__properti">Phân loại hàng: <span class="properti-first">Red color</span>, <span class="properti-second">Size L</span></div>
                                                    <div class="left-item__quantity">x10</div>
                                                </div>
                                            </div>
                                            <div class="right__item">
                                                <div class="right__item-price">
                                                    <p>₫ 36.000</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="header__item d-flex justify-content-between">
                                            <div class="left__item d-flex">
                                                <div class="img__item">
                                                    <img src="{{asset('image/img1000.jpg')}}" alt="">
                                                </div>
                                                <div class="title__item">
                                                    <div class="left-item__name">Nụ Trầm Hương Tự Nhiên Thơm Dịu Khói Ngược</div>
                                                    <div class="left-item__properti">Phân loại hàng: <span class="properti-first">Red color</span>, <span class="properti-second">Size L</span></div>
                                                    <div class="left-item__quantity">x10</div>
                                                </div>
                                            </div>
                                            <div class="right__item">
                                                <div class="right__item-price">
                                                    <p>₫ 36.000</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="line"></div>
                                        <div class="order__item--price p-2  d-flex justify-content-between">
                                        <div class="item-origin">
                                            <div class="order-date">Date: 12/1/2022</div>
                                                <div class="item__sende">From: Hoàng</div>
                                            </div>
                                            <div class="item__price">
                                                <table class="table table-list-cart">
                                                    <tbody>
                                                        <tr>
                                                            <td class="title-check-out">SUBTOTAL</td>
                                                            <td class="text-right">₫ 36.000</td>

                                                        </tr>
                                                        <tr>
                                                            <td class="title-check-out">SHIPPING</td>
                                                            <td class="text-right">₫ 12.000</td>

                                                        </tr>
                                                        <tr>
                                                            <td class="text-bold title-check-out">TOTAL</td>
                                                            <td class="text-right text-bold price___total" >₫ 48.000</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
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
</div>



@stop
