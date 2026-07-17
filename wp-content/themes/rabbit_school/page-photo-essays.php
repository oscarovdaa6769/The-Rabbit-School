<?php 
/*
 * Template Name: Photo Essays      
*/
get_header(); 
?>

<!-- section 1 -->
<section class="relative overflow-hidden">
      <img src="<?php echo esc_url(get_field('hero_image') ?: get_theme_file_uri('assets/images/error.png')); ?>" alt="" class="h-[500px] md:h-[700px] w-full object-cover">
      
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
<section class="max-w-7xl mx-auto py-[64px] md:py-[50px] px-[20px] 2xl:px-0 w-full font-sans">
      <div class="flex flex-col sm:flex-row gap-4 justify-between items-stretch sm:items-center w-full">
            
            <h2 class="text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-heading font-black text-brand-brown uppercase">
                  <?php echo esc_html(get_field('featured_title') ?: 'Featured Artical'); ?>
            </h2>

            <div class="relative w-full sm:flex-1 sm:max-w-md">
                  <input 
                      type="text" 
                      placeholder="<?php echo esc_attr(get_field('placeholder_text') ?: 'Search program...'); ?>" 
                      class="w-full border border-brand-brown/40 text-brand-brown placeholder-brand-brown/50 px-6 py-[14px] pr-12 rounded-full bg-transparent focus:outline-none focus:border-brand-brown focus:ring-1 focus:ring-brand-brown transition-all duration-200 text-[16px] shadow-sm hover:border-brand-brown/70"
                  />
                  <div class="absolute right-6 top-1/2 -translate-y-1/2 pointer-events-none">
                      <span class="icon-[solar--magnifer-linear] w-5 h-5 text-brand-brown/60"></span>
                  </div>
            </div>

      </div>
</section>
<!-- section 3 -->
<section class="max-w-7xl mx-auto px-[20px] 2xl:px-0 font-sans">
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8 max-w-7xl mx-auto">
            <?php 
                  // CARD 1
                  $img_card1_url = get_field('card_1_image') ?: get_theme_file_uri('assets/images/error.png');
                  $title_card1 = get_field('card_1_title') ?: 'Discover Something New';
                  $desc_card1 = get_field('card_1_description') ?: "Explore high-quality products and services designed to make your everyday life easier. Whether you're looking for the latest trends or trusted solutions, you'll find options that fit your needs and lifestyle.";
                  $btn_text_card1 = get_field('card_1_button_text') ?: 'read more';
                  $btn_link_card1 = get_field('card_1_button_link') ?: '#';
                  // CARD 2
                  $img_card2_url = get_field('card_2_image') ?: get_theme_file_uri('assets/images/error.png');
                  $title_card2 = get_field('card_2_title') ?: 'Discover Something New';
                  $desc_card2 = get_field('card_2_description') ?: "Explore high-quality products and services designed to make your everyday life easier. Whether you're looking for the latest trends or trusted solutions, you'll find options that fit your needs and lifestyle.";
                  $btn_text_card2 = get_field('card_2_button_text') ?: 'read more';
                  $btn_link_card2 = get_field('card_2_button_link') ?: '#';
                  // CARD 3
                  $img_card3_url = get_field('card_3_image') ?: get_theme_file_uri('assets/images/error.png');
                  $title_card3 = get_field('card_3_title') ?: 'Discover Something New';
                  $desc_card3 = get_field('card_3_description') ?: "Explore high-quality products and services designed to make your everyday life easier. Whether you're looking for the latest trends or trusted solutions, you'll find options that fit your needs and lifestyle.";
                  $btn_text_card3 = get_field('card_3_button_text') ?: 'read more';
                  $btn_link_card3 = get_field('card_3_button_link') ?: '#';
                  // CARD 4
                  $img_card4_url = get_field('card_4_image') ?: get_theme_file_uri('assets/images/error.png');
                  $title_card4 = get_field('card_4_title') ?: 'Discover Something New';
                  $desc_card4 = get_field('card_4_description') ?: "Explore high-quality products and services designed to make your everyday life easier. Whether you're looking for the latest trends or trusted solutions, you'll find options that fit your needs and lifestyle.";
                  $btn_text_card4 = get_field('card_4_button_text') ?: 'read more';
                  $btn_link_card4 = get_field('card_4_button_link') ?: '#';
                  // CARD 5
                  $img_card5_url = get_field('card_5_image') ?: get_theme_file_uri('assets/images/error.png');
                  $title_card5 = get_field('card_5_title') ?: 'Discover Something New';
                  $desc_card5 = get_field('card_5_description') ?: "Explore high-quality products and services designed to make your everyday life easier. Whether you're looking for the latest trends or trusted solutions, you'll find options that fit your needs and lifestyle.";
                  $btn_text_card5 = get_field('card_5_button_text') ?: 'read more';
                  $btn_link_card5 = get_field('card_5_button_link') ?: '#';
                  // CARD 6
                  $img_card6_url = get_field('card_6_image') ?: get_theme_file_uri('assets/images/error.png');
                  $title_card6 = get_field('card_6_title') ?: 'Discover Something New';
                  $desc_card6 = get_field('card_6_description') ?: "Explore high-quality products and services designed to make your everyday life easier. Whether you're looking for the latest trends or trusted solutions, you'll find options that fit your needs and lifestyle.";
                  $btn_text_card6 = get_field('card_6_button_text') ?: 'read more';
                  $btn_link_card6 = get_field('card_6_button_link') ?: '#';
                  $photos = [
                        [$img_card1_url, $title_card1, $desc_card1, $btn_text_card1, $btn_link_card1],
                        [$img_card2_url, $title_card2, $desc_card2, $btn_text_card2, $btn_link_card2],
                        [$img_card3_url, $title_card3, $desc_card3, $btn_text_card3, $btn_link_card3],
                        [$img_card4_url, $title_card4, $desc_card4, $btn_text_card4, $btn_link_card4],
                        [$img_card5_url, $title_card5, $desc_card5, $btn_text_card5, $btn_link_card5],
                        [$img_card6_url, $title_card6, $desc_card6, $btn_text_card6, $btn_link_card6],
                  ];
            ?>
            <?php foreach ($photos as $item): ?>
                  <div class="bg-brand-cream border border-brand-brown/30 rounded-[24px] overflow-hidden flex flex-col shadow-sm hover:shadow-md transition-shadow duration-300">
                        <div class="w-full aspect-[4/3] overflow-hidden">
                        <img src="<?php echo esc_url($item[0]);?>" 
                              alt="" 
                              class="w-full h-full object-cover">
                        </div>
                        <div class="p-6 flex flex-col gap-[10px] md:gap-[20px] flex-grow">
                        <h4 class="text-[16px] sm:text-[18px] font-bold text-brand-teal leading-tight uppercase">
                              <?php echo esc_html($item[1]); ?>
                        </h4>
                        <p class="text-text-muted text-[14px] sm:text-[15px] md:text-[16px] leading-relaxed">
                              <?php echo esc_html($item[2]); ?>
                        </p>
                        <a href="<?php echo esc_url($item[4]); ?>" class="bg-brand-yellow px-[24px] py-[12px] rounded-[8px] inline-flex items-center self-start gap-[10px] group shadow-md hover:shadow-xl transition-all font-bold text-sm uppercase tracking-widest">
                              <?php echo esc_html($item[3]); ?>
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