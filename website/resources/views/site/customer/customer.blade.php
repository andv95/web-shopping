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
                                <li class="acc__menu-item  bg-acc__menu-item">
                                    <a href="/customer/edit" class="w-100 ">
                                        <span>Thông tin tài khoản</span>
                                    </a>
                                </li>
                                <li class="acc__menu-item  ">
                                    <a href="/customer/order" class="w-100 ">
                                        <span>Quản lý đơn hàng</span>
                                    </a>
                                </li>
                                <li class="acc__menu-item">
                                    <a href="/customer/address" class="w-100 ">
                                        <span>Địa chỉ</span>
                                    </a>
                                </li>
                                <li class="acc__menu-item">
                                    <a href="/customer/comment" class="w-100 ">
                                        <span>Nhận xét của tôi</span>
                                    </a>
                                </li>
                                <li class="acc__menu-item">
                                    <a href="/customer/wishlist" class="w-100 ">
                                        <span>Sản phẩm yêu thích</span>
                                    </a>
                                </li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-md-9 px-0">
                        <div class="cus__title">
                            <h4 class="my-0">Thông tin tài khoản</h4>
                        </div>
                        <div class="cus__content my-2 py-5 pl-4">
                            <form>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Họ và Tên</label>
                                    <div class="col-sm-5">
                                    <input type="text" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-5">
                                    <input type="email" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Số Điện Thoại</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control only-number" id="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Giới tính</label>
                                    <div class="col-sm-5">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="" value="option1" checked>
                                            <label class="form-check-label" for="">Nam</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="" value="option2">
                                            <label class="form-check-label" for="">
                                                Nữ
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Số Điện Thoại</label>
                                    <div class="col-sm-3">
                                        <input type="date" class="form-control only-number" id="">
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