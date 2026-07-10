<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join Our Team - The Rabbit School</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Oswald:wght@700&display=swap" rel="stylesheet">

    <style>
        .font-heading {
            font-family: 'Oswald', sans-serif;
        }

        .font-body {
            font-family: 'Inter', sans-serif;
        }
@keyframes fadeInUp {
  
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
    </style>
</head>

<body class="bg-white text-gray-800 font-body">

    <?php
    get_header();
    ?>

    <section class="relative bg-gray-900 text-white min-h-[480px] md:min-h-[600px] flex items-end overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img
                src="<?php echo get_theme_file_uri(); ?>/assets/images/NewPicturesP10.webp"
                alt="Child leaning against a blue wall"
                class="w-full h-full object-cover object-center transform scale-105 hover:scale-100 transition-transform duration-700 brightness-[0.85]" />
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
        </div>
        <div class="absolute inset-0 bg-gradient-to-r from-black/60 via-black/30 to-transparent"></div>

        <div class="relative max-w-7xl mx-auto px-6 pb-16 pt-20 w-full">
            <div class="max-w-2xl">
                <h1 class="text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-heading font-black uppercase mb-4 text-white">
                    Join Our Team
                </h1>
                <p class="text-base md:text-lg font-medium mb-8 text-gray-200 max-w-xl leading-relaxed">
                    help create opportunities for children and youth with intellectual disabilities and autism Cambodia
                </p>
                <a href="#" class="bg-amber-950/90 border border-white/20 text-white px-6 py-3.5 rounded-md text-xs font-bold uppercase tracking-widest flex items-center space-x-3 hover:bg-amber-950 transition shadow-lg inline-flex decoration-none">
                    <span>Learn More About Us</span>
                    <i class="fa-solid fa-arrow-right-long"></i>
                </a>
            </div>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-6 py-20">
        <h2 class=" text-center text-amber-950 text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-heading font-black  uppercase mb-10 ">
            Opportunities We're Preparing For You
        </h2>

<div class="grid grid-cols-1 md:grid-cols-3 gap-8 dynamic-cards-container">
    
    <div class="bg-amber-50/20 border border-gray-200 rounded-2xl p-8 text-center flex flex-col items-center group hover:scale-[1.03] hover:shadow-2xl hover:border-amber-200 transition-all duration-300 ease-out transform opacity-0 animate-[fadeInUp_0.6s_ease-out_forwards]">
        <div class="text-amber-950 text-3xl mb-5 bg-gray-50 w-14 h-14 rounded-full flex items-center justify-center group-hover:bg-amber-950 group-hover:text-white transition-colors duration-300">
            <i class="fa-solid fa-briefcase"></i>
        </div>

        <h3 class="text-amber-400 text-xl sm:text-2xl mb-4 lg:text-3xl font-heading font-black uppercase tracking-wide">
            Careers
        </h3>

        <p class="text-gray-500 text-sm leading-relaxed max-w-xs">
            Full-time opportunities to grow your career while creating impact.
        </p>
        <div class="w-16 h-1 bg-amber-400 mt-3 mb-4 rounded-full group-hover:w-24 transition-all duration-300"></div>
    </div>

    <div class="bg-amber-50/20 border border-gray-200 rounded-2xl p-8 text-center flex flex-col items-center group hover:scale-[1.03] hover:shadow-2xl hover:border-amber-200 transition-all duration-300 ease-out transform opacity-0 animate-[fadeInUp_0.6s_ease-out_0.2s_forwards]">
        <div class="text-amber-950 text-3xl mb-5 bg-gray-50 w-14 h-14 rounded-full flex items-center justify-center group-hover:bg-amber-950 group-hover:text-white transition-colors duration-300">
            <i class="fa-solid fa-hand-holding-heart"></i>
        </div>
        
        <h3 class="text-amber-400 text-xl sm:text-2xl mb-4 lg:text-3xl font-heading font-black uppercase tracking-wide">
            Volunteer
        </h3>
        
        <p class="text-gray-500 text-sm leading-relaxed max-w-xs">
            Share your skills and time to support meaningful inclusive education.
        </p>
        <div class="w-16 h-1 bg-amber-400 mt-3 mb-4 rounded-full group-hover:w-24 transition-all duration-300"></div>
    </div>

    <div class="bg-amber-50/20 border border-gray-200 rounded-2xl p-8 text-center flex flex-col items-center group hover:scale-[1.03] hover:shadow-2xl hover:border-amber-200 transition-all duration-300 ease-out transform opacity-0 animate-[fadeInUp_0.6s_ease-out_0.4s_forwards]">
        <div class="text-amber-950 text-3xl mb-5 bg-gray-50 w-14 h-14 rounded-full flex items-center justify-center group-hover:bg-amber-950 group-hover:text-white transition-colors duration-300">
            <i class="fa-solid fa-user-graduate"></i>
        </div>
        
        <h3 class="text-amber-400 text-xl sm:text-2xl mb-4 lg:text-3xl font-heading font-black uppercase tracking-wide">
            Internship
        </h3>
        
        <p class="text-gray-500 text-sm leading-relaxed max-w-xs">
            Gain hands-on experience and field knowledge with our passionate team.
        </p>
        <div class="w-16 h-1 bg-amber-400 mt-3 mb-4 rounded-full group-hover:w-24 transition-all duration-300"></div>
    </div>

</div>
    </section>

    <section class="max-w-7xl mx-auto px-6 pb-28">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-stretch">

            <div class="flex flex-col">
                <h2 class="text-4xl text-amber-950 uppercase tracking-tight mb-8 sm:text-2xl lg:text-3xl font-heading font-black">
                    Open Roles
                </h2>

                <div class="border border-gray-200 rounded-2xl p-6 bg-white flex-1 flex flex-col justify-between space-y-4">

                    <div class="bg-gray-50 p-5 rounded-xl flex justify-between items-center group hover:bg-gray-100 transition decoration-none block">
                        <div>
                            <h4 class="font-bold text-amber-950 text-sm md:text-base tracking-wide uppercase">Special Education Teacher</h4>
                            <p class="text-xs text-amber-750 mt-1.5 font-medium">Full-time · Phnom Penh</p>
                        </div>
                        <a href="#" class="w-10 h-10 bg-white border border-gray-200 rounded-full flex items-center justify-center text-amber-950 shadow-sm group-hover:bg-amber-950 group-hover:text-white group-hover:border-transparent transition duration-300">
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>


                    <div class="bg-gray-50 p-5 rounded-xl flex justify-between items-center group hover:bg-gray-100 transition decoration-none block">


                        <div>
                            <h4 class="font-bold text-amber-950 text-sm md:text-base tracking-wide uppercase">Vocational Training Assistant</h4>
                            <p class="text-xs text-amber-750 mt-1.5 font-medium">Part-time · Siem Reap</p>
                        </div>
                        <a href="#" class="w-10 h-10 bg-white border border-gray-200 rounded-full flex items-center justify-center text-amber-950 shadow-sm group-hover:bg-amber-950 group-hover:text-white group-hover:border-transparent transition duration-300">
                            <i class="fa-solid fa-arrow-right"></i>

                        </a>
                    </div>

                    <div class="bg-gray-50 p-5 rounded-xl flex justify-between items-center group hover:bg-gray-100 transition decoration-none block">
                        <div>
                            <h4 class="font-bold text-amber-950 text-sm md:text-base tracking-wide uppercase">Social Work Coordinator</h4>
                            <p class="text-xs text-amber-750 mt-1.5 font-medium">Full-time · Kampong Speu</p>
                        </div>
                        <a href="#" class="w-10 h-10 bg-white border border-gray-200 rounded-full flex items-center justify-center text-amber-950 shadow-sm group-hover:bg-amber-950 group-hover:text-white group-hover:border-transparent transition duration-300">
                            <i class="fa-solid fa-arrow-right"></i>

                        </a>
                    </div>
                </div>
            </div>
            <div class="bg-amber-950 text-white rounded-2xl p-8 md:p-10 shadow-xl flex flex-col justify-between pt-[76px]">
                <div>
                    <h3 class="font-heading text-4xl uppercase tracking-wide mb-4 font-black">Stay Connected</h3>
                    <p class="text-sm text-gray-300 leading-relaxed mb-8 font-medium">
                        While we're preparing this page, we'd love to hear from passionate people who want to make a difference.
                    </p>
                </div>

                <div class="space-y-6">
                    <div class="flex items-center space-x-4">
                        <div class="w-14 h-14 bg-white/10 rounded-full flex items-center justify-center text-xl flex-shrink-0">
                            <i class="fa-regular fa-envelope"></i>
                        </div>
                        <div>
                            <h5 class="text-[14px] font-black  uppercase tracking-widest text-white">Email Us</h5>
                            <a href="mailto:info@rabbitschoolcambodia.net" class="text-sm md:text-base hover:underline font-semibold text-gray-100 block mt-0.5">info@rabbitschoolcambodia.net </a>
                        </div>
                    </div>

                    <div class="flex items-center space-x-4">
                        <div class="w-14 h-14 bg-white/10 rounded-full flex items-center justify-center text-xl flex-shrink-0">
                            <i class="fa-brands fa-telegram"></i>
                        </div>
                        <div>
                            <h5 class="text-[14px] font-black uppercase tracking-widest text-white">Telegram Channel</h5>
                            <a href="#" class="text-sm md:text-base hover:underline font-semibold text-gray-100 block mt-0.5">t.me/rabbitschool</a>
                        </div>
                    </div>

                    <div class="flex items-center space-x-4">
                        <div class="w-14 h-14 bg-white/10 rounded-full flex items-center justify-center text-xl flex-shrink-0">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div>
                            <h5 class="text-[14px] font-black uppercase tracking-widest text-white">Call Hotline</h5>
                            <a href="tel:+85568901971" class="text-sm md:text-base hover:underline font-semibold text-gray-100 block mt-0.5">(+855) 68 901 971 /17 525 815</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php get_footer(); ?>

</body>

</html>