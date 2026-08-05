<?php
/**
 * Template Name: Donate Page
 */

get_header();

// ===== HERO =====
$hero_bg          = get_field('hero_background_image') ?: get_theme_file_uri('assets/images/error.png');
$hero_title       = get_field('hero_title') ?: 'Together, We Can Change Lives';
$hero_description = get_field('hero_description') ?: 'Your generosity helps us provide education and support to children who need it most.';

// ===== IMPACT SECTION INTRO =====
$impact_heading    = get_field('impact_heading') ?: 'Your Gift Makes An Impact';
$impact_subheading = get_field('impact_subheading') ?: 'Every contribution, big or small, helps us build a brighter future for children in Cambodia.';

// ===== GIVE IN KIND CARD =====
$kind_title = get_field('kind_title') ?: 'Give In Kind';
$kind_intro = get_field('kind_intro') ?: 'If you would like to contribute with resources, these are things that are needed most:';
$kind_item_1 = get_field('kind_item_1') ?: "School materials such as books, pencils, DVDs (player) and educational games";
$kind_item_2 = get_field('kind_item_2') ?: "Children's books in Khmer";
$kind_item_3 = get_field('kind_item_3') ?: "Physiotherapy special devices and toys";

// ===== GIVE FINANCIAL CARD =====
$financial_title = get_field('financial_title') ?: 'Give Financial';
$financial_intro = get_field('financial_intro') ?: "A single gift can change a child's entire future.";
$financial_amount_1 = get_field('financial_amount_1') ?: '$60';
$financial_desc_1   = get_field('financial_description_1') ?: 'opens the classroom door for one month.';
$financial_amount_2 = get_field('financial_amount_2') ?: '$800';
$financial_desc_2   = get_field('financial_description_2') ?: 'keeps that door open for a full year—giving one child safety, routine, and a chance to grow.';

// ===== HOW TO DONATE SECTION =====
$howto_heading = get_field('howto_heading') ?: 'How To Donate';

$howto_1_title = get_field('howto_1_title') ?: 'Bank Transfer';
$howto_1_desc  = get_field('howto_1_description') ?: 'Transfer directly to our bank account using the details below.';

$howto_2_title = get_field('howto_2_title') ?: 'Scan To Donate';
$howto_2_desc  = get_field('howto_2_description') ?: 'Scan the QR code to make your donation securely.';

$howto_3_title = get_field('howto_3_title') ?: 'Contact Us';
$howto_3_desc  = get_field('howto_3_description') ?: "Need help or have questions? We're here to assist you.";

// ===== BANK DETAILS CARD =====
$bank_name        = get_field('bank_name') ?: 'ACLEDA Bank';
$bank_swift       = get_field('bank_swift_code') ?: 'ACLBKHPP';
$bank_address     = get_field('bank_address') ?: 'Building N° 61, Preah Monivong Blvd., Sangkat Srah Chak, Khan Daun Penh, Phnom Penh';
$bank_account_name   = get_field('bank_account_name') ?: 'Rabbit School';
$bank_account_number = get_field('bank_account_number') ?: '2900-01-005152-4-2';
$bank_qr_image        = get_field('bank_qr_image') ?: get_theme_file_uri('assets/images/error.png');
?>
<!-- SECTION 1: Hero -->
<section class="relative overflow-hidden">
  <img src="<?php echo esc_url($hero_bg); ?>" 
  alt="Donate Hero" 
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

<!-- SECTION 2: Impact Cards -->
<section class="bg-brand-cream py-[64px] md:py-[50px] px-[20px] 2xl:px-0">
  <div class="flex flex-col w-full items-center justify-center text-center mb-[40px]">
    <h2 class="text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-bold uppercase font-heading">
      <?php echo esc_html($impact_heading); ?>
    </h2>
    <p class="text-[14px] sm:text-[15px] md:text-[16px] lg:text-[18px] text-text-muted max-w-2xl mt-2">
      <?php echo esc_html($impact_subheading); ?>
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
          <p class="text-[14px] sm:text-[15px] md:text-[16px] lg:text-[18px] text-text-muted">
            <?php echo esc_html($kind_intro); ?>
          </p>
          <ul class="flex flex-col gap-[10px] mt-1">
            <li class="flex items-start gap-[10px] text-[14px] sm:text-[15px] md:text-[16px]">
              <span class="icon-[solar--check-circle-bold] w-5 h-5 text-brand-blue flex-shrink-0 mt-0.5"></span>  
              <span><?php echo esc_html($kind_item_1); ?></span>
            </li>
            <li class="flex items-start gap-[10px] text-[14px] sm:text-[15px] md:text-[16px]">
              <span class="icon-[solar--check-circle-bold] w-5 h-5 text-brand-blue flex-shrink-0 mt-0.5"></span>  
              <span><?php echo esc_html($kind_item_2); ?></span>
            </li>
            <li class="flex items-start gap-[10px] text-[14px] sm:text-[15px] md:text-[16px]">
              <span class="icon-[solar--check-circle-bold] w-5 h-5 text-brand-blue flex-shrink-0 mt-0.5"></span>  
              <span><?php echo esc_html($kind_item_3); ?></span>
            </li>
          </ul>
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
          <p class="text-[14px] sm:text-[15px] md:text-[16px] lg:text-[18px] text-text-muted">
            <?php echo esc_html($financial_intro); ?>
          </p>
          <ul class="flex flex-col gap-[10px] mt-1">
            <li class="flex items-start gap-[10px] text-[14px] sm:text-[15px] md:text-[16px]">
              <span class="icon-[solar--heart-bold] w-5 h-5 text-brand-pink flex-shrink-0 mt-0.5"></span>  
              <span><strong class="text-brand-pink"><?php echo esc_html($financial_amount_1); ?></strong> <?php echo esc_html($financial_desc_1); ?></span>
            </li>
            <li class="flex items-start gap-[10px] text-[14px] sm:text-[15px] md:text-[16px]">
              <span class="icon-[solar--heart-bold] w-5 h-5 text-brand-pink flex-shrink-0 mt-0.5"></span>  
              <span><strong class="text-brand-pink"><?php echo esc_html($financial_amount_2); ?></strong> <?php echo esc_html($financial_desc_2); ?></span>
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
    <div class="p-[24px] md:p-[32px] bg-brand-yellow rounded-[28px] w-full">
      <!-- TITLE -->
      <div class="text-center mb-[28px]">
        <h2 class="text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-bold font-heading uppercase"><?php echo esc_html($howto_heading); ?></h2>
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
              <?php echo esc_html($howto_1_title); ?>
            </h2>
            <p class="text-[14px] sm:text-[15px] md:text-[16px] text-text-muted mt-1">
              <?php echo esc_html($howto_1_desc); ?>
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
              <?php echo esc_html($howto_2_title); ?>
            </h2>
            <p class="text-[14px] sm:text-[15px] md:text-[16px] text-text-muted mt-1">
              <?php echo esc_html($howto_2_desc); ?>
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
              <?php echo esc_html($howto_3_title); ?>
            </h2>
            <p class="text-[14px] sm:text-[15px] md:text-[16px] text-text-muted mt-1">
              <?php echo esc_html($howto_3_desc); ?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SECTION 4: Bank Card -->
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
              <strong class="text-brand-teal">SWIFT Code:</strong> <?php echo esc_html($bank_swift); ?>
            </p>
            <p class="text-[14px] sm:text-[15px] md:text-[16px] text-text-muted">
              <strong class="text-brand-teal">Bank address:</strong> <?php echo esc_html($bank_address); ?>
            </p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-[12px] pt-2">
              <p class="text-[14px] sm:text-[15px] md:text-[16px]">
                <span class="block text-xs uppercase tracking-wider text-text-muted/80">Account Name</span>
                <strong class="text-brand-teal uppercase text-[16px]"><?php echo esc_html($bank_account_name); ?></strong>
              </p>
              <p class="text-[14px] sm:text-[15px] md:text-[16px]">
                <span class="block text-xs uppercase tracking-wider text-text-muted/80">Account Number</span>
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
            <img src="<?php echo esc_url($bank_qr_image); ?>" alt="Bank QR Code" class="w-32 h-32 object-contain rounded-[12px]">
          </div>
        </div>

      </div>
    </div>

  </div>
</section>
<?php get_footer(); ?>