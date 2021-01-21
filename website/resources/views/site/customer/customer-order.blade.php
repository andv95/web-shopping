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
                                <li class="acc__menu-item py-2 pr-1">
                                    <a href="/customer/edit" class="w-100 ">
                                        <span>Thông tin tài khoản</span>
                                    </a>
                                </li>
                                <li class="acc__menu-item py-2 pr-1  bg-acc__menu-item">
                                    <a href="/customer/order" class="w-100 ">
                                        <span>Quản lý đơn hàng</span>
                                    </a>
                                </li>
                                <li class="acc__menu-item py-2 pr-1">
                                    <a href="/customer/address" class="w-100 ">
                                        <span>Địa chỉ</span>
                                    </a>
                                </li>
                                <li class="acc__menu-item py-2 pr-1">
                                    <a href="/customer/comment" class="w-100 ">
                                        <span>Nhận xét của tôi</span>
                                    </a>
                                </li>
                                <li class="acc__menu-item py-2 pr-1">
                                    <a href="/customer/wishlist" class="w-100 ">
                                        <span>Sản phẩm yêu thích</span>
                                    </a>
                                </li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-md-9">
                        <div class="cus__title">
                            <h4 class="my-0">Danh sách đơn hàng</h4>
                        </div>
                        <div class="cus__content mb-4  px-4 mt-2">
                            <div class="cus__order--nav d-flex justify-content-between p-2 ">
                                <div class="cus__order--nav-item-1">
                                    <a href="#" class="p-2 a-decoration">
                                        Tất cả
                                    </a>
                                </div>
                                <div class="cus__order--nav-item">
                                    <a href="#" class="p-2 a-decoration">
                                        Chờ xác nhận
                                    </a>
                                </div>
                                <div class="cus__order--nav-item">
                                    <a href="#" class="p-2 a-decoration">
                                        Đã xác nhận
                                    </a>
                                </div>
                                <div class="cus__order--nav-item">
                                    <a href="#" class="p-2 a-decoration">
                                        Đã Hủy
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
                                            <div class="order_item_status-btn p-1">
                                                <a class="a-decoration" href="#">Hủy đơn</a>
                                            </div>
                                            <span class="p-1"> | </span>
                                            <div class="p-1 order_item_status-info">
                                                Chờ xác nhận
                                            </div>
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
                                                <div class="btn-delete__list-cart text-right">
                                                    <a href="#">x</a>
                                                </div>
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
                                                <div class="btn-delete__list-cart text-right">
                                                    <a href="#">x</a>
                                                </div>
                                                <div class="right__item-price">
                                                    <p>₫ 36.000</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="line"></div>
                                        <div class="order__item--price p-2">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="order-date">12-1-2022</div>
                                                        <div class="item__sende text-bold">SenDer: Hoàng</div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="item__price">
                                                            <table class="table table-bordered">
                                                                <tbody>
                                                                    <tr>
                                                                        <td scope="text-center">Tổng tiền hàng</td>
                                                                        <td class="text-right">₫ 36.000</td>
                                                                        
                                                                    </tr>
                                                                    <tr>
                                                                        <td scope="text-center">Phí ship</td>
                                                                        <td class="text-right">₫ 12.000</td>
                                                                        
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-bold" scope="text-center">Tổng số tiền</td>
                                                                        <td class="text-right text-bold" >₫ 48.000</td>
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
                        <div class="cus__order-lists my-2">
                            <div class="cus__order_lists-wrap ">
                                <div class="cus__order-item">
                                    <div class="cus__order_item-header d-flex justify-content-between p-2">
                                        <div class="pl-2 order__code text-bold">
                                            #001-001
                                        </div>
                                        <div class="order_item-status d-flex">
                                            <div class="order_item_status-btn p-1">
                                                <a class="a-decoration" href="#">Hủy đơn</a>
                                            </div>
                                            <span class="p-1"> | </span>
                                            <div class="p-1 order_item_status-info">
                                                Chờ xác nhận
                                            </div>
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
                                                <div class="btn-delete__list-cart text-right">
                                                    <a href="#">x</a>
                                                </div>
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
                                                <div class="btn-delete__list-cart text-right">
                                                    <a href="#">x</a>
                                                </div>
                                                <div class="right__item-price">
                                                    <p>₫ 36.000</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="line"></div>
                                        <div class="order__item--price p-2">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="order-date">12-1-2022</div>
                                                        <div class="item__sende text-bold">SenDer: Hoàng</div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="item__price">
                                                            <table class="table table-bordered">
                                                                <tbody>
                                                                    <tr>
                                                                        <td scope="text-center">Tổng tiền hàng</td>
                                                                        <td class="text-right">₫ 36.000</td>
                                                                        
                                                                    </tr>
                                                                    <tr>
                                                                        <td scope="text-center">Phí ship</td>
                                                                        <td class="text-right">₫ 12.000</td>
                                                                        
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-bold" scope="text-center">Tổng số tiền</td>
                                                                        <td class="text-right text-bold" >₫ 48.000</td>
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
        </div>
    </div>
</div>

    

@stop