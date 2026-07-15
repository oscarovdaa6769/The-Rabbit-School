<?php

/**
 * Template Name: How We Work Page
 */

get_header();

// Hero
$hero_title = get_field('hero_title');
$hero_description = get_field('hero_description');
$hero_background_image = get_field('hero_background_image');

// Learn More
$learn_more_title = get_field('learn_more_title');
$button_1_text = get_field('button_1_text');
$button_1_link = get_field('button_1_link');
$button_2_text = get_field('button_2_text');
$button_2_link = get_field('button_2_link');
$button_3_text = get_field('button_3_text');
$button_3_link = get_field('button_3_link');
$button_4_text = get_field('button_4_text');
$button_4_link = get_field('button_4_link');


// Education Program
$education_title = get_field('education_title');
$education_subtitle = get_field('education_subtitle');
$education_small_title = get_field('education_small_title');
$education_description = get_field('education_description');

$education_subtitle_2 = get_field('education_subtitle_2');
$education_description_2_1 = get_field('education_description_2_1');
$education_description_2_2 = get_field('education_description_2_2');
$education_description_2_3 = get_field('education_description_2_3');

$education_subtitle_3 = get_field('education_subtitle_3');
$education_description_3_1 = get_field('education_description_3_1');
$education_description_3_2 = get_field('education_description_3_2');
$education_description_3_3 = get_field('education_description_3_3');
$education_description_3_4 = get_field('education_description_3_4');

$education_image = get_field('education_image');

// Vocational
$vocational_title = get_field('vocational_title');
$vocational_subtitle_1 = get_field('vocational_subtitle_1');
$vocational_description_1 = get_field('vocational_description_1');

$vocational_subtitle_2 = get_field('vocational_subtitle_2');
$vocational_small_title = get_field('vocational_small_title');
$vocational_description_2_1 = get_field('vocational_description_2_1');
$vocational_description_2_2 = get_field('vocational_description_2_2');
$vocational_description_2_3 = get_field('vocational_description_2_3');
$vocational_description_2_4 = get_field('vocational_description_2_4');
$vocational_description_2_5 = get_field('vocational_description_2_5');
$vocational_description_2_6 = get_field('vocational_description_2_6');

$vocational_image = get_field('vocational_image');
$vocational_location_title = get_field('vocational_location_title');
$vocational_location_name = get_field('vocational_location_name');


// Teacher
$teacher_title = get_field('teacher_title');
$teacher_subtitle = get_field('teacher_subtitle');
$teacher_description = get_field('teacher_description');
$teacher_subtitle_2 = get_field('teacher_subtitle_2');
$teacher_description_2_1 = get_field('teacher_description_2_1');
$teacher_description_2_2 = get_field('teacher_description_2_2');
$teacher_description_2_3 = get_field('teacher_description_2_3');
$teacher_description_2_4 = get_field('teacher_description_2_4');
$teacher_description_2_5 = get_field('teacher_description_2_5');

$teacher_image = get_field('teacher_image');

// Advocacy
$advocacy_title = get_field('advocacy_title');
$advocacy_description = get_field('advocacy_description');

$card_1_title = get_field('card_1_title');
$card_1_image = get_field('card_1_image');

$card_2_title = get_field('card_2_title');
$card_2_image = get_field('card_2_image');

$card_3_title = get_field('card_3_title');
$card_3_image = get_field('card_3_image');

?>

<section class="relative bg-amber-950 text-white min-h-[480px] md:min-h-[600px] flex items-end overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img
            src="<?php echo get_theme_file_uri(); ?>/assets/images/NewPicturesP10.webp"
            alt="Child leaning against a blue wall"
            class="w-full h-full object-cover object-center transform scale-105 hover:scale-100 transition-transform duration-700 brightness-[0.85]" />
        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 pb-16 pt-32 w-full">
        <div class="max-w-3xl space-y-4">
            <h1 class="text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-heading font-black text-white uppercase mb-6m">
                <?php echo esc_html($hero_title); ?>
            </h1>
            <p class="text-lg md:text-xl text-gray-100 font-medium leading-relaxed max-w-2xl drop-shadow">
            <p>
                <?php echo esc_html($hero_description); ?>
            </p>
            </p>
        </div>
    </div>
</section>

<section class="pt-12 md:pt-16 text-center ">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-heading font-black  uppercase mb-6  text-[#477CAF] ">
            <?php echo esc_html($learn_more_title); ?>
        </h2>
    </div>
</section>

<div class="sticky top-0 z-50 shadow-md py-4 px-4 bg-gray-50/90 backdrop-blur-sm">
    <div class="flex flex-wrap items-center justify-center gap-3 md:gap-4 max-w-7xl mx-auto">

        <a href="<?php echo esc_attr($button_1_link); ?>" class="inline-flex items-center space-x-2 bg-stone-100/80 hover:bg-[#623D3C] text-stone-800 hover:text-white text-xs md:text-sm font-semibold py-3 px-5 rounded-xl shadow-sm hover:shadow transition-all duration-200 group">
            <span><?php echo esc_html($button_1_text); ?></span>
            <svg class="w-3.5 h-3.5 text-stone-500 group-hover:text-white group-hover:translate-x-0.5 transition-all" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
            </svg>
        </a>

        <a href="<?php echo esc_attr($button_2_link); ?>" class="inline-flex items-center space-x-2 bg-stone-100/80 hover:bg-[#623D3C] text-stone-800 hover:text-white text-xs md:text-sm font-semibold py-3 px-5 rounded-xl shadow-sm hover:shadow transition-all duration-200 group">
            <span><?php echo esc_html($button_2_text); ?></span>
            <svg class="w-3.5 h-3.5 text-stone-500 group-hover:text-white group-hover:translate-x-0.5 transition-all" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
            </svg>
        </a>

        <a href="<?php echo esc_attr($button_3_link); ?>" class="inline-flex items-center space-x-2 bg-stone-100/80 hover:bg-[#623D3C] text-stone-800 hover:text-white text-xs md:text-sm font-semibold py-3 px-5 rounded-xl shadow-sm hover:shadow transition-all duration-200 group">
            <span><?php echo esc_html($button_3_text); ?></span>
            <svg class="w-3.5 h-3.5 text-stone-500 group-hover:text-white group-hover:translate-x-0.5 transition-all" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
            </svg>
        </a>

        <a href="<?php echo esc_attr($button_4_link); ?>" class="inline-flex items-center space-x-2 bg-stone-100/80 hover:bg-[#623D3C] text-stone-800 hover:text-white text-xs md:text-sm font-semibold py-3 px-5 rounded-xl shadow-sm hover:shadow transition-all duration-200 group">
            <span><?php echo esc_html($button_4_text); ?></span>
            <svg class="w-3.5 h-3.5 text-stone-500 group-hover:text-white group-hover:translate-x-0.5 transition-all" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
            </svg>
        </a>

    </div>
</div>

<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 space-y-24">

    <section id="education" class="scroll-mt-32 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center hover-trigger">
        <div class="lg:col-span-7 space-y-6">
            <h2 class="text-3xl font-extrabold text-amber-950 sm:text-4xl tracking-tight">
                <?php echo esc_html($education_title); ?>
            </h2>
            <h3 class="text-xl font-semibold text-sky-600"><?php echo esc_html($education_subtitle); ?>
            </h3>
            <h5 class="text-xl font-semibold text-amber-950"><?php echo esc_html($education_small_title); ?>
            </h5>

            <p class="text-gray-600 leading-relaxed">
                <?php echo esc_html($education_description); ?> </p>

            <div class="space-y-4 pt-2">
                <div class="border-l-4 border-amber-500 pl-4">
                    <h4 class="font-bold text-gray-900"><?php echo esc_html($education_subtitle_2); ?> </h4>
                    <ul class="space-y-3 pl-2">
    <li class="flex items-start text-gray-600 font-medium leading-relaxed">
        <span class="text-gray-400 mr-3 select-none text-base">&#8226;</span>
        <span><?php echo esc_html($education_description_2_1); ?></span>
    </li>

    <li class="flex items-start text-gray-600 font-medium leading-relaxed">
        <span class="text-gray-400 mr-3 select-none text-base">&#8226;</span>
        <span><?php echo esc_html($education_description_2_2); ?></span>
    </li>

    <li class="flex items-start text-gray-600 font-medium leading-relaxed">
        <span class="text-gray-400 mr-3 select-none text-base">&#8226;</span>
        <span><?php echo esc_html($education_description_2_3); ?></span>
    </li>
</ul>
                </div>
                <div class="border-l-4 border-sky-500 pl-4">
                    <h4 class="font-bold text-gray-900"><?php echo esc_html($education_subtitle_3); ?></h4>
                    <ul class="space-y-3 pl-2">
    <li class="flex items-start text-gray-600 font-medium leading-relaxed">
        <span class="text-gray-400 mr-3 select-none text-base">&#8226;</span>
        <span><?php echo esc_html($education_description_3_1); ?></span>
    </li>

    <li class="flex items-start text-gray-600 font-medium leading-relaxed">
        <span class="text-gray-400 mr-3 select-none text-base">&#8226;</span>
        <span><?php echo esc_html($education_description_3_2); ?></span>
    </li>

    <li class="flex items-start text-gray-600 font-medium leading-relaxed">
        <span class="text-gray-400 mr-3 select-none text-base">&#8226;</span>
        <span><?php echo esc_html($education_description_3_3); ?></span>
    </li>

    <li class="flex items-start text-gray-600 font-medium leading-relaxed">
        <span class="text-gray-400 mr-3 select-none text-base">&#8226;</span>
        <span><?php echo esc_html($education_description_3_4); ?></span>
    </li>
</ul>
                </div>
            </div>
        </div>

        <div class="lg:col-span-5">
            <div class="overflow-hidden rounded-xl  ">
                <img
                    src="https://www.rabbitschoolcambodia.net/_next/image?url=%2Fimages%2FNew%20Pictures%20P11.jpg&w=750&q=75"
                    alt="Classroom learning"
                    class="w-full h-80 object-cover hover-target transform transition-transform duration-700 ease-out" />
            </div>
        </div>
    </section>

    <hr class="border-gray-200" />

    <section id="vocational" class="scroll-mt-32 grid grid-cols-1 lg:grid-cols-12 gap-12 hover-trigger">
        <div class="lg:col-span-5 order-2 lg:order-1 ">

            <!-- RIGHT: Location Image Card -->
            <div class=" anim-slide-right anim-delay-2 relative w-full h-[300px] md:h-[400px] lg:h-[0%] rounded-2xl overflow-hidden shadow-lg group">
                <img
                    src="<?php echo get_theme_file_uri(); ?>/assets/images/NewPictureP15.webp"
                    alt="Our Location"
                    class="w-full h-full object-cover transition-transform duration-500 ease-out group-hover:scale-110">
                <div class="absolute bottom-3 left-3 right-3 md:bottom-5 md:left-5 md:right-5 bg-white rounded-xl shadow-lg p-4 md:p-5">
                    <h3 class="font-extrabold text-[#5c1f2e] uppercase tracking-wide mb-1 text-base"> <?php echo esc_html($vocational_location_title); ?> </h3>
                    <p class="text-[#5c1f2e] text-sm"> <?php echo esc_html($vocational_location_name); ?> </p>
                </div>
            </div>


        </div>

        <div class="lg:col-span-7 space-y-6 order-1 lg:order-2">
            <h2 class="text-3xl font-extrabold text-amber-950 sm:text-4xl tracking-tight">
                <?php echo esc_html($vocational_title); ?> </h2>
            <h3 class="text-xl font-semibold text-amber-600"><?php echo esc_html($vocational_subtitle_1); ?> </h3>
            <p class="text-gray-600 leading-relaxed">
                <?php echo esc_html($vocational_description_1); ?> </p>
            <div class="space-y-4 pt-2">
                <h4 class="text-xl font-bold text-[#623D3C]">
                    <?php echo esc_html($vocational_subtitle_2); ?> </h4>
                <p class="font-normal text-sm md:text-base text-amber-600">
    <?php echo esc_html($vocational_small_title); ?>                </p>
<ul class="space-y-2.5 pl-1">
    <li class="flex items-start text-gray-600 text-sm md:text-base font-medium leading-relaxed">
        <span class="text-gray-400 mr-3 select-none text-base">&#8226;</span>
        <span><?php echo esc_html($vocational_description_2_1); ?></span>
    </li>

    <li class="flex items-start text-gray-600 text-sm md:text-base font-medium leading-relaxed">
        <span class="text-gray-400 mr-3 select-none text-base">&#8226;</span>
        <span><?php echo esc_html($vocational_description_2_2); ?></span>
    </li>

    <li class="flex items-start text-gray-600 text-sm md:text-base font-medium leading-relaxed">
        <span class="text-gray-400 mr-3 select-none text-base">&#8226;</span>
        <span><?php echo esc_html($vocational_description_2_3); ?></span>
    </li>

    <li class="flex items-start text-gray-600 text-sm md:text-base font-medium leading-relaxed">
        <span class="text-gray-400 mr-3 select-none text-base">&#8226;</span>
        <span><?php echo esc_html($vocational_description_2_4); ?></span>
    </li>

    <li class="flex items-start text-gray-600 text-sm md:text-base font-medium leading-relaxed">
        <span class="text-gray-400 mr-3 select-none text-base">&#8226;</span>
        <span><?php echo esc_html($vocational_description_2_5); ?></span>
    </li>

    <li class="flex items-start text-gray-600 text-sm md:text-base font-medium leading-relaxed">
        <span class="text-gray-400 mr-3 select-none text-base">&#8226;</span>
        <span><?php echo esc_html($vocational_description_2_6); ?></span>
    </li>
</ul>
            </div>
        </div>
    </section>

    <hr class="border-gray-200" />

    <section id="teacher" class="scroll-mt-32 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center hover-trigger">
    <div class="lg:col-span-7 space-y-6">

    <h2 class="text-3xl font-extrabold text-amber-950 sm:text-4xl tracking-tight">
        <?php echo esc_html($teacher_title); ?>
    </h2>

    <h3 class="text-xl font-semibold text-sky-600">
        <?php echo esc_html($teacher_subtitle); ?>
    </h3>

    <p class="text-gray-600 leading-relaxed">
    <?php echo wp_kses_post($teacher_description); ?>    </p>

    <div class="space-y-4 pt-2">

        <h4 class="font-bold text-amber-950 text-xl">
            <?php echo esc_html($teacher_subtitle_2); ?>
        </h4>

        <ul class="space-y-3 pl-2">

            <li class="flex items-start text-gray-600 font-medium leading-relaxed">
                <span class="text-gray-400 mr-3 select-none text-base">&#8226;</span>
                <span><?php echo esc_html($teacher_description_2_1); ?></span>
            </li>

            <li class="flex items-start text-gray-600 font-medium leading-relaxed">
                <span class="text-gray-400 mr-3 select-none text-base">&#8226;</span>
                <span><?php echo esc_html($teacher_description_2_2); ?></span>
            </li>

            <li class="flex items-start text-gray-600 font-medium leading-relaxed">
                <span class="text-gray-400 mr-3 select-none text-base">&#8226;</span>
                <span><?php echo esc_html($teacher_description_2_3); ?></span>
            </li>

            <li class="flex items-start text-gray-600 font-medium leading-relaxed">
                <span class="text-gray-400 mr-3 select-none text-base">&#8226;</span>
                <span><?php echo esc_html($teacher_description_2_4); ?></span>
            </li>

            <li class="flex items-start text-gray-600 font-medium leading-relaxed">
                <span class="text-gray-400 mr-3 select-none text-base">&#8226;</span>
                <span><?php echo esc_html($teacher_description_2_5); ?></span>
            </li>

        </ul>

    </div>

</div>

        <div class="lg:col-span-5">
            <div class="overflow-hidden rounded-xl">
                <img
                    src="https://www.rabbitschoolcambodia.net/_next/image?url=%2Fimages%2FNew%20Pictures%20P12.jpg&w=750&q=75"
                    alt="Classroom learning"
                    class="w-full h-80 object-cover hover-target transform transition-transform duration-700 ease-out" />
            </div>
        </div>
    </section>

    <hr class="border-gray-200" />

    <section id="advocacy" class="scroll-mt-32 text-center max-w-7xl mx-auto space-y-8">
        <div class="space-y-3">
            <h2 class="text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-heading font-black  text-amber-950 uppercase mb-6m">
                <?php echo esc_html($advocacy_title); ?>
            </h2>
        </div>

        <p class="text-gray-600 text-lg leading-relaxed max-w-5xl mx-auto">
                <?php echo esc_html($advocacy_description); ?>
        </p>



        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-6xl w-full">

            <div class="bg-[#f9f6f0] rounded-2xl border border-[#e5dec9]  flex flex-col items-center">
                <div class="w-full aspect-[4/3] rounded-xl overflow-hidden mb-6">
                    <img
                        src="https://www.rabbitschoolcambodia.net/_next/image?url=%2Fimages%2FRun%20With%20Sai.jpg&w=1080&q=75"
                        alt="Event run with Sai"
                        class="w-full h-full object-cover" />
                </div>
                <h3 class="text-[#6d5045] font-semibold text-lg text-center mb-2">
                <?php echo esc_html($card_1_title ); ?>
                </h3>
            </div>

            <div class="bg-[#f9f6f0] rounded-2xl border border-[#e5dec9]  flex flex-col items-center">
                <div class="w-full aspect-[4/3] rounded-xl overflow-hidden mb-6">
                    <img
                        src="https://www.rabbitschoolcambodia.net/_next/image?url=%2Fimages%2FNew%20Picture%2013.jpg&w=1080&q=75"
                        alt="Parent's Training"
                        class="w-full h-full object-cover" />
                </div>
                <h3 class="text-[#6d5045] font-semibold text-lg text-center mb-2">
                <?php echo esc_html($card_2_title); ?>
                </h3>
            </div>

            <div class="bg-[#f9f6f0] rounded-2xl border border-[#623D3C]  flex flex-col items-center">
                <div class="w-full aspect-[4/3] rounded-xl overflow-hidden mb-6">
                    <img
                        src="https://www.rabbitschoolcambodia.net/_next/image?url=%2Fimages%2FNational%20Forum.jpg&w=1080&q=75"
                        alt="Participation in Employment National Forum"
                        class="w-full h-full object-cover " />
                </div>
                <h3 class="text-[#6d5045] font-semibold text-lg text-center max-w-[250px] mb-2 leading-snug">
                <?php echo esc_html($card_3_title); ?>
                </h3>
            </div>

        </div>
    </section>

</main>

<?php
get_footer();
?>