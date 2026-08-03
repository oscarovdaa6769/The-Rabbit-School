<footer class="bg-brand-brown text-white py-[64px] md:py-[50px] px-[20px] 2xl:px-0 mt-auto border-t border-white/5 font-sans">
  <div class="max-w-7xl mx-auto text-sm">
    <div class="flex justify-between items-start w-full pb-12 border-b border-white/10">
      
      <!-- Brand & Donate CTA -->
      <div class="flex flex-col gap-6 items-start">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex items-center gap-3 transition-transform duration-300 hover:opacity-90">
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
               class="group bg-brand-yellow hover:bg-brand-orange text-brand-brown hover:text-white font-bold text-sm px-[24px] py-[12px] rounded-[8px] shadow-md hover:shadow-xl hover:scale-105 active:scale-95 transition-all duration-300 flex items-center gap-2 tracking-wider uppercase no-underline">
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

      <!-- Footer Menu 1: Our Program -->
      <div class="flex flex-col gap-4">
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
          'menu_class'     => 'flex flex-col gap-2.5 font-medium text-white/80
                               [&_a]:transition-all [&_a]:duration-200 [&_a]:inline-block
                               [&_a:hover]:text-brand-yellow [&_a:hover]:translate-x-1'
        ) ); ?>
      </div>

      <!-- Footer Menu 2: About Us -->
      <div class="flex flex-col gap-4">
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
          'menu_class'     => 'flex flex-col gap-2.5 font-medium text-white/80
                               [&_a]:transition-all [&_a]:duration-200 [&_a]:inline-block
                               [&_a:hover]:text-brand-yellow [&_a:hover]:translate-x-1'
        ) ); ?>
      </div>

      <!-- Footer Menu 3: News -->
      <div class="flex flex-col gap-4">
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
          'menu_class'     => 'flex flex-col gap-2.5 font-medium text-white/80
                               [&_a]:transition-all [&_a]:duration-200 [&_a]:inline-block
                               [&_a:hover]:text-brand-yellow [&_a:hover]:translate-x-1'
        ) ); ?>
      </div>

      <!-- Footer Menu 4: Get Involved -->
      <div class="flex flex-col gap-4">
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
          'menu_class'     => 'flex flex-col gap-2.5 font-medium text-white/80
                               [&_a]:transition-all [&_a]:duration-200 [&_a]:inline-block
                               [&_a:hover]:text-brand-yellow [&_a:hover]:translate-x-1'
        ) ); ?>
      </div>

      <!-- Contact Info -->
      <div class="sm:col-span-2 md:col-span-1 lg:col-span-2 flex flex-col gap-4">
        <h3 class="font-heading text-brand-yellow font-bold text-sm uppercase tracking-widest opacity-95">
          <?php 
          if ( function_exists( 'pll_current_language' ) && pll_current_language() === 'km' ) {
            echo 'ទំនាក់ទំនង';
          } else {
            echo esc_html__( 'Contact', 'rabbit-school' );
          }
          ?>
        </h3>
        <ul class="flex flex-col gap-3 text-white/80 font-medium p-0 m-0 list-none">
          <li>
            <a href="mailto:info@rabbitschoolcambodia.net" class="hover:text-brand-yellow transition-all flex items-start gap-2.5 group no-underline">
              <span class="icon-[material-symbols--mail-outline-rounded] w-5 h-5 shrink-0 text-white/60 group-hover:text-brand-yellow transition-colors mt-0.5" aria-hidden="true"></span>
              <span class="break-all">info@rabbitschoolcambodia.net</span>
            </a>
          </li>
          <li>
            <div class="flex items-start gap-2.5">
              <span class="icon-[material-symbols--call] w-5 h-5 shrink-0 text-white/60 mt-0.5" aria-hidden="true"></span>
              <span class="leading-tight flex flex-col gap-1">
                <a href="tel:+85568901971" class="hover:text-brand-yellow transition-all no-underline text-white/80">(+855) 68 901 971</a>
                <a href="tel:+85517525815" class="hover:text-brand-yellow transition-all no-underline text-white/80">(+855) 17 525 815</a>
              </span>
            </div>
          </li>
          <li class="flex items-start gap-2.5">
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
      <p>&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>. <?php echo esc_html__( 'All rights reserved.', 'rabbit-school' ); ?></p>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>