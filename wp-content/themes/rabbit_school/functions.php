<?php 
function rabbit_register_menus() {
      register_nav_menus(array(
            'navigation-menu' => 'Main Header Navigation',
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

