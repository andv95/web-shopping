@php
    $adminMenus = config('admin_menu');
@endphp
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ $assetLte }}/dist/img/main.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Shop Of Hoang</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ $assetLte }}/dist/img/user.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Hoàng Vũ</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                @foreach($adminMenus as $menu)
                    <li class="nav-item {{ !empty($menu['submenu']) ? 'has-treeview' : '' }}">
                        <a href="{{ @$menu['route'] ? route($menu['route']) : '' }}" class="nav-link">
                            <i class="nav-icon fas {{ @$menu['icon'] }}"></i>
                            <p>
                                {{ @$menu['name'] }}
                                {!! !empty($menu['submenu']) ? '<i class="right fas fa-angle-left"></i>' : '' !!}
                            </p>
                        </a>
                        @if(!empty($menu['submenu']))
                            <ul class="nav nav-treeview" style="display: none;">
                                @foreach($menu['submenu'] as $submenu)
                                    <li class="nav-item">
                                        <a href="{{ @$menu['route'] ? route($menu['route']) : '' }}" class="nav-link">
                                            <i class="nav-icon fas {{ @$submenu['icon'] }}"></i>
                                            <p>
                                                {{ @$submenu['name'] }}
                                            </p>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
