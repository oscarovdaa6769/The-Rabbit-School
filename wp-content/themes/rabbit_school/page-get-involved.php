<?php
/* Template Name: Get Involved */
get_header();

$fallback_img = get_theme_file_uri('assets/images/error.png');

// Hero
$hero_heading = get_field('hero_heading') ?: 'HERO HEADING NOT WORKING';
$hero_text = get_field('hero_text') ?: 'HERO SUBTEXT NOT WORKING';

// Card 1

$card1_title = get_field('card_1_title') ?: 'CARD 1 TITLE NOT WORKING';
$card1_desc  = get_field('card_1_description') ?: 'CARD 1 DESCRIPTION NOT WORKING';
$card1_btn_txt = get_field('card_1_button_text') ?: 'CARD 1 BUTTON TEXT NOT WORKING';
$card1_btn_lnk = get_field('card_1_button_link') ?: '#';

// Card 2

$card2_title = get_field('card_2_title') ?: 'CARD 2 TITLE NOT WORKING';
$card2_desc  = get_field('card_2_description') ?: 'CARD 2 DESCRIPTION NOT WORKING';
$card2_btn_txt = get_field('card_2_button_text') ?: 'CARD 2 BUTTON TEXT NOT WORKING';
$card2_btn_lnk = get_field('card_2_button_link') ?: '#';

// Card 3

$card3_title = get_field('card_3_title') ?: 'CARD 3 TITLE NOT WORKING';
$card3_desc  = get_field('card_3_description') ?: 'CARD 3 DESCRIPTION NOT WORKING';
$card3_btn_txt = get_field('card_3_button_text') ?: 'CARD 3 BUTTON TEXT NOT WORKING';
$card3_btn_lnk = get_field('card_3_button_link') ?: '';

$cards = [
    [$card1_icon, $card1_title, $card1_desc, $card1_btn_txt, $card1_btn_lnk],
    [$card2_icon, $card2_title, $card2_desc, $card2_btn_txt, $card2_btn_lnk],
    [$card3_icon, $card3_title, $card3_desc, $card3_btn_txt, $card3_btn_lnk],
];

$card_colors = array(
    array('bg' => 'bg-[#DDB0D1] hover:bg-[#DDB0D1]/95', 'text' => 'text-[#623D3C]', 'subtext' => 'text-[#623D3C]/80', 'underline' => 'bg-[#623D3C]'),
    array('bg' => 'bg-[#8BAEA7] hover:bg-[#8BAEA7]/95', 'text' => 'text-white', 'subtext' => 'text-white/90', 'underline' => 'bg-white'),
    array('bg' => 'bg-[#623D3C] hover:bg-[#623D3C]/95', 'text' => 'text-white', 'subtext' => 'text-white/90', 'underline' => 'bg-white'),
);

// CTA
$cta_heading = get_field('cta_heading') ?: 'CTA HEADING NOT WORKING';
$cta_subtext = get_field('cta_subtext') ?: 'CTA SUBTEXT NOT WORKING';
$cta_btn1_txt = get_field('cta_button_1_text') ?: 'CTA BUTTON 1 TEXT NOT WORKING';
$cta_btn1_lnk = get_field('cta_button_1_link') ?: '#';
$cta_btn2_txt = get_field('cta_button_2_text') ?: 'CTA BUTTON 2 TEXT NOT WORKING';
$cta_btn2_lnk = get_field('cta_button_2_link') ?: '';
?>

<main class="bg-[#F7F5F4] min-h-screen font-sans antialiased">

  <!-- Hero Section -->
  <section class="max-w-4xl mx-auto px-4 pt-20 pb-16 text-center">
    <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold tracking-tight mb-6 text-[#623D3C] leading-tight">
      <?php echo esc_html($hero_heading); ?>
    </h1>
    <p class="text-lg md:text-xl text-[#623D3C]/80 leading-relaxed max-w-3xl mx-auto">
      <?php echo esc_html($hero_text); ?>
    </p>
  </section>

  <!-- Cards Section -->
  <section class="max-w-6xl mx-auto px-6 pb-24">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <?php foreach ($cards as $i => $card):
          $colors = $card_colors[$i];
          list($icon, $title, $desc, $btn_txt, $btn_lnk) = $card;
      ?>
      <div class="<?php echo esc_attr($colors['bg']); ?> rounded-3xl shadow-xl p-8 flex flex-col justify-between transition-all duration-300 transform hover:-translate-y-1 hover:shadow-2xl border border-white/30 group">
        <div class="mb-8">
          <div class="mb-6 p-4 bg-white/20 rounded-full w-16 h-16 flex items-center justify-center backdrop-blur-md shadow-sm border border-white/20 transition-transform duration-300 group-hover:scale-110">
            <img src="<?php echo get_theme_file_uri('assets/icons/donation.png'); ?>" alt="<?php echo esc_attr($title); ?>" loading="lazy"
                 class="w-8 h-8 object-contain filter drop-shadow-[0_2px_4px_rgba(0,0,0,0.06)]" />
          </div>
          <h3 class="text-2xl font-bold <?php echo esc_attr($colors['text']); ?> mb-4 tracking-tight">
            <?php echo esc_html($title); ?>
          </h3>
          <p class="<?php echo esc_attr($colors['subtext']); ?> text-sm leading-relaxed">
            <?php echo esc_html($desc); ?>
          </p>
        </div>
        <a class="inline-flex items-center gap-2 <?php echo esc_attr($colors['text']); ?> font-bold transition-all duration-300 focus:outline-none focus:underline"
           href="<?php echo esc_url($btn_lnk); ?>">
          <span class="relative py-1">
            <?php echo esc_html($btn_txt); ?>
            <span class="absolute left-0 bottom-0 h-[2px] w-0 <?php echo esc_attr($colors['underline']); ?> transition-all duration-300 group-hover:w-full"></span>
          </span>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1.5" aria-hidden="true">
            <path d="M5 12h14"></path>
            <path d="m12 5 7 7-7 7"></path>
          </svg>
        </a>
      </div>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="bg-white py-24 border-t border-brand-brown/5">
    <div class="max-w-4xl mx-auto text-center px-6">
      <h2 class="text-3xl md:text-4xl font-bold text-brand-brown mb-6 tracking-tight">
        <?php echo esc_html($cta_heading); ?>
      </h2>
      <p class="text-lg text-band-brown/80 mb-10 leading-relaxed max-w-2xl mx-auto">
        <?php echo esc_html($cta_subtext); ?>
      </p>
      <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
        <a class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-8 py-4 bg-brand-brown hover:bg-brand-brown/90 text-white font-semibold rounded-full transition-all duration-300 transform hover:-translate-y-0.5 focus:outline-none focus:ring-4 focus:ring-brand-brown/20"
           href="<?php echo esc_url($cta_btn1_lnk); ?>">
          <span><?php echo esc_html($cta_btn1_txt); ?></span>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4" aria-hidden="true">
            <path d="M5 12h14"></path>
            <path d="m12 5 7 7-7 7"></path>
          </svg>
        </a>
        <a class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-8 py-4 border-2 border-brand-brown text-brand-brown hover:bg-brand-brown hover:text-white font-semibold rounded-full transition-all duration-300 transform hover:-translate-y-0.5 focus:outline-none focus:ring-4 focus:ring-brand-brown/5"
           href="<?php echo esc_url($cta_btn2_lnk); ?>">
          <span><?php echo esc_html($cta_btn2_txt); ?></span>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4" aria-hidden="true">
            <path d="M5 12h14"></path>
            <path d="m12 5 7 7-7 7"></path>
          </svg>
        </a>
      </div>
    </div>
  </section>

<?php get_footer(); ?>