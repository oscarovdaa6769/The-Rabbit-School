<?php
/*
Template Name: Where We Work
*/
get_header();

// ===== HERO =====
$hero_bg          = get_field('hero_background_image') ?: get_theme_file_uri('assets/images/error.png');
$hero_title       = get_field('hero_title') ?: 'Where We Work';
$hero_description = get_field('hero_description') ?: 'We work in different communities to bring quality education and a brighter future for children.';

// ===== OUR LOCATION SECTION =====
$location_heading = get_field('location_heading') ?: 'Our Location';
$location_intro   = get_field('location_intro') ?: 'We work in different communities to bring quality education and a brighter future for children.';
$location_map     = get_field('location_map_image') ?: get_theme_file_uri('assets/images/error.png');

$location_1_title = get_field('location_1_title') ?: 'Phnom Penh';
$location_1_desc  = get_field('location_1_description') ?: 'Main Campus & Training Center';

$location_2_title = get_field('location_2_title') ?: 'Siem Reap';
$location_2_desc  = get_field('location_2_description') ?: 'Community Learning Center';

$location_3_title = get_field('location_3_title') ?: 'Battambang';
$location_3_desc  = get_field('location_3_description') ?: 'Education Support Program';

$location_4_title = get_field('location_4_title') ?: 'Kampong Cham';
$location_4_desc  = get_field('location_4_description') ?: 'Community Outreach Program';

// ===== WHAT WE SERVE SECTION =====
$serve_heading = get_field('serve_heading') ?: 'What We Serve';

$serve_1_title = get_field('serve_1_title') ?: 'School';
$serve_1_desc  = get_field('serve_1_description') ?: 'Supporting students with quality education';

$serve_2_title = get_field('serve_2_title') ?: 'Families';
$serve_2_desc  = get_field('serve_2_description') ?: 'Empowering parents and strengthening communities';

$serve_3_title = get_field('serve_3_title') ?: 'Rural Communities';
$serve_3_desc  = get_field('serve_3_description') ?: 'Expanding learning opportunities in rural areas';

$serve_4_title = get_field('serve_4_title') ?: 'Partners';
$serve_4_desc  = get_field('serve_4_description') ?: 'Working with local organizations and partners';

// ===== OUR IMPACT SECTION =====
$impact_heading = get_field('impact_heading') ?: 'Our Impact';

$stat_1_number = get_field('stat_1_number') ?: '10+';
$stat_1_label  = get_field('stat_1_label') ?: 'Locations';

$stat_2_number = get_field('stat_2_number') ?: '5000+';
$stat_2_label  = get_field('stat_2_label') ?: 'Students Served';

$stat_3_number = get_field('stat_3_number') ?: '200+';
$stat_3_label  = get_field('stat_3_label') ?: 'Teachers Training';

$stat_4_number = get_field('stat_4_number') ?: '20+';
$stat_4_label  = get_field('stat_4_label') ?: 'Community Partners';

// Impact gallery images (ACF Image field, return format = "Image URL")
$impact_photo_1 = get_field('impact_photo_1') ?: get_theme_file_uri('assets/images/error.png');
$impact_photo_2 = get_field('impact_photo_2') ?: get_theme_file_uri('assets/images/error.png');
$impact_photo_3 = get_field('impact_photo_3') ?: get_theme_file_uri('assets/images/error.png');
$impact_photo_4 = get_field('impact_photo_4') ?: get_theme_file_uri('assets/images/error.png');
?>

<!-- SECTION 1: HERO -->
<section class="relative overflow-hidden">
  <img src="<?php echo esc_url($hero_bg); ?>" 
  alt="hero-banner" 
  class="h-[500px] md:h-[700px] w-full object-cover">
  
  <div class="absolute inset-0 z-10 bg-black/30 flex items-end">
    <div class="w-full max-w-7xl mx-auto py-[64px] md:py-[50px] px-[20px] 2xl:px-0">
      <div class="max-w-2xl text-text-light">
        <h1 class="font-heading text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-black leading-tight mb-[10px] md:mb-[20px] uppercase">
          <?php echo esc_html($hero_title); ?>
        </h1>
        <p class="text-[14px] sm:text-[15px] md:text-[16px] lg:text-[18px] leading-relaxed opacity-90">
          <?php echo esc_html($hero_description); ?>
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
          <?php echo esc_html($location_heading); ?>
        </h2>
        <p class="text-[14px] sm:text-[15px] md:text-[16px] lg:text-[18px] text-text-muted">
          <?php echo esc_html($location_intro); ?>
        </p>

        <!-- Yellow Location Card -->
        <div class="group bg-white p-[16px] md:p-[24px] rounded-[28px] border-l-6 border-brand-yellow flex gap-[20px] items-start shadow-md hover:shadow-xl transition-shadow duration-300">
          <div class="w-16 h-16 bg-brand-yellow/20 rounded-full flex items-center justify-center flex-shrink-0">
            <span class="icon-[solar--map-point-bold] w-6 h-6 text-brand-yellow flex-shrink-0 transition-transform duration-500 group-hover:rotate-45"></span>
          </div>
          <div>
            <h3 class="text-[16px] sm:text-[18px] md:text-[20px] uppercase font-bold text-brand-yellow">
              <?php echo esc_html($location_1_title); ?>
            </h3>
            <p class="text-[14px] sm:text-[15px] md:text-[16px] text-text-muted mt-1">
              <?php echo esc_html($location_1_desc); ?>
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
              <?php echo esc_html($location_2_title); ?>
            </h3>
            <p class="text-[14px] sm:text-[15px] md:text-[16px] text-text-muted mt-1">
              <?php echo esc_html($location_2_desc); ?>
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
              <?php echo esc_html($location_3_title); ?>
            </h3>
            <p class="text-[14px] sm:text-[15px] md:text-[16px] text-text-muted mt-1">
              <?php echo esc_html($location_3_desc); ?>
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
              <?php echo esc_html($location_4_title); ?>
            </h3>
            <p class="text-[14px] sm:text-[15px] md:text-[16px] text-text-muted mt-1">
              <?php echo esc_html($location_4_desc); ?>
            </p>
          </div>
        </div>
      </div>

      <!-- Right Column: Location Map Image -->
      <div class="w-full h-full min-h-[400px] rounded-[28px] overflow-hidden">
        <img src="<?php echo esc_url($location_map); ?>" alt="Map or Location Image" class="w-full h-full object-cover">
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
          <?php echo esc_html($serve_heading); ?>
        </h2>

        <div class="flex flex-col gap-[20px] h-full justify-between">
          <!-- Yellow Service Card -->
          <div class="group bg-white p-[16px] md:p-[24px] rounded-[28px] border-l-6 border-brand-yellow flex gap-[20px] items-start shadow-md hover:shadow-xl transition-all duration-300">
            <div class="w-16 h-16 bg-brand-yellow/20 rounded-full flex items-center justify-center flex-shrink-0">
              <span class="icon-[lucide--graduation-cap] w-6 h-6 text-brand-yellow flex-shrink-0 transition-transform duration-500 group-hover:rotate-45"></span>
            </div>
            <div>
              <h3 class="text-[16px] sm:text-[18px] md:text-[20px] uppercase font-bold text-brand-yellow">
                <?php echo esc_html($serve_1_title); ?>
              </h3>
              <p class="text-[14px] sm:text-[15px] md:text-[16px] text-text-muted mt-1">
                <?php echo esc_html($serve_1_desc); ?>
              </p>
            </div>
          </div>

          <!-- Blue Service Card -->
          <div class="group bg-white p-[16px] md:p-[24px] rounded-[28px] border-l-6 border-brand-blue flex gap-[20px] items-start shadow-md hover:shadow-xl transition-all duration-300">
            <div class="w-16 h-16 bg-brand-blue/20 rounded-full flex items-center justify-center flex-shrink-0">
              <span class="icon-[lucide--users] w-6 h-6 text-brand-blue flex-shrink-0 transition-transform duration-500 group-hover:rotate-45"></span>
            </div>
            <div>
              <h3 class="text-[16px] sm:text-[18px] md:text-[20px] uppercase font-bold text-brand-blue">
                <?php echo esc_html($serve_2_title); ?>
              </h3>
              <p class="text-[14px] sm:text-[15px] md:text-[16px] text-text-muted mt-1">
                <?php echo esc_html($serve_2_desc); ?>
              </p>
            </div>
          </div>

          <!-- Pink Service Card -->
          <div class="group bg-white p-[16px] md:p-[24px] rounded-[28px] border-l-6 border-brand-pink flex gap-[20px] items-start shadow-md hover:shadow-xl transition-all duration-300">
            <div class="w-16 h-16 bg-brand-pink/20 rounded-full flex items-center justify-center flex-shrink-0">
              <span class="icon-[lucide--sprout] w-6 h-6 text-brand-pink flex-shrink-0 transition-transform duration-500 group-hover:rotate-45"></span>
            </div>
            <div>
              <h3 class="text-[16px] sm:text-[18px] md:text-[20px] uppercase font-bold text-brand-pink">
                <?php echo esc_html($serve_3_title); ?>
              </h3>
              <p class="text-[14px] sm:text-[15px] md:text-[16px] text-text-muted mt-1">
                <?php echo esc_html($serve_3_desc); ?>
              </p>
            </div>
          </div>

          <!-- Orange Service Card -->
          <div class="group bg-white p-[16px] md:p-[24px] rounded-[28px] border-l-6 border-brand-orange flex gap-[20px] items-start shadow-md hover:shadow-xl transition-all duration-300">
            <div class="w-16 h-16 bg-brand-orange/20 rounded-full flex items-center justify-center flex-shrink-0">
              <span class="icon-[lucide--handshake] w-6 h-6 text-brand-orange flex-shrink-0 transition-transform duration-500 group-hover:rotate-45"></span>
            </div>
            <div>
              <h3 class="text-[16px] sm:text-[18px] md:text-[20px] uppercase font-bold text-brand-orange">
                <?php echo esc_html($serve_4_title); ?>
              </h3>
              <p class="text-[14px] sm:text-[15px] md:text-[16px] text-text-muted mt-1">
                <?php echo esc_html($serve_4_desc); ?>
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Right Column: Our Impact Section -->
      <div class="flex flex-col gap-[20px] h-full">
        <h2 class="text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] text-text-light uppercase font-heading font-black leading-tight text-center lg:text-left">
          <?php echo esc_html($impact_heading); ?>
        </h2>

        <!-- Stat Cards Grid -->
        <div class="grid grid-cols-2 xl:grid-cols-4 gap-[12px] sm:gap-[16px] w-full">
          
          <!-- Stat 1 -->
          <div class="group flex flex-col items-center gap-[10px] border-t-6 border-brand-yellow bg-brand-cream p-[16px] sm:p-[20px] rounded-[28px] w-full shadow-md hover:shadow-xl transition-all duration-300">
            <div class="w-12 h-12 bg-brand-yellow/20 rounded-full flex items-center justify-center flex-shrink-0">
              <span class="icon-[solar--map-point-bold] w-5 h-5 text-brand-yellow flex-shrink-0 transition-transform duration-500 group-hover:rotate-45"></span>
            </div>
            <span class="text-[20px] sm:text-[24px] md:text-[28px] text-brand-yellow font-heading font-black leading-none"><?php echo esc_html($stat_1_number); ?></span>
            <p class="text-[14px] text-text-muted font-medium capitalize text-center"><?php echo esc_html($stat_1_label); ?></p>
          </div>

          <!-- Stat 2 -->
          <div class="group flex flex-col items-center gap-[10px] border-t-6 border-brand-blue bg-brand-cream p-[16px] sm:p-[20px] rounded-[28px] w-full shadow-md hover:shadow-xl transition-all duration-300">
            <div class="w-12 h-12 bg-brand-blue/20 rounded-full flex items-center justify-center flex-shrink-0">
              <span class="icon-[solar--diploma-verified-bold] w-5 h-5 text-brand-blue flex-shrink-0 transition-transform duration-500 group-hover:rotate-45"></span>
            </div>
            <span class="text-[20px] sm:text-[24px] md:text-[28px] text-brand-blue font-heading font-black leading-none"><?php echo esc_html($stat_2_number); ?></span>
            <p class="text-[14px] text-text-muted font-medium capitalize text-center"><?php echo esc_html($stat_2_label); ?></p>
          </div>

          <!-- Stat 3 -->
          <div class="group flex flex-col items-center gap-[10px] border-t-6 border-brand-pink bg-brand-cream p-[16px] sm:p-[20px] rounded-[28px] w-full shadow-md hover:shadow-xl transition-all duration-300">
            <div class="w-12 h-12 bg-brand-pink/20 rounded-full flex items-center justify-center flex-shrink-0">
              <span class="icon-[solar--presentation-graph-bold] w-5 h-5 text-brand-pink flex-shrink-0 transition-transform duration-500 group-hover:rotate-45"></span>
            </div>
            <span class="text-[20px] sm:text-[24px] md:text-[28px] text-brand-pink font-heading font-black leading-none"><?php echo esc_html($stat_3_number); ?></span>
            <p class="text-[14px] text-text-muted font-medium capitalize text-center"><?php echo esc_html($stat_3_label); ?></p>
          </div>

          <!-- Stat 4 -->
          <div class="group flex flex-col items-center gap-[10px] border-t-6 border-brand-orange bg-brand-cream p-[16px] sm:p-[20px] rounded-[28px] w-full shadow-md hover:shadow-xl transition-all duration-300">
            <div class="w-12 h-12 bg-brand-orange/20 rounded-full flex items-center justify-center flex-shrink-0">
              <span class="icon-[solar--hand-shake-bold] w-5 h-5 text-brand-orange flex-shrink-0 transition-transform duration-500 group-hover:rotate-45"></span>
            </div>
            <span class="text-[20px] sm:text-[24px] md:text-[28px] text-brand-orange font-heading font-black leading-none"><?php echo esc_html($stat_4_number); ?></span>
            <p class="text-[14px] text-text-muted font-medium capitalize text-center"><?php echo esc_html($stat_4_label); ?></p>
          </div>

        </div>
        
        <!-- Impact Image Gallery Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-[16px] sm:gap-[20px] w-full mt-2 items-stretch">
          
          <!-- Photo 1 -->
          <div class="w-full aspect-[4/3] lg:aspect-auto lg:h-full rounded-[28px] overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 group">
            <img src="<?php echo esc_url($impact_photo_1); ?>" alt="Impact photo 1" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
          </div>

          <!-- Middle Column: Stacked items -->
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-1 lg:grid-rows-2 gap-[16px] sm:gap-[20px] h-full sm:col-span-2 lg:col-span-1">
            <div class="w-full aspect-[4/3] lg:aspect-auto lg:h-full rounded-[28px] overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 group">
              <img src="<?php echo esc_url($impact_photo_2); ?>" alt="Impact photo 2" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
            </div>
            <div class="w-full aspect-[4/3] lg:aspect-auto lg:h-full rounded-[28px] overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 group">
              <img src="<?php echo esc_url($impact_photo_3); ?>" alt="Impact photo 3" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
            </div>
          </div>

          <!-- Photo 4 -->
          <div class="w-full aspect-[4/3] lg:aspect-auto lg:h-full sm:col-span-2 lg:col-span-1 rounded-[28px] overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 group">
            <img src="<?php echo esc_url($impact_photo_4); ?>" alt="Impact photo 4" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
          </div>

        </div>

      </div>

    </div>
  </div>
</section>

<?php get_footer(); ?>