<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- link boostrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css" rel="stylesheet"/>
    <!-- link css -->
    <link rel="stylesheet" href="{{asset('css/list-cart.css')}}">
    <link rel="stylesheet" href="{{asset('css/customer.css')}}">
    <link rel="stylesheet" href="{{asset('css/check-out.css')}}">
    <!-- link owlcarousel -->
    <link rel="stylesheet" href="{{asset('dist/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('dist/assets/owl.theme.default.min.css')}}">
    <!-- link font-family -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karla">
    <link href="http://fonts.cdnfonts.com/css/josefin-slab" rel="stylesheet">
    <link href="//db.onlinewebfonts.com/c/34ac108190ba4a81af3a838a98c1942a?family=URW+Geometric+W15" rel="stylesheet" type="text/css"/>
    <!-- link toastr -->
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css"> 
    
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
        <div class="wrap-content d-inline-flex w-100 justify-content-center">
            <div class="list_cart-left">
                <div class="main">
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
                                    <span >Tập thể xà phòng nhà f2 phòng 204</span>,<span > Phường Thượng Đình</span>,<span > Quận Thanh Xuân</span>,<span > Hà Nội</span>
                                </p>
                            </div>
                            <div class="main__header__task pd4 justify-content-between">
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
                                <div class="header__item d-flex justify-content-between">
                                    <div class="left__item d-flex">
                                        <div class="img__item">
                                            <img src="{{asset('image/img1000.jpg')}}" alt="">
                                        </div>
                                        <div class="title__item">
                                            <div class="left-item__name">Nụ Trầm Hương Tự Nhiên Thơm Dịu Khói Ngược</div>
                                            <div class="left-item__properti">Phân loại hàng: <span class="properti-first">Red color</span>, <span class="properti-second">Size L</span></div>
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
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="item__sender">From: Hoàng</div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="item__price">
                                                    <table class="table table-bordered">
                                                        <tbody>
                                                            <tr>
                                                                <td scope="text-center">Tổng tiền hàng</td>
                                                                <td class="text-right">₫ 36.000</td>
                                                                
                                                            </tr>
                                                            <tr>
                                                                <td scope="text-center">Phí ship</td>
                                                                <td class="text-right">₫ 12.000</td>
                                                                
                                                            </tr>
                                                            <tr>
                                                                <td class="total__price--item" scope="text-center">Tổng số tiền</td>
                                                                <td class="total__price--item text-right" >₫ 48.000</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>                                        
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item__product bg-white">
                            <div class="wrap_item">
                                <div class="header__item d-flex justify-content-between">
                                    <div class="left__item d-flex">
                                        <div class="img__item">
                                            <img src="{{asset('image/img1000.jpg')}}" alt="">
                                        </div>
                                        <div class="title__item">
                                            <div class="left-item__name">Nụ Trầm Hương Tự Nhiên Thơm Dịu Khói Ngược</div>
                                            <div class="left-item__properti">Phân loại hàng: <span class="properti-first">Red color</span>, <span class="properti-second">Size L</span></div>
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
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="item__sender">From: Hoàng</div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="item__price">
                                                    <table class="table table-bordered">
                                                        <tbody>
                                                            <tr>
                                                                <td scope="text-center">Tổng tiền hàng</td>
                                                                <td class="text-right">₫ 36.000</td>
                                                                
                                                            </tr>
                                                            <tr>
                                                                <td scope="text-center">Phí ship</td>
                                                                <td class="text-right">₫ 12.000</td>
                                                                
                                                            </tr>
                                                            <tr>
                                                                <td class="text-bold" scope="text-center">Tổng số tiền</td>
                                                                <td class="text-right text-bold" >₫ 48.000</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>                                        
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
           <div class="list_cart-right bg-pink w-30">
                <div class="sidebar ">
                    <div class="sidebar__content">
                        <form action="">
                            <div class="order-summary pt-3">
                                <div class="mb-3 row">
                                    <label for="inputPassword" class="text-nowrap col-sm-3 col-form-label sidebar__content-mes-label">Lời nhắn:</label>
                                    <div class="col-sm-9">
                                        <input placeholder="Lời nhắn cho người gửi ...." type="text" class="form-control sidebar__content-mes-input" id="inputPassword">
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
                            <div class="continue-checkout text-right">
                                <a href="#" class="continue-checkout-btn up-text text-bold">
                                    Continue To Payment
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
           </div>
            
        </div>
    </div>




    <!-- <div class="cart__content">
        <div class="wrap">
            <div class="main">
                <div class="main__header">
                    <nav aria-label="Thẻ điều hướng">
                        <span class="mx-2 breadcrumd__item" >Thông tin</span>  > <span class="mx-2 breadcrumd__item" >Vận chuyển</span>  > <span class="mx-2 breadcrumd__item" >Thanh toán</span>  
                    </nav>
                </div>
                <div class="main__content">
                    <div class="step">
                        <form class="edit-checkout" action="">
                            <div class="step__sections">
                                <div class="section section--shipping-address">
                                    <div class="section__header">
                                        <h2 class="section__title">
                                            Địa chỉ vận chuyển
                                        </h2>
                                    </div>
                                    <div class="section__content">
                                        <div class="fieldset">
                                            <div class="field field--required field--half">
                                                <div class="field__input-wrapper">
                                                    <label id="checkout-name" class="field__label field__label--visible opacity-0" for="">Họ và Tên</label>
                                                    <input id="checkout-name-input" class="field__input" placeholder="Họ và tên" type="text">
                                                </div>
                                                <div class="field__input-wrapper">
                                                    <select class="field__input" name="" id="">
                                                        <option value="">Địa chỉ</option>
                                                        <option value="">Địa chỉ 2</option>
                                                        <option value="">Địa chỉ 3</option>
                                                        <option id="address-other" value="">Địa chỉ khác</option>
                                                    </select>
                                                </div>
                                                <div id="inputAadressOther" class="field__input-wrapper">
                                                    <label id="checkout-address" class="field__label field__label--visible opacity-0" for="">Địa chỉ khác</label>
                                                    <input id="checkout-address-input" class="field__input" placeholder="Địa chỉ khác" type="text">
                                                </div>
                                                <div class="field__input-wrapper">
                                                    <label id="checkout-phone" class="field__label field__label--visible opacity-0" for="">Số điện thoại</label>
                                                    <input id="checkout-phone-input" class="field__input" placeholder="Số điện thoại" type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="step__footer">
                                <button type="submit" class="step__footer__continue-btn btn">
                                    <span>Chuyển đến phần vận chuyển</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="main__footer"></div>
            </div>
            <div class="sidebar">
                <div class="sidebar__content">
                    <div class="order-summary order-summary--is-collapsed">
                        <div class="order-summary__sections">
                            <div class="order-summary__section order-summary__section--product-list">
                                <div class="order-summary__section__content">
                                    <div class="line-items d-flex">
                                        <div class="item__img">
                                            <div class="item__img-wrapper">
                                                <img src="{{asset('image/img1000.jpg')}}" alt="">
                                            </div>
                                            <span class="item__img__quantity">2</span>
                                        </div>
                                        <div class="item__name-product d-flex justify-content-between w-100">
                                            <div class="item__name__product">
                                                <div class="item__name-product-main">Original Coffee Scrub</div>
                                                <div class="item__name-product-extra">Original Coffee Scrub</div>
                                            </div>
                                            <div class="item__price">
                                                <span>$33.90</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="line-items d-flex">
                                        <div class="item__img">
                                            <div class="item__img-wrapper">
                                                <img src="{{asset('image/img1000.jpg')}}" alt="">
                                            </div>
                                            <span class="item__img__quantity">2</span>
                                        </div>
                                        <div class="item__name-product d-flex justify-content-between w-100">
                                            <div class="item__name__product">
                                                <div class="item__name-product-main">Original Coffee Scrub</div>
                                                <div class="item__name-product-extra">Original Coffee Scrub</div>
                                            </div>
                                            <div class="item__price">
                                                <span>$33.90</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="line"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->





    <!-- Js Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js'></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <!-- Test rating star -->
    <script type="text/javascript" src="{{asset('js/jstars.js')}}"></script>

    <!-- link fontawesome -->
    <script src="https://kit.fontawesome.com/22ed4f26e7.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <!-- link js owlcaraousel -->
    <script src="{{asset('dist/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/classie.js')}}"></script>
    <!-- link CDN Toastr -->
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    <!-- Link JqZoom -->
    <script src="{{ asset('js/jqzoom.js') }}"></script>
    <script src="" type="text/javascript">
        var $input = $(".field__input").val();
        $(".field__input").keyup(function(){
            alert('áda');
        });
    
         
    </script>

</body>
</html>