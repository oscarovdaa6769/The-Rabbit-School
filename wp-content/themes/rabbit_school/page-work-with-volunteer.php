<?php
/**
 * Template Name: Work With Volunteer
 */
get_header();

// Hero
$hero_title        = get_field('hero_title') ?? '';
$hero_description  = get_field('hero_description') ?? '';
$hero_button_text  = get_field('hero_button_text') ?? '';
$hero_button_link  = get_field('hero_button_link') ?? '';
$hero_image        = get_field('hero_image');

// Section 2 - Opportunities
$opportunities_title = get_field('opportunities_title') ?? '';

// Card 1 - Careers
$card_1_title       = get_field('card_1_title') ?? '';
$card_1_description = get_field('card_1_description') ?? '';

$role_1_title                  = get_field('role_1_title') ?? '';
$career_role_1_location        = get_field('career_role_1_location') ?? '';
$career_role_1_employment_type = get_field('career_role_1_employment_type') ?? '';
$career_role_1_description     = get_field('career_role_1_description') ?? '';
$career_role_1_details         = get_field('career_role_1_details') ?? '';
$read_more_1_text              = get_field('read_more_1_text') ?? '';
$close_button_1_text           = get_field('close_button_1_text') ?? 'Close';

$role_2_title                  = get_field('role_2_title') ?? '';
$career_role_2_location        = get_field('career_role_2_location') ?? '';
$career_role_2_employment_type = get_field('career_role_2_employment_type') ?? '';
$role_2_description            = get_field('role_2_description') ?? '';
$career_role_2_details         = get_field('career_role_2_details') ?? '';
$read_more_2_text              = get_field('read_more_2_text') ?? '';

// Card 2 - Volunteer
$card_2_title       = get_field('card_2_title') ?? '';
$card_2_description = get_field('card_2_description') ?? '';

$volunteer_role_title      = get_field('volunteer_role_title') ?? '';
$volunteer_location        = get_field('volunteer_location') ?? '';
$volunteer_employment_type = get_field('volunteer_employment_type') ?? '';
$volunteer_description     = get_field('volunteer_description') ?? '';
$volunteer_details         = get_field('volunteer_details') ?? '';
$volunteer_read_more_text  = get_field('volunteer_read_more_text') ?? '';

// Card 3 - Internship
$card_3_title       = get_field('card_3_title') ?? '';
$card_3_description = get_field('card_3_description') ?? '';

$internship_role_1_title           = get_field('internship_role_1_title') ?? '';
$internship_role_1_location        = get_field('internship_role_1_location') ?? '';
$internship_role_1_employment_type = get_field('internship_role_1_employment_type') ?? '';
$internship_role_1_description     = get_field('internship_role_1_description') ?? '';
$internship_role_1_details         = get_field('internship_role_1_details') ?? '';
$internship_read_more_1_text       = get_field('internship_read_more_1_text') ?? '';

$internship_role_2_title           = get_field('internship_role_2_title') ?? '';
$internship_role_2_location        = get_field('internship_role_2_location') ?? '';
$internship_role_2_employment_type = get_field('internship_role_2_employment_type') ?? '';
$internship_role_2_description     = get_field('internship_role_2_description') ?? '';
$internship_role_2_details         = get_field('internship_role_2_details') ?? '';
$internship_read_more_2_text       = get_field('internship_read_more_2_text') ?? '';

// Ideas Section
$ideas_title       = get_field('ideas_title') ?? '';
$ideas_description = get_field('ideas_description') ?? '';

// Stay Connected
$connected_heading     = get_field('connected_heading') ?? '';
$connected_description = get_field('connected_description') ?? '';

$email_title   = get_field('email_title') ?? '';
$email_address = get_field('email_address') ?? '';

$facebook_page      = get_field('facebook_page') ?? '';
$facebook_page_link = get_field('facebook_page_link') ?? '';

$phone_title  = get_field('phone_title') ?? '';
$phone_number = get_field('phone_number') ?? '';
?>

<!-- HERO SECTION -->
<section class="rso-animate relative bg-brand-brown text-text-light h-[500px] md:h-[700px] flex items-end overflow-hidden" style="animation-delay: 0s;">
    <div class="absolute inset-0 z-0">
        <?php if (!empty($hero_image) && is_array($hero_image)): ?>
            <img
                src="<?php echo esc_url($hero_image['url']); ?>"
                alt="<?php echo esc_attr($hero_image['alt'] ?? ''); ?>"
                class="w-full h-full object-cover object-center transform scale-105 hover:scale-100 transition-transform duration-700 brightness-[0.85]" />
        <?php endif; ?>
        <div class="absolute inset-0 bg-gradient-to-t from-brand-brown/90 via-brand-brown/40 to-transparent"></div>
    </div>
    <div class="absolute inset-0 bg-gradient-to-r from-brand-brown/80 via-brand-brown/30 to-transparent"></div>

    <div class="relative max-w-7xl mx-auto px-[20px] 2xl:px-0 pb-16 pt-[120px] md:pt-[160px] w-full">
        <div class="max-w-2xl">
            <h1 class="text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-heading font-black uppercase mb-4 text-text-light leading-tight">
                <?php echo esc_html($hero_title); ?>
            </h1>
            <p class="text-[14px] sm:text-[15px] md:text-[16px] lg:text-[18px] font-sans font-medium mb-8 text-text-light/90 max-w-xl leading-relaxed">
                <?php echo esc_html($hero_description); ?>
            </p>
            <a href="<?php echo esc_url($hero_button_link); ?>" class="bg-brand-yellow text-brand-brown hover:bg-brand-orange hover:text-text-light py-[12px] px-[24px] rounded-[8px] text-sm font-bold uppercase tracking-wider inline-flex items-center space-x-3 transition-all duration-300 shadow-md hover:shadow-xl no-underline cursor-pointer">
                <span><?php echo esc_html($hero_button_text); ?></span>
                <span class="icon-[solar--arrow-right-linear] w-5 h-5 flex-shrink-0"></span>
            </a>
        </div>
    </div>
</section>

<!-- OPPORTUNITIES SECTION -->
<section class="rso-animate py-[64px] md:py-[50px] px-[20px] 2xl:px-0 font-sans" style="animation-delay: 0.15s;">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-center text-brand-brown text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-heading font-black uppercase mb-10 leading-tight">
            <?php echo esc_html($opportunities_title); ?>
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8 dynamic-cards-container">
            <!-- CARD 1 -->
            <div class="opportunity-card cursor-pointer bg-brand-cream border-l-6 border-brand-yellow rounded-[28px] p-6 sm:p-8 text-center flex flex-col items-center group hover:scale-[1.02] hover:shadow-xl transition-all duration-300 ease-out shadow-md"
                data-title="<?php echo esc_attr($card_1_title); ?>"
                data-icon="icon-[solar--case-minimalistic-bold]">

                <div class="text-brand-yellow text-2xl sm:text-3xl mb-5 bg-brand-yellow/20 w-16 h-16 rounded-full flex items-center justify-center transition-colors duration-300 flex-shrink-0">
                    <span class="icon-[solar--case-minimalistic-bold] w-6 h-6 text-brand-yellow transition-transform duration-500 group-hover:rotate-12"></span>
                </div>

                <h3 class="text-brand-yellow text-[16px] sm:text-[18px] md:text-[20px] mb-3 font-heading font-bold uppercase">
                    <?php echo esc_html($card_1_title); ?>
                </h3>

                <p class="text-text-muted text-[14px] sm:text-[15px] md:text-[16px] leading-relaxed max-w-xs font-sans">
                    <?php echo esc_html($card_1_description); ?>
                </p>
                <div class="w-16 h-1 bg-brand-yellow mt-4 mb-2 rounded-full group-hover:w-24 transition-all duration-300"></div>

                <template class="modal-roles-template">
                    <div class="border border-brand-brown/10 rounded-[20px] p-6 bg-white flex-1 flex flex-col space-y-4 text-left">

                        <div class="bg-brand-cream/60 p-5 rounded-[16px] flex flex-col group transition duration-300 border border-brand-brown/5">
                            <div class="flex flex-col w-full">
                                <div>
                                    <h4 class="font-bold text-brand-brown text-[16px] sm:text-[18px] md:text-[20px] font-heading uppercase">
                                        <?php echo esc_html($role_1_title); ?>
                                    </h4>

                                    <div class="flex flex-wrap items-center gap-4 text-[14px] sm:text-[15px] md:text-[16px] text-brand-brown/80 mt-2 font-semibold">
                                        <span class="flex items-center gap-1.5">
                                            <span class="icon-[solar--map-point-bold] w-4 h-4 text-brand-orange flex-shrink-0"></span> <?php echo esc_html($career_role_1_location); ?>
                                        </span>
                                        <span class="flex items-center gap-1.5">
                                            <span class="icon-[solar--clock-circle-bold] w-4 h-4 text-brand-orange flex-shrink-0"></span> <?php echo esc_html($career_role_1_employment_type); ?>
                                        </span>
                                    </div>
                                </div>

                                <div class="text-text-muted text-[14px] sm:text-[15px] md:text-[16px] leading-relaxed mt-4 font-sans">
                                    <span class="short-text"><?php echo esc_html($career_role_1_description); ?></span>
                                    <span class="dots">......</span>
                                    <span class="role-details hidden">
                                        <span><?php echo esc_html($career_role_1_details); ?></span>
                                    </span>
                                </div>

                                <div class="flex justify-end mt-3">
                                    <button type="button" class="read-more-btn inline-flex items-center gap-1 py-[12px] px-[24px] border border-brand-brown/20 text-brand-brown font-bold text-sm rounded-[8px] bg-white shadow-md hover:bg-brand-brown hover:text-text-light transition duration-300 cursor-pointer">
                                        <span class="btn-text"><?php echo esc_html($read_more_1_text); ?></span>
                                        <span class="btn-arrow icon-[solar--alt-arrow-down-linear] w-4 h-4"></span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="bg-brand-cream/60 p-5 rounded-[16px] flex flex-col group transition duration-300 border border-brand-brown/5">
                            <div class="flex flex-col w-full">
                                <div>
                                    <h4 class="font-bold text-brand-brown text-[16px] sm:text-[18px] md:text-[20px] font-heading uppercase">
                                        <?php echo esc_html($role_2_title); ?>
                                    </h4>

                                    <div class="flex flex-wrap items-center gap-4 text-[14px] sm:text-[15px] md:text-[16px] text-brand-brown/80 mt-2 font-semibold">
                                        <span class="flex items-center gap-1.5">
                                            <span class="icon-[solar--map-point-bold] w-4 h-4 text-brand-orange flex-shrink-0"></span> <?php echo esc_html($career_role_2_location); ?>
                                        </span>
                                        <span class="flex items-center gap-1.5">
                                            <span class="icon-[solar--clock-circle-bold] w-4 h-4 text-brand-orange flex-shrink-0"></span> <?php echo esc_html($career_role_2_employment_type); ?>
                                        </span>
                                    </div>
                                </div>

                                <div class="text-text-muted text-[14px] sm:text-[15px] md:text-[16px] leading-relaxed mt-4 font-sans">
                                    <span class="short-text"><?php echo esc_html($role_2_description); ?></span>
                                    <span class="dots">......</span>
                                    <span class="role-details hidden">
                                        <span><?php echo esc_html($career_role_2_details); ?></span>
                                    </span>
                                </div>

                                <div class="flex justify-end mt-3">
                                    <button type="button" class="read-more-btn inline-flex items-center gap-1 py-[12px] px-[24px] border border-brand-brown/20 text-brand-brown font-bold text-sm rounded-[8px] bg-white shadow-md hover:bg-brand-brown hover:text-text-light transition duration-300 cursor-pointer">
                                        <span class="btn-text"><?php echo esc_html($read_more_2_text); ?></span>
                                        <span class="btn-arrow icon-[solar--alt-arrow-down-linear] w-4 h-4"></span>
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </template>
            </div>

            <!-- CARD 2 -->
            <div class="opportunity-card cursor-pointer bg-brand-cream border-l-6 border-brand-blue rounded-[28px] p-6 sm:p-8 text-center flex flex-col items-center group hover:scale-[1.02] hover:shadow-xl transition-all duration-300 ease-out shadow-md"
                data-title="<?php echo esc_attr($card_2_title); ?>"
                data-icon="icon-[solar--heart-angle-bold]">

                <div class="text-brand-blue text-2xl sm:text-3xl mb-5 bg-brand-blue/20 w-16 h-16 rounded-full flex items-center justify-center transition-colors duration-300 flex-shrink-0">
                    <span class="icon-[solar--heart-angle-bold] w-6 h-6 text-brand-blue transition-transform duration-500 group-hover:rotate-12"></span>
                </div>

                <h3 class="text-brand-blue text-[16px] sm:text-[18px] md:text-[20px] mb-3 font-heading font-bold uppercase">
                    <?php echo esc_html($card_2_title); ?>
                </h3>

                <p class="text-text-muted text-[14px] sm:text-[15px] md:text-[16px] leading-relaxed max-w-xs font-sans">
                    <?php echo esc_html($card_2_description); ?>
                </p>
                <div class="w-16 h-1 bg-brand-blue mt-4 mb-2 rounded-full group-hover:w-24 transition-all duration-300"></div>

                <template class="modal-roles-template">
                    <div class="border border-brand-brown/10 rounded-[20px] p-6 bg-white flex-1 flex flex-col space-y-4 text-left">

                        <div class="bg-brand-cream/60 p-5 rounded-[16px] flex flex-col group transition duration-300 border border-brand-brown/5">
                            <div class="flex flex-col w-full">
                                <div>
                                    <h4 class="font-bold text-brand-brown text-[16px] sm:text-[18px] md:text-[20px] font-heading uppercase"><?php echo esc_html($volunteer_role_title); ?></h4>

                                    <div class="flex flex-wrap items-center gap-4 text-[14px] sm:text-[15px] md:text-[16px] text-brand-brown/80 mt-2 font-semibold">
                                        <span class="flex items-center gap-1.5">
                                            <span class="icon-[solar--map-point-bold] w-4 h-4 text-brand-orange flex-shrink-0"></span><?php echo esc_html($volunteer_location); ?>
                                        </span>
                                        <span class="flex items-center gap-1.5">
                                            <span class="icon-[solar--clock-circle-bold] w-4 h-4 text-brand-orange flex-shrink-0"></span><?php echo esc_html($volunteer_employment_type); ?>
                                        </span>
                                    </div>
                                </div>

                                <div class="text-text-muted text-[14px] sm:text-[15px] md:text-[16px] leading-relaxed mt-4 font-sans">
                                    <span class="short-text"><?php echo esc_html($volunteer_description); ?></span>
                                    <span class="dots">......</span>
                                    <span class="role-details hidden">
                                        <span><?php echo esc_html($volunteer_details); ?></span>
                                    </span>
                                </div>

                                <div class="flex justify-end mt-3">
                                    <button type="button" class="read-more-btn inline-flex items-center gap-1 py-[12px] px-[24px] border border-brand-brown/20 text-brand-brown font-bold text-sm rounded-[8px] bg-white shadow-md hover:bg-brand-brown hover:text-text-light transition duration-300 cursor-pointer">
                                        <span class="btn-text"><?php echo esc_html($volunteer_read_more_text); ?></span>
                                        <span class="btn-arrow icon-[solar--alt-arrow-down-linear] w-4 h-4"></span>
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </template>
            </div>

            <!-- CARD 3 -->
            <div class="opportunity-card cursor-pointer bg-brand-cream border-l-6 border-brand-pink rounded-[28px] p-6 sm:p-8 text-center flex flex-col items-center group hover:scale-[1.02] hover:shadow-xl transition-all duration-300 ease-out shadow-md"
                data-title="<?php echo esc_attr($card_3_title); ?>"
                data-icon="icon-[solar--graduation-paper-bold]">

                <div class="text-brand-pink text-2xl sm:text-3xl mb-5 bg-brand-pink/20 w-16 h-16 rounded-full flex items-center justify-center transition-colors duration-300 flex-shrink-0">
                    <span class="icon-[solar--graduation-paper-bold] w-6 h-6 text-brand-pink transition-transform duration-500 group-hover:rotate-12"></span>
                </div>

                <h3 class="text-brand-pink text-[16px] sm:text-[18px] md:text-[20px] mb-3 font-heading font-bold uppercase">
                    <?php echo esc_html($card_3_title); ?>
                </h3>

                <p class="text-text-muted text-[14px] sm:text-[15px] md:text-[16px] leading-relaxed max-w-xs font-sans">
                    <?php echo esc_html($card_3_description); ?>
                </p>
                <div class="w-16 h-1 bg-brand-pink mt-4 mb-2 rounded-full group-hover:w-24 transition-all duration-300"></div>

                <template class="modal-roles-template">
                    <div class="border border-brand-brown/10 rounded-[20px] p-6 bg-white flex-1 flex flex-col space-y-4 text-left">

                        <div class="bg-brand-cream/60 p-5 rounded-[16px] flex flex-col group transition duration-300 border border-brand-brown/5">
                            <div class="flex flex-col w-full">
                                <div>
                                    <h4 class="font-bold text-brand-brown text-[16px] sm:text-[18px] md:text-[20px] font-heading uppercase"><?php echo esc_html($internship_role_1_title); ?></h4>

                                    <div class="flex flex-wrap items-center gap-4 text-[14px] sm:text-[15px] md:text-[16px] text-brand-brown/80 mt-2 font-semibold">
                                        <span class="flex items-center gap-1.5">
                                            <span class="icon-[solar--map-point-bold] w-4 h-4 text-brand-orange flex-shrink-0"></span> <?php echo esc_html($internship_role_1_location); ?>
                                        </span>
                                        <span class="flex items-center gap-1.5">
                                            <span class="icon-[solar--clock-circle-bold] w-4 h-4 text-brand-orange flex-shrink-0"></span> <?php echo esc_html($internship_role_1_employment_type); ?>
                                        </span>
                                    </div>
                                </div>

                                <div class="text-text-muted text-[14px] sm:text-[15px] md:text-[16px] leading-relaxed mt-4 font-sans">
                                    <span class="short-text"><?php echo esc_html($internship_role_1_description); ?></span>
                                    <span class="dots">......</span>
                                    <span class="role-details hidden">
                                        <span><?php echo esc_html($internship_role_1_details); ?></span>
                                    </span>
                                </div>

                                <div class="flex justify-end mt-3">
                                    <button type="button" class="read-more-btn inline-flex items-center gap-1 py-[12px] px-[24px] border border-brand-brown/20 text-brand-brown font-bold text-sm rounded-[8px] bg-white shadow-md hover:bg-brand-brown hover:text-text-light transition duration-300 cursor-pointer">
                                        <span class="btn-text"><?php echo esc_html($internship_read_more_1_text); ?></span>
                                        <span class="btn-arrow icon-[solar--alt-arrow-down-linear] w-4 h-4"></span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="bg-brand-cream/60 p-5 rounded-[16px] flex flex-col group transition duration-300 border border-brand-brown/5">
                            <div class="flex flex-col w-full">
                                <div>
                                    <h4 class="font-bold text-brand-brown text-[16px] sm:text-[18px] md:text-[20px] font-heading uppercase"><?php echo esc_html($internship_role_2_title); ?></h4>

                                    <div class="flex flex-wrap items-center gap-4 text-[14px] sm:text-[15px] md:text-[16px] text-brand-brown/80 mt-2 font-semibold">
                                        <span class="flex items-center gap-1.5">
                                            <span class="icon-[solar--map-point-bold] w-4 h-4 text-brand-orange flex-shrink-0"></span><?php echo esc_html($internship_role_2_location); ?>
                                        </span>
                                        <span class="flex items-center gap-1.5">
                                            <span class="icon-[solar--clock-circle-bold] w-4 h-4 text-brand-orange flex-shrink-0"></span><?php echo esc_html($internship_role_2_employment_type); ?>
                                        </span>
                                    </div>
                                </div>

                                <div class="text-text-muted text-[14px] sm:text-[15px] md:text-[16px] leading-relaxed mt-4 font-sans">
                                    <span class="short-text"><?php echo esc_html($internship_role_2_description); ?></span>
                                    <span class="dots">......</span>
                                    <span class="role-details hidden">
                                        <span><?php echo esc_html($internship_role_2_details); ?></span>
                                    </span>
                                </div>

                                <div class="flex justify-end mt-3">
                                    <button type="button" class="read-more-btn inline-flex items-center gap-1 py-[12px] px-[24px] border border-brand-brown/20 text-brand-brown font-bold text-sm rounded-[8px] bg-white shadow-md hover:bg-brand-brown hover:text-text-light transition duration-300 cursor-pointer">
                                        <span class="btn-text"><?php echo esc_html($internship_read_more_2_text); ?></span>
                                        <span class="btn-arrow icon-[solar--alt-arrow-down-linear] w-4 h-4"></span>
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </template>
            </div>
        </div>
    </div>
</section>

<!-- OPPORTUNITY MODAL -->
<div id="opportunityModal" class="fixed inset-0 z-[2000] flex items-center justify-center p-4 bg-brand-brown/70 backdrop-blur-xs opacity-0 pointer-events-none transition-opacity duration-300 font-sans">
    <div id="modalContainer" class="relative w-full max-w-xl bg-white rounded-[28px] shadow-xl overflow-hidden transform scale-95 transition-transform duration-300 flex flex-col max-h-[90vh] border border-brand-brown/10">
        <div class="overflow-y-auto p-6 md:p-8">
            <div class="flex justify-center mb-5">
                <div id="modalIconContainer" class="w-16 h-16 rounded-full bg-brand-cream text-brand-brown text-3xl flex items-center justify-center border border-brand-brown/10">
                    <span id="modalIcon" class="w-8 h-8"></span>
                </div>
            </div>
            <h3 id="modalTitle" class="text-brand-brown text-[16px] sm:text-[18px] md:text-[20px] font-heading font-bold text-center uppercase mb-6"></h3>
            <div id="modalRolesContainer"></div>
        </div>
        <div class="p-4 bg-brand-cream border-t border-brand-brown/10 flex justify-end">
            <button id="closeModalFooterBtn" class="bg-brand-brown hover:bg-brand-orange text-text-light font-bold py-[12px] px-[24px] rounded-[8px] transition-colors duration-300 text-sm uppercase tracking-wider cursor-pointer">
                <?php echo esc_html($close_button_1_text); ?>
            </button>
        </div>
    </div>
</div>

<!-- IDEAS & CONTACT SECTION -->
<section class="rso-animate py-[64px] md:py-[50px] px-[20px] 2xl:px-0 font-sans" style="animation-delay: 0.3s;">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-stretch">

            <!-- IDEAS CARD -->
            <div class="flex flex-col">
                <div class="relative bg-brand-cream border-l-6 border-brand-yellow rounded-[28px] p-8 md:p-10 shadow-md border-y border-r border-brand-brown/10 overflow-hidden h-full flex flex-col justify-between">
                    <div>
                        <h2 class="font-heading text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] uppercase leading-tight mb-3 font-black text-brand-brown">
                            <?php echo nl2br(esc_html($ideas_title)); ?>
                        </h2>
                        <div class="w-16 h-1 bg-brand-yellow rounded-full mb-6"></div>

                        <p class="text-text-muted text-[14px] sm:text-[15px] md:text-[16px] lg:text-[18px] leading-relaxed max-w-xl font-sans">
                            <?php echo esc_html($ideas_description); ?>
                        </p>
                    </div>
                </div>
            </div>

            <!-- STAY CONNECTED CARD -->
            <div class="bg-brand-brown text-text-light rounded-[28px] p-8 md:p-10 shadow-xl flex flex-col justify-between">
                <div>
                    <h3 class="font-heading text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] uppercase leading-tight mb-3 font-black">
                        <?php echo esc_html($connected_heading); ?>
                    </h3>
                    <p class="text-[14px] sm:text-[15px] md:text-[16px] text-text-light/80 leading-relaxed mb-8 font-sans">
                        <?php echo esc_html($connected_description); ?>
                    </p>
                </div>

                <div class="space-y-6">
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center flex-shrink-0 text-brand-yellow">
                            <span class="icon-[solar--letter-bold] w-6 h-6"></span>
                        </div>
                        <div>
                            <h5 class="text-[14px] sm:text-[15px] md:text-[16px] font-bold uppercase tracking-wider text-text-light/70">
                                <?php echo esc_html($email_title); ?>
                            </h5>
                            <a href="mailto:info@rabbitschoolcambodia.net" class="text-[14px] sm:text-[15px] md:text-[16px] lg:text-[18px] hover:text-brand-yellow transition-colors font-semibold text-text-light block mt-0.5 no-underline">
                                <?php echo esc_html($email_address); ?>
                            </a>
                        </div>
                    </div>

                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center flex-shrink-0 text-brand-yellow">
                            <span class="icon-[solar--share-circle-bold] w-6 h-6"></span>
                        </div>
                        <div>
                            <h5 class="text-[14px] sm:text-[15px] md:text-[16px] font-bold uppercase tracking-wider text-text-light/70">
                                <?php echo esc_html($facebook_page); ?>
                            </h5>
                            <a href="<?php echo esc_url($facebook_page_link); ?>" class="text-[14px] sm:text-[15px] md:text-[16px] lg:text-[18px] hover:text-brand-yellow transition-colors font-semibold text-text-light block mt-0.5 break-all no-underline">
                                <?php echo esc_html($facebook_page_link); ?>
                            </a>
                        </div>
                    </div>

                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center flex-shrink-0 text-brand-yellow">
                            <span class="icon-[solar--phone-calling-bold] w-6 h-6"></span>
                        </div>
                        <div>
                            <h5 class="text-[14px] sm:text-[15px] md:text-[16px] font-bold uppercase tracking-wider text-text-light/70">
                                <?php echo esc_html($phone_title); ?>
                            </h5>
                            <a href="tel:+85568901971" class="text-[14px] sm:text-[15px] md:text-[16px] lg:text-[18px] hover:text-brand-yellow transition-colors font-semibold text-text-light block mt-0.5 no-underline">
                                <?php echo esc_html($phone_number); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
    .font-heading {
        font-family: 'Oswald', sans-serif;
    }

    .font-body {
        font-family: 'Inter', sans-serif;
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
            modalIcon.className = `fa-solid ${icon}`;

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

            // Updated container target match
            const cardParent = btn.closest('.bg-brand-cream\\/60') || btn.closest('.group');
            if (!cardParent) return;

            const detailsPanel = cardParent.querySelector('.role-details');
            const dots = cardParent.querySelector('.dots');
            const btnText = btn.querySelector('.btn-text');
            const btnArrow = btn.querySelector('.btn-arrow');

            if (!detailsPanel) return;

            const isHidden = detailsPanel.classList.toggle('hidden');

            if (!isHidden) {
                if (dots) dots.classList.add('hidden');
                if (btnText) btnText.textContent = btn.dataset.showLess || 'បង្រួម';
                if (btnArrow) btnArrow.textContent = '↑';
            } else {
                if (dots) dots.classList.remove('hidden');
                if (btnText) btnText.textContent = btn.dataset.readMore || 'អានបន្ថែម';
                if (btnArrow) btnArrow.textContent = '↓';
            }
        });

    });
</script>

<?php get_footer(); ?>