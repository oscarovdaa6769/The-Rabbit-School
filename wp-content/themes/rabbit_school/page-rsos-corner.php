<?php
/**
 * Template Name: RSOS Corner (News & Stories)
 *
 * Static version — no database queries. Edit the text below directly
 * whenever you want to change the categories or the featured story.
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

<!-- Hero -->
<section class="rso-animate bg-[#4A2E2A] text-white px-6 md:px-12 pt-50 pb-[30px]" style="animation-delay: 0s;">
    <div class="max-w-6xl mx-auto">
        <p class="uppercase tracking-widest text-sm text-white/80 mb-3">News &amp; Stories</p>
        <h1 class="text-4xl md:text-5xl font-extrabold uppercase mb-4">RSOS Corner</h1>
        <p class="text-white/85 max-w-2xl mb-8 leading-relaxed">
            Stories from the ground — updates, journeys, and moments from the
            children, families, and teachers of Rabbit School Cambodia.
        </p>

        <div class="flex flex-wrap gap-3">
           <a href="#rso-article-grid"> <button type="button" class="bg-[#D9A441] text-[#4A2E2A] text-xs font-bold uppercase tracking-wide px-4 py-3 rounded-[10px] hover:bg-[#c9953a] transition cursor-pointer">
                Education
            </button></a>
            <a href="#rso-article-grid"><button type="button" class="bg-[#D9A441] text-[#4A2E2A] text-xs font-bold uppercase tracking-wide px-4 py-3 rounded-[10px] hover:bg-[#c9953a] transition cursor-pointer">
                Community
            </button></a>
            <a href="#rso-article-grid"><button type="button" class="bg-[#D9A441] text-[#4A2E2A] text-xs font-bold uppercase tracking-wide px-4 py-3 rounded-[10px] hover:bg-[#c9953a] transition cursor-pointer">
                Advocacy
            </button></a>
            <a href="#rso-article-grid"><button type="button" class="bg-[#D9A441] text-[#4A2E2A] text-xs font-bold uppercase tracking-wide px-4 py-3 rounded-[10px] hover:bg-[#c9953a] transition cursor-pointer">
                Vocational Training
            </button></a>
        </div>
    </div>
</section>

<!-- Featured story -->
<section class="rso-animate bg-white px-6 md:px-12 py-14" style="animation-delay: 0.15s;">
    <div class="max-w-6xl mx-auto">

        <div class="flex items-center gap-4 mb-6">
            <span class="uppercase text-xs font-bold tracking-widest text-[#4A2E2A]">Featured Story</span>
            <span class="flex-1 h-px bg-gray-300"></span>
        </div>

        <div class="bg-[#F5F3EF] rounded-3xl p-8 md:p-10">
            <h2 class="text-xl md:text-2xl font-extrabold text-[#4A2E2A] mb-3 uppercase">
                From Classroom to Workplace: Dara's Journey in Vocational Training
            </h2>

            <p class="text-gray-700 leading-relaxed mb-6 max-w-3xl">
                At 19, Dara joined Rabbit School's vocational program with little confidence
                in his abilities. Two years later, he's employed at a local bakery and
                teaching his younger peers the skills that changed his life.
            </p>

            <div id="featured-more-wrapper" class="grid transition-all duration-300 ease-in-out mb-4" style="grid-template-rows: 0fr;">
                <div class="overflow-hidden">
                    <div class="text-gray-700 leading-relaxed space-y-3 border-t border-gray-300 pt-4 max-w-3xl">
                        <p>
                            Dara struggled to find work after finishing secondary school, unsure
                            whether any employer would give him a chance. Rabbit School's
                            vocational program paired him with a local bakery for hands-on
                            training in food preparation, hygiene standards, and customer service.
                        </p>
                        <p>
                            Today, Dara works full-time at the bakery and has taken on an
                            informal mentoring role, showing younger trainees the same skills
                            that once felt out of reach for him. His story is now used as an
                            example in RSO's vocational program orientation sessions.
                        </p>
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap gap-3">
                <a href="#rso-article-grid"><button type="button" class="bg-[#4A2E2A] text-white text-xs font-bold uppercase tracking-wide px-4 py-3 rounded-[10px] hover:bg-[#3a2521] transition cursor-pointer">
                    Vocational Training
                </button></a>
                <button type="button" onclick="toggleReadMore('featured-more', this)" aria-expanded="false" aria-controls="featured-more-wrapper"
                        class="group bg-[#4A2E2A] text-white text-xs font-bold uppercase tracking-wide px-4 py-3 rounded-[10px] hover:bg-[#3a2521] transition cursor-pointer inline-flex items-center gap-2">
                    <span class="read-more-label">Success Story</span>
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
            <span class="uppercase text-xs font-bold tracking-widest text-[#4A2E2A] whitespace-nowrap">Latest Articles</span>
            <span class="flex-1 h-px bg-gray-300"></span>
        </div>
 
        <!-- Filter / search bar -->
        <div class="flex flex-wrap items-center justify-between gap-4 mb-10">
            <div class="flex flex-wrap items-center gap-3">
                <div class="relative">
                    <select id="rso-filter-select" class="appearance-none bg-white border border-gray-300 rounded-[10px] text-ls text-gray-700 font-medium pl-4 pr-10 py-3 cursor-pointer hover:border-[#4A2E2A] focus:outline-none focus:border-[#4A2E2A] transition">
                        <option value="">Filter</option>
                        <option value="Education">Education</option>
                        <option value="Community">Community</option>
                        <option value="Advocacy">Advocacy</option>
                        <option value="Vocational Training">Vocational Training</option>
                        <option value="Teacher Training">Teacher Training</option>
                    </select>
                    <svg class="pointer-events-none absolute right-3 top-1/2 -translate-y-1/2 w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>

                <span id="rso-filter-chip" class="hidden items-center gap-2 bg-[#4A2E2A] text-white text-ls font-medium pl-4 pr-2 py-3 rounded-[10px]">
                    <span id="rso-filter-chip-label">Education</span>
                    <button type="button" id="rso-filter-chip-remove" aria-label="Remove filter"
                            class="flex items-center justify-center w-5 h-5 rounded-full hover:bg-white/20 transition">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </span>
            </div>

            <div class="relative w-full md:w-72">
                <input type="text" id="rso-search-input" placeholder="Search"
                       class="w-full border border-gray-300 rounded-[10px] text-ls text-gray-700 pl-4 pr-10 py-3 hover:border-[#4A2E2A] focus:outline-none focus:border-[#4A2E2A] transition">
                <svg class="absolute right-4 top-1/2 -translate-y-1/2 w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1 0 5.5 5.5a7.5 7.5 0 0 0 11.15 11.15z" />
                </svg>
            </div>
        </div>

        <p id="rso-no-results" class="hidden text-gray-500 text-sm mb-6">No articles match your filter.</p>
 
        <!-- Article cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-start" id="rso-article-grid">
 
            <article class="bg-[#F5F3EF] rounded-3xl p-6 flex flex-col" data-category="Education">
                <p class="text-xs font-bold uppercase tracking-wide text-[#4A2E2A]/70 mb-3">
                    June 2026 &bull; Education
                </p>
                <h3 class="text-lg font-extrabold text-[#4A2E2A] uppercase leading-snug mb-3">
                    Opening 7 New Classrooms in Toul Kork Primary School
                </h3>
                <p class="text-gray-600 text-ls leading-relaxed mb-4 flex-1">
                    More children with intellectual disabilities now have access to
                    inclusive classrooms alongside their peers.
                </p>

                <div class="grid transition-all duration-300 ease-in-out" style="grid-template-rows: 0fr;" id="more-1-wrapper">
                    <div class="overflow-hidden">
                        <div class="text-gray-600 text-ls leading-relaxed space-y-3 border-t border-gray-300 pt-4 mb-4">
                            <p>
                                The expansion allows Rabbit School Cambodia to welcome more students
                                into a supportive, adapted learning environment where teachers are
                                trained in inclusive education methods and individualized learning plans.
                            </p>
                            <p>
                                Families in the area have long faced limited options for children with
                                intellectual disabilities. This project brings education closer to home,
                                reducing travel time and easing the daily burden on caregivers.
                            </p>
                        </div>
                    </div>
                </div>

                <button type="button" onclick="toggleReadMore('more-1', this)" aria-expanded="false" aria-controls="more-1-wrapper"
                        class="group inline-flex items-center gap-2 bg-[#D9A441] text-[#4A2E2A] text-sm font-bold uppercase tracking-wide px-5 py-2.5 rounded-[10px] hover:bg-[#c9953a] active:scale-95 transition w-fit cursor-pointer focus:outline-none focus-visible:ring-2 focus-visible:ring-[#4A2E2A] focus-visible:ring-offset-2">
                    <span class="read-more-label">Read More</span>
                    <svg class="read-more-icon w-3.5 h-3.5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
            </article>
 
            <article class="bg-[#F5F3EF] rounded-3xl p-6 flex flex-col" data-category="Community">
                <p class="text-xs font-bold uppercase tracking-wide text-[#4A2E2A]/70 mb-3">
                    May 2026 &bull; Community
                </p>
                <h3 class="text-lg font-extrabold text-[#4A2E2A] uppercase leading-snug mb-3">
                    Parents as Advocates: How Families Are Shaping Policy
                </h3>
                <p class="text-gray-600 text-ls leading-relaxed mb-4 flex-1">
                    The Rabbit School Parent's Association is becoming a powerful voice
                    for disability rights in Cambodia.
                </p>

                <div class="grid transition-all duration-300 ease-in-out" style="grid-template-rows: 0fr;" id="more-2-wrapper">
                    <div class="overflow-hidden">
                        <div class="text-gray-600 text-ls leading-relaxed space-y-3 border-t border-gray-300 pt-4 mb-4">
                            <p>
                                Members meet monthly to discuss challenges their children face, from
                                access to healthcare to inclusion in mainstream schools, and to plan
                                joint advocacy efforts with local authorities.
                            </p>
                            <p>
                                Several members have already met with commune officials to discuss
                                accessibility improvements, marking an early but meaningful step
                                toward lasting policy change.
                            </p>
                        </div>
                    </div>
                </div>

                <button type="button" onclick="toggleReadMore('more-2', this)" aria-expanded="false" aria-controls="more-2-wrapper"
                        class="group inline-flex items-center gap-2 bg-[#D9A441] text-[#4A2E2A] text-sm font-bold uppercase tracking-wide px-5 py-2.5 rounded-[10px] hover:bg-[#c9953a] active:scale-95 transition w-fit cursor-pointer focus:outline-none focus-visible:ring-2 focus-visible:ring-[#4A2E2A] focus-visible:ring-offset-2">
                    <span class="read-more-label">Read More</span>
                    <svg class="read-more-icon w-3.5 h-3.5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
            </article>
 
            <article class="bg-[#F5F3EF] rounded-3xl p-6 flex flex-col" data-category="Teacher Training">
                <p class="text-xs font-bold uppercase tracking-wide text-[#4A2E2A]/70 mb-3">
                    April 2026 &bull; Teacher Training
                </p>
                <h3 class="text-lg font-extrabold text-[#4A2E2A] uppercase leading-snug mb-3">
                    Training Teachers to See Every Child's Potential
                </h3>
                <p class="text-gray-600 text-ls leading-relaxed mb-4 flex-1">
                    RSO's teacher training program is expanding to Kampong Speu
                    province, reaching more rural communities.
                </p>

                <div class="grid transition-all duration-300 ease-in-out" style="grid-template-rows: 0fr;" id="more-3-wrapper">
                    <div class="overflow-hidden">
                        <div class="text-gray-600 text-ls leading-relaxed space-y-3 border-t border-gray-300 pt-4 mb-4">
                            <p>
                                The program equips teachers with practical tools for recognizing
                                each child's strengths, adapting lessons for different learning
                                needs, and building classrooms where every student feels capable
                                of succeeding.
                            </p>
                            <p>
                                Early feedback from participating teachers points to renewed
                                confidence in the classroom, and a shift away from viewing
                                disability as a barrier to viewing it as one part of a child's
                                individual learning profile.
                            </p>
                        </div>
                    </div>
                </div>

                <button type="button" onclick="toggleReadMore('more-3', this)" aria-expanded="false" aria-controls="more-3-wrapper"
                        class="group inline-flex items-center gap-2 bg-[#D9A441] text-[#4A2E2A] text-sm font-bold uppercase tracking-wide px-5 py-2.5 rounded-[10px] hover:bg-[#c9953a] active:scale-95 transition w-fit cursor-pointer focus:outline-none focus-visible:ring-2 focus-visible:ring-[#4A2E2A] focus-visible:ring-offset-2">
                    <span class="read-more-label">Read More</span>
                    <svg class="read-more-icon w-3.5 h-3.5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
            </article>

            <article class="bg-[#F5F3EF] rounded-3xl p-6 flex flex-col" data-category="Advocacy" data-default-hidden="true">
                <p class="text-xs font-bold uppercase tracking-wide text-[#4A2E2A]/70 mb-3">
                    March 2026 &bull; Advocacy
                </p>
                <h3 class="text-lg font-extrabold text-[#4A2E2A] uppercase leading-snug mb-3">
                    Pushing for Inclusive Education Policy at the National Level
                </h3>
                <p class="text-gray-600 text-ls leading-relaxed mb-4 flex-1">
                    RSO joined a coalition of NGOs presenting recommendations to the
                    Ministry of Education on inclusive schooling standards.
                </p>

                <div class="grid transition-all duration-300 ease-in-out" style="grid-template-rows: 0fr;" id="more-4-wrapper">
                    <div class="overflow-hidden">
                        <div class="text-gray-600 text-ls leading-relaxed space-y-3 border-t border-gray-300 pt-4 mb-4">
                            <p>
                                The coalition's recommendations focus on teacher training
                                requirements, classroom accessibility standards, and funding
                                for assistive learning materials in public schools.
                            </p>
                            <p>
                                While policy change takes time, RSO's advocacy team sees this
                                as an important step toward making inclusive education the
                                norm rather than the exception across Cambodia.
                            </p>
                        </div>
                    </div>
                </div>

                <button type="button" onclick="toggleReadMore('more-4', this)" aria-expanded="false" aria-controls="more-4-wrapper"
                        class="group inline-flex items-center gap-2 bg-[#D9A441] text-[#4A2E2A] text-sm font-bold uppercase tracking-wide px-5 py-2.5 rounded-[10px] hover:bg-[#c9953a] active:scale-95 transition w-fit cursor-pointer focus:outline-none focus-visible:ring-2 focus-visible:ring-[#4A2E2A] focus-visible:ring-offset-2">
                    <span class="read-more-label">Read More</span>
                    <svg class="read-more-icon w-3.5 h-3.5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
            </article>

            <article class="bg-[#F5F3EF] rounded-3xl p-6 flex flex-col" data-category="Vocational Training" data-default-hidden="true">
                <p class="text-xs font-bold uppercase tracking-wide text-[#4A2E2A]/70 mb-3">
                    February 2026 &bull; Vocational Training
                </p>
                <h3 class="text-lg font-extrabold text-[#4A2E2A] uppercase leading-snug mb-3">
                    New Sewing Workshop Opens Doors for Young Women
                </h3>
                <p class="text-gray-600 text-ls leading-relaxed mb-4 flex-1">
                    A newly equipped sewing workshop is giving young women practical,
                    marketable skills and a path toward financial independence.
                </p>

                <div class="grid transition-all duration-300 ease-in-out" style="grid-template-rows: 0fr;" id="more-5-wrapper">
                    <div class="overflow-hidden">
                        <div class="text-gray-600 text-ls leading-relaxed space-y-3 border-t border-gray-300 pt-4 mb-4">
                            <p>
                                The workshop was built with donated sewing machines and
                                materials, and is run by two local seamstresses who volunteer
                                their time to mentor students through a 6-month program.
                            </p>
                            <p>
                                Several graduates have already started taking small orders
                                from the community, turning their new skills into real income
                                while continuing to build their craft.
                            </p>
                        </div>
                    </div>
                </div>

                <button type="button" onclick="toggleReadMore('more-5', this)" aria-expanded="false" aria-controls="more-5-wrapper"
                        class="group inline-flex items-center gap-2 bg-[#D9A441] text-[#4A2E2A] text-sm font-bold uppercase tracking-wide px-5 py-2.5 rounded-[10px] hover:bg-[#c9953a] active:scale-95 transition w-fit cursor-pointer focus:outline-none focus-visible:ring-2 focus-visible:ring-[#4A2E2A] focus-visible:ring-offset-2">
                    <span class="read-more-label">Read More</span>
                    <svg class="read-more-icon w-3.5 h-3.5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
            </article>
 
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
            label.textContent = 'Show Less';
        }
        icon.style.transform = 'rotate(180deg)';
        btn.setAttribute('aria-expanded', 'true');
    }
}

// Filter + search logic for the article cards
(function () {
    var select = document.getElementById('rso-filter-select');
    var searchInput = document.getElementById('rso-search-input');
    var chip = document.getElementById('rso-filter-chip');
    var chipLabel = document.getElementById('rso-filter-chip-label');
    var chipRemove = document.getElementById('rso-filter-chip-remove');
    var noResults = document.getElementById('rso-no-results');
    var articles = document.querySelectorAll('#rso-article-grid > article');

    function applyFilters() {
        var category = select.value;
        var search = searchInput.value.trim().toLowerCase();
        var isActiveFilter = !!category || !!search;
        var visibleCount = 0;

        articles.forEach(function (article) {
            var isDefaultHidden = article.getAttribute('data-default-hidden') === 'true';
            var matchesCategory = !category || article.getAttribute('data-category') === category;
            var text = article.textContent.toLowerCase();
            var matchesSearch = !search || text.indexOf(search) !== -1;

            var shouldShow = matchesCategory && matchesSearch && (isActiveFilter || !isDefaultHidden);

            if (shouldShow) {
                article.style.display = '';
                visibleCount++;
            } else {
                article.style.display = 'none';
            }
        });

        noResults.classList.toggle('hidden', visibleCount !== 0);

        if (category) {
            chipLabel.textContent = category;
            chip.classList.remove('hidden');
            chip.classList.add('flex');
        } else {
            chip.classList.add('hidden');
            chip.classList.remove('flex');
        }
    }

    select.addEventListener('change', applyFilters);
    searchInput.addEventListener('input', applyFilters);
    chipRemove.addEventListener('click', function () {
        select.value = '';
        applyFilters();
    });

    applyFilters();
})();
</script>

<!-- Newsletter subscribe -->
<section class="rso-animate bg-white pt-10 px-6 md:px-12 pb-14" style="animation-delay: 0.45s;">
    <div class="max-w-6xl mx-auto">
        <div class="bg-[#4A2E2A] rounded-2xl px-8 py-8 md:px-10 md:py-10 flex flex-col md:flex-row md:items-center md:justify-between gap-6">
            <div>
                <h2 class="text-white text-xl md:text-2xl font-extrabold uppercase mb-2">
                    Stay Connected with RSO
                </h2>
                <p class="text-white/80 text-sm md:text-base max-w-md">
                    Get the latest stories and updates from Rabbit School delivered to your inbox.
                </p>
            </div>

            <form class="flex flex-col sm:flex-row items-stretch gap-3 w-full md:w-auto">
                <input type="email" required placeholder="example@gmail.com"
                       class="bg-[#F5F3EF] text-gray-700 placeholder-gray-500 text-sm rounded-[10px] px-5 py-3 w-full sm:w-72 focus:outline-none focus:ring-2 focus:ring-white/40">
                <button type="submit"
                        class="bg-black text-white text-sm font-semibold rounded-[10px] px-6 py-3 hover:bg-gray-900 active:scale-95 transition cursor-pointer whitespace-nowrap">
                    Subscribe
                </button>
            </form>
        </div>
    </div>
</section>

<?php get_footer(); ?>