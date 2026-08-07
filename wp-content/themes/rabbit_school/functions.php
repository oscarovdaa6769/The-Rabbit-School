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

function rso_register_articles_cpt() {
    // 1. Register Taxonomy for Filter Categories
    register_taxonomy('article_category', 'rso_article', array(
        'labels'            => array('name' => 'Article Categories', 'singular_name' => 'Category'),
        'hierarchical'      => true,
        'public'            => true,
        'show_in_rest'      => true,
    ));

    // 2. Register Custom Post Type
    register_post_type('rso_article', array(
        'labels' => array(
            'name'          => 'Articles',
            'singular_name' => 'Article',
            'add_new_item'  => 'Add New Article',
        ),
        'public'        => true,
        'has_archive'   => true,
        'menu_icon'     => 'dashicons-welcome-write-blog',
        'supports'      => array('title', 'editor', 'thumbnail', 'excerpt'),
        'taxonomies'    => array('article_category'),
        'show_in_rest'  => true,
    ));
}
add_action('init', 'rso_register_articles_cpt');



add_action( 'init', function () {
 
    register_post_type( 'rso_news_card', array(
        'labels' => array(
            'name'               => 'News Cards',
            'singular_name'      => 'News Card', 
            'add_new'            => 'Add New Card',
            'add_new_item'       => 'Add New News Card',
            'edit_item'          => 'Edit News Card',
            'new_item'           => 'New News Card',
            'view_item'          => 'View News Card',
            'search_items'       => 'Search News Cards',
            'not_found'          => 'No news cards found',
            'not_found_in_trash' => 'No news cards found in Trash',
            'menu_name'          => 'Add New Information Card',
        ),
        'public'        => false,   // no public single pages — used only for this section
        'show_ui'       => true,    // but fully manageable in wp-admin
        'show_in_menu'  => true,
        'menu_icon'     => 'dashicons-media-text',
        'menu_position' => 20,
        'supports'      => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
        'hierarchical'  => false,
    ) );
 
    register_taxonomy( 'rso_news_category', 'rso_news_card', array(
        'labels' => array(
            'name'          => 'Categories',
            'singular_name' => 'Category',
            'add_new_item'  => 'Add New Category',
            'search_items'  => 'Search Categories',
            'menu_name'     => 'Categories',
        ),
        'hierarchical'      => false, // tag-style: type a new one to create it on the fly
        'show_ui'           => true,
        'show_admin_column' => true,
        'show_in_menu'      => true,
        'query_var'         => true,
    ) );
 
} );

// ---- Tell Polylang this CPT + taxonomy are translatable ----
// (Equivalent to ticking them in Languages > Settings > Custom Post Types / Custom Taxonomies,
// but done in code so it always stays on and travels with the theme.)
add_filter( 'pll_get_post_types', function ( $post_types, $is_settings ) {
    $post_types['rso_news_card'] = 'rso_news_card';
    return $post_types;
}, 10, 2 );

add_filter( 'pll_get_taxonomies', function ( $taxonomies, $is_settings ) {
    $taxonomies['rso_news_category'] = 'rso_news_category';
    return $taxonomies;
}, 10, 2 );
 
// ---- "Date label" side meta box, e.g. "July 2026" ----
add_action( 'add_meta_boxes', function () {
    add_meta_box(
        'rso_card_date_label',
        'Date Label',
        'rso_render_card_date_meta_box',
        'rso_news_card',
        'side',
        'default'
    );
} );


function rso_render_card_date_meta_box( $post ) {
    wp_nonce_field( 'rso_save_card_date', 'rso_card_date_nonce' );
    $value = get_post_meta( $post->ID, '_rso_date_label', true );
    echo '<label for="rso_date_label" style="display:block;margin-bottom:6px;">e.g. "July 2026" (optional)</label>';
    echo '<input type="text" id="rso_date_label" name="rso_date_label" value="' . esc_attr( $value ) . '" style="width:100%;">';
}
 
add_action( 'save_post_rso_news_card', function ( $post_id ) {
    if ( ! isset( $_POST['rso_card_date_nonce'] ) || ! wp_verify_nonce( $_POST['rso_card_date_nonce'], 'rso_save_card_date' ) ) {
        return;
    }
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }
    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }
    if ( isset( $_POST['rso_date_label'] ) ) {
        update_post_meta( $post_id, '_rso_date_label', sanitize_text_field( $_POST['rso_date_label'] ) );
    }
} );
 
// ---- Helper: split a card's rendered content into clean paragraphs ----
function rso_get_paragraphs_from_content( $post ) {
    $rendered = apply_filters( 'the_content', $post->post_content );
 
    preg_match_all( '/<p[^>]*>(.*?)<\/p>/is', $rendered, $matches );
    $paragraphs = array();
    if ( ! empty( $matches[1] ) ) {
        foreach ( $matches[1] as $p ) {
            $text = trim( wp_strip_all_tags( $p ) );
            if ( $text !== '' ) {
                $paragraphs[] = $text;
            }
        }
    }
 
    if ( empty( $paragraphs ) ) {
        $plain = trim( wp_strip_all_tags( $post->post_content ) );
        $paragraphs = array_values( array_filter( array_map( 'trim',
            preg_split( '/\r\n\s*\r\n|\n\s*\n/', $plain )
        ) ) );
    }
 
    return $paragraphs;
}