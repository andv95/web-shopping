@extends('templates.master')

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
                            <a class="ProductItem-nav-breadcrumb-link a-decoration" href="#">Shop</a>
                            <span class="mx-2 ProductItem-nav-breadcrumb-span">></span>
                            <a class="ProductItem-nav-breadcrumb-link a-decoration" href="#">Moon and Star Travel
                                Cup</a>
                        </div>
                        <div class="ProductItem-nav-pagination">
                            <a class="ProductItem-nav-breadcrumb-link a-decoration" href="#">
                                < Previous
                            </a>
                            <span class="mx-2 ProductItem-nav-breadcrumb-span">/</span>
                            <a class="ProductItem-nav-breadcrumb-link a-decoration" href="#">
                                Next >
                            </a>
                        </div>
                    </div>
                    <div class="ProductItem-summary pb-4">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xl-8 col-lg-5 col-md-12">
                                    <div class="img__main__detail p-2">
                                        <img id="imageZoom" class="w-100 fade-in" src="{{asset('image/vuong2.png')}}"
                                             alt="">
                                    </div>

                                    <div class="img__extra__detail d-flex flex-wrap">
                                        @foreach($products as $product)
                                            <div class="img__extra__detail-item">
                                                <img class="img-click-change w-100" src="{{$product->image}}"
                                                     alt="">
                                            </div>

                                        @endforeach
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
                                        <div class="info__price--detail my-1">
                                            <p class="font-comfortaa">$ 36.00</p>
                                        </div>
                                        <div class="info__content--detail font-cambria">
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
                                            <form action="" class="font-comfortaa">
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
                                                                   for="">COLOR: Red</label>
                                                        </div>
                                                    </div>
                                                    <div class="radio-detail-input">
                                                        <div class="radio-detail-input-size">
                                                            <input type="radio" id="radio1" name="size-detail"
                                                                   value="all"
                                                                   checked>
                                                            <label class="text-bold label-product"
                                                                   for="radio1">S</label>

                                                            <input type="radio" id="radio2" name="size-detail"
                                                                   value="false">
                                                            <label class="text-bold label-product"
                                                                   for="radio2">M</label>

                                                            <input type="radio" id="radio3" name="size-detail"
                                                                   value="true">
                                                            <label class="text-bold label-product"
                                                                   for="radio3">L</label>
                                                        </div>
{{--                                                        <div class="radio-detail-input-color">--}}
{{--                                                            <input type="radio" id="radio4" name="color-detail"--}}
{{--                                                                   value="all"--}}
{{--                                                                   checked>--}}
{{--                                                            <label class="text-bold label-product"--}}
{{--                                                                   for="radio4">Black</label>--}}

{{--                                                            <input type="radio" id="radio5" name="color-detail"--}}
{{--                                                                   value="false">--}}
{{--                                                            <label class="text-bold label-product"--}}
{{--                                                                   for="radio5">White</label>--}}

{{--                                                            <input type="radio" id="radio6" name="color-detail"--}}
{{--                                                                   value="true">--}}
{{--                                                            <label class="text-bold label-product"--}}
{{--                                                                   for="radio6">Green</label>--}}
{{--                                                        </div>--}}
                                                    </div>
                                                </div>
                                                <div class="colors">
                                                    <ul >
                                                        <li>
                                                            <label>
                                                                <input type="radio" name="color" value="black">
                                                                <span class="swatch" style="background-color:#222"></span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label>
                                                                <input type="radio" name="color" value="blue">
                                                                <span class="swatch" style="background-color:#6e8cd5"></span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label>
                                                                <input type="radio" name="color" value="green">
                                                                <span class="swatch" style="background-color:#44c28d"></span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="quantity-detail">
                                                    <div class="info__quantity--label">
                                                        <label for=""
                                                               class="up-text font-comfortaa">Quantity:</label>
                                                    </div>
                                                    <div class="info__quantity--input font-comfortaa">
                                                        <input id="inputDetail" type="number" name="" value="1" step="1"
                                                               required>
                                                    </div>
                                                    <div class="info__add-to-cart mb-3">
                                                        <a href="#" class="a-decoration up-text font-comfortaa">
                                                            Add To Cart
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="info__share--detail py-3 my-5 d-flex">
                                                    <div class="info__share--icon px-1">
                                                        <a href="#" title="Share Facebook" class="link-icon-fb">
                                                            <i class="fab fa-facebook-square"></i>
                                                        </a>
                                                    </div>
                                                    <div class="info__share--icon px-1">
                                                        <a href="#" title="Share Instagram"
                                                           class="link-icon-ins">
                                                            <i class="fab fa-instagram-square"></i>
                                                        </a>
                                                    </div>
                                                    <div class="info__share--icon px-1">
                                                        <a href="#" title="Share Whats App"
                                                           class="link-icon-whatsapp">
                                                            <i class="fab fa-whatsapp-square"></i>
                                                        </a>
                                                    </div>
                                                    <span class="px-2">|</span>
                                                    <div class="info__wishlist" title="">
                                                        @if(1==2)
                                                            <a href="#" title="Remove Whishlist">
                                                                <img class="w-50"
                                                                     src="{{asset('image/heart_icon.png')}}"
                                                                     alt="">
                                                            </a>
                                                        @elseif(1==1)
                                                            <a href="#" title="Add Whish list">
                                                                <img class="w-50"
                                                                     src="{{asset('image/heart_icon_active.png')}}"
                                                                     alt="">
                                                            </a>
                                                        @endif
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
                                                        User Manual
                                                    </div>
                                                </div>
                                                <div class="info-user-manual-detail-content">
                                                    <div class="info-user-manual-detail-content-wrap">
                                                        <img class="w-100" src="{{asset('image/vuong2.png')}}">
{{--                                                        <div class="owl-carousel-detail owl-theme">--}}
{{--                                                            <div class="item">--}}
{{--                                                                <img class="w-100" src="{{asset('image/img1000.jpg')}}">--}}
{{--                                                            </div>--}}
{{--                                                            <div class="item">--}}
{{--                                                                <img class="w-100" src="{{asset('image/img1000.jpg')}}">--}}
{{--                                                            </div>--}}
{{--                                                            <div class="item">--}}
{{--                                                                <img class="w-100" src="{{asset('image/img1000.jpg')}}">--}}
{{--                                                            </div>--}}
{{--                                                            <div class="item">--}}
{{--                                                                <img class="w-100" src="{{asset('image/img1000.jpg')}}">--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
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
                                           {{--                                               onclick="hideWriteReview()"--}}
                                           id="more-button">
                                            Write A Review
                                        </p>
                                    </div>
                                    <!-- <div class="">
                                        <p class="btn more-button" onclick="hideWriteQuestion()" id="">
                                            Question
                                        </p>
                                    </div>           -->
                                </div>
                            </div>
                            <div class="form--review font-comfortaa" id="growreview">
                                <div class="form--review-collapse">
                                    <div class="form--review-title py-4 text-center">
                                        <h5 class="up-text text-bold font-comfortaa">
                                            REVIEW THIS Product
                                        </h5>
                                    </div>
                                    <form action="">
                                        <div class="form--review-score form-group text-center">
                                            <ul class="ratings text-center">
                                                <li class="star"></li>
                                                <li class="star"></li>
                                                <li class="star"></li>
                                                <li class="star"></li>
                                                <li class="star"></li>
                                            </ul>
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

                                                <input type="submit" class="submit-review btn" value="SEND LOVE">
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="review--title">
                            <div class="btn p-0 review--title-item review--title-item1 up-text font-comfortaa">Review
                            </div>
                        </div>
                        <div class="review--content">
                            {{--                            <div class="review--header mx-2 py-3">--}}
                            {{--                                2 Reviews--}}
                            {{--                            </div>--}}
                            <div class="review--items">
                                <div class="review--item-user review--item-user1">
                                    <div class="d-flex flex-row review--user">
                                        <div class="m-2 review-user-avatar">
                                            <img src="{{asset('image/user.jpg')}}" alt="">
                                            <div class="review-user-avatar-check">
                                                <i class="fas fa-check-circle"></i>
                                            </div>
                                        </div>
                                        <div class="btn p-2">
                                            <div class="review_detail-title d-flex align-items-end">
                                                <div class="review_detail-name text-bold">Gillian D.</div>
                                                <div class="review_detail-time">Nhận xét vào 13 tháng 11, 2019</div>
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
                                                                <p>Sản phẩm tuyệt vời như mọi khi! Nhưng điều này mang
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
                                                                    <p>Sản phẩm tuyệt vời như mọi khi! Nhưng điều này
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
                                                                    <p>Sản phẩm tuyệt vời như mọi khi! Nhưng điều này
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
                                                <div class="review_detail-time">Nhận xét vào 13 tháng 11, 2019</div>
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
                                                                <p>Sản phẩm tuyệt vời như mọi khi! Nhưng điều này mang
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
                                                                    <p>Sản phẩm tuyệt vời như mọi khi! Nhưng điều này
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
                                                                    <p>Sản phẩm tuyệt vời như mọi khi! Nhưng điều này
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

@section('zoom-js')
    <script src="{{asset('js/zoom-lighter/jquery.lighter.js')}}" type="text/javascript"></script>

@stop
