<?php 
// Template Name:Contact

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
                                                    <span class="text-primary font-medium">Contact Us</span>
                                                </li>
                                            </ol>
                                        </nav>
                                        <!-- <div class="text-center max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
                                            <div
                                                class="inline-flex items-center gap-2 mb-6 px-4 py-2 bg-accent/30 backdrop-blur-sm border border-accent rounded-full">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-message-square w-4 h-4" aria-hidden="true">
                                                    <path
                                                        d="M22 17a2 2 0 0 1-2 2H6.828a2 2 0 0 0-1.414.586l-2.202 2.202A.71.71 0 0 1 2 21.286V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2z">
                                                    </path>
                                                </svg>
                                                <span>Get in Touch</span>
                                            </div>
                                            <h1 class="text-5xl md:text-6xl lg:text-7xl mb-6">Let's Connect</h1>
                                            <p class="text-xl md:text-2xl text-white/90">We'd love to hear from you.
                                                Reach
                                                out with any questions, feedback, or collaboration ideas.</p>
                                        </div> -->

                                        <?php if (have_rows('contact_header')) : ?>
    <?php while (have_rows('contact_header')) : the_row(); ?>

        <div class="text-center max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Badge -->
            <div
                class="inline-flex items-center gap-2 mb-6 px-4 py-2 bg-accent/30 backdrop-blur-sm border border-accent rounded-full">
                <?php echo get_sub_field('badge_icon'); ?>
                <span><?php the_sub_field('badge_text'); ?></span>
            </div>

            <!-- Heading -->
            <h1 class="text-5xl md:text-6xl lg:text-7xl mb-6">
                <?php the_sub_field('heading'); ?>
            </h1>

            <!-- Description -->
            <p class="text-xl md:text-2xl text-white/90">
                <?php the_sub_field('description'); ?>
            </p>

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
                                <section
                                    class="py-16 lg:py-24 bg-gradient-to-b from-[#F3E6E2]/40 via-white to-[#F3E6E2]/20">
                                    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                                        <div class="grid lg:grid-cols-2 gap-12 items-start">
                                            <!-- <div>
                                                <h2 class="text-4xl md:text-5xl mb-6">Send Us a Message</h2>
                                                <p class="text-xl text-muted-foreground mb-8">Fill out the form and
                                                    we'll get back to you as soon as possible. Your message is important
                                                    to us.</p>
                                                <div class="mb-8">
                                                    <h3 class="text-xl mb-4">Follow Us</h3>
                                                    <div class="flex gap-3">
                                                        <a href="#" aria-label="Instagram"
                                                            class="w-12 h-12 rounded-full bg-secondary flex items-center justify-center text-foreground hover:text-white transition-all hover:bg-accent hover:text-white">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-instagram w-5 h-5"
                                                                aria-hidden="true">
                                                                <rect width="20" height="20" x="2" y="2" rx="5" ry="5">
                                                                </rect>
                                                                <path
                                                                    d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z">
                                                                </path>
                                                                <line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line>
                                                            </svg>
                                                        </a>
                                                        <a href="#" aria-label="Facebook"
                                                            class="w-12 h-12 rounded-full bg-secondary flex items-center justify-center text-foreground hover:text-white transition-all hover:bg-accent hover:text-white">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-facebook w-5 h-5"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z">
                                                                </path>
                                                            </svg>
                                                        </a>
                                                        <a href="#" aria-label="Twitter"
                                                            class="w-12 h-12 rounded-full bg-secondary flex items-center justify-center text-foreground hover:text-white transition-all hover:bg-accent hover:text-white">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-twitter w-5 h-5"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z">
                                                                </path>
                                                            </svg>
                                                        </a>
                                                        <a href="#" aria-label="LinkedIn"
                                                            class="w-12 h-12 rounded-full bg-secondary flex items-center justify-center text-foreground hover:text-white transition-all hover:bg-accent hover:text-white">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-linkedin w-5 h-5"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z">
                                                                </path>
                                                                <rect width="4" height="12" x="2" y="9"></rect>
                                                                <circle cx="4" cy="4" r="2"></circle>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="bg-secondary p-6 rounded-lg border border-accent/20">
                                                    <h3 class="text-xl mb-4">Quick Links</h3>
                                                    <ul class="space-y-3">
                                                        <li><a href="#"
                                                                class="text-muted-foreground hover:text-accent transition-colors">Customer
                                                                Support Center</a></li>
                                                        <li><a href="#"
                                                                class="text-muted-foreground hover:text-accent transition-colors">FAQs</a>
                                                        </li>
                                                        <li><a href="#"
                                                                class="text-muted-foreground hover:text-accent transition-colors">Shipping
                                                                &amp; Returns</a></li>
                                                        <li><a href="#"
                                                                class="text-muted-foreground hover:text-accent transition-colors">Privacy
                                                                Policy</a></li>
                                                    </ul>
                                                </div>
                                            </div> -->

                                            <?php if( have_rows('contact_section') ): ?>
    <?php while( have_rows('contact_section') ): the_row(); ?>
        <div class="">
            
            <!-- Section Heading & Description -->
            <h2 class="text-4xl md:text-5xl mb-6"><?php the_sub_field('heading'); ?></h2>
            <p class="text-xl text-muted-foreground mb-8"><?php the_sub_field('description'); ?></p>

            <!-- Social Links -->
            <?php if( have_rows('social_links') ): ?>
                <div class="mb-8">
                    <h3 class="text-xl mb-4">Follow Us</h3>
                    <div class="flex gap-3">
                        <?php while( have_rows('social_links') ): the_row(); 
                            $icon = get_sub_field('icon');
                            $url  = get_sub_field('url');
                        ?>
                            <a href="<?php echo esc_url($url); ?>" 
                               class="w-12 h-12 rounded-full bg-secondary flex items-center justify-center text-foreground hover:text-white transition-all hover:bg-accent"
                               target="_blank" rel="noopener noreferrer">
                               <?php echo $icon; ?>
                            </a>
                        <?php endwhile; ?>
                    </div>
                </div>
            <?php endif; ?>

            <!-- Quick Links -->
            <?php if( have_rows('quick_links') ): ?>
                <div class="bg-secondary p-6 rounded-lg border border-accent/20">
                    <h3 class="text-xl mb-4">Quick Links</h3>
                    <ul class="space-y-3">
                        <?php while( have_rows('quick_links') ): the_row(); 
                            $link_text = get_sub_field('link_text');
                            $link_url  = get_sub_field('link_url');
                        ?>
                            <li>
                                <a href="<?php echo esc_url($link_url); ?>"
                                   class="text-muted-foreground hover:text-accent transition-colors">
                                   <?php echo esc_html($link_text); ?>
                                </a>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                </div>
            <?php endif; ?>

        </div>
    <?php endwhile; ?>
<?php endif; ?>

                                            <!-- <div>
                                                <form
                                                    class="bg-white/95 backdrop-blur-sm p-8 lg:p-10 rounded-2xl border border-accent/20 shadow-[0_8px_30px_rgba(0,0,0,0.08)] hover:shadow-[0_12px_40px_rgba(226,164,95,0.15)] transition-all duration-300">
                                                    <div class="space-y-6">
                                                        <div class="grid md:grid-cols-2 gap-6">
                                                            <div class="space-y-2"><label data-slot="label"
                                                                    class="flex items-center gap-2 text-sm leading-none font-medium select-none group-data-[disabled=true]:pointer-events-none group-data-[disabled=true]:opacity-50 peer-disabled:cursor-not-allowed peer-disabled:opacity-50"
                                                                    for="firstName">First Name *</label><input
                                                                    data-slot="input"
                                                                    class="file:text-foreground placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground dark:bg-input/30 flex h-9 w-full min-w-0 rounded-md border px-3 py-1 text-base transition-[color,box-shadow] outline-none file:inline-flex file:h-7 file:border-0 file:bg-transparent file:text-sm file:font-medium disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive bg-white border-accent/20 focus:border-accent"
                                                                    id="firstName" placeholder="John" required=""></div>
                                                            <div class="space-y-2"><label data-slot="label"
                                                                    class="flex items-center gap-2 text-sm leading-none font-medium select-none group-data-[disabled=true]:pointer-events-none group-data-[disabled=true]:opacity-50 peer-disabled:cursor-not-allowed peer-disabled:opacity-50"
                                                                    for="lastName">Last Name *</label><input
                                                                    data-slot="input"
                                                                    class="file:text-foreground placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground dark:bg-input/30 flex h-9 w-full min-w-0 rounded-md border px-3 py-1 text-base transition-[color,box-shadow] outline-none file:inline-flex file:h-7 file:border-0 file:bg-transparent file:text-sm file:font-medium disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive bg-white border-accent/20 focus:border-accent"
                                                                    id="lastName" placeholder="Doe" required=""></div>
                                                        </div>
                                                        <div class="space-y-2"><label data-slot="label"
                                                                class="flex items-center gap-2 text-sm leading-none font-medium select-none group-data-[disabled=true]:pointer-events-none group-data-[disabled=true]:opacity-50 peer-disabled:cursor-not-allowed peer-disabled:opacity-50"
                                                                for="email">Email *</label><input type="email"
                                                                data-slot="input"
                                                                class="file:text-foreground placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground dark:bg-input/30 flex h-9 w-full min-w-0 rounded-md border px-3 py-1 text-base transition-[color,box-shadow] outline-none file:inline-flex file:h-7 file:border-0 file:bg-transparent file:text-sm file:font-medium disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive bg-white border-accent/20 focus:border-accent"
                                                                id="email" placeholder="john.doe@example.com"
                                                                required=""></div>
                                                        <div class="space-y-2"><label data-slot="label"
                                                                class="flex items-center gap-2 text-sm leading-none font-medium select-none group-data-[disabled=true]:pointer-events-none group-data-[disabled=true]:opacity-50 peer-disabled:cursor-not-allowed peer-disabled:opacity-50"
                                                                for="phone">Phone Number</label><input type="tel"
                                                                data-slot="input"
                                                                class="file:text-foreground placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground dark:bg-input/30 flex h-9 w-full min-w-0 rounded-md border px-3 py-1 text-base transition-[color,box-shadow] outline-none file:inline-flex file:h-7 file:border-0 file:bg-transparent file:text-sm file:font-medium disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive bg-white border-accent/20 focus:border-accent"
                                                                id="phone" placeholder="+91 98765 43210"></div>
                                                        <div class="space-y-2">
                                                            <label data-slot="label"
                                                                class="flex items-center gap-2 text-sm leading-none font-medium select-none group-data-[disabled=true]:pointer-events-none group-data-[disabled=true]:opacity-50 peer-disabled:cursor-not-allowed peer-disabled:opacity-50"
                                                                for="department">Department</label>
                                                            <select id="department"
                                                                class="w-full px-3 py-2 bg-white border border-accent/20 rounded-md focus:border-accent focus:outline-none focus:ring-2 focus:ring-accent/20 transition-all"
                                                                aria-label="Select department">
                                                                <option value="general">General Inquiry</option>
                                                                <option value="support">Customer Support</option>
                                                                <option value="partnerships">Partnerships</option>
                                                                <option value="careers">Careers</option>
                                                                <option value="press">Press &amp; Media</option>
                                                            </select>
                                                        </div>
                                                        <div class="space-y-2"><label data-slot="label"
                                                                class="flex items-center gap-2 text-sm leading-none font-medium select-none group-data-[disabled=true]:pointer-events-none group-data-[disabled=true]:opacity-50 peer-disabled:cursor-not-allowed peer-disabled:opacity-50"
                                                                for="subject">Subject *</label><input data-slot="input"
                                                                class="file:text-foreground placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground dark:bg-input/30 flex h-9 w-full min-w-0 rounded-md border px-3 py-1 text-base transition-[color,box-shadow] outline-none file:inline-flex file:h-7 file:border-0 file:bg-transparent file:text-sm file:font-medium disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive bg-white border-accent/20 focus:border-accent"
                                                                id="subject" placeholder="How can we help you?"
                                                                required=""></div>
                                                        <div class="space-y-2"><label data-slot="label"
                                                                class="flex items-center gap-2 text-sm leading-none font-medium select-none group-data-[disabled=true]:pointer-events-none group-data-[disabled=true]:opacity-50 peer-disabled:cursor-not-allowed peer-disabled:opacity-50"
                                                                for="message">Message *</label><textarea
                                                                data-slot="textarea"
                                                                class="placeholder:text-muted-foreground focus-visible:border-ring focus-visible:ring-ring/50 aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive dark:bg-input/30 flex field-sizing-content min-h-16 w-full rounded-md border px-3 py-2 text-base transition-[color,box-shadow] outline-none focus-visible:ring-[3px] disabled:cursor-not-allowed disabled:opacity-50 md:text-sm bg-white border-accent/20 focus:border-accent resize-none"
                                                                id="message"
                                                                placeholder="Tell us more about your inquiry..."
                                                                rows="5" required=""></textarea></div>
                                                        <button data-slot="button"
                                                            class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full text-sm font-medium disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-5 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive hover:scale-105 active:scale-100 hover:bg-accent/90 shadow-[0_8px_24px_rgba(0,0,0,0.12)] h-[52px] px-8 w-full bg-gradient-to-r from-accent to-[#C8915D] text-white hover:shadow-[0_12px_40px_rgba(226,164,95,0.4)] transition-all duration-300 py-6 group"
                                                            type="submit">
                                                            <span class="text-lg">Send Message</span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-send w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M14.536 21.686a.5.5 0 0 0 .937-.024l6.5-19a.496.496 0 0 0-.635-.635l-19 6.5a.5.5 0 0 0-.024.937l7.93 3.18a2 2 0 0 1 1.112 1.11z">
                                                                </path>
                                                                <path d="m21.854 2.147-10.94 10.939"></path>
                                                            </svg>
                                                        </button>
                                                        <p class="text-sm text-muted-foreground text-center">By
                                                            submitting this form, you agree to our Privacy Policy.</p>
                                                    </div>
                                                </form>
                                            </div> -->
                                            <div>
    <form method="post" action=""
        class="bg-white/95 backdrop-blur-sm p-8 lg:p-10 rounded-2xl border border-accent/20 shadow-[0_8px_30px_rgba(0,0,0,0.08)] hover:shadow-[0_12px_40px_rgba(226,164,95,0.15)] transition-all duration-300">

        <?php wp_nonce_field('contact_form_submit', 'contact_nonce'); ?>

        <div class="space-y-6">

            <!-- First + Last Name -->
            <div class="grid md:grid-cols-2 gap-6">
                <div class="space-y-2">
                    <label for="first_name" class="text-sm font-medium">First Name *</label>
                    <input
                        type="text"
                        id="first_name"
                        name="first_name"
                        placeholder="John"
                        required
                        class="flex h-9 w-full rounded-md border px-3 py-1 bg-white border-accent/20 focus:border-accent">
                </div>

                <div class="space-y-2">
                    <label for="last_name" class="text-sm font-medium">Last Name *</label>
                    <input
                        type="text"
                        id="last_name"
                        name="last_name"
                        placeholder="Doe"
                        required
                        class="flex h-9 w-full rounded-md border px-3 py-1 bg-white border-accent/20 focus:border-accent">
                </div>
            </div>

            <!-- Email -->
            <div class="space-y-2">
                <label for="email" class="text-sm font-medium">Email *</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="john.doe@example.com"
                    required
                    class="flex h-9 w-full rounded-md border px-3 py-1 bg-white border-accent/20 focus:border-accent">
            </div>

            <!-- Phone -->
            <div class="space-y-2">
                <label for="phone" class="text-sm font-medium">Phone Number</label>
                <input
                    type="tel"
                    id="phone"
                    name="phone"
                    placeholder="+91 98765 43210"
                    class="flex h-9 w-full rounded-md border px-3 py-1 bg-white border-accent/20 focus:border-accent">
            </div>

            <!-- Department -->
            <div class="space-y-2">
                <label for="department" class="text-sm font-medium">Department</label>
                <select
                    id="department"
                    name="department"
                    class="w-full px-3 py-2 bg-white border border-accent/20 rounded-md focus:border-accent">
                    <option value="General Inquiry">General Inquiry</option>
                    <option value="Customer Support">Customer Support</option>
                    <option value="Partnerships">Partnerships</option>
                    <option value="Careers">Careers</option>
                    <option value="Press & Media">Press & Media</option>
                </select>
            </div>

            <!-- Subject -->
            <div class="space-y-2">
                <label for="subject" class="text-sm font-medium">Subject *</label>
                <input
                    type="text"
                    id="subject"
                    name="subject"
                    placeholder="How can we help you?"
                    required
                    class="flex h-9 w-full rounded-md border px-3 py-1 bg-white border-accent/20 focus:border-accent">
            </div>

            <!-- Message -->
            <div class="space-y-2">
                <label for="message" class="text-sm font-medium">Message *</label>
                <textarea
                    id="message"
                    name="message"
                    rows="5"
                    required
                    placeholder="Tell us more about your inquiry..."
                    class="w-full rounded-md border px-3 py-2 bg-white border-accent/20 focus:border-accent resize-none"></textarea>
            </div>

            <!-- Submit -->
            <button
                type="submit"
                name="contact_submit"
                class="inline-flex items-center justify-center gap-2 rounded-full h-[52px] w-full bg-gradient-to-r from-accent to-[#C8915D] text-white font-medium hover:scale-105 transition-all">
                <span class="text-lg">Send Message</span>
            </button>

            <p class="text-sm text-muted-foreground text-center">
                By submitting this form, you agree to our Privacy Policy.
            </p>

        </div>
    </form>
</div>




                                        </div>
                                    </div>
                                </section>
                                <!-- <section class="py-16 bg-gradient-to-b from-[#F3E6E2]/20 to-white">
                                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                                        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                                            <div
                                                class="bg-white/95 backdrop-blur-sm p-8 rounded-2xl text-center border border-accent/20 hover:border-accent/40 hover:shadow-[0_20px_60px_rgba(226,164,95,0.25)] transition-all duration-300 group">
                                                <div
                                                    class="w-16 h-16 bg-gradient-to-br from-accent to-[#C8915D] rounded-full flex items-center justify-center mx-auto mb-6 text-white group-hover:scale-110 transition-all duration-200 shadow-[0_12px_24px_rgba(226,164,95,0.25)]">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-mail w-6 h-6" aria-hidden="true">
                                                        <path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"></path>
                                                        <rect x="2" y="4" width="20" height="16" rx="2"></rect>
                                                    </svg>
                                                </div>
                                                <h3 class="text-lg mb-2 font-semibold">Email Us</h3>
                                                <p class="text-foreground mb-1">hello@sevora.com</p>
                                                <p class="text-sm text-muted-foreground">We'll respond within 24 hours
                                                </p>
                                            </div>
                                            <div
                                                class="bg-white/95 backdrop-blur-sm p-8 rounded-2xl text-center border border-accent/20 hover:border-accent/40 hover:shadow-[0_20px_60px_rgba(226,164,95,0.25)] transition-all duration-300 group">
                                                <div
                                                    class="w-16 h-16 bg-gradient-to-br from-accent to-[#C8915D] rounded-full flex items-center justify-center mx-auto mb-6 text-white group-hover:scale-110 transition-all duration-200 shadow-[0_12px_24px_rgba(226,164,95,0.25)]">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-phone w-6 h-6" aria-hidden="true">
                                                        <path
                                                            d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384">
                                                        </path>
                                                    </svg>
                                                </div>
                                                <h3 class="text-lg mb-2 font-semibold">Call Us</h3>
                                                <p class="text-foreground mb-1">+91 123 456 7890</p>
                                                <p class="text-sm text-muted-foreground">Mon-Sat, 10:00 AM - 7:00 PM IST
                                                </p>
                                            </div>
                                            <div
                                                class="bg-white/95 backdrop-blur-sm p-8 rounded-2xl text-center border border-accent/20 hover:border-accent/40 hover:shadow-[0_20px_60px_rgba(226,164,95,0.25)] transition-all duration-300 group">
                                                <div
                                                    class="w-16 h-16 bg-gradient-to-br from-accent to-[#C8915D] rounded-full flex items-center justify-center mx-auto mb-6 text-white group-hover:scale-110 transition-all duration-200 shadow-[0_12px_24px_rgba(226,164,95,0.25)]">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-map-pin w-6 h-6" aria-hidden="true">
                                                        <path
                                                            d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                                                        </path>
                                                        <circle cx="12" cy="10" r="3"></circle>
                                                    </svg>
                                                </div>
                                                <h3 class="text-lg mb-2 font-semibold">Visit Us</h3>
                                                <p class="text-foreground mb-1">Kolkata, West Bengal</p>
                                                <p class="text-sm text-muted-foreground">India</p>
                                            </div>
                                            <div
                                                class="bg-white/95 backdrop-blur-sm p-8 rounded-2xl text-center border border-accent/20 hover:border-accent/40 hover:shadow-[0_20px_60px_rgba(226,164,95,0.25)] transition-all duration-300 group">
                                                <div
                                                    class="w-16 h-16 bg-gradient-to-br from-accent to-[#C8915D] rounded-full flex items-center justify-center mx-auto mb-6 text-white group-hover:scale-110 transition-all duration-200 shadow-[0_12px_24px_rgba(226,164,95,0.25)]">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-clock w-6 h-6" aria-hidden="true">
                                                        <path d="M12 6v6l4 2"></path>
                                                        <circle cx="12" cy="12" r="10"></circle>
                                                    </svg>
                                                </div>
                                                <h3 class="text-lg mb-2 font-semibold">Business Hours</h3>
                                                <p class="text-foreground mb-1">Mon - Sat: 10 AM - 7 PM</p>
                                                <p class="text-sm text-muted-foreground">Sunday: Closed</p>
                                            </div>
                                        </div>
                                    </div>
                                </section> -->

                                <section class="py-16 bg-gradient-to-b from-[#F3E6E2]/20 to-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <?php if (have_rows('contact_info_cards')) : ?>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">

                <?php while (have_rows('contact_info_cards')) : the_row(); ?>

                    <div
                        class="bg-white/95 backdrop-blur-sm p-8 rounded-2xl text-center border border-accent/20 hover:border-accent/40 hover:shadow-[0_20px_60px_rgba(226,164,95,0.25)] transition-all duration-300 group">

                        <!-- Icon -->
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-accent to-[#C8915D] rounded-full flex items-center justify-center mx-auto mb-6 text-white group-hover:scale-110 transition-all duration-200 shadow-[0_12px_24px_rgba(226,164,95,0.25)]">
                            <?php echo get_sub_field('card_icon'); ?>
                        </div>

                        <!-- Title -->
                        <h3 class="text-lg mb-2 font-semibold">
                            <?php the_sub_field('card_title'); ?>
                        </h3>

                        <!-- Primary Text -->
                        <p class="text-foreground mb-1">
                            <?php the_sub_field('primary_text'); ?>
                        </p>

                        <!-- Secondary Text -->
                        <p class="text-sm text-muted-foreground">
                            <?php the_sub_field('secondary_text'); ?>
                        </p>

                    </div>

                <?php endwhile; ?>

            </div>
        <?php endif; ?>

    </div>
</section>

                                <!-- <section class="py-16 bg-white">
                                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                                        <div class="text-center mb-12">
                                            <div
                                                class="inline-flex items-center gap-2 mb-4 px-4 py-2 bg-accent/10 border border-accent/20 rounded-full">
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
                                                <span
                                                    class="text-accent uppercase tracking-wide text-sm font-semibold">Our
                                                    Commitment</span>
                                            </div>
                                            <h2 class="text-4xl md:text-5xl mb-4">Support You Can Count On</h2>
                                            <p class="text-xl text-muted-foreground max-w-2xl mx-auto">Our dedicated
                                                team is here to provide exceptional service, every time.</p>
                                        </div>
                                        <div class="grid md:grid-cols-3 gap-8 mb-16">
                                            <div class="text-center">
                                                <div
                                                    class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-accent to-[#C8915D] rounded-2xl mb-6 text-white shadow-[0_12px_24px_rgba(226,164,95,0.25)]">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-clock3 lucide-clock-3 w-6 h-6"
                                                        aria-hidden="true">
                                                        <path d="M12 6v6h4"></path>
                                                        <circle cx="12" cy="12" r="10"></circle>
                                                    </svg>
                                                </div>
                                                <h3 class="text-xl mb-2">Quick Response</h3>
                                                <span data-slot="badge"
                                                    class="inline-flex items-center justify-center rounded-md border font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden [a&amp;]:hover:bg-primary/90 bg-accent/10 text-accent border-accent/20 text-lg px-4 py-2 mb-2">&lt;
                                                    2 hours</span>
                                                <p class="text-muted-foreground">Average email response time</p>
                                            </div>
                                            <div class="text-center">
                                                <div
                                                    class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-accent to-[#C8915D] rounded-2xl mb-6 text-white shadow-[0_12px_24px_rgba(226,164,95,0.25)]">
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
                                                <h3 class="text-xl mb-2">Expert Support</h3>
                                                <span data-slot="badge"
                                                    class="inline-flex items-center justify-center rounded-md border font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden [a&amp;]:hover:bg-primary/90 bg-accent/10 text-accent border-accent/20 text-lg px-4 py-2 mb-2">98%</span>
                                                <p class="text-muted-foreground">Customer satisfaction rate</p>
                                            </div>
                                            <div class="text-center">
                                                <div
                                                    class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-accent to-[#C8915D] rounded-2xl mb-6 text-white shadow-[0_12px_24px_rgba(226,164,95,0.25)]">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-users w-6 h-6" aria-hidden="true">
                                                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                                        <path d="M16 3.128a4 4 0 0 1 0 7.744"></path>
                                                        <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                                        <circle cx="9" cy="7" r="4"></circle>
                                                    </svg>
                                                </div>
                                                <h3 class="text-xl mb-2">Dedicated Team</h3>
                                                <span data-slot="badge"
                                                    class="inline-flex items-center justify-center rounded-md border font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden [a&amp;]:hover:bg-primary/90 bg-accent/10 text-accent border-accent/20 text-lg px-4 py-2 mb-2">24/7</span>
                                                <p class="text-muted-foreground">Available for urgent queries</p>
                                            </div>
                                        </div>
                                        <div class="text-center mb-12">
                                            <h2 class="text-3xl md:text-4xl mb-4">Meet Our Support Team</h2>
                                            <p class="text-lg text-muted-foreground max-w-2xl mx-auto">Passionate
                                                professionals dedicated to making your luxury fashion experience
                                                exceptional.</p>
                                        </div>
                                        <div class="grid md:grid-cols-3 gap-8">
                                            <div
                                                class="bg-white/95 backdrop-blur-sm p-8 rounded-2xl border border-accent/20 hover:border-accent/40 hover:shadow-[0_20px_60px_rgba(226,164,95,0.25)] transition-all duration-300">
                                                <div class="relative mb-6">
                                                    <img src="https://images.unsplash.com/photo-1556745753-b2904692b3cd?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;q=80&amp;w=400"
                                                        alt="Priya Sharma"
                                                        class="w-32 h-32 rounded-full object-cover mx-auto border-4 border-accent/20">
                                                    <div
                                                        class="absolute bottom-0 right-1/2 translate-x-16 translate-y-2 w-10 h-10 bg-accent rounded-full flex items-center justify-center border-4 border-secondary">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="lucide lucide-award w-5 h-5 text-white"
                                                            aria-hidden="true">
                                                            <path
                                                                d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                                                            </path>
                                                            <circle cx="12" cy="8" r="6"></circle>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <h3 class="text-xl mb-1 text-center">Priya Sharma</h3>
                                                <p class="text-accent mb-2 text-center">Customer Success Lead</p>
                                                <span data-slot="badge"
                                                    class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden [a&amp;]:hover:bg-primary/90 bg-white border-accent/20 text-foreground mx-auto">Styling
                                                    &amp; Orders</span>
                                            </div>
                                            <div
                                                class="bg-white/95 backdrop-blur-sm p-8 rounded-2xl border border-accent/20 hover:border-accent/40 hover:shadow-[0_20px_60px_rgba(226,164,95,0.25)] transition-all duration-300">
                                                <div class="relative mb-6">
                                                    <img src="https://images.unsplash.com/photo-1629507208649-70919ca33793?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;q=80&amp;w=400"
                                                        alt="Rahul Verma"
                                                        class="w-32 h-32 rounded-full object-cover mx-auto border-4 border-accent/20">
                                                    <div
                                                        class="absolute bottom-0 right-1/2 translate-x-16 translate-y-2 w-10 h-10 bg-accent rounded-full flex items-center justify-center border-4 border-secondary">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="lucide lucide-award w-5 h-5 text-white"
                                                            aria-hidden="true">
                                                            <path
                                                                d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                                                            </path>
                                                            <circle cx="12" cy="8" r="6"></circle>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <h3 class="text-xl mb-1 text-center">Rahul Verma</h3>
                                                <p class="text-accent mb-2 text-center">Support Specialist</p>
                                                <span data-slot="badge"
                                                    class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden [a&amp;]:hover:bg-primary/90 bg-white border-accent/20 text-foreground mx-auto">Technical
                                                    &amp; Shipping</span>
                                            </div>
                                            <div
                                                class="bg-white/95 backdrop-blur-sm p-8 rounded-2xl border border-accent/20 hover:border-accent/40 hover:shadow-[0_20px_60px_rgba(226,164,95,0.25)] transition-all duration-300">
                                                <div class="relative mb-6">
                                                    <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=400&amp;h=400&amp;fit=crop"
                                                        alt="Ananya Patel"
                                                        class="w-32 h-32 rounded-full object-cover mx-auto border-4 border-accent/20">
                                                    <div
                                                        class="absolute bottom-0 right-1/2 translate-x-16 translate-y-2 w-10 h-10 bg-accent rounded-full flex items-center justify-center border-4 border-secondary">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="lucide lucide-award w-5 h-5 text-white"
                                                            aria-hidden="true">
                                                            <path
                                                                d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526">
                                                            </path>
                                                            <circle cx="12" cy="8" r="6"></circle>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <h3 class="text-xl mb-1 text-center">Ananya Patel</h3>
                                                <p class="text-accent mb-2 text-center">Fashion Consultant</p>
                                                <span data-slot="badge"
                                                    class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden [a&amp;]:hover:bg-primary/90 bg-white border-accent/20 text-foreground mx-auto">Personal
                                                    Styling</span>
                                            </div>
                                        </div>
                                    </div>
                                </section> -->
                                <section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <?php if (have_rows('support_section_header')) : ?>
            <?php while (have_rows('support_section_header')) : the_row(); ?>

                <!-- ================= SUPPORT SECTION HEADER ================= -->
                <div class="text-center mb-12">
                    <div class="inline-flex items-center gap-2 mb-4 px-4 py-2 bg-accent/10 border border-accent/20 rounded-full">
                        <?php echo get_sub_field('badge_icon'); ?>
                        <span class="text-accent uppercase tracking-wide text-sm font-semibold">
                            <?php the_sub_field('badge_text'); ?>
                        </span>
                    </div>

                    <h2 class="text-4xl md:text-5xl mb-4">
                        <?php the_sub_field('heading'); ?>
                    </h2>

                    <p class="text-xl text-muted-foreground max-w-2xl mx-auto">
                        <?php the_sub_field('description'); ?>
                    </p>
                </div>

                <!-- ================= SUPPORT STATS ================= -->
                <?php if (have_rows('support_stats')) : ?>
                    <div class="grid md:grid-cols-3 gap-8 mb-16">

                        <?php while (have_rows('support_stats')) : the_row(); ?>

                            <div class="text-center">
                                <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-accent to-[#C8915D] rounded-2xl mb-6 text-white shadow-[0_12px_24px_rgba(226,164,95,0.25)]">
                                    <?php echo get_sub_field('stat_icon'); ?>
                                </div>

                                <h3 class="text-xl mb-2">
                                    <?php the_sub_field('stat_title'); ?>
                                </h3>

                                <span class="inline-flex items-center justify-center rounded-md border bg-accent/10 text-accent border-accent/20 text-lg px-4 py-2 mb-2">
                                    <?php the_sub_field('stat_badge'); ?>
                                </span>

                                <p class="text-muted-foreground">
                                    <?php the_sub_field('stat_description'); ?>
                                </p>
                            </div>

                        <?php endwhile; ?>

                    </div>
                <?php endif; ?>

            <?php endwhile; ?>
        <?php endif; ?>

        <!-- ================= TEAM SECTION ================= -->
        <?php if (have_rows('team_section_header')) : ?>
            <?php while (have_rows('team_section_header')) : the_row(); ?>

                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl mb-4">
                        <?php the_sub_field('heading'); ?>
                    </h2>

                    <p class="text-lg text-muted-foreground max-w-2xl mx-auto">
                        <?php the_sub_field('description'); ?>
                    </p>
                </div>

                <!-- ================= TEAM MEMBERS ================= -->
                <?php if (have_rows('team_members')) : ?>
                    <div class="grid md:grid-cols-3 gap-8">

                        <?php while (have_rows('team_members')) : the_row(); ?>

                            <div class="bg-white/95 backdrop-blur-sm p-8 rounded-2xl border border-accent/20 hover:border-accent/40 hover:shadow-[0_20px_60px_rgba(226,164,95,0.25)] transition-all duration-300">

                                <div class="relative mb-6">
                                    <?php 
                                        $image = get_sub_field('member_image');
                                        if ($image) :
                                    ?>
                                        <img 
                                            src="<?php echo esc_url($image['url']); ?>"
                                            alt="<?php echo esc_attr($image['alt']); ?>"
                                            class="w-32 h-32 rounded-full object-cover mx-auto border-4 border-accent/20">
                                    <?php endif; ?>

                                    <div class="absolute bottom-0 right-1/2 translate-x-16 translate-y-2 w-10 h-10 bg-accent rounded-full flex items-center justify-center border-4 border-secondary">
                                        <?php echo get_sub_field('award_icon'); ?>
                                    </div>
                                </div>

                                <h3 class="text-xl mb-1 text-center">
                                    <?php the_sub_field('member_name'); ?>
                                </h3>

                                <p class="text-accent mb-2 text-center">
                                    <?php the_sub_field('member_role'); ?>
                                </p>

                                <span class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium bg-white border-accent/20 text-foreground mx-auto">
                                    <?php the_sub_field('member_badge'); ?>
                                </span>

                            </div>

                        <?php endwhile; ?>

                    </div>
                <?php endif; ?>

            <?php endwhile; ?>
        <?php endif; ?>

    </div>
</section>

                                <!-- <section class="py-20 bg-primary text-white">
                                    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                                        <div>
                                            <h2 class="text-4xl md:text-5xl mb-6">Ready to Experience Luxury?</h2>
                                            <p class="text-xl text-white/90 mb-8 max-w-2xl mx-auto">Download the SEVORA
                                                app to explore curated collections and discover your next statement
                                                piece.</p>
                                            <button data-slot="button"
                                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full text-sm font-medium transition-all duration-200 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-5 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive hover:scale-105 hover:shadow-lg active:scale-100 shadow-[0_8px_24px_rgba(0,0,0,0.12)] h-[52px] bg-accent text-white hover:bg-accent/90 px-8 py-6">Download
                                                App</button>
                                        </div>
                                    </div>
                                </section> -->

                                <?php if (have_rows('experience_luxury')) : ?>
    <?php while (have_rows('experience_luxury')) : the_row(); ?>

        <section class="py-20 bg-primary text-white">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <div>

                    <h2 class="text-4xl md:text-5xl mb-6">
                        <?php the_sub_field('experience_heading'); ?>
                    </h2>

                    <p class="text-xl text-white/90 mb-8 max-w-2xl mx-auto">
                        <?php the_sub_field('experience_description'); ?>
                    </p>

                    <?php if (get_sub_field('button_text')) : ?>
                        <a href="<?php echo esc_url(get_sub_field('button_url')); ?>"
                           class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full text-sm font-medium transition-all duration-200 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg:not([class*='size-'])]:size-5 shrink-0 [&_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive hover:scale-105 hover:shadow-lg active:scale-100 shadow-[0_8px_24px_rgba(0,0,0,0.12)] h-[52px] bg-accent text-white hover:bg-accent/90 px-8 py-6">
                            <?php the_sub_field('button_text'); ?>
                        </a>
                    <?php endif; ?>

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