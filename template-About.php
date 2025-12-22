<?php 
// Template Name:About

get_header();
?>



<main id="main-content" class="flex-1">
                            <div class="overflow-hidden">
                                <section
                                    class="relative py-20 lg:py-32 bg-gradient-to-br from-primary via-primary to-[#5A2535] text-white overflow-hidden">

                                    <div class="relative max-w-7xl mx-auto">
                                        <nav aria-label="Breadcrumb" class="py-4 px-4 sm:px-6 lg:px-8">
                                            <ol class="flex items-center gap-2 text-sm">
                                                <li>
                                                    <a class="flex items-center gap-1 text-muted-foreground hover:text-accent transition-colors"
                                                        href="<?php echo esc_url( home_url('/') ); ?>" >
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="lucide lucide-house w-4 h-4"
                                                            aria-hidden="true">
                                                            <path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"></path>
                                                            <path
                                                                d="M3 10a2 2 0 0 1 .709-1.528l7-6a2 2 0 0 1 2.582 0l7 6A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z">
                                                            </path>
                                                        </svg>
                                                        <span>Home</span>
                                                    </a>
                                                </li>
                                                <li class="flex items-center gap-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-chevron-right w-4 h-4 text-muted-foreground"
                                                        aria-hidden="true">
                                                        <path d="m9 18 6-6-6-6"></path>
                                                    </svg>
                                                    <span class="text-primary font-medium">About Us</span>
                                                </li>
                                            </ol>
                                        </nav>
                                        <!-- <div class="text-center max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
                                            <div
                                                class="inline-block mb-6 px-4 py-2 bg-accent/30 backdrop-blur-sm border border-accent rounded-full">
                                                <span>About SEVORA</span></div>
                                            <h1 class="text-4xl md:text-5xl lg:text-6xl mb-4">Our Journey</h1>
                                            <p class="text-lg md:text-xl text-white/90">Where fashion passion meets
                                                technology innovation</p>
                                        </div> -->
                                        <?php if (have_rows('about_banner')) : ?>
    <?php while (have_rows('about_banner')) : the_row(); ?>

        <div class="text-center max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">

            <?php if (get_sub_field('about_badge_text')) : ?>
                <div
                    class="inline-block mb-6 px-4 py-2 bg-accent/30 backdrop-blur-sm border border-accent rounded-full">
                    <span><?php echo esc_html(get_sub_field('about_badge_text')); ?></span>
                </div>
            <?php endif; ?>

            <?php if (get_sub_field('about_heading')) : ?>
                <h1 class="text-4xl md:text-5xl lg:text-6xl mb-4">
                    <?php echo esc_html(get_sub_field('about_heading')); ?>
                </h1>
            <?php endif; ?>

            <?php if (get_sub_field('about_subheading')) : ?>
                <p class="text-lg md:text-xl text-white/90">
                    <?php echo esc_html(get_sub_field('about_subheading')); ?>
                </p>
            <?php endif; ?>

        </div>

    <?php endwhile; ?>
<?php endif; ?>

                                    </div>

                                </section>
                                <!-- <section class="relative py-20 lg:py-32 overflow-hidden">
                                    <div
                                        class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-12 items-center ">
                                        <div class="relative ">
                                            <div
                                                class="relative h-[400px] lg:h-[600px] rounded-3xl overflow-hidden shadow-2xl">
                                                <img src="https://images.unsplash.com/photo-1617288991572-9e8755a88209?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;q=80&amp;w=1080"
                                                    alt="The SEVORA Story" class="w-full h-full object-cover">
                                                <div
                                                    class="absolute inset-0 bg-gradient-to-t from-primary/40 to-transparent">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="">
                                            <div
                                                class="inline-block px-4 py-2 bg-accent/10 border border-accent/20 rounded-full mb-6">
                                                <span
                                                    class="text-accent uppercase tracking-wide text-sm font-semibold">Featured</span>
                                            </div>
                                            <h2 class="text-4xl md:text-5xl lg:text-6xl mb-6 text-primary">The SEVORA
                                                Story</h2>
                                            <p class="text-lg text-muted-foreground mb-8 leading-relaxed">SEVORA was
                                                born from a simple yet powerful vision: to transform how India
                                                experiences luxury fashion. Our founder, Mashum Mollah, recognized a gap
                                                in the market — exceptional designers struggling for visibility, and
                                                discerning customers searching for authentic luxury experiences.</p>
                                            <div class="space-y-4 text-base text-muted-foreground">
                                                <p>The name <span
                                                        class="text-primary font-semibold italic">SEVORA</span> embodies
                                                    our essence — a fusion of 'serve' and 'aura,' representing our
                                                    commitment to serving an aura of elegance, authenticity, and
                                                    excellence.</p>
                                                <p>From navigating early challenges in building trust with heritage
                                                    designers to pioneering fashion-tech integration in India, every
                                                    step has been a defining moment. We've created more than a
                                                    marketplace — we've built a community where craftsmanship is
                                                    celebrated and style is democratized.</p>
                                                <p class="text-primary font-semibold">Today, SEVORA stands as India's
                                                    most trusted luxury fashion destination, bridging heritage with
                                                    innovation.</p>
                                            </div>
                                            <div class="mt-8">
                                                <button
                                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full text-sm font-medium duration-200 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-5 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive hover:scale-105 active:scale-100 hover:bg-accent/90 h-[52px] px-8 py-3.5 bg-gradient-to-r from-accent to-[#C8915D] hover:from-[#C8915D] hover:to-accent text-white shadow-lg hover:shadow-xl transition-all">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-smartphone w-4 h-4 mr-2"
                                                        aria-hidden="true">
                                                        <rect width="14" height="20" x="5" y="2" rx="2" ry="2"></rect>
                                                        <path d="M12 18h.01"></path>
                                                    </svg>
                                                    Download App
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </section> -->


                                <section class="relative py-20 lg:py-32 overflow-hidden">

    <?php if (have_rows('about_story')) : ?>
        <?php while (have_rows('about_story')) : the_row(); ?>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-12 items-center">

                <!-- Image Column -->
                <div class="relative">
                    <div class="relative h-[400px] lg:h-[600px] rounded-3xl overflow-hidden shadow-2xl">
                        <?php 
                        $image = get_sub_field('story_image');
                        if ($image) : ?>
                            <img src="<?php echo esc_url($image['url']); ?>"
                                 alt="<?php echo esc_attr($image['alt']); ?>"
                                 class="w-full h-full object-cover">
                        <?php endif; ?>
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/40 to-transparent"></div>
                    </div>
                </div>

                <!-- Content Column -->
                <div>

                    <?php if (get_sub_field('story_badge_text')) : ?>
                        <div class="inline-block px-4 py-2 bg-accent/10 border border-accent/20 rounded-full mb-6">
                            <span class="text-accent uppercase tracking-wide text-sm font-semibold">
                                <?php echo esc_html(get_sub_field('story_badge_text')); ?>
                            </span>
                        </div>
                    <?php endif; ?>

                    <?php if (get_sub_field('story_title')) : ?>
                        <h2 class="text-4xl md:text-5xl lg:text-6xl mb-6 text-primary">
                            <?php echo esc_html(get_sub_field('story_title')); ?>
                        </h2>
                    <?php endif; ?>

                    <?php if (get_sub_field('story_description')) : ?>
                        <p class="text-lg text-muted-foreground mb-8 leading-relaxed">
                            <?php echo wp_kses_post(get_sub_field('story_description')); ?>
                        </p>
                    <?php endif; ?>

                    <div class="space-y-4 text-base text-muted-foreground">

                        <?php if (get_sub_field('story_para_one')) : ?>
                            <p><?php echo esc_html(get_sub_field('story_para_one')); ?></p>
                        <?php endif; ?>

                        <?php if (get_sub_field('story_para_two')) : ?>
                            <p><?php echo esc_html(get_sub_field('story_para_two')); ?></p>
                        <?php endif; ?>

                        <?php if (get_sub_field('story_highlight')) : ?>
                            <p class="text-primary font-semibold">
                                <?php echo esc_html(get_sub_field('story_highlight')); ?>
                            </p>
                        <?php endif; ?>

                    </div>

                    <?php
$btn_text = get_sub_field('story_button_text');
$btn_link = get_sub_field('story_button_link');
$btn_icon = get_sub_field('story_button_icon');
?>

<?php if ($btn_text && $btn_link) : ?>
    <div class="mt-8">
        <a href="<?php echo esc_url($btn_link); ?>"
           class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full text-sm font-medium duration-200
                  hover:scale-105 active:scale-100 h-[52px] px-8 py-3.5
                  bg-gradient-to-r from-accent to-[#C8915D]
                  hover:from-[#C8915D] hover:to-accent
                  text-white shadow-lg hover:shadow-xl transition-all">

            <?php if ($btn_icon) : ?>
                <span class="mr-2">
                    <?php echo $btn_icon; // SVG allowed ?>
                </span>
            <?php endif; ?>

            <?php echo esc_html($btn_text); ?>
        </a>
    </div>
<?php endif; ?>


                </div>

            </div>

        <?php endwhile; ?>
    <?php endif; ?>

</section>

                                <!-- <section class="py-12 lg:py-16 bg-white">
                                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                                        <div>
                                            <h2 class="text-3xl md:text-4xl text-center mb-10">Our Milestones</h2>
                                        </div>
                                        <div class="relative">
                                            <div
                                                class="hidden lg:block absolute left-1/2 transform -translate-x-1/2 w-1 h-full bg-accent/20">
                                            </div>
                                            <div class="space-y-8">
                                                <div class="flex flex-col lg:flex-row gap-8 items-center lg:flex-row">
                                                    <div class="flex-1 lg:text-right">
                                                        <div
                                                            class="bg-white p-6 rounded-xl border border-accent/20 hover:border-accent hover:shadow-[0_16px_32px_rgba(0,0,0,0.12)] transition-all">
                                                            <div class="text-3xl text-accent mb-2 font-bold">2020</div>
                                                            <h3 class="text-xl mb-2 font-semibold">The Spark</h3>
                                                            <p class="text-muted-foreground leading-relaxed">Mashum
                                                                Mollah envisions a platform to democratize luxury
                                                                fashion in India.</p>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="hidden lg:block w-6 h-6 bg-accent rounded-full border-4 border-white shadow-lg z-10">
                                                    </div>
                                                    <div class="flex-1"></div>
                                                </div>
                                                <div
                                                    class="flex flex-col lg:flex-row gap-8 items-center lg:flex-row-reverse">
                                                    <div class="flex-1 lg:text-left">
                                                        <div
                                                            class="bg-white p-6 rounded-xl border border-accent/20 hover:border-accent hover:shadow-[0_16px_32px_rgba(0,0,0,0.12)] transition-all">
                                                            <div class="text-3xl text-accent mb-2 font-bold">2021</div>
                                                            <h3 class="text-xl mb-2 font-semibold">Building Foundations
                                                            </h3>
                                                            <p class="text-muted-foreground leading-relaxed">First
                                                                designer partnerships established, focusing on
                                                                authenticity and craftsmanship.</p>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="hidden lg:block w-6 h-6 bg-accent rounded-full border-4 border-white shadow-lg z-10">
                                                    </div>
                                                    <div class="flex-1"></div>
                                                </div>
                                                <div class="flex flex-col lg:flex-row gap-8 items-center lg:flex-row">
                                                    <div class="flex-1 lg:text-right">
                                                        <div
                                                            class="bg-white p-6 rounded-xl border border-accent/20 hover:border-accent hover:shadow-[0_16px_32px_rgba(0,0,0,0.12)] transition-all">
                                                            <div class="text-3xl text-accent mb-2 font-bold">2022</div>
                                                            <h3 class="text-xl mb-2 font-semibold">Platform Launch</h3>
                                                            <p class="text-muted-foreground leading-relaxed">SEVORA
                                                                officially launches, bringing technology and fashion
                                                                together.</p>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="hidden lg:block w-6 h-6 bg-accent rounded-full border-4 border-white shadow-lg z-10">
                                                    </div>
                                                    <div class="flex-1"></div>
                                                </div>
                                                <div
                                                    class="flex flex-col lg:flex-row gap-8 items-center lg:flex-row-reverse">
                                                    <div class="flex-1 lg:text-left">
                                                        <div
                                                            class="bg-white p-6 rounded-xl border border-accent/20 hover:border-accent hover:shadow-[0_16px_32px_rgba(0,0,0,0.12)] transition-all">
                                                            <div class="text-3xl text-accent mb-2 font-bold">2023</div>
                                                            <h3 class="text-xl mb-2 font-semibold">Scaling Heights</h3>
                                                            <p class="text-muted-foreground leading-relaxed">Expansion
                                                                across India and international designer collaborations
                                                                begin.</p>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="hidden lg:block w-6 h-6 bg-accent rounded-full border-4 border-white shadow-lg z-10">
                                                    </div>
                                                    <div class="flex-1"></div>
                                                </div>
                                                <div class="flex flex-col lg:flex-row gap-8 items-center lg:flex-row">
                                                    <div class="flex-1 lg:text-right">
                                                        <div
                                                            class="bg-white p-6 rounded-xl border border-accent/20 hover:border-accent hover:shadow-[0_16px_32px_rgba(0,0,0,0.12)] transition-all">
                                                            <div class="text-3xl text-accent mb-2 font-bold">2024</div>
                                                            <h3 class="text-xl mb-2 font-semibold">Recognition</h3>
                                                            <p class="text-muted-foreground leading-relaxed">Awarded
                                                                Bengal Business Samman 2024 for innovation in
                                                                fashion-tech.</p>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="hidden lg:block w-6 h-6 bg-accent rounded-full border-4 border-white shadow-lg z-10">
                                                    </div>
                                                    <div class="flex-1"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section> -->

                                <section class="py-12 lg:py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <?php if (get_field('milestones_title')) : ?>
            <h2 class="text-3xl md:text-4xl text-center mb-10">
                <?php echo esc_html(get_field('milestones_title')); ?>
            </h2>
        <?php endif; ?>

        <div class="relative">

            <!-- Center line -->
            <div class="hidden lg:block absolute left-1/2 transform -translate-x-1/2 w-1 h-full bg-accent/20"></div>

            <?php if (have_rows('milestones')) : ?>
                <div class="space-y-8">

                    <?php while (have_rows('milestones')) : the_row(); ?>
                        <?php $reverse = get_row_index() % 2 === 0; ?>

                        <div class="flex flex-col lg:flex-row gap-8 items-center <?php echo $reverse ? 'lg:flex-row-reverse' : ''; ?>">

                            <!-- Content -->
                            <div class="flex-1 <?php echo $reverse ? 'lg:text-left' : 'lg:text-right'; ?>">
                                <div class="bg-white p-6 rounded-xl border border-accent/20
                                            hover:border-accent hover:shadow-[0_16px_32px_rgba(0,0,0,0.12)]
                                            transition-all">

                                    <?php if (get_sub_field('milestone_year')) : ?>
                                        <div class="text-3xl text-accent mb-2 font-bold">
                                            <?php echo esc_html(get_sub_field('milestone_year')); ?>
                                        </div>
                                    <?php endif; ?>

                                    <?php if (get_sub_field('milestone_title')) : ?>
                                        <h3 class="text-xl mb-2 font-semibold">
                                            <?php echo esc_html(get_sub_field('milestone_title')); ?>
                                        </h3>
                                    <?php endif; ?>

                                    <?php if (get_sub_field('milestone_description')) : ?>
                                        <p class="text-muted-foreground leading-relaxed">
                                            <?php echo esc_html(get_sub_field('milestone_description')); ?>
                                        </p>
                                    <?php endif; ?>

                                </div>
                            </div>

                            <!-- Dot -->
                            <div class="hidden lg:block w-6 h-6 bg-accent rounded-full border-4 border-white shadow-lg z-10"></div>

                            <!-- Spacer -->
                            <div class="flex-1"></div>

                        </div>

                    <?php endwhile; ?>

                </div>
            <?php endif; ?>

        </div>
    </div>
</section>

                                <div class="relative">
                                    <div
                                        class="absolute top-0 left-0 right-0 h-16 lg:h-24 -translate-y-full overflow-hidden">
                                        <svg class="w-full h-full" viewBox="0 0 1200 120" preserveAspectRatio="none">
                                            <path
                                                d="M0,0 C150,80 350,80 600,40 C850,0 1050,0 1200,40 L1200,120 L0,120 Z"
                                                class="fill-secondary"></path>
                                        </svg>
                                    </div>
                                    <!-- <div class="bg-secondary py-12 lg:py-16">
                                        <section class="py-12 lg:py-16">
                                            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                                                <div class="grid lg:grid-cols-2 gap-6">
                                                    <div
                                                        class="bg-white p-8 rounded-xl border border-accent/20 hover:border-accent hover:shadow-[0_16px_32px_rgba(0,0,0,0.12)] transition-all">
                                                        <div
                                                            class="w-14 h-14 bg-gradient-to-br from-accent to-[#C8915D] rounded-full flex items-center justify-center mb-4 text-white shadow-[0_12px_24px_rgba(226,164,95,0.25)]">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-target w-7 h-7" aria-hidden="true">
                                                                <circle cx="12" cy="12" r="10"></circle>
                                                                <circle cx="12" cy="12" r="6"></circle>
                                                                <circle cx="12" cy="12" r="2"></circle>
                                                            </svg>
                                                        </div>
                                                        <h3 class="text-2xl mb-4 font-semibold">Our Mission</h3>
                                                        <p class="text-muted-foreground leading-relaxed">"To redefine
                                                            how people experience fashion by bridging designers,
                                                            craftsmanship, and technology — creating a platform where
                                                            luxury is made accessible, personal, and meaningful."</p>
                                                    </div>
                                                    <div
                                                        class="bg-white p-8 rounded-xl border border-accent/20 hover:border-accent hover:shadow-[0_16px_32px_rgba(0,0,0,0.12)] transition-all">
                                                        <div
                                                            class="w-14 h-14 bg-gradient-to-br from-accent to-[#C8915D] rounded-full flex items-center justify-center mb-4 text-white shadow-[0_12px_24px_rgba(226,164,95,0.25)]">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-eye w-7 h-7" aria-hidden="true">
                                                                <path
                                                                    d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0">
                                                                </path>
                                                                <circle cx="12" cy="12" r="3"></circle>
                                                            </svg>
                                                        </div>
                                                        <h3 class="text-2xl mb-4 font-semibold">Our Vision</h3>
                                                        <p class="text-muted-foreground leading-relaxed">"To be India's
                                                            most trusted and inspiring destination for luxury fashion,
                                                            blending heritage, innovation, and individuality."</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section
                                            class="py-16 lg:py-24 bg-gradient-to-b from-white via-[#E2A45F]/8 to-white">
                                            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                                                <div class="text-center mb-10">
                                                    <h2 class="text-3xl md:text-4xl mb-0">Core Values</h2>
                                                </div>
                                                <div class="grid md:grid-cols-2 gap-6">
                                                    <div class="">
                                                        <div
                                                            class="bg-white/95 backdrop-blur-sm p-8 rounded-2xl border border-accent/20 hover:border-accent/40 hover:shadow-[0_20px_60px_rgba(226,164,95,0.25)] transition-all duration-300 group h-full">
                                                            <div
                                                                class="w-14 h-14 bg-gradient-to-br from-accent to-[#C8915D] rounded-full flex items-center justify-center mb-4 text-white group-hover:scale-110 transition-all duration-200 shadow-[0_12px_24px_rgba(226,164,95,0.25)]">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="lucide lucide-sparkles w-6 h-6"
                                                                    aria-hidden="true">
                                                                    <path
                                                                        d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z">
                                                                    </path>
                                                                    <path d="M20 2v4"></path>
                                                                    <path d="M22 4h-4"></path>
                                                                    <circle cx="4" cy="20" r="2"></circle>
                                                                </svg>
                                                            </div>
                                                            <h4 class="text-xl mb-3 font-semibold">Style</h4>
                                                            <p class="text-muted-foreground leading-relaxed">The essence
                                                                of individuality — celebrating unique expression through
                                                                fashion.</p>
                                                        </div>
                                                    </div>
                                                    <div class="">
                                                        <div
                                                            class="bg-white/95 backdrop-blur-sm p-8 rounded-2xl border border-accent/20 hover:border-accent/40 hover:shadow-[0_20px_60px_rgba(226,164,95,0.25)] transition-all duration-300 group h-full">
                                                            <div
                                                                class="w-14 h-14 bg-gradient-to-br from-accent to-[#C8915D] rounded-full flex items-center justify-center mb-4 text-white group-hover:scale-110 transition-all duration-200 shadow-[0_12px_24px_rgba(226,164,95,0.25)]">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="lucide lucide-award w-6 h-6"
                                                                    aria-hidden="true">
                                                                    <path
                                                                        d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                                                                    </path>
                                                                    <circle cx="12" cy="8" r="6"></circle>
                                                                </svg>
                                                            </div>
                                                            <h4 class="text-xl mb-3 font-semibold">Luxury</h4>
                                                            <p class="text-muted-foreground leading-relaxed">Rooted in
                                                                craftsmanship and quality — only the finest makes it to
                                                                SEVORA.</p>
                                                        </div>
                                                    </div>
                                                    <div class="">
                                                        <div
                                                            class="bg-white/95 backdrop-blur-sm p-8 rounded-2xl border border-accent/20 hover:border-accent/40 hover:shadow-[0_20px_60px_rgba(226,164,95,0.25)] transition-all duration-300 group h-full">
                                                            <div
                                                                class="w-14 h-14 bg-gradient-to-br from-accent to-[#C8915D] rounded-full flex items-center justify-center mb-4 text-white group-hover:scale-110 transition-all duration-200 shadow-[0_12px_24px_rgba(226,164,95,0.25)]">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="lucide lucide-heart w-6 h-6"
                                                                    aria-hidden="true">
                                                                    <path
                                                                        d="M2 9.5a5.5 5.5 0 0 1 9.591-3.676.56.56 0 0 0 .818 0A5.49 5.49 0 0 1 22 9.5c0 2.29-1.5 4-3 5.5l-5.492 5.313a2 2 0 0 1-3 .019L5 15c-1.5-1.5-3-3.2-3-5.5">
                                                                    </path>
                                                                </svg>
                                                            </div>
                                                            <h4 class="text-xl mb-3 font-semibold">Experience</h4>
                                                            <p class="text-muted-foreground leading-relaxed">Every
                                                                interaction feels personal — from discovery to delivery.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="">
                                                        <div
                                                            class="bg-white/95 backdrop-blur-sm p-8 rounded-2xl border border-accent/20 hover:border-accent/40 hover:shadow-[0_20px_60px_rgba(226,164,95,0.25)] transition-all duration-300 group h-full">
                                                            <div
                                                                class="w-14 h-14 bg-gradient-to-br from-accent to-[#C8915D] rounded-full flex items-center justify-center mb-4 text-white group-hover:scale-110 transition-all duration-200 shadow-[0_12px_24px_rgba(226,164,95,0.25)]">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="lucide lucide-lightbulb w-6 h-6"
                                                                    aria-hidden="true">
                                                                    <path
                                                                        d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5">
                                                                    </path>
                                                                    <path d="M9 18h6"></path>
                                                                    <path d="M10 22h4"></path>
                                                                </svg>
                                                            </div>
                                                            <h4 class="text-xl mb-3 font-semibold">Innovation</h4>
                                                            <p class="text-muted-foreground leading-relaxed">Constantly
                                                                evolving through technology — shaping the future of
                                                                fashion.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div> -->


                                    <div class="bg-secondary py-12 lg:py-16">

    <!-- Mission / Vision -->
    <section class="py-12 lg:py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <?php if (have_rows('mission_vision')) : ?>
                <div class="grid lg:grid-cols-2 gap-6">

                    <?php while (have_rows('mission_vision')) : the_row(); ?>
                        <div class="bg-white p-8 rounded-xl border border-accent/20
                                    hover:border-accent hover:shadow-[0_16px_32px_rgba(0,0,0,0.12)]
                                    transition-all">

                            <?php if (get_sub_field('mv_icon')) : ?>
                                <div
                                    class="w-14 h-14 bg-gradient-to-br from-accent to-[#C8915D]
                                           rounded-full flex items-center justify-center mb-4
                                           text-white shadow-[0_12px_24px_rgba(226,164,95,0.25)]">
                                    <?php echo get_sub_field('mv_icon'); ?>
                                </div>
                            <?php endif; ?>

                            <?php if (get_sub_field('mv_title')) : ?>
                                <h3 class="text-2xl mb-4 font-semibold">
                                    <?php echo esc_html(get_sub_field('mv_title')); ?>
                                </h3>
                            <?php endif; ?>

                            <?php if (get_sub_field('mv_description')) : ?>
                                <p class="text-muted-foreground leading-relaxed">
                                    <?php echo esc_html(get_sub_field('mv_description')); ?>
                                </p>
                            <?php endif; ?>

                        </div>
                    <?php endwhile; ?>

                </div>
            <?php endif; ?>

        </div>
    </section>

    <!-- Core Values -->
    <section class="py-16 lg:py-24 bg-gradient-to-b from-white via-[#E2A45F]/8 to-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <?php if (get_field('core_values_title')) : ?>
                <div class="text-center mb-10">
                    <h2 class="text-3xl md:text-4xl">
                        <?php echo esc_html(get_field('core_values_title')); ?>
                    </h2>
                </div>
            <?php endif; ?>

            <?php if (have_rows('core_values')) : ?>
                <div class="grid md:grid-cols-2 gap-6">

                    <?php while (have_rows('core_values')) : the_row(); ?>
                        <div class="bg-white/95 backdrop-blur-sm p-8 rounded-2xl border border-accent/20
                                    hover:border-accent/40 hover:shadow-[0_20px_60px_rgba(226,164,95,0.25)]
                                    transition-all duration-300 group h-full">

                            <?php if (get_sub_field('value_icon')) : ?>
                                <div
                                    class="w-14 h-14 bg-gradient-to-br from-accent to-[#C8915D]
                                           rounded-full flex items-center justify-center mb-4
                                           text-white group-hover:scale-110 transition-all duration-200
                                           shadow-[0_12px_24px_rgba(226,164,95,0.25)]">
                                    <?php echo get_sub_field('value_icon'); ?>
                                </div>
                            <?php endif; ?>

                            <?php if (get_sub_field('value_title')) : ?>
                                <h4 class="text-xl mb-3 font-semibold">
                                    <?php echo esc_html(get_sub_field('value_title')); ?>
                                </h4>
                            <?php endif; ?>

                            <?php if (get_sub_field('value_description')) : ?>
                                <p class="text-muted-foreground leading-relaxed">
                                    <?php echo esc_html(get_sub_field('value_description')); ?>
                                </p>
                            <?php endif; ?>

                        </div>
                    <?php endwhile; ?>

                </div>
            <?php endif; ?>

        </div>
    </section>

</div>

                                    <div
                                        class="absolute bottom-0 left-0 right-0 h-16 lg:h-24 translate-y-full overflow-hidden">
                                        <svg class="w-full h-full" viewBox="0 0 1200 120" preserveAspectRatio="none">
                                            <path d="M0,80 C150,0 350,0 600,40 C850,80 1050,80 1200,40 L1200,0 L0,0 Z"
                                                class="fill-secondary"></path>
                                        </svg>
                                    </div>
                                </div>
                                <!-- <section class="py-12 lg:py-16 bg-secondary relative overflow-hidden">

                                    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                                        <div class="text-center">
                                            <div
                                                class="inline-block mb-4 px-4 py-2 bg-white/80 backdrop-blur-sm border border-accent/30 rounded-full">
                                                <span class="text-foreground">Brand Philosophy</span>
                                            </div>
                                            <h2 class="text-3xl md:text-4xl mb-4">Brand Pillars</h2>
                                            <p class="text-lg text-muted-foreground mb-8 max-w-3xl mx-auto">The
                                                emotional and aesthetic foundation of SEVORA</p>
                                            <div class="grid md:grid-cols-3 gap-6 max-w-5xl mx-auto">
                                                <div
                                                    class="p-6 bg-white rounded-2xl border border-accent/20 hover:border-accent hover:shadow-[0_16px_32px_rgba(226,164,95,0.15)] transition-all">
                                                    <div class="text-5xl mb-3">✨</div>
                                                    <h4 class="text-xl mb-2">Luxury</h4>
                                                    <p class="text-muted-foreground">Uncompromising quality and timeless
                                                        elegance</p>
                                                </div>
                                                <div
                                                    class="p-6 bg-white rounded-2xl border border-accent/20 hover:border-accent hover:shadow-[0_16px_32px_rgba(226,164,95,0.15)] transition-all">
                                                    <div class="text-5xl mb-3">💎</div>
                                                    <h4 class="text-xl mb-2">Experience</h4>
                                                    <p class="text-muted-foreground">Personalized journeys that delight
                                                        at every touchpoint</p>
                                                </div>
                                                <div
                                                    class="p-6 bg-white rounded-2xl border border-accent/20 hover:border-accent hover:shadow-[0_16px_32px_rgba(226,164,95,0.15)] transition-all">
                                                    <div class="text-5xl mb-3">⚡</div>
                                                    <h4 class="text-xl mb-2">Style</h4>
                                                    <p class="text-muted-foreground">Individual expression through
                                                        curated collections</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section> -->

                                <section class="py-12 lg:py-16 bg-secondary relative overflow-hidden">

    <?php if (have_rows('brand_philosophy')) : ?>
        <?php while (have_rows('brand_philosophy')) : the_row(); ?>

            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center">

                    <?php if (get_sub_field('brand_badge_text')) : ?>
                        <div class="inline-block mb-4 px-4 py-2 bg-white/80 backdrop-blur-sm border border-accent/30 rounded-full">
                            <span class="text-foreground">
                                <?php echo esc_html(get_sub_field('brand_badge_text')); ?>
                            </span>
                        </div>
                    <?php endif; ?>

                    <?php if (get_sub_field('brand_heading')) : ?>
                        <h2 class="text-3xl md:text-4xl mb-4">
                            <?php echo esc_html(get_sub_field('brand_heading')); ?>
                        </h2>
                    <?php endif; ?>

                    <?php if (get_sub_field('brand_description')) : ?>
                        <p class="text-lg text-muted-foreground mb-8 max-w-3xl mx-auto">
                            <?php echo esc_html(get_sub_field('brand_description')); ?>
                        </p>
                    <?php endif; ?>

                    <?php if (have_rows('brand_pillars')) : ?>
                        <div class="grid md:grid-cols-3 gap-6 max-w-5xl mx-auto">

                            <?php while (have_rows('brand_pillars')) : the_row(); ?>
                                <div
                                    class="p-6 bg-white rounded-2xl border border-accent/20
                                           hover:border-accent hover:shadow-[0_16px_32px_rgba(226,164,95,0.15)]
                                           transition-all">

                                    <?php if (get_sub_field('pillar_icon')) : ?>
                                        <div class="text-5xl mb-3">
                                            <?php echo esc_html(get_sub_field('pillar_icon')); ?>
                                        </div>
                                    <?php endif; ?>

                                    <?php if (get_sub_field('pillar_title')) : ?>
                                        <h4 class="text-xl mb-2">
                                            <?php echo esc_html(get_sub_field('pillar_title')); ?>
                                        </h4>
                                    <?php endif; ?>

                                    <?php if (get_sub_field('pillar_description')) : ?>
                                        <p class="text-muted-foreground">
                                            <?php echo esc_html(get_sub_field('pillar_description')); ?>
                                        </p>
                                    <?php endif; ?>

                                </div>
                            <?php endwhile; ?>

                        </div>
                    <?php endif; ?>

                </div>
            </div>

        <?php endwhile; ?>
    <?php endif; ?>

</section>

                                <!-- <section class="py-12 lg:py-16 bg-primary text-white relative overflow-hidden">

                                    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                                        <div class="grid lg:grid-cols-2 gap-8 items-center">
                                            <div>
                                                <div
                                                    class="inline-flex items-center gap-2 mb-4 px-4 py-2 bg-accent/30 backdrop-blur-sm border border-accent rounded-full">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-smartphone w-4 h-4" aria-hidden="true">
                                                        <rect width="14" height="20" x="5" y="2" rx="2" ry="2"></rect>
                                                        <path d="M12 18h.01"></path>
                                                    </svg>
                                                    <span>Download Our App</span>
                                                </div>
                                                <h2 class="text-3xl md:text-4xl mb-3">Shop India's Finest Luxury Brands
                                                </h2>
                                                <p class="text-white/90 mb-4">All our signature services available at
                                                    your fingertips—download now to access India's most innovative
                                                    luxury fashion platform.</p>
                                                <div class="grid md:grid-cols-2 gap-2.5 mb-4">
                                                    <div
                                                        class="flex items-start gap-2.5 bg-white/10 backdrop-blur-sm p-2.5 rounded-xl border border-white/20 hover:border-accent transition-all cursor-pointer shadow-[0_8px_16px_rgba(0,0,0,0.1)]">
                                                        <div
                                                            class="w-9 h-9 bg-gradient-to-br from-accent to-[#C8915D] rounded-full flex items-center justify-center shrink-0 text-white shadow-lg">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-sparkles w-6 h-6"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z">
                                                                </path>
                                                                <path d="M20 2v4"></path>
                                                                <path d="M22 4h-4"></path>
                                                                <circle cx="4" cy="20" r="2"></circle>
                                                            </svg>
                                                        </div>
                                                        <div>
                                                            <h4 class="mb-0.5 font-semibold text-sm">Curated for You
                                                            </h4>
                                                            <p class="text-xs text-white/70 leading-relaxed">AI-powered
                                                                personalized recommendations</p>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="flex items-start gap-2.5 bg-white/10 backdrop-blur-sm p-2.5 rounded-xl border border-white/20 hover:border-accent transition-all cursor-pointer shadow-[0_8px_16px_rgba(0,0,0,0.1)]">
                                                        <div
                                                            class="w-9 h-9 bg-gradient-to-br from-accent to-[#C8915D] rounded-full flex items-center justify-center shrink-0 text-white shadow-lg">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-gift w-6 h-6" aria-hidden="true">
                                                                <rect x="3" y="8" width="18" height="4" rx="1"></rect>
                                                                <path d="M12 8v13"></path>
                                                                <path d="M19 12v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-7">
                                                                </path>
                                                                <path
                                                                    d="M7.5 8a2.5 2.5 0 0 1 0-5A4.8 8 0 0 1 12 8a4.8 8 0 0 1 4.5-5 2.5 2.5 0 0 1 0 5">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        <div>
                                                            <h4 class="mb-0.5 font-semibold text-sm">App Exclusives</h4>
                                                            <p class="text-xs text-white/70 leading-relaxed">Designer
                                                                drops available only on app</p>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="flex items-start gap-2.5 bg-white/10 backdrop-blur-sm p-2.5 rounded-xl border border-white/20 hover:border-accent transition-all cursor-pointer shadow-[0_8px_16px_rgba(0,0,0,0.1)]">
                                                        <div
                                                            class="w-9 h-9 bg-gradient-to-br from-accent to-[#C8915D] rounded-full flex items-center justify-center shrink-0 text-white shadow-lg">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-truck w-6 h-6" aria-hidden="true">
                                                                <path
                                                                    d="M14 18V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h2">
                                                                </path>
                                                                <path d="M15 18H9"></path>
                                                                <path
                                                                    d="M19 18h2a1 1 0 0 0 1-1v-3.65a1 1 0 0 0-.22-.624l-3.48-4.35A1 1 0 0 0 17.52 8H14">
                                                                </path>
                                                                <circle cx="17" cy="18" r="2"></circle>
                                                                <circle cx="7" cy="18" r="2"></circle>
                                                            </svg>
                                                        </div>
                                                        <div>
                                                            <h4 class="mb-0.5 font-semibold text-sm">Live Order Tracking
                                                            </h4>
                                                            <p class="text-xs text-white/70 leading-relaxed">GPS
                                                                tracking for all deliveries</p>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="flex items-start gap-2.5 bg-white/10 backdrop-blur-sm p-2.5 rounded-xl border border-white/20 hover:border-accent transition-all cursor-pointer shadow-[0_8px_16px_rgba(0,0,0,0.1)]">
                                                        <div
                                                            class="w-9 h-9 bg-gradient-to-br from-accent to-[#C8915D] rounded-full flex items-center justify-center shrink-0 text-white shadow-lg">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-star w-6 h-6" aria-hidden="true">
                                                                <path
                                                                    d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        <div>
                                                            <h4 class="mb-0.5 font-semibold text-sm">VIP Early Access
                                                            </h4>
                                                            <p class="text-xs text-white/70 leading-relaxed">Preview
                                                                collections before launch</p>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="flex items-start gap-2.5 bg-white/10 backdrop-blur-sm p-2.5 rounded-xl border border-white/20 hover:border-accent transition-all cursor-pointer shadow-[0_8px_16px_rgba(0,0,0,0.1)]">
                                                        <div
                                                            class="w-9 h-9 bg-gradient-to-br from-accent to-[#C8915D] rounded-full flex items-center justify-center shrink-0 text-white shadow-lg">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-heart w-6 h-6" aria-hidden="true">
                                                                <path
                                                                    d="M2 9.5a5.5 5.5 0 0 1 9.591-3.676.56.56 0 0 0 .818 0A5.49 5.49 0 0 1 22 9.5c0 2.29-1.5 4-3 5.5l-5.492 5.313a2 2 0 0 1-3 .019L5 15c-1.5-1.5-3-3.2-3-5.5">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        <div>
                                                            <h4 class="mb-0.5 font-semibold text-sm">Smart Wishlist</h4>
                                                            <p class="text-xs text-white/70 leading-relaxed">Price drop
                                                                alerts &amp; back-in-stock</p>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="flex items-start gap-2.5 bg-white/10 backdrop-blur-sm p-2.5 rounded-xl border border-white/20 hover:border-accent transition-all cursor-pointer shadow-[0_8px_16px_rgba(0,0,0,0.1)]">
                                                        <div
                                                            class="w-9 h-9 bg-gradient-to-br from-accent to-[#C8915D] rounded-full flex items-center justify-center shrink-0 text-white shadow-lg">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-shield w-6 h-6" aria-hidden="true">
                                                                <path
                                                                    d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        <div>
                                                            <h4 class="mb-0.5 font-semibold text-sm">Authenticity
                                                                Promise</h4>
                                                            <p class="text-xs text-white/70 leading-relaxed">100%
                                                                verified luxury goods</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex flex-col sm:flex-row gap-3">
                                                    <button
                                                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full text-sm font-medium duration-200 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-5 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive hover:scale-105 active:scale-100 shadow-[0_8px_24px_rgba(0,0,0,0.12)] h-[52px] px-8 py-3.5 bg-primary hover:bg-primary/90 text-white group border border-accent/20 hover:border-accent/40 hover:shadow-[0_8px_24px_rgba(226,164,95,0.3)] transition-all">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="lucide lucide-download w-5 h-5 mr-2"
                                                            aria-hidden="true">
                                                            <path d="M12 15V3"></path>
                                                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                            <path d="m7 10 5 5 5-5"></path>
                                                        </svg>
                                                        Download on App Store
                                                    </button>
                                                    <button
                                                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full text-sm font-medium duration-200 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-5 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive hover:scale-105 active:scale-100 hover:bg-accent/90 h-[52px] px-8 py-3.5 bg-gradient-to-r from-accent to-[#C8915D] hover:from-[#C8915D] hover:to-accent text-white group shadow-lg hover:shadow-xl transition-all">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="lucide lucide-download w-5 h-5 mr-2"
                                                            aria-hidden="true">
                                                            <path d="M12 15V3"></path>
                                                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                            <path d="m7 10 5 5 5-5"></path>
                                                        </svg>
                                                        Get it on Google Play
                                                    </button>
                                                </div>
                                                <div
                                                    class="mt-4 p-3 bg-accent/20 backdrop-blur-sm border border-accent rounded-lg">
                                                    <div class="flex items-start gap-2.5">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="lucide lucide-gift w-5 h-5 text-accent shrink-0 mt-0.5"
                                                            aria-hidden="true">
                                                            <rect x="3" y="8" width="18" height="4" rx="1"></rect>
                                                            <path d="M12 8v13"></path>
                                                            <path d="M19 12v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-7"></path>
                                                            <path
                                                                d="M7.5 8a2.5 2.5 0 0 1 0-5A4.8 8 0 0 1 12 8a4.8 8 0 0 1 4.5-5 2.5 2.5 0 0 1 0 5">
                                                            </path>
                                                        </svg>
                                                        <div>
                                                            <h4 class="mb-1 font-semibold">New User Exclusive</h4>
                                                            <p class="text-white/80 text-sm">₹1,000 off on your first
                                                                luxury purchase above ₹5,000. Code: <span
                                                                    class="text-accent font-semibold">LUXURY1K</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div>
                                            <div class="relative lg:block hidden">
                                                <div class="relative h-[500px] flex items-center justify-center">
                                                    <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;q=80&amp;w=800"
                                                        alt="SEVORA Mobile App"
                                                        class="max-h-full w-auto rounded-3xl shadow-2xl">
                                                    <div
                                                        class="absolute -top-8 -right-8 w-28 h-28 bg-accent rounded-full flex items-center justify-center animate-pulse">
                                                        <div class="text-center">
                                                            <p class="text-2xl text-accent-foreground">10%</p>
                                                            <p class="text-xs text-accent-foreground">OFF</p>
                                                        </div>
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section> -->
<?php display_about_app_sections(); ?>

                                
                                <!-- <?php if (have_rows('app_sections')) : ?>
                                    
    <?php while (have_rows('app_sections')) : the_row(); 
   
 $about_page = get_page_by_title('About'); // 'About' is the page title
 if ($about_page) {
    $about_page_id = $about_page->ID;
    echo 'About Page ID: ' . $about_page_id;
 }




        $badge = get_sub_field('app_badge_text');
        $heading = get_sub_field('app_heading');
        $description = get_sub_field('app_description');
        $img = get_sub_field('app_image');
    ?>
        <section class="py-12 lg:py-16 bg-primary text-white relative overflow-hidden">
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid lg:grid-cols-2 gap-8 items-center">
                    
                     Left Column 
                    <div>
                        <?php 
$badge_icon = get_sub_field('badge_icon'); // SVG code from ACF
if ($badge) : ?>
    <div class="inline-flex items-center gap-2 mb-4 px-4 py-2 bg-accent/30 backdrop-blur-sm border border-accent rounded-full">
        <?php 
        if ($badge_icon) {
            // Output SVG from ACF field
            echo $badge_icon; 
        } else { ?>
            Default icon if none provided 
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-smartphone w-4 h-4" aria-hidden="true">
                <rect width="14" height="20" x="5" y="2" rx="2" ry="2"></rect>
                <path d="M12 18h.01"></path>
            </svg>
        <?php } ?>
        <span><?php echo esc_html($badge); ?></span>
    </div>
<?php endif; ?>


                        <?php if ($heading) : ?>
                            <h2 class="text-3xl md:text-4xl mb-3"><?php echo esc_html($heading); ?></h2>
                        <?php endif; ?>

                        <?php if ($description) : ?>
                            <p class="text-white/90 mb-4"><?php echo esc_html($description); ?></p>
                        <?php endif; ?>

                        Features 
                        <?php if (have_rows('app_features')) : ?>
                            <div class="grid md:grid-cols-2 gap-2.5 mb-4">
                                <?php while (have_rows('app_features')) : the_row(); ?>
                                    <div class="flex items-start gap-2.5 bg-white/10 backdrop-blur-sm p-2.5 rounded-xl border border-white/20 hover:border-accent transition-all cursor-pointer shadow-[0_8px_16px_rgba(0,0,0,0.1)]">
                                        <div class="w-9 h-9 bg-gradient-to-br from-accent to-[#C8915D] rounded-full flex items-center justify-center shrink-0 text-white shadow-lg">
                                            <?php echo get_sub_field('feature_icon'); ?>
                                        </div>
                                        <div>
                                            <h4 class="mb-0.5 font-semibold text-sm"><?php echo esc_html(get_sub_field('feature_title')); ?></h4>
                                            <p class="text-xs text-white/70 leading-relaxed"><?php echo esc_html(get_sub_field('feature_description')); ?></p>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>

                         Buttons 
                        <?php if (have_rows('app_buttons')) : ?>
    <div class="flex flex-col sm:flex-row gap-3">
        <?php while (have_rows('app_buttons')) : the_row(); 
            $text = get_sub_field('button_text');
            $url = get_sub_field('button_url');
            $icon = get_sub_field('download_icon'); // SVG code or HTML from ACF
        ?>
            <a href="<?php echo esc_url($url); ?>" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full text-sm font-medium duration-200 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-5 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive hover:scale-105 active:scale-100 shadow-[0_8px_24px_rgba(0,0,0,0.12)] h-[52px] px-8 py-3.5 bg-primary hover:bg-primary/90 text-white group border border-accent/20 hover:border-accent/40 hover:shadow-[0_8px_24px_rgba(226,164,95,0.3)] transition-all">
                <?php 
                // Output SVG icon from ACF field if exists
                if ($icon) {
                    echo $icon;
                } else { ?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-download w-5 h-5 mr-2" aria-hidden="true">
                        <path d="M12 15V3"></path>
                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                        <path d="m7 10 5 5 5-5"></path>
                    </svg>
                <?php } ?>
                <?php echo esc_html($text); ?>
            </a>
        <?php endwhile; ?>
    </div>
<?php endif; ?>

                    </div>

                    Right Column Image 
                    <div class="relative lg:block hidden">
                        <?php if ($img) : ?>
                            <div class="relative h-[500px] flex items-center justify-center">
                                <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>" class="max-h-full w-auto rounded-3xl shadow-2xl">
                            </div>
                        <?php endif; ?>
                    </div>

                </div>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?> -->

                            </div>
                        </main>



<?php 
get_footer();
?>