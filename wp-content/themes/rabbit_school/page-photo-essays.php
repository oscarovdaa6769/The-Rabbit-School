<?php 
/**
 * Template Name: Photo Essays Page
 * Description: Dynamic Photo Essays gallery querying the 'photo_essay' Custom Post Type with live filtering, search, dynamic taxonomy translation mapping, and consistent button styling across languages.
 */

get_header(); 

// 1. HERO & FILTER DATA
$hero_img   = get_field('hero_image')       ?: get_theme_file_uri('assets/images/error.png');
$hero_title = get_field('hero_title')       ?: 'Photo Essays Stories of Impact';
$hero_desc  = get_field('hero_description') ?: 'Explore the lives, achievements, and everyday joys of children and young adults with intellectual disabilities in Cambodia through powerful visual stories';

// Filter categories
$filter_categories = [
    'all'              => get_field('filter_all_text') ?: __( 'All Photos', 'rabbit-school' ),
    'education'        => get_field('filter_education_text') ?: __( 'Education', 'rabbit-school' ),
    'community'        => get_field('filter_community_text') ?: __( 'Community', 'rabbit-school' ),
    'advocacy'         => get_field('filter_advocacy_text') ?: __( 'Advocacy', 'rabbit-school' ),
    'teacher-training' => get_field('filter_teacher_training_text') ?: __( 'Teacher Training', 'rabbit-school' ),
];

// Style Guide Color Palette Mapping for Categories
$category_color_map = [
    'education'        => [
        'badge' => 'bg-brand-orange/20 text-brand-orange border-brand-orange/40',
        'border'=> 'border-l-6 border-l-brand-orange',
    ],
    'community'        => [
        'badge' => 'bg-brand-blue/20 text-brand-blue border-brand-blue/40',
        'border'=> 'border-l-6 border-l-brand-blue',
    ],
    'advocacy'         => [
        'badge' => 'bg-brand-teal/20 text-brand-teal border-brand-teal/40',
        'border'=> 'border-l-6 border-l-brand-teal',
    ],
    'teacher-training' => [
        'badge' => 'bg-brand-pink/20 text-brand-pink border-brand-pink/40',
        'border'=> 'border-l-6 border-l-brand-pink',
    ],
    'default'          => [
        'badge' => 'bg-brand-yellow/20 text-brand-yellow border-brand-yellow/50',
        'border'=> 'border-l-6 border-l-brand-yellow',
    ],
];

// 2. UNIFIED BUTTON COLOR (Orange BG + Brown Hover for all languages)
$btn_bg_color = 'bg-brand-orange text-text-light hover:bg-brand-brown hover:text-text-light';
?>

<!-- SECTION 1: HERO BANNER -->
<section class="relative overflow-hidden">
    <img src="<?php echo esc_url($hero_img); ?>" alt="<?php echo esc_attr($hero_title); ?>" class="h-[500px] md:h-[700px] w-full object-cover">
    
    <div class="absolute inset-0 z-10 bg-black/40 flex items-end pb-8 md:pb-16">
        <div class="w-full max-w-7xl mx-auto px-[20px] 2xl:px-0">
            <div class="max-w-2xl text-text-light">
                <h1 class="font-heading text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-black leading-tight mb-2 md:mb-4 uppercase">
                    <?php echo esc_html($hero_title); ?>
                </h1>
                <p class="font-sans text-[14px] sm:text-[15px] md:text-[16px] lg:text-[18px] leading-relaxed opacity-90">
                    <?php echo esc_html($hero_desc); ?>
                </p>
            </div>
        </div>
    </div>
</section> 

<!-- SECTION 2: FILTERS & SEARCH -->
<section class="max-w-7xl mx-auto pt-[64px] md:pt-[50px] pb-[20px] px-[20px] 2xl:px-0 w-full font-sans">
    <div class="flex flex-col md:flex-row gap-6 lg:gap-8 justify-between items-stretch md:items-center w-full">
        
        <!-- Category Filter Buttons -->
        <div class="flex flex-wrap items-center gap-2.5 w-full md:w-auto" id="essay-filter-container">
            <?php foreach ($filter_categories as $slug => $label): ?>
                <button 
                    type="button"
                    data-filter="<?php echo esc_attr($slug); ?>"
                    class="essay-filter-btn px-[24px] py-[12px] text-sm font-bold uppercase rounded-[8px] transition-all duration-300 shadow-md hover:shadow-xl cursor-pointer border border-brand-brown/20
                           <?php echo $slug === 'all' ? 'bg-brand-brown text-text-light font-black active-filter' : 'bg-brand-cream hover:bg-brand-yellow text-text-main'; ?>">
                    <?php echo esc_html($label); ?>
                </button>
            <?php endforeach; ?>
        </div>

        <!-- Search Input -->
        <div class="relative w-full md:max-w-xs lg:max-w-md">
            <input 
                id="program-search-input"
                type="text" 
                placeholder="<?php echo esc_attr(get_field('placeholder_text') ?: __( 'Search photo essays...', 'rabbit-school' )); ?>" 
                class="w-full border border-brand-brown/30 text-text-main placeholder-brand-brown/50 px-[24px] py-[12px] rounded-[16px] bg-brand-cream focus:outline-none focus:border-brand-brown focus:ring-2 focus:ring-brand-yellow transition-all duration-200 text-sm shadow-md hover:shadow-xl"
            />
            <div class="absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none flex items-center">
                <span class="icon-[solar--magnifer-linear] w-5 h-5 text-text-main/60" aria-hidden="true"></span>
            </div>
        </div>

    </div>
</section>

<!-- SECTION 3: ALL POSTS GRID -->
<section class="max-w-7xl mx-auto pb-[64px] md:pb-[50px] px-[20px] 2xl:px-0 font-sans">
    <?php 
    $args = [
        'post_type'      => 'photo_essay',
        'posts_per_page' => -1,
        'post_status'    => 'publish',
        'orderby'        => 'date',
        'order'          => 'DESC',
    ];
    $photo_essays_query = new WP_Query($args);
    ?>

    <?php if ($photo_essays_query->have_posts()) : ?>
        <div id="photo-essay-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8 max-w-7xl mx-auto">
            <?php while ($photo_essays_query->have_posts()) : $photo_essays_query->the_post(); 
                $terms = get_the_terms(get_the_ID(), 'photo_essay_category');
                
                if (!empty($terms) && !is_wp_error($terms)) {
                    $term_obj = $terms[0];
                    $cat_name = $term_obj->name;
                    $cat_slug = urldecode($term_obj->slug);

                    if (function_exists('pll_get_term')) {
                        $default_lang_code = pll_default_language();
                        $original_term_id  = pll_get_term($term_obj->term_id, $default_lang_code);
                        if ($original_term_id) {
                            $original_term = get_term($original_term_id, 'photo_essay_category');
                            if ($original_term && !is_wp_error($original_term)) {
                                $cat_slug = $original_term->slug;
                            }
                        }
                    } elseif (function_exists('icl_object_id')) {
                        $original_term_id = icl_object_id($term_obj->term_id, 'photo_essay_category', true, 'en');
                        $original_term    = get_term($original_term_id, 'photo_essay_category');
                        if ($original_term && !is_wp_error($original_term)) {
                            $cat_slug = $original_term->slug;
                        }
                    }
                } else {
                    $cat_slug = 'education';
                    $cat_name = __( 'Education', 'rabbit-school' );
                }

                $card_img       = get_the_post_thumbnail_url(get_the_ID(), 'large') 
                    ?: (get_field('card_image') ?: get_theme_file_uri('assets/images/error.png'));
                $card_date      = get_field('essay_subtitle_date') ?: get_the_date(get_option('date_format'));
                $card_desc      = get_field('essay_description') ?: get_the_excerpt();
                $btn_text       = get_field('button_text') ?: __( 'Read More', 'rabbit-school' );

                $color_scheme   = isset($category_color_map[$cat_slug]) ? $category_color_map[$cat_slug] : $category_color_map['default'];
            ?>
                <!-- Individual Post Card -->
                <article 
                    class="essay-card bg-brand-cream rounded-[28px] overflow-hidden flex flex-col justify-between h-full p-5 <?php echo esc_attr($color_scheme['border']); ?> border-y border-r border-brand-brown/10 shadow-md hover:shadow-xl transition-all duration-300 group"
                    data-category="<?php echo esc_attr($cat_slug); ?>"
                    data-title="<?php echo esc_attr(strtolower(get_the_title())); ?>"
                    data-description="<?php echo esc_attr(strtolower($card_desc)); ?>">
                    
                    <div>
                        <!-- Thumbnail -->
                        <div class="w-full aspect-[4/3] overflow-hidden rounded-[20px] mb-4">
                            <img src="<?php echo esc_url($card_img); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        </div>

                        <!-- Date & Category Subtitle -->
                        <div class="flex items-center justify-between font-sans text-[14px] font-semibold text-text-muted mb-3">
                            <span class="flex items-center gap-1.5">
                                <span class="icon-[solar--calendar-minimalistic-linear] w-5 h-5 text-text-main/60" aria-hidden="true"></span>
                                <?php echo esc_html($card_date); ?>
                            </span>
                            <span class="px-3 py-1 rounded-[8px] text-xs font-bold uppercase tracking-wider border <?php echo esc_attr($color_scheme['badge']); ?>">
                                <?php echo esc_html($cat_name); ?>
                            </span>
                        </div>

                        <!-- Card Title -->
                        <h3 class="card-title font-heading text-[16px] sm:text-[18px] md:text-[20px] font-black text-text-main leading-snug uppercase mb-2 line-clamp-2">
                            <?php the_title(); ?>
                        </h3>

                        <!-- Description -->
                        <p class="card-desc font-sans text-[14px] sm:text-[15px] text-text-muted leading-relaxed line-clamp-3 mb-4">
                            <?php echo esc_html($card_desc); ?>
                        </p>
                    </div>

                    <!-- Button with Standardized Orange BG + Brown Hover -->
                    <a href="<?php the_permalink(); ?>" class="tracking-wider px-[24px] py-[12px] rounded-[8px] inline-flex items-center justify-between w-full shadow-md hover:shadow-xl transition-all duration-300 font-bold text-sm uppercase mt-auto <?php echo esc_attr( $btn_bg_color ); ?>">
                        <span><?php echo esc_html($btn_text); ?></span>
                        <span class="icon-[solar--arrow-right-linear] w-5 h-5 transition-transform duration-300 group-hover:translate-x-1"></span>
                    </a>
                </article>
            <?php endwhile; ?>
        </div>

        <!-- No Matching Filter/Search Results -->
        <div id="no-results" class="hidden text-center py-16">
            <span class="icon-[solar--gallery-wide-linear] w-12 h-12 text-text-main/40 mx-auto mb-3 block" aria-hidden="true"></span>
            <p class="font-heading font-bold text-[20px] text-text-main uppercase"><?php esc_html_e( 'No photo essays match your search.', 'rabbit-school' ); ?></p>
        </div>

    <?php else : ?>
        <div class="text-center py-16">
            <p class="font-heading font-bold text-[20px] text-text-main uppercase"><?php esc_html_e( 'No posts found.', 'rabbit-school' ); ?></p>
        </div>
    <?php endif; wp_reset_postdata(); ?>

    <!-- Dynamic JS Pagination Container -->
    <div id="essay-pagination" class="flex items-center justify-center gap-2 mt-12 pt-8 border-t border-brand-brown/10"></div>
</section>

<!-- PAGINATION & SEARCH SCRIPT -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    const itemsPerPage = 6;
    let currentPage = 1;

    const cards = Array.from(document.querySelectorAll('.essay-card'));
    const filterBtns = document.querySelectorAll('.essay-filter-btn');
    const searchInput = document.getElementById('program-search-input');
    const paginationContainer = document.getElementById('essay-pagination');
    const noResults = document.getElementById('no-results');

    const labelPrev = <?php echo json_encode( __( 'Prev', 'rabbit-school' ) ); ?>;
    const labelNext = <?php echo json_encode( __( 'Next', 'rabbit-school' ) ); ?>;

    let activeFilter = 'all';
    let searchQuery = '';

    function getMatchingCards() {
        return cards.filter(card => {
            const category = card.getAttribute('data-category');
            const title = card.getAttribute('data-title') || '';
            const description = card.getAttribute('data-description') || '';

            const matchesFilter = (activeFilter === 'all') || (category === activeFilter);
            const matchesSearch = title.includes(searchQuery) || description.includes(searchQuery);

            return matchesFilter && matchesSearch;
        });
    }

    function renderGallery() {
        const matchingCards = getMatchingCards();
        const totalPages = Math.ceil(matchingCards.length / itemsPerPage) || 1;

        if (currentPage > totalPages) currentPage = 1;

        cards.forEach(card => card.classList.add('hidden'));

        if (matchingCards.length === 0) {
            if (noResults) noResults.classList.remove('hidden');
            if (paginationContainer) paginationContainer.classList.add('hidden');
            return;
        }

        if (noResults) noResults.classList.add('hidden');
        if (paginationContainer) paginationContainer.classList.remove('hidden');

        const startIndex = (currentPage - 1) * itemsPerPage;
        const endIndex = startIndex + itemsPerPage;
        matchingCards.slice(startIndex, endIndex).forEach(card => card.classList.remove('hidden'));

        renderPagination(totalPages);
    }

    function renderPagination(totalPages) {
        if (!paginationContainer) return;
        paginationContainer.innerHTML = '';

        if (totalPages <= 1) return;

        // Prev Button
        const prevBtn = document.createElement('button');
        prevBtn.className = `px-[24px] py-[12px] text-sm font-bold uppercase rounded-[8px] border transition-all cursor-pointer ${
            currentPage === 1 
                ? 'border-gray-200 text-gray-400 cursor-not-allowed shadow-none' 
                : 'border-brand-brown/20 bg-brand-cream hover:bg-brand-yellow text-text-main shadow-md hover:shadow-xl'
        }`;
        prevBtn.innerText = labelPrev;
        prevBtn.disabled = currentPage === 1;
        prevBtn.addEventListener('click', () => {
            if (currentPage > 1) {
                currentPage--;
                renderGallery();
                scrollToGrid();
            }
        });
        paginationContainer.appendChild(prevBtn);

        // Page Numbers
        for (let i = 1; i <= totalPages; i++) {
            const pageBtn = document.createElement('button');
            pageBtn.className = `px-[20px] py-[12px] text-sm font-bold uppercase rounded-[8px] transition-all cursor-pointer ${
                i === currentPage 
                    ? 'bg-brand-brown text-text-light font-black shadow-md border border-brand-brown' 
                    : 'border border-brand-brown/20 bg-brand-cream hover:bg-brand-yellow text-text-main shadow-md hover:shadow-xl'
            }`;
            pageBtn.innerText = i;
            pageBtn.addEventListener('click', () => {
                currentPage = i;
                renderGallery();
                scrollToGrid();
            });
            paginationContainer.appendChild(pageBtn);
        }

        // Next Button
        const nextBtn = document.createElement('button');
        nextBtn.className = `px-[24px] py-[12px] text-sm font-bold uppercase rounded-[8px] border transition-all cursor-pointer ${
            currentPage === totalPages 
                ? 'border-gray-200 text-gray-400 cursor-not-allowed shadow-none' 
                : 'border-brand-brown/20 bg-brand-cream hover:bg-brand-yellow text-text-main shadow-md hover:shadow-xl'
        }`;
        nextBtn.innerText = labelNext;
        nextBtn.disabled = currentPage === totalPages;
        nextBtn.addEventListener('click', () => {
            if (currentPage < totalPages) {
                currentPage++;
                renderGallery();
                scrollToGrid();
            }
        });
        paginationContainer.appendChild(nextBtn);
    }

    function scrollToGrid() {
        const grid = document.getElementById('photo-essay-grid');
        if (grid) grid.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }

    // Filter Buttons Listener
    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            filterBtns.forEach(b => {
                b.classList.remove('bg-brand-brown', 'text-text-light', 'font-black', 'active-filter');
                b.classList.add('bg-brand-cream', 'text-text-main');
            });

            this.classList.remove('bg-brand-cream', 'text-text-main');
            this.classList.add('bg-brand-brown', 'text-text-light', 'font-black', 'active-filter');

            activeFilter = this.getAttribute('data-filter');
            currentPage = 1;
            renderGallery();
        });
    });

    // Search Input Listener
    if (searchInput) {
        searchInput.addEventListener('input', (e) => {
            searchQuery = e.target.value.toLowerCase().trim();
            currentPage = 1;
            renderGallery();
        });
    }

    renderGallery();
});
</script>

<?php 
get_footer(); 
?>