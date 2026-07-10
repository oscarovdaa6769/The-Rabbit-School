<footer class="bg-brand-brown text-white py-16 px-6 mt-auto border-t border-white/5">
      <div class="max-w-7xl mx-auto text-sm">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-12 gap-8 lg:gap-6 pb-12 border-b border-white/10">
                  
                  <div class="sm:col-span-2 md:col-span-3 lg:col-span-3 flex flex-col gap-6 items-start">
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-3 transition-transform duration-300">
                              <img src="<?php echo esc_url(get_theme_file_uri('assets/images/logo2.png')); ?>"
                                   alt="<?php echo esc_attr(get_bloginfo('name')); ?> Logo"
                                   class="h-14 w-auto object-contain invert brightness-0" />
                        </a>
<<<<<<< HEAD
                        <a href="#" class="group w-full sm:w-auto bg-brand-yellow text-brand-brown font-bold text-sm px-6 py-3 rounded-full shadow-lg hover:scale-105 active:scale-95 transition-all inline-flex gap-2 items-center justify-center uppercase tracking-wider">
                              <span class="icon-[solar--heart-bold] w-5 h-5"></span>
                              <span>Donate</span>
                              <span class="icon-[solar--arrow-right-linear] w-5 h-5 transition-transform duration-300 group-hover:translate-x-1"></span>
                        </a>
=======
                        <?php
                        $locations = get_nav_menu_locations();
                        if ( isset( $locations['donate'] ) && $menu = wp_get_nav_menu_object( $locations['donate'] ) ) {
                        $menu_items = wp_get_nav_menu_items( $menu->term_id );
                        if ( ! empty( $menu_items ) ) {
                              $donate = $menu_items[0];
                              
                              // Dynamic Title: Fallback to a translatable string if the menu item title is empty
                              $btn_title = ! empty( $donate->title ) ? $donate->title : __( 'Donate', 'rabbit-school' );
                              ?>
                              <a href="<?php echo esc_url( $donate->url ); ?>" class="group bg-brand-yellow text-brand-brown font-bold text-sm px-[24px] py-[10px] rounded-[8px] shadow-sm hover:scale-105 active:scale-95 transition-all flex gap-2 items-center tracking-wider uppercase">
                                    <span class="icon-[solar--heart-bold] w-5 h-5"></span>
                                    <span class="font-sans"><?php echo esc_html( $btn_title ); ?></span>
                                    <div class="hidden sm:inline-flex items-center transition-all duration-300 transform opacity-0 -translate-x-2 group-hover:opacity-100 group-hover:translate-x-0">
                                    <span class="icon-[solar--arrow-right-linear] w-5 h-5 text-brand-brown"></span>
                                    </div>
                              </a>
                              <?php
                        }
                        }
                        ?>
>>>>>>> 0c338b92074e8356bcf2f5e73e9325df5cc5a01c
                  </div>

                  <div class="lg:col-span-2 flex flex-col gap-4">
                        <h3 class="text-brand-yellow font-bold text-sm uppercase tracking-widest opacity-95">Our Program</h3>
                        <?php wp_nav_menu(array(
                              'theme_location' => 'our-program-footer',
                              'container' => false,
                              'menu_class' => 'flex flex-col gap-2.5 font-medium text-white/80
                              [&_a]:transition-all [&_a]:duration-200 [&_a]:inline-block
                              [&_a:hover]:text-brand-yellow [&_a:hover]:translate-x-1'
                        ));?>
                  </div>

                  <div class="lg:col-span-2 flex flex-col gap-4">
                        <h3 class="text-brand-yellow font-bold text-sm uppercase tracking-widest opacity-95">About Us</h3>
                        <?php wp_nav_menu(array(
                              'theme_location' => 'about-us-footer',
                              'container' => false,
                              'menu_class' => 'flex flex-col gap-2.5 font-medium text-white/80
                              [&_a]:transition-all [&_a]:duration-200 [&_a]:inline-block
                              [&_a:hover]:text-brand-yellow [&_a:hover]:translate-x-1'
                        ));?>
                  </div>

                  <div class="lg:col-span-1 flex flex-col gap-4">
                        <h3 class="text-brand-yellow font-bold text-sm uppercase tracking-widest opacity-95">News</h3>
                        <?php wp_nav_menu(array(
                              'theme_location' => 'news-footer',
                              'container' => false,
                              'menu_class' => 'flex flex-col gap-2.5 font-medium text-white/80
                              [&_a]:transition-all [&_a]:duration-200 [&_a]:inline-block
                              [&_a:hover]:text-brand-yellow [&_a:hover]:translate-x-1'
                        ));?>
                  </div>

                  <div class="lg:col-span-2 flex flex-col gap-4">
                        <h3 class="text-brand-yellow font-bold text-sm uppercase tracking-widest opacity-95">Get Involved</h3>
                        <?php wp_nav_menu(array(
                              'theme_location' => 'get-involved-footer',
                              'container' => false,
                              'menu_class' => 'flex flex-col gap-2.5 font-medium text-white/80
                              [&_a]:transition-all [&_a]:duration-200 [&_a]:inline-block
                              [&_a:hover]:text-brand-yellow [&_a:hover]:translate-x-1'
                        ));?>
                  </div>

                  <div class="sm:col-span-2 md:col-span-1 lg:col-span-2 flex flex-col gap-4">
                        <h3 class="text-brand-yellow font-bold text-sm uppercase tracking-widest opacity-95">Contact</h3>
                        <ul class="flex flex-col gap-3 text-white/80 font-medium">
                              <li>
                                    <a href="mailto:info@rabbitschoolcambodia.net" class="hover:text-brand-yellow transition-all flex items-start gap-2.5 group">
<<<<<<< HEAD
                                          <span class="icon-[solar--letter-linear] w-5 h-5 shrink-0 text-white/60 group-hover:text-brand-yellow transition-colors"></span>
=======
                                          <span class="icon-[solar--letter-bold] w-5 h-5 shrink-0 text-white/60 group-hover:text-brand-yellow transition-colors"></span>
>>>>>>> 0c338b92074e8356bcf2f5e73e9325df5cc5a01c
                                          <span class="break-all">info@rabbitschoolcambodia.net</span>
                                    </a>
                              </li>
                              <li class="flex items-start gap-2.5">
<<<<<<< HEAD
                                    <span class="icon-[solar--phone-linear] w-5 h-5 shrink-0 text-white/60"></span>
                                    <span class="leading-tight">(+855) 68 901 971<br>(+855) 17 525 815</span>
                              </li>
                              <li class="flex items-start gap-2.5">
                                    <span class="icon-[solar--map-point-linear] w-5 h-5 shrink-0 text-white/60"></span>
=======
                                    <span class="icon-[solar--phone-bold] w-5 h-5 shrink-0 text-white/60"></span>
                                    <span class="leading-tight">(+855) 68 901 971<br>(+855) 17 525 815</span>
                              </li>
                              <li class="flex items-start gap-2.5">
                                    <span class="icon-[solar--map-point-bold] w-5 h-5 shrink-0 text-white/60"></span>
>>>>>>> 0c338b92074e8356bcf2f5e73e9325df5cc5a01c
                                    <span class="leading-snug">Toul Kork Primary School, Phnom Penh</span>
                              </li>
                        </ul>
                  </div>

            </div>

            <div class="pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-white/60 text-xs font-medium">
                  <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
                  
                  <div class="flex items-center gap-4">
                        <span class="uppercase tracking-wider opacity-60 text-[10px] font-bold">Follow Us</span>
                        <div class="flex items-center gap-2">
                              <a href="#" class="w-8 h-8 rounded-full bg-white/5 hover:bg-brand-yellow hover:text-brand-brown flex items-center justify-center transition-all duration-300" aria-label="Facebook">
<<<<<<< HEAD
                                    <span class="icon-[solar--users-group-rounded-linear] w-4 h-4"></span>
                              </a>
                              <a href="#" class="w-8 h-8 rounded-full bg-white/5 hover:bg-brand-yellow hover:text-brand-brown flex items-center justify-center transition-all duration-300" aria-label="YouTube">
                                    <span class="icon-[solar--videocamera-record-linear] w-4 h-4"></span>
=======
                                    <span class="icon-[solar--users-group-rounded-bold] w-4 h-4"></span>
                              </a>
                              <a href="#" class="w-8 h-8 rounded-full bg-white/5 hover:bg-brand-yellow hover:text-brand-brown flex items-center justify-center transition-all duration-300" aria-label="YouTube">
                                    <span class="icon-[solar--videocamera-record-bold] w-4 h-4"></span>
>>>>>>> 0c338b92074e8356bcf2f5e73e9325df5cc5a01c
                              </a>
                        </div>
                  </div>
            </div>
      </div>
</footer>

      <?php wp_footer(); ?>
</body>
</html>
