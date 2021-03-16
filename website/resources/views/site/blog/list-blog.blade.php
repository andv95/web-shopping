@extends ('templates.master')

@section ('title', 'Trang tin')

@section ('content')

<div class="list-blog-body">
    <div class="list-blog-wrapper">
        <div class="list-blog-content mb-4 mx-auto">
            <div class="container-fluid">
                <div class="row">
                    @if(!empty($blogs))
                        @foreach($blogs as $blog)
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mt-5 ">
                            <div class="list-blog-item">
                                <a href="{{ route('show.blog', $blog->slug) }}" class="a-decoration color-black color-black-hover kenburns-top">
                                    <div class="blog-item-img">
                                        <figure>
                                            <img class="w-100" src="{{ $blog->getImage()->src }}" alt="{{ $blog->getImage()->alt }}" title="{{ $blog->getImage()->title }}">
                                        </figure>
                                    </div>
                                    <div class="blog-item-name">
                                        <p>{{ $blog->title }}</p>
                                    </div>
                                    <div class="blog-item-summary">
                                        <p class="text-truncate">{{ $blog->except }}</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    @endif
                    {!! $blogs->links('site.pagination') !!}
                </div>
            </div>
        </div>
        @include('site.component.category_list')
        <div class="line"></div>
        <div class="list-blog-slide">
            dasd
        </div>
    </div>
</div>


@stop
