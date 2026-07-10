<?php

/**
 * Template Name: How We Work Page
 */

get_header();
?>

<section class="relative bg-amber-950 text-white min-h-[480px] md:min-h-[600px] flex items-end overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img
            src="<?php echo get_theme_file_uri(); ?>/assets/images/NewPicturesP10.webp"
            alt="Child leaning against a blue wall"
            class="w-full h-full object-cover object-center transform scale-105 hover:scale-100 transition-transform duration-700 brightness-[0.85]" />
        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 pb-16 pt-32 w-full">
        <div class="max-w-3xl space-y-4">
            <h1 class="text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-heading font-black text-white uppercase mb-6m">
                How We Work
            </h1>
            <p class="text-lg md:text-xl text-gray-100 font-medium leading-relaxed max-w-2xl drop-shadow">
                Our programs empower children and youth with intellectual disabilities to reach their full potential through tailored education, vocational training, inclusive community building, and advocacy for lasting change.
            </p>
        </div>
    </div>
</section>

<section class="pt-12 md:pt-16 text-center ">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-heading font-black  uppercase mb-6  text-[#477CAF] ">
            Learn More About Our Programs
        </h2>
    </div>
</section>


<div class="sticky top-0 z-50 shadow-md py-4 px-4 bg-gray-50/90 backdrop-blur-sm">
    <div class="flex flex-wrap items-center justify-center gap-3 md:gap-4 max-w-7xl mx-auto">
        <a href="#education" class="inline-flex items-center space-x-2 bg-stone-100/80 hover:bg-[#623D3C] text-stone-800 hover:text-white text-xs md:text-sm font-semibold py-3 px-5 rounded-xl shadow-sm hover:shadow transition-all duration-200 group">
            <span>Education Programs</span>
            <svg class="w-3.5 h-3.5 text-stone-500 group-hover:text-white group-hover:translate-x-0.5 transition-all" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
            </svg>
        </a>

        <a href="#vocational" class="inline-flex items-center space-x-2 bg-stone-100/80 hover:bg-[#623D3C] text-stone-800 hover:text-white text-xs md:text-sm font-semibold py-3 px-5 rounded-xl shadow-sm hover:shadow transition-all duration-200 group">
            <span>Vocational Training & Job Placement</span>
            <svg class="w-3.5 h-3.5 text-stone-500 group-hover:text-white group-hover:translate-x-0.5 transition-all" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
            </svg>
        </a>

        <a href="#teacher" class="inline-flex items-center space-x-2 bg-stone-100/80 hover:bg-[#623D3C] text-stone-800 hover:text-white text-xs md:text-sm font-semibold py-3 px-5 rounded-xl shadow-sm hover:shadow transition-all duration-200 group">
            <span>Teacher Training</span>
            <svg class="w-3.5 h-3.5 text-stone-500 group-hover:text-white group-hover:translate-x-0.5 transition-all" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
            </svg>
        </a>

        <a href="#advocacy" class="inline-flex items-center space-x-2 bg-stone-100/80 hover:bg-[#623D3C] text-stone-800 hover:text-white text-xs md:text-sm font-semibold py-3 px-5 rounded-xl shadow-sm hover:shadow transition-all duration-200 group">
            <span>Advocacy and Community Building</span>
            <svg class="w-3.5 h-3.5 text-stone-500 group-hover:text-white group-hover:translate-x-0.5 transition-all" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
            </svg>
        </a>
    </div>
</div>

<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 space-y-24">

    <section id="education" class="scroll-mt-32 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center hover-trigger">
        <div class="lg:col-span-7 space-y-6">
            <h2 class="text-3xl font-extrabold text-amber-950 sm:text-4xl tracking-tight">
                EDUCATION PROGRAMS
            </h2>
            <h3 class="text-xl font-semibold text-sky-600">Empowering Bright Minds to Embrace Life's Opportunities</h3>
            <h5 class="text-xl font-semibold text-amber-950">Specialized Education</h5>

            <p class="text-gray-600 leading-relaxed">
                At The Rabbit School, we believe that education should adapt to the child—not the other way around. That’s why we’ve developed a flexible education model that supports children and youth with intellectual disabilities from early childhood through adolescence.We operate specialized classrooms in public schools across Cambodia for students aged 5 to 16. Each child follows an individual learning plan, designed to develop essential motor, self-help, cognitive, and social skills. Our programs lay the foundation for lifelong learning and meaningful inclusion in society.
            </p>

            <div class="space-y-4 pt-2">
                <div class="border-l-4 border-amber-500 pl-4">
                    <h4 class="font-bold text-gray-900">Integrated Classrooms</h4>
                    <ul class="space-y-3 pl-2">
                        <li class="flex items-start text-gray-600 font-medium leading-relaxed">
                            <span class="text-gray-400 mr-3 select-none text-base">&#8226;</span>
                            <span>Follow an adapted curriculum designed to their level</span>
                        </li>
                        <li class="flex items-start text-gray-600 font-medium leading-relaxed">
                            <span class="text-gray-400 mr-3 select-none text-base">&#8226;</span>
                            <span>Access to support services such as speech and occupational therapy</span>
                        </li>
                        <li class="flex items-start text-gray-600 font-medium leading-relaxed">
                            <span class="text-gray-400 mr-3 select-none text-base">&#8226;</span>
                            <span>Receive an Individual Education Plan (IEP) updated every 3 months</span>
                        </li>
                    </ul>
                </div>
                <div class="border-l-4 border-sky-500 pl-4">
                    <h4 class="font-bold text-gray-900">Inclusive Environments</h4>
                    <ul class="space-y-3 pl-2">
                        <li class="flex items-start text-gray-600 font-medium leading-relaxed">
                            <span class="text-gray-400 mr-3 select-none text-base">&#8226;</span>
                            <span>Teachers receive ongoing training and support from our team</span>
                        </li>
                        <li class="flex items-start text-gray-600 font-medium leading-relaxed">
                            <span class="text-gray-400 mr-3 select-none text-base">&#8226;</span>
                            <span>Each child with a disability has a personalized IEP</span>
                        </li>
                        <li class="flex items-start text-gray-600 font-medium leading-relaxed">
                            <span class="text-gray-400 mr-3 select-none text-base">&#8226;</span>
                            <span>Follows the national curriculum and schedule with adapted teaching methods</span>
                        </li>
                        <li class="flex items-start text-gray-600 font-medium leading-relaxed">
                            <span class="text-gray-400 mr-3 select-none text-base">&#8226;</span>
                            <span>Focus on peer interaction, mutual respect, and building inclusive values</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="lg:col-span-5">
            <div class="overflow-hidden rounded-xl  ">
                <img
                    src="https://www.rabbitschoolcambodia.net/_next/image?url=%2Fimages%2FNew%20Pictures%20P11.jpg&w=750&q=75"
                    alt="Classroom learning"
                    class="w-full h-80 object-cover hover-target transform transition-transform duration-700 ease-out" />
            </div>
        </div>
    </section>

    <hr class="border-gray-200" />

   <section id="vocational" class="scroll-mt-32 grid grid-cols-1 lg:grid-cols-12 gap-12 hover-trigger items-center">
    <div class="lg:col-span-5 order-2 lg:order-1 flex justify-center items-center w-full">
        <div class="anim-slide-right anim-delay-2 relative w-full max-w-md h-[350px] md:h-[400px] rounded-2xl overflow-hidden shadow-lg group mx-auto">
            <img
                src="<?php echo get_theme_file_uri(); ?>/assets/images/NewPictureP15.webp"
                alt="Our Location"
                class="w-full h-full object-cover transition-transform duration-500 ease-out group-hover:scale-110">
            
             <div class="absolute bottom-3 left-3 right-3 md:bottom-5 md:left-5 md:right-5 bg-white rounded-xl shadow-lg p-4 md:p-5">
            <h3 class="font-extrabold text-[#5c1f2e] uppercase tracking-wide mb-1 text-base">Our Location</h3>
            <p class="text-[#5c1f2e] text-sm">Toul Kork Primary School, Phnom Penh</p>
        </div>
        </div>

    </div>

    <div class="lg:col-span-7 space-y-6 order-1 lg:order-2">
        <h2 class="text-3xl font-extrabold text-amber-950 sm:text-4xl tracking-tight">
            VOCATIONAL TRAINING & JOB PLACEMENT
        </h2>
        <h3 class="text-xl font-semibold text-amber-600">Building Life-Long Skills</h3>
        <p class="text-gray-600 leading-relaxed">
            Our vocational training program is the natural next step after our special education classes. We teach life-long skills that help youth over the age of 16 gain independence and prepare for future employment, opening doors to a world of opportunities.
        </p>
        <div class="space-y-4 pt-2">
            <h4 class="text-xl font-bold text-[#623D3C]">
                What Students Learn
            </h4>
            <p class="font-normal text-sm md:text-base text-amber-600">
                Through hands-on activities and guided instruction, students develop essential skills such as:
            </p>

            <ul class="space-y-2.5 pl-1">
                <li class="flex items-start text-gray-600 text-sm md:text-base font-medium leading-relaxed">
                    <span class="text-gray-400 mr-3 select-none text-base">&#8226;</span>
                    <span>Cleaning and basic hygiene routines</span>
                </li>
                <li class="flex items-start text-gray-600 text-sm md:text-base font-medium leading-relaxed">
                    <span class="text-gray-400 mr-3 select-none text-base">&#8226;</span>
                    <span>Preparing tables and washing dishes</span>
                </li>
                <li class="flex items-start text-gray-600 text-sm md:text-base font-medium leading-relaxed">
                    <span class="text-gray-400 mr-3 select-none text-base">&#8226;</span>
                    <span>Gardening and outdoor maintenance</span>
                </li>
                <li class="flex items-start text-gray-600 text-sm md:text-base font-medium leading-relaxed">
                    <span class="text-gray-400 mr-3 select-none text-base">&#8226;</span>
                    <span>Following instructions and working in teams</span>
                </li>
                <li class="flex items-start text-gray-600 text-sm md:text-base font-medium leading-relaxed">
                    <span class="text-gray-400 mr-3 select-none text-base">&#8226;</span>
                    <span>Developing a positive job attitude and social behavior</span>
                </li>
                <li class="flex items-start text-gray-600 text-sm md:text-base font-medium leading-relaxed">
                    <span class="text-gray-400 mr-3 select-none text-base">&#8226;</span>
                    <span>Expressing themselves through music, sports, and games</span>
                </li>
            </ul>
        </div>
    </div>
</section>

    <hr class="border-gray-200" />

    <section id="teacher" class="scroll-mt-32 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center hover-trigger">
        <div class="lg:col-span-7 space-y-6">
            <h2 class="text-3xl font-extrabold text-amber-950 sm:text-4xl tracking-tight">
                TEACHER TRAINING
            </h2>
            <h3 class="text-xl font-semibold text-sky-600">Building Teacher Capacity for Inclusive Education</h3>
            <p class="text-gray-600 leading-relaxed">
                Since 2010, Rabbit School has been training teachers to provide inclusive, individualized education for children with intellectual disabilities and autism. With initial support from the University of London, our training focused on quality teaching, child-friendly methods, and practical tools for working with children with special needs.Our goal is to expand these specialized services across Cambodia—ensuring more educators are equipped to help all children thrive.
            </p>

            <div class="space-y-4 pt-2">
                <h4 class="font-bold text-amber-950 text-xl">What we Do:</h4>
                <ul class="space-y-3 pl-2">
                    <li class="flex items-start text-gray-600 font-medium leading-relaxed">
                        <span class="text-gray-400 mr-3 select-none text-base">&#8226;</span>
                        <span> Train teachers to assess students and develop Individual Education Plans (IEPs) tailored to each child’s abilities and needs.</span>
                    </li>
                    <li class="flex items-start text-gray-600 font-medium leading-relaxed">
                        <span class="text-gray-400 mr-3 select-none text-base">&#8226;</span>
                        <span>Organize monthly teacher meetings to reflect on challenges, share solutions, and improve communication with students.</span>
                    </li>
                    <li class="flex items-start text-gray-600 font-medium leading-relaxed">
                        <span class="text-gray-400 mr-3 select-none text-base">&#8226;</span>
                        <span>Offer ongoing training in Phnom Penh and provinces, not only for teachers, but also for school directors, education authorities, commune committees, and civil society.</span>
                    </li>
                    <li class="flex items-start text-gray-600 font-medium leading-relaxed">
                        <span class="text-gray-400 mr-3 select-none text-base">&#8226;</span>
                        <span>Collaborate with NGO partners and local experts to provide continuous learning opportunities for our staff.</span>
                    </li>
                    <li class="flex items-start text-gray-600 font-medium leading-relaxed">
                        <span class="text-gray-400 mr-3 select-none text-base">&#8226;</span>
                        <span>Develop and distribute special education curricula and manuals for use by teachers and parents.</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="lg:col-span-5">
            <div class="overflow-hidden rounded-xl">
                <img
                    src="https://www.rabbitschoolcambodia.net/_next/image?url=%2Fimages%2FNew%20Pictures%20P12.jpg&w=750&q=75"
                    alt="Classroom learning"
                    class="w-full h-80 object-cover hover-target transform transition-transform duration-700 ease-out " />
            </div>
        </div>
    </section>

    <hr class="border-gray-200" />

 <section id="advocacy" class="scroll-mt-32 text-center max-w-7xl mx-auto space-y-8 flex flex-col items-center">
    <div class="space-y-3">
        <h2 class="text-[32px] sm:text-[36px] md:text-[40px] lg:text-[48px] font-heading font-black text-amber-950 uppercase mb-6">
            ADVOCACY AND COMMUNITY BUILDING
        </h2>
    </div>

    <p class="text-gray-600 text-lg leading-relaxed max-w-5xl mx-auto px-4">
        We work closely with local authorities and parents to integrate Rabbit School’s programs into the public system. At the same time, we work to break down the stigma around intellectual disabilities - promoting understanding, inclusion, and lasting change within communities. This way we are not just teaching children—we are building a more inclusive society, one where everyone is valued for who they are and the contributions they can make.
    </p>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-6xl w-full mx-auto px-4">

        <div class="bg-[#f9f6f0] rounded-2xl border border-[#e5dec9] flex flex-col items-center transition-all duration-300 hover:-translate-y-2 hover:shadow-xl group cursor-pointer">
            <a href="YOUR_LINK_HERE" class="w-full aspect-[4/3] rounded-xl overflow-hidden mb-4 block">
                <img
                    src="https://www.rabbitschoolcambodia.net/_next/image?url=%2Fimages%2FRun%20With%20Sai.jpg&w=1080&q=75"
                    alt="Event run with Sai"
                    class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" />
            </a>
            <h3 class="text-[#6d5045] font-semibold text-lg text-center mb-2">
                Event run with Sai
            </h3>
        </div>

        <div class="bg-[#f9f6f0] rounded-2xl border border-[#e5dec9] flex flex-col items-center transition-all duration-300 hover:-translate-y-2 hover:shadow-xl group cursor-pointer">
            <a href="YOUR_LINK_HERE" class="w-full aspect-[4/3] rounded-xl overflow-hidden mb-4 block">
                <img
                    src="https://www.rabbitschoolcambodia.net/_next/image?url=%2Fimages%2FNew%20Picture%2013.jpg&w=1080&q=75"
                    alt="Parent's Training"
                    class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" />
            </a>
            <h3 class="text-[#6d5045] font-semibold text-lg text-center mb-2">
                Parent's Training
            </h3>
        </div>

        <div class="bg-[#f9f6f0] rounded-2xl border border-[#623D3C] flex flex-col items-center transition-all duration-300 hover:-translate-y-2 hover:shadow-xl group cursor-pointer">
            <a href="YOUR_LINK_HERE" class="w-full aspect-[4/3] rounded-xl overflow-hidden mb-4 block">
                <img
                    src="https://www.rabbitschoolcambodia.net/_next/image?url=%2Fimages%2FNational%20Forum.jpg&w=1080&q=75"
                    alt="Participation in Employment National Forum"
                    class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" />
            </a>
            <h3 class="text-[#6d5045] font-semibold text-lg text-center max-w-[250px] mb-2 leading-snug">
                Participation in Employment National Forum
            </h3>
        </div>

    </div>
</section>
</main>

<?php
get_footer();
?>