@foreach($menus as $menu)
    <div class="footer_right-item">
        <a class="up-text footer_right_item-link" href="{{ $menu['item']->link }}" title="{{ $menu['item']->name }}">
            {{ $menu['item']->name }}
        </a>
    </div>
@endforeach
