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