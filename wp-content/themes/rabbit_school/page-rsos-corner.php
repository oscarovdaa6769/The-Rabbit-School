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

<?php $rso_hero_image = get_field('hero_image'); ?>

<!-- Hero -->
<section class="rso-animate bg-[#4A2E2A] text-white px-6 md:px-12 pt-50 pb-[30px]" style="animation-delay: 0s;">
    <div class="max-w-6xl mx-auto grid <?php echo $rso_hero_image ? 'md:grid-cols-2' : ''; ?> gap-10 items-center">
        <div>
            <p class="uppercase tracking-widest text-sm text-white/80 mb-3"><?php echo esc_html( get_field('news') ); ?></p>
            <h1 class="text-4xl md:text-5xl font-extrabold uppercase mb-4"><?php echo esc_html( get_field('rsos_corner') ); ?></h1>
            <p class="text-white/85 max-w-2xl mb-8 leading-relaxed">
               <?php echo esc_html( get_field('stories_from_the_ground') ); ?>
            </p>

            <div class="flex flex-wrap gap-3">
               <a href="#rso-article-grid"> <button type="button" class="bg-[#D9A441] text-[#4A2E2A] text-xs font-bold uppercase tracking-wide px-4 py-3 rounded-[10px] hover:bg-[#c9953a] transition cursor-pointer">
                    <?php echo esc_html( get_field('education_box') ); ?>
                </button></a>
                <a href="#rso-article-grid"><button type="button" class="bg-[#D9A441] text-[#4A2E2A] text-xs font-bold uppercase tracking-wide px-4 py-3 rounded-[10px] hover:bg-[#c9953a] transition cursor-pointer">
                    <?php echo esc_html( get_field('community_box') ); ?>
                </button></a>
                <a href="#rso-article-grid"><button type="button" class="bg-[#D9A441] text-[#4A2E2A] text-xs font-bold uppercase tracking-wide px-4 py-3 rounded-[10px] hover:bg-[#c9953a] transition cursor-pointer">
                    <?php echo esc_html( get_field('advocacy_box') ); ?>
                </button></a>
                <a href="#rso-article-grid"><button type="button" class="bg-[#D9A441] text-[#4A2E2A] text-xs font-bold uppercase tracking-wide px-4 py-3 rounded-[10px] hover:bg-[#c9953a] transition cursor-pointer">
                   <?php echo esc_html( get_field('vocational_training_box') ); ?>
                </button></a>
            </div>
        </div>

        <?php if ( $rso_hero_image ) : ?>
        <div class="rso-animate" style="animation-delay: 0.15s;">
            <img src="<?php echo esc_url( $rso_hero_image['url'] ); ?>"
                 alt="<?php echo esc_attr( $rso_hero_image['alt'] ? $rso_hero_image['alt'] : get_field('rsos_corner') ); ?>"
                 class="w-full h-auto max-h-[420px] object-cover rounded-3xl shadow-xl">
        </div>
        <?php endif; ?>
    </div>
</section>

<!-- Featured story -->
<section class="rso-animate bg-white px-6 md:px-12 py-14" style="animation-delay: 0.15s;">
    <div class="max-w-6xl mx-auto">

        <div class="flex items-center gap-4 mb-6">
            <span class="uppercase text-xs font-bold tracking-widest text-[#4A2E2A]"><?php echo esc_html( get_field('featured_story') ); ?></span>
            <span class="flex-1 h-px bg-gray-300"></span>
        </div>

        <div class="bg-[#F5F3EF] rounded-3xl p-8 md:p-10">
            <h2 class="text-xl md:text-2xl font-extrabold text-[#4A2E2A] mb-3 uppercase">
                <?php echo esc_html( get_field('from_classroom') ); ?>
            </h2>

            <p class="text-gray-700 leading-relaxed mb-6 max-w-3xl">
                <?php echo esc_html( get_field('at_19_dara_joined_rabbit_schools') ); ?>
            </p>

            <div id="featured-more-wrapper" class="grid transition-all duration-300 ease-in-out mb-4" style="grid-template-rows: 0fr;">
                <div class="overflow-hidden">
                    <div class="text-gray-700 leading-relaxed space-y-3 border-t border-gray-300 pt-4 max-w-3xl">
                        <p>
                           <?php echo esc_html( get_field('dara_struggled_to_find') ); ?>
                        </p>
                        <p>
                            <?php echo esc_html( get_field('today_dara_works') ); ?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap gap-3">
                <a href="#rso-article-grid"><button type="button" class="bg-[#4A2E2A] text-white text-xs font-bold uppercase tracking-wide px-4 py-3 rounded-[10px] hover:bg-[#3a2521] transition cursor-pointer">
                    <?php echo esc_html( get_field('vocational_training_box1') ); ?>
                </button></a>
                <button type="button" onclick="toggleReadMore('featured-more', this)" aria-expanded="false" aria-controls="featured-more-wrapper"
                        class="group bg-[#4A2E2A] text-white text-xs font-bold uppercase tracking-wide px-4 py-3 rounded-[10px] hover:bg-[#3a2521] transition cursor-pointer inline-flex items-center gap-2">
                    <span class="read-more-label"><?php echo esc_html( get_field('success_story_box') ); ?></span>
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
            <span class="uppercase text-xs font-bold tracking-widest text-[#4A2E2A] whitespace-nowrap"><?php echo esc_html( get_field('latest_articles') ); ?></span>
            <span class="flex-1 h-px bg-gray-300"></span>
        </div>
 
        <!-- Filter bar (multi-select: pick several categories, each becomes its own chip) -->
        <div class="flex flex-wrap items-center gap-3 mb-10">
            <div class="relative">
                <select id="rso-filter-select" class="appearance-none bg-white border border-gray-300 rounded-[10px] text-ls text-gray-700 font-medium pl-4 pr-10 py-3 cursor-pointer hover:border-[#4A2E2A] focus:outline-none focus:border-[#4A2E2A] transition">
                    <option value=""><?php echo esc_html( get_field('filter') ); ?></option>
                    <option value="<?php echo esc_html( get_field('fiilter_education') ); ?>"><?php echo esc_html( get_field('fiilter_education') ); ?></option>
                    <option value="<?php echo esc_html( get_field('filter_community') ); ?>"><?php echo esc_html( get_field('filter_community') ); ?></option>
                    <option value="<?php echo esc_html( get_field('filter_advocacy') ); ?>"><?php echo esc_html( get_field('filter_advocacy') ); ?></option>
                    <option value="<?php echo esc_html( get_field('filter_vocational_training') ); ?>"><?php echo esc_html( get_field('filter_vocational_training') ); ?></option>
                    <option value="<?php echo esc_html( get_field('filter_teacher_training') ); ?>"><?php echo esc_html( get_field('filter_teacher_training') ); ?></option>
                </select>
                <svg class="pointer-events-none absolute right-3 top-1/2 -translate-y-1/2 w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </div>

            <div id="rso-filter-chips" class="flex flex-wrap items-center gap-2"></div>
        </div>

        <p id="rso-no-results" class="hidden text-gray-500 text-sm mb-6">No articles match your filter.</p>
 
        <!-- Article cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-start" id="rso-article-grid">
 
            <article class="rso-grid-item bg-[#F5F3EF] rounded-3xl p-6 flex flex-col" data-category="<?php echo esc_attr( get_field('fiilter_education') ); ?>">
                <p class="text-xs font-bold uppercase tracking-wide text-[#4A2E2A]/70 mb-3">
                    <?php echo esc_html( get_field('june_2026_•_education') ); ?>
                </p>
                <h3 class="text-lg font-extrabold text-[#4A2E2A] uppercase leading-snug mb-3">
                     <?php echo esc_html( get_field('opening_7_new_classrooms_in_toul_kork_primary_school') ); ?>
                </h3>
                <p class="text-gray-600 text-ls leading-relaxed mb-4 flex-1">
                    <?php echo esc_html( get_field('more_children') ); ?>
                </p>

                <div class="grid transition-all duration-300 ease-in-out" style="grid-template-rows: 0fr;" id="more-1-wrapper">
                    <div class="overflow-hidden">
                        <div class="text-gray-600 text-ls leading-relaxed space-y-3 border-t border-gray-300 pt-4 mb-4">
                            <p>
                                <?php echo esc_html( get_field('the_expansion') ); ?>
                            </p>
                            <p>
                                 <?php echo esc_html( get_field('families_in_the') ); ?> 
                            </p>
                        </div>
                    </div>
                </div>

                <button type="button" onclick="toggleReadMore('more-1', this)" aria-expanded="false" aria-controls="more-1-wrapper"
                        class="group inline-flex items-center gap-2 bg-[#D9A441] text-[#4A2E2A] text-sm font-bold uppercase tracking-wide px-5 py-2.5 rounded-[10px] hover:bg-[#c9953a] active:scale-95 transition w-fit cursor-pointer focus:outline-none focus-visible:ring-2 focus-visible:ring-[#4A2E2A] focus-visible:ring-offset-2">
                    <span class="read-more-label"><?php echo esc_html( get_field('read_more') ); ?></span>
                    <svg class="read-more-icon w-3.5 h-3.5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
            </article>
 
            <article class="rso-grid-item bg-[#F5F3EF] rounded-3xl p-6 flex flex-col" data-category="<?php echo esc_attr( get_field('filter_community') ); ?>">
                <p class="text-xs font-bold uppercase tracking-wide text-[#4A2E2A]/70 mb-3">
                    <?php echo esc_html( get_field('may_2026_•_community') ); ?>
                </p>
                <h3 class="text-lg font-extrabold text-[#4A2E2A] uppercase leading-snug mb-3">
                   <?php echo esc_html( get_field('parents_as_advocates:_how_families_are_shaping_policy') ); ?>
                </h3>
                <p class="text-gray-600 text-ls leading-relaxed mb-4 flex-1">
                   <?php echo esc_html( get_field('the_rabbit_school_parents_association_is_becoming_a_powerful_voice_for_disability_rights_in_cambodia') ); ?>
                </p>

                <div class="grid transition-all duration-300 ease-in-out" style="grid-template-rows: 0fr;" id="more-2-wrapper">
                    <div class="overflow-hidden">
                        <div class="text-gray-600 text-ls leading-relaxed space-y-3 border-t border-gray-300 pt-4 mb-4">
                            <p>
                               <?php echo esc_html( get_field('members_meet') ); ?>
                            </p>
                            <p>
                                <?php echo esc_html( get_field('several_members') ); ?>
                            </p>
                        </div>
                    </div>
                </div>

                <button type="button" onclick="toggleReadMore('more-2', this)" aria-expanded="false" aria-controls="more-2-wrapper"
                        class="group inline-flex items-center gap-2 bg-[#D9A441] text-[#4A2E2A] text-sm font-bold uppercase tracking-wide px-5 py-2.5 rounded-[10px] hover:bg-[#c9953a] active:scale-95 transition w-fit cursor-pointer focus:outline-none focus-visible:ring-2 focus-visible:ring-[#4A2E2A] focus-visible:ring-offset-2">
                    <span class="read-more-label"><?php echo esc_html( get_field('read_more') ); ?></span>
                    <svg class="read-more-icon w-3.5 h-3.5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
            </article>
 
            <article class="rso-grid-item bg-[#F5F3EF] rounded-3xl p-6 flex flex-col" data-category="<?php echo esc_attr( get_field('filter_teacher_training') ); ?>">
                <p class="text-xs font-bold uppercase tracking-wide text-[#4A2E2A]/70 mb-3">
                    <?php echo esc_html( get_field('april_2026_•_teacher_training') ); ?>
                </p>
                <h3 class="text-lg font-extrabold text-[#4A2E2A] uppercase leading-snug mb-3">
                    <?php echo esc_html( get_field('training_teachers_to_see_every_childs_potential') ); ?>
                </h3>
                <p class="text-gray-600 text-ls leading-relaxed mb-4 flex-1">
                   <?php echo esc_html( get_field('rsos_teacher_training_program_is_expanding_to_kampong_speu_province_reaching_more_rural_communities') ); ?>
                </p>

                <div class="grid transition-all duration-300 ease-in-out" style="grid-template-rows: 0fr;" id="more-3-wrapper">
                    <div class="overflow-hidden">
                        <div class="text-gray-600 text-ls leading-relaxed space-y-3 border-t border-gray-300 pt-4 mb-4">
                            <p>
                               <?php echo esc_html( get_field('the_program') ); ?>
                            </p>
                            <p>
                                <?php echo esc_html( get_field('early_feedback') ); ?>
                            </p>
                        </div>
                    </div>
                </div>

                <button type="button" onclick="toggleReadMore('more-3', this)" aria-expanded="false" aria-controls="more-3-wrapper"
                        class="group inline-flex items-center gap-2 bg-[#D9A441] text-[#4A2E2A] text-sm font-bold uppercase tracking-wide px-5 py-2.5 rounded-[10px] hover:bg-[#c9953a] active:scale-95 transition w-fit cursor-pointer focus:outline-none focus-visible:ring-2 focus-visible:ring-[#4A2E2A] focus-visible:ring-offset-2">
                    <span class="read-more-label"><?php echo esc_html( get_field('read_more') ); ?></span>
                    <svg class="read-more-icon w-3.5 h-3.5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
            </article>

            <!-- Hidden card 1: wrapped so it can expand/collapse height + fade smoothly -->
            <div class="rso-grid-item rso-hidden-wrapper grid" data-category="<?php echo esc_attr( get_field('filter_advocacy') ); ?>" data-default-hidden="true">
                <div class="overflow-hidden">
                    <article class="bg-[#F5F3EF] rounded-3xl p-6 flex flex-col h-full">
                        <p class="text-xs font-bold uppercase tracking-wide text-[#4A2E2A]/70 mb-3">
                           <?php echo esc_html( get_field('march_2026_•_advocacy') ); ?>
                        </p>
                        <h3 class="text-lg font-extrabold text-[#4A2E2A] uppercase leading-snug mb-3">
                            <?php echo esc_html( get_field('pushing_for_inclusive_education_policy_at_the_national_level') ); ?>
                        </h3>
                        <p class="text-gray-600 text-ls leading-relaxed mb-4 flex-1">
                           <?php echo esc_html( get_field('rso_joined') ); ?>
                        </p>

                        <div class="grid transition-all duration-300 ease-in-out" style="grid-template-rows: 0fr;" id="more-4-wrapper">
                            <div class="overflow-hidden">
                                <div class="text-gray-600 text-ls leading-relaxed space-y-3 border-t border-gray-300 pt-4 mb-4">
                                    <p>
                                        <?php echo esc_html( get_field('the_coalitions_') ); ?>
                                    </p>
                                    <p>
                                       <?php echo esc_html( get_field('while_policy') ); ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <button type="button" onclick="toggleReadMore('more-4', this)" aria-expanded="false" aria-controls="more-4-wrapper"
                                class="group inline-flex items-center gap-2 bg-[#D9A441] text-[#4A2E2A] text-sm font-bold uppercase tracking-wide px-5 py-2.5 rounded-[10px] hover:bg-[#c9953a] active:scale-95 transition w-fit cursor-pointer focus:outline-none focus-visible:ring-2 focus-visible:ring-[#4A2E2A] focus-visible:ring-offset-2">
                            <span class="read-more-label"><?php echo esc_html( get_field('read_more') ); ?></span>
                            <svg class="read-more-icon w-3.5 h-3.5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                    </article>
                </div>
            </div>

            <!-- Hidden card 2: wrapped so it can expand/collapse height + fade smoothly -->
            <div class="rso-grid-item rso-hidden-wrapper grid" data-category="<?php echo esc_attr( get_field('filter_vocational_training') ); ?>" data-default-hidden="true">
                <div class="overflow-hidden">
                    <article class="bg-[#F5F3EF] rounded-3xl p-6 flex flex-col h-full">
                        <p class="text-xs font-bold uppercase tracking-wide text-[#4A2E2A]/70 mb-3">
                           <?php echo esc_html( get_field('february_2026_•_vocational_training') ); ?>
                        </p>
                        <h3 class="text-lg font-extrabold text-[#4A2E2A] uppercase leading-snug mb-3">
                            <?php echo esc_html( get_field('new_sewing_workshop_opens_doors_for_young_women') ); ?>
                        </h3>
                        <p class="text-gray-600 text-ls leading-relaxed mb-4 flex-1">
                           <?php echo esc_html( get_field('a_newly_equipped_sewing_workshop_is_giving_young_women_practical_marketable_skills_and_a_path_toward_financial_independence') ); ?>
                        </p>

                        <div class="grid transition-all duration-300 ease-in-out" style="grid-template-rows: 0fr;" id="more-5-wrapper">
                            <div class="overflow-hidden">
                                <div class="text-gray-600 text-ls leading-relaxed space-y-3 border-t border-gray-300 pt-4 mb-4">
                                    <p>
                                       <?php echo esc_html( get_field('the_workshop_was_built') ); ?>
                                    </p>
                                    <p>
                                       <?php echo esc_html( get_field('several_graduates_have_already') ); ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <button type="button" onclick="toggleReadMore('more-5', this)" aria-expanded="false" aria-controls="more-5-wrapper"
                                class="group inline-flex items-center gap-2 bg-[#D9A441] text-[#4A2E2A] text-sm font-bold uppercase tracking-wide px-5 py-2.5 rounded-[10px] hover:bg-[#c9953a] active:scale-95 transition w-fit cursor-pointer focus:outline-none focus-visible:ring-2 focus-visible:ring-[#4A2E2A] focus-visible:ring-offset-2">
                            <span class="read-more-label"><?php echo esc_html( get_field('read_more') ); ?></span>
                            <svg class="read-more-icon w-3.5 h-3.5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                    </article>
                </div>
            </div>
 
        </div>

        <!-- Show More / Show Less toggle (reveals or re-hides the hidden article cards) -->
        <div class="flex justify-center pt-10" id="rso-show-more-wrapper">
            <button type="button" id="rso-show-more-btn" aria-expanded="false"
                    class="group inline-flex items-center gap-2 bg-[#4A2E2A] text-white text-sm font-bold uppercase tracking-wide px-6 py-3 rounded-[10px] hover:bg-[#3a2521] active:scale-95 transition cursor-pointer">
                <span id="rso-show-more-label"><?php echo esc_html( get_field('show_more_articles') ); ?></span>
                <svg id="rso-show-more-icon" class="w-3.5 h-3.5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
        </div>

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
            label.textContent = '<?php echo esc_html( get_field('show_less') ); ?>';
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

    // Every category the visitor has added as a chip. An article matches if
    // its category is anywhere in this list (OR logic across chips).
    var selectedCategories = [];

    // Toggled true/false each time the visitor clicks the Show More / Show Less button
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

        // Grey out categories that are already selected so they can't be added twice
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

            // A default-hidden card only shows once the user has clicked
            // "Show More", or once a filter narrows the results.
            var shouldShow = matchesCategory && (isActiveFilter || manualShowAll || !isDefaultHidden);

            if (isWrapped) {
                // Wrapped (default-hidden) cards animate open/closed smoothly
                // instead of snapping with display:none.
                item.classList.toggle('rso-hidden-open', shouldShow);
                item.style.pointerEvents = shouldShow ? '' : 'none';
                // Still fully remove from layout if it doesn't match the
                // current category filter at all.
                item.style.display = matchesCategory ? '' : 'none';
            } else {
                item.style.display = shouldShow ? '' : 'none';
            }

            if (shouldShow) {
                visibleCount++;
            }
        });

        noResults.classList.toggle('hidden', visibleCount !== 0);

        // Hide the toggle button only while a filter is active (everything
        // matching is already shown then). Otherwise keep it visible so it
        // can be toggled back and forth between "Show More" and "Show Less".
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
                showMoreLabel.textContent = manualShowAll ? '<?php echo esc_html( get_field('show_less') ); ?>' : '<?php echo esc_html( get_field('show_more_articles') ); ?>';
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
<section class="rso-animate bg-white pt-10 px-6 md:px-12 pb-14" style="animation-delay: 0.45s;">
    <div class="max-w-6xl mx-auto">
        <div class="bg-[#4A2E2A] rounded-2xl px-8 py-8 md:px-10 md:py-10 flex flex-col md:flex-row md:items-center md:justify-between gap-6">
            <div>
                <h2 class="text-white text-xl md:text-2xl font-extrabold uppercase mb-2">
                    <?php echo esc_html( get_field('stay_connected_with_rso') ); ?>
                </h2>
                <p class="text-white/80 text-sm md:text-base max-w-md">
                   <?php echo esc_html( get_field('get_the_latest_stories_and_updates_from_rabbit_school_delivered_to_your_inbox') ); ?>
                </p>
            </div>

            <form class="flex flex-col sm:flex-row items-stretch gap-3 w-full md:w-auto">
                <input type="email" required placeholder="<?php echo esc_html( get_field('ex') ); ?>"
                       class="bg-[#F5F3EF] text-gray-700 placeholder-gray-500 text-sm rounded-[10px] px-5 py-3 w-full sm:w-72 focus:outline-none focus:ring-2 focus:ring-white/40">
                <button type="submit"
                        class="bg-black text-white text-sm font-semibold rounded-[10px] px-6 py-3 hover:bg-gray-900 active:scale-95 transition cursor-pointer whitespace-nowrap">
                    <?php echo esc_html( get_field('subscribe') ); ?>
                </button>
            </form>
        </div>
    </div>
</section>

<?php get_footer(); ?>