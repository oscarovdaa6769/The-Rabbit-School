<?php get_header(); ?>

<!-- section 1 -->
<section class="relative overflow-hidden">
      <img src="<?php echo get_theme_file_uri('assets/images/photo1.png'); ?>" alt="" class="h-[500px] md:h-[700px] w-full object-cover">
      
      <div class="absolute bottom-6 md:bottom-20 left-[20px] right-[20px] md:left-[100px] max-w-[700px] text-text-light z-50">
            <h1 class="font-heading text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-black leading-tight mb-2 md:mb-4 uppercase">
                  Photo Essays Stories of Impact
            </h1>
            <p class="text-[12px] sm:text-[13px] md:text-[14px] lg:text-[16px] leading-relaxed opacity-90">
                  Explore the lives, achievements, and everyday joys of children and young adults with intellectual disabilities in Cambodia through powerful visual stories 
            </p>
      </div>
</section> 
<!-- section 2 -->
<section class="max-w-7xl mx-auto py-[64px] md:py-[50px] px-4 md:px-[20px] w-full">
      <div class="flex flex-col sm:flex-row gap-4 justify-between items-stretch sm:items-center w-full mb-8">
            
            <div class="flex flex-col sm:flex-row flex-wrap items-stretch sm:items-center gap-4 sm:flex-1">
                  
                  <div class="relative w-full sm:w-auto text-left group">
                        <button 
                              type="button"
                              class="w-full sm:w-auto border border-brand-brown text-brand-brown text-[16px] font-medium px-[28px] py-[14px] rounded-[8px] inline-flex gap-8 items-center justify-between bg-transparent transition-colors duration-200 hover:bg-brand-brown/5"
                        >
                              <span>Filter</span>
                              <span class="icon-[solar--alt-arrow-down-line-duotone] w-5 h-5 transition-transform duration-300 group-hover:rotate-180"></span>
                        </button>

                        <div 
                              class="invisible overflow-hidden opacity-0 scale-95 pointer-events-none group-hover:visible group-hover:opacity-100 group-hover:scale-100 group-hover:pointer-events-auto absolute left-0 mt-2 w-full sm:w-60 origin-top-left rounded-[16px] border border-brand-brown/20 bg-white shadow-xl transition-all duration-200 z-50"
                        >
                              <div class="py-1 divide-y divide-brand-brown/10" role="none">
                                    <a href="#" class="block px-5 py-3.5 text-sm text-brand-brown font-semibold hover:bg-brand-brown hover:text-white transition-colors duration-150">Education Programs</a>
                                    <a href="#" class="block px-5 py-3.5 text-sm text-brand-brown font-semibold hover:bg-brand-brown hover:text-white transition-colors duration-150">Vocational Training</a>
                                    <a href="#" class="block px-5 py-3.5 text-sm text-brand-brown font-semibold hover:bg-brand-brown hover:text-white transition-colors duration-150">Teacher Training</a>
                                    <a href="#" class="block px-5 py-3.5 text-sm text-brand-brown font-semibold hover:bg-brand-brown hover:text-white transition-colors duration-150">Advocacy & Community</a>
                              </div>
                        </div>
                  </div>

                  <div class="flex items-center justify-between sm:justify-start gap-4 bg-brand-brown text-white px-[28px] py-[14px] rounded-[8px] shadow-sm w-full sm:w-auto">
                        <span class="text-[16px] font-medium tracking-wide">Education</span>
                        <button type="button" class="hover:opacity-80 transition-opacity focus:outline-none flex items-center justify-center" aria-label="Remove filter">
                              <span class="icon-[solar--close-circle-outline] w-5 h-5 text-white"></span>
                        </button>
                  </div>
            </div>

            <div class="relative w-full sm:flex-1 sm:max-w-md">
                  <input 
                      type="text" 
                      placeholder="Search" 
                      class="w-full border border-brand-brown/40 text-brand-brown placeholder-brand-brown/50 px-6 py-[14px] pr-12 rounded-[8px] bg-transparent focus:outline-none focus:border-brand-brown focus:ring-1 focus:ring-brand-brown transition-all duration-200 text-[16px] shadow-sm hover:border-brand-brown/70"
                  />
                  <div class="absolute right-6 top-1/2 -translate-y-1/2 pointer-events-none">
                      <span class="icon-[solar--magnifer-linear] w-5 h-5 text-brand-brown/60"></span>
                  </div>
            </div>

      </div>
</section>
<!-- section 3 -->
<section class="max-w-7xl mx-auto px-4 md:px-[20px]">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="border border-brand-brown rounded-[24px] p-4">
                  <img src="<?php echo esc_url(get_field('program_image') ?: get_theme_file_uri('assets/images/error.png')); ?>" alt="" class="w-full h-[300px] object-cover rounded-[16px] mb-4">
                  <h3 class="font-heading text-[20px] md:text-[22px] lg:text-[24px] font-bold leading-tight mb-2 uppercase">Education Programs</h3>
                  <p class="text-[14px] md:text-[15px] lg:text-[16px] leading-relaxed opacity-90 mb-2">
                        Discover how our education programs are transforming the lives of children with intellectual disabilities in Cambodia, providing them with the skills and knowledge they need to thrive.
                  </p>
                  <a href="" class="group bg-brand-brown text-text-light font-bold text-sm px-[24px] py-[12px] rounded-[8px] shadow-lg transition-all inline-flex gap-3 items-center uppercase tracking-widest">
                        read more
                        <span class="icon-[solar--arrow-right-linear] w-5 h-5 transition-transform duration-300 group-hover:translate-x-1"></span>
                  </a>
            </div>
      </div>
</section>

<?php get_footer(); ?>