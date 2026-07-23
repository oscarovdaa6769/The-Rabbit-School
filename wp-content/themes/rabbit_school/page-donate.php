<?php
/**
 * Template Name: Donate Page
 */

get_header();
?>

<section id="donate" class="w-full h-[60vh] min-h-[600px] max-h-[600px] relative bg-gray-300 overflow-hidden">
  <img src="https://www.rabbitschoolcambodia.net/_next/image?url=%2Fimages%2FNew%20Pictures%20P14.jpg&w=1920&q=75" alt="Smiling boy at school" class="w-full h-full object-cover object-center">
</section>

<main class="max-w-3xl mx-auto px-6 py-2 text-center md:text-left">
  
  <div class="max-w-3xl mx-auto px-4 py-12 font-sans text-gray-800 selection:bg-amber-100">
    
    <div class="text-center max-w-2xl mx-auto mb-10">
      <h2 class="text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px]  text-[#5c3e35] font-heading font-black  uppercase mb-6 4">
        Donate Now
      </h2>
      <p class="text-sm md:text-base text-gray-600 leading-relaxed">
        Your donation will help us continue to deliver critical support to the community and life transforming education opportunities for the most vulnerable. All donations are processed via our secure online payment portal. Simply complete the donation form below or contact your local office for support.
      </p>
    </div>

    <div class="space-y-10">
      <div class="space-y-3">
        <h3 class="text-xl font-bold text-[#5c3e35]">Give In-Kind</h3>
        <p class="text-sm md:text-base text-gray-700">
          If you would like to contribute with resources, these are things that are needed most:
        </p>
        <ul class="space-y-2 pl-5 list-disc text-sm md:text-base text-gray-600 marker:text-gray-700">
          <li>School materials such as books, pencils, DVDs (player) and educational games</li>
          <li>Children's books in Khmer</li>
          <li>Physiotherapy special devices and toys</li>
        </ul>
      </div>

      <div class="space-y-4">
        <div class="space-y-1">
          <h3 class="text-xl font-bold text-[#5c3e35]">Financial</h3>
          <p class="text-sm md:text-base text-gray-700">
            A single gift can change a child’s entire future.
          </p>
        </div>
        
        <ul class="space-y-3 pl-5 list-disc text-sm md:text-base text-gray-600 marker:text-gray-700">
          <li>
            <strong class="font-bold text-[#FF8D28]">$60</strong> opens the classroom door for one month.
          </li>
          <li>
            <strong class="font-bold text-[#FF8D28]">$800</strong> keeps that door open for a full year—giving one child safety, routine, and a chance to grow.
          </li>
        </ul>
      </div>

      <div class="pt-4 border-t border-gray-100">
        <p class="text-sm md:text-base font-semibold text-gray-900 leading-normal">
          If you would like to make a financial contribution, please deposit your donation to the following bank account:
        </p>
      </div>
    </div>
  </div>

  <div class="bg-[#fcd05d] rounded-2xl p-6 md:p-8 flex flex-col md:flex-row justify-between items-stretch text-left shadow-sm max-w-2xl mx-auto mb-12">
    <div class="space-y-3 flex-1 pr-0 md:pr-6 border-b md:border-b-0 md:border-r border-[#e3b844] pb-6 md:pb-0">
      <h3 class="text-xl font-black text-[#5c3e35] uppercase tracking-wide">ACLEDA BANK</h3>
      <p class="text-sm text-gray-900"><strong class="font-bold">SWIFT Code:</strong> ACLBKHPP</p>
      <p class="text-sm text-gray-900">
        <strong class="font-bold">Bank address:</strong> Building N° 61, Preah Monivong Blvd., Sangkat Srah Chak, Khan Daun Penh, Phnom Penh
      </p>
      <div class="pt-2 text-sm text-gray-900">
        <div>
          <span class="font-bold uppercase text-xs tracking-wider block text-[#5c3e35]/80">Account Name</span>
          <span class="font-semibold text-base text-[#5c3e35]">RABBIT SCHOOL</span>
        </div>
        <div class="mt-2">
          <span class="font-bold uppercase text-xs tracking-wider block text-[#5c3e35]/80">Account Number</span>
          <span class="font-semibold text-base text-[#5c3e35]">2900-01-005152-4-2</span>
        </div>
      </div>
    </div>
    
    <div class="flex flex-col sm:flex-row md:flex-col items-center justify-center text-center md:pl-8 pt-6 md:pt-0 shrink-0 md:w-56">
      <p class="text-xs font-bold text-[#5c3e35] max-w-[180px] mb-3 sm:mb-0 md:mb-3 sm:mr-4 md:mr-0 leading-tight">
        For Cambodian Nationals only. Scan here to donate
      </p>
      <div class="w-28 h-28 bg-white p-0 rounded border border-gray-300 flex items-center justify-center shadow-sm">
        <img 
          src="https://www.rabbitschoolcambodia.net/_next/image?url=%2Fimages%2FNew%20Donation%20Page.jpg&w=256&q=75" 
          alt="Rabbit School QR Code" 
          class="w-full h-full object-contain"
        />
      </div>
    </div>
  </div>

</main>

<?php 
get_footer(); 
?>