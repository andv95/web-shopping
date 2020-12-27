@extends ('templates.master')

@section ('title', 'Trang tin')

@section ('content')
<div class="form-tiki">
    <!-- Breadcrmd -->
    <div>
        <nav aria-label="breadcrumb" class="breadcrumb mx-auto">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Library</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data</li>
            </ol>
        </nav>
    </div>
    <!-- Body Wrapper -->
    <div class="customer-body">
        <div class="customer-body-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <aside class="acc__menu px-2">
                            <div class="acc__menu-user px-2 mb-2">
                                <div class="d-flex">
                                    <img class="img-user px-0 mr-3" src="{{asset('image/avatar.png')}}" alt="">
                                    <div class="acc_menu-user-info">
                                        <div>
                                            Tài khoản của
                                        </div> 
                                        <strong>User Name</strong>
                                    </div>
                                </div>
                            </div>
                            <ul class="acc__menu-style px-2 mt-2">
                                <li class="acc__menu-item py-2 pr-1">
                                    <a href="/customer/edit" class="w-100 pr-5 py-3">
                                        <i class="acc__menu-item-icon fas fa-user pl-3 pr-2"></i>
                                        <span>Thông tin tài khoản</span>
                                    </a>
                                </li>
                                <li class="acc__menu-item py-2 pr-1  ">
                                    <a href="/customer/order" class="w-100 pr-5 py-3">
                                        <i class="acc__menu-item-icon fas fa-clipboard-list pl-3 pr-2"></i>
                                        <span>Quản lý đơn hàng</span>
                                    </a>
                                </li>
                                <li class="acc__menu-item py-2 pr-1 bg-acc__menu-item">
                                    <a href="/customer/address" class="w-100 pr-5 py-3">
                                        <i class="acc__menu-item-icon fas fa-map-marker-alt pl-3 pr-2"></i>
                                        <span>Địa chỉ</span>
                                    </a>
                                </li>
                                <li class="acc__menu-item py-2 pr-1">
                                    <a href="/customer/comment" class="w-100 pr-5 py-3">
                                        <i class="acc__menu-item-icon fas fa-star-half-alt pl-3 pr-2"></i>
                                        <span>Nhận xét của tôi</span>
                                    </a>
                                </li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-md-9 bg-pink-1">
                        <div class="cus__title my-2 py-2">
                            <h4>Địa Chỉ Người Dùng</h4>
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