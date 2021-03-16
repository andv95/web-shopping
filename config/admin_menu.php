<?php
return [
    'dashboard' => [
        'name' => 'Dashboard',
        'icon' => 'fa-th',
        'route' => 'admin.dashboard',
    ],
    'pages' => [
        'name' => 'Page',
        'icon' => 'fa-globe',
        'route' => 'admin.page.index',
    ],

    'setting_products' => [
        'name' => 'About Main Website',
        'type' => '1'
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

    'order' => [
        'name' => 'Order',
        'icon' => 'fa-gift',
        'route' => 'admin.dashboard',
    ],

    'blogs' => [
        'name' => 'Blogs Manage',
        'icon' => 'fa-blog',
        'route' => 'admin.blog.index',
        'submenu' => [
                        'blog' => [
                            'name' => 'Blogs',
                            'icon' => 'fa-blog',
                            'route' => 'admin.blog.index',
                        ],
                        'blog_category' => [
                            'name' => 'Blog Category',
                            'icon' => 'fa-list-ol',
                            'route' => 'admin.blog_category.index',
                        ],
                    ],
    ],
    'config_head' => [
        'name' => 'All Config',
        'type' => '1'
    ],

    'config_menu' => [
        'name' => 'Website Menu',
        'icon' => 'fa-list-alt',
        'route' => 'admin.menu.index',
        'submenu' => [
            'list' => [
                'name' => 'Menu list',
                'icon' => 'fa-th-list',
                'route' => 'admin.menu.index',
            ],
            'category' => [
                'name' => 'Menu item',
                'icon' => 'fa-list-ul',
                'route' => 'admin.menu_item.index',
            ],
        ],
    ],

    'config_setting' => [
        'name' => 'Website Setting',
        'icon' => 'fa-cogs',
        'route' => 'admin.setting.index',
        'submenu' => [
            'exchange' => [
                'name' => 'Add Setting',
                'icon' => 'fas fa-tools',
                'route' => 'admin.setting.index',
            ],
            'property' => [
                'name' => 'Setting Detail',
                'icon' => 'fas fa-users-cog',
                'route' => 'admin.setting.settingDetail',
            ],
        ],
    ],
];
