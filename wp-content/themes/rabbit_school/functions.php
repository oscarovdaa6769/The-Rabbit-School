<?php 
function rabbit_register_menus() {
      register_nav_menus(array(
            'navigation-menu' => 'Main Header Navigation',
            'language-switcher' => 'Language Switcher Dropdown',
            'donate' => 'Donate',
            'our-program-footer' => 'Footer - Our Program',
            'about-us-footer' => 'Footer - About Us',
            'news-footer' => 'Footer - News',
            'get-involved-footer' => 'Footer - Get Involved'
      ));
}
add_action('after_setup_theme', 'rabbit_register_menus');

function rabbit_styles() {
      // Main theme style.css file (Compiled Tailwind v4)
      wp_enqueue_style('main-style', get_stylesheet_uri(), array(), time());
      
      // Font Awesome
      wp_enqueue_style('font-awesome','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css',array(),'6.4.0' );
}
add_action('wp_enqueue_scripts', 'rabbit_styles');

add_theme_support('title-tag');

add_action( 'init', function() {
    if ( function_exists( 'pll_register_string' ) ) {
        pll_register_string( 'Header Program Label', 'Our Program', 'rabbit_school' );
    }
});

function register_photo_essays_cpt() {
    $labels = [
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
    ];

    $args = [
        'labels'              => $labels,
        'public'              => true,
        'has_archive'         => true,
        'publicly_queryable'  => true,
        'query_var'           => true,
        'rewrite'             => ['slug' => 'photo-essay'],
        'capability_type'     => 'post',
        'hierarchical'        => false,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-format-gallery', // Gallery icon in WP Admin
        'supports'            => ['title', 'editor', 'thumbnail', 'excerpt'],
        'show_in_rest'        => true, // Enables Gutenberg Editor
    ];

    register_post_type('photo_essay', $args);
}
add_action('init', 'register_photo_essays_cpt');