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
wp_enqueue_style('main-style', get_stylesheet_uri(), array(), time());
}
add_action('wp_enqueue_scripts', 'rabbit_styles');

add_theme_support('title-tag');

add_action( 'init', function() {
if ( function_exists( 'pll_register_string' ) ) {
pll_register_string( 'Header Program Label', 'Our Program', 'rabbit_school' );
}
});


function rabbit_register_product_cpt() {
    register_post_type( 'product', array(
        'labels' => array(
            'name'          => 'Products',
            'singular_name' => 'Product',
            'add_new_item'  => 'Add New Product',
        ),
        'public'       => true,
        'show_in_menu' => true,
        'menu_icon'    => 'dashicons-cart',
        'supports'     => array( 'title', 'editor', 'thumbnail' ),
        'show_in_rest' => true,
    ) );
}
add_action( 'init', 'rabbit_register_product_cpt' );



