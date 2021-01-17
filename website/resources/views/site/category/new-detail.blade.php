@extends('templates.master')

@section('title', 'Trang tin')

@section('content')
<div class="Site-inner-body">
    <div class="Site-inner mx-auto pt-5">
        <header class="Header-detail pt-3">
            <div class="Header-inner">
                <div class="Header-detail-left w-25">
                    <img class="w-100" src="{{asset('image/LogoAp.png')}}" alt="">
                </div>
                <div class="Header-detail-right">
                    <div class="Header-tagline p-1">
                        Wares lighthearted in Nature.
                    </div>
                </div>
            </div>
        </header>
        <div class="Content-outer">
            <main class="Main--products-item">
                <div class="ProductItem-nav d-flex justify-content-between">
                    <div class="breadcrum">
                        <a class="ProductItem-nav-breadcrumb-link a-decoration" href="#">Shop</a>
                        <span class="mx-2">></span>
                        <a class="ProductItem-nav-breadcrumb-link a-decoration" href="#">Moon and Star Travel Cup</a>
                    </div>
                    <div class="ProductItem-nav-pagination">
                        <a class="ProductItem-nav-breadcrumb-link a-decoration" href="#">
                            < Previous
                        </a>
                        <span class="mx-2">/</span>
                        <a class="ProductItem-nav-breadcrumb-link a-decoration" href="#">
                            Next >
                        </a>
                    </div>
                </div>
                <div class="ProductItem-summary">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-8 col-lg-5 col-md-12">
                                <div class="img__main__detail p-2">
                                    <img id="imageZoom" class="w-100 fade-in" src="{{asset('image/vuong2.png')}}" alt="">
                                </div>
                                <div class="img__extra__detail d-flex flex-wrap pt-2">
                                    <div class="img__extra__detail-item w-25 p-2">
                                        <img class="img-click-change w-100" src="{{asset('image/vuong.jpg')}}" alt="">
                                    </div>
                                    <div class="img__extra__detail-item w-25 p-2">
                                        <img class="img-click-change w-100" src="{{asset('image/vuong-1.jpg')}}" alt="">
                                    </div>
                                    <div class="img__extra__detail-item w-25 p-2">
                                        <img class="img-click-change w-100" src="{{asset('image/vuong-hover.jpg')}}" alt="">
                                    </div>
                                    <div class="img__extra__detail-item w-25 p-2">
                                        <img class="img-click-change w-100" src="{{asset('image/vuong.jpg')}}" alt="">
                                    </div>
                                    <div class="img__extra__detail-item w-25 p-2">
                                        <img class="img-click-change w-100" src="{{asset('image/vuong-1.jpg')}}" alt="">
                                    </div>
                                    <div class="img__extra__detail-item w-25 p-2">
                                        <img class="img-click-change w-100" src="{{asset('image/vuong-hover.jpg')}}" alt="">
                                    </div>
                                    <div class="img__extra__detail-item w-25 p-2">
                                        <img class="img-click-change w-100" src="{{asset('image/vuong.jpg')}}" alt="">
                                    </div>
                                    <div class="img__extra__detail-item w-25 p-2">
                                        <img class="img-click-change w-100" src="{{asset('image/img1000.jpg')}}" alt="">
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
                                        <p>$ 36.00</p>
                                    </div>
                                    <div class="info__rating--detail mb-5">
                                        <div class="jstars" 
                                            data-value="4.7" 
                                            data-total-stars="5" 
                                            data-color="#FFFF00" 
                                            data-empty-color="black" 
                                            data-size="15px">
                                        </div>
                                    </div>
                                    <div class="info__content--detail">
                                        <p>Moon and Star Stacking Cups are inspired by the night skies in the Maine countryside and perfect for small spaces and compact living.</p>
                                        <p>The Eco-Top lid transforms your tumbler into a travel mug. Please specify color of lid (black or pearl white) at checkout.</p>
                                        <p>Each cup measures approximately 5.5” tall, 3.25” wide at the mouth, and 2.5” wide at the base so they stack well.</p>
                                        <p>All glazes are lead free and food safe. 22k gold lustre is applied during a low-fire third firing. DO NOT microwave. Hand washing is recommended.</p>
                                    </div>
                                    <div class="info__quantity--detail">
                                        <form action="">
                                            <div class="info__quantity--label">
                                                <label for="" class="up-text">Quantity:</label>
                                            </div>
                                            <div class="info__quantity--input">
                                                <input type="number" name="" value="1" step="1">
                                            </div>
                                            <div class="info__add-to-cart mb-3">
                                                <a href="#" class="a-decoration up-text">
                                                    Add To Cart
                                                </a>
                                            </div>
                                            <div class="info__share--detail py-3 my-5 d-flex">
                                                <div class="info__share--icon px-1">
                                                    <a href="#" class="link-icon-fb">
                                                        <i class="fab fa-facebook-square"></i>
                                                    </a>
                                                </div>
                                                <div class="info__share--icon px-1">
                                                    <a href="#" class="link-icon-ins">
                                                        <i class="fab fa-instagram-square"></i>
                                                    </a>
                                                </div>
                                                <div class="info__wishlist">
                                                    @if(1==2)
                                                    <a href="#">
                                                        <img src="{{asset('image/heart_icon.png')}}" alt="">
                                                    </a>
                                                    @elseif(1==1)
                                                    <a href="#">
                                                        <img src="{{asset('image/heart_icon_active.png')}}" alt="">
                                                    </a>
                                                    @endif
                                                </div>
                                            </div>
                                        </form>
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