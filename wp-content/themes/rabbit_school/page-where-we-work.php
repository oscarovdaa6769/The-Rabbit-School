<?php
/*
Template Name: Where We Work
Template Post Type: post, page, product
*/
get_header();
?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <section class="relative h-[450px] bg-cover bg-center flex items-center" style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('<?php echo get_theme_file_uri('assets/images/6.png'); ?>');">
        <div class="container mx-auto px-6 md:px-12">
            <h1 class="text-4xl md:text-5xl font-black text-white uppercase tracking-wide mb-2">
                <?php echo esc_html(get_field('heading_1')?: 'error'); ?>
            </h1>
            <p class="text-white text-lg max-w-xl mb-6 font-light"> <?php echo esc_html(get_field('description_1')?: 'error'); ?> </p>
            <?php if ( !empty('button_text_1')) : ?>
            <div class="flex justify-start mt-6">
            <a href="<?php echo esc_url(get_field('button_link_1')); ?>" class="bg-[#6b4242] text-white px-6 py-3 font-semibold rounded hover:bg-[#533333] transition flex items-center gap-2 uppercase text-sm tracking-wider">
             <?php echo esc_html(get_field('button_text_1')); ?>     
            <i class="fa-solid fa-location-dot"></i>
            </a>
            </div>
            <?php endif; ?>
        </div>
    </section>

    <main class="container mx-auto px-6 md:px-12 py-16 space-y-20">

        <section class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            <div class="lg:col-span-5 space-y-6">
                <div>
                    <h2 class="text-3xl font-black text-[#6b4242] uppercase tracking-wide mb-3"><?php echo esc_html(get_field('heading_2')?: 'error'); ?> </h2>
                    <p class="text-gray-600 text-sm leading-relaxed"><?php echo esc_html(get_field('paragraph_2')?: 'error'); ?></p>
                </div>
                
                <div class="space-y-4">
                    <div class="flex items-center gap-4 p-4 bg-white rounded-xl border border-gray-100 shadow-sm">
                        <div class="w-12 h-12 rounded-full bg-[#6b4242] text-white flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-location-dot text-lg"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-800 uppercase tracking-wide text-sm"><?php echo esc_html(get_field('heading_card_1')?: 'error'); ?></h4>
                            <p class="text-xs text-gray-500"><?php echo esc_html(get_field('paragraph_card_1')?: 'error'); ?></p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 p-4 bg-white rounded-xl border border-gray-100 shadow-sm">
                        <div class="w-12 h-12 rounded-full bg-[#6b4242] text-white flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-location-dot text-lg"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-800 uppercase tracking-wide text-sm"><?php echo esc_html(get_field('heading_card_2')?: 'error'); ?></h4>
                            <p class="text-xs text-gray-500"><?php echo esc_html(get_field('paragraph_card_2')?: 'error'); ?></p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 p-4 bg-white rounded-xl border border-gray-100 shadow-sm">
                        <div class="w-12 h-12 rounded-full bg-[#6b4242] text-white flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-location-dot text-lg"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-800 uppercase tracking-wide text-sm"><?php echo esc_html(get_field('heading_card_3')?: 'error'); ?></h4>
                            <p class="text-xs text-gray-500"><?php echo esc_html(get_field('paragraph_card_3')?: 'error'); ?></p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 p-4 bg-white rounded-xl border border-gray-100 shadow-sm">
                        <div class="w-12 h-12 rounded-full bg-[#6b4242] text-white flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-location-dot text-lg"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-800 uppercase tracking-wide text-sm"><?php echo esc_html(get_field('heading_card_4')?: 'error'); ?></h4>
                            <p class="text-xs text-gray-500"><?php echo esc_html(get_field('paragraph_card_4')?: 'error'); ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-7 flex justify-center overflow-hidden">
                <?php echo get_field('google_map')?: 'error'; ?>
            </div>
        </section>

        <hr class="border-gray-200">

        <section class="grid grid-cols-1 lg:grid-cols-12 gap-12">
            
            <div class="lg:col-span-5 space-y-6">
                <h2 class="text-3xl font-black text-[#6b4242] uppercase tracking-wide mb-6"><?php echo esc_html(get_field('heading_3')?: 'error'); ?></h2>
                
                <div class="space-y-4">
                    <div class="flex items-center gap-4 p-4 bg-white rounded-xl border border-gray-100 shadow-sm">
                        <div class="w-12 h-12 rounded-full bg-[#6b4242] text-white flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-graduation-cap text-lg"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-800 uppercase tracking-wide text-sm"><?php echo esc_html(get_field('heading_card_5')?: 'error'); ?></h4>
                            <p class="text-xs text-gray-500"><?php echo esc_html(get_field('paragraph_card_5')?: 'error'); ?></p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 p-4 bg-white rounded-xl border border-gray-100 shadow-sm">
                        <div class="w-12 h-12 rounded-full bg-[#6b4242] text-white flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-users text-lg"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-800 uppercase tracking-wide text-sm"><?php echo esc_html(get_field('heading_card_6')?: 'error'); ?></h4>
                            <p class="text-xs text-gray-500"><?php echo esc_html(get_field('paragraph_card_6')?: 'error'); ?></p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 p-4 bg-white rounded-xl border border-gray-100 shadow-sm">
                        <div class="w-12 h-12 rounded-full bg-[#6b4242] text-white flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-seedling text-lg"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-800 uppercase tracking-wide text-sm"><?php echo esc_html(get_field('heading_card_7')?: 'error'); ?> </h4>
                            <p class="text-xs text-gray-500"><?php echo esc_html(get_field('paragraph_card_7')?: 'error'); ?></p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 p-4 bg-white rounded-xl border border-gray-100 shadow-sm">
                        <div class="w-12 h-12 rounded-full bg-[#6b4242] text-white flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-handshake text-lg"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-800 uppercase tracking-wide text-sm"><?php echo esc_html(get_field('heading_card_8')?: 'error'); ?></h4>
                            <p class="text-xs text-gray-500"><?php echo esc_html(get_field('paragraph_card_8')?: 'error'); ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-7 space-y-6">
                <h2 class="text-3xl font-black text-[#6b4242] uppercase tracking-wide mb-6"><?php echo esc_html(get_field('heading_4')?: 'error'); ?></h2>
                
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                    <div class="bg-white border border-gray-100 shadow-sm rounded-xl p-6 flex flex-col items-center text-center justify-between `min-h-[160px]`">
                        <i class="fa-solid fa-location-dot text-[#6b4242] text-2xl mb-2"></i>
                        <span class="text-3xl font-black text-gray-800"><?php echo esc_html(get_field('heading_card_9')?: 'error'); ?></span>
                        <span class="text-xs text-gray-400 mt-1"><?php echo esc_html(get_field('paragraph_card_9')?: 'error'); ?></span>
                    </div>
                    <div class="bg-white border border-gray-100 shadow-sm rounded-xl p-6 flex flex-col items-center text-center justify-between `min-h-[160px]`">
                        <i class="fa-solid fa-user-graduate text-[#6b4242] text-2xl mb-2"></i>
                        <span class="text-3xl font-black text-gray-800"><?php echo esc_html(get_field('heading_card_10')?: 'error'); ?></span>
                        <span class="text-xs text-gray-400 mt-1"><?php echo esc_html(get_field('paragraph_card_10')?: 'error'); ?></span>
                    </div>
                    <div class="bg-white border border-gray-100 shadow-sm rounded-xl p-6 flex flex-col items-center text-center justify-between `min-h-[160px]`">
                        <i class="fa-solid fa-chalkboard-user text-[#6b4242] text-2xl mb-2"></i>
                        <span class="text-3xl font-black text-gray-800"><?php echo esc_html(get_field('heading_card_11')?: 'error'); ?></span>
                        <span class="text-xs text-gray-400 mt-1"><?php echo esc_html(get_field('paragraph_card_11')?: 'error'); ?></span>
                    </div>
                    <div class="bg-white border border-gray-100 shadow-sm rounded-xl p-6 flex flex-col items-center text-center justify-between `min-h-[160px]`">
                        <i class="fa-solid fa-handshake text-[#6b4242] text-2xl mb-2"></i>
                        <span class="text-3xl font-black text-gray-800"><?php echo esc_html(get_field('heading_card_12')?: 'error'); ?></span>
                        <span class="text-xs text-gray-400 mt-1"><?php echo esc_html(get_field('paragraph_card_12')?: 'error'); ?></span>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mt-6">
                    <div class="h-44 bg-gray-200 rounded-xl overflow-hidden shadow-sm">
                        <img src="<?php echo esc_url(get_field('img_1')) ?>" alt="Students" class="w-full h-full object-cover">
                    </div>
                    <div class="h-44 bg-gray-200 rounded-xl overflow-hidden shadow-sm flex flex-col gap-2">
                        <img src="<?php echo esc_url(get_field('img_2')) ?>" alt="Food/Community" class="w-full h-1/2 object-cover">
                        <img src="<?php echo esc_url(get_field('img_3')) ?>" alt="Food/Community" class="w-full h-1/2 object-cover">
                    </div>
                    <div class="h-44 bg-gray-200 rounded-xl overflow-hidden shadow-sm">
                        <img src="<?php echo esc_url(get_field('img_3')) ?>" alt="Students" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>

        </section>

    </main>

</body>
<?php get_footer();?>
