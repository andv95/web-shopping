@extends('templates.master')

@section('title', 'Trang tin')

@section('content')
    <div class="Site-inner-body">
        <div class="Site-inner mx-auto pt-5">
            <div class="Content-outer">
                <main class="Main--products-item">
                    <div class="ProductItem-nav d-flex justify-content-between">
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
                                    <div class="img__extra__detail d-flex flex-wrap pt-2">
                                        <div class="img__extra__detail-item w-25 p-2">
                                            <img class="img-click-change w-100" src="{{asset('image/vuong.jpg')}}"
                                                 alt="">
                                        </div>
                                        <div class="img__extra__detail-item w-25 p-2">
                                            <img class="img-click-change w-100" src="{{asset('image/vuong-1.jpg')}}"
                                                 alt="">
                                        </div>
                                        <div class="img__extra__detail-item w-25 p-2">
                                            <img class="img-click-change w-100" src="{{asset('image/vuong-hover.jpg')}}"
                                                 alt="">
                                        </div>
                                        <div class="img__extra__detail-item w-25 p-2">
                                            <img class="img-click-change w-100" src="{{asset('image/vuong.jpg')}}"
                                                 alt="">
                                        </div>
                                        <div class="img__extra__detail-item w-25 p-2">
                                            <img class="img-click-change w-100" src="{{asset('image/vuong-1.jpg')}}"
                                                 alt="">
                                        </div>
                                        <div class="img__extra__detail-item w-25 p-2">
                                            <img class="img-click-change w-100" src="{{asset('image/vuong-hover.jpg')}}"
                                                 alt="">
                                        </div>
                                        <div class="img__extra__detail-item w-25 p-2">
                                            <img class="img-click-change w-100" src="{{asset('image/vuong.jpg')}}"
                                                 alt="">
                                        </div>
                                        <div class="img__extra__detail-item w-25 p-2">
                                            <img class="img-click-change w-100" src="{{asset('image/img1000.jpg')}}"
                                                 alt="">
                                        </div>
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
                                                <div class="radio-size-detai">
                                                    <label class="radio-size-title font-comfortaa" for="">SIZE</label>

                                                    <input type="radio" id="radio1" name="size-detail" value="all"
                                                           checked>
                                                    <label class="text-bold label-product" for="radio1">S</label>

                                                    <input type="radio" id="radio2" name="size-detail" value="false">
                                                    <label class="text-bold label-product" for="radio2">M</label>

                                                    <input type="radio" id="radio3" name="size-detail" value="true">
                                                    <label class="text-bold label-product" for="radio3">L</label>
                                                </div>
                                                <div class="radio-size-detai font-comfortaa">
                                                    <label class="radio-color-title"
                                                           class="radio-size-title font-comfortaa" for="">COLOR</label>

                                                    <input type="radio" id="radio4" name="color-detail" value="all"
                                                           checked>
                                                    <label class="text-bold label-product" for="radio4">Black</label>

                                                    <input type="radio" id="radio5" name="color-detail" value="false">
                                                    <label class="text-bold label-product" for="radio5">White</label>

                                                    <input type="radio" id="radio6" name="color-detail" value="true">
                                                    <label class="text-bold label-product" for="radio6">Green</label>
                                                </div>
                                                <div class="info__quantity--label">
                                                    <label for="" class="up-text font-comfortaa">Quantity:</label>
                                                </div>
                                                <div class="info__quantity--input font-comfortaa">
                                                    <input type="number" name="" value="1" step="1">
                                                </div>
                                                <div class="info__add-to-cart mb-3">
                                                    <a href="#" class="a-decoration up-text font-comfortaa">
                                                        Add To Cart
                                                    </a>
                                                </div>
                                                <div class="info__share--detail py-3 my-5 d-flex">
                                                    <div class="info__share--icon px-1">
                                                        <a href="#" title="Share Facebook" class="link-icon-fb">
                                                            <i class="fab fa-facebook-square"></i>
                                                        </a>
                                                    </div>
                                                    <div class="info__share--icon px-1">
                                                        <a href="#" title="Share Instagram" class="link-icon-ins">
                                                            <i class="fab fa-instagram-square"></i>
                                                        </a>
                                                    </div>
                                                    <span class="px-2">|</span>
                                                    <div class="info__wishlist" title="">
                                                        @if(1==2)
                                                            <a href="#" title="Remove Whishlist">
                                                                <img class="w-50"
                                                                     src="{{asset('image/heart_icon.png')}}" alt="">
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
                                                <div class="container-fluid">
                                                    <div class="row text-right">
                                                        <div class="col">
                                                            <p class="btn more-button" onclick="hideWriteReview()"
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
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form--review" id="growreview">
                        <div class="form--review-collapse">
                            <div class="form--review-title py-4 text-center">
                                <h5 class="up-text text-bold">
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
                                    <textarea name="" class="textarea-detail w-100" id="" cols="30" rows="3"
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
                    <div class="line-opacity my-3"></div>
                    <div class="d-flex justify-content-center">
                        <div class="p-2 bd-highlight">
                            <h5 class=" my-auto vote">5.0</h5>
                        </div>
                        <div class="p-2 bd-highlight">
                            <div class="jstars score-review"
                                 data-value="4.8"
                                 data-total-stars="5"
                                 data-color="#22D118"
                                 data-empty-color="black"
                                 data-size="30px">
                            </div>
                        </div>
                        <div class="p-2 bd-highlight">
                            <p class="p-2">1 Review</p>
                        </div>
                    </div>

                    <div class="review--customer mx-auto">
                        <div class="review--title">
                            <div class="d-flex flex-row bd-highlight">
                                <div class="btn p-2 bd-highlight review--title-item review--title-item1">Review</div>
                            </div>
                        </div>
                        <div class="review--content">
                            <div class="review--header mx-2 py-3">
                                2 Reviews
                            </div>
                            <div class="review--items">
                                <div class="review--item-user review--item-user1">
                                    <div class="d-flex flex-row bd-highlight review--user">
                                        <div class="btn p-2 bd-highlight review-user-avatar">
                                            <img src="{{asset('image/user.jpg')}}" alt="">
                                        </div>
                                        <div class="btn p-2 bd-highlight">
                                            <div class="review--user-name text-left">Halley</div>
                                            <div class="jstars jstars-review text-left"
                                                 data-value="4.8"
                                                 data-total-stars="5"
                                                 data-color="#22D118"
                                                 data-empty-color="black"
                                                 data-size="20px">
                                            </div>
                                            <div class="review-user-fields text-left">
                                                <div class="review-user-field">
                                                    <span class="yotpo-user-field-description text-s">Skin type:</span>
                                                    <span class="yotpo-user-field-answer text-s">Combination</span>
                                                </div>
                                                <div class="review-user-field">
                                                    <span class="yotpo-user-field-description text-s">Skin goal:</span>
                                                    <span class="yotpo-user-field-answer text-s">Clear skin</span>
                                                </div>
                                                <div class="review-user-field">
                                                    <span
                                                        class="yotpo-user-field-description text-s">Skin concern:</span>
                                                    <span class="yotpo-user-field-answer text-s">Breakouts & acne</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content-review-wraper">
                                        <div class="d-flex flex-row-reverse bd-highlight">
                                            <div class="p-2 bd-highlight content-review">
                                                <div class="content-title">
                                                    Fizzy
                                                </div>
                                                <div>
                                                    Great product like always! But this one gives a nice fun surprise
                                                    when
                                                    scrubbing.
                                                    The fizzy that you get is different but I love a good scrub once a
                                                    week for my
                                                    skin.
                                                    It has a great smell, and it’s a great addition to my other franks
                                                    body scrubs.
                                                </div>
                                                <div class="review-footer">
                                                    <div class="d-flex bd-highlight justify-content-between ">
                                                        <div class="p-2 bd-highlight btn review--share">
                                                            <i class="far fa-share-square"></i>
                                                            Share
                                                        </div>
                                                        <div class="d-flex justify-content-end bd-highlight">
                                                            <div class="p-2 bd-highlight">Was This Review Helpful?</div>
                                                            <div class="p-2 bd-highlight">
                                                                <i class="far fa-thumbs-up btn"></i>
                                                                1
                                                            </div>
                                                            <div class="p-2 bd-highlight">
                                                                <i class="far fa-thumbs-down btn"></i>
                                                                1
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="review--item-user review--item-user2">
                                    <div class="d-flex flex-row bd-highlight review--user">
                                        <div class="btn p-2 bd-highlight review-user-avatar">
                                            <img src="{{asset('image/user.jpg')}}" alt="">
                                        </div>
                                        <div class="btn p-2 bd-highlight">
                                            <div class="review--user-name text-left">Halley</div>
                                            <div class="jstars jstars-review text-left"
                                                 data-value="3.2"
                                                 data-total-stars="5"
                                                 data-color="#22D118"
                                                 data-empty-color="black"
                                                 data-size="20px">
                                            </div>
                                            <div class="review-user-fields text-left">
                                                <div class="review-user-field">
                                                    <span class="yotpo-user-field-description text-s">Skin type:</span>
                                                    <span class="yotpo-user-field-answer text-s">Combination</span>
                                                </div>
                                                <div class="review-user-field">
                                                    <span class="yotpo-user-field-description text-s">Skin goal:</span>
                                                    <span class="yotpo-user-field-answer text-s">Clear skin</span>
                                                </div>
                                                <div class="review-user-field">
                                                    <span
                                                        class="yotpo-user-field-description text-s">Skin concern:</span>
                                                    <span class="yotpo-user-field-answer text-s">Breakouts & acne</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content-review-wraper">
                                        <div class="d-flex flex-row-reverse bd-highlight">
                                            <div class="p-2 bd-highlight content-review">
                                                <div class="content-title">
                                                    Fizzy
                                                </div>
                                                <div>
                                                    Great product like always! But this one gives a nice fun surprise
                                                    when
                                                    scrubbing.
                                                    The fizzy that you get is different but I love a good scrub once a
                                                    week for my
                                                    skin.
                                                    It has a great smell, and it’s a great addition to my other franks
                                                    body scrubs.
                                                </div>
                                                <div class="review-footer">
                                                    <div class="d-flex bd-highlight justify-content-between ">
                                                        <div class="p-2 bd-highlight btn review--share">
                                                            <i class="far fa-share-square"></i>
                                                            Share
                                                        </div>
                                                        <div class="d-flex justify-content-end bd-highlight">
                                                            <div class="p-2 bd-highlight">Was This Review Helpful?</div>
                                                            <div class="p-2 bd-highlight">
                                                                <i class="far fa-thumbs-up btn"></i>
                                                                1
                                                            </div>
                                                            <div class="p-2 bd-highlight">
                                                                <i class="far fa-thumbs-down btn"></i>
                                                                1
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
                    </div>

                </main>

            </div>
        </div>
    </div>



@stop
