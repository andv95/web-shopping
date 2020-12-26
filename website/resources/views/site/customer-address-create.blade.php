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
                            <h4>Thêm Địa Chỉ Người Dùng Mới</h4>
                        </div>
                        <div class="cus__content mb-4 mt-2 py-5 px-4">
                            <form>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Họ và Tên</label>
                                    <div class="col-sm-5">
                                    <input type="text" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Công ty:</label>
                                    <div class="col-sm-5">
                                    <input type="email" class="form-control" id="" placeholder="Nhập công ty">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Số Điện Thoại</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control only-number" id="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Thành phố:</label>
                                    <div class="col-sm-5">
                                        <select name="" id="" class="w-100 py-2">
                                            <option value="">Hà Nội</option>
                                            <option value="">Đà Nẵng</option>
                                            <option value="">Tp.HCM</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Quận Huyện:</label>
                                    <div class="col-sm-5">
                                        <select name="" id="" class="w-100 py-2">
                                            <option value="">Hồ Tây</option>
                                            <option value="">Đà Nẵng</option>
                                            <option value="">Tp.HCM</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Phường/Xã:</label>
                                    <div class="col-sm-5">
                                        <select name="" id="" class="w-100 py-2">
                                            <option value="">Hai Bà Trưng</option>
                                            <option value="">Hà Đông</option>
                                            <option value="">Ba Đình</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Loại công ty</label>
                                    <div class="col-sm-5">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="" value="option1" checked>
                                            <label class="form-check-label" for="">Nhà riêng/Chung cư</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="" value="option2">
                                            <label class="form-check-label" for="">
                                                Cơ quan/Công ty
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group text-center py-3">
                                    <input class="py-2 px-3 cus__content-submit" type="submit" name="" value="Cập Nhật">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    

@stop