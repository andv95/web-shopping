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
                                        <span>INFO</span>
                                    </a>
                                </li>
                                <li class="acc__menu-item py-2 pr-1  ">
                                    <a href="/customer/order" class="w-100 ">
                                        <span>ORDERS MANAGEMENT</span>
                                    </a>
                                </li>
                                <li class="acc__menu-item py-2 pr-1 bg-acc__menu-item">
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
                    <div class="col-md-9 ">
                        <div class="cus__title">
                            <h4 class="my-0">Thêm Địa Chỉ Người Dùng Mới</h4>
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