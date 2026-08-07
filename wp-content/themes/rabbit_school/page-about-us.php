<?php
/*
Template Name: About Us
*/
get_header();?>

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

  /* Keyframe Animations Matching Get Involved / Volunteer / Donate / Contact / Where We Work Pages */
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

<!-- SECTION 1: HERO -->
<section class="relative overflow-hidden">
  <img src="<?php echo esc_url(get_field('section_1_image') ?: get_theme_file_uri('assets/images/error.png')); ?>"
      alt="<?php echo esc_attr(get_field('section_1_title') ?: 'Error'); ?>"
      class="h-[500px] md:h-[700px] w-full object-cover">

  <div class="absolute inset-0 z-10 bg-black/30 flex items-end">
    <div class="w-full max-w-7xl mx-auto py-[64px] md:py-[50px] px-[20px] 2xl:px-0">
      <div class="anim-fade-up max-w-2xl text-text-light">
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
      <div class="anim-slide-left anim-delay-1 relative">
        <div class="absolute -top-4 -right-4 w-full h-full border-2 border-brand-yellow rounded-2xl -z-10 hidden md:block"></div>
        <div class="w-full aspect-[4/3] md:aspect-video rounded-[24px] overflow-hidden shadow-2xl transition-transform duration-500 hover:scale-[1.02]">
          <img src="<?php echo esc_url(get_field('section_2_image') ?: get_theme_file_uri('assets/images/error.png')); ?>" 
               alt="<?php echo esc_attr(get_field('section_2_title') ?: 'Error'); ?>" 
               class="h-full w-full object-cover">
        </div>
      </div>
      <!-- Content Right -->
      <div class="anim-slide-right anim-delay-2 flex flex-col">
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
<section class="bg-brand-brown py-[64px] md:py-[50px] px-[20px] 2xl:px-0">
  <div class="max-w-7xl mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 lg:gap-20 items-center">
      <!-- Content Left -->
      <div class="anim-slide-left anim-delay-1 flex flex-col">
        <h2 class="text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-heading font-bold text-text-light mb-6 leading-tight uppercase">
          <?php echo esc_html(get_field('section_3_title') ?: 'Error'); ?>
        </h2>
        <p class="text-text-light text-[14px] sm:text-[15px] md:text-[16px] lg:text-[18px] leading-relaxed opacity-90">
          <?php echo esc_html(get_field('section_3_description') ?: 'Error'); ?>
        </p>
      </div>
      <!-- Image Right -->
      <div class="anim-slide-right anim-delay-2 relative">
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
      <div class="anim-slide-left anim-delay-1 relative">
        <div class="absolute -top-4 -right-4 w-full h-full border-2 border-brand-yellow rounded-2xl -z-10 hidden md:block"></div>
        <div class="w-full aspect-[4/3] md:aspect-video rounded-[24px] overflow-hidden shadow-2xl transition-transform duration-500 hover:scale-[1.02]">
          <img src="<?php echo esc_url(get_field('section_4_image') ?: get_theme_file_uri('assets/images/error.png')); ?>" 
               alt="<?php echo esc_attr(get_field('section_4_title') ?: 'Error'); ?>" 
               class="h-full w-full object-cover">
        </div>
      </div>
      <!-- Content Right -->
      <div class="anim-slide-right anim-delay-2 flex flex-col">
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
      <div class="anim-slide-left anim-delay-1 flex flex-col">
        <h2 class="text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-heading font-bold text-text-light mb-6 leading-tight uppercase">
          <?php echo esc_html(get_field('section_5_title') ?: 'Error'); ?>
        </h2>
        <p class="text-text-light/90 text-[14px] sm:text-[15px] md:text-[16px] lg:text-[18px] leading-relaxed">
          <?php echo esc_html(get_field('section_5_description') ?: 'Error'); ?>
        </p>
      </div>
      <!-- Image Right -->
      <div class="anim-slide-right anim-delay-2 relative">
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
  <div class="anim-fade-up max-w-4xl mx-auto">
    <h2 class="text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-heading font-bold text-text-light mb-6 leading-tight uppercase">
      <?php echo esc_html(get_field('section_6_title') ?: 'Error'); ?>
    </h2>
    <p class="text-text-light/90 text-[14px] sm:text-[15px] md:text-[16px] lg:text-[18px] leading-relaxed">
      <?php echo esc_html(get_field('section_6_description') ?: 'Error'); ?>
    </p>
  </div>
</section>



<script>
document.addEventListener("DOMContentLoaded", function () {
  // Trigger page visibility load
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