@extends('templates.master')

@section('style-css')
    <link rel="stylesheet" href="{{asset('css/detail.css')}}">
    <link rel="stylesheet" href="{{asset('css/list-cart.css')}}">
    <link rel="stylesheet" href="{{asset('css/new-category.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

@stop

@section('owlcarousel-css')
@stop

@section('zoom-css')
    <link rel="stylesheet" href="{{asset('css/zoom-lighter/jquery.lighter.css')}}">
    <link rel="stylesheet" href="{{asset('css/zoom-lighter/sample.css')}}">
@stop

@section('content')
    <div class="Site-inner-body">
        <div class="Site-inner mx-auto">
            <div class="Content-outer">
                <main class="Main--products-item">
                    <div class="ProductItem-nav">
                        <div class="breadcrum">
                            <a class="ProductItem-nav-breadcrumb-link a-decoration" href="{{route('list.category')}}">Shop</a>
                            <span class="mx-2 ProductItem-nav-breadcrumb-span">></span>
                            <a class="ProductItem-nav-breadcrumb-link a-decoration" href="{{route('new.category')}}">Moon
                                and Star Travel
                                Cup</a>
                        </div>
                        <div class="info__wishlist" title="">
                            @if(1==2)
                                <a href="#" title="Remove Whishlist">
                                    <img class=""
                                         src="{{asset('image/heart_icon.png')}}"
                                         alt="">
                                </a>
                            @elseif(1==1)
                                <a href="#" title="Add Whish list">
                                    <img class=""
                                         src="{{asset('image/heart_icon_active.png')}}"
                                         alt="">
                                </a>
                            @endif
                        </div>
                    </div>

                    <div class="ProductItem-summary pb-4">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xl-8 col-lg-5 col-md-12">
                                    <div class="img__main__detail p-2">
                                        <img id="imageZoom" class="zoom-images w-100 fade-in"
                                             src="{{asset('image/vuong2.png')}}"
                                             alt="">
                                    </div>

                                    <div class="img__extra__detail d-flex flex-wrap">
                                        {{--                                        @foreach($products as $product)--}}
                                        {{--                                            <div class="img__extra__detail-item">--}}
                                        {{--                                                <img data-imgUrl="{{$product->image}}" class="img-click-change w-100" src="{{$product->image}}"--}}
                                        {{--                                                     alt="">--}}
                                        {{--                                            </div>--}}

                                        {{--                                        @endforeach--}}
                                    </div>
                                    <div class="video__product">
                                        <iframe class="w-100" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-7 col-md-12">
                                    <div class="info__detail">
                                        <div class="info__name--detail">
                                            <h4 class="info__name--detail-h4">Moon and Star Travel Cup</h4>
                                        </div>
                                        <div class="info__price--detail my-3">
                                            <p class="font-comfortaa">$ 36.00</p>
                                        </div>
                                        <div class="info__content--detail font-cambria mb-3">
                                            <p>Moon and Star Stacking Cups are inspired by the night skies in the Maine
                                                countryside and perfect for small spaces and compact living.</p>
                                            <p>The Eco-Top lid transforms your tumbler into a travel mug. Please specify
                                                color of lid (black or pearl white) at checkout.</p>
                                            <p>Each cup measures approximately 5.5” tall, 3.25” wide at the mouth, and
                                                2.5” wide at the base so they stack well.</p>
                                            <p>All glazes are lead free and food safe. 22k gold lustre is applied during
                                                a low-fire third firing. DO NOT microwave. Hand washing is
                                                recommended.</p>
                                        </div>
                                        <div class="info__quantity--detail">
                                            <form action="{{route('store.addCart', $product->id)}}"
                                                  class="font-comfortaa" method="post">
                                                @csrf
                                                <div class="radio-detail">
                                                    <div class="radio-detail-label">
                                                        <div class="radio-detail-label-size">
                                                            <label class="radio-size-title font-comfortaa" for="">
                                                                SIZE
                                                            </label>
                                                        </div>
                                                        <div class="radio-detai-label-color">
                                                            <label class="radio-color-title"
                                                                   class="radio-size-title font-comfortaa"
                                                                   for="">COLOR:</label>
                                                        </div>
                                                    </div>
                                                    <div class="radio-detail-input">
                                                        <div class="radio-detail-input-size">
                                                            @foreach ($properties as $property)
                                                                @if($property->type == 1)
                                                                    <input type="radio" id="{{'radio' . $property->id}}" name="size"
                                                                           value="{{$property->id}}"
                                                                checked>
                                                                <label class="label-product"
                                                                       for="{{'radio' . $property->id}}">{{$property->name_en}}</label>
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                        <div class="radio-detail-input-color">
                                                            <label class="text-bold label-product"
                                                                   for="radio4">Black</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="colors">
                                                    <ul>
                                                        <li>
                                                            <label>
                                                                <input type="radio" name="color" value="4"
                                                                       checked="checked">
                                                                <span title="black" class="swatch"
                                                                      style="background-color:#222"></span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label>
                                                                <input type="radio" name="color" value="6">
                                                                <span title="blue" class="swatch"
                                                                      style="background-color:#6e8cd5"></span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label>
                                                                <input type="radio" name="color" value="5">
                                                                <span title="green" class="swatch"
                                                                      style="background-color:#44c28d"></span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="quantity-detail">
                                                    <div class="info__quantity--label">
                                                        <label for=""
                                                               class="up-text font-comfortaa">Quantity:</label>
                                                    </div>
                                                    <div class="info__quantity--input font-comfortaa pro-qty">
                                                        <button type="button"
                                                                class="dec qtybtn quantity__minus js--quantity-minus"></button>
                                                        <input id="inputDetail" type="number" name="quantity" value="1" step="1"
                                                               required>
                                                        <button type="button"
                                                                class="inc qtybtn quantity__add js--quantity-add"></button>
                                                    </div>
                                                    <div class="info__add-to-cart mb-3">

                                                        <button
                                                            data-id="{{$product->id}}"
                                                            type="submit"
                                                            class="button" role="button">
                                                            <span>Add To Cart</span>
                                                            <div class="icon">
                                                                <i class="fas fa-cart-plus"></i>
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="info__share--detail py-3 my-5 d-flex">
                                                    <div class="info__share--icon px-1">
                                                        <a href="#" title="Share Facebook" class="link-icon-fb">
                                                            <i class="fab fa-facebook-square"></i>
                                                        </a>
                                                    </div>
                                                    <div class="info__share--icon px-1">
                                                        <a href="#" title="Share Facebook" class="link-icon-fb">
                                                            <i class="fab fa-facebook-messenger"></i>
                                                        </a>
                                                    </div>
                                                    <div class="info__share--icon px-1">
                                                        <a href="#" title="Share Viber"
                                                           class="link-icon-ins">
                                                            <i class="fab fa-viber"></i>
                                                        </a>
                                                    </div>
                                                    <div class="info__share--icon px-1">
                                                        <a href="#" title="Share Whats App"
                                                           class="link-icon-whatsapp">
                                                            <i class="fab fa-whatsapp"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="social-wishlist">
                                                </div>
                                            </form>
                                        </div>
                                        <div class="info-user-manual-detail">
                                            <div class="info-user-manual-detail-wrap">
                                                <div class="info-user-manual-detail-btn">
                                                    <div class="js-info-user-manual-detail-btn-wrap text-bold up-text">
                                                        Note
                                                    </div>
                                                    <div class="js-info-user-manual-detail-btn-wrap text-bold ">
                                                        writen by
                                                    </div>
                                                    <div class="js-info-user-manual-detail-btn-wrap text-bold up-text">
                                                        Vu Hoang
                                                    </div>
                                                </div>
                                                <div class="info-user-manual-detail-content">
                                                    <div class="info-user-manual-detail-content-wrap">
                                                        <div id="carouselExampleControls" class="carousel slide"
                                                             data-bs-ride="carousel">
                                                            <div class="carousel-inner">
                                                                <div class="carousel-item active">
                                                                    <img src="{{asset('image/vuong2.png')}}"
                                                                         class="d-block w-100" alt="...">
                                                                </div>
                                                                <div class="carousel-item">
                                                                    <img
                                                                        src="https://via.placeholder.com/1000x1000.png/66FF33?text=impedit"
                                                                        class="d-block w-100" alt="...">
                                                                </div>
                                                                <div class="carousel-item">
                                                                    <img
                                                                        src="https://via.placeholder.com/1000x1000.png/FFCC66?text=7"
                                                                        class="d-block w-100" alt="...">
                                                                </div>
                                                            </div>
                                                            <button class="carousel-control-prev" type="button"
                                                                    data-bs-target="#carouselExampleControls"
                                                                    data-bs-slide="prev">
                                                                <span class="visually-hidden"><i
                                                                        class="fas fa-chevron-left"></i></span>
                                                            </button>
                                                            <button class="carousel-control-next" type="button"
                                                                    data-bs-target="#carouselExampleControls"
                                                                    data-bs-slide="next">
                                                                <span class="visually-hidden"><i
                                                                        class="fas fa-chevron-right"></i></span>
                                                            </button>
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

                    <div class="line-opacity my-3"></div>
                    <div class="d-flex justify-content-center">
                        <div class="p-2 bd-highlight">
                            <h5 class=" my-auto vote font-comfortaa">5.0</h5>
                        </div>
                        <div class="p-2 bd-highlight">
                            <div class="jstars score-review"
                                 data-value="4.8"
                                 data-total-stars="5"
                                 data-color="#bf8f00"
                                 data-empty-color="black"
                                 data-size="30px">
                            </div>
                        </div>
                        <div class="p-2 bd-highlight">
                            <p class="p-2 font-comfortaa">1 Review</p>
                        </div>
                    </div>

                    <div class="review--customer mx-auto">
                        <div class="review--customer-wrap-form">
                            <div class="container-fluid">
                                <div class="row text-right">
                                    <div class="col">
                                        <p class="font-comfortaa btn more-button m-0"
                                           id="more-button">
                                            GIVE A KARMA
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="form--review font-comfortaa" id="growreview">
                                <div class="form--review-collapse">
                                    <div class="form--review-title py-4 text-center">
                                        <h5 class="up-text text-bold font-comfortaa">
                                            REVIEW THIS Product
                                        </h5>
                                    </div>
                                    <form action="" method="post">
                                        {{--                                        <div class="form--review-score form-group text-center">--}}
                                        {{--                                            <ul class="ratings text-center">--}}
                                        {{--                                                <li class="star"></li>--}}
                                        {{--                                                <li class="star"></li>--}}
                                        {{--                                                <li class="star"></li>--}}
                                        {{--                                                <li class="star"></li>--}}
                                        {{--                                                <li class="star"></li>--}}
                                        {{--                                            </ul>--}}
                                        {{--                                        </div>--}}
                                        <div class="container-fluid text-center my-2 py-2">
                                            <div id="element">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-detail w-100" id="formGroupExampleInput"
                                                   placeholder="Title">
                                        </div>
                                        <div class="form-group">
                                    <textarea name="" class="textarea-detail w-100" id="" cols="" rows="3"
                                              placeholder="Hãy chia sẻ vì sao bạn thích sản phẩm này nhé"></textarea>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <input type="file" id="selectedFile" style="display: none;"/>
                                            <input type="button" value="🖼️ Add Image" class="input-file-detail"
                                                   onclick="document.getElementById('selectedFile').click();"/>
                                            <div class="">

                                                <input type="submit" class="submit-review btn" value="JUDGE">
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="review--title">
                            <div class="btn p-0 review--title-item review--title-item1 up-text font-comfortaa">Cause And
                                Effect
                            </div>
                        </div>
                        <div class="review--content">
                            <div class="review--items">
                                <div class="review--item-user review--item-user1">
                                    <div class="d-flex flex-row review--user">
                                        <div class="m-2 review-user-avatar">
                                            <img src="{{asset('image/user.jpg')}}" alt="">
                                            <div class="review-user-avatar-check">
                                                <i class="fas fa-check-circle"></i>
                                                <div class="check-user-tooltip text-center">
                                                    <p class="check-user-tooltip-text">Registed Account</p>
                                                    <p>Create one to feel like home and easier to manage to order</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn p-2">
                                            <div class="review_detail-title d-flex align-items-end">
                                                <div class="review_detail-name text-bold">Gillian D.</div>
                                                <div class="review_detail-time">13/11/2019</div>
                                            </div>
                                            <div class="jstars jstars-review text-left"
                                                 data-value="4.8"
                                                 data-total-stars="5"
                                                 data-color="#bf8f00"
                                                 data-empty-color="black"
                                                 data-size="20px">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content-review-wraper">
                                        <div class=" bd-highlight">
                                            <div class="bd-highlight content-review">
                                                <div class="content-title">
                                                    Fizzy
                                                </div>
                                                <div class="content__review">
                                                    Great product like always! But this one gives a nice fun surprise
                                                    when
                                                    scrubbing.
                                                </div>
                                                <div class="review-reply">
                                                    <div class="review_reply-items">
                                                        <div class="review_reply-item">
                                                            <div class="review_reply-content">
                                                                <p class="font-comfortaa">Sản phẩm tuyệt vời như mọi
                                                                    khi! Nhưng điều này mang
                                                                    lại một
                                                                    sự ngạc nhiên thú vị khi kỳ cọ. Loại bọt mà bạn nhận
                                                                    được là
                                                                    khác nhau nhưng tôi thích tẩy tế bào chết tốt mỗi
                                                                    tuần một
                                                                    lần cho làn da của mình. Nó có mùi tuyệt vời và nó
                                                                    là một bổ
                                                                    sung tuyệt vời cho các sản phẩm tẩy tế bào chết toàn
                                                                    thân
                                                                    khác của tôi.</p>
                                                            </div>
                                                            <div class="review_reply-user d-flex align-items-center">
                                                                <div class="review_reply_user-img">
                                                                    <img src="{{asset('image/user.jpg')}}" class="">
                                                                </div>
                                                                <div class="review_reply_user-name">TikiCare</div>
                                                                <div class="review_reply_user-time">22/01/2021</div>
                                                            </div>
                                                        </div>
                                                        <div class="review_reply_item-hide font-comfortaa">
                                                            <div class="review_reply-item">
                                                                <div class="review_reply-content">
                                                                    <p class="font-comfortaa">Sản phẩm tuyệt vời như mọi
                                                                        khi! Nhưng điều này
                                                                        mang lại một
                                                                        sự ngạc nhiên thú vị khi kỳ cọ. Loại bọt mà bạn
                                                                        nhận được là
                                                                        khác nhau nhưng tôi thích tẩy tế bào chết tốt
                                                                        mỗi tuần một
                                                                        lần cho làn da của mình. Nó có mùi tuyệt vời và
                                                                        nó là một bổ
                                                                        sung tuyệt vời cho các sản phẩm tẩy tế bào chết
                                                                        toàn thân
                                                                        khác của tôi.</p>
                                                                </div>
                                                                <div
                                                                    class="review_reply-user d-flex align-items-center">
                                                                    <div class="review_reply_user-img">
                                                                        <img src="{{asset('image/user.jpg')}}" class="">
                                                                    </div>
                                                                    <div class="review_reply_user-name">TikiCare</div>
                                                                    <div class="review_reply_user-time">22/01/2021</div>
                                                                </div>
                                                            </div>
                                                            <div class="review_reply-item">
                                                                <div class="review_reply-content">
                                                                    <p class="font-comfortaa">Sản phẩm tuyệt vời như mọi
                                                                        khi! Nhưng điều này
                                                                        mang lại một
                                                                        sự ngạc nhiên thú vị khi kỳ cọ. Loại bọt mà bạn
                                                                        nhận được là
                                                                        khác nhau nhưng tôi thích tẩy tế bào chết tốt
                                                                        mỗi tuần một
                                                                        lần cho làn da của mình. Nó có mùi tuyệt vời và
                                                                        nó là một bổ
                                                                        sung tuyệt vời cho các sản phẩm tẩy tế bào chết
                                                                        toàn thân
                                                                        khác của tôi.</p>
                                                                </div>
                                                                <div
                                                                    class="review_reply-user d-flex align-items-center">
                                                                    <div class="review_reply_user-img">
                                                                        <img src="{{asset('image/user.jpg')}}" class="">
                                                                    </div>
                                                                    <div class="review_reply_user-name">TikiCare</div>
                                                                    <div class="review_reply_user-time">22/01/2021</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="review_reply-read-more">View More</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="review--item-user review--item-user2">
                                    <div class="d-flex flex-row review--user">
                                        <div class="m-2 review-user-avatar">
                                            <img src="{{asset('image/user.jpg')}}" alt="">
                                        </div>
                                        <div class="btn p-2">
                                            <div class="review_detail-title d-flex align-items-end">
                                                <div class="review_detail-name text-bold">Gillian D.</div>
                                                <div class="review_detail-time">13/11/2019</div>
                                            </div>
                                            <div class="jstars jstars-review text-left"
                                                 data-value="4.8"
                                                 data-total-stars="5"
                                                 data-color="#bf8f00"
                                                 data-empty-color="black"
                                                 data-size="20px">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content-review-wraper">
                                        <div class=" bd-highlight">
                                            <div class="bd-highlight content-review">
                                                <div class="content-title">
                                                    Fizzy
                                                </div>
                                                <div class="content__review">
                                                    Great product like always! But this one gives a nice fun surprise
                                                    when
                                                    scrubbing.
                                                </div>
                                                <div class="review_detail-img d-flex">
                                                    <div class="review_detail-img-item">
                                                        <a class='sample' data-height='720'
                                                           data-lighter='{{asset('image/vuong2.png')}}'
                                                           data-width='1280' href='{{asset('image/vuong2.png')}} '>
                                                            <img class="review_detail_img-item w-100"
                                                                 src="{{asset('image/vuong2.png')}}">
                                                        </a>
                                                    </div>
                                                    <div class="review_detail-img-item">
                                                        <a class='sample' data-height='720'
                                                           data-lighter='{{asset('image/img1000.jpg')}}'
                                                           data-width='1280' href='{{asset('image/img1000.jpg')}}'>
                                                            <img class="review_detail_img-item w-100"
                                                                 src="{{asset('image/img1000.jpg')}}">
                                                        </a>
                                                    </div>
                                                    <div class="review_detail-img-item">
                                                        <a class='sample' data-height='720'
                                                           data-lighter='{{asset('image/vuong2.png')}}'
                                                           data-width='1280' href='{{asset('image/vuong2.png')}} '>
                                                            <img class="review_detail_img-item w-100"
                                                                 src="{{asset('image/vuong2.png')}}">
                                                        </a>
                                                    </div>
                                                    <div class="review_detail-img-item">
                                                        <a class='sample' data-height='720'
                                                           data-lighter='{{asset('image/img1000.jpg')}}'
                                                           data-width='1280' href='{{asset('image/img1000.jpg')}}'>
                                                            <img class="review_detail_img-item w-100"
                                                                 src="{{asset('image/img1000.jpg')}}">
                                                        </a>

                                                    </div>
                                                    <div class="review_detail-img-item">
                                                        <a class='sample' data-height='720'
                                                           data-lighter='{{asset('image/vuong2.png')}}'
                                                           data-width='1280' href='{{asset('image/vuong2.png')}} '>
                                                            <img class="review_detail_img-item w-100"
                                                                 src="{{asset('image/vuong2.png')}}">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="review-reply">
                                                    <div class="review_reply-items">
                                                        <div class="review_reply-item">
                                                            <div class="review_reply-content">
                                                                <p class="font-comfortaa">Sản phẩm tuyệt vời như mọi
                                                                    khi! Nhưng điều này mang
                                                                    lại một
                                                                    sự ngạc nhiên thú vị khi kỳ cọ. Loại bọt mà bạn nhận
                                                                    được là
                                                                    khác nhau nhưng tôi thích tẩy tế bào chết tốt mỗi
                                                                    tuần một
                                                                    lần cho làn da của mình. Nó có mùi tuyệt vời và nó
                                                                    là một bổ
                                                                    sung tuyệt vời cho các sản phẩm tẩy tế bào chết toàn
                                                                    thân
                                                                    khác của tôi.</p>
                                                            </div>
                                                            <div class="review_reply-user d-flex align-items-center">
                                                                <div class="review_reply_user-img">
                                                                    <img src="{{asset('image/user.jpg')}}" class="">
                                                                </div>
                                                                <div class="review_reply_user-name">TikiCare</div>
                                                                <div class="review_reply_user-time">22/01/2021</div>
                                                            </div>
                                                        </div>
                                                        <div class="review_reply_item-hide">
                                                            <div class="review_reply-item">
                                                                <div class="review_reply-content">
                                                                    <p class="font-comfortaa">Sản phẩm tuyệt vời như mọi
                                                                        khi! Nhưng điều này
                                                                        mang lại một
                                                                        sự ngạc nhiên thú vị khi kỳ cọ. Loại bọt mà bạn
                                                                        nhận được là
                                                                        khác nhau nhưng tôi thích tẩy tế bào chết tốt
                                                                        mỗi tuần một
                                                                        lần cho làn da của mình. Nó có mùi tuyệt vời và
                                                                        nó là một bổ
                                                                        sung tuyệt vời cho các sản phẩm tẩy tế bào chết
                                                                        toàn thân
                                                                        khác của tôi.</p>
                                                                </div>
                                                                <div
                                                                    class="review_reply-user d-flex align-items-center">
                                                                    <div class="review_reply_user-img">
                                                                        <img src="{{asset('image/user.jpg')}}" class="">
                                                                    </div>
                                                                    <div class="review_reply_user-name">TikiCare</div>
                                                                    <div class="review_reply_user-time">22/01/2021</div>
                                                                </div>
                                                            </div>
                                                            <div class="review_reply-item">
                                                                <div class="review_reply-content">
                                                                    <p class="font-comfortaa">Sản phẩm tuyệt vời như mọi
                                                                        khi! Nhưng điều này
                                                                        mang lại một
                                                                        sự ngạc nhiên thú vị khi kỳ cọ. Loại bọt mà bạn
                                                                        nhận được là
                                                                        khác nhau nhưng tôi thích tẩy tế bào chết tốt
                                                                        mỗi tuần một
                                                                        lần cho làn da của mình. Nó có mùi tuyệt vời và
                                                                        nó là một bổ
                                                                        sung tuyệt vời cho các sản phẩm tẩy tế bào chết
                                                                        toàn thân
                                                                        khác của tôi.</p>
                                                                </div>
                                                                <div
                                                                    class="review_reply-user d-flex align-items-center">
                                                                    <div class="review_reply_user-img">
                                                                        <img src="{{asset('image/user.jpg')}}" class="">
                                                                    </div>
                                                                    <div class="review_reply_user-name">TikiCare</div>
                                                                    <div class="review_reply_user-time">22/01/2021</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="review_reply-read-more">View More</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </main>

            </div>
        </div>
    </div>



@stop

@section('owl-carousel')

@stop

@section('zoom-js')
    <script src="{{asset('js/zoom-lighter/jquery.lighter.js')}}" type="text/javascript"></script>

@stop

@section('js-style')
    <script src="{{asset('js/new-detail/emotion-ratings.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/new-detail/detail.js')}}" type="text/javascript"></script>

@stop

