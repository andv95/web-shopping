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
                                <li class="acc__menu-item py-2 pr-1  ">
                                    <a href="/customer/order" class="w-100 ">
                                        <span>Quản lý đơn hàng</span>
                                    </a>
                                </li>
                                <li class="acc__menu-item py-2 pr-1 bg-acc__menu-item">
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
                            <h4 class="my-0">Địa Chỉ Người Dùng</h4>
                        </div>
                        <div class="cus__content mb-4 mt-2 py-5 px-4">
                            <div class="new-address w-100">
                                <a href="/customer/address/create" class="text--redirect d-flex justify-content-center col-12 bg-yellow py-3">
                                    <i class="fas fa-plus mx-2 py-1"></i>
                                    <p class="my-0 mx-2">Thêm địa chỉ mới</p>
                                </a>
                            </div>
                            <div class="cus__content-address">
                                <div class="cus__content-address-wrapper">
                                    <div class="cus__content-address p-3">
                                        <div class="d-flex justify-content-between">
                                            <div class="address-info">
                                                <div class="address-user-name d-flex">
                                                    <p class="my-0 size-90">TÊN NGƯỜI DÙNG</p>
                                                    <p class="my-0 size-60 py-1 color-green"> <i class="ml-3 far fa-check-circle"></i> Địa chỉ mặc định</p>
                                                </div>
                                                <p class="my-0 size-75"><span class="color-gray">Địa chỉ:</span> Hồng Phong, Vũ Thư, Thái Bình</p>
                                                <p class="my-0 size-75"><span class="color-gray">Số điện thoại:</span> 0352810651</p>
                                            </div>
                                            <div class="address-status d-flex">
                                                <div class="address-status-edit">
                                                    <a href="" class="a-decoration">
                                                        <p class="size-80 p-2">Chỉnh sửa</p>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="cus__content-address">
                                <div class="cus__content-address-wrapper">
                                    <div class="cus__content-address p-3">
                                        <div class="d-flex justify-content-between">
                                            <div class="address-info">
                                                <div class="address-user-name d-flex">
                                                    <p class="my-0 size-90">TÊN NGƯỜI DÙNG</p>
                                                </div>
                                                <p class="my-0 size-75"><span class="color-gray">Địa chỉ:</span> Hồng Phong, Vũ Thư, Thái Bình</p>
                                                <p class="my-0 size-75"><span class="color-gray">Số điện thoại:</span> 0352810651</p>
                                            </div>
                                            <div class="address-status d-flex">
                                                <div class="address-status-edit p-2">
                                                    <a class="a-decoration" href="">
                                                        <p class="my-0 size-80 py-1 px-2">Chỉnh sửa</p>
                                                    </a>
                                                </div>
                                                <div class="address-status-del p-2">
                                                    <a class="a-decoration" href="">
                                                        <p class="my-0 size-80 py-1 px-2 color-red">Xóa</p>
                                                    </a>
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