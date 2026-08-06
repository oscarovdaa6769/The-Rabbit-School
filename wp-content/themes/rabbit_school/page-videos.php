<?php 
/**
 * Template Name: Videos Page
 * Description: Video gallery rendering uploaded MP4 videos directly on cards with dynamic CSS animations and modal player.
 */

get_header(); 

// HERO & FILTER LABELS
$hero_img   = get_field('hero_image')       ?: get_theme_file_uri('assets/images/error.png');
$hero_title = get_field('hero_title')       ?: __( 'Video Stories & Impact', 'rabbit-school' );
$hero_desc  = get_field('hero_description') ?: __( 'Watch our latest activities, impact stories, and community events.', 'rabbit-school' );

$filter_categories = [
    'all'              => get_field('filter_all_text')              ?: __( 'All Videos', 'rabbit-school' ),
    'education'        => get_field('filter_education_text')        ?: __( 'Education', 'rabbit-school' ),
    'community'        => get_field('filter_community_text')        ?: __( 'Community', 'rabbit-school' ),
    'advocacy'         => get_field('filter_advocacy_text')         ?: __( 'Advocacy', 'rabbit-school' ),
    'teacher-training' => get_field('filter_teacher_training_text') ?: __( 'Teacher Training', 'rabbit-school' ),
];

$category_color_map = [
    'education'        => [
        'badge'  => 'bg-brand-orange/20 text-brand-orange border-brand-orange/40', 
        'border' => 'border-l-6 border-l-brand-orange',
        'button' => 'bg-brand-orange text-text-light hover:bg-brand-brown hover:text-text-light',
        'play'   => 'bg-brand-orange',
        'ring'   => 'ring-brand-orange/40'
    ],
    'community'        => [
        'badge'  => 'bg-brand-blue/20 text-brand-blue border-brand-blue/40', 
        'border' => 'border-l-6 border-l-brand-blue',
        'button' => 'bg-brand-blue text-text-light hover:bg-brand-brown hover:text-text-light',
        'play'   => 'bg-brand-blue',
        'ring'   => 'ring-brand-blue/40'
    ],
    'advocacy'         => [
        'badge'  => 'bg-brand-teal/20 text-brand-teal border-brand-teal/40', 
        'border' => 'border-l-6 border-l-brand-teal',
        'button' => 'bg-brand-teal text-text-light hover:bg-brand-brown hover:text-text-light',
        'play'   => 'bg-brand-teal',
        'ring'   => 'ring-brand-teal/40'
    ],
    'teacher-training' => [
        'badge'  => 'bg-brand-pink/20 text-brand-pink border-brand-pink/40', 
        'border' => 'border-l-6 border-l-brand-pink',
        'button' => 'bg-brand-pink text-text-light hover:bg-brand-brown hover:text-text-light',
        'play'   => 'bg-brand-pink',
        'ring'   => 'ring-brand-pink/40'
    ],
    'default'          => [
        'badge'  => 'bg-brand-yellow/20 text-brand-brown border-brand-yellow/50', 
        'border' => 'border-l-6 border-l-brand-yellow',
        'button' => 'bg-brand-yellow text-text-yellow hover:bg-brand-brown hover:text-text-light',
        'play'   => 'bg-brand-yellow',
        'ring'   => 'ring-brand-yellow/40'
    ],
];
?>

<style>
    /* KEYFRAME ANIMATIONS */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(24px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes pulseRing {
        0% {
            transform: scale(0.95);
            box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.6);
        }
        70% {
            transform: scale(1.1);
            box-shadow: 0 0 0 16px rgba(255, 255, 255, 0);
        }
        100% {
            transform: scale(0.95);
            box-shadow: 0 0 0 0 rgba(255, 255, 255, 0);
        }
    }

    /* ANIMATION UTILITY CLASSES */
    .animate-hero-content {
        animation: fadeInUp 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    }

    .animate-card-enter {
        animation: fadeInUp 0.6s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    }

    /* CARD HOVER ANIMATIONS */
    .video-card {
        transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.35s ease, border-color 0.35s ease;
    }

    .video-card:hover {
        transform: translateY(-6px);
    }

    .video-thumb-container video {
        transition: transform 0.5s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .video-card:hover .video-thumb-container video {
        transform: scale(1.06);
    }

    .play-btn-pulse {
        transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .video-card:hover .play-btn-pulse {
        animation: pulseRing 1.5s infinite;
        transform: scale(1.15);
    }

    /* MODAL TRANSITIONS */
    #video-modal {
        transition: opacity 0.3s ease, visibility 0.3s ease;
    }

    #video-modal.modal-closed {
        opacity: 0;
        visibility: hidden;
        pointer-events: none;
    }

    #video-modal.modal-open {
        opacity: 1;
        visibility: visible;
        pointer-events: auto;
    }

    #video-modal-content {
        transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1), opacity 0.35s ease;
    }

    #video-modal.modal-closed #video-modal-content {
        transform: scale(0.92) translateY(20px);
        opacity: 0;
    }

    #video-modal.modal-open #video-modal-content {
        transform: scale(1) translateY(0);
        opacity: 1;
    }
</style>

<!-- SECTION 1: HERO BANNER -->
<section class="relative overflow-hidden">
    <img src="<?php echo esc_url($hero_img); ?>" alt="<?php echo esc_attr($hero_title); ?>" class="h-[400px] md:h-[550px] w-full object-cover transition-transform duration-700 hover:scale-105">
    <div class="absolute inset-0 z-10 bg-gradient-to-t from-black/80 via-black/40 to-transparent flex items-end pb-8 md:pb-16">
        <div class="w-full max-w-7xl mx-auto px-[20px] 2xl:px-0">
            <div class="max-w-2xl text-text-light animate-hero-content">
                <h1 class="font-heading text-[32px] sm:text-[40px] lg:text-[48px] font-black leading-tight mb-3 uppercase tracking-wide">
                    <?php echo esc_html($hero_title); ?>
                </h1>
                <p class="font-sans text-[15px] md:text-[18px] leading-relaxed opacity-90">
                    <?php echo esc_html($hero_desc); ?>
                </p>
            </div>
        </div>
    </div>
</section> 

<!-- SECTION 2: FILTERS & SEARCH -->
<section class="max-w-7xl mx-auto pt-[48px] md:pt-[50px] pb-[20px] px-[20px] 2xl:px-0 w-full font-sans">
    <div class="flex flex-col md:flex-row gap-6 justify-between items-stretch md:items-center w-full">
        <div class="flex flex-wrap items-center gap-2.5 w-full md:w-auto" id="video-filter-container">
            <?php foreach ($filter_categories as $slug => $label): ?>
                <button 
                    type="button"
                    data-filter="<?php echo esc_attr($slug); ?>"
                    class="video-filter-btn px-[24px] py-[12px] text-sm font-bold uppercase rounded-[8px] transition-all duration-300 shadow-sm hover:shadow-lg cursor-pointer border border-brand-brown/20 transform active:scale-95
                           <?php echo $slug === 'all' ? 'bg-brand-brown text-text-light font-black active-filter scale-105' : 'bg-brand-cream hover:bg-brand-yellow text-text-main'; ?>">
                    <?php echo esc_html($label); ?>
                </button>
            <?php endforeach; ?>
        </div>

        <div class="relative w-full md:max-w-xs lg:max-w-md">
            <input 
                id="video-search-input"
                type="text" 
                placeholder="<?php echo esc_attr(get_field('placeholder_text') ?: __( 'Search videos...', 'rabbit-school' )); ?>" 
                class="w-full border border-brand-brown/30 text-text-main placeholder-brand-brown/50 px-[24px] py-[12px] rounded-[16px] bg-brand-cream focus:outline-none focus:border-brand-brown focus:ring-2 focus:ring-brand-yellow transition-all duration-300 text-sm shadow-md hover:shadow-lg"
            />
            <div class="absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none flex items-center">
                <span class="icon-[solar--magnifer-linear] w-5 h-5 text-text-main/60 transition-transform duration-300 group-focus-within:scale-110" aria-hidden="true"></span>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 3: VIDEO GRID -->
<section id="video-grid-section" class="max-w-7xl mx-auto pb-[64px] md:pb-[80px] px-[20px] 2xl:px-0 font-sans">
    <?php 
    $args = [
        'post_type'      => 'video_item',
        'posts_per_page' => -1,
        'post_status'    => 'publish',
        'orderby'        => 'date',
        'order'          => 'DESC',
    ];
    $video_query = new WP_Query($args);
    ?>

    <?php if ($video_query->have_posts()) : ?>
        <div id="video-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8 max-w-7xl mx-auto">
            <?php 
            $card_index = 0;
            while ($video_query->have_posts()) : $video_query->the_post(); 

                // 1. Term & Taxonomy Handling
                $terms    = get_the_terms(get_the_ID(), 'video_category');
                $cat_slug = 'default';
                $cat_name = __( 'Education', 'rabbit-school' );

                if (!empty($terms) && !is_wp_error($terms)) {
                    $term_obj = $terms[0];
                    $cat_name = $term_obj->name;

                    if (function_exists('pll_get_term')) {
                        $default_lang = pll_default_language();
                        $orig_id      = pll_get_term($term_obj->term_id, $default_lang);
                        if ($orig_id && ($orig_term = get_term($orig_id, 'video_category')) && !is_wp_error($orig_term)) {
                            $term_obj = $orig_term;
                        }
                    }

                    $raw_slug = strtolower($term_obj->slug);

                    if (str_contains($raw_slug, 'teacher') || str_contains($raw_slug, 'training')) {
                        $cat_slug = 'teacher-training';
                    } elseif (str_contains($raw_slug, 'edu')) {
                        $cat_slug = 'education';
                    } elseif (str_contains($raw_slug, 'comm')) {
                        $cat_slug = 'community';
                    } elseif (str_contains($raw_slug, 'advoc')) {
                        $cat_slug = 'advocacy';
                    } else {
                        $cat_slug = sanitize_title(str_replace('_', '-', $raw_slug));
                    }
                }

                // 2. Video URL Field Extraction
                $video_raw = get_field('url');
                $video_url = '';
                if (!empty($video_raw)) {
                    if (is_array($video_raw)) {
                        $video_url = $video_raw['url'] ?? '';
                    } elseif (is_numeric($video_raw)) {
                        $video_url = wp_get_attachment_url($video_raw);
                    } elseif (is_string($video_raw)) {
                        $video_url = $video_raw;
                    }
                }

                // 3. Card Variables
                $card_date = get_the_date(get_option('date_format'));
                $card_desc = get_field('video_description') ?: get_the_excerpt();
                $btn_text  = __( 'Watch Video', 'rabbit-school' );

                // 4. Color Scheme Lookup
                $color_scheme = $category_color_map[$cat_slug] ?? $category_color_map['default'];
                $btn_class    = $color_scheme['button'];
                $play_bg     = $color_scheme['play'];
                $card_delay   = ($card_index % 6) * 0.08; 
                $card_index++;
            ?>
                <!-- Individual Video Card -->
                <article 
                    class="video-card bg-brand-cream rounded-[28px] overflow-hidden flex flex-col justify-between h-full p-5 <?php echo esc_attr($color_scheme['border']); ?> border-y border-r border-brand-brown/10 shadow-md hover:shadow-2xl group"
                    style="animation-delay: <?php echo $card_delay; ?>s;"
                    data-category="<?php echo esc_attr($cat_slug); ?>"
                    data-title="<?php echo esc_attr(strtolower(get_the_title())); ?>"
                    data-description="<?php echo esc_attr(strtolower($card_desc)); ?>">
                    
                    <div>
                        <!-- Video Frame Thumbnail with Hover Animation -->
                        <div class="video-thumb-container relative w-full aspect-[16/9] overflow-hidden rounded-[20px] mb-4 bg-black cursor-pointer trigger-video-modal" data-video-file="<?php echo esc_url($video_url); ?>">
                            
                            <?php if (!empty($video_url)) : ?>
                                <video 
                                    src="<?php echo esc_url($video_url); ?>#t=0.1" 
                                    preload="metadata" 
                                    muted 
                                    playsinline 
                                    class="w-full h-full object-cover pointer-events-none">
                                </video>
                            <?php else : ?>
                                <div class="w-full h-full flex items-center justify-center bg-brand-brown/10 text-text-muted font-bold text-xs">
                                    <?php esc_html_e( 'No Video Uploaded', 'rabbit-school' ); ?>
                                </div>
                            <?php endif; ?>

                            <!-- Dynamic Overlay Animated Play Button -->
                            <div class="absolute inset-0 bg-black/20 flex items-center justify-center transition-colors duration-300 group-hover:bg-black/40">
                                <span class="play-btn-pulse w-12 h-12 rounded-full <?php echo esc_attr($play_bg); ?> text-text-light flex items-center justify-center shadow-lg">
                                    <span class="icon-[solar--play-bold] w-6 h-6 ml-0.5"></span>
                                </span>
                            </div>
                        </div>

                        <!-- Date & Category -->
                        <div class="flex items-center justify-between font-sans text-[14px] font-semibold text-text-muted mb-3">
                            <span class="flex items-center gap-1.5 transition-colors duration-200 group-hover:text-text-main">
                                <span class="icon-[solar--calendar-minimalistic-linear] w-5 h-5 text-text-main/60" aria-hidden="true"></span>
                                <?php echo esc_html($card_date); ?>
                            </span>
                            <span class="px-3 py-1 rounded-[8px] text-xs font-bold uppercase tracking-wider border transition-transform duration-300 group-hover:scale-105 <?php echo esc_attr($color_scheme['badge']); ?>">
                                <?php echo esc_html($cat_name); ?>
                            </span>
                        </div>

                        <!-- Video Title -->
                        <h3 class="font-heading text-[16px] sm:text-[18px] font-black text-text-main leading-snug uppercase mb-2 line-clamp-2 transition-colors duration-200 group-hover:text-brand-brown">
                            <?php the_title(); ?>
                        </h3>

                        <!-- Description -->
                        <?php if ($card_desc) : ?>
                            <p class="font-sans text-[14px] text-text-muted leading-relaxed line-clamp-2 mb-4">
                                <?php echo esc_html($card_desc); ?>
                            </p>
                        <?php endif; ?>
                    </div>

                    <!-- Watch Video Button -->
                    <button type="button" data-video-file="<?php echo esc_url($video_url); ?>" class="trigger-video-modal cursor-pointer tracking-wider px-[24px] py-[12px] rounded-[8px] inline-flex items-center justify-between w-full shadow-md hover:shadow-xl transition-all duration-300 font-bold text-sm uppercase mt-auto transform active:scale-[0.98] <?php echo esc_attr($btn_class); ?>">
                        <span><?php echo esc_html($btn_text); ?></span>
                        <span class="icon-[solar--play-circle-linear] w-5 h-5 transition-transform duration-300 group-hover:translate-x-1"></span>
                    </button>
                </article>
            <?php endwhile; ?>
        </div>

        <div id="no-video-results" class="hidden text-center py-16 animate-hero-content">
            <span class="icon-[solar--videocamera-record-linear] w-12 h-12 text-text-main/40 mx-auto mb-3 block" aria-hidden="true"></span>
            <p class="font-heading font-bold text-[20px] text-text-main uppercase"><?php esc_html_e( 'No videos match your search.', 'rabbit-school' ); ?></p>
        </div>

    <?php else : ?>
        <div class="text-center py-16 animate-hero-content">
            <p class="font-heading font-bold text-[20px] text-text-main uppercase"><?php esc_html_e( 'No videos found.', 'rabbit-school' ); ?></p>
        </div>
    <?php endif; wp_reset_postdata(); ?>

    <div id="video-pagination" class="flex items-center justify-center gap-2 mt-12 pt-8 border-t border-brand-brown/10"></div>
</section>

<!-- MODAL OVERLAY FOR WATCHING MP4 VIDEOS -->
<div id="video-modal" class="modal-closed fixed inset-0 z-50 bg-black/85 backdrop-blur-md flex items-center justify-center p-4">
    <div id="video-modal-content" class="relative w-full max-w-4xl bg-black rounded-[20px] overflow-hidden shadow-2xl border border-white/10">
        <button id="close-video-modal" type="button" aria-label="<?php esc_attr_e( 'Close Video', 'rabbit-school' ); ?>" class="absolute top-4 right-4 z-10 w-10 h-10 rounded-full bg-white/20 text-white flex items-center justify-center hover:bg-white/40 hover:rotate-90 transition-all duration-300 cursor-pointer">
            ✕
        </button>
        <div class="aspect-[16/9] w-full flex items-center justify-center bg-black">
            <video id="video-modal-player" class="w-full h-full object-contain" controls playsinline>
                <source id="video-modal-source" src="" type="video/mp4">
                <?php esc_html_e( 'Your browser does not support the video tag.', 'rabbit-school' ); ?>
            </video>
        </div>
    </div>
</div>

<!-- JAVASCRIPT FOR FILTERS, SEARCH, PAGINATION, ANIMATIONS & MODAL -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    const itemsPerPage = 6;
    let currentPage = 1;

    const cards = Array.from(document.querySelectorAll('.video-card'));
    const filterBtns = document.querySelectorAll('.video-filter-btn');
    const searchInput = document.getElementById('video-search-input');
    const paginationContainer = document.getElementById('video-pagination');
    const noResults = document.getElementById('no-video-results');
    const gridSection = document.getElementById('video-grid-section');

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

    function renderGallery(scroll = false) {
        const matchingCards = getMatchingCards();
        const totalPages = Math.ceil(matchingCards.length / itemsPerPage) || 1;

        if (currentPage > totalPages) currentPage = 1;

        cards.forEach(card => {
            card.classList.add('hidden');
            card.classList.remove('animate-card-enter');
        });

        if (matchingCards.length === 0) {
            if (noResults) noResults.classList.remove('hidden');
            if (paginationContainer) paginationContainer.classList.add('hidden');
            return;
        }

        if (noResults) noResults.classList.add('hidden');
        if (paginationContainer) paginationContainer.classList.remove('hidden');

        const startIndex = (currentPage - 1) * itemsPerPage;
        const endIndex = startIndex + itemsPerPage;
        const visibleCards = matchingCards.slice(startIndex, endIndex);

        visibleCards.forEach((card, index) => {
            card.classList.remove('hidden');
            card.style.animationDelay = `${index * 0.08}s`;
            // Trigger animation repaint
            void card.offsetWidth;
            card.classList.add('animate-card-enter');
        });

        renderPagination(totalPages);

        if (scroll && gridSection) {
            gridSection.scrollIntoView({ behavior: 'smooth' });
        }
    }

    function renderPagination(totalPages) {
        if (!paginationContainer || totalPages <= 1) {
            if (paginationContainer) paginationContainer.innerHTML = '';
            return;
        }
        paginationContainer.innerHTML = '';

        for (let i = 1; i <= totalPages; i++) {
            const pageBtn = document.createElement('button');
            pageBtn.type = 'button';
            pageBtn.className = `px-[20px] py-[12px] text-sm font-bold uppercase rounded-[8px] transition-all duration-300 cursor-pointer transform active:scale-95 ${
                i === currentPage 
                    ? 'bg-brand-brown text-text-light font-black shadow-md border border-brand-brown scale-105' 
                    : 'border border-brand-brown/20 bg-brand-cream hover:bg-brand-yellow text-text-main shadow-md hover:shadow-lg'
            }`;
            pageBtn.innerText = i;
            pageBtn.addEventListener('click', () => {
                currentPage = i;
                renderGallery(true);
            });
            paginationContainer.appendChild(pageBtn);
        }
    }

    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            filterBtns.forEach(b => {
                b.classList.remove('bg-brand-brown', 'text-text-light', 'font-black', 'active-filter', 'scale-105');
                b.classList.add('bg-brand-cream', 'text-text-main');
            });
            this.classList.remove('bg-brand-cream', 'text-text-main');
            this.classList.add('bg-brand-brown', 'text-text-light', 'font-black', 'active-filter', 'scale-105');

            activeFilter = this.getAttribute('data-filter');
            currentPage = 1;
            renderGallery();
        });
    });

    if (searchInput) {
        searchInput.addEventListener('input', (e) => {
            searchQuery = e.target.value.toLowerCase().trim();
            currentPage = 1;
            renderGallery();
        });
    }

    renderGallery();

    // Modal Video Handler
    const modal = document.getElementById('video-modal');
    const player = document.getElementById('video-modal-player');
    const source = document.getElementById('video-modal-source');
    const closeBtn = document.getElementById('close-video-modal');

    document.addEventListener('click', (e) => {
        const trigger = e.target.closest('.trigger-video-modal');
        if (!trigger) return;

        e.preventDefault();
        const fileUrl = trigger.getAttribute('data-video-file');
        
        if (!fileUrl) {
            alert('Video URL is missing or not configured.');
            return;
        }

        source.src = fileUrl;
        player.load();
        
        modal.classList.remove('modal-closed');
        modal.classList.add('modal-open');
        document.body.style.overflow = 'hidden';
        
        const playPromise = player.play();
        if (playPromise !== undefined) {
            playPromise.catch(error => {
                console.log('Autoplay blocked or playback error:', error);
            });
        }
    });

    const closeModal = () => {
        if (!modal) return;
        modal.classList.remove('modal-open');
        modal.classList.add('modal-closed');
        document.body.style.overflow = '';
        
        setTimeout(() => {
            if (player) {
                player.pause();
                player.currentTime = 0;
            }
            if (source) {
                source.src = '';
            }
        }, 300);
    };

    if (closeBtn) closeBtn.addEventListener('click', closeModal);
    if (modal) {
        modal.addEventListener('click', (e) => {
            if (e.target === modal) closeModal();
        });
    }

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && modal && modal.classList.contains('modal-open')) {
            closeModal();
        }
    });
});
</script>

<?php 
get_footer(); 
?>