<?php
/**
 * Template Name: RSOS Corner (News & Stories)
 *
 * Hero image is pulled from the ACF "hero_image" field on this page.
 * Article cards are managed via the "rso_news_card" custom post type
 * (registered in functions.php) — image, title, category, date, and
 * story content all come from wp-admin, no code changes needed to
 * add/remove/reorder cards. Clicking "Read More" on a card opens a
 * popup with the picture and full story instead of expanding inline.
 *
 * @package rabbit_school
 */

/**
 * ================================================================
 * ACF FIELD REFERENCE — read this before editing content in wp-admin
 * ================================================================
 * Every field below falls back to the text shown if left empty, so
 * the page still works with nothing filled in — but fill these in
 * for real content.
 *
 * ---- A) Fields on THIS PAGE (Page > Edit > Custom Fields) --------
 *
 * Hero section
 *   hero_image                (Image)     hero background photo
 *   news                      (Text)      small label above H1 — default: "RSOS Corner"
 *   rsos_corner               (Text)      main H1 heading      — default: "RSOS Corner"
 *   stories_from_the_ground   (Textarea)  hero subtext         — default: "Stories from the ground."
 *   education_box             (Text)      hero pill button     — default: "Education"
 *   community_box              (Text)      hero pill button     — default: "Community"
 *   advocacy_box                (Text)      hero pill button     — default: "Advocacy"
 *   vocational_training_box    (Text)      hero pill button     — default: "Vocational Training"
 *   community_forum            (Text)      floating card title  — default: "Community Forum"
 *   phnom_penh_monday_20th_october_2025 (Text) floating card date line
 *                                                              — default: "Phnom Penh, Monday 20th October 2025"
 *
 * Featured story section
 *   featured_story                    (Text)     eyebrow label — default: "Featured Story"
 *   from_classroom                    (Text)     story heading — default: "From Classroom to Employment"
 *   at_19_dara_joined_rabbit_schools   (Textarea) visible excerpt (always shown)
 *   dara_struggled_to_find             (Textarea) hidden paragraph (shown after "Success Story" click)
 *   today_dara_works                   (Textarea) hidden paragraph (shown after "Success Story" click)
 *   vocational_training_box1          (Text)     category pill  — default: "Vocational Training"
 *   success_story_box                  (Text)     expand/collapse button — default: "Success Story"
 *   show_less                          (Text)     button label once expanded — default: "Show Less"
 *
 * Latest articles section
 *   latest_articles   (Text)  section eyebrow — default: "Latest Articles"
 *   filter            NOTE: no longer used — "Filter by Category" is now a
 *                     static EN/KM string driven by pll_current_language(),
 *                     see $rso_filter_label below. Safe to remove from wp-admin.
 *   read_more         NOTE: no longer used — "Read More" is now a static
 *                     EN/KM string driven by pll_current_language(), see
 *                     $rso_read_more_label below. Remove this field from
 *                     wp-admin if you like; it's ignored either way.
 *
 * Newsletter section
 *   newsletter_image                                                           (Image)    optional small illustration/icon
 *                                                                                          shown next to the heading — section
 *                                                                                          still looks fine with nothing set
 *   stay_connected_with_rso                                                    (Text)     — default: "Stay Connected"
 *   get_the_latest_stories_and_updates_from_rabbit_school_delivered_to_your_inbox (Textarea) — default: "Subscribe to get the latest updates."
 *   ex          (Text)  email input placeholder — default: "your.email@example.com"
 *   subscribe   (Text)  submit button label      — default: "Subscribe"
 *   e           (Text)  invalid-email error       — default: "Please enter a valid email address."
 *   s           (Text)  success message           — default: "Thanks! You are subscribed."
 *   something_went_wrong                                          (Text) send-failure message
 *   newsletter_signup_is_temporarily_unavailable                 (Text) shown if EmailJS script fails to load
 *   emailjs_library_failed_to_load_check_ad-blockers_network_or_cdn_access (Text) console log only — visitors never see this one
 *
 * ---- B) Fields on EACH "News Card" post (wp-admin > News Cards) ---
 *   Featured Image      built-in WP featured image, NOT card_image1 below unless your CPT uses that instead
 *   card_image1         (Image)     card thumbnail + modal image
 *   card_date_label2    (Text)      date shown in the card badge, e.g. "20 Oct 2025"
 *   rso_news_category   (Taxonomy)  category — powers the badge AND the filter dropdown
 *   paragraphs          (Textarea)  short excerpt — shown on the card, and as modal fallback if the
 *                                   post content below has no parsed paragraphs
 *   Post content (editor)           full story — split into paragraphs automatically by
 *                                   rso_get_paragraphs_from_content() for the popup
 * ================================================================
 */

get_header();
?>  

<style>
/* ========== YOUR ORIGINAL STYLES STAY 100% THE SAME ========== */
/* (keep everything you already have) */

/* ========== ONLY NEW ANIMATIONS ADDED BELOW ========== */

/* Soft fade + slide up for any text that has .rso-animate */
.rso-animate {
    /* we keep your original rules, just making the movement a little smoother */
}

/* Extra nice text entrance (works with your existing .rso-animate + .rso-in) */
.rso-animate h1,
.rso-animate h2,
.rso-animate h3,
.rso-animate p {
    opacity: 0;
    transform: translateY(18px);
    transition: opacity 0.7s cubic-bezier(0.16, 1, 0.3, 1),
                transform 0.7s cubic-bezier(0.16, 1, 0.3, 1);
}

.rso-animate.rso-in h1,
.rso-animate.rso-in h2,
.rso-animate.rso-in h3,
.rso-animate.rso-in p {
    opacity: 1;
    transform: translateY(0);
}

/* Stagger the text inside each section so it feels lively */
.rso-animate.rso-in h1 { transition-delay: 0.05s; }
.rso-animate.rso-in h2 { transition-delay: 0.12s; }
.rso-animate.rso-in h3 { transition-delay: 0.18s; }
.rso-animate.rso-in p  { transition-delay: 0.25s; }

/* Small extra polish for the hero buttons text */
.rso-animate.rso-in button {
    opacity: 0;
    transform: translateY(12px);
    transition: opacity 0.5s ease, transform 0.5s ease;
}
.rso-animate.rso-in button {
    opacity: 1;
    transform: translateY(0);
}
.rso-animate.rso-in button:nth-child(1) { transition-delay: 0.30s; }
.rso-animate.rso-in button:nth-child(2) { transition-delay: 0.38s; }
.rso-animate.rso-in button:nth-child(3) { transition-delay: 0.46s; }
.rso-animate.rso-in button:nth-child(4) { transition-delay: 0.54s; }
.rso-animate {
    opacity: 0;
    transform: translateY(24px);
    transition: opacity 0.8s cubic-bezier(0.16, 1, 0.3, 1), transform 0.8s cubic-bezier(0.16, 1, 0.3, 1);
}

.rso-animate.rso-in {
    opacity: 1;
    transform: translateY(0);
}

/* Smooth show/hide for the hidden article cards */
.rso-hidden-wrapper {
    grid-template-rows: 0fr;
    opacity: 0;
    transform: translateY(-8px);
    transition: grid-template-rows 0.55s cubic-bezier(0.16, 1, 0.3, 1), opacity 0.45s ease-in-out, transform 0.45s cubic-bezier(0.16, 1, 0.3, 1);
}

.rso-hidden-wrapper.rso-hidden-open {
    grid-template-rows: 1fr;
    opacity: 1;
    transform: translateY(0);
}

/* Subtle lift on hover so cards feel more responsive */
.rso-card-hover {
    transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.3s ease;
}
.rso-card-hover:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 24px -8px rgba(74, 46, 42, 0.25);
}

/* Card read-more modal */
#rso-card-modal {
    transition: opacity 0.3s ease-out;
}
#rso-card-modal .rso-modal-panel {
    transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1), opacity 0.3s ease-out;
    transform: translateY(24px) scale(0.96);
    opacity: 0;
}
#rso-card-modal.rso-modal-open .rso-modal-panel {
    transform: translateY(0) scale(1);
    opacity: 1;
}

/* Card excerpt truncation — long text gets cut to 3 lines with an ellipsis */
.rso-clamp-3 {
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

/* Card title truncation — long titles get cut to 2 lines with an ellipsis */
.rso-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

/* Card description truncation — long text gets cut to a single line with an ellipsis */
.rso-clamp-1 {
    display: -webkit-box;
    -webkit-line-clamp: 1;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

/* ========== FLOATING HERO CARD (pinned onto the picture's bottom edge, bigger, bobbing) ========== */
@keyframes rso-float-bob {
    0%, 100% { transform: translateY(50%); }
    50%      { transform: translateY(calc(50% - 10px)); }
}
.rso-hero-image-wrap {
    overflow: visible !important;
}
.rso-hero-image-inner {
    border-radius: 1.5rem;
    overflow: hidden;
}
.rso-float-card {
    bottom: 0;
    transform: translateY(50%);
    animation: rso-float-bob 3.5s ease-in-out infinite;
    border: 3px solid #D9A441;
}
/* Little "pin" marker that clips the card to the photo, so it reads as
   physically pinned onto the picture rather than just floating near it. */
.rso-pin-marker {
    position: absolute;
    top: -18px;
    left: 32px;
    width: 40px;
    height: 40px;
    background: #D9A441;
    border: 3px solid #4A2E2A;
    border-radius: 9999px;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 6px 14px rgba(0,0,0,0.25);
    z-index: 2;
}
.rso-pin-marker svg {
    width: 18px;
    height: 18px;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.rso-animate').forEach(function (el) {
        var delay = parseFloat(el.style.animationDelay || '0') * 1000;
        setTimeout(function () {
            el.classList.add('rso-in');
        }, delay);
    });
});
</script>

<?php 
$rso_hero_image = get_field('hero_image'); 
$rsos_corner_fallback = get_field('rsos_corner') ?: 'RSOS Corner';

// Static EN/KM label for the card "Read More" button — intentionally NOT
// pulled from ACF, so it always matches the current Polylang language
// regardless of what (if anything) is filled in on the page fields.
$rso_read_more_label = ( function_exists('pll_current_language') && pll_current_language() === 'km' )
    ? 'អានបន្ថែម'
    : 'Read More';

// Static EN/KM label for the "Filter by Category" dropdown placeholder —
// same reasoning as $rso_read_more_label above.
$rso_filter_label = ( function_exists('pll_current_language') && pll_current_language() === 'km' )
    ? 'ត្រងតាមប្រភេទ'
    : 'Filter by Category';
?>

<!-- Hero -->
<section class="rso-animate bg-[#4A2E2A] text-white px-6 md:px-12 pt-50 pb-[30px]" style="animation-delay: 0s;">
    <div class="max-w-6xl mx-auto grid <?php echo !empty($rso_hero_image) ? 'md:grid-cols-2' : ''; ?> gap-10 items-center">
        <div>
            <p class="uppercase tracking-widest font-sans text-sm text-white/80 mb-3"><?php echo esc_html( get_field('news') ?: 'RSOS Corner' ); ?></p>
            <h1 class="text-4xl md:text-5xl font-extrabold uppercase mb-4 font-heading"><?php echo esc_html( $rsos_corner_fallback ); ?></h1>
            <p class="text-white/85 max-w-2xl font-sans mb-8 leading-relaxed">
               <?php echo esc_html( get_field('stories_from_the_ground') ?: 'Stories from the ground.' ); ?>
            </p>

            <div class="flex flex-wrap gap-3">
               <a href="#rso-article-grid"> <button type="button" class="bg-[#D9A441] text-[#4A2E2A] text-xs font-bold font-sans uppercase tracking-wide px-4 py-3 rounded-[10px] hover:bg-[#c9953a] transition cursor-pointer">
                    <?php echo esc_html( get_field('education_box') ?: 'Education' ); ?>
                </button></a>
                <a href="#rso-article-grid"><button type="button" class="bg-[#D9A441] text-[#4A2E2A] text-xs font-bold font-sans uppercase tracking-wide px-4 py-3 rounded-[10px] hover:bg-[#c9953a] transition cursor-pointer">
                    <?php echo esc_html( get_field('community_box') ?: 'Community' ); ?>
                </button></a>
                <a href="#rso-article-grid"><button type="button" class="bg-[#D9A441] text-[#4A2E2A] text-xs font-bold font-sans uppercase tracking-wide px-4 py-3 rounded-[10px] hover:bg-[#c9953a] transition cursor-pointer">
                    <?php echo esc_html( get_field('advocacy_box') ?: 'Advocacy' ); ?>
                </button></a>
                <a href="#rso-article-grid"><button type="button" class="bg-[#D9A441] text-[#4A2E2A] text-xs font-bold font-sans uppercase tracking-wide px-4 py-3 rounded-[10px] hover:bg-[#c9953a] transition cursor-pointer">
                   <?php echo esc_html( get_field('vocational_training_box') ?: 'Vocational Training' ); ?>
                </button></a>
            </div>
        </div>

        <?php if ( !empty($rso_hero_image) && isset($rso_hero_image['url']) ) : ?>
        <div class="rso-animate rso-hero-image-wrap relative w-full h-[300px] md:h-[400px] lg:h-[420px] shadow-xl group mb-24 md:mb-32" style="animation-delay: 0.15s;">
            <div class="rso-hero-image-inner w-full h-full">
                <img
                    src="<?php echo esc_url( $rso_hero_image['url'] ); ?>"
                    alt="<?php echo esc_attr( !empty($rso_hero_image['alt']) ? $rso_hero_image['alt'] : $rsos_corner_fallback ); ?>"
                    class="block w-full h-full object-cover transition-transform duration-500 ease-out group-hover:scale-110"
                >
            </div>
            <div class="rso-float-card absolute left-4 right-4 md:left-10 md:right-10 bg-white rounded-2xl shadow-2xl p-10 md:p-14">
                <span class="rso-pin-marker" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="#4A2E2A" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 2a5 5 0 0 0-5 5c0 3.5 5 11 5 11s5-7.5 5-11a5 5 0 0 0-5-5z"/>
                        <circle cx="12" cy="7" r="1.8" fill="#4A2E2A" stroke="none"/>
                    </svg>
                </span>
                <h3 class="font-extrabold text-[#4A2E2A] uppercase tracking-wide mb-3 text-3xl md:text-4xl"><?php echo esc_html( get_field('community_forum') ?: 'Community Forum' ); ?></h3>
                <p class="text-[#4A2E2A] text-xl md:text-2xl"><?php echo esc_html( get_field('phnom_penh_monday_20th_october_2025') ?: 'Phnom Penh, Monday 20th October 2025' ); ?></p>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>

<!-- Featured story -->
<section class="rso-animate bg-white px-6 md:px-12 py-14" style="animation-delay: 0.15s;">
    <div class="max-w-6xl mx-auto">

        <div class="flex items-center gap-4 mb-6">
            <span class="uppercase text-xs font-bold tracking-widest text-[#4A2E2A]"><?php echo esc_html( get_field('featured_story') ?: 'Featured Story' ); ?></span>
            <span class="flex-1 h-px bg-gray-300"></span>
        </div>

        <div class="bg-[#F5F3EF] rounded-3xl p-8 md:p-10">
            <h2 class="text-xl md:text-2xl font-extrabold text-[#4A2E2A] mb-3 uppercase">
                <?php echo esc_html( get_field('from_classroom') ?: 'From Classroom to Employment' ); ?>
            </h2>

            <p class="rso-clamp-3 text-gray-700 leading-relaxed mb-6 max-w-3xl">
                <?php echo esc_html( get_field('at_19_dara_joined_rabbit_schools') ?: 'At 19, Dara joined Rabbit School...' ); ?>
            </p>

            <div id="featured-more-wrapper" class="grid transition-all duration-300 ease-in-out mb-4" style="grid-template-rows: 0fr;">
                <div class="overflow-hidden">
                    <div class="text-gray-700 leading-relaxed space-y-3 border-t border-gray-300 pt-4 max-w-3xl">
                        <p>
                           <?php echo esc_html( get_field('dara_struggled_to_find') ?: 'Dara struggled to find opportunities initially...' ); ?>
                        </p>
                        <p>
                            <?php echo esc_html( get_field('today_dara_works') ?: 'Today, Dara works independently...' ); ?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap gap-3">
                <a href="#rso-article-grid"><button type="button" class="bg-[#4A2E2A] text-white text-xs font-bold font-sans uppercase tracking-wide px-4 py-3 rounded-[10px] hover:bg-[#3a2521] transition cursor-pointer">
                    <?php echo esc_html( get_field('vocational_training_box1') ?: 'Vocational Training' ); ?>
                </button></a>
                <button type="button" onclick="toggleReadMore('featured-more', this)" aria-expanded="false" aria-controls="featured-more-wrapper"
                        class="group bg-[#4A2E2A] text-white text-xs font-bold font-sans uppercase tracking-wide px-4 py-3 rounded-[10px] hover:bg-[#3a2521] transition cursor-pointer inline-flex items-center gap-2">
                    <span class="read-more-label"><?php echo esc_html( get_field('success_story_box') ?: 'Success Story' ); ?></span>
                    <svg class="read-more-icon w-3 h-3 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
            </div>
        </div>

    </div>
</section>

<!-- Latest articles -->
<section class="rso-animate bg-white px-6 md:px-12" style="animation-delay: 0.3s;">
    <div class="max-w-6xl mx-auto">

        <div class="flex items-center gap-4 mb-8">
            <span class="uppercase text-xs font-bold tracking-widest text-[#4A2E2A] whitespace-nowrap"><?php echo esc_html( get_field('latest_articles') ?: 'Latest Articles' ); ?></span>
            <span class="flex-1 h-px bg-gray-300"></span>
        </div>

        <?php
        // ================================================================
        // Cards are posts of the "rso_news_card" custom post type
        // (registered in functions.php). Admins manage them entirely from
        // the "News Cards" menu in wp-admin — Add New, set featured image,
        // title, category, date label, and write the story in the editor.
        // No code changes needed to add, remove, or reorder cards, and
        // typing a brand-new category on any card automatically becomes
        // a new filter option here too.
        // ================================================================
        $rso_card_data      = array();
        $rso_cards_markup   = array();
        $rso_all_categories = array();

        $rso_query_args = array(
            'post_type'      => 'rso_news_card',
            'posts_per_page' => -1,
            'orderby'        => array( 'menu_order' => 'ASC', 'date' => 'DESC' ),
            'post_status'    => 'publish',
        );

        // Only pull cards in the visitor's current language, so the grid
        // and the category filter dropdown never mix EN + KM together.
        // Needs the pll_get_post_types filter in functions.php so Polylang
        // is actually managing this post type — see the note there.
        if ( function_exists( 'pll_current_language' ) ) {
            $rso_query_args['lang'] = pll_current_language();
        }

        $rso_news_query = new WP_Query( $rso_query_args );

        if ( $rso_news_query->have_posts() ) :
            $rso_i = 0;
            while ( $rso_news_query->have_posts() ) : $rso_news_query->the_post();
                $rso_i++;
                global $post;

                $card_image_url = get_field( 'card_image1' );
                $card_image_url = is_array( $card_image_url ) ? ( $card_image_url['url'] ?? '' ) : (string) $card_image_url;
                $card_title     = get_the_title();
                $card_date      = trim( (string) get_field( 'card_date_label2' ) );

                $rso_terms     = get_the_terms( $post->ID, 'rso_news_category' );
                $card_category = ( ! empty( $rso_terms ) && ! is_wp_error( $rso_terms ) ) ? $rso_terms[0]->name : '';

                if ( $card_category !== '' ) {
                    $rso_all_categories[ $card_category ] = true;
                }

                $card_badge = ( $card_date !== '' && $card_category !== '' )
                    ? $card_date . ' • ' . $card_category
                    : ( $card_category !== '' ? $card_category : $card_date );

                $card_paragraphs = rso_get_paragraphs_from_content( $post );
                $card_excerpt    = trim( (string) get_field( 'paragraphs' ) );

                // NOTE: excerpt is stored per-card in $rso_card_data below (and
                // read back out as data.excerpt in JS) precisely so the modal's
                // "no paragraphs" fallback shows THIS card's excerpt — not
                // whichever card happened to be last in this loop.
                $rso_card_data[ (string) $rso_i ] = array(
                    'image'      => $card_image_url,
                    'category'   => $card_badge,
                    'title'      => $card_title,
                    'paragraphs' => $card_paragraphs,
                    'excerpt'    => $card_excerpt,
                    'post'       => get_the_content(),
                );

                ob_start();
                ?>
                <div class="rso-grid-item rso-hidden-wrapper grid h-full" data-category="<?php echo esc_attr( $card_category ); ?>">
                    <div class="overflow-hidden h-full">
                        <article class="rso-card-hover bg-[#F5F3EF] rounded-3xl p-6 flex flex-col min-h-[260px] h-full">
                            <div class="w-full h-40 rounded-2xl overflow-hidden mb-4">
                                <img src="<?php echo esc_url( $card_image_url ); ?>"
                                     alt="<?php echo esc_attr( $card_title ); ?>"
                                     class="block w-full h-full object-cover">
                            </div>
                            <p class="text-xs font-bold uppercase tracking-wide text-[#4A2E2A]/70 mb-3">
                                <?php echo esc_html( $card_badge ); ?>
                            </p>
                            <h3 class="rso-clamp-2 text-lg font-extrabold text-[#4A2E2A] uppercase leading-snug mb-3">
                                <?php echo esc_html( $card_title ); ?>
                            </h3>
                            <p class="rso-clamp-1 text-gray-600 text-ls leading-relaxed mb-4 flex-1 min-h-0">
                                <?php echo esc_html( $card_excerpt ); ?>
                            </p>
                            <button type="button" onclick="openCardModal('<?php echo esc_js( $rso_i ); ?>')"
                                    class="group inline-flex items-center gap-2 bg-[#D9A441] text-[#4A2E2A] text-sm font-bold uppercase tracking-wide px-5 py-2.5 rounded-[10px] hover:bg-[#c9953a] active:scale-95 transition w-fit cursor-pointer focus:outline-none focus-visible:ring-2 focus-visible:ring-[#4A2E2A] focus-visible:ring-offset-2">
                                <span class="read-more-label"><?php echo esc_html( $rso_read_more_label ); ?></span>
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                        </article>
                    </div>
                </div>
                <?php
                $rso_cards_markup[] = ob_get_clean();

            endwhile;
            wp_reset_postdata();
        endif;

        $rso_category_list = array_keys( $rso_all_categories );
        sort( $rso_category_list );
        ?>

        <script>
            var rsoCardsData = <?php echo wp_json_encode( $rso_card_data ); ?>;
        </script>

        <!-- Filter bar (multi-select: pick several categories, each becomes its own chip) -->
        <div class="flex flex-wrap items-center gap-3 mb-10">
            <div class="relative">
                <select id="rso-filter-select" class="appearance-none bg-white border border-gray-300 rounded-[10px] text-ls text-gray-700 font-medium pl-4 pr-10 py-3 cursor-pointer hover:border-[#4A2E2A] focus:outline-none focus:border-[#4A2E2A] transition">
                    <option value=""><?php echo esc_html( $rso_filter_label ); ?></option>
                    <?php foreach ( $rso_category_list as $rso_cat ) : ?>
                        <option value="<?php echo esc_attr( $rso_cat ); ?>"><?php echo esc_html( $rso_cat ); ?></option>
                    <?php endforeach; ?>
                </select>
                <svg class="pointer-events-none absolute right-3 top-1/2 -translate-y-1/2 w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </div>

            <div id="rso-filter-chips" class="flex flex-wrap items-center gap-2"></div>
        </div>

        <p id="rso-no-results" class="hidden text-gray-500 text-sm mb-6">No articles match your filter.</p>

        <!-- Article cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-stretch" id="rso-article-grid">
            <?php echo implode( "\n", $rso_cards_markup ); ?>
        </div>

    </div>
</section>

<!-- Read More popup / modal — kept OUTSIDE any .rso-animate section, because a
     CSS transform on an ancestor turns position:fixed into "fixed relative to
     that ancestor" instead of the real viewport. Living out here means it
     always covers the whole screen, not just the section it was opened from. -->
<div id="rso-card-modal" class="fixed inset-0 z-[9999] hidden items-center justify-center bg-black/70 px-4 py-8" onclick="closeCardModalBackdrop(event)">
    <div class="rso-modal-panel bg-white rounded-3xl max-w-6xl w-full max-h-[92vh] overflow-y-auto relative shadow-2xl" onclick="event.stopPropagation()">
        <button type="button" onclick="closeCardModal()" aria-label="Close"
                class="absolute top-4 right-4 z-10 bg-white/90 hover:bg-white text-[#4A2E2A] rounded-full w-10 h-10 flex items-center justify-center shadow cursor-pointer transition">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <div class="w-full px-8 py-8 h-72 md:h-96 overflow-hidden rounded-t-3xl ">
            <img id="rso-modal-image" src="" alt="" class="block w-full h-full object-cover">
        </div>

        <div class="p-8 md:p-12">
            <p id="rso-modal-category" class="text-xs font-bold uppercase tracking-wide text-[#4A2E2A]/70 mb-3"></p>
            <h3 id="rso-modal-title" class="text-2xl md:text-3xl font-extrabold text-[#4A2E2A] uppercase leading-snug mb-5"></h3>
            <div id="rso-modal-body" class="text-gray-700 text-base md:text-lg leading-relaxed space-y-4"></div>
        </div>
    </div>
</div>

<script>
function toggleReadMore(id, btn) {
    var wrapper = document.getElementById(id + '-wrapper');
    var label = btn.querySelector('.read-more-label');
    var icon = btn.querySelector('.read-more-icon');
    var isOpen = wrapper.style.gridTemplateRows === '1fr';

    if (isOpen) {
        wrapper.style.gridTemplateRows = '0fr';
        if (label) label.textContent = label.getAttribute('data-collapsed-label') || 'Read More';
        icon.style.transform = 'rotate(0deg)';
        btn.setAttribute('aria-expanded', 'false');
    } else {
        wrapper.style.gridTemplateRows = '1fr';
        if (label) {
            label.setAttribute('data-collapsed-label', label.textContent);
            label.textContent = '<?php echo esc_html( get_field('show_less') ?: 'Show Less' ); ?>';
        }
        icon.style.transform = 'rotate(180deg)';
        btn.setAttribute('aria-expanded', 'true');
    }
}

// Card Read More popup
function openCardModal(id) {
    var data = window.rsoCardsData && window.rsoCardsData[id];

    if (!data) return;

    var modal = document.getElementById('rso-card-modal');
    var img = document.getElementById('rso-modal-image');
    var category = document.getElementById('rso-modal-category');
    var title = document.getElementById('rso-modal-title');
    var body = document.getElementById('rso-modal-body');

    img.src = data.image || '';
    img.alt = data.title || '';
    category.textContent = data.category || '';
    title.textContent = data.title || '';

    // Display paragraphs (shown once, in the modal body only)
    body.innerHTML = '';

    if (data.paragraphs && data.paragraphs.length > 0) {

        data.paragraphs.forEach(function(text) {

            if (!text) return;

            var p = document.createElement('p');
            p.className = 'mb-4 text-gray-700 leading-relaxed';
            p.textContent = text;
            body.appendChild(p);

        });

    } else if (data.excerpt) {
        // Fall back to this specific card's excerpt (not whichever
        // card happened to be last on the page).
        var fallback = document.createElement('p');
        fallback.className = 'mb-4 text-gray-700 leading-relaxed';
        fallback.textContent = data.excerpt;
        body.appendChild(fallback);
    }

    modal.classList.remove('hidden');
    modal.classList.add('flex');

    requestAnimationFrame(function () {
        modal.classList.add('rso-modal-open');
    });

    var scrollbarWidth = window.innerWidth - document.documentElement.clientWidth;
    document.body.style.paddingRight = scrollbarWidth + 'px';
    document.body.style.overflow = 'hidden';
}


function closeCardModal() {
    var modal = document.getElementById('rso-card-modal');
    modal.classList.remove('rso-modal-open');
    document.body.style.overflow = '';
    document.body.style.paddingRight = '';
    setTimeout(function () {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    }, 200);
}

function closeCardModalBackdrop(e) {
    if (e.target.id === 'rso-card-modal') {
        closeCardModal();
    }
}

document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') {
        var modal = document.getElementById('rso-card-modal');
        if (modal && !modal.classList.contains('hidden')) {
            closeCardModal();
        }
    }
});

// Multi-select category filter — all cards show by default, filter narrows them
(function () {
    var select = document.getElementById('rso-filter-select');
    var chipsContainer = document.getElementById('rso-filter-chips');
    var noResults = document.getElementById('rso-no-results');
    var items = document.querySelectorAll('#rso-article-grid > .rso-grid-item');

    var selectedCategories = [];

    function renderChips() {
        chipsContainer.innerHTML = '';

        selectedCategories.forEach(function (cat) {
            var chip = document.createElement('span');
            chip.className = 'flex items-center gap-2 bg-[#4A2E2A] text-white text-ls font-medium pl-4 pr-2 py-3 rounded-[10px]';

            var label = document.createElement('span');
            label.textContent = cat;

            var removeBtn = document.createElement('button');
            removeBtn.type = 'button';
            removeBtn.setAttribute('aria-label', 'Remove filter: ' + cat);
            removeBtn.className = 'flex items-center justify-center w-5 h-5 rounded-full hover:bg-white/20 transition';
            removeBtn.innerHTML = '<svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>';
            removeBtn.addEventListener('click', function () {
                selectedCategories = selectedCategories.filter(function (c) { return c !== cat; });
                renderChips();
                applyFilters();
            });

            chip.appendChild(label);
            chip.appendChild(removeBtn);
            chipsContainer.appendChild(chip);
        });

        Array.prototype.forEach.call(select.options, function (opt) {
            if (opt.value) {
                opt.disabled = selectedCategories.indexOf(opt.value) !== -1;
            }
        });
    }

    function applyFilters() {
        var isActiveFilter = selectedCategories.length > 0;
        var visibleCount = 0;

        items.forEach(function (item) {
            var isWrapped = item.classList.contains('rso-hidden-wrapper');
            var matchesCategory = !isActiveFilter || selectedCategories.indexOf(item.getAttribute('data-category')) !== -1;

            if (isWrapped) {
                item.classList.toggle('rso-hidden-open', matchesCategory);
                item.style.pointerEvents = matchesCategory ? '' : 'none';
                item.style.display = matchesCategory ? '' : 'none';
            } else {
                item.style.display = matchesCategory ? '' : 'none';
            }

            if (matchesCategory) {
                visibleCount++;
            }
        });

        noResults.classList.toggle('hidden', visibleCount !== 0);
    }

    select.addEventListener('change', function () {
        var val = select.value;
        if (val && selectedCategories.indexOf(val) === -1) {
            selectedCategories.push(val);
        }
        select.value = '';
        renderChips();
        applyFilters();
    });

    applyFilters();
})();
</script>

<?php $rso_newsletter_image = get_field('newsletter_image'); ?>
<!-- Newsletter subscribe -->
<section class="rso-animate bg-white pt-10 px-6 md:px-12 pb-14" style="animation-delay: 0.45s;">
    <div class="max-w-6xl mx-auto">
        <div class="bg-[#4A2E2A] rounded-2xl px-8 py-8 md:px-10 md:py-10 flex flex-col md:flex-row md:items-center md:justify-between gap-6">
            <div class="flex items-center gap-5">
                <?php if ( !empty($rso_newsletter_image) && isset($rso_newsletter_image['url']) ) : ?>
                <img
                    src="<?php echo esc_url( $rso_newsletter_image['url'] ); ?>"
                    alt="<?php echo esc_attr( !empty($rso_newsletter_image['alt']) ? $rso_newsletter_image['alt'] : '' ); ?>"
                    class="hidden sm:block w-20 h-20 md:w-24 md:h-24 rounded-2xl object-cover shrink-0"
                >
                <?php endif; ?>
                <div>
                    <h2 class="text-white text-xl md:text-2xl font-extrabold uppercase mb-2">
                        <?php echo esc_html( get_field('stay_connected_with_rso') ?: 'Stay Connected' ); ?>
                    </h2>
                    <p class="text-white/80 text-sm md:text-base max-w-md">
                       <?php echo esc_html( get_field('get_the_latest_stories_and_updates_from_rabbit_school_delivered_to_your_inbox') ?: 'Subscribe to get the latest updates.' ); ?>
                    </p>
                </div>
            </div>

            <div>
                <form id="newsletter-form" class="flex flex-col sm:flex-row items-stretch gap-3 w-full md:w-auto" novalidate>
                    <input type="email" id="newsletter-email" name="newsletter_email" required
                           placeholder="<?php echo esc_attr( get_field('ex') ?: 'your.email@example.com' ); ?>"
                           class="bg-[#F5F3EF] text-gray-700 placeholder-gray-500 text-sm rounded-[10px] px-5 py-3 w-full sm:w-72 focus:outline-none focus:ring-2 focus:ring-white/40">
                    <button type="submit" id="newsletter-submit-btn"
                            class="bg-black text-white text-sm font-semibold rounded-[10px] px-6 py-3 hover:bg-gray-900 active:scale-95 transition cursor-pointer whitespace-nowrap">
                        <?php echo esc_html( get_field('subscribe') ?: 'Subscribe' ); ?>
                    </button>
                </form>
                <p id="newsletter-feedback" class="hidden text-sm mt-2"></p>
            </div>
        </div>
    </div>
</section>

<!-- EmailJS -->
<script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {

    // ---- Config ----
    // Replace with your EmailJS public key / service / template IDs.
    // This template only needs to accept an {{email}} variable, since
    // the subscribe form just collects an email address.
    const EMAILJS_PUBLIC_KEY = "9t73pdHwxTmtiFX1S";
    const EMAILJS_SERVICE_ID = "service_cknh7a8";
    const EMAILJS_NEWSLETTER_TEMPLATE_ID = "template_19do9sw";

    const form = document.getElementById('newsletter-form');
    const emailInput = document.getElementById('newsletter-email');
    const submitBtn = document.getElementById('newsletter-submit-btn');
    const feedback = document.getElementById('newsletter-feedback');

    if (!form || !emailInput || !submitBtn || !feedback) {
        console.error('Newsletter form: required element(s) missing.');
        return;
    }

    let hideTimer = null;

    function showFeedback(message, type) {
        if (hideTimer) { clearTimeout(hideTimer); hideTimer = null; }

        feedback.textContent = message;
        feedback.classList.remove('hidden', 'text-red-300', 'text-green-300');
        feedback.classList.add(type === 'error' ? 'text-red-300' : 'text-green-300');
        feedback.setAttribute('role', 'status');
        feedback.setAttribute('aria-live', 'polite');

        if (type === 'success') {
            hideTimer = setTimeout(function () {
                feedback.classList.add('hidden');
                hideTimer = null;
            }, 5000);
        }
    }

    function isValidEmail(value) {
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value.trim());
    }

    // Guard: make sure the EmailJS library actually loaded
    if (typeof emailjs === 'undefined') {
        console.error('<?php echo esc_html( get_field('emailjs_library_failed_to_load_check_ad-blockers_network_or_cdn_access') ?: 'EmailJS library failed to load (check ad-blockers, network, or CDN access).' ); ?>');
        showFeedback('<?php echo esc_html( get_field('newsletter_signup_is_temporarily_unavailable') ?: 'Newsletter signup is temporarily unavailable.' ); ?>', 'error');
        submitBtn.disabled = true;
        submitBtn.classList.add('opacity-60', 'cursor-not-allowed');
        return;
    }

    emailjs.init(EMAILJS_PUBLIC_KEY);

    let isSubmitting = false;

    form.addEventListener('submit', function (e) {
        e.preventDefault();
        if (isSubmitting) return;

        const email = emailInput.value.trim();
        if (!email || !isValidEmail(email)) {
            feedback.style.color = 'red';
            showFeedback('<?php echo esc_html( get_field('e') ?: 'Please enter a valid email address.' ); ?>', 'error');
            emailInput.classList.add('ring-2', 'ring-red-400');
            return;
        }
        emailInput.classList.remove('ring-2', 'ring-red-400');

        isSubmitting = true;
        submitBtn.disabled = true;
        submitBtn.classList.add('opacity-60', 'cursor-not-allowed');
        feedback.classList.add('hidden');

        const templateParams = {
            email: email
        };
        emailjs.send(EMAILJS_SERVICE_ID, EMAILJS_NEWSLETTER_TEMPLATE_ID, templateParams)
            .then(function (response) {
                console.log('EmailJS SUCCESS!', response.status, response.text);
                feedback.style.color = 'green';
                showFeedback('<?php echo esc_html( get_field('s') ?: "Thanks! You are subscribed." ); ?>', 'success');
                form.reset();
            })
            .catch(function (error) {
                console.error('EmailJS FAILED...', error);
                feedback.style.color = 'red';
                showFeedback(
                    '<?php echo esc_html( get_field('something_went_wrong') ?: 'Something went wrong.' ); ?>' +
                    (error && error.text ? ' (' + error.text + ')' : ''),
                    'error'
                );
            })
            .finally(function () {
                isSubmitting = false;
                submitBtn.disabled = false;
                submitBtn.classList.remove('opacity-60', 'cursor-not-allowed');
            });
    });
});
</script>

<?php get_footer(); ?>