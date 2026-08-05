<?php
/**
 * Template Name: Donate Page
 */

get_header();
?>
<?php
// SECTION 1: ACF Fields
$hero_image   = get_field('hero_image'); // ACF Return Format: Image Array
$hero_heading = get_field('hero_heading');
$hero_text    = get_field('hero_text');
?>

<!-- SECTION 1: Hero -->
<section class="relative overflow-hidden">
  <img src="<?php echo esc_url($hero_image['url']); ?>" 
       alt="<?php echo esc_attr($hero_image['alt']); ?>" 
       class="h-[500px] md:h-[700px] w-full object-cover">
  
  <div class="absolute inset-0 z-10 bg-black/30 flex items-end">
    <div class="w-full max-w-7xl mx-auto py-[64px] md:py-[50px] px-[20px] 2xl:px-0">
      <div class="max-w-2xl text-text-light">
        <h1 class="font-heading text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-black leading-tight mb-[10px] md:mb-[20px] uppercase">
          <?php echo esc_html($hero_heading); ?>
        </h1>
        <p class="text-[14px] sm:text-[15px] md:text-[16px] lg:text-[18px] leading-relaxed opacity-90">
          <?php echo esc_html($hero_text); ?>
        </p>
      </div>
    </div>
  </div>
</section>

<?php
// SECTION 2: ACF Text Fields
$impact_heading        = get_field('impact_heading');
$impact_description    = get_field('impact_description');

// Card 1: Give in Kind
$kind_title            = get_field('kind_title');
$kind_description      = get_field('kind_description');

// Card 2: Give Financial
$financial_title       = get_field('financial_title');
$financial_description = get_field('financial_description');
?>

<!-- SECTION 2: Impact Cards -->
<section class="bg-brand-cream py-[64px] md:py-[50px] px-[20px] 2xl:px-0">
  <div class="flex flex-col w-full items-center justify-center text-center mb-[40px]">
    <h2 class="text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-bold uppercase font-heading">
      <?php echo esc_html($impact_heading); ?>
    </h2>
    <p class="text-[14px] sm:text-[15px] md:text-[16px] lg:text-[18px] text-text-muted max-w-2xl mt-2">
      <?php echo esc_html($impact_description); ?>
    </p>
  </div>

  <div class="max-w-7xl mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-[30px] lg:gap-[40px]">
      
      <!-- Left Card: Give in kind -->
      <div class="flex items-start gap-[20px] bg-white border-l-4 border-brand-blue p-[24px] md:p-[32px] rounded-[28px] shadow-md hover:shadow-xl transition-shadow duration-300 group">
        <div class="w-16 h-16 sm:w-20 sm:h-20 rounded-full bg-brand-blue/20 text-brand-blue flex items-center justify-center flex-shrink-0">
          <span class="icon-[solar--hand-heart-bold] w-8 h-8 sm:w-10 sm:h-10 flex-shrink-0 transition-transform duration-500 group-hover:rotate-45"></span>
        </div>
        
        <div class="flex flex-col gap-[12px] flex-grow">
          <h2 class="text-[18px] sm:text-[20px] md:text-[22px] font-bold uppercase font-heading text-brand-blue">
            <?php echo esc_html($kind_title); ?>
          </h2>

          <?php 
            // Split the textarea into lines and strip empty space
            $lines = array_filter(array_map('trim', explode("\n", str_replace("\r", "", $kind_description))));
            $intro_text = array_shift($lines); // First line = intro description
          ?>

          <?php if ($intro_text) : ?>
            <p class="text-[14px] sm:text-[15px] md:text-[16px] lg:text-[18px] text-text-muted">
              <?php echo esc_html($intro_text); ?>
            </p>
          <?php endif; ?>

          <?php if (!empty($lines)) : ?>
            <ul class="flex flex-col gap-[10px] mt-1">
              <?php foreach ($lines as $point) : ?>
                <li class="flex items-start gap-[10px] text-[14px] sm:text-[15px] md:text-[16px]">
                  <span class="icon-[solar--check-circle-bold] w-5 h-5 text-brand-blue flex-shrink-0 mt-0.5"></span>  
                  <span><?php echo wp_kses_post($point); ?></span>
                </li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>
        </div>
      </div>

      <!-- Right Card: Give financial -->
      <div class="flex items-start gap-[20px] bg-white border-l-4 border-brand-pink p-[24px] md:p-[32px] rounded-[28px] shadow-md hover:shadow-xl transition-shadow duration-300 group">
        <div class="w-16 h-16 sm:w-20 sm:h-20 rounded-full bg-brand-pink/20 text-brand-pink flex items-center justify-center flex-shrink-0">
          <span class="icon-[solar--hand-money-bold] w-8 h-8 sm:w-10 sm:h-10 flex-shrink-0 transition-transform duration-500 group-hover:rotate-45"></span>
        </div>

        <div class="flex flex-col gap-[12px] flex-grow">
          <h2 class="text-[18px] sm:text-[20px] md:text-[22px] font-bold uppercase font-heading text-brand-pink">
            <?php echo esc_html($financial_title); ?>
          </h2>

          <?php 
            // Split the textarea into lines and strip empty space
            $financial_lines = array_filter(array_map('trim', explode("\n", str_replace("\r", "", $financial_description))));
            $financial_intro = array_shift($financial_lines); // First line = intro description
          ?>

          <?php if ($financial_intro) : ?>
            <p class="text-[14px] sm:text-[15px] md:text-[16px] lg:text-[18px] text-text-muted">
              <?php echo esc_html($financial_intro); ?>
            </p>
          <?php endif; ?>

          <?php if (!empty($financial_lines)) : ?>
            <ul class="flex flex-col gap-[10px] mt-1">
              <?php foreach ($financial_lines as $point) : ?>
                <li class="flex items-start gap-[10px] text-[14px] sm:text-[15px] md:text-[16px]">
                  <span class="icon-[solar--heart-bold] w-5 h-5 text-brand-pink flex-shrink-0 mt-0.5"></span>  
                  <span><?php echo wp_kses_post($point); ?></span>
                </li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>
        </div>
      </div>

    </div>
  </div>
</section>

<?php
// SECTION 3: ACF Text Fields
$how_to_donate_heading = get_field('how_to_donate_heading');

// Card 1: Bank Transfer
$card1_title       = get_field('card1_title');
$card1_description = get_field('card1_description');

// Card 2: Scan To Donate
$card2_title       = get_field('card2_title');
$card2_description = get_field('card2_description');

// Card 3: Contact Us
$card3_title       = get_field('card3_title');
$card3_description = get_field('card3_description');
?>

<!-- SECTION 3: How To Donate Container -->
<section class="py-[64px] md:py-[50px] px-[20px] 2xl:px-0">
  <div class="max-w-7xl mx-auto flex flex-col items-center">
    <div class="p-[24px] md:p-[32px] bg-brand-yellow rounded-[28px] w-full">
      <!-- TITLE -->
      <div class="text-center mb-[28px]">
        <h2 class="text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-bold font-heading uppercase">
          <?php echo esc_html($how_to_donate_heading); ?>
        </h2>
        <div class="w-12 h-1 bg-brand-orange rounded-full mx-auto mt-2"></div>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-3 w-full gap-[20px]">
        <!-- CARD 1 -->
        <div class="border-l-4 border-brand-blue p-[24px] md:p-[32px] rounded-[28px] bg-brand-cream flex items-start gap-[20px] hover:-translate-y-2 transition-all group shadow-sm hover:shadow-md">
          <div class="w-16 h-16 rounded-full bg-brand-blue/20 text-brand-blue flex items-center justify-center flex-shrink-0">
            <span class="icon-[solar--buildings-2-bold] w-6 h-6 flex-shrink-0 transition-transform duration-500 group-hover:rotate-45"></span>
          </div>
          <div>
            <h2 class="text-[16px] sm:text-[18px] md:text-[20px] text-brand-blue font-bold font-heading uppercase mt-1">
              <?php echo esc_html($card1_title); ?>
            </h2>
            <p class="text-[14px] sm:text-[15px] md:text-[16px] text-text-muted mt-1">
              <?php echo esc_html($card1_description); ?>
            </p>
          </div>
        </div>
        <!-- CARD 2 -->
        <div class="border-l-4 border-brand-pink p-[24px] md:p-[32px] rounded-[28px] bg-brand-cream flex items-start gap-[20px] hover:-translate-y-2 transition-all group shadow-sm hover:shadow-md">
          <div class="w-16 h-16 rounded-full bg-brand-pink/20 text-brand-pink flex items-center justify-center flex-shrink-0">
            <span class="icon-[solar--qr-code-bold] w-6 h-6 flex-shrink-0 transition-transform duration-500 group-hover:rotate-45"></span>
          </div>
          <div>
            <h2 class="text-[16px] sm:text-[18px] md:text-[20px] text-brand-pink font-bold font-heading uppercase mt-1">
              <?php echo esc_html($card2_title); ?>
            </h2>
            <p class="text-[14px] sm:text-[15px] md:text-[16px] text-text-muted mt-1">
              <?php echo esc_html($card2_description); ?>
            </p>
          </div>
        </div>
        <!-- CARD 3 -->
        <div class="border-l-4 border-brand-orange p-[24px] md:p-[32px] rounded-[28px] bg-brand-cream flex items-start gap-[20px] hover:-translate-y-2 transition-all group shadow-sm hover:shadow-md">
          <div class="w-16 h-16 rounded-full bg-brand-orange/20 text-brand-orange flex items-center justify-center flex-shrink-0">
            <span class="icon-[solar--heart-bold] w-6 h-6 flex-shrink-0 transition-transform duration-500 group-hover:rotate-45"></span>
          </div>
          <div>
            <h2 class="text-[16px] sm:text-[18px] md:text-[20px] text-brand-orange font-bold font-heading uppercase mt-1">
              <?php echo esc_html($card3_title); ?>
            </h2>
            <p class="text-[14px] sm:text-[15px] md:text-[16px] text-text-muted mt-1">
              <?php echo esc_html($card3_description); ?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
// SECTION 4: ACF Fields
$bank_name                 = get_field('bank_name');
$bank_swift_title          = get_field('bank_swift_title');
$bank_swift                = get_field('bank_swift');
$bank_address_title        = get_field('bank_address_title');
$bank_address              = get_field('bank_address');
$bank_account_name_title   = get_field('bank_account_name_title');
$bank_account_name         = get_field('bank_account_name');
$bank_account_number_title = get_field('bank_account_number_title');
$bank_account_number       = get_field('bank_account_number');
$bank_qr_code              = get_field('bank_qr_code'); // ACF Return Format: Image Array
?>


<!-- SECTION 4: ACLEDA Bank Card -->
<section class="bg-brand-cream">
 <div class="max-w-7xl mx-auto py-[64px] md:py-[50px] px-[20px] 2xl:px-0">
  
   <!-- Bank Card -->
   <div class="bg-white border-l-4 border-brand-teal rounded-[28px] p-[24px] md:p-[32px] shadow-md hover:shadow-xl transition-shadow duration-300 group">
     <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-[24px]">
      
       <!-- LEFT: Bank Information -->
       <div class="flex items-start gap-[20px] flex-grow">
         <div class="w-16 h-16 flex-shrink-0 rounded-full bg-brand-teal/20 text-brand-teal flex items-center justify-center">
           <span class="icon-[solar--buildings-2-bold] w-7 h-7 flex-shrink-0 transition-transform duration-500 group-hover:rotate-45"></span>
         </div>
         <div class="flex flex-col gap-[10px]">
           <h2 class="uppercase font-bold font-heading text-brand-teal text-[18px] sm:text-[20px] md:text-[22px]">
             <?php echo esc_html($bank_name); ?>
           </h2>
           <p class="text-[14px] sm:text-[15px] md:text-[16px] text-text-muted">
             <strong class="text-brand-teal"><?php echo esc_html($bank_swift_title); ?>:</strong> <?php echo esc_html($bank_swift); ?>
           </p>
           <p class="text-[14px] sm:text-[15px] md:text-[16px] text-text-muted">
             <strong class="text-brand-teal"><?php echo esc_html($bank_address_title); ?>:</strong> <?php echo esc_html($bank_address); ?>
           </p>
           <div class="grid grid-cols-1 sm:grid-cols-2 gap-[12px] pt-2">
             <p class="text-[14px] sm:text-[15px] md:text-[16px]">
               <span class="block text-xs uppercase tracking-wider text-text-muted/80"><?php echo esc_html($bank_account_name); ?></span>
               <strong class="text-brand-teal uppercase text-[16px]"><?php echo esc_html($bank_account_name); ?></strong>
             </p>
             <p class="text-[14px] sm:text-[15px] md:text-[16px]">
               <span class="block text-xs uppercase tracking-wider text-text-muted/80"><?php echo esc_html($bank_account_number_title); ?></span>
               <strong class="text-brand-teal uppercase text-[16px]"><?php echo esc_html($bank_account_number); ?></strong>
             </p>
           </div>
         </div>
       </div>


       <!-- DOTTED DIVIDER (Visible on Desktop) -->
       <div class="hidden md:block border-r-2 border-dotted border-gray-300 self-stretch my-2"></div>


       <!-- RIGHT: QR Code / Image -->
       <div class="flex-shrink-0 w-full md:w-auto flex justify-center">
         <div class="p-2 border border-gray-100 rounded-[16px] bg-white shadow-sm">
           <img src="<?php echo esc_url($bank_qr_code); ?>"
                alt="<?php echo esc_attr($bank_qr_code); ?>"
                class="w-32 h-32 object-contain rounded-[12px]">
         </div>
       </div>


     </div>
   </div>


 </div>
</section>

<?php get_footer(); ?>