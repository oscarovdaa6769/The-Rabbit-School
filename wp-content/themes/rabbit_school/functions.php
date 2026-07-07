<?php 
function rabbit_register_menus() {
      register_nav_menus(array(
            'primary' => __('Primary Menu', 'rabbit'),
            'footer' => __('Footer Menu', 'rabbit'),
      ));
}
add_action('after_setup_theme', 'rabbit_register_menus');

function rabbit_styles() {
      wp_enqueue_style('main-style', get_stylesheet_uri(), array(), time());
}
add_action('wp_enqueue_scripts', 'rabbit_styles');

