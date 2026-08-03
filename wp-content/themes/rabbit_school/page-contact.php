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

<section class="py-16 md:py-20 px-6 text-center bg-white">
    <div class="anim-fade-up">
        <h1 class="font-heading text-4xl md:text-5xl font-extrabold tracking-wide text-[#5c1f2e] uppercase mb-4 md:mb-6">
            Contact Us
        </h1>
        <p class="max-w-2xl mx-auto text-[#5c1f2e] text-lg leading-relaxed">
            We'd love to hear from you! Whether you have questions, feedback, or just want to say hello,
            feel free to reach out.
        </p>
    </div>
</section>

<section class="max-w-7xl mx-auto px-6 pb-16 md:pb-24 grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-stretch">

    <!-- LEFT: Get In Touch -->
    <div class="anim-slide-left">
        <h2 class="text-3xl font-extrabold text-[#5c1f2e] mb-3">Get In Touch</h2>
        <p class="text-[#5c1f2e] text-base mb-6 md:mb-8">Have any questions? We'd love to hear from you!</p>

        <div class="space-y-4 md:space-y-5">

            <!-- Email -->
            <div class="anim-fade-up anim-delay-1 flex items-center gap-4 bg-gray-50 rounded-xl p-4 md:p-5">
                <div class="w-12 h-12 flex items-center justify-center rounded-full bg-[#5c1f2e] text-white shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>
                <div>
                    <p class="text-gray-500 text-sm">E-mail</p>
                    <p class="font-bold text-[#5c1f2e] text-base break-all">info@rabbitschoolcambodia.net</p>
                </div>
            </div>

            <!-- Address -->
            <div class="anim-fade-up anim-delay-2 flex items-center gap-4 bg-gray-50 rounded-xl p-4 md:p-5">
                <div class="w-12 h-12 flex items-center justify-center rounded-full bg-[#5c1f2e] text-white shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a2 2 0 01-2.828 0l-4.243-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
                <div>
                    <p class="text-gray-500 text-sm">Address</p>
                    <p class="font-bold text-[#5c1f2e] text-base">Toul Kork Primary School, Phnom Penh</p>
                </div>
            </div>

            <!-- Telephone -->
            <div class="anim-fade-up anim-delay-3 flex items-start gap-4 bg-gray-50 rounded-xl p-4 md:p-5">
                <div class="w-12 h-12 flex items-center justify-center rounded-full bg-[#5c1f2e] text-white shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                </div>
                <div>
                    <p class="text-gray-500 text-sm mb-1">Telephone</p>
                    <p class="font-bold text-[#5c1f2e] leading-relaxed text-base">
                        Head Office: (+855) 68 901 971 /17 525 815<br>
                        Siem Reap Area Supervisor: +855 93 329 698<br>
                        Kampong Speu Area Supervisor: +855 12 603 877<br>
                        Kandal Area Supervisor: +855 081 49 61 78
                    </p>
                </div>
            </div>

            <!-- Notice -->
            <div class="anim-fade-up anim-delay-4 bg-yellow-50 border border-yellow-100 rounded-xl p-4 md:p-5">
                <p class="text-yellow-800 text-sm">
                    Please use the contact information above, or fill the form below:
                </p>
            </div>

        </div>
    </div>

    <!-- RIGHT: Location Image Card -->
    <div class="anim-slide-right anim-delay-2 relative w-full h-[300px] md:h-[400px] lg:h-[80%] rounded-2xl overflow-hidden shadow-lg group">
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

</section>

<!-- GENERAL INQUIRIES FORM -->
<section class="bg-[#623D3C]/[9%] py-12 md:py-24">
    <div class="max-w-3xl mx-auto px-6">
        <div class="anim-fade-up anim-delay-5 bg-white rounded-2xl shadow-lg p-6 sm:p-8 md:p-12">
            <div class="text-center mb-6 md:mb-8">
                <h2 class="text-3xl font-extrabold text-[#5c1f2e] mb-2">General Inquiries</h2>
                <p class="text-[#5c1f2e] text-base">Feel free to drop us a line below.</p>
            </div>

            <form id="contact-form" action="" method="post" class="space-y-5 md:space-y-6" novalidate>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-6">
                    <div>
                        <label for="your_name" class="block text-sm text-[#5c1f2e] mb-2">Your Name</label>
                        <input type="text" id="your_name" name="your_name" placeholder="Enter your name" required
                            class="w-full border border-gray-300 rounded-lg px-4 py-3 text-gray-700 placeholder-gray-400 transition-all duration-300 ease-out focus:outline-none focus:ring-2 focus:ring-[#5c1f2e] focus:border-transparent focus:scale-[1.02] focus:shadow-md">
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
                        <label for="your_email" class="block text-sm text-[#5c1f2e] mb-2">Your Email</label>
                        <input type="email" id="your_email" name="your_email" placeholder="Enter your email" required
                            class="w-full border border-gray-300 rounded-lg px-4 py-3 text-gray-700 placeholder-gray-400 transition-all duration-300 ease-out focus:outline-none focus:ring-2 focus:ring-[#5c1f2e] focus:border-transparent focus:scale-[1.02] focus:shadow-md">
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
                    <label for="subject" class="block text-sm text-[#5c1f2e] mb-2">Subject</label>
                    <input type="text" id="subject" name="subject" placeholder="Enter subject" required
                        class="w-full border border-gray-300 rounded-lg px-4 py-3 text-gray-700 placeholder-gray-400 transition-all duration-300 ease-out focus:outline-none focus:ring-2 focus:ring-[#5c1f2e] focus:border-transparent focus:scale-[1.02] focus:shadow-md">
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
                    <label for="message" class="block text-sm text-[#5c1f2e] mb-2">Your Message</label>
                    <textarea id="message" name="message" rows="6" placeholder="Enter your message" required
                        class="w-full border border-gray-300 rounded-lg px-4 py-3 text-gray-700 placeholder-gray-400 resize-none transition-all duration-300 ease-out focus:outline-none focus:ring-2 focus:ring-[#5c1f2e] focus:border-transparent focus:scale-[1.02] focus:shadow-md"></textarea>
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
                    class="w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-[#5c1f2e] text-white font-semibold px-6 py-3 rounded-full hover:bg-[#4a1824] focus:outline-none focus:ring-2 focus:ring-[#5c1f2e] focus:ring-offset-2 transition-colors duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z" />
                    </svg>
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