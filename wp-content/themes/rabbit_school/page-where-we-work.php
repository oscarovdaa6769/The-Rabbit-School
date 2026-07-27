<?php
/*
Template Name: Where We Work
*/
get_header();
?>

<!-- SECTION 1: HERO -->
<section class="relative overflow-hidden">
  <img src="<?php echo get_theme_file_uri('assets/images/error.png'); ?>" 
  alt="hero-banner" 
  class="h-[500px] md:h-[700px] w-full object-cover">
  
  <div class="absolute inset-0 z-10 bg-black/30 flex items-end">
    <div class="w-full max-w-7xl mx-auto py-[64px] md:py-[50px] px-[20px] 2xl:px-0">
      <div class="max-w-2xl text-text-light">
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
      <div class="flex flex-col gap-[20px]">
        <h2 class="text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] text-text-main uppercase font-heading font-black leading-tight">
          our location
        </h2>
        <p class="text-[14px] sm:text-[15px] md:text-[16px] lg:text-[18px] text-text-muted">
          We work in different communities to bring quality education and a brighter future for children.
        </p>

        <!-- Yellow Location Card -->
        <div class="group bg-white p-[16px] md:p-[24px] rounded-[28px] border-l-6 border-brand-yellow flex gap-[20px] items-start shadow-md hover:shadow-xl transition-shadow duration-300">
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
        <div class="group bg-white p-[16px] md:p-[24px] rounded-[28px] border-l-6 border-brand-blue flex gap-[20px] items-start shadow-md hover:shadow-xl transition-shadow duration-300">
          <div class="w-16 h-16 bg-brand-blue/20 rounded-full flex items-center justify-center flex-shrink-0">
            <span class="icon-[solar--map-point-bold] w-6 h-6 text-brand-blue flex-shrink-0 transition-transform duration-500 group-hover:rotate-45"></span>
          </div>
          <div>
            <h3 class="text-[16px] sm:text-[18px] md:text-[20px] uppercase font-bold text-brand-blue">
              phnom penh
            </h3>
            <p class="text-[14px] sm:text-[15px] md:text-[16px] text-text-muted mt-1">
              Main Campus & Training Center
            </p>
          </div>
        </div>

        <!-- Pink Location Card -->
        <div class="group bg-white p-[16px] md:p-[24px] rounded-[28px] border-l-6 border-brand-pink flex gap-[20px] items-start shadow-md hover:shadow-xl transition-shadow duration-300">
          <div class="w-16 h-16 bg-brand-pink/20 rounded-full flex items-center justify-center flex-shrink-0">
            <span class="icon-[solar--map-point-bold] w-6 h-6 text-brand-pink flex-shrink-0 transition-transform duration-500 group-hover:rotate-45"></span>
          </div>
          <div>
            <h3 class="text-[16px] sm:text-[18px] md:text-[20px] uppercase font-bold text-brand-pink">
              phnom penh
            </h3>
            <p class="text-[14px] sm:text-[15px] md:text-[16px] text-text-muted mt-1">
              Main Campus & Training Center
            </p>
          </div>
        </div>

        <!-- Orange Location Card -->
        <div class="group bg-white p-[16px] md:p-[24px] rounded-[28px] border-l-6 border-brand-orange flex gap-[20px] items-start shadow-md hover:shadow-xl transition-shadow duration-300">
          <div class="w-16 h-16 bg-brand-orange/20 rounded-full flex items-center justify-center flex-shrink-0">
            <span class="icon-[solar--map-point-bold] w-6 h-6 text-brand-orange flex-shrink-0 transition-transform duration-500 group-hover:rotate-45"></span>
          </div>
          <div>
            <h3 class="text-[16px] sm:text-[18px] md:text-[20px] uppercase font-bold text-brand-orange">
              phnom penh
            </h3>
            <p class="text-[14px] sm:text-[15px] md:text-[16px] text-text-muted mt-1">
              Main Campus & Training Center
            </p>
          </div>
        </div>
      </div>

      <!-- Right Column: Location Map Image -->
      <div class="w-full h-full min-h-[400px] rounded-[28px] overflow-hidden">
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
      <div class="flex flex-col gap-[20px]">
        <h2 class="text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] text-text-light uppercase font-heading font-black leading-tight">
          what we serve
        </h2>

        <div class="flex flex-col gap-[20px] h-full justify-between">
          <!-- Yellow Service Card -->
          <div class="group bg-white p-[16px] md:p-[24px] rounded-[28px] border-l-6 border-brand-yellow flex gap-[20px] items-start shadow-md hover:shadow-xl transition-all duration-300">
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

          <!-- Blue Service Card -->
          <div class="group bg-white p-[16px] md:p-[24px] rounded-[28px] border-l-6 border-brand-blue flex gap-[20px] items-start shadow-md hover:shadow-xl transition-all duration-300">
            <div class="w-16 h-16 bg-brand-blue/20 rounded-full flex items-center justify-center flex-shrink-0">
              <span class="icon-[solar--map-point-bold] w-6 h-6 text-brand-blue flex-shrink-0 transition-transform duration-500 group-hover:rotate-45"></span>
            </div>
            <div>
              <h3 class="text-[16px] sm:text-[18px] md:text-[20px] uppercase font-bold text-brand-blue">
                phnom penh
              </h3>
              <p class="text-[14px] sm:text-[15px] md:text-[16px] text-text-muted mt-1">
                Main Campus & Training Center
              </p>
            </div>
          </div>

          <!-- Pink Service Card -->
          <div class="group bg-white p-[16px] md:p-[24px] rounded-[28px] border-l-6 border-brand-pink flex gap-[20px] items-start shadow-md hover:shadow-xl transition-all duration-300">
            <div class="w-16 h-16 bg-brand-pink/20 rounded-full flex items-center justify-center flex-shrink-0">
              <span class="icon-[solar--map-point-bold] w-6 h-6 text-brand-pink flex-shrink-0 transition-transform duration-500 group-hover:rotate-45"></span>
            </div>
            <div>
              <h3 class="text-[16px] sm:text-[18px] md:text-[20px] uppercase font-bold text-brand-pink">
                phnom penh
              </h3>
              <p class="text-[14px] sm:text-[15px] md:text-[16px] text-text-muted mt-1">
                Main Campus & Training Center
              </p>
            </div>
          </div>

          <!-- Orange Service Card -->
          <div class="group bg-white p-[16px] md:p-[24px] rounded-[28px] border-l-6 border-brand-orange flex gap-[20px] items-start shadow-md hover:shadow-xl transition-all duration-300">
            <div class="w-16 h-16 bg-brand-orange/20 rounded-full flex items-center justify-center flex-shrink-0">
              <span class="icon-[solar--map-point-bold] w-6 h-6 text-brand-orange flex-shrink-0 transition-transform duration-500 group-hover:rotate-45"></span>
            </div>
            <div>
              <h3 class="text-[16px] sm:text-[18px] md:text-[20px] uppercase font-bold text-brand-orange">
                phnom penh
              </h3>
              <p class="text-[14px] sm:text-[15px] md:text-[16px] text-text-muted mt-1">
                Main Campus & Training Center
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Right Column: Our Impact Section -->
      <div class="flex flex-col gap-[20px] h-full">
        <h2 class="text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] text-text-light uppercase font-heading font-black leading-tight text-center lg:text-left">
          our impact
        </h2>

        <!-- Stat Cards Grid -->
        <div class="grid grid-cols-2 xl:grid-cols-4 gap-[12px] sm:gap-[16px] w-full">
          
          <!-- Stat 1 -->
          <div class="group flex flex-col items-center gap-[10px] border-t-6 border-brand-yellow bg-brand-cream p-[16px] sm:p-[20px] rounded-[28px] w-full shadow-md hover:shadow-xl transition-all duration-300">
            <div class="w-12 h-12 bg-brand-yellow/20 rounded-full flex items-center justify-center flex-shrink-0">
              <span class="icon-[solar--map-point-bold] w-5 h-5 text-brand-yellow flex-shrink-0 transition-transform duration-500 group-hover:rotate-45"></span>
            </div>
            <span class="text-[28px] sm:text-[32px] md:text-[36px] text-brand-yellow font-heading font-black leading-none">10+</span>
            <p class="text-[14px] text-text-muted font-medium capitalize text-center">locations</p>
          </div>

          <!-- Stat 2 -->
          <div class="group flex flex-col items-center gap-[10px] border-t-6 border-brand-blue bg-brand-cream p-[16px] sm:p-[20px] rounded-[28px] w-full shadow-md hover:shadow-xl transition-all duration-300">
            <div class="w-12 h-12 bg-brand-blue/20 rounded-full flex items-center justify-center flex-shrink-0">
              <span class="icon-[solar--map-point-bold] w-5 h-5 text-brand-blue flex-shrink-0 transition-transform duration-500 group-hover:rotate-45"></span>
            </div>
            <span class="text-[28px] sm:text-[32px] md:text-[36px] text-brand-blue font-heading font-black leading-none">10+</span>
            <p class="text-[14px] text-text-muted font-medium capitalize text-center">locations</p>
          </div>

          <!-- Stat 3 -->
          <div class="group flex flex-col items-center gap-[10px] border-t-6 border-brand-pink bg-brand-cream p-[16px] sm:p-[20px] rounded-[28px] w-full shadow-md hover:shadow-xl transition-all duration-300">
            <div class="w-12 h-12 bg-brand-pink/20 rounded-full flex items-center justify-center flex-shrink-0">
              <span class="icon-[solar--map-point-bold] w-5 h-5 text-brand-pink flex-shrink-0 transition-transform duration-500 group-hover:rotate-45"></span>
            </div>
            <span class="text-[28px] sm:text-[32px] md:text-[36px] text-brand-pink font-heading font-black leading-none">10+</span>
            <p class="text-[14px] text-text-muted font-medium capitalize text-center">locations</p>
          </div>

          <!-- Stat 4 -->
          <div class="group flex flex-col items-center gap-[10px] border-t-6 border-brand-orange bg-brand-cream p-[16px] sm:p-[20px] rounded-[28px] w-full shadow-md hover:shadow-xl transition-all duration-300">
            <div class="w-12 h-12 bg-brand-orange/20 rounded-full flex items-center justify-center flex-shrink-0">
              <span class="icon-[solar--map-point-bold] w-5 h-5 text-brand-orange flex-shrink-0 transition-transform duration-500 group-hover:rotate-45"></span>
            </div>
            <span class="text-[28px] sm:text-[32px] md:text-[36px] text-brand-orange font-heading font-black leading-none">10+</span>
            <p class="text-[14px] text-text-muted font-medium capitalize text-center">locations</p>
          </div>

        </div>
        
        <!-- Impact Image Gallery Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-[16px] sm:gap-[20px] w-full mt-2 items-stretch">
          
          <!-- Photo 1 -->
          <div class="w-full aspect-[4/3] lg:aspect-auto lg:h-full rounded-[28px] overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 group">
            <img src="<?php echo get_theme_file_uri('assets/images/error.png'); ?>" alt="Impact photo 1" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
          </div>

          <!-- Middle Column: Stacked items -->
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-1 lg:grid-rows-2 gap-[16px] sm:gap-[20px] h-full sm:col-span-2 lg:col-span-1">
            <div class="w-full aspect-[4/3] lg:aspect-auto lg:h-full rounded-[28px] overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 group">
              <img src="<?php echo get_theme_file_uri('assets/images/error.png'); ?>" alt="Impact photo 2" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
            </div>
            <div class="w-full aspect-[4/3] lg:aspect-auto lg:h-full rounded-[28px] overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 group">
              <img src="<?php echo get_theme_file_uri('assets/images/error.png'); ?>" alt="Impact photo 3" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
            </div>
          </div>

          <!-- Photo 4 -->
          <div class="w-full aspect-[4/3] lg:aspect-auto lg:h-full sm:col-span-2 lg:col-span-1 rounded-[28px] overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 group">
            <img src="<?php echo get_theme_file_uri('assets/images/error.png'); ?>" alt="Impact photo 4" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
          </div>

        </div>

      </div>

    </div>
  </div>
</section>

    

</body>
<?php get_footer();?>
