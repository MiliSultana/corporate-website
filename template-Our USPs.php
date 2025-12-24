<?php 
// Template Name:Our UPSs

get_header();?>


<main id="main-content" class="flex-1">
                            <div class="overflow-hidden">
                                <section
                                    class="relative py-20 lg:py-32 bg-gradient-to-br from-primary via-[#5A2535] to-primary text-white overflow-hidden">
                                    <div class="relative max-w-7xl mx-auto">
                                        <nav aria-label="Breadcrumb" class="py-4 px-4 sm:px-6 lg:px-8">
                                            <ol class="flex items-center gap-2 text-sm">
                                                <li>
                                                    <a class="flex items-center gap-1 text-muted-foreground hover:text-accent transition-colors"
                                                        href="<?php echo esc_url( home_url('/') ); ?>" data-discover="true">
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
                                                    <span class="text-primary font-medium">Our USPs</span>
                                                </li>
                                            </ol>
                                        </nav>
                                    </div>
<!-- 
                                    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                                        <div class="text-center max-w-3xl mx-auto">
                                            <div
                                                class="inline-flex items-center gap-2 mb-6 px-4 py-2 bg-accent/30 backdrop-blur-sm border border-accent rounded-full">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-sparkles w-4 h-4" aria-hidden="true">
                                                    <path
                                                        d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z">
                                                    </path>
                                                    <path d="M20 2v4"></path>
                                                    <path d="M22 4h-4"></path>
                                                    <circle cx="4" cy="20" r="2"></circle>
                                                </svg>
                                                <span class="uppercase tracking-wide text-sm">Our Unique
                                                    Advantages</span>
                                            </div>
                                            <h1 class="text-5xl md:text-6xl mb-6">
                                                What Makes SEVORA Different</h1>
                                            <p class="text-xl text-white/90">
                                                India's first luxury fashion app combining exclusive designer access
                                                with innovative shopping experiences</p>
                                        </div>
                                    </div> -->

                                    <?php if (have_rows('our_ups_header')) : ?>
    <?php while (have_rows('our_ups_header')) : the_row(); ?>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto">

                <!-- Badge -->
                <div class="inline-flex items-center gap-2 mb-6 px-4 py-2 bg-accent/30 backdrop-blur-sm border border-accent rounded-full">
                    <?php if ($svg = get_sub_field('badge_svg')) : ?>
                        <span class="w-4 h-4">
                            <?php echo $svg; ?>
                        </span>
                    <?php endif; ?>

                    <span class="uppercase tracking-wide text-sm">
                        <?php echo esc_html(get_sub_field('badge_text')); ?>
                    </span>
                </div>

                <!-- Heading -->
                <h1 class="text-5xl md:text-6xl mb-6">
                    <?php echo esc_html(get_sub_field('heading')); ?>
                </h1>

                <!-- Description -->
                <p class="text-xl text-white/90">
                    <?php echo esc_html(get_sub_field('description')); ?>
                </p>

            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>

                                    <div class="absolute bottom-8 left-1/2 -translate-x-1/2">
                                        <div
                                            class="w-6 h-10 border-2 border-white/40 rounded-full flex items-start justify-center p-2">
                                            <div class="w-1.5 h-1.5 bg-white rounded-full"></div>
                                        </div>
                                    </div>
                                </section>
                                <!-- <section class="py-16 lg:py-24 bg-secondary">
                                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                                        <div class="text-center mb-12">
                                            <h2 class="text-4xl md:text-5xl mb-4">Our Signature USPs</h2>
                                            <p class="text-lg text-muted-foreground max-w-2xl mx-auto">Revolutionary
                                                features that make luxury fashion accessible, convenient, and
                                                personalized for India's style-conscious shoppers</p>
                                        </div>
                                        <div class="space-y-10">
                                            <div
                                                class="bg-white rounded-2xl overflow-hidden shadow-[0_12px_24px_rgba(0,0,0,0.08)] border border-accent/20 hover:border-accent hover:shadow-[0_16px_32px_rgba(0,0,0,0.12)] transition-all">
                                                <div class="grid lg:grid-cols-2 gap-0 ">
                                                    <div class="relative h-80 lg:h-auto ">
                                                        <img src="https://images.unsplash.com/photo-1566576721346-d4a3b4eaeb55?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;q=80&amp;w=800"
                                                            alt="60-Minute Express Delivery"
                                                            class="w-full h-full object-cover">
                                                        <div
                                                            class="absolute inset-0 bg-gradient-to-br from-orange-500 to-red-500 opacity-20">
                                                        </div>
                                                        <div class="absolute top-6 left-6">
                                                            <div
                                                                class="w-16 h-16 bg-gradient-to-br from-accent to-[#C8915D] rounded-full flex items-center justify-center text-white shadow-[0_12px_24px_rgba(226,164,95,0.4)]">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="lucide lucide-clock w-8 h-8"
                                                                    aria-hidden="true">
                                                                    <path d="M12 6v6l4 2"></path>
                                                                    <circle cx="12" cy="12" r="10"></circle>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="p-6 lg:p-8 flex flex-col justify-center">
                                                        <h3 class="text-2xl md:text-3xl mb-2">60-Minute Express Delivery
                                                        </h3>
                                                        <p class="text-lg text-accent mb-3 italic">Fashion emergencies
                                                            solved</p>
                                                        <p class="text-base text-muted-foreground mb-5">India's fastest
                                                            luxury fashion delivery for last-minute occasions</p>
                                                        <div class="mb-5">
                                                            <h4 class="text-base mb-2 font-semibold">Why This Matters:
                                                            </h4>
                                                            <div class="grid gap-2">
                                                                <div class="flex items-start gap-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-circle-check w-4 h-4 text-accent shrink-0 mt-0.5"
                                                                        aria-hidden="true">
                                                                        <circle cx="12" cy="12" r="10"></circle>
                                                                        <path d="m9 12 2 2 4-4"></path>
                                                                    </svg>
                                                                    <span
                                                                        class="text-muted-foreground text-sm">Available
                                                                        in Mumbai, Delhi, Bangalore metro areas</span>
                                                                </div>
                                                                <div class="flex items-start gap-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-circle-check w-4 h-4 text-accent shrink-0 mt-0.5"
                                                                        aria-hidden="true">
                                                                        <circle cx="12" cy="12" r="10"></circle>
                                                                        <path d="m9 12 2 2 4-4"></path>
                                                                    </svg>
                                                                    <span class="text-muted-foreground text-sm">Perfect
                                                                        for weddings, parties &amp; events</span>
                                                                </div>
                                                                <div class="flex items-start gap-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-circle-check w-4 h-4 text-accent shrink-0 mt-0.5"
                                                                        aria-hidden="true">
                                                                        <circle cx="12" cy="12" r="10"></circle>
                                                                        <path d="m9 12 2 2 4-4"></path>
                                                                    </svg>
                                                                    <span
                                                                        class="text-muted-foreground text-sm">White-glove
                                                                        delivery with premium packaging</span>
                                                                </div>
                                                                <div class="flex items-start gap-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-circle-check w-4 h-4 text-accent shrink-0 mt-0.5"
                                                                        aria-hidden="true">
                                                                        <circle cx="12" cy="12" r="10"></circle>
                                                                        <path d="m9 12 2 2 4-4"></path>
                                                                    </svg>
                                                                    <span
                                                                        class="text-muted-foreground text-sm">Real-time
                                                                        GPS tracking</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="flex flex-col sm:flex-row gap-3">
                                                            <button data-slot="button"
                                                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full text-sm font-medium transition-all duration-200 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-5 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive hover:scale-105 hover:shadow-lg active:scale-100 shadow-[0_8px_24px_rgba(0,0,0,0.12)] h-[52px] px-8 py-3.5 bg-accent text-white hover:bg-accent/90 group"
                                                                type="button" aria-haspopup="dialog"
                                                                aria-expanded="false" aria-controls="radix-:rg:"
                                                                data-state="closed">
                                                                Learn How It Works
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="lucide lucide-arrow-right w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform"
                                                                    aria-hidden="true">
                                                                    <path d="M5 12h14"></path>
                                                                    <path d="m12 5 7 7-7 7"></path>
                                                                </svg>
                                                            </button>
                                                            <button data-slot="button"
                                                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full text-sm font-medium transition-all duration-200 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-5 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive hover:scale-105 hover:shadow-lg active:scale-100 border bg-transparent text-accent hover:bg-accent hover:text-white dark:bg-input/30 dark:border-input dark:hover:bg-input/50 shadow-[0_4px_16px_rgba(0,0,0,0.08)] h-[52px] px-8 py-3.5 border-accent/20 hover:border-accent group"
                                                                type="button" aria-haspopup="dialog"
                                                                aria-expanded="false" aria-controls="radix-:rj:"
                                                                data-state="closed">
                                                                <span class="mr-2">View Demo</span>
                                                                <svg class="w-4 h-4 group-hover:scale-110 transition-transform"
                                                                    fill="currentColor" viewBox="0 0 20 20">
                                                                    <path
                                                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z">
                                                                    </path>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="mt-6 pt-6 border-t border-accent/20">
                                                            <p class="text-sm text-muted-foreground"><span
                                                                    class="text-foreground">Available in:</span> Mumbai,
                                                                Delhi NCR, Bangalore (Select pin codes)</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="bg-white rounded-2xl overflow-hidden shadow-[0_12px_24px_rgba(0,0,0,0.08)] border border-accent/20 hover:border-accent hover:shadow-[0_16px_32px_rgba(0,0,0,0.12)] transition-all">
                                                <div class="grid lg:grid-cols-2 gap-0 lg:grid-flow-dense">
                                                    <div class="relative h-80 lg:h-auto lg:col-start-2">
                                                        <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;q=80&amp;w=800"
                                                            alt="Try Before You Buy" class="w-full h-full object-cover">
                                                        <div
                                                            class="absolute inset-0 bg-gradient-to-br from-purple-500 to-pink-500 opacity-20">
                                                        </div>
                                                        <div class="absolute top-6 left-6">
                                                            <div
                                                                class="w-16 h-16 bg-gradient-to-br from-accent to-[#C8915D] rounded-full flex items-center justify-center text-white shadow-[0_12px_24px_rgba(226,164,95,0.4)]">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="lucide lucide-shopping-bag w-8 h-8"
                                                                    aria-hidden="true">
                                                                    <path d="M16 10a4 4 0 0 1-8 0"></path>
                                                                    <path d="M3.103 6.034h17.794"></path>
                                                                    <path
                                                                        d="M3.4 5.467a2 2 0 0 0-.4 1.2V20a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6.667a2 2 0 0 0-.4-1.2l-2-2.667A2 2 0 0 0 17 2H7a2 2 0 0 0-1.6.8z">
                                                                    </path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="p-6 lg:p-8 flex flex-col justify-center">
                                                        <h3 class="text-2xl md:text-3xl mb-2">Try Before You Buy</h3>
                                                        <p class="text-lg text-accent mb-3 italic">Confidence in every
                                                            purchase</p>
                                                        <p class="text-base text-muted-foreground mb-5">Experience
                                                            designer wear at home before committing—India's first for
                                                            luxury fashion</p>
                                                        <div class="mb-5">
                                                            <h4 class="text-base mb-2 font-semibold">Why This Matters:
                                                            </h4>
                                                            <div class="grid gap-2">
                                                                <div class="flex items-start gap-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-circle-check w-4 h-4 text-accent shrink-0 mt-0.5"
                                                                        aria-hidden="true">
                                                                        <circle cx="12" cy="12" r="10"></circle>
                                                                        <path d="m9 12 2 2 4-4"></path>
                                                                    </svg>
                                                                    <span class="text-muted-foreground text-sm">Try up
                                                                        to 3 designer pieces simultaneously</span>
                                                                </div>
                                                                <div class="flex items-start gap-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-circle-check w-4 h-4 text-accent shrink-0 mt-0.5"
                                                                        aria-hidden="true">
                                                                        <circle cx="12" cy="12" r="10"></circle>
                                                                        <path d="m9 12 2 2 4-4"></path>
                                                                    </svg>
                                                                    <span class="text-muted-foreground text-sm">48-hour
                                                                        styling period</span>
                                                                </div>
                                                                <div class="flex items-start gap-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-circle-check w-4 h-4 text-accent shrink-0 mt-0.5"
                                                                        aria-hidden="true">
                                                                        <circle cx="12" cy="12" r="10"></circle>
                                                                        <path d="m9 12 2 2 4-4"></path>
                                                                    </svg>
                                                                    <span class="text-muted-foreground text-sm">Zero
                                                                        advance payment required</span>
                                                                </div>
                                                                <div class="flex items-start gap-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-circle-check w-4 h-4 text-accent shrink-0 mt-0.5"
                                                                        aria-hidden="true">
                                                                        <circle cx="12" cy="12" r="10"></circle>
                                                                        <path d="m9 12 2 2 4-4"></path>
                                                                    </svg>
                                                                    <span
                                                                        class="text-muted-foreground text-sm">Professional
                                                                        styling consultation included</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="flex flex-col sm:flex-row gap-3">
                                                            <button 
                                                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full text-sm font-medium transition-all duration-200 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-5 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive hover:scale-105 hover:shadow-lg active:scale-100 shadow-[0_8px_24px_rgba(0,0,0,0.12)] h-[52px] px-8 py-3.5 bg-accent text-white hover:bg-accent/90 group"
                                                                type="button" aria-haspopup="dialog"
                                                                aria-expanded="false" aria-controls="radix-:rm:"
                                                               >
                                                                Learn How It Works
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="lucide lucide-arrow-right w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform"
                                                                    aria-hidden="true">
                                                                    <path d="M5 12h14"></path>
                                                                    <path d="m12 5 7 7-7 7"></path>
                                                                </svg>
                                                            </button>
                                                            <button 
                                                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full text-sm font-medium transition-all duration-200 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-5 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive hover:scale-105 hover:shadow-lg active:scale-100 border bg-transparent text-accent hover:bg-accent hover:text-white dark:bg-input/30 dark:border-input dark:hover:bg-input/50 shadow-[0_4px_16px_rgba(0,0,0,0.08)] h-[52px] px-8 py-3.5 border-accent/20 hover:border-accent group"
                                                                type="button" aria-haspopup="dialog"
                                                                aria-expanded="false" aria-controls="radix-:rp:"
                                                               >
                                                                <span class="mr-2">View Demo</span>
                                                                <svg class="w-4 h-4 group-hover:scale-110 transition-transform"
                                                                    fill="currentColor" viewBox="0 0 20 20">
                                                                    <path
                                                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z">
                                                                    </path>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="mt-6 pt-6 border-t border-accent/20">
                                                            <p class="text-sm text-muted-foreground"><span
                                                                    class="text-foreground">Available in:</span> PAN
                                                                India (Luxury items ₹5,000+)</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="bg-white rounded-2xl overflow-hidden shadow-[0_12px_24px_rgba(0,0,0,0.08)] border border-accent/20 hover:border-accent hover:shadow-[0_16px_32px_rgba(0,0,0,0.12)] transition-all">
                                                <div class="grid lg:grid-cols-2 gap-0 ">
                                                    <div class="relative h-80 lg:h-auto ">
                                                        <img src="https://images.unsplash.com/photo-1556905055-8f358a7a47b2?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;q=80&amp;w=800"
                                                            alt="Personal Stylist as a Service"
                                                            class="w-full h-full object-cover">
                                                        <div
                                                            class="absolute inset-0 bg-gradient-to-br from-yellow-500 to-orange-500 opacity-20">
                                                        </div>
                                                        <div class="absolute top-6 left-6">
                                                            <div
                                                                class="w-16 h-16 bg-gradient-to-br from-accent to-[#C8915D] rounded-full flex items-center justify-center text-white shadow-[0_12px_24px_rgba(226,164,95,0.4)]">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="lucide lucide-sparkles w-8 h-8"
                                                                    aria-hidden="true">
                                                                    <path
                                                                        d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z">
                                                                    </path>
                                                                    <path d="M20 2v4"></path>
                                                                    <path d="M22 4h-4"></path>
                                                                    <circle cx="4" cy="20" r="2"></circle>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="p-6 lg:p-8 flex flex-col justify-center">
                                                        <h3 class="text-2xl md:text-3xl mb-2">Personal Stylist as a
                                                            Service</h3>
                                                        <p class="text-lg text-accent mb-3 italic">Your fashion curator
                                                        </p>
                                                        <p class="text-base text-muted-foreground mb-5">India's top
                                                            fashion stylists at your service—from Bollywood to your
                                                            wardrobe</p>
                                                        <div class="mb-5">
                                                            <h4 class="text-base mb-2 font-semibold">Why This Matters:
                                                            </h4>
                                                            <div class="grid gap-2">
                                                                <div class="flex items-start gap-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-circle-check w-4 h-4 text-accent shrink-0 mt-0.5"
                                                                        aria-hidden="true">
                                                                        <circle cx="12" cy="12" r="10"></circle>
                                                                        <path d="m9 12 2 2 4-4"></path>
                                                                    </svg>
                                                                    <span class="text-muted-foreground text-sm">Expert
                                                                        stylists with celebrity experience</span>
                                                                </div>
                                                                <div class="flex items-start gap-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-circle-check w-4 h-4 text-accent shrink-0 mt-0.5"
                                                                        aria-hidden="true">
                                                                        <circle cx="12" cy="12" r="10"></circle>
                                                                        <path d="m9 12 2 2 4-4"></path>
                                                                    </svg>
                                                                    <span
                                                                        class="text-muted-foreground text-sm">Occasion-based
                                                                        styling (weddings, parties, corporate)</span>
                                                                </div>
                                                                <div class="flex items-start gap-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-circle-check w-4 h-4 text-accent shrink-0 mt-0.5"
                                                                        aria-hidden="true">
                                                                        <circle cx="12" cy="12" r="10"></circle>
                                                                        <path d="m9 12 2 2 4-4"></path>
                                                                    </svg>
                                                                    <span class="text-muted-foreground text-sm">Body
                                                                        type analysis &amp; color consultation</span>
                                                                </div>
                                                                <div class="flex items-start gap-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-circle-check w-4 h-4 text-accent shrink-0 mt-0.5"
                                                                        aria-hidden="true">
                                                                        <circle cx="12" cy="12" r="10"></circle>
                                                                        <path d="m9 12 2 2 4-4"></path>
                                                                    </svg>
                                                                    <span class="text-muted-foreground text-sm">Complete
                                                                        wardrobe curation</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="flex flex-col sm:flex-row gap-3">
                                                            <button data-slot="button"
                                                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full text-sm font-medium transition-all duration-200 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-5 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive hover:scale-105 hover:shadow-lg active:scale-100 shadow-[0_8px_24px_rgba(0,0,0,0.12)] h-[52px] px-8 py-3.5 bg-accent text-white hover:bg-accent/90 group"
                                                                type="button" aria-haspopup="dialog"
                                                                aria-expanded="false" aria-controls="radix-:rs:"
                                                                data-state="closed">
                                                                Learn How It Works
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="lucide lucide-arrow-right w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform"
                                                                    aria-hidden="true">
                                                                    <path d="M5 12h14"></path>
                                                                    <path d="m12 5 7 7-7 7"></path>
                                                                </svg>
                                                            </button>
                                                            <button data-slot="button"
                                                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full text-sm font-medium transition-all duration-200 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-5 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive hover:scale-105 hover:shadow-lg active:scale-100 border bg-transparent text-accent hover:bg-accent hover:text-white dark:bg-input/30 dark:border-input dark:hover:bg-input/50 shadow-[0_4px_16px_rgba(0,0,0,0.08)] h-[52px] px-8 py-3.5 border-accent/20 hover:border-accent group"
                                                                type="button" aria-haspopup="dialog"
                                                                aria-expanded="false" aria-controls="radix-:rv:"
                                                                data-state="closed">
                                                                <span class="mr-2">View Demo</span>
                                                                <svg class="w-4 h-4 group-hover:scale-110 transition-transform"
                                                                    fill="currentColor" viewBox="0 0 20 20">
                                                                    <path
                                                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z">
                                                                    </path>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="mt-6 pt-6 border-t border-accent/20">
                                                            <p class="text-sm text-muted-foreground"><span
                                                                    class="text-foreground">Available in:</span> PAN
                                                                India (₹999/session, Free for Elite)</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="bg-white rounded-2xl overflow-hidden shadow-[0_12px_24px_rgba(0,0,0,0.08)] border border-accent/20 hover:border-accent hover:shadow-[0_16px_32px_rgba(0,0,0,0.12)] transition-all">
                                                <div class="grid lg:grid-cols-2 gap-0 lg:grid-flow-dense">
                                                    <div class="relative h-80 lg:h-auto lg:col-start-2">
                                                        <div
                                                            class="inline-block bg-gray-100 text-center align-middle w-full h-full object-cover">
                                                            <div class="flex items-center justify-center w-full h-full">
                                                                <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iODgiIGhlaWdodD0iODgiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgc3Ryb2tlPSIjMDAwIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBvcGFjaXR5PSIuMyIgZmlsbD0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIzLjciPjxyZWN0IHg9IjE2IiB5PSIxNiIgd2lkdGg9IjU2IiBoZWlnaHQ9IjU2IiByeD0iNiIvPjxwYXRoIGQ9Im0xNiA1OCAxNi0xOCAzMiAzMiIvPjxjaXJjbGUgY3g9IjUzIiBjeT0iMzUiIHI9IjciLz48L3N2Zz4KCg=="
                                                                    alt="Error loading image"
                                                                    data-original-url="https://images.unsplash.com/photo-1595246140025-573bbdabeaec?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;q=80&amp;w=800">
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="absolute inset-0 bg-gradient-to-br from-blue-500 to-cyan-500 opacity-20">
                                                        </div>
                                                        <div class="absolute top-6 left-6">
                                                            <div
                                                                class="w-16 h-16 bg-gradient-to-br from-accent to-[#C8915D] rounded-full flex items-center justify-center text-white shadow-[0_12px_24px_rgba(226,164,95,0.4)]">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="lucide lucide-calendar-clock w-8 h-8"
                                                                    aria-hidden="true">
                                                                    <path d="M16 14v2.2l1.6 1"></path>
                                                                    <path d="M16 2v4"></path>
                                                                    <path
                                                                        d="M21 7.5V6a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h3.5">
                                                                    </path>
                                                                    <path d="M3 10h5"></path>
                                                                    <path d="M8 2v4"></path>
                                                                    <circle cx="16" cy="16" r="6"></circle>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="p-6 lg:p-8 flex flex-col justify-center">
                                                        <h3 class="text-2xl md:text-3xl mb-2">Flexible Slotted Delivery
                                                        </h3>
                                                        <p class="text-lg text-accent mb-3 italic">Luxury on your
                                                            timeline</p>
                                                        <p class="text-base text-muted-foreground mb-5">Choose delivery
                                                            slots that fit your busy lifestyle—India's most flexible
                                                            luxury delivery</p>
                                                        <div class="mb-5">
                                                            <h4 class="text-base mb-2 font-semibold">Why This Matters:
                                                            </h4>
                                                            <div class="grid gap-2">
                                                                <div class="flex items-start gap-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-circle-check w-4 h-4 text-accent shrink-0 mt-0.5"
                                                                        aria-hidden="true">
                                                                        <circle cx="12" cy="12" r="10"></circle>
                                                                        <path d="m9 12 2 2 4-4"></path>
                                                                    </svg>
                                                                    <span class="text-muted-foreground text-sm">Precise
                                                                        2-hour delivery windows</span>
                                                                </div>
                                                                <div class="flex items-start gap-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-circle-check w-4 h-4 text-accent shrink-0 mt-0.5"
                                                                        aria-hidden="true">
                                                                        <circle cx="12" cy="12" r="10"></circle>
                                                                        <path d="m9 12 2 2 4-4"></path>
                                                                    </svg>
                                                                    <span class="text-muted-foreground text-sm">Early
                                                                        morning to late evening slots</span>
                                                                </div>
                                                                <div class="flex items-start gap-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-circle-check w-4 h-4 text-accent shrink-0 mt-0.5"
                                                                        aria-hidden="true">
                                                                        <circle cx="12" cy="12" r="10"></circle>
                                                                        <path d="m9 12 2 2 4-4"></path>
                                                                    </svg>
                                                                    <span class="text-muted-foreground text-sm">Weekend
                                                                        &amp; holiday delivery</span>
                                                                </div>
                                                                <div class="flex items-start gap-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-circle-check w-4 h-4 text-accent shrink-0 mt-0.5"
                                                                        aria-hidden="true">
                                                                        <circle cx="12" cy="12" r="10"></circle>
                                                                        <path d="m9 12 2 2 4-4"></path>
                                                                    </svg>
                                                                    <span class="text-muted-foreground text-sm">Easy
                                                                        rescheduling until 2 hours prior</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="flex flex-col sm:flex-row gap-3">
                                                            <button data-slot="button"
                                                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full text-sm font-medium transition-all duration-200 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-5 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive hover:scale-105 hover:shadow-lg active:scale-100 shadow-[0_8px_24px_rgba(0,0,0,0.12)] h-[52px] px-8 py-3.5 bg-accent text-white hover:bg-accent/90 group"
                                                                type="button" aria-haspopup="dialog"
                                                                aria-expanded="false" aria-controls="radix-:r12:"
                                                                data-state="closed">
                                                                Learn How It Works
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="lucide lucide-arrow-right w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform"
                                                                    aria-hidden="true">
                                                                    <path d="M5 12h14"></path>
                                                                    <path d="m12 5 7 7-7 7"></path>
                                                                </svg>
                                                            </button>
                                                            <button data-slot="button"
                                                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full text-sm font-medium transition-all duration-200 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-5 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive hover:scale-105 hover:shadow-lg active:scale-100 border bg-transparent text-accent hover:bg-accent hover:text-white dark:bg-input/30 dark:border-input dark:hover:bg-input/50 shadow-[0_4px_16px_rgba(0,0,0,0.08)] h-[52px] px-8 py-3.5 border-accent/20 hover:border-accent group"
                                                                type="button" aria-haspopup="dialog"
                                                                aria-expanded="false" aria-controls="radix-:r15:"
                                                                data-state="closed">
                                                                <span class="mr-2">View Demo</span>
                                                                <svg class="w-4 h-4 group-hover:scale-110 transition-transform"
                                                                    fill="currentColor" viewBox="0 0 20 20">
                                                                    <path
                                                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z">
                                                                    </path>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="mt-6 pt-6 border-t border-accent/20">
                                                            <p class="text-sm text-muted-foreground"><span
                                                                    class="text-foreground">Available in:</span> All
                                                                major cities across India</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section> -->

                                <?php if (have_rows('signature_usp_sections')) : ?>
    <?php while (have_rows('signature_usp_sections')) : the_row(); ?>

        <section class="py-16 lg:py-24 bg-secondary">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                <!-- Section Header -->
                <div class="text-center mb-12">
                    <?php if (get_sub_field('section_title')) : ?>
                        <h2 class="text-4xl md:text-5xl mb-4">
                            <?php echo esc_html(get_sub_field('section_title')); ?>
                        </h2>
                    <?php endif; ?>

                    <?php if (get_sub_field('section_description')) : ?>
                        <p class="text-lg text-muted-foreground max-w-2xl mx-auto">
                            <?php echo esc_html(get_sub_field('section_description')); ?>
                        </p>
                    <?php endif; ?>
                </div>

                <?php if (have_rows('signature_usps')) : ?>
                    <div class="space-y-10">

                        <?php while (have_rows('signature_usps')) : the_row(); ?>
                            <div class="bg-white rounded-2xl overflow-hidden shadow-[0_12px_24px_rgba(0,0,0,0.08)] border border-accent/20">

                                <div class="grid lg:grid-cols-2 gap-0">

                                    <!-- Image -->
                                    <div class="relative h-80 lg:h-auto">
                                        <?php $image = get_sub_field('usp_image'); ?>
                                        <?php if ($image) : ?>
                                            <img src="<?php echo esc_url($image['url']); ?>"
                                                 alt="<?php echo esc_attr($image['alt']); ?>"
                                                 class="w-full h-full object-cover">
                                        <?php endif; ?>

                                        <?php if (get_sub_field('usp_icon_svg')) : ?>
                                            <div class="absolute top-6 left-6">
                                                <div class="w-16 h-16 bg-accent rounded-full flex items-center justify-center text-white shadow-lg">
                                                    <?php echo get_sub_field('usp_icon_svg'); ?>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                    <!-- Content -->
                                    <div class="p-6 lg:p-8 flex flex-col justify-center">

                                        <h3 class="text-2xl md:text-3xl mb-2">
                                            <?php echo esc_html(get_sub_field('usp_title')); ?>
                                        </h3>

                                        <p class="text-lg text-accent mb-3 italic">
                                            <?php echo esc_html(get_sub_field('usp_tagline')); ?>
                                        </p>

                                        <p class="text-base text-muted-foreground mb-5">
                                            <?php echo esc_html(get_sub_field('usp_description')); ?>
                                        </p>

                                        <!-- Points -->
                                        <?php if (have_rows('usp_points')) : ?>
                                            <div class="mb-5">
                                                <h4 class="text-base mb-2 font-semibold">Why This Matters:</h4>
                                                <div class="grid gap-2">
                                                    <?php while (have_rows('usp_points')) : the_row(); ?>
                                                        <div class="flex items-start gap-2">
                                                            <svg class="w-4 h-4 text-accent shrink-0 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                                <circle cx="12" cy="12" r="10"></circle>
                                                                <path d="m9 12 2 2 4-4"></path>
                                                            </svg>
                                                            <span class="text-muted-foreground text-sm">
                                                                <?php echo esc_html(get_sub_field('point_text')); ?>
                                                            </span>
                                                        </div>
                                                    <?php endwhile; ?>
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                        <!-- Buttons -->
                                        <!-- <?php if (have_rows('usp_buttons')) : ?>
    <div class="flex flex-col sm:flex-row gap-3">

        <?php while (have_rows('usp_buttons')) : the_row();
            $text  = get_sub_field('button_text');
            $link  = get_sub_field('button_url');
            $style = get_sub_field('button_style');
            if (!$link || !$text) continue;
        ?>

            <?php if ($style === 'primary') : ?>
                 PRIMARY BUTTON 
                <a href="<?php echo esc_url($link['url']); ?>"
                   target="<?php echo esc_attr($link['target'] ?? '_self'); ?>"
                   class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full text-sm font-medium transition-all duration-200
                          hover:scale-105 hover:shadow-lg active:scale-100
                          shadow-[0_8px_24px_rgba(0,0,0,0.12)]
                          h-[52px] px-8 py-3.5
                          bg-accent text-white hover:bg-accent/90 group">

                    <?php echo esc_html($text); ?>

                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="lucide lucide-arrow-right w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform">
                        <path d="M5 12h14"></path>
                        <path d="m12 5 7 7-7 7"></path>
                    </svg>
                </a>

            <?php else : ?>
                <!-- SECONDARY BUTTON 
                <a href="<?php echo esc_url($link['url']); ?>"
                   target="<?php echo esc_attr($link['target'] ?? '_self'); ?>"
                   class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full text-sm font-medium transition-all duration-200
                          hover:scale-105 hover:shadow-lg active:scale-100
                          border bg-transparent text-accent
                          hover:bg-accent hover:text-white
                          shadow-[0_4px_16px_rgba(0,0,0,0.08)]
                          h-[52px] px-8 py-3.5 border-accent/20 hover:border-accent group">

                    <span class="mr-2"><?php echo esc_html($text); ?></span>

                    <svg class="w-4 h-4 group-hover:scale-110 transition-transform"
                         fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 18a8 8 0 100-16 8 8 0 000 16z
                                 M9.555 7.168A1 1 0 008 8v4
                                 a1 1 0 001.555.832l3-2
                                 a1 1 0 000-1.664l-3-2z"/>
                    </svg>
                </a>
            <?php endif; ?>

        <?php endwhile; ?>

    </div>
<?php endif; ?> -->


                                        <!-- Availability -->
                                        <?php if (get_sub_field('usp_availability')) : ?>
                                            <div class="mt-6 pt-6 border-t border-accent/20">
                                                <p class="text-sm text-muted-foreground">
                                                    <span class="text-foreground">Available in:</span>
                                                    <?php echo esc_html(get_sub_field('usp_availability')); ?>
                                                </p>
                                            </div>
                                        <?php endif; ?>

                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>

                    </div>
                <?php endif; ?>

            </div>
        </section>

    <?php endwhile; ?>
<?php endif; ?>



<?php display_about_app_sections(); ?>
                                <!-- <section class="py-16 lg:py-24 bg-primary text-white relative overflow-hidden">
                                    <div class="absolute inset-0 opacity-10">
                                        <div class="absolute inset-0"
                                            style="background-image: radial-gradient(circle at 30% 50%, rgba(226, 164, 95, 0.5) 0%, transparent 50%);">
                                        </div>
                                    </div>
                                    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                                        <div class="grid lg:grid-cols-2 gap-12 items-center">
                                            <div>
                                                <div
                                                    class="inline-flex items-center gap-2 mb-6 px-4 py-2 bg-accent/30 backdrop-blur-sm border border-accent rounded-full">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-smartphone w-4 h-4" aria-hidden="true">
                                                        <rect width="14" height="20" x="5" y="2" rx="2" ry="2"></rect>
                                                        <path d="M12 18h.01"></path>
                                                    </svg>
                                                    <span>Download Our App</span>
                                                </div>
                                                <h2 class="text-4xl md:text-5xl mb-4">Experience These USPs on Our App
                                                </h2>
                                                <p class="text-lg text-white/90 mb-6">All our signature services
                                                    available at your fingertips—download now to access India's most
                                                    innovative luxury fashion platform.</p>
                                                <div class="grid md:grid-cols-2 gap-3 mb-6">
                                                    <div
                                                        class="flex items-start gap-3 bg-white/10 backdrop-blur-sm p-3 rounded-xl border border-white/20 hover:border-accent transition-all cursor-pointer shadow-[0_8px_16px_rgba(0,0,0,0.1)]">
                                                        <div
                                                            class="w-10 h-10 bg-gradient-to-br from-accent to-[#C8915D] rounded-full flex items-center justify-center shrink-0 text-white shadow-lg">
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
                                                        class="flex items-start gap-3 bg-white/10 backdrop-blur-sm p-3 rounded-xl border border-white/20 hover:border-accent transition-all cursor-pointer shadow-[0_8px_16px_rgba(0,0,0,0.1)]">
                                                        <div
                                                            class="w-10 h-10 bg-gradient-to-br from-accent to-[#C8915D] rounded-full flex items-center justify-center shrink-0 text-white shadow-lg">
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
                                                        class="flex items-start gap-3 bg-white/10 backdrop-blur-sm p-3 rounded-xl border border-white/20 hover:border-accent transition-all cursor-pointer shadow-[0_8px_16px_rgba(0,0,0,0.1)]">
                                                        <div
                                                            class="w-10 h-10 bg-gradient-to-br from-accent to-[#C8915D] rounded-full flex items-center justify-center shrink-0 text-white shadow-lg">
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
                                                        class="flex items-start gap-3 bg-white/10 backdrop-blur-sm p-3 rounded-xl border border-white/20 hover:border-accent transition-all cursor-pointer shadow-[0_8px_16px_rgba(0,0,0,0.1)]">
                                                        <div
                                                            class="w-10 h-10 bg-gradient-to-br from-accent to-[#C8915D] rounded-full flex items-center justify-center shrink-0 text-white shadow-lg">
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
                                                        class="flex items-start gap-3 bg-white/10 backdrop-blur-sm p-3 rounded-xl border border-white/20 hover:border-accent transition-all cursor-pointer shadow-[0_8px_16px_rgba(0,0,0,0.1)]">
                                                        <div
                                                            class="w-10 h-10 bg-gradient-to-br from-accent to-[#C8915D] rounded-full flex items-center justify-center shrink-0 text-white shadow-lg">
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
                                                        class="flex items-start gap-3 bg-white/10 backdrop-blur-sm p-3 rounded-xl border border-white/20 hover:border-accent transition-all cursor-pointer shadow-[0_8px_16px_rgba(0,0,0,0.1)]">
                                                        <div
                                                            class="w-10 h-10 bg-gradient-to-br from-accent to-[#C8915D] rounded-full flex items-center justify-center shrink-0 text-white shadow-lg">
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
                                                    <button data-slot="button"
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
                                                    <button data-slot="button"
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
                                                    class="mt-6 p-4 bg-accent/20 backdrop-blur-sm border border-accent rounded-lg">
                                                    <div class="flex items-start gap-3">
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
                                                            <h4 class="text-base mb-1 font-semibold">New User Exclusive
                                                            </h4>
                                                            <p class="text-white/80 text-sm">₹1,000 off on your first
                                                                luxury purchase above ₹5,000. Code: <span
                                                                    class="text-accent font-semibold">LUXURY1K</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="relative">
                                                <div class="relative h-[600px] flex items-center justify-center">
                                                    <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;q=80&amp;w=800"
                                                        alt="SEVORA Mobile App"
                                                        class="max-h-full w-auto rounded-3xl shadow-2xl">
                                                    <div
                                                        class="absolute -top-10 -right-10 w-32 h-32 bg-accent rounded-full flex items-center justify-center animate-pulse">
                                                        <div class="text-center">
                                                            <p class="text-3xl text-accent-foreground">10%</p>
                                                            <p class="text-xs text-accent-foreground">OFF</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section> -->
                                <!-- <section class="py-16 lg:py-24 bg-white">
                                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                                        <div class="text-center mb-12">
                                            <h2 class="text-4xl md:text-5xl mb-4">SEVORA vs Traditional Luxury Retail
                                            </h2>
                                            <p class="text-lg text-muted-foreground max-w-2xl mx-auto">See how our USPs
                                                revolutionize luxury fashion shopping in India</p>
                                        </div>
                                        <div class="overflow-x-auto">
                                            <table class="w-full">
                                                <thead>
                                                    <tr class="border-b-2 border-accent">
                                                        <th class="text-left p-4">Service</th>
                                                        <th class="text-center p-4">SEVORA</th>
                                                        <th class="text-center p-4">Traditional Retail</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr
                                                        class="border-b border-accent/20 hover:bg-secondary/50 transition-colors">
                                                        <td class="p-4">Express Delivery</td>
                                                        <td class="p-4 text-center">
                                                            <span class="inline-flex items-center gap-2 text-accent">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="lucide lucide-circle-check w-5 h-5"
                                                                    aria-hidden="true">
                                                                    <circle cx="12" cy="12" r="10"></circle>
                                                                    <path d="m9 12 2 2 4-4"></path>
                                                                </svg>
                                                                60 minutes
                                                            </span>
                                                        </td>
                                                        <td class="p-4 text-center text-muted-foreground">3-7 days</td>
                                                    </tr>
                                                    <tr
                                                        class="border-b border-accent/20 hover:bg-secondary/50 transition-colors">
                                                        <td class="p-4">Home Trials</td>
                                                        <td class="p-4 text-center">
                                                            <span class="inline-flex items-center gap-2 text-accent">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="lucide lucide-circle-check w-5 h-5"
                                                                    aria-hidden="true">
                                                                    <circle cx="12" cy="12" r="10"></circle>
                                                                    <path d="m9 12 2 2 4-4"></path>
                                                                </svg>
                                                                48-hour free trials
                                                            </span>
                                                        </td>
                                                        <td class="p-4 text-center text-muted-foreground">Not available
                                                        </td>
                                                    </tr>
                                                    <tr
                                                        class="border-b border-accent/20 hover:bg-secondary/50 transition-colors">
                                                        <td class="p-4">Expert Styling</td>
                                                        <td class="p-4 text-center">
                                                            <span class="inline-flex items-center gap-2 text-accent">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="lucide lucide-circle-check w-5 h-5"
                                                                    aria-hidden="true">
                                                                    <circle cx="12" cy="12" r="10"></circle>
                                                                    <path d="m9 12 2 2 4-4"></path>
                                                                </svg>
                                                                Celebrity stylists
                                                            </span>
                                                        </td>
                                                        <td class="p-4 text-center text-muted-foreground">Store staff
                                                            only</td>
                                                    </tr>
                                                    <tr
                                                        class="border-b border-accent/20 hover:bg-secondary/50 transition-colors">
                                                        <td class="p-4">Flexible Delivery</td>
                                                        <td class="p-4 text-center">
                                                            <span class="inline-flex items-center gap-2 text-accent">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="lucide lucide-circle-check w-5 h-5"
                                                                    aria-hidden="true">
                                                                    <circle cx="12" cy="12" r="10"></circle>
                                                                    <path d="m9 12 2 2 4-4"></path>
                                                                </svg>
                                                                Choose 2-hour slots
                                                            </span>
                                                        </td>
                                                        <td class="p-4 text-center text-muted-foreground">No control
                                                        </td>
                                                    </tr>
                                                    <tr
                                                        class="border-b border-accent/20 hover:bg-secondary/50 transition-colors">
                                                        <td class="p-4">Live GPS Tracking</td>
                                                        <td class="p-4 text-center">
                                                            <span class="inline-flex items-center gap-2 text-accent">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="lucide lucide-circle-check w-5 h-5"
                                                                    aria-hidden="true">
                                                                    <circle cx="12" cy="12" r="10"></circle>
                                                                    <path d="m9 12 2 2 4-4"></path>
                                                                </svg>
                                                                Real-time on app
                                                            </span>
                                                        </td>
                                                        <td class="p-4 text-center text-muted-foreground">Basic SMS only
                                                        </td>
                                                    </tr>
                                                    <tr
                                                        class="border-b border-accent/20 hover:bg-secondary/50 transition-colors">
                                                        <td class="p-4">Designer Access</td>
                                                        <td class="p-4 text-center">
                                                            <span class="inline-flex items-center gap-2 text-accent">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="lucide lucide-circle-check w-5 h-5"
                                                                    aria-hidden="true">
                                                                    <circle cx="12" cy="12" r="10"></circle>
                                                                    <path d="m9 12 2 2 4-4"></path>
                                                                </svg>
                                                                Exclusive collections
                                                            </span>
                                                        </td>
                                                        <td class="p-4 text-center text-muted-foreground">Limited
                                                            selection</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </section> -->

                                <?php if (have_rows('sevora_vs_traditional_section')) : ?>
    <?php while (have_rows('sevora_vs_traditional_section')) : the_row(); ?>

        <section class="py-16 lg:py-24 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                <!-- Section Header -->
                <div class="text-center mb-12">
                    <?php if (get_sub_field('section_heading')) : ?>
                        <h2 class="text-4xl md:text-5xl mb-4">
                            <?php echo esc_html(get_sub_field('section_heading')); ?>
                        </h2>
                    <?php endif; ?>

                    <?php if (get_sub_field('section_subheading')) : ?>
                        <p class="text-lg text-muted-foreground max-w-2xl mx-auto">
                            <?php echo esc_html(get_sub_field('section_subheading')); ?>
                        </p>
                    <?php endif; ?>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="border-b-2 border-accent">
                                <th class="text-left p-4">
                                    <?php echo esc_html(get_sub_field('table_header_service') ?: 'Service'); ?>
                                </th>
                                <th class="text-center p-4">
                                    <?php echo esc_html(get_sub_field('table_header_sevora') ?: 'SEVORA'); ?>
                                </th>
                                <th class="text-center p-4">
                                    <?php echo esc_html(get_sub_field('table_header_traditional') ?: 'Traditional Retail'); ?>
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php if (have_rows('table_rows')) : ?>
                                <?php while (have_rows('table_rows')) : the_row(); ?>

                                    <tr 
                                    class="border-b border-accent/20 hover:bg-secondary/50 transition-colors">
                                        <td class="p-4">
                                            <?php echo esc_html(get_sub_field('service_name')); ?>
                                        </td>

                                        <td class="p-4 text-center">
                                            <?php if (get_sub_field('sevora_icon')) : ?>
                                                <span class="inline-flex items-center gap-2 text-accent">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                        <circle cx="12" cy="12" r="10"></circle>
                                                        <path d="m9 12 2 2 4-4"></path>
                                                    </svg>
                                                    <?php echo esc_html(get_sub_field('sevora_text')); ?>
                                                </span>
                                            <?php else : ?>
                                                <?php echo esc_html(get_sub_field('sevora_text')); ?>
                                            <?php endif; ?>
                                        </td>

                                        <td class="p-4 text-center text-muted-foreground">
                                          
                                                <span class="inline-flex items-center gap-2">
                                                    
                                                    <?php echo esc_html(get_sub_field('traditional_text')); ?>
                                                </span>
                                            
                                        </td>
                                    </tr>

                                <?php endwhile; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </section>

    <?php endwhile; ?>
<?php endif; ?>

                            </div>
                        </main>


<?php 
get_footer();
?>