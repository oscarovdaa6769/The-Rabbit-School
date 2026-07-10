<?php get_header();?>
<<<<<<< HEAD

<!-- section 1 -->
<div class="relative overflow-hidden">
      <img src="<?php echo get_theme_file_uri('assets/images/banner1.png'); ?>" alt="" class="h-[500px] md:h-[700px] w-full object-cover">
      
      <div class="absolute bottom-6 md:bottom-20 left-[20px] right-[20px] md:left-[100px] max-w-2xl text-text-light z-50">
            <h1 class="font-heading text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-black leading-tight mb-2 md:mb-4">
                  <?php the_title();?>
            </h1>
            <p class="text-[12px] sm:text-[13px] md:text-[14px] lg:text-[16px] leading-relaxed opacity-90">
                  <?php the_content();?>
            </p>
=======
<?php

// section 1
$img_1_url = get_field('image_1') ?: get_theme_file_uri('assets/images/error.png');
$title_1 = get_field('heading_1') ?: 'SECTION 1 NOT WORKING';
$desc_1 = get_field('description_1') ?: 'DESC 1 NOT WORKING';

// section 2
$img_2_url = get_field('image_2') ?: get_theme_file_uri('assets/images/error.png');
$title_2 = get_field('heading_2') ?: 'SECTION 2 NOT WORKING';
$desc_2 = get_field('description_2') ?: 'DESC 2 NOT WORKING';
$btn_2_txt = get_field('button_2_text') ?: 'BTN 2 NOT WORKING';
$btn_2_lnk = get_field('button_2_link') ?: '#';

// section 3
$img_3_url = get_field('image_3') ?: get_theme_file_uri('assets/images/error.png');
$sub_title_3 = get_field('sub_heading_3') ?: 'SUB SECTION 3 NOT WORKING';
$title_3 = get_field('heading_3') ?: 'SECTION 3 NOT WORKING';
$desc_3 = get_field('description_3') ?: 'DESC 3 NOT WORKING';
$btn_3_txt = get_field('button_3_text') ?: 'BTN 3 NOT WORKING';
$btn_3_lnk = get_field('button_3_link') ?: '#';

// section 4 
$title_4 = get_field('heading_4') ?: 'SECTION 4 NOT WORKING';
$desc_4 = get_field('description_4') ?: 'DESC 4 NOT WORKING';
$img_card1_url = get_field('image_card1') ?: get_theme_file_uri('assets/images/error.png');
$title_card1 = get_field('title_card1') ?: 'TITLE CARD NOT WORKING';
$desc_card1 = get_field('description_card1') ?: 'DESC CARD1 NOT WORKING';
$img_card2_url = get_field('image_card2') ?: get_theme_file_uri('assets/images/error.png');
$title_card2 = get_field('title_card2') ?: 'TITLE CARD NOT WORKING';
$desc_card2 = get_field('description_card2') ?: 'DESC CARD2 NOT WORKING';
$img_card3_url = get_field('image_card3') ?: get_theme_file_uri('assets/images/error.png');
$title_card3 = get_field('title_card3') ?: 'TITLE CARD NOT WORKING';
$desc_card3 = get_field('description_card3') ?: 'DESC CARD3 NOT WORKING';
$img_card4_url = get_field('image_card4') ?: get_theme_file_uri('assets/images/error.png');
$title_card4 = get_field('title_card4') ?: 'TITLE CARD NOT WORKING';
$desc_card4 = get_field('description_card4') ?: 'DESC CARD4 NOT WORKING';

$impacts = [
    [$img_card1_url, $title_card1, $desc_card1],
    [$img_card2_url, $title_card2, $desc_card2],
    [$img_card3_url, $title_card3, $desc_card3],
    [$img_card4_url, $title_card4, $desc_card4]
];

// section 5
$donor_logos = [
    get_field('image_donor1'), get_field('image_donor2'), get_field('image_donor3'),
    get_field('image_donor4'), get_field('image_donor5'), get_field('image_donor6'),
    get_field('image_donor7'), get_field('image_donor8'), get_field('image_donor9'),
    get_field('image_donor10'), get_field('image_donor11'), get_field('image_donor12'),
    get_field('image_donor13')
];
$partner_logos = [
    get_field('image_partner1'), get_field('image_partner2'),
    get_field('image_partner3'), get_field('image_partner4'),
    get_field('image_partner5')
];
$fallback_img = get_theme_file_uri('assets/images/error.png');

// section 6
$img_6_url = get_field('image_6') ?: get_theme_file_uri('assets/images/error.png');
$sub_title_6 = get_field('sub_heading_6') ?: 'SUB SECTION 6 NOT WORKING';
$title_6 = get_field('heading_6') ?: 'SECTION 6 NOT WORKING';
$desc_6 = get_field('description_6') ?: 'DESC 6 NOT WORKING';
$btn_6_txt = get_field('button_6_text') ?: 'BTN 6 NOT WORKING';
$btn_6_lnk = get_field('button_6_link') ?: '#';
?>

<!-- section 1 -->
<div class="relative overflow-hidden">
      <img src="<?php echo esc_url($img_1_url); ?>" alt="<?php echo esc_attr($title_1); ?>" class="h-[500px] md:h-[700px] w-full object-cover">
      
      <div class="absolute inset-0 z-50 flex items-end pb-6 md:pb-20">
            <div class="w-full max-w-7xl mx-auto px-6 lg:px-8">
                  <div class="max-w-2xl text-text-light">
                        <h1 class="font-heading text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-black leading-tight mb-2 md:mb-4 uppercase">
                              <?php echo esc_html($title_1); ?>
                        </h1>
                        <p class="text-[12px] sm:text-[13px] md:text-[14px] lg:text-[16px] leading-relaxed opacity-90">
                              <?php echo esc_html($desc_1); ?>
                        </p>
                  </div>
            </div>
>>>>>>> 0c338b92074e8356bcf2f5e73e9325df5cc5a01c
      </div>
</div> 

<!-- section 2 -->
<div class="relative overflow-hidden">
<<<<<<< HEAD
      <img src="<?php echo get_theme_file_uri('assets/images/banner2.jpg'); ?>" alt="" class="h-[500px] md:h-[700px] w-full object-cover">
      
      <div class="absolute bottom-6 md:bottom-20 left-[20px] right-[20px] md:left-[100px] max-w-2xl text-text-light z-50">
            <h1 class="font-heading text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-black leading-tight mb-2 md:mb-4">
                  OUR STORY
            </h1>
            <p class="text-[12px] sm:text-[13px] md:text-[14px] lg:text-[16px] leading-relaxed opacity-90">
                  The Rabbit School was founded in Phnom Penh in the early 1990s with a bold vision: to ensure that children with intellectual disabilities and autism are given the same right to learn, grow, and thrive as any other child.
            </p>
            <div class="flex justify-start mt-6">
                  <a href="#" class="group bg-brand-brown text-text-light font-bold text-sm px-[24px] py-[12px] rounded-[8px] shadow-lg hover:scale-105 active:scale-95 transition-all inline-flex gap-3 items-center uppercase tracking-wider">
                        read more
                        <span class="icon-[solar--arrow-right-linear] w-5 h-5 transition-transform duration-300 group-hover:translate-x-1"></span>
                  </a>
=======
      <img src="<?php echo esc_url($img_2_url); ?>" alt="<?php echo esc_attr($title_2); ?>" class="h-[500px] md:h-[700px] w-full object-cover">
      
      <div class="absolute inset-0 z-50 flex items-end pb-6 md:pb-20">
            <div class="w-full max-w-7xl mx-auto px-6 lg:px-8">
                  <div class="max-w-2xl text-text-light">
                        <h1 class="font-heading text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-black leading-tight mb-2 md:mb-4 uppercase">
                              <?php echo esc_html($title_2); ?>
                        </h1>
                        <p class="text-[12px] sm:text-[13px] md:text-[14px] lg:text-[16px] leading-relaxed opacity-90">
                              <?php echo esc_html($desc_2); ?>
                        </p>
                        <?php if ( !empty($btn_2_txt) ) : ?>
                        <div class="flex justify-start mt-6">
                              <a href="<?php echo esc_url($btn_2_lnk); ?>" class="group bg-brand-brown text-text-light font-bold text-sm px-[24px] py-[12px] rounded-[8px] shadow-lg hover:scale-105 active:scale-95 transition-all inline-flex gap-3 items-center uppercase tracking-widest">
                                    <?php echo esc_html($btn_2_txt); ?>
                                    <span class="icon-[solar--arrow-right-linear] w-5 h-5 transition-transform duration-300 group-hover:translate-x-1"></span>
                              </a>
                        </div>
                        <?php endif; ?>
                  </div>
>>>>>>> 0c338b92074e8356bcf2f5e73e9325df5cc5a01c
            </div>
      </div>
</div>

<!-- section 3 -->
<section class="bg-white py-16 md:py-24">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 lg:gap-20 items-center">
            
            <div class="flex flex-col">
<<<<<<< HEAD
                <span class="text-brand-brown/60 font-bold tracking-[0.2em] text-[14px] uppercase mb-3">Our Methodology</span>
                <h2 class="text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-heading font-black text-brand-brown mb-6 leading-tight">HOW WE WORK</h2>
                <p class="text-text-main text-[12px] sm:text-[13px] md:text-[14px] lg:text-[16px] leading-relaxed mb-8">
                    Our programs empower children and youth with intellectual disabilities to reach their full potential through tailored education, vocational training, inclusive community building, and advocacy for lasting change.
                </p>
                <div class="flex justify-start">
                    <a href="#" class="group bg-brand-brown text-text-light font-bold text-sm px-[24px] py-[12px] rounded-[8px] shadow-md hover:bg-brand-brown/90 hover:shadow-xl transition-all inline-flex gap-3 items-center uppercase tracking-widest">
                        explore more
                        <span class="icon-[solar--arrow-right-linear] w-5 h-5 transition-transform duration-300 group-hover:translate-x-1"></span>
                    </a>
                </div>
            </div>
            
            <div class="relative">
                <div class="absolute -top-4 -right-4 w-full h-full border-2 border-brand-yellow rounded-2xl -z-10 hidden md:block"></div>
                <div class="w-full aspect-[4/3] md:aspect-video rounded-[24px] overflow-hidden shadow-2xl transition-transform duration-500 hover:scale-[1.02]">
                    <img src="<?php echo get_theme_file_uri('assets/images/image.png'); ?>" alt="How We Work Banner" class="h-full w-full object-cover">
                </div>
=======
                  <span class="text-brand-brown/60 font-bold tracking-[0.2em] text-[14px] uppercase mb-3">
                        <?php echo esc_html($sub_title_3); ?>
                  </span>
                  <h2 class="text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-heading font-black text-brand-brown mb-6 uppercase leading-tight">
                        <?php echo esc_html($title_3); ?>
                  </h2>
                  <p class="text-text-main text-[12px] sm:text-[13px] md:text-[14px] lg:text-[16px] leading-relaxed mb-8">
                        <?php echo esc_html($desc_3); ?>
                  </p>
                  <?php if ( !empty($btn_3_txt) ) : ?>
                  <div class="flex justify-start">
                        <a href="<?php echo esc_url($btn_3_lnk); ?>" class="group bg-brand-brown text-text-light font-bold text-sm px-[24px] py-[12px] rounded-[8px] shadow-md hover:bg-brand-brown/90 hover:shadow-xl transition-all inline-flex gap-3 items-center uppercase tracking-widest">
                              <?php echo esc_html($btn_3_txt); ?>
                              <span class="icon-[solar--arrow-right-linear] w-5 h-5 transition-transform duration-300 group-hover:translate-x-1"></span>
                        </a>
                  </div>
                  <?php endif; ?>
            </div>
                  
            <div class="relative">
                  <div class="absolute -top-4 -right-4 w-full h-full border-2 border-brand-yellow rounded-2xl -z-10 hidden md:block"></div>
                  <div class="w-full aspect-[4/3] md:aspect-video rounded-[24px] overflow-hidden shadow-2xl transition-transform duration-500 hover:scale-[1.02]">
                        <img src="<?php echo esc_url($img_3_url) ?>" alt="<?php echo esc_attr($title_3); ?>" class="h-full w-full object-cover">
                  </div>
>>>>>>> 0c338b92074e8356bcf2f5e73e9325df5cc5a01c
            </div>

        </div>
    </div>
</section>

<!-- section 4 -->
<section class="bg-brand-yellow py-20 px-6 relative overflow-hidden">
      <div class="absolute inset-0 opacity-10 pointer-events-none bg-[radial-gradient(#000_1px,transparent_1px)] [background-size:20px_20px]"></div>

      <div class="max-w-7xl mx-auto text-center relative z-10">
            <h2 class="text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-heading font-black text-brand-brown uppercase mb-6">
<<<<<<< HEAD
                  Our Impact and Reach
            </h2>
            <div class="w-20 h-1.5 bg-brand-brown mx-auto mb-8 rounded-full"></div>
            <p class="max-w-3xl mx-auto text-[12px] sm:text-[13px] md:text-[14px] lg:text-[16px] text-brand-brown leading-relaxed font-medium mb-16 opacity-90">
                  Since 1997, Rabbit School has been transforming the lives of children and youth with intellectual disabilities and autism—bringing them hope, learning, and a sense of belonging.
=======
                  <?php echo esc_html($title_4); ?>
            </h2>
            <div class="w-20 h-1.5 bg-brand-brown mx-auto mb-8 rounded-full"></div>
            <p class="max-w-3xl mx-auto text-[12px] sm:text-[13px] md:text-[14px] lg:text-[16px] text-brand-brown leading-relaxed font-medium mb-16 opacity-90">
                  <?php echo esc_html($desc_4); ?>
>>>>>>> 0c338b92074e8356bcf2f5e73e9325df5cc5a01c
            </p>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            
<<<<<<< HEAD
                  <?php 
                  $impacts = [
                      ['icon1.png', '6,850+', 'students have gained the confidence and skills to thrive.'],
                      ['icon2.png', '134+', 'Teachers trained are becoming agents of change.'],
                      ['icon3.png', '850+', 'students with special needs currently enrolled.'],
                      ['icon4.png', '118+', 'classrooms open to children across 16 public schools.']
                  ];
                  foreach ($impacts as $item): ?>
                  <div class="bg-white/95 backdrop-blur-sm rounded-[24px] shadow-xl p-10 flex flex-col items-center text-center transition-all duration-300 hover:-translate-y-3 hover:shadow-2xl group border-b-8 border-transparent hover:border-brand-brown">
                        <div class="mb-6 h-20 w-20 bg-brand-yellow/20 rounded-full flex items-center justify-center transition-transform duration-500">
                              <img src="<?php echo get_theme_file_uri('assets/images/' . $item[0]); ?>" alt="" class="h-12 w-auto object-contain">
                        </div>
                        <h3 class="text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-heading font-black text-brand-brown mb-4 tracking-tighter"><?php echo $item[1]; ?></h3>
                        <p class="text-[12px] sm:text-[13px] md:text-[14px] lg:text-[16px] text-text-main leading-relaxed font-medium opacity-80">
                              <?php echo $item[2]; ?>
=======
                  <?php foreach ($impacts as $item): ?>
                  <div class="bg-white/95 backdrop-blur-sm rounded-[24px] shadow-xl p-10 flex flex-col items-center text-center transition-all duration-300 hover:-translate-y-3 hover:shadow-2xl group border-b-8 border-transparent hover:border-brand-brown">
                        <div class="mb-6 h-20 w-20 bg-brand-yellow/20 rounded-full flex items-center justify-center transition-transform duration-500">
                              <img src="<?php echo esc_url($item[0]); ?>" alt="" class="h-12 w-auto object-contain">
                        </div>
                        <h3 class="text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-heading font-black text-brand-brown mb-4 tracking-tighter">
                              <?php echo esc_html($item[1]); ?>
                        </h3>
                        <p class="text-[12px] sm:text-[13px] md:text-[14px] lg:text-[16px] text-text-main leading-relaxed font-medium opacity-80">
                              <?php echo esc_html($item[2]); ?>
>>>>>>> 0c338b92074e8356bcf2f5e73e9325df5cc5a01c
                        </p>
                  </div>
                  <?php endforeach; ?>

            </div>
      </div>
</section>

<!-- section 5 -->
<section class="bg-gray-50/50 py-16 overflow-hidden border-t border-b border-gray-100">
      
      <div class="max-w-7xl mx-auto px-6 text-center mb-10">
<<<<<<< HEAD
            <h2 class="text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-heading font-black text-brand-brown uppercase tracking-wider mb-3">
                  Our Donors
            </h2>
            <p class="max-w-3xl mx-auto text-[12px] sm:text-[13px] md:text-[14px] lg:text-[16px] text-text-main/80 leading-relaxed font-medium">
                  Working together with our corporate partners, we make a far bigger impact than we could by acting alone. Together we can make real change happen at scale.
=======
            <h2 class="text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-heading font-black text-brand-brown uppercase mb-3">
                  <?php echo esc_html(get_field('title_5_1') ?: 'TITLE 5_1 NOT WORKING'); ?>
            </h2>
            <p class="max-w-3xl mx-auto text-[12px] sm:text-[13px] md:text-[14px] lg:text-[16px] text-text-main/80 leading-relaxed font-medium">
                  <?php echo esc_html(get_field('description_5') ?: 'DESCRIPTION 5 NOT WORKING'); ?>
>>>>>>> 0c338b92074e8356bcf2f5e73e9325df5cc5a01c
            </p>
      </div>

      <div class="relative w-full flex items-center overflow-x-hidden mb-16">
            <div class="absolute left-0 top-0 bottom-0 w-20 md:w-40 bg-gradient-to-r from-gray-50/50 to-transparent z-10 pointer-events-none"></div>
            <div class="absolute right-0 top-0 bottom-0 w-20 md:w-40 bg-gradient-to-l from-gray-50/50 to-transparent z-10 pointer-events-none"></div>

            <div class="flex gap-20 md:gap-32 shrink-0 animate-marquee-left items-center px-12">
<<<<<<< HEAD
                  <?php for ($i = 1; $i <= 13; $i++): ?>
                        <div class="h-10 md:h-14 flex items-center justify-center">
                              <img src="<?php echo get_theme_file_uri("assets/images/donor{$i}.png"); ?>" 
                                   alt="Donor Logo" 
                                   class="max-h-full w-auto object-contain mix-blend-multiply opacity-60 contrast-125 hover:opacity-100 hover:scale-105 transition-all duration-300 ease-out">
                        </div>
                  <?php endfor; ?>
            </div>

            <div class="flex gap-20 md:gap-32 shrink-0 animate-marquee-left items-center px-12" aria-hidden="true">
                  <?php for ($i = 1; $i <= 13; $i++): ?>
                        <div class="h-10 md:h-14 flex items-center justify-center">
                              <img src="<?php echo get_theme_file_uri("assets/images/donor{$i}.png"); ?>" 
                                   alt="Donor Logo" 
                                   class="max-h-full w-auto object-contain mix-blend-multiply opacity-60 contrast-125 hover:opacity-100 hover:scale-105 transition-all duration-300 ease-out">
                        </div>
                  <?php endfor; ?>
=======
                  <?php foreach ($donor_logos as $logo): 
                        $img_url = $logo ?: $fallback_img; ?>
                        <div class="h-10 md:h-14 flex items-center justify-center">
                              <img src="<?php echo esc_url($img_url); ?>" 
                                   alt="Donor Logo" 
                                   class="max-h-full w-auto object-contain mix-blend-multiply opacity-60 contrast-125 hover:opacity-100 hover:scale-105 transition-all duration-300 ease-out">
                        </div>
                  <?php endforeach; ?>
            </div>

            <div class="flex gap-20 md:gap-32 shrink-0 animate-marquee-left items-center px-12" aria-hidden="true">
                  <?php foreach ($donor_logos as $logo): 
                        $img_url = $logo ?: $fallback_img; ?>
                        <div class="h-10 md:h-14 flex items-center justify-center">
                              <img src="<?php echo esc_url($img_url); ?>" 
                                   alt="Donor Logo" 
                                   class="max-h-full w-auto object-contain mix-blend-multiply opacity-60 contrast-125 hover:opacity-100 hover:scale-105 transition-all duration-300 ease-out">
                        </div>
                  <?php endforeach; ?>
>>>>>>> 0c338b92074e8356bcf2f5e73e9325df5cc5a01c
            </div>
      </div>


      <div class="max-w-4xl mx-auto px-6 text-center mb-10">
            <div class="w-16 h-0.5 bg-brand-brown/10 mx-auto mb-10"></div>
<<<<<<< HEAD
            <h2 class="text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-heading font-black text-brand-brown uppercase tracking-wider mb-4">
                  Our Partners
=======
            <h2 class="text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-heading font-black text-brand-brown uppercase mb-4">
                  <?php echo esc_html(get_field('title_5_2') ?: 'TITLE 5_2 NOT WORKING'); ?>
>>>>>>> 0c338b92074e8356bcf2f5e73e9325df5cc5a01c
            </h2>
      </div>

      <div class="relative w-full flex items-center overflow-x-hidden pb-2">
            <div class="absolute left-0 top-0 bottom-0 w-20 md:w-40 bg-gradient-to-r from-gray-50/50 to-transparent z-10 pointer-events-none"></div>
            <div class="absolute right-0 top-0 bottom-0 w-20 md:w-40 bg-gradient-to-l from-gray-50/50 to-transparent z-10 pointer-events-none"></div>

            <div class="flex gap-20 md:gap-32 shrink-0 animate-marquee-right items-center px-12">
<<<<<<< HEAD
                  <?php for ($p = 1; $p <= 5; $p++): ?>
                        <div class="h-10 md:h-14 flex items-center justify-center">
                              <img src="<?php echo get_theme_file_uri("assets/images/partner{$p}.png"); ?>" 
                                   alt="Partner Logo" 
                                   class="max-h-full w-auto object-contain mix-blend-multiply opacity-60 contrast-125 hover:opacity-100 hover:scale-105 transition-all duration-300 ease-out">
                        </div>
                  <?php endfor; ?>
            </div>

            <div class="flex gap-20 md:gap-32 shrink-0 animate-marquee-right items-center px-12" aria-hidden="true">
                  <?php for ($p = 1; $p <= 5; $p++): ?>
                        <div class="h-10 md:h-14 flex items-center justify-center">
                              <img src="<?php echo get_theme_file_uri("assets/images/partner{$p}.png"); ?>" 
                                   alt="Partner Logo" 
                                   class="max-h-full w-auto object-contain mix-blend-multiply opacity-60 contrast-125 hover:opacity-100 hover:scale-105 transition-all duration-300 ease-out">
                        </div>
                  <?php endfor; ?>
=======
                  <?php foreach ($partner_logos as $logo): 
                        $img_url = $logo ?: $fallback_img; ?>
                        <div class="h-10 md:h-14 flex items-center justify-center">
                              <img src="<?php echo esc_url($img_url); ?>" 
                                   alt="Partner Logo" 
                                   class="max-h-full w-auto object-contain mix-blend-multiply opacity-60 contrast-125 hover:opacity-100 hover:scale-105 transition-all duration-300 ease-out">
                        </div>
                  <?php endforeach; ?>
            </div>

            <div class="flex gap-20 md:gap-32 shrink-0 animate-marquee-right items-center px-12" aria-hidden="true">
                  <?php foreach ($partner_logos as $logo): 
                        $img_url = $logo ?: $fallback_img; ?>
                        <div class="h-10 md:h-14 flex items-center justify-center">
                              <img src="<?php echo esc_url($img_url); ?>" 
                                   alt="Partner Logo" 
                                   class="max-h-full w-auto object-contain mix-blend-multiply opacity-60 contrast-125 hover:opacity-100 hover:scale-105 transition-all duration-300 ease-out">
                        </div>
                  <?php endforeach; ?>
>>>>>>> 0c338b92074e8356bcf2f5e73e9325df5cc5a01c
            </div>
      </div>

</section>

<!-- section 6 -->
<section class="bg-brand-teal py-16 md:py-24">
      <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 lg:gap-20 items-center">
                  
                  <div class="relative">
                        <div class="absolute -top-4 -right-4 w-full h-full border-2 border-brand-yellow rounded-2xl -z-10 hidden md:block"></div>
                        <div class="w-full aspect-[4/3] md:aspect-video rounded-[24px] overflow-hidden shadow-2xl transition-transform duration-500 hover:scale-[1.02]">
<<<<<<< HEAD
                              <img src="<?php echo get_theme_file_uri('assets/images/image2.png'); ?>" alt="How We Work Banner" class="h-full w-full object-cover">
=======
                              <img src="<?php echo esc_url($img_6_url); ?>" alt="<?php echo esc_attr($title_6); ?>" class="h-full w-full object-cover">
>>>>>>> 0c338b92074e8356bcf2f5e73e9325df5cc5a01c
                        </div>
                  </div>
                  
                  <div class="flex flex-col">
<<<<<<< HEAD
                        <span class="text-brand-brown/60 font-bold tracking-[0.2em] text-xs uppercase mb-3">How to Help</span>
                        <h2 class="text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-heading font-bold text-brand-brown mb-6 leading-tight">GET INVOLVED</h2>
                        <p class="text-text-main text-[12px] sm:text-[13px] md:text-[14px] lg:text-[16px] leading-relaxed mb-8">
                              There are many ways to support Rabbit School and help transform the lives of children and youth with intellectual disabilities and autism in Cambodia. Choose the path that speaks to you—and become the reason a child can grow up with dignity, opportunity, and self-reliance.
                        </p>
                        <div class="flex justify-start">
                              <a href="#" class="group bg-brand-brown text-text-light font-bold text-sm px-[24px] py-[12px] rounded-[8px] shadow-md hover:bg-brand-brown/90 hover:shadow-xl transition-all inline-flex gap-3 items-center uppercase tracking-widest">
                              explore more
                              <span class="icon-[solar--arrow-right-linear] w-5 h-5 transition-transform duration-300 group-hover:translate-x-1"></span>
=======
                        <span class="text-brand-brown/60 font-bold tracking-[0.2em] text-xs uppercase mb-3">
                              <?php echo esc_html($sub_title_6); ?>
                        </span>
                        <h2 class="text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-heading font-bold text-brand-brown mb-6 leading-tight">
                              <?php echo esc_html($title_6); ?>
                        </h2>
                        <p class="text-text-main text-[12px] sm:text-[13px] md:text-[14px] lg:text-[16px] leading-relaxed mb-8">
                              <?php echo esc_html($desc_6); ?>
                        </p>
                        <div class="flex justify-start">
                              <a href="<?php echo esc_url($btn_6_lnk); ?>" class="group bg-brand-brown text-text-light font-bold text-sm px-[24px] py-[12px] rounded-[8px] shadow-md hover:bg-brand-brown/90 hover:shadow-xl transition-all inline-flex gap-3 items-center uppercase tracking-widest">
                                    <?php echo esc_html($btn_6_txt); ?>
                                    <span class="icon-[solar--arrow-right-linear] w-5 h-5 transition-transform duration-300 group-hover:translate-x-1"></span>
>>>>>>> 0c338b92074e8356bcf2f5e73e9325df5cc5a01c
                              </a>
                        </div>
                  </div>
            </div>
      </div>
</section>

<?php get_footer();?>