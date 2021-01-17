@extends ('templates.master')

@section ('title', 'Trang tin')

@section ('content')
<div class="form-tiki">
    <div class="Name--user text-center mb3">
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
    <div class="customer-body">
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
                                <li class="acc__menu-item py-2 pr-1  ">
                                    <a href="/customer/order" class="w-100 ">
                                        <span>Quản lý đơn hàng</span>
                                    </a>
                                </li>
                                <li class="acc__menu-item py-2 pr-1 ">
                                    <a href="/customer/address" class="w-100 ">
                                        <span>Địa chỉ</span>
                                    </a>
                                </li>
                                <li class="acc__menu-item py-2 pr-1 bg-acc__menu-item">
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
                            <h4 class="my-0">Đánh Giá Người Dùng</h4>
                        </div>
                        <div class="cus__content mb-4 mt-2 py-5 pl-4">
                            @if(1==1)
                                <div class="text-center p-5 m-5">
                                    <img class="w-30 mb-3" src="{{asset('image/image-product.jpg')}}" alt="">
                                    <p>Bạn chưa có đơn hàng nào</p>
                                    <br>
                                    <a class="color-black px-3 py-2" href="#">Quay lại trang chủ</a>
                                </div>
                            @else
                                <div class="cus__order">
                                    
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    

@stop