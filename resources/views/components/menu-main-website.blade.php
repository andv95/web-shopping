<ul class="navigation-nav">
    <li class="navigation-list">
        <ul class="navigation-list-main">
            @if(!empty($menus))
                @foreach($menus as $menu)
                    <li class="navigation-item {{@$menu['children'] ? 'has-menu' : ''}}">
                        <a href="{{ $menu['item']->link }}" title="{{ $menu['item']->name }}"
                           class="text-decoration navigation-link ">{{ $menu['item']->name }}
                        </a>

                        @if($menu['children'])
                            <div class=""></div>
                            <section class="megamenu">
                                <div class="megamenu-wrap">
                                    <div class="megamenu-body">
                                        <div id="verticalTab">
                                            <ul class="resp-tabs-list">
                                                @foreach($menu['children'] as $child)
                                                    <li>
                                                        {{--                                                    <a href="{{ $child['item']->link }}"--}}
                                                        {{--                                                       title="{{ $child['item']->name }}">{{ $child['item']->name }}</a>--}}
                                                        {{ $child['item']->name }}
                                                    </li>
                                                @endforeach
                                            </ul>

                                            <div class="resp-tabs-container">
                                                @foreach($menu['children'] as $child)
                                                    @if($child['children'])
                                                        <div>
                                                            <div class="navigation-tabs-pane">
                                                                <div class="navigation-row">
                                                                    <div class="navigation-col">
                                                                        <ul class="navigation-list">
                                                                            @foreach($child['children'] as $keyLast=>$ch)
                                                                                <li class="{{ $keyLast==0 ? 'navigation-list-heading' : 'navigation-list-item'}}">
                                                                                    <a class="navigation-list-item-link"
                                                                                       title="{{ $ch['item'] ->name}}"
                                                                                       href="{{ $ch['item']->link }}">{{ $ch['item']->name }}</a>
                                                                                </li>
                                                                            @endforeach
                                                                        </ul>
                                                                    </div>
                                                                    <div class="navigation-col">
                                                                        <div class="navigation-col-wrap">
                                                                            <img class="w-100"
                                                                                 src="{{asset('image/vuong2.png')}}"
                                                                                 alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="navigation-col">
                                                                        <div class="navigation-col-wrap">
                                                                            <img class="w-100"
                                                                                 src="{{asset('image/vuong2.png')}}"
                                                                                 alt="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </section>
                        @endif
                    </li>
                @endforeach
            @endif
        </ul>
    </li>
    <!-- <li class="navigation-link">
        daksd
    </li> -->
    <div class="navigation-social-menu">
        <ul class="navigation-social-menu-list">
            <li class="navigation-social-menu-item">
                <a class="navigation-social-menu-link" href="{{route('customer.show')}}">
                    <i class="fas fa-user"></i>
                </a>
            </li>
            <li class="navigation-social-menu-item" id="cart">
                <a class="navigation-social-menu-link" href="#">
                    <i class="fas fa-shopping-cart"></i>
                </a>
            </li>
        </ul>
    </div>
</ul>
