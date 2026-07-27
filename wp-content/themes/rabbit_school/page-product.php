<?php
/**
* Template Name: Product
*/

get_header();



// section 1

$img_1_url = get_field('image_1') ?: get_theme_file_uri('assets/images/error.png');
$title_1 = get_field('heading_1') ?: 'SECTION 1 NOT WORKING';
$desc_1 = get_field('description_1') ?: 'DESC 1 NOT WORKING';
$btn_1 = get_field('buntton_1')?: 'No data';


// section 2

// feature 1
$card1_title       = get_field('card_title') ?: 'No data';
$card1_description = get_field('card1_description') ?: 'No data';
$card1_icon = get_field('card1_icon ') ?: 'No data';


// feature 2
$card3_title       = get_field('card3_title') ?: 'No data';
$card3_description = get_field('card3_description') ?: 'No data';
$card3_icon = get_field('card1_icon ') ?: 'No data';

// feature 3
$card4_title       = get_field('card4_title') ?: 'No data';
$card4_description = get_field('card4_description') ?: 'No data';
$card4_icon = get_field('card1_icon ') ?: 'No data';


// section 3 
$title_3 = get_field('heading_3') ?: 'SECTION 3 NOT WORKING';
$heading_4 = get_field('heading_4') ?: 'SECTION 4 NOT WORKING';

//  product card1
$img_3_url = get_field('image_3') ?: get_theme_file_uri('assets/images/error.png');


?>
<script src="https://cdn.tailwindcss.com"></script>
<script>
  tailwind.config = {
    theme: {
      extend: {
        colors: {
          brand: {
            brown: '#623D3C',
            cream: '#F7F5F4',
            blue: '#79A2C9',
            yellow: '#FED45F',
            teal: '#8BAEA7',
            pink: '#DDB0D1',
            orange: '#F5AE6A',
          },
          text: {
            main: '#623D3C',
            muted: '#5A5A5A',
            light: '#F7F5F4',
          }
        },
        fontFamily: {
          heading: ['Oswald', 'Koulen', 'sans-serif'],
          sans: ['Inter', 'Battambang', 'sans-serif'],
        }
      }
    }
  }
</script>
<style>
  body { font-family: 'Inter', 'Battambang', sans-serif; }
  h1,h2,h3,h4, .font-heading { font-family: 'Oswald', 'Koulen', sans-serif; }
  .product-card { transition: transform .25s ease, box-shadow .25s ease; }
  .product-card:hover { transform: translateY(-6px); box-shadow: 0 20px 40px -12px rgba(98,61,60,0.18); }
  .cat-card img { transition: transform .5s ease; }
  .cat-card:hover img { transform: scale(1.06); }
  .cat-card.active { outline: 3px solid #FED45F; outline-offset: 2px; }
  .product-card.is-hidden { display: none; }
  #orderModal { transition: opacity .2s ease; }
  .product-desc { transition: -webkit-line-clamp .01s; }
</style>

<body class="bg-white text-brand-brown">

  <!-- ============ HERO ============ -->
  <section class="relative overflow-hidden ">
    <div class="absolute inset-0 -z-10">
      <img src="<?php echo esc_url($img_1_url); ?>" alt="<?php echo esc_attr($title_1); ?>" alt="Rabbit School Vocational Workshop" class="w-full h-full object-cover">
      <div class="absolute inset-0 "></div>
    </div>

    <div class="max-w-4xl mx-auto text-center px-6 py-24 md:py-32">
      <h1 class="font-heading text-white text-4xl sm:text-5xl md:text-6xl tracking-tight leading-tight mb-6">
        <?php echo esc_html($title_1);?>
      </h1>
      <p class="text-white/85 max-w-2xl mx-auto text-base md:text-lg leading-relaxed mb-10">
        <?php echo esc_html($desc_1);?>
      </p>
      <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
        <a href="#shop" class="bg-brand-yellow text-brand-brown font-semibold px-8 py-3 rounded-full hover:bg-white transition"> <?php echo esc_html($btn_1); ?> </a>
      </div>
    </div>
  </section>

  <!-- ============ FEATURES STRIP ============ -->
  <section class="max-w-7xl mx-auto px-6 py-16">
    <div class="grid grid-cols-2 md:grid-cols-3 gap-8 md:gap-6 text-center items-center justify-center">

      <div class="flex flex-col items-center gap-3">
        <div class="w-14 h-14 rounded-full bg-[#DDB0D1] flex items-center justify-center text-2xl">
          <img src="<?php echo esc_url($card1_icon); ?>"
                alt=""
                loading=""
                class="w-8 h-8 object-contain filter drop-shadow-[0_2px_4px_rgba(0,0,0,0.06)]" />
        </div>
        <h3 class="font-heading text-base"> <?php echo esc_html($card1_title);?></h3>
        <p class="text-sm text-text-muted leading-snug"><?php echo esc_html($card1_description)?></p>
      </div>


      <div class="flex flex-col items-center gap-3">
        <div class="w-14 h-14 rounded-full bg-[#8BAEA7] flex items-center justify-center text-2xl">
          <img src="<?php echo esc_url($card4_icon); ?>"
                alt="Delivery Icon"
                loading=""
                class="w-8 h-8 object-contain filter drop-shadow-[0_2px_4px_rgba(0,0,0,0.06)]" />
        </div>
        <h3 class="font-heading text-base"><?php echo esc_html($card3_title);?></h3>
        <p class="text-sm text-text-muted leading-snug"><?php echo esc_html($card3_description)?></p>
      </div>

      <div class="flex flex-col items-center gap-3">
        <div class="w-14 h-14 rounded-full bg-[#FED45F] flex items-center justify-center text-2xl">
          <img src="<?php echo esc_url($card4_icon); ?>"
                alt="Delivery Icn"
                loading=""
                class="w-8 h-8 object-contain filter drop-shadow-[0_2px_4px_rgba(0,0,0,0.06)]" />
        </div>
        <h3 class="font-heading text-base"><?php echo esc_html($card4_title);?></h3>
        <p class="text-sm text-text-muted leading-snug"><?php echo esc_html($card4_title);?></p>
      </div>

    </div>
  </section>

  <!-- ============ PRODUCTS SECTION ============ -->
  <section id="shop" class="bg-brand-cream py-20">
    <div class="max-w-7xl mx-auto px-6">
      <div class="flex items-end justify-between mb-10">
        <div>
          <p class="uppercase tracking-widest text-brand-orange text-xs font-semibold mb-2"><?php echo esc_html($title_3);?></p>
          <h2 class="font-heading text-3xl md:text-4xl"><?php echo esc_html($heading_4);?></h2>
        </div>
      </div>

      <div id="filterStatus" class="hidden items-center gap-3 mb-6">
        <span class="text-sm text-text-muted">Showing: <span id="filterLabel" class="font-semibold text-brand-brown"></span></span>
        <button onclick="clearFilter()" class="text-xs font-semibold text-brand-brown bg-white border border-brand-brown/20 px-3 py-1.5 rounded-full hover:bg-brand-brown hover:text-white transition">Clear filter ✕</button>
      </div>



      <div id="productGrid" class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-5">

<?php
$products_query = new WP_Query( array(
    'post_type'      => 'product',
    'posts_per_page' => -1,
) );

if ( $products_query->have_posts() ) :
    while ( $products_query->have_posts() ) : $products_query->the_post();

        $price = get_field('product_price') ?: '$0.00';

        $terms = get_the_terms( get_the_ID(), 'product_category' );
        $category_slug = ( $terms && ! is_wp_error( $terms ) ) ? $terms[0]->slug : '';

        $image_field = get_field('image');
        if ( is_array( $image_field ) && isset( $image_field['url'] ) ) {
            $image = $image_field['url'];
        } elseif ( is_string( $image_field ) && $image_field ) {
            $image = $image_field;
        } else {
            $image = get_theme_file_uri('assets/images/error.png');
        }

        $description = get_field('description_box') ?: '';
        $detail = get_field('detail') ?: '';
?>

  <div class="product-card bg-white rounded-xl overflow-hidden border border-brand-brown/10 flex flex-col" data-category="<?php echo esc_attr( $category_slug ); ?>">
    <div class="aspect-square overflow-hidden bg-brand-cream/40">
      <img src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>" class="w-full h-full object-cover">
    </div>
    <div class="p-3 flex flex-col flex-1">
      <h3 class="font-heading text-sm leading-snug mb-1 line-clamp-1"><?php the_title(); ?></h3>

      <p class="product-desc text-xs text-text-muted mb-1 line-clamp-2 flex-1"><?php echo esc_html( $description ); ?></p>

      <?php if ( mb_strlen( $description ) > 60 ) :
        $is_km = function_exists('pll_current_language') && pll_current_language() === 'km';
      ?>
        <button type="button" onclick="toggleDesc(this)" data-km="<?php echo $is_km ? 'true' : 'false'; ?>" class="see-more-btn text-[11px] font-semibold text-brand-blue text-left mb-2 hover:underline">
          <?php echo $is_km ? 'មើលបន្ថែម' : 'See more'; ?>
        </button>
      <?php else : ?>
        <div class="mb-2"></div>
      <?php endif; ?>

      <div class="flex items-center justify-between pt-2 border-t border-brand-brown/5">
        <span class="font-heading text-sm"><?php echo esc_html( $price ); ?></span>
        <button onclick="openOrderModal('<?php echo esc_js( get_the_title() ); ?>', '<?php echo esc_js( $price ); ?>')" class="bg-brand-yellow text-brand-brown text-xs font-semibold px-3 py-1.5 rounded-full whitespace-nowrap"><?php echo esc_html( $detail ); ?></button>
      </div>
    </div>
  </div>

<?php
    endwhile;
    wp_reset_postdata();
else :
    echo '<p>No products found.</p>';
endif;
?>

</div>


      



    </div>
  </section>


<!-- ============ ORDER MODAL ============ -->
 <div id="orderModal" class="hidden fixed inset-0 z-50 items-center justify-center p-4">
    <div class="absolute inset-0 bg-brand-brown/70 backdrop-blur-sm" onclick="closeOrderModal()"></div>
    <div class="relative bg-white rounded-3xl w-full max-w-md p-7 md:p-9 shadow-2xl">
      <button onclick="closeOrderModal()" class="absolute top-5 right-5 w-8 h-8 flex items-center justify-center rounded-full text-text-muted hover:bg-brand-brown/5 hover:text-brand-brown transition text-lg leading-none">✕</button>

      <p class="uppercase tracking-widest text-brand-orange text-xs font-semibold mb-2"><?php echo (pll_current_language() === 'km') ? 'ចាប់អារម្មណ៍លើវត្ថុនេះ?' : 'Interested in this item?'; ?></p>
      <h3 class="font-heading text-2xl mb-1" id="modalProductName">Product Name</h3>
      <p class="text-text-muted text-sm mb-6" id="modalProductPrice">$0.00</p>

      <p class="text-xs font-semibold uppercase tracking-wide text-text-muted mb-3"><?php echo (pll_current_language() === 'km') ? 'ទាក់ទងមកយើងខ្ញុំដើម្បីបញ្ជាទិញ' : 'Contact us to order'; ?></p>
      <div class="grid grid-cols-1 gap-2.5">

        <!-- Email / Gmail -->
        <button type="button" onclick="submitOrder('gmail')" class="group flex items-center gap-3 w-full bg-white rounded-xl px-4 py-3 border border-brand-brown/10 shadow-sm hover:shadow-md hover:-translate-y-0.5 active:translate-y-0 active:shadow-sm transition-all duration-200">
          <span class="w-8 h-8 rounded-lg bg-[#EA4335]/10 flex items-center justify-center shrink-0">
            <svg class="w-4 h-4 text-[#EA4335]" viewBox="0 0 24 24" fill="currentColor"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
          </span>
          <span class="text-sm font-semibold text-brand-brown"><?php echo (pll_current_language() === 'km') ? 'អ៊ីមែល / ជីមែល' : 'Email / Gmail'; ?></span>
          <span class="ml-auto text-text-muted/40 group-hover:text-brand-brown group-hover:translate-x-1 transition-all text-xs">➔</span>
        </button>

        <!-- Facebook -->
        <button type="button" onclick="submitOrder('facebook')" class="group flex items-center gap-3 w-full bg-white rounded-xl px-4 py-3 border border-brand-brown/10 shadow-sm hover:shadow-md hover:-translate-y-0.5 active:translate-y-0 active:shadow-sm transition-all duration-200">
          <span class="w-8 h-8 rounded-lg bg-[#1877F2]/10 flex items-center justify-center shrink-0">
            <svg class="w-4 h-4 text-[#1877F2]" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
          </span>
          <span class="text-sm font-semibold text-brand-brown"><?php echo (pll_current_language() === 'km') ? 'ទំព័រហ្វេសប៊ុក' : 'Facebook Page'; ?></span>
          <span class="ml-auto text-text-muted/40 group-hover:text-brand-brown group-hover:translate-x-1 transition-all text-xs">➔</span>
        </button>

        <!-- Instagram -->
        <button type="button" onclick="submitOrder('instagram')" class="group flex items-center gap-3 w-full bg-white rounded-xl px-4 py-3 border border-brand-brown/10 shadow-sm hover:shadow-md hover:-translate-y-0.5 active:translate-y-0 active:shadow-sm transition-all duration-200">
          <span class="w-8 h-8 rounded-lg bg-[#E4405F]/10 flex items-center justify-center shrink-0">
            <svg class="w-4 h-4 text-[#E4405F]" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
          </span>
          <span class="text-sm font-semibold text-brand-brown"><?php echo (pll_current_language() === 'km') ? 'សារផ្ទាល់តាមអ៊ីនស្តាក្រាម' : 'Instagram Direct'; ?></span>
          <span class="ml-auto text-text-muted/40 group-hover:text-brand-brown group-hover:translate-x-1 transition-all text-xs">➔</span>
        </button>

      </div>
    </div>
  </div>

  <script>
    const GMAIL_ADDRESS = "info@rabbitschoolcambodia.net";
    const FACEBOOK_LINK = "https://www.facebook.com/share/199iFs28pU/";
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
      const expanded = desc.classList.toggle('line-clamp-2');
      const isKm = btn.dataset.km === 'true';
      if (expanded) {
        btn.textContent = isKm ? 'មើលបន្ថែម' : 'See more';
      } else {
        btn.textContent = isKm ? 'មើលតិច' : 'See less';
      }
    }

    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') closeOrderModal();
    });
  </script>

  

</body>
</html>

<?php get_footer(); ?>