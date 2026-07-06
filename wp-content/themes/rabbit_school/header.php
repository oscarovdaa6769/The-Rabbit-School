<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
      <meta charset="<?php bloginfo('charset'); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@600;700&display=swap" rel="stylesheet">
      <?php wp_head(); ?>
</head>
<body <?php body_class('bg-brand-cream text-text-main font-sans min-h-screen flex flex-col'); ?>> 

      <header class="bg-white sticky top-0 z-[1000] shadow-sm border-b border-gray-100 px-4 sm:px-6 lg:px-8">
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
                              'menu_class' => 'flex items-center gap-1 font-semibold text-sm 
                              [&_a]:transition-all [&_a]:duration-300 [&_a]:ease-in-out [&_a]:px-4 [&_a]:py-2.5 [&_a]:rounded-full [&_a]:border-2 [&_a]:border-transparent [&_a]:ring-2 [&_a]:ring-transparent
                              [&_a:hover]:text-text-light [&_a:hover]:bg-brand-brown 
                              [&_.current-menu-item_a]:bg-brand-brown [&_.current-menu-item_a]:text-text-light [&_.current-menu-item_a]:border-white [&_.current-menu-item_a]:ring-brand-brown'));?>
                  </nav>

                  <div class="flex items-center gap-2 sm:gap-4">
                        
                        <div class="hidden sm:inline-block relative text-left group">
                              <button class="text-sm font-semibold text-text-main hover:bg-brand-brown hover:text-text-light flex items-center gap-2 border border-brand-brown px-4 py-2 rounded-lg transition-colors duration-200 focus:outline-none">
                                    <span class="icon-[solar--global-linear] w-5 h-5"></span>
                                    <span>English</span>
                                    <span class="icon-[solar--alt-arrow-down-line-duotone] w-5 h-5 transition-transform duration-200 group-hover:rotate-180 group-focus-within:rotate-180"></span>
                              </button>

                              <div class="absolute right-0 mt-2 w-40 origin-top-right rounded-lg bg-white border border-brand-brown shadow-lg opacity-0 invisible scale-95 translate-y-[-10px] transition-all duration-200 ease-in-out
                              group-hover:opacity-100 group-hover:visible group-hover:scale-100 group-hover:translate-y-0
                              group-focus-within:opacity-100 group-focus-within:visible group-focus-within:scale-100 group-focus-within:translate-y-0 z-50">
                                    <div class="py-1 flex flex-col">
                                          <a href="?lang=en" class="px-4 py-2 text-sm text-text-main hover:bg-brand-brown hover:text-text-light transition-colors duration-150">English</a>
                                          <a href="?lang=kh" class="px-4 py-2 text-sm text-text-main hover:bg-brand-brown hover:text-text-light transition-colors duration-150">Khmer</a>
                                    </div>
                              </div>
                        </div>

                        <a href="#" class="group bg-brand-yellow text-brand-brown font-bold text-sm px-4 sm:px-5 py-2.5 rounded-full shadow-sm hover:scale-105 active:scale-95 transition-all flex gap-2 items-center tracking-wider uppercase">
                              <span class="icon-[solar--heart-linear] w-5 h-5"></span>
                              <span>Donate</span>
                              <div class="hidden sm:inline-flex items-center transition-all duration-300 transform opacity-0 -translate-x-2 group-hover:opacity-100 group-hover:translate-x-0">
                                    <span class="icon-[solar--arrow-right-linear] w-5 h-5 text-brand-brown"></span>
                              </div>
                        </a>

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