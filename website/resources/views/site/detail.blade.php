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
                                            <input type="radio" id="star5" name="rating" value="5" />
                                            <label class = "full" for="star5" title="Awesome - 5 stars"></label>
                                            
                                            <input type="radio" id="star4" name="rating" value="4" />
                                            <label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                                            
                                            <input type="radio" id="star3" name="rating" value="3" />
                                            <label class = "full" for="star3" title="Meh - 3 stars"></label>
                                            
                                            <input type="radio" id="star2" name="rating" value="2" />
                                            <label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                                            
                                            <input type="radio" id="star1" name="rating" value="1" />
                                            <label class = "full" for="star1" title="Sucks big time - 1 star"></label>
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
                    <div class="product-item-color">
                         <!-- ADD TO CART FORM -->
                        <div class="product-page__form mt3 md--dn--hide">
                            <form class="add-to-cart add-to-cart--single mb2 mx--auto">
                        <!-- Output all variants in a hidden selector -->
                                    
                                    <!-- Check to see if there are more than 1 variant, if so output all options -->
                                    <!-- Desktop CTA -->
                                <div class="add-to-cart__desktop table full--w col--12 md--col--7">
                                    <input type="hidden" class="js--handle" name="handle" value="booty-drops-firming-oil">
                                    <div class="quantity quantity--full table-cell  border relative">
                                        <i class="fas fa-minus"></i>
                                        <input class="quantity__input js--quantity full top--0 left--0" name="quantity" pattern="[0-9]*" value="1">
                                        <i class="fas fa-plus"></i>
                                    </div>
                                    <div class="add-to-cart__cta table-cell pl1 pitch caps">
                                        <button type="submit" class="add-to-cart__single  product-item__add-to-cart product-item__add-to-cart--desktop button button--standard full--w caps max-width--1">
                                        Add to bag                                             </button>
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
                    <div class="information-text-extra">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Collapsible Group Item #1
                                    </button>
                                </h2>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Collapsible Group Item #2
                                    </button>
                                </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Collapsible Group Item #3
                                    </button>
                                </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
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