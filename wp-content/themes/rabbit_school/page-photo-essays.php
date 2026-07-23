<?php 
/*
 * Template Name: Photo Essays      
*/
get_header(); 
?>

<!-- section 1 -->
<section class="relative overflow-hidden">
      <img src="<?php echo esc_url(get_field('hero_image') ?: get_theme_file_uri('assets/images/error.png')); ?>" 
      alt="" 
      class="h-[500px] md:h-[700px] w-full object-cover">
      
      <div class="absolute inset-0 z-50 bg-black/20 flex items-end pb-6 md:pb-20">
            <div class="w-full max-w-7xl mx-auto px-[20px] 2xl:px-0">
                  <div class="max-w-2xl text-text-light">
                        <h1 class="font-heading text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-black leading-tight mb-2 md:mb-4 uppercase">
                              <?php echo esc_html(get_field('hero_title') ?: 'Photo Essays Stories of Impact'); ?>
                        </h1>
                        <p class="text-[12px] sm:text-[13px] md:text-[14px] lg:text-[16px] leading-relaxed opacity-90">
                              <?php echo esc_html(get_field('hero_description') ?: 'Explore the lives, achievements, and everyday joys of children and young adults with intellectual disabilities in Cambodia through powerful visual stories'); ?>
                        </p>
                  </div>
            </div>
      </div>
</section> 
<!-- section 2 -->
<section class="max-w-7xl mx-auto py-10 md:py-[50px] px-4 sm:px-6 2xl:px-0 w-full font-sans">
      <div class="flex flex-col md:flex-row gap-6 lg:gap-8 justify-between items-stretch md:items-center w-full">
            
            <?php 
            $filters = [
                  [
                        'text'   => get_field('filter_all_text') ?: 'All Photos',
                        'link'   => '#all',
                        'active' => true,
                  ],
                  [
                        'text'   => get_field('filter_education_text') ?: 'Education',
                        'link'   => '#education',
                        'active' => false,
                  ],
                  [
                        'text'   => get_field('filter_community_text') ?: 'Community',
                        'link'   => '#community',
                        'active' => false,
                  ],
                  [
                        'text'   => get_field('filter_advocacy_text') ?: 'Advocacy',
                        'link'   => '#advocacy',
                        'active' => false,
                  ],
                  [
                        'text'   => get_field('filter_teacher_training_text') ?: 'Teacher Training',
                        'link'   => '#teacher-training',
                        'active' => false,
                  ],
            ];
            ?>

            <!-- Filters Container: 2-columns on small mobile, flex row on larger screens -->
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

            <!-- Search Input Container -->
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
<!-- section 3 -->
<section class="max-w-7xl mx-auto px-[20px] 2xl:px-0 font-sans">
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-[20px] lg:gap-[50px] max-w-7xl mx-auto">
            <?php 
                  // CARD 1
                  $img_card1_url = get_field('card_1_image') ?: get_theme_file_uri('assets/images/error.png');
                  $subtitle_card1 = get_field('card_1_subtitle') ?: '23 July, 2026 · Education';
                  $title_card1 = get_field('card_1_title') ?: 'Discover Something New';
                  $desc_card1 = get_field('card_1_description') ?: "Explore high-quality products and services designed to make your everyday life easier. Whether you're looking for the latest trends or trusted solutions, you'll find options that fit your needs and lifestyle.";
                  $btn_text_card1 = get_field('card_1_button_text') ?: 'read more';
                  $btn_link_card1 = get_field('card_1_button_link') ?: '#';
                  // CARD 2
                  $img_card2_url = get_field('card_2_image') ?: get_theme_file_uri('assets/images/error.png');
                  $subtitle_card2 = get_field('card_2_subtitle') ?: '23 July, 2026 · Education';
                  $title_card2 = get_field('card_2_title') ?: 'Discover Something New';
                  $desc_card2 = get_field('card_2_description') ?: "Explore high-quality products and services designed to make your everyday life easier. Whether you're looking for the latest trends or trusted solutions, you'll find options that fit your needs and lifestyle.";
                  $btn_text_card2 = get_field('card_2_button_text') ?: 'read more';
                  $btn_link_card2 = get_field('card_2_button_link') ?: '#';
                  // CARD 3
                  $img_card3_url = get_field('card_3_image') ?: get_theme_file_uri('assets/images/error.png');
                  $subtitle_card3 = get_field('card_3_subtitle') ?: '23 July, 2026 · Education';
                  $title_card3 = get_field('card_3_title') ?: 'Discover Something New';
                  $desc_card3 = get_field('card_3_description') ?: "Explore high-quality products and services designed to make your everyday life easier. Whether you're looking for the latest trends or trusted solutions, you'll find options that fit your needs and lifestyle.";
                  $btn_text_card3 = get_field('card_3_button_text') ?: 'read more';
                  $btn_link_card3 = get_field('card_3_button_link') ?: '#';
                  
                  $photos = [
                        [$img_card1_url, $subtitle_card1, $title_card1, $desc_card1, $btn_text_card1, $btn_link_card1],
                        [$img_card2_url, $subtitle_card2, $title_card2, $desc_card2, $btn_text_card2, $btn_link_card2],
                        [$img_card3_url, $subtitle_card3, $title_card3, $desc_card3, $btn_text_card3, $btn_link_card3],
                  ];
            ?>
            <?php foreach ($photos as $item): ?>
                  <div class="bg-brand-cream rounded-[24px] overflow-hidden flex flex-col shadow-md hover:shadow-xl transition-shadow duration-300">
                        <div class="w-full aspect-[4/3] overflow-hidden">
                        <img src="<?php echo esc_url($item[0]);?>" 
                              alt="" 
                              class="w-full h-full object-cover">
                        </div>
                        <div class="p-6 flex flex-col gap-[10px] md:gap-[20px] flex-grow">
                        <span class="text-[14px] sm:text-[15px] md:text-[16px] text-text-muted">
                              <?php echo esc_html($item[1]); ?>
                        </span>
                        <h4 class="text-[16px] sm:text-[18px] md:text-[20px] font-bold text-brand-orange font-heading leading-tight uppercase">
                              <?php echo esc_html($item[2]); ?>
                        </h4>
                        <p class="text-text-muted text-[14px] sm:text-[15px] md:text-[16px] leading-relaxed">
                              <?php echo esc_html($item[3]); ?>
                        </p>
                        <a href="<?php echo esc_url($item[5]); ?>" class="bg-brand-yellow hover:bg-brand-orange hover:text-text-light tracking-wider text-text-main px-[24px] py-[12px] rounded-[8px] inline-flex items-center self-start gap-[10px] group shadow-md hover:shadow-xl transition-all font-bold text-sm uppercase">
                              <?php echo esc_html($item[4]); ?>
                              <span class="icon-[solar--arrow-right-linear] w-5 h-5 transition-transform duration-300 group-hover:translate-x-1"></span>
                        </a>
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