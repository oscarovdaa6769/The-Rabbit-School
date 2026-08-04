<?php
/*
Template Name: Get Involved
*/
get_header();
?>

<style>
  /* Root & Body background color fallback to prevent white flash during navigation */
  html {
    background-color: #FDFBF7;
  }
  
  /* Page Load Animation */
  body {
    background-color: #FDFBF7;
    opacity: 0;
    transition: opacity 0.4s ease-in-out;
  }
  body.loaded {
    opacity: 1;
  }
  body.fade-out {
    opacity: 0;
  }

  /* Keyframe Animations Matching Other Pages */
  @keyframes fadeUp {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
  }
  @keyframes slideInLeft {
      from { opacity: 0; transform: translateX(-30px); }
      to { opacity: 1; transform: translateX(0); }
  }
  @keyframes slideInRight {
      from { opacity: 0; transform: translateX(30px); }
      to { opacity: 1; transform: translateX(0); }
  }
  .anim-fade-up {
      opacity: 0;
      animation: fadeUp 0.6s ease-out forwards;
  }
  .anim-slide-left {
      opacity: 0;
      animation: slideInLeft 0.6s ease-out forwards;
  }
  .anim-slide-right {
      opacity: 0;
      animation: slideInRight 0.6s ease-out forwards;
  }
  .anim-delay-1 { animation-delay: 0.1s; }
  .anim-delay-2 { animation-delay: 0.2s; }
  .anim-delay-3 { animation-delay: 0.3s; }
  .anim-delay-4 { animation-delay: 0.4s; }
  .anim-delay-5 { animation-delay: 0.5s; }

  /* Click ripple + press animation */
  .click-fx {
    position: relative;
    overflow: hidden;
    -webkit-tap-highlight-color: transparent;
    transition: transform 0.15s ease;
  }
  .click-fx:active {
    transform: scale(0.97);
  }
  .click-fx .ripple {
    position: absolute;
    border-radius: 9999px;
    transform: scale(0);
    background: rgba(255, 255, 255, 0.55);
    pointer-events: none;
    animation: click-ripple 0.6s ease-out;
  }
  .click-fx--dark .ripple {
    background: rgba(98, 61, 60, 0.25);
  }
  @keyframes click-ripple {
    to {
      transform: scale(2.5);
      opacity: 0;
    }
  }

  /* Global full-page ripple */
  .page-ripple {
    position: fixed;
    border-radius: 9999px;
    background: rgba(98, 61, 60, 0.15);
    transform: translate(-50%, -50%) scale(0);
    pointer-events: none;
    z-index: 9999;
    animation: page-ripple-anim 0.7s ease-out forwards;
  }
  @keyframes page-ripple-anim {
    to {
      transform: translate(-50%, -50%) scale(1);
      opacity: 0;
    }
  }
</style>

<?php
// Hero Section
$hero_header = get_field('hero_header') ?: __('HERO HEADER NOT WORKING', 'your-theme-domain');
$hero_title  = get_field('hero_title') ?: __('HERO TITLE NOT WORKING', 'your-theme-domain');

// Card 1 - Donation
$card1_icon        = get_field('card1_icon') ?: get_theme_file_uri('assets/icons/cart.png');
$card1_title       = get_field('card_title') ?: __('CARD 1 TITLE NOT WORKING', 'your-theme-domain');
$card1_description = get_field('card1_description') ?: __('CARD 1 DESC NOT WORKING', 'your-theme-domain');
$card1_btn_text    = get_field('card1_btn_text') ?: __('BTN 1 NOT WORKING', 'your-theme-domain');
$card1_btn_link    = get_field('card1_btn_link') ?: '#';

// Card 2 - Join Hands
$card2_icon        = get_field('card2_icon') ?: get_theme_file_uri('assets/icons/cooperation.png');
$card2_title       = get_field('card2_title') ?: __('CARD 2 TITLE NOT WORKING', 'your-theme-domain');
$card2_description = get_field('card2_description') ?: __('CARD 2 DESC NOT WORKING', 'your-theme-domain');
$card2_btn_text    = get_field('card2_btn_text') ?: __('BTN 2 NOT WORKING', 'your-theme-domain');
$card2_btn_link    = get_field('card2_btn_link') ?: '#';

// Card 3 - Work with Volunteer
$card3_icon        = get_field('card3_icon') ?: get_theme_file_uri('assets/icons/group.png');
$card3_title       = get_field('card3_title') ?: __('CARD 3 TITLE NOT WORKING', 'your-theme-domain');
$card3_description = get_field('card3_description') ?: __('CARD 3 DESC NOT WORKING', 'your-theme-domain');
$card3_btn_text    = get_field('card3_btn_text') ?: __('BTN 3 NOT WORKING', 'your-theme-domain');
$card3_btn_link    = get_field('card3_btn_link') ?: '#';

// CTA Section
$cta_title       = get_field('cta_title') ?: __('CTA TITLE NOT WORKING', 'your-theme-domain');
$cta_description = get_field('cta_description') ?: __('CTA DESC NOT WORKING', 'your-theme-domain');
$cta_card1_text  = get_field('cta_card1_text') ?: __('CTA BTN 1 NOT WORKING', 'your-theme-domain');
$cta_card1_link  = get_field('cta_card1_link') ?: '#';
$cta_btn2_text   = get_field('cta_card2_text') ?: __('CTA BTN 2 NOT WORKING', 'your-theme-domain');
$cta_btn2_link   = get_field('cta_card2_link') ?: '#';
?>

<main class="min-h-screen">

  <!-- Hero Section -->
  <section class="py-16 md:py-24 px-6 text-center bg-white border-b border-gray-100">
    <div class="anim-fade-up max-w-4xl mx-auto">
      <h1 class="text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-heading font-black tracking-tight mb-4 md:mb-6 text-brand-brown uppercase leading-tight">
        <?php echo esc_html($hero_header); ?>
      </h1>
      <p class="text-[14px] sm:text-[15px] md:text-[16px] lg:text-[18px] text-text-main/80 leading-relaxed max-w-3xl mx-auto font-medium">
        <?php echo esc_html($hero_title); ?>
      </p>
    </div>
  </section>

  <!-- Cards Section -->
  <section class="max-w-7xl mx-auto px-6 py-16 md:py-24">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

      <!-- Card Donation -->
      <div class="anim-slide-left anim-delay-1 click-fx bg-[#DDB0D1] hover:bg-[#DDB0D1]/95 rounded-[24px] shadow-xl p-8 flex flex-col justify-between transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl border border-white/30 group">
        <div class="mb-8">
          <div class="mb-6 p-4 bg-white/20 rounded-full w-16 h-16 flex items-center justify-center backdrop-blur-md shadow-sm border border-white/20 transition-transform duration-300 group-hover:scale-110">
            <img src="<?php echo esc_url($card1_icon); ?>"
                 alt=""
                 loading="lazy"
                 class="w-8 h-8 object-contain filter drop-shadow-[0_2px_4px_rgba(0,0,0,0.06)]" />
          </div>
          <h3 class="text-[24px] md:text-[28px] font-heading font-bold text-brand-brown mb-4 tracking-tight"><?php echo esc_html($card1_title); ?></h3>
          <p class="text-text-main/90 text-[14px] sm:text-[15px] leading-relaxed font-medium">
            <?php echo esc_html($card1_description); ?>
          </p>
        </div>
        <?php if (!empty($card1_btn_text)) : ?>
        <a class="inline-flex items-center gap-3 text-brand-brown font-bold text-sm transition-all duration-300 focus:outline-none focus:underline no-underline uppercase tracking-widest group" href="<?php echo esc_url($card1_btn_link); ?>">
          <span class="relative py-1">
            <?php echo esc_html($card1_btn_text); ?>
            <span class="absolute left-0 bottom-0 h-[2px] w-0 bg-brand-brown transition-all duration-300 group-hover:w-full"></span>
          </span>
          <span class="icon-[solar--arrow-right-linear] w-5 h-5 transition-transform duration-300 group-hover:translate-x-1"></span>
        </a>
        <?php endif; ?>
      </div>

      <!-- Card Join Hands -->
      <div class="anim-fade-up anim-delay-2 click-fx bg-[#8BAEA7] hover:bg-[#8BAEA7]/95 rounded-[24px] shadow-xl p-8 flex flex-col justify-between transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl border border-white/30 group">
        <div class="mb-8">
          <div class="mb-6 p-4 bg-white/20 rounded-full w-16 h-16 flex items-center justify-center backdrop-blur-md shadow-sm border border-white/20 transition-transform duration-300 group-hover:scale-110">
            <img src="<?php echo esc_url($card2_icon); ?>"
                 alt=""
                 loading="lazy"
                 class="w-8 h-8 object-contain filter drop-shadow-[0_2px_4px_rgba(0,0,0,0.06)]" />
          </div>
          <h3 class="text-[24px] md:text-[28px] font-heading font-bold text-text-light mb-4 tracking-tight"><?php echo esc_html($card2_title); ?></h3>
          <p class="text-text-light/90 text-[14px] sm:text-[15px] leading-relaxed font-medium">
            <?php echo esc_html($card2_description); ?>
          </p>
        </div>
        <?php if (!empty($card2_btn_text)) : ?>
        <a class="inline-flex items-center gap-3 text-text-light font-bold text-sm transition-all duration-300 focus:outline-none focus:underline uppercase tracking-widest group" href="<?php echo esc_url($card2_btn_link); ?>">
          <span class="relative py-1">
            <?php echo esc_html($card2_btn_text); ?>
            <span class="absolute left-0 bottom-0 h-[2px] w-0 bg-text-light transition-all duration-300 group-hover:w-full"></span>
          </span>
          <span class="icon-[solar--arrow-right-linear] w-5 h-5 transition-transform duration-300 group-hover:translate-x-1"></span>
        </a>
        <?php endif; ?>
      </div>

      <!-- Card Work with Volunteer -->
      <div class="anim-slide-right anim-delay-3 click-fx bg-brand-brown hover:bg-brand-brown/95 rounded-[24px] shadow-xl p-8 flex flex-col justify-between transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl border border-white/30 group">
        <div class="mb-8">
          <div class="mb-6 p-4 bg-white/20 rounded-full w-16 h-16 flex items-center justify-center backdrop-blur-md shadow-sm border border-white/20 transition-transform duration-300 group-hover:scale-110">
            <img src="<?php echo esc_url($card3_icon); ?>"
                 alt=""
                 loading="lazy"
                 class="w-8 h-8 object-contain filter drop-shadow-[0_2px_4px_rgba(0,0,0,0.06)]" />
          </div>
          <h3 class="text-[24px] md:text-[28px] font-heading font-bold text-text-light mb-4 tracking-tight"><?php echo esc_html($card3_title); ?></h3>
          <p class="text-text-light/90 text-[14px] sm:text-[15px] leading-relaxed font-medium">
            <?php echo esc_html($card3_description); ?>
          </p>
        </div>
        <?php if (!empty($card3_btn_text)) : ?>
        <a class="inline-flex items-center gap-3 text-text-light font-bold text-sm transition-all duration-300 focus:outline-none focus:underline uppercase tracking-widest group" href="<?php echo esc_url($card3_btn_link); ?>">
          <span class="relative py-1">
            <?php echo esc_html($card3_btn_text); ?>
            <span class="absolute left-0 bottom-0 h-[2px] w-0 bg-text-light transition-all duration-300 group-hover:w-full"></span>
          </span>
          <span class="icon-[solar--arrow-right-linear] w-5 h-5 transition-transform duration-300 group-hover:translate-x-1"></span>
        </a>
        <?php endif; ?>
      </div>

    </div>
  </section>

  <!-- CTA Section -->
  <section class="bg-white py-20 md:py-24 border-t border-brand-brown/5 px-6">
    <div class="anim-fade-up anim-delay-4 max-w-4xl mx-auto text-center">
      <h2 class="text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-heading font-black text-brand-brown mb-6 tracking-tight uppercase">
        <?php echo esc_html($cta_title); ?>
      </h2>
      <p class="text-[14px] sm:text-[15px] md:text-[16px] lg:text-[18px] text-text-main/80 mb-10 leading-relaxed max-w-2xl mx-auto font-medium">
        <?php echo esc_html($cta_description); ?>
      </p>
      <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
        <?php if (!empty($cta_card1_text)) : ?>
        <a class="click-fx click-fx--dark w-full sm:w-auto inline-flex items-center justify-center gap-3 px-8 py-4 bg-brand-brown hover:bg-brand-brown/90 text-text-light font-bold text-sm rounded-[8px] shadow-lg hover:scale-105 active:scale-95 transition-all uppercase tracking-widest group" href="<?php echo esc_url($cta_card1_link); ?>">
          <span><?php echo esc_html($cta_card1_text); ?></span>
          <span class="icon-[solar--arrow-right-linear] w-5 h-5 transition-transform duration-300 group-hover:translate-x-1"></span>
        </a>
        <?php endif; ?>

        <?php if (!empty($cta_btn2_text)) : ?>
        <a class="click-fx w-full sm:w-auto inline-flex items-center justify-center gap-3 px-8 py-4 border-2 border-brand-brown text-brand-brown hover:bg-brand-brown hover:text-text-light font-bold text-sm rounded-[8px] shadow-md transition-all uppercase tracking-widest group" href="<?php echo esc_url($cta_btn2_link); ?>">
          <span><?php echo esc_html($cta_btn2_text); ?></span>
          <span class="icon-[solar--arrow-right-linear] w-5 h-5 transition-transform duration-300 group-hover:translate-x-1"></span>
        </a>
        <?php endif; ?>
      </div>
    </div>
  </section>

</main>

<script>
document.addEventListener("DOMContentLoaded", function () {
  // Trigger page visibility load smoothly
  document.body.classList.add("loaded");

  // Local ripple + press effect on elements with .click-fx
  document.querySelectorAll('.click-fx').forEach(function (el) {
    el.addEventListener('click', function (e) {
      var rect = el.getBoundingClientRect();
      var ripple = document.createElement('span');
      var size = Math.max(rect.width, rect.height);
      var x = e.clientX - rect.left - size / 2;
      var y = e.clientY - rect.top - size / 2;

      ripple.className = 'ripple';
      ripple.style.width = ripple.style.height = size + 'px';
      ripple.style.left = x + 'px';
      ripple.style.top = y + 'px';

      el.appendChild(ripple);
      ripple.addEventListener('animationend', function () {
        ripple.remove();
      });
    });
  });

  // Global full-page click ripple effect
  document.addEventListener('click', function (e) {
    var size = 24;
    var ripple = document.createElement('span');
    ripple.className = 'page-ripple';
    ripple.style.width = size + 'px';
    ripple.style.height = size + 'px';
    ripple.style.left = e.clientX + 'px';
    ripple.style.top = e.clientY + 'px';

    document.body.appendChild(ripple);
    ripple.addEventListener('animationend', function () {
      ripple.remove();
    });
  });
});
</script>

<?php get_footer(); ?>