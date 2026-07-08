<?php
get_header();
?>

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Rabbit School - Where We Work</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<body class="bg-gray-50 text-gray-800 font-sans">

    <section class="relative h-[450px] bg-cover bg-center flex items-center" style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('<?php echo get_theme_file_uri('assets/images/6.png'); ?>');">
        <div class="container mx-auto px-6 md:px-12">
            <h1 class="text-4xl md:text-5xl font-black text-white uppercase tracking-wide mb-2">Where We Work</h1>
            <p class="text-white text-lg max-w-xl mb-6 font-light">Creating opportunities and empowering children through quality education in the communities we serve.</p>
            <button class="bg-[#6b4242] text-white px-6 py-3 font-semibold rounded hover:bg-[#533333] transition flex items-center gap-2 uppercase text-sm tracking-wider">
                Explore Our Location <i class="fa-solid fa-location-dot"></i>
            </button>
        </div>
    </section>

    <main class="container mx-auto px-6 md:px-12 py-16 space-y-20">

        <section class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            <div class="lg:col-span-5 space-y-6">
                <div>
                    <h2 class="text-3xl font-black text-[#6b4242] uppercase tracking-wide mb-3">Our Locations</h2>
                    <p class="text-gray-600 text-sm leading-relaxed">We work in different communities to bring quality education and a brighter future for children.</p>
                </div>
                
                <div class="space-y-4">
                    <div class="flex items-center gap-4 p-4 bg-white rounded-xl border border-gray-100 shadow-sm">
                        <div class="w-12 h-12 rounded-full bg-[#6b4242] text-white flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-location-dot text-lg"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-800 uppercase tracking-wide text-sm">Phnom Penh</h4>
                            <p class="text-xs text-gray-500">Main Campus & Training Center</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 p-4 bg-white rounded-xl border border-gray-100 shadow-sm">
                        <div class="w-12 h-12 rounded-full bg-[#6b4242] text-white flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-location-dot text-lg"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-800 uppercase tracking-wide text-sm">Siem Reap</h4>
                            <p class="text-xs text-gray-500">Community Learning Center</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 p-4 bg-white rounded-xl border border-gray-100 shadow-sm">
                        <div class="w-12 h-12 rounded-full bg-[#6b4242] text-white flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-location-dot text-lg"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-800 uppercase tracking-wide text-sm">Battambang</h4>
                            <p class="text-xs text-gray-500">Education Support Program</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 p-4 bg-white rounded-xl border border-gray-100 shadow-sm">
                        <div class="w-12 h-12 rounded-full bg-[#6b4242] text-white flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-location-dot text-lg"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-800 uppercase tracking-wide text-sm">Kampong Cham</h4>
                            <p class="text-xs text-gray-500">Community Outreach Program</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-7 flex justify-center overflow-hidden">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1000916.4405614156!2d104.63310972702386!3d11.492196028273533!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109510c204573a7%3A0x5e2af45c46d089d4!2sRabbit%20School%20Organization!5e0!3m2!1sen!2skh!4v1783496516355!5m2!1sen!2skh" width="600" height="450" style="border:0; border-radius:24px;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
            </div>
        </section>

        <hr class="border-gray-200">

        <section class="grid grid-cols-1 lg:grid-cols-12 gap-12">
            
            <div class="lg:col-span-5 space-y-6">
                <h2 class="text-3xl font-black text-[#6b4242] uppercase tracking-wide mb-6">Communities We Serve</h2>
                
                <div class="space-y-4">
                    <div class="flex items-center gap-4 p-4 bg-white rounded-xl border border-gray-100 shadow-sm">
                        <div class="w-12 h-12 rounded-full bg-[#6b4242] text-white flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-graduation-cap text-lg"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-800 uppercase tracking-wide text-sm">Schools</h4>
                            <p class="text-xs text-gray-500">Supporting students with quality education</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 p-4 bg-white rounded-xl border border-gray-100 shadow-sm">
                        <div class="w-12 h-12 rounded-full bg-[#6b4242] text-white flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-users text-lg"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-800 uppercase tracking-wide text-sm">Families</h4>
                            <p class="text-xs text-gray-500">Empowering parents and strengthening communities</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 p-4 bg-white rounded-xl border border-gray-100 shadow-sm">
                        <div class="w-12 h-12 rounded-full bg-[#6b4242] text-white flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-seedling text-lg"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-800 uppercase tracking-wide text-sm">Rural Communities</h4>
                            <p class="text-xs text-gray-500">Expanding learning opportunities in rural areas</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 p-4 bg-white rounded-xl border border-gray-100 shadow-sm">
                        <div class="w-12 h-12 rounded-full bg-[#6b4242] text-white flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-handshake text-lg"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-800 uppercase tracking-wide text-sm">Partners</h4>
                            <p class="text-xs text-gray-500">Working with local organizations and partners</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-7 space-y-6">
                <h2 class="text-3xl font-black text-[#6b4242] uppercase tracking-wide mb-6">Our Impact</h2>
                
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                    <div class="bg-white border border-gray-100 shadow-sm rounded-xl p-6 flex flex-col items-center text-center justify-between `min-h-[160px]`">
                        <i class="fa-solid fa-location-dot text-[#6b4242] text-2xl mb-2"></i>
                        <span class="text-3xl font-black text-gray-800">10+</span>
                        <span class="text-xs text-gray-400 mt-1">Locations</span>
                    </div>
                    <div class="bg-white border border-gray-100 shadow-sm rounded-xl p-6 flex flex-col items-center text-center justify-between `min-h-[160px]`">
                        <i class="fa-solid fa-user-graduate text-[#6b4242] text-2xl mb-2"></i>
                        <span class="text-3xl font-black text-gray-800">5,000+</span>
                        <span class="text-xs text-gray-400 mt-1">Students Served</span>
                    </div>
                    <div class="bg-white border border-gray-100 shadow-sm rounded-xl p-6 flex flex-col items-center text-center justify-between `min-h-[160px]`">
                        <i class="fa-solid fa-chalkboard-user text-[#6b4242] text-2xl mb-2"></i>
                        <span class="text-3xl font-black text-gray-800">200+</span>
                        <span class="text-xs text-gray-400 mt-1">Teachers Training</span>
                    </div>
                    <div class="bg-white border border-gray-100 shadow-sm rounded-xl p-6 flex flex-col items-center text-center justify-between `min-h-[160px]`">
                        <i class="fa-solid fa-handshake text-[#6b4242] text-2xl mb-2"></i>
                        <span class="text-3xl font-black text-gray-800">20+</span>
                        <span class="text-xs text-gray-400 mt-1">Community Partners</span>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mt-6">
                    <div class="h-44 bg-gray-200 rounded-xl overflow-hidden shadow-sm">
                        <img src="<?php echo get_theme_file_uri('assets/images/7.png'); ?>" alt="Students" class="w-full h-full object-cover">
                    </div>
                    <div class="h-44 bg-gray-200 rounded-xl overflow-hidden shadow-sm flex flex-col gap-2">
                        <img src="<?php echo get_theme_file_uri('assets/images/3.png'); ?>" alt="Food/Community" class="w-full h-1/2 object-cover">
                        <img src="<?php echo get_theme_file_uri('assets/images/5.png'); ?>" alt="Food/Community" class="w-full h-1/2 object-cover">
                    </div>
                    <div class="h-44 bg-gray-200 rounded-xl overflow-hidden shadow-sm">
                        <img src="<?php echo get_theme_file_uri('assets/images/8.png'); ?>" alt="Students" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>

        </section>

    </main>

</body>
<?php get_footer();?>