 <footer class="bg-primary text-white">
                            <div class="bg-[#F3E6E2] text-primary py-16 lg:py-20 relative overflow-hidden">
                                <div class="absolute inset-0 opacity-5">
                                    <div class="absolute top-10 left-10 w-64 h-64 bg-accent rounded-full blur-3xl">
                                    </div>
                                    <div class="absolute bottom-10 right-10 w-64 h-64 bg-primary rounded-full blur-3xl">
                                    </div>
                                </div>
                                <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
                                    <div>
                                        <!-- <div
                                            class="inline-flex items-center gap-2 px-4 py-2 bg-accent/10 border border-accent/20 rounded-full mb-6">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-sparkles w-4 h-4 text-accent" aria-hidden="true">
                                                <path
                                                    d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z">
                                                </path>
                                                <path d="M20 2v4"></path>
                                                <path d="M22 4h-4"></path>
                                                <circle cx="4" cy="20" r="2"></circle>
                                            </svg><span class="text-sm tracking-wide">EXCLUSIVE PERKS</span>
                                        </div> -->
                                        <?php 
$home_id = get_option('page_on_front');

if ( get_field('top_header', $home_id) ) : 
?>
    <div class="inline-flex items-center gap-2 px-4 py-2 bg-accent/10 border border-accent/20 rounded-full mb-6">

        <!-- SVG stays static -->
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round"
            class="lucide lucide-sparkles w-4 h-4 text-accent" aria-hidden="true">
            <path d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z"></path>
            <path d="M20 2v4"></path>
            <path d="M22 4h-4"></path>
            <circle cx="4" cy="20" r="2"></circle>
        </svg>

        <!-- Dynamic text from HOME page -->
        <span class="text-sm tracking-wide">
            <?php echo get_field('top_header', $home_id); ?>
        </span>

    </div>
<?php endif; ?>


                                        <!-- <h3 class="text-4xl md:text-5xl mb-4 text-primary">Stay in Style</h3> -->
                                      <?php 
$home_id = get_option('page_on_front');

if ( get_field('title', $home_id) ) : 
?>
    <h3 class="text-4xl md:text-5xl mb-4 text-primary">
        <?php echo get_field('title', $home_id); ?>
    </h3>
<?php endif; ?>

                                        <!-- <p class="text-lg text-primary/80 mb-8 max-w-2xl mx-auto">Join our exclusive
                                            community for insider access to new collections, styling secrets, and
                                            VIP-only offers delivered straight to your inbox.</p> -->
                                             <?php 
$home_id = get_option('page_on_front');

if ( get_field('paragraph', $home_id) ) : 
?>
    <p class="text-lg text-primary/80 mb-8 max-w-2xl mx-auto">
        <?php echo get_field('paragraph', $home_id); ?>
    </p>
<?php endif; ?>

                                        <div class="max-w-xl mx-auto">
                                            <!-- <div
                                                class="bg-white rounded-2xl shadow-xl p-2 flex flex-col sm:flex-row gap-2">
                                                <div class="flex-1 relative"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="lucide lucide-mail absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-primary/40"
                                                        aria-hidden="true">
                                                        <path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"></path>
                                                        <rect x="2" y="4" width="20" height="16" rx="2"></rect>
                                                    </svg><input type="email" data-slot="input"
                                                        class="file:text-foreground selection:bg-primary selection:text-primary-foreground dark:bg-input/30 border-input flex w-full min-w-0 rounded-md px-3 py-1 text-base transition-[color,box-shadow] outline-none file:inline-flex file:h-7 file:border-0 file:bg-transparent file:text-sm file:font-medium disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm focus-visible:border-ring focus-visible:ring-ring/50 aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive pl-12 h-14 bg-transparent border-0 text-primary placeholder:text-primary/50 focus-visible:ring-0 focus-visible:ring-offset-0"
                                                        placeholder="Enter your email address"></div><button
                                                    data-slot="button"
                                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium transition-all duration-200 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-5 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive hover:scale-105 hover:shadow-lg active:scale-100 shadow-[0_8px_24px_rgba(0,0,0,0.12)] py-4 bg-primary text-white hover:bg-primary/90 h-14 px-8 rounded-xl">Subscribe</button>
                                            </div> -->
                                            <?php echo do_shortcode('[mc4wp_form id="151"]'); ?>

                                            <!-- <div
                                                class="flex items-center justify-center gap-6 mt-6 text-sm text-primary/60">
                                                <div class="flex items-center gap-2">
                                                    <div class="w-2 h-2 bg-accent rounded-full"></div><span>No spam,
                                                        ever</span>
                                                </div>
                                                <div class="flex items-center gap-2">
                                                    <div class="w-2 h-2 bg-accent rounded-full"></div><span></span>
                                                </div>
                                            </div> -->
                                           <?php 
$home_id = get_option('page_on_front');

if ( have_rows('notes', $home_id) ) : 
?>
    <div class="flex items-center justify-center gap-6 mt-6 text-sm text-primary/60">

        <?php while ( have_rows('notes', $home_id) ) : the_row(); ?>
            <div class="flex items-center gap-2">
                <div class="w-2 h-2 bg-accent rounded-full"></div>
                <span><?php the_sub_field('note_text'); ?></span>
            </div>
        <?php endwhile; ?>

    </div>
<?php endif; ?>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
                                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-6 gap-8 mb-12">
                                    <div class="lg:col-span-2">
                                        <!-- <div class="text-2xl tracking-wider mb-4">
                                            <a href="index.html" class="inline-block">
                                    Unsubscribe
                                                        anytime            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="" class="w-auto h-6" />
                                            </a>
                                        </div>  -->
                                        <!-- <p class="text-white/80 mb-6 max-w-sm">India's most trusted luxury fashion
                                            destination, bridging heritage with innovation.</p>  -->
                                         <!-- <div class="space-y-3 mb-6"> -->
                                            <!-- <div class="flex items-center gap-3 text-white/80"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-phone w-4 h-4 text-accent" aria-hidden="true">
                                                    <path
                                                        d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384">
                                                    </path>
                                                </svg><span>+91 123 456 7890</span></div> -->
                                            <!-- <div class="flex items-center gap-3 text-white/80"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-mail w-4 h-4 text-accent" aria-hidden="true">
                                                    <path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"></path>
                                                    <rect x="2" y="4" width="20" height="16" rx="2"></rect>
                                                </svg><span>hello@sevora.com</span></div> -->
                                            <!-- <div class="flex items-center gap-3 text-white/80"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-map-pin w-4 h-4 text-accent"
                                                    aria-hidden="true">
                                                    <path
                                                        d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                                                    </path>
                                                    <circle cx="12" cy="10" r="3"></circle>
                                                </svg><span>Kolkata, West Bengal, India</span></div> -->
                                        <!-- </div>  -->
                                         <!-- <div class="mt-6">
                                            <div class="flex items-center gap-2 mb-3"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-smartphone w-4 h-4 text-accent"
                                                    aria-hidden="true">
                                                    <rect width="14" height="20" x="5" y="2" rx="2" ry="2"></rect>
                                                    <path d="M12 18h.01"></path>
                                                </svg><span class="text-sm font-semibold">Download Our App</span></div>
                                            <div class="flex flex-col sm:flex-row gap-3"><a href="" target="_blank"
                                                    rel="noopener noreferrer"
                                                    class="inline-flex items-center gap-2 px-4 py-2.5 bg-white/10 hover:bg-white/20 rounded-lg transition-colors border border-white/20 hover:border-accent group"><svg
                                                        class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                                                        <path
                                                            d="M17.05 20.28c-.98.95-2.05.8-3.08.35-1.09-.46-2.09-.48-3.24 0-1.44.62-2.2.44-3.06-.35C2.79 15.25 3.51 7.59 9.05 7.31c1.35.07 2.29.74 3.08.8 1.18-.24 2.31-.93 3.57-.84 1.51.12 2.65.72 3.4 1.8-3.12 1.87-2.38 5.98.48 7.13-.57 1.5-1.31 2.99-2.54 4.09l.01-.01zM12.03 7.25c-.15-2.23 1.66-4.07 3.74-4.25.29 2.58-2.34 4.5-3.74 4.25z">
                                                        </path>
                                                    </svg>
                                                    <div class="text-left">
                                                        <div class="text-xs text-white/60 leading-none">Download on the
                                                        </div>
                                                        <div class="text-sm font-semibold leading-tight">App Store</div>
                                                    </div>
                                                </a><a href="" target="_blank" rel="noopener noreferrer"
                                                    class="inline-flex items-center gap-2 px-4 py-2.5 bg-white/10 hover:bg-white/20 rounded-lg transition-colors border border-white/20 hover:border-accent group"><svg
                                                        class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                                                        <path
                                                            d="M3,20.5V3.5C3,2.91 3.34,2.39 3.84,2.15L13.69,12L3.84,21.85C3.34,21.6 3,21.09 3,20.5M16.81,15.12L6.05,21.34L14.54,12.85L16.81,15.12M20.16,10.81C20.5,11.08 20.75,11.5 20.75,12C20.75,12.5 20.5,12.92 20.16,13.19L17.89,14.5L15.39,12L17.89,9.5L20.16,10.81M6.05,2.66L16.81,8.88L14.54,11.15L6.05,2.66Z">
                                                        </path>
                                                    </svg>
                                                    <div class="text-left">
                                                        <div class="text-xs text-white/60 leading-none">GET IT ON</div>
                                                        <div class="text-sm font-semibold leading-tight">Google Play
                                                        </div>
                                                    </div>
                                                </a></div>
                                        </div>  -->
                                         <?php if (is_active_sidebar('footer-1')) : ?>
                                        <?php dynamic_sidebar('footer-1'); ?>
                                        <?php endif; ?> 

                                    </div>
                                    
                                    <div>
                                     <h4 class="mb-4">Company</h4>
                                            <!-- <ul class="space-y-3">
                                            <li><a class="text-white/80 hover:text-accent transition-colors"
                                                    href="/about.html" data-discover="true">About Us</a></li>
                                            <li><a class="text-white/80 hover:text-accent transition-colors"
                                                    href="/careers.html" data-discover="true">Careers</a></li>
                                            <li><a class="text-white/80 hover:text-accent transition-colors"
                                                    href="/contact.html" data-discover="true">Contact</a></li>
                                            <li><a class="text-white/80 hover:text-accent transition-colors"
                                                    href="/media.html" data-discover="true">Media &amp; Press</a></li>
                                        </ul>  -->
                                         <!-- <?php if (is_active_sidebar('footer-2')) : ?>
                                        <?php dynamic_sidebar('footer-2'); ?>
                                        <?php endif; ?>  -->
                                        
                                        <?php
wp_nav_menu([
    'theme_location' => 'footer-menu1',
    'container'      => false,
    'menu_class'     => 'space-y-3',
    'walker'         => new Footer_Menu_Walker(),
]);
?>


                                    </div>
                                    <div>
                                   <h4 class="mb-4">Services</h4>
                                            <!--  <ul class="space-y-3">
                                            <li><a class="text-white/80 hover:text-accent transition-colors"
                                                    href="/services.html" data-discover="true">All Services</a></li>
                                            <li><a class="text-white/80 hover:text-accent transition-colors" href=""
                                                    data-discover="true">60-Min
                                                    Express</a></li>
                                            <li><a class="text-white/80 hover:text-accent transition-colors" href=""
                                                    data-discover="true">Try Before
                                                    Buy</a></li>
                                            <li><a class="text-white/80 hover:text-accent transition-colors" href=""
                                                    data-discover="true">Personal
                                                    Stylist</a></li>
                                        </ul>  -->
                                        <!-- <?php if (is_active_sidebar('footer-3')) : ?>
                                        <?php dynamic_sidebar('footer-3'); ?>
                                        <?php endif; ?>  -->
                                         <?php
wp_nav_menu([
    'theme_location' => 'footer-menu2',
    'container'      => false,
    'menu_class'     => 'space-y-3',
    'walker'         => new Footer_Menu_Walker(),
]);
?>
 

                                    </div>
                                    <div>
                                     <h4 class="mb-4">Support</h4>
                                            <!-- <ul class="space-y-3">
                                            <li><a class="text-white/80 hover:text-accent transition-colors"
                                                    href="/help.html" data-discover="true">Help Center</a></li>
                                            <li><a class="text-white/80 hover:text-accent transition-colors"
                                                    href="/blog.html" data-discover="true">Blog</a></li>
                                            <li><a class="text-white/80 hover:text-accent transition-colors"
                                                    href="/contact.html" data-discover="true">Contact Support</a></li>
                                        </ul>  -->
                                        <!-- <?php if (is_active_sidebar('footer-4')) : ?>
                                        <?php dynamic_sidebar('footer-4'); ?>
                                        <?php endif; ?>  -->
                                        <?php
wp_nav_menu([
    'theme_location' => 'footer-menu3',
    'container'      => false,
    'menu_class'     => 'space-y-3',
    'walker'         => new Footer_Menu_Walker(),
]);
?>

                                    </div>
                                    <div>
                                       <h4 class="mb-4">Policies</h4>
                                          <!--<ul class="space-y-3">
                                            <li><a class="text-white/80 hover:text-accent transition-colors" href=""
                                                    data-discover="true">All Policies</a></li>
                                            <li><a class="text-white/80 hover:text-accent transition-colors" href=""
                                                    data-discover="true">Privacy Policy</a>
                                            </li>
                                            <li><a class="text-white/80 hover:text-accent transition-colors" href=""
                                                    data-discover="true">Terms of Service</a>
                                            </li>
                                            <li><a class="text-white/80 hover:text-accent transition-colors" href=""
                                                    data-discover="true">Returns &amp;
                                                    Refunds</a></li>
                                            <li><a class="text-white/80 hover:text-accent transition-colors" href=""
                                                    data-discover="true">Shipping Policy</a>
                                            </li>
                                            <li><a class="text-white/80 hover:text-accent transition-colors" href=""
                                                    data-discover="true">Cookie Policy</a></li>
                                        </ul>  -->
                                        <!-- <?php if (is_active_sidebar('footer-5')) : ?>
                                        <?php dynamic_sidebar('footer-5'); ?>
                                        <?php endif; ?>  -->
                                        <?php
wp_nav_menu([
    'theme_location' => 'footer-menu4',
    'container'      => false,
    'menu_class'     => 'space-y-3',
    'walker'         => new Footer_Menu_Walker(),
]);
?>

                                    </div>
                                </div>
                                <div class="pb-8 mb-8 border-b border-accent/20">
                                    <h4 class="text-center mb-6 text-white/90">Trusted &amp; Secure</h4>
                                    <div class="flex flex-wrap items-center justify-center gap-8">
                                        <div
                                            class="flex flex-col items-center gap-2 p-4 bg-white/5 rounded-lg border border-white/10 hover:border-accent/30 transition-all">
                                            <svg class="w-10 h-10 text-accent" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                                                </path>
                                            </svg><span class="text-xs text-white/70 text-center">SSL Secured</span>
                                        </div>
                                        <div
                                            class="flex flex-col items-center gap-2 p-4 bg-white/5 rounded-lg border border-white/10 hover:border-accent/30 transition-all">
                                            <svg class="w-10 h-10 text-accent" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                                </path>
                                            </svg><span class="text-xs text-white/70 text-center">100% Authentic</span>
                                        </div>
                                        <div
                                            class="flex flex-col items-center gap-2 p-4 bg-white/5 rounded-lg border border-white/10 hover:border-accent/30 transition-all">
                                            <svg class="w-10 h-10 text-accent" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z">
                                                </path>
                                            </svg><span class="text-xs text-white/70 text-center">Secure Payments</span>
                                        </div>
                                        <div
                                            class="flex flex-col items-center gap-2 p-4 bg-white/5 rounded-lg border border-white/10 hover:border-accent/30 transition-all">
                                            <svg class="w-10 h-10 text-accent" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                            </svg><span class="text-xs text-white/70 text-center">60-Min Delivery</span>
                                        </div>
                                        <div
                                            class="flex flex-col items-center gap-2 p-4 bg-white/5 rounded-lg border border-white/10 hover:border-accent/30 transition-all">
                                            <svg class="w-10 h-10 text-accent" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z">
                                                </path>
                                            </svg><span class="text-xs text-white/70 text-center">24/7 Support</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="pt-8 border-t border-accent/20">
                                    <div class="flex flex-col md:flex-row justify-between items-center gap-4 mb-4">
                                        <!-- <p class="text-white/60 text-sm">© 2024 SEVORA. All rights reserved.</p> -->
                                        <!-- <div class="flex items-center gap-4">
                                            <a href="#" aria-label="Instagram"
                                                class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-accent transition-colors"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-instagram w-5 h-5" aria-hidden="true">
                                                    <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                                                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                                    <line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line>
                                                </svg></a> -->
                                                <!-- <a href="#" aria-label="Facebook"
                                                class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-accent transition-colors"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-facebook w-5 h-5" aria-hidden="true">
                                                    <path
                                                        d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z">
                                                    </path>
                                                </svg></a> -->
                                                <!-- <a href="#" aria-label="Twitter"
                                                class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-accent transition-colors"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-twitter w-5 h-5" aria-hidden="true">
                                                    <path
                                                        d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z">
                                                    </path>
                                                </svg></a> -->
                                                <!-- <a href="#" aria-label="LinkedIn"
                                                class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-accent transition-colors"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-linkedin w-5 h-5" aria-hidden="true">
                                                    <path
                                                        d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z">
                                                    </path>
                                                    <rect width="4" height="12" x="2" y="9"></rect>
                                                    <circle cx="4" cy="4" r="2"></circle>
                                                </svg></a>
                                            </div> -->
                                             <?php if (is_active_sidebar('footer-social')) : ?>
                                        <?php dynamic_sidebar('footer-social'); ?>
                                        <?php endif; ?>
                                    </div>
                                  <div class="flex flex-wrap justify-center gap-4 text-sm text-white/60 pt-4 border-t border-accent/10">
    <?php
        wp_nav_menu([
            'theme_location' => 'sub-footer',
            'container'      => false,
            'items_wrap'     => '%3$s', // remove <ul>
            'walker'         => new Sub_Footer_Walker(),
        ]);
    ?>
</div>

                                </div>
                            </div>
                            
                        </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    // Swiper + jQuery initialization
document.addEventListener('DOMContentLoaded', function () {

    // Initialize Swiper
    const swiper = new Swiper(".mySwiper", {
        slidesPerView: 5,
        spaceBetween: 10,
        loop: true,
        freeMode: true,
        speed: 4000,
        autoplay: { delay: 0 },
        allowTouchMove: true,
        breakpoints: {
            320: { slidesPerView: 1 },
            480: { slidesPerView: 2 },
            640: { slidesPerView: 3 },
            768: { slidesPerView: 4 },
            1024: { slidesPerView: 5 }
        },
        pagination: { el: '.swiper-pagination', clickable: true }
    });

    // jQuery code
    jQuery(function ($) {

        // Desktop/mobile menu toggle
        $("#desktopIcon").click(function () {
            $("#mobileIcon").removeClass("hidden");
            $(this).addClass("hidden");
            $("#mobileNav").hide().removeClass("hidden").slideDown(300);
        });

        $("#mobileIcon").click(function () {
            $("#desktopIcon").removeClass("hidden");
            $(this).addClass("hidden");
            $("#mobileNav").slideUp(300, function () {
                $(this).addClass("hidden");
            });
        });

        // Scroll to top button
        $('#pageScroll').on("click", function () {
            $("html, body").animate({ scrollTop: 0 }, 500);
        });

        $(window).on("scroll", function () {
            if ($(this).scrollTop() > 300) {
                $("#pageScroll").fadeIn(300);
            } else {
                $("#pageScroll").fadeOut(300);
            }
        });

        // ResentDown animation
        $("#resentDown").hide();

        function cycle() {
            setTimeout(function () {
                $("#resentDown").fadeIn(400);
                $("#gradBox").stop(true, true).css("width", "100%");
                $("#gradBox").animate({ width: "0%" }, 5000, "linear");
                setTimeout(function () {
                    $("#resentDown").fadeOut(400);
                    cycle();
                }, 5000);
            }, 5000);
        }

        cycle();
    });

});
</script>



                        <?php wp_footer(); ?>
</body>
</html>