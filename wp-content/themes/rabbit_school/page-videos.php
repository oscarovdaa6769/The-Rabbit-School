<?php
get_header();
?>
<!-- SECTION: VIDEOS GALLERY -->
<section class="rso-animate w-full max-w-7xl mx-auto px-6 md:px-12 py-12 md:py-16 font-sans bg-white" style="animation-delay: 0.15s;">

  <!-- Header & Search Filter -->
  <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6 border-b border-brand-brown/10 pb-8 mb-10">
    <div class="max-w-2xl">
      <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold font-heading tracking-wide text-brand-brown uppercase leading-tight">
        <?php echo esc_html( get_field('videos_stories_title') ?: 'Videos: Stories From Our Programs' ); ?>
      </h2>
      <p class="mt-3 text-sm sm:text-base text-text-main/80 font-sans leading-relaxed">
        <?php echo esc_html( get_field('videos_stories_subtitle') ?: 'Explore the lives and accomplishments of our community through moving images.' ); ?>
      </p>
    </div>
    
    <!-- Search / Filter Field -->
    <div class="flex items-center gap-3 w-full md:w-auto">
      <span class="text-xs font-bold uppercase tracking-wider text-brand-brown whitespace-nowrap">
        <?php echo esc_html( get_field('filters_by_label') ?: 'Filter by:' ); ?>
      </span>
      <div class="relative w-full md:w-72">
        <input 
          type="text" 
          placeholder="<?php echo esc_attr( get_field('search_placeholder') ?: 'Search...' ); ?>" 
          class="w-full px-4 py-2.5 pr-10 bg-brand-cream border border-brand-brown/20 rounded-[10px] text-sm text-brand-brown font-semibold placeholder-brand-brown/50 focus:outline-none focus:ring-2 focus:ring-brand-yellow focus:border-transparent transition-all duration-200 shadow-sm"
        />
        <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
          <svg class="w-4 h-4 text-brand-brown/70" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
          </svg>
        </div>
      </div>
    </div>
  </div>

  <!-- Video Grid -->
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8">

    <!-- Card 1 -->
    <article class="flex flex-col justify-between h-full group bg-brand-cream rounded-[24px] p-5 shadow-md hover:shadow-xl transition-all duration-300">
      <div>
        <div class="overflow-hidden rounded-[16px] aspect-video bg-black mb-5 relative group-hover:scale-[1.02] transition-transform duration-300">
          <video controls class="w-full h-full object-cover">
            <source src="<?php echo esc_url( get_field('image_1') ?: get_theme_file_uri('assets/images/video1.mp4') ); ?>" type="video/mp4">
            Your browser does not support the video tag.
          </video>
        </div>
        <h3 class="text-base font-extrabold text-brand-brown font-heading uppercase leading-snug line-clamp-2 min-h-[3rem]">
          <?php echo esc_html( get_field('video_1_title') ?: 'Vocational Success: From Leakhena' ); ?>
        </h3>
      </div>
    </article>

    <!-- Card 2 -->
    <article class="flex flex-col justify-between h-full group bg-brand-cream rounded-[24px] p-5 shadow-md hover:shadow-xl transition-all duration-300">
      <div>
        <div class="overflow-hidden rounded-[16px] aspect-video bg-black mb-5 relative group-hover:scale-[1.02] transition-transform duration-300">
          <video controls class="w-full h-full object-cover">
            <source src="<?php echo esc_url( get_theme_file_uri('assets/images/video2.mp4') ); ?>" type="video/mp4">
            Your browser does not support the video tag.
          </video>
        </div>
        <h3 class="text-base font-extrabold text-brand-brown font-heading uppercase leading-snug line-clamp-2 min-h-[3rem]">
          <?php echo esc_html( get_field('video_2_title') ?: 'Advocacy in Motion: Our Team in the Community' ); ?>
        </h3>
      </div>
    </article>

    <!-- Card 3 -->
    <article class="flex flex-col justify-between h-full group bg-brand-cream rounded-[24px] p-5 shadow-md hover:shadow-xl transition-all duration-300">
      <div>
        <div class="overflow-hidden rounded-[16px] aspect-video bg-black mb-5 relative group-hover:scale-[1.02] transition-transform duration-300">
          <video controls class="w-full h-full object-cover">
            <source src="<?php echo esc_url( get_theme_file_uri('assets/images/video3.mp4') ); ?>" type="video/mp4">
            Your browser does not support the video tag.
          </video>
        </div>
        <h3 class="text-base font-extrabold text-brand-brown font-heading uppercase leading-snug line-clamp-2 min-h-[3rem]">
          <?php echo esc_html( get_field('video_3_title') ?: 'Student Interviews: Dreams and Aspirations' ); ?>
        </h3>
      </div>
    </article>

    <!-- Card 4 -->
    <article class="flex flex-col justify-between h-full group bg-brand-cream rounded-[24px] p-5 shadow-md hover:shadow-xl transition-all duration-300">
      <div>
        <div class="overflow-hidden rounded-[16px] aspect-video bg-black mb-5 relative group-hover:scale-[1.02] transition-transform duration-300">
          <video controls class="w-full h-full object-cover">
            <source src="<?php echo esc_url( get_theme_file_uri('assets/images/video4.mp4') ); ?>" type="video/mp4">
            Your browser does not support the video tag.
          </video>
        </div>
        <h3 class="text-base font-extrabold text-brand-brown font-heading uppercase leading-snug line-clamp-2 min-h-[3rem]">
          <?php echo esc_html( get_field('video_4_title') ?: 'A Day of Inclusion: Classroom Joy' ); ?>
        </h3>
      </div>
    </article>

  </div>

</section>
<?php get_footer(); ?>