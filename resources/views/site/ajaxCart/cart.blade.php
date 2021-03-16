@if(Session::has("Cart") != null)
    <div class="cart__scroll ">
        <div class="cart__scroll-wrapper overflow-auto">
            <!-- Cart no item -->

            <!-- END Cart no item -->

            <!-- Cart has items -->
            <div class="cart__has-items">
                <!-- FREE SHIPPING BARS -->
                <div class="cart__upsell mb1 bg--original">
                    <div class="d-flex justify-content-center">
                        <p class="my-0 " style=""> You've got free shipping.</p>
                        <div class="my-0 ">🚚</div>
                    </div>
                </div>
                <div class="cart__cta-boder"></div>
                <!-- END FREE SHIPPING BARS -->

                <!-- Cart Item -->
                <div class="cart__items">
                    @foreach(Session::get("Cart")->products as $item)
                        <div class="cart-item alert" role="alert">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-4 px-0 cart-item-img-background">
                                        <div class="cart-item-img">
                                            <img class="w-100" src="{{asset('image/image-product.jpg')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-8 pr-0">
                                        <div
                                            class="cart-item-name d-flex flex-row align-items-stretch justify-content-between">
                                            <div>{{$item["productInfo"]->name}}</div>
                                            <span aria-hidden="true" id="close" class="btn p-0"
                                                  data-id="{{$item['productInfo']->id}}">&times;</span>
                                            <span class="sr-only " data-dismiss="alert">Close</span>
                                        </div>
                                        <div class="d-flex flex-row justify-content-between">
                                            <div class="your--cart--amount-product">
                                                <i class="fas fa-minus "></i>
                                                <input class="js--quantity text-center my-auto quantity-your-cart"
                                                       id="numberBox" type="number" min="1" max="10" step="1"
                                                       value="{{$item['quanty']}}" require>
                                                <i class="fas fa-plus "></i>
                                            </div>
                                            <div class="your--cart--price-product">
                                                $ {{$item['price']}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- END Cart Item -->
            </div>

        </div>
        <div class="cart__cta-boder"></div>
        <!-- Value Order -->
        <div class="pitch caps clearfix my1 px-4">
            <div class="float-left">
                <p class="text__cart">Subtotal</p>
            </div>
            <div class="float-right">
                <p class="text__cart">{{number_format($newCart->totalPrice)}} USD</p>
            </div>
        </div>
        <input hidden type="number" name="" id="js--quanty--cart" value="{{$quantyCart}}">
    </div>
@else
    <div class="cart__no-items align-middle" style="display:none">
        <h4 class="align-middle">You have no item in your cart</h4>
    </div>
@endif
