<?php
/*
Template Name: About Us
*/
get_header();?>

<!-- section 1 -->
<section class="relative overflow-hidden">
    <img src="<?php echo esc_url(get_field('section_1_image') ?: get_theme_file_uri('assets/images/error.png')); ?>"
        alt="<?php echo esc_attr(get_field('section_1_title') ?: 'Error'); ?>"
        class="h-[500px] md:h-[700px] w-full object-cover">

    <div class="absolute inset-0 z-50 bg-black/20 flex items-end pb-6 md:pb-20">
        <div class="w-full max-w-7xl mx-auto">
                <div class="max-w-2xl text-text-light">
                    <h1 class="font-heading text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-black leading-tight mb-2 md:mb-4 uppercase">
                            <?php echo esc_html(get_field('section_1_title') ?: 'Error'); ?>
                    </h1>
                    <p class="text-[14px] sm:text-[15px] md:text-[16px] lg:text-[18px] leading-relaxed opacity-90">
                            <?php echo esc_html(get_field('section_1_description') ?: 'Error'); ?>
                    </p>
                </div>
        </div>
    </div>
</section>
<!-- section 2 -->
<section class="bg-brand-cream py-16 md:py-24">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 lg:gap-20 items-center">
            <!-- image -->
            <div class="relative">
                <div class="absolute -top-4 -right-4 w-full h-full border-2 border-brand-yellow rounded-2xl -z-10 hidden md:block"></div>
                <div class="w-full aspect-[4/3] md:aspect-video rounded-[24px] overflow-hidden shadow-2xl transition-transform duration-500 hover:scale-[1.02]">
                        <img src="<?php echo esc_url(get_field('section_2_image') ?: get_theme_file_uri('assets/images/error.png')); ?>" 
                        alt="<?php echo esc_attr(get_field('section_2_title') ?: 'Error'); ?>" 
                        class="h-full w-full object-cover">
                </div>
            </div>
            <!-- context -->
            <div class="flex flex-col">
                    <h2 class="text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-heading font-bold text-brand-brown mb-6 leading-tight">
                            <?php echo esc_html(get_field('section_2_title') ?: 'Error'); ?>
                    </h2>
                    <p class="text-text-main text-[14px] sm:text-[15px] md:text-[16px] lg:text-[18px] leading-relaxed mb-8">
                            <?php echo esc_html(get_field('section_2_description') ?: 'Error'); ?>
                    </p>
                </div>
        </div>
    </div>
</section>
<!-- section 3 -->
<section class="bg-brand-yellow py-16 md:py-24">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 lg:gap-20 items-center">
            <!-- context -->
            <div class="flex flex-col">
                <h2 class="text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-heading font-bold text-brand-brown mb-6 leading-tight">
                    <?php echo esc_html(get_field('section_3_title') ?: 'Error'); ?>
                </h2>
                <p class="text-text-main text-[14px] sm:text-[15px] md:text-[16px] lg:text-[18px] leading-relaxed mb-8">
                    <?php echo esc_html(get_field('section_3_description') ?: 'Error'); ?>
                </p>
            </div>
            <!-- image -->
            <div class="relative">
                <div class="absolute -top-4 -right-4 w-full h-full border-2 border-brand-yellow rounded-2xl -z-10 hidden md:block"></div>
                <div class="w-full aspect-[4/3] md:aspect-video rounded-[24px] overflow-hidden shadow-2xl transition-transform duration-500 hover:scale-[1.02]">
                        <img src="<?php echo esc_url(get_field('section_3_image') ?: get_theme_file_uri('assets/images/error.png')); ?>" 
                        alt="<?php echo esc_attr(get_field('section_3_title') ?: 'Error'); ?>" 
                        class="h-full w-full object-cover">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section 4 -->
<section class="bg-brand-blue py-16 md:py-24">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 lg:gap-20 items-center">
            <!-- image -->
            <div class="relative">
                <div class="absolute -top-4 -right-4 w-full h-full border-2 border-brand-yellow rounded-2xl -z-10 hidden md:block"></div>
                <div class="w-full aspect-[4/3] md:aspect-video rounded-[24px] overflow-hidden shadow-2xl transition-transform duration-500 hover:scale-[1.02]">
                        <img src="<?php echo esc_url(get_field('section_4_image') ?: get_theme_file_uri('assets/images/error.png')); ?>" 
                        alt="<?php echo esc_attr(get_field('section_4_title') ?: 'Error'); ?>" 
                        class="h-full w-full object-cover">
                </div>
            </div>
            <!-- context -->
            <div class="flex flex-col">
                    <h2 class="text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-heading font-bold text-brand-brown mb-6 leading-tight">
                            <?php echo esc_html(get_field('section_4_title') ?: 'Error'); ?>
                    </h2>
                    <p class="text-text-main text-[14px] sm:text-[15px] md:text-[16px] lg:text-[18px] leading-relaxed mb-8">
                            <?php echo esc_html(get_field('section_4_description') ?: 'Error'); ?>
                    </p>
                </div>
        </div>
    </div>
</section>
<!-- section 5 -->
<section class="bg-brand-pink py-16 md:py-24">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 lg:gap-20 items-center">
            <!-- context -->
            <div class="flex flex-col">
                <h2 class="text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-heading font-bold text-brand-brown mb-6 leading-tight">
                    <?php echo esc_html(get_field('section_5_title') ?: 'Error'); ?>
                </h2>
                <p class="text-text-main text-[14px] sm:text-[15px] md:text-[16px] lg:text-[18px] leading-relaxed mb-8">
                    <?php echo esc_html(get_field('section_5_description') ?: 'Error'); ?>
                </p>
            </div>
            <!-- image -->
            <div class="relative">
                <div class="absolute -top-4 -right-4 w-full h-full border-2 border-brand-yellow rounded-2xl -z-10 hidden md:block"></div>
                <div class="w-full aspect-[4/3] md:aspect-video rounded-[24px] overflow-hidden shadow-2xl transition-transform duration-500 hover:scale-[1.02]">
                        <img src="<?php echo esc_url(get_field('section_5_image') ?: get_theme_file_uri('assets/images/error.png')); ?>" 
                        alt="<?php echo esc_attr(get_field('section_5_title') ?: 'Error'); ?>" 
                        class="h-full w-full object-cover">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section 6 -->
<section class="bg-brand-teal py-[100px] text-center">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-heading font-bold text-text-light mb-6 leading-tight uppercase">
            <?php echo esc_html(get_field('section_6_title') ?: 'Error'); ?>
        </h2>
        <p class="text-text-light text-[14px] sm:text-[15px] md:text-[16px] lg:text-[18px] leading-relaxed mb-8">
            <?php echo esc_html(get_field('section_6_description') ?: 'Error'); ?>
        </p>
    </div>
</section>

<?php get_footer(); ?>