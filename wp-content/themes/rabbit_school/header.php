<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
      <meta charset="<?php bloginfo('charset'); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Battambang:wght@100;300;400;700;900&family=Inter:opsz@14..32&family=Koulen&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
      <?php wp_head(); ?>
</head>
<body <?php body_class('bg-brand-cream text-text-main font-sans min-h-screen flex flex-col'); ?>> 

      <header class="bg-white sticky top-0 z-[1000] border-b border-gray-100 px-4 sm:px-6 lg:px-8">
            <div class="max-w-7xl mx-auto flex items-center justify-between h-24">
                  
                  <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-3 group shrink-0">
                        <img src="<?php echo get_theme_file_uri('assets/images/logo.png'); ?>"
                        alt="<?php bloginfo('name'); ?> Logo"
                        class="h-16 sm:h-20 w-auto object-contain transition-transform duration-300"/>
                  </a>

                  <nav class="hidden lg:flex items-center font-semibold text-sm">
                        <?php wp_nav_menu(array(
                              'theme_location' => 'navigation-menu', 
                              'container' => false, 
                              'menu_class' => 'flex items-center gap-[10px] font-semibold text-sm 
                              [&_a]:transition-all [&_a]:duration-300 [&_a]:ease-in-out [&_a]:px-[20px] [&_a]:py-[10px] [&_a]:rounded-full [&_a]:border-2 [&_a]:border-transparent [&_a]:ring-2 [&_a]:ring-transparent
                              [&_a:hover]:text-text-light [&_a:hover]:bg-brand-brown 
                              [&_.current-menu-item_a]:bg-brand-brown [&_.current-menu-item_a]:text-text-light [&_.current-menu-item_a]:border-white [&_.current-menu-item_a]:ring-brand-brown'));?>
                  </nav>

                  <div class="flex items-center gap-[10px] sm:gap-4">
                        
                        <div class="hidden sm:inline-block text-left group relative">
                              <button class="text-sm font-semibold text-text-main hover:bg-brand-brown hover:text-text-light flex items-center gap-2 border border-brand-brown px-[24px] py-[10px] rounded-[8px] transition-colors duration-200 focus:outline-none">
                                    <span class="icon-[solar--global-bold] w-5 h-5"></span>
                                    
                                    <span>
                                          <?php 
                                          if (function_exists('pll_current_language')) {
                                          echo esc_html(pll_current_language('name')); 
                                          } 
                                          elseif (defined('ICL_LANGUAGE_CODE')) {
                                          $languages = apply_filters('wpml_active_languages', NULL);
                                          if (!empty($languages)) {
                                                foreach ($languages as $l) {
                                                      if ($l['active']) {
                                                      echo esc_html($l['native_name']);
                                                      break;
                                                      }
                                                }
                                          }
                                          } 
                                          else {
                                          $locale = get_locale();
                                          echo esc_html($locale === 'km' || $locale === 'km_KH' ? 'Khmer' : 'English');
                                          }
                                          ?>
                                    </span>
                                    
                                    <span class="icon-[solar--alt-arrow-down-line-duotone] w-5 h-5 transition-transform duration-200 group-hover:rotate-180"></span>
                              </button>

                              <div class="absolute right-0 pt-2 w-40 hidden group-hover:block z-50 transition-all duration-200">
                                    <div class="bg-brand-cream border border-brand-brown/20 rounded-[12px] shadow-lg py-2
                                                [&_ul]:list-none [&_ul]:p-0 [&_ul]:m-0 
                                                [&_a]:block [&_a]:px-4 [&_a]:py-2 [&_a]:text-sm [&_a]:text-text-main [&_a]:font-semibold [&_a]:transition-colors [&_a]:duration-150
                                                [&_a]:hover:bg-brand-brown [&_a]:hover:text-text-light">
                                          <?php 
                                          wp_nav_menu(array(
                                          'theme_location' => 'language-switcher', 
                                          'container'      => false,
                                          )); 
                                          ?>
                                    </div>
                              </div>
                        </div>

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

                        <button id="mobile-menu-btn" class="lg:hidden text-text-main p-2 hover:bg-gray-100 rounded-lg focus:outline-none transition-colors flex items-center justify-center" aria-label="Toggle Navigation Menu">
                              <span id="hamburger-icon-slot" class="block">
                                    <span class="icon-[solar--hamburger-menu-linear] w-6 h-6"></span>
                              </span>
                              <span id="close-icon-slot" class="hidden">
                                    <span class="icon-[solar--close-circle-linear] w-6 h-6"></span>
                              </span>
                        </button>
                  </div>
            </div>

            <div id="mobile-menu" class="hidden lg:hidden border-t border-gray-100 bg-white px-2 py-4 space-y-4 shadow-inner">
                  <nav class="flex flex-col">
                        <?php wp_nav_menu(array(
                              'theme_location' => 'navigation-menu', 
                              'container' => false, 
                              'menu_class' => 'flex flex-col gap-1 font-semibold text-sm
                              [&_a]:block [&_a]:px-4 [&_a]:py-3 [&_a]:rounded-lg
                              [&_a:hover]:bg-brand-brown [&_a:hover]:text-text-light
                              [&_.current-menu-item_a]:bg-brand-brown [&_.current-menu-item_a]:text-text-light'));?>
                  </nav>
                  
                  <div class="sm:hidden border-t border-gray-100 pt-4 px-4 flex items-center justify-between">
                        <span class="text-xs font-bold uppercase tracking-widest text-gray-400">Select Language</span>
                        <div class="flex gap-2">
                              <a href="?lang=en" class="px-3 py-1.5 text-xs font-semibold rounded-md bg-brand-brown text-text-light">EN</a>
                              <a href="?lang=kh" class="px-3 py-1.5 text-xs font-semibold rounded-md border border-gray-200 text-text-main hover:bg-gray-50">KH</a>
                        </div>
                  </div>
            </div>
      </header>

      <script>
            document.getElementById('mobile-menu-btn').addEventListener('click', function() {
                  const menu = document.getElementById('mobile-menu');
                  const hamburgerSlot = document.getElementById('hamburger-icon-slot');
                  const closeSlot = document.getElementById('close-icon-slot');
                  
                  menu.classList.toggle('hidden');
                  
                  hamburgerSlot.classList.toggle('hidden');
                  hamburgerSlot.classList.toggle('block');
                  
                  closeSlot.classList.toggle('hidden');
                  closeSlot.classList.toggle('block');
            });
      </script>
