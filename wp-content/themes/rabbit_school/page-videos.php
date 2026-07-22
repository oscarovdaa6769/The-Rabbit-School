<?php
/*
Template Name: Videos
*/
get_header();
?>
<!-- SECTION 1 -->
<section class="h-[500px] md:h-[700px] bg-brand-brown">
  <div class="max-w-7xl mx-auto px-[20px] 2xl:px-0 h-full">
    <div class="max-w-2xl text-text-light flex flex-col gap-[20px] items-start justify-end h-full py-[64px] md:py-[50px]">
      <h1 class="font-heading text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-black leading-tight uppercase">
        <?php echo esc_html(get_field('hero_title') ?: 'Videos: Stories From Our Programs'); ?>
      </h1>
      <p class="text-[12px] sm:text-[13px] md:text-[14px] lg:text-[16px] leading-relaxed opacity-90">
        <?php echo esc_html(get_field('hero_description') ?: 'Explore the lives and accomplishments of our community through moving images.'); ?>
      </p>
    </div>
  </div>
</section>
<!-- SECTION 2 -->
<section class="max-w-7xl mx-auto py-[64px] md:py-[50px] px-[20px] 2xl:px-0 w-full">
  <div class="flex flex-col md:flex-row items-center justify-between">
    <div class="flex items-center gap-[20px]">
      <?php 
        // FILTER 1
        $btn_text_filter1 = get_field('filter_1_button_text') ?: 'All Videos';
        $btn_link_filter1 = get_field('filter_1_button_link') ?: '#';
        // FILTER 2
        $btn_text_filter2 = get_field('filter_2_button_text') ?: 'Education';
        $btn_link_filter2 = get_field('filter_2_button_link') ?: '#';
        // FILTER 3
        $btn_text_filter3 = get_field('filter_3_button_text') ?: 'Community';
        $btn_link_filter3 = get_field('filter_3_button_link') ?: '#';
        // FILTER 4
        $btn_text_filter4 = get_field('filter_4_button_text') ?: 'Advocacy';
        $btn_link_filter4 = get_field('filter_4_button_link') ?: '#';
        // FILTER 5
        $btn_text_filter5 = get_field('filter_5_button_text') ?: 'Teacher Training';
        $btn_link_filter5 = get_field('filter_5_button_link') ?: '#';

        $filters = [
          [$btn_text_filter1, $btn_link_filter1],
          [$btn_text_filter2, $btn_link_filter2],
          [$btn_text_filter3, $btn_link_filter3],
          [$btn_text_filter4, $btn_link_filter4],
          [$btn_text_filter5, $btn_link_filter5],
        ];
      ?>
      <?php foreach($filters as $item): ?>
      <a href="<?php echo esc_url($item[1]) ?>" class="border-brand-brown border px-[24px] py-[12px] rounded-[8px] text-text-main text-[10px] sm:text-[12px] md:text-[13px] lg:text-[14px] hover:bg-brand-brown hover:text-text-light hover:scale-105 cursor-pointer transition-all ">
        <?php echo esc_html($item[0]) ?>
      </a>
      <?php endforeach; ?>
    </div>
    
  
    <div class="relative w-full sm:flex-1 sm:max-w-md">
          <input 
              type="text" 
              placeholder="<?php echo esc_attr(get_field('placeholder_text') ?: 'Search program...'); ?>" 
              class="w-full border border-brand-brown/40 text-brand-brown placeholder-brand-brown/50 px-6 py-[14px] pr-12 rounded-[28px] bg-transparent focus:outline-none focus:border-brand-brown focus:ring-1 focus:ring-brand-brown transition-all duration-200 text-[16px] shadow-sm hover:border-brand-brown/70"
          />
          <div class="absolute right-6 top-1/2 -translate-y-1/2 pointer-events-none">
              <span class="icon-[solar--magnifer-linear] w-5 h-5 text-brand-brown/60"></span>
          </div>
    </div>
  </div>
</section>
<!-- SECTION 3 -->
<section class="max-w-7xl mx-auto px-[20px] 2xl:px-0">
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-[20px]">
    <?php 
      // CARD 1
      $vdo_card1_url = get_field('card_1_video') ?: get_theme_file_uri('assets/images/error.png');
      $subtitle_card1 = get_field('card_1_subtitle') ?: 'July 21, 2026 • education';
      $title_card1 = get_field('card_1_title') ?: 'Vocational Success: From Leakhena';
      $desc_card1 = get_field('card_1_description') ?: 'Vocational Success: From Leakhena...';
      // CARD 2
      $vdo_card2_url = get_field('card_2_video') ?: get_theme_file_uri('assets/images/error.png');
      $subtitle_card2 = get_field('card_2_subtitle') ?: 'July 21, 2026 • education';
      $title_card2 = get_field('card_2_title') ?: 'Vocational Success: From Leakhena';
      $desc_card2 = get_field('card_2_description') ?: 'Vocational Success: From Leakhena...';
      // CARD 3
      $vdo_card3_url = get_field('card_3_video') ?: get_theme_file_uri('assets/images/error.png');
      $subtitle_card3 = get_field('card_3_subtitle') ?: 'July 21, 2026 • education';
      $title_card3 = get_field('card_3_title') ?: 'Vocational Success: From Leakhena';
      $desc_card3 = get_field('card_3_description') ?: 'Vocational Success: From Leakhena...';
      // CARD 4
      $vdo_card4_url = get_field('card_4_video') ?: get_theme_file_uri('assets/images/error.png');
      $subtitle_card4 = get_field('card_4_subtitle') ?: 'July 21, 2026 • education';
      $title_card4 = get_field('card_4_title') ?: 'Vocational Success: From Leakhena';
      $desc_card4 = get_field('card_4_description') ?: 'Vocational Success: From Leakhena...';

      $videos = [
        [$vdo_card1_url, $subtitle_card1, $title_card1, $desc_card1],
        [$vdo_card2_url, $subtitle_card2, $title_card2, $desc_card2],
        [$vdo_card3_url, $subtitle_card3, $title_card3, $desc_card3],
        [$vdo_card4_url, $subtitle_card4, $title_card4, $desc_card4],
      ]
    ?>
    <?php foreach ($videos as $item): ?>
    <div class="flex flex-col items-start gap-[20px]">
      <video
        controls width="100%" 
        class="rounded-[8px] h-60">
        <source src="<?php echo esc_url($item[0]); ?>" type="video/mp4">
      </video>
      <div class="flex flex-col items-start gap-[10px] md:gap-[20px]">
        <span class="text-[12px] sm:text-[13px] md:text-[14px] leading-relaxed">
          <?php echo esc_html($item[1]); ?>
        </span>
        <h1 class="text-[16px] sm:text-[18px] font-bold text-text-main leading-tight uppercase">
          <?php echo esc_html($item[2]); ?>
        </h1>
        <p class="text-text-main/80 text-[14px] sm:text-[15px] md:text-[16px] leading-relaxed">
          <?php echo esc_html($item[3]); ?>
        </p>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</section>
<!-- section 4 -->
<section class="max-w-7xl mx-auto py-[64px] md:py-[50px] px-[20px] 2xl:px-0 font-sans">
      <div class="flex items-center gap-[20px]">
            <div class="border border-brand-brown flex items-center justify-center rounded-full p-[16px] group hover:bg-brand-brown hover:text-text-light transition-all shadow-md hover:shadow-xl">
                  <span class="icon-[solar--arrow-left-linear] w-5 h-5 transition-transform duration-300 group-hover:-translate-x-1"></span>
            </div>
            <span>
                  1 of 10
            </span>
            <div class="border border-brand-brown flex items-center justify-center rounded-full p-[16px] group hover:bg-brand-brown hover:text-text-light transition-all shadow-md hover:shadow-xl">
                  <span class="icon-[solar--arrow-right-linear] w-5 h-5 transition-transform duration-300 group-hover:translate-x-1"></span>
            </div>
      </div>
</section>
<?php get_footer(); ?>