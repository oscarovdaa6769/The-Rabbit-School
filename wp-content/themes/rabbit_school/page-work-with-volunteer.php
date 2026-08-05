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

<section class="relative overflow-hidden">
  <?php if (!empty($hero_image)) : ?>
    <img src="<?php echo esc_url(is_array($hero_image) ? $hero_image['url'] : $hero_image); ?>" 
    alt="<?php echo esc_attr(is_array($hero_image) ? $hero_image['alt'] : ($hero_title ?? '')); ?>" 
    class="h-[500px] md:h-[700px] w-full object-cover">
  <?php endif; ?>
  
  <div class="absolute inset-0 z-10 bg-black/30 flex items-end">
    <div class="w-full max-w-7xl mx-auto py-[64px] md:py-[50px] px-[20px] 2xl:px-0">
      <div class="max-w-2xl text-text-light">
        
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
          <a href="<?php echo esc_url($hero_button_link ?? '#'); ?>" class="group bg-brand-yellow hover:bg-brand-yellow/90 text-text-main font-bold text-xs px-6 py-2.5 rounded-full shadow-md hover:shadow-lg transition-all duration-300 inline-flex gap-2 items-center uppercase tracking-wider no-underline">
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
    <h2 class="text-center text-amber-950 text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-heading font-black uppercase mb-10">
        <?php echo esc_html($opportunities_title); ?>
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 dynamic-cards-container">
        
        <!-- Card 1: Career / Jobs (Border: Yellow -> Title: Yellow) -->
        <div class="opportunity-card cursor-pointer bg-brand-cream border-l-6 border-brand-yellow rounded-[28px] p-8 text-center flex flex-col items-center group shadow-md hover:shadow-xl transition-all duration-300 ease-out transform"
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
                                    class="read-more-btn inline-flex items-center gap-1.5 px-3 py-1.5 border border-brand-brown/20 text-text-main font-semibold text-xs rounded-full bg-white shadow-sm hover:bg-brand-brown hover:text-text-light transition duration-300"
                                    data-read-more="<?php echo esc_attr($read_more_1_text); ?>"
                                    data-show-less="Show Less">
                                    <span class="btn-text"><?php echo esc_html($read_more_1_text); ?></span>
                                    <span class="btn-arrow icon-[solar--alt-arrow-down-linear] w-3 h-3 transition-transform duration-300"></span>
                                </button>

                                <a href="https://www.linkedin.com/company/the-rabbit-school-organization/"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="inline-flex items-center gap-2 px-3 py-1.5 bg-brand-brown text-text-light text-xs font-semibold rounded-full hover:bg-brand-brown/90 transition">
                                    Apply Now
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
                                    class="read-more-btn inline-flex items-center gap-1.5 px-3 py-1.5 border border-brand-brown/20 text-text-main font-semibold text-xs rounded-full bg-white shadow-sm hover:bg-brand-brown hover:text-text-light transition duration-300"
                                    data-read-more="<?php echo esc_attr($read_more_2_text); ?>"
                                    data-show-less="Show Less">
                                    <span class="btn-text"><?php echo esc_html($read_more_2_text); ?></span>
                                    <span class="btn-arrow icon-[solar--alt-arrow-down-linear] w-3 h-3 transition-transform duration-300"></span>
                                </button>

                                <a href="https://www.linkedin.com/company/the-rabbit-school-organization/"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="inline-flex items-center gap-2 px-3 py-1.5 bg-brand-brown text-text-light text-xs font-semibold rounded-full hover:bg-brand-brown/90 transition">
                                    Apply Now
                                    <span class="icon-[solar--export-linear] w-3.5 h-3.5"></span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </template>
        </div>

        <!-- Card 2: Volunteer Opportunities (Border: Blue -> Title: Blue) -->
        <div class="opportunity-card cursor-pointer bg-brand-cream border-l-6 border-brand-blue rounded-[28px] p-8 text-center flex flex-col items-center group shadow-md hover:shadow-xl transition-all duration-300 ease-out transform"
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
                                    class="read-more-btn inline-flex items-center gap-1.5 px-3 py-1.5 border border-brand-brown/20 text-text-main font-semibold text-xs rounded-full bg-white shadow-sm hover:bg-brand-brown hover:text-text-light transition duration-300"
                                    data-read-more="<?php echo esc_attr($volunteer_read_more_text); ?>"
                                    data-show-less="Show Less">
                                    <span class="btn-text"><?php echo esc_html($volunteer_read_more_text); ?></span>
                                    <span class="btn-arrow icon-[solar--alt-arrow-down-linear] w-3 h-3 transition-transform duration-300"></span>
                                </button>

                                <a href="https://www.linkedin.com/company/the-rabbit-school-organization/"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="inline-flex items-center gap-2 px-3 py-1.5 bg-brand-brown text-text-light text-xs font-semibold rounded-full hover:bg-brand-brown/90 transition">
                                    Apply Now
                                    <span class="icon-[solar--export-linear] w-3.5 h-3.5"></span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </template>
        </div>

        <!-- Card 3: Internship Opportunities (Border: Pink -> Title: Pink) -->
        <div class="opportunity-card cursor-pointer bg-brand-cream border-l-6 border-brand-pink rounded-[28px] p-8 text-center flex flex-col items-center group shadow-md hover:shadow-xl transition-all duration-300 ease-out transform"
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
                                    class="read-more-btn inline-flex items-center gap-1.5 px-3 py-1.5 border border-brand-brown/20 text-text-main font-semibold text-xs rounded-full bg-white shadow-sm hover:bg-brand-brown hover:text-text-light transition duration-300"
                                    data-read-more="<?php echo esc_attr($internship_read_more_1_text); ?>"
                                    data-show-less="Show Less">
                                    <span class="btn-text"><?php echo esc_html($internship_read_more_1_text); ?></span>
                                    <span class="btn-arrow icon-[solar--alt-arrow-down-linear] w-3 h-3 transition-transform duration-300"></span>
                                </button>

                                <a href="https://www.linkedin.com/company/the-rabbit-school-organization/"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="inline-flex items-center gap-2 px-3 py-1.5 bg-brand-brown text-text-light text-xs font-semibold rounded-full hover:bg-brand-brown/90 transition">
                                    Apply Now
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
                                    class="read-more-btn inline-flex items-center gap-1.5 px-3 py-1.5 border border-brand-brown/20 text-text-main font-semibold text-xs rounded-full bg-white shadow-sm hover:bg-brand-brown hover:text-text-light transition duration-300"
                                    data-read-more="<?php echo esc_attr($internship_read_more_2_text); ?>"
                                    data-show-less="Show Less">
                                    <span class="btn-text"><?php echo esc_html($internship_read_more_2_text); ?></span>
                                    <span class="btn-arrow icon-[solar--alt-arrow-down-linear] w-3 h-3 transition-transform duration-300"></span>
                                </button>

                                <a href="https://www.linkedin.com/company/the-rabbit-school-organization/"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="inline-flex items-center gap-2 px-3 py-1.5 bg-brand-brown text-text-light text-xs font-semibold rounded-full hover:bg-brand-brown/90 transition">
                                    Apply Now
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
            <button id="closeModalFooterBtn" class="bg-amber-950 hover:bg-amber-900 text-white font-bold py-2.5 px-6 rounded-xl transition-colors duration-200 text-sm">
                <?php echo esc_html($close_button_1_text); ?>
            </button>
        </div>
    </div>
</div>
<section class="max-w-7xl mx-auto px-6 pb-28">
    <div class="bg-amber-950 text-white rounded-3xl p-8 md:p-12 lg:p-16 shadow-2xl">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
            <!-- Left Info -->
            <div class="lg:col-span-6">
                <h3 class="font-heading text-3xl md:text-4xl lg:text-5xl uppercase tracking-wide mb-4 font-black">
                    <?php echo esc_html($connected_heading); ?>
                </h3>
                <p class="text-sm md:text-base text-gray-300 leading-relaxed font-medium">
                    <?php echo esc_html($connected_description); ?>
                </p>
            </div>

            <!-- Right Contacts -->
            <div class="lg:col-span-6 space-y-6 bg-white/10 p-6 md:p-8 rounded-[20px] border border-white/10">
                <!-- Email -->
                <div class="flex items-center space-x-4">
                    <div class="w-12 h-12 bg-brand-yellow text-text-main rounded-[16px] flex items-center justify-center flex-shrink-0">
                        <span class="icon-[solar--letter-linear] w-6 h-6 text-text-main"></span>
                    </div>
                    <div>
                        <h5 class="text-sm font-heading uppercase text-brand-yellow">
                            <?php echo esc_html($email_title); ?>
                        </h5>
                        <a href="mailto:<?php echo esc_attr($email_address); ?>" class="text-[14px] sm:text-[15px] md:text-[16px] hover:underline font-sans text-text-light block mt-0.5">
                            <?php echo esc_html($email_address); ?>
                        </a>
                    </div>
                </div>

                <!-- Facebook -->
                <div class="flex items-center space-x-4">
                    <div class="w-12 h-12 bg-brand-blue text-text-light rounded-[16px] flex items-center justify-center flex-shrink-0">
                        <span class="icon-[ic--baseline-facebook] w-6 h-6 text-text-light"></span>
                    </div>
                    <div>
                        <h5 class="text-sm font-heading uppercase text-brand-yellow">
                            <?php echo esc_html($facebook_page); ?>
                        </h5>
                        <a href="<?php echo esc_url($facebook_page_link); ?>" target="_blank" rel="noopener noreferrer" class="text-[14px] sm:text-[15px] md:text-[16px] hover:underline font-sans text-text-light block mt-0.5">
                            <?php echo esc_html($facebook_page_link); ?>
                        </a>
                    </div>
                </div>

                <!-- Phone -->
                <div class="flex items-center space-x-4">
                    <div class="w-12 h-12 bg-brand-pink text-text-main rounded-[16px] flex items-center justify-center flex-shrink-0">
                        <span class="icon-[solar--phone-calling-linear] w-6 h-6 text-text-main"></span>
                    </div>
                    <div>
                        <h5 class="text-sm font-heading uppercase text-brand-yellow">
                            <?php echo esc_html($phone_title); ?>
                        </h5>
                        <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', $phone_number)); ?>" class="text-[14px] sm:text-[15px] md:text-[16px] hover:underline font-sans text-text-light block mt-0.5">
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

            modal.classList.remove('opacity-0', 'pointer-events-none');
            modal.classList.add('opacity-100');

            modalContainer.classList.remove('scale-95');
            modalContainer.classList.add('scale-100');

            document.body.classList.add('overflow-hidden');
        }

        function closeModal() {
            modal.classList.remove('opacity-100');
            modal.classList.add('opacity-0', 'pointer-events-none');

            modalContainer.classList.remove('scale-100');
            modalContainer.classList.add('scale-95');

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

            // Updated from .bg-gray-50 to .bg-brand-cream
            const cardParent = btn.closest('.bg-brand-cream');
            if (!cardParent) return;

            const detailsPanel = cardParent.querySelector('.role-details');
            const dots = cardParent.querySelector('.dots');
            const btnText = btn.querySelector('.btn-text');
            const btnArrow = btn.querySelector('.btn-arrow');

            if (!detailsPanel) return;

            const isHidden = detailsPanel.classList.toggle('hidden');

            if (!isHidden) {
                if (dots) {
                    dots.classList.add('hidden');
                }

                if (btnText) {
                    btnText.textContent = btn.dataset.showLess || 'Show Less';
                }

                if (btnArrow) {
                    btnArrow.classList.add('rotate-180');
                }

            } else {
                if (dots) {
                    dots.classList.remove('hidden');
                }

                if (btnText) {
                    btnText.textContent = btn.dataset.readMore || 'Read More';
                }

                if (btnArrow) {
                    btnArrow.classList.remove('rotate-180');
                }
            }
        });

    });
</script>

<?php get_footer(); ?>



<style>
    .font-heading {
        font-family: 'Oswald', 'Koulen', sans-serif;
    }

    .font-body {
        font-family: 'Inter', 'Battambang', sans-serif;
    }

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
</style>