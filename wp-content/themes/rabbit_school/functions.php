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

// 3. Theme Supports
add_action( 'after_setup_theme', function() {
    add_theme_support( 'title-tag' );
} );

// 4. Polylang Strings Registration
add_action( 'init', function() {
    if ( function_exists( 'pll_register_string' ) ) {
        pll_register_string( 'Header Program Label', 'Our Program', 'rabbit_school' );
    }
} );

// 5. Custom Post Type: Photo Essays
function register_photo_essays_cpt() {
    $labels = array(
        'name'               => 'Photo Essays',
        'singular_name'      => 'Photo Essay',
        'menu_name'          => 'Photo Essays',
        'add_new'            => 'Add New Essay',
        'add_new_item'       => 'Add New Photo Essay',
        'edit_item'          => 'Edit Photo Essay',
        'new_item'           => 'New Photo Essay',
        'view_item'          => 'View Photo Essay',
        'search_items'       => 'Search Photo Essays',
        'not_found'          => 'No photo essays found',
        'not_found_in_trash' => 'No photo essays found in Trash',
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'has_archive'         => true,
        'publicly_queryable'  => true,
        'query_var'           => true,
        'rewrite'             => array( 'slug' => 'photo-essay' ),
        'capability_type'     => 'post',
        'hierarchical'        => false,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-format-gallery',
        'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'show_in_rest'        => true, // Enables Block Editor
    );

    register_post_type( 'photo_essay', $args );
}
add_action( 'init', 'register_photo_essays_cpt' );

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