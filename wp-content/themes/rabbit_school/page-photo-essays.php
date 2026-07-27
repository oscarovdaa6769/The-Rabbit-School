<?php 
/*
 * Template Name: Photo Essays      
*/
get_header(); 

// 1. HERO & FILTER DATA (ACF Fallbacks for Page Level Settings)
$hero_img   = get_field('hero_image')       ?: get_theme_file_uri('assets/images/error.png');
$hero_title = get_field('hero_title')       ?: 'Photo Essays Stories of Impact';
$hero_desc  = get_field('hero_description') ?: 'Explore the lives, achievements, and everyday joys of children and young adults with intellectual disabilities in Cambodia through powerful visual stories';

$filters = [
    ['text' => get_field('filter_all_text') ?: 'All Photos', 'link' => '#all', 'active' => true],
    ['text' => get_field('filter_education_text') ?: 'Education', 'link' => '#education', 'active' => false],
    ['text' => get_field('filter_community_text') ?: 'Community', 'link' => '#community', 'active' => false],
    ['text' => get_field('filter_advocacy_text') ?: 'Advocacy', 'link' => '#advocacy', 'active' => false],
    ['text' => get_field('filter_teacher_training_text') ?: 'Teacher Training', 'link' => '#teacher-training', 'active' => false],
];
?>

<!-- SECTION 1: HERO BANNER -->
<section class="relative overflow-hidden">
    <img src="<?php echo esc_url($hero_img); ?>" alt="<?php echo esc_attr($hero_title); ?>" class="h-[500px] md:h-[700px] w-full object-cover">
    
    <div class="absolute inset-0 z-10 bg-black/30 flex items-end pb-6 md:pb-20">
        <div class="w-full max-w-7xl mx-auto px-[20px] 2xl:px-0">
            <div class="max-w-2xl text-text-light">
                <h1 class="font-heading text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-black leading-tight mb-2 md:mb-4 uppercase">
                    <?php echo esc_html($hero_title); ?>
                </h1>
                <p class="text-[14px] sm:text-[15px] md:text-[16px] lg:text-[18px] leading-relaxed opacity-90">
                    <?php echo esc_html($hero_desc); ?>
                </p>
            </div>
        </div>
    </div>
</section> 

<!-- SECTION 2: FILTERS & SEARCH -->
<section class="max-w-7xl mx-auto py-[64px] md:py-[50px] px-[20px] 2xl:px-0 w-full font-sans">
    <div class="flex flex-col md:flex-row gap-6 lg:gap-8 justify-between items-stretch md:items-center w-full">
        
        <!-- Filters -->
        <div class="grid grid-cols-2 xs:grid-cols-3 sm:flex sm:flex-wrap items-center gap-[10px] w-full">
            <?php foreach ($filters as $item): ?>
                <?php 
                $bg_styles = $item['active'] 
                    ? 'bg-brand-yellow text-brand-brown font-black shadow-md' 
                    : 'bg-brand-cream border border-brand-brown/20 hover:bg-brand-yellow text-brand-brown font-bold';
                ?>
                <a href="<?php echo esc_url($item['link']); ?>" 
                   class="w-full sm:w-auto text-center inline-flex items-center justify-center px-[24px] py-[12px] text-sm rounded-[8px] transition-all duration-300 shadow-md hover:shadow-xl uppercase <?php echo esc_attr($bg_styles); ?>">
                    <?php echo esc_html($item['text']); ?>
                </a>
            <?php endforeach; ?>
        </div>

        <!-- Search Input -->
        <div class="relative w-full md:max-w-xs lg:max-w-md">
            <input 
                id="program-search-input"
                type="text" 
                placeholder="<?php echo esc_attr(get_field('placeholder_text') ?: 'Search program...'); ?>" 
                class="w-full border border-brand-brown/40 text-brand-brown placeholder-brand-brown/50 px-[24px] py-[12px] rounded-[16px] bg-transparent focus:outline-none focus:border-brand-brown focus:ring-1 focus:ring-brand-brown transition-all duration-200 text-sm shadow-md hover:shadow-xl hover:border-brand-brown/70"
            />
            <div class="absolute right-4 sm:right-6 top-1/2 -translate-y-1/2 pointer-events-none flex items-center">
                <span class="icon-[solar--magnifer-linear] w-5 h-5 text-brand-brown/60"></span>
            </div>
        </div>

    </div>
</section>

<!-- SECTION 3: ALL POSTS -->
<section class="max-w-7xl mx-auto py-[64px] md:py-[50px] px-[20px] 2xl:px-0 font-sans">
    <?php 
    $args = [
        'post_type'      => 'photo_essay',
        'posts_per_page' => -1, // Fetch all posts for client pagination
        'post_status'    => 'publish',
    ];
    $photo_essays_query = new WP_Query($args);
    ?>

    <?php if ($photo_essays_query->have_posts()) : ?>
        <div id="photo-essay-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-[20px] lg:gap-[50px] max-w-7xl mx-auto">
            <?php while ($photo_essays_query->have_posts()) : $photo_essays_query->the_post(); ?>
                <?php 
                $card_img       = get_the_post_thumbnail_url(get_the_ID(), 'large') 
                    ?: (get_field('card_image') ?: get_theme_file_uri('assets/images/error.png'));
                $card_subtitle  = get_field('essay_subtitle_date') ?: get_the_date('d F, Y');
                $card_subtitle2 = get_field('essay_subtitle_type') ?: 'Education';
                $card_desc      = get_field('essay_description') ?: get_the_excerpt();
                $btn_text       = get_field('button_text') ?: 'Read More';
                ?>
                <!-- Individual Post Card -->
                <div class="essay-card bg-brand-cream rounded-[16px] overflow-hidden flex flex-col shadow-md hover:shadow-xl transition-all duration-300 group">
                    <div class="w-full aspect-[4/3] overflow-hidden">
                        <img src="<?php echo esc_url($card_img); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    </div>
                    <div class="p-6 flex flex-col gap-[10px] md:gap-[16px] flex-grow">
                        <span class="text-[14px] sm:text-[15px] md:text-[16px] text-text-muted uppercase font-bold tracking-wider">
                            <?php echo esc_html($card_subtitle); ?> · <?php echo esc_html($card_subtitle2); ?>
                        </span>
                        <h3 class="card-title text-[16px] sm:text-[18px] md:text-[20px] font-bold text-brand-orange font-heading leading-tight uppercase">
                            <?php the_title(); ?>
                        </h3>
                        <p class="card-desc text-text-muted text-[14px] sm:text-[15px] md:text-[16px] leading-relaxed">
                            <?php echo esc_html($card_desc); ?>
                        </p>
                        <a href="<?php the_permalink(); ?>" class="bg-brand-yellow hover:bg-brand-orange text-brand-brown hover:text-text-light tracking-wider px-[24px] py-[12px] rounded-[8px] inline-flex items-center self-start gap-[10px] group/btn shadow-md hover:shadow-xl transition-all duration-300 font-bold text-sm uppercase mt-auto">
                            <span><?php echo esc_html($btn_text); ?></span>
                            <span class="icon-[solar--arrow-right-linear] w-5 h-5 transition-transform duration-300 group-hover/btn:translate-x-1"></span>
                        </a>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
        <div id="no-results" class="hidden text-center py-12 text-brand-brown font-bold text-[16px] sm:text-[18px] md:text-[20px]">
            No matching programs found.
        </div>
    <?php else : ?>
        <p class="text-center py-12 text-brand-brown text-[16px] sm:text-[18px] md:text-[20px]">No posts found.</p>
    <?php endif; wp_reset_postdata(); ?>
</section>

<!-- SECTION 4: PAGINATION CONTROLS -->
<section id="pagination-wrapper" class="max-w-7xl mx-auto py-[64px] md:py-[50px] px-[20px] 2xl:px-0 font-sans">
    <div class="flex items-center justify-center gap-[20px]">
        <button id="prev-btn" aria-label="Previous Page" class="border border-brand-brown text-brand-brown flex items-center justify-center rounded-full p-[14px] group hover:bg-brand-brown hover:text-text-light transition-all duration-300 shadow-md hover:shadow-xl disabled:opacity-30 disabled:cursor-not-allowed">
            <span class="icon-[solar--arrow-left-linear] w-5 h-5 transition-transform duration-300 group-hover:-translate-x-1"></span>
        </button>

        <span id="page-indicator" class="font-bold text-brand-brown text-sm tracking-wider"></span>

        <button id="next-btn" aria-label="Next Page" class="border border-brand-brown text-brand-brown flex items-center justify-center rounded-full p-[14px] group hover:bg-brand-brown hover:text-text-light transition-all duration-300 shadow-md hover:shadow-xl disabled:opacity-30 disabled:cursor-not-allowed">
            <span class="icon-[solar--arrow-right-linear] w-5 h-5 transition-transform duration-300 group-hover:translate-x-1"></span>
        </button>
    </div>
</section>

<!-- PAGINATION & SEARCH SCRIPT -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    const itemsPerPage = 6;
    let currentPage = 1;

    const cards = Array.from(document.querySelectorAll('.essay-card'));
    const searchInput = document.getElementById('program-search-input');
    const prevBtn = document.getElementById('prev-btn');
    const nextBtn = document.getElementById('next-btn');
    const pageIndicator = document.getElementById('page-indicator');
    const noResults = document.getElementById('no-results');

    let visibleCards = [...cards];

    function renderPage() {
        const totalPages = Math.ceil(visibleCards.length / itemsPerPage) || 1;
        if (currentPage > totalPages) currentPage = totalPages;

        cards.forEach(card => card.style.display = 'none');

        if (visibleCards.length === 0) {
            if (noResults) noResults.classList.remove('hidden');
            if (pageIndicator) pageIndicator.textContent = '';
            prevBtn.disabled = true;
            nextBtn.disabled = true;
            return;
        }

        if (noResults) noResults.classList.add('hidden');

        const start = (currentPage - 1) * itemsPerPage;
        const end = start + itemsPerPage;
        visibleCards.slice(start, end).forEach(card => card.style.display = 'flex');

        if (pageIndicator) pageIndicator.textContent = `Page ${currentPage} of ${totalPages}`;
        if (prevBtn) prevBtn.disabled = currentPage === 1;
        if (nextBtn) nextBtn.disabled = currentPage === totalPages;
    }

    function filterCards() {
        const query = searchInput ? searchInput.value.toLowerCase().trim() : '';
        visibleCards = cards.filter(card => {
            const title = card.querySelector('.card-title')?.textContent.toLowerCase() || '';
            const desc = card.querySelector('.card-desc')?.textContent.toLowerCase() || '';
            return title.includes(query) || desc.includes(query);
        });
        currentPage = 1;
        renderPage();
    }

    if (searchInput) {
        searchInput.addEventListener('input', filterCards);
    }

    if (prevBtn) {
        prevBtn.addEventListener('click', () => {
            if (currentPage > 1) {
                currentPage--;
                renderPage();
            }
        });
    }

    if (nextBtn) {
        nextBtn.addEventListener('click', () => {
            const totalPages = Math.ceil(visibleCards.length / itemsPerPage);
            if (currentPage < totalPages) {
                currentPage++;
                renderPage();
            }
        });
    }

    renderPage();
});
</script>
<?php 
wp_reset_postdata(); 
get_footer(); 
?>