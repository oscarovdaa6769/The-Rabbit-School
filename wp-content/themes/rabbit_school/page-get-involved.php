<?php 
/* 
Template Name: Get Involved
*/
get_header();
?>

<!-- SECTION 1: HERO -->
<section class="relative overflow-hidden">
  <img src="<?php echo esc_url(get_field('section_1_image')); ?>"
       alt="<?php echo esc_attr(get_field('section_1_title')); ?>"
       class="h-[500px] md:h-[700px] w-full object-cover">

  <div class="absolute inset-0 z-10 bg-black/30 flex items-end pb-6 md:pb-20">
    <div class="w-full max-w-7xl mx-auto px-4 md:px-[20px]">
      <div class="max-w-2xl text-text-light">
        <h1 class="font-heading text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-black leading-tight mb-2 md:mb-4 uppercase">
          <?php echo esc_html(get_field('section_1_title')); ?>
        </h1>
        <p class="text-[14px] sm:text-[15px] md:text-[16px] lg:text-[18px] leading-relaxed opacity-90">
          <?php echo esc_html(get_field('section_1_description')); ?>
        </p>
      </div>
    </div>
  </div>
</section>

<!-- SECTION 2: CARDS GRID -->
<?php 
  $cta_cards = [
      // Card 1 - Product
      [
          'bg_class'    => 'bg-brand-blue hover:bg-brand-blue/95',
          'text_class'  => 'text-text-light',
          'desc_class'  => 'text-text-light/80',
          'line_bg'     => 'bg-brand-cream',
          'icon'        => get_field('cta_card_1_icon'),
          'title'       => get_field('cta_card_1_title') ?: 'Shop Our Product',
          'description' => get_field('cta_card_1_description') ?: 'Every contribution helps us strengthen and expand our programs, ensuring the highest quality education and opportunities for our students.',
          'btn_text'    => get_field('cta_card_1_button_text') ?: 'Shop now',
          'btn_link'    => get_field('cta_card_1_button_link') ?: '/wordpress/product',
      ],
      // Card 2 - Join Hands
      [
          'bg_class'    => 'bg-brand-orange hover:bg-brand-orange/95',
          'text_class'  => 'text-text-light',
          'desc_class'  => 'text-text-light/80',
          'line_bg'     => 'bg-brand-cream',
          'icon'        => get_field('cta_card_2_icon'),
          'title'       => get_field('cta_card_2_title') ?: 'Join Hands with Us',
          'description' => get_field('cta_card_2_description') ?: 'Partner your company with Rabbit School to create opportunities for children and youth with intellectual disabilities and autism in Cambodia.',
          'btn_text'    => get_field('cta_card_2_button_text') ?: 'Join with us',
          'btn_link'    => get_field('cta_card_2_button_link') ?: '/wordpress/donate',
      ],
      // Card 3 - Volunteer
      [
          'bg_class'    => 'bg-brand-pink hover:bg-brand-pink/95',
          'text_class'  => 'text-text-light',
          'desc_class'  => 'text-text-light/80',
          'line_bg'     => 'bg-brand-cream',
          'icon'        => get_field('cta_card_3_icon'),
          'title'       => get_field('cta_card_3_title') ?: 'Work with Volunteer',
          'description' => get_field('cta_card_3_description') ?: 'Join our passionate team and help empower children and youth with intellectual disabilities and autism to reach their full potential.',
          'btn_text'    => get_field('cta_card_3_button_text') ?: 'Work & volunteer',
          'btn_link'    => get_field('cta_card_3_button_link') ?: '/wordpress/work-with-volunteer',
      ],
  ];
?>

<section class="max-w-7xl mx-auto px-[20px] 2xl:px-0 py-[64px] md:py-[50px]">
  <div class="grid grid-cols-1 md:grid-cols-3 gap-[30px] lg:gap-[50px]">
    <?php foreach ($cta_cards as $card): ?>
      <div class="<?php echo esc_attr($card['bg_class']); ?> rounded-[28px] shadow-md hover:shadow-xl p-[24px] md:p-[32px] flex flex-col justify-between transition-all duration-300 transform hover:-translate-y-1 group">
        
        <div class="flex flex-col gap-[20px] mb-[20px]">
          <div class="p-[10px] bg-brand-cream/20 border border-brand-cream/30 rounded-full w-16 h-16 flex items-center justify-center backdrop-blur-md flex-shrink-0 transition-transform duration-500 group-hover:scale-110">
            <img src="<?php echo esc_url($card['icon']); ?>"
                alt="<?php echo esc_attr($card['title']); ?>"
                loading="lazy"
                class="w-8 h-8 object-contain filter drop-shadow-[0_2px_4px_rgba(0,0,0,0.06)] transition-transform duration-500 group-hover:rotate-45" />
          </div>
          <h3 class="text-[16px] sm:text-[18px] md:text-[20px] font-heading uppercase font-black <?php echo esc_attr($card['text_class']); ?> tracking-tight">
            <?php echo esc_html($card['title']); ?>
          </h3>
          <p class="<?php echo esc_attr($card['desc_class']); ?> text-[14px] sm:text-[15px] md:text-[16px] leading-relaxed">
            <?php echo esc_html($card['description']); ?>
          </p>
        </div>

        <a class="inline-flex items-center gap-2 <?php echo esc_attr($card['text_class']); ?> font-bold transition-all focus:outline-none focus:underline" href="<?php echo esc_url($card['btn_link']); ?>">
          <span class="relative py-1">
            <?php echo esc_html($card['btn_text']); ?>
            <span class="absolute left-0 bottom-0 h-[2px] w-0 <?php echo esc_attr($card['line_bg']); ?> transition-all duration-300 group-hover:w-full"></span>
          </span>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 flex-shrink-0 transition-transform duration-300 group-hover:translate-x-1.5" aria-hidden="true">
            <path d="M5 12h14"></path>
            <path d="m12 5 7 7-7 7"></path>
          </svg>
        </a>

      </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- SECTION 3: FINAL CTA -->
<?php 
  // ACF Fields with Fallback Defaults
  $cta_title        = get_field('final_cta_title');
  $cta_description  = get_field('final_cta_description') ?: 'Your support can change lives. Join us in creating a more inclusive world where every child has the opportunity to thrive.';
  
  // Button 1
  $btn1_text        = get_field('final_cta_button_1_text') ?: 'Get Involved';
  $btn1_link        = get_field('final_cta_button_1_link') ?: '/wordpress/donate';
  
  // Button 2
  $btn2_text        = get_field('final_cta_button_2_text') ?: 'Contact Us';
  $btn2_link        = get_field('final_cta_button_2_link') ?: '/wordpress/contact';
?>

<section class="bg-brand-teal py-[64px] md:py-[50px] px-[20px] 2xl:px-0">
  <div class="max-w-5xl mx-auto text-center">
    <h2 class="text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-heading uppercase font-bold text-text-light mb-[20px] tracking-tight">
      <?php echo esc_html($cta_title); ?>
    </h2>
    <p class="text-[14px] sm:text-[15px] md:text-[16px] lg:text-[18px] text-text-light/90 mb-[24px] leading-relaxed max-w-3xl mx-auto">
      <?php echo esc_html($cta_description); ?>
    </p>
    <div class="flex flex-col sm:flex-row gap-[16px] justify-center items-center">
      <!-- Button 1 (Primary) -->
      <a class="inline-flex items-center justify-center gap-2 py-[12px] px-[24px] bg-brand-yellow hover:bg-brand-orange text-text-main/90 hover:text-text-light font-bold rounded-[8px] transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-brand-yellow focus:ring-offset-2 group text-sm uppercase tracking-widest shadow-md hover:shadow-xl" 
        href="<?php echo esc_url($btn1_link); ?>">
        <span><?php echo esc_html($btn1_text); ?></span>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 flex-shrink-0 transition-transform duration-300 group-hover:translate-x-1.5" aria-hidden="true">
          <path d="M5 12h14"></path>
          <path d="m12 5 7 7-7 7"></path>
        </svg>
      </a>

      <!-- Button 2 (Secondary Border) -->
      <a class="inline-flex items-center justify-center gap-2 py-[12px] px-[24px] border-2 border-text-light text-text-light hover:bg-brand-orange hover:border-brand-orange hover:text-text-light font-bold rounded-[8px] transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-text-light focus:ring-offset-2 group text-sm uppercase tracking-widest shadow-md hover:shadow-xl" 
        href="<?php echo esc_url($btn2_link); ?>">
        <span><?php echo esc_html($btn2_text); ?></span>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 flex-shrink-0 transition-transform duration-300 group-hover:translate-x-1.5" aria-hidden="true">
          <path d="M5 12h14"></path>
          <path d="m12 5 7 7-7 7"></path>
        </svg>
      </a>
    </div>
  </div>
</section>
<?php get_footer(); ?>