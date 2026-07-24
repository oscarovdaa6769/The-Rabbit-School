<?php
/*
Template Name:  Donate Page
Template Post Type: post, page, product
*/

get_header();
?>

<section id="donate" class="w-full h-[60vh] min-h-[600px] max-h-[600px] relative bg-gray-300 overflow-hidden">
  <img src="https://www.rabbitschoolcambodia.net/_next/image?url=%2Fimages%2FNew%20Pictures%20P14.jpg&w=1920&q=75" alt="Smiling boy at school" class="w-full h-full object-cover object-center">
</section>

<main class="max-w-3xl mx-auto px-6 py-2 text-center md:text-left">
  
  <div class="max-w-3xl mx-auto px-4 py-12 font-sans text-gray-800 selection:bg-amber-100">
    
    <div class="text-center max-w-2xl mx-auto mb-10">
      <h2 class="text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px]  text-[#5c3e35] font-heading font-black  uppercase mb-6 4">
      <?php echo esc_html(get_field('heading_1')?: 'error'); ?>      </h2>
      <p class="text-sm md:text-base text-gray-600 leading-relaxed">
       <?php echo esc_html(get_field('paragraph_1')?: 'error'); ?>
      </p>
    </div>

    <div class="space-y-10">
      <div class="space-y-3">
        <h3 class="text-xl font-bold text-[#5c3e35]"> <?php echo esc_html(get_field('heading_2')?: 'error'); ?></h3>
        <p class="text-sm md:text-base text-gray-700">
         <?php echo esc_html(get_field('paragraph_2')?: 'error'); ?>
        </p>
        <ul class="space-y-2 pl-5 list-disc text-sm md:text-base text-gray-600 marker:text-gray-700">
        <?php 
        $Give_In_Kind = get_field('give_in_kind');
                    
          if (!empty($Give_In_Kind)) :
            $items = explode("\n", str_replace("\r", "", $Give_In_Kind));
                        
              foreach ($items as $item) :
                $trimmed_item = trim($item);
                  if (!empty($trimmed_item)) : ?>
                    <li><?php echo esc_html($trimmed_item); ?></li>
                      <?php endif;
                    endforeach;
                  else : 
                  ?>

          <li>School materials such as books, pencils, DVDs (player) and educational games</li>
          <li>Children's books in Khmer</li>
          <li>Physiotherapy special devices and toys</li>
          <?php endif; ?>
        </ul>
      </div>

      <div class="space-y-4">
        <div class="space-y-1">
          <h3 class="text-xl font-bold text-[#5c3e35]"> <?php echo esc_html(get_field('heading_3')?: 'error'); ?></h3>
          <p class="text-sm md:text-base text-gray-700">
             <?php echo esc_html(get_field('paragraph_3')?: 'error'); ?>
          </p>
        </div>
        
        <ul class="space-y-3 pl-5 list-disc text-sm md:text-base text-gray-600 marker:text-gray-700">
          
          <?php 
        $Financial = get_field('financial');
                    
          if (!empty($Financial)) :
            $items = explode("\n", str_replace("\r", "", $Financial));
                        
              foreach ($items as $item) :
                $trimmed_item = trim($item);
                  if (!empty($trimmed_item)) : ?>
                    <li><?php echo esc_html($trimmed_item); ?></li>
                      <?php endif;
                    endforeach;
                  else : 
                  ?>
          <li>
            <strong class="font-bold text-[#FF8D28]">$60</strong> opens the classroom door for one month.
          </li>
          <li>
            <strong class="font-bold text-[#FF8D28]">$800</strong> keeps that door open for a full year—giving one child safety, routine, and a chance to grow.
          </li>
          <?php endif; ?>
        </ul>
      </div>

      <div class="pt-4 border-t border-gray-100">
        <p class="text-sm md:text-base font-semibold text-gray-900 leading-normal">
           <?php echo esc_html(get_field('paragraph_4')?: 'error'); ?>
        </p>
      </div>
    </div>
  </div>

  <div class="bg-[#fcd05d] rounded-2xl p-6 md:p-8 flex flex-col md:flex-row justify-between items-stretch text-left shadow-sm max-w-2xl mx-auto mb-12">
    <div class="space-y-3 flex-1 pr-0 md:pr-6 border-b md:border-b-0 md:border-r border-[#e3b844] pb-6 md:pb-0">
      <h3 class="text-xl font-black text-[#5c3e35] uppercase tracking-wide"><?php echo esc_html(get_field('heading_5')?: 'error'); ?></h3>
      <p class="text-sm text-gray-900"><strong class="font-bold"></strong> <?php echo esc_html(get_field('paragraph_6')?: 'error'); ?></p>
      <p class="text-sm text-gray-900">
        <strong class="font-bold"></strong> <?php echo esc_html(get_field('paragraph_7')?: 'error'); ?>
      </p>
      <div class="pt-2 text-sm text-gray-900">
        <div>
          <span class="font-bold uppercase text-xs tracking-wider block text-[#5c3e35]/80"><?php echo esc_html(get_field('heading_8')?: 'error'); ?></span>
          <span class="font-semibold text-base text-[#5c3e35]"><?php echo esc_html(get_field('heading_9')?: 'error'); ?></span>
        </div>
        <div class="mt-2">
          <span class="font-bold uppercase text-xs tracking-wider block text-[#5c3e35]/80"><?php echo esc_html(get_field('heading_10')?: 'error'); ?></span>
          <span class="font-semibold text-base text-[#5c3e35]"><?php echo esc_html(get_field('heading_11')?: 'error'); ?></span>
        </div>
      </div>
    </div>
    
    <div class="flex flex-col sm:flex-row md:flex-col items-center justify-center text-center md:pl-8 pt-6 md:pt-0 shrink-0 md:w-56">
      <p class="text-xs font-bold text-[#5c3e35] max-w-[180px] mb-3 sm:mb-0 md:mb-3 sm:mr-4 md:mr-0 leading-tight">
        <?php echo esc_html(get_field('paragraph_11')?: 'error'); ?>
      </p>
      <div class="w-28 h-28 bg-white p-0 rounded border border-gray-300 flex items-center justify-center shadow-sm">
        <img 
          src="https://www.rabbitschoolcambodia.net/_next/image?url=%2Fimages%2FNew%20Donation%20Page.jpg&w=256&q=75" 
          alt="Rabbit School QR Code" 
          class="w-full h-full object-contain"/>
      </div>
    </div>
  </div>

</main>

<?php 
get_footer(); 
?>
