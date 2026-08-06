<footer class="bg-brand-brown text-white py-12 lg:py-16 px-4 sm:px-6 lg:px-8 mt-auto border-t border-white/5 font-sans">
  <div class="max-w-7xl mx-auto text-sm">
    
    <!-- Responsive Grid: Center on Mobile, Left-align on Tablet & Desktop -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-12 gap-8 lg:gap-6 pb-12 border-b border-white/10 text-center sm:text-left">
      
      <!-- Column 1: Brand & Donate CTA -->
      <div class="sm:col-span-2 lg:col-span-3 flex flex-col gap-6 items-center sm:items-start">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex items-center justify-center sm:justify-start gap-3 transition-transform duration-300 hover:opacity-90">
          <img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/logo2.png' ) ); ?>"
               alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?> Logo"
               class="h-14 w-auto object-contain invert brightness-0" />
        </a>

        <?php
        $locations = get_nav_menu_locations();
        if ( isset( $locations['donate'] ) && $menu = wp_get_nav_menu_object( $locations['donate'] ) ) {
          $menu_items = wp_get_nav_menu_items( $menu->term_id );
          if ( ! empty( $menu_items ) ) {
            $donate    = $menu_items[0];
            $btn_title = ! empty( $donate->title ) ? $donate->title : __( 'Donate', 'rabbit-school' );
            ?>
            <a href="<?php echo esc_url( $donate->url ); ?>" 
               class="group bg-brand-yellow hover:bg-brand-orange text-brand-brown hover:text-white font-bold text-sm px-6 py-3 rounded-[8px] shadow-md hover:shadow-xl hover:scale-105 active:scale-95 transition-all duration-300 flex items-center gap-2 tracking-wider uppercase no-underline">
              <span class="icon-[solar--heart-bold] w-5 h-5 flex-shrink-0" aria-hidden="true"></span>
              <span><?php echo esc_html( $btn_title ); ?></span>
              <div class="hidden sm:inline-flex items-center transition-all duration-300 transform opacity-0 -translate-x-2 group-hover:opacity-100 group-hover:translate-x-0">
                <span class="icon-[solar--arrow-right-linear] w-5 h-5 text-white" aria-hidden="true"></span>
              </div>
            </a>
            <?php
          }
        }
        ?>
      </div>

      <!-- Column 2: Our Program -->
      <div class="lg:col-span-2 flex flex-col gap-4">
        <h3 class="font-heading text-brand-yellow font-bold text-sm uppercase tracking-widest opacity-95">
          <?php 
          if ( function_exists( 'pll_current_language' ) && pll_current_language() === 'km' ) {
            echo 'កម្មវិធីរបស់យើង';
          } else {
            echo esc_html__( 'Our Program', 'rabbit-school' );
          }
          ?>
        </h3>
        <?php wp_nav_menu( array(
          'theme_location' => 'our-program-footer',
          'container'      => false,
          'menu_class'     => 'flex flex-col gap-2.5 font-medium text-white/80 list-none p-0 m-0 items-center sm:items-start
                               [&_a]:transition-all [&_a]:duration-200 [&_a]:inline-block [&_a]:no-underline [&_a]:text-white/80
                               [&_a:hover]:text-brand-yellow [&_a:hover]:translate-x-1'
        ) ); ?>
      </div>

      <!-- Column 3: About Us -->
      <div class="lg:col-span-2 flex flex-col gap-4">
        <h3 class="font-heading text-brand-yellow font-bold text-sm uppercase tracking-widest opacity-95">
          <?php 
          if ( function_exists( 'pll_current_language' ) && pll_current_language() === 'km' ) {
            echo 'អំពីយើង';
          } else {
            echo esc_html__( 'About Us', 'rabbit-school' );
          }
          ?>
        </h3>
        <?php wp_nav_menu( array(
          'theme_location' => 'about-us-footer',
          'container'      => false,
          'menu_class'     => 'flex flex-col gap-2.5 font-medium text-white/80 list-none p-0 m-0 items-center sm:items-start
                               [&_a]:transition-all [&_a]:duration-200 [&_a]:inline-block [&_a]:no-underline [&_a]:text-white/80
                               [&_a:hover]:text-brand-yellow [&_a:hover]:translate-x-1'
        ) ); ?>
      </div>

      <!-- Column 4: News -->
      <div class="lg:col-span-1 flex flex-col gap-4">
        <h3 class="font-heading text-brand-yellow font-bold text-sm uppercase tracking-widest opacity-95">
          <?php 
          if ( function_exists( 'pll_current_language' ) && pll_current_language() === 'km' ) {
            echo 'ព័ត៌មាន';
          } else {
            echo esc_html__( 'News', 'rabbit-school' );
          }
          ?>
        </h3>
        <?php wp_nav_menu( array(
          'theme_location' => 'news-footer',
          'container'      => false,
          'menu_class'     => 'flex flex-col gap-2.5 font-medium text-white/80 list-none p-0 m-0 items-center sm:items-start
                               [&_a]:transition-all [&_a]:duration-200 [&_a]:inline-block [&_a]:no-underline [&_a]:text-white/80
                               [&_a:hover]:text-brand-yellow [&_a:hover]:translate-x-1'
        ) ); ?>
      </div>

      <!-- Column 5: Get Involved -->
      <div class="lg:col-span-2 flex flex-col gap-4">
        <h3 class="font-heading text-brand-yellow font-bold text-sm uppercase tracking-widest opacity-95">
          <?php 
          if ( function_exists( 'pll_current_language' ) && pll_current_language() === 'km' ) {
            echo 'ចូលរួម';
          } else {
            echo esc_html__( 'Get Involved', 'rabbit-school' );
          }
          ?>
        </h3>
        <?php wp_nav_menu( array(
          'theme_location' => 'get-involved-footer',
          'container'      => false,
          'menu_class'     => 'flex flex-col gap-2.5 font-medium text-white/80 list-none p-0 m-0 items-center sm:items-start
                               [&_a]:transition-all [&_a]:duration-200 [&_a]:inline-block [&_a]:no-underline [&_a]:text-white/80
                               [&_a:hover]:text-brand-yellow [&_a:hover]:translate-x-1'
        ) ); ?>
      </div>

      <!-- Column 6: Contact Info -->
      <div class="sm:col-span-2 lg:col-span-2 flex flex-col gap-4">
        <h3 class="font-heading text-brand-yellow font-bold text-sm uppercase tracking-widest opacity-95">
          <?php 
          if ( function_exists( 'pll_current_language' ) && pll_current_language() === 'km' ) {
            echo 'ទំនាក់ទំនង';
          } else {
            echo esc_html__( 'Contact', 'rabbit-school' );
          }
          ?>
        </h3>
        <ul class="flex flex-col gap-3 text-white/80 font-medium p-0 m-0 list-none items-center sm:items-start">
          <li>
            <a href="mailto:info@rabbitschoolcambodia.net" class="hover:text-brand-yellow transition-all flex items-start justify-center sm:justify-start gap-2.5 group no-underline text-white/80">
              <span class="icon-[material-symbols--mail-outline-rounded] w-5 h-5 shrink-0 text-white/60 group-hover:text-brand-yellow transition-colors mt-0.5" aria-hidden="true"></span>
              <span class="break-all">info@rabbitschoolcambodia.net</span>
            </a>
          </li>
          <li>
            <div class="flex items-start justify-center sm:justify-start gap-2.5">
              <span class="icon-[material-symbols--call] w-5 h-5 shrink-0 text-white/60 mt-0.5" aria-hidden="true"></span>
              <span class="leading-tight flex flex-wrap items-center justify-center sm:justify-start gap-x-1 text-white/80">
                <a href="tel:+85568901971" class="hover:text-brand-yellow transition-all no-underline text-white/80">(+855) 68 901 971</a>
                <span>/</span>
                <a href="tel:+85517525815" class="hover:text-brand-yellow transition-all no-underline text-white/80">17 525 815</a>
              </span>
            </div>
          </li>
          <li class="flex items-start justify-center sm:justify-start gap-2.5">
            <span class="icon-[material-symbols--location-on] w-5 h-5 shrink-0 text-white/60 mt-0.5" aria-hidden="true"></span>
            <span class="leading-snug">
              <?php 
              if ( function_exists( 'pll_current_language' ) && pll_current_language() === 'km' ) {
                echo 'សាលាបឋមសិក្សាទួលគោក រាជធានីភ្នំពេញ';
              } else {
                echo esc_html__( 'Toul Kork Primary School, Phnom Penh', 'rabbit-school' );
              }
              ?>
            </span>
          </li>
        </ul>
      </div>

    </div>

    <!-- Copyright -->
    <div class="pt-8 text-center text-white/60 text-sm font-medium">
      <p>&copy; <?php echo date( 'Y' ); ?> <?php echo esc_html__( 'The Rabbit School. All rights reserved.', 'rabbit-school' ); ?></p>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>