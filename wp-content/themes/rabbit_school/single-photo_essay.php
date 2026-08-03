<?php
/**
 * Single Template: Photo Essay
 * Displays individual Photo Essay posts with dynamic multilingual category mapping and consistent button styling across languages.
 */

get_header();

// 1. UNIFIED BUTTON COLOR (Orange BG + Brown Hover for all languages)
$btn_bg_color = 'bg-brand-orange text-text-light hover:bg-brand-brown hover:text-text-light';

// 2. Fetch Taxonomy Details & Map to Original English Term Slug
$terms = get_the_terms( get_the_ID(), 'photo_essay_category' );

if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
    $term_obj = $terms[0];
    $cat_name = $term_obj->name;
    $cat_slug = urldecode( $term_obj->slug );

    if ( function_exists('pll_get_term') ) {
        $default_lang_code = pll_default_language();
        $original_term_id  = pll_get_term( $term_obj->term_id, $default_lang_code );
        if ( $original_term_id ) {
            $original_term = get_term( $original_term_id, 'photo_essay_category' );
            if ( $original_term && ! is_wp_error( $original_term ) ) {
                $cat_slug = $original_term->slug;
            }
        }
    } elseif ( function_exists('icl_object_id') ) {
        $original_term_id = icl_object_id( $term_obj->term_id, 'photo_essay_category', true, 'en' );
        $original_term    = get_term( $original_term_id, 'photo_essay_category' );
        if ( $original_term && ! is_wp_error( $original_term ) ) {
            $cat_slug = $original_term->slug;
        }
    }
} else {
    $cat_slug = 'education';
    $cat_name = __( 'Education', 'rabbit-school' );
}

// 3. Metadata & Hero Image
$default_date_format = get_option( 'date_format' );
$post_date          = get_field( 'essay_subtitle_date' ) ?: get_the_date( $default_date_format );
$hero_img           = get_the_post_thumbnail_url( get_the_ID(), 'full' ) 
                      ?: ( get_field( 'card_image' ) ?: get_theme_file_uri( 'assets/images/error.png' ) );

// 4. Description Logic
$essay_desc = get_field( 'essay_description' ) 
              ?: ( get_the_excerpt() ?: get_the_content() );

// 5. Category Color Scheme Mapping
$category_color_mix = [
    'education'        => [
        'border' => 'border-l-6 border-l-brand-orange',
        'badge'  => 'bg-brand-orange/20 text-brand-orange border-brand-orange/40',
    ],
    'community'        => [
        'border' => 'border-l-6 border-l-brand-blue',
        'badge'  => 'bg-brand-blue/20 text-brand-blue border-brand-blue/40',
    ],
    'advocacy'         => [
        'border' => 'border-l-6 border-l-brand-teal',
        'badge'  => 'bg-brand-teal/20 text-brand-teal border-brand-teal/40',
    ],
    'teacher-training' => [
        'border' => 'border-l-6 border-l-brand-pink',
        'badge'  => 'bg-brand-pink/20 text-brand-pink border-brand-pink/40',
    ],
    'default'          => [
        'border' => 'border-l-6 border-l-brand-yellow',
        'badge'  => 'bg-brand-yellow/20 text-brand-yellow border-brand-yellow/50',
    ],
];

$colors = isset( $category_color_mix[ $cat_slug ] ) 
    ? $category_color_mix[ $cat_slug ] 
    : $category_color_mix['default'];
?>

<main class="w-full font-sans bg-brand-cream/30 min-h-screen pb-[64px] md:pb-[80px]">

  <!-- HEADER NAVIGATION & META -->
  <section class="max-w-4xl mx-auto pt-[40px] md:pt-[60px] px-[20px] 2xl:px-0">
    
    <!-- Back Button with Standardized Orange BG + Brown Hover -->
    <a href="javascript:history.back()" class="inline-flex items-center gap-2 px-4 py-2 rounded-[8px] font-bold uppercase text-xs transition-all duration-300 shadow-sm hover:shadow-md mb-8 <?php echo esc_attr( $btn_bg_color ); ?>">
      <span class="icon-[solar--arrow-left-linear] w-4 h-4" aria-hidden="true"></span>
      <?php esc_html_e( 'Back to Photo Essays', 'rabbit-school' ); ?>
    </a>

    <!-- Category Badge & Date Header -->
    <div class="flex items-center gap-3 mb-4">
      <span class="px-3 py-1 rounded-[8px] text-xs font-bold uppercase tracking-wider border <?php echo esc_attr( $colors['badge'] ); ?>">
        <?php echo esc_html( $cat_name ); ?>
      </span>
      <span class="text-sm font-semibold text-text-muted flex items-center gap-1.5">
        <span class="icon-[solar--calendar-minimalistic-linear] w-4 h-4 text-text-main/60" aria-hidden="true"></span>
        <?php echo esc_html( $post_date ); ?>
      </span>
    </div>

    <!-- Title -->
    <h1 class="font-heading text-[32px] sm:text-[40px] md:text-[48px] font-black text-text-main leading-tight uppercase mb-8">
      <?php the_title(); ?>
    </h1>

  </section>

  <!-- MAIN PHOTO CARD DISPLAY -->
  <section class="max-w-4xl mx-auto px-[20px] 2xl:px-0 mb-12">
    <div class="bg-brand-cream rounded-[28px] p-6 md:p-8 <?php echo esc_attr( $colors['border'] ); ?> border-y border-r border-brand-brown/10 shadow-lg">
      
      <!-- Featured Image Container -->
      <div class="overflow-hidden rounded-[20px] aspect-[16/9] bg-black mb-8 relative shadow-sm">
        <img src="<?php echo esc_url( $hero_img ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>" class="w-full h-full object-cover">
      </div>

      <!-- Article Description Section -->
      <?php if ( ! empty( $essay_desc ) ) : ?>
        <div class="font-sans text-[16px] sm:text-[18px] text-text-main leading-relaxed space-y-4">
          <?php echo wp_kses_post( wpautop( $essay_desc ) ); ?>
        </div>
      <?php endif; ?>

      <!-- Full WP Post Body Content -->
      <?php if ( get_the_content() && $essay_desc !== get_the_content() ) : ?>
        <div class="mt-6 pt-6 border-t border-brand-brown/10 font-sans text-[16px] text-text-main leading-relaxed">
          <?php the_content(); ?>
        </div>
      <?php endif; ?>

    </div>
  </section>

</main>

<?php get_footer(); ?>