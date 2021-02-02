@extends ('templates.master')

@section ('title', 'Trang tin')

@section ('content')

<div class="blog-detail">
    <div class="blog-detail-wrapper mx-auto">
        <div class="blog-detail-title">
            <div class="blog-detail-title ">
                <h1 class="mt-5 mx-5">Is Nudie Jeans the most transparent company in the world?</h1>
            </div>
            <div class="blog-detail-date">
                <p class="mx-5">Posted at 7:00 AM, 12/15/2020</p>
            </div>
        </div>
        <div class="blog-detail-content">
            <div class="blog-detail-content-img m-3 p-3">
                <img class="w-100" src="{{asset('image/blog-img.jpg')}}" alt="">
            </div>
            <p class="mx-5 blog-detail-content-text" >In 2013, one of our owners said, ”One day, we’re going to be the most transparent denim brand in the world.” That prediction was correct to some degree because we are well on our way. When we launch our Winter 2020 collection, we’re taking this one step further, by introducing Product-Level Transparency.</p>
            <p class="mx-5">Re-use Drop 11 is going to be something special for sure. We managed to get our hands on two of our colleagues’ past favorites, so we decided to put in some extra work, creating User Stories with a few words of advice for the new owners from the previous owners. Get ready, people!</p>
            <p class="mx-5">
            You can always find one-of-a-kind Re-use jeans in all Nudie Jeans Repair Shops. The Re-use concept is pretty straight forward: we don’t believe that ”jeans” and ”throwaway” are words that belong together. In fact, we know that if you take proper care of garments, repairing them when needed, you’ll not only do the planet a favor, you’ll also get a unique garment that tells your story.
            </p>
            <div class="blog-detail-content-img m-3 p-3">
                <img class="w-100" src="{{asset('image/blog-img.jpg')}}" alt="">
            </div>
            <div class="blog-detail-content-link m-3 p-3">
                <a href="#" class="">More about our partnerships →</a>
            </div>
        </div>
        <div class="list-blog-categories  mx-auto my-5">
            <div class="list-blog-categories-title text-center">
                <h4>CATEGORIES</h4>
            </div>
            <div class="d-flex flex-wrap justify-content-center">
                <a href="#" class="a-decoration p-2 m-2 blog-categories-link">
                    Quần Áo
                </a>
            </div>
        </div>
    </div>
</div>
    

@stop