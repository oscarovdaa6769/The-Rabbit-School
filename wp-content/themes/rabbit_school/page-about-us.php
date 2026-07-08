<?php
get_header();
?>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&display=swap" rel="stylesheet">

<main class="bg-brand-cream text-text-main">

    <section class="relative h-[650px] overflow-hidden">
        <img src="<?php echo get_theme_file_uri('assets/images/1.webp'); ?>"
            alt=""
            class="absolute inset-0 w-full h-full object-cover">

        <div class="absolute inset-0 bg-black/20"></div>

        <div class="relative max-w-7xl mx-auto h-full flex items-end px-8 pb-20">
            <div>
                <p class="font-heading text-white text-4xl uppercase">
                    Our Story
                </p>

                <h1 class="text-brand-yellow text-5xl font-bold max-w-3xl leading-tight mt-4">
                    The Belief That Started It All — Every Child Deserves Opportunity
                </h1>
            </div>
        </div>
    </section>

    
    <section class="py-24">
        <div class="max-w-7xl mx-auto px-8 space-y-24">

            <!-- Row 1 -->
            <div class="grid lg:grid-cols-2 gap-16 items-center">

                <img
                    src="<?php echo get_theme_file_uri('assets/images/2.png'); ?>"
                    class="rounded-xl shadow-lg w-full h-[340px] object-cover">

                <div>

                    <h2 class="font-heading text-6xl uppercase leading-none mb-6">
                        A Belief That Started It All
                    </h2>

                    <p class="text-text-muted leading-8">
                        The Rabbit School is a Cambodian NGO that began in May
                        1997 as a pilot project to provide education to children
                        with special needs. From a small beginning, it laid the
                        foundation for Cambodia's first formal educational
                        programs for children with disabilities.
                    </p>

                </div>

            </div>

            <!-- Row 2 -->
            <div class="grid lg:grid-cols-2 gap-16 items-center">

                <div>

                    <h2 class="font-heading text-6xl uppercase leading-none mb-6">
                        Growing With The Community
                    </h2>

                    <p class="text-text-muted leading-8">
                        What started as a small initiative has grown into a
                        nationally recognized organization dedicated to
                        inclusive education. New classrooms, vocational
                        training, and employment programs have expanded
                        opportunities for children with intellectual
                        disabilities and autism.
                    </p>

                </div>

                <img
                    src="<?php echo get_theme_file_uri('assets/images/3.png'); ?>"
                    class="rounded-xl shadow-lg w-full h-[340px] object-cover">

            </div>

            <!-- Row 3 -->
            <div class="grid lg:grid-cols-2 gap-16 items-center">

                <img
                    src="<?php echo get_theme_file_uri('assets/images/4.png'); ?>"
                    class="rounded-xl shadow-lg w-full h-[340px] object-cover">

                <div>

                    <h2 class="font-heading text-6xl uppercase leading-none mb-6">
                        Reaching Further
                    </h2>

                    <p class="text-text-muted leading-8">
                        Since 2014, The Rabbit School has expanded across
                        Cambodia through inclusive education projects and
                        community learning centers. Every child is supported at
                        their own pace, respecting their strengths and
                        individual potential.
                    </p>

                </div>

            </div>

            <!-- Row 4 -->
            <div class="grid lg:grid-cols-2 gap-16 items-center">

                <div>

                    <h2 class="font-heading text-6xl uppercase leading-none mb-6">
                        Our Ongoing Commitment
                    </h2>

                    <p class="text-text-muted leading-8">
                        Today, The Rabbit School continues to be a beacon of
                        inclusive education in Cambodia. We remain committed to
                        expanding access, improving quality, and creating a
                        sustainable future for every learner.
                    </p>

                </div>

                <img
                    src="<?php echo get_theme_file_uri('assets/images/5.png'); ?>"
                    class="rounded-xl shadow-lg w-full h-[340px] object-cover">

            </div>

        </div>
    </section>

    <!-- Bottom Banner -->
    <section class="bg-brand-teal py-24 text-center">

        <div class="max-w-5xl mx-auto px-6">

            <h2 class="font-heading text-white text-5xl uppercase mb-6">
                What Drives Us: A Belief In Every Child
            </h2>

            <p class="text-white text-xl leading-9">
                Every child deserves a chance to reach their full
                potential—no matter their abilities or background.
            </p>

        </div>

    </section>

</main>

<?php get_footer(); ?>