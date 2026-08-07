<?php

/**
 * Template Name: Work With Volunteer
 */
get_header();

// Hero
$hero_title       = get_field('hero_title');
$hero_description = get_field('hero_description');
$hero_button_text = get_field('hero_button_text');
$hero_button_link = get_field('hero_button_link');
$hero_image       = get_field('hero_image');

// Section 2 - Opportunities
$opportunities_title = get_field('opportunities_title');

// Card 1 - Careers
$card_1_title                  = get_field('card_1_title');
$card_1_description            = get_field('card_1_description');

$role_1_title                  = get_field('role_1_title');
$career_role_1_location        = get_field('career_role_1_location');
$career_role_1_employment_type = get_field('career_role_1_employment_type');
$career_role_1_description    = get_field('career_role_1_description');
$career_role_1_details        = get_field('career_role_1_details');
$read_more_1_text              = get_field('read_more_1_text');
$close_button_1_text           = get_field('close_button_1_text');

$role_2_title                  = get_field('role_2_title');
$career_role_2_location        = get_field('career_role_2_location');
$career_role_2_employment_type = get_field('career_role_2_employment_type');
$role_2_description           = get_field('role_2_description');
$career_role_2_details        = get_field('career_role_2_details');
$read_more_2_text              = get_field('read_more_2_text');

// Card 2 - Volunteer
$card_2_title              = get_field('card_2_title');
$card_2_description        = get_field('card_2_description');

$volunteer_role_title      = get_field('volunteer_role_title');
$volunteer_location        = get_field('volunteer_location');
$volunteer_employment_type = get_field('volunteer_employment_type');
$volunteer_description     = get_field('volunteer_description');
$volunteer_details         = get_field('volunteer_details');
$volunteer_read_more_text = get_field('volunteer_read_more_text');

// Card 3 - Internship
$card_3_title                       = get_field('card_3_title');
$card_3_description                 = get_field('card_3_description');

$internship_role_1_title             = get_field('internship_role_1_title');
$internship_role_1_location          = get_field('internship_role_1_location');
$internship_role_1_employment_type   = get_field('internship_role_1_employment_type');
$internship_role_1_description       = get_field('internship_role_1_description');
$internship_role_1_details           = get_field('internship_role_1_details');
$internship_read_more_1_text         = get_field('internship_read_more_1_text');

$internship_role_2_title             = get_field('internship_role_2_title');
$internship_role_2_location          = get_field('internship_role_2_location');
$internship_role_2_employment_type   = get_field('internship_role_2_employment_type');
$internship_role_2_description       = get_field('internship_role_2_description');
$internship_role_2_details           = get_field('internship_role_2_details');
$internship_read_more_2_text         = get_field('internship_read_more_2_text');

// Ideas Section
$ideas_title       = get_field('ideas_title');
$ideas_description = get_field('ideas_description');

// Stay Connected
$connected_heading     = get_field('connected_heading');
$connected_description = get_field('connected_description');

$email_title   = get_field('email_title');
$email_address = get_field('email_address');

$facebook_page      = get_field('facebook_page');
$facebook_page_link = get_field('facebook_page_link');

$phone_title  = get_field('phone_title');
$phone_number = get_field('phone_number');
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

<section class="relative overflow-hidden">
  <?php if (!empty($hero_image)) : ?>
    <img src="<?php echo esc_url(is_array($hero_image) ? $hero_image['url'] : $hero_image); ?>" 
    alt="<?php echo esc_attr(is_array($hero_image) ? $hero_image['alt'] : ($hero_title ?? '')); ?>" 
    class="h-[500px] md:h-[700px] w-full object-cover">
  <?php endif; ?>
  
  <div class="absolute inset-0 z-10 bg-black/30 flex items-end">
    <div class="w-full max-w-7xl mx-auto py-[64px] md:py-[50px] px-[20px] 2xl:px-0">
      <div class="anim-fade-up max-w-2xl text-text-light">
        
        <?php if (!empty($hero_title)) : ?>
          <h1 class="font-heading text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-black leading-tight mb-[10px] md:mb-[20px] uppercase">
            <?php echo esc_html($hero_title); ?>
          </h1>
        <?php endif; ?>

        <?php if (!empty($hero_description)) : ?>
          <p class="text-[14px] sm:text-[15px] md:text-[16px] lg:text-[18px] leading-relaxed opacity-90">
            <?php echo esc_html($hero_description); ?>
          </p>
        <?php endif; ?>

        <?php if (!empty($hero_button_text)) : ?>
        <div class="flex justify-start mt-[16px]">
          <a href="<?php echo esc_url($hero_button_link ?? '#'); ?>" class="click-fx group bg-brand-yellow hover:bg-brand-yellow/90 text-text-main font-bold text-xs px-6 py-2.5 rounded-full shadow-md hover:shadow-lg transition-all duration-300 inline-flex gap-2 items-center uppercase tracking-wider no-underline">
            <span><?php echo esc_html($hero_button_text); ?></span>
            <span class="icon-[solar--arrow-right-linear] w-4 h-4 text-text-main flex-shrink-0 transition-transform duration-300 group-hover:translate-x-1"></span>
          </a>
        </div>
        <?php endif; ?>

      </div>
    </div>
  </div>
</section>

<section class="max-w-7xl mx-auto px-6 py-20">
    <h2 class="anim-fade-up text-center text-amber-950 text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-heading font-black uppercase mb-10">
        <?php echo esc_html($opportunities_title); ?>
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 dynamic-cards-container">
        
        <!-- Card 1: Career / Jobs (Border: Yellow -> Title: Yellow) -->
        <div class="opportunity-card click-fx click-fx--dark anim-fade-up anim-delay-1 cursor-pointer bg-brand-cream border-l-6 border-brand-yellow rounded-[28px] p-8 text-center flex flex-col items-center group shadow-md hover:shadow-xl transition-all duration-300 ease-out transform"
            data-title="<?php echo esc_attr($card_1_title); ?>"
            data-icon="solar--case-minimalistic-linear">

            <div class="text-text-main text-3xl mb-5 bg-white w-14 h-14 rounded-full flex items-center justify-center group-hover:bg-brand-yellow transition-colors duration-300">
                <span class="icon-[solar--case-minimalistic-linear] w-6 h-6 text-text-main"></span>
            </div>

            <!-- Match Title Color to Border (Yellow) -->
            <h3 class="text-brand-yellow text-xl sm:text-2xl mb-4 lg:text-3xl font-heading font-black uppercase tracking-wide">
                <?php echo esc_html($card_1_title); ?>
            </h3>

            <p class="text-text-muted text-sm leading-relaxed max-w-xs font-sans">
                <?php echo esc_html($card_1_description); ?>
            </p>
            <div class="w-16 h-1 bg-brand-yellow mt-3 mb-4 rounded-full group-hover:w-24 transition-all duration-300"></div>

            <template class="modal-roles-template">
                <div class="border border-brand-brown/10 rounded-[28px] p-6 bg-white flex-1 flex flex-col space-y-4 text-left">

                    <!-- Role 1 -->
                    <div class="bg-brand-cream p-5 rounded-[20px] flex flex-col group transition duration-300">
                        <div class="flex flex-col w-full">
                            <div>
                                <h4 class="font-bold text-text-main text-sm md:text-base tracking-wide uppercase font-heading">
                                    <?php echo esc_html($role_1_title); ?>
                                </h4>

                                <div class="flex flex-wrap items-center gap-4 text-xs text-text-muted mt-2 font-medium font-sans">
                                    <span class="flex items-center gap-1">
                                        <span class="icon-[solar--map-point-linear] w-4 h-4 text-brand-orange"></span>
                                        <?php echo esc_html($career_role_1_location); ?>
                                    </span>
                                    <span class="flex items-center gap-1">
                                        <span class="icon-[solar--clock-circle-linear] w-4 h-4 text-brand-orange"></span>
                                        <?php echo esc_html($career_role_1_employment_type); ?>
                                    </span>
                                </div>
                            </div>

                            <div class="text-text-muted text-sm leading-relaxed mt-4 font-sans">
                                <span class="short-text"><?php echo esc_html($career_role_1_description); ?></span>
                                <span class="dots">......</span>
                                <span class="role-details hidden">
                                    <span><?php echo esc_html($career_role_1_details); ?></span>
                                </span>
                            </div>

                            <div class="flex justify-between items-center mt-4">
                                <button
                                    type="button"
                                    class="read-more-btn click-fx inline-flex items-center gap-1.5 px-3 py-1.5 border border-brand-brown/20 text-text-main font-semibold text-xs rounded-full bg-white shadow-sm hover:bg-brand-brown hover:text-text-light transition duration-300"
                                    data-read-more="<?php echo esc_attr($read_more_1_text); ?>"
                                    data-show-less="បង្ហាញតិចជាង">
                                    <span class="btn-text"><?php echo esc_html($read_more_1_text); ?></span>
                                    <span class="btn-arrow icon-[solar--alt-arrow-down-linear] w-3 h-3 transition-transform duration-300"></span>
                                </button>

                                <a href="https://www.linkedin.com/company/the-rabbit-school-organization/"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="click-fx click-fx--dark inline-flex items-center gap-2 px-3 py-1.5 bg-brand-brown text-text-light text-xs font-semibold rounded-full hover:bg-brand-brown/90 transition">
                                    ដាក់ពាក្យសុំឥឡូវនេះ
                                    <span class="icon-[solar--export-linear] w-3.5 h-3.5"></span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Role 2 -->
                    <div class="bg-brand-cream p-5 rounded-[20px] flex flex-col group transition duration-300">
                        <div class="flex flex-col w-full">
                            <div>
                                <h4 class="font-bold text-text-main text-sm md:text-base tracking-wide uppercase font-heading">
                                    <?php echo esc_html($role_2_title); ?>
                                </h4>

                                <div class="flex flex-wrap items-center gap-4 text-xs text-text-muted mt-2 font-medium font-sans">
                                    <span class="flex items-center gap-1">
                                        <span class="icon-[solar--map-point-linear] w-4 h-4 text-brand-orange"></span>
                                        <?php echo esc_html($career_role_2_location); ?>
                                    </span>
                                    <span class="flex items-center gap-1">
                                        <span class="icon-[solar--clock-circle-linear] w-4 h-4 text-brand-orange"></span>
                                        <?php echo esc_html($career_role_2_employment_type); ?>
                                    </span>
                                </div>
                            </div>

                            <div class="text-text-muted text-sm leading-relaxed mt-4 font-sans">
                                <span class="short-text"><?php echo esc_html($role_2_description); ?></span>
                                <span class="dots">......</span>
                                <span class="role-details hidden">
                                    <span><?php echo esc_html($career_role_2_details); ?></span>
                                </span>
                            </div>

                            <div class="flex justify-between items-center mt-4">
                                <button
                                    type="button"
                                    class="read-more-btn click-fx inline-flex items-center gap-1.5 px-3 py-1.5 border border-brand-brown/20 text-text-main font-semibold text-xs rounded-full bg-white shadow-sm hover:bg-brand-brown hover:text-text-light transition duration-300"
                                    data-read-more="<?php echo esc_attr($read_more_2_text); ?>"
                                    data-show-less="បង្ហាញតិចជាង">
                                    <span class="btn-text"><?php echo esc_html($read_more_2_text); ?></span>
                                    <span class="btn-arrow icon-[solar--alt-arrow-down-linear] w-3 h-3 transition-transform duration-300"></span>
                                </button>

                                <a href="https://www.linkedin.com/company/the-rabbit-school-organization/"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="click-fx click-fx--dark inline-flex items-center gap-2 px-3 py-1.5 bg-brand-brown text-text-light text-xs font-semibold rounded-full hover:bg-brand-brown/90 transition">
                                    ដាក់ពាក្យសុំឥឡូវនេះ
                                    <span class="icon-[solar--export-linear] w-3.5 h-3.5"></span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </template>
        </div>

        <!-- Card 2: Volunteer Opportunities (Border: Blue -> Title: Blue) -->
        <div class="opportunity-card click-fx click-fx--dark anim-fade-up anim-delay-2 cursor-pointer bg-brand-cream border-l-6 border-brand-blue rounded-[28px] p-8 text-center flex flex-col items-center group shadow-md hover:shadow-xl transition-all duration-300 ease-out transform"
            data-title="<?php echo esc_attr($card_2_title); ?>"
            data-icon="solar--heart-angle-linear">

            <div class="text-text-main text-3xl mb-5 bg-white w-14 h-14 rounded-full flex items-center justify-center group-hover:bg-brand-blue group-hover:text-white transition-colors duration-300">
                <span class="icon-[solar--heart-angle-linear] w-6 h-6 text-text-main group-hover:text-white"></span>
            </div>

            <!-- Match Title Color to Border (Blue) -->
            <h3 class="text-brand-blue text-xl sm:text-2xl mb-4 lg:text-3xl font-heading font-black uppercase tracking-wide">
                <?php echo esc_html($card_2_title); ?>
            </h3>

            <p class="text-text-muted text-sm leading-relaxed max-w-xs font-sans">
                <?php echo esc_html($card_2_description); ?>
            </p>
            <div class="w-16 h-1 bg-brand-blue mt-3 mb-4 rounded-full group-hover:w-24 transition-all duration-300"></div>

            <template class="modal-roles-template">
                <div class="border border-brand-brown/10 rounded-[28px] p-6 bg-white flex-1 flex flex-col space-y-4 text-left">

                    <div class="bg-brand-cream p-5 rounded-[20px] flex flex-col group transition duration-300">
                        <div class="flex flex-col w-full">
                            <div>
                                <h4 class="font-bold text-text-main text-sm md:text-base tracking-wide uppercase font-heading">
                                    <?php echo esc_html($volunteer_role_title); ?>
                                </h4>

                                <div class="flex flex-wrap items-center gap-4 text-xs text-text-muted mt-2 font-medium font-sans">
                                    <span class="flex items-center gap-1">
                                        <span class="icon-[solar--map-point-linear] w-4 h-4 text-brand-orange"></span>
                                        <?php echo esc_html($volunteer_location); ?>
                                    </span>
                                    <span class="flex items-center gap-1">
                                        <span class="icon-[solar--clock-circle-linear] w-4 h-4 text-brand-orange"></span>
                                        <?php echo esc_html($volunteer_employment_type); ?>
                                    </span>
                                </div>
                            </div>

                            <div class="text-text-muted text-sm leading-relaxed mt-4 font-sans">
                                <span class="short-text"><?php echo esc_html($volunteer_description); ?></span>
                                <span class="dots">......</span>
                                <span class="role-details hidden">
                                    <span><?php echo esc_html($volunteer_details); ?></span>
                                </span>
                            </div>

                            <div class="flex justify-between items-center mt-4">
                                <button
                                    type="button"
                                    class="read-more-btn click-fx inline-flex items-center gap-1.5 px-3 py-1.5 border border-brand-brown/20 text-text-main font-semibold text-xs rounded-full bg-white shadow-sm hover:bg-brand-brown hover:text-text-light transition duration-300"
                                    data-read-more="<?php echo esc_attr($volunteer_read_more_text); ?>"
                                    data-show-less="បង្ហាញតិចជាង">
                                    <span class="btn-text"><?php echo esc_html($volunteer_read_more_text); ?></span>
                                    <span class="btn-arrow icon-[solar--alt-arrow-down-linear] w-3 h-3 transition-transform duration-300"></span>
                                </button>

                                <a href="https://www.linkedin.com/company/the-rabbit-school-organization/"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="click-fx click-fx--dark inline-flex items-center gap-2 px-3 py-1.5 bg-brand-brown text-text-light text-xs font-semibold rounded-full hover:bg-brand-brown/90 transition">
                                    ដាក់ពាក្យសុំឥឡូវនេះ
                                    <span class="icon-[solar--export-linear] w-3.5 h-3.5"></span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </template>
        </div>

        <!-- Card 3: Internship Opportunities (Border: Pink -> Title: Pink) -->
        <div class="opportunity-card click-fx click-fx--dark anim-fade-up anim-delay-3 cursor-pointer bg-brand-cream border-l-6 border-brand-pink rounded-[28px] p-8 text-center flex flex-col items-center group shadow-md hover:shadow-xl transition-all duration-300 ease-out transform"
            data-title="<?php echo esc_attr($card_3_title); ?>"
            data-icon="solar--minimalistic-magnifer-linear">

            <div class="text-text-main text-3xl mb-5 bg-white w-14 h-14 rounded-full flex items-center justify-center group-hover:bg-brand-pink group-hover:text-white transition-colors duration-300">
                <!-- Fixed icon syntax for Internship -->
                <span class="icon-[solar--minimalistic-magnifer-linear] w-6 h-6 text-text-main group-hover:text-white"></span>
            </div>

            <!-- Match Title Color to Border (Pink) -->
            <h3 class="text-brand-pink text-xl sm:text-2xl mb-4 lg:text-3xl font-heading font-black uppercase tracking-wide">
                <?php echo esc_html($card_3_title); ?>
            </h3>

            <p class="text-text-muted text-sm leading-relaxed max-w-xs font-sans">
                <?php echo esc_html($card_3_description); ?>
            </p>
            <div class="w-16 h-1 bg-brand-pink mt-3 mb-4 rounded-full group-hover:w-24 transition-all duration-300"></div>

            <template class="modal-roles-template">
                <div class="border border-brand-brown/10 rounded-[28px] p-6 bg-white flex-1 flex flex-col space-y-4 text-left">

                    <!-- Internship Role 1 -->
                    <div class="bg-brand-cream p-5 rounded-[20px] flex flex-col group transition duration-300">
                        <div class="flex flex-col w-full">
                            <div>
                                <h4 class="font-bold text-text-main text-sm md:text-base tracking-wide uppercase font-heading">
                                    <?php echo esc_html($internship_role_1_title); ?>
                                </h4>

                                <div class="flex flex-wrap items-center gap-4 text-xs text-text-muted mt-2 font-medium font-sans">
                                    <span class="flex items-center gap-1">
                                        <span class="icon-[solar--map-point-linear] w-4 h-4 text-brand-orange"></span>
                                        <?php echo esc_html($internship_role_1_location); ?>
                                    </span>
                                    <span class="flex items-center gap-1">
                                        <span class="icon-[solar--clock-circle-linear] w-4 h-4 text-brand-orange"></span>
                                        <?php echo esc_html($internship_role_1_employment_type); ?>
                                    </span>
                                </div>
                            </div>

                            <div class="text-text-muted text-sm leading-relaxed mt-4 font-sans">
                                <span class="short-text"><?php echo esc_html($internship_role_1_description); ?></span>
                                <span class="dots">......</span>
                                <span class="role-details hidden">
                                    <span><?php echo esc_html($internship_role_1_details); ?></span>
                                </span>
                            </div>

                            <div class="flex justify-between items-center mt-4">
                                <button
                                    type="button"
                                    class="read-more-btn click-fx inline-flex items-center gap-1.5 px-3 py-1.5 border border-brand-brown/20 text-text-main font-semibold text-xs rounded-full bg-white shadow-sm hover:bg-brand-brown hover:text-text-light transition duration-300"
                                    data-read-more="<?php echo esc_attr($internship_read_more_1_text); ?>"
                                    data-show-less="បង្ហាញតិចជាង">
                                    <span class="btn-text"><?php echo esc_html($internship_read_more_1_text); ?></span>
                                    <span class="btn-arrow icon-[solar--alt-arrow-down-linear] w-3 h-3 transition-transform duration-300"></span>
                                </button>

                                <a href="https://www.linkedin.com/company/the-rabbit-school-organization/"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="click-fx click-fx--dark inline-flex items-center gap-2 px-3 py-1.5 bg-brand-brown text-text-light text-xs font-semibold rounded-full hover:bg-brand-brown/90 transition">
                                    ដាក់ពាក្យសុំឥឡូវនេះ
                                    <span class="icon-[solar--export-linear] w-3.5 h-3.5"></span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Internship Role 2 -->
                    <div class="bg-brand-cream p-5 rounded-[20px] flex flex-col group transition duration-300">
                        <div class="flex flex-col w-full">
                            <div>
                                <h4 class="font-bold text-text-main text-sm md:text-base tracking-wide uppercase font-heading">
                                    <?php echo esc_html($internship_role_2_title); ?>
                                </h4>

                                <div class="flex flex-wrap items-center gap-4 text-xs text-text-muted mt-2 font-medium font-sans">
                                    <span class="flex items-center gap-1">
                                        <span class="icon-[solar--map-point-linear] w-4 h-4 text-brand-orange"></span>
                                        <?php echo esc_html($internship_role_2_location); ?>
                                    </span>
                                    <span class="flex items-center gap-1">
                                        <span class="icon-[solar--clock-circle-linear] w-4 h-4 text-brand-orange"></span>
                                        <?php echo esc_html($internship_role_2_employment_type); ?>
                                    </span>
                                </div>
                            </div>

                            <div class="text-text-muted text-sm leading-relaxed mt-4 font-sans">
                                <span class="short-text"><?php echo esc_html($internship_role_2_description); ?></span>
                                <span class="dots">......</span>
                                <span class="role-details hidden">
                                    <span><?php echo esc_html($internship_role_2_details); ?></span>
                                </span>
                            </div>

                            <div class="flex justify-between items-center mt-4">
                                <button
                                    type="button"
                                    class="read-more-btn click-fx inline-flex items-center gap-1.5 px-3 py-1.5 border border-brand-brown/20 text-text-main font-semibold text-xs rounded-full bg-white shadow-sm hover:bg-brand-brown hover:text-text-light transition duration-300"
                                    data-read-more="<?php echo esc_attr($internship_read_more_2_text); ?>"
                                    data-show-less="បង្ហាញតិចជាង">
                                    <span class="btn-text"><?php echo esc_html($internship_read_more_2_text); ?></span>
                                    <span class="btn-arrow icon-[solar--alt-arrow-down-linear] w-3 h-3 transition-transform duration-300"></span>
                                </button>

                                <a href="https://www.linkedin.com/company/the-rabbit-school-organization/"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="click-fx click-fx--dark inline-flex items-center gap-2 px-3 py-1.5 bg-brand-brown text-text-light text-xs font-semibold rounded-full hover:bg-brand-brown/90 transition">
                                    ដាក់ពាក្យសុំឥឡូវនេះ
                                    <span class="icon-[solar--export-linear] w-3.5 h-3.5"></span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </template>
        </div>
    </div>
</section>
<div id="opportunityModal" class="fixed inset-0 z-[2000] flex items-center justify-center p-4 bg-black/70 opacity-0 pointer-events-none transition-opacity duration-300">
    <div id="modalContainer" class="relative w-full max-w-xl bg-white rounded-2xl shadow-2xl overflow-hidden transform scale-95 transition-transform duration-300 flex flex-col max-h-[90vh]">
        <div class="overflow-y-auto p-6 md:p-8">
            <div class="flex justify-center mb-5">
                <div id="modalIconContainer" class="w-16 h-16 rounded-full bg-amber-50 text-amber-950 text-3xl flex items-center justify-center border border-amber-100">
                    <i id="modalIcon" class="fa-solid"></i>
                </div>
            </div>
            <h3 id="modalTitle" class="text-amber-950 text-2xl font-heading font-black text-center uppercase tracking-wide mb-6"></h3>
            <div id="modalRolesContainer"></div>
        </div>
        <div class="p-4 bg-gray-50 border-t border-gray-100 flex justify-end">
            <button id="closeModalFooterBtn" class="click-fx click-fx--dark bg-amber-950 hover:bg-amber-900 text-white font-bold py-2.5 px-6 rounded-xl transition-colors duration-200 text-sm">
                <?php echo esc_html($close_button_1_text); ?>
            </button>
        </div>
    </div>
</div>
<section class="max-w-7xl mx-auto px-4 sm:px-6 pb-16 sm:pb-28">
    <div class="anim-fade-up anim-delay-4 bg-amber-950 text-white rounded-2xl sm:rounded-3xl p-6 sm:p-8 md:p-12 lg:p-16 shadow-2xl">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 sm:gap-8 lg:gap-12 items-center">
            <!-- Left Info -->
            <div class="anim-slide-left lg:col-span-6">
                <h3 class="font-heading text-2xl sm:text-3xl md:text-4xl lg:text-5xl uppercase tracking-wide mb-3 sm:mb-4 font-black">
                    <?php echo esc_html($connected_heading); ?>
                </h3>
                <p class="text-sm md:text-base text-gray-300 leading-relaxed font-medium">
                    <?php echo esc_html($connected_description); ?>
                </p>
            </div>

            <!-- Right Contacts -->
            <div class="anim-slide-right lg:col-span-6 space-y-4 sm:space-y-6 bg-white/10 p-5 sm:p-6 md:p-8 rounded-[16px] sm:rounded-[20px] border border-white/10">
                <!-- Email -->
                <div class="flex items-center gap-3 sm:gap-4">
                    <div class="w-10 h-10 sm:w-12 sm:h-12 bg-brand-yellow text-text-main rounded-[14px] sm:rounded-[16px] flex items-center justify-center flex-shrink-0">
                        <span class="icon-[solar--letter-linear] w-5 h-5 sm:w-6 sm:h-6 text-text-main"></span>
                    </div>
                    <div class="min-w-0">
                        <h5 class="text-sm font-heading uppercase text-brand-yellow">
                            <?php echo esc_html($email_title); ?>
                        </h5>
                        <a href="mailto:<?php echo esc_attr($email_address); ?>" class="text-[13px] sm:text-[15px] md:text-[16px] hover:underline font-sans text-text-light block mt-0.5 break-all">
                            <?php echo esc_html($email_address); ?>
                        </a>
                    </div>
                </div>

                <!-- Facebook -->
                <div class="flex items-center gap-3 sm:gap-4">
                    <div class="w-10 h-10 sm:w-12 sm:h-12 bg-brand-blue text-text-light rounded-[14px] sm:rounded-[16px] flex items-center justify-center flex-shrink-0">
                        <span class="icon-[ic--baseline-facebook] w-5 h-5 sm:w-6 sm:h-6 text-text-light"></span>
                    </div>
                    <div class="min-w-0">
                        <h5 class="text-sm font-heading uppercase text-brand-yellow">
                            <?php echo esc_html($facebook_page); ?>
                        </h5>
                        <a href="<?php echo esc_url($facebook_page_link); ?>" target="_blank" rel="noopener noreferrer" class="text-[13px] sm:text-[15px] md:text-[16px] hover:underline font-sans text-text-light block mt-0.5 break-all">
                            <?php echo esc_html($facebook_page_link); ?>
                        </a>
                    </div>
                </div>

                <!-- Phone -->
                <div class="flex items-center gap-3 sm:gap-4">
                    <div class="w-10 h-10 sm:w-12 sm:h-12 bg-brand-pink text-text-main rounded-[14px] sm:rounded-[16px] flex items-center justify-center flex-shrink-0">
                        <span class="icon-[solar--phone-calling-linear] w-5 h-5 sm:w-6 sm:h-6 text-text-main"></span>
                    </div>
                    <div class="min-w-0">
                        <h5 class="text-sm font-heading uppercase text-brand-yellow">
                            <?php echo esc_html($phone_title); ?>
                        </h5>
                        <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', $phone_number)); ?>" class="text-[13px] sm:text-[15px] md:text-[16px] hover:underline font-sans text-text-light block mt-0.5 break-all">
                            <?php echo esc_html($phone_number); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<script>
    document.addEventListener('DOMContentLoaded', () => {

        // Trigger page visibility load (matches site-wide fade-in)
        document.body.classList.add('loaded');

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

        const cards = document.querySelectorAll('.opportunity-card');
        const modal = document.getElementById('opportunityModal');
        const modalContainer = document.getElementById('modalContainer');
        const closeBtns = document.querySelectorAll('#closeModalBtn, #closeModalFooterBtn');

        const modalIcon = document.getElementById('modalIcon');
        const modalTitle = document.getElementById('modalTitle');
        const modalRolesContainer = document.getElementById('modalRolesContainer');

        function openModal(card) {
            const title = card.getAttribute('data-title');
            const icon = card.getAttribute('data-icon');
            const template = card.querySelector('.modal-roles-template');

            modalTitle.textContent = title;

            // Updated to handle Iconify icon class correctly
            if (modalIcon) {
                modalIcon.className = `icon-[${icon.replace(':', '--')}] w-6 h-6 text-text-main`;
            }

            modalRolesContainer.innerHTML = '';

            if (template) {
                const clone = template.content.cloneNode(true);
                modalRolesContainer.appendChild(clone);
            }

            // Smooth entrance transitions
            modal.classList.remove('pointer-events-none');
            modal.style.transition = 'opacity 0.3s ease-out';
            modal.style.opacity = '1';

            modalContainer.style.transition = 'all 0.3s cubic-bezier(0.16, 1, 0.3, 1)';
            modalContainer.style.transform = 'scale(1) translateY(0)';
            modalContainer.style.opacity = '1';

            document.body.classList.add('overflow-hidden');
        }

        function closeModal() {
            // Smooth exit transitions
            modal.style.transition = 'opacity 0.25s ease-in';
            modal.style.opacity = '0';

            modalContainer.style.transition = 'all 0.25s cubic-bezier(0.16, 1, 0.3, 1)';
            modalContainer.style.transform = 'scale(0.95) translateY(10px)';
            modalContainer.style.opacity = '0';

            setTimeout(() => {
                modal.classList.add('pointer-events-none');
            }, 250);

            document.body.classList.remove('overflow-hidden');
        }

        cards.forEach(card => {
            card.addEventListener('click', (e) => {
                if (!e.target.closest('.modal-roles-template')) {
                    openModal(card);
                }
            });
        });

        closeBtns.forEach(btn => {
            btn.addEventListener('click', closeModal);
        });

        modal.addEventListener('click', (e) => {
            if (e.target === modal) {
                closeModal();
            }
        });

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                closeModal();
            }
        });

        modalRolesContainer.addEventListener('click', function(e) {
            const btn = e.target.closest('.read-more-btn');
            if (!btn) return;

            const cardParent = btn.closest('.bg-brand-cream');
            if (!cardParent) return;

            const detailsPanel = cardParent.querySelector('.role-details');
            const dots = cardParent.querySelector('.dots');
            const btnText = btn.querySelector('.btn-text');
            const btnArrow = btn.querySelector('.btn-arrow');

            if (!detailsPanel) return;

            // Check current visibility state to handle smooth accordion transition
            const isHidden = detailsPanel.classList.contains('hidden');

            if (isHidden) {
                // Prepare for opening animation
                detailsPanel.classList.remove('hidden');
                detailsPanel.style.maxHeight = '0px';
                detailsPanel.style.opacity = '0';
                detailsPanel.style.overflow = 'hidden';
                detailsPanel.style.transition = 'max-height 0.35s ease-out, opacity 0.35s ease-out';

                // Force reflow
                detailsPanel.offsetHeight;

                // Animate to full height
                detailsPanel.style.maxHeight = detailsPanel.scrollHeight + 'px';
                detailsPanel.style.opacity = '1';

                setTimeout(() => {
                    detailsPanel.style.maxHeight = 'none'; // Allow flexible content inside
                }, 350);

                if (dots) dots.classList.add('hidden');
                if (btnText) btnText.textContent = btn.dataset.showLess || 'បង្ហាញតិចជាង';
                if (btnArrow) btnArrow.classList.add('rotate-180');

            } else {
                // Prepare for closing animation
                detailsPanel.style.maxHeight = detailsPanel.scrollHeight + 'px';
                detailsPanel.style.opacity = '1';
                detailsPanel.style.overflow = 'hidden';
                detailsPanel.style.transition = 'max-height 0.3s ease-in, opacity 0.3s ease-in';

                // Force reflow
                detailsPanel.offsetHeight;

                // Animate back to 0
                detailsPanel.style.maxHeight = '0px';
                detailsPanel.style.opacity = '0';

                setTimeout(() => {
                    detailsPanel.classList.add('hidden');
                    detailsPanel.style.maxHeight = '';
                    detailsPanel.style.opacity = '';
                    detailsPanel.style.overflow = '';
                    detailsPanel.style.transition = '';
                }, 300);

                if (dots) dots.classList.remove('hidden');
                if (btnText) btnText.textContent = btn.dataset.readMore || 'Read More';
                if (btnArrow) btnArrow.classList.remove('rotate-180');
            }
        });

    });
</script>

<?php get_footer(); ?>

<style>
    /* Font Utilities */
    .font-heading {
        font-family: 'Oswald', sans-serif;
    }

    .font-body {
        font-family: 'Inter', sans-serif;
    }

    /* Modal Backdrop Initial State */
    #opportunityModal {
        opacity: 0;
        pointer-events: none; /* Prevents invisible overlay from blocking clicks when closed */
        transition: opacity 0.3s ease-out;
    }

    /* Modal Container Initial State */
    #modalContainer {
        opacity: 0;
        transform: scale(0.95) translateY(10px);
        transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    }

    /* Active States (Add these classes via JS when opening the modal) */
    #opportunityModal.is-open {
        opacity: 1;
        pointer-events: auto;
    }

    #opportunityModal.is-open #modalContainer {
        opacity: 1;
        transform: scale(1) translateY(0);
    }

    /* Keyframe Animations */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Utility class to apply the keyframe animation */
    .animate-fade-in-up {
        animation: fadeInUp 0.4s ease-out forwards;
    }
</style>