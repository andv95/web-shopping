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
                                    <li class="acc__menu-item  bg-acc__menu-item">
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
                                    <li class="acc__menu-item">
                                        <a href="/customer/wishlist" class="w-100 ">
                                            <span>WISHLIST</span>
                                        </a>
                                    </li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-md-9">
                            <div class="cus__title">
                                <h4 class="my-0">Thông tin tài khoản</h4>
                            </div>
                            <div class="cus__content py-5 pl-4">
                                <form>
                                    <div class="user-form-info-wrap">
                                        <div class="user-form-info">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-3 col-form-label">Name</label>
                                                <div class="col-md-12 col-xl-9">
                                                    <input type="text" class="form-control" id="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="" class="col-sm-3 col-form-label">Email</label>
                                                <div class="col-md-12 col-xl-9">
                                                    <input type="email" class="form-control" id="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="" class="col-sm-3 col-form-label">Password</label>
                                                <div class="col-md-12 col-xl-9">
                                                    <input type="text" class="form-control only-number" id="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="" class="col-sm-3 col-form-label">Number Lucky</label>
                                                <div class="col-md-12 col-xl-9">
                                                    <input type="number" class="form-control only-number" id="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="" class="col-sm-3 col-form-label">HomeTown</label>
                                                <div class="col-md-12 col-xl-9">
                                                    <input type="number" class="form-control only-number" id="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="user-avatar-info">
                                            <div class="file-upload">

                                                <div class="image-upload-wrap">
                                                    <input class="file-upload-input" type='file'
                                                           onchange="readURL(this);" accept="image/*"/>
                                                    <img class="w-100" src="{{asset('image/user.jpg')}}">
                                                </div>

                                                <div class="file-upload-content">
                                                    <img class="file-upload-image" src="#" alt="your image"/>
                                                    <div class="image-title-wrap">
                                                        <button type="button" onclick="removeUpload()"
                                                                class="remove-image">
                                                                Remove <span class="image-title"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <button class="mt-2 file-upload-btn" type="button"
                                                        onclick="$('.file-upload-input').trigger('click')">Add Image
                                                </button>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group text-center py-3">
                                        <input class="py-2 px-3 cus__content-submit" type="submit" name=""
                                               value="Update">
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

@section('js-custom')
    <script src="{{asset('js/customer/js-customer.js')}}"></script>
@stop
