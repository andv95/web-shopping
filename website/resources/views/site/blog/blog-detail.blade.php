@extends ('templates.master')

@section ('title', 'Trang tin')

@section ('content')

<div class="blog-detail">
    <div class="blog-detail-wrapper mx-auto">
        <div class="blog-detail-title">
            <div class="blog-detail-title ">
                <h1 class="mt-5 mx-5">{{ $blog->title }}</h1>
            </div>
            <div class="blog-detail-date">
                <p class="mx-5">Posted at {{ $blog->getTime() }}</p>
            </div>
        </div>
        <div class="blog-detail-content">
            <div class="blog-detail-content-img mx-5 ">
                {!! $blog->description !!}
            </div>
            <div class="blog-detail-content-link m-3 p-3">
                <a href="" class="">More about our partnerships →</a>
            </div>
        </div>
        @include('site.component.category_list')
    </div>
</div>


@stop
