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
        'route' => 'admin.product.index',
        'submenu' => [
            'list' => [
                'name' => 'List Product',
                'icon' => 'fa-th-list',
                'route' => 'admin.product.index',
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
                'route' => 'admin.property.index',
            ],
        ],
    ],

    'blog' => [
        'name' => 'Blogs',
        'icon' => 'fa-blog',
        'route' => 'admin.blog.index',
    ],
];
