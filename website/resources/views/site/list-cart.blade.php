@extends('templates.master')

@section('title', 'Trang tin')

@section('content')
<!-- <section class="shopping-cart spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12" id="list--cart">
                <div class="cart-table">
                    <table>
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th class="p-name">Product Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(Session::has("Cart") != null)
                            @foreach(Session::get("Cart")->products as $item)
                            <tr>
                                <td class="cart-pic first-row"><img src="" alt=""></td>
                                <td class="cart-title first-row">
                                    <h5>{{$item["productInfo"]->name}}</h5>
                                </td>
                                <td class="p-price first-row">${{number_format($item['productInfo']->price)}}</td>
                                <td class="qua-col first-row">
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <input require  type="text" value="{{$item['quanty']}}">
                                        </div>
                                    </div>
                                </td>
                                <td class="total-price first-row">$ {{$item['price']}}</td>
                                <td class="close-td first-row"><i class="fas fa-times save--item-list-cart" onclick="saveItemListCart({{$item['productInfo']->id}});"></i></td>
                                <td class="close-td first-row"><i class="far fa-trash-alt close--item-list-cart" data-id="{{$item['productInfo']->id}}"></i></td>
                            </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-4 offset-lg-8">
                        <div class="proceed-checkout">
                            @if(Session::get("Cart") != null)
                            <ul>
                                <li class="subtotal">Quanty <span>{{number_format(Session::get("Cart")->totalQuanty)}}</span></li>
                                <li class="cart-total">Total <span>$ {{number_format(Session::get("Cart")->totalPrice)}}</span></li>
                            </ul>
                            <a href="#" class="proceed-btn">PROCEED TO CHECK OUT</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<div class="list--cart-pc mx-auto">
    <div class="list--cart-wrapper">
        <div class="container-fluid">
            <div class="row w-100">
                <div class="col-7">
                    <div class="list--cart-info-user">
                        <div class="list--cart-info-user-breacrumd my-3 py-3">
                            Thông tin > Vận chuyển > Thanh toán
                        </div>
                        <div class="list--cart-info-user-content">
                            <form action="/action_page.php">
                                <div class="list--cart-info-user-email">
                                    <div class="list--cart-info-user-title d-flex justify-content-between"> 
                                        <h5>THÔNG TIN LIÊN HỆ</h5>
                                        <p>Bạn chưa có tài khoản? <a href="#"> Đăng nhập</a></p>
                                    </div>
                                    <input require class="w-100 field__input py-3 my-2 px-2" type="text" placeholder="Email" >
                                </div>
                                <div class="list--cart-info-user-address">
                                    <div class="list--cart-info-user-title"> 
                                        <h5>ĐỊA CHỈ LIÊN HỆ</h5>
                                    </div>
                                    <input require class="w-100 field__input py-3 my-2 px-2" type="text" placeholder="Họ và Tên" >
                                    <select class="w-100 field__input py-3 my-2 px-2" name="" id="">
                                        <option class="field___option p-2" value="Địa chỉ mặc định">Địa chỉ mặc định</option>
                                        <option class="field___option p-2" value="Địa chỉ thứ 2">Địa chỉ thứ 2</option>
                                    </select>
                                    <input require class="w-100 field__input py-3 my-2 px-2" type="text" placeholder="Địa chỉ" >
                                    <input require class="w-100 field__input py-3 my-2 px-2" type="text" placeholder="SĐT" >
                                    <textarea class="w-100 field__input py-3 my-2 px-2" rows="4" placeholder="Ghi chú thêm"></textarea>
                                </div>
                                <div class="list--cart-info-user-submit text-right">
                                    <input method="POST" require class="py-3 my-2 px-4" type="submit" value="CHUYỂN ĐẾN PHẦN VẬN CHUYỂN">
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
                <div class="col-5 bg-pink py-3">
                    <div class="list--cart-product">
                        <div class="list--cart-product--list">
                            <div class="overflow-auto">
                                <div class="list--cart--item my-2">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="list--cart--item-img">
                                                    <div class="list--cart--item-img-wrapper">
                                                        <img class="w-100" src="{{asset('image/image-product.jpg')}}" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-7 px-1">
                                                <div class="list--cart--item-name py-2 ">
                                                    <p class="name-main my-0 py-1">Tên chính sản phẩm</p>
                                                    <p class="name-extra my-0">Tên phụ sản phẩm</p>
                                                </div>
                                            </div>
                                            <div class="col-2 px-0 text-center">
                                                <div class="list--cart--item-price py-2 my-1">
                                                    $ 19.32
                                                </div>    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list--cart--item my-2">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="list--cart--item-img">
                                                    <div class="list--cart--item-img-wrapper">
                                                        <img class="w-100" src="{{asset('image/image-product.jpg')}}" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-7">
                                                <div class="list--cart--item-name py-2">
                                                    <p class="name-main my-0 py-1">Tên chính sản phẩm</p>
                                                    <p class="name-extra my-0">Tên phụ sản phẩm</p>
                                                </div>
                                            </div>
                                            <div class="col-2 px-0 text-center">
                                                <div class="list--cart--item-price py-2 my-1">
                                                    $ 19.32
                                                </div>    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list--cart--item my-2">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="list--cart--item-img">
                                                    <div class="list--cart--item-img-wrapper">
                                                        <img class="w-100" src="{{asset('image/image-product.jpg')}}" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-7">
                                                <div class="list--cart--item-name py-2">
                                                    <p class="name-main my-0 py-1">Tên chính sản phẩm</p>
                                                    <p class="name-extra my-0">Tên phụ sản phẩm</p>
                                                </div>
                                            </div>
                                            <div class="col-2 px-0 text-center">
                                                <div class="list--cart--item-price py-2 my-1">
                                                    $ 19.32
                                                </div>    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="line"></div>
                    </div>
                    <div class="list--cart-total">
                        <div class="container-fluid">
                            <div class="d-flex justify-content-between pt-2 mt-2">
                                <p class="subtotal my-0">Tổng phụ</p>
                                <p class="price-subtotal my-0">$ 13.32</p>
                            </div>
                            <div class="d-flex justify-content-between pb-2 mb-2 shipping-fee-wrapper">
                                <p class="shipping-fee my-0">Phí vận chuyển</p>
                                <p class="shipping-fee-info my-0">20.000 ~ 40.000 đ</p>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="line"></div>
                    </div>
                    <div class="container-fluid">
                        <div class="list--cart--subtotal d-flex justify-content-between my-3">
                            <p>TỔNG</p>
                            <p>USD $238.98</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop