<?php
/**
 * Template Name: RSOS Corner (News & Stories)
 *
 * Static version — no database queries. Edit the text below directly
 * whenever you want to change the categories or the featured story.
 * Hero image is pulled from the ACF "hero_image" field on this page.
 *
 * @package rabbit_school
 */

get_header();
?>

<style>
.rso-animate {
    opacity: 0;
    transform: translateY(24px);
    transition: opacity 0.7s ease-out, transform 0.7s ease-out;
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
    transition: grid-template-rows 0.5s ease-in-out, opacity 0.4s ease-in-out, transform 0.4s ease-in-out;
}

.rso-hidden-wrapper.rso-hidden-open {
    grid-template-rows: 1fr;
    opacity: 1;
    transform: translateY(0);
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
?>

<!-- Hero -->
<section class="rso-animate bg-brand-brown h-[500px] md:h-[700px] text-text-light py-[64px] md:py-[50px] px-[20px] 2xl:px-0" style="animation-delay: 0s;">
    <div class="max-w-7xl mx-auto grid <?php echo !empty($rso_hero_image) ? 'md:grid-cols-2' : ''; ?> gap-10 items-end justify-start h-full">
        <div class="flex flex-col gap-[10px]">
            <span class="uppercase tracking-widest text-[12px] sm:text-[13px] md:text-[14px] leading-relaxed text-text-light/80">
                <?php echo esc_html( get_field('news') ?: 'News' ); ?>
            </span>
            <h1 class="font-heading text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-black leading-tight uppercase"><?php echo esc_html( $rsos_corner_fallback ); ?></h1>
            <p class="text-[12px] sm:text-[13px] md:text-[14px] lg:text-[16px] leading-relaxed opacity-90">
               <?php echo esc_html( get_field('stories_from_the_ground') ?: 'Stories from the ground.' ); ?>
            </p>

            <div class="flex flex-wrap gap-[20px]">
               <a href="#rso-article-grid"> <button type="button" class="bg-brand-yellow text-text-main text-[10px] sm:text-[12px] md:text-[13px] lg:text-[14px] font-bold uppercase tracking-wide px-[24px] py-[12px] rounded-[8px] hover:bg-brand-yellow/80 transition-all cursor-pointer">
                    <?php echo esc_html( get_field('education_box') ?: 'Education' ); ?>
                </button></a>
                <a href="#rso-article-grid"><button type="button" class="bg-brand-yellow text-text-main text-[10px] sm:text-[12px] md:text-[13px] lg:text-[14px] font-bold uppercase tracking-wide px-[24px] py-[12px] rounded-[8px] hover:bg-brand-yellow/80 transition-all cursor-pointer">
                    <?php echo esc_html( get_field('community_box') ?: 'Community' ); ?>
                </button></a>
                <a href="#rso-article-grid"><button type="button" class="bg-brand-yellow text-text-main text-[10px] sm:text-[12px] md:text-[13px] lg:text-[14px] font-bold uppercase tracking-wide px-[24px] py-[12px] rounded-[8px] hover:bg-brand-yellow/80 transition-all cursor-pointer">
                    <?php echo esc_html( get_field('advocacy_box') ?: 'Advocacy' ); ?>
                </button></a>
                <a href="#rso-article-grid"><button type="button" class="bg-brand-yellow text-text-main text-[10px] sm:text-[12px] md:text-[13px] lg:text-[14px] font-bold uppercase tracking-wide px-[24px] py-[12px] rounded-[8px] hover:bg-brand-yellow/80 transition-all cursor-pointer">
                   <?php echo esc_html( get_field('vocational_training_box') ?: 'Vocational Training' ); ?>
                </button></a>
            </div>
        </div>

        <?php if ( !empty($rso_hero_image) && isset($rso_hero_image['url']) ) : ?>
        <div class="rso-animate" style="animation-delay: 0.15s;">
            <img src="<?php echo esc_url( $rso_hero_image['url'] ); ?>"
                 alt="<?php echo esc_attr( !empty($rso_hero_image['alt']) ? $rso_hero_image['alt'] : $rsos_corner_fallback ); ?>"
                 class="w-full h-auto max-h-[420px] object-cover rounded-3xl shadow-xl">
        </div>
        <?php endif; ?>
    </div>
</section>

<!-- Featured story -->
<section class="rso-animate bg-white py-[64px] md:py-[50px] px-[20px] 2xl:px-0" style="animation-delay: 0.15s;">
    <div class="max-w-7xl mx-auto">

        <div class="flex items-center gap-[20px] mb-[20px]">
            <span class="uppercase text-[12px] sm:text-[13px] md:text-[14px] font-bold tracking-widest text-text-main/80"><?php echo esc_html( get_field('featured_story') ?: 'Featured Story' ); ?></span>
            <span class="flex-1 h-px bg-gray-300"></span>
        </div>

        <div class="bg-brand-cream rounded-[28px] p-[20px] md:p-[30px]">
            <h2 class="text-[16px] sm:text-[18px] font-extrabold text-text-main mb-[10px] uppercase">
                <?php echo esc_html( get_field('from_classroom') ?: 'From Classroom to Employment' ); ?>
            </h2>

            <p class="text-text-main/80 text-[14px] sm:text-[15px] md:text-[16px] leading-relaxed">
                <?php echo esc_html( get_field('at_19_dara_joined_rabbit_schools') ?: 'At 19, Dara joined Rabbit School...' ); ?>
            </p>

            <div id="featured-more-wrapper" class="grid transition-all duration-300 ease-in-out mb-[20px]" style="grid-template-rows: 0fr;">
                <div class="overflow-hidden">
                    <div class="text-text-main/80 leading-relaxed space-y-3 border-t border-brand-brown/80 pt-4">
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
                <a href="#rso-article-grid"><button type="button" class="bg-brand-brown text-text-light text-[10px] sm:text-[12px] md:text-[13px] lg:text-[14px] font-bold uppercase tracking-wide px-[24px] py-[12px] rounded-[8px] hover:bg-brand-brown/90 transition-all cursor-pointer">
                    <?php echo esc_html( get_field('vocational_training_box1') ?: 'Vocational Training' ); ?>
                </button></a>
                <button type="button" onclick="toggleReadMore('featured-more', this)" aria-expanded="false" aria-controls="featured-more-wrapper"
                        class="group bg-brand-brown text-text-light text-[10px] sm:text-[12px] md:text-[13px] lg:text-[14px] font-bold uppercase tracking-wide px-[24px] py-[12px] rounded-[8px] hover:bg-brand-brown/90 transition-all cursor-pointer inline-flex items-center gap-2">
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
<section class="rso-animate bg-white py-[64px] md:py-[50px] px-[20px] 2xl:px-0" style="animation-delay: 0.3s;">
    <div class="max-w-7xl mx-auto">
 
        <div class="flex items-center gap-[20px] mb-[20px]">
            <span class="uppercase text-[12px] sm:text-[13px] md:text-[14px] font-bold tracking-widest text-text-main/80"><?php echo esc_html( get_field('latest_articles') ?: 'Latest Articles' ); ?></span>
            <span class="flex-1 h-px bg-gray-300"></span>
        </div>
 
        <!-- Filter bar (multi-select: pick several categories, each becomes its own chip) -->
        <?php 
            $f_edu = esc_html( get_field('fiilter_education') ?: 'Education' );
            $f_com = esc_html( get_field('filter_community') ?: 'Community' );
            $f_adv = esc_html( get_field('filter_advocacy') ?: 'Advocacy' );
            $f_voc = esc_html( get_field('filter_vocational_training') ?: 'Vocational Training' );
            $f_tea = esc_html( get_field('filter_teacher_training') ?: 'Teacher Training' );
        ?>
        <div class="flex flex-wrap items-center gap-3 mb-[20px]">
            <div class="relative">
                <select id="rso-filter-select" class="appearance-none bg-white border border-brand-brown/80 rounded-[8px] text-[10px] sm:text-[12px] md:text-[13px] lg:text-[14px] font-medium pr-[24px] pl-[12px] py-[12px] cursor-pointer hover:border-brand-brown focus:outline-none focus:border-brand-brown transition-all">
                    <option value=""><?php echo esc_html( get_field('filter') ?: 'Filter by Category' ); ?></option>
                    <option value="<?php echo $f_edu; ?>"><?php echo $f_edu; ?></option>
                    <option value="<?php echo $f_com; ?>"><?php echo $f_com; ?></option>
                    <option value="<?php echo $f_adv; ?>"><?php echo $f_adv; ?></option>
                    <option value="<?php echo $f_voc; ?>"><?php echo $f_voc; ?></option>
                    <option value="<?php echo $f_tea; ?>"><?php echo $f_tea; ?></option>
                </select>
                <svg class="pointer-events-none absolute right-3 top-1/2 -translate-y-1/2 w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </div>

            <div id="rso-filter-chips" class="flex flex-wrap items-center gap-2"></div>
        </div>

        <p id="rso-no-results" class="hidden text-gray-500 text-sm mb-6">No articles match your filter.</p>
 
        <!-- Article cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-[20px] items-start" id="rso-article-grid">
            <?php 
                $contents = [
                    [
                        'subtitle' => get_field('card_1_subtitle') ?: 'June 2026 • Education',
                        'title'    => get_field('card_1_title') ?: 'Opening New Classrooms',
                        'desc'     => get_field('card_1_description') ?: 'Providing resources for more children...',
                        'detail1'  => get_field('card_1_detail_1') ?: 'The expansion details...',
                        'detail2'  => get_field('card_1_detail_2') ?: 'Local families feedback...',
                    ],
                    [
                        'subtitle' => get_field('card_2_subtitle') ?: 'July 2026 • Community',
                        'title'    => get_field('card_2_title') ?: 'Community Health Drive',
                        'desc'     => get_field('card_2_description') ?: 'Supporting local families with health resources...',
                        'detail1'  => get_field('card_2_detail_1') ?: 'The initiative details...',
                        'detail2'  => get_field('card_2_detail_2') ?: 'Community impact and details...',
                    ],
                    [
                        'subtitle' => get_field('card_3_subtitle') ?: 'August 2026 • Youth',
                        'title'    => get_field('card_3_title') ?: 'Youth Sports Initiative',
                        'desc'     => get_field('card_3_description') ?: 'Empowering local youth through sports programs...',
                        'detail1'  => get_field('card_3_detail_1') ?: 'Program expansion details...',
                        'detail2'  => get_field('card_3_detail_2') ?: 'Participant testimonials...',
                    ],
                ];
            ?>

<?php foreach ($contents as $index => $item): 
    $card_num = $index + 1;
?>
    <article class="rso-grid-item bg-brand-cream rounded-[28px] p-[20px] flex flex-col gap-[10px]" data-category="<?php echo esc_attr( $f_edu ); ?>">
        <p class="text-[12px] sm:text-[13px] md:text-[14px] font-bold uppercase tracking-wide text-text-main/80 mb-[10px]">
            <?php echo esc_html($item['subtitle']); ?>
        </p>
        <h3 class="text-[16px] sm:text-[18px] font-extrabold text-text-main uppercase leading-snug">
            <?php echo esc_html($item['title']); ?>
        </h3>
        <p class="text-text-main/80 text-[12px] sm:text-[13px] md:text-[14px] leading-relaxed flex-1">
            <?php echo esc_html($item['desc']); ?>
        </p>

        <div class="grid transition-all duration-300 ease-in-out" style="grid-template-rows: 0fr;" id="more-<?php echo $card_num; ?>-wrapper">
            <div class="overflow-hidden">
                <div class="text-text-main/80 text-[12px] sm:text-[13px] md:text-[14px] leading-relaxed space-y-3 border-t border-gray-300 pt-3 mt-2">
                    <p>
                        <?php echo esc_html( $item['detail1'] ); ?>
                    </p>
                    <p>
                        <?php echo esc_html( $item['detail2'] ); ?> 
                    </p>
                </div>
            </div>
        </div>

        <button type="button" onclick="toggleReadMore('more-<?php echo $card_num; ?>', this)" aria-expanded="false" aria-controls="more-<?php echo $card_num; ?>-wrapper"
                class="group inline-flex items-center gap-2 bg-brand-yellow text-text-main text-[10px] sm:text-[12px] md:text-[13px] lg:text-[14px] font-bold uppercase tracking-wide px-[24px] py-[12px] rounded-[8px] hover:bg-brand-yellow/90 active:scale-95 transition w-fit cursor-pointer focus:outline-none focus-visible:ring-2 focus-visible:ring-brand-brown focus-visible:ring-offset-2">
            <span class="read-more-label"><?php echo esc_html( get_field('read_more') ?: 'Read More' ); ?></span>
            <svg class="read-more-icon w-3.5 h-3.5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
        </button>
    </article>
<?php endforeach; ?>

    </div>
</section>

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

// Multi-select category filter + article visibility logic
(function () {
    var select = document.getElementById('rso-filter-select');
    var chipsContainer = document.getElementById('rso-filter-chips');
    var noResults = document.getElementById('rso-no-results');
    var items = document.querySelectorAll('#rso-article-grid > .rso-grid-item');
    var showMoreWrapper = document.getElementById('rso-show-more-wrapper');
    var showMoreBtn = document.getElementById('rso-show-more-btn');
    var showMoreLabel = document.getElementById('rso-show-more-label');
    var showMoreIcon = document.getElementById('rso-show-more-icon');

    var selectedCategories = [];
    var manualShowAll = false;

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
            var isDefaultHidden = item.getAttribute('data-default-hidden') === 'true';
            var isWrapped = item.classList.contains('rso-hidden-wrapper');
            var matchesCategory = !isActiveFilter || selectedCategories.indexOf(item.getAttribute('data-category')) !== -1;

            var shouldShow = matchesCategory && (isActiveFilter || manualShowAll || !isDefaultHidden);

            if (isWrapped) {
                item.classList.toggle('rso-hidden-open', shouldShow);
                item.style.pointerEvents = shouldShow ? '' : 'none';
                item.style.display = matchesCategory ? '' : 'none';
            } else {
                item.style.display = shouldShow ? '' : 'none';
            }

            if (shouldShow) {
                visibleCount++;
            }
        });

        noResults.classList.toggle('hidden', visibleCount !== 0);

        if (showMoreWrapper) {
            showMoreWrapper.style.display = isActiveFilter ? 'none' : 'flex';
        }
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

    if (showMoreBtn) {
        showMoreBtn.addEventListener('click', function () {
            manualShowAll = !manualShowAll;

            if (showMoreLabel) {
                showMoreLabel.textContent = manualShowAll ? '<?php echo esc_html( get_field('show_less') ?: 'Show Less' ); ?>' : '<?php echo esc_html( get_field('show_more_articles') ?: 'Show More Articles' ); ?>';
            }
            if (showMoreIcon) {
                showMoreIcon.style.transform = manualShowAll ? 'rotate(180deg)' : 'rotate(0deg)';
            }
            showMoreBtn.setAttribute('aria-expanded', manualShowAll ? 'true' : 'false');

            applyFilters();
        });
    }

    applyFilters();
})();
</script>

<!-- Newsletter subscribe -->
<section class="rso-animate bg-white py-[64px] md:py-[50px] px-[20px] 2xl:px-0" style="animation-delay: 0.45s;">
    <div class="max-w-7xl mx-auto">
        <div class="bg-brand-brown rounded-[28px] p-[50px] flex flex-col md:flex-row md:items-center md:justify-between gap-[50px]">
            <div>
                <h2 class="text-text-light font-heading text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-extrabold uppercase mb-2">
                    <?php echo esc_html( get_field('stay_connected_with_rso') ?: 'Stay Connected' ); ?>
                </h2>
                <p class="text-text-light/80 text-[12px] sm:text-[13px] md:text-[14px] lg:text-[16px]">
                   <?php echo esc_html( get_field('get_the_latest_stories_and_updates_from_rabbit_school_delivered_to_your_inbox') ?: 'Subscribe to get the latest updates.' ); ?>
                </p>
            </div>

            <form class="flex flex-col sm:flex-row items-stretch gap-[10px] w-full md:w-auto">
                <input type="email" required placeholder="<?php echo esc_attr( get_field('ex') ?: 'your.email@example.com' ); ?>"
                       class="bg-brand-cream text-text-muted placeholder-text-muted text-sm rounded-[8px] px-[24px] py-[12px] w-full sm:w-72 focus:outline-none focus:ring-2 focus:ring-white/40">
                <button type="submit"
                        class="bg-brand-yellow text-text-main text-sm uppercase font-bold rounded-[8px] px-[24px] py-[12px] hover:bg-brand-yellow/90 active:scale-95 transition cursor-pointer whitespace-nowrap">
                    <?php echo esc_html( get_field('subscribe') ?: 'Subscribe' ); ?>
                </button>
            </form>
        </div>
    </div>
</section>

<?php get_footer(); ?>