  <?php
    /**
     * Template Name: Work With Volunteer
     */
    get_header();

    // Hero
    $hero_title = get_field('hero_title');
    $hero_description = get_field('hero_description');
    $hero_button_text = get_field('hero_button_text');
    $hero_button_link = get_field('hero_button_link');
    $hero_image = get_field('hero_image');

    //section2 
    $opportunities_title = get_field('opportunities_title');

    //Card 1
    $card_1_title = get_field('card_1_title');
    $card_1_description = get_field('card_1_description');

    // Card 2
    $card_2_title = get_field('card_2_title');
    $card_2_description = get_field('card_2_description');

    //Card3
    $card_3_title = get_field('card_3_title');
    $card_3_description = get_field('card_3_description');

    //Open Roles
    $open_roles_heading = get_field('open_roles_heading');
    $role_1_title = get_field('role_1_title');
    $role_1_typelocation = get_field('role_1_typelocation');
    $role_1_link = get_field('role_1_link');
    $role_2_title = get_field('role_2_title');
    $role_2_typelocation = get_field('role_2_typelocation');
    $role_2_link = get_field('role_2_link');
    $role_3_title = get_field('role_3_title');
    $role_3_typelocation = get_field('role_3_typelocation');
    $role_3_link = get_field('role_3_link');

    // Stay Connected 
    $connected_heading = get_field('connected_heading');
    $connected_description = get_field('connected_description');
    $email_title = get_field('email_title');
    $email_address = get_field('email_address');
    $telegram_title = get_field('telegram_title');
    $telegram_link = get_field('telegram_link');
    $phone_title = get_field('phone_title');
    $phone_number = get_field('phone_number');
    ?>

  <section class="relative bg-gray-900 text-white min-h-[480px] md:min-h-[600px] flex items-end overflow-hidden">
      <div class="absolute inset-0 z-0">
          <?php if ($hero_image): ?>
<img
    src="<?php echo esc_url($hero_image['url']); ?>"
    alt="<?php echo esc_attr($hero_image['alt']); ?>"
    class="w-full h-full object-cover object-center transform scale-105 hover:scale-100 transition-transform duration-700 brightness-[0.85]" />
<?php endif; ?>
          <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
      </div>
      <div class="absolute inset-0 bg-gradient-to-r from-black/60 via-black/30 to-transparent"></div>

      <div class="relative max-w-7xl mx-auto px-6 pb-16 pt-20 w-full">
          <div class="max-w-2xl">
              <h1 class="text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-heading font-black uppercase mb-4 text-white">
                  <?php echo esc_html($hero_title); ?>
              </h1>
              <p class="text-base md:text-lg font-medium mb-8 text-gray-200 max-w-xl leading-relaxed">
                  <?php echo esc_html($hero_description); ?>
              </p>
              <a href="<?php echo esc_url($hero_button_link); ?>" class="bg-amber-950/90 border border-white/20 text-white px-6 py-3.5 rounded-md text-xs font-bold uppercase tracking-widest flex items-center space-x-3 hover:bg-amber-950 transition shadow-lg inline-flex no-underline">
                  <?php echo esc_html($hero_button_text); ?>
                  <i class="fa-solid fa-arrow-right-long"></i>
              </a>
          </div>
      </div>
  </section>

  <section class="max-w-7xl mx-auto px-6 py-20">
      <h2 class=" text-center text-amber-950 text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-heading font-black  uppercase mb-10 ">
          <?php echo esc_html($opportunities_title); ?>
      </h2>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 dynamic-cards-container">

          <div class="bg-amber-50/20 border border-gray-200 rounded-2xl p-8 text-center flex flex-col items-center group hover:scale-[1.03] hover:shadow-2xl hover:border-amber-200 transition-all duration-300 ease-out transform opacity-0 animate-[fadeInUp_0.6s_ease-out_forwards]">
              <div class="text-amber-950 text-3xl mb-5 bg-gray-50 w-14 h-14 rounded-full flex items-center justify-center group-hover:bg-amber-950 group-hover:text-white transition-colors duration-300">
                  <i class="fa-solid fa-briefcase"></i>
              </div>

              <h3 class="text-amber-400 text-xl sm:text-2xl mb-4 lg:text-3xl font-heading font-black uppercase tracking-wide">
                  <?php echo esc_html($card_1_title); ?>
              </h3>

              <p class="text-gray-500 text-sm leading-relaxed max-w-xs">
                  <?php echo esc_html($card_1_description); ?>
              </p>
              <div class="w-16 h-1 bg-amber-400 mt-3 mb-4 rounded-full group-hover:w-24 transition-all duration-300"></div>
          </div>

          <div class="bg-amber-50/20 border border-gray-200 rounded-2xl p-8 text-center flex flex-col items-center group hover:scale-[1.03] hover:shadow-2xl hover:border-amber-200 transition-all duration-300 ease-out transform opacity-0 animate-[fadeInUp_0.6s_ease-out_0.2s_forwards]">
              <div class="text-amber-950 text-3xl mb-5 bg-gray-50 w-14 h-14 rounded-full flex items-center justify-center group-hover:bg-amber-950 group-hover:text-white transition-colors duration-300">
                  <i class="fa-solid fa-hand-holding-heart"></i>
              </div>

              <h3 class="text-amber-400 text-xl sm:text-2xl mb-4 lg:text-3xl font-heading font-black uppercase tracking-wide">
                  <?php echo esc_html($card_2_title); ?>
              </h3>

              <p class="text-gray-500 text-sm leading-relaxed max-w-xs">
                  <?php echo esc_html($card_2_description); ?>
              </p>
              <div class="w-16 h-1 bg-amber-400 mt-3 mb-4 rounded-full group-hover:w-24 transition-all duration-300"></div>
          </div>

          <div class="bg-amber-50/20 border border-gray-200 rounded-2xl p-8 text-center flex flex-col items-center group hover:scale-[1.03] hover:shadow-2xl hover:border-amber-200 transition-all duration-300 ease-out transform opacity-0 animate-[fadeInUp_0.6s_ease-out_0.4s_forwards]">
              <div class="text-amber-950 text-3xl mb-5 bg-gray-50 w-14 h-14 rounded-full flex items-center justify-center group-hover:bg-amber-950 group-hover:text-white transition-colors duration-300">
                  <i class="fa-solid fa-user-graduate"></i>
              </div>

              <h3 class="text-amber-400 text-xl sm:text-2xl mb-4 lg:text-3xl font-heading font-black uppercase tracking-wide">
                  <?php echo esc_html($card_3_title); ?>
              </h3>

              <p class="text-gray-500 text-sm leading-relaxed max-w-xs">
                  <?php echo esc_html($card_3_description); ?>
              </p>
              <div class="w-16 h-1 bg-amber-400 mt-3 mb-4 rounded-full group-hover:w-24 transition-all duration-300"></div>
          </div>

      </div>
  </section>

  <section class="max-w-7xl mx-auto px-6 pb-28">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-stretch">

          <div class="flex flex-col">
              <h2 class="text-4xl text-amber-950 uppercase tracking-tight mb-8 sm:text-2xl lg:text-3xl font-heading font-black">
                  <?php echo esc_html($open_roles_heading); ?>
              </h2>

              <div class="border border-gray-200 rounded-2xl p-6 bg-white flex-1 flex flex-col justify-between space-y-4">

                  <div class="bg-gray-50 p-5 rounded-xl flex justify-between items-center group hover:bg-gray-100 transition decoration-none block">
                      <div>
                          <h4 class="font-bold text-amber-950 text-sm md:text-base tracking-wide uppercase"> <?php echo esc_html($role_1_title); ?>
                          </h4>
                          <p class="text-xs text-amber-900 mt-1.5 font-medium"> <?php echo esc_html($role_1_typelocation); ?>
                          </p>
                      </div>
                      <a href="<?php echo esc_url($role_1_link); ?>" class="w-10 h-10 bg-white border border-gray-200 rounded-full flex items-center justify-center text-amber-950 shadow-sm group-hover:bg-amber-950 group-hover:text-white group-hover:border-transparent transition duration-300">
                          <i class="fa-solid fa-arrow-right"></i>
                      </a>
                  </div>


                  <div class="bg-gray-50 p-5 rounded-xl flex justify-between items-center group hover:bg-gray-100 transition decoration-none block">


                      <div>
                          <h4 class="font-bold text-amber-950 text-sm md:text-base tracking-wide uppercase"><?php echo esc_html($role_2_title); ?></h4>
                          <p class="text-xs text-amber-900 mt-1.5 font-medium"> <?php echo esc_html($role_2_typelocation); ?></p>
                      </div>
                      <a href="<?php echo esc_url($role_2_link); ?>" class="w-10 h-10 bg-white border border-gray-200 rounded-full flex items-center justify-center text-amber-950 shadow-sm group-hover:bg-amber-950 group-hover:text-white group-hover:border-transparent transition duration-300">
                          <i class="fa-solid fa-arrow-right"></i>

                      </a>
                  </div>

                  <div class="bg-gray-50 p-5 rounded-xl flex justify-between items-center group hover:bg-gray-100 transition decoration-none block">
                      <div>
                          <h4 class="font-bold text-amber-950 text-sm md:text-base tracking-wide uppercase"><?php echo esc_html($role_3_title); ?></h4>
                          <p class="text-xs text-amber-900 mt-1.5 font-medium"><?php echo esc_html($role_3_typelocation); ?></p>
                      </div>
                      <a href="<?php echo esc_url($role_3_link); ?>" class="w-10 h-10 bg-white border border-gray-200 rounded-full flex items-center justify-center text-amber-950 shadow-sm group-hover:bg-amber-950 group-hover:text-white group-hover:border-transparent transition duration-300">
                          <i class="fa-solid fa-arrow-right"></i>

                      </a>
                  </div>
              </div>
          </div>
          <div class="bg-amber-950 text-white rounded-2xl p-8 md:p-10 shadow-xl flex flex-col justify-between pt-[76px]">
              <div>
                  <h3 class="font-heading text-4xl uppercase tracking-wide mb-4 font-black"><?php echo esc_html($connected_heading); ?></h3>
                  <p class="text-sm text-gray-300 leading-relaxed mb-8 font-medium">
                      <?php echo esc_html($connected_description); ?> </p>
              </div>

              <div class="space-y-6">
                  <div class="flex items-center space-x-4">
                      <div class="w-14 h-14 bg-white/10 rounded-full flex items-center justify-center text-xl flex-shrink-0">
                          <i class="fa-regular fa-envelope"></i>
                      </div>
                      <div>
                          <h5 class="text-[14px] font-black  uppercase tracking-widest text-white"><?php echo esc_html($email_title); ?></h5>
                          <a href="mailto:info@rabbitschoolcambodia.net" class="text-sm md:text-base hover:underline font-semibold text-gray-100 block mt-0.5"><?php echo esc_html($email_address); ?></a>
                      </div>
                  </div>

                  <div class="flex items-center space-x-4">
                      <div class="w-14 h-14 bg-white/10 rounded-full flex items-center justify-center text-xl flex-shrink-0">
                          <i class="fa-brands fa-telegram"></i>
                      </div>
                      <div>
                          <h5 class="text-[14px] font-black uppercase tracking-widest text-white"><?php echo esc_html($telegram_title); ?></h5>
                          <a
                              href="<?php echo esc_url($telegram_link); ?>" class="text-sm md:text-base hover:underline font-semibold text-gray-100 block mt-0.5"><?php echo esc_html($telegram_link); ?></a>
                      </div>
                  </div>

                  <div class="flex items-center space-x-4">
                      <div class="w-14 h-14 bg-white/10 rounded-full flex items-center justify-center text-xl flex-shrink-0">
                          <i class="fa-solid fa-phone"></i>
                      </div>
                      <div>
                          <h5 class="text-[14px] font-black uppercase tracking-widest text-white"><?php echo esc_html($phone_title); ?></h5>
                          <a href="tel:+85568901971" class="text-sm md:text-base hover:underline font-semibold text-gray-100 block mt-0.5"><?php echo esc_html($phone_number); ?></a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <?php get_footer(); ?>



  <style>
      .font-heading {
          font-family: 'Oswald', sans-serif;
      }

      .font-body {
          font-family: 'Inter', sans-serif;
      }

      @keyframes fadeInUp {
          from {
              opacity: 0;
              transform: translateY(30px);
          }

          to {
              opacity: 1;
              transform: translateY(0);
          }

      }
  </style>