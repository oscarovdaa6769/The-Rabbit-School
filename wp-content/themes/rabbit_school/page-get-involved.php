<?php 
/*
Template Name: Get Involved
*/
get_header(); 
?>


<main class="bg-brand-cream font-sans antialiased">
  <!-- SECTION 1 -->
  <section class="w-full max-w-7xl mx-auto py-[64px] md:py[50px] px-[20px] 2xl:px-0">
    <div class="max-w-2xl mx-auto text-center">
      <h1 class="font-heading text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-black leading-tight mb-[10px] md:mb-[20px] uppercase">
        <?php echo esc_html(get_field('section_1_title') ?: 'Get Involved Today'); ?>
      </h1>
      <p class="text-[14px] sm:text-[15px] md:text-[16px] lg:text-[18px] leading-relaxed">
        <?php echo esc_html(get_field('section_1_description') ?: 'There are many ways to support Rabbit School and help transform the lives of children...'); ?>
      </p>
    </div>
  </section>
  <!-- SECTION 2 -->
  <section class="max-w-7xl mx-auto pb-[64px] md:pb-[50px] px-[20px] 2xl:px-0">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <?php
        // CARD1
        $img_card1_url = get_field('card_1_image') ?: get_theme_file_uri('assets/images/error.png');
        $title_card1 = get_field('card_1_title') ?: 'Make a Donation';
        $desc_card1 = get_field('card_1_description') ?: 'Every contribution helps us strengthen and expand our...';
        $btn_text_card1 = get_field('card_1_button_text') ?: 'Donate Now';
        $btn_link_card1 = get_field('card_1_button_link') ?: '#';
        // CARD2
        $img_card2_url = get_field('card_2_image') ?: get_theme_file_uri('assets/images/error.png');
        $title_card2 = get_field('card_2_title') ?: 'Join Hands with Us';
        $desc_card2 = get_field('card_2_description') ?: 'Partner your company with Rabbit School to create opportunities...';
        $btn_text_card2 = get_field('card_2_button_text') ?: 'Join With Us';
        $btn_link_card2 = get_field('card_2_button_link') ?: '#';
        // CARD3
        $img_card3_url = get_field('card_3_image') ?: get_theme_file_uri('assets/images/error.png');
        $title_card3 = get_field('card_3_title') ?: 'Work with Volunteer';
        $desc_card3 = get_field('card_3_description') ?: 'Join our passionate team and help empower children...';
        $btn_text_card3 = get_field('card_3_button_text') ?: 'Work With Volunteer';
        $btn_link_card3 = get_field('card_3_button_link') ?: '#';

        $wrappers = [
                [$img_card1_url, $title_card1, $desc_card1, $btn_text_card1, $btn_link_card1, 'bg-brand-pink hover:bg-brand-pink/95 text-text-main', 'bg-brand-brown'],
                [$img_card2_url, $title_card2, $desc_card2, $btn_text_card2, $btn_link_card2, 'bg-brand-teal hover:bg-brand-teal/95 text-text-light', 'bg-brand-cream'],
                [$img_card3_url, $title_card3, $desc_card3, $btn_text_card3, $btn_link_card3, 'bg-brand-brown hover:bg-brand-brown/95 text-text-light', 'bg-brand-cream'],
        ];
      ?>
      <?php foreach ($wrappers as $item): ?>
        <div class="<?php echo esc_attr($item[5]); ?> rounded-[28px] shadow-md hover:shadow-xl p-[24px] flex flex-col justify-between gap-[20px] transition-all transform hover:-translate-y-1 border border-white/30 group">
          <div class="p-4 bg-white/20 rounded-full w-16 h-16 flex items-center justify-center backdrop-blur-md shadow-sm border border-white/20 transition-transform duration-300 group-hover:scale-110">
            <img src="<?php echo esc_url($item[0]); ?>"
            alt=""
            loading="lazy"
            class="w-8 h-8 object-contain filter drop-shadow-[0_2px_4px_rgba(0,0,0,0.06)]" />
          </div>
          <h3 class="text-[16px] sm:text-[18px] md:text-[20px] font-bold tracking-tight uppercase">
            <?php echo esc_html($item[1]); ?>
          </h3>
          <p class="text-[14px] sm:text-[15px] md:text-[16px] leading-relaxed">
            <?php echo esc_html($item[2]); ?>
          </p>
          <a class="inline-flex items-center gap-2 font-bold transition-all focus:outline-none focus:underline" href="<?php echo esc_url($item[4]); ?>">
            <span class="relative py-1">
              <?php echo esc_html($item[3]); ?>
              <span class="absolute left-0 bottom-0 h-[2px] w-0 <?php echo esc_attr($item[6]); ?> transition-all group-hover:w-full"></span>
            </span>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 transition-transform group-hover:translate-x-1.5" aria-hidden="true">
              <path d="M5 12h14"></path>
              <path d="m12 5 7 7-7 7"></path>
            </svg>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  </section>
  <!-- SECTION 3 -->
  <section class="bg-white py-[64px] md:py-[50px] px-[20px] 2xl:px-0 border-t border-brand-brown/5">
    <div class="max-w-7xl mx-auto text-center">
      <div class="max-w-5xl mx-auto mb-[20px]">
        <h2 class="font-heading text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-black leading-tight mb-[10px] md:mb-[20px] uppercase">
          <?php echo esc_html(get_field('section_3_title') ?: 'Ready to Make a Difference?'); ?>
        </h2>
        <p class="text-[14px] sm:text-[15px] md:text-[16px] lg:text-[18px] leading-relaxed">
          <?php echo esc_html(get_field('section_3_description') ?: 'Your support can change lives...'); ?>
        </p>
      </div>
      <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
        <a class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-[24px] py-[12px] bg-brand-brown text-white font-semibold rounded-[8px] transition-all transform focus:outline-none focus:ring-4 focus:ring-brand-brown/20 group shadow-md hover:shadow-xl" href="<?php echo esc_url(get_field('section_3_button_1_link') ?: '#'); ?>">
          <span><?php echo esc_html(get_field('section_3_button_1_text') ?: 'Get Involved'); ?></span>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 transition-transform group-hover:translate-x-1.5" aria-hidden="true">
            <path d="M5 12h14"></path>
            <path d="m12 5 7 7-7 7"></path>
          </svg>
        </a>
        <a class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-[24px] py-[12px] border border-brand-brown text-brand-brown hover:bg-brand-brown hover:text-white font-semibold rounded-[8px] transition-all transform focus:outline-none focus:ring-4 focus:ring-brand-brown/5 group shadow-md hover:shadow-xl" href="<?php echo esc_url(get_field('section_3_button_2_link') ?: '#'); ?>">
          <span><?php echo esc_html(get_field('section_3_button_2_text') ?: 'Contact Us'); ?></span>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 transition-transform group-hover:translate-x-1.5" aria-hidden="true">
            <path d="M5 12h14"></path>
            <path d="m12 5 7 7-7 7"></path>
          </svg>
        </a>
      </div>
    </div>
  </section>
<?php get_footer(); ?>