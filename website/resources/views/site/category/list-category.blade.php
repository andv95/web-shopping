@extends('templates.master')

@section('content')
    <div class="list-category text-center">
        <div class="list-category-wrap">
            <div class="row list-category-wrap-border">
                <div class="col-xl-3 col-md-12 border-gold p-0 mb-2">
                    <div class="list-group list-group-flush" id="list-tab" role="tablist">
                        @if(!@empty($categories))
                        @foreach($categories as $category)
                        <a class="list-group-item list-group-item-action align-items-center d-flex justify-content-between {{ $category->id == $blogCategory->id ? 'active' : '' }}"
                           id="list-home-list"
                           href="{{ route('list.category', $category->slug) }}" role="tab" aria-controls="home">
                            <p class="m-0">{{ $category->name }}</p>
                            <i class="fas fa-chevron-right"></i>
                        </a>
                        @endforeach
                        @endif
                    </div>
                </div>
                <div class="col-xl-9 col-md-12">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="list-home" role="tabpanel"
                             aria-labelledby="list-home-list">

                            @if(!empty($blogs))
                                @foreach($blogs as $blog)
                                    <div class="list-category-item text-center">
                                        <div class="container-fluid">
                                            <div class="row align-items-center">
                                                <div class="col-xl-8 col-md-12 p-0">
                                                    <img class="list-category-item-img w-100 "
                                                         src="{{ @json_decode($blog->image)->src }}"
                                                         title="{{ @json_decode($blog->image)->title }}"
                                                         alt="{{ @json_decode($blog->image)->alt }}"
                                                    >
                                                </div>
                                                <div class="col-xl-4 col-md-12">
                                                    <div class="list-category-item-info">
                                                        <div class="list-category-item-info-title text-bold">
                                                            {{ $blog->title }}
                                                        </div>
                                                        <div class="list-category-item-info-content">
                                                            {{ $blog->except }}
                                                        </div>
                                                        <div class="list-category-item-info-btn">
                                                            <a class="list-category-item-link" href="{{route('show.blog', $blog->slug)}}">
                                                                ⭐
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                {!! $blogs->links('site.pagination') !!}
                            @endif

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
                                                    <a class="list-category-item-link" href="{{route('new.category')}}">
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
                                                    <a class="list-category-item-link" href="{{route('new.category')}}">
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
                                                    <a class="list-category-item-link" href="{{route('new.category')}}">
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
                                                    <a class="list-category-item-link" href="{{route('new.category')}}">
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
                                                    <a class="list-category-item-link" href="{{route('new.category')}}">
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
                                                    <a class="list-category-item-link" href="{{route('new.category')}}">
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
