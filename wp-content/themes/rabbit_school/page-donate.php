<?php
/*
Template Name: videos
Template Post Type: post, page, product
*/
get_header();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Donate - The Rabbit School</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-gray-800 font-sans antialiased">


  <section class="w-full h-[60vh] min-h-[600px] max-h-[600px] relative bg-gray-300 overflow-hidden">
    <img src="https://www.rabbitschoolcambodia.net/_next/image?url=%2Fimages%2FNew%20Pictures%20P14.jpg&w=1920&q=75" alt="Smiling boy at school" class="w-full h-full object-cover object-center">
  </section>

  <main class="max-w-3xl mx-auto px-6 py-2 text-center md:text-left ">
    
    <div class="max-w-3xl mx-auto px-4 py-12 font-sans text-gray-800 selection:bg-amber-100">
  
  <div class="text-center max-w-2xl mx-auto mb-10">
    <h2 class="text-3xl font-extrabold text-[#5c3e35] uppercase tracking-wide mb-4">
       <?php echo esc_html(get_field('heading_1')?: 'error'); ?>
    </h2>
    <p class="text-sm md:text-base text-gray-600 leading-relaxed ">
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
        $Give_In_Kind = get_field('Give_In_Kind');
                    
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
        <h3 class="text-xl font-bold text-[#5c3e35]">Financial</h3>
        <p class="text-sm md:text-base text-gray-700">
          A single gift can change a child’s entire future.
        </p>
      </div>
      
      <ul class="space-y-3 pl-5 list-disc text-sm md:text-base text-gray-600  marker:text-gray-700">
        <?php 
        $Financial = get_field('Financial');
                    
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
        <?php echo esc_html(get_field('paragraph_5')?: 'error'); ?>
      </p>
    </div>

  </div>
</div>
   <div class="bg-[#fcd05d] rounded-2xl p-6 md:p-8 flex flex-col md:flex-row justify-between items-stretch text-left shadow-sm max-w-2xl mx-auto">
  <div class="space-y-3 flex-1 pr-0 md:pr-6 border-b md:border-b-0 md:border-r border-[#e3b844] pb-6 md:pb-0">
    <h3 class="text-xl font-black text-[#5c3e35] uppercase tracking-wide">ACLEDA BANK</h3>
    <p class="text-sm text-gray-900"><strong class="font-bold">SWIFT Code:</strong> ACLBKHPP</p>
    <p class="text-sm text-gray-900">
      <strong class="font-bold">Bank address:</strong> Building N° 61, Preah Monivong Blvd., Sangkat Srah Chak, Khan Daun Penh, Phnom Penh
    </p>
    <div class="pt-2 text-sm text-gray-900">
      <div>
        <span class="font-bold uppercase text-xs tracking-wider block text-[#5c3e35]/80">Account Name</span>
        <span class="font-semibold text-base text-[#5c3e35]">RABBIT SCHOOL</span>
      </div>
      <div class="mt-2">
        <span class="font-bold uppercase text-xs tracking-wider block text-[#5c3e35]/80">Account Number</span>
        <span class="font-semibold text-base text-[#5c3e35]">2900-01-005152-4-2</span>
      </div>
    </div>
  </div>
  
  <div class="flex flex-col sm:flex-row md:flex-col items-center justify-center text-center md:pl-8 pt-6 md:pt-0 shrink-0 md:w-56 ">
<p class="text-xs font-bold text-[#5c3e35] max-w-[180px] mb-3 sm:mb-0 md:mb-3 sm:mr-4 md:mr-0 leading-tight">
        For Cambodian Nationals only. Scan here to donate
    </p>
    <div class="w-28 h-28 bg-white p-0 rounded border border-gray-300 flex items-center justify-center shadow-sm">
      <img 
        src="https://www.rabbitschoolcambodia.net/_next/image?url=%2Fimages%2FNew%20Donation%20Page.jpg&w=256&q=75" 
        alt="Rabbit School QR Code" 
        class="w-full h-full object-contain"
      />
    </div>
  </div>
</div>




    <!-- <div class="max-w-2xl mx-auto my-8 bg-[#FFD466] text-[#4A3728] font-sans rounded-sm shadow-md overflow-hidden p-6 sm:p-8 flex flex-col md:flex-row items-center justify-between gap-6 border border-amber-300">
  <div class="space-y-4 flex-1">
    <h2 class="text-xl font-bold tracking-wide">ACLEDA BANK</h2>
    
    <div class="space-y-2 text-sm sm:text-base">
      <p><span class="font-bold">SWIFT Code:</span> ACLBKHPP</p>
      
      <p class="leading-relaxed">
        <span class="font-bold">Bank address:</span> Building N° 61, Preah Monivong Blvd., Sangkat Srah Chak, Khan Doun Penh, Phnom Penh
      </p>
    </div>

    <div class="space-y-1 text-sm sm:text-base pt-2 border-t border-[#4A3728]/20">
      <p><span class="font-bold">ACCOUNT NAME:</span> RABBIT SCHOOL</p>
      <p><span class="font-bold">ACCOUNT NUMBER:</span> 2900-01-005152-4-2</p>
    </div>
  </div>

  <div class="hidden md:block w-[1px] h-32 bg-[#4A3728]/30 self-center"></div>

  <div class="flex flex-col items-center text-center max-w-[200px] gap-3">
    <p class="text-xs sm:text-sm font-medium leading-snug">
      For Cambodian Nationals only. Scan here to donate
    </p>
    
    <div class="bg-white p-2 rounded-xl border border-gray-300/50 shadow-sm">
      <img src="path-to-your-qr-code.png" alt="QR Code" class="w-24 h-24 object-contain" />
    </div>
  </div>
</div> -->

  </main>


</body>
</html>
<?php get_footer(); ?>