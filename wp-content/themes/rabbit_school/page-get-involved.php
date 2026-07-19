<?php
/* Template Name: Get Involved */
get_header();

// Hero
$hero_header = get_field('hero_header') ?: 'No data';
$hero_title  = get_field('hero_title') ?: 'No data';

// Card 1 - Donation
$card1_title       = get_field('card_title') ?: 'No data';
$card1_description = get_field('card1_description') ?: 'No data';
$card1_btn_text    = get_field('card1_btn_text') ?: 'No data';
$card1_btn_link   = get_field('card1_btn_link') ?: 'No data';

// Card 2 - Join Hands
$card2_title       = get_field('card2_title') ?: 'No data';
$card2_description = get_field('card2_description') ?: 'No data';
$card2_btn_text    = get_field('card2_btn_text') ?: 'No data';
$card2_btn_link    = get_field('card2_btn_link') ?: 'No data';

// Card 3 - Work with Volunteer
$card3_title       = get_field('card3_title') ?: 'No data';
$card3_description = get_field('card3_description') ?: 'No data';
$card3_btn_text    = get_field('card3_btn_text') ?: 'No data';
$card3_btn_link    = get_field('card3_btn_link') ?: 'No data';

// CTA
$cta_title      = get_field('cta_title') ?: 'No data';
$cta_description = get_field('cta_description') ?: 'No data';
$cta_card1_text  = get_field('cta_card1_text') ?: 'No data';
$cta_card1_link  = get_field('cta_card1_link') ?: 'No data';
$cta_btn2_text  = get_field('cta_card2_text') ?: 'No data';
$cta_btn2_link  = get_field('cta_card2_link') ?: 'No data';
?>

<main class="bg-[#F7F5F4] min-h-screen font-sans antialiased">

  <!-- Hero Section -->
  <section class="max-w-4xl mx-auto px-4 pt-20 pb-16 text-center">
    <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold tracking-tight mb-6 text-[#623D3C] leading-tight">
      <?php echo esc_html($hero_header); ?>
    </h1>
    <p class="text-lg md:text-xl text-[#623D3C]/80 leading-relaxed max-w-3xl mx-auto">
      <?php echo esc_html($hero_title); ?>
    </p>
  </section>

  <!-- Cards Section -->
  <section class="max-w-6xl mx-auto px-6 pb-24">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

      <!-- Card Donation -->
      <div class="bg-[#DDB0D1] hover:bg-[#DDB0D1]/95 rounded-3xl shadow-xl p-8 flex flex-col justify-between transition-all duration-300 transform hover:-translate-y-1 hover:shadow-2xl border border-white/30 group">
        <div class="mb-8">
          <div class="mb-6 p-4 bg-white/20 rounded-full w-16 h-16 flex items-center justify-center backdrop-blur-md shadow-sm border border-white/20 transition-transform duration-300 group-hover:scale-110">
            <img src="<?php echo get_theme_file_uri('assets/icons/donation.png'); ?>"
                 alt="Donation Icon"
                 loading="lazy"
                 class="w-8 h-8 object-contain filter drop-shadow-[0_2px_4px_rgba(0,0,0,0.06)]" />
          </div>
          <h3 class="text-2xl font-bold text-[#623D3C] mb-4 tracking-tight"><?php echo esc_html($card1_title); ?></h3>
          <p class="text-[#623D3C]/80 text-sm leading-relaxed">
            <?php echo esc_html($card1_description); ?>
          </p>
        </div>
          <a class="inline-flex items-center gap-2 text-[#623D3C] font-bold transition-all duration-300 focus:outline-none focus:underline no-underline" href="<?php echo esc_url($card1_btn_link); ?>">
        <span class="relative py-1">
          <?php echo esc_html($card1_btn_text); ?>
          <span class="absolute left-0 bottom-0 h-[2px] w-0 bg-[#623D3C] transition-all duration-300 group-hover:w-full"></span>
        </span>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1.5" aria-hidden="true">
          <path d="M5 12h14"></path>
          <path d="m12 5 7 7-7 7"></path>
        </svg>
      </a>
      </div>

      <!-- Card Join Hands-->
      <div class="bg-[#8BAEA7] hover:bg-[#8BAEA7]/95 rounded-3xl shadow-xl p-8 flex flex-col justify-between transition-all duration-300 transform hover:-translate-y-1 hover:shadow-2xl border border-white/30 group">
        <div class="mb-8">
          <div class="mb-6 p-4 bg-white/20 rounded-full w-16 h-16 flex items-center justify-center backdrop-blur-md shadow-sm border border-white/20 transition-transform duration-300 group-hover:scale-110">
            <img src="<?php echo get_theme_file_uri('assets/icons/cooperation.png'); ?>"
                 alt="Cooperation Icon"
                 loading="lazy"
                 class="w-8 h-8 object-contain filter drop-shadow-[0_2px_4px_rgba(0,0,0,0.06)]" />
          </div>
          <h3 class="text-2xl font-bold text-white mb-4 tracking-tight"><?php echo esc_html($card2_title); ?></h3>
          <p class="text-white/90 text-sm leading-relaxed">
            <?php echo esc_html($card2_description); ?>
          </p>
        </div>
        <a class="inline-flex items-center gap-2 text-white font-bold transition-all duration-300 focus:outline-none focus:underline" href="<?php echo esc_url($card2_btn_link); ?>">
          <span class="relative py-1">
            <?php echo esc_html($card2_btn_text); ?>
            <span class="absolute left-0 bottom-0 h-[2px] w-0 bg-white transition-all duration-300 group-hover:w-full"></span>
          </span>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1.5" aria-hidden="true">
            <path d="M5 12h14"></path>
            <path d="m12 5 7 7-7 7"></path>
          </svg>
        </a>
      </div>

      <!-- Card Work with Volunteer -->
      <div class="bg-[#623D3C] hover:bg-[#623D3C]/95 rounded-3xl shadow-xl p-8 flex flex-col justify-between transition-all duration-300 transform hover:-translate-y-1 hover:shadow-2xl border border-white/30 group">
        <div class="mb-8">
          <div class="mb-6 p-4 bg-white/20 rounded-full w-16 h-16 flex items-center justify-center backdrop-blur-md shadow-sm border border-white/20 transition-transform duration-300 group-hover:scale-110">
            <img src="<?php echo get_theme_file_uri('assets/icons/group.png'); ?>"
                 alt="Volunteer Icon"
                 loading="lazy"
                 class="w-8 h-8 object-contain filter drop-shadow-[0_2px_4px_rgba(0,0,0,0.06)]" />
          </div>
          <h3 class="text-2xl font-bold text-white mb-4 tracking-tight"><?php echo esc_html($card3_title); ?></h3>
          <p class="text-white/90 text-sm leading-relaxed">
            <?php echo esc_html($card3_description); ?>
          </p>
        </div>
        <a class="inline-flex items-center gap-2 text-white font-bold transition-all duration-300 focus:outline-none focus:underline" href="<?php echo esc_url($card3_btn_link); ?>">
          <span class="relative py-1">
            <?php echo esc_html($card3_btn_text); ?>
            <span class="absolute left-0 bottom-0 h-[2px] w-0 bg-white transition-all duration-300 group-hover:w-full"></span>
          </span>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1.5" aria-hidden="true">
            <path d="M5 12h14"></path>
            <path d="m12 5 7 7-7 7"></path>
          </svg>
        </a>
      </div>

    </div>
  </section>

  <!-- CTA Section -->
  <section class="bg-white py-24 border-t border-brand-brown/5">
    <div class="max-w-4xl mx-auto text-center px-6">
      <h2 class="text-3xl md:text-4xl font-bold text-brand-brown mb-6 tracking-tight">
        <?php echo esc_html($cta_title); ?>
      </h2>
      <p class="text-lg text-brand-brown/80 mb-10 leading-relaxed max-w-2xl mx-auto">
        <?php echo esc_html($cta_description); ?>
      </p>
      <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
        <a class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-8 py-4 bg-brand-brown hover:bg-brand-brown/90 text-white font-semibold rounded-full transition-all duration-300 transform hover:-translate-y-0.5 focus:outline-none focus:ring-4 focus:ring-brand-brown/20" href="<?php echo esc_url($cta_card1_link); ?>">
          <span><?php echo esc_html($cta_card1_text); ?></span>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4" aria-hidden="true">
            <path d="M5 12h14"></path>
            <path d="m12 5 7 7-7 7"></path>
          </svg>
        </a>
        <a class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-8 py-4 border-2 border-brand-brown text-brand-brown hover:bg-brand-brown hover:text-white font-semibold rounded-full transition-all duration-300 transform hover:-translate-y-0.5 focus:outline-none focus:ring-4 focus:ring-brand-brown/5" href="<?php echo esc_url($cta_btn2_link); ?>">
          <span><?php echo esc_html($cta_btn2_text); ?></span>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4" aria-hidden="true">
            <path d="M5 12h14"></path>
            <path d="m12 5 7 7-7 7"></path>
          </svg>
        </a>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>