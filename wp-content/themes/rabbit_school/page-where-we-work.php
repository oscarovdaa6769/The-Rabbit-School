<?php
/*
Template Name: Where We Work
*/
get_header();
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

  /* Keyframe Animations Matching Get Involved / Volunteer / Donate / Contact Pages */
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
  .anim-delay-6 { animation-delay: 0.6s; }

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
  <img src="<?php echo get_theme_file_uri('assets/images/error.png'); ?>" 
  alt="hero-banner" 
  class="h-[500px] md:h-[700px] w-full object-cover">
  
  <div class="absolute inset-0 z-10 bg-black/30 flex items-end">
    <div class="w-full max-w-7xl mx-auto py-[64px] md:py-[50px] px-[20px] 2xl:px-0">
      <div class="anim-fade-up max-w-2xl text-text-light">
        <h1 class="font-heading text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-black leading-tight mb-[10px] md:mb-[20px] uppercase">
          hello
        </h1>
        <p class="text-[14px] sm:text-[15px] md:text-[16px] lg:text-[18px] leading-relaxed opacity-90">
          hello world
        </p>
      </div>
    </div>
  </div>
</section>

<!-- SECTION 2: OUR LOCATION -->
<section class="bg-brand-cream py-[64px] md:py-[50px] px-[20px] 2xl:px-0">
  <div class="max-w-7xl mx-auto">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-[30px] lg:gap-[50px] items-stretch">
      
      <!-- Left Column -->
      <div class="anim-slide-left anim-delay-1 flex flex-col gap-[20px]">
        <h2 class="text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] text-text-main uppercase font-heading font-black leading-tight">
          our location
        </h2>
        <p class="text-[14px] sm:text-[15px] md:text-[16px] lg:text-[18px] text-text-muted">
          We work in different communities to bring quality education and a brighter future for children.
        </p>

        <!-- Yellow Location Card -->
        <div class="click-fx click-fx--dark group bg-white p-[16px] md:p-[24px] rounded-[28px] border-l-6 border-brand-yellow flex gap-[20px] items-start shadow-md hover:shadow-xl transition-shadow duration-300">
          <div class="w-16 h-16 bg-brand-yellow/20 rounded-full flex items-center justify-center flex-shrink-0">
            <span class="icon-[solar--map-point-bold] w-6 h-6 text-brand-yellow flex-shrink-0 transition-transform duration-500 group-hover:rotate-45"></span>
          </div>
          <div>
            <h3 class="text-[16px] sm:text-[18px] md:text-[20px] uppercase font-bold text-brand-yellow">
              phnom penh
            </h3>
            <p class="text-[14px] sm:text-[15px] md:text-[16px] text-text-muted mt-1">
              Main Campus & Training Center
            </p>
          </div>
        </div>

        <!-- Blue Location Card -->
        <div class="click-fx click-fx--dark group bg-white p-[16px] md:p-[24px] rounded-[28px] border-l-6 border-brand-blue flex gap-[20px] items-start shadow-md hover:shadow-xl transition-shadow duration-300">
          <div class="w-16 h-16 bg-brand-blue/20 rounded-full flex items-center justify-center flex-shrink-0">
            <span class="icon-[solar--map-point-bold] w-6 h-6 text-brand-blue flex-shrink-0 transition-transform duration-500 group-hover:rotate-45"></span>
          </div>
          <div>
            <h3 class="text-[16px] sm:text-[18px] md:text-[20px] uppercase font-bold text-brand-blue">
              Siem Reap
            </h3>
            <p class="text-[14px] sm:text-[15px] md:text-[16px] text-text-muted mt-1">
              Community Learning Center
            </p>
          </div>
        </div>

        <!-- Pink Location Card -->
        <div class="click-fx click-fx--dark group bg-white p-[16px] md:p-[24px] rounded-[28px] border-l-6 border-brand-pink flex gap-[20px] items-start shadow-md hover:shadow-xl transition-shadow duration-300">
          <div class="w-16 h-16 bg-brand-pink/20 rounded-full flex items-center justify-center flex-shrink-0">
            <span class="icon-[solar--map-point-bold] w-6 h-6 text-brand-pink flex-shrink-0 transition-transform duration-500 group-hover:rotate-45"></span>
          </div>
          <div>
            <h3 class="text-[16px] sm:text-[18px] md:text-[20px] uppercase font-bold text-brand-pink">
              Battambang
            </h3>
            <p class="text-[14px] sm:text-[15px] md:text-[16px] text-text-muted mt-1">
              Education Support Program
            </p>
          </div>
        </div>

        <!-- Orange Location Card -->
        <div class="click-fx click-fx--dark group bg-white p-[16px] md:p-[24px] rounded-[28px] border-l-6 border-brand-orange flex gap-[20px] items-start shadow-md hover:shadow-xl transition-shadow duration-300">
          <div class="w-16 h-16 bg-brand-orange/20 rounded-full flex items-center justify-center flex-shrink-0">
            <span class="icon-[solar--map-point-bold] w-6 h-6 text-brand-orange flex-shrink-0 transition-transform duration-500 group-hover:rotate-45"></span>
          </div>
          <div>
            <h3 class="text-[16px] sm:text-[18px] md:text-[20px] uppercase font-bold text-brand-orange">
              Kampong Cham
            </h3>
            <p class="text-[14px] sm:text-[15px] md:text-[16px] text-text-muted mt-1">
              Community Outreach Program
            </p>
          </div>
        </div>
      </div>

      <!-- Right Column: Location Map Image -->
      <div class="anim-slide-right anim-delay-2 w-full h-full min-h-[400px] rounded-[28px] overflow-hidden">
        <img src="<?php echo get_theme_file_uri('assets/images/error.png'); ?>" alt="Map or Location Image" class="w-full h-full object-cover">
      </div>

    </div>
  </div>
</section>

<!-- SECTION 3: WHAT WE SERVE & OUR IMPACT -->
<section class="bg-brand-teal py-[64px] md:py-[50px] px-[20px] 2xl:px-0">
  <div class="max-w-7xl mx-auto">
    <!-- Equal 2-Column Grid (50/50 Split) -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-[30px] lg:gap-[50px] items-stretch">
      
      <!-- Left Column: What We Serve -->
      <div class="anim-slide-left anim-delay-1 flex flex-col gap-[20px]">
        <h2 class="text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] text-text-light uppercase font-heading font-black leading-tight">
          what we serve
        </h2>

        <div class="flex flex-col gap-[20px] h-full justify-between">
          <!-- Yellow Service Card -->
          <div class="click-fx click-fx--dark group bg-white p-[16px] md:p-[24px] rounded-[28px] border-l-6 border-brand-yellow flex gap-[20px] items-start shadow-md hover:shadow-xl transition-all duration-300">
            <div class="w-16 h-16 bg-brand-yellow/20 rounded-full flex items-center justify-center flex-shrink-0">
              <span class="icon-[lucide--graduation-cap] w-6 h-6 text-brand-yellow flex-shrink-0 transition-transform duration-500 group-hover:rotate-45"></span>
            </div>
            <div>
              <h3 class="text-[16px] sm:text-[18px] md:text-[20px] uppercase font-bold text-brand-yellow">
                school
              </h3>
              <p class="text-[14px] sm:text-[15px] md:text-[16px] text-text-muted mt-1">
                Supporting students with quality education
              </p>
            </div>
          </div>

          <!-- Blue Service Card -->
          <div class="click-fx click-fx--dark group bg-white p-[16px] md:p-[24px] rounded-[28px] border-l-6 border-brand-blue flex gap-[20px] items-start shadow-md hover:shadow-xl transition-all duration-300">
            <div class="w-16 h-16 bg-brand-blue/20 rounded-full flex items-center justify-center flex-shrink-0">
              <span class="icon-[lucide--users] w-6 h-6 text-brand-blue flex-shrink-0 transition-transform duration-500 group-hover:rotate-45"></span>
            </div>
            <div>
              <h3 class="text-[16px] sm:text-[18px] md:text-[20px] uppercase font-bold text-brand-blue">
                families
              </h3>
              <p class="text-[14px] sm:text-[15px] md:text-[16px] text-text-muted mt-1">
                Empowering parents and strengthening communities
              </p>
            </div>
          </div>

          <!-- Pink Service Card -->
          <div class="click-fx click-fx--dark group bg-white p-[16px] md:p-[24px] rounded-[28px] border-l-6 border-brand-pink flex gap-[20px] items-start shadow-md hover:shadow-xl transition-all duration-300">
            <div class="w-16 h-16 bg-brand-pink/20 rounded-full flex items-center justify-center flex-shrink-0">
              <span class="icon-[lucide--sprout] w-6 h-6 text-brand-pink flex-shrink-0 transition-transform duration-500 group-hover:rotate-45"></span>
            </div>
            <div>
              <h3 class="text-[16px] sm:text-[18px] md:text-[20px] uppercase font-bold text-brand-pink">
                rural communities
              </h3>
              <p class="text-[14px] sm:text-[15px] md:text-[16px] text-text-muted mt-1">
                Expanding learning opportunities in rural areas
              </p>
            </div>
          </div>

          <!-- Orange Service Card -->
          <div class="click-fx click-fx--dark group bg-white p-[16px] md:p-[24px] rounded-[28px] border-l-6 border-brand-orange flex gap-[20px] items-start shadow-md hover:shadow-xl transition-all duration-300">
            <div class="w-16 h-16 bg-brand-orange/20 rounded-full flex items-center justify-center flex-shrink-0">
              <span class="icon-[lucide--handshake] w-6 h-6 text-brand-orange flex-shrink-0 transition-transform duration-500 group-hover:rotate-45"></span>
            </div>
            <div>
              <h3 class="text-[16px] sm:text-[18px] md:text-[20px] uppercase font-bold text-brand-orange">
                partners
              </h3>
              <p class="text-[14px] sm:text-[15px] md:text-[16px] text-text-muted mt-1">
                Working with local organizations and partners
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Right Column: Our Impact Section -->
      <div class="anim-slide-right anim-delay-2 flex flex-col gap-[20px] h-full">
        <h2 class="text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] text-text-light uppercase font-heading font-black leading-tight text-center lg:text-left">
          our impact
        </h2>

        <!-- Stat Cards Grid -->
        <div class="grid grid-cols-2 xl:grid-cols-4 gap-[12px] sm:gap-[16px] w-full">
          
          <!-- Stat 1 -->
          <div class="click-fx click-fx--dark anim-fade-up anim-delay-1 group flex flex-col items-center gap-[10px] border-t-6 border-brand-yellow bg-brand-cream p-[16px] sm:p-[20px] rounded-[28px] w-full shadow-md hover:shadow-xl transition-all duration-300">
            <div class="w-12 h-12 bg-brand-yellow/20 rounded-full flex items-center justify-center flex-shrink-0">
              <span class="icon-[solar--map-point-bold] w-5 h-5 text-brand-yellow flex-shrink-0 transition-transform duration-500 group-hover:rotate-45"></span>
            </div>
            <span class="text-[20px] sm:text-[24px] md:text-[28px] text-brand-yellow font-heading font-black leading-none">10+</span>
            <p class="text-[14px] text-text-muted font-medium capitalize text-center">locations</p>
          </div>

          <!-- Stat 2 -->
          <div class="click-fx click-fx--dark anim-fade-up anim-delay-2 group flex flex-col items-center gap-[10px] border-t-6 border-brand-blue bg-brand-cream p-[16px] sm:p-[20px] rounded-[28px] w-full shadow-md hover:shadow-xl transition-all duration-300">
            <div class="w-12 h-12 bg-brand-blue/20 rounded-full flex items-center justify-center flex-shrink-0">
              <span class="icon-[solar--diploma-verified-bold] w-5 h-5 text-brand-blue flex-shrink-0 transition-transform duration-500 group-hover:rotate-45"></span>
            </div>
            <span class="text-[20px] sm:text-[24px] md:text-[28px] text-brand-blue font-heading font-black leading-none">5000+</span>
            <p class="text-[14px] text-text-muted font-medium capitalize text-center">students served</p>
          </div>

          <!-- Stat 3 -->
          <div class="click-fx click-fx--dark anim-fade-up anim-delay-3 group flex flex-col items-center gap-[10px] border-t-6 border-brand-pink bg-brand-cream p-[16px] sm:p-[20px] rounded-[28px] w-full shadow-md hover:shadow-xl transition-all duration-300">
            <div class="w-12 h-12 bg-brand-pink/20 rounded-full flex items-center justify-center flex-shrink-0">
              <span class="icon-[solar--presentation-graph-bold] w-5 h-5 text-brand-pink flex-shrink-0 transition-transform duration-500 group-hover:rotate-45"></span>
            </div>
            <span class="text-[20px] sm:text-[24px] md:text-[28px] text-brand-pink font-heading font-black leading-none">200+</span>
            <p class="text-[14px] text-text-muted font-medium capitalize text-center">teachers training</p>
          </div>

          <!-- Stat 4 -->
          <div class="click-fx click-fx--dark anim-fade-up anim-delay-4 group flex flex-col items-center gap-[10px] border-t-6 border-brand-orange bg-brand-cream p-[16px] sm:p-[20px] rounded-[28px] w-full shadow-md hover:shadow-xl transition-all duration-300">
            <div class="w-12 h-12 bg-brand-orange/20 rounded-full flex items-center justify-center flex-shrink-0">
              <span class="icon-[solar--hand-shake-bold] w-5 h-5 text-brand-orange flex-shrink-0 transition-transform duration-500 group-hover:rotate-45"></span>
            </div>
            <span class="text-[20px] sm:text-[24px] md:text-[28px] text-brand-orange font-heading font-black leading-none">20+</span>
            <p class="text-[14px] text-text-muted font-medium capitalize text-center">community partners</p>
          </div>

        </div>
        
        <!-- Impact Image Gallery Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-[16px] sm:gap-[20px] w-full mt-2 items-stretch">
          
          <!-- Photo 1 -->
          <div class="anim-fade-up anim-delay-5 w-full aspect-[4/3] lg:aspect-auto lg:h-full rounded-[28px] overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 group">
            <img src="<?php echo get_theme_file_uri('assets/images/error.png'); ?>" alt="Impact photo 1" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
          </div>

          <!-- Middle Column: Stacked items -->
          <div class="anim-fade-up anim-delay-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-1 lg:grid-rows-2 gap-[16px] sm:gap-[20px] h-full sm:col-span-2 lg:col-span-1">
            <div class="w-full aspect-[4/3] lg:aspect-auto lg:h-full rounded-[28px] overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 group">
              <img src="<?php echo get_theme_file_uri('assets/images/error.png'); ?>" alt="Impact photo 2" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
            </div>
            <div class="w-full aspect-[4/3] lg:aspect-auto lg:h-full rounded-[28px] overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 group">
              <img src="<?php echo get_theme_file_uri('assets/images/error.png'); ?>" alt="Impact photo 3" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
            </div>
          </div>

          <!-- Photo 4 -->
          <div class="anim-fade-up anim-delay-6 w-full aspect-[4/3] lg:aspect-auto lg:h-full sm:col-span-2 lg:col-span-1 rounded-[28px] overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 group">
            <img src="<?php echo get_theme_file_uri('assets/images/error.png'); ?>" alt="Impact photo 4" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
          </div>

        </div>

      </div>

    </div>
  </div>
</section>

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

<?php get_footer();?> 