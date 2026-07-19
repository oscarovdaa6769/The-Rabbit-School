<?php get_header(); ?>


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
</style>
</head>
<body class="bg-white text-brand-brown">

  <!-- ============ HERO ============ -->
  <section class="relative overflow-hidden">
    <div class="absolute inset-0 -z-10">
      <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?q=80&w=1600&auto=format&fit=crop" alt="" class="w-full h-full object-cover">
      <div class="absolute inset-0 bg-brand-brown/80"></div>
    </div>

    <div class="max-w-4xl mx-auto text-center px-6 py-24 md:py-32">
      <p class="uppercase tracking-widest text-brand-yellow text-sm font-semibold mb-4">Shop with purpose</p>
      <h1 class="font-heading text-white text-4xl sm:text-5xl md:text-6xl tracking-tight leading-tight mb-6">
        Every Purchase Builds<br class="hidden sm:block"> A Future
      </h1>
      <p class="text-white/85 max-w-2xl mx-auto text-base md:text-lg leading-relaxed mb-10">
        Each item in this shop is made by students in Rabbit School's vocational program. Your order helps cover training, tools, and mentorship for the next student ready to learn a trade.
      </p>
      <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
        <a href="#shop" class="bg-brand-yellow text-brand-brown font-semibold px-8 py-3 rounded-full hover:bg-white transition">Shop Now</a>
        <a href="#categories" class="border border-white/40 text-white font-semibold px-8 py-3 rounded-full hover:bg-white/10 transition">Explore Collection</a>
      </div>
    </div>
  </section>

  <!-- ============ FEATURES STRIP ============ -->
  <section class="max-w-7xl mx-auto px-6 py-16">
    <div class="grid grid-cols-2 md:grid-cols-4 gap-8 md:gap-6 text-center">

      <div class="flex flex-col items-center gap-3">
        <div class="w-14 h-14 rounded-full bg-brand-yellow/20 flex items-center justify-center text-2xl">🚚</div>
        <h3 class="font-heading text-base">Free Shipping</h3>
        <p class="text-sm text-text-muted leading-snug">On orders over $30, delivered anywhere in Cambodia.</p>
      </div>

      <div class="flex flex-col items-center gap-3">
        <div class="w-14 h-14 rounded-full bg-brand-teal/20 flex items-center justify-center text-2xl">✋</div>
        <h3 class="font-heading text-base">Handmade with Care</h3>
        <p class="text-sm text-text-muted leading-snug">Every piece crafted by hand in our student workshops.</p>
      </div>

      <div class="flex flex-col items-center gap-3">
        <div class="w-14 h-14 rounded-full bg-brand-pink/20 flex items-center justify-center text-2xl">🎓</div>
        <h3 class="font-heading text-base">Funds Real Training</h3>
        <p class="text-sm text-text-muted leading-snug">100% of profit goes back into student scholarships.</p>
      </div>

      <div class="flex flex-col items-center gap-3">
        <div class="w-14 h-14 rounded-full bg-brand-orange/20 flex items-center justify-center text-2xl">🔒</div>
        <h3 class="font-heading text-base">Secure Checkout</h3>
        <p class="text-sm text-text-muted leading-snug">Pay safely by card, ABA, or Wing.</p>
      </div>

    </div>
  </section>

  <!-- ============ LATEST PRODUCTS ============ -->
  <section id="shop" class="bg-brand-cream py-20">
    <div class="max-w-7xl mx-auto px-6">
      <div class="flex items-end justify-between mb-10">
        <div>
          <p class="uppercase tracking-widest text-brand-orange text-xs font-semibold mb-2">From the workshop</p>
          <h2 class="font-heading text-3xl md:text-4xl">Latest Products</h2>
        </div>
        <a href="#" class="hidden sm:flex items-center gap-1 text-sm font-semibold text-brand-brown hover:text-brand-orange transition">
          View All <span class="icon-[solar--arrow-right-linear] w-4 h-4"></span>
        </a>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

        <!-- Product 1 -->
        <div class="product-card bg-white rounded-2xl overflow-hidden border border-brand-brown/5">
          <div class="aspect-[4/3] overflow-hidden">
            <img src="https://images.unsplash.com/photo-1622560480605-d83c853bc5c3?q=80&w=800&auto=format&fit=crop" alt="Woven rattan basket" class="w-full h-full object-cover">
          </div>
          <div class="p-5">
            <span class="text-xs font-semibold uppercase tracking-wide text-brand-teal">Weaving</span>
            <h3 class="font-heading text-lg mt-1 mb-1">Rattan Storage Basket</h3>
            <p class="text-sm text-text-muted mb-4">Hand-woven by our craft students, finished with a natural lacquer coat.</p>
            <div class="flex items-center justify-between">
              <span class="font-heading text-lg">$18.00</span>
              <a href="#" class="bg-brand-yellow text-brand-brown text-sm font-semibold px-4 py-2 rounded-full">Buy Now</a>
            </div>
          </div>
        </div>

        <!-- Product 2 -->
        <div class="product-card bg-white rounded-2xl overflow-hidden border border-brand-brown/5">
          <div class="aspect-[4/3] overflow-hidden">
            <img src="https://images.unsplash.com/photo-1591561954557-26941169b49e?q=80&w=800&auto=format&fit=crop" alt="Stitched cotton tote bag" class="w-full h-full object-cover">
          </div>
          <div class="p-5">
            <span class="text-xs font-semibold uppercase tracking-wide text-brand-pink">Sewing</span>
            <h3 class="font-heading text-lg mt-1 mb-1">Cotton Market Tote</h3>
            <p class="text-sm text-text-muted mb-4">Durable canvas tote stitched in our tailoring class, one size fits all.</p>
            <div class="flex items-center justify-between">
              <span class="font-heading text-lg">$12.50</span>
              <a href="#" class="bg-brand-yellow text-brand-brown text-sm font-semibold px-4 py-2 rounded-full">Buy Now</a>
            </div>
          </div>
        </div>

        <!-- Product 3 -->
        <div class="product-card bg-white rounded-2xl overflow-hidden border border-brand-brown/5">
          <div class="aspect-[4/3] overflow-hidden">
            <img src="https://images.unsplash.com/photo-1517686469429-8bdb88b9f907?q=80&w=800&auto=format&fit=crop" alt="Carved wooden serving tray" class="w-full h-full object-cover">
          </div>
          <div class="p-5">
            <span class="text-xs font-semibold uppercase tracking-wide text-brand-orange">Woodwork</span>
            <h3 class="font-heading text-lg mt-1 mb-1">Carved Serving Tray</h3>
            <p class="text-sm text-text-muted mb-4">Made from reclaimed mango wood by our carpentry apprentices.</p>
            <div class="flex items-center justify-between">
              <span class="font-heading text-lg">$24.00</span>
              <a href="#" class="bg-brand-yellow text-brand-brown text-sm font-semibold px-4 py-2 rounded-full">Buy Now</a>
            </div>
          </div>
        </div>

        <!-- Product 4 -->
        <div class="product-card bg-white rounded-2xl overflow-hidden border border-brand-brown/5">
          <div class="aspect-[4/3] overflow-hidden">
            <img src="https://images.unsplash.com/photo-1509440159596-0249088772ff?q=80&w=800&auto=format&fit=crop" alt="Fresh baked bread" class="w-full h-full object-cover">
          </div>
          <div class="p-5">
            <span class="text-xs font-semibold uppercase tracking-wide text-brand-yellow">Bakery</span>
            <h3 class="font-heading text-lg mt-1 mb-1">Sourdough Loaf</h3>
            <p class="text-sm text-text-muted mb-4">Baked fresh daily by students in our culinary vocational track.</p>
            <div class="flex items-center justify-between">
              <span class="font-heading text-lg">$5.00</span>
              <a href="#" class="bg-brand-yellow text-brand-brown text-sm font-semibold px-4 py-2 rounded-full">Buy Now</a>
            </div>
          </div>
        </div>

        <!-- Product 5 -->
        <div class="product-card bg-white rounded-2xl overflow-hidden border border-brand-brown/5">
          <div class="aspect-[4/3] overflow-hidden">
            <img src="https://images.unsplash.com/photo-1584917865442-de89df76afd3?q=80&w=800&auto=format&fit=crop" alt="Hand-painted ceramic mug" class="w-full h-full object-cover">
          </div>
          <div class="p-5">
            <span class="text-xs font-semibold uppercase tracking-wide text-brand-blue">Ceramics</span>
            <h3 class="font-heading text-lg mt-1 mb-1">Painted Clay Mug</h3>
            <p class="text-sm text-text-muted mb-4">Thrown and glazed by hand, no two pieces are exactly alike.</p>
            <div class="flex items-center justify-between">
              <span class="font-heading text-lg">$9.00</span>
              <a href="#" class="bg-brand-yellow text-brand-brown text-sm font-semibold px-4 py-2 rounded-full">Buy Now</a>
            </div>
          </div>
        </div>

        <!-- Product 6 -->
        <div class="product-card bg-white rounded-2xl overflow-hidden border border-brand-brown/5">
          <div class="aspect-[4/3] overflow-hidden">
            <img src="https://images.unsplash.com/photo-1620799140408-edc6dcb6d633?q=80&w=800&auto=format&fit=crop" alt="Embroidered pillow cover" class="w-full h-full object-cover">
          </div>
          <div class="p-5">
            <span class="text-xs font-semibold uppercase tracking-wide text-brand-pink">Sewing</span>
            <h3 class="font-heading text-lg mt-1 mb-1">Embroidered Cushion Cover</h3>
            <p class="text-sm text-text-muted mb-4">Traditional Khmer motifs hand-embroidered onto raw cotton.</p>
            <div class="flex items-center justify-between">
              <span class="font-heading text-lg">$15.00</span>
              <a href="#" class="bg-brand-yellow text-brand-brown text-sm font-semibold px-4 py-2 rounded-full">Buy Now</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ============ CATEGORIES ============ -->
  <section id="categories" class="py-20">
    <div class="max-w-7xl mx-auto px-6 text-center">
      <p class="uppercase tracking-widest text-brand-orange text-xs font-semibold mb-2">Shop by craft</p>
      <h2 class="font-heading text-3xl md:text-4xl mb-3">Categories</h2>
      <p class="text-text-muted max-w-xl mx-auto mb-12">Every category represents a real vocational track our students train in.</p>

      <div class="grid grid-cols-2 md:grid-cols-4 gap-6">

        <a href="#" class="cat-card relative rounded-2xl overflow-hidden aspect-[4/5] block group">
          <img src="https://images.unsplash.com/photo-1622560480605-d83c853bc5c3?q=80&w=600&auto=format&fit=crop" alt="Weaving category" class="w-full h-full object-cover">
          <div class="absolute inset-0 bg-gradient-to-t from-brand-brown/80 via-brand-brown/10 to-transparent"></div>
          <span class="absolute bottom-4 left-4 bg-white text-brand-brown text-xs font-semibold px-3 py-1.5 rounded-full">Weaving</span>
        </a>

        <a href="#" class="cat-card relative rounded-2xl overflow-hidden aspect-[4/5] block group">
          <img src="https://images.unsplash.com/photo-1591561954557-26941169b49e?q=80&w=600&auto=format&fit=crop" alt="Sewing category" class="w-full h-full object-cover">
          <div class="absolute inset-0 bg-gradient-to-t from-brand-brown/80 via-brand-brown/10 to-transparent"></div>
          <span class="absolute bottom-4 left-4 bg-white text-brand-brown text-xs font-semibold px-3 py-1.5 rounded-full">Sewing</span>
        </a>

        <a href="#" class="cat-card relative rounded-2xl overflow-hidden aspect-[4/5] block group">
          <img src="https://images.unsplash.com/photo-1517686469429-8bdb88b9f907?q=80&w=600&auto=format&fit=crop" alt="Woodwork category" class="w-full h-full object-cover">
          <div class="absolute inset-0 bg-gradient-to-t from-brand-brown/80 via-brand-brown/10 to-transparent"></div>
          <span class="absolute bottom-4 left-4 bg-white text-brand-brown text-xs font-semibold px-3 py-1.5 rounded-full">Woodwork</span>
        </a>

        <a href="#" class="cat-card relative rounded-2xl overflow-hidden aspect-[4/5] block group">
          <img src="https://images.unsplash.com/photo-1509440159596-0249088772ff?q=80&w=600&auto=format&fit=crop" alt="Bakery category" class="w-full h-full object-cover">
          <div class="absolute inset-0 bg-gradient-to-t from-brand-brown/80 via-brand-brown/10 to-transparent"></div>
          <span class="absolute bottom-4 left-4 bg-white text-brand-brown text-xs font-semibold px-3 py-1.5 rounded-full">Bakery</span>
        </a>

      </div>
    </div>
  </section>

  <!-- ============ CTA / DONATE STRIP ============ -->
  <section class="bg-brand-brown">
    <div class="max-w-5xl mx-auto px-6 py-16 text-center">
      <h2 class="font-heading text-white text-2xl md:text-3xl mb-4">Not ready to buy? You can still help.</h2>
      <p class="text-white/80 max-w-xl mx-auto mb-8">A donation covers materials and mentorship for a student who isn't selling yet — but is learning.</p>
      <a href="#" class="inline-flex items-center gap-2 bg-brand-yellow text-brand-brown font-semibold px-8 py-3 rounded-full">
        <span class="icon-[solar--heart-bold] w-4 h-4"></span> Donate Instead
      </a>
    </div>
  </section>


</body>
</html>


<?php get_footer(); ?>