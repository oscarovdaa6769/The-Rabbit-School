<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
      <meta charset="<?php bloginfo('charset'); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&display=swap" rel="stylesheet">
      <?php wp_head(); ?>
</head>
<body <?php body_class('bg-brand-cream text-text-main font-sans min-h-screen flex flex-col'); ?>> 

<header class="bg-white sticky top-0 z-50 shadow-sm border-b border-gray-100">
      <div class="max-w-7xl mx-[100px] px-6 flex items-center justify-between">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-3 group">
                  <img src="<?php echo get_theme_file_uri('assets/images/logo.png'); ?>"
                  alt="<?php bloginfo('name'); ?> Logo"
                  class="h-20 w-auto object-contain transition-transform"/>

            </a>

            <nav class="hidden md:flex items-center gap-8 font-semibold text-sm">
                  <?php wp_nav_menu(array('theme_location' => 'navigation-menu', 'container' => false));?>
            </nav>

            <div class="flex items-center gap-4">
                  <button class="text-sm font-semibold text-text-main hover:bg-brand-brown hover:text-text-light flex items-center gap-2 border border-brand-brown px-4 py-2 rounded-lg">
                        <span class="icon-[solar--global-linear] w-5 h-5"></span>
                        English
                        <span class="icon-[solar--alt-arrow-down-line-duotone] w-5 h-5"></span>
                  </button>
                  <a href="#" class="group bg-brand-yellow text-brand-brown font-bold text-sm px-4 py-2.5 rounded-full shadow-sm hover:scale-105 active:scale-95 transition-all flex gap-2 items-center">
                        <span class="icon-[solar--heart-linear] w-5 h-5"></span>
                        Donate
                        <div class="inline-flex items-center transition-all duration-300 transform opacity-0 -translate-x-2 group-hover:opacity-100 group-hover:translate-x-0">
                              <span class="icon-[solar--arrow-right-linear] w-5 h-5 text-text-main"></span>
                        </div>
                  </a>
            </div>
      </div>
</header>

      <?php wp_footer(); ?>
</body>
</html>