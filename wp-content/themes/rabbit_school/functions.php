<?php 
// 1. Register Navigation Menus
function rabbit_register_menus() {
    register_nav_menus( array(
        'navigation-menu'    => 'Main Header Navigation',
        'language-switcher'  => 'Language Switcher Dropdown',
        'donate'             => 'Donate',
        'our-program-footer' => 'Footer - Our Program',
        'about-us-footer'    => 'Footer - About Us',
        'news-footer'        => 'Footer - News',
        'get-involved-footer' => 'Footer - Get Involved'
    ) );
}
add_action( 'after_setup_theme', 'rabbit_register_menus' );

// 2. Enqueue Styles
function rabbit_styles() {
    wp_enqueue_style( 'main-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'rabbit_styles' );

// 3. Theme Setup & Supports
function rabbit_school_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' ); // Enables featured images site-wide
}
add_action( 'after_setup_theme', 'rabbit_school_theme_setup' );

// 4. Polylang Strings Registration
add_action( 'init', function() {
    if ( function_exists( 'pll_register_string' ) ) {
        pll_register_string( 'Header Program Label', 'Our Program', 'rabbit_school' );
    }
} );

// 5. Custom Post Type: Photo Essays
function register_rabbit_photo_essays_cpt() {
    // 1. Register Photo Essay Categories Taxonomy
    register_taxonomy('photo_essay_category', 'photo_essay', [
        'labels'            => [
            'name'          => 'Photo Essay Categories',
            'singular_name' => 'Category',
        ],
        'hierarchical'      => true,
        'public'            => true,
        'show_in_rest'      => true,
        'rewrite'           => ['slug' => 'photo-essay-category'],
    ]);

    // 2. Register Photo Essay Post Type
    register_post_type('photo_essay', [
        'labels'            => [
            'name'          => 'Photo Essays',
            'singular_name' => 'Photo Essay',
            'add_new_item'   => 'Add New Photo Essay',
        ],
        'public'            => true,
        'menu_icon'         => 'dashicons-format-gallery',
        'supports'          => ['title', 'editor', 'thumbnail', 'excerpt'],
        'show_in_rest'      => true,
        'has_archive'       => false,
    ]);
}
add_action('init', 'register_rabbit_photo_essays_cpt');

// 6. Custom Post Type: Products
function rabbit_register_product_cpt() {
    $labels = array(
        'name'          => 'Products',
        'singular_name' => 'Product',
        'add_new_item'  => 'Add New Product',
    );

    $args = array(
        'labels'       => $labels,
        'public'       => true,
        'show_in_menu' => true,
        'menu_icon'    => 'dashicons-cart',
        'supports'     => array( 'title', 'editor', 'thumbnail' ),
        'show_in_rest' => true,
    );

    register_post_type( 'product', $args );
}
add_action( 'init', 'rabbit_register_product_cpt' );

// 7. Custom Post Type: Videos
function register_rabbit_videos_cpt() {
    // 1. Register Video Categories Taxonomy
    register_taxonomy('video_category', 'video_item', [
        'labels'            => [
            'name'          => 'Video Categories',
            'singular_name' => 'Category',
        ],
        'hierarchical'      => true,
        'public'            => true,
        'show_in_rest'      => true,
        'rewrite'           => ['slug' => 'video-category'],
    ]);

    // 2. Register Video Post Type
    register_post_type('video_item', [
        'labels'            => [
            'name'          => 'Videos',
            'singular_name' => 'Video',
            'add_new_item'   => 'Add New Video',
        ],
        'public'            => true,
        'menu_icon'         => 'dashicons-video-alt3',
        // 'thumbnail' added below to enable Featured Images in WP Admin
        'supports'          => ['title', 'editor', 'thumbnail', 'excerpt'], 
        'show_in_rest'      => true,
        'has_archive'       => false,
    ]);
}
add_action('init', 'register_rabbit_videos_cpt');