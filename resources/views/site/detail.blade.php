@extends ('templates.master')

@section ('title', 'Trang tin')

@section ('content')

    <div class="title-categoty">
    </div>
    <div class="information-product mx-auto">
        <div class="information-product-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-12 text-center">
                        <div class="information-product-img">
                            <div class="information-product-img-main">
                                <div class="owl-carousel">
                                    <div class="owl-carousel-item">
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
                            <div class="information-product-img-extra">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="information-product-img-extra-item">
                                                <img src="{{asset('image/image-product.jpg')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="information-product-img-extra-item">
                                                <img src="{{asset('image/image-product.jpg')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="information-product-img-extra-item">
                                                <img src="{{asset('image/image-product.jpg')}}" alt="">
                                            </div>
                                        </div>
                                    <!-- <div class="col-3">
                                        <div class="information-product-img-extra-item">
                                            <img src="{{asset('image/image-product.jpg')}}" alt="">
                                        </div>
                                    </div> -->
                                    </div>
                                </div>
                            </div>
                            <div class="information-product-video">
                                <video width="100%" controls>
                                    <source src="mov_bbb.mp4" type="video/mp4">
                                    <source src="mov_bbb.ogg" type="video/ogg">
                                    Your browser does not support HTML video.
                                </video>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="price-infomation">
                            <div class="name-product">
                                <h5>QUẦN SỊP SIÊU NHÂN MÀU ĐỎ</h5>
                            </div>
                            <div class="rating-product">
                                <div class=container-fluid>
                                    <div class="row">
                                        <div class="col--8 my-auto">
                                            <div id="rating">
                                                <div class="jstars"
                                                     data-value="4.8"
                                                     data-total-stars="5"
                                                     data-color="#22D118"
                                                     data-empty-color="black"
                                                     data-size="20px">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col--4">
                                            <div class="number-of-review">
                                                <p class="my-3">76 rating</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-product-price d-flex">
                                <h6>$34.23 || 100.000 ₫ </h6>
                            </div>
                        </div>
                        <div class="information-item">
                            <p>Aniđám pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson
                                ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
                                craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                                butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                                nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                        </div>
                        <div class="">
                            <!-- ADD TO CART FORM -->
                            <div class="product-page__form mt3 md--dn--hide">
                                <form class="add-to-cart add-to-cart--single mb2 mx--auto">
                                    <!-- Output all variants in a hidden selector -->
                                    <div class="product-item-color">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="colors">
                                                    <div class="d-flex flex-row bd-highlight">
                                                        <div class="color--title">
                                                            Color:
                                                        </div>
                                                        <div class="p-2 bd-highlight">
                                                            <label>
                                                                <input type="radio" name="color" value="black">
                                                                <span class="swatch" style="background-color:#222"
                                                                      title="Màu đen"></span>
                                                            </label>
                                                        </div>
                                                        <div class="p-2 bd-highlight">
                                                            <label>
                                                                <input type="radio" name="color" value="blue">
                                                                <span class="swatch" style="background-color:#6e8cd5"
                                                                      title="Màu xanh dương"></span>
                                                            </label>
                                                        </div>
                                                        <div class="p-2 bd-highlight">
                                                            <label>
                                                                <input type="radio" name="color" value="green">
                                                                <span class="swatch" style="background-color:#44c28d"
                                                                      title="Màu xanh lá"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-item-size">
                                        <div class="d-flex flex-row bd-highlight mb-3">
                                            <div class="color--title">
                                                Size:
                                            </div>
                                            <div class="radio-toolbar">
                                                <input type="radio" id="radioApple" name="radioFruit" value="apple"
                                                       checked>
                                                <label for="radioApple">M</label>

                                                <input type="radio" id="radioBanana" name="radioFruit" value="banana">
                                                <label for="radioBanana">L</label>

                                                <input type="radio" id="radioOrange" name="radioFruit" value="orange">
                                                <label for="radioOrange">XL</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Check to see if there are more than 1 variant, if so output all options -->
                                    <!-- Desktop CTA -->
                                    <div class="add-to-cart__desktop">
                                        <div class="d-flex flex-row bd-highlight mb-3">
                                            <div class="p-2 bd-highlight">
                                                <div class="d-flex flex-row quantity__input-wrapper">
                                                    <i class="fas fa-minus p-2"></i>
                                                    <input
                                                        class="quantity__input js--quantity full top--0 left--0 text-center my-auto"
                                                        id="numberBox" type="number" min="1" max="10" step="1" value="1"
                                                        require>
                                                    <i class="fas fa-plus p-2"></i>
                                                </div>
                                            </div>
                                            <div class="p-2 bd-highlight ">
                                                <button class="btn buy-now py-1">MUA LUÔN</button>
                                            </div>
                                            <div class="p-2 bd-highlight ">
                                                <button class="btn py-1 add-to-bag">ADD TO BAG</button>
                                            </div>
                                        </div>
                                    </div>

                                </form>

                                <!-- Collapse Infomation -->
                                <div class="collapse-info">
                                    <div class="collapse-info-wrapper">
                                        <div class="collapse-info-item">
                                            <div class="collapse-info-item-header py-4 d-flex justify-content-between"
                                                 id="headerCollapseOne" onclick="hideCollapseContentOne();">
                                                <h5 class="my-0">INSIDE ME</h5>
                                                <i id="collapseIconOne" class="fas fa-chevron-up px-2 mx-2"></i>
                                            </div>
                                            <div class="collapse--info" id="collapseContentOne">
                                                <div class="collapse--info-content-1 py-3">
                                                    <div class="collapse--content-info">
                                                        <div class="container-fluid">
                                                            <div class="row">
                                                                <div class="col-3">
                                                                    <img class="w-100"
                                                                         src="{{asset('image/image-product.jpg')}}"
                                                                         alt="">
                                                                </div>
                                                                <div class="col-9">
                                                                    <div class="collapse---content-info-title ">
                                                                        <h3>ROBUSTA COFFEE GRINDS</h3>
                                                                    </div>
                                                                    <div class="collapse--content-info-content my-3">
                                                                        There's a reason my Original Coffee Scrub has so
                                                                        many 5 star reviews. My hero blend of coffee
                                                                        provides the ultimate exfoliation for babes who
                                                                        want results.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="container-fluid">
                                                            <div class="row">
                                                                <div class="col-3">
                                                                    <img class="w-100"
                                                                         src="{{asset('image/image-product.jpg')}}"
                                                                         alt="">
                                                                </div>
                                                                <div class="col-9">
                                                                    <div class="collapse---content-info-title ">
                                                                        <h3>ROBUSTA COFFEE GRINDS</h3>
                                                                    </div>
                                                                    <div class="collapse--content-info-content my-3">
                                                                        There's a reason my Original Coffee Scrub has so
                                                                        many 5 star reviews. My hero blend of coffee
                                                                        provides the ultimate exfoliation for babes who
                                                                        want results.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="collapse-info-item">
                                            <div class="collapse-info-item-header py-4 d-flex justify-content-between"
                                                 id="headerCollapseTwo" onclick="hideCollapseContentTwo();">
                                                <h5 class="my-0">HOW TO USE ME</h5>
                                                <i id="collapseIconTwo" class="fas fa-chevron-up px-2 mx-2"></i>
                                            </div>
                                            <div class="collapse--info" id="collapseContentTwo">
                                                <div class="collapse--info-content-2 py-2">
                                                    <div class="collapse--content-info">
                                                        <div class="container-fluid">
                                                            <div class="row">
                                                                <div class="col-3">
                                                                    <img class="w-100"
                                                                         src="{{asset('image/image-product.jpg')}}"
                                                                         alt="">
                                                                </div>
                                                                <div class="col-9">
                                                                    <div class="collapse---content-info-title ">
                                                                        <h3>ROBUSTA COFFEE GRINDS</h3>
                                                                    </div>
                                                                    <div class="collapse--content-info-content">
                                                                        There's a reason my Original Coffee Scrub has so
                                                                        many 5 star reviews. My hero blend of coffee
                                                                        provides the ultimate exfoliation for babes who
                                                                        want results.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="collapse-info-item">
                                            <div
                                                class="collapse-info-item-header py-4 d-flex justify-content-between boder-bottom"
                                                id="headerCollapseThree" onclick="hideCollapseContentThree();">
                                                <h5 class="my-0">BEFORE & AFTER</h5>
                                                <i id="collapseIconThree" class="fas fa-chevron-up px-2 mx-2"></i>
                                            </div>
                                            <div class="collapse--info" id="collapseContentThree">
                                                <div class="collapse--info-content-3 py-3">
                                                    <div class="collapse--content-info">
                                                        <div class="container-fluid">
                                                            <div class="row">
                                                                <div class="col-3">
                                                                    <img class="w-100"
                                                                         src="{{asset('image/image-product.jpg')}}"
                                                                         alt="">
                                                                </div>
                                                                <div class="col-9">
                                                                    <div class="collapse---content-info-title ">
                                                                        <h3>ROBUSTA COFFEE GRINDS</h3>
                                                                    </div>
                                                                    <div class="collapse--content-info-content">
                                                                        There's a reason my Original Coffee Scrub has so
                                                                        many 5 star reviews. My hero blend of coffee
                                                                        provides the ultimate exfoliation for babes who
                                                                        want results.
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


                                <!-- END Collapse Infomation -->
                                <!-- no JS cart link -->
                                <noscript>
                                    <div class="add-to-cart--no-js text-align--center md--text-align--left">
                                        <div class="add-to-cart__cta md--table-cell pitch caps inline-block md--block">
                                            <a href="https://letsbefrankusa.myshopify.com/cart/34827773083693:1"
                                               class="add-to-cart__single add-to-cart__no-js  product-item__add-to-cart product-item__add-to-cart--desktop button button--standard full--w caps max-width--1">
                                                Buy Now
                                            </a>
                                        </div>
                                    </div>
                                </noscript>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="line"></div>
    <!-- vote review of customer -->
    <div class="vote-review">
        <div class="">
            <div class="vote-review-wrapper">
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
                <!-- Button Review and Question -->
                <div class="button-write-review mx-auto">
                    <div class="container-fluid">
                        <div class="row text-right">
                            <div class="col">
                                <p class="btn more-button" onclick="hideWriteReview()" id="more-button">
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
                    <!-- Form review -->
                    <div class="form--review" id="growreview">
                        <div class="form--review-collapse">
                            <div class="form--review-title py-4">
                                <h5>
                                    WRITE A REVIEW
                                </h5>
                            </div>
                            <form action="">
                                <div class="form--review-score form-group">
                                    <p>Score: </p>
                                    <ul class="ratings text-left">
                                        <li class="star"></li>
                                        <li class="star"></li>
                                        <li class="star"></li>
                                        <li class="star"></li>
                                        <li class="star"></li>
                                    </ul>
                                </div>
                                <div class="form-group">
                                    <span style="color: red">*</span>
                                    <label for="formGroupExampleInput">Title</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                                </div>
                                <div class="form-group">
                                    <span style="color: red">*</span>
                                    <label for="formGroupExampleInput2">Review</label>
                                    <textarea name="" class="form-control" id="" cols="30" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Image Description</label>
                                    <input type="file" class="form-control" id="formGroupExampleInput" placeholder="">
                                </div>
                                <div class="form-group">
                                    <legend class="col-form-label col-sm-2 pt-0 text-left px-0">
                                        <span style="color: red">*</span> What's your skin type?
                                    </legend>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios"
                                                   id="gridRadios1" value="option1" checked>
                                            <label class="form-check-label" for="gridRadios1">
                                                Smooth skin texture
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios"
                                                   id="gridRadios2" value="option2">
                                            <label class="form-check-label" for="gridRadios2">
                                                Brighter skin
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios"
                                                   id="gridRadios3" value="option3">
                                            <label class="form-check-label" for="gridRadios3">
                                                Brighter skin
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios"
                                                   id="gridRadios4" value="option4">
                                            <label class="form-check-label" for="gridRadios4">
                                                Brighter skin
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group text-right">
                                    <input type="submit" class="submit-review btn" value="POST">
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END Form review -->
                    <!-- Form Question -->
                    <!-- <div class="form--question" id="growquestion">
                        <div class="form--question-collapse">
                            <div class="form--review-title">
                                <h5>
                                    ASK A QUESTION
                                </h5>
                            </div>
                            <form action="">
                                <div class="form-group">
                                    <span style="color: red">*</span>
                                    <label for="formGroupExampleInput2">Question</label>
                                    <textarea name="" class="form-control"  id="" cols="30" rows="3"></textarea>
                                </div>
                                <div class="form-group text-right">
                                    <input type="submit" class="submit-review btn" value="POST">
                                </div>
                            </form>
                        </div>
                    </div> -->
                    <!-- END Form Question -->
                    <div class="container-fluid">
                        <div class="row">
                            <div class=""></div>
                        </div>
                    </div>
                    <!-- END Form review -->
                </div>
                <!-- END Button Review and Question -->
            </div>
        </div>
        <!-- Review Customer -->
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
                                        <span class="yotpo-user-field-description text-s">Skin concern:</span>
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
                                        Great product like always! But this one gives a nice fun surprise when
                                        scrubbing.
                                        The fizzy that you get is different but I love a good scrub once a week for my
                                        skin.
                                        It has a great smell, and it’s a great addition to my other franks body scrubs.
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
                                        <span class="yotpo-user-field-description text-s">Skin concern:</span>
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
                                        Great product like always! But this one gives a nice fun surprise when
                                        scrubbing.
                                        The fizzy that you get is different but I love a good scrub once a week for my
                                        skin.
                                        It has a great smell, and it’s a great addition to my other franks body scrubs.
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
        <div class="line"></div>
        <!-- Related product -->
        <div class="category-products mx-auto">
            <div class="category-products-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <!-- product item -->
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                            <div class="product-item">
                                <div class="product-item-image">
                                    <div class="cat--img-main">
                                        <img class="w-100" src="{{asset('image/image-product.jpg')}}" alt="">
                                    </div>
                                    <div class="cat--img-hover">
                                        <img class="w-100" src="{{asset('image/image-hover-product.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="product-item-rating">
                                    <div class="d-flex justify-content-around">
                                        <div class="jstars"
                                             data-value="4.8"
                                             data-total-stars="5"
                                             data-color="#ffdcd2"
                                             data-empty-color="black"
                                             data-size="23px">
                                        </div>
                                        <div class="">
                                            1 Review
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item-name">
                                    Fizzy Body Scrub
                                </div>
                                <div class="product-item-benefits">
                                    <div class="text-center product-item-price">
                                        $35.2
                                    </div>
                                </div>
                                <div class="product-item-buy py-2">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-9 px-0">
                                                <div class="text-center product-item-buy-1 p-2">
                                                    BUY
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="product-item-buy-2">
                                                    <div class="add---to-cart btn w-100 h-100">
                                                        <i class="fab fa-cc-visa"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END product item -->
                        <!-- product item -->
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                            <div class="product-item">
                                <div class="product-item-image">
                                    <div class="cat--img-main">
                                        <img class="w-100" src="{{asset('image/image-product.jpg')}}" alt="">
                                    </div>
                                    <div class="cat--img-hover">
                                        <img class="w-100" src="{{asset('image/image-hover-product.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="product-item-rating">
                                    <div class="d-flex justify-content-around">
                                        <div class="jstars"
                                             data-value="4.8"
                                             data-total-stars="5"
                                             data-color="#ffdcd2"
                                             data-empty-color="black"
                                             data-size="23px">
                                        </div>
                                        <div class="">
                                            1 Review
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item-name">
                                    Fizzy Body Scrub
                                </div>
                                <div class="product-item-benefits">
                                    <div class="text-center product-item-price">
                                        $35.2
                                    </div>
                                </div>
                                <div class="product-item-buy py-2">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-9 px-0">
                                                <div class="text-center product-item-buy-1 p-2">
                                                    BUY
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="product-item-buy-2">
                                                    <div class="add---to-cart btn w-100 h-100">
                                                        <i class="fab fa-cc-visa"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END product item -->
                        <!-- product item -->
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                            <div class="product-item">
                                <div class="product-item-image">
                                    <div class="cat--img-main">
                                        <img class="w-100" src="{{asset('image/image-product.jpg')}}" alt="">
                                    </div>
                                    <div class="cat--img-hover">
                                        <img class="w-100" src="{{asset('image/image-hover-product.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="product-item-rating">
                                    <div class="d-flex justify-content-around">
                                        <div class="jstars"
                                             data-value="4.8"
                                             data-total-stars="5"
                                             data-color="#ffdcd2"
                                             data-empty-color="black"
                                             data-size="23px">
                                        </div>
                                        <div class="">
                                            1 Review
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item-name">
                                    Fizzy Body Scrub
                                </div>
                                <div class="product-item-benefits">
                                    <div class="text-center product-item-price">
                                        $35.2
                                    </div>
                                </div>
                                <div class="product-item-buy py-2">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-9 px-0">
                                                <div class="text-center product-item-buy-1 p-2">
                                                    BUY
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="product-item-buy-2">
                                                    <div class="add---to-cart btn w-100 h-100">
                                                        <i class="fab fa-cc-visa"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END product item -->
                        <!-- product item -->
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                            <div class="product-item">
                                <div class="product-item-image">
                                    <div class="cat--img-main">
                                        <img class="w-100" src="{{asset('image/image-product.jpg')}}" alt="">
                                    </div>
                                    <div class="cat--img-hover">
                                        <img class="w-100" src="{{asset('image/image-hover-product.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="product-item-rating">
                                    <div class="d-flex justify-content-around">
                                        <div class="jstars"
                                             data-value="4.8"
                                             data-total-stars="5"
                                             data-color="#ffdcd2"
                                             data-empty-color="black"
                                             data-size="23px">
                                        </div>
                                        <div class="">
                                            1 Review
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item-name">
                                    Fizzy Body Scrub
                                </div>
                                <div class="product-item-benefits">
                                    <div class="text-center product-item-price">
                                        $35.2
                                    </div>
                                </div>
                                <div class="product-item-buy py-2">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-9 px-0">
                                                <div class="text-center product-item-buy-1 p-2">
                                                    BUY
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="product-item-buy-2">
                                                    <div class="add---to-cart btn w-100 h-100">
                                                        <i class="fab fa-cc-visa"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END product item -->
                    </div>
                </div>
            </div>
        </div>
@stop
