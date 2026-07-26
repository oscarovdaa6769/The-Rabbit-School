<?php
/*
Template Name: About Us
*/
get_header();?>

<!-- SECTION 1: HERO -->
<section class="relative overflow-hidden">
  <img src="<?php echo esc_url(get_field('section_1_image') ?: get_theme_file_uri('assets/images/error.png')); ?>"
      alt="<?php echo esc_attr(get_field('section_1_title') ?: 'Error'); ?>"
      class="h-[500px] md:h-[700px] w-full object-cover">

  <div class="absolute inset-0 z-10 bg-black/30 flex items-end">
    <div class="w-full max-w-7xl mx-auto py-[64px] md:py-[50px] px-[20px] 2xl:px-0">
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

<!-- SECTION 2: CREAM BG (IMAGE LEFT) -->
<section class="bg-brand-cream py-[64px] md:py-[50px] px-[20px] 2xl:px-0">
  <div class="max-w-7xl mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 lg:gap-20 items-center">
      <!-- Image Left -->
      <div class="relative">
        <div class="absolute -top-4 -right-4 w-full h-full border-2 border-brand-yellow rounded-2xl -z-10 hidden md:block"></div>
        <div class="w-full aspect-[4/3] md:aspect-video rounded-[24px] overflow-hidden shadow-2xl transition-transform duration-500 hover:scale-[1.02]">
          <img src="<?php echo esc_url(get_field('section_2_image') ?: get_theme_file_uri('assets/images/error.png')); ?>" 
               alt="<?php echo esc_attr(get_field('section_2_title') ?: 'Error'); ?>" 
               class="h-full w-full object-cover">
        </div>
      </div>
      <!-- Content Right -->
      <div class="flex flex-col">
        <h2 class="text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-heading font-bold text-brand-brown mb-6 leading-tight uppercase">
          <?php echo esc_html(get_field('section_2_title') ?: 'Error'); ?>
        </h2>
        <p class="text-text-main text-[14px] sm:text-[15px] md:text-[16px] lg:text-[18px] leading-relaxed">
          <?php echo esc_html(get_field('section_2_description') ?: 'Error'); ?>
        </p>
      </div>
    </div>
  </div>
</section>

<!-- SECTION 3: YELLOW BG (IMAGE RIGHT) -->
<section class="bg-brand-yellow py-[64px] md:py-[50px] px-[20px] 2xl:px-0">
  <div class="max-w-7xl mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 lg:gap-20 items-center">
      <!-- Content Left -->
      <div class="flex flex-col">
        <h2 class="text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-heading font-bold text-brand-brown mb-6 leading-tight uppercase">
          <?php echo esc_html(get_field('section_3_title') ?: 'Error'); ?>
        </h2>
        <p class="text-brand-brown text-[14px] sm:text-[15px] md:text-[16px] lg:text-[18px] leading-relaxed opacity-90">
          <?php echo esc_html(get_field('section_3_description') ?: 'Error'); ?>
        </p>
      </div>
      <!-- Image Right -->
      <div class="relative">
        <div class="absolute -top-4 -right-4 w-full h-full border-2 border-brand-brown rounded-2xl -z-10 hidden md:block"></div>
        <div class="w-full aspect-[4/3] md:aspect-video rounded-[24px] overflow-hidden shadow-2xl transition-transform duration-500 hover:scale-[1.02]">
          <img src="<?php echo esc_url(get_field('section_3_image') ?: get_theme_file_uri('assets/images/error.png')); ?>" 
               alt="<?php echo esc_attr(get_field('section_3_title') ?: 'Error'); ?>" 
               class="h-full w-full object-cover">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SECTION 4: BLUE BG (IMAGE LEFT) -->
<section class="bg-brand-blue py-[64px] md:py-[50px] px-[20px] 2xl:px-0">
  <div class="max-w-7xl mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 lg:gap-20 items-center">
      <!-- Image Left -->
      <div class="relative">
        <div class="absolute -top-4 -right-4 w-full h-full border-2 border-brand-yellow rounded-2xl -z-10 hidden md:block"></div>
        <div class="w-full aspect-[4/3] md:aspect-video rounded-[24px] overflow-hidden shadow-2xl transition-transform duration-500 hover:scale-[1.02]">
          <img src="<?php echo esc_url(get_field('section_4_image') ?: get_theme_file_uri('assets/images/error.png')); ?>" 
               alt="<?php echo esc_attr(get_field('section_4_title') ?: 'Error'); ?>" 
               class="h-full w-full object-cover">
        </div>
      </div>
      <!-- Content Right -->
      <div class="flex flex-col">
        <h2 class="text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-heading font-bold text-text-light mb-6 leading-tight uppercase">
          <?php echo esc_html(get_field('section_4_title') ?: 'Error'); ?>
        </h2>
        <p class="text-text-light/90 text-[14px] sm:text-[15px] md:text-[16px] lg:text-[18px] leading-relaxed">
          <?php echo esc_html(get_field('section_4_description') ?: 'Error'); ?>
        </p>
      </div>
    </div>
  </div>
</section>

<!-- SECTION 5: PINK BG (IMAGE RIGHT) -->
<section class="bg-brand-pink py-[64px] md:py-[50px] px-[20px] 2xl:px-0">
  <div class="max-w-7xl mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 lg:gap-20 items-center">
      <!-- Content Left -->
      <div class="flex flex-col">
        <h2 class="text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-heading font-bold text-text-light mb-6 leading-tight uppercase">
          <?php echo esc_html(get_field('section_5_title') ?: 'Error'); ?>
        </h2>
        <p class="text-text-light/90 text-[14px] sm:text-[15px] md:text-[16px] lg:text-[18px] leading-relaxed">
          <?php echo esc_html(get_field('section_5_description') ?: 'Error'); ?>
        </p>
      </div>
      <!-- Image Right -->
      <div class="relative">
        <div class="absolute -top-4 -right-4 w-full h-full border-2 border-white/60 rounded-2xl -z-10 hidden md:block"></div>
        <div class="w-full aspect-[4/3] md:aspect-video rounded-[24px] overflow-hidden shadow-2xl transition-transform duration-500 hover:scale-[1.02]">
          <img src="<?php echo esc_url(get_field('section_5_image') ?: get_theme_file_uri('assets/images/error.png')); ?>" 
               alt="<?php echo esc_attr(get_field('section_5_title') ?: 'Error'); ?>" 
               class="h-full w-full object-cover">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SECTION 6: TEAL BG (CENTERED CALLOUT) -->
<section class="bg-brand-teal text-center py-[64px] md:py-[50px] px-[20px] 2xl:px-0">
  <div class="max-w-4xl mx-auto">
    <h2 class="text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-heading font-bold text-text-light mb-6 leading-tight uppercase">
      <?php echo esc_html(get_field('section_6_title') ?: 'Error'); ?>
    </h2>
    <p class="text-text-light/90 text-[14px] sm:text-[15px] md:text-[16px] lg:text-[18px] leading-relaxed">
      <?php echo esc_html(get_field('section_6_description') ?: 'Error'); ?>
    </p>
  </div>
</section>

<?php get_footer(); ?>