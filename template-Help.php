<?php 
// Template Name:Help

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
                                                    <span class="text-primary font-medium">Help Center</span>
                                                </li>
                                            </ol>
                                        </nav>
                                        <!-- <div class="text-center max-w-3xl mx-auto">
                                            <div
                                                class="inline-flex items-center gap-2 mb-6 px-4 py-2 bg-accent/30 backdrop-blur-sm border border-accent rounded-full">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-circle-question-mark w-4 h-4"
                                                    aria-hidden="true">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                    <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                                    <path d="M12 17h.01"></path>
                                                </svg>
                                                <span>Help Center</span>
                                            </div>
                                            <h1 class="text-5xl md:text-6xl lg:text-7xl mb-6">How Can We Help?</h1>
                                            <p class="text-xl md:text-2xl text-white/90 mb-8">Find answers to common
                                                questions or
                                                get in touch with our support team</p>
                                            <div>
                                                <div class="relative max-w-2xl mx-auto">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-search absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-primary/60"
                                                        aria-hidden="true">
                                                        <path d="m21 21-4.34-4.34"></path>
                                                        <circle cx="11" cy="11" r="8"></circle>
                                                    </svg>
                                                    <input type="text" data-slot="input"
                                                        class="file:text-foreground selection:bg-primary selection:text-primary-foreground dark:bg-input/30 border-input flex w-full min-w-0 px-3 py-1 text-base transition-[color,box-shadow] outline-none file:inline-flex file:h-7 file:border-0 file:bg-transparent file:text-sm file:font-medium disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive pl-12 h-14 bg-white text-primary placeholder:text-primary/50 border-0 rounded-xl shadow-xl"
                                                        placeholder="Search for help..." value="">
                                                </div>
                                            </div>
                                        </div> -->

                                        <?php if( have_rows('help_center_section') ): ?>
    <?php while( have_rows('help_center_section') ): the_row(); 
        $badge_icon        = get_sub_field('badge_icon');
        $badge_text        = get_sub_field('badge_text');
        $heading           = get_sub_field('heading');
        $description       = get_sub_field('description');
        $search_placeholder= get_sub_field('search_placeholder');
    ?>
    <div class="text-center max-w-3xl mx-auto">

        <!-- Badge -->
        <?php if($badge_icon || $badge_text): ?>
            <div class="inline-flex items-center gap-2 mb-6 px-4 py-2 bg-accent/30 backdrop-blur-sm border border-accent rounded-full">
                <?php echo $badge_icon; ?>
                <span><?php echo esc_html($badge_text); ?></span>
            </div>
        <?php endif; ?>

        <!-- Heading -->
        <?php if($heading): ?>
            <h1 class="text-5xl md:text-6xl lg:text-7xl mb-6"><?php echo esc_html($heading); ?></h1>
        <?php endif; ?>

        <!-- Description -->
        <?php if($description): ?>
            <p class="text-xl md:text-2xl text-white/90 mb-8"><?php echo esc_html($description); ?></p>
        <?php endif; ?>

        <!-- Search Input -->
        <div>
            <div class="relative max-w-2xl mx-auto">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-search absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-primary/60"
                    aria-hidden="true">
                    <path d="m21 21-4.34-4.34"></path>
                    <circle cx="11" cy="11" r="8"></circle>
                </svg>
                <input type="text" data-slot="input"
                    class="file:text-foreground selection:bg-primary selection:text-primary-foreground dark:bg-input/30 border-input flex w-full min-w-0 px-3 py-1 text-base transition-[color,box-shadow] outline-none file:inline-flex file:h-7 file:border-0 file:bg-transparent file:text-sm file:font-medium disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive pl-12 h-14 bg-white text-primary placeholder:text-primary/50 border-0 rounded-xl shadow-xl"
                    placeholder="<?php echo esc_attr($search_placeholder); ?>" value="">
            </div>
        </div>

    </div>
    <?php endwhile; ?>
<?php endif; ?>

                                    </div>
                                    <div class="absolute bottom-8 left-1/2 -translate-x-1/2">
                                        <div
                                            class="w-6 h-10 border-2 border-white/40 rounded-full flex items-start justify-center p-2">
                                            <div class="w-1.5 h-1.5 bg-white rounded-full"></div>
                                        </div>
                                    </div>
                                </section>
                                <!-- <section
                                    class="py-12 bg-gradient-to-b from-[#F3E6E2]/40 to-white border-b border-accent/20">
                                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                                        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
                                            <a href="#"
                                                class="flex items-center gap-3 p-4 bg-white/95 backdrop-blur-sm rounded-xl border border-accent/20 hover:border-accent/40 hover:shadow-[0_12px_30px_rgba(226,164,95,0.2)] transition-all duration-300 group">
                                                <div
                                                    class="w-10 h-10 bg-gradient-to-br from-accent to-[#C8915D] rounded-lg flex items-center justify-center text-white group-hover:scale-110 transition-transform">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-download w-5 h-5" aria-hidden="true">
                                                        <path d="M12 15V3"></path>
                                                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                        <path d="m7 10 5 5 5-5"></path>
                                                    </svg>
                                                </div>
                                                <span class="font-medium text-foreground">Download App</span>
                                            </a>
                                            <a href="#"
                                                class="flex items-center gap-3 p-4 bg-white/95 backdrop-blur-sm rounded-xl border border-accent/20 hover:border-accent/40 hover:shadow-[0_12px_30px_rgba(226,164,95,0.2)] transition-all duration-300 group">
                                                <div
                                                    class="w-10 h-10 bg-gradient-to-br from-accent to-[#C8915D] rounded-lg flex items-center justify-center text-white group-hover:scale-110 transition-transform">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-package w-5 h-5" aria-hidden="true">
                                                        <path
                                                            d="M11 21.73a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73z">
                                                        </path>
                                                        <path d="M12 22V12"></path>
                                                        <polyline points="3.29 7 12 12 20.71 7"></polyline>
                                                        <path d="m7.5 4.27 9 5.15"></path>
                                                    </svg>
                                                </div>
                                                <span class="font-medium text-foreground">Track Order</span>
                                            </a>
                                            <a href="#"
                                                class="flex items-center gap-3 p-4 bg-white/95 backdrop-blur-sm rounded-xl border border-accent/20 hover:border-accent/40 hover:shadow-[0_12px_30px_rgba(226,164,95,0.2)] transition-all duration-300 group">
                                                <div
                                                    class="w-10 h-10 bg-gradient-to-br from-accent to-[#C8915D] rounded-lg flex items-center justify-center text-white group-hover:scale-110 transition-transform">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-rotate-ccw w-5 h-5" aria-hidden="true">
                                                        <path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8">
                                                        </path>
                                                        <path d="M3 3v5h5"></path>
                                                    </svg>
                                                </div>
                                                <span class="font-medium text-foreground">Return Item</span>
                                            </a>
                                            <a href="#"
                                                class="flex items-center gap-3 p-4 bg-white/95 backdrop-blur-sm rounded-xl border border-accent/20 hover:border-accent/40 hover:shadow-[0_12px_30px_rgba(226,164,95,0.2)] transition-all duration-300 group">
                                                <div
                                                    class="w-10 h-10 bg-gradient-to-br from-accent to-[#C8915D] rounded-lg flex items-center justify-center text-white group-hover:scale-110 transition-transform">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-user w-5 h-5" aria-hidden="true">
                                                        <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                                        <circle cx="12" cy="7" r="4"></circle>
                                                    </svg>
                                                </div>
                                                <span class="font-medium text-foreground">My Account</span>
                                            </a>
                                        </div>
                                    </div>
                                </section> -->


                                <section class="py-12 bg-gradient-to-b from-[#F3E6E2]/40 to-white border-b border-accent/20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">

            <?php if( have_rows('quick_links_section') ): ?>
                <?php while( have_rows('quick_links_section') ): the_row(); 
                    $link_icon = get_sub_field('link_icon');
                    $link_text = get_sub_field('link_text');
                    $link_url  = get_sub_field('link_url');
                ?>
                    <a href="<?php echo esc_url($link_url); ?>" 
                       class="flex items-center gap-3 p-4 bg-white/95 backdrop-blur-sm rounded-xl border border-accent/20 hover:border-accent/40 hover:shadow-[0_12px_30px_rgba(226,164,95,0.2)] transition-all duration-300 group">
                       
                        <div class="w-10 h-10 bg-gradient-to-br from-accent to-[#C8915D] rounded-lg flex items-center justify-center text-white group-hover:scale-110 transition-transform">
                            <?php echo $link_icon; ?>
                        </div>
                        <span class="font-medium text-foreground"><?php echo esc_html($link_text); ?></span>
                    </a>
                <?php endwhile; ?>
            <?php endif; ?>

        </div>
    </div>
</section>

                                <!-- <section class="py-16 lg:py-24 bg-gradient-to-b from-white via-[#E2A45F]/5 to-white">
                                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                                        <div class="text-center mb-12">
                                            <h2 class="text-4xl md:text-5xl mb-4">Frequently Asked Questions</h2>
                                            <p class="text-lg text-muted-foreground max-w-2xl mx-auto">Browse through
                                                common questions or use search to find specific answers</p>
                                        </div>
                                        <div id="filterOptions" class="flex flex-wrap gap-3 justify-center mb-12">
                                            <button data-filter="all"
                                                class="inline-flex items-center gap-2 px-6 py-3 rounded-full transition-all duration-300 bg-white border border-accent/20 text-foreground hover:border-accent/40 hover:shadow-md all active">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-circle-question-mark w-5 h-5"
                                                    aria-hidden="true">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                    <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                                    <path d="M12 17h.01"></path>
                                                </svg>
                                                <span>All</span>
                                            </button>
                                            <button data-filter="orders"
                                                class="inline-flex items-center gap-2 px-6 py-3 rounded-full transition-all duration-300 bg-white border border-accent/20 text-foreground hover:border-accent/40 hover:shadow-md item orders">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-shopping-bag w-5 h-5" aria-hidden="true">
                                                    <path d="M16 10a4 4 0 0 1-8 0"></path>
                                                    <path d="M3.103 6.034h17.794"></path>
                                                    <path
                                                        d="M3.4 5.467a2 2 0 0 0-.4 1.2V20a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6.667a2 2 0 0 0-.4-1.2l-2-2.667A2 2 0 0 0 17 2H7a2 2 0 0 0-1.6.8z">
                                                    </path>
                                                </svg>
                                                <span>Orders</span>
                                            </button>
                                            <button  data-filter="delivery"
                                                class="inline-flex items-center gap-2 px-6 py-3 rounded-full transition-all duration-300 bg-white border border-accent/20 text-foreground hover:border-accent/40 hover:shadow-md item delivery">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-truck w-5 h-5" aria-hidden="true">
                                                    <path d="M14 18V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h2">
                                                    </path>
                                                    <path d="M15 18H9"></path>
                                                    <path
                                                        d="M19 18h2a1 1 0 0 0 1-1v-3.65a1 1 0 0 0-.22-.624l-3.48-4.35A1 1 0 0 0 17.52 8H14">
                                                    </path>
                                                    <circle cx="17" cy="18" r="2"></circle>
                                                    <circle cx="7" cy="18" r="2"></circle>
                                                </svg>
                                                <span>Delivery</span>
                                            </button>
                                            <button
                                                class="inline-flex items-center gap-2 px-6 py-3 rounded-full transition-all duration-300 bg-white border border-accent/20 text-foreground hover:border-accent/40 hover:shadow-md returns">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-rotate-ccw w-5 h-5" aria-hidden="true">
                                                    <path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"></path>
                                                    <path d="M3 3v5h5"></path>
                                                </svg>
                                                <span>Returns</span>
                                            </button>
                                            <button
                                                class="inline-flex items-center gap-2 px-6 py-3 rounded-full transition-all duration-300 bg-white border border-accent/20 text-foreground hover:border-accent/40 hover:shadow-md payment">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-credit-card w-5 h-5" aria-hidden="true">
                                                    <rect width="20" height="14" x="2" y="5" rx="2"></rect>
                                                    <line x1="2" x2="22" y1="10" y2="10"></line>
                                                </svg>
                                                <span>Payment</span>
                                            </button>
                                            <button
                                                class="inline-flex items-center gap-2 px-6 py-3 rounded-full transition-all duration-300 bg-white border border-accent/20 text-foreground hover:border-accent/40 hover:shadow-md account">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-user w-5 h-5" aria-hidden="true">
                                                    <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                                    <circle cx="12" cy="7" r="4"></circle>
                                                </svg>
                                                <span>Account</span>
                                            </button>
                                        </div>
                                        <div class="max-w-4xl mx-auto">
                                            <div id="ourHolder" class="space-y-4">
                                                <div
                                                    class="bg-secondary border border-accent/20 rounded-xl px-6 hover:border-accent transition-colors item orders">
                                                    <h3 class="flex at-title">
                                                        <button type="button"
                                                            class="focus-visible:border-ring focus-visible:ring-ring/50 flex flex-1 items-start justify-between gap-4 rounded-md text-sm font-medium transition-all outline-none focus-visible:ring-[3px] disabled:pointer-events-none disabled:opacity-50 [&amp;[data-state=open]&gt;svg]:rotate-180 text-left hover:no-underline py-6">
                                                            <span class="pr-4">How do I place an order on the SEVORA
                                                                app? Orders</span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-chevron-down text-muted-foreground pointer-events-none size-4 shrink-0 translate-y-0.5 transition-transform duration-200">
                                                                <path d="m6 9 6 6 6-6"></path>
                                                            </svg>
                                                        </button>
                                                    </h3>
                                                    <div class=" overflow-hidden text-sm hidden at-tab">
                                                        <div class="pt-0 text-muted-foreground pb-6">Download the SEVORA
                                                            app from the App Store or Google Play, create an account,
                                                            browse our curated collections, add items to your cart, and
                                                            complete checkout. Our app provides a seamless luxury
                                                            shopping experience with personalized recommendations.</div>
                                                    </div>
                                                </div>

                                                <div
                                                    class="bg-secondary border border-accent/20 rounded-xl px-6 hover:border-accent transition-colors item delivery">
                                                    <h3 class="flex at-title">
                                                        <button type="button"
                                                            class="focus-visible:border-ring focus-visible:ring-ring/50 flex flex-1 items-start justify-between gap-4 rounded-md text-sm font-medium transition-all outline-none focus-visible:ring-[3px] disabled:pointer-events-none disabled:opacity-50 [&amp;[data-state=open]&gt;svg]:rotate-180 text-left hover:no-underline py-6">
                                                            <span class="pr-4">How do I place an order on the SEVORA
                                                                app?  Delivery</span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-chevron-down text-muted-foreground pointer-events-none size-4 shrink-0 translate-y-0.5 transition-transform duration-200">
                                                                <path d="m6 9 6 6 6-6"></path>
                                                            </svg>
                                                        </button>
                                                    </h3>
                                                    <div class=" overflow-hidden text-sm hidden at-tab">
                                                        <div class="pt-0 text-muted-foreground pb-6">Download the SEVORA
                                                            app from the App Store or Google Play, create an account,
                                                            browse our curated collections, add items to your cart, and
                                                            complete checkout. Our app provides a seamless luxury
                                                            shopping experience with personalized recommendations.</div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </section> -->

                                <?php if (have_rows('faq_section')) : ?>
<?php while (have_rows('faq_section')) : the_row(); ?>

<section class="py-16 bg-white">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

<!-- Heading -->
<div class="text-center mb-12">
    <h2 class="text-4xl md:text-5xl mb-4">
        <?php the_sub_field('section_heading'); ?>
    </h2>
    <p class="text-lg text-muted-foreground max-w-2xl mx-auto">
        <?php the_sub_field('section_description'); ?>
    </p>
</div>

<!-- Filters -->
<!-- Filters -->
<?php if (have_rows('faq_categories')) : ?>
<div class="flex flex-wrap gap-3 justify-center mb-12">

<!-- All button with SVG -->
<button
    class="faq-filter active inline-flex items-center gap-2 px-6 py-3 rounded-full bg-gradient-to-r from-accent to-[#C8915D] text-white"
    data-filter="all">

    <!-- Question mark SVG -->
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
         viewBox="0 0 24 24" fill="none" stroke="currentColor"
         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
         class="lucide lucide-circle-question-mark w-5 h-5"
         aria-hidden="true">
        <circle cx="12" cy="12" r="10"></circle>
        <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
        <path d="M12 17h.01"></path>
    </svg>

    <span>All</span>
</button>

<?php while (have_rows('faq_categories')) : the_row(); ?>
<button
    class="faq-filter inline-flex items-center gap-2 px-6 py-3 rounded-full bg-white border border-accent/20"
    data-filter="<?php echo esc_attr(get_sub_field('faq_category')); ?>">
    <?php echo get_sub_field('category_icon'); ?>
    <span><?php echo esc_html(ucfirst(get_sub_field('faq_category'))); ?></span>
</button>
<?php endwhile; ?>

</div>
<?php endif; ?>


<!-- FAQ Items -->
<div class="max-w-4xl mx-auto space-y-4">

<?php while (have_rows('faq_categories')) : the_row(); 
$cat = get_sub_field('faq_category');
?>

<?php if (have_rows('faqs')) : ?>
<?php while (have_rows('faqs')) : the_row(); ?>

<div class="faq-item bg-secondary border border-accent/20 rounded-xl px-6"
     data-category="<?php echo esc_attr($cat); ?>">

<h3>
<button class="faq-toggle flex w-full items-start justify-between gap-4 py-6 text-left font-medium">
    <span><?php the_sub_field('faq_question'); ?></span>
    <svg class="size-4 transition-transform" viewBox="0 0 24 24" fill="none" stroke="currentColor">
        <path d="m6 9 6 6 6-6"/>
    </svg>
</button>
</h3>

<div class="faq-content hidden text-sm pb-6">
    <?php the_sub_field('faq_answer'); ?>
</div>

</div>

<?php endwhile; ?>
<?php endif; ?>
<?php endwhile; ?>

</div>
</div>
</section>

<?php endwhile; ?>
<?php endif; ?>

<script>
/* FILTER */
document.querySelectorAll('.faq-filter').forEach(btn => {
    btn.addEventListener('click', () => {
        const filter = btn.dataset.filter;

        document.querySelectorAll('.faq-filter').forEach(b => {
            // Remove active classes from all buttons
            b.classList.remove('active', 'bg-gradient-to-r', 'from-accent', 'to-[#C8915D]', 'text-white', 'shadow-[0_8px_20px_rgba(226,164,95,0.3)]');
            // Reset to default
            b.classList.add('bg-white', 'border', 'border-accent/20', 'text-foreground');
        });

        // Add active classes to clicked button
        btn.classList.add('active', 'bg-gradient-to-r', 'from-accent', 'to-[#C8915D]', 'text-white', 'shadow-[0_8px_20px_rgba(226,164,95,0.3)]');
        btn.classList.remove('bg-white', 'border', 'border-accent/20', 'text-foreground');

        // Filter FAQ items
        document.querySelectorAll('.faq-item').forEach(item => {
            item.style.display =
                filter === 'all' || item.dataset.category === filter
                ? 'block'
                : 'none';
        });
    });
});

/* ACCORDION */
document.querySelectorAll('.faq-toggle').forEach(btn => {
    btn.addEventListener('click', () => {
        const content = btn.closest('.faq-item').querySelector('.faq-content');
        content.classList.toggle('hidden');
        btn.querySelector('svg').classList.toggle('rotate-180');
    });
});
</script>



                                <!-- <section class="py-16 lg:py-24 bg-secondary">
                                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                                        <div class="text-center mb-12">
                                            <h2 class="text-4xl md:text-5xl mb-4">Still Need Help?</h2>
                                            <p class="text-lg text-muted-foreground max-w-2xl mx-auto">Our luxury
                                                concierge team is here to assist you 24/7</p>
                                        </div>
                                        <div class="grid md:grid-cols-3 gap-8">
                                            <div
                                                class="bg-white p-8 rounded-2xl text-center border border-accent/20 hover:border-accent hover:shadow-[0_16px_32px_rgba(0,0,0,0.12)] transition-all group">
                                                <div
                                                    class="w-16 h-16 bg-gradient-to-br from-accent to-[#C8915D] rounded-full flex items-center justify-center mx-auto mb-6 text-white group-hover:scale-110 transition-all duration-200 shadow-lg">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-message-square w-6 h-6" aria-hidden="true">
                                                        <path
                                                            d="M22 17a2 2 0 0 1-2 2H6.828a2 2 0 0 0-1.414.586l-2.202 2.202A.71.71 0 0 1 2 21.286V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2z">
                                                        </path>
                                                    </svg>
                                                </div>
                                                <h3 class="text-xl mb-2">Live Chat</h3>
                                                <p class="text-foreground mb-1">Chat with our team 24/7</p>
                                                <p
                                                    class="text-sm text-muted-foreground mb-6 flex items-center justify-center gap-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-clock w-4 h-4" aria-hidden="true">
                                                        <path d="M12 6v6l4 2"></path>
                                                        <circle cx="12" cy="12" r="10"></circle>
                                                    </svg>
                                                    24/7
                                                </p>
                                                <button data-slot="button"
                                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full text-sm font-medium transition-all duration-200 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-5 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive hover:scale-105 hover:shadow-lg active:scale-100 shadow-[0_8px_24px_rgba(0,0,0,0.12)] h-[52px] px-8 py-3.5 bg-primary text-white hover:bg-primary/90 w-full">Start
                                                    Chat</button>
                                            </div>
                                            <div
                                                class="bg-white p-8 rounded-2xl text-center border border-accent/20 hover:border-accent hover:shadow-[0_16px_32px_rgba(0,0,0,0.12)] transition-all group">
                                                <div
                                                    class="w-16 h-16 bg-gradient-to-br from-primary to-[#5A2C3B] rounded-full flex items-center justify-center mx-auto mb-6 text-white group-hover:scale-110 transition-all duration-200 shadow-lg">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-phone w-6 h-6" aria-hidden="true">
                                                        <path
                                                            d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384">
                                                        </path>
                                                    </svg>
                                                </div>
                                                <h3 class="text-xl mb-2">Call Us</h3>
                                                <p class="text-foreground mb-1">+91 123 456 7890</p>
                                                <p
                                                    class="text-sm text-muted-foreground mb-6 flex items-center justify-center gap-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-clock w-4 h-4" aria-hidden="true">
                                                        <path d="M12 6v6l4 2"></path>
                                                        <circle cx="12" cy="12" r="10"></circle>
                                                    </svg>
                                                    9 AM - 9 PM IST
                                                </p>
                                                <button data-slot="button"
                                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full text-sm font-medium transition-all duration-200 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-5 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive hover:scale-105 hover:shadow-lg active:scale-100 shadow-[0_8px_24px_rgba(0,0,0,0.12)] h-[52px] px-8 py-3.5 bg-primary text-white hover:bg-primary/90 w-full">
                                                    Call
                                                    Now</button>
                                            </div>
                                            <div
                                                class="bg-white p-8 rounded-2xl text-center border border-accent/20 hover:border-accent hover:shadow-[0_16px_32px_rgba(0,0,0,0.12)] transition-all group">
                                                <div
                                                    class="w-16 h-16 bg-gradient-to-br from-tertiary to-accent rounded-full flex items-center justify-center mx-auto mb-6 text-white group-hover:scale-110 transition-all duration-200 shadow-lg">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-mail w-6 h-6" aria-hidden="true">
                                                        <path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"></path>
                                                        <rect x="2" y="4" width="20" height="16" rx="2"></rect>
                                                    </svg>
                                                </div>
                                                <h3 class="text-xl mb-2">Email Support</h3>
                                                <p class="text-foreground mb-1">support@sevora.com</p>
                                                <p
                                                    class="text-sm text-muted-foreground mb-6 flex items-center justify-center gap-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-clock w-4 h-4" aria-hidden="true">
                                                        <path d="M12 6v6l4 2"></path>
                                                        <circle cx="12" cy="12" r="10"></circle>
                                                    </svg>
                                                    Response in 2 hours
                                                </p>
                                                <button data-slot="button"
                                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full text-sm font-medium transition-all duration-200 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-5 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive hover:scale-105 hover:shadow-lg active:scale-100 shadow-[0_8px_24px_rgba(0,0,0,0.12)] h-[52px] px-8 py-3.5 bg-primary text-white hover:bg-primary/90 w-full">Send
                                                    Email</button>
                                            </div>
                                        </div>
                                    </div>
                                </section> -->
                                <?php if( have_rows('help_section') ): ?>
    <?php while( have_rows('help_section') ): the_row(); 
        // Section heading & description
        $main_heading = get_sub_field('heading');
        $main_description = get_sub_field('description');
    ?>
    <section class="py-16 lg:py-24 bg-secondary">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Section Heading -->
            <div class="text-center mb-12">
                <h2 class="text-4xl md:text-5xl mb-4"><?php echo esc_html($main_heading); ?></h2>
                <p class="text-lg text-muted-foreground max-w-2xl mx-auto"><?php echo esc_html($main_description); ?></p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <?php if( have_rows('support_methods') ): ?>
                    <?php while( have_rows('support_methods') ): the_row(); 
                        $icon = get_sub_field('icon'); // SVG
                        $title = get_sub_field('title');
                        $description = get_sub_field('description');
                        $time_info = get_sub_field('time_info');
                        $button      = get_sub_field('button_link'); // ACF Link field
$button_text = get_sub_field('button_text');
$type        = get_sub_field('button_type'); // chat | call | email

$button_href = '';
$chat_js     = '';

if ($type === 'chat') {
    // JS trigger for chat
    $chat_js = 'onclick="openChatWidget()"';
} elseif (!empty($button) && is_array($button)) {
    // Call / Email / Normal link
    $button_href = esc_url($button['url']);
}
                    ?>
                    <div class="bg-white p-8 rounded-2xl text-center border border-accent/20 hover:border-accent hover:shadow-[0_16px_32px_rgba(0,0,0,0.12)] transition-all group">
                        <div class="w-16 h-16 bg-gradient-to-br from-accent to-[#C8915D] rounded-full flex items-center justify-center mx-auto mb-6 text-white group-hover:scale-110 transition-all duration-200 shadow-lg">
                            <?php echo $icon; ?>
                        </div>
                        <h3 class="text-xl mb-2"><?php echo esc_html($title); ?></h3>
                        <p class="text-foreground mb-1"><?php echo esc_html($description); ?></p>
                        <?php if($time_info): ?>
                        <p class="text-sm text-muted-foreground mb-6 flex items-center justify-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock w-4 h-4" aria-hidden="true">
                                <path d="M12 6v6l4 2"></path>
                                <circle cx="12" cy="12" r="10"></circle>
                            </svg>
                            <?php echo esc_html($time_info); ?>
                        </p>
                        <?php endif; ?>
                        <button
    <?php
    echo ($type === 'chat')
        ? $chat_js
        : 'onclick="location.href=\'' . $button_href . '\'"';
    ?>
    class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full text-sm font-medium transition-all duration-200 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg:not([class*='size-'])]:size-5 shrink-0 [&_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] hover:scale-105 hover:shadow-lg active:scale-100 shadow-[0_8px_24px_rgba(0,0,0,0.12)] h-[52px] px-8 py-3.5 bg-primary text-white hover:bg-primary/90 w-full">
    
    <?php echo esc_html($button_text); ?>

</button>

                    </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endwhile; ?>
<?php endif; ?>

                                <!-- <section class="py-16 lg:py-24 bg-white">
                                    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                                        <div>
                                            <div
                                                class="inline-flex items-center gap-2 px-4 py-2 bg-accent/10 border border-accent/20 rounded-full mb-6">
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
                                                </svg>
                                                <span class="text-sm tracking-wide text-accent">BETTER EXPERIENCE</span>
                                            </div>
                                            <h2 class="text-4xl md:text-5xl mb-6">Get the SEVORA App</h2>
                                            <p class="text-xl text-muted-foreground mb-8 max-w-2xl mx-auto">Download our
                                                app for exclusive access to luxury fashion, personal styling, and
                                                60-minute express delivery</p>
                                            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                                                <button data-slot="button"
                                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full text-sm font-medium duration-200 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-5 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive hover:shadow-lg active:scale-100 shadow-[0_8px_24px_rgba(0,0,0,0.12)] h-[52px] bg-primary text-white hover:bg-primary/90 hover:scale-105 transition-all px-8 py-6 group">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-download w-5 h-5 mr-2" aria-hidden="true">
                                                        <path d="M12 15V3"></path>
                                                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                        <path d="m7 10 5 5 5-5"></path>
                                                    </svg>
                                                    Download for iOS
                                                </button>
                                                <button data-slot="button"
                                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full text-sm font-medium duration-200 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-5 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive hover:shadow-lg active:scale-100 border bg-transparent dark:bg-input/30 dark:border-input dark:hover:bg-input/50 shadow-[0_4px_16px_rgba(0,0,0,0.08)] h-[52px] border-accent text-accent hover:bg-accent hover:text-white hover:scale-105 transition-all px-8 py-6">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-download w-5 h-5 mr-2" aria-hidden="true">
                                                        <path d="M12 15V3"></path>
                                                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                        <path d="m7 10 5 5 5-5"></path>
                                                    </svg>
                                                    Download for Android
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </section> -->

                                <?php if (have_rows('get_app_section')): ?>
    <?php while (have_rows('get_app_section')): the_row(); ?>

        <section class="py-16 lg:py-24 bg-white">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">

                <?php
                $badge_text = get_sub_field('badge_text');
                $badge_icon = get_sub_field('badge_icon');
                $heading    = get_sub_field('heading');
                $desc       = get_sub_field('description');
                ?>

                <?php if ($badge_text || $badge_icon): ?>
                    <div
                        class="inline-flex items-center gap-2 px-4 py-2 bg-accent/10 border border-accent/20 rounded-full mb-6">

                        <?php if ($badge_icon): ?>
                            <span class="w-4 h-4 text-accent">
                                <?php echo $badge_icon; ?>
                            </span>
                        <?php endif; ?>

                        <?php if ($badge_text): ?>
                            <span class="text-sm tracking-wide text-accent">
                                <?php echo esc_html($badge_text); ?>
                            </span>
                        <?php endif; ?>

                    </div>
                <?php endif; ?>

                <?php if ($heading): ?>
                    <h2 class="text-4xl md:text-5xl mb-6">
                        <?php echo esc_html($heading); ?>
                    </h2>
                <?php endif; ?>

                <?php if ($desc): ?>
                    <p class="text-xl text-muted-foreground mb-8 max-w-2xl mx-auto">
                        <?php echo esc_html($desc); ?>
                    </p>
                <?php endif; ?>

                <?php if (have_rows('app_buttons')): ?>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <?php while (have_rows('app_buttons')): the_row();

                            $btn_text  = get_sub_field('button_text');
                            $btn_icon  = get_sub_field('button_icon');
                            $btn_link  = get_sub_field('button_link');
                            $btn_style = get_sub_field('button_style');
                            ?>

                            <a href="<?php echo esc_url($btn_link); ?>" target="_blank"
                               class="inline-flex items-center justify-center gap-2 rounded-full text-sm font-medium h-[52px] px-8 py-6 transition-all
                               <?php echo ($btn_style === 'primary')
                                   ? 'bg-primary text-white hover:bg-primary/90 hover:scale-105 shadow-[0_8px_24px_rgba(0,0,0,0.12)]'
                                   : 'border border-accent text-accent hover:bg-accent hover:text-white hover:scale-105 shadow-[0_4px_16px_rgba(0,0,0,0.08)]'; ?>">

                                <?php if ($btn_icon): ?>
                                    <span class="w-5 h-5">
                                        <?php echo $btn_icon; ?>
                                    </span>
                                <?php endif; ?>

                                <?php if ($btn_text): ?>
                                    <?php echo esc_html($btn_text); ?>
                                <?php endif; ?>

                            </a>

                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>

            </div>
        </section>

    <?php endwhile; ?>
<?php endif; ?>

                            </div>
                        </main>


<?php
get_footer();
?>