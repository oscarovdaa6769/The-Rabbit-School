<?php
/*
Template Name: Contact Page
*/
get_header();
?>

<style>
@keyframes fadeUp {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}
@keyframes slideInLeft {
    from { opacity: 0; transform: translateX(-30px); }
    to { opacity: 1; transform: translateX(0); }
}
@keyframes slideInRight {
    from { opacity: 0; transform: translateX(30px); }
    to { opacity: 1; transform: translateX(0); }
}
.anim-fade-up {
    opacity: 0;
    animation: fadeUp 0.6s ease-out forwards;
}
.anim-slide-left {
    opacity: 0;
    animation: slideInLeft 0.6s ease-out forwards;
}
.anim-slide-right {
    opacity: 0;
    animation: slideInRight 0.6s ease-out forwards;
}
.anim-delay-1 { animation-delay: 0.1s; }
.anim-delay-2 { animation-delay: 0.2s; }
.anim-delay-3 { animation-delay: 0.3s; }
.anim-delay-4 { animation-delay: 0.4s; }
.anim-delay-5 { animation-delay: 0.5s; }
.anim-delay-6 { animation-delay: 0.6s; }
</style>

<section class="py-16 px-4">
    <div class="anim-fade-up max-w-7xl mx-auto text-center mb-12">
        <h1 class="text-4xl font-black text-[#5c2e2e] tracking-wide">CONTACT US</h1>
        <p class="text-[#5c2e2e]  mt-3 max-w-xl mx-auto">
            We'd love to hear from you! Whether you have questions, feedback, or
            just want to say hello, feel free to reach out.
        </p>
    </div>

    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-10">

        <!-- LEFT: Get In Touch -->
        <div class="anim-slide-left anim-delay-1 order-2 lg:order-1">
            <h2 class="text-3xl font-extrabold text-[#5c2e2e] mb-1">GET IN TOUCH</h2>
            <p class="text-[#5c2e2e]  mb-6">Have any questions? We'd love to hear from you!</p>

            <!-- Email -->
            <div class="border border-gray-200 rounded-3xl p-5 mb-4 flex items-center gap-4">
                <div class="w-15 h-15 rounded-[30%] bg-[#f2c14e] flex items-center justify-center flex-shrink-0">
                    <svg class="w-7 h-7 text-[#5c2e2e]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                </div>
                <div>
                    <h3 class="font-bold text-[#5c2e2e] uppercase text-[20px] tracking-wide">E-mail</h3>
                    <p class="text-[#5c2e2e]  text-ls">info@rabbitschoolcambodia.net</p>
                </div>
            </div>

            <!-- Address -->
            <div class="border border-gray-200 rounded-3xl p-5 mb-4 flex items-center gap-4">
                <div class="w-15 h-15 rounded-[30%] bg-[#f2c14e] flex items-center justify-center flex-shrink-0">
                    <svg class="w-7 h-7 text-[#5c2e2e]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a2 2 0 01-2.828 0l-4.243-4.243a8 8 0 1111.314 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                </div>
                <div>
                    <h3 class="font-bold text-[#5c2e2e] uppercase text-[20px] tracking-wide">Address</h3>
                    <p class="text-[#5c2e2e]  text-ls">Toul Kork Primary School, Phnom Penh</p>
                </div>
            </div>

            <!-- Telephone -->
            <div class="border border-gray-200 rounded-3xl p-5 mb-6 flex items-start gap-4">
                <div class="w-15 h-15 rounded-[30%] bg-[#f2c14e] flex items-center justify-center flex-shrink-0">
                    <svg class="7-6 h-7 text-[#5c2e2e]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                </div>
                <div class="w-full">
                    <h3 class="font-bold text-[#5c2e2e] uppercase text-[20px] tracking-wide mb-2">Telephone</h3>
                    <div class="space-y-3 text-ls text-[#5c2e2e] ">
                        <div class="flex justify-between gap-4">
                            <span>Head Office:</span>
                            <span>(+855) 68 901 971 /17 525 815</span>
                        </div>
                        <div class="flex justify-between gap-4">
                            <span>Siem Reap Area Supervisor:</span>
                            <span>+855 93 329 698</span>
                        </div>
                        <div class="flex justify-between gap-4">
                            <span>Kampong Speu Area Supervisor:</span>
                            <span>+855 12 603 877</span>
                        </div>
                        <div class="flex justify-between gap-4">
                            <span>Kandal Area Supervisor:</span>
                            <span>+855 081 49 61 78</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Note box -->
            <div class="bg-[#f7e9a8] border-l-5 border-[#f2c14e] rounded p-5 text-[#5c2e2e] text-ls">
                Please use the contact information above, or fill the form below:
            </div>
        </div>

        <!-- RIGHT: Location Image Card -->
        <div class="anim-slide-right anim-delay-2 order-1 lg:order-2 relative w-full h-[300px] md:h-[400px] lg:h-[73%] rounded-3xl overflow-hidden shadow-lg group">
            <img
                src="<?php echo get_theme_file_uri(); ?>/assets/images/NewPictureP15.webp"
                alt="Our Location"
                class="w-full h-full object-cover transition-transform duration-500 ease-out group-hover:scale-110"
            >
            <div class="absolute bottom-3 left-3 right-3 md:bottom-5 md:left-5 md:right-5 bg-white rounded-xl shadow-lg p-4 md:p-5">
                <h3 class="font-extrabold text-[#5c1f2e] uppercase tracking-wide mb-1 text-base">Our Location</h3>
                <p class="text-[#5c1f2e] text-sm">Toul Kork Primary School, Phnom Penh</p>
            </div>
        </div>

    </div>
</section>

<!-- GENERAL INQUIRIES FORM -->
<section class="bg-[#623D3C]/[9%] py-12 md:py-24">
    <div class="anim-fade-up anim-delay-3 max-w-2xl mx-auto px-6">
        <div class="bg-white rounded-3xl shadow-lg border border-[#f0e4e0] p-8 sm:p-10 md:p-12">
            <div class="text-center mb-8">
                <h2 class="text-3xl md:text-4xl font-extrabold uppercase text-[#5c1f2e] mb-3 tracking-wide">General Inquiries</h2>
                <p class="text-[#5c1f2e] text-base text-ls">Feel free to drop us a line below.</p>
            </div>

            <form id="contact-form" action="" method="post" class="space-y-6" novalidate>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="your_name" class="block text-ls font-medium text-[#5c1f2e] mb-2">Full Name</label>
                        <input type="text" id="your_name" name="your_name" placeholder="John Doe" required
                            class="w-full border border-gray-300 rounded-2xl px-4 py-4 text-gray-700 placeholder-gray-400 focus:outline-none focus:border-double focus:border-[#5c1f2e]">
                        <p class="error-message hidden items-center gap-1 text-red-600 text-sm mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="9" />
                                <path stroke-linecap="round" d="M12 8v4" />
                                <path stroke-linecap="round" d="M12 16h.01" />
                            </svg>
                            Name is required
                        </p>
                    </div>
                    <div>
                        <label for="your_email" class="block text-ls font-medium text-[#5c1f2e] mb-2">Email</label>
                        <input type="email" id="your_email" name="your_email" placeholder="example@gmail.com" required
                            class="w-full border border-gray-300 rounded-2xl px-4 py-4 text-gray-700 placeholder-gray-400 focus:outline-none focus:border-double  focus:border-[#5c1f2e]">
                        <p class="error-message hidden items-center gap-1 text-red-600 text-sm mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="9" />
                                <path stroke-linecap="round" d="M12 8v4" />
                                <path stroke-linecap="round" d="M12 16h.01" />
                            </svg>
                            Email is required
                        </p>
                    </div>
                </div>

                <div>
                    <label for="subject" class="block text-ls font-medium text-[#5c1f2e] mb-2">Subject</label>
                    <input type="text" id="subject" name="subject" placeholder="What's on your mind?" required
                        class="w-full border border-gray-300 rounded-2xl px-4 py-4 text-gray-700 placeholder-gray-400 focus:outline-none focus:border-double  focus:border-[#5c1f2e]">
                    <p class="error-message hidden items-center gap-1 text-red-600 text-sm mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="9" />
                            <path stroke-linecap="round" d="M12 8v4" />
                            <path stroke-linecap="round" d="M12 16h.01" />
                        </svg>
                        Subject is required
                    </p>
                </div>

                <div>
                    <label for="message" class="block text-ls font-medium text-[#5c1f2e] mb-2">Message</label>
                    <textarea id="message" name="message" rows="6" placeholder="Write your message here... We'd love to hear from you!" required
                        class="w-full border border-gray-300 rounded-2xl px-4 py-4 text-gray-700 placeholder-gray-400 resize-none focus:outline-none focus:border-double  focus:border-[#5c1f2e]"></textarea>
                    <p class="error-message hidden items-center gap-1 text-red-600 text-sm mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="9" />
                            <path stroke-linecap="round" d="M12 8v4" />
                            <path stroke-linecap="round" d="M12 16h.01" />
                        </svg>
                        Message is required
                    </p>
                </div>
            <button type="submit"
                class="inline-flex items-center justify-center gap-2 bg-[#5c1f2e] text-white font-semibold px-8 py-4 rounded-full hover:bg-[#4a1824] focus:outline-none focus:ring-2 focus:ring-[#5c1f2e] focus:ring-offset-2 transition-all duration-300 ease-out hover:scale-105 active:scale-95">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 640 640"><!--!Font Awesome Free v7.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path d="M568.4 37.7C578.2 34.2 589 36.7 596.4 44C603.8 51.3 606.2 62.2 602.7 72L424.7 568.9C419.7 582.8 406.6 592 391.9 592C377.7 592 364.9 583.4 359.6 570.3L295.4 412.3C290.9 401.3 292.9 388.7 300.6 379.7L395.1 267.3C400.2 261.2 399.8 252.3 394.2 246.7C388.6 241.1 379.6 240.7 373.6 245.8L261.2 340.1C252.1 347.7 239.6 349.7 228.6 345.3L70.1 280.8C57 275.5 48.4 262.7 48.4 248.5C48.4 233.8 57.6 220.7 71.5 215.7L568.4 37.7z"/></svg>
                Send
            </button>
            </form>
        </div>
    </div>
</section>

<script>
document.getElementById('contact-form').addEventListener('submit', function(e) {
    e.preventDefault();
    let valid = true;
    this.querySelectorAll('[required]').forEach(function(field) {
        const errorMsg = field.parentElement.querySelector('.error-message');
        if (!field.value.trim()) {
            valid = false;
            errorMsg.classList.remove('hidden');
            errorMsg.classList.add('flex');
            field.classList.add('border-red-400');
        } else {
            errorMsg.classList.add('hidden');
            errorMsg.classList.remove('flex');
            field.classList.remove('border-red-400');
        }
    });
    if (valid) {
        this.submit();
    }
});
</script>

<?php
get_footer();