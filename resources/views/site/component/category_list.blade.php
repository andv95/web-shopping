<div class="list-blog-categories  mx-auto my-5">
    <div class="list-blog-categories-title text-center">
        <h4>CATEGORIES</h4>
    </div>
    <div class="d-flex flex-wrap justify-content-center">
        @if(!empty($categories))
            @foreach($categories as $category)
                <a href="{{route('list.category', $category->slug)}}" class="a-decoration p-2 m-2 blog-categories-link">
                    {{ $category->name }}
                </a>
            @endforeach
        @endif
    </div>
</div>
