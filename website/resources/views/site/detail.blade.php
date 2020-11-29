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
        <div class="container">
            <div class="row">
                <div class="col-6 text-center">
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
                                    <div class="col-3">
                                        <div class="information-product-img-extra-item">
                                            <img src="{{asset('image/image-product.jpg')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="information-product-img-extra-item">
                                            <img src="{{asset('image/image-product.jpg')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="information-product-img-extra-item">
                                            <img src="{{asset('image/image-product.jpg')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="information-product-img-extra-item">
                                            <img src="{{asset('image/image-product.jpg')}}" alt="">
                                        </div>
                                    </div>
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
                <div class="col-6">
                    <div class="price-infomation">
                        <div class="name-product">
                            <h5>Tên sản phẩm</h5>
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
                                                data-size="30px">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col--4">
                                        <div class="number-of-review">
                                            <p>76 rating</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item-product-price">
                            <h6>$34.23</h6>
                        </div>
                    </div>
                    <div class="information-item">
                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                    </div>
                    <div class="">
                         <!-- ADD TO CART FORM -->
                        <div class="product-page__form mt3 md--dn--hide">
                            <form class="add-to-cart add-to-cart--single mb2 mx--auto">
                                <!-- Output all variants in a hidden selector -->
                                <div class="product-item-color">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <label for="">Color</label>
                                            <input class="color--item" type="radio" id="male" name="color" value="male">
                                            <input class="color--item" type="radio" id="female" name="color" value="female">
                                            <input class="color--item" type="radio" id="other" name="color" value="other">
                                            <input class="color--item" type="radio" id="female" name="color" value="female">
                                            <input class="color--item" type="radio" id="other" name="color" value="other">
                                        </div>
                                    </div>
                                </div>

                                <div class="product-item-size">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <label for="">Size</label>
                                            <input class="size--item" type="radio" id="female" name="size" value="female">
                                            <input class="size--item" type="radio" id="other" name="size" value="other">
                                            <input class="size--item" type="radio" id="female" name="size" value="female">
                                            <input class="size--item" type="radio" id="other" name="size" value="other">
                                        </div>
                                    </div>
                                </div>
                                    <!-- Check to see if there are more than 1 variant, if so output all options -->
                                    <!-- Desktop CTA -->
                                <div class="add-to-cart__desktop table full--w col--12 md--col--7">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="quantity quantity--full table-cell  border relative">
                                                    <i class="fas fa-minus"></i>
                                                    <input class="quantity__input js--quantity full top--0 left--0 text-center my-auto"  id="numberBox" type="number" min="1" max="10" step="1" value="1" require>
                                                    <i class="fas fa-plus"></i>
                                                </div>
                                            </div>
                                            <div class="col-7">
                                                <div class="add-to-cart__cta table-cell pl1 pitch caps">
                                                    <button type="submit" class="add-to-cart__single  product-item__add-to-cart product-item__add-to-cart--desktop button button--standard full--w caps max-width--1">
                                                    Add to bag                                             </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- no JS cart link -->
                            <noscript>
                                <div class="add-to-cart--no-js text-align--center md--text-align--left">
                                    <div class="add-to-cart__cta md--table-cell pitch caps inline-block md--block">
                                        <a href="https://letsbefrankusa.myshopify.com/cart/34827773083693:1" class="add-to-cart__single add-to-cart__no-js  product-item__add-to-cart product-item__add-to-cart--desktop button button--standard full--w caps max-width--1">
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
<!-- vote review of customer -->
<div class="vote-review">
    <div class="">
        <div class="vote-review-wrapper">
        <!-- <div> -->
            <h5 class="text-right my-auto">5.0</h5>
            <ul class="ratings text-center">
                <li class="star"></li>
                <li class="star"></li>
                <li class="star"></li>
                <li class="star"></li>
                <li class="star"></li>
            </ul>
            <p class="text-left my-auto">1 Review</p>
        <!-- </div> -->
        </div>
        
        <div class="button-write-review">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6 text-left align-self-end">
                        <div class="button-review">
                            <button><p>REVIEWS</p></button>
                        </div>
                    </div>
                    <div class="col-6 ">
                        <div class="btn-write-review text-right">
                            <button><p> <i class="fas fa-pencil-alt"></i>Write review</p>   </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Review Customer -->
<div class="review-customer">
    <div class="review-customer-name">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="">
                        <h6>Tên Khách Hàng</h6>
                    </div>
                </div>
            </div>    
        </div>
    </div>
    <div class="review-customer-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="">
                        <p>Nội dung Review</p>
                    </div>
                </div>
            </div>    
        </div>
    </div>
</div>
<!-- Related product -->
<div class="related-product">
    <div class="related-product-wrapper">
        <div class="related-product-title text-center">
            <p>Sản phẩm tương tự</p>
        </div>
        <div class="related-product-list">
            <div class="container-fluid">
                <div class="row">
                    <!-- Related product item -->
                    <div class="col-xl-3 col-lg-4 col-md-4">
                        <div class="related-product-item">
                        <!-- image hover -->
                            <div class="related-product-item-img-hover">
                                <img src="{{asset('image/image-hover-product.jpg')}}" alt="">
                            </div>
                        <!-- image product -->
                            <div class="related-product-item-img">
                                <div class="related-product-item-img-main">
                                    <img src="{{asset('image/image-product.jpg')}}" alt="">
                                </div>
                            </div>
                        <!-- product name -->
                            <div class="related-product-item-name">
                                <p>Product Name</p>
                            </div>
                        <!-- rating product -->
                            <div class="ratings-vote">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col">
                                            <div class="jstars" 
                                                data-value="4.8" 
                                                data-total-stars="5" 
                                                data-color="#22D118" 
                                                data-empty-color="black" 
                                                data-size="30px">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <p>125 Review</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!-- Price Product -->
                            <div class="related-product-item-price">
                                <p>32.5$</p>
                            </div>
                        <!-- Button Buy -->
                            <div class="related-product-item-button-buy">
                                <div class="container-fluid">
                                    <div class="row text-center">
                                        <div class="col-3 slide-right">
                                            <button><i class="fas fa-eye"></i></button>
                                        </div>
                                        <div class="col-6 slide-top">
                                            <button class="related-product-item-button-buy-text">
                                                <p>Mua ngay</p>
                                            </button>
                                        </div>
                                        <div class="col-3 slide-left">
                                            <button><i class="fas fa-cart-plus"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4">
                        <div class="related-product-item">
                        <!-- image hover -->
                            <div class="related-product-item-img-hover">
                                <img src="{{asset('image/image-hover-product.jpg')}}" alt="">
                            </div>
                        <!-- image product -->
                            <div class="related-product-item-img">
                                <div class="related-product-item-img-main">
                                    <img src="{{asset('image/image-product.jpg')}}" alt="">
                                </div>
                            </div>
                        <!-- product name -->
                            <div class="related-product-item-name">
                                <p>Product Name</p>
                            </div>
                        <!-- rating product -->
                            <div class="ratings-vote">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col">
                                            <div class="jstars" 
                                                data-value="4.2" 
                                                data-total-stars="5" 
                                                data-color="#22D118" 
                                                data-empty-color="black" 
                                                data-size="30px">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <p>125 Review</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!-- Price Product -->
                            <div class="related-product-item-price">
                                <p>32.5$</p>
                            </div>
                        <!-- Button Buy -->
                            <div class="related-product-item-button-buy">
                                <div class="container-fluid">
                                    <div class="row text-center">
                                        <div class="col-3 slide-right">
                                            <button><i class="fas fa-eye"></i></button>
                                        </div>
                                        <div class="col-6 slide-top">
                                            <button class="related-product-item-button-buy-text">
                                                <p>Mua ngay</p>
                                            </button>
                                        </div>
                                        <div class="col-3 slide-left">
                                            <button><i class="fas fa-cart-plus"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4">
                        <div class="related-product-item">
                        <!-- image hover -->
                            <div class="related-product-item-img-hover">
                                <img src="{{asset('image/image-hover-product.jpg')}}" alt="">
                            </div>
                        <!-- image product -->
                            <div class="related-product-item-img">
                                <div class="related-product-item-img-main">
                                    <img src="{{asset('image/image-product.jpg')}}" alt="">
                                </div>
                            </div>
                        <!-- product name -->
                            <div class="related-product-item-name">
                                <p>Product Name</p>
                            </div>
                        <!-- rating product -->
                            <div class="ratings-vote">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col">
                                            <div class="jstars" 
                                                data-value="4.2" 
                                                data-total-stars="5" 
                                                data-color="#22D118" 
                                                data-empty-color="black" 
                                                data-size="30px">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <p>125 Review</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!-- Price Product -->
                            <div class="related-product-item-price">
                                <p>32.5$</p>
                            </div>
                        <!-- Button Buy -->
                            <div class="related-product-item-button-buy">
                                <div class="container-fluid">
                                    <div class="row text-center">
                                        <div class="col-3 slide-right">
                                            <button><i class="fas fa-eye"></i></button>
                                        </div>
                                        <div class="col-6 slide-top">
                                            <button class="related-product-item-button-buy-text">
                                                <p>Mua ngay</p>
                                            </button>
                                        </div>
                                        <div class="col-3 slide-left">
                                            <button><i class="fas fa-cart-plus"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4">
                        <div class="related-product-item">
                        <!-- image hover -->
                            <div class="related-product-item-img-hover">
                                <img src="{{asset('image/image-hover-product.jpg')}}" alt="">
                            </div>
                        <!-- image product -->
                            <div class="related-product-item-img">
                                <div class="related-product-item-img-main">
                                    <img src="{{asset('image/image-product.jpg')}}" alt="">
                                </div>
                            </div>
                        <!-- product name -->
                            <div class="related-product-item-name">
                                <p>Product Name</p>
                            </div>
                        <!-- rating product -->
                            <div class="ratings-vote">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col">
                                            <div class="jstars" 
                                                data-value="4.2" 
                                                data-total-stars="5" 
                                                data-color="#22D118" 
                                                data-empty-color="black" 
                                                data-size="30px">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <p>125 Review</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!-- Price Product -->
                            <div class="related-product-item-price">
                                <p>32.5$</p>
                            </div>
                        <!-- Button Buy -->
                            <div class="related-product-item-button-buy">
                                <div class="container-fluid">
                                    <div class="row text-center">
                                        <div class="col-3 slide-right">
                                            <button><i class="fas fa-eye"></i></button>
                                        </div>
                                        <div class="col-6 slide-top">
                                            <button class="related-product-item-button-buy-text">
                                                <p>Mua ngay</p>
                                            </button>
                                        </div>
                                        <div class="col-3 slide-left">
                                            <button><i class="fas fa-cart-plus"></i></button>
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
@stop