@extends('templates.master')

@section('content')
    <div class="list-category text-center">
        <div class="list-category-wrap">
            <div class="row list-category-wrap-border">
                <div class="col-xl-3 col-md-12 border-gold p-0 mb-2">
                    <div class="list-group list-group-flush" id="list-tab" role="tablist">
                        <a class="list-group-item list-group-item-action active align-items-center d-flex justify-content-between"
                           id="list-home-list" data-bs-toggle="list"
                           href="#list-home" role="tab" aria-controls="home">
                            <p class="m-0">Home</p>
                            <i class="fas fa-chevron-right"></i>
                        </a>
                        <a class="list-group-item list-group-item-action align-items-center d-flex justify-content-between"
                           id="list-profile-list" data-bs-toggle="list"
                           href="#list-profile" role="tab" aria-controls="profile">
                            <p class="m-0">Loại 1</p>
                            <i class="fas fa-chevron-right"></i>
                        </a>
                        <a class="list-group-item list-group-item-action align-items-center d-flex justify-content-between"
                           id="list-messages-list" data-bs-toggle="list"
                           href="#list-messages" role="tab" aria-controls="messages">
                            <p class="m-0">Loại 2</p>
                            <i class="fas fa-chevron-right"></i>
                        </a>
                        <a class="list-group-item list-group-item-action align-items-center d-flex justify-content-between"
                           id="list-settings-list" data-bs-toggle="list"
                           href="#list-settings" role="tab" aria-controls="settings">
                            <p class="m-0">Loại 3</p>
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-xl-9 col-md-12">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="list-home" role="tabpanel"
                             aria-labelledby="list-home-list">
                            <div class="list-category-item text-center">
                                <div class="container-fluid">
                                    <div class="row align-items-center">
                                        <div class="col-xl-9 col-md-12 p-0">
                                            <img class="list-category-item-img w-100"
                                                 src="{{asset('image/1000x400-2.png')}}">
                                        </div>
                                        <div class="col-xl-3 col-md-12">
                                            <div class="list-category-item-info">
                                                <div class="list-category-item-info-title text-bold">
                                                    Men Outfit
                                                </div>
                                                <div class="list-category-item-info-content">
                                                    Wearing Vitamin C Marks in meet is Not Sgajaga kasdkahd asdkjajiqwe
                                                    sda qiw ajss kjasqow asdkaqw asadkqoiwe jasdsj
                                                </div>
                                                <div class="list-category-item-info-btn">
                                                    <a class="list-category-item-link" href="#">
                                                        ⭐
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="list-category-item text-center">
                                <div class="container-fluid">
                                    <div class="row align-items-center">
                                        <div class="col-xl-9 col-md-12 p-0">
                                            <img class="list-category-item-img w-100"
                                                 src="{{asset('image/1000x400-1.jpg')}}">
                                        </div>
                                        <div class="col-xl-3 col-md-12">
                                            <div class="list-category-item-info">
                                                <div class="list-category-item-info-title text-bold">
                                                    Men Outfit
                                                </div>
                                                <div class="list-category-item-info-content">
                                                    Wearing Vitamin C Marks in meet is Not Sgajaga kasdkahd asdkjajiqwe
                                                    sda qiw ajss kjasqow asdkaqw asadkqoiwe jasdsj
                                                </div>
                                                <div class="list-category-item-info-btn">
                                                    <a class="list-category-item-link" href="#">
                                                        ⭐
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="list-profile" role="tabpanel"
                             aria-labelledby="list-profile-list">
                            <div class="list-category-item text-center">
                                <div class="container-fluid">
                                    <div class="row align-items-center">
                                        <div class="col-xl-9 col-md-12 p-0">
                                            <img class="list-category-item-img w-100"
                                                 src="{{asset('image/1000x400-1.jpg')}}">
                                        </div>
                                        <div class="col-xl-3 col-md-12">
                                            <div class="list-category-item-info">
                                                <div class="list-category-item-info-title text-bold">
                                                    Men Outfit
                                                </div>
                                                <div class="list-category-item-info-content">
                                                    Wearing Vitamin C Marks in meet is Not Sgajaga kasdkahd asdkjajiqwe
                                                    sda qiw ajss kjasqow asdkaqw asadkqoiwe jasdsj
                                                </div>
                                                <div class="list-category-item-info-btn">
                                                    <a class="list-category-item-link" href="#">
                                                        ⭐
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="list-category-item text-center">
                                <div class="container-fluid">
                                    <div class="row align-items-center">
                                        <div class="col-xl-9 col-md-12 p-0">
                                            <img class="list-category-item-img w-100"
                                                 src="{{asset('image/1000x400-2.png')}}">
                                        </div>
                                        <div class="col-xl-3 col-md-12">
                                            <div class="list-category-item-info">
                                                <div class="list-category-item-info-title text-bold">
                                                    Men Outfit
                                                </div>
                                                <div class="list-category-item-info-content">
                                                    Wearing Vitamin C Marks in meet is Not Sgajaga kasdkahd asdkjajiqwe
                                                    sda qiw ajss kjasqow asdkaqw asadkqoiwe jasdsj
                                                </div>
                                                <div class="list-category-item-info-btn">
                                                    <a class="list-category-item-link" href="#">
                                                        ⭐
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="list-messages" role="tabpanel"
                             aria-labelledby="list-messages-list">
                            <div class="list-category-item text-center">
                                <div class="container-fluid">
                                    <div class="row align-items-center">
                                        <div class="col-xl-9 col-md-12 p-0">
                                            <img class="list-category-item-img w-100"
                                                 src="{{asset('image/1000x400-2.png')}}">
                                        </div>
                                        <div class="col-xl-3 col-md-12">
                                            <div class="list-category-item-info">
                                                <div class="list-category-item-info-title text-bold">
                                                    Men Outfit
                                                </div>
                                                <div class="list-category-item-info-content">
                                                    Wearing Vitamin C Marks in meet is Not Sgajaga kasdkahd asdkjajiqwe
                                                    sda qiw ajss kjasqow asdkaqw asadkqoiwe jasdsj
                                                </div>
                                                <div class="list-category-item-info-btn">
                                                    <a class="list-category-item-link" href="#">
                                                        ⭐
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="list-category-item text-center">
                                <div class="container-fluid">
                                    <div class="row align-items-center">
                                        <div class="col-xl-9 col-md-12 p-0">
                                            <img class="list-category-item-img w-100"
                                                 src="{{asset('image/1000x400-1.jpg')}}">
                                        </div>
                                        <div class="col-xl-3 col-md-12">
                                            <div class="list-category-item-info">
                                                <div class="list-category-item-info-title text-bold">
                                                    Men Outfit
                                                </div>
                                                <div class="list-category-item-info-content">
                                                    Wearing Vitamin C Marks in meet is Not Sgajaga kasdkahd asdkjajiqwe
                                                    sda qiw ajss kjasqow asdkaqw asadkqoiwe jasdsj
                                                </div>
                                                <div class="list-category-item-info-btn">
                                                    <a class="list-category-item-link" href="#">
                                                        ⭐
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="list-settings" role="tabpanel"
                             aria-labelledby="list-settings-list">
                            <div class="list-category-item text-center">
                                <div class="container-fluid">
                                    <div class="row align-items-center">
                                        <div class="col-xl-9 col-md-12 p-0">
                                            <img class="list-category-item-img w-100"
                                                 src="{{asset('image/1000x400-1.jpg')}}">
                                        </div>
                                        <div class="col-xl-3 col-md-12">
                                            <div class="list-category-item-info">
                                                <div class="list-category-item-info-title text-bold">
                                                    Men Outfit
                                                </div>
                                                <div class="list-category-item-info-content">
                                                    Wearing Vitamin C Marks in meet is Not Sgajaga kasdkahd asdkjajiqwe
                                                    sda qiw ajss kjasqow asdkaqw asadkqoiwe jasdsj
                                                </div>
                                                <div class="list-category-item-info-btn">
                                                    <a class="list-category-item-link" href="#">
                                                        ⭐
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="list-category-item text-center">
                                <div class="container-fluid">
                                    <div class="row align-items-center">
                                        <div class="col-xl-9 col-md-12 p-0">
                                            <img class="list-category-item-img w-100"
                                                 src="{{asset('image/1000x400-2.png')}}">
                                        </div>
                                        <div class="col-xl-3 col-md-12">
                                            <div class="list-category-item-info">
                                                <div class="list-category-item-info-title text-bold">
                                                    Men Outfit
                                                </div>
                                                <div class="list-category-item-info-content">
                                                    Wearing Vitamin C Marks in meet is Not Sgajaga kasdkahd asdkjajiqwe
                                                    sda qiw ajss kjasqow asdkaqw asadkqoiwe jasdsj
                                                </div>
                                                <div class="list-category-item-info-btn">
                                                    <a class="list-category-item-link" href="#">
                                                        ⭐
                                                    </a>
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
    </div>

@stop
