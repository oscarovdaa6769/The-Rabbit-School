<?php
/**
 * Template Name: Product
 * Description: Product showcase page featuring hero section, feature cards, filterable shop grid, and direct contact order modal.
 */

get_header();

// SECTION 1: HERO
$img_1_url = get_field('image_1')   ?: get_theme_file_uri('assets/images/error.png');
$title_1   = get_field('heading_1') ?: 'Vocational Workshop Products';
$desc_1    = get_field('description_1') ?: 'Explore handmade crafts and goods produced with care and pride by our students.';
$btn_1     = get_field('buntton_1')  ?: 'Explore Shop';

// SECTION 2: FEATURES
$card1_title       = get_field('card_title')        ?: 'Fast Delivery';
$card1_description = get_field('card1_description')  ?: 'Local delivery options available.';

$card3_title       = get_field('card3_title')        ?: 'Empower Students';
$card3_description = get_field('card3_description')  ?: '100% proceeds support programs.';

$card4_title       = get_field('card4_title')        ?: 'Easy Ordering';
$card4_description = get_field('card4_description')  ?: 'Direct contact via social channels.';

// SECTION 3: HEADINGS
$title_3   = get_field('heading_3') ?: 'Our Catalog';
$heading_4 = get_field('heading_4') ?: 'Featured Creations';

$is_km = function_exists('pll_current_language') && pll_current_language() === 'km';
?>

<div id="product-page-wrapper" class="bg-white min-h-screen">

  <!-- ============ HERO BANNER ============ -->
  <section class="relative h-[500px] md:h-[700px] bg-brand-brown flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 z-0 opacity-30">
      <img src="<?php echo esc_url($img_1_url); ?>" alt="<?php echo esc_attr($title_1); ?>" class="w-full h-full object-cover">
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-[20px] 2xl:px-0 text-center">
      <h1 class="font-heading text-white text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-black tracking-tight leading-tight mb-4 uppercase">
        <?php echo esc_html($title_1); ?>
      </h1>
      <p class="text-brand-cream/90 max-w-2xl mx-auto text-[14px] sm:text-[15px] md:text-[16px] lg:text-[18px] leading-relaxed mb-8">
        <?php echo esc_html($desc_1); ?>
      </p>
      <div class="flex items-center justify-center">
        <a href="#shop" class="bg-brand-yellow text-brand-brown font-bold uppercase text-sm tracking-wider py-[12px] px-[24px] rounded-[8px] hover:bg-white transition-all shadow-md hover:shadow-xl flex items-center gap-2">
          <span><?php echo esc_html($btn_1); ?></span>
          <span class="icon-[solar--arrow-right-linear] w-5 h-5"></span>
        </a>
      </div>
    </div>
  </section>

  <!-- ============ FEATURES STRIP ============ -->
  <section class="max-w-7xl mx-auto py-[64px] md:py-[50px] px-[20px] 2xl:px-0">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 items-center justify-center">

      <!-- Feature 1 -->
      <div class="p-6 rounded-[20px] bg-brand-cream border-l-6 border-brand-yellow shadow-md hover:shadow-xl transition-all">
        <div class="w-12 h-12 rounded-[16px] bg-brand-yellow/30 flex items-center justify-center mb-4">
          <img src="<?php echo esc_url(get_theme_file_uri('assets/icons/express-delivery(2).png')); ?>" alt="Delivery Icon" loading="lazy" class="w-6 h-6 object-contain" />
        </div>
        <h3 class="font-heading text-[16px] sm:text-[18px] md:text-[20px] font-bold uppercase mb-2"><?php echo esc_html($card1_title); ?></h3>
        <p class="text-[14px] sm:text-[15px] md:text-[16px] text-text-muted leading-relaxed"><?php echo esc_html($card1_description); ?></p>
      </div>

      <!-- Feature 3 -->
      <div class="p-6 rounded-[20px] bg-brand-cream border-l-6 border-brand-teal shadow-md hover:shadow-xl transition-all">
        <div class="w-12 h-12 rounded-[16px] bg-brand-teal/30 flex items-center justify-center mb-4">
          <img src="<?php echo esc_url(get_theme_file_uri('assets/icons/graduation-hat.png')); ?>" alt="Education Icon" loading="lazy" class="w-6 h-6 object-contain" />
        </div>
        <h3 class="font-heading text-[16px] sm:text-[18px] md:text-[20px] font-bold uppercase mb-2"><?php echo esc_html($card3_title); ?></h3>
        <p class="text-[14px] sm:text-[15px] md:text-[16px] text-text-muted leading-relaxed"><?php echo esc_html($card3_description); ?></p>
      </div>

      <!-- Feature 4 -->
      <div class="p-6 rounded-[20px] bg-brand-cream border-l-6 border-brand-pink shadow-md hover:shadow-xl transition-all">
        <div class="w-12 h-12 rounded-[16px] bg-brand-pink/30 flex items-center justify-center mb-4">
          <img src="<?php echo esc_url(get_theme_file_uri('assets/icons/chat.png')); ?>" alt="Contact Icon" loading="lazy" class="w-6 h-6 object-contain" />
        </div>
        <h3 class="font-heading text-[16px] sm:text-[18px] md:text-[20px] font-bold uppercase mb-2"><?php echo esc_html($card4_title); ?></h3>
        <p class="text-[14px] sm:text-[15px] md:text-[16px] text-text-muted leading-relaxed"><?php echo esc_html($card4_description); ?></p>
      </div>

    </div>
  </section>

  <!-- ============ PRODUCTS SECTION ============ -->
  <section id="shop" class="bg-brand-cream py-[64px] md:py-[50px]">
    <div class="max-w-7xl mx-auto px-[20px] 2xl:px-0">
      
      <div class="mb-10">
        <p class="text-[16px] sm:text-[18px] md:text-[20px] uppercase font-bold text-brand-orange mb-1"><?php echo esc_html($title_3); ?></p>
        <h2 class="font-heading text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-black uppercase tracking-tight"><?php echo esc_html($heading_4); ?></h2>
      </div>

      <div id="productGrid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <?php
        $products_query = new WP_Query([
            'post_type'      => 'product',
            'posts_per_page' => -1,
            'post_status'    => 'publish',
        ]);

        if ($products_query->have_posts()) :
            while ($products_query->have_posts()) : $products_query->the_post();

                $price = get_field('product_price') ?: '$0.00';

                $terms = get_the_terms(get_the_ID(), 'product_category');
                $category_slug = ($terms && !is_wp_error($terms)) ? $terms[0]->slug : '';

                $image_field = get_field('image');
                if (is_array($image_field) && isset($image_field['url'])) {
                    $image = $image_field['url'];
                } elseif (is_string($image_field) && !empty($image_field)) {
                    $image = $image_field;
                } else {
                    $image = get_theme_file_uri('assets/images/error.png');
                }

                $description = get_field('description_box') ?: '';
                $btn_detail  = get_field('detail') ?: ($is_km ? 'ទិញ / ព័ត៌មាន' : 'Order');
        ?>

          <article class="product-card bg-white rounded-[20px] overflow-hidden border-l-4 border-brand-yellow shadow-md hover:shadow-xl flex flex-col h-full" data-category="<?php echo esc_attr($category_slug); ?>">
            
            <div class="aspect-square overflow-hidden bg-brand-cream/50 relative">
              <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="w-full h-full object-cover">
            </div>

            <div class="p-5 flex flex-col flex-1 justify-between">
              <div>
                <h3 class="font-heading text-[16px] sm:text-[18px] md:text-[20px] font-bold leading-snug mb-2 line-clamp-1 uppercase"><?php the_title(); ?></h3>

                <?php if ($description) : ?>
                  <p class="product-desc text-[14px] sm:text-[15px] md:text-[16px] text-text-muted mb-2 line-clamp-2 leading-relaxed"><?php echo esc_html($description); ?></p>
                <?php endif; ?>

                <?php if (mb_strlen($description) > 60) : ?>
                  <button type="button" onclick="toggleDesc(this)" data-km="<?php echo $is_km ? 'true' : 'false'; ?>" class="see-more-btn text-xs font-bold text-brand-blue text-left mb-4 hover:underline cursor-pointer">
                    <?php echo $is_km ? 'មើលបន្ថែម' : 'See more'; ?>
                  </button>
                <?php else : ?>
                  <div class="mb-4"></div>
                <?php endif; ?>
              </div>

              <div class="flex items-center justify-between pt-4 border-t border-brand-brown/10 mt-auto">
                <span class="font-heading text-[16px] sm:text-[18px] md:text-[20px] font-black text-brand-brown"><?php echo esc_html($price); ?></span>
                <button type="button" onclick="openOrderModal('<?php echo esc_js(get_the_title()); ?>', '<?php echo esc_js($price); ?>')" class="bg-brand-yellow text-brand-brown text-sm font-bold uppercase py-[12px] px-[24px] rounded-[8px] hover:bg-brand-orange hover:text-white transition-all shadow-md cursor-pointer flex items-center gap-1.5">
                  <span><?php echo esc_html($btn_detail); ?></span>
                  <span class="icon-[solar--arrow-right-linear] w-4 h-4"></span>
                </button>
              </div>
            </div>

          </article>

        <?php
            endwhile;
            wp_reset_postdata();
        else :
        ?>
            <div class="col-span-full text-center py-12 text-text-muted font-bold">
                <p class="text-[16px] sm:text-[18px] md:text-[20px]"><?php echo $is_km ? 'មិនទាន់មានផលិតផលនៅឡើយទេ។' : 'No products found.'; ?></p>
            </div>
        <?php endif; ?>
      </div>

    </div>
  </section>

  <!-- ============ ORDER MODAL ============ -->
  <div id="orderModal" class="hidden fixed inset-0 z-50 items-center justify-center p-4">
    <div class="absolute inset-0 bg-brand-brown/70 backdrop-blur-sm" onclick="closeOrderModal()"></div>
    
    <div class="relative bg-white rounded-[28px] w-full max-w-md p-6 md:p-8 shadow-xl z-10 border border-brand-brown/10">
      <button type="button" onclick="closeOrderModal()" class="absolute top-5 right-5 w-8 h-8 flex items-center justify-center rounded-[8px] text-text-muted hover:bg-brand-cream hover:text-brand-brown transition text-lg font-bold leading-none cursor-pointer">✕</button>

      <p class="text-[14px] sm:text-[15px] md:text-[16px] uppercase font-bold text-brand-orange mb-1">
        <?php echo $is_km ? 'ចាប់អារម្មណ៍លើវត្ថុនេះ?' : 'Interested in this item?'; ?>
      </p>
      
      <h3 class="font-heading text-[32px] sm:text-[36px] font-black mb-1 uppercase" id="modalProductName">Product Name</h3>
      <p class="text-brand-brown font-bold text-[16px] sm:text-[18px] md:text-[20px] mb-6" id="modalProductPrice">$0.00</p>

      <p class="text-[14px] font-bold uppercase text-text-muted mb-3">
        <?php echo $is_km ? 'ទាក់ទងមកយើងខ្ញុំដើម្បីបញ្ជាទិញ' : 'Contact us to order'; ?>
      </p>
      
      <div class="grid grid-cols-1 gap-3">

        <!-- Gmail -->
        <button type="button" onclick="submitOrder('gmail')" class="group flex items-center gap-3 w-full bg-brand-cream hover:bg-brand-cream/80 rounded-[16px] px-4 py-3 border border-brand-brown/10 shadow-md transition-all duration-200 cursor-pointer">
          <span class="w-8 h-8 rounded-[8px] bg-[#EA4335]/10 flex items-center justify-center shrink-0">
            <svg class="w-4 h-4 text-[#EA4335]" viewBox="0 0 24 24" fill="currentColor"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
          </span>
          <span class="text-sm font-bold text-brand-brown"><?php echo $is_km ? 'អ៊ីមែល / ជីមែល' : 'Email / Gmail'; ?></span>
          <span class="icon-[solar--arrow-right-linear] w-5 h-5 ml-auto text-text-muted group-hover:text-brand-brown group-hover:translate-x-1 transition-all"></span>
        </button>

        <!-- Facebook -->
        <button type="button" onclick="submitOrder('facebook')" class="group flex items-center gap-3 w-full bg-brand-cream hover:bg-brand-cream/80 rounded-[16px] px-4 py-3 border border-brand-brown/10 shadow-md transition-all duration-200 cursor-pointer">
          <span class="w-8 h-8 rounded-[8px] bg-[#1877F2]/10 flex items-center justify-center shrink-0">
            <svg class="w-4 h-4 text-[#1877F2]" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
          </span>
          <span class="text-sm font-bold text-brand-brown"><?php echo $is_km ? 'ទំព័រហ្វេសប៊ុក' : 'Facebook Page'; ?></span>
          <span class="icon-[solar--arrow-right-linear] w-5 h-5 ml-auto text-text-muted group-hover:text-brand-brown group-hover:translate-x-1 transition-all"></span>
        </button>

        <!-- Instagram -->
        <button type="button" onclick="submitOrder('instagram')" class="group flex items-center gap-3 w-full bg-brand-cream hover:bg-brand-cream/80 rounded-[16px] px-4 py-3 border border-brand-brown/10 shadow-md transition-all duration-200 cursor-pointer">
          <span class="w-8 h-8 rounded-[8px] bg-[#E4405F]/10 flex items-center justify-center shrink-0">
            <svg class="w-4 h-4 text-[#E4405F]" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
          </span>
          <span class="text-sm font-bold text-brand-brown"><?php echo $is_km ? 'សារផ្ទាល់តាមអ៊ីនស្តាក្រាម' : 'Instagram Direct'; ?></span>
          <span class="icon-[solar--arrow-right-linear] w-5 h-5 ml-auto text-text-muted group-hover:text-brand-brown group-hover:translate-x-1 transition-all"></span>
        </button>

      </div>
    </div>
  </div>

</div>

<script>
  const GMAIL_ADDRESS  = "info@rabbitschoolcambodia.net";
  const FACEBOOK_LINK  = "https://www.facebook.com/share/199iFs28pU/";
  const INSTAGRAM_LINK = "https://www.instagram.com/rabbitschoolcbd";

  let currentProduct = { name: "", price: "" };

  function openOrderModal(name, price) {
    currentProduct = { name, price };
    document.getElementById('modalProductName').textContent = name;
    document.getElementById('modalProductPrice').textContent = price;
    const modal = document.getElementById('orderModal');
    modal.classList.remove('hidden');
    modal.classList.add('flex');
    document.body.style.overflow = 'hidden';
  }

  function closeOrderModal() {
    const modal = document.getElementById('orderModal');
    modal.classList.add('hidden');
    modal.classList.remove('flex');
    document.body.style.overflow = '';
  }

  function submitOrder(platform) {
    const message =
      `Hello! I'm interested in this item from the Rabbit School Shop:\n\n` +
      `Product: ${currentProduct.name}\n` +
      `Price: ${currentProduct.price}`;

    let url = "";

    if (platform === 'gmail') {
      const subject = `Order Inquiry: ${currentProduct.name}`;
      url = `https://mail.google.com/mail/?view=cm&fs=1&to=${GMAIL_ADDRESS}&su=${encodeURIComponent(subject)}&body=${encodeURIComponent(message)}`;
    } else if (platform === 'facebook') {
      navigator.clipboard?.writeText(message).catch(() => {});
      url = FACEBOOK_LINK;
      alert("A quick note about your interest was copied! Paste it into our Facebook page message.");
    } else if (platform === 'instagram') {
      navigator.clipboard?.writeText(message).catch(() => {});
      url = INSTAGRAM_LINK;
      alert("A quick note about your interest was copied! Send it to us via Instagram Direct Message.");
    }

    window.open(url, '_blank');
    closeOrderModal();
  }

  function toggleDesc(btn) {
    const desc = btn.previousElementSibling;
    const isExpanded = desc.classList.toggle('line-clamp-2');
    const isKm = btn.dataset.km === 'true';
    if (isExpanded) {
      btn.textContent = isKm ? 'មើលបន្ថែម' : 'See more';
    } else {
      btn.textContent = isKm ? 'មើលតិច' : 'See less';
    }
  }

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') closeOrderModal();
  });
</script>

<?php 
get_footer(); 
?>