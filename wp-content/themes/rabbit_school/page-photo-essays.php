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
    
    <div class="absolute inset-0 z-10 bg-black/20 flex items-end pb-6 md:pb-20">
        <div class="w-full max-w-7xl mx-auto px-[20px] 2xl:px-0">
            <div class="max-w-2xl text-text-light">
                <h1 class="font-heading text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-black leading-tight mb-2 md:mb-4 uppercase">
                    <?php echo esc_html($hero_title); ?>
                </h1>
                <p class="text-[12px] sm:text-[13px] md:text-[14px] lg:text-[16px] leading-relaxed opacity-90">
                    <?php echo esc_html($hero_desc); ?>
                </p>
            </div>
        </div>
    </div>
</section> 

<!-- SECTION 2: FILTERS & SEARCH -->
<section class="max-w-7xl mx-auto py-10 md:py-[50px] px-[20px] 2xl:px-0 w-full font-sans">
    <div class="flex flex-col md:flex-row gap-6 lg:gap-8 justify-between items-stretch md:items-center w-full">
        
        <!-- Filters -->
        <div class="grid grid-cols-2 xs:grid-cols-3 sm:flex sm:flex-wrap items-center gap-2.5 sm:gap-3 md:gap-[15px] lg:gap-[20px] w-full md:w-auto">
            <?php foreach ($filters as $item): ?>
                <?php 
                $bg_styles = $item['active'] 
                    ? 'bg-brand-yellow hover:bg-brand-orange text-text-main font-black' 
                    : 'bg-brand-cream border border-brand-brown/20 hover:bg-brand-yellow text-text-main font-semibold';
                ?>
                <a href="<?php echo esc_url($item['link']); ?>" 
                   class="w-full sm:w-auto text-center inline-flex items-center justify-center py-2.5 px-3.5 sm:py-[12px] sm:px-[20px] lg:px-[24px] text-xs sm:text-sm md:text-base rounded-[8px] transition-all duration-200 shadow-sm hover:shadow-md <?php echo esc_attr($bg_styles); ?>">
                    <?php echo esc_html($item['text']); ?>
                </a>
            <?php endforeach; ?>
        </div>

        <!-- Search Input -->
        <div class="relative w-full md:max-w-xs lg:max-w-md">
            <input 
                type="text" 
                placeholder="<?php echo esc_attr(get_field('placeholder_text') ?: 'Search program...'); ?>" 
                class="w-full border border-brand-brown/40 text-brand-brown placeholder-brand-brown/50 px-5 py-3 pr-12 rounded-full bg-transparent focus:outline-none focus:border-brand-brown focus:ring-1 focus:ring-brand-brown transition-all duration-200 text-sm sm:text-base shadow-sm hover:border-brand-brown/70"
            />
            <div class="absolute right-4 sm:right-6 top-1/2 -translate-y-1/2 pointer-events-none flex items-center">
                <span class="icon-[solar--magnifer-linear] w-5 h-5 text-brand-brown/60"></span>
            </div>
        </div>

    </div>
</section>

<!-- SECTION 3: ALL POSTS -->
<section class="max-w-7xl mx-auto px-[20px] 2xl:px-0 font-sans">
    <?php 
    $args = [
        'post_type'      => 'photo_essay',
        'posts_per_page' => -1, // Fetch all posts at once
        'post_status'    => 'publish',
    ];
    $photo_essays_query = new WP_Query($args);
    ?>

    <?php if ($photo_essays_query->have_posts()) : ?>
        <div id="photo-essay-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-[20px] lg:gap-[50px] max-w-7xl mx-auto">
            <?php while ($photo_essays_query->have_posts()) : $photo_essays_query->the_post(); ?>
                <?php 
                $card_img      = get_the_post_thumbnail_url(get_the_ID(), 'large') 
                    ?: (get_field('card_image') ?: get_theme_file_uri('assets/images/error.png'));
                $card_subtitle = get_field('essay_subtitle_date') ?: get_the_date('d F, Y');
                $card_subtitle2 = get_field('essay_subtitle_type') ?: 'Education';
                $card_desc     = get_field('essay_description') ?: get_the_excerpt();
                $btn_text      = get_field('button_text') ?: 'Read More';
                ?>
                <!-- Individual Post Card -->
                <div class="essay-card bg-brand-cream rounded-[24px] overflow-hidden flex flex-col shadow-md hover:shadow-xl transition-shadow duration-300">
                    <div class="w-full aspect-[4/3] overflow-hidden">
                        <img src="<?php echo esc_url($card_img); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6 flex flex-col gap-[10px] md:gap-[20px] flex-grow">
                        <span class="text-[14px] sm:text-[15px] md:text-[16px] text-text-muted uppercase">
                            <?php echo esc_html($card_subtitle); ?> · <?php echo esc_html($card_subtitle2); ?>
                        </span>
                        <h3 class="text-[16px] sm:text-[18px] md:text-[20px] font-bold text-brand-orange font-heading leading-tight uppercase">
                            <?php the_title(); ?>
                        </h3>
                        <p class="text-text-muted text-[14px] sm:text-[15px] md:text-[16px] leading-relaxed">
                            <?php echo esc_html($card_desc); ?>
                        </p>
                        <a href="<?php the_permalink(); ?>" class="bg-brand-yellow hover:bg-brand-orange text-brand-brown tracking-wider px-[24px] py-[12px] rounded-[8px] inline-flex items-center self-start gap-[10px] group shadow-md hover:shadow-xl transition-all font-bold text-sm uppercase mt-auto">
                            <span><?php echo esc_html($btn_text); ?></span>
                            <span class="icon-[solar--arrow-right-linear] w-5 h-5 transition-transform duration-300 group-hover:translate-x-1"></span>
                        </a>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    <?php endif; wp_reset_postdata(); ?>
</section>

<!-- SECTION 4: PAGINATION CONTROLS -->
<section id="pagination-wrapper" class="max-w-7xl mx-auto py-[64px] md:py-[50px] px-[20px] 2xl:px-0 font-sans">
    <div class="flex items-center gap-[20px]">
        <button id="prev-btn" class="border border-brand-brown flex items-center justify-center rounded-full p-[16px] group hover:bg-brand-brown hover:text-text-light transition-all shadow-md hover:shadow-xl disabled:opacity-30 disabled:cursor-not-allowed">
            <span class="icon-[solar--arrow-left-linear] w-5 h-5 transition-transform duration-300 group-hover:-translate-x-1"></span>
        </button>

        <span id="page-indicator" class="font-bold text-brand-brown text-sm sm:text-base"></span>

        <button id="next-btn" class="border border-brand-brown flex items-center justify-center rounded-full p-[16px] group hover:bg-brand-brown hover:text-text-light transition-all shadow-md hover:shadow-xl disabled:opacity-30 disabled:cursor-not-allowed">
            <span class="icon-[solar--arrow-right-linear] w-5 h-5 transition-transform duration-300 group-hover:translate-x-1"></span>
        </button>
    </div>
</section>

<!-- SIMPLE JS PAGINATION (No Server Requests) -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const cards = Array.from(document.querySelectorAll('.essay-card'));
    const itemsPerPage = 6;
    let currentPage = 1;
    const totalPages = Math.ceil(cards.length / itemsPerPage);

    const prevBtn = document.getElementById('prev-btn');
    const nextBtn = document.getElementById('next-btn');
    const indicator = document.getElementById('page-indicator');
    const paginationWrapper = document.getElementById('pagination-wrapper');

    if (cards.length === 0) {
        if (paginationWrapper) paginationWrapper.style.display = 'none';
        return;
    }

    function renderPage(page) {
        cards.forEach((card, index) => {
            const start = (page - 1) * itemsPerPage;
            const end = start + itemsPerPage;
            if (index >= start && index < end) {
                card.style.display = 'flex';
            } else {
                card.style.display = 'none';
            }
        });

        indicator.textContent = `${page} of ${totalPages}`;
        prevBtn.disabled = (page === 1);
        nextBtn.disabled = (page === totalPages);
    }

    prevBtn.addEventListener('click', () => {
        if (currentPage > 1) {
            currentPage--;
            renderPage(currentPage);
        }
    });

    nextBtn.addEventListener('click', () => {
        if (currentPage < totalPages) {
            currentPage++;
            renderPage(currentPage);
        }
    });

    renderPage(1);
});
</script>
<?php 
wp_reset_postdata(); 
get_footer(); 
?>