<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- link boostrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- link css -->
    <link rel="stylesheet" href="{{asset('css/list-cart.css')}}">
    <link rel="stylesheet" href="{{asset('css/customer.css')}}">
    <link rel="stylesheet" href="{{asset('css/check-out.css')}}">
    <!-- link font-family -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karla">
    <link href="http://fonts.cdnfonts.com/css/josefin-slab" rel="stylesheet">
    <link href="//db.onlinewebfonts.com/c/34ac108190ba4a81af3a838a98c1942a?family=URW+Geometric+W15" rel="stylesheet"
          type="text/css"/>

    <style>

    </style>
</head>
<body class="body-checkout">

<div class="bander">
    <div class="wrap">
        <a href="#">
                <span class="logo  logo--left">
                    <img class="logo__image logo__image--small" src="{{asset('image/logo.png')}}" alt="">
                </span>
        </a>
    </div>
</div>

<div class="cart__content">
    <form action="">

        <div class="wrap-content d-inline-flex w-100 justify-content-center">
            <div class="list_cart-left">
                <div class="main">
                    @if(1==2)
                        <div class="main__header">
                            <div class="main__header__title red pd4">
                                <i class="fas fa-map-marker-alt"></i> Địa chỉ nhận hàng
                            </div>
                            <div class="main__header__content size-9">
                                <div class="main__header__user pd4">
                                    <div class="main__header__user-name text-center">
                                        <p class="text-bold my-0">
                                            Vũ Hoàng
                                        </p>
                                    </div>
                                    <div class="main__header__user-phone">
                                        <p class="text-bold my-0 text-nowrap">(+84) 919106595</p>
                                    </div>
                                </div>
                                <div class="main__header__address pd4 text-wrap">
                                    <p class="my-0 p-3 text-wrap">
                                        <span>Tập thể xà phòng nhà f2 phòng 204</span>,<span> Phường Thượng Đình</span>,<span> Quận Thanh Xuân</span>,<span> Hà Nội</span>
                                    </p>
                                </div>
                                <div class="main__header__task pd4">
                                    <div class="main__header__task-default">
                                        <p class="my-0 p-3 text-nowrap">Mặc Định</p>
                                    </div>
                                    <div class="main__header__task-change">
                                        <p class="text-nowrap my-0 p-3 up-text blue text-bold">Thay đổi</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main__items">
                            <div class="item__product bg-white">
                                <div class="wrap_item">
                                    <div class="header__item">
                                        <div class="left__item">
                                            <div class="img__item">
                                                <img src="{{asset('image/img1000.jpg')}}" alt="">
                                            </div>
                                            <div class="title__item">
                                                <div class="left-item__name">Nụ Trầm Hương Tự Nhiên Thơm Dịu Khói
                                                    Ngược
                                                </div>
                                                <div class="left-item__properti">Phân loại hàng: <span
                                                        class="properti-first">Red color</span>,
                                                    <span class="properti-second">Size L</span></div>
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
                                    <div class="footer__item">
                                        <div class="item__sender">From: Hoàng</div>
                                        <div class="item__price">
                                            <table class="table table-list-cart">
                                                <tbody>
                                                <tr>
                                                    <td class="title-check-out">Tổng tiền hàng</td>
                                                    <td class="text-right">₫ 36.000</td>

                                                </tr>
                                                <tr>
                                                    <td class="title-check-out">Phí ship</td>
                                                    <td class="text-right">₫ 12.000</td>

                                                </tr>
                                                <tr>
                                                    <td class="title-check-out text-bold">Tổng số tiền</td>
                                                    <td class="total__price--item text-right text-bold">₫ 48.000</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item__product bg-white">
                                <div class="wrap_item">
                                    <div class="header__item">
                                        <div class="left__item">
                                            <div class="img__item">
                                                <img src="{{asset('image/img1000.jpg')}}" alt="">
                                            </div>
                                            <div class="title__item">
                                                <div class="left-item__name">Nụ Trầm Hương Tự Nhiên Thơm Dịu Khói
                                                    Ngược
                                                </div>
                                                <div class="left-item__properti">Phân loại hàng: <span
                                                        class="properti-first">Red color</span>,
                                                    <span class="properti-second">Size L</span></div>
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
                                    <div class="footer__item">
                                        <div class="item__sender">From: Hoàng</div>
                                        <div class="item__price">
                                            <table class="table table-list-cart">
                                                <tbody>
                                                <tr>
                                                    <td class="title-check-out">Tổng tiền hàng</td>
                                                    <td class="text-right">₫ 36.000</td>
                                                </tr>
                                                <tr>
                                                    <td class="title-check-out">Phí ship</td>
                                                    <td class="text-right">₫ 12.000</td>
                                                </tr>
                                                <tr>
                                                    <td class="title-check-out text-bold">Tổng số tiền</td>
                                                    <td class="total__price--item text-right text-bold">₫ 48.000</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="main__header-not-user-not-user">
                            <div class="main__header__title-not-user red pd4">
                                <i class="fas fa-map-marker-alt"></i> Địa chỉ nhận hàng
                            </div>
                            <div class="main__header__content-not-user size-9">
                                <div class="main__header__user-not-user pd4">
                                    <div class="main__header__user-name-not-user text-center">
                                        <p class="js_name_checkout_not_user text-bold my-0">
                                            Vũ Hoàng
                                        </p>
                                    </div>
                                    <div class="main__header__user-phone-not-user text-center">
                                        <p class="js_phone_checkout_not_user text-bold my-0 text-nowrap">(+84) 919106595</p>
                                    </div>
                                </div>
                                <div class="main__header__address-not-user pd4 text-wrap">
                                    <p class="js_address_checkout_not_user my-0 p-3 text-wrap">
{{--                                        <span>Tập thể xà phòng nhà f2 phòng 204</span>,<span> Phường Thượng Đình</span>,<span> Quận Thanh Xuân</span>,<span> Hà Nội</span>--}}
                                    </p>
                                </div>
                                <div class="main__header__task-not-user pd4">
                                    <div class="main__header__task-default-not-user">
                                        <p class="my-0 p-3 text-nowrap">Mặc Định</p>
                                    </div>
                                    <div class="main__header__task-change-not-user">
                                        <p class="text-nowrap my-0 p-3 up-text blue text-bold">Thay đổi</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-not-user-wrap">
                            <div class="form-not-user-title">
                                <h5 class="text-bold up-text">Shipping Address</h5>
                            </div>
                            <div class="form-input-style">
                                <label id="label-name" class="form-input-style-label opacity-0" for="name">Name</label>
                                <input required id="name" class="block form-input-style-input w-100" type="text"
                                       name="name"
                                       placeholder="Name">
                            </div>
                            <p class="style-required my-2" id="js_required_input_name">Tên không được để trống</p>

                            <div class="mt-4 form-input-style">
                                <label id="label-phone" class="form-input-style-label opacity-0"
                                       for="phone">Phone</label>
                                <input required id="phone" name="phone" class="block w-100 form-input-style-input"
                                       type="number"
                                       placeholder="Phone">
                            </div>
                            <p class="style-required my-2" id="js_required_input_phone">SĐT không được để trống</p>

                            <div class="mt-4 form-input-style">
                                <label id="label-email" class="form-input-style-label opacity-0"
                                       for="email">Email</label>
                                <input required id="email" class="block form-input-style-input w-100" type="email"
                                       name="email"
                                       placeholder="Email">
                            </div>
                            <p class="style-required my-2" id="js_required_input_email">Email không được để trống</p>

                            <div class="mt-4 form-input-style">
                                <label id="label-address" class="form-input-style-label opacity-0"
                                       for="address">Address</label>
                                <input required id="address" name="address" class="block w-100 form-input-style-input"
                                       type="text"
                                       placeholder="Address">
                            </div>
                            <p class="style-required my-2" id="js_required_input_address">Địa chỉ không được để trống</p>

                            <div class="mt-4 form-input-style">
                                <label id="label-aparment" class="form-input-style-label opacity-0" for="aparment">Aparment,
                                    suite, etc (optional)</label>
                                <input required id="aparment" class="block form-input-style-input w-100" type="text"
                                       name="aparment"
                                       placeholder="Aparment, suite, etc (optional)">
                            </div>
                            <p class="style-required my-2" id="js_required_input_aparment">Aparment không được để trống</p>

                            <div class="text-center">
                                <button id="js_get_form_checkout" type="button" class="add__address up-text text-bold">I'll Be There</button>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
            <div class="list_cart-right bg-list-cart">
                <div class="sidebar ">
                    <div class="sidebar__content">
                        <div class="order-summary pt-3">
                            <div class="mb-3 row">
                                <label for="inputPassword"
                                       class="text-nowrap col-sm-3 col-form-label sidebar__content-mes-label">Lời
                                    nhắn:</label>
                                <div class="col-sm-9">
                                    <input placeholder="Lời nhắn cho người gửi ...." type="text"
                                           class="form-control sidebar__content-mes-input" id="inputPassword">
                                </div>
                            </div>
                            <div class="sidebar__content-subtotal d-flex justify-content-between">
                                <div class="sidebar__content-subtotal-title">
                                    <p>Subtotal</p>
                                </div>
                                <div class="sidebar__content-subtotal-price">
                                    <p>$94.90</p>
                                </div>
                            </div>
                            <div class="sidebar__content-ship d-flex justify-content-between">
                                <div class="sidebar__content-ship-title">
                                    <p>Shipping</p>
                                </div>
                                <div class="sidebar__content-ship-price">
                                    <p>$23.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="line"></div>
                        <div class="order-total d-flex justify-content-between py-4">
                            <div class="order-total-title">
                                <p class="up-text text-bold">Total</p>
                            </div>
                            <div class="order-total-price">
                                <p>USD <span class="text-bold"> $123.90</span></p>
                            </div>
                        </div>
                        <div class="continue-checkout">
                            <input type="submit" class="continue-checkout-btn up-text text-bold"
                                   value="Continue To Payment">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </form>

</div>


<!-- Js Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>


<!-- link fontawesome -->
<script src="https://kit.fontawesome.com/22ed4f26e7.js" crossorigin="anonymous"></script>

<script src="{{asset('js/login/login.js')}}"></script>

</body>
</html>
