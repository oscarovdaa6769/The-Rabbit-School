<?php
/* Template Name: Product*/
get_header();

// Hero
$hero_bg_image    = get_field('hero_bg_image') ? esc_url(get_field('hero_bg_image')) : '';
$hero_heading     = get_field('hero_heading') ?: 'no data ';
$hero_description = get_field('hero_description') ?: "no data";

// Features Section
$feature1_icon = get_field('feature1_icon') ?: 'no data';
$feature1_title = get_field('feature1_title') ?: 'no data';
$feature1_desc = get_field('feature1_desc') ?: 'no data';

$feature2_icon = get_field('feature2_icon') ?: 'no data';
$feature2_title = get_field('feature2_title') ?: 'no data';
$feature2_desc = get_field('feature2_desc') ?: 'no data';

$feature3_icon = get_field('feature3_icon') ?: 'nota';
$feature3_title = get_field('feature3_title') ?: 'no data';
$feature3_desc = get_field('feature3_desc') ?: 'no data';

$feature4_icon = get_field('feature4_icon') ?: 'no data';
$feature4_title = get_field('feature4_title') ?: 'no dat';
$feature4_desc = get_field('feature4_desc') ?: 'no data';

// Products Header Section
$section_eyebrow = get_field('section_eyebrow') ?: 'no data';
$section_title   = get_field('section_title') ?: 'no data';
?>

<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Koulen&family=Inter:wght@400;500;600;700;800&family=Battambang:wght@400;700&display=swap" rel="stylesheet">
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
</style>
</head>

<main class="bg-[#F7F5F4] min-h-screen font-sans antialiased">

  <!-- ============ HERO ============ -->
  <section class="relative overflow-hidden">
    <div class="absolute inset-0 -z-10">
      <img src="<?php echo esc_url($hero_bg_image); ?>" alt="Rabbit School Vocational Workshop" class="w-full h-full object-cover">
      <div class="absolute inset-0 bg-brand-brown/80"></div>
    </div>

    <div class="max-w-4xl mx-auto text-center px-6 py-24 md:py-32">
      <h1 class="font-heading text-white text-4xl sm:text-5xl md:text-6xl tracking-tight leading-tight mb-6">
        <?php echo $hero_heading; ?>
      </h1>
      <p class="text-white/85 max-w-2xl mx-auto text-base md:text-lg leading-relaxed mb-10">
        <?php echo wp_kses_post($hero_description); ?>
      </p>
      <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
        <a href="#shop" class="bg-brand-yellow text-brand-brown font-semibold px-8 py-3 rounded-full hover:bg-white transition">Shop Now</a>
      </div>
    </div>
  </section>

  <!-- ============ FEATURES STRIP ============ -->
  <section class="max-w-7xl mx-auto px-6 py-16">
    <div class="grid grid-cols-2 md:grid-cols-4 gap-8 md:gap-6 text-center">
      <div class="flex flex-col items-center gap-3">
        <div class="w-14 h-14 rounded-full bg-brand-yellow/20 flex items-center justify-center text-2xl"><?php echo esc_html($feature1_icon); ?></div>
        <h3 class="font-heading text-base"><?php echo esc_html($feature1_title); ?></h3>
        <p class="text-sm text-text-muted leading-snug"><?php echo esc_html($feature1_desc); ?></p>
      </div>
      <div class="flex flex-col items-center gap-3">
        <div class="w-14 h-14 rounded-full bg-brand-teal/20 flex items-center justify-center text-2xl"><?php echo esc_html($feature2_icon); ?></div>
        <h3 class="font-heading text-base"><?php echo esc_html($feature2_title); ?></h3>
        <p class="text-sm text-text-muted leading-snug"><?php echo esc_html($feature2_desc); ?></p>
      </div>
      <div class="flex flex-col items-center gap-3">
        <div class="w-14 h-14 rounded-full bg-brand-pink/20 flex items-center justify-center text-2xl"><?php echo esc_html($feature3_icon); ?></div>
        <h3 class="font-heading text-base"><?php echo esc_html($feature3_title); ?></h3>
        <p class="text-sm text-text-muted leading-snug"><?php echo esc_html($feature3_desc); ?></p>
      </div>
      <div class="flex flex-col items-center gap-3">
        <div class="w-14 h-14 rounded-full bg-brand-orange/20 flex items-center justify-center text-2xl"><?php echo esc_html($feature4_icon); ?></div>
        <h3 class="font-heading text-base"><?php echo esc_html($feature4_title); ?></h3>
        <p class="text-sm text-text-muted leading-snug"><?php echo esc_html($feature4_desc); ?></p>
      </div>
    </div>
  </section>

  <!-- ============ PRODUCTS SECTION ============ -->
  <section id="shop" class="bg-white py-20 border-t border-brand-brown/5">
    <div class="max-w-7xl mx-auto px-6">
      <div class="flex items-end justify-between mb-10">
        <div>
          <p class="uppercase tracking-widest text-brand-orange text-xs font-semibold mb-2"><?php echo esc_html($section_eyebrow); ?></p>
          <h2 class="font-heading text-3xl md:text-4xl text-brand-brown"><?php echo esc_html($section_title); ?></h2>
        </div>
      </div>

      <div id="productGrid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

        <?php if( have_rows('shop_products') ): ?>
          <?php while( have_rows('shop_products') ): the_row(); 
            $category_label      = get_sub_field('category_label') ?: 'Daily Use';
            $product_image       = get_sub_field('product_image') ? esc_url(get_sub_field('product_image')) : 'https://images.unsplash.com/photo-1544816155-12df9643f363?q=80&w=800&auto=format&fit=crop';
            $product_title       = get_sub_field('product_title') ?: 'Product Name';
            $product_description = get_sub_field('product_description') ?: 'Product description goes here.';
            $product_price       = get_sub_field('product_price') ?: '$0.00';
          ?>
            <div class="product-card bg-[#F7F5F4] rounded-3xl overflow-hidden border border-brand-brown/5 flex flex-col justify-between">
              <div>
                <div class="aspect-[4/3] overflow-hidden">
                  <img src="<?php echo $product_image; ?>" alt="<?php echo esc_attr($product_title); ?>" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                  <span class="text-xs font-semibold uppercase tracking-wide text-brand-teal"><?php echo esc_html($category_label); ?></span>
                  <h3 class="font-heading text-xl mt-1 mb-2 text-brand-brown"><?php echo esc_html($product_title); ?></h3>
                  <p class="text-sm text-text-muted leading-relaxed mb-4"><?php echo esc_html($product_description); ?></p>
                </div>
              </div>
              <div class="p-6 pt-0">
                <div class="flex items-center justify-between border-t border-brand-brown/10 pt-4">
                  <span class="font-heading text-lg text-brand-brown"><?php echo esc_html($product_price); ?></span>
                  <button onclick="openOrderModal('<?php echo esc_attr($product_title); ?>', '<?php echo esc_attr($product_price); ?>')" class="bg-brand-yellow text-brand-brown text-sm font-semibold px-5 py-2.5 rounded-full hover:bg-brand-brown hover:text-white transition">Buy Now</button>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        <?php else: ?>
          <p class="text-text-muted col-span-3 text-center py-10">No products found. Please add products using the WordPress dashboard editor.</p>
        <?php endif; ?>

      </div>
    </div>
  </section>

</main>

  <!-- ============ ORDER MODAL ============ -->
  <div id="orderModal" class="hidden fixed inset-0 z-50 items-center justify-center p-4">
    <div class="absolute inset-0 bg-brand-brown/70 backdrop-blur-sm" onclick="closeOrderModal()"></div>
    <div class="relative bg-white rounded-3xl w-full max-w-md p-7 md:p-9 shadow-2xl">
      <button onclick="closeOrderModal()" class="absolute top-5 right-5 w-8 h-8 flex items-center justify-center rounded-full text-text-muted hover:bg-brand-brown/5 hover:text-brand-brown transition text-lg leading-none">✕</button>

      <p class="uppercase tracking-widest text-brand-orange text-xs font-semibold mb-2">Place your order</p>
      <h3 class="font-heading text-2xl mb-1 text-brand-brown" id="modalProductName">Product Name</h3>
      <p class="text-text-muted text-sm mb-6" id="modalProductPrice">$0.00</p>

      <form id="orderForm" class="space-y-4" onsubmit="return false;">
        <div>
          <label class="block text-xs font-semibold uppercase tracking-wide text-text-muted mb-1.5">Your Name</label>
          <input type="text" id="orderName" required placeholder="Sok Dara" class="w-full border border-brand-brown/15 bg-brand-cream/40 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-brand-yellow focus:border-transparent transition">
        </div>
        <div>
          <label class="block text-xs font-semibold uppercase tracking-wide text-text-muted mb-1.5">Phone Number</label>
          <input type="tel" id="orderPhone" required placeholder="012 345 678" class="w-full border border-brand-brown/15 bg-brand-cream/40 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-brand-yellow focus:border-transparent transition">
        </div>
        <div>
          <label class="block text-xs font-semibold uppercase tracking-wide text-text-muted mb-1.5">Quantity</label>
          <input type="number" id="orderQty" min="1" value="1" required class="w-full border border-brand-brown/15 bg-brand-cream/40 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-brand-yellow focus:border-transparent transition">
        </div>

        <div class="pt-2">
          <p class="text-xs font-semibold uppercase tracking-wide text-text-muted mb-3">Send order via</p>
          <div class="grid grid-cols-1 gap-2.5">

            <!-- Email / Gmail -->
            <button type="button" onclick="submitOrder('gmail')" class="group flex items-center gap-3 w-full bg-white rounded-xl px-4 py-3 border border-brand-brown/10 shadow-sm hover:shadow-md hover:-translate-y-0.5 active:translate-y-0 active:shadow-sm transition-all duration-200">
              <span class="w-8 h-8 rounded-lg bg-[#EA4335]/10 flex items-center justify-center shrink-0">
                <svg class="w-4 h-4 text-[#EA4335]" viewBox="0 0 24 24" fill="currentColor"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
              </span>
              <span class="text-sm font-semibold text-brand-brown">Email / Gmail</span>
              <span class="ml-auto text-text-muted/40 group-hover:text-brand-brown group-hover:translate-x-1 transition-all text-xs">➔</span>
            </button>

            <!-- Facebook -->
            <button type="button" onclick="submitOrder('facebook')" class="group flex items-center gap-3 w-full bg-white rounded-xl px-4 py-3 border border-brand-brown/10 shadow-sm hover:shadow-md hover:-translate-y-0.5 active:translate-y-0 active:shadow-sm transition-all duration-200">
              <span class="w-8 h-8 rounded-lg bg-[#1877F2]/10 flex items-center justify-center shrink-0">
                <svg class="w-4 h-4 text-[#1877F2]" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
              </span>
              <span class="text-sm font-semibold text-brand-brown">Facebook Page</span>
              <span class="ml-auto text-text-muted/40 group-hover:text-brand-brown group-hover:translate-x-1 transition-all text-xs">➔</span>
            </button>

            <!-- Instagram -->
            <button type="button" onclick="submitOrder('instagram')" class="group flex items-center gap-3 w-full bg-white rounded-xl px-4 py-3 border border-brand-brown/10 shadow-sm hover:shadow-md hover:-translate-y-0.5 active:translate-y-0 active:shadow-sm transition-all duration-200">
              <span class="w-8 h-8 rounded-lg bg-[#E4405F]/10 flex items-center justify-center shrink-0">
                <svg class="w-4 h-4 text-[#E4405F]" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
              </span>
              <span class="text-sm font-semibold text-brand-brown">Instagram Direct</span>
              <span class="ml-auto text-text-muted/40 group-hover:text-brand-brown group-hover:translate-x-1 transition-all text-xs">➔</span>
            </button>

          </div>
        </div>
      </form>
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
      document.getElementById('orderForm').reset();
    }

    function submitOrder(platform) {
      const name = document.getElementById('orderName');
      const phone = document.getElementById('orderPhone');
      const qty = document.getElementById('orderQty');

      if (!name.value.trim() || !phone.value.trim() || !qty.value) {
        [name, phone, qty].forEach(f => { if (!f.value.trim()) f.reportValidity(); });
        return;
      }

      const message =
        `Hello! I'd like to order from the Rabbit School Shop:\n\n` +
        `Product: ${currentProduct.name}\n` +
        `Price: ${currentProduct.price}\n` +
        `Quantity: ${qty.value}\n\n` +
        `My name: ${name.value.trim()}\n` +
        `My phone: ${phone.value.trim()}`;

      let url = "";

      if (platform === 'gmail') {
        const subject = `Order Inquiry: ${currentProduct.name}`;
        url = `https://mail.google.com/mail/?view=cm&fs=1&to=${GMAIL_ADDRESS}&su=${encodeURIComponent(subject)}&body=${encodeURIComponent(message)}`;
      } else if (platform === 'facebook') {
        navigator.clipboard?.writeText(message).catch(() => {});
        url = FACEBOOK_LINK;
        alert("Your order details were copied! Just paste them into our Facebook page message.");
      } else if (platform === 'instagram') {
        navigator.clipboard?.writeText(message).catch(() => {});
        url = INSTAGRAM_LINK;
        alert("Your order details were copied! Send them to us via Instagram Direct Message.");
      }

      window.open(url, '_blank');
      closeOrderModal();
    }

    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') closeOrderModal();
    });
  </script>

<?php get_footer(); ?>