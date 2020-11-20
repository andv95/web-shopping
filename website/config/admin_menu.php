<?php
return [
    'dashboard' => [
        'name' => 'Dashboard',
        'icon' => 'fa-th',
        'route' => 'admin.dashboard',
    ],

    'products' => [
        'name' => 'Products Manage',
        'icon' => 'fa-hdd',
        'route' => 'admin.dashboard',
        'submenu' => [
            'list' => [
                'name' => 'List',
                'icon' => 'fa-th-list',
                'route' => 'admin.dashboard',
            ],
            'category' => [
                'name' => 'Category',
                'icon' => 'fa-list-ul',
                'route' => 'admin.category.index',
            ],
            'exchange' => [
                'name' => 'Exchange',
                'icon' => 'fa-dollar-sign',
                'route' => 'admin.exchange_rate.index',
            ],
            'property' => [
                'name' => 'Property',
                'icon' => 'fa-text-height',
                'route' => 'admin.dashboard',
            ],
        ],
    ],

    'blog' => [
        'name' => 'Blogs',
        'icon' => 'fa-blog',
        'route' => 'admin.dashboard',
    ],
];
