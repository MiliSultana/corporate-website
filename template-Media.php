<?php 
// Template Name:Media

get_header();
?>


<main id="main-content" class="flex-1">
                            <div class="overflow-hidden">
                                <section
                                    class="relative py-20 lg:py-32 bg-gradient-to-br from-primary via-[#5A2535] to-primary text-white overflow-hidden">
                                   
                                    <div class="relative max-w-7xl mx-auto">
                                        <nav aria-label="Breadcrumb" class="py-4 px-4 sm:px-6 lg:px-8">
                                            <ol class="flex items-center gap-2 text-sm">
                                                <li>
                                                    <a class="flex items-center gap-1 text-muted-foreground hover:text-accent transition-colors"
                                                        href="/" data-discover="true">
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
                                                    <span class="text-primary font-medium">Media &amp; Press</span>
                                                </li>
                                            </ol>
                                        </nav>
                                        <!-- <div class="text-center max-w-3xl mx-auto px-4 sm:px-6 lg:px-8"
                                            >
                                            <div class="inline-flex items-center gap-2 mb-6 px-4 py-2 bg-accent/30 backdrop-blur-sm border border-accent rounded-full"
                                                >
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-newspaper w-4 h-4" aria-hidden="true">
                                                    <path d="M15 18h-5"></path>
                                                    <path d="M18 14h-8"></path>
                                                    <path
                                                        d="M4 22h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16a2 2 0 0 1-4 0v-9a2 2 0 0 1 2-2h2">
                                                    </path>
                                                    <rect width="8" height="4" x="10" y="6" rx="1"></rect>
                                                </svg>
                                                <span>Media &amp; Press</span>
                                            </div>
                                            <h1 class="text-4xl md:text-5xl lg:text-6xl mb-4"
                                                >Newsroom</h1>
                                            <p class="text-lg md:text-xl text-white/90 mb-6"
                                                >Latest news, press releases, and
                                                media resources from SEVORA</p>
                                            <div class="grid grid-cols-3 gap-4 mt-8">
                                                <div class="text-center cursor-default"
                                                    >
                                                    <div class="text-2xl md:text-3xl text-accent mb-1">50+</div>
                                                    <div class="text-xs text-white/70">Press Releases</div>
                                                </div>
                                                <div class="text-center cursor-default"
                                                    >
                                                    <div class="text-2xl md:text-3xl text-accent mb-1">120+</div>
                                                    <div class="text-xs text-white/70">Media Features</div>
                                                </div>
                                                <div class="text-center cursor-default"
                                                    >
                                                    <div class="text-2xl md:text-3xl text-accent mb-1">15+</div>
                                                    <div class="text-xs text-white/70">Awards Won</div>
                                                </div>
                                            </div>
                                        </div> -->

<?php if (have_rows('newsroom_hero')) : ?>
    <?php while (have_rows('newsroom_hero')) : the_row(); ?>

        <div class="text-center max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Badge -->
            <?php 
            $icon_svg  = get_sub_field('badge_icon');
            $badge_text = get_sub_field('badge_text');
            ?>

            <?php if ($icon_svg || $badge_text) : ?>
                <div class="inline-flex items-center gap-2 mb-6 px-4 py-2 bg-accent/30 backdrop-blur-sm border border-accent rounded-full">

                    <?php if ($icon_svg) : ?>
                        <span class="w-4 h-4 text-current">
                            <?php echo $icon_svg; ?>
                        </span>
                    <?php endif; ?>

                    <?php if ($badge_text) : ?>
                        <span><?php echo esc_html($badge_text); ?></span>
                    <?php endif; ?>

                </div>
            <?php endif; ?>

            <!-- Heading -->
            <?php if (get_sub_field('hero_heading')) : ?>
                <h1 class="text-4xl md:text-5xl lg:text-6xl mb-4">
                    <?php the_sub_field('hero_heading'); ?>
                </h1>
            <?php endif; ?>

            <!-- Description -->
            <?php if (get_sub_field('hero_description')) : ?>
                <p class="text-lg md:text-xl text-white/90 mb-6">
                    <?php the_sub_field('hero_description'); ?>
                </p>
            <?php endif; ?>


            <?php if (have_rows('stats')) : ?>
                <div class="grid grid-cols-3 gap-4 mt-8">
                    <?php while (have_rows('stats')) : the_row(); ?>
                        <div class="text-center cursor-default">
                            <div class="text-2xl md:text-3xl text-accent mb-1">
                                <?php the_sub_field('stat_number'); ?>
                            </div>
                            <div class="text-xs text-white/70">
                                <?php the_sub_field('stat_label'); ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>

        </div>

    <?php endwhile; ?>
<?php endif; ?>

                                        
                                    </div>
                                    <div class="absolute bottom-8 left-1/2 -translate-x-1/2"
                                        >
                                        <div
                                            class="w-6 h-10 border-2 border-white/40 rounded-full flex items-start justify-center p-2">
                                            <div class="w-1.5 h-1.5 bg-white rounded-full"
                                                ></div>
                                        </div>
                                    </div>
                                </section>
                                <!-- <section class="py-12 lg:py-16 bg-secondary">
                                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                                        <div class="text-center mb-10" >
                                            <h2 class="text-3xl md:text-4xl mb-4">Press Releases</h2>
                                            <p class="text-lg text-muted-foreground max-w-2xl mx-auto">Official
                                                announcements and updates from SEVORA</p>
                                        </div>
                                        <div class="mb-8">
                                            <div class="grid grid-cols-1 lg:grid-cols-12 gap-3 mb-4">
                                                <div class="relative lg:col-span-6">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-search absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-muted-foreground"
                                                        aria-hidden="true">
                                                        <path d="m21 21-4.34-4.34"></path>
                                                        <circle cx="11" cy="11" r="8"></circle>
                                                    </svg>
                                                    <input type="text" data-slot="input"
                                                        class="file:text-foreground placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground dark:bg-input/30 flex w-full min-w-0 px-3 py-1 text-base transition-[color,box-shadow] outline-none file:inline-flex file:h-7 file:border-0 file:bg-transparent file:text-sm file:font-medium disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive pl-12 pr-10 h-12 bg-white border-2 border-accent/20 focus:border-accent rounded-lg shadow-sm"
                                                        placeholder="Search by title or keywords..." value="">
                                                </div>
                                                <div class="grid grid-cols-2 gap-3 lg:col-span-6">
                                                    <button type="button" role="combobox" aria-controls="radix-:r2h:"
                                                        aria-expanded="false" aria-autocomplete="none" dir="ltr"
                                                        data-state="closed" data-slot="select-trigger"
                                                        data-size="default"
                                                        class="data-[placeholder]:text-muted-foreground [&amp;_svg:not([class*='text-'])]:text-muted-foreground focus-visible:border-ring focus-visible:ring-ring/50 aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive dark:bg-input/30 dark:hover:bg-input/50 flex w-full items-center justify-between gap-2 px-3 py-2 text-sm whitespace-nowrap transition-[color,box-shadow] outline-none focus-visible:ring-[3px] disabled:cursor-not-allowed disabled:opacity-50 data-[size=default]:h-9 data-[size=sm]:h-8 *:data-[slot=select-value]:line-clamp-1 *:data-[slot=select-value]:flex *:data-[slot=select-value]:items-center *:data-[slot=select-value]:gap-2 [&amp;_svg]:pointer-events-none [&amp;_svg]:shrink-0 [&amp;_svg:not([class*='size-'])]:size-4 h-12 bg-white border-2 border-accent/20 focus:border-accent rounded-lg shadow-sm">
                                                        <div class="flex items-center w-full">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-funnel w-4 h-4 mr-2 flex-shrink-0"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M10 20a1 1 0 0 0 .553.895l2 1A1 1 0 0 0 14 21v-7a2 2 0 0 1 .517-1.341L21.74 4.67A1 1 0 0 0 21 3H3a1 1 0 0 0-.742 1.67l7.225 7.989A2 2 0 0 1 10 14z">
                                                                </path>
                                                            </svg>
                                                            <span class="truncate"><span data-slot="select-value"
                                                                    >All
                                                                    Categories</span></span>
                                                        </div>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="lucide lucide-chevron-down size-4 opacity-50"
                                                            aria-hidden="true">
                                                            <path d="m6 9 6 6 6-6"></path>
                                                        </svg>
                                                    </button>
                                                    <button type="button" role="combobox" aria-controls="radix-:r2i:"
                                                        aria-expanded="false" aria-autocomplete="none" dir="ltr"
                                                        data-state="closed" data-slot="select-trigger"
                                                        data-size="default"
                                                        class="data-[placeholder]:text-muted-foreground [&amp;_svg:not([class*='text-'])]:text-muted-foreground focus-visible:border-ring focus-visible:ring-ring/50 aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive dark:bg-input/30 dark:hover:bg-input/50 flex w-full items-center justify-between gap-2 px-3 py-2 text-sm whitespace-nowrap transition-[color,box-shadow] outline-none focus-visible:ring-[3px] disabled:cursor-not-allowed disabled:opacity-50 data-[size=default]:h-9 data-[size=sm]:h-8 *:data-[slot=select-value]:line-clamp-1 *:data-[slot=select-value]:flex *:data-[slot=select-value]:items-center *:data-[slot=select-value]:gap-2 [&amp;_svg]:pointer-events-none [&amp;_svg]:shrink-0 [&amp;_svg:not([class*='size-'])]:size-4 h-12 bg-white border-2 border-accent/20 focus:border-accent rounded-lg shadow-sm">
                                                        <div class="flex items-center w-full">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-arrow-up-down w-4 h-4 mr-2 flex-shrink-0"
                                                                aria-hidden="true">
                                                                <path d="m21 16-4 4-4-4"></path>
                                                                <path d="M17 20V4"></path>
                                                                <path d="m3 8 4-4 4 4"></path>
                                                                <path d="M7 4v16"></path>
                                                            </svg>
                                                            <span class="truncate"><span data-slot="select-value"
                                                                    >Date: Newest
                                                                    First</span></span>
                                                        </div>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="lucide lucide-chevron-down size-4 opacity-50"
                                                            aria-hidden="true">
                                                            <path d="m6 9 6 6 6-6"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <div
                                                class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
                                                <div class="flex items-center gap-3 flex-wrap">
                                                    <p class="text-sm text-muted-foreground">6 results found</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid lg:grid-cols-2 gap-6 mb-8">
                                            <div class="bg-white rounded-lg overflow-hidden shadow-lg border border-accent/20 hover:border-accent transition-all group"
                                                >
                                                <div class="relative h-56 overflow-hidden">
                                                    <img src="https://images.unsplash.com/photo-1556905055-8f358a7a47b2?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;q=80&amp;w=800"
                                                        alt="SEVORA Launches Revolutionary &quot;Try Before You Buy&quot; Service Across India"
                                                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                                    <div class="absolute top-4 left-4"><span data-slot="badge"
                                                            class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden border-transparent [a&amp;]:hover:bg-primary/90 bg-accent text-white">Featured</span>
                                                    </div>
                                                    <div class="absolute top-4 right-4"><span data-slot="badge"
                                                            class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden text-foreground [a&amp;]:hover:bg-accent [a&amp;]:hover:text-accent-foreground bg-white/90 backdrop-blur-sm">Product
                                                            Launch</span></div>
                                                </div>
                                                <div class="p-5">
                                                    <div
                                                        class="flex items-center gap-2 text-sm text-muted-foreground mb-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="lucide lucide-calendar w-4 h-4" aria-hidden="true">
                                                            <path d="M8 2v4"></path>
                                                            <path d="M16 2v4"></path>
                                                            <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                                            <path d="M3 10h18"></path>
                                                        </svg>
                                                        <span>January 15, 2025</span>
                                                    </div>
                                                    <h3 class="text-xl mb-2 group-hover:text-accent transition-colors">
                                                        SEVORA Launches Revolutionary "Try Before You Buy" Service
                                                        Across India</h3>
                                                    <p class="text-sm text-muted-foreground mb-4">Leading luxury fashion
                                                        platform introduces game-changing service allowing customers to
                                                        try up to 3 items at home before making purchase decisions.</p>
                                                    <button data-slot="button"
                                                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full text-sm font-medium transition-all duration-200 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-5 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive hover:scale-105 hover:shadow-lg active:scale-100 border bg-transparent text-accent hover:bg-accent hover:text-white dark:bg-input/30 dark:border-input dark:hover:bg-input/50 shadow-[0_4px_16px_rgba(0,0,0,0.08)] h-[52px] px-8 py-3.5 group/btn border-accent/20 hover:border-accent">
                                                        Read Full Release
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="lucide lucide-external-link w-4 h-4 ml-2 group-hover/btn:translate-x-1 transition-transform"
                                                            aria-hidden="true">
                                                            <path d="M15 3h6v6"></path>
                                                            <path d="M10 14 21 3"></path>
                                                            <path
                                                                d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="bg-white rounded-lg overflow-hidden shadow-lg border border-accent/20 hover:border-accent transition-all group"
                                                >
                                                <div class="relative h-56 overflow-hidden">
                                                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;q=80&amp;w=800"
                                                        alt="SEVORA Achieves 500% YoY Growth, Expands to 50 Cities"
                                                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                                    <div class="absolute top-4 left-4"><span data-slot="badge"
                                                            class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden border-transparent [a&amp;]:hover:bg-primary/90 bg-accent text-white">Featured</span>
                                                    </div>
                                                    <div class="absolute top-4 right-4"><span data-slot="badge"
                                                            class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden text-foreground [a&amp;]:hover:bg-accent [a&amp;]:hover:text-accent-foreground bg-white/90 backdrop-blur-sm">Business</span>
                                                    </div>
                                                </div>
                                                <div class="p-5">
                                                    <div
                                                        class="flex items-center gap-2 text-sm text-muted-foreground mb-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="lucide lucide-calendar w-4 h-4" aria-hidden="true">
                                                            <path d="M8 2v4"></path>
                                                            <path d="M16 2v4"></path>
                                                            <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                                            <path d="M3 10h18"></path>
                                                        </svg>
                                                        <span>December 8, 2024</span>
                                                    </div>
                                                    <h3 class="text-xl mb-2 group-hover:text-accent transition-colors">
                                                        SEVORA Achieves 500% YoY Growth, Expands to 50 Cities</h3>
                                                    <p class="text-sm text-muted-foreground mb-4">Company reports
                                                        exceptional growth driven by premium services and customer-first
                                                        approach, plans further expansion.</p>
                                                    <button data-slot="button"
                                                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full text-sm font-medium transition-all duration-200 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-5 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive hover:scale-105 hover:shadow-lg active:scale-100 border bg-transparent text-accent hover:bg-accent hover:text-white dark:bg-input/30 dark:border-input dark:hover:bg-input/50 shadow-[0_4px_16px_rgba(0,0,0,0.08)] h-[52px] px-8 py-3.5 group/btn border-accent/20 hover:border-accent">
                                                        Read Full Release
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="lucide lucide-external-link w-4 h-4 ml-2 group-hover/btn:translate-x-1 transition-transform"
                                                            aria-hidden="true">
                                                            <path d="M15 3h6v6"></path>
                                                            <path d="M10 14 21 3"></path>
                                                            <path
                                                                d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-5">
                                            <div class="bg-white rounded-lg overflow-hidden shadow border border-accent/20 hover:border-accent hover:shadow-lg transition-all group"
                                                >
                                                <div class="relative h-48 overflow-hidden">
                                                    <img src="https://images.unsplash.com/photo-1566576721346-d4a3b4eaeb55?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;q=80&amp;w=800"
                                                        alt="60-Minute Express Delivery Now Available in Delhi NCR"
                                                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                                    <div class="absolute top-3 right-3"><span data-slot="badge"
                                                            class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden text-foreground [a&amp;]:hover:bg-accent [a&amp;]:hover:text-accent-foreground bg-white/90 backdrop-blur-sm text-xs">Service
                                                            Update</span></div>
                                                </div>
                                                <div class="p-4">
                                                    <div
                                                        class="flex items-center gap-2 text-xs text-muted-foreground mb-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="lucide lucide-calendar w-3 h-3" aria-hidden="true">
                                                            <path d="M8 2v4"></path>
                                                            <path d="M16 2v4"></path>
                                                            <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                                            <path d="M3 10h18"></path>
                                                        </svg>
                                                        <span>November 22, 2024</span>
                                                    </div>
                                                    <h4
                                                        class="mb-2 group-hover:text-accent transition-colors line-clamp-2">
                                                        60-Minute Express Delivery Now Available in Delhi NCR</h4>
                                                    <p class="text-sm text-muted-foreground line-clamp-2 mb-3">SEVORA
                                                        extends its industry-leading express delivery service to India's
                                                        capital region, promising luxury fashion in just 60 minutes.</p>
                                                    <button data-slot="button"
                                                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full text-sm font-medium transition-all duration-200 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-5 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive hover:scale-105 hover:shadow-lg active:scale-100 hover:bg-accent/10 dark:hover:bg-accent/50 p-0 h-auto hover:text-accent">Read
                                                        More →</button>
                                                </div>
                                            </div>
                                            <div class="bg-white rounded-lg overflow-hidden shadow border border-accent/20 hover:border-accent hover:shadow-lg transition-all group"
                                                >
                                                <div class="relative h-48 overflow-hidden">
                                                    <div
                                                        class="inline-block bg-gray-100 text-center align-middle w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                                        <div class="flex items-center justify-center w-full h-full"><img
                                                                src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iODgiIGhlaWdodD0iODgiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgc3Ryb2tlPSIjMDAwIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBvcGFjaXR5PSIuMyIgZmlsbD0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIzLjciPjxyZWN0IHg9IjE2IiB5PSIxNiIgd2lkdGg9IjU2IiBoZWlnaHQ9IjU2IiByeD0iNiIvPjxwYXRoIGQ9Im0xNiA1OCAxNi0xOCAzMiAzMiIvPjxjaXJjbGUgY3g9IjUzIiBjeT0iMzUiIHI9IjciLz48L3N2Zz4KCg=="
                                                                alt="Error loading image"
                                                                data-original-url="https://images.unsplash.com/photo-1558769132-cb1aea3c448b?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;q=80&amp;w=800">
                                                        </div>
                                                    </div>
                                                    <div class="absolute top-3 right-3"><span data-slot="badge"
                                                            class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden text-foreground [a&amp;]:hover:bg-accent [a&amp;]:hover:text-accent-foreground bg-white/90 backdrop-blur-sm text-xs">Partnership</span>
                                                    </div>
                                                </div>
                                                <div class="p-4">
                                                    <div
                                                        class="flex items-center gap-2 text-xs text-muted-foreground mb-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="lucide lucide-calendar w-3 h-3" aria-hidden="true">
                                                            <path d="M8 2v4"></path>
                                                            <path d="M16 2v4"></path>
                                                            <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                                            <path d="M3 10h18"></path>
                                                        </svg>
                                                        <span>October 30, 2024</span>
                                                    </div>
                                                    <h4
                                                        class="mb-2 group-hover:text-accent transition-colors line-clamp-2">
                                                        SEVORA Partners with Leading Indian Designers for Exclusive
                                                        Collections</h4>
                                                    <p class="text-sm text-muted-foreground line-clamp-2 mb-3">Strategic
                                                        collaborations bring exclusive designer collections to SEVORA's
                                                        growing customer base across the country.</p>
                                                    <button data-slot="button"
                                                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full text-sm font-medium transition-all duration-200 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-5 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive hover:scale-105 hover:shadow-lg active:scale-100 hover:bg-accent/10 dark:hover:bg-accent/50 p-0 h-auto hover:text-accent">Read
                                                        More →</button>
                                                </div>
                                            </div>
                                            <div class="bg-white rounded-lg overflow-hidden shadow border border-accent/20 hover:border-accent hover:shadow-lg transition-all group"
                                                >
                                                <div class="relative h-48 overflow-hidden">
                                                    <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;q=80&amp;w=800"
                                                        alt="SEVORA Wins &quot;Best Customer Experience&quot; Award at E-commerce Excellence 2024"
                                                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                                    <div class="absolute top-3 right-3"><span data-slot="badge"
                                                            class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden text-foreground [a&amp;]:hover:bg-accent [a&amp;]:hover:text-accent-foreground bg-white/90 backdrop-blur-sm text-xs">Awards</span>
                                                    </div>
                                                </div>
                                                <div class="p-4">
                                                    <div
                                                        class="flex items-center gap-2 text-xs text-muted-foreground mb-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="lucide lucide-calendar w-3 h-3" aria-hidden="true">
                                                            <path d="M8 2v4"></path>
                                                            <path d="M16 2v4"></path>
                                                            <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                                            <path d="M3 10h18"></path>
                                                        </svg>
                                                        <span>September 18, 2024</span>
                                                    </div>
                                                    <h4
                                                        class="mb-2 group-hover:text-accent transition-colors line-clamp-2">
                                                        SEVORA Wins "Best Customer Experience" Award at E-commerce
                                                        Excellence 2024</h4>
                                                    <p class="text-sm text-muted-foreground line-clamp-2 mb-3">
                                                        Recognition for innovative services including personal stylist
                                                        consultations and seamless shopping experience.</p>
                                                    <button data-slot="button"
                                                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full text-sm font-medium transition-all duration-200 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-5 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive hover:scale-105 hover:shadow-lg active:scale-100 hover:bg-accent/10 dark:hover:bg-accent/50 p-0 h-auto hover:text-accent">Read
                                                        More →</button>
                                                </div>
                                            </div>
                                            <div class="bg-white rounded-lg overflow-hidden shadow border border-accent/20 hover:border-accent hover:shadow-lg transition-all group"
                                                >
                                                <div class="relative h-48 overflow-hidden">
                                                    <img src="https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;q=80&amp;w=800"
                                                        alt="Sustainable Fashion Initiative: SEVORA Commits to Carbon-Neutral Deliveries by 2026"
                                                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                                    <div class="absolute top-3 right-3"><span data-slot="badge"
                                                            class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden text-foreground [a&amp;]:hover:bg-accent [a&amp;]:hover:text-accent-foreground bg-white/90 backdrop-blur-sm text-xs">Sustainability</span>
                                                    </div>
                                                </div>
                                                <div class="p-4">
                                                    <div
                                                        class="flex items-center gap-2 text-xs text-muted-foreground mb-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="lucide lucide-calendar w-3 h-3" aria-hidden="true">
                                                            <path d="M8 2v4"></path>
                                                            <path d="M16 2v4"></path>
                                                            <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                                            <path d="M3 10h18"></path>
                                                        </svg>
                                                        <span>August 12, 2024</span>
                                                    </div>
                                                    <h4
                                                        class="mb-2 group-hover:text-accent transition-colors line-clamp-2">
                                                        Sustainable Fashion Initiative: SEVORA Commits to Carbon-Neutral
                                                        Deliveries by 2026</h4>
                                                    <p class="text-sm text-muted-foreground line-clamp-2 mb-3">
                                                        Comprehensive sustainability program includes electric vehicle
                                                        fleet, eco-friendly packaging, and carbon offset initiatives.
                                                    </p>
                                                    <button data-slot="button"
                                                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full text-sm font-medium transition-all duration-200 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-5 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive hover:scale-105 hover:shadow-lg active:scale-100 hover:bg-accent/10 dark:hover:bg-accent/50 p-0 h-auto hover:text-accent">Read
                                                        More →</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section> -->

           <?php if (have_rows('press_releases_section')) : ?>
<?php while (have_rows('press_releases_section')) : the_row(); ?>

<section class="py-12 lg:py-16 bg-secondary">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

<!-- HEADER -->
<div class="text-center mb-10">
    <h2 class="text-3xl md:text-4xl mb-4">
        <?php the_sub_field('section_heading'); ?>
    </h2>
    <p class="text-lg text-muted-foreground max-w-2xl mx-auto">
        <?php the_sub_field('section_description'); ?>
    </p>
</div>

<!-- SEARCH + FILTER -->
<div class="mb-8">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-3 mb-4">

<div class="relative lg:col-span-6">
    <input type="text"
        placeholder="Search by title or keywords..."
        class="pl-12 pr-4 h-12 w-full bg-white border-2 border-accent/20 rounded-lg shadow-sm">
</div>

<div class="grid grid-cols-2 gap-3 lg:col-span-6">
    <button class="h-12 bg-white border-2 border-accent/20 rounded-lg flex items-center justify-center">
        All Categories
    </button>
    <button class="h-12 bg-white border-2 border-accent/20 rounded-lg flex items-center justify-center">
        Date: Newest First
    </button>
</div>

</div>

<p class="text-sm text-muted-foreground">
    <?php the_sub_field('results_text'); ?>
</p>
</div>

<!-- FEATURED RELEASES -->
<?php if (have_rows('featured_releases')) : ?>
<div class="grid lg:grid-cols-2 gap-6 mb-8">

<?php while (have_rows('featured_releases')) : the_row(); 
$image = get_sub_field('image'); ?>

<div class="bg-white rounded-lg overflow-hidden shadow-lg border border-accent/20 
            hover:border-accent transition-all duration-300 group">

<div class="relative h-56 overflow-hidden">
<?php if ($image) : ?>
<img src="<?php echo esc_url($image['url']); ?>"
     alt="<?php echo esc_attr($image['alt']); ?>"
     class="w-full h-full object-cover group-hover:scale-105 transition">
<?php endif; ?>

<?php if (get_sub_field('featured_badge')) : ?>
<div class="absolute top-4 left-4">
<span class="bg-accent text-white text-xs px-2 py-1 rounded-md">
<?php the_sub_field('featured_badge'); ?>
</span>
</div>
<?php endif; ?>

<?php if (get_sub_field('category')) : ?>
<div class="absolute top-4 right-4">
<span class="bg-white/90 text-xs px-2 py-1 rounded-md">
<?php the_sub_field('category'); ?>
</span>
</div>
<?php endif; ?>
</div>

<div class="p-5">

<div class="flex items-center gap-2 text-sm text-muted-foreground mb-2">
<?php echo get_sub_field('date_icon'); ?>
<span><?php echo date_i18n('F j, Y', strtotime(get_sub_field('date'))); ?></span>
</div>

<h3 class="text-xl mb-2 group-hover:text-accent transition">
<?php the_sub_field('title'); ?>
</h3>

<p class="text-sm text-muted-foreground mb-4">
<?php the_sub_field('excerpt'); ?>
</p>

<?php
$button_link = get_sub_field('button_link');
$button_text = get_sub_field('button_text');
$button_icon = get_sub_field('button_icon'); // textarea (SVG / HTML)
?>

<?php if ($button_link && $button_text) : ?>
<a href="<?php echo esc_url($button_link); ?>"
   class="inline-flex items-center gap-2 px-6 py-3 border border-accent/20 rounded-full
          text-accent hover:bg-accent hover:text-white transition group">

    <span><?php echo esc_html($button_text); ?></span>

    <?php if ($button_icon) : ?>
        <span class="inline-flex items-center transition-transform group-hover:translate-x-1">
            <?php echo $button_icon; // SVG / HTML ?>
        </span>
    <?php endif; ?>

</a>
<?php endif; ?>


</div>
</div>

<?php endwhile; ?>
</div>
<?php endif; ?>

<!-- OTHER RELEASES -->
<?php if (have_rows('other_releases')) : ?>
<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-5">

<?php while (have_rows('other_releases')) : the_row();
$image = get_sub_field('image'); ?>

<div class="bg-white rounded-lg overflow-hidden shadow border border-accent/20 
            hover:border-accent hover:shadow-lg transition-all duration-300 group">

<div class="relative h-48 overflow-hidden">
<?php if ($image) : ?>
<img src="<?php echo esc_url($image['url']); ?>"
     alt="<?php echo esc_attr($image['alt']); ?>"
     class="w-full h-full object-cover group-hover:scale-105 transition">
<?php endif; ?>

<?php if (get_sub_field('category')) : ?>
<div class="absolute top-3 right-3">
<span class="bg-white/90 text-xs px-2 py-1 rounded-md">
<?php the_sub_field('category'); ?>
</span>
</div>
<?php endif; ?>
</div>

<div class="p-4">

<div class="flex items-center gap-2 text-xs text-muted-foreground mb-2">
<?php echo get_sub_field('date_icon'); ?>
<span><?php echo date_i18n('F j, Y', strtotime(get_sub_field('date'))); ?></span>
</div>

<h4 class="mb-2 group-hover:text-accent transition line-clamp-2">
<?php the_sub_field('title'); ?>
</h4>

<p class="text-sm text-muted-foreground line-clamp-2 mb-3">
<?php the_sub_field('excerpt'); ?>
</p>

<a href="<?php echo esc_url(get_sub_field('button_link')); ?>"
   class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full text-sm font-medium transition-all duration-200 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-5 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive hover:scale-105 hover:shadow-lg active:scale-100 hover:bg-accent/10 dark:hover:bg-accent/50 p-0 h-auto hover:text-accent">
<?php the_sub_field('button_text'); ?> →
</a>

</div>
</div>

<?php endwhile; ?>
</div>
<?php endif; ?>

</div>
</section>

<?php endwhile; ?>
<?php endif; ?>



<!-- 
                                <section class="py-12 lg:py-16 bg-white">
                                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                                        <div class="text-center mb-10" >
                                            <h2 class="text-3xl md:text-4xl mb-4">In The Media</h2>
                                            <p class="text-lg text-muted-foreground max-w-2xl mx-auto">Featured stories
                                                and coverage from leading publications</p>
                                        </div>
                                        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-5">
                                            <a href="#" target="_blank" rel="noopener noreferrer"
                                                class="bg-secondary p-5 rounded-lg border border-accent/20 hover:border-accent hover:shadow-lg transition-all group"
                                                >
                                                <div class="flex items-center gap-3 mb-3">
                                                    <div
                                                        class="w-14 h-14 bg-white rounded-lg overflow-hidden flex items-center justify-center">
                                                        <img src="https://images.unsplash.com/photo-1504711434969-e33886168f5c?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;q=80&amp;w=200"
                                                            alt="The Economic Times" class="w-full h-full object-cover">
                                                    </div>
                                                    <div>
                                                        <div class="text-sm text-accent mb-0.5">The Economic Times</div>
                                                        <div class="text-xs text-muted-foreground">January 10, 2025
                                                        </div>
                                                    </div>
                                                </div>
                                                <h4 class="mb-2 group-hover:text-accent transition-colors">How SEVORA is
                                                    Redefining Luxury E-commerce in India</h4>
                                                <div class="flex items-center text-sm text-accent">
                                                    Read Article
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-external-link w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform"
                                                        aria-hidden="true">
                                                        <path d="M15 3h6v6"></path>
                                                        <path d="M10 14 21 3"></path>
                                                        <path
                                                            d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </a>
                                            <a href="#" target="_blank" rel="noopener noreferrer"
                                                class="bg-secondary p-5 rounded-lg border border-accent/20 hover:border-accent hover:shadow-lg transition-all group"
                                                >
                                                <div class="flex items-center gap-3 mb-3">
                                                    <div
                                                        class="w-14 h-14 bg-white rounded-lg overflow-hidden flex items-center justify-center">
                                                        <img src="https://images.unsplash.com/photo-1495476479092-6ece1898a101?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;q=80&amp;w=200"
                                                            alt="Vogue India" class="w-full h-full object-cover"></div>
                                                    <div>
                                                        <div class="text-sm text-accent mb-0.5">Vogue India</div>
                                                        <div class="text-xs text-muted-foreground">December 15, 2024
                                                        </div>
                                                    </div>
                                                </div>
                                                <h4 class="mb-2 group-hover:text-accent transition-colors">The Rise of
                                                    Personalized Fashion: SEVORA's Stylist Service</h4>
                                                <div class="flex items-center text-sm text-accent">
                                                    Read Article
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-external-link w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform"
                                                        aria-hidden="true">
                                                        <path d="M15 3h6v6"></path>
                                                        <path d="M10 14 21 3"></path>
                                                        <path
                                                            d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </a>
                                            <a href="#" target="_blank" rel="noopener noreferrer"
                                                class="bg-secondary p-5 rounded-lg border border-accent/20 hover:border-accent hover:shadow-lg transition-all group"
                                                >
                                                <div class="flex items-center gap-3 mb-3">
                                                    <div
                                                        class="w-14 h-14 bg-white rounded-lg overflow-hidden flex items-center justify-center">
                                                        <img src="https://images.unsplash.com/photo-1504711434969-e33886168f5c?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;q=80&amp;w=200"
                                                            alt="Business Standard" class="w-full h-full object-cover">
                                                    </div>
                                                    <div>
                                                        <div class="text-sm text-accent mb-0.5">Business Standard</div>
                                                        <div class="text-xs text-muted-foreground">November 28, 2024
                                                        </div>
                                                    </div>
                                                </div>
                                                <h4 class="mb-2 group-hover:text-accent transition-colors">SEVORA's
                                                    60-Minute Delivery: A Logistics Marvel</h4>
                                                <div class="flex items-center text-sm text-accent">
                                                    Read Article
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-external-link w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform"
                                                        aria-hidden="true">
                                                        <path d="M15 3h6v6"></path>
                                                        <path d="M10 14 21 3"></path>
                                                        <path
                                                            d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </a>
                                            <a href="#" target="_blank" rel="noopener noreferrer"
                                                class="bg-secondary p-5 rounded-lg border border-accent/20 hover:border-accent hover:shadow-lg transition-all group"
                                                >
                                                <div class="flex items-center gap-3 mb-3">
                                                    <div
                                                        class="w-14 h-14 bg-white rounded-lg overflow-hidden flex items-center justify-center">
                                                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;q=80&amp;w=200"
                                                            alt="Forbes India" class="w-full h-full object-cover"></div>
                                                    <div>
                                                        <div class="text-sm text-accent mb-0.5">Forbes India</div>
                                                        <div class="text-xs text-muted-foreground">October 5, 2024</div>
                                                    </div>
                                                </div>
                                                <h4 class="mb-2 group-hover:text-accent transition-colors">The
                                                    Entrepreneur Behind SEVORA's Success Story</h4>
                                                <div class="flex items-center text-sm text-accent">
                                                    Read Article
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-external-link w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform"
                                                        aria-hidden="true">
                                                        <path d="M15 3h6v6"></path>
                                                        <path d="M10 14 21 3"></path>
                                                        <path
                                                            d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </a>
                                            <a href="#" target="_blank" rel="noopener noreferrer"
                                                class="bg-secondary p-5 rounded-lg border border-accent/20 hover:border-accent hover:shadow-lg transition-all group"
                                                >
                                                <div class="flex items-center gap-3 mb-3">
                                                    <div
                                                        class="w-14 h-14 bg-white rounded-lg overflow-hidden flex items-center justify-center">
                                                        <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;q=80&amp;w=200"
                                                            alt="Elle India" class="w-full h-full object-cover"></div>
                                                    <div>
                                                        <div class="text-sm text-accent mb-0.5">Elle India</div>
                                                        <div class="text-xs text-muted-foreground">September 20, 2024
                                                        </div>
                                                    </div>
                                                </div>
                                                <h4 class="mb-2 group-hover:text-accent transition-colors">Try Before
                                                    You Buy: The Future of Online Shopping</h4>
                                                <div class="flex items-center text-sm text-accent">
                                                    Read Article
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-external-link w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform"
                                                        aria-hidden="true">
                                                        <path d="M15 3h6v6"></path>
                                                        <path d="M10 14 21 3"></path>
                                                        <path
                                                            d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </a>
                                            <a href="#" target="_blank" rel="noopener noreferrer"
                                                class="bg-secondary p-5 rounded-lg border border-accent/20 hover:border-accent hover:shadow-lg transition-all group"
                                                >
                                                <div class="flex items-center gap-3 mb-3">
                                                    <div
                                                        class="w-14 h-14 bg-white rounded-lg overflow-hidden flex items-center justify-center">
                                                        <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;q=80&amp;w=200"
                                                            alt="Your Story" class="w-full h-full object-cover"></div>
                                                    <div>
                                                        <div class="text-sm text-accent mb-0.5">Your Story</div>
                                                        <div class="text-xs text-muted-foreground">August 8, 2024</div>
                                                    </div>
                                                </div>
                                                <h4 class="mb-2 group-hover:text-accent transition-colors">SEVORA:
                                                    Building India's Luxury Fashion Empire</h4>
                                                <div class="flex items-center text-sm text-accent">
                                                    Read Article
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-external-link w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform"
                                                        aria-hidden="true">
                                                        <path d="M15 3h6v6"></path>
                                                        <path d="M10 14 21 3"></path>
                                                        <path
                                                            d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </section> -->


                                <?php if (have_rows('media_sections')): ?>
    <?php while (have_rows('media_sections')): the_row(); ?>

<section class="py-12 lg:py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- HEADER -->
        <div class="text-center mb-10">
            <h2 class="text-3xl md:text-4xl mb-4">
                <?php the_sub_field('section_heading'); ?>
            </h2>
            <p class="text-lg text-muted-foreground max-w-2xl mx-auto">
                <?php the_sub_field('section_description'); ?>
            </p>
        </div>

        <!-- MEDIA CARDS -->
        <?php if (have_rows('media_cards')): ?>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-5">
                <?php while (have_rows('media_cards')): the_row(); 
                    $image = get_sub_field('image'); 
                    $link = get_sub_field('link');
                    $link_target = get_sub_field('link_target') ?: '_blank';
                    $title = get_sub_field('title');
                    $source = get_sub_field('publication_name');
                    $date = get_sub_field('date');
                    $cta_text = get_sub_field('read_article_text');
                ?>
                <a href="<?php echo esc_url($link); ?>" target="<?php echo esc_attr($link_target); ?>" 
                   class="bg-secondary p-5 rounded-lg border border-accent/20 hover:border-accent hover:shadow-lg transition-all group">

                    <div class="flex items-center gap-3 mb-3">
                        <div class="w-14 h-14 bg-white rounded-lg overflow-hidden flex items-center justify-center">
                            <?php if ($image): ?>
                                <img src="<?php echo esc_url($image['url']); ?>" 
                                     alt="<?php echo esc_attr($image['alt']); ?>" 
                                     class="w-full h-full object-cover">
                            <?php endif; ?>
                        </div>
                        <div>
                            <div class="text-sm text-accent mb-0.5"><?php echo esc_html($source); ?></div>
                            <div class="text-xs text-muted-foreground">
                                <?php echo date_i18n('F j, Y', strtotime($date)); ?>
                            </div>
                        </div>
                    </div>

                    <h4 class="mb-2 group-hover:text-accent transition-colors"><?php echo esc_html($title); ?></h4>

                    <?php if ($cta_text): ?>
                    <div class="flex items-center text-sm text-accent">
                        <?php echo esc_html($cta_text); ?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                             viewBox="0 0 24 24" fill="none" stroke="currentColor"
                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="lucide lucide-external-link w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform"
                             aria-hidden="true">
                            <path d="M15 3h6v6"></path>
                            <path d="M10 14 21 3"></path>
                            <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                        </svg>
                    </div>
                    <?php endif; ?>

                </a>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>

    </div>
</section>

    <?php endwhile; ?>
<?php endif; ?>

                                <!-- <section class="py-12 lg:py-16 bg-secondary">
                                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                                        <div class="text-center mb-10" >
                                            <h2 class="text-3xl md:text-4xl mb-4">Awards &amp; Recognition</h2>
                                            <p class="text-lg text-muted-foreground max-w-2xl mx-auto">Celebrating
                                                excellence and innovation in luxury fashion retail</p>
                                        </div>
                                        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-5">
                                            <div class="bg-white p-5 rounded-xl text-center border border-accent/20 hover:border-accent hover:shadow-[0_16px_32px_rgba(0,0,0,0.12)] transition-all group"
                                                >
                                                <div
                                                    class="w-14 h-14 mx-auto mb-3 bg-gradient-to-br from-accent to-[#C8915D] rounded-full flex items-center justify-center text-white group-hover:scale-110 transition-all duration-200 shadow-[0_12px_24px_rgba(226,164,95,0.25)]">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-award w-6 h-6" aria-hidden="true">
                                                        <path
                                                            d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                                                        </path>
                                                        <circle cx="12" cy="8" r="6"></circle>
                                                    </svg>
                                                </div>
                                                <div class="text-sm text-accent mb-1.5 font-medium">2024</div>
                                                <h4 class="mb-1.5 font-semibold">Best Customer Experience</h4>
                                                <p class="text-sm text-muted-foreground">E-commerce Excellence Awards
                                                    2024</p>
                                            </div>
                                            <div class="bg-white p-5 rounded-xl text-center border border-accent/20 hover:border-accent hover:shadow-[0_16px_32px_rgba(0,0,0,0.12)] transition-all group"
                                                >
                                                <div
                                                    class="w-14 h-14 mx-auto mb-3 bg-gradient-to-br from-accent to-[#C8915D] rounded-full flex items-center justify-center text-white group-hover:scale-110 transition-all duration-200 shadow-[0_12px_24px_rgba(226,164,95,0.25)]">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-trending-up w-6 h-6" aria-hidden="true">
                                                        <path d="M16 7h6v6"></path>
                                                        <path d="m22 7-8.5 8.5-5-5L2 17"></path>
                                                    </svg>
                                                </div>
                                                <div class="text-sm text-accent mb-1.5 font-medium">2024</div>
                                                <h4 class="mb-1.5 font-semibold">Most Innovative Logistics Solution</h4>
                                                <p class="text-sm text-muted-foreground">India Retail Awards</p>
                                            </div>
                                            <div class="bg-white p-5 rounded-xl text-center border border-accent/20 hover:border-accent hover:shadow-[0_16px_32px_rgba(0,0,0,0.12)] transition-all group"
                                                >
                                                <div
                                                    class="w-14 h-14 mx-auto mb-3 bg-gradient-to-br from-accent to-[#C8915D] rounded-full flex items-center justify-center text-white group-hover:scale-110 transition-all duration-200 shadow-[0_12px_24px_rgba(226,164,95,0.25)]">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-sparkles w-6 h-6" aria-hidden="true">
                                                        <path
                                                            d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z">
                                                        </path>
                                                        <path d="M20 2v4"></path>
                                                        <path d="M22 4h-4"></path>
                                                        <circle cx="4" cy="20" r="2"></circle>
                                                    </svg>
                                                </div>
                                                <div class="text-sm text-accent mb-1.5 font-medium">2024</div>
                                                <h4 class="mb-1.5 font-semibold">Best Luxury Fashion Platform</h4>
                                                <p class="text-sm text-muted-foreground">Digital Commerce Awards</p>
                                            </div>
                                            <div class="bg-white p-5 rounded-xl text-center border border-accent/20 hover:border-accent hover:shadow-[0_16px_32px_rgba(0,0,0,0.12)] transition-all group"
                                                >
                                                <div
                                                    class="w-14 h-14 mx-auto mb-3 bg-gradient-to-br from-accent to-[#C8915D] rounded-full flex items-center justify-center text-white group-hover:scale-110 transition-all duration-200 shadow-[0_12px_24px_rgba(226,164,95,0.25)]">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-globe w-6 h-6" aria-hidden="true">
                                                        <circle cx="12" cy="12" r="10"></circle>
                                                        <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20">
                                                        </path>
                                                        <path d="M2 12h20"></path>
                                                    </svg>
                                                </div>
                                                <div class="text-sm text-accent mb-1.5 font-medium">2024</div>
                                                <h4 class="mb-1.5 font-semibold">Sustainability Champion</h4>
                                                <p class="text-sm text-muted-foreground">Green Business Awards</p>
                                            </div>
                                        </div>
                                    </div>
                                </section> -->

                                <?php if (have_rows('awards_sections')): ?>
    <?php while (have_rows('awards_sections')): the_row(); ?>
<section class="py-12 lg:py-16 bg-secondary">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- HEADER -->
        <div class="text-center mb-10">
            <h2 class="text-3xl md:text-4xl mb-4"><?php the_sub_field('section_heading'); ?></h2>
            <p class="text-lg text-muted-foreground max-w-2xl mx-auto"><?php the_sub_field('section_description'); ?></p>
        </div>

        <!-- AWARD CARDS -->
        <?php if (have_rows('award_cards')): ?>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-5">
            <?php while (have_rows('award_cards')): the_row(); 
                $icon = get_sub_field('icon'); // SVG HTML
                $year = get_sub_field('year');
                $title = get_sub_field('title');
                $subtitle = get_sub_field('subtitle');
            ?>
            <div class="bg-white p-5 rounded-xl text-center border border-accent/20 hover:border-accent hover:shadow-[0_16px_32px_rgba(0,0,0,0.12)] transition-all group">
                <div class="w-14 h-14 mx-auto mb-3 bg-gradient-to-br from-accent to-[#C8915D] rounded-full flex items-center justify-center text-white group-hover:scale-110 transition-all duration-200 shadow-[0_12px_24px_rgba(226,164,95,0.25)]">
                    <?php echo $icon; ?>
                </div>
                <div class="text-sm text-accent mb-1.5 font-medium"><?php echo esc_html($year); ?></div>
                <h4 class="mb-1.5 font-semibold"><?php echo esc_html($title); ?></h4>
                <p class="text-sm text-muted-foreground"><?php echo esc_html($subtitle); ?></p>
            </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>

    </div>
</section>
    <?php endwhile; ?>
<?php endif; ?>

                                <!-- <section class="py-12 lg:py-16 bg-white">
                                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                                        <div class="text-center mb-10" >
                                            <h2 class="text-3xl md:text-4xl mb-4">Press Kit &amp; Brand Assets</h2>
                                            <p class="text-lg text-muted-foreground max-w-2xl mx-auto">Download
                                                high-resolution assets, logos, and brand materials</p>
                                        </div>
                                        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-5 mb-8">
                                            <div class="bg-secondary p-5 rounded-lg border border-accent/20 hover:border-accent hover:shadow-lg transition-all group"
                                                >
                                                <div
                                                    class="w-14 h-14 mb-3 bg-gradient-to-br from-[#E2A45F] to-[#C8915D] rounded-lg flex items-center justify-center text-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-sparkles w-8 h-8" aria-hidden="true">
                                                        <path
                                                            d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z">
                                                        </path>
                                                        <path d="M20 2v4"></path>
                                                        <path d="M22 4h-4"></path>
                                                        <circle cx="4" cy="20" r="2"></circle>
                                                    </svg>
                                                </div>
                                                <h4 class="mb-2">Logo Pack</h4>
                                                <p class="text-sm text-muted-foreground mb-3">High-resolution logos in
                                                    various formats (PNG, SVG, EPS)</p>
                                                <div class="flex items-center justify-between">
                                                    <span class="text-xs text-muted-foreground">2.4 MB</span>
                                                    <button data-slot="button"
                                                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full text-sm font-medium transition-all duration-200 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-5 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive hover:scale-105 hover:shadow-lg active:scale-100 border bg-transparent text-accent hover:bg-accent hover:text-white dark:bg-input/30 dark:border-input dark:hover:bg-input/50 shadow-[0_4px_16px_rgba(0,0,0,0.08)] h-[40px] px-6 py-2.5 border-accent/20 hover:border-accent group/btn">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="lucide lucide-download w-4 h-4 mr-2 group-hover/btn:translate-y-1 transition-transform"
                                                            aria-hidden="true">
                                                            <path d="M12 15V3"></path>
                                                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                            <path d="m7 10 5 5 5-5"></path>
                                                        </svg>
                                                        Download
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="bg-secondary p-5 rounded-lg border border-accent/20 hover:border-accent hover:shadow-lg transition-all group"
                                                >
                                                <div
                                                    class="w-14 h-14 mb-3 bg-gradient-to-br from-[#E57F6D] to-[#D96A58] rounded-lg flex items-center justify-center text-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-palette w-8 h-8" aria-hidden="true">
                                                        <path
                                                            d="M12 22a1 1 0 0 1 0-20 10 9 0 0 1 10 9 5 5 0 0 1-5 5h-2.25a1.75 1.75 0 0 0-1.4 2.8l.3.4a1.75 1.75 0 0 1-1.4 2.8z">
                                                        </path>
                                                        <circle cx="13.5" cy="6.5" r=".5" fill="currentColor"></circle>
                                                        <circle cx="17.5" cy="10.5" r=".5" fill="currentColor"></circle>
                                                        <circle cx="6.5" cy="12.5" r=".5" fill="currentColor"></circle>
                                                        <circle cx="8.5" cy="7.5" r=".5" fill="currentColor"></circle>
                                                    </svg>
                                                </div>
                                                <h4 class="mb-2">Brand Guidelines</h4>
                                                <p class="text-sm text-muted-foreground mb-3">Complete brand identity
                                                    guidelines and usage rules</p>
                                                <div class="flex items-center justify-between">
                                                    <span class="text-xs text-muted-foreground">5.8 MB</span>
                                                    <button data-slot="button"
                                                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full text-sm font-medium transition-all duration-200 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-5 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive hover:scale-105 hover:shadow-lg active:scale-100 border bg-transparent text-accent hover:bg-accent hover:text-white dark:bg-input/30 dark:border-input dark:hover:bg-input/50 shadow-[0_4px_16px_rgba(0,0,0,0.08)] h-[40px] px-6 py-2.5 border-accent/20 hover:border-accent group/btn">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="lucide lucide-download w-4 h-4 mr-2 group-hover/btn:translate-y-1 transition-transform"
                                                            aria-hidden="true">
                                                            <path d="M12 15V3"></path>
                                                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                            <path d="m7 10 5 5 5-5"></path>
                                                        </svg>
                                                        Download
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="bg-secondary p-5 rounded-lg border border-accent/20 hover:border-accent hover:shadow-lg transition-all group"
                                                >
                                                <div
                                                    class="w-14 h-14 mb-3 bg-gradient-to-br from-[#4A1C2B] to-[#6B2A3F] rounded-lg flex items-center justify-center text-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-camera w-8 h-8" aria-hidden="true">
                                                        <path
                                                            d="M13.997 4a2 2 0 0 1 1.76 1.05l.486.9A2 2 0 0 0 18.003 7H20a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h1.997a2 2 0 0 0 1.759-1.048l.489-.904A2 2 0 0 1 10.004 4z">
                                                        </path>
                                                        <circle cx="12" cy="13" r="3"></circle>
                                                    </svg>
                                                </div>
                                                <h4 class="mb-2">Product Images</h4>
                                                <p class="text-sm text-muted-foreground mb-3">High-quality product
                                                    photography and lifestyle shots</p>
                                                <div class="flex items-center justify-between">
                                                    <span class="text-xs text-muted-foreground">12.3 MB</span>
                                                    <button data-slot="button"
                                                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full text-sm font-medium transition-all duration-200 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-5 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive hover:scale-105 hover:shadow-lg active:scale-100 border bg-transparent text-accent hover:bg-accent hover:text-white dark:bg-input/30 dark:border-input dark:hover:bg-input/50 shadow-[0_4px_16px_rgba(0,0,0,0.08)] h-[40px] px-6 py-2.5 border-accent/20 hover:border-accent group/btn">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="lucide lucide-download w-4 h-4 mr-2 group-hover/btn:translate-y-1 transition-transform"
                                                            aria-hidden="true">
                                                            <path d="M12 15V3"></path>
                                                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                            <path d="m7 10 5 5 5-5"></path>
                                                        </svg>
                                                        Download
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="bg-secondary p-5 rounded-lg border border-accent/20 hover:border-accent hover:shadow-lg transition-all group"
                                                >
                                                <div
                                                    class="w-14 h-14 mb-3 bg-gradient-to-br from-[#E2A45F] to-[#E57F6D] rounded-lg flex items-center justify-center text-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-film w-8 h-8" aria-hidden="true">
                                                        <rect width="18" height="18" x="3" y="3" rx="2"></rect>
                                                        <path d="M7 3v18"></path>
                                                        <path d="M3 7.5h4"></path>
                                                        <path d="M3 12h18"></path>
                                                        <path d="M3 16.5h4"></path>
                                                        <path d="M17 3v18"></path>
                                                        <path d="M17 7.5h4"></path>
                                                        <path d="M17 16.5h4"></path>
                                                    </svg>
                                                </div>
                                                <h4 class="mb-2">Video Assets</h4>
                                                <p class="text-sm text-muted-foreground mb-3">Brand videos, service
                                                    demos, and testimonials</p>
                                                <div class="flex items-center justify-between">
                                                    <span class="text-xs text-muted-foreground">45.6 MB</span>
                                                    <button data-slot="button"
                                                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full text-sm font-medium transition-all duration-200 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-5 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive hover:scale-105 hover:shadow-lg active:scale-100 border bg-transparent text-accent hover:bg-accent hover:text-white dark:bg-input/30 dark:border-input dark:hover:bg-input/50 shadow-[0_4px_16px_rgba(0,0,0,0.08)] h-[40px] px-6 py-2.5 border-accent/20 hover:border-accent group/btn">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="lucide lucide-download w-4 h-4 mr-2 group-hover/btn:translate-y-1 transition-transform"
                                                            aria-hidden="true">
                                                            <path d="M12 15V3"></path>
                                                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                            <path d="m7 10 5 5 5-5"></path>
                                                        </svg>
                                                        Download
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="bg-secondary p-5 rounded-lg border border-accent/20 hover:border-accent hover:shadow-lg transition-all group"
                                                >
                                                <div
                                                    class="w-14 h-14 mb-3 bg-gradient-to-br from-[#D96A58] to-[#E2A45F] rounded-lg flex items-center justify-center text-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-chart-column w-8 h-8" aria-hidden="true">
                                                        <path d="M3 3v16a2 2 0 0 0 2 2h16"></path>
                                                        <path d="M18 17V9"></path>
                                                        <path d="M13 17V5"></path>
                                                        <path d="M8 17v-3"></path>
                                                    </svg>
                                                </div>
                                                <h4 class="mb-2">Fact Sheet</h4>
                                                <p class="text-sm text-muted-foreground mb-3">Company information,
                                                    statistics, and key facts</p>
                                                <div class="flex items-center justify-between">
                                                    <span class="text-xs text-muted-foreground">890 KB</span>
                                                    <button data-slot="button"
                                                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full text-sm font-medium transition-all duration-200 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-5 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive hover:scale-105 hover:shadow-lg active:scale-100 border bg-transparent text-accent hover:bg-accent hover:text-white dark:bg-input/30 dark:border-input dark:hover:bg-input/50 shadow-[0_4px_16px_rgba(0,0,0,0.08)] h-[40px] px-6 py-2.5 border-accent/20 hover:border-accent group/btn">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="lucide lucide-download w-4 h-4 mr-2 group-hover/btn:translate-y-1 transition-transform"
                                                            aria-hidden="true">
                                                            <path d="M12 15V3"></path>
                                                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                            <path d="m7 10 5 5 5-5"></path>
                                                        </svg>
                                                        Download
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="bg-secondary p-5 rounded-lg border border-accent/20 hover:border-accent hover:shadow-lg transition-all group"
                                                >
                                                <div
                                                    class="w-14 h-14 mb-3 bg-gradient-to-br from-[#6B2A3F] to-[#E57F6D] rounded-lg flex items-center justify-center text-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-users-round w-8 h-8" aria-hidden="true">
                                                        <path d="M18 21a8 8 0 0 0-16 0"></path>
                                                        <circle cx="10" cy="8" r="5"></circle>
                                                        <path d="M22 20c0-3.37-2-6.5-4-8a5 5 0 0 0-.45-8.3"></path>
                                                    </svg>
                                                </div>
                                                <h4 class="mb-2">Executive Photos</h4>
                                                <p class="text-sm text-muted-foreground mb-3">Leadership team headshots
                                                    and bios</p>
                                                <div class="flex items-center justify-between">
                                                    <span class="text-xs text-muted-foreground">3.2 MB</span>
                                                    <button data-slot="button"
                                                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full text-sm font-medium transition-all duration-200 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-5 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive hover:scale-105 hover:shadow-lg active:scale-100 border bg-transparent text-accent hover:bg-accent hover:text-white dark:bg-input/30 dark:border-input dark:hover:bg-input/50 shadow-[0_4px_16px_rgba(0,0,0,0.08)] h-[40px] px-6 py-2.5 border-accent/20 hover:border-accent group/btn">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="lucide lucide-download w-4 h-4 mr-2 group-hover/btn:translate-y-1 transition-transform"
                                                            aria-hidden="true">
                                                            <path d="M12 15V3"></path>
                                                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                            <path d="m7 10 5 5 5-5"></path>
                                                        </svg>
                                                        Download
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center" >
                                            <button data-slot="button"
                                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full text-sm font-medium transition-all duration-200 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-5 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive hover:scale-105 hover:shadow-lg active:scale-100 shadow-[0_8px_24px_rgba(0,0,0,0.12)] h-[52px] bg-accent text-accent-foreground hover:bg-accent/90 px-6 py-5 group">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-download w-5 h-5 mr-2 group-hover:translate-y-1 transition-transform"
                                                    aria-hidden="true">
                                                    <path d="M12 15V3"></path>
                                                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                    <path d="m7 10 5 5 5-5"></path>
                                                </svg>
                                                Download Complete Press Kit (68 MB)
                                            </button>
                                        </div>
                                    </div>
                                </section> -->

                                <?php if (have_rows('presskit_sections')): ?>
    <?php while (have_rows('presskit_sections')): the_row(); ?>
<section class="py-12 lg:py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- HEADER -->
        <div class="text-center mb-10">
            <h2 class="text-3xl md:text-4xl mb-4"><?php the_sub_field('section_heading'); ?></h2>
            <p class="text-lg text-muted-foreground max-w-2xl mx-auto"><?php the_sub_field('section_description'); ?></p>
        </div>

        <!-- ASSET CARDS -->
        <?php if (have_rows('presskit_assets')): ?>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-5 mb-8">
            <?php while (have_rows('presskit_assets')): the_row(); 
                $icon = get_sub_field('icon'); // SVG HTML or Image URL
                $title = get_sub_field('title');
                $description = get_sub_field('description');
                $size = get_sub_field('size'); 
                $button_text = get_sub_field('button_text'); 
                $file_link = get_sub_field('file_link'); 
                $button_icon = get_sub_field('button_icon'); // SVG HTML or Image URL
            ?>
            <div class="bg-secondary p-5 rounded-lg border border-accent/20 hover:border-accent hover:shadow-lg transition-all group">
                <div class="w-14 h-14 mb-3 rounded-lg flex items-center justify-center text-white bg-accent">
                    <?php echo $icon; ?>
                </div>
                <h4 class="mb-2"><?php echo esc_html($title); ?></h4>
                <p class="text-sm text-muted-foreground mb-3"><?php echo esc_html($description); ?></p>
                <div class="flex items-center justify-between">
                    <span class="text-xs text-muted-foreground"><?php echo esc_html($size); ?></span>
                    <a href="<?php echo esc_url($file_link); ?>" target="_blank"
                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full text-sm font-medium transition-all duration-200 hover:scale-105 hover:shadow-lg border bg-transparent text-accent hover:bg-accent hover:text-white h-[40px] px-6 py-2.5 border-accent/20 group/btn">
                        <?php if ($button_icon): ?>
                            <?php echo $button_icon; ?>
                        <?php else: ?>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-download w-4 h-4 mr-2" aria-hidden="true">
                                <path d="M12 15V3"></path>
                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                <path d="m7 10 5 5 5-5"></path>
                            </svg>
                        <?php endif; ?>
                        <?php echo esc_html($button_text); ?>
                    </a>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>

        <!-- OPTIONAL FULL PRESS KIT BUTTON -->
        <?php if (get_sub_field('full_kit_button_text') && get_sub_field('full_kit_file')): ?>
        <div class="text-center">
            <a href="<?php echo esc_url(get_sub_field('full_kit_file')); ?>" target="_blank"
                class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full text-sm font-medium transition-all duration-200 hover:scale-105 hover:shadow-lg shadow-[0_8px_24px_rgba(0,0,0,0.12)] h-[52px] bg-accent text-accent-foreground hover:bg-accent/90 px-6 py-5 group">
                <?php 
                $full_button_icon = get_sub_field('full_kit_button_icon');
                if ($full_button_icon) { echo $full_button_icon; } 
                else { ?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-download w-5 h-5 mr-2" aria-hidden="true">
                        <path d="M12 15V3"></path>
                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                        <path d="m7 10 5 5 5-5"></path>
                    </svg>
                <?php } ?>
                <?php echo esc_html(get_sub_field('full_kit_button_text')); ?>
            </a>
        </div>
        <?php endif; ?>

    </div>
</section>
    <?php endwhile; ?>
<?php endif; ?>

                                <!-- <section class="py-12 lg:py-16 bg-primary text-white">
                                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                                        <div class="text-center mb-10" >
                                            <h2 class="text-3xl md:text-4xl mb-4">Media Contacts</h2>
                                            <p class="text-lg text-white/90 max-w-2xl mx-auto">Get in touch with our
                                                communications team for press inquiries</p>
                                        </div>
                                        <div class="grid md:grid-cols-3 gap-6 max-w-5xl mx-auto">
                                            <div class="bg-white/10 backdrop-blur-sm p-5 rounded-lg border border-white/20 hover:border-accent transition-all"
                                                >
                                                <div
                                                    class="w-14 h-14 mb-3 bg-accent/20 rounded-full flex items-center justify-center text-accent">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-newspaper w-8 h-8" aria-hidden="true">
                                                        <path d="M15 18h-5"></path>
                                                        <path d="M18 14h-8"></path>
                                                        <path
                                                            d="M4 22h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16a2 2 0 0 1-4 0v-9a2 2 0 0 1 2-2h2">
                                                        </path>
                                                        <rect width="8" height="4" x="10" y="6" rx="1"></rect>
                                                    </svg>
                                                </div>
                                                <h4 class="mb-2">General Press Inquiries</h4>
                                                <div class="mb-3 pb-3 border-b border-white/20">
                                                    <p class="text-white/90">Priya Sharma</p>
                                                    <p class="text-sm text-white/70">Head of Communications</p>
                                                </div>
                                                <div class="space-y-2">
                                                    <a href="mailto:press@sevora.com"
                                                        class="flex items-center gap-2 text-sm text-white/80 hover:text-accent transition-colors">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="lucide lucide-mail w-4 h-4"
                                                            aria-hidden="true">
                                                            <path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"></path>
                                                            <rect x="2" y="4" width="20" height="16" rx="2"></rect>
                                                        </svg>
                                                        press@sevora.com
                                                    </a>
                                                    <a href="tel:+91 98765 43210"
                                                        class="flex items-center gap-2 text-sm text-white/80 hover:text-accent transition-colors">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="lucide lucide-phone w-4 h-4"
                                                            aria-hidden="true">
                                                            <path
                                                                d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384">
                                                            </path>
                                                        </svg>
                                                        +91 98765 43210
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="bg-white/10 backdrop-blur-sm p-5 rounded-lg border border-white/20 hover:border-accent transition-all"
                                                >
                                                <div
                                                    class="w-14 h-14 mb-3 bg-accent/20 rounded-full flex items-center justify-center text-accent">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-briefcase w-8 h-8" aria-hidden="true">
                                                        <path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                                        <rect width="20" height="14" x="2" y="6" rx="2"></rect>
                                                    </svg>
                                                </div>
                                                <h4 class="mb-2">Partnership Inquiries</h4>
                                                <div class="mb-3 pb-3 border-b border-white/20">
                                                    <p class="text-white/90">Rahul Mehta</p>
                                                    <p class="text-sm text-white/70">Business Development</p>
                                                </div>
                                                <div class="space-y-2">
                                                    <a href="mailto:partnerships@sevora.com"
                                                        class="flex items-center gap-2 text-sm text-white/80 hover:text-accent transition-colors">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="lucide lucide-mail w-4 h-4"
                                                            aria-hidden="true">
                                                            <path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"></path>
                                                            <rect x="2" y="4" width="20" height="16" rx="2"></rect>
                                                        </svg>
                                                        partnerships@sevora.com
                                                    </a>
                                                    <a href="tel:+91 98765 43211"
                                                        class="flex items-center gap-2 text-sm text-white/80 hover:text-accent transition-colors">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="lucide lucide-phone w-4 h-4"
                                                            aria-hidden="true">
                                                            <path
                                                                d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384">
                                                            </path>
                                                        </svg>
                                                        +91 98765 43211
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="bg-white/10 backdrop-blur-sm p-5 rounded-lg border border-white/20 hover:border-accent transition-all"
                                                >
                                                <div
                                                    class="w-14 h-14 mb-3 bg-accent/20 rounded-full flex items-center justify-center text-accent">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-book-open w-8 h-8" aria-hidden="true">
                                                        <path d="M12 7v14"></path>
                                                        <path
                                                            d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z">
                                                        </path>
                                                    </svg>
                                                </div>
                                                <h4 class="mb-2">Content Collaboration</h4>
                                                <div class="mb-3 pb-3 border-b border-white/20">
                                                    <p class="text-white/90">Anjali Verma</p>
                                                    <p class="text-sm text-white/70">Content &amp; Marketing</p>
                                                </div>
                                                <div class="space-y-2">
                                                    <a href="mailto:content@sevora.com"
                                                        class="flex items-center gap-2 text-sm text-white/80 hover:text-accent transition-colors">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="lucide lucide-mail w-4 h-4"
                                                            aria-hidden="true">
                                                            <path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"></path>
                                                            <rect x="2" y="4" width="20" height="16" rx="2"></rect>
                                                        </svg>
                                                        content@sevora.com
                                                    </a>
                                                    <a href="tel:+91 98765 43212"
                                                        class="flex items-center gap-2 text-sm text-white/80 hover:text-accent transition-colors">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="lucide lucide-phone w-4 h-4"
                                                            aria-hidden="true">
                                                            <path
                                                                d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384">
                                                            </path>
                                                        </svg>
                                                        +91 98765 43212
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center mt-8" >
                                            <p class="text-white/90 mb-4">For detailed inquiries, please fill out our
                                                media request form</p>
                                            <button data-slot="button"
                                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full text-sm font-medium transition-all duration-200 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-5 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive hover:scale-105 hover:shadow-lg active:scale-100 border bg-transparent dark:bg-input/30 dark:border-input dark:hover:bg-input/50 shadow-[0_4px_16px_rgba(0,0,0,0.08)] h-[52px] border-white/20 text-white hover:bg-accent hover:text-accent-foreground hover:border-accent px-6 py-5">Submit
                                                Media Request</button>
                                        </div>
                                    </div>
                                </section> -->


<?php if( have_rows('media_contacts_section') ): ?>
<section class="py-12 lg:py-16 bg-primary text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <?php while( have_rows('media_contacts_section') ): the_row(); 
            $section_title = get_sub_field('section_title');
            $section_desc  = get_sub_field('section_description');
        ?>
        <div class="text-center mb-10">
            <h2 class="text-3xl md:text-4xl mb-4"><?php echo esc_html($section_title); ?></h2>
            <p class="text-lg text-white/90 max-w-2xl mx-auto"><?php echo esc_html($section_desc); ?></p>
        </div>

        <?php if( have_rows('contacts') ): ?>
        <div class="grid md:grid-cols-3 gap-6 max-w-5xl mx-auto">
            <?php while( have_rows('contacts') ): the_row();
                $icon        = get_sub_field('icon'); // SVG HTML
                $description = get_sub_field('description');
                $name        = get_sub_field('name');
                $designation = get_sub_field('designation');
                $email       = get_sub_field('email');
                $phone       = get_sub_field('phone');
            ?>
            <div class="bg-white/10 backdrop-blur-sm p-5 rounded-lg border border-white/20 hover:border-accent transition-all">
                <!-- Icon -->
                <div class="w-14 h-14 mb-3 bg-accent/20 rounded-full flex items-center justify-center text-accent">
                    <?php echo $icon; ?>
                </div>
                <!-- Description -->
                <?php if($description): ?>
                    <p class="text-white/90 mb-2"><?php echo esc_html($description); ?></p>
                <?php endif; ?>
                <!-- Name & Designation Block -->
                <div class="mb-3 pb-3 border-b border-white/20">
                    <p class="text-white/90"><?php echo esc_html($name); ?></p>
                    <?php if($designation): ?>
                        <p class="text-sm text-white/70"><?php echo esc_html($designation); ?></p>
                    <?php endif; ?>
                </div>
                <!-- Email & Phone -->
               <div class="space-y-2">

    <?php if($email): 
        $email_icon_html = get_sub_field('email_icon'); // dynamic SVG
    ?>
    <a href="mailto:<?php echo esc_attr($email); ?>" class="flex items-center gap-2 text-sm text-white/80 hover:text-accent transition-colors">
        <?php echo $email_icon_html; ?>
        <?php echo esc_html($email); ?>
    </a>
    <?php endif; ?>

    <?php if($phone): 
        $phone_icon_html = get_sub_field('phone_icon'); // dynamic SVG
    ?>
    <a href="tel:<?php echo esc_attr($phone); ?>" class="flex items-center gap-2 text-sm text-white/80 hover:text-accent transition-colors">
        <?php echo $phone_icon_html; ?>
        <?php echo esc_html($phone); ?>
    </a>
    <?php endif; ?>

</div>

            </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>

        <!-- Media Request Button -->
        <?php 
        $button_text = get_sub_field('form_button_text');
        $button_link = get_sub_field('form_button_link');
        $button_icon = get_sub_field('form_button_icon'); 
        if($button_text && $button_link): ?>
        <div class="text-center mt-8">
            <a href="<?php echo esc_url($button_link); ?>" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full text-sm font-medium transition-all duration-200 hover:scale-105 hover:shadow-lg shadow-[0_4px_16px_rgba(0,0,0,0.08)] h-[52px] border bg-transparent border-white/20 text-white hover:bg-accent hover:text-accent-foreground hover:border-accent px-6 py-5">
                <?php if($button_icon) echo $button_icon; ?>
                <?php echo esc_html($button_text); ?>
            </a>
        </div>
        <?php endif; ?>

        <?php endwhile; ?>
    </div>
</section>
<?php endif; ?>


                            </div>
                        </main>


<?php
get_footer();
?>