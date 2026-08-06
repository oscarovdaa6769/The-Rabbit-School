<?php 
function rabbit_register_menus() {
      register_nav_menus(array(
            'primary' => __('Primary Menu', 'rabbit'),
            'footer' => __('Footer Menu', 'rabbit'),
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

add_action('admin_post_handle_general_inquiry', 'handle_general_inquiry_submission');
add_action('admin_post_nopriv_handle_general_inquiry', 'handle_general_inquiry_submission');

function handle_general_inquiry_submission() {

    if ( ! isset($_POST['general_inquiry_nonce_field']) ||
         ! wp_verify_nonce($_POST['general_inquiry_nonce_field'], 'general_inquiry_nonce') ) {
        wp_die('Security check failed.');
    }

    $name    = isset($_POST['your_name']) ? sanitize_text_field($_POST['your_name']) : '';
    $email   = isset($_POST['your_email']) ? sanitize_email($_POST['your_email']) : '';
    $subject = isset($_POST['subject']) ? sanitize_text_field($_POST['subject']) : '';
    $message = isset($_POST['message']) ? sanitize_textarea_field($_POST['message']) : '';

    if ( empty($name) || empty($email) || empty($subject) || empty($message) || ! is_email($email) ) {
        wp_safe_redirect( add_query_arg('inquiry', 'error', wp_get_referer()) );
        exit;
    }

    $to           = 'haksovanphanha99@gmail.com';
    $subject_line = 'New General Inquiry: ' . $subject;
    $body         = "Name: $name\n";
    $body        .= "Email: $email\n";
    $body        .= "Subject: $subject\n\n";
    $body        .= "Message:\n$message";

    $headers   = [];
    $headers[] = 'Content-Type: text/plain; charset=UTF-8';
    $headers[] = 'Reply-To: ' . $name . ' <' . $email . '>';

    $sent = wp_mail($to, $subject_line, $body, $headers);

    if ($sent) {
        wp_safe_redirect( add_query_arg('inquiry', 'success', wp_get_referer()) );
    } else {
        wp_safe_redirect( add_query_arg('inquiry', 'error', wp_get_referer()) );
    }
    exit;
}

// Route wp_mail() through Gmail's SMTP server instead of the server's broken mail() function
add_action('phpmailer_init', 'configure_smtp_mailer');
function configure_smtp_mailer($phpmailer) {
    $phpmailer->isSMTP();
    $phpmailer->Host       = 'smtp.gmail.com';
    $phpmailer->SMTPAuth   = true;
    $phpmailer->Port       = 587;
    $phpmailer->SMTPSecure = 'tls';
    $phpmailer->Username   = 'haksovanphanha99@gmail.com';
    $phpmailer->Password   = 'PASTE_16_CHAR_APP_PASSWORD_HERE';  // no spaces
    $phpmailer->From       = 'haksovanphanha99@gmail.com';
    $phpmailer->FromName   = get_bloginfo('name');
}

// Log the real reason if mail fails, so we can see it in the error log
add_action('wp_mail_failed', function($wp_error) {
    error_log('wp_mail failed: ' . $wp_error->get_error_message());
});
/**
 * RSOS Corner — "News Cards" custom post type.
 *
 * Gives admins a dedicated "News Cards" menu in wp-admin to add, edit,
 * reorder, and delete article cards — no code or page-editing required.
 * Paste this whole block into your theme's functions.php.
 */
 
// ---- Register the "News Cards" post type + "Categories" taxonomy ----
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