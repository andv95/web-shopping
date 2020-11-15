@extends ('templates.master')

@section ('title', 'Trang tin')

@section ('content')

<div class="title-categoty">
    <div class="wrapper-title-categoty">
        <div class="text-center ">
            <h6>Thông tin sản phẩm</h6>
        </div>
    </div>
</div>
<div class="information-product">
    <div class="information-product-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6 text-center">
                    <div class="information-product-img">
                        <div class="information-product-img-main">
                            <div class="owl-carousel">
                                <div>
                                    <img src="{{asset('image/image-product.jpg')}}" alt="">
                                </div>
                                <div>
                                    <img src="{{asset('image/image-product.jpg')}}" alt="">
                                </div>
                                <div>
                                    <img src="{{asset('image/image-product.jpg')}}" alt="">
                                </div>
                                <div>
                                    <img src="{{asset('image/image-product.jpg')}}" alt="">
                                </div>
                                <div>
                                    <img src="{{asset('image/image-product.jpg')}}" alt="">
                                </div>
                                <div>
                                    <img src="{{asset('image/image-product.jpg')}}" alt="">
                                </div>
                                <div>
                                    <img src="{{asset('image/image-product.jpg')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6"></div>
            </div>
        </div>
    </div>
</div>

@stop