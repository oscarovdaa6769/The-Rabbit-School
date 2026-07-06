<?php get_header();?>

<div class="relative overflow-hidden">
      <img src="<?php echo get_theme_file_uri('assets/images/banner1.png'); ?>" alt="" class="h-[500px] md:h-[700px] w-full object-cover">
      
      <div class="absolute bottom-6 md:bottom-20 left-[20px] right-[20px] md:left-[100px] max-w-2xl text-text-light z-50">
            <h1 class="font-heading text-xl sm:text-3xl md:text-4xl lg:text-5xl font-bold leading-tight mb-2 md:mb-4 drop-shadow-lg">
                  EXTRAORDINARY LEARNING FOR EXTRAORDINARY LEARNERS
            </h1>
            <p class="text-xs sm:text-base md:text-lg lg:text-xl leading-relaxed opacity-90 drop-shadow-md">
                  Providing children and youth with intellectual disabilities and autism access to education, support, confidence, and skills to reach their full potential.
            </p>
      </div>
</div> 

<div class="relative overflow-hidden">
      <img src="<?php echo get_theme_file_uri('assets/images/banner2.jpg'); ?>" alt="" class="h-[500px] md:h-[700px] w-full object-cover">
      
      <div class="absolute bottom-6 md:bottom-20 left-[20px] right-[20px] md:left-[100px] max-w-2xl text-text-light z-50">
            <h1 class="font-heading text-xl sm:text-3xl md:text-4xl lg:text-5xl font-bold leading-tight mb-2 md:mb-4 drop-shadow-lg">
                  OUR STORY
            </h1>
            <p class="text-xs sm:text-base md:text-lg lg:text-xl leading-relaxed opacity-90 drop-shadow-md">
                  The Rabbit School was founded in Phnom Penh in the early 1990s with a bold vision: to ensure that children with intellectual disabilities and autism are given the same right to learn, grow, and thrive as any other child.
            </p>
            <div class="flex justify-start mt-6">
                  <a href="#" class="group bg-brand-yellow text-brand-brown font-bold text-sm px-6 py-3 rounded-lg shadow-lg hover:scale-105 active:scale-95 transition-all inline-flex gap-3 items-center uppercase tracking-wider">
                        read more
                        <span class="icon-[solar--arrow-right-linear] w-5 h-5 transition-transform duration-300 group-hover:translate-x-1"></span>
                  </a>
            </div>
      </div>
</div>

<section class="bg-white py-16 md:py-24">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 lg:gap-20 items-center">
            
            <div class="flex flex-col">
                <span class="text-brand-brown/60 font-bold tracking-[0.2em] text-xs uppercase mb-3">Our Methodology</span>
                <h2 class="text-3xl md:text-5xl font-heading font-bold text-brand-brown mb-6 leading-tight">HOW WE WORK</h2>
                <p class="text-text-main text-base md:text-lg leading-relaxed mb-8">
                    Our programs empower children and youth with intellectual disabilities to reach their full potential through tailored education, vocational training, inclusive community building, and advocacy for lasting change.
                </p>
                <div class="flex justify-start">
                    <a href="#" class="group bg-brand-brown text-text-light font-bold text-sm px-8 py-3.5 rounded-lg shadow-md hover:bg-brand-brown/90 hover:shadow-xl transition-all inline-flex gap-3 items-center uppercase tracking-widest">
                        explore more
                        <span class="icon-[solar--arrow-right-linear] w-5 h-5 transition-transform duration-300 group-hover:translate-x-1"></span>
                    </a>
                </div>
            </div>
            
            <div class="relative">
                <div class="absolute -top-4 -right-4 w-full h-full border-2 border-brand-yellow rounded-2xl -z-10 hidden md:block"></div>
                <div class="w-full aspect-[4/3] md:aspect-video rounded-3xl overflow-hidden shadow-2xl transition-transform duration-500 hover:scale-[1.02]">
                    <img src="<?php echo get_theme_file_uri('assets/images/image.png'); ?>" alt="How We Work Banner" class="h-full w-full object-cover">
                </div>
            </div>

        </div>
    </div>
</section>

<section class="bg-brand-yellow py-20 px-6 relative overflow-hidden">
      <div class="absolute inset-0 opacity-10 pointer-events-none bg-[radial-gradient(#000_1px,transparent_1px)] [background-size:20px_20px]"></div>

      <div class="max-w-7xl mx-auto text-center relative z-10">
            <h2 class="text-3xl md:text-5xl font-heading font-bold text-brand-brown uppercase mb-6">
                  Our Impact and Reach
            </h2>
            <div class="w-20 h-1.5 bg-brand-brown mx-auto mb-8 rounded-full"></div>
            <p class="max-w-3xl mx-auto text-base md:text-xl text-brand-brown leading-relaxed font-medium mb-16 opacity-90">
                  Since 1997, Rabbit School has been transforming the lives of children and youth with intellectual disabilities and autism—bringing them hope, learning, and a sense of belonging.
            </p>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            
                  <?php 
                  $impacts = [
                      ['icon1.png', '6,850+', 'students have gained the confidence and skills to thrive.'],
                      ['icon2.png', '134+', 'Teachers trained are becoming agents of change.'],
                      ['icon3.png', '850+', 'students with special needs currently enrolled.'],
                      ['icon4.png', '118+', 'classrooms open to children across 16 public schools.']
                  ];
                  foreach ($impacts as $item): ?>
                  <div class="bg-white/95 backdrop-blur-sm rounded-3xl shadow-xl p-10 flex flex-col items-center text-center transition-all duration-300 hover:-translate-y-3 hover:shadow-2xl group border-b-8 border-transparent hover:border-brand-brown">
                        <div class="mb-6 h-20 w-20 bg-brand-yellow/20 rounded-full flex items-center justify-center transition-transform duration-500">
                              <img src="<?php echo get_theme_file_uri('assets/images/' . $item[0]); ?>" alt="" class="h-12 w-auto object-contain">
                        </div>
                        <h3 class="text-3xl md:text-4xl font-black text-brand-brown mb-4 tracking-tighter"><?php echo $item[1]; ?></h3>
                        <p class="text-sm md:text-base text-text-main leading-relaxed font-medium opacity-80">
                              <?php echo $item[2]; ?>
                        </p>
                  </div>
                  <?php endforeach; ?>

            </div>
      </div>
</section>

<section class="bg-gray-50/50 py-16 overflow-hidden border-t border-b border-gray-100">
      
      <div class="max-w-7xl mx-auto px-6 text-center mb-10">
            <h2 class="text-3xl md:text-4xl font-heading font-bold text-brand-brown uppercase tracking-wider mb-3">
                  Our Donors
            </h2>
            <p class="max-w-3xl mx-auto text-sm md:text-base text-text-main/80 leading-relaxed font-medium">
                  Working together with our corporate partners, we make a far bigger impact than we could by acting alone. Together we can make real change happen at scale.
            </p>
      </div>

      <div class="relative w-full flex items-center overflow-x-hidden mb-16">
            <div class="absolute left-0 top-0 bottom-0 w-20 md:w-40 bg-gradient-to-r from-gray-50/50 to-transparent z-10 pointer-events-none"></div>
            <div class="absolute right-0 top-0 bottom-0 w-20 md:w-40 bg-gradient-to-l from-gray-50/50 to-transparent z-10 pointer-events-none"></div>

            <div class="flex gap-20 md:gap-32 shrink-0 animate-marquee-left items-center px-12">
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
            </div>
      </div>


      <div class="max-w-4xl mx-auto px-6 text-center mb-10">
            <div class="w-16 h-0.5 bg-brand-brown/10 mx-auto mb-10"></div>
            <h2 class="text-3xl md:text-4xl font-heading font-bold text-brand-brown uppercase tracking-wider mb-4">
                  Our Partners
            </h2>
      </div>

      <div class="relative w-full flex items-center overflow-x-hidden pb-2">
            <div class="absolute left-0 top-0 bottom-0 w-20 md:w-40 bg-gradient-to-r from-gray-50/50 to-transparent z-10 pointer-events-none"></div>
            <div class="absolute right-0 top-0 bottom-0 w-20 md:w-40 bg-gradient-to-l from-gray-50/50 to-transparent z-10 pointer-events-none"></div>

            <div class="flex gap-20 md:gap-32 shrink-0 animate-marquee-right items-center px-12">
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
            </div>
      </div>

</section>

<section class="bg-brand-teal py-16 md:py-24">
      <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 lg:gap-20 items-center">
                  
                  <div class="relative">
                        <div class="absolute -top-4 -right-4 w-full h-full border-2 border-brand-yellow rounded-2xl -z-10 hidden md:block"></div>
                        <div class="w-full aspect-[4/3] md:aspect-video rounded-3xl overflow-hidden shadow-2xl transition-transform duration-500 hover:scale-[1.02]">
                              <img src="<?php echo get_theme_file_uri('assets/images/image2.png'); ?>" alt="How We Work Banner" class="h-full w-full object-cover">
                        </div>
                  </div>
                  
                  <div class="flex flex-col">
                        <span class="text-brand-brown/60 font-bold tracking-[0.2em] text-xs uppercase mb-3">How to Help</span>
                        <h2 class="text-3xl md:text-5xl font-heading font-bold text-brand-brown mb-6 leading-tight">GET INVOLVED</h2>
                        <p class="text-text-main text-base md:text-lg leading-relaxed mb-8">
                              There are many ways to support Rabbit School and help transform the lives of children and youth with intellectual disabilities and autism in Cambodia. Choose the path that speaks to you—and become the reason a child can grow up with dignity, opportunity, and self-reliance.
                        </p>
                        <div class="flex justify-start">
                              <a href="#" class="group bg-brand-brown text-text-light font-bold text-sm px-8 py-3.5 rounded-lg shadow-md hover:bg-brand-brown/90 hover:shadow-xl transition-all inline-flex gap-3 items-center uppercase tracking-widest">
                              explore more
                              <span class="icon-[solar--arrow-right-linear] w-5 h-5 transition-transform duration-300 group-hover:translate-x-1"></span>
                              </a>
                        </div>
                  </div>
            </div>
      </div>
</section>

<?php get_footer();?>