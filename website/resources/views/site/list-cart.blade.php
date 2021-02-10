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

        <div class="wrap-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6 col-md-12">
                        <div class="list_cart-left">
                            <div class="list_cart-title">
                                <h6 class="list_cart-title-text up-text text-bold">Address</h6>
                            </div>
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
                                                            <div class="left-item__name">Nụ Trầm Hương Tự Nhiên Thơm Dịu
                                                                Khói
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
                                                                <td class="total__price--item text-right text-bold">₫
                                                                    48.000
                                                                </td>
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
                                                            <div class="left-item__name">Nụ Trầm Hương Tự Nhiên Thơm Dịu
                                                                Khói
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
                                                                <td class="total__price--item text-right text-bold">₫
                                                                    48.000
                                                                </td>
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
                                        {{--                                        <div class="main__header__title-not-user red pd4">--}}
                                        {{--                                            <i class="fas fa-map-marker-alt"></i> Địa chỉ nhận hàng--}}
                                        {{--                                        </div>--}}
                                        <div class="main__header__content-not-user size-9">
                                            <div class="main__header__content-not-user-left pd4">
                                                <div class="main__header__user-not-user">
                                                    <div class="main__header__user-name-not-user mb-2">
                                                        <p class="js_name_checkout_not_user text-bold my-0">
                                                            Vũ Hoàng
                                                        </p>
                                                    </div>
                                                    <div class="main__header__user-phone-not-user mb-2">
                                                        <p class="js_phone_checkout_not_user text-bold my-0 text-nowrap">
                                                            (+84)
                                                            919106595</p>
                                                    </div>
                                                </div>
                                                <div class="main__header__address-not-user mb-2 text-wrap">
                                                    <p class="js_address_checkout_not_user my-0 text-bold text-wrap">
                                                        {{--                                        <span>Tập thể xà phòng nhà f2 phòng 204</span>,<span> Phường Thượng Đình</span>,<span> Quận Thanh Xuân</span>,<span> Hà Nội</span>--}}
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="main__header__task-not-user pd4">
                                                {{--                                                <div class="main__header__task-default-not-user">--}}
                                                {{--                                                    <p class="my-0 p-3 text-nowrap">Mặc Định</p>--}}
                                                {{--                                                </div>--}}
                                                <div class="main__header__task-change-not-user pd4">
                                                    <p class="text-nowrap my-0 up-text blue text-bold">Thay đổi</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-not-user-wrap">
                                        <div class="form-not-user-title">
                                            <h5 class="text-bold up-text">Shipping Address</h5>
                                            <div class="close-add-address-checkout btn">X</div>
                                        </div>
                                        <div class="form-input-style-wrap px-15">
                                            <div class="form-input-style">
                                                <label id="label-name" class="form-input-style-label opacity-0" for="name">Name</label>
                                                <input required id="name" class="block form-input-style-input w-100"
                                                       type="text"
                                                       name="name"
                                                       placeholder="Name">
                                            </div>
                                            <p class="style-required my-2" id="js_required_input_name">Tên không được để
                                                trống</p>
                                        </div>


                                        <div class="form-input-style-wrap px-15">
                                            <div class="mt-4 form-input-style">
                                                <label id="label-address" class="form-input-style-label opacity-0"
                                                       for="address">Address</label>
                                                <input required id="address" name="address"
                                                       class="block w-100 form-input-style-input"
                                                       type="text"
                                                       placeholder="Address">
                                            </div>
                                            <p class="style-required my-2" id="js_required_input_address">Địa chỉ không được
                                                để
                                                trống</p>
                                        </div>

                                        <div class="form-input-style-wrap ">
                                            <div class="container-fluid">
                                                <div class="row ">
                                                    <div class="col-xl-6 col-md-12">
                                                        <div class="form-input-style-wrap">
                                                            <div class="mt-4 form-input-style">
                                                                <label id="label-phone" class="form-input-style-label opacity-0"
                                                                       for="phone">Phone</label>
                                                                <input required id="phone" name="phone"
                                                                       class="block w-100 form-input-style-input"
                                                                       type="number"
                                                                       placeholder="Phone">
                                                            </div>
                                                            <p class="style-required my-2" id="js_required_input_phone">SĐT không được để
                                                                trống</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-md-12">
                                                        <div class="form-input-style-wrap">
                                                            <div class="mt-4 form-input-style">
                                                                <label id="label-email" class="form-input-style-label opacity-0"
                                                                       for="email">Email</label>
                                                                <input required id="email" class="block form-input-style-input w-100"
                                                                       type="email"
                                                                       name="email"
                                                                       placeholder="Email">
                                                            </div>
                                                            <p class="style-required my-2" id="js_required_input_email">Email không được để
                                                                trống</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>








                                        <div class="form-input-style-wrap px-15">
                                            <div class="mt-4 form-input-style">
                                                <label id="label-aparment" class="form-input-style-label opacity-0"
                                                       for="aparment">Aparment,
                                                    suite, etc (optional)</label>
                                                <input required id="aparment" class="block form-input-style-input w-100"
                                                       type="text"
                                                       name="aparment"
                                                       placeholder="Aparment, suite, etc (optional)">
                                            </div>
                                            <p class="style-required my-2" id="js_required_input_aparment">Aparment không
                                                được để
                                                trống</p>
                                        </div>


                                        <div class="check-and-submit">
                                            <div class="form-checkbox-checkout">
                                                <input class="checkbox-checkout-input" type="checkbox" id='check'>
                                                <label class="checkbox-checkout-label" for="check">Call -</label>
                                                <br>
                                            </div>
                                            <div class="form-checkbox-checkout">
                                                <input class="checkbox-checkout-input" type="checkbox" id='check-1'>
                                                <label class="checkbox-checkout-label" for="check-1">Text Before deliverinh</label>
                                                <br>
                                            </div>
                                            <button id="js_get_form_checkout" type="button"
                                                    class="add__address up-text text-bold">
                                                I'll Be There
                                            </button>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-12 bg-list-cart">
                        <div class="list_cart-right bg-list-cart">
                            <div class="list_cart-title">
                                <h6 class="list_cart-title-text up-text text-bold">Your Order</h6>
                            </div>
                            <div class="sidebar ">
                                <div class="sidebar__content">
                                    <div class="order-summary pt-3">
                                        <div class="checkout-items">
                                            <div class="checkout-items-wrap">
                                                <div class="checkout__item">
                                                    <div class="checkout__item-wrap">
                                                        <div class="checkout__item-content">
                                                            <div class="container-fluid">
                                                                <div class="row">
                                                                    <div class="col-xl-8 px-0">
                                                                        <div class="checkout__item_flex">
                                                                            <div class="checkout__item-content-img">
                                                                                <div class="checkout__item-content-img-wrap">
                                                                                    <a title="Sản phẩm 1" href="{{route('new.detail')}}">
                                                                                        <img src="{{asset('image/img1000.jpg')}}">
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="checkout__item_content-name">
                                                                                <div class="checkout__item_content-name-wrap">
                                                                                    <a href="#" title="Sản phẩm 1" class="checkout__item-link">
                                                                                        <div class="checkout__item-name">
                                                                                            <p title="Sản phẩm 1" class="checkout__item-name-text up-text text-bold">
                                                                                                Spider Man Under Wear
                                                                                            </p>
                                                                                        </div>
                                                                                        <div class="checkout__item-attribute">
                                                                                            <p class="checkout__item-attribute-text">
                                                                                                Xl, RED
                                                                                            </p>
                                                                                        </div>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-2">
                                                                        <div class="checkout__item-content-quantity">
                                                                            <p class="checkout__item-content-quantity-text">
                                                                                x1
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-2 pr-0">
                                                                        <div class="checkout__item-content-price text-right">
                                                                            <p class="up-text text-bold checkout__item-content-price-text">
                                                                                20.000
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="checkout__item-price">
                                                            <div class="checkout__item-price-wrap">
                                                                <div class="checkout__item-source">
                                                                    <p class="checkout__item-source-text">
                                                                        From: Hoàng Base
                                                                    </p>
                                                                </div>
                                                                <div class="checkout__item-table-price">
                                                                    <table class="checkout__item-table">
                                                                        <tr>
                                                                            <td class="checkout__item-table-left up-text text-bold">Subtotal</td>
                                                                            <td class="checkout__item-table-right text-bold text-right">20.000</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="checkout__item-table-left up-text text-bold">Shipping</td>
                                                                            <td class="checkout__item-table-right text-bold text-right">10.000</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="checkout__item-table-left up-text text-bold">Total</td>
                                                                            <td class="checkout__item-table-price-total text-bold text-right">30.000</td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="checkout__item">
                                                    <div class="checkout__item-wrap">
                                                        <div class="checkout__item-content">
                                                            <div class="container-fluid">
                                                                <div class="row">
                                                                    <div class="col-xl-8 px-0">
                                                                        <div class="checkout__item_flex">
                                                                            <div class="checkout__item-content-img">
                                                                                <div class="checkout__item-content-img-wrap">
                                                                                    <a title="Sản phẩm 1" href="{{route('new.detail')}}">
                                                                                        <img src="{{asset('image/img1000.jpg')}}">
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="checkout__item_content-name">
                                                                                <div class="checkout__item_content-name-wrap">
                                                                                    <a href="#" title="Sản phẩm 1" class="checkout__item-link">
                                                                                        <div class="checkout__item-name">
                                                                                            <p title="Sản phẩm 1" class="checkout__item-name-text up-text text-bold">
                                                                                                Spider Man Under Wear
                                                                                            </p>
                                                                                        </div>
                                                                                        <div class="checkout__item-attribute">
                                                                                            <p class="checkout__item-attribute-text">
                                                                                                Xl, RED
                                                                                            </p>
                                                                                        </div>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-2">
                                                                        <div class="checkout__item-content-quantity">
                                                                            <p class="checkout__item-content-quantity-text">
                                                                                x1
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-2 pr-0">
                                                                        <div class="checkout__item-content-price text-right">
                                                                            <p class="up-text text-bold checkout__item-content-price-text">
                                                                                20.000
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>                                                        <div class="checkout__item-content">
                                                            <div class="container-fluid">
                                                                <div class="row">
                                                                    <div class="col-xl-8 px-0">
                                                                        <div class="checkout__item_flex">
                                                                            <div class="checkout__item-content-img">
                                                                                <div class="checkout__item-content-img-wrap">
                                                                                    <a title="Sản phẩm 1" href="{{route('new.detail')}}">
                                                                                        <img src="{{asset('image/img1000.jpg')}}">
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="checkout__item_content-name">
                                                                                <div class="checkout__item_content-name-wrap">
                                                                                    <a href="#" title="Sản phẩm 1" class="checkout__item-link">
                                                                                        <div class="checkout__item-name">
                                                                                            <p title="Sản phẩm 1" class="checkout__item-name-text up-text text-bold">
                                                                                                Spider Man Under Wear
                                                                                            </p>
                                                                                        </div>
                                                                                        <div class="checkout__item-attribute">
                                                                                            <p class="checkout__item-attribute-text">
                                                                                                Xl, RED
                                                                                            </p>
                                                                                        </div>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-2">
                                                                        <div class="checkout__item-content-quantity">
                                                                            <p class="checkout__item-content-quantity-text">
                                                                                x1
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-2 pr-0">
                                                                        <div class="checkout__item-content-price text-right">
                                                                            <p class="up-text text-bold checkout__item-content-price-text">
                                                                                20.000
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="checkout__item-content">
                                                            <div class="container-fluid">
                                                                <div class="row">
                                                                    <div class="col-xl-8 px-0">
                                                                        <div class="checkout__item_flex">
                                                                            <div class="checkout__item-content-img">
                                                                                <div class="checkout__item-content-img-wrap">
                                                                                    <a title="Sản phẩm 1" href="{{route('new.detail')}}">
                                                                                        <img src="{{asset('image/img1000.jpg')}}">
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="checkout__item_content-name">
                                                                                <div class="checkout__item_content-name-wrap">
                                                                                    <a href="#" title="Sản phẩm 1" class="checkout__item-link">
                                                                                        <div class="checkout__item-name">
                                                                                            <p title="Sản phẩm 1" class="checkout__item-name-text up-text text-bold">
                                                                                                Spider Man Under Wear
                                                                                            </p>
                                                                                        </div>
                                                                                        <div class="checkout__item-attribute">
                                                                                            <p class="checkout__item-attribute-text">
                                                                                                Xl, RED
                                                                                            </p>
                                                                                        </div>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-2">
                                                                        <div class="checkout__item-content-quantity">
                                                                            <p class="checkout__item-content-quantity-text">
                                                                                x1
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-2 pr-0">
                                                                        <div class="checkout__item-content-price text-right">
                                                                            <p class="up-text text-bold checkout__item-content-price-text">
                                                                                20.000
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="checkout__item-price">
                                                            <div class="checkout__item-price-wrap">
                                                                <div class="checkout__item-source">
                                                                    <p class="checkout__item-source-text">
                                                                        From: Hoàng Base
                                                                    </p>
                                                                </div>
                                                                <div class="checkout__item-table-price">
                                                                    <table class="checkout__item-table">
                                                                        <tr>
                                                                            <td class="checkout__item-table-left up-text text-bold">Subtotal</td>
                                                                            <td class="checkout__item-table-right text-bold text-right">20.000</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="checkout__item-table-left up-text text-bold">Shipping</td>
                                                                            <td class="checkout__item-table-right text-bold text-right">10.000</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="checkout__item-table-left up-text text-bold">Total</td>
                                                                            <td class="checkout__item-table-price-total text-bold text-right">30.000</td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order-total">
                                        <table class="order-total-table">
                                            <tr>
                                                <td class="order-total-table-left up-text text-bold">Subtotal</td>
                                                <td class="order-total-table-right up-text text-bold text-right">60.000</td>
                                            </tr>
                                            <tr>
                                                <td class="order-total-table-left up-text text-bold">Shipping</td>
                                                <td class="order-total-table-right up-text text-bold text-right">60.000</td>
                                            </tr>
                                            <tr>
                                                <td class="order-total-table-left up-text text-bold">Total</td>
                                                <td class="order-total-table-total up-text text-bold text-right">120.000</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="continue-checkout">
                                        <input type="submit" class="continue-checkout-btn up-text text-bold"
                                               value="Continue To Payment">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </form>

</div>


<!-- Js Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
        integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>


<!-- link fontawesome -->
<script src="https://kit.fontawesome.com/22ed4f26e7.js" crossorigin="anonymous"></script>

<script src="{{asset('js/login/login.js')}}"></script>

</body>
</html>
