<?php
/*
Template Name: videos
Template Post Type: post, page, product
*/
get_header();
?>
<section class="w-full max-w-7xl mx-auto px-4 py-12 font-sans">

  <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6 border-b border-gray-100 pb-8 mb-10">
    <div class="max-w-2xl">
      <h2 class="text-4xl md:text-5xl font-extrabold tracking-tight text-[#623D3C] uppercase">
       <?php echo esc_html(get_field('heading_1')?: 'error'); ?>
      </h2>
      <p class="mt-3 text-lg text-text-main font-medium">
        <?php echo esc_html(get_field('paragraph_1')?: 'error'); ?>
      </p>
    </div>
    
   
    <div class="flex items-center gap-3 w-full md:w-auto">
      <span class="text-sm font-bold uppercase tracking-wider text-text-main whitespace-nowrap"><?php echo esc_html(get_field('heading_2')?: 'error'); ?></span>
      <div class="relative w-full md:w-72">
        <input 
          type="text" 
          placeholder="Search" 
          class="w-full px-4 py-2.5 pr-10 bg-white border border-gray-300 rounded-lg focus:outline-hidden focus:ring-2 focus:ring-[#623D3C] focus:border-[#623D3C] text-text-main placeholder-gray-400 transition"
        />
        <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
          <svg class="w-5 h-5 text-gray-800" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
          </svg>
        </div>
      </div>
    </div>
  </div>


  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">


    <div class="flex flex-col justify-between h-full group bg-white rounded-2xl p-4 shadow-xs border border-gray-100 hover:shadow-md transition-shadow duration-300">
      <div>
        <div class="overflow-hidden rounded-xl aspect-video bg-black mb-6">
           <video controls class="w-full h-full object-cover">
              <source src="<?php echo get_field('vider_1'); ?>" type="video/mp4">
              Your browser does not support the video tag.
          </video>
        </div>
        <h3 class="text-md font-extrabold text-[#623D3C] tracking-wide uppercase leading-snug line-clamp-2 min-h-[3.5rem]">
          <?php echo esc_html(get_field('paragraph_2')?: 'error'); ?>
        </h3>
      </div>
      
    </div>

    
    <div class="flex flex-col justify-between h-full group bg-white rounded-2xl p-4 shadow-xs border border-gray-100 hover:shadow-md transition-shadow duration-300">
      <div>
        <div class="overflow-hidden rounded-xl aspect-video bg-black mb-6">
          <video controls class="w-full h-full object-cover">
              <source src="<?php echo get_field('video_2'); ?>" type="video/mp4">
              Your browser does not support the video tag.
          </video>
        </div>
        <h3 class="text-md font-extrabold text-[#623D3C] tracking-wide uppercase leading-snug line-clamp-2 min-h-[3.5rem]">
          <?php echo esc_html(get_field('paragraph_3')?: 'error'); ?>
        </h3>
      </div>
     
    </div>

   
    <div class="flex flex-col justify-between h-full group bg-white rounded-2xl p-4 shadow-xs border border-gray-100 hover:shadow-md transition-shadow duration-300">
      <div>
        <div class="overflow-hidden rounded-xl aspect-video bg-black mb-6">
          <video controls class="w-full h-full object-cover">
              <source src="<?php echo get_field('video_3'); ?>" type="video/mp4">
              Your browser does not support the video tag.
          </video>
        </div>
        <h3 class="text-md font-extrabold text-[#623D3C] tracking-wide uppercase leading-snug line-clamp-2 min-h-[3.5rem]">
         <?php echo esc_html(get_field('paragraph_4')?: 'error'); ?>
        </h3>
      </div>
      
    </div>

  
    <div class="flex flex-col justify-between h-full group bg-white rounded-2xl p-4 shadow-xs border border-gray-100 hover:shadow-md transition-shadow duration-300">
      <div>
        <div class="overflow-hidden rounded-xl aspect-video bg-black mb-6">
            <video controls class="w-full h-full object-cover">
                <source src="<?php echo get_field('video_4'); ?>" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <h3 class="text-md font-extrabold text-[#623D3C] tracking-wide uppercase leading-snug line-clamp-2 min-h-[3.5rem]">
          <?php echo esc_html(get_field('paragraph_5')?: 'error'); ?>
        </h3>
      </div>
     
      </div>
    </div>

</div>
</section>
<?php get_footer(); ?>