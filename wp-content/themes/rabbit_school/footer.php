<footer class="bg-brand-brown text-white py-16 px-6 mt-auto border-t border-white/5">
      <div class="max-w-7xl mx-auto text-sm">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-12 gap-8 lg:gap-6 pb-12 border-b border-white/10">
                  
                  <div class="sm:col-span-2 md:col-span-3 lg:col-span-3 flex flex-col gap-6 items-start">
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-3 transition-transform duration-300">
                              <img src="<?php echo esc_url(get_theme_file_uri('assets/images/logo2.png')); ?>"
                                   alt="<?php echo esc_attr(get_bloginfo('name')); ?> Logo"
                                   class="h-14 w-auto object-contain invert brightness-0" />
                        </a>
                        <?php
                        $locations = get_nav_menu_locations();
                        if ( isset( $locations['donate'] ) && $menu = wp_get_nav_menu_object( $locations['donate'] ) ) {
                        $menu_items = wp_get_nav_menu_items( $menu->term_id );
                        if ( ! empty( $menu_items ) ) {
                              $donate = $menu_items[0];
                              
                              // Dynamic Title: Fallback to a translatable string if the menu item title is empty
                              $btn_title = ! empty( $donate->title ) ? $donate->title : __( 'Donate', 'rabbit-school' );
                              ?>
                              <a href="<?php echo esc_url( $donate->url ); ?>" class="group bg-brand-yellow hover:bg-brand-orange text-text-main/80 hover:text-text-light font-bold text-sm px-[24px] py-[10px] rounded-[8px] shadow-sm hover:scale-105 active:scale-95 transition-all flex gap-2 items-center tracking-wider uppercase">
                                    <span class="icon-[solar--heart-bold] w-5 h-5"></span>
                                    <span class="font-sans"><?php echo esc_html( $btn_title ); ?></span>
                                    <div class="hidden sm:inline-flex items-center transition-all duration-300 transform opacity-0 -translate-x-2 group-hover:opacity-100 group-hover:translate-x-0">
                                    <span class="icon-[solar--arrow-right-linear] w-5 h-5 text-text-light"></span>
                                    </div>
                              </a>
                              <?php
                        }
                        }
                        ?>
                  </div>

                  <div class="lg:col-span-2 flex flex-col gap-4">
                        <h3 class="text-brand-yellow font-bold text-sm uppercase tracking-widest opacity-95">
                              <?php 
                              if ( function_exists('pll_current_language') && pll_current_language() == 'km' ) {
                                    echo 'កម្មវិធីរបស់យើង';
                              } else {
                                    echo 'Our Program';
                              }
                              ?>
                        </h3>
                        <?php wp_nav_menu(array(
                              'theme_location' => 'our-program-footer',
                              'container' => false,
                              'menu_class' => 'flex flex-col gap-2.5 font-medium text-white/80
                              [&_a]:transition-all [&_a]:duration-200 [&_a]:inline-block
                              [&_a:hover]:text-brand-yellow [&_a:hover]:translate-x-1'
                        ));?>
                  </div>

                  <div class="lg:col-span-2 flex flex-col gap-4">
                        <h3 class="text-brand-yellow font-bold text-sm uppercase tracking-widest opacity-95">
                              <?php 
                              if ( function_exists('pll_current_language') && pll_current_language() == 'km' ) {
                                    echo 'អំពីយើង';
                              } else {
                                    echo 'About Us';
                              }
                              ?>
                        </h3>
                        <?php wp_nav_menu(array(
                              'theme_location' => 'about-us-footer',
                              'container' => false,
                              'menu_class' => 'flex flex-col gap-2.5 font-medium text-white/80
                              [&_a]:transition-all [&_a]:duration-200 [&_a]:inline-block
                              [&_a:hover]:text-brand-yellow [&_a:hover]:translate-x-1'
                        ));?>
                  </div>

                  <div class="lg:col-span-1 flex flex-col gap-4">
                        <h3 class="text-brand-yellow font-bold text-sm uppercase tracking-widest opacity-95">
                              <?php 
                              if ( function_exists('pll_current_language') && pll_current_language() == 'km' ) {
                                    echo 'ព័ត៌មាន';
                              } else {
                                    echo 'News';
                              }
                              ?>
                        </h3>
                        <?php wp_nav_menu(array(
                              'theme_location' => 'news-footer',
                              'container' => false,
                              'menu_class' => 'flex flex-col gap-2.5 font-medium text-white/80
                              [&_a]:transition-all [&_a]:duration-200 [&_a]:inline-block
                              [&_a:hover]:text-brand-yellow [&_a:hover]:translate-x-1'
                        ));?>
                  </div>

                  <div class="lg:col-span-2 flex flex-col gap-4">
                        <h3 class="text-brand-yellow font-bold text-sm uppercase tracking-widest opacity-95">
                              <?php 
                              if ( function_exists('pll_current_language') && pll_current_language() == 'km' ) {
                                    echo 'ចូលរួម';
                              } else {
                                    echo 'Get Involved';
                              }
                              ?>
                        </h3>
                        <?php wp_nav_menu(array(
                              'theme_location' => 'get-involved-footer',
                              'container' => false,
                              'menu_class' => 'flex flex-col gap-2.5 font-medium text-white/80
                              [&_a]:transition-all [&_a]:duration-200 [&_a]:inline-block
                              [&_a:hover]:text-brand-yellow [&_a:hover]:translate-x-1'
                        ));?>
                  </div>

                  <div class="sm:col-span-2 md:col-span-1 lg:col-span-2 flex flex-col gap-4">
                        <h3 class="text-brand-yellow font-bold text-sm uppercase tracking-widest opacity-95">
                              <?php 
                              if ( function_exists('pll_current_language') && pll_current_language() == 'km' ) {
                                    echo 'ទំនាក់ទំនង';
                              } else {
                                    echo 'Contact';
                              }
                              ?>
                        </h3>
                        <ul class="flex flex-col gap-3 text-white/80 font-medium">
                              <li>
                                    <a href="mailto:info@rabbitschoolcambodia.net" class="hover:text-brand-yellow transition-all flex items-start gap-2.5 group">
                                          <span class="icon-[material-symbols--mail-outline-rounded] w-5 h-5 shrink-0 text-white/60 group-hover:text-brand-yellow transition-colors"></span>
                                          <span class="break-all">
                                                info@rabbitschoolcambodia.net
                                          </span>
                                    </a>
                              </li>
                              <li class="flex items-start gap-2.5">
                                    <span class="icon-[material-symbols--call] w-5 h-5 shrink-0 text-white/60"></span>
                                    <span class="leading-tight">
                                          (+855) 68 901 971
                                          <br>
                                          (+855) 17 525 815
                                    </span>
                              </li>
                              <li class="flex items-start gap-2.5">
                                    <span class="icon-[material-symbols--location-on] w-5 h-5 shrink-0 text-white/60"></span>
                                    <span class="leading-snug">
                                          <?php 
                                          if ( function_exists('pll_current_language') && pll_current_language() == 'km' ) {
                                                echo 'សាលាបឋមសិក្សាទួលគោក រាជធានីភ្នំពេញ';
                                          } else {
                                                echo 'Toul Kork Primary School, Phnom Penh';
                                          }
                                          ?>
                                    </span>
                              </li>
                        </ul>
                  </div>

            </div>

            <div class="pt-8 text-white/60 text-sm font-medium">
                  <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
            </div>
      </div>
</footer>

      <?php wp_footer(); ?>
</body>
</html>
