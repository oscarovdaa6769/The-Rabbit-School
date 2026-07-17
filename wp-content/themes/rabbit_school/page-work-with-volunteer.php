<?php
/*
 * Template Name: Work With Volunteer
*/
get_header();

// Hero Content Fields with strict Design Mockup fallbacks
$hero_title       = get_field('hero_title') ?: 'JOIN OUR TEAM';
$hero_description = get_field('hero_description') ?: 'help create opportunities for children and youth with intellectual disabilities and autism Cambodia';
$hero_button_text = get_field('hero_button_text') ?: 'LEARN MORE ABOUT US';
$hero_button_link = get_field('hero_button_link') ?: '#';
$hero_image       = get_field('hero_image');

// Opportunities Content Fields
$opportunities_title = get_field('opportunities_title') ?: "OPPORTUNITIES WE'RE PREPARING FOR YOU";

// Feature Cards with Design Mockup fallbacks
$card_1_title       = get_field('card_1_title') ?: 'CAREERS';
$card_1_description = get_field('card_1_description') ?: 'Full-time opportunities to grow your career while creating impact.';

$card_2_title       = get_field('card_2_title') ?: 'VOLUNTEER';
$card_2_description = get_field('card_2_description') ?: 'Full-time opportunities to grow your career while creating impact.';

$card_3_title       = get_field('card_3_title') ?: 'INTERNSHIP';
$card_3_description = get_field('card_3_description') ?: 'Full-time opportunities to grow your career while creating impact.';

// Open Job Roles with Design Mockup fallbacks
$open_roles_heading  = get_field('open_roles_heading') ?: 'OPEN ROLES';

$role_1_title        = get_field('role_1_title') ?: 'SPECIAL EDUCATION TEACHER';
$role_1_typelocation = get_field('role_1_typelocation') ?: 'Full-time · Phnom Penh';
$role_1_link         = get_field('role_1_link') ?: '#';

$role_2_title        = get_field('role_2_title') ?: 'VOCATIONAL TRAINING ASSISTANT';
$role_2_typelocation = get_field('role_2_typelocation') ?: 'Part-time · Siem Reap';
$role_2_link         = get_field('role_2_link') ?: '#';

$role_3_title        = get_field('role_3_title') ?: 'SOCIAL WORK COORDINATOR';
$role_3_typelocation = get_field('role_3_typelocation') ?: 'Full-time · Kampong Speu';
$role_3_link         = get_field('role_3_link') ?: '#';

// Stay Connected Channels with Design Mockup fallbacks
$connected_heading     = get_field('connected_heading') ?: 'STAY CONNECTED';
$connected_description = get_field('connected_description') ?: "While we're preparing this page, we'd love to hear from passionate people who want to make a difference.";
$email_title           = get_field('email_title') ?: 'EMAIL US';
$email_address         = get_field('email_address') ?: 'info@rabbitschoolcambodia.net';
$facebook_title        = get_field('facebook_title') ?: 'FACEBOOK PAGE';
$facebook_link         = get_field('facebook_link') ?: 'https://www.facebook.com/rabbitschoolcambodia';
$telegram_link         = get_field('telegram_link') ?: 't.me/rabbitschool';
$phone_title           = get_field('phone_title') ?: 'CALL HOTLINE';
$phone_number          = get_field('phone_number') ?: '(+855) 68 901 971';
?>

<div class="relative overflow-hidden">
    <?php if ($hero_image): ?>
        <img src="<?php echo esc_url($hero_image['url']); ?>" alt="<?php echo esc_attr($hero_title); ?>" class="h-[500px] md:h-[700px] w-full object-cover">
    <?php else: ?>
        <img src="<?php echo esc_url(get_theme_file_uri('assets/images/error.png')); ?>" alt="Hero Banner" class="h-[500px] md:h-[700px] w-full object-cover">
    <?php endif; ?>
    
    <div class="absolute inset-0 z-50 bg-black/30 flex items-end pb-6 md:pb-20">
        <div class="w-full max-w-7xl mx-auto px-4 md:px-[20px]">
            <div class="max-w-2xl text-text-light">
                <h1 class="font-heading text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-black leading-tight mb-2 md:mb-4 uppercase">
                    <?php echo esc_html($hero_title); ?>
                </h1>
                <p class="text-[14px] sm:text-[15px] md:text-[16px] lg:text-[18px] leading-relaxed opacity-90 mb-6">
                    <?php echo esc_html($hero_description); ?>
                </p>
                <?php if ($hero_button_text && $hero_button_link): ?>
                <div class="flex justify-start">
                    <a href="<?php echo esc_url($hero_button_link); ?>" class="group bg-brand-brown border border-white/20 text-text-light font-bold text-sm px-[24px] py-[12px] rounded-[8px] shadow-lg hover:scale-105 active:scale-95 transition-all inline-flex gap-3 items-center uppercase tracking-widest no-underline">
                        <?php echo esc_html($hero_button_text); ?>
                        <span class="inline-block icon-[solar--arrow-right-linear] w-5 h-5 transition-transform duration-300 group-hover:translate-x-1"></span>
                    </a>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<section class="max-w-7xl mx-auto py-16 md:py-24 px-4 md:px-[20px]">
    <h2 class="text-center text-brand-brown text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-heading font-black uppercase mb-16 tracking-wide">
        <?php echo esc_html($opportunities_title); ?>
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-brand-cream border border-brand-brown/10 rounded-[24px] p-8 pb-10 text-center flex flex-col items-center transition-all duration-300 hover:shadow-xl hover:-translate-y-1 group">
            <div class="mb-6 h-16 w-16 bg-white border border-brand-brown/10 rounded-full flex items-center justify-center transition-colors duration-300 group-hover:bg-brand-brown group-hover:text-text-light text-brand-brown shadow-sm">
                <span class="inline-block icon-[ph--briefcase-fill] w-7 h-7"></span>
            </div>
            <h3 class="text-brand-yellow text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-heading font-black uppercase tracking-wide mb-3">
                <?php echo esc_html($card_1_title); ?>
            </h3>
            <p class="text-text-muted text-[14px] sm:text-[15px] md:text-[16px] leading-relaxed max-w-xs font-semibold opacity-90 mb-6">
                <?php echo esc_html($card_1_description); ?>
            </p>
            <div class="w-16 h-[3px] bg-brand-yellow rounded-full mt-auto"></div>
        </div>

        <div class="bg-brand-cream border border-brand-brown/10 rounded-[24px] p-8 pb-10 text-center flex flex-col items-center transition-all duration-300 hover:shadow-xl hover:-translate-y-1 group">
            <div class="mb-6 h-16 w-16 bg-white border border-brand-brown/10 rounded-full flex items-center justify-center transition-colors duration-300 group-hover:bg-brand-brown group-hover:text-text-light text-brand-brown shadow-sm">
                <span class="inline-block icon-[fa6-solid--hand-holding-heart] w-7 h-7"></span>
            </div>
            <h3 class="text-brand-yellow text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-heading font-black uppercase tracking-wide mb-3">
                <?php echo esc_html($card_2_title); ?>
            </h3>
            <p class="text-text-muted text-[14px] sm:text-[15px] md:text-[16px] lg:text-[18px] leading-relaxed max-w-xs font-semibold opacity-90 mb-6">
                <?php echo esc_html($card_2_description); ?>
            </p>
            <div class="w-16 h-[3px] bg-brand-yellow rounded-full mt-auto"></div>
        </div>

        <div class="bg-brand-cream border border-brand-brown/10 rounded-[24px] p-8 pb-10 text-center flex flex-col items-center transition-all duration-300 hover:shadow-xl hover:-translate-y-1 group">
            <div class="mb-6 h-16 w-16 bg-white border border-brand-brown/10 rounded-full flex items-center justify-center transition-colors duration-300 group-hover:bg-brand-brown group-hover:text-text-light text-brand-brown shadow-sm">
                <span class="inline-block icon-[fluent--hat-graduation-24-filled] w-7 h-7"></span>
            </div>
            <h3 class="text-brand-yellow text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-heading font-black uppercase tracking-wide mb-3">
                <?php echo esc_html($card_3_title); ?>
            </h3>
            <p class="text-text-muted text-[14px] sm:text-[15px] md:text-[16px] lg:text-[18px] leading-relaxed max-w-xs font-semibold opacity-90 mb-6">
                <?php echo esc_html($card_3_description); ?>
            </p>
            <div class="w-16 h-[3px] bg-brand-yellow rounded-full mt-auto"></div>
        </div>
    </div>
</section>

<section class="max-w-7xl mx-auto px-4 md:px-[20px] pb-24 w-full">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-stretch">
        
        <div class="lg:col-span-6 flex flex-col">
            <h2 class="text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-heading font-black text-brand-brown uppercase mb-6 tracking-wide">
                <?php echo esc_html($open_roles_heading); ?>
            </h2>

            <div class="border border-brand-brown/10 rounded-[24px] p-6 bg-white flex-1 flex flex-col justify-start gap-4 shadow-sm">
                <?php if ($role_1_title): ?>
                <div class="bg-brand-cream border border-brand-brown/5 p-5 rounded-[16px] flex justify-between items-center group transition-colors duration-200 hover:bg-brand-cream/80">
                    <div>
                        <h4 class="font-heading font-black text-brand-brown text-[16px] md:text-[20px] tracking-wide uppercase"><?php echo esc_html($role_1_title); ?></h4>
                        <p class="text-[13px] md:text-[16px] text-text-muted mt-1 font-semibold opacity-80"><?php echo esc_html($role_1_typelocation); ?></p>
                    </div>
                    <a href="<?php echo esc_url($role_1_link); ?>" class="w-10 h-10 bg-white border border-brand-brown/10 rounded-full flex items-center justify-center text-brand-brown shadow-sm group-hover:bg-brand-brown group-hover:text-white group-hover:border-transparent transition-all duration-300" aria-label="View role details">
                        <span class="inline-block icon-[solar--arrow-right-linear] w-5 h-5"></span>
                    </a>
                </div>
                <?php endif; ?>

                <?php if ($role_2_title): ?>
                <div class="bg-brand-cream border border-brand-brown/5 p-5 rounded-[16px] flex justify-between items-center group transition-colors duration-200 hover:bg-brand-cream/80">
                    <div>
                        <h4 class="font-heading font-black text-brand-brown text-[16px] md:text-[20px] tracking-wide uppercase"><?php echo esc_html($role_2_title); ?></h4>
                        <p class="text-[13px] md:text-[16px] text-text-muted mt-1 font-semibold opacity-80"><?php echo esc_html($role_2_typelocation); ?></p>
                    </div>
                    <a href="<?php echo esc_url($role_2_link); ?>" class="w-10 h-10 bg-white border border-brand-brown/10 rounded-full flex items-center justify-center text-brand-brown shadow-sm group-hover:bg-brand-brown group-hover:text-white group-hover:border-transparent transition-all duration-300" aria-label="View role details">
                        <span class="inline-block icon-[solar--arrow-right-linear] w-5 h-5"></span>
                    </a>
                </div>
                <?php endif; ?>

                <?php if ($role_3_title): ?>
                <div class="bg-brand-cream border border-brand-brown/5 p-5 rounded-[16px] flex justify-between items-center group transition-colors duration-200 hover:bg-brand-cream/80">
                    <div>
                        <h4 class="font-heading font-black text-brand-brown text-[16px] md:text-[20px] tracking-wide uppercase"><?php echo esc_html($role_3_title); ?></h4>
                        <p class="text-[13px] md:text-[16px] text-text-muted mt-1 font-semibold opacity-80"><?php echo esc_html($role_3_typelocation); ?></p>
                    </div>
                    <a href="<?php echo esc_url($role_3_link); ?>" class="w-10 h-10 bg-white border border-brand-brown/10 rounded-full flex items-center justify-center text-brand-brown shadow-sm group-hover:bg-brand-brown group-hover:text-white group-hover:border-transparent transition-all duration-300" aria-label="View role details">
                        <span class="inline-block icon-[solar--arrow-right-linear] w-5 h-5"></span>
                    </a>
                </div>
                <?php endif; ?>
            </div>
        </div>

        <div class="lg:col-span-6 bg-brand-brown text-white rounded-[24px] p-8 md:p-10 shadow-lg flex flex-col justify-between min-h-[440px]">
            <div class="mb-8">
                <h3 class="font-heading text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] uppercase tracking-wide mb-4 font-black text-brand-cream">
                    <?php echo esc_html($connected_heading); ?>
                </h3>
                <p class="text-[14px] sm:text-[15px] md:text-[16px] text-brand-cream/80 leading-relaxed font-semibold opacity-90">
                    <?php echo esc_html($connected_description); ?>
                </p>
            </div>

            <div class="flex flex-col gap-6">
                <?php if ($email_address): ?>
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center flex-shrink-0 text-white">
                        <span class="inline-block icon-[solar--letter-bold] w-5 h-5"></span>
                    </div>
                    <div>
                        <h5 class="text-[12px] font-black uppercase tracking-wider text-brand-cream/60"><?php echo esc_html($email_title); ?></h5>
                        <a href="mailto:<?php echo esc_attr($email_address); ?>" class="text-[15px] hover:underline font-semibold text-white block mt-0.5 break-all no-underline"><?php echo esc_html($email_address); ?></a>
                    </div>
                </div>
                <?php endif; ?>

                <?php if ($facebook_link): ?>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center flex-shrink-0 text-white">
                            <span class="inline-block icon-[fa6-brands--facebook-f] w-5 h-5"></span>
                        </div>
                        <div>
                            <h5 class="text-[12px] font-black uppercase tracking-wider text-brand-cream/60"><?php echo esc_html($facebook_title ?: 'FACEBOOK PAGE'); ?></h5>
                            <a href="<?php echo esc_url($facebook_link); ?>" target="_blank" rel="noopener noreferrer" class="text-[15px] hover:underline font-semibold text-white block mt-0.5 break-all no-underline"><?php echo esc_html(str_replace(['https://', 'http://', 'www.'], '', $facebook_link)); ?></a>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if ($phone_number): ?>
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center flex-shrink-0 text-white">
                        <span class="inline-block icon-[solar--phone-bold] w-5 h-5"></span>
                    </div>
                    <div>
                        <h5 class="text-[12px] font-black uppercase tracking-wider text-brand-cream/60"><?php echo esc_html($phone_title); ?></h5>
                        <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', $phone_number)); ?>" class="text-[15px] hover:underline font-semibold text-white block mt-0.5 no-underline"><?php echo esc_html($phone_number); ?></a>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>

    </div>
</section>

<?php get_footer(); ?>