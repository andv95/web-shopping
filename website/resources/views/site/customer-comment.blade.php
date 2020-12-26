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
                                <li class="acc__menu-item py-2 pr-1 ">
                                    <a href="/customer/address" class="w-100 pr-5 py-3">
                                        <i class="acc__menu-item-icon fas fa-map-marker-alt pl-3 pr-2"></i>
                                        <span>Địa chỉ</span>
                                    </a>
                                </li>
                                <li class="acc__menu-item py-2 pr-1 bg-acc__menu-item">
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
                            <h4>Đánh Giá Người Dùng</h4>
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