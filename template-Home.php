<?php
// Template Name:Home

get_header();
?>





<main id="main-content" class="flex-1">
    <div class="overflow-hidden">
        <!-- <section class="relative h-screen flex items-center overflow-hidden">
                                    <div class="absolute inset-0 z-0"><img
                                            src="https://images.unsplash.com/photo-1758387813664-5cd1211304f6?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxsdXh1cnklMjBmYXNoaW9uJTIwY291cGxlJTIwZWxlZ2FudHxlbnwxfHx8fDE3NjI2MTYxODR8MA&amp;ixlib=rb-4.1.0&amp;q=80&amp;w=1920"
                                            alt="Luxury Fashion for Men and Women" class="w-full h-full object-cover">
                                        <div
                                            class="absolute inset-0 bg-gradient-to-r from-primary/90 via-primary/60 to-transparent">
                                        </div>
                                    </div>


                                    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
                                        <div class="max-w-3xl">
                                            <div
                                                class="inline-flex items-center gap-2 mb-6 px-4 py-2 bg-accent/30 backdrop-blur-sm border border-accent rounded-full">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-sparkles w-4 h-4 text-white"
                                                    aria-hidden="true">
                                                    <path
                                                        d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z">
                                                    </path>
                                                    <path d="M20 2v4"></path>
                                                    <path d="M22 4h-4"></path>
                                                    <circle cx="4" cy="20" r="2"></circle>
                                                </svg><span class="text-white">Redefining Luxury Fashion</span>
                                            </div>
                                            <h1 class="text-5xl md:text-7xl lg:text-8xl text-white mb-6 tracking-tight">
                                                Where Elegance<br>Meets Excellence
                                            </h1>
                                            <p class="text-xl md:text-2xl text-white/90 mb-8 max-w-2xl">Download our app
                                                to explore curated
                                                luxury fashion from India's finest designers.</p>
                                            <div class="flex flex-col sm:flex-row gap-4"><button data-slot="button"
                                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full text-sm font-medium disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-5 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive hover:shadow-lg active:scale-100 shadow-[0_8px_24px_rgba(0,0,0,0.12)] h-[52px] bg-accent text-white hover:bg-accent/90 hover:scale-105 transition-all duration-300 px-8 py-6 group">Download
                                                    App Now<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="lucide lucide-arrow-right w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform"
                                                        aria-hidden="true">
                                                        <path d="M5 12h14"></path>
                                                        <path d="m12 5 7 7-7 7"></path>
                                                    </svg></button><a href="/about.html" data-discover="true"><button
                                                        data-slot="button"
                                                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full text-sm font-medium disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-5 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive hover:shadow-lg active:scale-100 border bg-transparent dark:bg-input/30 dark:border-input dark:hover:bg-input/50 shadow-[0_4px_16px_rgba(0,0,0,0.08)] h-[52px] border-accent text-white hover:bg-accent hover:text-white hover:scale-105 transition-all duration-300 px-8 py-6 w-full">Discover
                                                        Our Story</button></a></div>
                                        </div>
                                    </div>

                                </section> -->
        <?php
        $banner_image = get_field('banner-image');
        $banner_top_header = get_field('banner_top-header');
        $banner_header = get_field('banner_header');
        $banner_paragraph = get_field('banner_paragraph');
        ?>

        <section class="relative h-screen flex items-center overflow-hidden">

            <!-- Background Image -->
            <?php if ($banner_image): ?>
                <div class="absolute inset-0 z-0">
                    <img src="<?php echo esc_url($banner_image['url']); ?>"
                        alt="<?php echo esc_attr($banner_image['alt']); ?>" class="w-full h-full object-cover">

                    <div class="absolute inset-0 bg-gradient-to-r from-primary/90 via-primary/60 to-transparent"></div>
                </div>
            <?php endif; ?>

            <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
                <div class="max-w-3xl">

                    <!-- Top Header Badge -->
                    <?php if ($banner_top_header): ?>
                        <div
                            class="inline-flex items-center gap-2 mb-6 px-4 py-2 bg-accent/30 backdrop-blur-sm border border-accent rounded-full">

                            <!-- Static SVG -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-sparkles w-4 h-4 text-white" aria-hidden="true">
                                <path
                                    d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z">
                                </path>
                                <path d="M20 2v4"></path>
                                <path d="M22 4h-4"></path>
                                <circle cx="4" cy="20" r="2"></circle>
                            </svg>

                            <span class="text-white">
                                <?php echo esc_html($banner_top_header); ?>
                            </span>
                        </div>
                    <?php endif; ?>

                    <!-- Dynamic H1 Header -->
                    <?php if ($banner_header): ?>
                        <h1 class="text-5xl md:text-7xl lg:text-8xl text-white mb-6 tracking-tight">
                            <?php echo nl2br(esc_html($banner_header)); ?>
                        </h1>
                    <?php endif; ?>

                    <!-- Paragraph -->
                    <?php if ($banner_paragraph): ?>
                        <p class="text-xl md:text-2xl text-white/90 mb-8 max-w-2xl">
                            <?php echo esc_html($banner_paragraph); ?>
                        </p>
                    <?php endif; ?>

                    <!-- Buttons (static for now) -->
                    <div class="flex flex-col sm:flex-row gap-4">
                        <button
                            class="inline-flex items-center justify-center gap-2 rounded-full text-sm font-medium shadow-lg h-[52px] bg-accent text-white hover:bg-accent/90 transition-all px-8 py-6 group">
                            Download App Now
                        </button>

                        <a href="/about">
                            <button
                                class="inline-flex items-center justify-center rounded-full text-sm font-medium border border-accent text-white h-[52px] px-8 py-6 hover:bg-accent transition-all">
                                Discover Our Story
                            </button>
                        </a>
                    </div>

                </div>
            </div>

        </section>

        <!-- <section class="py-12 bg-[#F3E6E2] border-y border-accent/20">
                                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                                        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                                            <div class="">
                                                <div class="text-center group cursor-pointer">
                                                    <div
                                                        class="w-20 h-20 mx-auto mb-4 bg-gradient-to-br from-accent to-[#C8915D] rounded-full flex items-center justify-center text-white group-hover:scale-110 transition-all duration-200 shadow-[0_12px_24px_rgba(226,164,95,0.2)]">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="lucide lucide-users w-6 h-6"
                                                            aria-hidden="true">
                                                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                                            <path d="M16 3.128a4 4 0 0 1 0 7.744"></path>
                                                            <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                                            <circle cx="9" cy="7" r="4"></circle>
                                                        </svg>
                                                    </div>
                                                    <div class="text-3xl md:text-4xl text-accent mb-2 font-bold">100K+
                                                    </div>
                                                    <div class="text-muted-foreground">Fashion Enthusiasts</div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div class="text-center group cursor-pointer">
                                                    <div
                                                        class="w-20 h-20 mx-auto mb-4 bg-gradient-to-br from-accent to-[#C8915D] rounded-full flex items-center justify-center text-white group-hover:scale-110 transition-all duration-200 shadow-[0_12px_24px_rgba(226,164,95,0.2)]">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="lucide lucide-sparkles w-6 h-6" aria-hidden="true">
                                                            <path
                                                                d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z">
                                                            </path>
                                                            <path d="M20 2v4"></path>
                                                            <path d="M22 4h-4"></path>
                                                            <circle cx="4" cy="20" r="2"></circle>
                                                        </svg>
                                                    </div>
                                                    <div class="text-3xl md:text-4xl text-accent mb-2 font-bold">500+
                                                    </div>
                                                    <div class="text-muted-foreground">Luxury Brands</div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div class="text-center group cursor-pointer">
                                                    <div
                                                        class="w-20 h-20 mx-auto mb-4 bg-gradient-to-br from-accent to-[#C8915D] rounded-full flex items-center justify-center text-white group-hover:scale-110 transition-all duration-200 shadow-[0_12px_24px_rgba(226,164,95,0.2)]">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="lucide lucide-star w-6 h-6"
                                                            aria-hidden="true">
                                                            <path
                                                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                    <div class="text-3xl md:text-4xl text-accent mb-2 font-bold">4.9
                                                    </div>
                                                    <div class="text-muted-foreground">Customer Rating</div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div class="text-center group cursor-pointer">
                                                    <div
                                                        class="w-20 h-20 mx-auto mb-4 bg-gradient-to-br from-accent to-[#C8915D] rounded-full flex items-center justify-center text-white group-hover:scale-110 transition-all duration-200 shadow-[0_12px_24px_rgba(226,164,95,0.2)]">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="lucide lucide-shopping-bag w-6 h-6"
                                                            aria-hidden="true">
                                                            <path d="M16 10a4 4 0 0 1-8 0"></path>
                                                            <path d="M3.103 6.034h17.794"></path>
                                                            <path
                                                                d="M3.4 5.467a2 2 0 0 0-.4 1.2V20a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6.667a2 2 0 0 0-.4-1.2l-2-2.667A2 2 0 0 0 17 2H7a2 2 0 0 0-1.6.8z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                    <div class="text-3xl md:text-4xl text-accent mb-2 font-bold">50K+
                                                    </div>
                                                    <div class="text-muted-foreground">Curated Styles</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section> -->

        <section class="py-12 bg-[#F3E6E2] border-y border-accent/20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8">

                    <?php if (have_rows('stats')): ?>
                        <?php while (have_rows('stats')):
                            the_row(); ?>

                            <div>
                                <div class="text-center group cursor-pointer">

                                    <div class="w-20 h-20 mx-auto mb-4 bg-gradient-to-br from-accent to-[#C8915D]
                                rounded-full flex items-center justify-center text-white
                                group-hover:scale-110 transition-all duration-200
                                shadow-[0_12px_24px_rgba(226,164,95,0.2)]">

                                        <?php echo get_sub_field('icon_svg'); ?>

                                    </div>

                                    <div class="text-3xl md:text-4xl text-accent mb-2 font-bold">
                                        <?php echo esc_html(get_sub_field('number')); ?>
                                    </div>

                                    <div class="text-muted-foreground">
                                        <?php echo esc_html(get_sub_field('title')); ?>
                                    </div>

                                </div>
                            </div>

                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>
            </div>
        </section>

        <!-- <section
                                    class="py-16 lg:py-24 bg-gradient-to-br from-[#E2A45F]/20 via-white to-[#E57F6D]/15 relative overflow-hidden">
                                    <div class="absolute inset-0 overflow-hidden">
                                        <div
                                            class="absolute top-20 left-20 w-80 h-80 bg-gradient-to-br from-accent/10 to-[#E57F6D]/10 rounded-full blur-3xl">
                                        </div>
                                        <div
                                            class="absolute bottom-32 right-32 w-96 h-96 bg-gradient-to-br from-[#E57F6D]/10 to-accent/10 rounded-full blur-3xl">
                                        </div>
                                        <div
                                            class="absolute top-1/2 right-1/4 w-64 h-64 bg-white/30 rounded-full blur-2xl">
                                        </div>
                                    </div>
                                    <div class="absolute inset-0 opacity-[0.03]">
                                        <div class="absolute inset-0">
                                        </div>
                                    </div>
                                    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                                        <div class="text-center mb-16">
                                            <div
                                                class="inline-flex items-center gap-2 mb-6 px-6 py-3 bg-gradient-to-r from-accent/10 via-accent/15 to-accent/10 border border-accent/30 rounded-full backdrop-blur-sm shadow-[0_4px_20px_rgba(226,164,95,0.15)]">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-sparkles w-4 h-4 text-accent"
                                                    aria-hidden="true">
                                                    <path
                                                        d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z">
                                                    </path>
                                                    <path d="M20 2v4"></path>
                                                    <path d="M22 4h-4"></path>
                                                    <circle cx="4" cy="20" r="2"></circle>
                                                </svg><span
                                                    class="text-accent uppercase tracking-wider text-sm font-semibold">Signature
                                                    Services</span><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-sparkles w-4 h-4 text-accent"
                                                    aria-hidden="true">
                                                    <path
                                                        d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z">
                                                    </path>
                                                    <path d="M20 2v4"></path>
                                                    <path d="M22 4h-4"></path>
                                                    <circle cx="4" cy="20" r="2"></circle>
                                                </svg>
                                            </div>
                                            <h2
                                                class="text-4xl md:text-6xl mb-6 bg-gradient-to-br from-primary via-primary to-primary/80 bg-clip-text text-transparent">
                                                Luxury Fashion, Delivered</h2>
                                            <p class="text-lg md:text-xl text-muted-foreground max-w-2xl mx-auto">
                                                Innovative services designed for
                                                India's fashion-forward customers</p>
                                        </div>
                                        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
                                            <div class="">
                                                <div
                                                    class="relative bg-white/80 backdrop-blur-sm p-8 rounded-2xl border border-accent/20 hover:border-accent/60 hover:shadow-[0_20px_60px_rgba(0,0,0,0.15)] transition-all duration-300 group h-full">
                                                    <div
                                                        class="absolute inset-0 bg-gradient-to-br from-accent/5 via-transparent to-[#E57F6D]/5 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    </div>
                                                    <div
                                                        class="absolute top-0 right-0 w-24 h-24 bg-gradient-to-br from-accent/10 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    </div>
                                                    <div class="absolute top-5 right-5 z-10"><span
                                                            class="px-3 py-1.5 bg-gradient-to-r from-accent to-[#C8915D] text-white text-xs rounded-full font-semibold uppercase tracking-wider shadow-lg">NEW</span>
                                                    </div>
                                                    <div class="relative z-10">
                                                        <div
                                                            class="w-16 h-16 bg-gradient-to-br from-accent via-accent to-[#C8915D] rounded-2xl flex items-center justify-center mb-6 text-white group-hover:scale-110 group-hover:rotate-3 transition-all duration-300 shadow-[0_12px_32px_rgba(226,164,95,0.3)]">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-clock w-8 h-8" aria-hidden="true">
                                                                <path d="M12 6v6l4 2"></path>
                                                                <circle cx="12" cy="12" r="10"></circle>
                                                            </svg>
                                                        </div>
                                                        <h3
                                                            class="text-xl mb-3 font-semibold text-primary group-hover:text-accent transition-colors duration-300">
                                                            60-Min Express</h3>
                                                        <p class="text-muted-foreground text-sm mb-4 leading-relaxed">
                                                            Lightning-fast delivery in metro cities</p>
                                                        <div
                                                            class="flex items-center gap-2 text-accent opacity-0 group-hover:opacity-100 transition-all duration-300">
                                                            <span class="text-sm font-medium">Learn more</span><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-arrow-right w-5 h-5 group-hover:translate-x-2 transition-transform duration-300"
                                                                aria-hidden="true">
                                                                <path d="M5 12h14"></path>
                                                                <path d="m12 5 7 7-7 7"></path>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-transparent via-accent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-b-2xl">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div
                                                    class="relative bg-white/80 backdrop-blur-sm p-8 rounded-2xl border border-accent/20 hover:border-accent/60 hover:shadow-[0_20px_60px_rgba(0,0,0,0.15)] transition-all duration-300 group h-full">
                                                    <div
                                                        class="absolute inset-0 bg-gradient-to-br from-accent/5 via-transparent to-[#E57F6D]/5 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    </div>
                                                    <div
                                                        class="absolute top-0 right-0 w-24 h-24 bg-gradient-to-br from-accent/10 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    </div>
                                                    <div class="absolute top-5 right-5 z-10"><span
                                                            class="px-3 py-1.5 bg-gradient-to-r from-accent to-[#C8915D] text-white text-xs rounded-full font-semibold uppercase tracking-wider shadow-lg">POPULAR</span>
                                                    </div>
                                                    <div class="relative z-10">
                                                        <div
                                                            class="w-16 h-16 bg-gradient-to-br from-accent via-accent to-[#C8915D] rounded-2xl flex items-center justify-center mb-6 text-white group-hover:scale-110 group-hover:rotate-3 transition-all duration-300 shadow-[0_12px_32px_rgba(226,164,95,0.3)]">
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
                                                        <h3
                                                            class="text-xl mb-3 font-semibold text-primary group-hover:text-accent transition-colors duration-300">
                                                            Try Before Buy</h3>
                                                        <p class="text-muted-foreground text-sm mb-4 leading-relaxed">
                                                            48-hour home trials, zero commitment</p>
                                                        <div
                                                            class="flex items-center gap-2 text-accent opacity-0 group-hover:opacity-100 transition-all duration-300">
                                                            <span class="text-sm font-medium">Learn more</span><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-arrow-right w-5 h-5 group-hover:translate-x-2 transition-transform duration-300"
                                                                aria-hidden="true">
                                                                <path d="M5 12h14"></path>
                                                                <path d="m12 5 7 7-7 7"></path>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-transparent via-accent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-b-2xl">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div
                                                    class="relative bg-white/80 backdrop-blur-sm p-8 rounded-2xl border border-accent/20 hover:border-accent/60 hover:shadow-[0_20px_60px_rgba(0,0,0,0.15)] transition-all duration-300 group h-full">
                                                    <div
                                                        class="absolute inset-0 bg-gradient-to-br from-accent/5 via-transparent to-[#E57F6D]/5 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    </div>
                                                    <div
                                                        class="absolute top-0 right-0 w-24 h-24 bg-gradient-to-br from-accent/10 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    </div>
                                                    <div class="absolute top-5 right-5 z-10"><span
                                                            class="px-3 py-1.5 bg-gradient-to-r from-accent to-[#C8915D] text-white text-xs rounded-full font-semibold uppercase tracking-wider shadow-lg">VIP</span>
                                                    </div>
                                                    <div class="relative z-10">
                                                        <div
                                                            class="w-16 h-16 bg-gradient-to-br from-accent via-accent to-[#C8915D] rounded-2xl flex items-center justify-center mb-6 text-white group-hover:scale-110 group-hover:rotate-3 transition-all duration-300 shadow-[0_12px_32px_rgba(226,164,95,0.3)]">
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
                                                        <h3
                                                            class="text-xl mb-3 font-semibold text-primary group-hover:text-accent transition-colors duration-300">
                                                            Personal Stylist</h3>
                                                        <p class="text-muted-foreground text-sm mb-4 leading-relaxed">
                                                            Expert fashion advice, personalized for you</p>
                                                        <div
                                                            class="flex items-center gap-2 text-accent opacity-0 group-hover:opacity-100 transition-all duration-300">
                                                            <span class="text-sm font-medium">Learn more</span><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-arrow-right w-5 h-5 group-hover:translate-x-2 transition-transform duration-300"
                                                                aria-hidden="true">
                                                                <path d="M5 12h14"></path>
                                                                <path d="m12 5 7 7-7 7"></path>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-transparent via-accent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-b-2xl">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div
                                                    class="relative bg-white/80 backdrop-blur-sm p-8 rounded-2xl border border-accent/20 hover:border-accent/60 hover:shadow-[0_20px_60px_rgba(0,0,0,0.15)] transition-all duration-300 group h-full">
                                                    <div
                                                        class="absolute inset-0 bg-gradient-to-br from-accent/5 via-transparent to-[#E57F6D]/5 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    </div>
                                                    <div
                                                        class="absolute top-0 right-0 w-24 h-24 bg-gradient-to-br from-accent/10 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    </div>
                                                    <div class="relative z-10">
                                                        <div
                                                            class="w-16 h-16 bg-gradient-to-br from-accent via-accent to-[#C8915D] rounded-2xl flex items-center justify-center mb-6 text-white group-hover:scale-110 group-hover:rotate-3 transition-all duration-300 shadow-[0_12px_32px_rgba(226,164,95,0.3)]">
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
                                                        <h3
                                                            class="text-xl mb-3 font-semibold text-primary group-hover:text-accent transition-colors duration-300">
                                                            Slotted Delivery</h3>
                                                        <p class="text-muted-foreground text-sm mb-4 leading-relaxed">
                                                            Choose your preferred time window</p>
                                                        <div
                                                            class="flex items-center gap-2 text-accent opacity-0 group-hover:opacity-100 transition-all duration-300">
                                                            <span class="text-sm font-medium">Learn more</span><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-arrow-right w-5 h-5 group-hover:translate-x-2 transition-transform duration-300"
                                                                aria-hidden="true">
                                                                <path d="M5 12h14"></path>
                                                                <path d="m12 5 7 7-7 7"></path>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-transparent via-accent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-b-2xl">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <div tabindex="0"><a href="/services.html" data-discover="true"><button
                                                        data-slot="button"
                                                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full text-sm font-medium disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-5 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive hover:scale-105 active:scale-100 hover:bg-accent/90 shadow-[0_8px_24px_rgba(0,0,0,0.12)] h-[52px] bg-gradient-to-r from-accent via-accent to-[#C8915D] text-white hover:shadow-[0_20px_50px_rgba(226,164,95,0.4)] transition-all duration-500 px-10 py-7 group relative overflow-hidden"><span
                                                            class="absolute inset-0 bg-gradient-to-r from-transparent via-white/20 to-transparent translate-x-[-200%] group-hover:translate-x-[200%] transition-transform duration-1000"></span><span
                                                            class="relative flex items-center gap-3">Explore All
                                                            Services<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-arrow-right w-5 h-5 group-hover:translate-x-2 transition-transform duration-300"
                                                                aria-hidden="true">
                                                                <path d="M5 12h14"></path>
                                                                <path d="m12 5 7 7-7 7"></path>
                                                            </svg></span></button></a></div>
                                            <p class="mt-4 text-sm text-muted-foreground">Available
                                                exclusively on the SEVORA mobile app</p>
                                        </div>
                                    </div>
                                </section> -->
        <section
            class="py-16 lg:py-24 bg-gradient-to-br from-[#E2A45F]/20 via-white to-[#E57F6D]/15 relative overflow-hidden">

            <!-- Background blobs -->
            <div class="absolute inset-0 overflow-hidden">
                <div
                    class="absolute top-20 left-20 w-80 h-80 bg-gradient-to-br from-accent/10 to-[#E57F6D]/10 rounded-full blur-3xl">
                </div>
                <div
                    class="absolute bottom-32 right-32 w-96 h-96 bg-gradient-to-br from-[#E57F6D]/10 to-accent/10 rounded-full blur-3xl">
                </div>
                <div class="absolute top-1/2 right-1/4 w-64 h-64 bg-white/30 rounded-full blur-2xl"></div>
            </div>

            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                <!-- Section Header -->
                <div class="text-center mb-16">

                    <?php if (get_field('section_badge')): ?>
                        <div class="inline-flex items-center gap-2 mb-6 px-6 py-3
                    bg-gradient-to-r from-accent/10 via-accent/15 to-accent/10
                    border border-accent/30 rounded-full backdrop-blur-sm
                    shadow-[0_4px_20px_rgba(226,164,95,0.15)]">

                            <?php if ($icon1 = get_field('icon_svg1')): ?>
                                <span class="text-accent w-4 h-4"><?php echo $icon1; ?></span>
                            <?php endif; ?>

                            <span class="text-accent uppercase tracking-wider text-sm font-semibold">
                                <?php the_field('section_badge'); ?>
                            </span>

                            <?php if ($icon2 = get_field('icon_svg2')): ?>
                                <span class="text-accent w-4 h-4"><?php echo $icon2; ?></span>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

                    <h2
                        class="text-4xl md:text-6xl mb-6 bg-gradient-to-br from-primary via-primary to-primary/80 bg-clip-text text-transparent">
                        <?php the_field('section_heading'); ?>
                    </h2>

                    <p class="text-lg md:text-xl text-muted-foreground max-w-2xl mx-auto">
                        <?php the_field('section_description'); ?>
                    </p>
                </div>

                <!-- Services Grid -->
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">

                    <?php if (have_rows('services')): ?>
                        <?php while (have_rows('services')):
                            the_row(); ?>

                            <div class="relative bg-white/80 backdrop-blur-sm p-8 rounded-2xl border border-accent/20
                                hover:border-accent/60 hover:shadow-[0_20px_60px_rgba(0,0,0,0.15)]
                                transition-all duration-300 group h-full">

                                <!-- Hover overlays -->
                                <div class="absolute inset-0 bg-gradient-to-br from-accent/5 via-transparent to-[#E57F6D]/5
                                    rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                </div>

                                <div class="absolute top-0 right-0 w-24 h-24 bg-gradient-to-br from-accent/10 to-transparent
                                    rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                </div>

                                <?php if (get_sub_field('badge')): ?>
                                    <div class="absolute top-5 right-5 z-10">
                                        <span
                                            class="px-3 py-1.5 bg-gradient-to-r from-accent to-[#C8915D]
                                             text-white text-xs rounded-full font-semibold uppercase tracking-wider shadow-lg">
                                            <?php the_sub_field('badge'); ?>
                                        </span>
                                    </div>
                                <?php endif; ?>

                                <div class="relative z-10">

                                    <div class="w-16 h-16 bg-gradient-to-br from-accent via-accent to-[#C8915D]
                                        rounded-2xl flex items-center justify-center mb-6 text-white
                                        group-hover:scale-110 group-hover:rotate-3 transition-all duration-300
                                        shadow-[0_12px_32px_rgba(226,164,95,0.3)]">
                                        <?php echo get_sub_field('icon_svg'); ?>
                                    </div>

                                    <h3 class="text-xl mb-3 font-semibold text-primary
                                       group-hover:text-accent transition-colors duration-300">
                                        <?php the_sub_field('title'); ?>
                                    </h3>

                                    <p class="text-muted-foreground text-sm mb-4 leading-relaxed">
                                        <?php the_sub_field('description'); ?>
                                    </p>

                                    <?php if (get_sub_field('link')): ?>
                                        <a href="<?php echo esc_url(get_sub_field('link')); ?>" class="flex items-center gap-2 text-accent
                                          opacity-0 group-hover:opacity-100
                                          transition-all duration-300">

                                            <span class="text-sm font-medium">
                                                <?php echo esc_html(get_sub_field('link_text') ?: 'Learn more'); ?>
                                            </span>

                                            <?php if ($arrow = get_sub_field('arrow_icon')): ?>
                                                <span class="transition-transform duration-300 group-hover:translate-x-2
                                                     [&_svg]:w-5 [&_svg]:h-5 [&_svg]:stroke-current">
                                                    <?php echo $arrow; ?>
                                                </span>
                                            <?php endif; ?>
                                        </a>
                                    <?php endif; ?>

                                </div>

                                <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r
                                    from-transparent via-accent to-transparent
                                    opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-b-2xl">
                                </div>
                            </div>

                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>

                <!-- CTA -->
                <div class="text-center">
                    <a href="<?php the_field('cta_url'); ?>" class="inline-flex items-center gap-3 px-10 py-4 rounded-full
                      bg-gradient-to-r from-accent via-accent to-[#C8915D]
                      text-white shadow-[0_8px_24px_rgba(0,0,0,0.12)]
                      hover:scale-105 transition-all duration-500 group relative overflow-hidden">

                        <span
                            class="absolute inset-0 bg-gradient-to-r from-transparent via-white/20 to-transparent
                             translate-x-[-200%] group-hover:translate-x-[200%] transition-transform duration-1000"></span>

                        <span class="relative flex items-center gap-3">
                            <?php the_field('cta_text'); ?>

                            <?php if ($arrow = get_field('arrow-icon')): ?>
                                <span class="transition-transform duration-300 group-hover:translate-x-2">
                                    <?php echo $arrow; ?>
                                </span>
                            <?php endif; ?>
                        </span>
                    </a>

                    <p class="mt-4 text-sm text-muted-foreground">
                        <?php the_field('footer_note'); ?>
                    </p>
                </div>

            </div>
        </section>


        <!-- <section
                                    class="py-16 lg:py-24 bg-gradient-to-br from-[#E57F6D]/25 via-[#F3E6E2]/60 to-white relative overflow-hidden">
                                    <div class="absolute inset-0 opacity-10">
                                        <div class="absolute inset-0">
                                        </div>
                                    </div>
                                    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                                        <div class="text-center mb-12">
                                            <h2 class="text-4xl md:text-5xl mb-4">Discover Designer Collections</h2>
                                            <p class="text-lg text-muted-foreground max-w-2xl mx-auto">Curated luxury
                                                fashion from India's finest designers and global fashion houses</p>
                                        </div>
                                        <div class="grid md:grid-cols-3 gap-6">
                                            <div class="">
                                                <div class="group cursor-pointer">
                                                    <div
                                                        class="relative h-96 rounded-lg overflow-hidden mb-4 shadow-lg">
                                                        <img src="https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;q=80&amp;w=800"
                                                            alt="Women's Collection"
                                                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                                        <div
                                                            class="absolute inset-0 bg-gradient-to-t from-primary/80 via-primary/40 to-transparent opacity-60 group-hover:opacity-100 transition-opacity duration-500">
                                                        </div>
                                                        <div
                                                            class="absolute bottom-0 left-0 right-0 p-6 text-white transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                                                            <h3 class="text-2xl mb-2">Women's Collection</h3>
                                                            <p class="text-white/90 mb-4">Explore elegant designs from
                                                                renowned designers</p><button data-slot="button"
                                                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full text-sm font-medium disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-5 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive hover:shadow-lg active:scale-100 shadow-[0_8px_24px_rgba(0,0,0,0.12)] h-[52px] px-8 py-3.5 bg-accent text-white hover:bg-accent/90 hover:scale-105 transition-all duration-300 w-full">View
                                                                in App</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div class="group cursor-pointer">
                                                    <div
                                                        class="relative h-96 rounded-lg overflow-hidden mb-4 shadow-lg">
                                                        <img src="https://images.unsplash.com/photo-1617127365659-c47fa864d8bc?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;q=80&amp;w=800"
                                                            alt="Men's Collection"
                                                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                                        <div
                                                            class="absolute inset-0 bg-gradient-to-t from-primary/80 via-primary/40 to-transparent opacity-60 group-hover:opacity-100 transition-opacity duration-500">
                                                        </div>
                                                        <div
                                                            class="absolute bottom-0 left-0 right-0 p-6 text-white transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                                                            <h3 class="text-2xl mb-2">Men's Collection</h3>
                                                            <p class="text-white/90 mb-4">Sophisticated style for the
                                                                modern gentleman</p><button data-slot="button"
                                                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full text-sm font-medium disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-5 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive hover:shadow-lg active:scale-100 shadow-[0_8px_24px_rgba(0,0,0,0.12)] h-[52px] px-8 py-3.5 bg-accent text-white hover:bg-accent/90 hover:scale-105 transition-all duration-300 w-full">View
                                                                in App</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div class="group cursor-pointer">
                                                    <div
                                                        class="relative h-96 rounded-lg overflow-hidden mb-4 shadow-lg">
                                                        <img src="https://images.unsplash.com/photo-1492707892479-7bc8d5a4ee93?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;q=80&amp;w=800"
                                                            alt="Accessories"
                                                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                                        <div
                                                            class="absolute inset-0 bg-gradient-to-t from-primary/80 via-primary/40 to-transparent opacity-60 group-hover:opacity-100 transition-opacity duration-500">
                                                        </div>
                                                        <div
                                                            class="absolute bottom-0 left-0 right-0 p-6 text-white transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                                                            <h3 class="text-2xl mb-2">Accessories</h3>
                                                            <p class="text-white/90 mb-4">Complete your look with luxury
                                                                accessories</p><button data-slot="button"
                                                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full text-sm font-medium disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-5 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive hover:shadow-lg active:scale-100 shadow-[0_8px_24px_rgba(0,0,0,0.12)] h-[52px] px-8 py-3.5 bg-accent text-white hover:bg-accent/90 hover:scale-105 transition-all duration-300 w-full">View
                                                                in App</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section> -->
        <section
            class="py-16 lg:py-24 bg-gradient-to-br from-[#E57F6D]/25 via-[#F3E6E2]/60 to-white relative overflow-hidden">

            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                <div class="text-center mb-12">
                    <h2 class="text-4xl md:text-5xl mb-4">
                        <?php the_field('designer_section_heading'); ?>
                    </h2>
                    <p class="text-lg text-muted-foreground max-w-2xl mx-auto">
                        <?php the_field('designer_section_description'); ?>
                    </p>
                </div>

                <div class="grid md:grid-cols-3 gap-6">

                    <?php if (have_rows('collections')): ?>
                        <?php while (have_rows('collections')):
                            the_row(); ?>

                            <div class="group cursor-pointer">
                                <div class="relative h-96 rounded-lg overflow-hidden mb-4 shadow-lg">

                                    <?php
                                    $image = get_sub_field('image');
                                    if ($image):
                                        ?>
                                        <img src="<?php echo esc_url($image['url']); ?>"
                                            alt="<?php echo esc_attr($image['alt'] ?: get_sub_field('title')); ?>"
                                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                    <?php endif; ?>

                                    <div class="absolute inset-0 bg-gradient-to-t from-primary/80 via-primary/40 to-transparent
                                        opacity-60 group-hover:opacity-100 transition-opacity duration-500"></div>

                                    <div
                                        class="absolute bottom-0 left-0 right-0 p-6 text-white
                                        transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">

                                        <h3 class="text-2xl mb-2">
                                            <?php the_sub_field('title'); ?>
                                        </h3>

                                        <p class="text-white/90 mb-4">
                                            <?php the_sub_field('description'); ?>
                                        </p>

                                        <?php if ($link = get_sub_field('button_link')): ?>
                                            <a href="<?php echo esc_url($link); ?>">
                                                <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap
                                                   rounded-full text-sm font-medium shadow-[0_8px_24px_rgba(0,0,0,0.12)]
                                                   h-[52px] px-8 py-3.5 bg-accent text-white
                                                   hover:bg-accent/90 hover:scale-105 hover:shadow-lg
                                                   transition-all duration-300 w-full">

                                                    <?php echo esc_html(get_sub_field('button_text') ?: 'View in App'); ?>

                                                </button>
                                            </a>
                                        <?php endif; ?>

                                    </div>
                                </div>
                            </div>

                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>
            </div>
        </section>


        <!-- <section
                                    class="py-16 lg:py-24 bg-gradient-to-br from-[#4A1C2B]/12 via-[#F3E6E2]/80 to-[#4A1C2B]/8 relative overflow-hidden">
                                    <div class="absolute inset-0 opacity-[0.02]">
                                        <div class="absolute inset-0">
                                        </div>
                                    </div>
                                    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                                        <div class="text-center mb-12">
                                            <h2 class="text-4xl md:text-5xl mb-4">The SEVORA Promise</h2>
                                            <p class="text-lg text-muted-foreground max-w-2xl mx-auto">Redefining luxury
                                                fashion retail for India's discerning customers</p>
                                        </div>
                                        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                                            <div class="">
                                                <div
                                                    class="bg-secondary p-6 rounded-xl border border-accent/20 hover:border-accent hover:shadow-[0_16px_32px_rgba(0,0,0,0.1)] transition-all group h-full">
                                                    <div
                                                        class="w-14 h-14 bg-gradient-to-br from-accent to-[#C8915D] rounded-full flex items-center justify-center mb-4 text-white group-hover:scale-110 transition-all duration-200 shadow-[0_12px_24px_rgba(226,164,95,0.25)]">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="lucide lucide-shield w-8 h-8"
                                                            aria-hidden="true">
                                                            <path
                                                                d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                    <h3 class="text-lg mb-2 font-semibold">Authenticity Certified</h3>
                                                    <p class="text-muted-foreground text-sm leading-relaxed">100%
                                                        verified luxury goods with certificate of authenticity.</p>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div
                                                    class="bg-secondary p-6 rounded-xl border border-accent/20 hover:border-accent hover:shadow-[0_16px_32px_rgba(0,0,0,0.1)] transition-all group h-full">
                                                    <div
                                                        class="w-14 h-14 bg-gradient-to-br from-accent to-[#C8915D] rounded-full flex items-center justify-center mb-4 text-white group-hover:scale-110 transition-all duration-200 shadow-[0_12px_24px_rgba(226,164,95,0.25)]">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="lucide lucide-sparkles w-8 h-8" aria-hidden="true">
                                                            <path
                                                                d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z">
                                                            </path>
                                                            <path d="M20 2v4"></path>
                                                            <path d="M22 4h-4"></path>
                                                            <circle cx="4" cy="20" r="2"></circle>
                                                        </svg>
                                                    </div>
                                                    <h3 class="text-lg mb-2 font-semibold">Curated Excellence</h3>
                                                    <p class="text-muted-foreground text-sm leading-relaxed">Hand-picked
                                                        collections by fashion experts for discerning tastes.</p>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div
                                                    class="bg-secondary p-6 rounded-xl border border-accent/20 hover:border-accent hover:shadow-[0_16px_32px_rgba(0,0,0,0.1)] transition-all group h-full">
                                                    <div
                                                        class="w-14 h-14 bg-gradient-to-br from-accent to-[#C8915D] rounded-full flex items-center justify-center mb-4 text-white group-hover:scale-110 transition-all duration-200 shadow-[0_12px_24px_rgba(226,164,95,0.25)]">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="lucide lucide-heart w-8 h-8"
                                                            aria-hidden="true">
                                                            <path
                                                                d="M2 9.5a5.5 5.5 0 0 1 9.591-3.676.56.56 0 0 0 .818 0A5.49 5.49 0 0 1 22 9.5c0 2.29-1.5 4-3 5.5l-5.492 5.313a2 2 0 0 1-3 .019L5 15c-1.5-1.5-3-3.2-3-5.5">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                    <h3 class="text-lg mb-2 font-semibold">White Glove Service</h3>
                                                    <p class="text-muted-foreground text-sm leading-relaxed">
                                                        Personalized styling and premium customer care.</p>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div
                                                    class="bg-secondary p-6 rounded-xl border border-accent/20 hover:border-accent hover:shadow-[0_16px_32px_rgba(0,0,0,0.1)] transition-all group h-full">
                                                    <div
                                                        class="w-14 h-14 bg-gradient-to-br from-accent to-[#C8915D] rounded-full flex items-center justify-center mb-4 text-white group-hover:scale-110 transition-all duration-200 shadow-[0_12px_24px_rgba(226,164,95,0.25)]">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="lucide lucide-star w-8 h-8"
                                                            aria-hidden="true">
                                                            <path
                                                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                    <h3 class="text-lg mb-2 font-semibold">Exclusive Access</h3>
                                                    <p class="text-muted-foreground text-sm leading-relaxed">Early
                                                        access to limited editions and designer collaborations.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section> -->

        <section
            class="py-16 lg:py-24 bg-gradient-to-br from-[#4A1C2B]/12 via-[#F3E6E2]/80 to-[#4A1C2B]/8 relative overflow-hidden">
            <div class="absolute inset-0 opacity-[0.02]">
                <div class="absolute inset-0"></div>
            </div>
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-4xl md:text-5xl mb-4"><?php the_field('promise_section_heading'); ?></h2>
                    <p class="text-lg text-muted-foreground max-w-2xl mx-auto">
                        <?php the_field('promise_section_description'); ?>
                    </p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <?php if (have_rows('sevora_promises')): ?>
                        <?php while (have_rows('sevora_promises')):
                            the_row(); ?>
                            <div>
                                <div
                                    class="bg-secondary p-6 rounded-xl border border-accent/20 hover:border-accent hover:shadow-[0_16px_32px_rgba(0,0,0,0.1)] transition-all group h-full">
                                    <div
                                        class="w-14 h-14 bg-gradient-to-br from-accent to-[#C8915D] rounded-full flex items-center justify-center mb-4 text-white group-hover:scale-110 transition-all duration-200 shadow-[0_12px_24px_rgba(226,164,95,0.25)]">
                                        <?php echo get_sub_field('icon_svg'); ?>
                                    </div>
                                    <h3 class="text-lg mb-2 font-semibold"><?php the_sub_field('promise_title'); ?></h3>
                                    <p class="text-muted-foreground text-sm leading-relaxed">
                                        <?php the_sub_field('promise_description'); ?>
                                    </p>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <section class="py-16 lg:py-24 bg-gradient-to-br from-[#E2A45F]/25 via-[#E2A45F]/10 to-white overflow-hidden">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- <div class="text-center mb-8">
                                            <div
                                                class="inline-flex items-center gap-2 mb-3 px-4 py-2 bg-accent/10 border border-accent/30 rounded-full">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-sparkles w-4 h-4 text-accent"
                                                    aria-hidden="true">
                                                    <path
                                                        d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z">
                                                    </path>
                                                    <path d="M20 2v4"></path>
                                                    <path d="M22 4h-4"></path>
                                                    <circle cx="4" cy="20" r="2"></circle>
                                                </svg><span
                                                    class="text-accent uppercase tracking-wide text-sm font-semibold">Premium
                                                    Partners</span>
                                            </div>
                                            <h2 class="text-2xl md:text-3xl text-primary mb-2">Shop 100+ Premium
                                                Designer Brands</h2>
                                            <p class="text-muted-foreground">Available exclusively on the SEVORA app</p>
                                        </div> -->
                <?php
                // ACF fields for the top badge
                $badge_icon = get_field('premium_badge_icon'); // SVG or HTML
                $badge_label = get_field('premium_badge_label'); // e.g., "Premium Partners"
                
                // ACF fields for heading and description
                $section_title = get_field('premium_section_title'); // e.g., "Shop 100+ Premium Designer Brands"
                $section_desc = get_field('premium_section_description'); // e.g., "Available exclusively on the SEVORA app"
                
                // ACF repeater for stats (3 items)
                $stats = get_field('premium_stats');
                ?>

                <div class="text-center mb-8">

                    <!-- Badge -->
                    <?php if ($badge_icon || $badge_label): ?>
                        <div
                            class="inline-flex items-center gap-2 mb-3 px-4 py-2 bg-accent/10 border border-accent/30 rounded-full">
                            <?php if ($badge_icon): ?>
                                <span class="w-4 h-4" aria-hidden="true"><?php echo $badge_icon; ?></span>
                            <?php endif; ?>
                            <?php if ($badge_label): ?>
                                <span
                                    class="text-accent uppercase tracking-wide text-sm font-semibold"><?php echo esc_html($badge_label); ?></span>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

                    <!-- Heading -->
                    <?php if ($section_title): ?>
                        <h2 class="text-2xl md:text-3xl text-primary mb-2"><?php echo esc_html($section_title); ?></h2>
                    <?php endif; ?>

                    <!-- Description -->
                    <?php if ($section_desc): ?>
                        <p class="text-muted-foreground"><?php echo esc_html($section_desc); ?></p>
                    <?php endif; ?>
                </div>
                <!-- <div class="relative swiper mySwiper">

                                            <div class="flex gap-8  swiper-wrapper">
                                                <div class="flex-shrink-0 group cursor-pointer swiper-slide">
                                                    <div
                                                        class="relative bg-gradient-to-br from-white via-secondary/30 to-secondary/50 border-2 border-accent/20 rounded-xl px-6 py-6 hover:border-accent hover:shadow-[0_12px_32px_rgba(226,164,95,0.15)] transition-all duration-300 min-w-[260px] overflow-hidden group">
                                                        <div
                                                            class="absolute top-0 left-0 w-8 h-8 border-t-2 border-l-2 border-accent/40 rounded-tl-xl">
                                                        </div>
                                                        <div
                                                            class="absolute bottom-0 right-0 w-8 h-8 border-b-2 border-r-2 border-accent/40 rounded-br-xl">
                                                        </div>
                                                        <div
                                                            class="absolute inset-0 bg-gradient-to-r from-transparent via-accent/5 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-1000">
                                                        </div>
                                                        <div
                                                            class="absolute inset-0 opacity-[0.02] group-hover:opacity-[0.04] transition-opacity">
                                                        </div>
                                                        <div class="relative z-10">
                                                            <div
                                                                class="flex items-center justify-between mb-3 min-h-[24px]">
                                                                <div class="flex gap-1.5"><span data-slot="badge"
                                                                        class="inline-flex items-center justify-center rounded-md border font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden [a&amp;]:hover:bg-accent [a&amp;]:hover:text-accent-foreground text-[10px] px-2 py-0.5 bg-gradient-to-r from-accent/20 to-accent/10 border-accent/50 text-accent">
                                                                        <svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none" stroke="currentColor"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="lucide lucide-star w-2.5 h-2.5 mr-1 fill-accent"
                                                                            aria-hidden="true">
                                                                            <path
                                                                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                                            </path>
                                                                        </svg>Featured</span><span data-slot="badge"
                                                                        class="inline-flex items-center justify-center rounded-md border font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden [a&amp;]:hover:bg-accent [a&amp;]:hover:text-accent-foreground text-[10px] px-2 py-0.5 bg-gradient-to-r from-primary/20 to-primary/10 border-primary/50 text-primary"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none" stroke="currentColor"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="lucide lucide-crown w-2.5 h-2.5 mr-1"
                                                                            aria-hidden="true">
                                                                            <path
                                                                                d="M11.562 3.266a.5.5 0 0 1 .876 0L15.39 8.87a1 1 0 0 0 1.516.294L21.183 5.5a.5.5 0 0 1 .798.519l-2.834 10.246a1 1 0 0 1-.956.734H5.81a1 1 0 0 1-.957-.734L2.02 6.02a.5.5 0 0 1 .798-.519l4.276 3.664a1 1 0 0 0 1.516-.294z">
                                                                            </path>
                                                                            <path d="M5 21h14"></path>
                                                                        </svg>Exclusive</span></div>
                                                                <div><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-award w-4 h-4 text-accent/30 group-hover:text-accent/60 transition-colors"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                                                                        </path>
                                                                        <circle cx="12" cy="8" r="6"></circle>
                                                                    </svg></div>
                                                            </div>
                                                            <div class="text-center mb-3">
                                                                <div
                                                                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gradient-to-br from-accent/20 to-accent/5 border border-accent/30 mb-3 group-hover:border-accent/60 transition-colors">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-sparkles w-5 h-5 text-accent"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z">
                                                                        </path>
                                                                        <path d="M20 2v4"></path>
                                                                        <path d="M22 4h-4"></path>
                                                                        <circle cx="4" cy="20" r="2"></circle>
                                                                    </svg>
                                                                </div>
                                                                <h3
                                                                    class="text-lg font-semibold text-primary mb-1 group-hover:text-accent transition-colors">
                                                                    Sabyasachi</h3>
                                                            </div>
                                                            <div class="flex justify-center">
                                                                <div
                                                                    class="px-3 py-1.5 bg-gradient-to-r from-accent/10 via-accent/5 to-transparent border border-accent/20 rounded-full">
                                                                    <p
                                                                        class="text-xs text-muted-foreground uppercase tracking-wider">
                                                                        Indian Couture</p>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="absolute bottom-0 left-1/2 -translate-x-1/2 w-3/4 h-px bg-gradient-to-r from-transparent via-accent/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-shrink-0 group cursor-pointer swiper-slide">
                                                    <div
                                                        class="relative bg-gradient-to-br from-white via-secondary/30 to-secondary/50 border-2 border-accent/20 rounded-xl px-6 py-6 hover:border-accent hover:shadow-[0_12px_32px_rgba(226,164,95,0.15)] transition-all duration-300 min-w-[260px] overflow-hidden group">
                                                        <div
                                                            class="absolute top-0 left-0 w-8 h-8 border-t-2 border-l-2 border-accent/40 rounded-tl-xl">
                                                        </div>
                                                        <div
                                                            class="absolute bottom-0 right-0 w-8 h-8 border-b-2 border-r-2 border-accent/40 rounded-br-xl">
                                                        </div>
                                                        <div
                                                            class="absolute inset-0 bg-gradient-to-r from-transparent via-accent/5 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-1000">
                                                        </div>
                                                        <div
                                                            class="absolute inset-0 opacity-[0.02] group-hover:opacity-[0.04] transition-opacity">
                                                        </div>
                                                        <div class="relative z-10">
                                                            <div
                                                                class="flex items-center justify-between mb-3 min-h-[24px]">
                                                                <div class="flex gap-1.5"><span data-slot="badge"
                                                                        class="inline-flex items-center justify-center rounded-md border font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden [a&amp;]:hover:bg-accent [a&amp;]:hover:text-accent-foreground text-[10px] px-2 py-0.5 bg-gradient-to-r from-accent/20 to-accent/10 border-accent/50 text-accent"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none" stroke="currentColor"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="lucide lucide-star w-2.5 h-2.5 mr-1 fill-accent"
                                                                            aria-hidden="true">
                                                                            <path
                                                                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                                            </path>
                                                                        </svg>Featured</span></div>
                                                                <div><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-award w-4 h-4 text-accent/30 group-hover:text-accent/60 transition-colors"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                                                                        </path>
                                                                        <circle cx="12" cy="8" r="6"></circle>
                                                                    </svg></div>
                                                            </div>
                                                            <div class="text-center mb-3">
                                                                <div
                                                                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gradient-to-br from-accent/20 to-accent/5 border border-accent/30 mb-3 group-hover:border-accent/60 transition-colors">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-sparkles w-5 h-5 text-accent"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z">
                                                                        </path>
                                                                        <path d="M20 2v4"></path>
                                                                        <path d="M22 4h-4"></path>
                                                                        <circle cx="4" cy="20" r="2"></circle>
                                                                    </svg>
                                                                </div>
                                                                <h3
                                                                    class="text-lg font-semibold text-primary mb-1 group-hover:text-accent transition-colors">
                                                                    Manish Malhotra</h3>
                                                            </div>
                                                            <div class="flex justify-center">
                                                                <div
                                                                    class="px-3 py-1.5 bg-gradient-to-r from-accent/10 via-accent/5 to-transparent border border-accent/20 rounded-full">
                                                                    <p
                                                                        class="text-xs text-muted-foreground uppercase tracking-wider">
                                                                        Designer Wear</p>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="absolute bottom-0 left-1/2 -translate-x-1/2 w-3/4 h-px bg-gradient-to-r from-transparent via-accent/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-shrink-0 group cursor-pointer swiper-slide">
                                                    <div
                                                        class="relative bg-gradient-to-br from-white via-secondary/30 to-secondary/50 border-2 border-accent/20 rounded-xl px-6 py-6 hover:border-accent hover:shadow-[0_12px_32px_rgba(226,164,95,0.15)] transition-all duration-300 min-w-[260px] overflow-hidden group">
                                                        <div
                                                            class="absolute top-0 left-0 w-8 h-8 border-t-2 border-l-2 border-accent/40 rounded-tl-xl">
                                                        </div>
                                                        <div
                                                            class="absolute bottom-0 right-0 w-8 h-8 border-b-2 border-r-2 border-accent/40 rounded-br-xl">
                                                        </div>
                                                        <div
                                                            class="absolute inset-0 bg-gradient-to-r from-transparent via-accent/5 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-1000">
                                                        </div>
                                                        <div
                                                            class="absolute inset-0 opacity-[0.02] group-hover:opacity-[0.04] transition-opacity">
                                                        </div>
                                                        <div class="relative z-10">
                                                            <div
                                                                class="flex items-center justify-between mb-3 min-h-[24px]">
                                                                <div class="flex gap-1.5"><span data-slot="badge"
                                                                        class="inline-flex items-center justify-center rounded-md border font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden [a&amp;]:hover:bg-accent [a&amp;]:hover:text-accent-foreground text-[10px] px-2 py-0.5 bg-gradient-to-r from-primary/20 to-primary/10 border-primary/50 text-primary"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none" stroke="currentColor"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="lucide lucide-crown w-2.5 h-2.5 mr-1"
                                                                            aria-hidden="true">
                                                                            <path
                                                                                d="M11.562 3.266a.5.5 0 0 1 .876 0L15.39 8.87a1 1 0 0 0 1.516.294L21.183 5.5a.5.5 0 0 1 .798.519l-2.834 10.246a1 1 0 0 1-.956.734H5.81a1 1 0 0 1-.957-.734L2.02 6.02a.5.5 0 0 1 .798-.519l4.276 3.664a1 1 0 0 0 1.516-.294z">
                                                                            </path>
                                                                            <path d="M5 21h14"></path>
                                                                        </svg>Exclusive</span></div>
                                                                <div><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-award w-4 h-4 text-accent/30 group-hover:text-accent/60 transition-colors"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                                                                        </path>
                                                                        <circle cx="12" cy="8" r="6"></circle>
                                                                    </svg></div>
                                                            </div>
                                                            <div class="text-center mb-3">
                                                                <div
                                                                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gradient-to-br from-accent/20 to-accent/5 border border-accent/30 mb-3 group-hover:border-accent/60 transition-colors">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-sparkles w-5 h-5 text-accent"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z">
                                                                        </path>
                                                                        <path d="M20 2v4"></path>
                                                                        <path d="M22 4h-4"></path>
                                                                        <circle cx="4" cy="20" r="2"></circle>
                                                                    </svg>
                                                                </div>
                                                                <h3
                                                                    class="text-lg font-semibold text-primary mb-1 group-hover:text-accent transition-colors">
                                                                    Anita Dongre</h3>
                                                            </div>
                                                            <div class="flex justify-center">
                                                                <div
                                                                    class="px-3 py-1.5 bg-gradient-to-r from-accent/10 via-accent/5 to-transparent border border-accent/20 rounded-full">
                                                                    <p
                                                                        class="text-xs text-muted-foreground uppercase tracking-wider">
                                                                        Sustainable Luxury</p>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="absolute bottom-0 left-1/2 -translate-x-1/2 w-3/4 h-px bg-gradient-to-r from-transparent via-accent/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-shrink-0 group cursor-pointer swiper-slide">
                                                    <div
                                                        class="relative bg-gradient-to-br from-white via-secondary/30 to-secondary/50 border-2 border-accent/20 rounded-xl px-6 py-6 hover:border-accent hover:shadow-[0_12px_32px_rgba(226,164,95,0.15)] transition-all duration-300 min-w-[260px] overflow-hidden group">
                                                        <div
                                                            class="absolute top-0 left-0 w-8 h-8 border-t-2 border-l-2 border-accent/40 rounded-tl-xl">
                                                        </div>
                                                        <div
                                                            class="absolute bottom-0 right-0 w-8 h-8 border-b-2 border-r-2 border-accent/40 rounded-br-xl">
                                                        </div>
                                                        <div
                                                            class="absolute inset-0 bg-gradient-to-r from-transparent via-accent/5 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-1000">
                                                        </div>
                                                        <div
                                                            class="absolute inset-0 opacity-[0.02] group-hover:opacity-[0.04] transition-opacity">
                                                        </div>
                                                        <div class="relative z-10">
                                                            <div
                                                                class="flex items-center justify-between mb-3 min-h-[24px]">
                                                                <div class="flex gap-1.5"></div>
                                                                <div><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-award w-4 h-4 text-accent/30 group-hover:text-accent/60 transition-colors"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                                                                        </path>
                                                                        <circle cx="12" cy="8" r="6"></circle>
                                                                    </svg></div>
                                                            </div>
                                                            <div class="text-center mb-3">
                                                                <div
                                                                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gradient-to-br from-accent/20 to-accent/5 border border-accent/30 mb-3 group-hover:border-accent/60 transition-colors">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-sparkles w-5 h-5 text-accent"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z">
                                                                        </path>
                                                                        <path d="M20 2v4"></path>
                                                                        <path d="M22 4h-4"></path>
                                                                        <circle cx="4" cy="20" r="2"></circle>
                                                                    </svg>
                                                                </div>
                                                                <h3
                                                                    class="text-lg font-semibold text-primary mb-1 group-hover:text-accent transition-colors">
                                                                    Raw Mango</h3>
                                                            </div>
                                                            <div class="flex justify-center">
                                                                <div
                                                                    class="px-3 py-1.5 bg-gradient-to-r from-accent/10 via-accent/5 to-transparent border border-accent/20 rounded-full">
                                                                    <p
                                                                        class="text-xs text-muted-foreground uppercase tracking-wider">
                                                                        Contemporary Indian</p>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="absolute bottom-0 left-1/2 -translate-x-1/2 w-3/4 h-px bg-gradient-to-r from-transparent via-accent/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-shrink-0 group cursor-pointer swiper-slide">
                                                    <div
                                                        class="relative bg-gradient-to-br from-white via-secondary/30 to-secondary/50 border-2 border-accent/20 rounded-xl px-6 py-6 hover:border-accent hover:shadow-[0_12px_32px_rgba(226,164,95,0.15)] transition-all duration-300 min-w-[260px] overflow-hidden group">
                                                        <div
                                                            class="absolute top-0 left-0 w-8 h-8 border-t-2 border-l-2 border-accent/40 rounded-tl-xl">
                                                        </div>
                                                        <div
                                                            class="absolute bottom-0 right-0 w-8 h-8 border-b-2 border-r-2 border-accent/40 rounded-br-xl">
                                                        </div>
                                                        <div
                                                            class="absolute inset-0 bg-gradient-to-r from-transparent via-accent/5 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-1000">
                                                        </div>
                                                        <div
                                                            class="absolute inset-0 opacity-[0.02] group-hover:opacity-[0.04] transition-opacity">
                                                        </div>
                                                        <div class="relative z-10">
                                                            <div
                                                                class="flex items-center justify-between mb-3 min-h-[24px]">
                                                                <div class="flex gap-1.5"><span data-slot="badge"
                                                                        class="inline-flex items-center justify-center rounded-md border font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden [a&amp;]:hover:bg-accent [a&amp;]:hover:text-accent-foreground text-[10px] px-2 py-0.5 bg-gradient-to-r from-accent/20 to-accent/10 border-accent/50 text-accent"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none" stroke="currentColor"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="lucide lucide-star w-2.5 h-2.5 mr-1 fill-accent"
                                                                            aria-hidden="true">
                                                                            <path
                                                                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                                            </path>
                                                                        </svg>Featured</span></div>
                                                                <div><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-award w-4 h-4 text-accent/30 group-hover:text-accent/60 transition-colors"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                                                                        </path>
                                                                        <circle cx="12" cy="8" r="6"></circle>
                                                                    </svg></div>
                                                            </div>
                                                            <div class="text-center mb-3">
                                                                <div
                                                                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gradient-to-br from-accent/20 to-accent/5 border border-accent/30 mb-3 group-hover:border-accent/60 transition-colors">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-sparkles w-5 h-5 text-accent"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z">
                                                                        </path>
                                                                        <path d="M20 2v4"></path>
                                                                        <path d="M22 4h-4"></path>
                                                                        <circle cx="4" cy="20" r="2"></circle>
                                                                    </svg>
                                                                </div>
                                                                <h3
                                                                    class="text-lg font-semibold text-primary mb-1 group-hover:text-accent transition-colors">
                                                                    Tarun Tahiliani</h3>
                                                            </div>
                                                            <div class="flex justify-center">
                                                                <div
                                                                    class="px-3 py-1.5 bg-gradient-to-r from-accent/10 via-accent/5 to-transparent border border-accent/20 rounded-full">
                                                                    <p
                                                                        class="text-xs text-muted-foreground uppercase tracking-wider">
                                                                        Bridal Couture</p>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="absolute bottom-0 left-1/2 -translate-x-1/2 w-3/4 h-px bg-gradient-to-r from-transparent via-accent/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-shrink-0 group cursor-pointer swiper-slide">
                                                    <div
                                                        class="relative bg-gradient-to-br from-white via-secondary/30 to-secondary/50 border-2 border-accent/20 rounded-xl px-6 py-6 hover:border-accent hover:shadow-[0_12px_32px_rgba(226,164,95,0.15)] transition-all duration-300 min-w-[260px] overflow-hidden group">
                                                        <div
                                                            class="absolute top-0 left-0 w-8 h-8 border-t-2 border-l-2 border-accent/40 rounded-tl-xl">
                                                        </div>
                                                        <div
                                                            class="absolute bottom-0 right-0 w-8 h-8 border-b-2 border-r-2 border-accent/40 rounded-br-xl">
                                                        </div>
                                                        <div
                                                            class="absolute inset-0 bg-gradient-to-r from-transparent via-accent/5 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-1000">
                                                        </div>
                                                        <div
                                                            class="absolute inset-0 opacity-[0.02] group-hover:opacity-[0.04] transition-opacity">
                                                        </div>
                                                        <div class="relative z-10">
                                                            <div
                                                                class="flex items-center justify-between mb-3 min-h-[24px]">
                                                                <div class="flex gap-1.5"></div>
                                                                <div><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-award w-4 h-4 text-accent/30 group-hover:text-accent/60 transition-colors"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                                                                        </path>
                                                                        <circle cx="12" cy="8" r="6"></circle>
                                                                    </svg></div>
                                                            </div>
                                                            <div class="text-center mb-3">
                                                                <div
                                                                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gradient-to-br from-accent/20 to-accent/5 border border-accent/30 mb-3 group-hover:border-accent/60 transition-colors">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-sparkles w-5 h-5 text-accent"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z">
                                                                        </path>
                                                                        <path d="M20 2v4"></path>
                                                                        <path d="M22 4h-4"></path>
                                                                        <circle cx="4" cy="20" r="2"></circle>
                                                                    </svg>
                                                                </div>
                                                                <h3
                                                                    class="text-lg font-semibold text-primary mb-1 group-hover:text-accent transition-colors">
                                                                    Abu Jani Sandeep Khosla</h3>
                                                            </div>
                                                            <div class="flex justify-center">
                                                                <div
                                                                    class="px-3 py-1.5 bg-gradient-to-r from-accent/10 via-accent/5 to-transparent border border-accent/20 rounded-full">
                                                                    <p
                                                                        class="text-xs text-muted-foreground uppercase tracking-wider">
                                                                        Heritage Fashion</p>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="absolute bottom-0 left-1/2 -translate-x-1/2 w-3/4 h-px bg-gradient-to-r from-transparent via-accent/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-shrink-0 group cursor-pointer swiper-slide">
                                                    <div
                                                        class="relative bg-gradient-to-br from-white via-secondary/30 to-secondary/50 border-2 border-accent/20 rounded-xl px-6 py-6 hover:border-accent hover:shadow-[0_12px_32px_rgba(226,164,95,0.15)] transition-all duration-300 min-w-[260px] overflow-hidden group">
                                                        <div
                                                            class="absolute top-0 left-0 w-8 h-8 border-t-2 border-l-2 border-accent/40 rounded-tl-xl">
                                                        </div>
                                                        <div
                                                            class="absolute bottom-0 right-0 w-8 h-8 border-b-2 border-r-2 border-accent/40 rounded-br-xl">
                                                        </div>
                                                        <div
                                                            class="absolute inset-0 bg-gradient-to-r from-transparent via-accent/5 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-1000">
                                                        </div>
                                                        <div
                                                            class="absolute inset-0 opacity-[0.02] group-hover:opacity-[0.04] transition-opacity">
                                                        </div>
                                                        <div class="relative z-10">
                                                            <div
                                                                class="flex items-center justify-between mb-3 min-h-[24px]">
                                                                <div class="flex gap-1.5"></div>
                                                                <div><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-award w-4 h-4 text-accent/30 group-hover:text-accent/60 transition-colors"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                                                                        </path>
                                                                        <circle cx="12" cy="8" r="6"></circle>
                                                                    </svg></div>
                                                            </div>
                                                            <div class="text-center mb-3">
                                                                <div
                                                                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gradient-to-br from-accent/20 to-accent/5 border border-accent/30 mb-3 group-hover:border-accent/60 transition-colors">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-sparkles w-5 h-5 text-accent"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z">
                                                                        </path>
                                                                        <path d="M20 2v4"></path>
                                                                        <path d="M22 4h-4"></path>
                                                                        <circle cx="4" cy="20" r="2"></circle>
                                                                    </svg>
                                                                </div>
                                                                <h3
                                                                    class="text-lg font-semibold text-primary mb-1 group-hover:text-accent transition-colors">
                                                                    Ritu Kumar</h3>
                                                            </div>
                                                            <div class="flex justify-center">
                                                                <div
                                                                    class="px-3 py-1.5 bg-gradient-to-r from-accent/10 via-accent/5 to-transparent border border-accent/20 rounded-full">
                                                                    <p
                                                                        class="text-xs text-muted-foreground uppercase tracking-wider">
                                                                        Traditional Elegance</p>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="absolute bottom-0 left-1/2 -translate-x-1/2 w-3/4 h-px bg-gradient-to-r from-transparent via-accent/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-shrink-0 group cursor-pointer swiper-slide">
                                                    <div
                                                        class="relative bg-gradient-to-br from-white via-secondary/30 to-secondary/50 border-2 border-accent/20 rounded-xl px-6 py-6 hover:border-accent hover:shadow-[0_12px_32px_rgba(226,164,95,0.15)] transition-all duration-300 min-w-[260px] overflow-hidden group">
                                                        <div
                                                            class="absolute top-0 left-0 w-8 h-8 border-t-2 border-l-2 border-accent/40 rounded-tl-xl">
                                                        </div>
                                                        <div
                                                            class="absolute bottom-0 right-0 w-8 h-8 border-b-2 border-r-2 border-accent/40 rounded-br-xl">
                                                        </div>
                                                        <div
                                                            class="absolute inset-0 bg-gradient-to-r from-transparent via-accent/5 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-1000">
                                                        </div>
                                                        <div
                                                            class="absolute inset-0 opacity-[0.02] group-hover:opacity-[0.04] transition-opacity">
                                                        </div>
                                                        <div class="relative z-10">
                                                            <div
                                                                class="flex items-center justify-between mb-3 min-h-[24px]">
                                                                <div class="flex gap-1.5"></div>
                                                                <div><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-award w-4 h-4 text-accent/30 group-hover:text-accent/60 transition-colors"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                                                                        </path>
                                                                        <circle cx="12" cy="8" r="6"></circle>
                                                                    </svg></div>
                                                            </div>
                                                            <div class="text-center mb-3">
                                                                <div
                                                                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gradient-to-br from-accent/20 to-accent/5 border border-accent/30 mb-3 group-hover:border-accent/60 transition-colors">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-sparkles w-5 h-5 text-accent"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z">
                                                                        </path>
                                                                        <path d="M20 2v4"></path>
                                                                        <path d="M22 4h-4"></path>
                                                                        <circle cx="4" cy="20" r="2"></circle>
                                                                    </svg>
                                                                </div>
                                                                <h3
                                                                    class="text-lg font-semibold text-primary mb-1 group-hover:text-accent transition-colors">
                                                                    Masaba Gupta</h3>
                                                            </div>
                                                            <div class="flex justify-center">
                                                                <div
                                                                    class="px-3 py-1.5 bg-gradient-to-r from-accent/10 via-accent/5 to-transparent border border-accent/20 rounded-full">
                                                                    <p
                                                                        class="text-xs text-muted-foreground uppercase tracking-wider">
                                                                        Modern Fusion</p>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="absolute bottom-0 left-1/2 -translate-x-1/2 w-3/4 h-px bg-gradient-to-r from-transparent via-accent/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-shrink-0 group cursor-pointer swiper-slide">
                                                    <div
                                                        class="relative bg-gradient-to-br from-white via-secondary/30 to-secondary/50 border-2 border-accent/20 rounded-xl px-6 py-6 hover:border-accent hover:shadow-[0_12px_32px_rgba(226,164,95,0.15)] transition-all duration-300 min-w-[260px] overflow-hidden group">
                                                        <div
                                                            class="absolute top-0 left-0 w-8 h-8 border-t-2 border-l-2 border-accent/40 rounded-tl-xl">
                                                        </div>
                                                        <div
                                                            class="absolute bottom-0 right-0 w-8 h-8 border-b-2 border-r-2 border-accent/40 rounded-br-xl">
                                                        </div>
                                                        <div
                                                            class="absolute inset-0 bg-gradient-to-r from-transparent via-accent/5 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-1000">
                                                        </div>
                                                        <div
                                                            class="absolute inset-0 opacity-[0.02] group-hover:opacity-[0.04] transition-opacity">
                                                        </div>
                                                        <div class="relative z-10">
                                                            <div
                                                                class="flex items-center justify-between mb-3 min-h-[24px]">
                                                                <div class="flex gap-1.5"></div>
                                                                <div><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-award w-4 h-4 text-accent/30 group-hover:text-accent/60 transition-colors"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                                                                        </path>
                                                                        <circle cx="12" cy="8" r="6"></circle>
                                                                    </svg></div>
                                                            </div>
                                                            <div class="text-center mb-3">
                                                                <div
                                                                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gradient-to-br from-accent/20 to-accent/5 border border-accent/30 mb-3 group-hover:border-accent/60 transition-colors">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-sparkles w-5 h-5 text-accent"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z">
                                                                        </path>
                                                                        <path d="M20 2v4"></path>
                                                                        <path d="M22 4h-4"></path>
                                                                        <circle cx="4" cy="20" r="2"></circle>
                                                                    </svg>
                                                                </div>
                                                                <h3
                                                                    class="text-lg font-semibold text-primary mb-1 group-hover:text-accent transition-colors">
                                                                    Payal Singhal</h3>
                                                            </div>
                                                            <div class="flex justify-center">
                                                                <div
                                                                    class="px-3 py-1.5 bg-gradient-to-r from-accent/10 via-accent/5 to-transparent border border-accent/20 rounded-full">
                                                                    <p
                                                                        class="text-xs text-muted-foreground uppercase tracking-wider">
                                                                        Indo-Western</p>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="absolute bottom-0 left-1/2 -translate-x-1/2 w-3/4 h-px bg-gradient-to-r from-transparent via-accent/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-shrink-0 group cursor-pointer swiper-slide">
                                                    <div
                                                        class="relative bg-gradient-to-br from-white via-secondary/30 to-secondary/50 border-2 border-accent/20 rounded-xl px-6 py-6 hover:border-accent hover:shadow-[0_12px_32px_rgba(226,164,95,0.15)] transition-all duration-300 min-w-[260px] overflow-hidden group">
                                                        <div
                                                            class="absolute top-0 left-0 w-8 h-8 border-t-2 border-l-2 border-accent/40 rounded-tl-xl">
                                                        </div>
                                                        <div
                                                            class="absolute bottom-0 right-0 w-8 h-8 border-b-2 border-r-2 border-accent/40 rounded-br-xl">
                                                        </div>
                                                        <div
                                                            class="absolute inset-0 bg-gradient-to-r from-transparent via-accent/5 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-1000">
                                                        </div>
                                                        <div
                                                            class="absolute inset-0 opacity-[0.02] group-hover:opacity-[0.04] transition-opacity">
                                                        </div>
                                                        <div class="relative z-10">
                                                            <div
                                                                class="flex items-center justify-between mb-3 min-h-[24px]">
                                                                <div class="flex gap-1.5"><span data-slot="badge"
                                                                        class="inline-flex items-center justify-center rounded-md border font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden [a&amp;]:hover:bg-accent [a&amp;]:hover:text-accent-foreground text-[10px] px-2 py-0.5 bg-gradient-to-r from-primary/20 to-primary/10 border-primary/50 text-primary"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none" stroke="currentColor"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="lucide lucide-crown w-2.5 h-2.5 mr-1"
                                                                            aria-hidden="true">
                                                                            <path
                                                                                d="M11.562 3.266a.5.5 0 0 1 .876 0L15.39 8.87a1 1 0 0 0 1.516.294L21.183 5.5a.5.5 0 0 1 .798.519l-2.834 10.246a1 1 0 0 1-.956.734H5.81a1 1 0 0 1-.957-.734L2.02 6.02a.5.5 0 0 1 .798-.519l4.276 3.664a1 1 0 0 0 1.516-.294z">
                                                                            </path>
                                                                            <path d="M5 21h14"></path>
                                                                        </svg>Exclusive</span></div>
                                                                <div><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-award w-4 h-4 text-accent/30 group-hover:text-accent/60 transition-colors"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                                                                        </path>
                                                                        <circle cx="12" cy="8" r="6"></circle>
                                                                    </svg></div>
                                                            </div>
                                                            <div class="text-center mb-3">
                                                                <div
                                                                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gradient-to-br from-accent/20 to-accent/5 border border-accent/30 mb-3 group-hover:border-accent/60 transition-colors">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-sparkles w-5 h-5 text-accent"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z">
                                                                        </path>
                                                                        <path d="M20 2v4"></path>
                                                                        <path d="M22 4h-4"></path>
                                                                        <circle cx="4" cy="20" r="2"></circle>
                                                                    </svg>
                                                                </div>
                                                                <h3
                                                                    class="text-lg font-semibold text-primary mb-1 group-hover:text-accent transition-colors">
                                                                    Rahul Mishra</h3>
                                                            </div>
                                                            <div class="flex justify-center">
                                                                <div
                                                                    class="px-3 py-1.5 bg-gradient-to-r from-accent/10 via-accent/5 to-transparent border border-accent/20 rounded-full">
                                                                    <p
                                                                        class="text-xs text-muted-foreground uppercase tracking-wider">
                                                                        Haute Couture</p>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="absolute bottom-0 left-1/2 -translate-x-1/2 w-3/4 h-px bg-gradient-to-r from-transparent via-accent/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-shrink-0 group cursor-pointer swiper-slide">
                                                    <div
                                                        class="relative bg-gradient-to-br from-white via-secondary/30 to-secondary/50 border-2 border-accent/20 rounded-xl px-6 py-6 hover:border-accent hover:shadow-[0_12px_32px_rgba(226,164,95,0.15)] transition-all duration-300 min-w-[260px] overflow-hidden group">
                                                        <div
                                                            class="absolute top-0 left-0 w-8 h-8 border-t-2 border-l-2 border-accent/40 rounded-tl-xl">
                                                        </div>
                                                        <div
                                                            class="absolute bottom-0 right-0 w-8 h-8 border-b-2 border-r-2 border-accent/40 rounded-br-xl">
                                                        </div>
                                                        <div
                                                            class="absolute inset-0 bg-gradient-to-r from-transparent via-accent/5 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-1000">
                                                        </div>
                                                        <div
                                                            class="absolute inset-0 opacity-[0.02] group-hover:opacity-[0.04] transition-opacity">
                                                        </div>
                                                        <div class="relative z-10">
                                                            <div
                                                                class="flex items-center justify-between mb-3 min-h-[24px]">
                                                                <div class="flex gap-1.5"></div>
                                                                <div><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-award w-4 h-4 text-accent/30 group-hover:text-accent/60 transition-colors"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                                                                        </path>
                                                                        <circle cx="12" cy="8" r="6"></circle>
                                                                    </svg></div>
                                                            </div>
                                                            <div class="text-center mb-3">
                                                                <div
                                                                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gradient-to-br from-accent/20 to-accent/5 border border-accent/30 mb-3 group-hover:border-accent/60 transition-colors">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-sparkles w-5 h-5 text-accent"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z">
                                                                        </path>
                                                                        <path d="M20 2v4"></path>
                                                                        <path d="M22 4h-4"></path>
                                                                        <circle cx="4" cy="20" r="2"></circle>
                                                                    </svg>
                                                                </div>
                                                                <h3
                                                                    class="text-lg font-semibold text-primary mb-1 group-hover:text-accent transition-colors">
                                                                    Good Earth</h3>
                                                            </div>
                                                            <div class="flex justify-center">
                                                                <div
                                                                    class="px-3 py-1.5 bg-gradient-to-r from-accent/10 via-accent/5 to-transparent border border-accent/20 rounded-full">
                                                                    <p
                                                                        class="text-xs text-muted-foreground uppercase tracking-wider">
                                                                        Artisanal Luxury</p>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="absolute bottom-0 left-1/2 -translate-x-1/2 w-3/4 h-px bg-gradient-to-r from-transparent via-accent/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-shrink-0 group cursor-pointer swiper-slide">
                                                    <div
                                                        class="relative bg-gradient-to-br from-white via-secondary/30 to-secondary/50 border-2 border-accent/20 rounded-xl px-6 py-6 hover:border-accent hover:shadow-[0_12px_32px_rgba(226,164,95,0.15)] transition-all duration-300 min-w-[260px] overflow-hidden group">
                                                        <div
                                                            class="absolute top-0 left-0 w-8 h-8 border-t-2 border-l-2 border-accent/40 rounded-tl-xl">
                                                        </div>
                                                        <div
                                                            class="absolute bottom-0 right-0 w-8 h-8 border-b-2 border-r-2 border-accent/40 rounded-br-xl">
                                                        </div>
                                                        <div
                                                            class="absolute inset-0 bg-gradient-to-r from-transparent via-accent/5 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-1000">
                                                        </div>
                                                        <div
                                                            class="absolute inset-0 opacity-[0.02] group-hover:opacity-[0.04] transition-opacity">
                                                        </div>
                                                        <div class="relative z-10">
                                                            <div
                                                                class="flex items-center justify-between mb-3 min-h-[24px]">
                                                                <div class="flex gap-1.5"><span data-slot="badge"
                                                                        class="inline-flex items-center justify-center rounded-md border font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden [a&amp;]:hover:bg-accent [a&amp;]:hover:text-accent-foreground text-[10px] px-2 py-0.5 bg-gradient-to-r from-accent/20 to-accent/10 border-accent/50 text-accent"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none" stroke="currentColor"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="lucide lucide-star w-2.5 h-2.5 mr-1 fill-accent"
                                                                            aria-hidden="true">
                                                                            <path
                                                                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                                            </path>
                                                                        </svg>Featured</span></div>
                                                                <div><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-award w-4 h-4 text-accent/30 group-hover:text-accent/60 transition-colors"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                                                                        </path>
                                                                        <circle cx="12" cy="8" r="6"></circle>
                                                                    </svg></div>
                                                            </div>
                                                            <div class="text-center mb-3">
                                                                <div
                                                                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gradient-to-br from-accent/20 to-accent/5 border border-accent/30 mb-3 group-hover:border-accent/60 transition-colors">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-sparkles w-5 h-5 text-accent"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z">
                                                                        </path>
                                                                        <path d="M20 2v4"></path>
                                                                        <path d="M22 4h-4"></path>
                                                                        <circle cx="4" cy="20" r="2"></circle>
                                                                    </svg>
                                                                </div>
                                                                <h3
                                                                    class="text-lg font-semibold text-primary mb-1 group-hover:text-accent transition-colors">
                                                                    Anamika Khanna</h3>
                                                            </div>
                                                            <div class="flex justify-center">
                                                                <div
                                                                    class="px-3 py-1.5 bg-gradient-to-r from-accent/10 via-accent/5 to-transparent border border-accent/20 rounded-full">
                                                                    <p
                                                                        class="text-xs text-muted-foreground uppercase tracking-wider">
                                                                        Contemporary</p>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="absolute bottom-0 left-1/2 -translate-x-1/2 w-3/4 h-px bg-gradient-to-r from-transparent via-accent/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-shrink-0 group cursor-pointer swiper-slide">
                                                    <div
                                                        class="relative bg-gradient-to-br from-white via-secondary/30 to-secondary/50 border-2 border-accent/20 rounded-xl px-6 py-6 hover:border-accent hover:shadow-[0_12px_32px_rgba(226,164,95,0.15)] transition-all duration-300 min-w-[260px] overflow-hidden group">
                                                        <div
                                                            class="absolute top-0 left-0 w-8 h-8 border-t-2 border-l-2 border-accent/40 rounded-tl-xl">
                                                        </div>
                                                        <div
                                                            class="absolute bottom-0 right-0 w-8 h-8 border-b-2 border-r-2 border-accent/40 rounded-br-xl">
                                                        </div>
                                                        <div
                                                            class="absolute inset-0 bg-gradient-to-r from-transparent via-accent/5 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-1000">
                                                        </div>
                                                        <div
                                                            class="absolute inset-0 opacity-[0.02] group-hover:opacity-[0.04] transition-opacity">
                                                        </div>
                                                        <div class="relative z-10">
                                                            <div
                                                                class="flex items-center justify-between mb-3 min-h-[24px]">
                                                                <div class="flex gap-1.5"><span data-slot="badge"
                                                                        class="inline-flex items-center justify-center rounded-md border font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden [a&amp;]:hover:bg-accent [a&amp;]:hover:text-accent-foreground text-[10px] px-2 py-0.5 bg-gradient-to-r from-accent/20 to-accent/10 border-accent/50 text-accent"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none" stroke="currentColor"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="lucide lucide-star w-2.5 h-2.5 mr-1 fill-accent"
                                                                            aria-hidden="true">
                                                                            <path
                                                                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                                            </path>
                                                                        </svg>Featured</span><span data-slot="badge"
                                                                        class="inline-flex items-center justify-center rounded-md border font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden [a&amp;]:hover:bg-accent [a&amp;]:hover:text-accent-foreground text-[10px] px-2 py-0.5 bg-gradient-to-r from-primary/20 to-primary/10 border-primary/50 text-primary"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none" stroke="currentColor"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="lucide lucide-crown w-2.5 h-2.5 mr-1"
                                                                            aria-hidden="true">
                                                                            <path
                                                                                d="M11.562 3.266a.5.5 0 0 1 .876 0L15.39 8.87a1 1 0 0 0 1.516.294L21.183 5.5a.5.5 0 0 1 .798.519l-2.834 10.246a1 1 0 0 1-.956.734H5.81a1 1 0 0 1-.957-.734L2.02 6.02a.5.5 0 0 1 .798-.519l4.276 3.664a1 1 0 0 0 1.516-.294z">
                                                                            </path>
                                                                            <path d="M5 21h14"></path>
                                                                        </svg>Exclusive</span></div>
                                                                <div><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-award w-4 h-4 text-accent/30 group-hover:text-accent/60 transition-colors"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                                                                        </path>
                                                                        <circle cx="12" cy="8" r="6"></circle>
                                                                    </svg></div>
                                                            </div>
                                                            <div class="text-center mb-3">
                                                                <div
                                                                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gradient-to-br from-accent/20 to-accent/5 border border-accent/30 mb-3 group-hover:border-accent/60 transition-colors">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-sparkles w-5 h-5 text-accent"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z">
                                                                        </path>
                                                                        <path d="M20 2v4"></path>
                                                                        <path d="M22 4h-4"></path>
                                                                        <circle cx="4" cy="20" r="2"></circle>
                                                                    </svg>
                                                                </div>
                                                                <h3
                                                                    class="text-lg font-semibold text-primary mb-1 group-hover:text-accent transition-colors">
                                                                    Sabyasachi</h3>
                                                            </div>
                                                            <div class="flex justify-center">
                                                                <div
                                                                    class="px-3 py-1.5 bg-gradient-to-r from-accent/10 via-accent/5 to-transparent border border-accent/20 rounded-full">
                                                                    <p
                                                                        class="text-xs text-muted-foreground uppercase tracking-wider">
                                                                        Indian Couture</p>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="absolute bottom-0 left-1/2 -translate-x-1/2 w-3/4 h-px bg-gradient-to-r from-transparent via-accent/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-shrink-0 group cursor-pointer swiper-slide">
                                                    <div
                                                        class="relative bg-gradient-to-br from-white via-secondary/30 to-secondary/50 border-2 border-accent/20 rounded-xl px-6 py-6 hover:border-accent hover:shadow-[0_12px_32px_rgba(226,164,95,0.15)] transition-all duration-300 min-w-[260px] overflow-hidden group">
                                                        <div
                                                            class="absolute top-0 left-0 w-8 h-8 border-t-2 border-l-2 border-accent/40 rounded-tl-xl">
                                                        </div>
                                                        <div
                                                            class="absolute bottom-0 right-0 w-8 h-8 border-b-2 border-r-2 border-accent/40 rounded-br-xl">
                                                        </div>
                                                        <div
                                                            class="absolute inset-0 bg-gradient-to-r from-transparent via-accent/5 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-1000">
                                                        </div>
                                                        <div
                                                            class="absolute inset-0 opacity-[0.02] group-hover:opacity-[0.04] transition-opacity">
                                                        </div>
                                                        <div class="relative z-10">
                                                            <div
                                                                class="flex items-center justify-between mb-3 min-h-[24px]">
                                                                <div class="flex gap-1.5"><span data-slot="badge"
                                                                        class="inline-flex items-center justify-center rounded-md border font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden [a&amp;]:hover:bg-accent [a&amp;]:hover:text-accent-foreground text-[10px] px-2 py-0.5 bg-gradient-to-r from-accent/20 to-accent/10 border-accent/50 text-accent"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none" stroke="currentColor"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="lucide lucide-star w-2.5 h-2.5 mr-1 fill-accent"
                                                                            aria-hidden="true">
                                                                            <path
                                                                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                                            </path>
                                                                        </svg>Featured</span></div>
                                                                <div><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-award w-4 h-4 text-accent/30 group-hover:text-accent/60 transition-colors"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                                                                        </path>
                                                                        <circle cx="12" cy="8" r="6"></circle>
                                                                    </svg></div>
                                                            </div>
                                                            <div class="text-center mb-3">
                                                                <div
                                                                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gradient-to-br from-accent/20 to-accent/5 border border-accent/30 mb-3 group-hover:border-accent/60 transition-colors">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-sparkles w-5 h-5 text-accent"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z">
                                                                        </path>
                                                                        <path d="M20 2v4"></path>
                                                                        <path d="M22 4h-4"></path>
                                                                        <circle cx="4" cy="20" r="2"></circle>
                                                                    </svg>
                                                                </div>
                                                                <h3
                                                                    class="text-lg font-semibold text-primary mb-1 group-hover:text-accent transition-colors">
                                                                    Manish Malhotra</h3>
                                                            </div>
                                                            <div class="flex justify-center">
                                                                <div
                                                                    class="px-3 py-1.5 bg-gradient-to-r from-accent/10 via-accent/5 to-transparent border border-accent/20 rounded-full">
                                                                    <p
                                                                        class="text-xs text-muted-foreground uppercase tracking-wider">
                                                                        Designer Wear</p>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="absolute bottom-0 left-1/2 -translate-x-1/2 w-3/4 h-px bg-gradient-to-r from-transparent via-accent/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-shrink-0 group cursor-pointer swiper-slide">
                                                    <div
                                                        class="relative bg-gradient-to-br from-white via-secondary/30 to-secondary/50 border-2 border-accent/20 rounded-xl px-6 py-6 hover:border-accent hover:shadow-[0_12px_32px_rgba(226,164,95,0.15)] transition-all duration-300 min-w-[260px] overflow-hidden group">
                                                        <div
                                                            class="absolute top-0 left-0 w-8 h-8 border-t-2 border-l-2 border-accent/40 rounded-tl-xl">
                                                        </div>
                                                        <div
                                                            class="absolute bottom-0 right-0 w-8 h-8 border-b-2 border-r-2 border-accent/40 rounded-br-xl">
                                                        </div>
                                                        <div
                                                            class="absolute inset-0 bg-gradient-to-r from-transparent via-accent/5 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-1000">
                                                        </div>
                                                        <div
                                                            class="absolute inset-0 opacity-[0.02] group-hover:opacity-[0.04] transition-opacity">
                                                        </div>
                                                        <div class="relative z-10">
                                                            <div
                                                                class="flex items-center justify-between mb-3 min-h-[24px]">
                                                                <div class="flex gap-1.5"><span data-slot="badge"
                                                                        class="inline-flex items-center justify-center rounded-md border font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden [a&amp;]:hover:bg-accent [a&amp;]:hover:text-accent-foreground text-[10px] px-2 py-0.5 bg-gradient-to-r from-primary/20 to-primary/10 border-primary/50 text-primary"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none" stroke="currentColor"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="lucide lucide-crown w-2.5 h-2.5 mr-1"
                                                                            aria-hidden="true">
                                                                            <path
                                                                                d="M11.562 3.266a.5.5 0 0 1 .876 0L15.39 8.87a1 1 0 0 0 1.516.294L21.183 5.5a.5.5 0 0 1 .798.519l-2.834 10.246a1 1 0 0 1-.956.734H5.81a1 1 0 0 1-.957-.734L2.02 6.02a.5.5 0 0 1 .798-.519l4.276 3.664a1 1 0 0 0 1.516-.294z">
                                                                            </path>
                                                                            <path d="M5 21h14"></path>
                                                                        </svg>Exclusive</span></div>
                                                                <div><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-award w-4 h-4 text-accent/30 group-hover:text-accent/60 transition-colors"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                                                                        </path>
                                                                        <circle cx="12" cy="8" r="6"></circle>
                                                                    </svg></div>
                                                            </div>
                                                            <div class="text-center mb-3">
                                                                <div
                                                                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gradient-to-br from-accent/20 to-accent/5 border border-accent/30 mb-3 group-hover:border-accent/60 transition-colors">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-sparkles w-5 h-5 text-accent"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z">
                                                                        </path>
                                                                        <path d="M20 2v4"></path>
                                                                        <path d="M22 4h-4"></path>
                                                                        <circle cx="4" cy="20" r="2"></circle>
                                                                    </svg>
                                                                </div>
                                                                <h3
                                                                    class="text-lg font-semibold text-primary mb-1 group-hover:text-accent transition-colors">
                                                                    Anita Dongre</h3>
                                                            </div>
                                                            <div class="flex justify-center">
                                                                <div
                                                                    class="px-3 py-1.5 bg-gradient-to-r from-accent/10 via-accent/5 to-transparent border border-accent/20 rounded-full">
                                                                    <p
                                                                        class="text-xs text-muted-foreground uppercase tracking-wider">
                                                                        Sustainable Luxury</p>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="absolute bottom-0 left-1/2 -translate-x-1/2 w-3/4 h-px bg-gradient-to-r from-transparent via-accent/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-shrink-0 group cursor-pointer swiper-slide">
                                                    <div
                                                        class="relative bg-gradient-to-br from-white via-secondary/30 to-secondary/50 border-2 border-accent/20 rounded-xl px-6 py-6 hover:border-accent hover:shadow-[0_12px_32px_rgba(226,164,95,0.15)] transition-all duration-300 min-w-[260px] overflow-hidden group">
                                                        <div
                                                            class="absolute top-0 left-0 w-8 h-8 border-t-2 border-l-2 border-accent/40 rounded-tl-xl">
                                                        </div>
                                                        <div
                                                            class="absolute bottom-0 right-0 w-8 h-8 border-b-2 border-r-2 border-accent/40 rounded-br-xl">
                                                        </div>
                                                        <div
                                                            class="absolute inset-0 bg-gradient-to-r from-transparent via-accent/5 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-1000">
                                                        </div>
                                                        <div
                                                            class="absolute inset-0 opacity-[0.02] group-hover:opacity-[0.04] transition-opacity">
                                                        </div>
                                                        <div class="relative z-10">
                                                            <div
                                                                class="flex items-center justify-between mb-3 min-h-[24px]">
                                                                <div class="flex gap-1.5"></div>
                                                                <div><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-award w-4 h-4 text-accent/30 group-hover:text-accent/60 transition-colors"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                                                                        </path>
                                                                        <circle cx="12" cy="8" r="6"></circle>
                                                                    </svg></div>
                                                            </div>
                                                            <div class="text-center mb-3">
                                                                <div
                                                                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gradient-to-br from-accent/20 to-accent/5 border border-accent/30 mb-3 group-hover:border-accent/60 transition-colors">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-sparkles w-5 h-5 text-accent"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z">
                                                                        </path>
                                                                        <path d="M20 2v4"></path>
                                                                        <path d="M22 4h-4"></path>
                                                                        <circle cx="4" cy="20" r="2"></circle>
                                                                    </svg>
                                                                </div>
                                                                <h3
                                                                    class="text-lg font-semibold text-primary mb-1 group-hover:text-accent transition-colors">
                                                                    Raw Mango</h3>
                                                            </div>
                                                            <div class="flex justify-center">
                                                                <div
                                                                    class="px-3 py-1.5 bg-gradient-to-r from-accent/10 via-accent/5 to-transparent border border-accent/20 rounded-full">
                                                                    <p
                                                                        class="text-xs text-muted-foreground uppercase tracking-wider">
                                                                        Contemporary Indian</p>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="absolute bottom-0 left-1/2 -translate-x-1/2 w-3/4 h-px bg-gradient-to-r from-transparent via-accent/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-shrink-0 group cursor-pointer swiper-slide">
                                                    <div
                                                        class="relative bg-gradient-to-br from-white via-secondary/30 to-secondary/50 border-2 border-accent/20 rounded-xl px-6 py-6 hover:border-accent hover:shadow-[0_12px_32px_rgba(226,164,95,0.15)] transition-all duration-300 min-w-[260px] overflow-hidden group">
                                                        <div
                                                            class="absolute top-0 left-0 w-8 h-8 border-t-2 border-l-2 border-accent/40 rounded-tl-xl">
                                                        </div>
                                                        <div
                                                            class="absolute bottom-0 right-0 w-8 h-8 border-b-2 border-r-2 border-accent/40 rounded-br-xl">
                                                        </div>
                                                        <div
                                                            class="absolute inset-0 bg-gradient-to-r from-transparent via-accent/5 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-1000">
                                                        </div>
                                                        <div
                                                            class="absolute inset-0 opacity-[0.02] group-hover:opacity-[0.04] transition-opacity">
                                                        </div>
                                                        <div class="relative z-10">
                                                            <div
                                                                class="flex items-center justify-between mb-3 min-h-[24px]">
                                                                <div class="flex gap-1.5"><span data-slot="badge"
                                                                        class="inline-flex items-center justify-center rounded-md border font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden [a&amp;]:hover:bg-accent [a&amp;]:hover:text-accent-foreground text-[10px] px-2 py-0.5 bg-gradient-to-r from-accent/20 to-accent/10 border-accent/50 text-accent"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none" stroke="currentColor"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="lucide lucide-star w-2.5 h-2.5 mr-1 fill-accent"
                                                                            aria-hidden="true">
                                                                            <path
                                                                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                                            </path>
                                                                        </svg>Featured</span></div>
                                                                <div><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-award w-4 h-4 text-accent/30 group-hover:text-accent/60 transition-colors"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                                                                        </path>
                                                                        <circle cx="12" cy="8" r="6"></circle>
                                                                    </svg></div>
                                                            </div>
                                                            <div class="text-center mb-3">
                                                                <div
                                                                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gradient-to-br from-accent/20 to-accent/5 border border-accent/30 mb-3 group-hover:border-accent/60 transition-colors">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-sparkles w-5 h-5 text-accent"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z">
                                                                        </path>
                                                                        <path d="M20 2v4"></path>
                                                                        <path d="M22 4h-4"></path>
                                                                        <circle cx="4" cy="20" r="2"></circle>
                                                                    </svg>
                                                                </div>
                                                                <h3
                                                                    class="text-lg font-semibold text-primary mb-1 group-hover:text-accent transition-colors">
                                                                    Tarun Tahiliani</h3>
                                                            </div>
                                                            <div class="flex justify-center">
                                                                <div
                                                                    class="px-3 py-1.5 bg-gradient-to-r from-accent/10 via-accent/5 to-transparent border border-accent/20 rounded-full">
                                                                    <p
                                                                        class="text-xs text-muted-foreground uppercase tracking-wider">
                                                                        Bridal Couture</p>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="absolute bottom-0 left-1/2 -translate-x-1/2 w-3/4 h-px bg-gradient-to-r from-transparent via-accent/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-shrink-0 group cursor-pointer swiper-slide">
                                                    <div
                                                        class="relative bg-gradient-to-br from-white via-secondary/30 to-secondary/50 border-2 border-accent/20 rounded-xl px-6 py-6 hover:border-accent hover:shadow-[0_12px_32px_rgba(226,164,95,0.15)] transition-all duration-300 min-w-[260px] overflow-hidden group">
                                                        <div
                                                            class="absolute top-0 left-0 w-8 h-8 border-t-2 border-l-2 border-accent/40 rounded-tl-xl">
                                                        </div>
                                                        <div
                                                            class="absolute bottom-0 right-0 w-8 h-8 border-b-2 border-r-2 border-accent/40 rounded-br-xl">
                                                        </div>
                                                        <div
                                                            class="absolute inset-0 bg-gradient-to-r from-transparent via-accent/5 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-1000">
                                                        </div>
                                                        <div
                                                            class="absolute inset-0 opacity-[0.02] group-hover:opacity-[0.04] transition-opacity">
                                                        </div>
                                                        <div class="relative z-10">
                                                            <div
                                                                class="flex items-center justify-between mb-3 min-h-[24px]">
                                                                <div class="flex gap-1.5"></div>
                                                                <div><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-award w-4 h-4 text-accent/30 group-hover:text-accent/60 transition-colors"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                                                                        </path>
                                                                        <circle cx="12" cy="8" r="6"></circle>
                                                                    </svg></div>
                                                            </div>
                                                            <div class="text-center mb-3">
                                                                <div
                                                                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gradient-to-br from-accent/20 to-accent/5 border border-accent/30 mb-3 group-hover:border-accent/60 transition-colors">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-sparkles w-5 h-5 text-accent"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z">
                                                                        </path>
                                                                        <path d="M20 2v4"></path>
                                                                        <path d="M22 4h-4"></path>
                                                                        <circle cx="4" cy="20" r="2"></circle>
                                                                    </svg>
                                                                </div>
                                                                <h3
                                                                    class="text-lg font-semibold text-primary mb-1 group-hover:text-accent transition-colors">
                                                                    Abu Jani Sandeep Khosla</h3>
                                                            </div>
                                                            <div class="flex justify-center">
                                                                <div
                                                                    class="px-3 py-1.5 bg-gradient-to-r from-accent/10 via-accent/5 to-transparent border border-accent/20 rounded-full">
                                                                    <p
                                                                        class="text-xs text-muted-foreground uppercase tracking-wider">
                                                                        Heritage Fashion</p>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="absolute bottom-0 left-1/2 -translate-x-1/2 w-3/4 h-px bg-gradient-to-r from-transparent via-accent/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-shrink-0 group cursor-pointer swiper-slide">
                                                    <div
                                                        class="relative bg-gradient-to-br from-white via-secondary/30 to-secondary/50 border-2 border-accent/20 rounded-xl px-6 py-6 hover:border-accent hover:shadow-[0_12px_32px_rgba(226,164,95,0.15)] transition-all duration-300 min-w-[260px] overflow-hidden group">
                                                        <div
                                                            class="absolute top-0 left-0 w-8 h-8 border-t-2 border-l-2 border-accent/40 rounded-tl-xl">
                                                        </div>
                                                        <div
                                                            class="absolute bottom-0 right-0 w-8 h-8 border-b-2 border-r-2 border-accent/40 rounded-br-xl">
                                                        </div>
                                                        <div
                                                            class="absolute inset-0 bg-gradient-to-r from-transparent via-accent/5 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-1000">
                                                        </div>
                                                        <div
                                                            class="absolute inset-0 opacity-[0.02] group-hover:opacity-[0.04] transition-opacity">
                                                        </div>
                                                        <div class="relative z-10">
                                                            <div
                                                                class="flex items-center justify-between mb-3 min-h-[24px]">
                                                                <div class="flex gap-1.5"></div>
                                                                <div><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-award w-4 h-4 text-accent/30 group-hover:text-accent/60 transition-colors"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                                                                        </path>
                                                                        <circle cx="12" cy="8" r="6"></circle>
                                                                    </svg></div>
                                                            </div>
                                                            <div class="text-center mb-3">
                                                                <div
                                                                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gradient-to-br from-accent/20 to-accent/5 border border-accent/30 mb-3 group-hover:border-accent/60 transition-colors">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-sparkles w-5 h-5 text-accent"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z">
                                                                        </path>
                                                                        <path d="M20 2v4"></path>
                                                                        <path d="M22 4h-4"></path>
                                                                        <circle cx="4" cy="20" r="2"></circle>
                                                                    </svg>
                                                                </div>
                                                                <h3
                                                                    class="text-lg font-semibold text-primary mb-1 group-hover:text-accent transition-colors">
                                                                    Ritu Kumar</h3>
                                                            </div>
                                                            <div class="flex justify-center">
                                                                <div
                                                                    class="px-3 py-1.5 bg-gradient-to-r from-accent/10 via-accent/5 to-transparent border border-accent/20 rounded-full">
                                                                    <p
                                                                        class="text-xs text-muted-foreground uppercase tracking-wider">
                                                                        Traditional Elegance</p>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="absolute bottom-0 left-1/2 -translate-x-1/2 w-3/4 h-px bg-gradient-to-r from-transparent via-accent/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-shrink-0 group cursor-pointer swiper-slide">
                                                    <div
                                                        class="relative bg-gradient-to-br from-white via-secondary/30 to-secondary/50 border-2 border-accent/20 rounded-xl px-6 py-6 hover:border-accent hover:shadow-[0_12px_32px_rgba(226,164,95,0.15)] transition-all duration-300 min-w-[260px] overflow-hidden group">
                                                        <div
                                                            class="absolute top-0 left-0 w-8 h-8 border-t-2 border-l-2 border-accent/40 rounded-tl-xl">
                                                        </div>
                                                        <div
                                                            class="absolute bottom-0 right-0 w-8 h-8 border-b-2 border-r-2 border-accent/40 rounded-br-xl">
                                                        </div>
                                                        <div
                                                            class="absolute inset-0 bg-gradient-to-r from-transparent via-accent/5 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-1000">
                                                        </div>
                                                        <div
                                                            class="absolute inset-0 opacity-[0.02] group-hover:opacity-[0.04] transition-opacity">
                                                        </div>
                                                        <div class="relative z-10">
                                                            <div
                                                                class="flex items-center justify-between mb-3 min-h-[24px]">
                                                                <div class="flex gap-1.5"></div>
                                                                <div><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-award w-4 h-4 text-accent/30 group-hover:text-accent/60 transition-colors"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                                                                        </path>
                                                                        <circle cx="12" cy="8" r="6"></circle>
                                                                    </svg></div>
                                                            </div>
                                                            <div class="text-center mb-3">
                                                                <div
                                                                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gradient-to-br from-accent/20 to-accent/5 border border-accent/30 mb-3 group-hover:border-accent/60 transition-colors">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-sparkles w-5 h-5 text-accent"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z">
                                                                        </path>
                                                                        <path d="M20 2v4"></path>
                                                                        <path d="M22 4h-4"></path>
                                                                        <circle cx="4" cy="20" r="2"></circle>
                                                                    </svg>
                                                                </div>
                                                                <h3
                                                                    class="text-lg font-semibold text-primary mb-1 group-hover:text-accent transition-colors">
                                                                    Masaba Gupta</h3>
                                                            </div>
                                                            <div class="flex justify-center">
                                                                <div
                                                                    class="px-3 py-1.5 bg-gradient-to-r from-accent/10 via-accent/5 to-transparent border border-accent/20 rounded-full">
                                                                    <p
                                                                        class="text-xs text-muted-foreground uppercase tracking-wider">
                                                                        Modern Fusion</p>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="absolute bottom-0 left-1/2 -translate-x-1/2 w-3/4 h-px bg-gradient-to-r from-transparent via-accent/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-shrink-0 group cursor-pointer swiper-slide">
                                                    <div
                                                        class="relative bg-gradient-to-br from-white via-secondary/30 to-secondary/50 border-2 border-accent/20 rounded-xl px-6 py-6 hover:border-accent hover:shadow-[0_12px_32px_rgba(226,164,95,0.15)] transition-all duration-300 min-w-[260px] overflow-hidden group">
                                                        <div
                                                            class="absolute top-0 left-0 w-8 h-8 border-t-2 border-l-2 border-accent/40 rounded-tl-xl">
                                                        </div>
                                                        <div
                                                            class="absolute bottom-0 right-0 w-8 h-8 border-b-2 border-r-2 border-accent/40 rounded-br-xl">
                                                        </div>
                                                        <div
                                                            class="absolute inset-0 bg-gradient-to-r from-transparent via-accent/5 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-1000">
                                                        </div>
                                                        <div
                                                            class="absolute inset-0 opacity-[0.02] group-hover:opacity-[0.04] transition-opacity">
                                                        </div>
                                                        <div class="relative z-10">
                                                            <div
                                                                class="flex items-center justify-between mb-3 min-h-[24px]">
                                                                <div class="flex gap-1.5"></div>
                                                                <div><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-award w-4 h-4 text-accent/30 group-hover:text-accent/60 transition-colors"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                                                                        </path>
                                                                        <circle cx="12" cy="8" r="6"></circle>
                                                                    </svg></div>
                                                            </div>
                                                            <div class="text-center mb-3">
                                                                <div
                                                                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gradient-to-br from-accent/20 to-accent/5 border border-accent/30 mb-3 group-hover:border-accent/60 transition-colors">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-sparkles w-5 h-5 text-accent"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z">
                                                                        </path>
                                                                        <path d="M20 2v4"></path>
                                                                        <path d="M22 4h-4"></path>
                                                                        <circle cx="4" cy="20" r="2"></circle>
                                                                    </svg>
                                                                </div>
                                                                <h3
                                                                    class="text-lg font-semibold text-primary mb-1 group-hover:text-accent transition-colors">
                                                                    Payal Singhal</h3>
                                                            </div>
                                                            <div class="flex justify-center">
                                                                <div
                                                                    class="px-3 py-1.5 bg-gradient-to-r from-accent/10 via-accent/5 to-transparent border border-accent/20 rounded-full">
                                                                    <p
                                                                        class="text-xs text-muted-foreground uppercase tracking-wider">
                                                                        Indo-Western</p>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="absolute bottom-0 left-1/2 -translate-x-1/2 w-3/4 h-px bg-gradient-to-r from-transparent via-accent/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-shrink-0 group cursor-pointer swiper-slide">
                                                    <div
                                                        class="relative bg-gradient-to-br from-white via-secondary/30 to-secondary/50 border-2 border-accent/20 rounded-xl px-6 py-6 hover:border-accent hover:shadow-[0_12px_32px_rgba(226,164,95,0.15)] transition-all duration-300 min-w-[260px] overflow-hidden group">
                                                        <div
                                                            class="absolute top-0 left-0 w-8 h-8 border-t-2 border-l-2 border-accent/40 rounded-tl-xl">
                                                        </div>
                                                        <div
                                                            class="absolute bottom-0 right-0 w-8 h-8 border-b-2 border-r-2 border-accent/40 rounded-br-xl">
                                                        </div>
                                                        <div
                                                            class="absolute inset-0 bg-gradient-to-r from-transparent via-accent/5 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-1000">
                                                        </div>
                                                        <div
                                                            class="absolute inset-0 opacity-[0.02] group-hover:opacity-[0.04] transition-opacity">
                                                        </div>
                                                        <div class="relative z-10">
                                                            <div
                                                                class="flex items-center justify-between mb-3 min-h-[24px]">
                                                                <div class="flex gap-1.5"><span data-slot="badge"
                                                                        class="inline-flex items-center justify-center rounded-md border font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden [a&amp;]:hover:bg-accent [a&amp;]:hover:text-accent-foreground text-[10px] px-2 py-0.5 bg-gradient-to-r from-primary/20 to-primary/10 border-primary/50 text-primary"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none" stroke="currentColor"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="lucide lucide-crown w-2.5 h-2.5 mr-1"
                                                                            aria-hidden="true">
                                                                            <path
                                                                                d="M11.562 3.266a.5.5 0 0 1 .876 0L15.39 8.87a1 1 0 0 0 1.516.294L21.183 5.5a.5.5 0 0 1 .798.519l-2.834 10.246a1 1 0 0 1-.956.734H5.81a1 1 0 0 1-.957-.734L2.02 6.02a.5.5 0 0 1 .798-.519l4.276 3.664a1 1 0 0 0 1.516-.294z">
                                                                            </path>
                                                                            <path d="M5 21h14"></path>
                                                                        </svg>Exclusive</span></div>
                                                                <div><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-award w-4 h-4 text-accent/30 group-hover:text-accent/60 transition-colors"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                                                                        </path>
                                                                        <circle cx="12" cy="8" r="6"></circle>
                                                                    </svg></div>
                                                            </div>
                                                            <div class="text-center mb-3">
                                                                <div
                                                                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gradient-to-br from-accent/20 to-accent/5 border border-accent/30 mb-3 group-hover:border-accent/60 transition-colors">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-sparkles w-5 h-5 text-accent"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z">
                                                                        </path>
                                                                        <path d="M20 2v4"></path>
                                                                        <path d="M22 4h-4"></path>
                                                                        <circle cx="4" cy="20" r="2"></circle>
                                                                    </svg>
                                                                </div>
                                                                <h3
                                                                    class="text-lg font-semibold text-primary mb-1 group-hover:text-accent transition-colors">
                                                                    Rahul Mishra</h3>
                                                            </div>
                                                            <div class="flex justify-center">
                                                                <div
                                                                    class="px-3 py-1.5 bg-gradient-to-r from-accent/10 via-accent/5 to-transparent border border-accent/20 rounded-full">
                                                                    <p
                                                                        class="text-xs text-muted-foreground uppercase tracking-wider">
                                                                        Haute Couture</p>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="absolute bottom-0 left-1/2 -translate-x-1/2 w-3/4 h-px bg-gradient-to-r from-transparent via-accent/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-shrink-0 group cursor-pointer swiper-slide">
                                                    <div
                                                        class="relative bg-gradient-to-br from-white via-secondary/30 to-secondary/50 border-2 border-accent/20 rounded-xl px-6 py-6 hover:border-accent hover:shadow-[0_12px_32px_rgba(226,164,95,0.15)] transition-all duration-300 min-w-[260px] overflow-hidden group">
                                                        <div
                                                            class="absolute top-0 left-0 w-8 h-8 border-t-2 border-l-2 border-accent/40 rounded-tl-xl">
                                                        </div>
                                                        <div
                                                            class="absolute bottom-0 right-0 w-8 h-8 border-b-2 border-r-2 border-accent/40 rounded-br-xl">
                                                        </div>
                                                        <div
                                                            class="absolute inset-0 bg-gradient-to-r from-transparent via-accent/5 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-1000">
                                                        </div>
                                                        <div
                                                            class="absolute inset-0 opacity-[0.02] group-hover:opacity-[0.04] transition-opacity">
                                                        </div>
                                                        <div class="relative z-10">
                                                            <div
                                                                class="flex items-center justify-between mb-3 min-h-[24px]">
                                                                <div class="flex gap-1.5"></div>
                                                                <div><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-award w-4 h-4 text-accent/30 group-hover:text-accent/60 transition-colors"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                                                                        </path>
                                                                        <circle cx="12" cy="8" r="6"></circle>
                                                                    </svg></div>
                                                            </div>
                                                            <div class="text-center mb-3">
                                                                <div
                                                                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gradient-to-br from-accent/20 to-accent/5 border border-accent/30 mb-3 group-hover:border-accent/60 transition-colors">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-sparkles w-5 h-5 text-accent"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z">
                                                                        </path>
                                                                        <path d="M20 2v4"></path>
                                                                        <path d="M22 4h-4"></path>
                                                                        <circle cx="4" cy="20" r="2"></circle>
                                                                    </svg>
                                                                </div>
                                                                <h3
                                                                    class="text-lg font-semibold text-primary mb-1 group-hover:text-accent transition-colors">
                                                                    Good Earth</h3>
                                                            </div>
                                                            <div class="flex justify-center">
                                                                <div
                                                                    class="px-3 py-1.5 bg-gradient-to-r from-accent/10 via-accent/5 to-transparent border border-accent/20 rounded-full">
                                                                    <p
                                                                        class="text-xs text-muted-foreground uppercase tracking-wider">
                                                                        Artisanal Luxury</p>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="absolute bottom-0 left-1/2 -translate-x-1/2 w-3/4 h-px bg-gradient-to-r from-transparent via-accent/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-shrink-0 group cursor-pointer swiper-slide">
                                                    <div
                                                        class="relative bg-gradient-to-br from-white via-secondary/30 to-secondary/50 border-2 border-accent/20 rounded-xl px-6 py-6 hover:border-accent hover:shadow-[0_12px_32px_rgba(226,164,95,0.15)] transition-all duration-300 min-w-[260px] overflow-hidden group">
                                                        <div
                                                            class="absolute top-0 left-0 w-8 h-8 border-t-2 border-l-2 border-accent/40 rounded-tl-xl">
                                                        </div>
                                                        <div
                                                            class="absolute bottom-0 right-0 w-8 h-8 border-b-2 border-r-2 border-accent/40 rounded-br-xl">
                                                        </div>
                                                        <div
                                                            class="absolute inset-0 bg-gradient-to-r from-transparent via-accent/5 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-1000">
                                                        </div>
                                                        <div
                                                            class="absolute inset-0 opacity-[0.02] group-hover:opacity-[0.04] transition-opacity">
                                                        </div>
                                                        <div class="relative z-10">
                                                            <div
                                                                class="flex items-center justify-between mb-3 min-h-[24px]">
                                                                <div class="flex gap-1.5"><span data-slot="badge"
                                                                        class="inline-flex items-center justify-center rounded-md border font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden [a&amp;]:hover:bg-accent [a&amp;]:hover:text-accent-foreground text-[10px] px-2 py-0.5 bg-gradient-to-r from-accent/20 to-accent/10 border-accent/50 text-accent"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none" stroke="currentColor"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="lucide lucide-star w-2.5 h-2.5 mr-1 fill-accent"
                                                                            aria-hidden="true">
                                                                            <path
                                                                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                                            </path>
                                                                        </svg>Featured</span></div>
                                                                <div><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-award w-4 h-4 text-accent/30 group-hover:text-accent/60 transition-colors"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                                                                        </path>
                                                                        <circle cx="12" cy="8" r="6"></circle>
                                                                    </svg></div>
                                                            </div>
                                                            <div class="text-center mb-3">
                                                                <div
                                                                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gradient-to-br from-accent/20 to-accent/5 border border-accent/30 mb-3 group-hover:border-accent/60 transition-colors">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-sparkles w-5 h-5 text-accent"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z">
                                                                        </path>
                                                                        <path d="M20 2v4"></path>
                                                                        <path d="M22 4h-4"></path>
                                                                        <circle cx="4" cy="20" r="2"></circle>
                                                                    </svg>
                                                                </div>
                                                                <h3
                                                                    class="text-lg font-semibold text-primary mb-1 group-hover:text-accent transition-colors">
                                                                    Anamika Khanna</h3>
                                                            </div>
                                                            <div class="flex justify-center">
                                                                <div
                                                                    class="px-3 py-1.5 bg-gradient-to-r from-accent/10 via-accent/5 to-transparent border border-accent/20 rounded-full">
                                                                    <p
                                                                        class="text-xs text-muted-foreground uppercase tracking-wider">
                                                                        Contemporary</p>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="absolute bottom-0 left-1/2 -translate-x-1/2 w-3/4 h-px bg-gradient-to-r from-transparent via-accent/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->




                <?php if (have_rows('premium_brand_slider')): ?>
                    <div class="swiper mySwiper relative overflow-hidden">

                        <div class="flex gap-8  swiper-wrapper">

                            <?php while (have_rows('premium_brand_slider')):
                                the_row();
                                $brand_name = get_sub_field('brand_name');
                                $brand_category = get_sub_field('brand_category');
                                $is_featured = get_sub_field('is_featured');
                                $is_exclusive = get_sub_field('is_exclusive');
                                $brand_icon = get_sub_field('brand_icon_svg');
                                ?>

                                <!-- SLIDE -->
                                <div class="flex-shrink-0 group cursor-pointer swiper-slide">

                                    <!-- CARD -->
                                    <div class="relative h-full bg-gradient-to-br from-white via-secondary/30 to-secondary/50
                        border-2 border-accent/20 rounded-xl px-6 py-6
                        hover:border-accent hover:shadow-[0_12px_32px_rgba(226,164,95,0.15)]
                        transition-all duration-300 overflow-hidden group">

                                        <!-- Corner borders -->
                                        <div
                                            class="absolute top-0 left-0 w-8 h-8 border-t-2 border-l-2 border-accent/40 rounded-tl-xl">
                                        </div>
                                        <div
                                            class="absolute bottom-0 right-0 w-8 h-8 border-b-2 border-r-2 border-accent/40 rounded-br-xl">
                                        </div>

                                        <!-- Hover shimmer -->
                                        <div class="absolute inset-0 bg-gradient-to-r from-transparent via-accent/5 to-transparent
                            -translate-x-full group-hover:translate-x-full transition-transform duration-1000"></div>

                                        <!-- Overlay -->
                                        <div
                                            class="absolute inset-0 opacity-[0.02] group-hover:opacity-[0.04] transition-opacity">
                                        </div>

                                        <!-- CONTENT -->
                                        <div class="relative z-10">

                                            <!-- BADGES -->
                                            <div class="flex items-center justify-between mb-3 min-h-[24px]">
                                                <div class="flex gap-1.5">
                                                    <?php if ($is_featured): ?>
                                                        <span class="inline-flex items-center rounded-md border text-[10px] px-2 py-0.5
                                             bg-gradient-to-r from-accent/20 to-accent/10
                                             border-accent/50 text-accent">
                                                            ⭐ Featured
                                                        </span>
                                                    <?php endif; ?>

                                                    <?php if ($is_exclusive): ?>
                                                        <span class="inline-flex items-center rounded-md border text-[10px] px-2 py-0.5
                                             bg-gradient-to-r from-primary/20 to-primary/10
                                             border-primary/50 text-primary">
                                                            👑 Exclusive
                                                        </span>
                                                    <?php endif; ?>
                                                </div>

                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="w-4 h-4 text-accent/30 group-hover:text-accent/60 transition-colors"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <circle cx="12" cy="8" r="6"></circle>
                                                    <path d="m15.477 12.89 1.515 8.526-4.11-2.687-4.11 2.687 1.515-8.526">
                                                    </path>
                                                </svg>
                                            </div>

                                            <!-- ICON + NAME -->
                                            <div class="text-center mb-3">
                                                <div class="inline-flex items-center justify-center w-10 h-10 rounded-full
                                    bg-gradient-to-br from-accent/20 to-accent/5
                                    border border-accent/30 mb-3
                                    group-hover:border-accent/60 transition-colors">
                                                    <?php echo $brand_icon ?: '✨'; ?>
                                                </div>

                                                <h3 class="text-lg font-semibold text-primary mb-1
                                   group-hover:text-accent transition-colors">
                                                    <?php echo esc_html($brand_name); ?>
                                                </h3>
                                            </div>

                                            <!-- CATEGORY -->
                                            <?php if ($brand_category): ?>
                                                <div class="flex justify-center">
                                                    <div class="px-3 py-1.5 bg-gradient-to-r from-accent/10 via-accent/5 to-transparent
                                        border border-accent/20 rounded-full">
                                                        <p class="text-xs uppercase tracking-wider text-muted-foreground">
                                                            <?php echo esc_html($brand_category); ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            <?php endif; ?>

                                            <!-- Bottom glow -->
                                            <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-3/4 h-px
                                bg-gradient-to-r from-transparent via-accent/30 to-transparent
                                opacity-0 group-hover:opacity-100 transition-opacity"></div>

                                        </div>
                                    </div>
                                </div>

                            <?php endwhile; ?>

                        </div>
                    </div>
                <?php endif; ?>







                <!-- <div class="grid grid-cols-3 gap-6 mt-10 max-w-3xl mx-auto">
                                            <div
                                                class="text-center p-4 bg-gradient-to-br from-accent/5 to-transparent rounded-lg border border-accent/10">
                                                <div class="text-3xl font-bold text-accent mb-1">500+</div>
                                                <div class="text-sm text-muted-foreground">Designer Brands</div>
                                            </div>
                                            <div
                                                class="text-center p-4 bg-gradient-to-br from-accent/5 to-transparent rounded-lg border border-accent/10">
                                                <div class="text-3xl font-bold text-accent mb-1">50K+</div>
                                                <div class="text-sm text-muted-foreground">Curated Styles</div>
                                            </div>
                                            <div
                                                class="text-center p-4 bg-gradient-to-br from-accent/5 to-transparent rounded-lg border border-accent/10">
                                                <div class="text-3xl font-bold text-accent mb-1">100%</div>
                                                <div class="text-sm text-muted-foreground">Authentic</div>
                                            </div>
                                        </div> -->
                <!-- Stats Grid -->
                <?php if ($stats): ?>
                    <div class="grid grid-cols-3 gap-6 mt-10 max-w-3xl mx-auto">
                        <?php foreach ($stats as $stat): ?>
                            <?php
                            $stat_number = $stat['stat_number'] ?? '';
                            $stat_label = $stat['stat_label'] ?? '';
                            ?>
                            <div
                                class="text-center p-4 bg-gradient-to-br from-accent/5 to-transparent rounded-lg border border-accent/10">
                                <?php if ($stat_number): ?>
                                    <div class="text-3xl font-bold text-accent mb-1"><?php echo esc_html($stat_number); ?></div>
                                <?php endif; ?>
                                <?php if ($stat_label): ?>
                                    <div class="text-sm text-muted-foreground"><?php echo esc_html($stat_label); ?></div>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </section>
        <div class="bg-gradient-to-b from-white via-[#F3E6E2]/40 to-[#E57F6D]/10 py-8">
            <div class="max-w-5xl mx-auto">
                <div class="flex items-center justify-center gap-4 ">
                    <div class="h-px w-16 bg-gradient-to-r from-transparent to-accent/40"></div>
                    <div class="flex items-center gap-2">
                        <div class="w-1.5 h-1.5 rounded-full bg-accent"></div>
                        <div class="w-2 h-2 rounded-full bg-accent animate-pulse"></div>
                        <div class="w-1.5 h-1.5 rounded-full bg-accent"></div>
                    </div>
                    <div class="h-px w-16 bg-gradient-to-l from-transparent to-accent/40"></div>
                </div>
            </div>
        </div>
        <!-- <section
                                    class="py-16 lg:py-24 bg-gradient-to-b from-[#E57F6D]/20 via-white to-[#E2A45F]/5 overflow-hidden">
                                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                                        <div class="text-center mb-12">
                                            <div
                                                class="inline-flex items-center gap-2 mb-4 px-5 py-2.5 bg-gradient-to-r from-accent/10 via-accent/15 to-accent/10 border border-accent/30 rounded-full backdrop-blur-sm shadow-[0_4px_20px_rgba(226,164,95,0.15)]">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-award w-4 h-4 text-accent" aria-hidden="true">
                                                    <path
                                                        d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                                                    </path>
                                                    <circle cx="12" cy="8" r="6"></circle>
                                                </svg><span
                                                    class="text-accent uppercase tracking-wider text-sm font-semibold">As
                                                    Featured In</span>
                                            </div>
                                            <h2 class="text-3xl md:text-4xl text-primary mb-3">Recognized by Leading
                                                Publications</h2>
                                            <p class="text-muted-foreground max-w-2xl mx-auto">SEVORA's innovative
                                                approach to luxury fashion has been featured in top media outlets</p>
                                        </div>
                                        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6"><a href="" target="_blank"
                                                rel="noopener noreferrer" class="group">
                                                <div
                                                    class="bg-white/95 backdrop-blur-sm border border-accent/20 rounded-xl p-6 hover:border-accent hover:shadow-[0_16px_48px_rgba(226,164,95,0.2)] transition-all duration-300 h-full relative overflow-hidden">
                                                    <div
                                                        class="absolute inset-0 bg-gradient-to-br from-accent/5 via-transparent to-tertiary/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    </div>
                                                    <div
                                                        class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-transparent via-accent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    </div>
                                                    <div class="relative">
                                                        <div class="flex items-center gap-3 mb-4">
                                                            <div
                                                                class="w-12 h-12 bg-gradient-to-br from-accent/20 to-accent/10 rounded-lg flex items-center justify-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="lucide lucide-award w-6 h-6 text-accent"
                                                                    aria-hidden="true">
                                                                    <path
                                                                        d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                                                                    </path>
                                                                    <circle cx="12" cy="8" r="6"></circle>
                                                                </svg>
                                                            </div>
                                                            <div class="flex-1">
                                                                <h3
                                                                    class="font-semibold text-primary group-hover:text-accent transition-colors duration-300">
                                                                    Vogue India</h3>
                                                            </div><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-external-link w-5 h-5 text-muted-foreground group-hover:text-accent opacity-0 group-hover:opacity-100 group-hover:translate-x-1 group-hover:-translate-y-1 transition-all duration-300"
                                                                aria-hidden="true">
                                                                <path d="M15 3h6v6"></path>
                                                                <path d="M10 14 21 3"></path>
                                                                <path
                                                                    d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        <p class="text-sm text-muted-foreground leading-relaxed">
                                                            Featured in Vogue's Top Fashion Apps 2024</p>
                                                        <div
                                                            class="absolute -bottom-2 -right-2 text-8xl text-accent/5 font-serif leading-none select-none">
                                                            "</div>
                                                    </div>
                                                </div>
                                            </a><a href="" target="_blank" rel="noopener noreferrer" class="group">
                                                <div
                                                    class="bg-white/95 backdrop-blur-sm border border-accent/20 rounded-xl p-6 hover:border-accent hover:shadow-[0_16px_48px_rgba(226,164,95,0.2)] transition-all duration-300 h-full relative overflow-hidden">
                                                    <div
                                                        class="absolute inset-0 bg-gradient-to-br from-accent/5 via-transparent to-tertiary/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    </div>
                                                    <div
                                                        class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-transparent via-accent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    </div>
                                                    <div class="relative">
                                                        <div class="flex items-center gap-3 mb-4">
                                                            <div
                                                                class="w-12 h-12 bg-gradient-to-br from-accent/20 to-accent/10 rounded-lg flex items-center justify-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="lucide lucide-award w-6 h-6 text-accent"
                                                                    aria-hidden="true">
                                                                    <path
                                                                        d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                                                                    </path>
                                                                    <circle cx="12" cy="8" r="6"></circle>
                                                                </svg>
                                                            </div>
                                                            <div class="flex-1">
                                                                <h3
                                                                    class="font-semibold text-primary group-hover:text-accent transition-colors duration-300">
                                                                    Elle India</h3>
                                                            </div><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-external-link w-5 h-5 text-muted-foreground group-hover:text-accent opacity-0 group-hover:opacity-100 group-hover:translate-x-1 group-hover:-translate-y-1 transition-all duration-300"
                                                                aria-hidden="true">
                                                                <path d="M15 3h6v6"></path>
                                                                <path d="M10 14 21 3"></path>
                                                                <path
                                                                    d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        <p class="text-sm text-muted-foreground leading-relaxed">Best
                                                            Luxury Shopping Experience</p>
                                                        <div
                                                            class="absolute -bottom-2 -right-2 text-8xl text-accent/5 font-serif leading-none select-none">
                                                            "</div>
                                                    </div>
                                                </div>
                                            </a><a href="" target="_blank" rel="noopener noreferrer" class="group">
                                                <div
                                                    class="bg-white/95 backdrop-blur-sm border border-accent/20 rounded-xl p-6 hover:border-accent hover:shadow-[0_16px_48px_rgba(226,164,95,0.2)] transition-all duration-300 h-full relative overflow-hidden">
                                                    <div
                                                        class="absolute inset-0 bg-gradient-to-br from-accent/5 via-transparent to-tertiary/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    </div>
                                                    <div
                                                        class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-transparent via-accent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    </div>
                                                    <div class="relative">
                                                        <div class="flex items-center gap-3 mb-4">
                                                            <div
                                                                class="w-12 h-12 bg-gradient-to-br from-accent/20 to-accent/10 rounded-lg flex items-center justify-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="lucide lucide-award w-6 h-6 text-accent"
                                                                    aria-hidden="true">
                                                                    <path
                                                                        d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                                                                    </path>
                                                                    <circle cx="12" cy="8" r="6"></circle>
                                                                </svg>
                                                            </div>
                                                            <div class="flex-1">
                                                                <h3
                                                                    class="font-semibold text-primary group-hover:text-accent transition-colors duration-300">
                                                                    GQ India</h3>
                                                            </div><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-external-link w-5 h-5 text-muted-foreground group-hover:text-accent opacity-0 group-hover:opacity-100 group-hover:translate-x-1 group-hover:-translate-y-1 transition-all duration-300"
                                                                aria-hidden="true">
                                                                <path d="M15 3h6v6"></path>
                                                                <path d="M10 14 21 3"></path>
                                                                <path
                                                                    d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        <p class="text-sm text-muted-foreground leading-relaxed">
                                                            Revolutionizing Men's Fashion</p>
                                                        <div
                                                            class="absolute -bottom-2 -right-2 text-8xl text-accent/5 font-serif leading-none select-none">
                                                            "</div>
                                                    </div>
                                                </div>
                                            </a><a href="" target="_blank" rel="noopener noreferrer" class="group">
                                                <div
                                                    class="bg-white/95 backdrop-blur-sm border border-accent/20 rounded-xl p-6 hover:border-accent hover:shadow-[0_16px_48px_rgba(226,164,95,0.2)] transition-all duration-300 h-full relative overflow-hidden">
                                                    <div
                                                        class="absolute inset-0 bg-gradient-to-br from-accent/5 via-transparent to-tertiary/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    </div>
                                                    <div
                                                        class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-transparent via-accent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    </div>
                                                    <div class="relative">
                                                        <div class="flex items-center gap-3 mb-4">
                                                            <div
                                                                class="w-12 h-12 bg-gradient-to-br from-accent/20 to-accent/10 rounded-lg flex items-center justify-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="lucide lucide-award w-6 h-6 text-accent"
                                                                    aria-hidden="true">
                                                                    <path
                                                                        d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                                                                    </path>
                                                                    <circle cx="12" cy="8" r="6"></circle>
                                                                </svg>
                                                            </div>
                                                            <div class="flex-1">
                                                                <h3
                                                                    class="font-semibold text-primary group-hover:text-accent transition-colors duration-300">
                                                                    Economic Times</h3>
                                                            </div><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-external-link w-5 h-5 text-muted-foreground group-hover:text-accent opacity-0 group-hover:opacity-100 group-hover:translate-x-1 group-hover:-translate-y-1 transition-all duration-300"
                                                                aria-hidden="true">
                                                                <path d="M15 3h6v6"></path>
                                                                <path d="M10 14 21 3"></path>
                                                                <path
                                                                    d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        <p class="text-sm text-muted-foreground leading-relaxed">India's
                                                            Fastest Growing Fashion Tech</p>
                                                        <div
                                                            class="absolute -bottom-2 -right-2 text-8xl text-accent/5 font-serif leading-none select-none">
                                                            "</div>
                                                    </div>
                                                </div>
                                            </a><a href="" target="_blank" rel="noopener noreferrer" class="group">
                                                <div
                                                    class="bg-white/95 backdrop-blur-sm border border-accent/20 rounded-xl p-6 hover:border-accent hover:shadow-[0_16px_48px_rgba(226,164,95,0.2)] transition-all duration-300 h-full relative overflow-hidden">
                                                    <div
                                                        class="absolute inset-0 bg-gradient-to-br from-accent/5 via-transparent to-tertiary/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    </div>
                                                    <div
                                                        class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-transparent via-accent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    </div>
                                                    <div class="relative">
                                                        <div class="flex items-center gap-3 mb-4">
                                                            <div
                                                                class="w-12 h-12 bg-gradient-to-br from-accent/20 to-accent/10 rounded-lg flex items-center justify-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="lucide lucide-award w-6 h-6 text-accent"
                                                                    aria-hidden="true">
                                                                    <path
                                                                        d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                                                                    </path>
                                                                    <circle cx="12" cy="8" r="6"></circle>
                                                                </svg>
                                                            </div>
                                                            <div class="flex-1">
                                                                <h3
                                                                    class="font-semibold text-primary group-hover:text-accent transition-colors duration-300">
                                                                    Harper's Bazaar</h3>
                                                            </div><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-external-link w-5 h-5 text-muted-foreground group-hover:text-accent opacity-0 group-hover:opacity-100 group-hover:translate-x-1 group-hover:-translate-y-1 transition-all duration-300"
                                                                aria-hidden="true">
                                                                <path d="M15 3h6v6"></path>
                                                                <path d="M10 14 21 3"></path>
                                                                <path
                                                                    d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        <p class="text-sm text-muted-foreground leading-relaxed">
                                                            Editor's Pick for Luxury Shopping</p>
                                                        <div
                                                            class="absolute -bottom-2 -right-2 text-8xl text-accent/5 font-serif leading-none select-none">
                                                            "</div>
                                                    </div>
                                                </div>
                                            </a><a href="" target="_blank" rel="noopener noreferrer" class="group">
                                                <div
                                                    class="bg-white/95 backdrop-blur-sm border border-accent/20 rounded-xl p-6 hover:border-accent hover:shadow-[0_16px_48px_rgba(226,164,95,0.2)] transition-all duration-300 h-full relative overflow-hidden">
                                                    <div
                                                        class="absolute inset-0 bg-gradient-to-br from-accent/5 via-transparent to-tertiary/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    </div>
                                                    <div
                                                        class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-transparent via-accent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                    </div>
                                                    <div class="relative">
                                                        <div class="flex items-center gap-3 mb-4">
                                                            <div
                                                                class="w-12 h-12 bg-gradient-to-br from-accent/20 to-accent/10 rounded-lg flex items-center justify-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="lucide lucide-award w-6 h-6 text-accent"
                                                                    aria-hidden="true">
                                                                    <path
                                                                        d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                                                                    </path>
                                                                    <circle cx="12" cy="8" r="6"></circle>
                                                                </svg>
                                                            </div>
                                                            <div class="flex-1">
                                                                <h3
                                                                    class="font-semibold text-primary group-hover:text-accent transition-colors duration-300">
                                                                    Forbes India</h3>
                                                            </div><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-external-link w-5 h-5 text-muted-foreground group-hover:text-accent opacity-0 group-hover:opacity-100 group-hover:translate-x-1 group-hover:-translate-y-1 transition-all duration-300"
                                                                aria-hidden="true">
                                                                <path d="M15 3h6v6"></path>
                                                                <path d="M10 14 21 3"></path>
                                                                <path
                                                                    d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        <p class="text-sm text-muted-foreground leading-relaxed">Startup
                                                            to Watch in Luxury Retail</p>
                                                        <div
                                                            class="absolute -bottom-2 -right-2 text-8xl text-accent/5 font-serif leading-none select-none">
                                                            "</div>
                                                    </div>
                                                </div>
                                            </a></div>
                                        <div
                                            class="text-center mt-12 p-8 bg-gradient-to-r from-accent/8 via-accent/12 to-accent/8 rounded-2xl border border-accent/25 shadow-[0_8px_30px_rgba(226,164,95,0.15)]">
                                            <p class="text-primary font-semibold text-lg">Trusted by over <span
                                                    class="text-accent font-bold text-2xl">50,000+</span> fashion
                                                enthusiasts across India</p>
                                        </div>
                                    </div>
                                </section> -->

        <section class="py-16 lg:py-24 bg-gradient-to-b from-[#E57F6D]/20 via-white to-[#E2A45F]/5 overflow-hidden">

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                <!-- Header -->
                <div class="text-center mb-12">
                    <div
                        class="inline-flex items-center gap-2 mb-4 px-5 py-2.5 bg-gradient-to-r from-accent/10 via-accent/15 to-accent/10 border border-accent/30 rounded-full backdrop-blur-sm shadow-[0_4px_20px_rgba(226,164,95,0.15)]">
                        <!-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-award w-4 h-4 text-accent">
                    <path
                        d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                    </path>
                    <circle cx="12" cy="8" r="6"></circle>
                </svg> -->
                        <?php if ($icon1 = get_field('featured_icon')): ?>
                            <span class="text-accent w-6 h-6"><?php echo $icon1; ?></span>
                        <?php endif; ?>

                        <span class="text-accent uppercase tracking-wider text-sm font-semibold">
                            <?php the_field('featured_label'); ?>
                        </span>
                    </div>

                    <h2 class="text-3xl md:text-4xl text-primary mb-3">
                        <?php the_field('featured_heading'); ?>
                    </h2>

                    <p class="text-muted-foreground max-w-2xl mx-auto">
                        <?php the_field('featured_description'); ?>
                    </p>
                </div>

                <!-- Publications -->
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

                    <?php if (have_rows('featured_publications')): ?>
                        <?php while (have_rows('featured_publications')):
                            the_row(); ?>

                            <a href="<?php the_sub_field('publication_url'); ?>" target="_blank" rel="noopener noreferrer"
                                class="group">

                                <div class="bg-white/95 backdrop-blur-sm border border-accent/20 rounded-xl p-6
                            hover:border-accent hover:shadow-[0_16px_48px_rgba(226,164,95,0.2)]
                            transition-all duration-300 h-full relative overflow-hidden">

                                    <div class="absolute inset-0 bg-gradient-to-br from-accent/5 via-transparent to-tertiary/5
                                opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    </div>

                                    <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r
                                from-transparent via-accent to-transparent
                                opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    </div>

                                    <div class="relative">
                                        <div class="flex items-center gap-3 mb-4">

                                            <div class="w-12 h-12 bg-gradient-to-br from-accent/20 to-accent/10 rounded-lg
                                        flex items-center justify-center
                                        group-hover:scale-110 group-hover:rotate-3 transition-all duration-300">
                                                <!-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-award w-6 h-6 text-accent">
                                            <path
                                                d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                                            </path>
                                            <circle cx="12" cy="8" r="6"></circle>
                                        </svg> -->
                                                <?php echo get_sub_field('publication_icon'); ?>
                                            </div>

                                            <div class="flex-1">
                                                <h3
                                                    class="font-semibold text-primary group-hover:text-accent transition-colors duration-300">
                                                    <?php the_sub_field('publication_name'); ?>
                                                </h3>
                                            </div>

                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="lucide lucide-external-link w-5 h-5 text-muted-foreground
                                        opacity-0 group-hover:opacity-100
                                        group-hover:translate-x-1 group-hover:-translate-y-1
                                        transition-all duration-300">
                                                <path d="M15 3h6v6"></path>
                                                <path d="M10 14 21 3"></path>
                                                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6">
                                                </path>
                                            </svg>

                                        </div>

                                        <p class="text-sm text-muted-foreground leading-relaxed">
                                            <?php the_sub_field('publication_description'); ?>
                                        </p>

                                        <div
                                            class="absolute -bottom-2 -right-2 text-8xl text-accent/5 font-serif leading-none select-none">
                                            "
                                        </div>
                                    </div>
                                </div>
                            </a>

                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>

                <!-- Trust -->
                <div class="text-center mt-12 p-8 bg-gradient-to-r from-accent/8 via-accent/12 to-accent/8
            rounded-2xl border border-accent/25 shadow-[0_8px_30px_rgba(226,164,95,0.15)]">

                    <p class="text-primary font-semibold text-lg">
                        <?php the_field('trust_text_before_count'); ?>
                        <span class="text-accent font-bold text-2xl">
                            <?php the_field('trust_count'); ?>+
                        </span>
                        <?php the_field('trust_text_after_count'); ?>
                    </p>
                </div>

            </div>
        </section>

        <!-- <section
                                    class="py-16 lg:py-24 bg-gradient-to-b from-[#E2A45F]/5 via-white to-[#E2A45F]/12 relative overflow-hidden">
                                    <div class="absolute inset-0 opacity-5">
                                        <div class="absolute inset-0">
                                        </div>
                                        <div class="absolute inset-0">
                                        </div>
                                    </div>
                                    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                                        <div class="text-center mb-12">
                                            <div
                                                class="inline-flex items-center gap-2 mb-6 px-6 py-3 bg-gradient-to-r from-accent/10 via-accent/15 to-accent/10 border border-accent/30 rounded-full backdrop-blur-sm shadow-[0_4px_20px_rgba(226,164,95,0.15)]">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-star w-5 h-5 text-accent fill-accent"
                                                    aria-hidden="true">
                                                    <path
                                                        d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                    </path>
                                                </svg><span
                                                    class="text-accent uppercase tracking-wider text-sm font-semibold">Customer
                                                    Love</span>
                                            </div>
                                            <h2 class="text-4xl md:text-5xl mb-4">Stories from Our Community</h2>
                                            <p class="text-lg text-muted-foreground max-w-2xl mx-auto">Real experiences
                                                from fashion enthusiasts who've discovered their style with SEVORA</p>
                                        </div>
                                        <div class="grid md:grid-cols-3 gap-8">
                                            <div class="">
                                                <div
                                                    class="bg-white/95 backdrop-blur-sm p-8 rounded-2xl shadow-[0_8px_30px_rgba(0,0,0,0.08)] border border-accent/15 hover:border-accent/40 hover:shadow-[0_20px_60px_rgba(226,164,95,0.25)] transition-all duration-300 h-full relative group">
                                                    <div
                                                        class="absolute top-6 right-6 opacity-10 group-hover:opacity-20 transition-opacity">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="lucide lucide-quote w-16 h-16 text-accent fill-accent"
                                                            aria-hidden="true">
                                                            <path
                                                                d="M16 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z">
                                                            </path>
                                                            <path
                                                                d="M5 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z">
                                                            </path>
                                                        </svg>
                                                    </div><span data-slot="badge"
                                                        class="inline-flex items-center justify-center rounded-md px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden border-transparent [a&amp;]:hover:bg-primary/90 absolute top-6 left-6 bg-gradient-to-r from-accent to-[#C8915D] text-white border-0">
                                                        <svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="lucide lucide-award w-3 h-3 mr-1" aria-hidden="true">
                                                            <path
                                                                d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                                                            </path>
                                                            <circle cx="12" cy="8" r="6"></circle>
                                                        </svg>VIP</span>
                                                    <div class="flex gap-1 mb-4 mt-8">
                                                        <div><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-star w-5 h-5 text-accent fill-accent"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                                </path>
                                                            </svg></div>
                                                        <div><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-star w-5 h-5 text-accent fill-accent"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                                </path>
                                                            </svg></div>
                                                        <div><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-star w-5 h-5 text-accent fill-accent"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                                </path>
                                                            </svg></div>
                                                        <div><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-star w-5 h-5 text-accent fill-accent"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                                </path>
                                                            </svg></div>
                                                        <div><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-star w-5 h-5 text-accent fill-accent"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                                </path>
                                                            </svg></div>
                                                    </div>
                                                    <p class="text-muted-foreground mb-6 leading-relaxed relative z-10">
                                                        "The 60-minute delivery is a game-changer! Ordered a designer
                                                        saree for an event and it arrived perfectly packaged. The
                                                        quality is exceptional."</p>
                                                    <div class="flex items-center gap-4">
                                                        <div class="relative"><img
                                                                src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=400&amp;h=400&amp;fit=crop"
                                                                alt="Priya Sharma - Verified SEVORA customer from Mumbai"
                                                                class="w-12 h-12 rounded-full object-cover border-2 border-accent/20">
                                                            <div
                                                                class="absolute -bottom-1 -right-1 w-5 h-5 bg-accent rounded-full flex items-center justify-center border-2 border-white shadow-md">
                                                                <svg class="w-3 h-3 text-white" fill="currentColor"
                                                                    viewBox="0 0 20 20" aria-label="Verified customer">
                                                                    <path fill-rule="evenodd"
                                                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                                        clip-rule="evenodd"></path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="flex items-center gap-2">
                                                                <h4 class="font-semibold text-primary">Priya Sharma</h4>
                                                                <span class="text-xs text-accent">Verified</span>
                                                            </div>
                                                            <p class="text-sm text-muted-foreground">Mumbai</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div
                                                    class="bg-white/95 backdrop-blur-sm p-8 rounded-2xl shadow-[0_8px_30px_rgba(0,0,0,0.08)] border border-accent/15 hover:border-accent/40 hover:shadow-[0_20px_60px_rgba(226,164,95,0.25)] transition-all duration-300 h-full relative group">
                                                    <div
                                                        class="absolute top-6 right-6 opacity-10 group-hover:opacity-20 transition-opacity">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="lucide lucide-quote w-16 h-16 text-accent fill-accent"
                                                            aria-hidden="true">
                                                            <path
                                                                d="M16 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z">
                                                            </path>
                                                            <path
                                                                d="M5 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z">
                                                            </path>
                                                        </svg>
                                                    </div><span data-slot="badge"
                                                        class="inline-flex items-center justify-center rounded-md px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden border-transparent [a&amp;]:hover:bg-primary/90 absolute top-6 left-6 bg-gradient-to-r from-accent to-[#C8915D] text-white border-0"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="lucide lucide-award w-3 h-3 mr-1" aria-hidden="true">
                                                            <path
                                                                d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                                                            </path>
                                                            <circle cx="12" cy="8" r="6"></circle>
                                                        </svg>Premium</span>
                                                    <div class="flex gap-1 mb-4 mt-8">
                                                        <div><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-star w-5 h-5 text-accent fill-accent"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                                </path>
                                                            </svg></div>
                                                        <div><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-star w-5 h-5 text-accent fill-accent"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                                </path>
                                                            </svg></div>
                                                        <div><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-star w-5 h-5 text-accent fill-accent"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                                </path>
                                                            </svg></div>
                                                        <div><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-star w-5 h-5 text-accent fill-accent"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                                </path>
                                                            </svg></div>
                                                        <div><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-star w-5 h-5 text-accent fill-accent"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                                </path>
                                                            </svg></div>
                                                    </div>
                                                    <p class="text-muted-foreground mb-6 leading-relaxed relative z-10">
                                                        "Try before you buy is amazing. Got to experience luxury pieces
                                                        at home. The personal stylist helped me choose perfectly for my
                                                        wardrobe."</p>
                                                    <div class="flex items-center gap-4">
                                                        <div class="relative"><img
                                                                src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&amp;h=400&amp;fit=crop"
                                                                alt="Arjun Mehta - Verified SEVORA customer from Bangalore"
                                                                class="w-12 h-12 rounded-full object-cover border-2 border-accent/20">
                                                            <div
                                                                class="absolute -bottom-1 -right-1 w-5 h-5 bg-accent rounded-full flex items-center justify-center border-2 border-white shadow-md">
                                                                <svg class="w-3 h-3 text-white" fill="currentColor"
                                                                    viewBox="0 0 20 20" aria-label="Verified customer">
                                                                    <path fill-rule="evenodd"
                                                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                                        clip-rule="evenodd"></path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="flex items-center gap-2">
                                                                <h4 class="font-semibold text-primary">Arjun Mehta</h4>
                                                                <span class="text-xs text-accent">Verified</span>
                                                            </div>
                                                            <p class="text-sm text-muted-foreground">Bangalore</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div
                                                    class="bg-white/95 backdrop-blur-sm p-8 rounded-2xl shadow-[0_8px_30px_rgba(0,0,0,0.08)] border border-accent/15 hover:border-accent/40 hover:shadow-[0_20px_60px_rgba(226,164,95,0.25)] transition-all duration-300 h-full relative group">
                                                    <div
                                                        class="absolute top-6 right-6 opacity-10 group-hover:opacity-20 transition-opacity">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="lucide lucide-quote w-16 h-16 text-accent fill-accent"
                                                            aria-hidden="true">
                                                            <path
                                                                d="M16 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z">
                                                            </path>
                                                            <path
                                                                d="M5 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z">
                                                            </path>
                                                        </svg>
                                                    </div><span data-slot="badge"
                                                        class="inline-flex items-center justify-center rounded-md px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden border-transparent [a&amp;]:hover:bg-primary/90 absolute top-6 left-6 bg-gradient-to-r from-accent to-[#C8915D] text-white border-0"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="lucide lucide-award w-3 h-3 mr-1" aria-hidden="true">
                                                            <path
                                                                d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                                                            </path>
                                                            <circle cx="12" cy="8" r="6"></circle>
                                                        </svg>VIP</span>
                                                    <div class="flex gap-1 mb-4 mt-8">
                                                        <div><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-star w-5 h-5 text-accent fill-accent"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                                </path>
                                                            </svg></div>
                                                        <div><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-star w-5 h-5 text-accent fill-accent"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                                </path>
                                                            </svg></div>
                                                        <div><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-star w-5 h-5 text-accent fill-accent"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                                </path>
                                                            </svg></div>
                                                        <div><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-star w-5 h-5 text-accent fill-accent"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                                </path>
                                                            </svg></div>
                                                        <div><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-star w-5 h-5 text-accent fill-accent"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                                </path>
                                                            </svg></div>
                                                    </div>
                                                    <p class="text-muted-foreground mb-6 leading-relaxed relative z-10">
                                                        "Sevora changed how I shop for luxury fashion. The app is so
                                                        intuitive and the authenticity guarantee gives me complete peace
                                                        of mind."</p>
                                                    <div class="flex items-center gap-4">
                                                        <div class="relative"><img
                                                                src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=400&amp;h=400&amp;fit=crop"
                                                                alt="Ananya Kapoor - Verified SEVORA customer from Delhi"
                                                                class="w-12 h-12 rounded-full object-cover border-2 border-accent/20">
                                                            <div
                                                                class="absolute -bottom-1 -right-1 w-5 h-5 bg-accent rounded-full flex items-center justify-center border-2 border-white shadow-md">
                                                                <svg class="w-3 h-3 text-white" fill="currentColor"
                                                                    viewBox="0 0 20 20" aria-label="Verified customer">
                                                                    <path fill-rule="evenodd"
                                                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                                        clip-rule="evenodd"></path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="flex items-center gap-2">
                                                                <h4 class="font-semibold text-primary">Ananya Kapoor
                                                                </h4><span class="text-xs text-accent">Verified</span>
                                                            </div>
                                                            <p class="text-sm text-muted-foreground">Delhi</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-16 text-center">
                                            <div
                                                class="inline-flex flex-wrap items-center justify-center gap-12 px-12 py-8 bg-gradient-to-r from-white via-accent/5 to-white rounded-2xl shadow-[0_8px_30px_rgba(0,0,0,0.08)] border border-accent/20 backdrop-blur-sm">
                                                <div class="text-center">
                                                    <p class="text-4xl font-bold text-accent mb-2">4.9★</p>
                                                    <p class="text-sm text-muted-foreground uppercase tracking-wider">
                                                        Average Rating</p>
                                                </div>
                                                <div
                                                    class="w-px h-16 bg-gradient-to-b from-transparent via-accent/30 to-transparent">
                                                </div>
                                                <div class="text-center">
                                                    <p class="text-4xl font-bold text-accent mb-2">50K+</p>
                                                    <p class="text-sm text-muted-foreground uppercase tracking-wider">
                                                        Happy Customers</p>
                                                </div>
                                                <div
                                                    class="w-px h-16 bg-gradient-to-b from-transparent via-accent/30 to-transparent">
                                                </div>
                                                <div class="text-center">
                                                    <p class="text-4xl font-bold text-accent mb-2">98%</p>
                                                    <p class="text-sm text-muted-foreground uppercase tracking-wider">
                                                        Satisfaction Rate</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section> -->
        <section
            class="py-16 lg:py-24 bg-gradient-to-b from-[#E2A45F]/5 via-white to-[#E2A45F]/12 relative overflow-hidden">
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                <!-- HEADER -->
                <div class="text-center mb-12">
                    <div
                        class="inline-flex items-center gap-2 mb-6 px-6 py-3 bg-gradient-to-r from-accent/10 via-accent/15 to-accent/10 border border-accent/30 rounded-full">
                        <?php if ($icon = get_field('customer_featured_icon')): ?>
                            <span class="text-accent w-6 h-6"><?php echo $icon; ?></span>
                        <?php endif; ?>
                        <span class="text-accent uppercase tracking-wider text-sm font-semibold">
                            <?php the_field('customer_featured_label'); ?>
                        </span>
                    </div>

                    <h2 class="text-4xl md:text-5xl mb-4">
                        <?php the_field('customer_featured_heading'); ?>
                    </h2>

                    <p class="text-lg text-muted-foreground max-w-2xl mx-auto">
                        <?php the_field('customer_featured_description'); ?>
                    </p>
                </div>

                <!-- TESTIMONIALS -->
                <div class="grid md:grid-cols-3 gap-8">

                    <?php if (have_rows('testimonials')):
                        while (have_rows('testimonials')):
                            the_row(); ?>
                            <div>
                                <div
                                    class="bg-white/95 p-8 rounded-2xl border border-accent/15 hover:border-accent/40 transition-all h-full relative group">

                                    <!-- Badge -->
                                    <?php if (get_sub_field('badge_text')): ?>
                                        <span data-slot="badge" class="inline-flex items-center justify-center rounded-md px-2 py-0.5
           text-xs font-medium w-fit whitespace-nowrap shrink-0
           [&>svg]:size-3 gap-1
           [&>svg]:pointer-events-none
           transition-[color,box-shadow]
           overflow-hidden border-transparent
           absolute top-6 left-6
           bg-gradient-to-r from-accent to-[#C8915D]
           text-white border-0">

                                            <?php if (get_sub_field('customer_card_icon')): ?>
                                                <span class="[&_svg]:w-3 [&_svg]:h-3 mr-1">
                                                    <?php echo get_sub_field('customer_card_icon'); ?>
                                                </span>
                                            <?php endif; ?>

                                            <?php the_sub_field('badge_text'); ?>
                                        </span>
                                    <?php endif; ?>


                                    <!-- Rating -->
                                    <div class="flex gap-1 mb-4 mt-8">
                                        <?php
                                        $rating = get_sub_field('rating');
                                        for ($i = 1; $i <= 5; $i++):
                                            ?>
                                            <svg class="w-5 h-5 <?php echo $i <= $rating ? 'text-accent fill-accent' : 'text-gray-300'; ?>"
                                                viewBox="0 0 24 24" fill="currentColor">
                                                <path
                                                    d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z" />
                                            </svg>
                                        <?php endfor; ?>
                                    </div>

                                    <p class="text-muted-foreground mb-6 leading-relaxed">
                                        <?php the_sub_field('testimonial_text'); ?>
                                    </p>

                                    <!-- USER -->
                                    <div class="flex items-center gap-4">
                                        <?php $img = get_sub_field('user_image'); ?>
                                        <img src="<?php echo esc_url($img['url']); ?>"
                                            class="w-12 h-12 rounded-full object-cover border-2 border-accent/20">

                                        <div>
                                            <div class="flex items-center gap-2">
                                                <h4 class="font-semibold"><?php the_sub_field('user_name'); ?></h4>
                                                <?php if (get_sub_field('is_verified')): ?>
                                                    <span class="text-xs text-accent">Verified</span>
                                                <?php endif; ?>
                                            </div>
                                            <p class="text-sm text-muted-foreground"><?php the_sub_field('user_city'); ?></p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        <?php endwhile; endif; ?>

                </div>

                <!-- STATS -->
                <div class="mt-16 text-center">
                    <div class="inline-flex flex-wrap items-center justify-center gap-12
               px-12 py-8
               bg-gradient-to-r from-white via-accent/5 to-white
               rounded-2xl
               shadow-[0_8px_30px_rgba(0,0,0,0.08)]
               border border-accent/20
               backdrop-blur-sm">

                        <!-- Average Rating -->
                        <div class="text-center">
                            <p class="text-4xl font-bold text-accent mb-2">
                                <?php the_field('avg_rating'); ?>★
                            </p>
                            <p class="text-sm text-muted-foreground uppercase tracking-wider">
                                Average Rating
                            </p>
                        </div>

                        <!-- Divider -->
                        <div class="w-px h-16 bg-gradient-to-b from-transparent via-accent/30 to-transparent">
                        </div>

                        <!-- Happy Customers -->
                        <div class="text-center">
                            <p class="text-4xl font-bold text-accent mb-2">
                                <?php the_field('happy_customers'); ?>+
                            </p>
                            <p class="text-sm text-muted-foreground uppercase tracking-wider">
                                Happy Customers
                            </p>
                        </div>

                        <!-- Divider -->
                        <div class="w-px h-16 bg-gradient-to-b from-transparent via-accent/30 to-transparent">
                        </div>

                        <!-- Satisfaction Rate -->
                        <div class="text-center">
                            <p class="text-4xl font-bold text-accent mb-2">
                                <?php the_field('satisfaction_rate'); ?>%
                            </p>
                            <p class="text-sm text-muted-foreground uppercase tracking-wider">
                                Satisfaction Rate
                            </p>
                        </div>

                    </div>
                </div>


            </div>
        </section>

        <!-- <section
                                    class="py-16 lg:py-24 bg-gradient-to-br from-[#E2A45F]/18 via-[#E57F6D]/20 to-[#F3E6E2]/70">
                                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                                        <div class="text-center mb-12">
                                            <div
                                                class="inline-flex items-center gap-2 mb-4 px-4 py-2 bg-accent/10 border border-accent/30 rounded-full">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-star w-4 h-4 text-accent" aria-hidden="true">
                                                    <path
                                                        d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                    </path>
                                                </svg><span
                                                    class="text-accent uppercase tracking-wide text-sm font-semibold">Trusted
                                                    by Thousands</span>
                                            </div>
                                            <h2 class="text-4xl md:text-5xl mb-4 text-primary">India's Favorite Luxury
                                                App</h2>
                                            <p class="text-lg text-muted-foreground max-w-2xl mx-auto">Join thousands of
                                                fashion enthusiasts who trust SEVORA for their luxury shopping</p>
                                        </div>
                                        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">
                                            <div class="relative group">
                                                <div
                                                    class="bg-white p-6 rounded-2xl border border-accent/20 hover:border-accent/40 transition-all shadow-lg hover:shadow-xl h-full">
                                                    <div
                                                        class="w-12 h-12 bg-gradient-to-br from-accent to-[#C8915D] rounded-xl flex items-center justify-center text-white mb-4 group-hover:scale-110 transition-transform shadow-lg">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="lucide lucide-download w-6 h-6" aria-hidden="true">
                                                            <path d="M12 15V3"></path>
                                                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                            <path d="m7 10 5 5 5-5"></path>
                                                        </svg>
                                                    </div>
                                                    <div class="mb-2"><span
                                                            class="text-3xl lg:text-4xl text-primary">500K+</span></div>
                                                    <p class="text-sm text-muted-foreground">App Downloads</p>
                                                    <div
                                                        class="absolute top-0 right-0 w-20 h-20 bg-gradient-to-br from-accent to-[#C8915D] opacity-5 rounded-full blur-xl group-hover:opacity-10 transition-opacity">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="relative group">
                                                <div
                                                    class="bg-white p-6 rounded-2xl border border-accent/20 hover:border-accent/40 transition-all shadow-lg hover:shadow-xl h-full">
                                                    <div
                                                        class="w-12 h-12 bg-gradient-to-br from-[#E57F6D] to-[#F39C8E] rounded-xl flex items-center justify-center text-white mb-4 group-hover:scale-110 transition-transform shadow-lg">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="lucide lucide-star w-6 h-6"
                                                            aria-hidden="true">
                                                            <path
                                                                d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                    <div class="mb-2"><span
                                                            class="text-3xl lg:text-4xl text-primary">4.9</span></div>
                                                    <p class="text-sm text-muted-foreground">Average Rating</p>
                                                    <div
                                                        class="absolute top-0 right-0 w-20 h-20 bg-gradient-to-br from-[#E57F6D] to-[#F39C8E] opacity-5 rounded-full blur-xl group-hover:opacity-10 transition-opacity">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="relative group">
                                                <div
                                                    class="bg-white p-6 rounded-2xl border border-accent/20 hover:border-accent/40 transition-all shadow-lg hover:shadow-xl h-full">
                                                    <div
                                                        class="w-12 h-12 bg-gradient-to-br from-primary to-[#5A2C3B] rounded-xl flex items-center justify-center text-white mb-4 group-hover:scale-110 transition-transform shadow-lg">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="lucide lucide-users w-6 h-6"
                                                            aria-hidden="true">
                                                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                                            <path d="M16 3.128a4 4 0 0 1 0 7.744"></path>
                                                            <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                                            <circle cx="9" cy="7" r="4"></circle>
                                                        </svg>
                                                    </div>
                                                    <div class="mb-2"><span
                                                            class="text-3xl lg:text-4xl text-primary">50K+</span></div>
                                                    <p class="text-sm text-muted-foreground">Active Users</p>
                                                    <div
                                                        class="absolute top-0 right-0 w-20 h-20 bg-gradient-to-br from-primary to-[#5A2C3B] opacity-5 rounded-full blur-xl group-hover:opacity-10 transition-opacity">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="relative group">
                                                <div
                                                    class="bg-white p-6 rounded-2xl border border-accent/20 hover:border-accent/40 transition-all shadow-lg hover:shadow-xl h-full">
                                                    <div
                                                        class="w-12 h-12 bg-gradient-to-br from-accent to-[#C8915D] rounded-xl flex items-center justify-center text-white mb-4 group-hover:scale-110 transition-transform shadow-lg">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="lucide lucide-shopping-bag w-6 h-6"
                                                            aria-hidden="true">
                                                            <path d="M16 10a4 4 0 0 1-8 0"></path>
                                                            <path d="M3.103 6.034h17.794"></path>
                                                            <path
                                                                d="M3.4 5.467a2 2 0 0 0-.4 1.2V20a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6.667a2 2 0 0 0-.4-1.2l-2-2.667A2 2 0 0 0 17 2H7a2 2 0 0 0-1.6.8z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                    <div class="mb-2"><span
                                                            class="text-3xl lg:text-4xl text-primary">98%</span></div>
                                                    <p class="text-sm text-muted-foreground">Satisfaction Rate</p>
                                                    <div
                                                        class="absolute top-0 right-0 w-20 h-20 bg-gradient-to-br from-accent to-[#C8915D] opacity-5 rounded-full blur-xl group-hover:opacity-10 transition-opacity">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section> -->

        <section class="py-16 lg:py-24 bg-gradient-to-br from-[#E2A45F]/18 via-[#E57F6D]/20 to-[#F3E6E2]/70">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                <!-- Header -->
                <div class="text-center mb-12">
                    <div
                        class="inline-flex items-center gap-2 mb-4 px-4 py-2 bg-accent/10 border border-accent/30 rounded-full">
                        <?php echo get_field('trusted_badge_icon'); ?>
                        <span class="text-accent uppercase tracking-wide text-sm font-semibold">
                            <?php the_field('trusted_badge_text'); ?>
                        </span>
                    </div>

                    <h2 class="text-4xl md:text-5xl mb-4 text-primary">
                        <?php the_field('trusted_heading'); ?>
                    </h2>

                    <p class="text-lg text-muted-foreground max-w-2xl mx-auto">
                        <?php the_field('trusted_description'); ?>
                    </p>
                </div>

                <!-- Stats Grid -->
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">

                    <?php if (have_rows('trusted_stats')): ?>
                        <?php while (have_rows('trusted_stats')):
                            the_row(); ?>

                            <div class="relative group">
                                <div class="bg-white p-6 rounded-2xl border border-accent/20
                           hover:border-accent/40 transition-all
                           shadow-lg hover:shadow-xl h-full">

                                    <!-- Icon -->
                                    <div class="w-12 h-12 bg-gradient-to-br from-accent to-[#C8915D]
                               rounded-xl flex items-center justify-center
                               text-white mb-4 group-hover:scale-110
                               transition-transform shadow-lg">
                                        <?php echo get_sub_field('stat_icon_svg'); ?>
                                    </div>

                                    <!-- Value -->
                                    <div class="mb-2">
                                        <span class="text-3xl lg:text-4xl text-primary">
                                            <?php the_sub_field('stat_value'); ?>
                                        </span>
                                    </div>

                                    <!-- Label -->
                                    <p class="text-sm text-muted-foreground">
                                        <?php the_sub_field('stat_label'); ?>
                                    </p>

                                    <!-- Glow -->
                                    <div class="absolute top-0 right-0 w-20 h-20
                               bg-gradient-to-br from-accent to-[#C8915D]
                               opacity-5 rounded-full blur-xl
                               group-hover:opacity-10 transition-opacity">
                                    </div>

                                </div>
                            </div>

                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>


            </div>
        </section>

        <section
            class="py-16 lg:py-24 bg-gradient-to-br from-primary via-primary to-[#5A2C3B] text-white relative overflow-hidden">
            <div class="absolute inset-0 opacity-10">
                <div class="absolute inset-0">
                </div>
            </div>
            <div class="absolute top-20 left-20 w-32 h-32 bg-accent/10 rounded-full blur-3xl">
            </div>
            <div class="absolute bottom-10 right-20 w-40 h-40 bg-tertiary/10 rounded-full blur-3xl">
            </div>
            <div class="absolute top-1/3 right-1/4 w-24 h-24 bg-white/5 rounded-full blur-2xl">
            </div>
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid lg:grid-cols-2 gap-8 items-center">
                    <div>

                        <div
                            class="inline-flex items-center gap-2 mb-4 px-4 py-2 bg-accent/30 backdrop-blur-sm border border-accent rounded-full">
                            <!-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-smartphone w-4 h-4" aria-hidden="true">
                                                        <rect width="14" height="20" x="5" y="2" rx="2" ry="2"></rect>
                                                        <path d="M12 18h.01"></path>
                                                    </svg><span>Download Our App</span> -->

                            <!-- <?php echo get_field('download_app_badge_icon'); ?> -->




                        </div>
                        <h2 class="text-3xl md:text-4xl mb-3"><?php the_field('download_app_heading'); ?>
                        </h2>
                        <p class="text-white/90 mb-4"><?php the_field('download_app_description'); ?></p>
                        <div class="flex flex-col gap-4">
                            <!-- <div class="flex flex-col sm:flex-row gap-3">
                                                        <button
                                                            data-slot="button"
                                                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full text-sm font-medium duration-200 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-5 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive hover:scale-105 active:scale-100 shadow-[0_8px_24px_rgba(0,0,0,0.12)] px-10 py-4 bg-primary hover:bg-primary/90 text-white group h-14 border border-accent/20 hover:border-accent/40 hover:shadow-[0_8px_24px_rgba(226,164,95,0.3)] transition-all">
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-apple w-6 h-6 mr-3"
                                                                aria-hidden="true">
                                                                <path d="M12 6.528V3a1 1 0 0 1 1-1h0"></path>
                                                                <path
                                                                    d="M18.237 21A15 15 0 0 0 22 11a6 6 0 0 0-10-4.472A6 6 0 0 0 2 11a15.1 15.1 0 0 0 3.763 10 3 3 0 0 0 3.648.648 5.5 5.5 0 0 1 5.178 0A3 3 0 0 0 18.237 21">
                                                                </path>
                                                            </svg>
                                                            <div class="text-left">
                                                                <div class="text-xs opacity-90 leading-none">Download on
                                                                    the</div>
                                                                <div class="text-base font-semibold leading-tight">App
                                                                    Store</div>
                                                            </div>
                                                        </button>
                                                        <button data-slot="button"
                                                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full text-sm font-medium duration-200 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-5 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive hover:scale-105 active:scale-100 shadow-[0_8px_24px_rgba(0,0,0,0.12)] px-10 py-4 bg-primary hover:bg-primary/90 text-white group h-14 border border-accent/20 hover:border-accent/40 hover:shadow-[0_8px_24px_rgba(226,164,95,0.3)] transition-all">
                                                            <svg
                                                                class="w-6 h-6 mr-3" viewBox="0 0 24 24"
                                                                fill="currentColor">
                                                                <path
                                                                    d="M3,20.5V3.5C3,2.91 3.34,2.39 3.84,2.15L13.69,12L3.84,21.85C3.34,21.6 3,21.09 3,20.5M16.81,15.12L6.05,21.34L14.54,12.85L16.81,15.12M20.16,10.81C20.5,11.08 20.75,11.5 20.75,12C20.75,12.5 20.5,12.92 20.16,13.19L17.89,14.5L15.39,12L17.89,9.5L20.16,10.81M6.05,2.66L16.81,8.88L14.54,11.15L6.05,2.66Z">
                                                                </path>
                                                            </svg>
                                                            <div class="text-left">
                                                                <div class="text-xs opacity-90 leading-none">GET IT ON
                                                                </div>
                                                                <div class="text-base font-semibold leading-tight">
                                                                    Google Play</div>
                                                            </div>
                                                        </button>
                                                    </div> -->
                            <div class="flex flex-col sm:flex-row gap-3">

                                <?php if (have_rows('store_buttons')): ?>
                                    <?php while (have_rows('store_buttons')):
                                        the_row();
                                        $url = get_sub_field('button_url');
                                        $icon = get_sub_field('button_icon');
                                        $smallText = get_sub_field('small_text');
                                        $bigText = get_sub_field('big_text');
                                        ?>

                                        <?php if ($url): ?>
                                            <a href="<?php echo esc_url($url); ?>" target="_blank" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full
                  text-sm font-medium duration-200
                  hover:scale-105 active:scale-100
                  shadow-[0_8px_24px_rgba(0,0,0,0.12)]
                  px-10 py-4 bg-primary hover:bg-primary/90 text-white
                  h-14 border border-accent/20 hover:border-accent/40
                  hover:shadow-[0_8px_24px_rgba(226,164,95,0.3)]
                  transition-all">

                                                <?php if ($icon): ?>
                                                    <span class="w-6 h-6 mr-3">
                                                        <?php echo $icon; ?>
                                                    </span>
                                                <?php endif; ?>

                                                <div class="text-left">
                                                    <?php if ($smallText): ?>
                                                        <div class="text-xs opacity-90 leading-none">
                                                            <?php echo esc_html($smallText); ?>
                                                        </div>
                                                    <?php endif; ?>

                                                    <?php if ($bigText): ?>
                                                        <div class="text-base font-semibold leading-tight">
                                                            <?php echo esc_html($bigText); ?>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </a>
                                        <?php endif; ?>

                                    <?php endwhile; ?>
                                <?php endif; ?>

                            </div>

                            <!-- <div
                                                        class="flex items-center gap-4 p-4 bg-white/10 backdrop-blur-sm rounded-xl border border-white/20">
                                                        <div class="relative ">
                                                            <div
                                                                class="bg-white p-4 rounded-2xl shadow-xl border-2 border-accent/20 inline-block">
                                                                <img src="https://api.qrserver.com/v1/create-qr-code/?size=80x80&amp;data=https://sevora.app/download&amp;bgcolor=F3E6E2&amp;color=4A1C2B"
                                                                    alt="Scan to download SEVORA app"
                                                                    class="w-full h-full" width="80" height="80">
                                                                <div
                                                                    class="flex items-center justify-center gap-2 mt-3 pt-3 border-t border-accent/10">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-smartphone w-4 h-4 text-accent"
                                                                        aria-hidden="true">
                                                                        <rect width="14" height="20" x="5" y="2" rx="2"
                                                                            ry="2"></rect>
                                                                        <path d="M12 18h.01"></path>
                                                                    </svg><span
                                                                        class="text-xs text-primary font-semibold">Scan
                                                                        to Download</span>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="absolute -top-2 -left-2 w-4 h-4 border-t-2 border-l-2 border-accent rounded-tl-lg">
                                                            </div>
                                                            <div
                                                                class="absolute -top-2 -right-2 w-4 h-4 border-t-2 border-r-2 border-accent rounded-tr-lg">
                                                            </div>
                                                            <div
                                                                class="absolute -bottom-2 -left-2 w-4 h-4 border-b-2 border-l-2 border-accent rounded-bl-lg">
                                                            </div>
                                                            <div
                                                                class="absolute -bottom-2 -right-2 w-4 h-4 border-b-2 border-r-2 border-accent rounded-br-lg">
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm font-semibold mb-1">Quick Download</p>
                                                            <p class="text-xs opacity-70">Scan with your phone camera
                                                            </p>
                                                        </div>
                                                    </div> -->
                            <?php
                            $qr_url = get_field('qr_data_url');          // QR code link
                            $qr_alt = get_field('qr_alt_text');          // Alt text for the QR
                            $qr_label = get_field('qr_label_text');        // Label under QR
                            $qr_icon = get_field('qr_icon_svg');          // Optional icon SVG
                            $qr_title = get_field('qr_title');             // Title text
                            $qr_desc = get_field('qr_description');       // Description text
                            
                            // Fallbacks if empty
                            $qr_url = $qr_url ?: 'https://sevora.app/download';
                            $qr_alt = $qr_alt ?: 'Scan to download app';
                            $qr_label = $qr_label ?: 'Scan to Download';
                            ?>

                            <div
                                class="flex items-center gap-4 p-4 bg-white/10 backdrop-blur-sm rounded-xl border border-white/20">

                                <!-- QR Wrapper -->
                                <div class="relative">
                                    <div
                                        class="bg-white p-4 rounded-2xl shadow-xl border-2 border-accent/20 inline-block">

                                        <img src="https://api.qrserver.com/v1/create-qr-code/?size=80x80&data=<?php echo urlencode($qr_url); ?>&bgcolor=F3E6E2&color=4A1C2B"
                                            alt="<?php echo esc_attr($qr_alt); ?>" width="80" height="80"
                                            class="w-full h-full">

                                        <?php if ($qr_label || $qr_icon): ?>
                                            <div
                                                class="flex items-center justify-center gap-2 mt-3 pt-3 border-t border-accent/10">

                                                <?php if ($qr_icon): ?>
                                                    <span class="w-4 h-4 text-accent">
                                                        <?php echo $qr_icon; ?>
                                                    </span>
                                                <?php else: ?>
                                                    <!-- Default smartphone icon -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-smartphone w-4 h-4 text-accent" aria-hidden="true">
                                                        <rect width="14" height="20" x="5" y="2" rx="2" ry="2"></rect>
                                                        <path d="M12 18h.01"></path>
                                                    </svg>
                                                <?php endif; ?>

                                                <?php if ($qr_label): ?>
                                                    <span
                                                        class="text-xs text-primary font-semibold"><?php echo esc_html($qr_label); ?></span>
                                                <?php endif; ?>

                                            </div>
                                        <?php endif; ?>

                                    </div>

                                    <!-- Decorative corners -->
                                    <div
                                        class="absolute -top-2 -left-2 w-4 h-4 border-t-2 border-l-2 border-accent rounded-tl-lg">
                                    </div>
                                    <div
                                        class="absolute -top-2 -right-2 w-4 h-4 border-t-2 border-r-2 border-accent rounded-tr-lg">
                                    </div>
                                    <div
                                        class="absolute -bottom-2 -left-2 w-4 h-4 border-b-2 border-l-2 border-accent rounded-bl-lg">
                                    </div>
                                    <div
                                        class="absolute -bottom-2 -right-2 w-4 h-4 border-b-2 border-r-2 border-accent rounded-br-lg">
                                    </div>
                                </div>

                                <!-- Text content -->
                                <div>
                                    <?php if ($qr_title): ?>
                                        <p class="text-sm font-semibold mb-1"><?php echo esc_html($qr_title); ?></p>
                                    <?php endif; ?>

                                    <?php if ($qr_desc): ?>
                                        <p class="text-xs opacity-70"><?php echo esc_html($qr_desc); ?></p>
                                    <?php endif; ?>
                                </div>

                            </div>

                        </div>
                        <!-- <div
                                                    class="mt-4 p-3 bg-accent/20 backdrop-blur-sm border border-accent rounded-lg">
                                                    <div class="flex items-start gap-2.5">
                                                        <svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
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
                                                </div> -->
                    </div>
                    <div class="relative lg:block hidden">
                        <div class="relative h-[500px] flex items-center justify-center">
                            <?php $img = get_field('download_app_image'); ?>
                            <?php if ($img): ?>
                                <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>"
                                    class="max-h-full w-auto rounded-3xl shadow-2xl">
                            <?php endif; ?>
                            <!-- <div
                                                        class="absolute -top-8 -right-8 w-28 h-28 bg-accent rounded-full flex items-center justify-center animate-pulse">
                                                        <div class="text-center">
                                                            <p class="text-2xl text-accent-foreground">10%</p>
                                                            <p class="text-xs text-accent-foreground">OFF</p>
                                                        </div>
                                                    </div>  -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--  <section
    class="py-16 lg:py-24 bg-gradient-to-br from-primary via-primary to-[#5A2C3B] text-white relative overflow-hidden">

    <!-- Background glows 
    <div class="absolute top-20 left-20 w-32 h-32 bg-accent/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-10 right-20 w-40 h-40 bg-tertiary/10 rounded-full blur-3xl"></div>
    <div class="absolute top-1/3 right-1/4 w-24 h-24 bg-white/5 rounded-full blur-2xl"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-8 items-center">

            <!-- LEFT 
            <div>

                <!-- Badge 
                <div
                    class="inline-flex items-center gap-2 mb-4 px-4 py-2
                           bg-accent/30 backdrop-blur-sm
                           border border-accent rounded-full">

                    <?php if (get_field('download_app_badge_icon')): ?>
                        <span class="[&_svg]:w-4 [&_svg]:h-4">
                            <?php echo get_field('download_app_badge_icon'); ?>
                        </span>
                    <?php endif; ?>

                    <!-- <span><?php the_field('download_app_badge_text'); ?></span> -->
    </div>

    <!-- Heading 
                <h2 class="text-3xl md:text-4xl mb-3">
                    <?php the_field('download_app_heading'); ?>
                </h2>

                <!-- Description 
                <p class="text-white/90 mb-4">
                    <?php the_field('download_app_description'); ?>
                </p>

                <!-- Buttons 
                <div class="flex flex-col gap-4">
                    <div class="flex flex-col sm:flex-row gap-3">

                        <!-- App Store 
                        <?php if (get_field('cta_appstore_url')): ?>
                        <a href="<?php the_field('cta_appstore_url'); ?>" target="_blank"
                           class="inline-flex items-center gap-3 px-10 py-4 h-14
                                  rounded-full bg-primary text-white
                                  border border-accent/20 hover:border-accent/40
                                  hover:scale-105 transition-all shadow-lg">
                            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 6.528V3a1 1 0 0 1 1-1"></path>
                                <path d="M18.237 21A15 15 0 0 0 22 11"></path>
                            </svg>
                            <div class="text-left">
                                <div class="text-xs opacity-90">Download on the</div>
                                <div class="text-base font-semibold">App Store</div>
                            </div>
                        </a>
                        <?php endif; ?>

                        <!-- Play Store 
                        <?php if (get_field('cta_playstore_url')): ?>
                        <a href="<?php the_field('cta_playstore_url'); ?>" target="_blank"
                           class="inline-flex items-center gap-3 px-10 py-4 h-14
                                  rounded-full bg-primary text-white
                                  border border-accent/20 hover:border-accent/40
                                  hover:scale-105 transition-all shadow-lg">
                            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M3,20.5V3.5L13.69,12Z"></path>
                            </svg>
                            <div class="text-left">
                                <div class="text-xs opacity-90">GET IT ON</div>
                                <div class="text-base font-semibold">Google Play</div>
                            </div>
                        </a>
                        <?php endif; ?>

                    </div>

                    <!-- QR 
                    <?php if (get_field('cta_qr_url')): ?>
                    <div
                        class="flex items-center gap-4 p-4 bg-white/10
                               backdrop-blur-sm rounded-xl border border-white/20">

                        <div class="bg-white p-4 rounded-2xl shadow-xl border-2 border-accent/20">
                            <img
                                src="https://api.qrserver.com/v1/create-qr-code/?size=80x80&data=<?php echo urlencode(get_field('cta_qr_url')); ?>"
                                width="80" height="80" alt="Scan to download">
                        </div>

                        <div>
                            <p class="text-sm font-semibold mb-1">Quick Download</p>
                            <p class="text-xs opacity-70">Scan with your phone camera</p>
                        </div>
                    </div>
                    <?php endif; ?>

                </div>
            </div>

            <!-- RIGHT IMAGE 
            <div class="relative lg:block hidden">
                <?php $img = get_field('download_app_image'); ?>
                <?php if ($img): ?>
                    <img src="<?php echo esc_url($img['url']); ?>"
                         alt="<?php echo esc_attr($img['alt']); ?>"
                         class="max-h-full w-auto rounded-3xl shadow-2xl">
                <?php endif; ?>
            </div>

        </div>
    </div>
</section> -->

    </div>
</main>
<?php
get_footer();
?>