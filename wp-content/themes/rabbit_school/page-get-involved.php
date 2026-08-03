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
$card1_btn_link    = get_field('card1_btn_link') ?: 'No data';

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
$cta_title       = get_field('cta_title') ?: 'No data';
$cta_description = get_field('cta_description') ?: 'No data';
$cta_card1_text  = get_field('cta_card1_text') ?: 'No data';
$cta_card1_link  = get_field('cta_card1_link') ?: 'No data';
$cta_btn2_text   = get_field('cta_card2_text') ?: 'No data';
$cta_btn2_link   = get_field('cta_card2_link') ?: 'No data';
?>

<style>
  /* Page Load & Exit Animation */
  body {
    opacity: 0;
    transition: opacity 0.4s ease-in-out;
  }
  body.loaded {
    opacity: 1;
  }
  body.fade-out {
    opacity: 0;
  }

  /* Keyframe Animations Matching Contact Page */
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

<main class="bg-[#F7F5F4] min-h-screen font-sans antialiased">

  <!-- Hero Section -->
  <section class="py-16 md:py-20 px-6 text-center bg-white border-b border-gray-100">
    <div class="anim-fade-up max-w-4xl mx-auto">
      <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold tracking-tight mb-4 md:mb-6 text-[#623D3C] leading-tight">
        <?php echo esc_html($hero_header); ?>
      </h1>
      <p class="text-lg md:text-xl text-[#623D3C]/80 leading-relaxed max-w-3xl mx-auto">
        <?php echo esc_html($hero_title); ?>
      </p>
    </div>
  </section>

  <!-- Cards Section -->
  <section class="max-w-6xl mx-auto px-6 py-16 md:py-24">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

      <!-- Card Donation -->
      <div class="anim-slide-left anim-delay-1 click-fx bg-[#DDB0D1] hover:bg-[#DDB0D1]/95 rounded-3xl shadow-xl p-8 flex flex-col justify-between transition-all duration-300 transform hover:-translate-y-1 hover:shadow-2xl border border-white/30 group">
        <div class="mb-8">
          <div class="mb-6 p-4 bg-white/20 rounded-full w-16 h-16 flex items-center justify-center backdrop-blur-md shadow-sm border border-white/20 transition-transform duration-300 group-hover:scale-110">
            <img src="<?php echo get_theme_file_uri('assets/icons/cart.png'); ?>"
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

      <!-- Card Join Hands -->
      <div class="anim-fade-up anim-delay-2 click-fx bg-[#8BAEA7] hover:bg-[#8BAEA7]/95 rounded-3xl shadow-xl p-8 flex flex-col justify-between transition-all duration-300 transform hover:-translate-y-1 hover:shadow-2xl border border-white/30 group">
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
      <div class="anim-slide-right anim-delay-3 click-fx bg-[#623D3C] hover:bg-[#623D3C]/95 rounded-3xl shadow-xl p-8 flex flex-col justify-between transition-all duration-300 transform hover:-translate-y-1 hover:shadow-2xl border border-white/30 group">
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
    <div class="anim-fade-up anim-delay-4 max-w-4xl mx-auto text-center px-6">
      <h2 class="text-3xl md:text-4xl font-bold text-brand-brown mb-6 tracking-tight">
        <?php echo esc_html($cta_title); ?>
      </h2>
      <p class="text-lg text-brand-brown/80 mb-10 leading-relaxed max-w-2xl mx-auto">
        <?php echo esc_html($cta_description); ?>
      </p>
      <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
        <a class="click-fx w-full sm:w-auto inline-flex items-center justify-center gap-2 px-8 py-4 bg-brand-brown hover:bg-brand-brown/90 text-white font-semibold rounded-full transition-all duration-300 transform hover:-translate-y-0.5 focus:outline-none focus:ring-4 focus:ring-brand-brown/20" href="<?php echo esc_url($cta_card1_link); ?>">
          <span><?php echo esc_html($cta_card1_text); ?></span>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4" aria-hidden="true">
            <path d="M5 12h14"></path>
            <path d="m12 5 7 7-7 7"></path>
          </svg>
        </a>
        <a class="click-fx click-fx--dark w-full sm:w-auto inline-flex items-center justify-center gap-2 px-8 py-4 border-2 border-brand-brown text-brand-brown hover:bg-brand-brown hover:text-white font-semibold rounded-full transition-all duration-300 transform hover:-translate-y-0.5 focus:outline-none focus:ring-4 focus:ring-brand-brown/5" href="<?php echo esc_url($cta_btn2_link); ?>">
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

<script>
document.addEventListener("DOMContentLoaded", function () {
  // Trigger page visibility load
  document.body.classList.add("loaded");

  // Local ripple + press effect on cards and buttons (.click-fx)
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

  // Smooth fade-out action when clicking internal links
  document.querySelectorAll('a').forEach(function(link) {
    link.addEventListener('click', function(e) {
      var href = this.getAttribute('href');
      if (href && !href.startsWith('#') && !href.startsWith('javascript') && this.hostname === window.location.hostname) {
        e.preventDefault();
        document.body.classList.add('fade-out');
        setTimeout(function() {
          window.location.href = href;
        }, 400);
      }
    });
  });
});
</script>

<?php get_footer(); ?>