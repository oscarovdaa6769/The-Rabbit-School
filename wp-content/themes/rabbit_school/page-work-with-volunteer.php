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

    // Section 2 - Opportunities
    $opportunities_title = get_field('opportunities_title');

    // Card 1 - Careers
    $card_1_title = get_field('card_1_title');
    $card_1_description = get_field('card_1_description');

    $role_1_title = get_field('role_1_title');
    $career_role_1_location = get_field('career_role_1_location');
    $career_role_1_employment_type = get_field('career_role_1_employment_type');
    $career_role_1_description = get_field('career_role_1_description');
    $career_role_1_details = get_field('career_role_1_details');
    $read_more_1_text = get_field('read_more_1_text');
    $close_button_1_text = get_field('close_button_1_text');




    $role_2_title = get_field('role_2_title');
    $career_role_2_location = get_field('career_role_2_location');
    $career_role_2_employment_type = get_field('career_role_2_employment_type');
    $role_2_description = get_field('role_2_description');
    $career_role_2_details = get_field('career_role_2_details');
    $read_more_2_text = get_field('read_more_2_text');



    // Card 2 - Volunteer
    $card_2_title = get_field('card_2_title');
    $card_2_description = get_field('card_2_description');

    $volunteer_role_title = get_field('volunteer_role_title');
    $volunteer_location = get_field('volunteer_location');
    $volunteer_employment_type = get_field('volunteer_employment_type');
    $volunteer_description = get_field('volunteer_description');
    $volunteer_details = get_field('volunteer_details');
    $volunteer_read_more__text = get_field('volunteer_read_more__text');

    // Card 3 - Internship
    $card_3_title = get_field('card_3_title');
    $card_3_description = get_field('card_3_description');

    $internship_role_1_title = get_field('internship_role_1_title');
    $internship_role_1_location = get_field('internship_role_1_location');
    $internship_role_1_employment_type = get_field('internship_role_1_employment_type');
    $internship_role_1_description = get_field('internship_role_1_description');
    $internship_role_1_details = get_field('internship_role_1_details');
    $internship_read_more_1_text = get_field('internship_read_more_1_text');


    $internship_role_2_title = get_field('internship_role_2_title');
    $internship_role_2_location = get_field('internship_role_2_location');
    $internship_role_2_employment_type = get_field('internship_role_2_employment_type');
    $internship_role_2_description = get_field('internship_role_2_description');
    $internship_role_2_details = get_field('internship_role_2_details');
    $internship_read_more_2_text = get_field('internship_read_more_2_text');

    // Ideas Section
    $ideas_title = get_field('ideas_title');
    $ideas_description = get_field('ideas_description');

    // Stay Connected
    $connected_heading = get_field('connected_heading');
    $connected_description = get_field('connected_description');

    $email_title = get_field('email_title');
    $email_address = get_field('email_address');

    $faceboook_page = get_field('faceboook_page');
    $faceboook_page_link = get_field('faceboook_page_link');

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
      <h2 class="text-center text-amber-950 text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-heading font-black uppercase mb-10">
          <?php echo esc_html($opportunities_title); ?>
      </h2>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 dynamic-cards-container">
          <div class="opportunity-card cursor-pointer bg-amber-50/20 border border-gray-200 rounded-2xl p-8 text-center flex flex-col items-center group hover:scale-[1.03] hover:shadow-2xl hover:border-amber-200 transition-all duration-300 ease-out transform opacity-0 animate-[fadeInUp_0.6s_ease-out_forwards]"
              data-title="<?php echo esc_attr($card_1_title); ?>"
              data-icon="fa-briefcase">

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

              <template class="modal-roles-template">
                  <div class="border border-gray-200 rounded-2xl p-6 bg-white flex-1 flex flex-col space-y-4 text-left">

                      <div class="bg-gray-50 p-5 rounded-xl flex flex-col group transition duration-300">
                          <div class="flex flex-col w-full">
                              <div>
                                  <h4 class="font-bold text-amber-950 text-sm md:text-base tracking-wide uppercase">
                                      <?php echo esc_html($role_1_title); ?>
                                  </h4>

                                  <div class="flex flex-wrap items-center gap-4 text-xs text-amber-900 mt-2 font-medium">
                                      <span class="flex items-center gap-1">
                                          <i class="fa-solid fa-location-dot text-amber-600"></i> <?php echo esc_html($career_role_1_location); ?>

                                      </span>
                                      <span class="flex items-center gap-1">
                                          <i class="fa-solid fa-clock text-amber-600"></i><?php echo esc_html($career_role_1_employment_type); ?>
                                      </span>
                                  </div>
                              </div>

                              <div class="text-gray-600 text-sm leading-relaxed mt-4">
                                  <span class="short-text">
                                      <?php echo esc_html($career_role_1_description); ?> </span>
                                  <span class="dots">......</span>
                                  <span class="role-details hidden">
                                      <span><?php echo esc_html($career_role_1_details); ?> </span>
                                  </span>
                              </div>

                              <div class="flex justify-end mt-3">
                                  <button type="button" class="read-more-btn inline-flex items-center gap-1 px-3 py-1.5 border border-amber-950/20 text-amber-950 font-semibold text-xs rounded-full bg-white shadow-sm hover:bg-amber-950 hover:text-white transition duration-300">
                                      <span class="btn-text"> <?php echo esc_html($read_more_1_text); ?>
                                      </span>
                                      <span class="btn-arrow">↓</span>
                                  </button>
                              </div>
                          </div>
                      </div>

                      <div class="bg-gray-50 p-5 rounded-xl flex flex-col group transition duration-300">
                          <div class="flex flex-col w-full">
                              <div>
                                  <h4 class="font-bold text-amber-950 text-sm md:text-base tracking-wide uppercase">
                                      <?php echo esc_html($role_2_title); ?>
                                  </h4>

                                  <div class="flex flex-wrap items-center gap-4 text-xs text-amber-900 mt-2 font-medium">
                                      <span class="flex items-center gap-1">
                                          <i class="fa-solid fa-location-dot text-amber-600"></i> <?php echo esc_html($career_role_2_location); ?>

                                      </span>
                                      <span class="flex items-center gap-1">
                                          <i class="fa-solid fa-clock text-amber-600"></i> <?php echo esc_html($career_role_2_employment_type); ?>
                                      </span>
                                  </div>
                              </div>

                              <div class="text-gray-600 text-sm leading-relaxed mt-4">
                                  <span class="short-text">
                                      <?php echo esc_html($internship_role_2_description); ?> </span>
                                  <span class="dots">......</span>
                                  <span class="role-details hidden">
                                      <span><?php echo esc_html($career_role_2_details); ?></span>
                                  </span>
                              </div>

                              <div class="flex justify-end mt-3">
                                  <button type="button" class="read-more-btn inline-flex items-center gap-1 px-3 py-1.5 border border-amber-950/20 text-amber-950 font-semibold text-xs rounded-full bg-white shadow-sm hover:bg-amber-950 hover:text-white transition duration-300">
                                      <span class="btn-text"><?php echo esc_html($read_more_2_text); ?></span>
                                      <span class="btn-arrow">↓</span>
                                  </button>
                              </div>
                          </div>
                      </div>

                  </div>
              </template>
          </div>

          <div class="opportunity-card cursor-pointer bg-amber-50/20 border border-gray-200 rounded-2xl p-8 text-center flex flex-col items-center group hover:scale-[1.03] hover:shadow-2xl hover:border-amber-200 transition-all duration-300 ease-out transform opacity-0 animate-[fadeInUp_0.6s_ease-out_0.2s_forwards]"
              data-title="<?php echo esc_attr($card_2_title); ?>"
              data-icon="fa-hand-holding-heart">

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

              <template class="modal-roles-template">
                  <div class="border border-gray-200 rounded-2xl p-6 bg-white flex-1 flex flex-col space-y-4 text-left">

                      <div class="bg-gray-50 p-5 rounded-xl flex flex-col group transition duration-300">
                          <div class="flex flex-col w-full">
                              <div>
                                  <h4 class="font-bold text-amber-950 text-sm md:text-base tracking-wide uppercase"><?php echo esc_html($volunteer_role_title); ?></h4>

                                  <div class="flex flex-wrap items-center gap-4 text-xs text-amber-900 mt-2 font-medium">
                                      <span class="flex items-center gap-1">
                                          <i class="fa-solid fa-location-dot text-amber-600"></i><?php echo esc_html($volunteer_location); ?>
                                      </span>
                                      <span class="flex items-center gap-1">
                                          <i class="fa-solid fa-clock text-amber-600"></i><?php echo esc_html($volunteer_employment_type); ?>
                                      </span>
                                  </div>
                              </div>

                              <div class="text-gray-600 text-sm leading-relaxed mt-4">
                                  <span class="short-text">
                                      <?php echo esc_html($volunteer_description); ?> </span>
                                  <span class="dots">......</span>
                                  <span class="role-details hidden">
                                      <span> <?php echo esc_html($volunteer_details); ?> <br><br>

                                      </span>
                                  </span>
                              </div>

                              <div class="flex justify-end mt-3">
                                  <button type="button" class="read-more-btn inline-flex items-center gap-1 px-3 py-1.5 border border-amber-950/20 text-amber-950 font-semibold text-xs rounded-full bg-white shadow-sm hover:bg-amber-950 hover:text-white transition duration-300">
                                      <span class="btn-text"> <?php echo esc_html($volunteer_read_more__text); ?></span>
                                      <span class="btn-arrow">↓</span>
                                  </button>
                              </div>
                          </div>
                      </div>

                  </div>
              </template>
          </div>

          <div class="opportunity-card cursor-pointer bg-amber-50/20 border border-gray-200 rounded-2xl p-8 text-center flex flex-col items-center group hover:scale-[1.03] hover:shadow-2xl hover:border-amber-200 transition-all duration-300 ease-out transform opacity-0 animate-[fadeInUp_0.6s_ease-out_0.4s_forwards]"
              data-title="<?php echo esc_attr($card_3_title); ?>"
              data-icon="fa-user-graduate">

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

              <template class="modal-roles-template">
                  <div class="border border-gray-200 rounded-2xl p-6 bg-white flex-1 flex flex-col space-y-4 text-left">

                      <div class="bg-gray-50 p-5 rounded-xl flex flex-col group transition duration-300">
                          <div class="flex flex-col w-full">
                              <div>
                                  <h4 class="font-bold text-amber-950 text-sm md:text-base tracking-wide uppercase"><?php echo esc_html($internship_role_2_title); ?>
                                  </h4>

                                  <div class="flex flex-wrap items-center gap-4 text-xs text-amber-900 mt-2 font-medium">
                                      <span class="flex items-center gap-1">
                                          <i class="fa-solid fa-location-dot text-amber-600"></i> <?php echo esc_html($internship_role_2_location); ?>

                                      </span>
                                      <span class="flex items-center gap-1">
                                          <i class="fa-solid fa-clock text-amber-600"></i> <?php echo esc_html($internship_role_2_employment_type); ?>

                                      </span>
                                  </div>
                              </div>

                              <div class="text-gray-600 text-sm leading-relaxed mt-4">
                                  <span class="short-text">
                                      <?php echo esc_html($internship_role_1_description); ?> </span>
                                  <span class="dots">......</span>
                                  <span class="role-details hidden">
                                      <span> <?php echo esc_html($internship_role_1_details); ?> <br><br>

                                      </span>
                                  </span>
                              </div>

                              <div class="flex justify-end mt-3">
                                  <button type="button" class="read-more-btn inline-flex items-center gap-1 px-3 py-1.5 border border-amber-950/20 text-amber-950 font-semibold text-xs rounded-full bg-white shadow-sm hover:bg-amber-950 hover:text-white transition duration-300">
                                      <span class="btn-text"><?php echo esc_html($internship_read_more_1_text); ?></span>
                                      <span class="btn-arrow">↓</span>
                                  </button>
                              </div>
                          </div>
                      </div>

                      <div class="bg-gray-50 p-5 rounded-xl flex flex-col group transition duration-300">
                          <div class="flex flex-col w-full">
                              <div>
                                  <h4 class="font-bold text-amber-950 text-sm md:text-base tracking-wide uppercase"><?php echo esc_html($internship_role_2_title); ?></h4>

                                  <div class="flex flex-wrap items-center gap-4 text-xs text-amber-900 mt-2 font-medium">
                                      <span class="flex items-center gap-1">
                                          <i class="fa-solid fa-location-dot text-amber-600"></i><?php echo esc_html($internship_role_2_location); ?>
                                      </span>
                                      <span class="flex items-center gap-1">
                                          <i class="fa-solid fa-clock text-amber-600"></i><?php echo esc_html($internship_role_2_employment_type); ?>
                                      </span>
                                  </div>
                              </div>

                              <div class="text-gray-600 text-sm leading-relaxed mt-4">
                                  <span class="short-text">
                                      <?php echo esc_html($internship_role_2_description); ?> </span>
                                  <span class="dots">......</span>
                                  <span class="role-details hidden">
                                      <span> <?php echo esc_html($internship_role_2_details); ?> <br><br>

                                      </span>
                                  </span>
                              </div>

                              <div class="flex justify-end mt-3">
                                  <button type="button" class="read-more-btn inline-flex items-center gap-1 px-3 py-1.5 border border-amber-950/20 text-amber-950 font-semibold text-xs rounded-full bg-white shadow-sm hover:bg-amber-950 hover:text-white transition duration-300">
                                      <span class="btn-text"><?php echo esc_html($internship_read_more_2_text); ?> </span>
                                      <span class="btn-arrow">↓</span>
                                  </button>
                              </div>
                          </div>
                      </div>

                  </div>
              </template>
          </div>
      </div>
  </section>

  <div id="opportunityModal" class="fixed inset-0 z-[2000] flex items-center justify-center p-4 bg-black/70 opacity-0 pointer-events-none transition-opacity duration-300">
      <div id="modalContainer" class="relative w-full max-w-xl bg-white rounded-2xl shadow-2xl overflow-hidden transform scale-95 transition-transform duration-300 flex flex-col max-h-[90vh]">
          <div class="overflow-y-auto p-6 md:p-8">
              <div class="flex justify-center mb-5">
                  <div id="modalIconContainer" class="w-16 h-16 rounded-full bg-amber-50 text-amber-950 text-3xl flex items-center justify-center border border-amber-100">
                      <i id="modalIcon" class="fa-solid"></i>
                  </div>
              </div>
              <h3 id="modalTitle" class="text-amber-950 text-2xl font-heading font-black text-center uppercase tracking-wide mb-6"></h3>
              <div id="modalRolesContainer"></div>
          </div>
          <div class="p-4 bg-gray-50 border-t border-gray-100 flex justify-end">
              <button id="closeModalFooterBtn" class="bg-amber-950 hover:bg-amber-900 text-white font-bold py-2.5 px-6 rounded-xl transition-colors duration-200 text-sm">
                  <?php echo esc_html($close_button_1_text); ?>
              </button>
          </div>
      </div>
  </div>

  <section class="max-w-7xl mx-auto px-6 pb-28">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-stretch">

          <div class="flex flex-col">
              <div class="relative bg-[#f2eadb] rounded-[30px] p-8 lg:p-10 overflow-hidden h-full">
                  <div class="flex items-start gap-6">
                      <div>
                          <h2 class="font-heading text-4xl uppercase tracking-wide mb-4 font-black text-[#4A302D]">
                              <?php echo nl2br(esc_html($ideas_title)); ?>
                          </h2>
                          <div class="w-20 h-1 bg-[#F5B335] rounded-full mt-6 mb-8"></div>

                          <p class="text-[#5A514C] text-lg leading-9 max-w-xl">
                              <?php echo esc_html($ideas_description); ?>

                          </p>
                      </div>
                  </div>


              </div>
          </div>

          <div class="bg-amber-950 text-white rounded-2xl p-8 md:p-10 shadow-xl flex flex-col justify-between pt-[76px]">
              <div>
                  <h3 class="font-heading text-4xl uppercase tracking-wide mb-4 font-black">
                      <?php echo esc_html($connected_heading); ?>
                  </h3>
                  <p class="text-sm text-gray-300 leading-relaxed mb-8 font-medium">
                      <?php echo esc_html($connected_description); ?>
                  </p>
              </div>

              <div class="space-y-6">
                  <div class="flex items-center space-x-4">
                      <div class="w-14 h-14 bg-white/10 rounded-full flex items-center justify-center text-xl flex-shrink-0">
                          <i class="fa-regular fa-envelope"></i>
                      </div>
                      <div>
                          <h5 class="text-[14px] font-black uppercase tracking-widest text-white">
                              <?php echo esc_html($email_title); ?>
                          </h5>
                          <a href="mailto:info@rabbitschoolcambodia.net" class="text-sm md:text-base hover:underline font-semibold text-gray-100 block mt-0.5">
                              <?php echo esc_html($email_address); ?>
                          </a>
                      </div>
                  </div>

                  <div class="flex items-center space-x-4">
                      <div class="w-14 h-14 bg-white/10 rounded-full flex items-center justify-center text-xl flex-shrink-0">
                          <i class="fa-brands fa-facebook-f" style="color: rgb(245, 249, 255);"></i>
                      </div>
                      <div>
                          <h5 class="text-[14px] font-black uppercase tracking-widest text-white">
                              <?php echo esc_html($faceboook_page); ?>
                          </h5>
                          <a href="<?php echo esc_url($faceboook_page_link); ?>" class="text-sm md:text-base hover:underline font-semibold text-gray-100 block mt-0.5">
                              <?php echo esc_html($faceboook_page_link); ?>
                          </a>
                      </div>
                  </div>

                  <div class="flex items-center space-x-4">
                      <div class="w-14 h-14 bg-white/10 rounded-full flex items-center justify-center text-xl flex-shrink-0">
                          <i class="fa-solid fa-phone"></i>
                      </div>
                      <div>
                          <h5 class="text-[14px] font-black uppercase tracking-widest text-white">
                              <?php echo esc_html($phone_title); ?>
                          </h5>
                          <a href="tel:+85568901971" class="text-sm md:text-base hover:underline font-semibold text-gray-100 block mt-0.5">
                              <?php echo esc_html($phone_number); ?>
                          </a>
                      </div>
                  </div>
              </div>
          </div>

      </div>





  </section>

  <script>
      document.addEventListener('DOMContentLoaded', () => {

          const cards = document.querySelectorAll('.opportunity-card');
          const modal = document.getElementById('opportunityModal');
          const modalContainer = document.getElementById('modalContainer');
          const closeBtns = document.querySelectorAll('#closeModalBtn, #closeModalFooterBtn');

          const modalIcon = document.getElementById('modalIcon');
          const modalTitle = document.getElementById('modalTitle');
          const modalRolesContainer = document.getElementById('modalRolesContainer');

          function openModal(card) {

              const title = card.getAttribute('data-title');
              const icon = card.getAttribute('data-icon');
              const template = card.querySelector('.modal-roles-template');

              modalTitle.textContent = title;
              modalIcon.className = `fa-solid ${icon}`;

              modalRolesContainer.innerHTML = '';

              if (template) {
                  const clone = template.content.cloneNode(true);
                  modalRolesContainer.appendChild(clone);
              }

              modal.classList.remove(
                  'opacity-0',
                  'pointer-events-none'
              );

              modal.classList.add('opacity-100');

              modalContainer.classList.remove('scale-95');
              modalContainer.classList.add('scale-100');

              document.body.classList.add('overflow-hidden');
          }

          function closeModal() {

              modal.classList.remove('opacity-100');

              modal.classList.add(
                  'opacity-0',
                  'pointer-events-none'
              );

              modalContainer.classList.remove('scale-100');
              modalContainer.classList.add('scale-95');

              document.body.classList.remove('overflow-hidden');
          }
          cards.forEach(card => {

              card.addEventListener('click', (e) => {

                  if (!e.target.closest('.modal-roles-template')) {
                      openModal(card);
                  }

              });

          });
          closeBtns.forEach(btn => {

              btn.addEventListener('click', closeModal);

          });
          modal.addEventListener('click', (e) => {

              if (e.target === modal) {
                  closeModal();
              }

          });
          document.addEventListener('keydown', (e) => {

              if (e.key === 'Escape') {
                  closeModal();
              }

          });
          modalRolesContainer.addEventListener('click', function(e) {

              const btn = e.target.closest('.read-more-btn');

              if (!btn) return;


              const cardParent = btn.closest('.bg-gray-50');

              if (!cardParent) return;


              const detailsPanel = cardParent.querySelector('.role-details');

              const dots = cardParent.querySelector('.dots');

              const btnText = btn.querySelector('.btn-text');

              const btnArrow = btn.querySelector('.btn-arrow');


              if (!detailsPanel) return;


              const isHidden = detailsPanel.classList.toggle('hidden');


              if (!isHidden) {
                  if (dots) {
                      dots.classList.add('hidden');
                  }


                  if (btnText) {
                      btnText.textContent =
                          btn.dataset.showLess || 'បង្រួម';
                  }

                  if (btnArrow) {
                      btnArrow.textContent = '↑';
                  }

              } else {

                  if (dots) {
                      dots.classList.remove('hidden');
                  }

                  if (btnText) {
                      btnText.textContent =
                          btn.dataset.readMore || 'អានបន្ថែម';
                  }


                  if (btnArrow) {
                      btnArrow.textContent = '↓';
                  }

              }

          });

      });
  </script>

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