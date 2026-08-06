<?php
/*
Template Name: How We Work
*/
get_header();
?>

<style>
  /* Root & Body background color fallback to prevent white flash during navigation */
  html {
    scroll-behavior: smooth;
  }
  html, body {
    background-color: #FDFBF7 !important;
  }
  
  /* Page Load & Exit Animation */
  body {
    opacity: 0;
    transition: opacity 0.4s ease-in-out;
  }
  body.loaded {
    opacity: 1;
  }
  body.fade-out {
    opacity: 0;
  }

  /* Offset anchor scroll targets for fixed headers if applicable */
  section[id] {
    scroll-margin-top: 20px;
  }

  /* Keyframe Animations Matching Get Involved Page */
  @keyframes fadeUp {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
  }
  @keyframes slideInLeft {
      from { opacity: 0; transform: translateX(-30px); }
      to { opacity: 1; transform: translateX(0); }
  }
  @keyframes slideInRight {
      from { opacity: 0; transform: translateX(30px); }
      to { opacity: 1; transform: translateX(0); }
  }
  .anim-fade-up {
      opacity: 0;
      animation: fadeUp 0.6s ease-out forwards;
  }
  .anim-slide-left {
      opacity: 0;
      animation: slideInLeft 0.6s ease-out forwards;
  }
  .anim-slide-right {
      opacity: 0;
      animation: slideInRight 0.6s ease-out forwards;
  }
  .anim-delay-1 { animation-delay: 0.1s; }
  .anim-delay-2 { animation-delay: 0.2s; }
  .anim-delay-3 { animation-delay: 0.3s; }
  .anim-delay-4 { animation-delay: 0.4s; }
  .anim-delay-5 { animation-delay: 0.5s; }

  /* Click ripple + press animation */
  .click-fx {
    position: relative;
    overflow: hidden;
    -webkit-tap-highlight-color: transparent;
    transition: transform 0.15s ease;
  }
  .click-fx:active {
    transform: scale(0.97);
  }
  .click-fx .ripple {
    position: absolute;
    border-radius: 9999px;
    transform: scale(0);
    background: rgba(255, 255, 255, 0.55);
    pointer-events: none;
    animation: click-ripple 0.6s ease-out;
  }
  .click-fx--dark .ripple {
    background: rgba(98, 61, 60, 0.25);
  }
  @keyframes click-ripple {
    to {
      transform: scale(2.5);
      opacity: 0;
    }
  }

  /* Global full-page ripple */
  .page-ripple {
    position: fixed;
    border-radius: 9999px;
    background: rgba(98, 61, 60, 0.15);
    transform: translate(-50%, -50%) scale(0);
    pointer-events: none;
    z-index: 9999;
    animation: page-ripple-anim 0.7s ease-out forwards;
  }
  @keyframes page-ripple-anim {
    to {
      transform: translate(-50%, -50%) scale(1);
      opacity: 0;
    }
  }
</style>

<!-- section 1: Hero -->
<section class="relative overflow-hidden bg-brand-cream">
    <img src="<?php echo esc_url(get_field('section_1_image') ?: get_theme_file_uri('assets/images/error.png')); ?>"
        alt="<?php echo esc_attr(get_field('section_1_title') ?: 'How We Work'); ?>"
        class="h-[500px] md:h-[700px] w-full object-cover">

    <div class="absolute inset-0 z-50 bg-black/20 flex items-end pb-6 md:pb-20 px-6">
        <div class="anim-fade-up w-full max-w-7xl mx-auto">
            <div class="max-w-2xl text-text-light">
                <h1 class="font-heading text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-black leading-tight mb-2 md:mb-4 uppercase">
                    <?php echo esc_html(get_field('section_1_title') ?: 'How We Work'); ?>
                </h1>
                <p class="text-[14px] sm:text-[15px] md:text-[16px] lg:text-[18px] leading-relaxed opacity-90">
                    <?php echo esc_html(get_field('section_1_description') ?: 'Our programs empower children and youth with intellectual disabilities to reach their full potential through tailored education, vocational training, inclusive community building, and advocacy for lasting change.'); ?>
                </p>
            </div>
        </div>
    </div>
</section>

<!-- section 2: Program Navigation Bar -->
<section class="bg-brand-cream py-[64px] md:py-[50px] shadow-md px-6">
    <div class="anim-fade-up anim-delay-1 max-w-7xl mx-auto">
        <h2 class="text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-heading font-bold text-brand-teal mb-6 leading-tight text-center">
            LEARN MORE ABOUT OUR PROGRAMS
        </h2>

        <div class="flex flex-col lg:flex-row gap-[10px] lg:gap-[20px] items-center justify-between">
            <a href="#education-programs" class="click-fx uppercase flex items-center gap-[5px] bg-brand-cream border border-brand-brown/20 hover:bg-brand-brown text-text-main hover:text-text-light text-[10px] sm:text-[12px] md:text-[13px] lg:text-[14px] font-semibold px-[24px] py-[12px] rounded-[8px] shadow-sm transition-all duration-200 group">
                <span>Education Programs</span>
                <span class="icon-[solar--alt-arrow-right-outline] w-5 h-5 transition-transform duration-200"></span>
            </a>
            <a href="#vocational-training" class="click-fx uppercase flex items-center gap-[5px] bg-brand-cream border border-brand-brown/20 hover:bg-brand-brown text-text-main hover:text-text-light text-[10px] sm:text-[12px] md:text-[13px] lg:text-[14px] font-semibold px-[24px] py-[12px] rounded-[8px] shadow-sm transition-all duration-200 group">
                <span>Vocational Training & Job Placement</span>
                <span class="icon-[solar--alt-arrow-right-outline] w-5 h-5 transition-transform duration-200"></span>
            </a>
            <a href="#teacher-training" class="click-fx uppercase flex items-center gap-[5px] bg-brand-cream border border-brand-brown/20 hover:bg-brand-brown text-text-main hover:text-text-light text-[10px] sm:text-[12px] md:text-[13px] lg:text-[14px] font-semibold px-[24px] py-[12px] rounded-[8px] shadow-sm transition-all duration-200 group">
                <span>Teacher Training</span>
                <span class="icon-[solar--alt-arrow-right-outline] w-5 h-5 transition-transform duration-200"></span>
            </a>
            <a href="#advocacy-community" class="click-fx uppercase flex items-center gap-[5px] bg-brand-cream border border-brand-brown/20 hover:bg-brand-brown text-text-main hover:text-text-light text-[10px] sm:text-[12px] md:text-[13px] lg:text-[14px] font-semibold px-[24px] py-[12px] rounded-[8px] shadow-sm transition-all duration-200 group">
                <span>Advocacy and Community Building</span>
                <span class="icon-[solar--alt-arrow-right-outline] w-5 h-5 transition-transform duration-200"></span>
            </a>
        </div>
    </div>
</section>

<!-- section 3: Education Programs -->
<section id="education-programs" class="bg-brand-cream max-w-7xl mx-auto py-[64px] md:py-[50px] font-sans px-6">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16 items-center">
        
        <div class="anim-slide-left anim-delay-2 lg:col-span-7 flex flex-col items-start">
            <h2 class="text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-heading font-black text-brand-brown uppercase mb-3 leading-tight">
                <?php echo esc_html(get_field('section_3_title') ?: 'Education Programs'); ?>
            </h2>
            
            <span class="text-[16px] sm:text-[18px] md:text-[20px] font-sans font-bold text-brand-blue mb-1">
                <?php echo esc_html(get_field('section_3_subtitle') ?: 'Empowering Bright Minds to Embrace Life\'s Opportunities'); ?>
            </span>
            
            <span class="text-[16px] sm:text-[18px] md:text-[20px] font-heading font-bold text-brand-brown mb-4 uppercase">
                <?php echo esc_html(get_field('section_3_title2') ?: 'Specialized Education'); ?>
            </span>
            
            <p class="text-text-muted text-[14px] sm:text-[15px] md:text-[16px] font-sans leading-relaxed mb-8">
                <?php echo esc_html(get_field('section_3_description') ?: 'At The Rabbit School, we believe that education should adapt to the child—not the other way around. That\'s why we\'ve developed a flexible education model that supports children and youth with intellectual disabilities from early childhood through adolescence.'); ?>
            </p>

            <div class="mb-6 w-full">
                <h3 class="text-[20px] sm:text-[22px] font-heading font-bold text-brand-brown mb-3 uppercase">
                    <?php echo esc_html(get_field('integrated_title') ?: 'Integrated Classrooms'); ?>
                </h3>
                <ul class="list-disc list-outside pl-5 space-y-2 text-text-muted text-[14px] sm:text-[15px] md:text-[16px] font-sans marker:text-brand-brown">
                    <?php 
                    $integrated_items_raw = get_field('integrated_items');
                    if (!empty($integrated_items_raw)) :
                        $items = explode("\n", str_replace("\r", "", $integrated_items_raw));

                        foreach ($items as $item) :
                            $trimmed_item = trim($item);
                            if (!empty($trimmed_item)) : ?>
                                <li><?php echo esc_html($trimmed_item); ?></li>
                            <?php endif;
                        endforeach;
                    else :
                        ?>
                        <li>Follow an adapted curriculum designed to their level</li>
                        <li>Access to support services such as speech and occupational therapy</li>
                        <li>Receive an Individual Education Plan (IEP) updated every 3 months</li>
                    <?php endif; ?>
                </ul>
            </div>

            <div class="w-full">
                <h3 class="text-[20px] sm:text-[22px] font-heading font-bold text-brand-brown mb-3 uppercase">
                    <?php echo esc_html(get_field('inclusive_title') ?: 'Inclusive Classrooms'); ?>                                                                                                                                                                                                                                                                                                                                                                            
                </h3>
                <ul class="list-disc list-outside pl-5 space-y-2 text-text-muted text-[14px] sm:text-[15px] md:text-[16px] font-sans marker:text-brand-brown">
                    <?php 
                    $inclusive_items_raw = get_field('inclusive_items');
                    
                    if (!empty($inclusive_items_raw)) :
                        $items = explode("\n", str_replace("\r", "", $inclusive_items_raw));
                        
                        foreach ($items as $item) :
                            $trimmed_item = trim($item);
                            if (!empty($trimmed_item)) : ?>
                                <li><?php echo esc_html($trimmed_item); ?></li>
                            <?php endif;
                        endforeach;
                    else : 
                        ?>
                        <li>Follow an adapted curriculum designed to their level</li>
                        <li>Access to support services such as speech and occupational therapy</li>
                        <li>Receive an Individual Education Plan (IEP) updated every 3 months</li>
                        <li>Each child with a disability has a personalized IEP</li>
                        <li>Follows the national curriculum and schedule with adapted teaching methods</li>
                        <li>Focus on peer interaction, mutual respect, and building inclusive values</li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
        
        <div class="anim-slide-right anim-delay-3 lg:col-span-5 w-full">
            <div class="relative max-w-[500px] lg:max-w-none mx-auto">
                <div class="absolute -top-4 -right-4 w-full h-full border-2 border-brand-yellow rounded-[24px] -z-10 hidden md:block"></div>
                
                <div class="w-full aspect-[4/3] rounded-[24px] overflow-hidden shadow-2xl transition-transform duration-500 hover:scale-[1.02]">
                    <img src="<?php echo esc_url(get_field('section_3_image') ?: get_theme_file_uri('assets/images/error.png')); ?>" 
                         alt="<?php echo esc_attr(get_field('section_3_title') ?: 'Education Programs'); ?>" 
                         class="h-full w-full object-cover">
                </div>
            </div>
        </div>

    </div>
</section>

<!-- section 4: Vocational Training -->
<section id="vocational-training" class="bg-brand-cream max-w-7xl mx-auto py-[64px] md:py-[50px] font-sans px-6">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16 items-center">
        
        <div class="anim-slide-left anim-delay-1 lg:col-span-5 w-full order-2 lg:order-1">
            <div class="relative max-w-[500px] lg:max-w-none mx-auto rounded-[24px] overflow-hidden shadow-2xl">
                <img src="<?php echo esc_url(get_field('vocational_image') ?: get_theme_file_uri('assets/images/error.png')); ?>" 
                     alt="<?php echo esc_attr(get_field('vocational_title') ?: 'Vocational Training & Job Placement'); ?>" 
                     class="w-full aspect-[4/3] md:aspect-square lg:aspect-[4/3] object-cover block">
                
                <div class="absolute bottom-4 left-4 right-4 bg-brand-cream p-4 rounded-xl shadow-md border border-gray-100">
                    <span class="block text-[14px] font-sans font-bold text-text-main uppercase tracking-wider mb-1">
                        <?php echo esc_html(get_field('location_label') ?: 'Our Location'); ?>
                    </span>
                    <span class="block text-[14px] font-sans text-text-muted">
                        <?php echo esc_html(get_field('location_details') ?: 'Toul Kork Primary School, Phnom Penh'); ?>
                    </span>
                </div>
            </div>
        </div>

        <div class="anim-slide-right anim-delay-2 lg:col-span-7 flex flex-col items-start order-1 lg:order-2">
            <h2 class="text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-heading font-black text-brand-brown uppercase mb-4 leading-tight">
                <?php echo esc_html(get_field('vocational_title') ?: 'Vocational Training & Job Placement'); ?>
            </h2>
            
            <span class="text-[16px] sm:text-[18px] md:text-[20px] font-sans font-bold text-brand-orange mb-3">
                <?php echo esc_html(get_field('vocational_subtitle') ?: 'Building Life-Long Skills'); ?>
            </span>
            
            <p class="text-text-muted text-[14px] sm:text-[15px] md:text-[16px] font-sans leading-relaxed mb-6">
                <?php echo esc_html(get_field('vocational_description') ?: 'Our vocational training program is the natural next step after our special education classes. We teach life-long skills that help youth over the age of 16 gain independence and prepare for future employment, opening doors to a world of opportunities.'); ?>
            </p>

            <h3 class="text-[20px] sm:text-[22px] font-heading font-bold text-brand-brown mb-2 uppercase">
                <?php echo esc_html(get_field('learning_title') ?: 'What Students Learn'); ?>
            </h3>
            
            <p class="text-brand-orange font-sans font-medium text-[14px] sm:text-[15px] md:text-[16px] mb-4">
                <?php echo esc_html(get_field('learning_subtitle') ?: 'Through hands-on activities and guided instruction, students develop essential skills such as:'); ?>
            </p>

            <ul class="list-disc list-outside pl-5 space-y-2 text-text-muted text-[14px] sm:text-[15px] md:text-[16px] font-sans marker:text-brand-brown">
                <?php 
                $vocational_skills_raw = get_field('vocational_skills');
                
                if (!empty($vocational_skills_raw)) :
                    $items = explode("\n", str_replace("\r", "", $vocational_skills_raw));
                    
                    foreach ($items as $item) :
                        $trimmed_item = trim($item);
                        if (!empty($trimmed_item)) : ?>
                            <li><?php echo esc_html($trimmed_item); ?></li>
                        <?php endif;
                    endforeach;
                else : 
                    ?>
                    <li>Cleaning and basic hygiene routines</li>
                    <li>Preparing tables and washing dishes</li>
                    <li>Gardening and outdoor maintenance</li>
                    <li>Following instructions and working in teams</li>
                    <li>Developing a positive job attitude and social behavior</li>
                    <li>Expressing themselves through music, sports, and games</li>
                <?php endif; ?>
            </ul>
        </div>

    </div>
</section>

<!-- section 5: Teacher Training -->
<section id="teacher-training" class="bg-brand-cream max-w-7xl mx-auto py-[64px] md:py-[80px] font-sans px-6">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16 items-center">
        
        <div class="anim-slide-left anim-delay-3 lg:col-span-7 flex flex-col items-start">
            <h2 class="text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-heading font-black text-brand-brown uppercase mb-3 leading-tight">
                <?php echo esc_html(get_field('teacher_training_title') ?: 'Teacher Training'); ?>
            </h2>
            
            <span class="text-[16px] sm:text-[18px] md:text-[20px] font-sans font-bold text-brand-blue mb-4 block">
                <?php echo esc_html(get_field('teacher_training_subtitle') ?: 'Building Teacher Capacity for Inclusive Education'); ?>
            </span>
            
            <p class="text-text-muted text-[14px] sm:text-[15px] md:text-[16px] font-sans leading-relaxed mb-6">
                <?php echo esc_html(get_field('teacher_training_description') ?: 'Since 2010, Rabbit School has been training teachers to provide inclusive, individualized education for children with intellectual disabilities and autism. With initial support from the University of London, our training focused on quality teaching, child-friendly methods, and practical tools for working with children with special needs. Our goal is to expand these specialized services across Cambodia—ensuring more educators are equipped to help all children thrive.'); ?>
            </p>

            <div class="w-full">
                <h3 class="text-[20px] sm:text-[22px] font-heading font-bold text-brand-brown mb-3 uppercase">
                    <?php echo esc_html(get_field('what_we_do_title') ?: 'What we Do:'); ?>
                </h3>
                <ul class="list-disc list-outside pl-5 space-y-2 text-text-muted text-[14px] sm:text-[15px] md:text-[16px] font-sans marker:text-brand-brown">
                    <?php 
                    $teacher_training_tasks_raw = get_field('teacher_training_tasks');
                    
                    if (!empty($teacher_training_tasks_raw)) :
                        $items = explode("\n", str_replace("\r", "", $teacher_training_tasks_raw));
                        
                        foreach ($items as $item) :
                            $trimmed_item = trim($item);
                            if (!empty($trimmed_item)) : ?>
                                <li><?php echo esc_html($trimmed_item); ?></li>
                            <?php endif;
                        endforeach;
                    else : 
                        ?>
                        <li>Train teachers to assess students and develop Individual Education Plans (IEPs) tailored to each child's abilities and needs.</li>
                        <li>Organize monthly teacher meetings to reflect on challenges, share solutions, and improve communication with students.</li>
                        <li>Offer ongoing training in Phnom Penh and provinces, not only for teachers, but also for school directors, education authorities, commune committees, and civil society.</li>
                        <li>Collaborate with NGO partners and local experts to provide continuous learning opportunities for our staff.</li>
                        <li>Develop and distribute special education curricula and manuals for use by teachers and parents.</li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
        
        <div class="anim-slide-right anim-delay-4 lg:col-span-5 w-full">
            <div class="relative max-w-[500px] lg:max-w-none mx-auto">
                <div class="absolute -top-4 -right-4 w-full h-full border-2 border-brand-yellow rounded-[24px] -z-10 hidden md:block"></div>
                
                <div class="w-full aspect-[4/3] rounded-[24px] overflow-hidden shadow-2xl transition-transform duration-500 hover:scale-[1.02]">
                    <img src="<?php echo esc_url(get_field('teacher_training_image') ?: get_theme_file_uri('assets/images/error.png')); ?>" 
                         alt="<?php echo esc_attr(get_field('teacher_training_title') ?: 'Teacher Training'); ?>" 
                         class="h-full w-full object-cover">
                </div>
            </div>
        </div>

    </div>
</section>

<!-- section 6: Advocacy and Community Building -->
<section id="advocacy-community" class="bg-brand-cream max-w-7xl mx-auto py-[64px] md:py-[50px] font-sans px-6">
    <div class="anim-fade-up anim-delay-5 max-w-5xl mx-auto text-center mb-12">
        <h2 class="text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-heading font-black text-brand-brown uppercase mb-4 leading-tight">
            <?php echo esc_html(get_field('advocacy_title') ?: 'Advocacy and Community Building'); ?>
        </h2>
        
        <p class="text-text-muted text-[14px] sm:text-[15px] md:text-[16px] leading-relaxed max-w-4xl mx-auto">
            <?php echo esc_html(get_field('advocacy_description') ?: 'We work closely with local authorities and parents to integrate Rabbit School\'s programs into the public system. At the same time, we work to break down the stigma around intellectual disabilities - promoting understanding, inclusion, and lasting change within communities. This way we are not just teaching children—we are building a more inclusive society, one where everyone is valued for who they are and the contributions they can make.'); ?>
        </p>
    </div>

    <div class="anim-fade-up anim-delay-5 grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8 max-w-7xl mx-auto">
    
        <div class="click-fx bg-brand-cream border border-brand-brown/30 rounded-[24px] overflow-hidden flex flex-col shadow-sm hover:shadow-md transition-shadow duration-300">
            <div class="w-full aspect-[4/3] overflow-hidden">
                <img src="<?php echo esc_url(get_field('card_1_image') ?: get_theme_file_uri('assets/images/error.png')); ?>" 
                     alt="<?php echo esc_attr(get_field('card_1_label') ?: 'Event run with Sai'); ?>" 
                     class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
            </div>
            <div class="p-6 flex justify-center items-center flex-grow">
                <h4 class="text-[16px] sm:text-[18px] font-sans font-bold text-brand-brown text-center leading-tight">
                    <?php echo esc_html(get_field('card_1_label') ?: 'Event run with Sai'); ?>
                </h4>
            </div>
        </div>

        <div class="click-fx bg-brand-cream border border-brand-brown/30 rounded-[24px] overflow-hidden flex flex-col shadow-sm hover:shadow-md transition-shadow duration-300">
            <div class="w-full aspect-[4/3] overflow-hidden">
                <img src="<?php echo esc_url(get_field('card_2_image') ?: get_theme_file_uri('assets/images/error.png')); ?>" 
                     alt="<?php echo esc_attr(get_field('card_2_label') ?: 'Parent\'s Training'); ?>" 
                     class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
            </div>
            <div class="p-6 flex justify-center items-center flex-grow">
                <h4 class="text-[16px] sm:text-[18px] font-sans font-bold text-brand-brown text-center leading-tight">
                    <?php echo esc_html(get_field('card_2_label') ?: 'Parent\'s Training'); ?>
                </h4>
            </div>
        </div>

        <div class="click-fx bg-brand-cream border border-brand-brown/30 rounded-[24px] overflow-hidden flex flex-col shadow-sm hover:shadow-md transition-shadow duration-300">
            <div class="w-full aspect-[4/3] overflow-hidden">
                <img src="<?php echo esc_url(get_field('card_3_image') ?: get_theme_file_uri('assets/images/error.png')); ?>" 
                     alt="<?php echo esc_attr(get_field('card_3_label') ?: 'Participation in Employment National Forum'); ?>" 
                     class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
            </div>
            <div class="p-6 flex justify-center items-center flex-grow">
                <h4 class="text-[16px] sm:text-[18px] font-sans font-bold text-brand-brown text-center leading-tight">
                    <?php echo esc_html(get_field('card_3_label') ?: 'Participation in Employment National Forum'); ?>
                </h4>
            </div>
        </div>

    </div>
</section>

<script>
document.addEventListener("DOMContentLoaded", function () {
  // Trigger page visibility load smoothly
  document.body.classList.add("loaded");

  // Local ripple + press effect on elements with .click-fx
  document.querySelectorAll('.click-fx').forEach(function (el) {
    el.addEventListener('click', function (e) {
      var rect = el.getBoundingClientRect();
      var ripple = document.createElement('span');
      var size = Math.max(rect.width, rect.height);
      var x = e.clientX - rect.left - size / 2;
      var y = e.clientY - rect.top - size / 2;

      ripple.className = 'ripple';
      ripple.style.width = ripple.style.height = size + 'px';
      ripple.style.left = x + 'px';
      ripple.style.top = y + 'px';

      el.appendChild(ripple);
      ripple.addEventListener('animationend', function () {
        ripple.remove();
      });
    });
  });

  // Global full-page click ripple effect
  document.addEventListener('click', function (e) {
    var size = 24;
    var ripple = document.createElement('span');
    ripple.className = 'page-ripple';
    ripple.style.width = size + 'px';
    ripple.style.height = size + 'px';
    ripple.style.left = e.clientX + 'px';
    ripple.style.top = e.clientY + 'px';

    document.body.appendChild(ripple);
    ripple.addEventListener('animationend', function () {
      ripple.remove();
    });
  });
});
</script>

<?php get_footer(); ?>