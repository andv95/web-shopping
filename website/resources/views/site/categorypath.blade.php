@extends ('templates.master')

@section ('title', 'Trang tin')

@section ('content')

    <div class="categorypath">
        <div class="page-wrapper">
            <main id="maincontent" class="page-main">
                <div class="header">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-8">
                                <div class="img-header">
                                    <img src="{{asset('image/1008.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="col-4 my-auto text-center">
                                <div class="title-header">
                                    <h3>Title Category</h3>
                                    <p>Thông tin cơ bản về category</p>
                                </div>
                                <div class="btn">
                                    Nút
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-icon-category">
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-7">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col ">
                                            <div class="icon-top">
                                            <div class="item-icon-main-body text-center">
                                                <i class="fas fas-icon fa-money-check-alt"></i>
                                            </div>
                                            <div class="text-center">
                                                Tiền
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col ">
                                            <div class="icon-top">
                                            <div class="item-icon-main-body text-center">
                                                <i class="fas fas-icon fa-tshirt"></i>
                                            </div>
                                            <div class="text-center">
                                                Áo
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col ">
                                            <div class="icon-top">
                                            <div class="item-icon-main-body text-center">
                                                <i class="fas fas-icon fa-hat-cowboy"></i>
                                            </div>
                                            <div class="text-center">
                                                Mũ
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col ">
                                            <div class="icon-top">
                                            <div class="item-icon-main-body text-center">
                                                <i class="fas fas-icon fa-socks"></i>
                                            </div>
                                            <div class="text-center">Tất</div>
                                            </div>
                                        </div>
                                        <div class="col ">
                                            <div class="icon-top">
                                            <div class="item-icon-main-body text-center">
                                                <i class="fas fas-icon fa-mitten"></i>
                                            </div>
                                            <div class="text-center">Găng tay</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href=""><i class="fab fa-fort-awesome"></i> Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">Library</a></li>
                                    <li class="breadcrumb-item"><a href="#">Library</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Data</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col text-right my-auto">
                            <select id="sort" class="shop__sort-select pitch caps color--off-white pointer" name="sort"> Sort
                                <option class="color--primary" data-ascending="true" value="original-order">Featured</option>
                                <option class="color--primary" data-ascending="true" value="price">Price Low</option>
                                <option class="color--primary" data-ascending="false" value="price">Price High</option>
                                <option class="color--primary" data-ascending="false" value="release">Newest</option>
                                <option class="color--primary" data-ascending="true" value="rank">Most Popular</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="list-product-item">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-3">
                                <div class="product-item-wrapper">
                                    <div class="product-item-img-wrapper">
                                        <div class="img-category-main my-auto">
                                            <a href="" class="image-link">
                                                <img src="{{ asset('image/image-product.jpg')}}" alt="" title="Name category">
                                            </a>
                                        </div>
                                        <div class="img-category-hover">
                                            <a href="">
                                                <img src="{{asset('image/image-hover-product.jpg')}}" alt="" title="Name category">
                                            </a>
                                        </div>
                                        <div class="item-product-name">
											<h5>Tên sản phẩm</h5>
										</div>
										<div class="item-product-evaluate">
											<div class="container-fluid">
												<div class="row">
													<div class="col-8">
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
													<div class="col-4">
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
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="product-item-wrapper">
                                    <div class="product-item-img-wrapper">
                                        <div class="img-category-main my-auto">
                                            <a href="" class="image-link">
                                                <img src="{{ asset('image/image-product.jpg')}}" alt="" title="Name category">
                                            </a>
                                        </div>
                                        <div class="img-category-hover">
                                            <a href="">
                                                <img src="{{asset('image/image-hover-product.jpg')}}" alt="" title="Name category">
                                            </a>
                                        </div>
                                        <div class="item-product-name">
											<h5>Tên sản phẩm</h5>
										</div>
										<div class="item-product-evaluate">
											<div class="container-fluid">
												<div class="row">
													<div class="col-8">
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
													<div class="col-4">
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
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="product-item-wrapper">
                                    <div class="product-item-img-wrapper">
                                        <div class="img-category-main my-auto">
                                            <a href="" class="image-link">
                                                <img src="{{ asset('image/image-product.jpg')}}" alt="" title="Name category">
                                            </a>
                                        </div>
                                        <div class="img-category-hover">
                                            <a href="">
                                                <img src="{{asset('image/image-hover-product.jpg')}}" alt="" title="Name category">
                                            </a>
                                        </div>
                                        <div class="item-product-name">
											<h5>Tên sản phẩm</h5>
										</div>
										<div class="item-product-evaluate">
											<div class="container-fluid">
												<div class="row">
													<div class="col-8">
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
													<div class="col-4">
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
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="product-item-wrapper">
                                    <div class="product-item-img-wrapper">
                                        <div class="img-category-main my-auto">
                                            <a href="" class="image-link">
                                                <img src="{{ asset('image/image-product.jpg')}}" alt="" title="Name category">
                                            </a>
                                        </div>
                                        <div class="img-category-hover">
                                            <a href="">
                                                <img src="{{asset('image/image-hover-product.jpg')}}" alt="" title="Name category">
                                            </a>
                                        </div>
                                        <div class="item-product-name">
											<h5>Tên sản phẩm</h5>
										</div>
										<div class="item-product-evaluate">
											<div class="container-fluid">
												<div class="row">
													<div class="col-8">
                                                        <div class="jstars" 
                                                            data-value="4.2" 
                                                            data-total-stars="5" 
                                                            data-color="#22D118" 
                                                            data-empty-color="black" 
                                                            data-size="30px">
                                                        </div>
													</div>
													<div class="col-4">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

@stop