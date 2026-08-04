<?php
/**
 * Template Name: Donate Page
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

  /* Keyframe Animations Matching Get Involved / Work With Volunteer Pages */
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

<!-- SECTION 1: Hero -->
<section class="relative overflow-hidden">
  <img src="<?php echo get_theme_file_uri('assets/images/error.png'); ?>" 
  alt="Donate Hero" 
  class="h-[500px] md:h-[700px] w-full object-cover">
  
  <div class="absolute inset-0 z-10 bg-black/30 flex items-end">
    <div class="w-full max-w-7xl mx-auto py-[64px] md:py-[50px] px-[20px] 2xl:px-0">
      <div class="anim-fade-up max-w-2xl text-text-light">
        <h1 class="font-heading text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-black leading-tight mb-[10px] md:mb-[20px] uppercase">
          together, we can change lives
        </h1>
        <p class="text-[14px] sm:text-[15px] md:text-[16px] lg:text-[18px] leading-relaxed opacity-90">
          Hello world
        </p>
      </div>
    </div>
  </div>
</section>

<!-- SECTION 2: Impact Cards -->
<section class="bg-brand-cream py-[64px] md:py-[50px] px-[20px] 2xl:px-0">
  <div class="anim-fade-up flex flex-col w-full items-center justify-center text-center mb-[40px]">
    <h2 class="text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-bold uppercase font-heading">
      your gift makes an impact
    </h2>
    <p class="text-[14px] sm:text-[15px] md:text-[16px] lg:text-[18px] text-text-muted max-w-2xl mt-2">
      Hello world
    </p>
  </div>

  <div class="max-w-7xl mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-[30px] lg:gap-[40px]">
      
      <!-- Left Card: Give in kind -->
      <div class="click-fx click-fx--dark anim-slide-left anim-delay-1 flex items-start gap-[20px] bg-white border-l-4 border-brand-blue p-[24px] md:p-[32px] rounded-[28px] shadow-md hover:shadow-xl transition-shadow duration-300 group">
        <div class="w-16 h-16 sm:w-20 sm:h-20 rounded-full bg-brand-blue/20 text-brand-blue flex items-center justify-center flex-shrink-0">
          <span class="icon-[solar--hand-heart-bold] w-8 h-8 sm:w-10 sm:h-10 flex-shrink-0 transition-transform duration-500 group-hover:rotate-45"></span>
        </div>
        <div class="flex flex-col gap-[12px] flex-grow">
          <h2 class="text-[18px] sm:text-[20px] md:text-[22px] font-bold uppercase font-heading text-brand-blue">
            Give in kind
          </h2>
          <p class="text-[14px] sm:text-[15px] md:text-[16px] lg:text-[18px] text-text-muted">
            If you would like to contribute with resources, these are things that are needed most:
          </p>
          <ul class="flex flex-col gap-[10px] mt-1">
            <li class="flex items-start gap-[10px] text-[14px] sm:text-[15px] md:text-[16px]">
              <span class="icon-[solar--check-circle-bold] w-5 h-5 text-brand-blue flex-shrink-0 mt-0.5"></span>  
              <span>School materials such as books, pencils, DVDs (player) and educational games</span>
            </li>
            <li class="flex items-start gap-[10px] text-[14px] sm:text-[15px] md:text-[16px]">
              <span class="icon-[solar--check-circle-bold] w-5 h-5 text-brand-blue flex-shrink-0 mt-0.5"></span>  
              <span>Children's books in Khmer</span>
            </li>
            <li class="flex items-start gap-[10px] text-[14px] sm:text-[15px] md:text-[16px]">
              <span class="icon-[solar--check-circle-bold] w-5 h-5 text-brand-blue flex-shrink-0 mt-0.5"></span>  
              <span>Physiotherapy special devices and toys</span>
            </li>
          </ul>
        </div>
      </div>

      <!-- Right Card: Give financial -->
      <div class="click-fx click-fx--dark anim-slide-right anim-delay-2 flex items-start gap-[20px] bg-white border-l-4 border-brand-pink p-[24px] md:p-[32px] rounded-[28px] shadow-md hover:shadow-xl transition-shadow duration-300 group">
        <div class="w-16 h-16 sm:w-20 sm:h-20 rounded-full bg-brand-pink/20 text-brand-pink flex items-center justify-center flex-shrink-0">
          <span class="icon-[solar--hand-money-bold] w-8 h-8 sm:w-10 sm:h-10 flex-shrink-0 transition-transform duration-500 group-hover:rotate-45"></span>
        </div>
        <div class="flex flex-col gap-[12px] flex-grow">
          <h2 class="text-[18px] sm:text-[20px] md:text-[22px] font-bold uppercase font-heading text-brand-pink">
            Give financial
          </h2>
          <p class="text-[14px] sm:text-[15px] md:text-[16px] lg:text-[18px] text-text-muted">
            A single gift can change a child's entire future.
          </p>
          <ul class="flex flex-col gap-[10px] mt-1">
            <li class="flex items-start gap-[10px] text-[14px] sm:text-[15px] md:text-[16px]">
              <span class="icon-[solar--heart-bold] w-5 h-5 text-brand-pink flex-shrink-0 mt-0.5"></span>  
              <span><strong class="text-brand-pink">$60</strong> opens the classroom door for one month.</span>
            </li>
            <li class="flex items-start gap-[10px] text-[14px] sm:text-[15px] md:text-[16px]">
              <span class="icon-[solar--heart-bold] w-5 h-5 text-brand-pink flex-shrink-0 mt-0.5"></span>  
              <span><strong class="text-brand-pink">$800</strong> keeps that door open for a full year—giving one child safety, routine, and a chance to grow.</span>
            </li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- SECTION 3: How To Donate Container -->
<section class="py-[64px] md:py-[50px] px-[20px] 2xl:px-0">
  <div class="max-w-7xl mx-auto flex flex-col items-center">
    <div class="anim-fade-up p-[24px] md:p-[32px] bg-brand-yellow rounded-[28px] w-full">
      <!-- TITLE -->
      <div class="text-center mb-[28px]">
        <h2 class="text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-bold font-heading uppercase">how to donate</h2>
        <div class="w-12 h-1 bg-brand-orange rounded-full mx-auto mt-2"></div>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-3 w-full gap-[20px]">
        <!-- CARD 1 -->
        <div class="click-fx click-fx--dark anim-slide-left anim-delay-1 border-l-4 border-brand-blue p-[24px] md:p-[32px] rounded-[28px] bg-brand-cream flex items-start gap-[20px] hover:-translate-y-2 transition-all group shadow-sm hover:shadow-md">
          <div class="w-16 h-16 rounded-full bg-brand-blue/20 text-brand-blue flex items-center justify-center flex-shrink-0">
            <span class="icon-[solar--buildings-2-bold] w-6 h-6 flex-shrink-0 transition-transform duration-500 group-hover:rotate-45"></span>
          </div>
          <div>
            <h2 class="text-[16px] sm:text-[18px] md:text-[20px] text-brand-blue font-bold font-heading uppercase mt-1">
              bank transfer
            </h2>
            <p class="text-[14px] sm:text-[15px] md:text-[16px] text-text-muted mt-1">
              Transfer directly to our bank account using the details below.
            </p>
          </div>
        </div>
        <!-- CARD 2 -->
        <div class="click-fx click-fx--dark anim-fade-up anim-delay-2 border-l-4 border-brand-pink p-[24px] md:p-[32px] rounded-[28px] bg-brand-cream flex items-start gap-[20px] hover:-translate-y-2 transition-all group shadow-sm hover:shadow-md">
          <div class="w-16 h-16 rounded-full bg-brand-pink/20 text-brand-pink flex items-center justify-center flex-shrink-0">
            <span class="icon-[solar--qr-code-bold] w-6 h-6 flex-shrink-0 transition-transform duration-500 group-hover:rotate-45"></span>
          </div>
          <div>
            <h2 class="text-[16px] sm:text-[18px] md:text-[20px] text-brand-pink font-bold font-heading uppercase mt-1">
              Scan To Donate
            </h2>
            <p class="text-[14px] sm:text-[15px] md:text-[16px] text-text-muted mt-1">
              Scan the QR code to make your donation securely.
            </p>
          </div>
        </div>
        <!-- CARD 3 -->
        <div class="click-fx click-fx--dark anim-slide-right anim-delay-3 border-l-4 border-brand-orange p-[24px] md:p-[32px] rounded-[28px] bg-brand-cream flex items-start gap-[20px] hover:-translate-y-2 transition-all group shadow-sm hover:shadow-md">
          <div class="w-16 h-16 rounded-full bg-brand-orange/20 text-brand-orange flex items-center justify-center flex-shrink-0">
            <span class="icon-[solar--heart-bold] w-6 h-6 flex-shrink-0 transition-transform duration-500 group-hover:rotate-45"></span>
          </div>
          <div>
            <h2 class="text-[16px] sm:text-[18px] md:text-[20px] text-brand-orange font-bold font-heading uppercase mt-1">
              Contact Us
            </h2>
            <p class="text-[14px] sm:text-[15px] md:text-[16px] text-text-muted mt-1">
              Need help or have questions? We're here to assist you.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SECTION 4: ACLEDA Bank Card -->
<section class="bg-brand-cream">
  <div class="max-w-7xl mx-auto py-[64px] md:py-[50px] px-[20px] 2xl:px-0">
    
    <!-- Bank Card -->
    <div class="click-fx click-fx--dark anim-fade-up anim-delay-4 bg-white border-l-4 border-brand-teal rounded-[28px] p-[24px] md:p-[32px] shadow-md hover:shadow-xl transition-shadow duration-300 group">
      <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-[24px]">
        
        <!-- LEFT: Bank Information -->
        <div class="flex items-start gap-[20px] flex-grow">
          <div class="w-16 h-16 flex-shrink-0 rounded-full bg-brand-teal/20 text-brand-teal flex items-center justify-center">
            <span class="icon-[solar--buildings-2-bold] w-7 h-7 flex-shrink-0 transition-transform duration-500 group-hover:rotate-45"></span>
          </div>
          <div class="flex flex-col gap-[10px]">
            <h2 class="uppercase font-bold font-heading text-brand-teal text-[18px] sm:text-[20px] md:text-[22px]">
              ACLEDA BANK
            </h2>
            <p class="text-[14px] sm:text-[15px] md:text-[16px] text-text-muted">
              <strong class="text-brand-teal">SWIFT Code:</strong> ACLBKHPP
            </p>
            <p class="text-[14px] sm:text-[15px] md:text-[16px] text-text-muted">
              <strong class="text-brand-teal">Bank address:</strong> Building N° 61, Preah Monivong Blvd., Sangkat Srah Chak, Khan Daun Penh, Phnom Penh
            </p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-[12px] pt-2">
              <p class="text-[14px] sm:text-[15px] md:text-[16px]">
                <span class="block text-xs uppercase tracking-wider text-text-muted/80">Account Name</span>
                <strong class="text-brand-teal uppercase text-[16px]">Rabbit School</strong>
              </p>
              <p class="text-[14px] sm:text-[15px] md:text-[16px]">
                <span class="block text-xs uppercase tracking-wider text-text-muted/80">Account Number</span>
                <strong class="text-brand-teal uppercase text-[16px]">2900-01-005152-4-2</strong>
              </p>
            </div>
          </div>
        </div>

        <!-- DOTTED DIVIDER (Visible on Desktop) -->
        <div class="hidden md:block border-r-2 border-dotted border-gray-300 self-stretch my-2"></div>

        <!-- RIGHT: QR Code / Image -->
        <div class="flex-shrink-0 w-full md:w-auto flex justify-center">
          <div class="p-2 border border-gray-100 rounded-[16px] bg-white shadow-sm">
            <img src="<?php echo get_theme_file_uri('assets/images/error.png'); ?>" alt="Bank QR Code" class="w-32 h-32 object-contain rounded-[12px]">
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

<?php get_footer(); ?>