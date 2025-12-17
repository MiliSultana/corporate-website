<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" /> -->
    <link href="<?php echo get_template_directory_uri(); ?>/output.css" rel="stylesheet">
</head>

<body>
    <div id="container">
        <div class="">
            <div class="">
                <div class="tailwind css-myl2ny css-exq74d">
                    <div class="min-h-screen flex flex-col">
                        <header class="sticky top-0 z-50 bg-primary border-b border-accent/20">
                            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                                <div class="flex items-center justify-between h-16 lg:h-20">
                                    <a class="flex items-center space-x-2" href="<?php echo site_url(); ?>"
                                        data-discover="true">
                                        <?php $logoimg = get_header_image(); ?>

                                        <img src="<?php echo $logoimg; ?>" alt="" class="w-auto h-6 " />
                                    </a>
                                    <nav class="hidden md:flex items-center space-x-8 ">
                                        <!-- <a class="transition-colors hover:text-accent text-accent" href="index.html"
                                            data-discover="true">Home</a>
                                        <a class="transition-colors hover:text-accent text-white" href="/about.html"
                                            data-discover="true">About</a>
                                        <a class="transition-colors hover:text-accent text-white" href="/services.html"
                                            data-discover="true">Our USPs</a>
                                        <a class="transition-colors hover:text-accent text-white" href="/media.html"
                                            data-discover="true">Media</a>
                                        <a class="transition-colors hover:text-accent text-white" href="/blog.html"
                                            data-discover="true">Blog</a>
                                        <a class="transition-colors hover:text-accent text-white" href="/careers.html"
                                            data-discover="true">Careers</a>
                                        <a class="transition-colors hover:text-accent text-white" href="/contact.html"
                                            data-discover="true">Contact</a><a
                                            class="transition-colors hover:text-accent text-white" href="/help.html"
                                            data-discover="true">Help</a> -->
                                        <!-- <nav class="flex flex-col space-y-4"> -->
                                        <?php
                                        wp_nav_menu([
                                            'theme_location' => 'primary-menu',
                                            'menu_class' => 'nav md:flex items-center space-x-8',

                                        ]);
                                        ?>

                                    </nav>
                                    <div class="hidden md:flex items-center gap-3">
                                        <a href="https://play.google.com/store/apps/details?id=com.sevora">
                                            <button data-slot="dropdown-menu-trigger"
                                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full text-sm font-medium transition-all duration-200 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-5 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive hover:scale-105 hover:shadow-lg active:scale-100 shadow-[0_8px_24px_rgba(0,0,0,0.12)] h-[52px] px-8 py-3.5 bg-accent text-white hover:bg-accent/90"
                                                type="button" id="radix-:r0:" aria-haspopup="menu" aria-expanded="false"
                                                data-state="closed"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-smartphone w-4 h-4 mr-2" aria-hidden="true">
                                                    <rect width="14" height="20" x="5" y="2" rx="2" ry="2"></rect>
                                                    <path d="M12 18h.01"></path>
                                                </svg>Download App</button></a>
                                    </div>
                                    <button id="desktopIcon" class="md:hidden p-2 text-white">
                                        <i class='bx  bx-menu text-3xl'></i>
                                    </button>
                                    <button id="mobileIcon" class="md:hidden hidden p-2 text-white">
                                        <i class='bx  bx-x text-3xl'></i>
                                    </button>
                                </div>
                                <div id="mobileNav" class="md:hidden hidden py-4 border-t border-accent/20">
                                    <nav class="flex flex-col space-y-4"><a
                                            class="text-left py-2 transition-colors hover:text-accent text-accent"
                                            href="index.html" data-discover="true">Home</a><a
                                            class="text-left py-2 transition-colors hover:text-accent text-white"
                                            href="/about.html" data-discover="true">About</a><a
                                            class="text-left py-2 transition-colors hover:text-accent text-white"
                                            href="/services.html" data-discover="true">Our USPs</a><a
                                            class="text-left py-2 transition-colors hover:text-accent text-white"
                                            href="/media.html" data-discover="true">Media</a><a
                                            class="text-left py-2 transition-colors hover:text-accent text-white"
                                            href="/blog.html" data-discover="true">Blog</a><a
                                            class="text-left py-2 transition-colors hover:text-accent text-white"
                                            href="/careers.html" data-discover="true">Careers</a><a
                                            class="text-left py-2 transition-colors hover:text-accent text-white"
                                            href="/contact.html" data-discover="true">Contact</a><a
                                            class="text-left py-2 transition-colors hover:text-accent text-white"
                                            href="/help.html" data-discover="true">Help</a>
                                        <div class="pt-4 border-t border-accent/20">
                                            <p class="text-white/60 text-sm mb-3">Download Our App</p>
                                            <div class="flex flex-col gap-2"><a href="" target="_blank"
                                                    rel="noopener noreferrer"
                                                    class="flex items-center gap-3 p-3 bg-white/10 hover:bg-white/20 rounded-lg transition-colors border border-white/20"><svg
                                                        class="w-6 h-6 text-white" viewBox="0 0 24 24"
                                                        fill="currentColor">
                                                        <path
                                                            d="M17.05 20.28c-.98.95-2.05.8-3.08.35-1.09-.46-2.09-.48-3.24 0-1.44.62-2.2.44-3.06-.35C2.79 15.25 3.51 7.59 9.05 7.31c1.35.07 2.29.74 3.08.8 1.18-.24 2.31-.93 3.57-.84 1.51.12 2.65.72 3.4 1.8-3.12 1.87-2.38 5.98.48 7.13-.57 1.5-1.31 2.99-2.54 4.09l.01-.01zM12.03 7.25c-.15-2.23 1.66-4.07 3.74-4.25.29 2.58-2.34 4.5-3.74 4.25z">
                                                        </path>
                                                    </svg>
                                                    <div class="text-left text-white">
                                                        <div class="text-xs opacity-70">Download on the</div>
                                                        <div class="text-sm font-semibold">App Store</div>
                                                    </div>
                                                </a><a href="" target="_blank" rel="noopener noreferrer"
                                                    class="flex items-center gap-3 p-3 bg-white/10 hover:bg-white/20 rounded-lg transition-colors border border-white/20"><svg
                                                        class="w-6 h-6 text-white" viewBox="0 0 24 24"
                                                        fill="currentColor">
                                                        <path
                                                            d="M3,20.5V3.5C3,2.91 3.34,2.39 3.84,2.15L13.69,12L3.84,21.85C3.34,21.6 3,21.09 3,20.5M16.81,15.12L6.05,21.34L14.54,12.85L16.81,15.12M20.16,10.81C20.5,11.08 20.75,11.5 20.75,12C20.75,12.5 20.5,12.92 20.16,13.19L17.89,14.5L15.39,12L17.89,9.5L20.16,10.81M6.05,2.66L16.81,8.88L14.54,11.15L6.05,2.66Z">
                                                        </path>
                                                    </svg>
                                                    <div class="text-left text-white">
                                                        <div class="text-xs opacity-70">GET IT ON</div>
                                                        <div class="text-sm font-semibold">Google Play</div>
                                                    </div>
                                                </a></div>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </header>