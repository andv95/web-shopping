@extends ('templates.master')

@section ('title', 'Trang tin')

@section ('content')
    <div class="title-categoty">
        <div class="wrapper-title-categoty">
            <div class="text-center ">
                <h6>Title Category</h6>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href=""><i class="fab fa-fort-awesome"></i> Home</a></li>
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

    <div class="list-category">
        <div class="container-fluid">
            <div class="row">
                <div class="col-3 my-auto">
                    <div class="category-item my-auto">
                        <div class="category-item-wrapper my-auto">
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
                            <div class="category-item-name">
                                <p>Tên Category</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-3 my-auto">
                    <div class="category-item my-auto">
                        <div class="category-item-wrapper my-auto">
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
                            <div class="category-item-name">
                                <p>Tên Category</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-3 my-auto">
                    <div class="category-item my-auto">
                        <div class="category-item-wrapper my-auto">
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
                            <div class="category-item-name">
                                <p>Tên Category</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 my-auto">
                    <div class="category-item my-auto">
                        <div class="category-item-wrapper my-auto">
                            <div class="img-category-main my-auto">
                                <a href="" class="image-link">
                                    <img src="{{ asset('image/image-product.jpg')}}" alt="" title="Name category">
                                </a>
                                <div class="img-category-hover">
                                    <a href="">
                                        <img src="{{asset('image/image-hover-product.jpg')}}" alt="" title="Name category">
                                    </a>
                                </div>
                            </div>
                            <div class="category-item-name">
                                <p>Tên Category</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@stop