<?php
/*
Template Name: Contact Us
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
<!-- SECTION 1: HERO -->
<section class="bg-brand-brown h-[500px] md:h-[700px]">
  <div class="max-w-7xl mx-auto px-[20px] 2xl:px-0 py-[64px] md:py-[50px] h-full flex items-end">
    <div class="max-w-2xl flex flex-col gap-[10px]">
      <h1 class="text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-black text-text-light font-heading uppercase">
        REACH OUT TODAY 
      </h1>
      <p class="text-[14px] sm:text-[15px] md:text-[16px] lg:text-[18px] text-text-light/80">
        Have questions about our work or want to support our mission? Get in touch with our team and let’s start a conversation.
      </p>
    </div>
  </div>
</section>

<!-- SECTION 2: CONTACT DETAILS & LOCATION MAP -->
<section class="bg-brand-cream">
  <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-[30px] lg:gap-[50px] py-[64px] md:py-[50px] px-[20px] 2xl:px-0">
    
    <!-- Left Column: Contact Info -->
    <div class="anim-slide-left anim-delay-1 order-2 md:order-1 flex flex-col gap-[20px]">
      
      <!-- Email Card -->
      <div class="group rounded-[28px] bg-white p-[24px] md:p-[32px] flex items-center border-l-4 border-brand-blue gap-[20px] shadow-md hover:shadow-xl transition-shadow duration-300">
        <div class="w-16 h-16 rounded-full bg-brand-blue/20 flex items-center justify-center flex-shrink-0 text-brand-blue">
          <span class="icon-[material-symbols--mail-rounded] w-6 h-6 flex-shrink-0 transition-transform duration-500 group-hover:rotate-45"></span>
        </div>
        <div>
          <h3 class="font-bold text-text-main uppercase text-[16px] sm:text-[18px] md:text-[20px] tracking-wide">
            Email
          </h3>
          <p class="text-text-main/80 text-[14px] sm:text-[15px] md:text-[16px] mt-0.5">
            example@gmail.com
          </p>
        </div>
      </div>

      <!-- Address Card -->
      <div class="group rounded-[28px] bg-white p-[24px] md:p-[32px] flex items-center border-l-4 border-brand-pink gap-[20px] shadow-md hover:shadow-xl transition-shadow duration-300">
        <div class="w-16 h-16 rounded-full bg-brand-pink/20 flex items-center justify-center flex-shrink-0 text-brand-pink">
          <span class="icon-[ic--sharp-location-on] w-6 h-6 flex-shrink-0 transition-transform duration-500 group-hover:rotate-45"></span>
        </div>
        <div>
          <h3 class="font-bold text-text-main uppercase text-[16px] sm:text-[18px] md:text-[20px] tracking-wide">
            Address
          </h3>
          <p class="text-text-main/80 text-[14px] sm:text-[15px] md:text-[16px] mt-0.5">
            Toul Kork primary school, phnom penh
          </p>
        </div>
      </div>

      <!-- Telephone Card -->
      <div class="group rounded-[28px] bg-white p-[24px] md:p-[32px] flex items-start border-l-4 border-brand-orange gap-[20px] shadow-md hover:shadow-xl transition-shadow duration-300">
        <div class="w-16 h-16 rounded-full bg-brand-orange/20 flex items-center justify-center flex-shrink-0 text-brand-orange">
          <span class="icon-[solar--phone-bold] w-6 h-6 flex-shrink-0 transition-transform duration-500 group-hover:rotate-45"></span>
        </div>
        <div class="w-full">
          <h3 class="font-bold text-text-main uppercase text-[16px] sm:text-[18px] md:text-[20px] tracking-wide">
            telephone
          </h3>
          <div class="space-y-[10px] text-text-main/80 text-[14px] sm:text-[15px] md:text-[16px] mt-2">
            <div class="flex flex-col sm:flex-row sm:justify-between gap-0.5 sm:gap-2">
              <span class="font-medium text-text-main">Head Office:</span>
              <span>(+855) 68 901 971 / 17 525 815</span>
            </div>
            <div class="flex flex-col sm:flex-row sm:justify-between gap-0.5 sm:gap-2">
              <span class="font-medium text-text-main">Siem Reap Area Supervisor:</span>
              <span>+855 93 329 698</span>
            </div>
            <div class="flex flex-col sm:flex-row sm:justify-between gap-0.5 sm:gap-2">
              <span class="font-medium text-text-main">Kampong Speu Area Supervisor:</span>
              <span>+855 12 603 877</span>
            </div>
            <div class="flex flex-col sm:flex-row sm:justify-between gap-0.5 sm:gap-2">
              <span class="font-medium text-text-main">Kandal Area Supervisor:</span>
              <span>+855 081 49 61 78</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Notice Banner -->
      <div class="bg-brand-brown/10 border-l-4 border-brand-brown rounded-[28px] p-[24px] md:p-[32px] text-text-main text-[14px] sm:text-[15px] md:text-[16px]">
        Please use the contact information above, or fill out the form below:
      </div>
    </div>

    <!-- Right Column: Location Map Card -->
    <div class="anim-slide-right anim-delay-2 order-1 md:order-2 relative w-full h-[350px] md:h-auto min-h-[350px] rounded-[28px] overflow-hidden shadow-md group">
      <img
        src="<?php echo get_theme_file_uri('assets/images/error.png'); ?>"
        alt="Our Location"
        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
      >
      <div class="absolute bottom-3 left-3 right-3 md:bottom-5 md:left-5 md:right-5 bg-white/95 backdrop-blur-sm rounded-[20px] p-[24px] shadow-lg">
        <h3 class="text-[16px] sm:text-[18px] md:text-[20px] font-bold uppercase text-text-main">
          our location 
        </h3>
        <p class="text-[14px] sm:text-[15px] md:text-[16px] text-text-main/80 mt-1">
          toul kork primary school, phnom penh
        </p>
      </div>
    </div>

  </div>
</section>

<!-- SECTION 3: CONTACT FORM -->
<section class="bg-brand-teal py-[64px] md:py-[50px] px-[20px] 2xl:px-0">
  <div class="anim-fade-up anim-delay-3 max-w-2xl mx-auto">
    <div class="bg-brand-cream rounded-[28px] shadow-xl p-[24px] md:p-[32px] flex flex-col gap-[24px]">
      
      <!-- Form Title -->
      <div class="text-center flex flex-col gap-[10px]">
        <h2 class="text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-bold font-heading uppercase text-text-main tracking-wide">
          SEND US A MESSAGE
        </h2>
        <p class="text-text-main/80 font-sans text-[14px] sm:text-[15px] md:text-[16px]">
          Fill out the form below and a member of our administrative staff will get back to you as soon as possible.
        </p>
      </div>

      <!-- Success / Error Feedback Message -->
      <p id="form-feedback" class="hidden text-center font-medium my-2"></p>

      <!-- Form -->
      <form id="contact-form" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post" class="space-y-[20px]" novalidate>
        <input type="hidden" name="action" value="handle_general_inquiry">
        <?php wp_nonce_field('general_inquiry_nonce', 'general_inquiry_nonce_field'); ?>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-[20px]">
          <!-- Name Input -->
          <div>
            <label for="your_name" class="block text-[14px] sm:text-[15px] md:text-[16px] font-sans font-medium text-text-main/80 mb-[10px]">
              Your name
            </label>
            <input type="text" id="your_name" name="your_name" placeholder="John Doe" required
              class="w-full border-l-4 border border-brand-yellow rounded-[28px] p-[24px] md:p-[32px] text-text-muted placeholder:text-text-muted/50 focus:outline-brand-yellow bg-white shadow-sm">
            <p class="error-message hidden items-center gap-1 text-red-500 text-sm mt-2">
              <span class="icon-[material-symbols--error-circle-rounded-outline-sharp] w-5 h-5 flex-shrink-0"></span>
              <span>name required</span>
            </p>
          </div>

          <!-- Email Input -->
          <div>
            <label for="your_email" class="block text-[14px] sm:text-[15px] md:text-[16px] font-sans font-medium text-text-main/80 mb-[10px]">
              Your email
            </label>
            <input type="email" id="your_email" name="your_email" placeholder="example@gmail.com" required
              class="w-full border-l-4 border border-brand-yellow rounded-[28px] p-[24px] md:p-[32px] text-text-muted placeholder:text-text-muted/50 focus:outline-brand-yellow bg-white shadow-sm">
            <p class="error-message hidden items-center gap-1 text-red-500 text-sm mt-2">
              <span class="icon-[material-symbols--error-circle-rounded-outline-sharp] w-5 h-5 flex-shrink-0"></span>
              <span>email required</span>
            </p>
          </div>
        </div>

        <!-- Subject Input -->
        <div>
          <label for="subject" class="block text-[14px] sm:text-[15px] md:text-[16px] font-sans font-medium text-text-main/80 mb-[10px]">
            Subject
          </label>
          <input type="text" id="subject" name="subject" placeholder="what is on your mind?" required
            class="w-full border-l-4 border border-brand-yellow rounded-[28px] p-[24px] md:p-[32px] text-text-muted placeholder:text-text-muted/50 focus:outline-brand-yellow bg-white shadow-sm">
          <p class="error-message hidden items-center gap-1 text-red-500 text-sm mt-2">
            <span class="icon-[material-symbols--error-circle-rounded-outline-sharp] w-5 h-5 flex-shrink-0"></span>
            <span>subject required</span>
          </p>
        </div>

        <!-- Message Input -->
        <div>
          <label for="message" class="block text-[14px] sm:text-[15px] md:text-[16px] font-sans font-medium text-text-main/80 mb-[10px]">
            Your message
          </label>
          <textarea id="message" name="message" rows="5" placeholder="write your message here..." required
            class="w-full border-l-4 border border-brand-yellow rounded-[28px] p-[24px] md:p-[32px] text-text-muted placeholder:text-text-muted/50 focus:outline-brand-yellow resize-none bg-white shadow-sm"></textarea>
          <p class="error-message hidden items-center gap-1 text-red-500 text-sm mt-2">
            <span class="icon-[material-symbols--error-circle-rounded-outline-sharp] w-5 h-5 flex-shrink-0"></span>
            <span>message required</span>
          </p>
        </div>

        <!-- Submit Button -->
        <button type="submit" id="contact-submit-btn"
          class="inline-flex items-center justify-center gap-2 bg-brand-yellow text-text-main/80 font-semibold px-[28px] py-[14px] rounded-[28px] hover:bg-brand-orange hover:text-text-light focus:outline-none focus:ring-2 focus:ring-brand-yellow focus:ring-offset-2 transition-all duration-300 hover:scale-105 active:scale-95 shadow-md">
          <span>Send</span>
          <span class="icon-[mynaui--send-solid] w-5 h-5 flex-shrink-0"></span>
        </button>
      </form>

    </div>
  </div>
</section>

<!-- EmailJS -->
<script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {

    // ---- Config ----
    const EMAILJS_PUBLIC_KEY = "9t73pdHwxTmtiFX1S";
    const EMAILJS_SERVICE_ID = "service_rtxxxej";
    const EMAILJS_TEMPLATE_ID = "template_wra01kt";
    const SUCCESS_HIDE_DELAY_MS = 5000;

    const form = document.getElementById('contact-form');
    const submitBtn = document.getElementById('contact-submit-btn');
    const feedback = document.getElementById('form-feedback');

    if (!form || !submitBtn || !feedback) {
        console.error('Contact form: required element(s) missing (#contact-form, #contact-submit-btn, #form-feedback).');
        return;
    }

    let hideTimer = null;

    function showFeedback(message, type) {
        // Clear any pending auto-hide from a previous message
        if (hideTimer) {
            clearTimeout(hideTimer);
            hideTimer = null;
        }

        feedback.textContent = message;
        feedback.classList.remove('hidden', 'text-red-600', 'text-green-700');
        feedback.classList.add(type === 'error' ? 'text-red-600' : 'text-green-700');
        feedback.setAttribute('role', 'status');
        feedback.setAttribute('aria-live', 'polite');

        // Only success messages auto-hide; errors stay until the user fixes things and resubmits
        if (type === 'success') {
            hideTimer = setTimeout(function () {
                feedback.classList.add('hidden');
                hideTimer = null;
            }, SUCCESS_HIDE_DELAY_MS);
        }
    }

    function setFieldError(field, hasError) {
        const errorMsg = field.parentElement.querySelector('.error-message');
        field.classList.toggle('border-red-400', hasError);
        field.setAttribute('aria-invalid', hasError ? 'true' : 'false');
        if (errorMsg) {
            errorMsg.classList.toggle('hidden', !hasError);
            errorMsg.classList.toggle('flex', hasError);
        }
    }

    function isValidEmail(value) {
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value.trim());
    }

    function validateForm() {
        let valid = true;

        form.querySelectorAll('[required]').forEach(function (field) {
            const value = field.value.trim();
            let fieldValid = value.length > 0;

            if (fieldValid && field.type === 'email' && !isValidEmail(value)) {
                fieldValid = false;
            }

            setFieldError(field, !fieldValid);
            if (!fieldValid) valid = false;
        });

        return valid;
    }

    function setLoading(isLoading) {
        submitBtn.disabled = isLoading;
        submitBtn.classList.toggle('opacity-60', isLoading);
        submitBtn.classList.toggle('cursor-not-allowed', isLoading);
        // Button text is left untouched so the layout never shifts
    }

    // Guard: make sure the EmailJS library actually loaded
    if (typeof emailjs === 'undefined') {
        console.error('EmailJS library failed to load (check ad-blockers, network, or CDN access).');
        showFeedback('<?php echo esc_html( get_field('error_massage_not_fine') ); ?>', 'error');
        submitBtn.disabled = true;
        submitBtn.classList.add('opacity-60', 'cursor-not-allowed');
        return;
    }

    emailjs.init(EMAILJS_PUBLIC_KEY);

    // Clear inline error state as the user fixes a field
    form.querySelectorAll('[required]').forEach(function (field) {
        field.addEventListener('input', function () {
            if (field.value.trim()) setFieldError(field, false);
        });
    });

    let isSubmitting = false;

    form.addEventListener('submit', function (e) {
        e.preventDefault();

        if (isSubmitting) return; // guard against double-click / double-submit
        if (!validateForm()) return;

        // Honeypot check (add a hidden input named "website" in the form if not present)
        const honeypot = form.querySelector('[name="website"]');
        if (honeypot && honeypot.value.trim() !== '') {
            console.warn('Honeypot triggered, silently ignoring submission.');
            form.reset();
            return;
        }

        isSubmitting = true;
        setLoading(true);
        feedback.classList.add('hidden');

        const templateParams = {
            name: document.getElementById('your_name').value.trim(),
            email: document.getElementById('your_email').value.trim(),
            subject: document.getElementById('subject').value.trim(),
            message: document.getElementById('message').value.trim()
        };

        emailjs.send(EMAILJS_SERVICE_ID, EMAILJS_TEMPLATE_ID, templateParams)
            .then(function (response) {
                console.log('EmailJS SUCCESS!', response.status, response.text);

                // Fire-and-forget WP logging; don't block success UX on it
                const formData = new FormData(form);
                fetch(form.action, { method: 'POST', body: formData })
                    .catch(function (err) {
                        console.error('WP logging failed (email still sent):', err);
                    });

                showFeedback('<?php echo esc_html( get_field('sent_message_fine') ); ?>', 'success');
                form.reset();
            })
            .catch(function (error) {
                console.error('EmailJS FAILED...', error);
                showFeedback(
                    'Something went wrong: ' + (error && error.text ? error.text : 'please try again.'),
                    'error'
                );
            })
            .finally(function () {
                isSubmitting = false;
                setLoading(false);
            });
    });
});
</script>

<?php
get_footer();