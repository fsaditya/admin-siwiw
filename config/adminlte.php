<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | Here you can change the default title of your admin panel.
    |
    | For detailed instructions you can look the title section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'title' => 'Admin Sistem Informasi Wisuda',
    'title_prefix' => 'Admin Sistem Informasi Wisuda',
    'title_postfix' => 'Admin Sistem Informasi Wisuda',

    /*
    |--------------------------------------------------------------------------
    | Favicon
    |--------------------------------------------------------------------------
    |
    | Here you can activate the favicon.
    |
    | For detailed instructions you can look the favicon section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_ico_only' => false,
    'use_full_favicon' => false,

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    | For detailed instructions you can look the logo section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'logo' => '<b>Admin</b>SIWI',
    'logo_img' => 'vendor/adminlte/dist/img/AdminLTELogo.png',
    'logo_img_class' => 'brand-image img-circle elevation-3',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => 'Admin Siwi',

    /*
    |--------------------------------------------------------------------------
    | User Menu
    |--------------------------------------------------------------------------
    |
    | Here you can activate and change the user menu.
    |
    | For detailed instructions you can look the user menu section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'usermenu_enabled' => true,
    'usermenu_header' => true,
    'usermenu_header_class' => 'bg-primary',
    'usermenu_image' => true,
    'usermenu_desc' => true,
    'usermenu_profile_url' => true,
    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Here we change the layout of your admin panel.
    |
    | For detailed instructions you can look the layout section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => null,
    'layout_fixed_navbar' => null,
    'layout_fixed_footer' => null,
    'layout_dark_mode' => null,

    /*
    |--------------------------------------------------------------------------
    | Authentication Views Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the authentication views.
    |
    | For detailed instructions you can look the auth classes section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_auth_card' => 'card-outline card-primary',
    'classes_auth_header' => '',
    'classes_auth_body' => '',
    'classes_auth_footer' => '',
    'classes_auth_icon' => '',
    'classes_auth_btn' => 'btn-flat btn-primary',

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For detailed instructions you can look the admin panel classes here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_body' => '',
    'classes_brand' => '',
    'classes_brand_text' => '',
    'classes_content_wrapper' => '',
    'classes_content_header' => '',
    'classes_content' => '',
    'classes_sidebar' => 'sidebar-dark-primary elevation-4',
    'classes_sidebar_nav' => '',
    'classes_topnav' => 'navbar-white navbar-light',
    'classes_topnav_nav' => 'navbar-expand',
    'classes_topnav_container' => 'container',

    /*
    |--------------------------------------------------------------------------
    | Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar of the admin panel.
    |
    | For detailed instructions you can look the sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'sidebar_mini' => 'lg',
    'sidebar_collapse' => false,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => false,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-light',
    'sidebar_scrollbar_auto_hide' => '10    ',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 300,

    /*
    |--------------------------------------------------------------------------
    | Control Sidebar (Right Sidebar)
    |--------------------------------------------------------------------------
    |
    | Here we can modify the right sidebar aka control sidebar of the admin panel.
    |
    | For detailed instructions you can look the right sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'right_sidebar' => false,
    'right_sidebar_icon' => 'fas fa-cogs',
    'right_sidebar_theme' => 'dark',
    'right_sidebar_slide' => true,
    'right_sidebar_push' => true,
    'right_sidebar_scrollbar_theme' => 'os-theme-light',
    'right_sidebar_scrollbar_auto_hide' => 'l',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | For detailed instructions you can look the urls section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_route_url' => false,
    'dashboard_url' => 'home',
    'logout_url' => 'logout',
    'login_url' => 'login',
    'register_url' => 'register',
    'password_reset_url' => 'password/reset',
    'password_email_url' => 'password/email',
    'profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Laravel Mix
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Laravel Mix option for the admin panel.
    |
    | For detailed instructions you can look the laravel mix section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'enabled_laravel_mix' => false,
    'laravel_mix_css_path' => 'css/app.css',
    'laravel_mix_js_path' => 'js/app.js',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'menu' => [
        // Navbar items:
        [
            'type'         => 'fullscreen-widget',
            'topnav_right' => true,
        ],

        // Sidebar items:
        [
            'text' => 'blog',
            'url'  => 'admin/blog',
            'can'  => 'manage-blog',
        ],
        ['header' => 'Data Users'],
        // [
        //     'text'        => 'Semua',
        //     'url'         => 'rekap',
        //     'icon'        => 'fa fa-users',
        //     'label_color' => 'success',
        // ],
        
        [
            'text'    => 'Tiap Prodi',
            'icon'    => 'fa fa-tags',
            'submenu' => [
                [
                    'text'    => 'Jurusan Pajak',
                    'url'     => '#',
                    'icon' => 'fa fa-tag',
                    'submenu' => [
                        [
                            'text' => 'D III Pajak',
                            'url'  => 'users/d3pajak',
                        ],
                        [
                            'text' => 'D III Pajak AP',
                            'url'  => 'users/d3pajakap',
                        ],
                        [
                            'text' => 'D III PBB/Penilai',
                            'url'  => 'users/d3pbb',
                        ],
                        [
                            'text' => 'D III PBB/Penilai AP 2018',
                            'url'  => 'users/d3pbbap18',
                        ],
                        [
                            'text' => 'D III PBB/Penilai AP 2019',
                            'url'  => 'users/d3pbbap19',
                        ],
                    ],
                ],
                [
                    'text'    => 'Jurusan Akuntansi',
                    'url'     => '#',
                    'icon' => 'fa fa-tag',
                    'submenu' => [
                        [
                            'text' => 'D III Akuntansi',
                            'url'  => 'users/d3akun',
                        ],
                        [
                            'text' => 'D III Akuntansi AP',
                            'url'  => 'users/d3akunap',
                        ],
                        [
                            'text' => 'D IV Akuntansi',
                            'url'  => 'users/d4akun',
                        ],
                        [
                            'text' => 'D IV Akuntansi AP Non AKT',
                            'url'  => 'users/d4akunapnon',
                        ],
                        [
                            'text' => 'D IV Akuntansi AP',
                            'url'  => 'users/d4akunap',
                        ],
                    ],
                ],
                [
                    'text'    => 'Jurusan Manajemen Keuangan',
                    'url'     => '#',
                    'icon' => 'fa fa-tag',
                    'submenu' => [
                        [
                            'text' => 'D III Manajemen Aset',
                            'url'  => 'users/d3manset',
                        ],
                        [
                            'text' => 'D III Kebendaharaan Negara',
                            'url'  => 'users/d3kbn',
                        ],
                        [
                            'text' => 'D III Kebendaharaan Negara AP',
                            'url'  => 'users/d3kbnap',
                        ],
                    ],
                ],
                [
                    'text'    => 'Jurusan Bea Cukai',
                    'url'     => '#',
                    'icon' => 'fa fa-tag',
                    'submenu' => [
                        [
                            'text' => 'D III Bea Cukai',
                            'url'  => 'users/d3bc',
                        ],
                        [
                            'text' => 'D III Bea Cukai AP',
                            'url'  => 'users/d3bcap',
                        ],
                        
                    ],
                ]
            ],
        ],
        ['header' => 'Data Pendaftar'],
        [
            'text'        => 'Semua',
            'url'         => 'rekap',
            'icon'        => 'fa fa-users',
            'label_color' => 'success',
        ],
        
        [
            'text'    => 'Tiap Prodi',
            'icon'    => 'fa fa-tags',
            'submenu' => [
                [
                    'text'    => 'Jurusan Pajak',
                    'url'     => '#',
                    'icon' => 'fa fa-tag',
                    'submenu' => [
                        [
                            'text' => 'D III Pajak',
                            'url'  => 'd3pajak',
                        ],
                        [
                            'text' => 'D III Pajak AP',
                            'url'  => 'd3pajakap',
                        ],
                        [
                            'text' => 'D III PBB/Penilai',
                            'url'  => 'd3pbb',
                        ],
                        [
                            'text' => 'D III PBB/Penilai AP 2018',
                            'url'  => 'd3pbbap18',
                        ],
                        [
                            'text' => 'D III PBB/Penilai AP 2019',
                            'url'  => 'd3pbbap19',
                        ],
                    ],
                ],
                [
                    'text'    => 'Jurusan Akuntansi',
                    'url'     => '#',
                    'icon' => 'fa fa-tag',
                    'submenu' => [
                        [
                            'text' => 'D III Akuntansi',
                            'url'  => 'd3akun',
                        ],
                        [
                            'text' => 'D III Akuntansi AP',
                            'url'  => 'd3akunap',
                        ],
                        [
                            'text' => 'D IV Akuntansi',
                            'url'  => 'd4akun',
                        ],
                        [
                            'text' => 'D IV Akuntansi AP Non AKT',
                            'url'  => 'd4akunapnon',
                        ],
                        [
                            'text' => 'D IV Akuntansi AP',
                            'url'  => 'd4akunap',
                        ],
                    ],
                ],
                [
                    'text'    => 'Jurusan Manajemen Keuangan',
                    'url'     => '#',
                    'icon' => 'fa fa-tag',
                    'submenu' => [
                        [
                            'text' => 'D III Manajemen Aset',
                            'url'  => 'd3manset',
                        ],
                        [
                            'text' => 'D III Kebendaharaan Negara',
                            'url'  => 'd3kbn',
                        ],
                        [
                            'text' => 'D III Kebendaharaan Negara AP',
                            'url'  => 'd3kbnap',
                        ],
                    ],
                ],
                [
                    'text'    => 'Jurusan Bea Cukai',
                    'url'     => '#',
                    'icon' => 'fa fa-tag',
                    'submenu' => [
                        [
                            'text' => 'D III Bea Cukai',
                            'url'  => 'd3bc',
                        ],
                        [
                            'text' => 'D III Bea Cukai AP',
                            'url'  => 'd3bcap',
                        ],
                        
                    ],
                ]
            ],
        ],
        ['header' => 'Data Pendaftar Hari Ini'],
        [
            'text'    => 'Semua',
            'url'     => 'today',
            'icon' => 'fa fa-users',
        ],
        [
            'text'    => 'Tiap Prodi',
            'icon'    => 'fa fa-tags',
            'submenu' => [
                [
                    'text'    => 'Jurusan Pajak',
                    'url'     => '#',
                    'icon' => 'fa fa-tag',
                    'submenu' => [
                        [
                            'text' => 'D III Pajak',
                            'url'  => 'today/d3pajak',
                        ],
                        [
                            'text' => 'D III Pajak AP',
                            'url'  => 'today/d3pajakap',
                        ],
                        [
                            'text' => 'D III PBB/Penilai',
                            'url'  => 'today/d3pbb',
                        ],
                        [
                            'text' => 'D III PBB/Penilai AP 2018',
                            'url'  => 'today/d3pbbap18',
                        ],
                        [
                            'text' => 'D III PBB/Penilai AP 2019',
                            'url'  => 'today/d3pbbap19',
                        ],
                    ],
                ],
                [
                    'text'    => 'Jurusan Akuntansi',
                    'url'     => '#',
                    'icon' => 'fa fa-tag',
                    'submenu' => [
                        [
                            'text' => 'D III Akuntansi',
                            'url'  => 'today/d3akun',
                        ],
                        [
                            'text' => 'D III Akuntansi AP',
                            'url'  => 'today/d3akunap',
                        ],
                        [
                            'text' => 'D IV Akuntansi',
                            'url'  => 'today/d4akun',
                        ],
                        [
                            'text' => 'D IV Akuntansi AP Non AKT',
                            'url'  => 'today/d4akunapnon',
                        ],
                        [
                            'text' => 'D IV Akuntansi AP',
                            'url'  => 'today/d4akunap',
                        ],
                    ],
                ],
                [
                    'text'    => 'Jurusan Manajemen Keuangan',
                    'url'     => '#',
                    'icon' => 'fa fa-tag',
                    'submenu' => [
                        [
                            'text' => 'D III Manajemen Aset',
                            'url'  => 'today/d3manset',
                        ],
                        [
                            'text' => 'D III Kebendaharaan Negara',
                            'url'  => 'today/d3kbn',
                        ],
                        [
                            'text' => 'D III Kebendaharaan Negara AP',
                            'url'  => 'today/d3kbnap',
                        ],
                    ],
                ],
                [
                    'text'    => 'Jurusan Bea Cukai',
                    'url'     => '#',
                    'icon' => 'fa fa-tag',
                    'submenu' => [
                        [
                            'text' => 'D III Bea Cukai',
                            'url'  => 'today/d3bc',
                        ],
                        [
                            'text' => 'D III Bea Cukai AP',
                            'url'  => 'today/d3bcap',
                        ],
                        
                    ],
                ]
            ],
        ],
        
        ['header' => 'Data Toga'],
        [
            'text'        => 'Semua',
            'url'         => 'rekaptoga',
            'icon'        => 'fa fa-users',
            'label_color' => 'success',
        ],
        [
            'text'    => 'Tiap Prodi',
            'icon'    => 'fa fa-tags',
            'submenu' => [
                [
                    'text'    => 'Jurusan Pajak',
                    'url'     => '#',
                    'icon' => 'fa fa-tag',
                    'submenu' => [
                        [
                            'text' => 'D III Pajak',
                            'url'  => 'toga/d3pajak',
                        ],
                        [
                            'text' => 'D III Pajak AP',
                            'url'  => 'toga/d3pajakap',
                        ],
                        [
                            'text' => 'D III PBB/Penilai',
                            'url'  => 'toga/d3pbb',
                        ],
                        [
                            'text' => 'D III PBB/Penilai AP 2018',
                            'url'  => 'toga/d3pbbap18',
                        ],
                        [
                            'text' => 'D III PBB/Penilai AP 2019',
                            'url'  => 'toga/d3pbbap19',
                        ],
                    ],
                ],
                [
                    'text'    => 'Jurusan Akuntansi',
                    'url'     => '#',
                    'icon' => 'fa fa-tag',
                    'submenu' => [
                        [
                            'text' => 'D III Akuntansi',
                            'url'  => 'toga/d3akun',
                        ],
                        [
                            'text' => 'D III Akuntansi AP',
                            'url'  => 'toga/d3akunap',
                        ],
                        [
                            'text' => 'D IV Akuntansi',
                            'url'  => 'toga/d4akun',
                        ],
                        [
                            'text' => 'D IV Akuntansi AP Non AKT',
                            'url'  => 'toga/d4akunapnon',
                        ],
                        [
                            'text' => 'D IV Akuntansi AP',
                            'url'  => 'toga/d4akunap',
                        ],
                    ],
                ],
                [
                    'text'    => 'Jurusan Manajemen Keuangan',
                    'url'     => '#',
                    'icon' => 'fa fa-tag',
                    'submenu' => [
                        [
                            'text' => 'D III Manajemen Aset',
                            'url'  => 'toga/d3manset',
                        ],
                        [
                            'text' => 'D III Kebendaharaan Negara',
                            'url'  => 'toga/d3kbn',
                        ],
                        [
                            'text' => 'D III Kebendaharaan Negara AP',
                            'url'  => 'toga/d3kbnap',
                        ],
                    ],
                ],
                [
                    'text'    => 'Jurusan Bea Cukai',
                    'url'     => '#',
                    'icon' => 'fa fa-tag',
                    'submenu' => [
                        [
                            'text' => 'D III Bea Cukai',
                            'url'  => 'toga/d3bc',
                        ],
                        [
                            'text' => 'D III Bea Cukai AP',
                            'url'  => 'toga/d3bcap',
                        ],
                        
                    ],
                ]
            ],
        ],
        
        
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For detailed instructions you can look the menu filters section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Here we can modify the plugins used inside the admin panel.
    |
    | For detailed instructions you can look the plugins section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Plugins-Configuration
    |
    */

    'plugins' => [
        'Datatables' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css',
                ],
            ],
        ],
        'Select2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
                ],
            ],
        ],
        'Chartjs' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        'Sweetalert2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/sweetalert2@8',
                ],
            ],
        ],
        'Pace' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Livewire
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Livewire support.
    |
    | For detailed instructions you can look the livewire here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    */

    'livewire' => false,
];
