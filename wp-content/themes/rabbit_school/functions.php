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