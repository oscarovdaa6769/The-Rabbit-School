<?php
/**
 * Template Name: Rabbit School Shop
 */

get_header();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Shop — The Rabbit School Cambodia</title>
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
  .cat-card img { transition: transform .5s ease; }
  .cat-card:hover img { transform: scale(1.06); }
  .cat-card.active { outline: 3px solid #FED45F; outline-offset: 2px; }
  .product-card.is-hidden { display: none; }
  #orderModal { transition: opacity .2s ease; }
</style>
</head>
<body class="bg-white text-brand-brown">

  <!-- ============ HERO ============ -->
  <section class="relative overflow-hidden">
    <div class="absolute inset-0 -z-10">
      <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?q=80&w=1600&auto=format&fit=crop" alt="Rabbit School Vocational Workshop" class="w-full h-full object-cover">
      <div class="absolute inset-0 bg-brand-brown/80"></div>
    </div>

    <div class="max-w-4xl mx-auto text-center px-6 py-24 md:py-32">
      <p class="uppercase tracking-widest text-brand-yellow text-sm font-semibold mb-4">Shop with purpose</p>
      <h1 class="font-heading text-white text-4xl sm:text-5xl md:text-6xl tracking-tight leading-tight mb-6">
        Every Purchase Builds<br class="hidden sm:block"> A Future
      </h1>
      <p class="text-white/85 max-w-2xl mx-auto text-base md:text-lg leading-relaxed mb-10">
        Each item in this shop is crafted by students in Rabbit School's vocational training program. Your purchase directly covers training supplies, tools, and mentorship for students learning a valuable trade.
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
        <div class="w-14 h-14 rounded-full bg-brand-yellow/20 flex items-center justify-center text-2xl">🚚</div>
        <h3 class="font-heading text-base">Local Delivery</h3>
        <p class="text-sm text-text-muted leading-snug">Quick delivery options available across Phnom Penh & Cambodia.</p>
      </div>

      <div class="flex flex-col items-center gap-3">
        <div class="w-14 h-14 rounded-full bg-brand-teal/20 flex items-center justify-center text-2xl">✋</div>
        <h3 class="font-heading text-base">Handmade with Care</h3>
        <p class="text-sm text-text-muted leading-snug">Every piece crafted by hand in our student workshops.</p>
      </div>

      <div class="flex flex-col items-center gap-3">
        <div class="w-14 h-14 rounded-full bg-brand-pink/20 flex items-center justify-center text-2xl">🎓</div>
        <h3 class="font-heading text-base">Funds Real Training</h3>
        <p class="text-sm text-text-muted leading-snug">100% of profit goes back into student vocational training.</p>
      </div>

      <div class="flex flex-col items-center gap-3">
        <div class="w-14 h-14 rounded-full bg-brand-orange/20 flex items-center justify-center text-2xl">💬</div>
        <h3 class="font-heading text-base">Easy Direct Order</h3>
        <p class="text-sm text-text-muted leading-snug">Order instantly via WhatsApp, Telegram, or Messenger.</p>
      </div>

    </div>
  </section>

  <!-- ============ PRODUCTS SECTION ============ -->
  <section id="shop" class="bg-brand-cream py-20">
    <div class="max-w-7xl mx-auto px-6">
      <div class="flex items-end justify-between mb-10">
        <div>
          <p class="uppercase tracking-widest text-brand-orange text-xs font-semibold mb-2">From our student workshop</p>
          <h2 class="font-heading text-3xl md:text-4xl">Our Products</h2>
        </div>
      </div>

      <div id="filterStatus" class="hidden items-center gap-3 mb-6">
        <span class="text-sm text-text-muted">Showing: <span id="filterLabel" class="font-semibold text-brand-brown"></span></span>
        <button onclick="clearFilter()" class="text-xs font-semibold text-brand-brown bg-white border border-brand-brown/20 px-3 py-1.5 rounded-full hover:bg-brand-brown hover:text-white transition">Clear filter ✕</button>
      </div>

      <div id="productGrid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

        <!-- Product 1: Water Bottle -->
        <div class="product-card bg-white rounded-2xl overflow-hidden border border-brand-brown/5 flex flex-col justify-between" data-category="daily">
          <div>
            <div class="aspect-[4/3] overflow-hidden">
              <img src="https://images.unsplash.com/photo-1602143407151-7111542de6e8?q=80&w=800&auto=format&fit=crop" alt="Rabbit School Eco Water Bottle" class="w-full h-full object-cover">
            </div>
            <div class="p-5">
              <span class="text-xs font-semibold uppercase tracking-wide text-brand-teal">Daily Use</span>
              <h3 class="font-heading text-lg mt-1 mb-1">Eco Stainless Water Bottle</h3>
              <p class="text-sm text-text-muted mb-4">Reusable, stainless steel bottle featuring the Rabbit School logo design.</p>
            </div>
          </div>
          <div class="p-5 pt-0">
            <div class="flex items-center justify-between border-t border-brand-brown/5 pt-4">
              <span class="font-heading text-lg">$8.00</span>
              <button onclick="openOrderModal('Eco Stainless Water Bottle', '$8.00')" class="bg-brand-yellow text-brand-brown text-sm font-semibold px-4 py-2 rounded-full">Buy Now</button>
            </div>
          </div>
        </div>

        <!-- Product 2: Handwoven Scarf -->
        <div class="product-card bg-white rounded-2xl overflow-hidden border border-brand-brown/5 flex flex-col justify-between" data-category="weaving">
          <div>
            <div class="aspect-[4/3] overflow-hidden">
              <img src="https://images.unsplash.com/photo-1608234807905-4466023792f5?q=80&w=800&auto=format&fit=crop" alt="Handwoven Cambodian Scarf" class="w-full h-full object-cover">
            </div>
            <div class="p-5">
              <span class="text-xs font-semibold uppercase tracking-wide text-brand-pink">Handwoven</span>
              <h3 class="font-heading text-lg mt-1 mb-1">Handwoven Cotton Scarf</h3>
              <p class="text-sm text-text-muted mb-4">Traditional soft cotton scarf, hand-loomed with care by our weaving trainees.</p>
            </div>
          </div>
          <div class="p-5 pt-0">
            <div class="flex items-center justify-between border-t border-brand-brown/5 pt-4">
              <span class="font-heading text-lg">$12.00</span>
              <button onclick="openOrderModal('Handwoven Cotton Scarf', '$12.00')" class="bg-brand-yellow text-brand-brown text-sm font-semibold px-4 py-2 rounded-full">Buy Now</button>
            </div>
          </div>
        </div>

        <!-- Product 3: Handmade Earrings -->
        <div class="product-card bg-white rounded-2xl overflow-hidden border border-brand-brown/5 flex flex-col justify-between" data-category="crafts">
          <div>
            <div class="aspect-[4/3] overflow-hidden">
              <img src="https://images.unsplash.com/photo-1630019852942-f89202989a59?q=80&w=800&auto=format&fit=crop" alt="Handmade Craft Earrings" class="w-full h-full object-cover">
            </div>
            <div class="p-5">
              <span class="text-xs font-semibold uppercase tracking-wide text-brand-orange">Crafts</span>
              <h3 class="font-heading text-lg mt-1 mb-1">Artisan Handmade Earrings</h3>
              <p class="text-sm text-text-muted mb-4">Beautifully crafted lightweight earrings handmade by our craft students.</p>
            </div>
          </div>
          <div class="p-5 pt-0">
            <div class="flex items-center justify-between border-t border-brand-brown/5 pt-4">
              <span class="font-heading text-lg">$5.00</span>
              <button onclick="openOrderModal('Artisan Handmade Earrings', '$5.00')" class="bg-brand-yellow text-brand-brown text-sm font-semibold px-4 py-2 rounded-full">Buy Now</button>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ============ ORDER MODAL ============ -->
  <div id="orderModal" class="hidden fixed inset-0 z-50 items-center justify-center p-4">
    <div class="absolute inset-0 bg-brand-brown/70 backdrop-blur-sm" onclick="closeOrderModal()"></div>
    <div class="relative bg-white rounded-3xl w-full max-w-md p-7 md:p-9 shadow-2xl">
      <button onclick="closeOrderModal()" class="absolute top-5 right-5 w-8 h-8 flex items-center justify-center rounded-full text-text-muted hover:bg-brand-brown/5 hover:text-brand-brown transition text-lg leading-none">✕</button>

      <p class="uppercase tracking-widest text-brand-orange text-xs font-semibold mb-2">Place your order</p>
      <h3 class="font-heading text-2xl mb-1" id="modalProductName">Product Name</h3>
      <p class="text-text-muted text-sm mb-7" id="modalProductPrice">$0.00</p>

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

        <div class="pt-3">
          <p class="text-xs font-semibold uppercase tracking-wide text-text-muted mb-3">Send order via</p>
          <div class="grid grid-cols-1 gap-2.5">

            <button type="button" onclick="submitOrder('whatsapp')" class="group flex items-center gap-3 w-full border border-brand-brown/10 hover:border-transparent hover:bg-[#25D366] rounded-xl px-4 py-3 transition">
              <span class="w-9 h-9 rounded-full bg-[#25D366]/10 group-hover:bg-white/20 flex items-center justify-center shrink-0 transition">
                <svg class="w-5 h-5 text-[#25D366] group-hover:text-white transition" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91c0 1.75.46 3.45 1.32 4.95L2 22l5.28-1.39a9.9 9.9 0 0 0 4.76 1.21h.01c5.46 0 9.9-4.45 9.9-9.91C21.96 6.45 17.51 2 12.04 2m5.79 14.06c-.24.68-1.42 1.3-1.96 1.35-.5.05-1.02.24-3.42-.71-2.9-1.15-4.76-4.08-4.9-4.27-.14-.19-1.17-1.56-1.17-2.98s.74-2.12 1-2.41c.26-.28.57-.35.76-.35.19 0 .38 0 .55.01.18.01.42-.07.65.5.24.58.81 2 .88 2.15.07.15.12.32.02.51-.09.19-.14.31-.28.48-.14.16-.29.36-.42.48-.14.13-.28.28-.12.55.16.28.71 1.18 1.53 1.91 1.05.94 1.94 1.23 2.21 1.37.28.14.44.12.6-.07.16-.19.68-.79.87-1.06.18-.28.36-.23.6-.14.24.09 1.55.73 1.82.87.26.14.44.2.5.32.06.12.06.7-.18 1.38"/></svg>
              </span>
              <span class="text-sm font-semibold group-hover:text-white transition">WhatsApp</span>
              <span class="ml-auto text-text-muted group-hover:text-white/80 transition">›</span>
            </button>

            <button type="button" onclick="submitOrder('telegram')" class="group flex items-center gap-3 w-full border border-brand-brown/10 hover:border-transparent hover:bg-[#229ED9] rounded-xl px-4 py-3 transition">
              <span class="w-9 h-9 rounded-full bg-[#229ED9]/10 group-hover:bg-white/20 flex items-center justify-center shrink-0 transition">
                <svg class="w-5 h-5 text-[#229ED9] group-hover:text-white transition" viewBox="0 0 24 24" fill="currentColor"><path d="M21.9 4.3c-.3-.2-.7-.3-1.4 0L2.9 11.1c-.9.3-.9 1.6 0 1.9l4.5 1.5 1.7 5.4c.2.6 1 .8 1.5.4l2.5-2.1 4.6 3.4c.6.4 1.5.1 1.6-.6l3.3-15.1c.1-.6-.1-1.1-.7-1.6M8.6 13.9l9-6.1c.3-.2.6.1.3.4l-7.4 6.9-.3 3.4-1.3-4.6z"/></svg>
              </span>
              <span class="text-sm font-semibold group-hover:text-white transition">Telegram</span>
              <span class="ml-auto text-text-muted group-hover:text-white/80 transition">›</span>
            </button>

            <button type="button" onclick="submitOrder('messenger')" class="group flex items-center gap-3 w-full border border-brand-brown/10 hover:border-transparent hover:bg-[#0084FF] rounded-xl px-4 py-3 transition">
              <span class="w-9 h-9 rounded-full bg-[#0084FF]/10 group-hover:bg-white/20 flex items-center justify-center shrink-0 transition">
                <svg class="w-5 h-5 text-[#0084FF] group-hover:text-white transition" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.15 2 11.27c0 2.91 1.44 5.51 3.7 7.21V22l3.38-1.86c.9.25 1.86.38 2.87.38 5.52 0 10-4.15 10-9.27S17.52 2 12 2m1.02 12.48-2.55-2.72-4.98 2.72 5.48-5.82 2.61 2.72 4.92-2.72z"/></svg>
              </span>
              <span class="text-sm font-semibold group-hover:text-white transition">Messenger</span>
              <span class="ml-auto text-text-muted group-hover:text-white/80 transition">›</span>
            </button>

          </div>
          <p class="text-xs text-text-muted text-center pt-4">Your order details are sent along automatically where the app supports it.</p>
        </div>
      </form>
    </div>
  </div>

  <script>
    const WHATSAPP_NUMBER = "85512345678";     // country code + number, no spaces or plus sign
    const TELEGRAM_USERNAME = "rabbitschoolshop"; // your Telegram username, no @
    const MESSENGER_PAGE = "rabbitschoolcambodia"; // your Facebook Page username

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
      if (platform === 'whatsapp') {
        url = `https://wa.me/${WHATSAPP_NUMBER}?text=${encodeURIComponent(message)}`;
      } else if (platform === 'telegram') {
        url = `https://t.me/${TELEGRAM_USERNAME}?text=${encodeURIComponent(message)}`;
      } else if (platform === 'messenger') {
        navigator.clipboard?.writeText(message).catch(() => {});
        url = `https://m.me/${MESSENGER_PAGE}`;
        alert("Your order details were copied — just paste them into the Messenger chat that opens.");
      }

      window.open(url, '_blank');
      closeOrderModal();
    }

    function filterCategory(category, buttonEl) {
      const cards = document.querySelectorAll('#productGrid .product-card');
      cards.forEach(card => {
        card.classList.toggle('is-hidden', card.dataset.category !== category);
      });

      document.querySelectorAll('.cat-card').forEach(btn => btn.classList.remove('active'));
      if (buttonEl) buttonEl.classList.add('active');

      const statusBar = document.getElementById('filterStatus');
      statusBar.classList.remove('hidden');
      statusBar.classList.add('flex');
      document.getElementById('filterLabel').textContent =
        category.charAt(0).toUpperCase() + category.slice(1);

      document.getElementById('shop').scrollIntoView({ behavior: 'smooth', block: 'start' });
    }

    function clearFilter() {
      document.querySelectorAll('#productGrid .product-card').forEach(card => card.classList.remove('is-hidden'));
      document.querySelectorAll('.cat-card').forEach(btn => btn.classList.remove('active'));
      const statusBar = document.getElementById('filterStatus');
      statusBar.classList.add('hidden');
      statusBar.classList.remove('flex');
    }

    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') closeOrderModal();
    });
  </script>

</body>
</html>

<?php get_footer(); ?>