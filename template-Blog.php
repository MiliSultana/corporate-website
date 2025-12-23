<?php 
// Template Name:Blog

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
                                                    <span class="text-primary font-medium">Blog</span>
                                                </li>
                                            </ol>
                                        </nav>
                                        <!-- <div class="text-center max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
                                            <div
                                                class="inline-block mb-6 px-4 py-2 bg-accent/30 backdrop-blur-sm border border-accent rounded-full">
                                                <span>SEVORA Blog</span>
                                            </div>
                                            <h1 class="text-5xl md:text-6xl mb-6">
                                                Fashion Stories &amp; Trends</h1>
                                            <p class="text-xl text-white/90">Expert
                                                styling tips, designer insights, and luxury fashion trends from India's
                                                fashion capital</p>
                                        </div> -->

                                        <?php if( have_rows('blog_header_section') ): ?>
    <?php while( have_rows('blog_header_section') ): the_row(); 
        $badge_text  = get_sub_field('badge_text');
        $heading     = get_sub_field('heading');
        $description = get_sub_field('description');
    ?>
    <div class="text-center max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <?php if($badge_text): ?>
        <div class="inline-block mb-6 px-4 py-2 bg-accent/30 backdrop-blur-sm border border-accent rounded-full">
            <span><?php echo esc_html($badge_text); ?></span>
        </div>
        <?php endif; ?>

        <?php if($heading): ?>
        <h1 class="text-5xl md:text-6xl mb-6"><?php echo esc_html($heading); ?></h1>
        <?php endif; ?>

        <?php if($description): ?>
        <p class="text-xl text-white/90"><?php echo esc_html($description); ?></p>
        <?php endif; ?>
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
                                <section class="py-12 bg-white border-b border-accent/10">
                                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                                        <!-- <div class="flex justify-center mb-10">
                                            <div
                                                class="inline-flex items-center gap-2 p-1.5 bg-secondary rounded-full border border-accent/10">
                                                <button
                                                    class="inline-flex items-center gap-2 px-6 py-2.5 rounded-full transition-all duration-300 bg-gradient-to-r from-accent to-[#E57F6D] text-white shadow-lg">
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
                                                    <span>All Content</span>
                                                </button>
                                                <button
                                                    class="inline-flex items-center gap-2 px-6 py-2.5 rounded-full transition-all duration-300 text-muted-foreground hover:text-foreground">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-file-text w-4 h-4" aria-hidden="true">
                                                        <path
                                                            d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z">
                                                        </path>
                                                        <path d="M14 2v5a1 1 0 0 0 1 1h5"></path>
                                                        <path d="M10 9H8"></path>
                                                        <path d="M16 13H8"></path>
                                                        <path d="M16 17H8"></path>
                                                    </svg>
                                                    <span>Articles</span>
                                                </button>
                                                <button
                                                    class="inline-flex items-center gap-2 px-6 py-2.5 rounded-full transition-all duration-300 text-muted-foreground hover:text-foreground">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-video w-4 h-4" aria-hidden="true">
                                                        <path
                                                            d="m16 13 5.223 3.482a.5.5 0 0 0 .777-.416V7.87a.5.5 0 0 0-.752-.432L16 10.5">
                                                        </path>
                                                        <rect x="2" y="6" width="14" height="12" rx="2"></rect>
                                                    </svg>
                                                    <span>Videos</span>
                                                </button>
                                            </div> -->
                                            <div class="flex justify-center mb-10">
    <div class="inline-flex items-center gap-2 p-1.5 bg-secondary rounded-full border border-accent/10">

        <!-- ALL -->
        <button data-filter="all"
            class="filter-btn active inline-flex items-center gap-2 px-6 py-2.5 rounded-full
                   bg-gradient-to-r from-accent to-[#E57F6D] text-white shadow-lg transition-all duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4">
                <path d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z"></path>
                <path d="M20 2v4"></path>
                <path d="M22 4h-4"></path>
                <circle cx="4" cy="20" r="2"></circle>
            </svg>
            <span>All Content</span>
        </button>

        <!-- ARTICLES -->
        <button data-filter="article"
            class="filter-btn inline-flex items-center gap-2 px-6 py-2.5 rounded-full text-muted-foreground hover:text-foreground transition-all duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4">
                <path d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z"></path>
                <path d="M14 2v5a1 1 0 0 0 1 1h5"></path>
                <path d="M10 9H8"></path>
                <path d="M16 13H8"></path>
                <path d="M16 17H8"></path>
            </svg>
            <span>Articles</span>
        </button>

        <!-- VIDEOS -->
        <button data-filter="video"
            class="filter-btn inline-flex items-center gap-2 px-6 py-2.5 rounded-full text-muted-foreground hover:text-foreground transition-all duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4">
                <path d="m16 13 5.223 3.482a.5.5 0 0 0 .777-.416V7.87a.5.5 0 0 0-.752-.432L16 10.5"></path>
                <rect x="2" y="6" width="14" height="12" rx="2"></rect>
            </svg>
            <span>Videos</span>
        </button>

    </div>
</div>

                                        </div>
                                        <!-- <div class="max-w-5xl mx-auto">
                                            <div class="relative mb-6">
                                                <div
                                                    class="absolute left-5 top-1/2 -translate-y-1/2 pointer-events-none">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-search w-5 h-5 text-accent"
                                                        aria-hidden="true">
                                                        <path d="m21 21-4.34-4.34"></path>
                                                        <circle cx="11" cy="11" r="8"></circle>
                                                    </svg>
                                                </div>
                                                <input type="text" data-slot="input"
                                                    class="file:text-foreground placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground dark:bg-input/30 flex w-full min-w-0 px-3 py-1 transition-[color,box-shadow] outline-none file:inline-flex file:h-7 file:border-0 file:bg-transparent file:text-sm file:font-medium disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive pl-14 pr-12 h-14 bg-white border border-accent/20 focus:border-accent rounded-xl shadow-sm text-base"
                                                    placeholder="Search fashion stories, styling tips, designer insights..."
                                                    value="">
                                            </div>
                                            <div class="flex flex-wrap items-center justify-between gap-4">
                                                <div class="flex flex-wrap items-center gap-3">
                                                    <div class="flex items-center gap-2">
                                                        <span class="text-sm text-muted-foreground">Category:</span>
                                                        <select
                                                            class=" focus-visible:border-ring focus-visible:ring-ring/50 aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive dark:bg-input/30 dark:hover:bg-input/50 flex items-center justify-between gap-2 px-3 py-2 text-sm whitespace-nowrap outline-none focus-visible:ring-[3px] disabled:cursor-not-allowed disabled:opacity-50 data-[size=default]:h-9 data-[size=sm]:h-8 *:data-[slot=select-value]:line-clamp-1 *:data-[slot=select-value]:flex *:data-[slot=select-value]:items-center *:data-[slot=select-value]:gap-2 [&amp;_svg]:pointer-events-none [&amp;_svg]:shrink-0 [&amp;_svg:not([class*='size-'])]:size-4 h-10 w-[140px] bg-secondary border border-accent/10 hover:border-accent/30 rounded-lg transition-colors">
                                                            <option>All Categories</option>
                                                            <option>All Categories</option>
                                                        </select>
                                                    </div>
                                                    <div class="flex items-center gap-2">
                                                        <span class="text-sm text-muted-foreground">Type:</span>
                                                        <select
                                                            class=" focus-visible:border-ring focus-visible:ring-ring/50 aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive dark:bg-input/30 dark:hover:bg-input/50 flex items-center justify-between gap-2 px-3 py-2 text-sm whitespace-nowrap outline-none focus-visible:ring-[3px] disabled:cursor-not-allowed disabled:opacity-50 data-[size=default]:h-9 data-[size=sm]:h-8 *:data-[slot=select-value]:line-clamp-1 *:data-[slot=select-value]:flex *:data-[slot=select-value]:items-center *:data-[slot=select-value]:gap-2 [&amp;_svg]:pointer-events-none [&amp;_svg]:shrink-0 [&amp;_svg:not([class*='size-'])]:size-4 h-10 w-[140px] bg-secondary border border-accent/10 hover:border-accent/30 rounded-lg transition-colors">
                                                            <option>All Categories</option>
                                                            <option>All Categories</option>
                                                        </select>
                                                    </div>
                                                    <div class="flex items-center gap-2">
                                                        <span class="text-sm text-muted-foreground">Sort:</span>
                                                        <select
                                                            class=" focus-visible:border-ring focus-visible:ring-ring/50 aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive dark:bg-input/30 dark:hover:bg-input/50 flex items-center justify-between gap-2 px-3 py-2 text-sm whitespace-nowrap outline-none focus-visible:ring-[3px] disabled:cursor-not-allowed disabled:opacity-50 data-[size=default]:h-9 data-[size=sm]:h-8 *:data-[slot=select-value]:line-clamp-1 *:data-[slot=select-value]:flex *:data-[slot=select-value]:items-center *:data-[slot=select-value]:gap-2 [&amp;_svg]:pointer-events-none [&amp;_svg]:shrink-0 [&amp;_svg:not([class*='size-'])]:size-4 h-10 w-[140px] bg-secondary border border-accent/10 hover:border-accent/30 rounded-lg transition-colors">
                                                            <option>All Categories</option>
                                                            <option>All Categories</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="flex items-center gap-3"><span
                                                        class="text-sm text-muted-foreground">10 results</span></div>
                                            </div>
                                        </div> -->
                                        <div class="max-w-5xl mx-auto mb-8">
    <!-- Search -->
   <div class="relative mb-6">
                                                <div
                                                    class="absolute left-5 top-1/2 -translate-y-1/2 pointer-events-none">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-search w-5 h-5 text-accent"
                                                        aria-hidden="true">
                                                        <path d="m21 21-4.34-4.34"></path>
                                                        <circle cx="11" cy="11" r="8"></circle>
                                                    </svg>
                                                </div>
                                                <input type="text" data-slot="input"
                                                    class="file:text-foreground placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground dark:bg-input/30 flex w-full min-w-0 px-3 py-1 transition-[color,box-shadow] outline-none file:inline-flex file:h-7 file:border-0 file:bg-transparent file:text-sm file:font-medium disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive pl-14 pr-12 h-14 bg-white border border-accent/20 focus:border-accent rounded-xl shadow-sm text-base"
                                                    placeholder="Search fashion stories, styling tips, designer insights..."
                                                    value="">
                                            </div>

    <!-- Filters -->
    <div class="flex flex-wrap items-center justify-between gap-4 mb-6">
        <div class="flex flex-wrap items-center gap-3">
            <!-- Category -->
            <div class="flex items-center gap-2">
                <span class="text-sm text-muted-foreground">Category:</span>
                <select id="filterCategory" class="px-3 py-2 rounded-lg border bg-secondary border-accent/10 hover:border-accent/30">
                    <option value="all">All Categories</option>
                    <?php
                    $all_categories = get_categories();
                    foreach ($all_categories as $cat) {
                        echo '<option value="'.esc_attr($cat->name).'">'.esc_html($cat->name).'</option>';
                    }
                    ?>
                </select>
            </div>

            <!-- Type -->
            <div class="flex items-center gap-2">
                <span class="text-sm text-muted-foreground">Type:</span>
                <select id="filterType" class="px-3 py-2 rounded-lg border bg-secondary border-accent/10 hover:border-accent/30">
                    <option value="all">All Types</option>
                    <option value="article">Article</option>
                    <option value="video">Video</option>
                </select>
            </div>

            <!-- Sort -->
            <div class="flex items-center gap-2">
                <span class="text-sm text-muted-foreground">Sort:</span>
                <select id="sortPosts" class="px-3 py-2 rounded-lg border bg-secondary border-accent/10 hover:border-accent/30">
                    <option value="newest">Newest First</option>
                    <option value="oldest">Oldest First</option>
                    <option value="alphabetical">A → Z</option>
                </select>
            </div>
        </div>

        <!-- Results count -->
        <div class="flex items-center gap-3">
            <span id="resultsCount" class="text-sm text-muted-foreground"></span>
        </div>
    </div>
</div>
                                    </div>
                                </section> 
                                
                                <!-- <section class="py-16 bg-gradient-to-b from-[#E2A45F]/8 via-white to-white">
                                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                                        <div>
                                            <div
                                                class="inline-flex items-center gap-2 mb-6 px-6 py-3 bg-gradient-to-r from-accent/10 via-accent/15 to-accent/10 border border-accent/30 rounded-full backdrop-blur-sm shadow-[0_4px_20px_rgba(226,164,95,0.15)]">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-sparkles w-5 h-5 text-accent"
                                                    aria-hidden="true">
                                                    <path
                                                        d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z">
                                                    </path>
                                                    <path d="M20 2v4"></path>
                                                    <path d="M22 4h-4"></path>
                                                    <circle cx="4" cy="20" r="2"></circle>
                                                </svg>
                                                <span
                                                    class="text-accent uppercase tracking-wider text-sm font-semibold">Featured
                                                    Story</span>
                                            </div>
                                            <a class="group block" href="/blog/1" data-discover="true">
                                                <div
                                                    class="grid lg:grid-cols-2 gap-8 items-center bg-white/95 backdrop-blur-sm rounded-2xl overflow-hidden border-2 border-accent/30 hover:border-accent hover:shadow-[0_20px_60px_rgba(226,164,95,0.3)] transition-all duration-300">
                                                    <div class="relative h-80 lg:h-full overflow-hidden">
                                                        <img src="https://images.unsplash.com/photo-1665702860632-4dfcd4b2d869?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;q=80&amp;w=1080"
                                                            alt="The Art of Sustainable Luxury Fashion"
                                                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                                        <div class="absolute top-4 left-4 flex gap-2"></div>
                                                        <div class="absolute top-4 right-4"><span
                                                                class="inline-block px-3 py-1 bg-primary/90 backdrop-blur-sm rounded-full text-sm text-white">Sustainability</span>
                                                        </div>
                                                    </div>
                                                    <div class="p-8 lg:p-12">
                                                        <h3
                                                            class="text-3xl md:text-4xl mb-4 group-hover:text-accent transition-colors">
                                                            The Art of Sustainable Luxury Fashion</h3>
                                                        <p class="text-lg text-muted-foreground mb-6">Exploring how
                                                            luxury fashion is embracing sustainability without
                                                            compromising on elegance and quality.</p>
                                                        <div
                                                            class="flex items-center gap-4 text-sm text-muted-foreground mb-6">
                                                            <div class="flex items-center gap-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="lucide lucide-calendar w-4 h-4"
                                                                    aria-hidden="true">
                                                                    <path d="M8 2v4"></path>
                                                                    <path d="M16 2v4"></path>
                                                                    <rect width="18" height="18" x="3" y="4" rx="2">
                                                                    </rect>
                                                                    <path d="M3 10h18"></path>
                                                                </svg>
                                                                Nov 5, 2024
                                                            </div>
                                                            <span>•</span>
                                                            <div class="flex items-center gap-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="lucide lucide-clock w-4 h-4"
                                                                    aria-hidden="true">
                                                                    <path d="M12 6v6l4 2"></path>
                                                                    <circle cx="12" cy="12" r="10"></circle>
                                                                </svg>
                                                                8 min read
                                                            </div>
                                                        </div>
                                                        <div class="flex items-center gap-3">
                                                            <div
                                                                class="w-10 h-10 rounded-full bg-accent/20 flex items-center justify-center text-accent">
                                                                P</div>
                                                            <span class="text-foreground">Priya Sharma</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </section> -->
                                <section class="py-16 bg-gradient-to-b from-[#E2A45F]/8 via-white to-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <?php
        $featured_args = array(
            'post_type'      => 'post',
            'posts_per_page' => 1,
            'post_status'    => 'publish'
        );

        $featured_query = new WP_Query($featured_args);

        if ($featured_query->have_posts()) :
            while ($featured_query->have_posts()) : $featured_query->the_post();

            $categories = get_the_category();
        ?>

        <!-- Badge -->
        <div class="inline-flex items-center gap-2 mb-6 px-6 py-3 bg-gradient-to-r from-accent/10 via-accent/15 to-accent/10 border border-accent/30 rounded-full backdrop-blur-sm shadow-[0_4px_20px_rgba(226,164,95,0.15)]">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-accent" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z"/>
            </svg>
            <span class="text-accent uppercase tracking-wider text-sm font-semibold">
                Featured Story
            </span>
        </div>

        <a class="group block" href="<?php the_permalink(); ?>">
            <div class="grid lg:grid-cols-2 gap-8 items-center bg-white/95 backdrop-blur-sm rounded-2xl overflow-hidden border-2 border-accent/30 hover:border-accent hover:shadow-[0_20px_60px_rgba(226,164,95,0.3)] transition-all duration-300">

                <!-- Image -->
                <div class="relative h-80 lg:h-full overflow-hidden">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('large', [
                            'class' => 'w-full h-full object-cover group-hover:scale-110 transition-transform duration-700'
                        ]); ?>
                    <?php endif; ?>

                    <!-- Category -->
                    <?php if (!empty($categories)) : ?>
                        <div class="absolute top-4 right-4">
                            <span class="inline-flex items-center gap-1 px-3 py-1 bg-primary/90 backdrop-blur-sm rounded-full text-sm text-white">
                                <?php echo esc_html($categories[0]->name); ?>
                            </span>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Content -->
                <div class="p-8 lg:p-12">
                    <h3 class="text-3xl md:text-4xl mb-4 group-hover:text-accent transition-colors">
                        <?php the_title(); ?>
                    </h3>

                    <p class="text-lg text-muted-foreground mb-6">
                        <?php echo wp_trim_words(get_the_excerpt(), 30); ?>
                    </p>

                    <!-- Meta -->
                    <div class="flex items-center gap-4 text-sm text-muted-foreground mb-6">
                        <div class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M8 2v4"/>
                                <path d="M16 2v4"/>
                                <rect width="18" height="18" x="3" y="4" rx="2"/>
                                <path d="M3 10h18"/>
                            </svg>
                            <?php echo get_the_date(); ?>
                        </div>

                        <span>•</span>

                        <div class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M12 6v6l4 2"/>
                                <circle cx="12" cy="12" r="10"/>
                            </svg>
                            <?php echo reading_time(); ?>
                        </div>
                    </div>

                    <!-- Author -->
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-accent/20 flex items-center justify-center text-accent font-semibold">
                            <?php echo strtoupper(get_the_author()[0]); ?>
                        </div>
                        <span class="text-foreground">
                            <?php the_author(); ?>
                        </span>
                    </div>
                </div>
            </div>
        </a>

        <?php
            endwhile;
            wp_reset_postdata();
        endif;
        ?>
    </div>
</section>

                                <section class="py-16 lg:py-24 bg-gradient-to-b from-white via-[#F3E6E2]/20 to-white">
                                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                                        <div class="flex items-center justify-between mb-8">
                                            <h2 class="text-3xl">All Content</h2>
                                            <!-- <p class="text-muted-foreground">10 items</p> -->
                                        </div>
                                        <!-- <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8"> -->
                                            <!-- <div>
                                                <a class="group block h-full" href="/blog/1" data-discover="true">
                                                    <div
                                                        class="bg-white/95 backdrop-blur-sm rounded-2xl overflow-hidden border border-accent/20 hover:border-accent/40 hover:shadow-[0_20px_60px_rgba(226,164,95,0.25)] transition-all duration-300 h-full flex flex-col">
                                                        <div class="relative h-56 overflow-hidden">
                                                            <img src="https://images.unsplash.com/photo-1665702860632-4dfcd4b2d869?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;q=80&amp;w=1080"
                                                                alt="The Art of Sustainable Luxury Fashion"
                                                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                                            <div class="absolute top-3 left-3">
                                                                <span
                                                                    class="inline-flex items-center gap-1 px-2.5 py-1 bg-primary/90 backdrop-blur-sm rounded-full text-xs text-white">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-file-text w-3 h-3"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z">
                                                                        </path>
                                                                        <path d="M14 2v5a1 1 0 0 0 1 1h5"></path>
                                                                        <path d="M10 9H8"></path>
                                                                        <path d="M16 13H8"></path>
                                                                        <path d="M16 17H8"></path>
                                                                    </svg>
                                                                    Article
                                                                </span>
                                                            </div>
                                                            <div class="absolute top-3 right-3">
                                                                <span
                                                                    class="inline-flex items-center gap-1 px-3 py-1.5 bg-gradient-to-r from-accent/95 via-accent to-accent/95 backdrop-blur-sm rounded-full text-xs text-white shadow-[0_2px_8px_rgba(226,164,95,0.3)]">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-tag w-3 h-3"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="M12.586 2.586A2 2 0 0 0 11.172 2H4a2 2 0 0 0-2 2v7.172a2 2 0 0 0 .586 1.414l8.704 8.704a2.426 2.426 0 0 0 3.42 0l6.58-6.58a2.426 2.426 0 0 0 0-3.42z">
                                                                        </path>
                                                                        <circle cx="7.5" cy="7.5" r=".5"
                                                                            fill="currentColor"></circle>
                                                                    </svg>
                                                                    Sustainability
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="p-5 flex-1 flex flex-col">
                                                            <h3
                                                                class="text-xl mb-2 group-hover:text-accent transition-colors line-clamp-2">
                                                                The Art of Sustainable Luxury Fashion</h3>
                                                            <p
                                                                class="text-muted-foreground mb-4 line-clamp-2 text-sm flex-1">
                                                                Exploring how luxury fashion is embracing sustainability
                                                                without compromising on elegance and quality.</p>
                                                            <div
                                                                class="flex items-center justify-between text-xs text-muted-foreground mb-3">
                                                                <div class="flex items-center gap-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-calendar w-3.5 h-3.5"
                                                                        aria-hidden="true">
                                                                        <path d="M8 2v4"></path>
                                                                        <path d="M16 2v4"></path>
                                                                        <rect width="18" height="18" x="3" y="4" rx="2">
                                                                        </rect>
                                                                        <path d="M3 10h18"></path>
                                                                    </svg>
                                                                    Nov 5, 2024
                                                                </div>
                                                                <div class="flex items-center gap-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-clock w-3.5 h-3.5"
                                                                        aria-hidden="true">
                                                                        <path d="M12 6v6l4 2"></path>
                                                                        <circle cx="12" cy="12" r="10"></circle>
                                                                    </svg>
                                                                    8 min read
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="pt-3 border-t border-accent/20 flex items-center justify-between">
                                                                <div class="flex items-center gap-2">
                                                                    <div
                                                                        class="w-7 h-7 rounded-full bg-accent/20 flex items-center justify-center text-accent text-xs">
                                                                        P</div>
                                                                    <span class="text-xs">Priya Sharma</span>
                                                                </div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="lucide lucide-arrow-right w-4 h-4 text-accent group-hover:translate-x-1 transition-transform"
                                                                    aria-hidden="true">
                                                                    <path d="M5 12h14"></path>
                                                                    <path d="m12 5 7 7-7 7"></path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div> -->

                             <!-- Posts Grid -->
<!-- Posts Grid -->
<div id="postsGrid" class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
<?php
$args = array(
    'post_type'      => 'post',
    'posts_per_page' => -1,
);

$query = new WP_Query($args);

if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post();

    $post_format = get_post_format();
    $is_video = ($post_format === 'video');
    $type = $is_video ? 'video' : 'article';

    $categories = get_the_category();
    $category_names = implode(',', wp_list_pluck($categories, 'name'));
?>
    <div class="filter-item"
        data-type="<?php echo esc_attr($type); ?>"
        data-categories="<?php echo esc_attr($category_names); ?>"
        data-date="<?php echo get_the_date('Y-m-d'); ?>"
        data-title="<?php the_title(); ?>">

        <a class="group block h-full" href="<?php the_permalink(); ?>">
            <div class="bg-white/95 backdrop-blur-sm rounded-2xl overflow-hidden border border-accent/20
            group-hover:border-accent/40
            group-hover:-translate-y-1
            group-hover:shadow-[0_20px_60px_rgba(226,164,95,0.25)]
            transition-all duration-300 ease-out
            h-full flex flex-col">

                <!-- Featured Image -->
                <div class="relative h-56 overflow-hidden">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('large', [
                            'class' => 'w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110'
                        ]); ?>
                    <?php endif; ?>

                    <!-- Type Badge -->
                    <div class="absolute top-3 left-3">
                        <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-primary/90 backdrop-blur-sm rounded-full text-xs text-white">
                            <?php if ($is_video) : ?>
                                <!-- Video SVG -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="m16 13 5.223 3.482a.5.5 0 0 0 .777-.416V7.87a.5.5 0 0 0-.752-.432L16 10.5"/>
                                    <rect x="2" y="6" width="14" height="12" rx="2"/>
                                </svg>
                                Video
                            <?php else : ?>
                                <!-- Article SVG -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z"/>
                                    <path d="M14 2v5a1 1 0 0 0 1 1h5"/>
                                    <path d="M10 9H8"/>
                                    <path d="M16 13H8"/>
                                    <path d="M16 17H8"/>
                                </svg>
                                Article
                            <?php endif; ?>
                        </span>
                    </div>

                    <!-- Category Badge -->
                    <?php if (!empty($categories)) : ?>
                        <div class="absolute top-3 right-3">
                            <span class="inline-flex items-center gap-1 px-3 py-1.5 bg-gradient-to-r from-accent/95 via-accent to-accent/95 rounded-full text-xs text-white">
                                <!-- Tag SVG -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M12.586 2.586A2 2 0 0 0 11.172 2H4a2 2 0 0 0-2 2v7.172a2 2 0 0 0 .586 1.414l8.704 8.704a2.426 2.426 0 0 0 3.42 0l6.58-6.58a2.426 2.426 0 0 0 0-3.42z"/>
                                    <circle cx="7.5" cy="7.5" r=".5" fill="currentColor"/>
                                </svg>
                                <?php echo esc_html($categories[0]->name); ?>
                            </span>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Content -->
                <div class="p-5 flex-1 flex flex-col">
                    <h3 class="text-xl mb-2 group-hover:text-accent transition-colors line-clamp-2">
                        <?php the_title(); ?>
                    </h3>

                    <p class="text-muted-foreground mb-4 line-clamp-2 text-sm flex-1">
                        <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
                    </p>

                    <!-- Date & Reading Time -->
                    <div class="flex items-center justify-between text-xs text-muted-foreground mb-3">
                        <div class="flex items-center gap-2">
                            <!-- Calendar SVG -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M8 2v4"/>
                                <path d="M16 2v4"/>
                                <rect width="18" height="18" x="3" y="4" rx="2"/>
                                <path d="M3 10h18"/>
                            </svg>
                            <?php echo get_the_date(); ?>
                        </div>

                        <div class="flex items-center gap-2">
                            <!-- Clock SVG -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M12 6v6l4 2"/>
                                <circle cx="12" cy="12" r="10"/>
                            </svg>
                            <?php echo reading_time(); ?>
                        </div>
                    </div>

                    <!-- Author + Arrow -->
                    <div class="pt-3 border-t border-accent/20 flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <div class="w-7 h-7 rounded-full bg-accent/20 flex items-center justify-center text-accent text-xs">
                                <?php echo strtoupper(get_the_author()[0]); ?>
                            </div>
                            <span class="text-xs"><?php the_author(); ?></span>
                        </div>

                        <!-- Arrow -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-accent group-hover:translate-x-1 transition-transform" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M5 12h14"/>
                            <path d="m12 5 7 7-7 7"/>
                        </svg>
                    </div>
                </div>
            </div>
        </a>
    </div>
<?php
    endwhile;
    wp_reset_postdata();
endif;
?>
</div>


<!-- JS Combined Filter -->
<script>
const categorySelect = document.getElementById('filterCategory');
const typeSelect = document.getElementById('filterType');
const sortSelect = document.getElementById('sortPosts');
const searchInput = document.getElementById('searchInput');
const postsGrid = document.getElementById('postsGrid');
const resultsCount = document.getElementById('resultsCount');
let activeButtonFilter = 'all';

// Existing filter buttons
document.querySelectorAll('.filter-btn').forEach(button => {
    button.addEventListener('click', function () {
        document.querySelectorAll('.filter-btn').forEach(btn => {
            btn.classList.remove(
                'active',
                'bg-gradient-to-r',
                'from-accent',
                'to-[#E57F6D]',
                'text-white'
            );
        });
        this.classList.add(
            'active',
            'bg-gradient-to-r',
            'from-accent',
            'to-[#E57F6D]',
            'text-white'
        );
        activeButtonFilter = this.dataset.filter;
        updatePosts();
    });
});

function updatePosts() {
    const category = categorySelect ? categorySelect.value.toLowerCase() : 'all';
    const type = typeSelect ? typeSelect.value.toLowerCase() : 'all';
    const sort = sortSelect ? sortSelect.value : 'newest';
    const search = searchInput ? searchInput.value.toLowerCase() : '';

    let posts = Array.from(postsGrid.querySelectorAll('.filter-item'));

    posts.forEach(post => {
        const postCategories = post.dataset.categories.toLowerCase().split(',');
        const postType = post.dataset.type.toLowerCase();
        const postTitle = post.dataset.title.toLowerCase();

        const categoryMatch = category === 'all' || postCategories.includes(category);
        const typeMatch = type === 'all' || postType === type;
        const searchMatch = search === '' || postTitle.includes(search);
        const buttonFilterMatch = activeButtonFilter === 'all' || postType === activeButtonFilter;

        post.style.display = (categoryMatch && typeMatch && searchMatch && buttonFilterMatch) ? '' : 'none';
    });

    // Sort
    let visiblePosts = posts.filter(p => p.style.display !== 'none');
    visiblePosts.sort((a, b) => {
        if (sort === 'newest') return new Date(b.dataset.date) - new Date(a.dataset.date);
        if (sort === 'oldest') return new Date(a.dataset.date) - new Date(b.dataset.date);
        if (sort === 'alphabetical') return a.dataset.title.localeCompare(b.dataset.title);
        return 0;
    });
    visiblePosts.forEach(post => postsGrid.appendChild(post));

    // Update results count
    resultsCount.textContent = visiblePosts.length + ' results';
}

// Attach change/input events
[categorySelect, typeSelect, sortSelect, searchInput].forEach(el => {
    if (el) el.addEventListener('change', updatePosts);
    if (el) el.addEventListener('input', updatePosts);
});

// Initialize
updatePosts();
</script>




                                            <!-- <div>
                                                <a class="group block h-full" href="/blog/2" data-discover="true">
                                                    <div
                                                        class="bg-white/95 backdrop-blur-sm rounded-2xl overflow-hidden border border-accent/20 hover:border-accent/40 hover:shadow-[0_20px_60px_rgba(226,164,95,0.25)] transition-all duration-300 h-full flex flex-col">
                                                        <div class="relative h-56 overflow-hidden">
                                                            <img src="https://images.unsplash.com/photo-1760890719879-9cbf3599d775?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;q=80&amp;w=1080"
                                                                alt="Spring/Summer 2025: Runway Highlights"
                                                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                                            <div class="absolute top-3 left-3">
                                                                <span
                                                                    class="inline-flex items-center gap-1 px-2.5 py-1 bg-primary/90 backdrop-blur-sm rounded-full text-xs text-white">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-file-text w-3 h-3"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z">
                                                                        </path>
                                                                        <path d="M14 2v5a1 1 0 0 0 1 1h5"></path>
                                                                        <path d="M10 9H8"></path>
                                                                        <path d="M16 13H8"></path>
                                                                        <path d="M16 17H8"></path>
                                                                    </svg>
                                                                    Article
                                                                </span>
                                                            </div>
                                                            <div class="absolute top-3 right-3">
                                                                <span
                                                                    class="inline-flex items-center gap-1 px-3 py-1.5 bg-gradient-to-r from-accent/95 via-accent to-accent/95 backdrop-blur-sm rounded-full text-xs text-white shadow-[0_2px_8px_rgba(226,164,95,0.3)]">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-tag w-3 h-3"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="M12.586 2.586A2 2 0 0 0 11.172 2H4a2 2 0 0 0-2 2v7.172a2 2 0 0 0 .586 1.414l8.704 8.704a2.426 2.426 0 0 0 3.42 0l6.58-6.58a2.426 2.426 0 0 0 0-3.42z">
                                                                        </path>
                                                                        <circle cx="7.5" cy="7.5" r=".5"
                                                                            fill="currentColor"></circle>
                                                                    </svg>
                                                                    Fashion Trends
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="p-5 flex-1 flex flex-col">
                                                            <h3
                                                                class="text-xl mb-2 group-hover:text-accent transition-colors line-clamp-2">
                                                                Spring/Summer 2025: Runway Highlights</h3>
                                                            <p
                                                                class="text-muted-foreground mb-4 line-clamp-2 text-sm flex-1">
                                                                A curated selection of the most stunning looks from the
                                                                latest fashion weeks around the world.</p>
                                                            <div
                                                                class="flex items-center justify-between text-xs text-muted-foreground mb-3">
                                                                <div class="flex items-center gap-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-calendar w-3.5 h-3.5"
                                                                        aria-hidden="true">
                                                                        <path d="M8 2v4"></path>
                                                                        <path d="M16 2v4"></path>
                                                                        <rect width="18" height="18" x="3" y="4" rx="2">
                                                                        </rect>
                                                                        <path d="M3 10h18"></path>
                                                                    </svg>
                                                                    Nov 3, 2024
                                                                </div>
                                                                <div class="flex items-center gap-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-clock w-3.5 h-3.5"
                                                                        aria-hidden="true">
                                                                        <path d="M12 6v6l4 2"></path>
                                                                        <circle cx="12" cy="12" r="10"></circle>
                                                                    </svg>
                                                                    6 min read
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="pt-3 border-t border-accent/20 flex items-center justify-between">
                                                                <div class="flex items-center gap-2">
                                                                    <div
                                                                        class="w-7 h-7 rounded-full bg-accent/20 flex items-center justify-center text-accent text-xs">
                                                                        A</div>
                                                                    <span class="text-xs">Aisha Patel</span>
                                                                </div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="lucide lucide-arrow-right w-4 h-4 text-accent group-hover:translate-x-1 transition-transform"
                                                                    aria-hidden="true">
                                                                    <path d="M5 12h14"></path>
                                                                    <path d="m12 5 7 7-7 7"></path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div>
                                                <a class="group block h-full" href="/blog/3" data-discover="true">
                                                    <div
                                                        class="bg-white/95 backdrop-blur-sm rounded-2xl overflow-hidden border border-accent/20 hover:border-accent/40 hover:shadow-[0_20px_60px_rgba(226,164,95,0.25)] transition-all duration-300 h-full flex flex-col">
                                                        <div class="relative h-56 overflow-hidden">
                                                            <img src="https://images.unsplash.com/photo-1610030469983-98e550d6193c?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;q=80&amp;w=1080"
                                                                alt="How to Style a Saree for Modern Events"
                                                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                                            <div class="absolute top-3 left-3">
                                                                <span
                                                                    class="inline-flex items-center gap-1 px-2.5 py-1 bg-primary/90 backdrop-blur-sm rounded-full text-xs text-white">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-circle-play w-3 h-3"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="M9 9.003a1 1 0 0 1 1.517-.859l4.997 2.997a1 1 0 0 1 0 1.718l-4.997 2.997A1 1 0 0 1 9 14.996z">
                                                                        </path>
                                                                        <circle cx="12" cy="12" r="10"></circle>
                                                                    </svg>
                                                                    Video
                                                                </span>
                                                            </div>
                                                            <div class="absolute top-3 right-3">
                                                                <span
                                                                    class="inline-flex items-center gap-1 px-3 py-1.5 bg-gradient-to-r from-accent/95 via-accent to-accent/95 backdrop-blur-sm rounded-full text-xs text-white shadow-[0_2px_8px_rgba(226,164,95,0.3)]">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-tag w-3 h-3"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="M12.586 2.586A2 2 0 0 0 11.172 2H4a2 2 0 0 0-2 2v7.172a2 2 0 0 0 .586 1.414l8.704 8.704a2.426 2.426 0 0 0 3.42 0l6.58-6.58a2.426 2.426 0 0 0 0-3.42z">
                                                                        </path>
                                                                        <circle cx="7.5" cy="7.5" r=".5"
                                                                            fill="currentColor"></circle>
                                                                    </svg>
                                                                    Indian Fashion
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="p-5 flex-1 flex flex-col">
                                                            <h3
                                                                class="text-xl mb-2 group-hover:text-accent transition-colors line-clamp-2">
                                                                How to Style a Saree for Modern Events</h3>
                                                            <p
                                                                class="text-muted-foreground mb-4 line-clamp-2 text-sm flex-1">
                                                                Watch our expert stylist demonstrate contemporary saree
                                                                draping techniques for luxury events.</p>
                                                            <div
                                                                class="flex items-center justify-between text-xs text-muted-foreground mb-3">
                                                                <div class="flex items-center gap-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-calendar w-3.5 h-3.5"
                                                                        aria-hidden="true">
                                                                        <path d="M8 2v4"></path>
                                                                        <path d="M16 2v4"></path>
                                                                        <rect width="18" height="18" x="3" y="4" rx="2">
                                                                        </rect>
                                                                        <path d="M3 10h18"></path>
                                                                    </svg>
                                                                    Nov 1, 2024
                                                                </div>
                                                                <div class="flex items-center gap-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-video w-3.5 h-3.5"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="m16 13 5.223 3.482a.5.5 0 0 0 .777-.416V7.87a.5.5 0 0 0-.752-.432L16 10.5">
                                                                        </path>
                                                                        <rect x="2" y="6" width="14" height="12" rx="2">
                                                                        </rect>
                                                                    </svg>
                                                                    12:45
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="pt-3 border-t border-accent/20 flex items-center justify-between">
                                                                <div class="flex items-center gap-2">
                                                                    <div
                                                                        class="w-7 h-7 rounded-full bg-accent/20 flex items-center justify-center text-accent text-xs">
                                                                        M</div>
                                                                    <span class="text-xs">Meera Desai</span>
                                                                </div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="lucide lucide-arrow-right w-4 h-4 text-accent group-hover:translate-x-1 transition-transform"
                                                                    aria-hidden="true">
                                                                    <path d="M5 12h14"></path>
                                                                    <path d="m12 5 7 7-7 7"></path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div>
                                                <a class="group block h-full" href="/blog/4" data-discover="true">
                                                    <div
                                                        class="bg-white/95 backdrop-blur-sm rounded-2xl overflow-hidden border border-accent/20 hover:border-accent/40 hover:shadow-[0_20px_60px_rgba(226,164,95,0.25)] transition-all duration-300 h-full flex flex-col">
                                                        <div class="relative h-56 overflow-hidden">
                                                            <img src="https://images.unsplash.com/photo-1758900728131-32b8fa6fcda4?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;q=80&amp;w=1080"
                                                                alt="Mastering the Capsule Wardrobe"
                                                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                                            <div class="absolute top-3 left-3">
                                                                <span
                                                                    class="inline-flex items-center gap-1 px-2.5 py-1 bg-primary/90 backdrop-blur-sm rounded-full text-xs text-white">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-file-text w-3 h-3"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z">
                                                                        </path>
                                                                        <path d="M14 2v5a1 1 0 0 0 1 1h5"></path>
                                                                        <path d="M10 9H8"></path>
                                                                        <path d="M16 13H8"></path>
                                                                        <path d="M16 17H8"></path>
                                                                    </svg>
                                                                    Article
                                                                </span>
                                                            </div>
                                                            <div class="absolute top-3 right-3">
                                                                <span
                                                                    class="inline-flex items-center gap-1 px-3 py-1.5 bg-gradient-to-r from-accent/95 via-accent to-accent/95 backdrop-blur-sm rounded-full text-xs text-white shadow-[0_2px_8px_rgba(226,164,95,0.3)]">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-tag w-3 h-3"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="M12.586 2.586A2 2 0 0 0 11.172 2H4a2 2 0 0 0-2 2v7.172a2 2 0 0 0 .586 1.414l8.704 8.704a2.426 2.426 0 0 0 3.42 0l6.58-6.58a2.426 2.426 0 0 0 0-3.42z">
                                                                        </path>
                                                                        <circle cx="7.5" cy="7.5" r=".5"
                                                                            fill="currentColor"></circle>
                                                                    </svg>
                                                                    Styling Tips
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="p-5 flex-1 flex flex-col">
                                                            <h3
                                                                class="text-xl mb-2 group-hover:text-accent transition-colors line-clamp-2">
                                                                Mastering the Capsule Wardrobe</h3>
                                                            <p
                                                                class="text-muted-foreground mb-4 line-clamp-2 text-sm flex-1">
                                                                Essential pieces every fashion-forward individual should
                                                                own for a versatile and timeless wardrobe.</p>
                                                            <div
                                                                class="flex items-center justify-between text-xs text-muted-foreground mb-3">
                                                                <div class="flex items-center gap-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-calendar w-3.5 h-3.5"
                                                                        aria-hidden="true">
                                                                        <path d="M8 2v4"></path>
                                                                        <path d="M16 2v4"></path>
                                                                        <rect width="18" height="18" x="3" y="4" rx="2">
                                                                        </rect>
                                                                        <path d="M3 10h18"></path>
                                                                    </svg>
                                                                    Oct 28, 2024
                                                                </div>
                                                                <div class="flex items-center gap-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-clock w-3.5 h-3.5"
                                                                        aria-hidden="true">
                                                                        <path d="M12 6v6l4 2"></path>
                                                                        <circle cx="12" cy="12" r="10"></circle>
                                                                    </svg>
                                                                    10 min read
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="pt-3 border-t border-accent/20 flex items-center justify-between">
                                                                <div class="flex items-center gap-2">
                                                                    <div
                                                                        class="w-7 h-7 rounded-full bg-accent/20 flex items-center justify-center text-accent text-xs">
                                                                        R</div>
                                                                    <span class="text-xs">Rohan Mehta</span>
                                                                </div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="lucide lucide-arrow-right w-4 h-4 text-accent group-hover:translate-x-1 transition-transform"
                                                                    aria-hidden="true">
                                                                    <path d="M5 12h14"></path>
                                                                    <path d="m12 5 7 7-7 7"></path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div>
                                                <a class="group block h-full" href="/blog/5" data-discover="true">
                                                    <div
                                                        class="bg-white/95 backdrop-blur-sm rounded-2xl overflow-hidden border border-accent/20 hover:border-accent/40 hover:shadow-[0_20px_60px_rgba(226,164,95,0.25)] transition-all duration-300 h-full flex flex-col">
                                                        <div class="relative h-56 overflow-hidden">
                                                            <img src="https://images.unsplash.com/photo-1594744803329-e58b31de8bf5?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;q=80&amp;w=1080"
                                                                alt="Bollywood Fashion Decoded: Celebrity Style Analysis"
                                                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                                            <div class="absolute top-3 left-3">
                                                                <span
                                                                    class="inline-flex items-center gap-1 px-2.5 py-1 bg-primary/90 backdrop-blur-sm rounded-full text-xs text-white">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-circle-play w-3 h-3"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="M9 9.003a1 1 0 0 1 1.517-.859l4.997 2.997a1 1 0 0 1 0 1.718l-4.997 2.997A1 1 0 0 1 9 14.996z">
                                                                        </path>
                                                                        <circle cx="12" cy="12" r="10"></circle>
                                                                    </svg>
                                                                    Video
                                                                </span>
                                                            </div>
                                                            <div class="absolute top-3 right-3">
                                                                <span
                                                                    class="inline-flex items-center gap-1 px-3 py-1.5 bg-gradient-to-r from-accent/95 via-accent to-accent/95 backdrop-blur-sm rounded-full text-xs text-white shadow-[0_2px_8px_rgba(226,164,95,0.3)]">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-tag w-3 h-3"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="M12.586 2.586A2 2 0 0 0 11.172 2H4a2 2 0 0 0-2 2v7.172a2 2 0 0 0 .586 1.414l8.704 8.704a2.426 2.426 0 0 0 3.42 0l6.58-6.58a2.426 2.426 0 0 0 0-3.42z">
                                                                        </path>
                                                                        <circle cx="7.5" cy="7.5" r=".5"
                                                                            fill="currentColor"></circle>
                                                                    </svg>
                                                                    Celebrity Style
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="p-5 flex-1 flex flex-col">
                                                            <h3
                                                                class="text-xl mb-2 group-hover:text-accent transition-colors line-clamp-2">
                                                                Bollywood Fashion Decoded: Celebrity Style Analysis</h3>
                                                            <p
                                                                class="text-muted-foreground mb-4 line-clamp-2 text-sm flex-1">
                                                                Breaking down the most iconic Bollywood red carpet looks
                                                                and how to recreate them.</p>
                                                            <div
                                                                class="flex items-center justify-between text-xs text-muted-foreground mb-3">
                                                                <div class="flex items-center gap-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-calendar w-3.5 h-3.5"
                                                                        aria-hidden="true">
                                                                        <path d="M8 2v4"></path>
                                                                        <path d="M16 2v4"></path>
                                                                        <rect width="18" height="18" x="3" y="4" rx="2">
                                                                        </rect>
                                                                        <path d="M3 10h18"></path>
                                                                    </svg>
                                                                    Oct 26, 2024
                                                                </div>
                                                                <div class="flex items-center gap-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-video w-3.5 h-3.5"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="m16 13 5.223 3.482a.5.5 0 0 0 .777-.416V7.87a.5.5 0 0 0-.752-.432L16 10.5">
                                                                        </path>
                                                                        <rect x="2" y="6" width="14" height="12" rx="2">
                                                                        </rect>
                                                                    </svg>
                                                                    15:30
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="pt-3 border-t border-accent/20 flex items-center justify-between">
                                                                <div class="flex items-center gap-2">
                                                                    <div
                                                                        class="w-7 h-7 rounded-full bg-accent/20 flex items-center justify-center text-accent text-xs">
                                                                        K</div>
                                                                    <span class="text-xs">Karan Johar</span>
                                                                </div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="lucide lucide-arrow-right w-4 h-4 text-accent group-hover:translate-x-1 transition-transform"
                                                                    aria-hidden="true">
                                                                    <path d="M5 12h14"></path>
                                                                    <path d="m12 5 7 7-7 7"></path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div>
                                                <a class="group block h-full" href="/blog/6" data-discover="true">
                                                    <div
                                                        class="bg-white/95 backdrop-blur-sm rounded-2xl overflow-hidden border border-accent/20 hover:border-accent/40 hover:shadow-[0_20px_60px_rgba(226,164,95,0.25)] transition-all duration-300 h-full flex flex-col">
                                                        <div class="relative h-56 overflow-hidden">
                                                            <img src="https://images.unsplash.com/photo-1553033754-890d2383fdc8?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;q=80&amp;w=1080"
                                                                alt="Behind the Seams: Indian Designer Spotlight"
                                                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                                            <div class="absolute top-3 left-3">
                                                                <span
                                                                    class="inline-flex items-center gap-1 px-2.5 py-1 bg-primary/90 backdrop-blur-sm rounded-full text-xs text-white">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-file-text w-3 h-3"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z">
                                                                        </path>
                                                                        <path d="M14 2v5a1 1 0 0 0 1 1h5"></path>
                                                                        <path d="M10 9H8"></path>
                                                                        <path d="M16 13H8"></path>
                                                                        <path d="M16 17H8"></path>
                                                                    </svg>
                                                                    Article
                                                                </span>
                                                            </div>
                                                            <div class="absolute top-3 right-3">
                                                                <span
                                                                    class="inline-flex items-center gap-1 px-3 py-1.5 bg-gradient-to-r from-accent/95 via-accent to-accent/95 backdrop-blur-sm rounded-full text-xs text-white shadow-[0_2px_8px_rgba(226,164,95,0.3)]">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-tag w-3 h-3"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="M12.586 2.586A2 2 0 0 0 11.172 2H4a2 2 0 0 0-2 2v7.172a2 2 0 0 0 .586 1.414l8.704 8.704a2.426 2.426 0 0 0 3.42 0l6.58-6.58a2.426 2.426 0 0 0 0-3.42z">
                                                                        </path>
                                                                        <circle cx="7.5" cy="7.5" r=".5"
                                                                            fill="currentColor"></circle>
                                                                    </svg>
                                                                    Designer Spotlight
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="p-5 flex-1 flex flex-col">
                                                            <h3
                                                                class="text-xl mb-2 group-hover:text-accent transition-colors line-clamp-2">
                                                                Behind the Seams: Indian Designer Spotlight</h3>
                                                            <p
                                                                class="text-muted-foreground mb-4 line-clamp-2 text-sm flex-1">
                                                                Celebrating the craftsmanship and creativity of India's
                                                                most innovative fashion designers.</p>
                                                            <div
                                                                class="flex items-center justify-between text-xs text-muted-foreground mb-3">
                                                                <div class="flex items-center gap-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-calendar w-3.5 h-3.5"
                                                                        aria-hidden="true">
                                                                        <path d="M8 2v4"></path>
                                                                        <path d="M16 2v4"></path>
                                                                        <rect width="18" height="18" x="3" y="4" rx="2">
                                                                        </rect>
                                                                        <path d="M3 10h18"></path>
                                                                    </svg>
                                                                    Oct 25, 2024
                                                                </div>
                                                                <div class="flex items-center gap-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-clock w-3.5 h-3.5"
                                                                        aria-hidden="true">
                                                                        <path d="M12 6v6l4 2"></path>
                                                                        <circle cx="12" cy="12" r="10"></circle>
                                                                    </svg>
                                                                    7 min read
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="pt-3 border-t border-accent/20 flex items-center justify-between">
                                                                <div class="flex items-center gap-2">
                                                                    <div
                                                                        class="w-7 h-7 rounded-full bg-accent/20 flex items-center justify-center text-accent text-xs">
                                                                        K</div>
                                                                    <span class="text-xs">Kavya Reddy</span>
                                                                </div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="lucide lucide-arrow-right w-4 h-4 text-accent group-hover:translate-x-1 transition-transform"
                                                                    aria-hidden="true">
                                                                    <path d="M5 12h14"></path>
                                                                    <path d="m12 5 7 7-7 7"></path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div>
                                                <a class="group block h-full" href="/blog/8" data-discover="true">
                                                    <div
                                                        class="bg-white/95 backdrop-blur-sm rounded-2xl overflow-hidden border border-accent/20 hover:border-accent/40 hover:shadow-[0_20px_60px_rgba(226,164,95,0.25)] transition-all duration-300 h-full flex flex-col">
                                                        <div class="relative h-56 overflow-hidden">
                                                            <img src="https://images.unsplash.com/photo-1492707892479-7bc8d5a4ee93?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;q=80&amp;w=800"
                                                                alt="Accessorizing Like a Pro: Expert Tips"
                                                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                                            <div class="absolute top-3 left-3">
                                                                <span
                                                                    class="inline-flex items-center gap-1 px-2.5 py-1 bg-primary/90 backdrop-blur-sm rounded-full text-xs text-white">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-file-text w-3 h-3"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z">
                                                                        </path>
                                                                        <path d="M14 2v5a1 1 0 0 0 1 1h5"></path>
                                                                        <path d="M10 9H8"></path>
                                                                        <path d="M16 13H8"></path>
                                                                        <path d="M16 17H8"></path>
                                                                    </svg>
                                                                    Article
                                                                </span>
                                                            </div>
                                                            <div class="absolute top-3 right-3">
                                                                <span
                                                                    class="inline-flex items-center gap-1 px-3 py-1.5 bg-gradient-to-r from-accent/95 via-accent to-accent/95 backdrop-blur-sm rounded-full text-xs text-white shadow-[0_2px_8px_rgba(226,164,95,0.3)]">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-tag w-3 h-3"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="M12.586 2.586A2 2 0 0 0 11.172 2H4a2 2 0 0 0-2 2v7.172a2 2 0 0 0 .586 1.414l8.704 8.704a2.426 2.426 0 0 0 3.42 0l6.58-6.58a2.426 2.426 0 0 0 0-3.42z">
                                                                        </path>
                                                                        <circle cx="7.5" cy="7.5" r=".5"
                                                                            fill="currentColor"></circle>
                                                                    </svg>
                                                                    Styling Tips
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="p-5 flex-1 flex flex-col">
                                                            <h3
                                                                class="text-xl mb-2 group-hover:text-accent transition-colors line-clamp-2">
                                                                Accessorizing Like a Pro: Expert Tips</h3>
                                                            <p
                                                                class="text-muted-foreground mb-4 line-clamp-2 text-sm flex-1">
                                                                Transform any outfit with the right accessories. Learn
                                                                the secrets from fashion stylists.</p>
                                                            <div
                                                                class="flex items-center justify-between text-xs text-muted-foreground mb-3">
                                                                <div class="flex items-center gap-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-calendar w-3.5 h-3.5"
                                                                        aria-hidden="true">
                                                                        <path d="M8 2v4"></path>
                                                                        <path d="M16 2v4"></path>
                                                                        <rect width="18" height="18" x="3" y="4" rx="2">
                                                                        </rect>
                                                                        <path d="M3 10h18"></path>
                                                                    </svg>
                                                                    Oct 20, 2024
                                                                </div>
                                                                <div class="flex items-center gap-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-clock w-3.5 h-3.5"
                                                                        aria-hidden="true">
                                                                        <path d="M12 6v6l4 2"></path>
                                                                        <circle cx="12" cy="12" r="10"></circle>
                                                                    </svg>
                                                                    5 min read
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="pt-3 border-t border-accent/20 flex items-center justify-between">
                                                                <div class="flex items-center gap-2">
                                                                    <div
                                                                        class="w-7 h-7 rounded-full bg-accent/20 flex items-center justify-center text-accent text-xs">
                                                                        N</div>
                                                                    <span class="text-xs">Neha Kapoor</span>
                                                                </div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="lucide lucide-arrow-right w-4 h-4 text-accent group-hover:translate-x-1 transition-transform"
                                                                    aria-hidden="true">
                                                                    <path d="M5 12h14"></path>
                                                                    <path d="m12 5 7 7-7 7"></path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div>
                                                <a class="group block h-full" href="/blog/9" data-discover="true">
                                                    <div
                                                        class="bg-white/95 backdrop-blur-sm rounded-2xl overflow-hidden border border-accent/20 hover:border-accent/40 hover:shadow-[0_20px_60px_rgba(226,164,95,0.25)] transition-all duration-300 h-full flex flex-col">
                                                        <div class="relative h-56 overflow-hidden">
                                                            <img src="https://images.unsplash.com/photo-1532453288672-3a27e9be9efd?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;q=80&amp;w=1080"
                                                                alt="Sustainable Fashion: Interview with Eco Designers"
                                                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                                            <div class="absolute top-3 left-3">
                                                                <span
                                                                    class="inline-flex items-center gap-1 px-2.5 py-1 bg-primary/90 backdrop-blur-sm rounded-full text-xs text-white">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-circle-play w-3 h-3"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="M9 9.003a1 1 0 0 1 1.517-.859l4.997 2.997a1 1 0 0 1 0 1.718l-4.997 2.997A1 1 0 0 1 9 14.996z">
                                                                        </path>
                                                                        <circle cx="12" cy="12" r="10"></circle>
                                                                    </svg>
                                                                    Video
                                                                </span>
                                                            </div>
                                                            <div class="absolute top-3 right-3">
                                                                <span
                                                                    class="inline-flex items-center gap-1 px-3 py-1.5 bg-gradient-to-r from-accent/95 via-accent to-accent/95 backdrop-blur-sm rounded-full text-xs text-white shadow-[0_2px_8px_rgba(226,164,95,0.3)]">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-tag w-3 h-3"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="M12.586 2.586A2 2 0 0 0 11.172 2H4a2 2 0 0 0-2 2v7.172a2 2 0 0 0 .586 1.414l8.704 8.704a2.426 2.426 0 0 0 3.42 0l6.58-6.58a2.426 2.426 0 0 0 0-3.42z">
                                                                        </path>
                                                                        <circle cx="7.5" cy="7.5" r=".5"
                                                                            fill="currentColor"></circle>
                                                                    </svg>
                                                                    Sustainability
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="p-5 flex-1 flex flex-col">
                                                            <h3
                                                                class="text-xl mb-2 group-hover:text-accent transition-colors line-clamp-2">
                                                                Sustainable Fashion: Interview with Eco Designers</h3>
                                                            <p
                                                                class="text-muted-foreground mb-4 line-clamp-2 text-sm flex-1">
                                                                Leading sustainable fashion designers share their
                                                                journey and tips for conscious shopping.</p>
                                                            <div
                                                                class="flex items-center justify-between text-xs text-muted-foreground mb-3">
                                                                <div class="flex items-center gap-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-calendar w-3.5 h-3.5"
                                                                        aria-hidden="true">
                                                                        <path d="M8 2v4"></path>
                                                                        <path d="M16 2v4"></path>
                                                                        <rect width="18" height="18" x="3" y="4" rx="2">
                                                                        </rect>
                                                                        <path d="M3 10h18"></path>
                                                                    </svg>
                                                                    Oct 18, 2024
                                                                </div>
                                                                <div class="flex items-center gap-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-video w-3.5 h-3.5"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="m16 13 5.223 3.482a.5.5 0 0 0 .777-.416V7.87a.5.5 0 0 0-.752-.432L16 10.5">
                                                                        </path>
                                                                        <rect x="2" y="6" width="14" height="12" rx="2">
                                                                        </rect>
                                                                    </svg>
                                                                    20:15
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="pt-3 border-t border-accent/20 flex items-center justify-between">
                                                                <div class="flex items-center gap-2">
                                                                    <div
                                                                        class="w-7 h-7 rounded-full bg-accent/20 flex items-center justify-center text-accent text-xs">
                                                                        D</div>
                                                                    <span class="text-xs">Dia Mirza</span>
                                                                </div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="lucide lucide-arrow-right w-4 h-4 text-accent group-hover:translate-x-1 transition-transform"
                                                                    aria-hidden="true">
                                                                    <path d="M5 12h14"></path>
                                                                    <path d="m12 5 7 7-7 7"></path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div>
                                                <a class="group block h-full" href="/blog/10" data-discover="true">
                                                    <div
                                                        class="bg-white/95 backdrop-blur-sm rounded-2xl overflow-hidden border border-accent/20 hover:border-accent/40 hover:shadow-[0_20px_60px_rgba(226,164,95,0.25)] transition-all duration-300 h-full flex flex-col">
                                                        <div class="relative h-56 overflow-hidden">
                                                            <div
                                                                class="inline-block bg-gray-100 text-center align-middle w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                                                <div
                                                                    class="flex items-center justify-center w-full h-full">
                                                                    <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iODgiIGhlaWdodD0iODgiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgc3Ryb2tlPSIjMDAwIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBvcGFjaXR5PSIuMyIgZmlsbD0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIzLjciPjxyZWN0IHg9IjE2IiB5PSIxNiIgd2lkdGg9IjU2IiBoZWlnaHQ9IjU2IiByeD0iNiIvPjxwYXRoIGQ9Im0xNiA1OCAxNi0xOCAzMiAzMiIvPjxjaXJjbGUgY3g9IjUzIiBjeT0iMzUiIHI9IjciLz48L3N2Zz4KCg=="
                                                                        alt="Error loading image"
                                                                        data-original-url="https://images.unsplash.com/photo-1558769132-cb1aea3c4c97?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;q=80&amp;w=800">
                                                                </div>
                                                            </div>
                                                            <div class="absolute top-3 left-3">
                                                                <span
                                                                    class="inline-flex items-center gap-1 px-2.5 py-1 bg-primary/90 backdrop-blur-sm rounded-full text-xs text-white">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-file-text w-3 h-3"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z">
                                                                        </path>
                                                                        <path d="M14 2v5a1 1 0 0 0 1 1h5"></path>
                                                                        <path d="M10 9H8"></path>
                                                                        <path d="M16 13H8"></path>
                                                                        <path d="M16 17H8"></path>
                                                                    </svg>
                                                                    Article
                                                                </span>
                                                            </div>
                                                            <div class="absolute top-3 right-3">
                                                                <span
                                                                    class="inline-flex items-center gap-1 px-3 py-1.5 bg-gradient-to-r from-accent/95 via-accent to-accent/95 backdrop-blur-sm rounded-full text-xs text-white shadow-[0_2px_8px_rgba(226,164,95,0.3)]">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-tag w-3 h-3"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="M12.586 2.586A2 2 0 0 0 11.172 2H4a2 2 0 0 0-2 2v7.172a2 2 0 0 0 .586 1.414l8.704 8.704a2.426 2.426 0 0 0 3.42 0l6.58-6.58a2.426 2.426 0 0 0 0-3.42z">
                                                                        </path>
                                                                        <circle cx="7.5" cy="7.5" r=".5"
                                                                            fill="currentColor"></circle>
                                                                    </svg>
                                                                    Fashion Trends
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="p-5 flex-1 flex flex-col">
                                                            <h3
                                                                class="text-xl mb-2 group-hover:text-accent transition-colors line-clamp-2">
                                                                The Future of Fashion Technology</h3>
                                                            <p
                                                                class="text-muted-foreground mb-4 line-clamp-2 text-sm flex-1">
                                                                How AI, AR, and digital fashion are revolutionizing the
                                                                luxury shopping experience.</p>
                                                            <div
                                                                class="flex items-center justify-between text-xs text-muted-foreground mb-3">
                                                                <div class="flex items-center gap-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-calendar w-3.5 h-3.5"
                                                                        aria-hidden="true">
                                                                        <path d="M8 2v4"></path>
                                                                        <path d="M16 2v4"></path>
                                                                        <rect width="18" height="18" x="3" y="4" rx="2">
                                                                        </rect>
                                                                        <path d="M3 10h18"></path>
                                                                    </svg>
                                                                    Oct 15, 2024
                                                                </div>
                                                                <div class="flex items-center gap-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-clock w-3.5 h-3.5"
                                                                        aria-hidden="true">
                                                                        <path d="M12 6v6l4 2"></path>
                                                                        <circle cx="12" cy="12" r="10"></circle>
                                                                    </svg>
                                                                    9 min read
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="pt-3 border-t border-accent/20 flex items-center justify-between">
                                                                <div class="flex items-center gap-2">
                                                                    <div
                                                                        class="w-7 h-7 rounded-full bg-accent/20 flex items-center justify-center text-accent text-xs">
                                                                        A</div>
                                                                    <span class="text-xs">Arjun Singh</span>
                                                                </div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="lucide lucide-arrow-right w-4 h-4 text-accent group-hover:translate-x-1 transition-transform"
                                                                    aria-hidden="true">
                                                                    <path d="M5 12h14"></path>
                                                                    <path d="m12 5 7 7-7 7"></path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div>
                                                <a class="group block h-full" href="/blog/11" data-discover="true">
                                                    <div
                                                        class="bg-white/95 backdrop-blur-sm rounded-2xl overflow-hidden border border-accent/20 hover:border-accent/40 hover:shadow-[0_20px_60px_rgba(226,164,95,0.25)] transition-all duration-300 h-full flex flex-col">
                                                        <div class="relative h-56 overflow-hidden">
                                                            <img src="https://images.unsplash.com/photo-1583391733956-3750e0ff4e8b?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;q=80&amp;w=1080"
                                                                alt="Diwali Fashion Guide: Traditional Meets Modern"
                                                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                                            <div class="absolute top-3 left-3">
                                                                <span
                                                                    class="inline-flex items-center gap-1 px-2.5 py-1 bg-primary/90 backdrop-blur-sm rounded-full text-xs text-white">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-circle-play w-3 h-3"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="M9 9.003a1 1 0 0 1 1.517-.859l4.997 2.997a1 1 0 0 1 0 1.718l-4.997 2.997A1 1 0 0 1 9 14.996z">
                                                                        </path>
                                                                        <circle cx="12" cy="12" r="10"></circle>
                                                                    </svg>
                                                                    Video
                                                                </span>
                                                            </div>
                                                            <div class="absolute top-3 right-3">
                                                                <span
                                                                    class="inline-flex items-center gap-1 px-3 py-1.5 bg-gradient-to-r from-accent/95 via-accent to-accent/95 backdrop-blur-sm rounded-full text-xs text-white shadow-[0_2px_8px_rgba(226,164,95,0.3)]">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-tag w-3 h-3"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="M12.586 2.586A2 2 0 0 0 11.172 2H4a2 2 0 0 0-2 2v7.172a2 2 0 0 0 .586 1.414l8.704 8.704a2.426 2.426 0 0 0 3.42 0l6.58-6.58a2.426 2.426 0 0 0 0-3.42z">
                                                                        </path>
                                                                        <circle cx="7.5" cy="7.5" r=".5"
                                                                            fill="currentColor"></circle>
                                                                    </svg>
                                                                    Seasonal
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="p-5 flex-1 flex flex-col">
                                                            <h3
                                                                class="text-xl mb-2 group-hover:text-accent transition-colors line-clamp-2">
                                                                Diwali Fashion Guide: Traditional Meets Modern</h3>
                                                            <p
                                                                class="text-muted-foreground mb-4 line-clamp-2 text-sm flex-1">
                                                                Get festive-ready with our complete guide to dressing
                                                                for Diwali celebrations.</p>
                                                            <div
                                                                class="flex items-center justify-between text-xs text-muted-foreground mb-3">
                                                                <div class="flex items-center gap-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-calendar w-3.5 h-3.5"
                                                                        aria-hidden="true">
                                                                        <path d="M8 2v4"></path>
                                                                        <path d="M16 2v4"></path>
                                                                        <rect width="18" height="18" x="3" y="4" rx="2">
                                                                        </rect>
                                                                        <path d="M3 10h18"></path>
                                                                    </svg>
                                                                    Oct 12, 2024
                                                                </div>
                                                                <div class="flex items-center gap-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-video w-3.5 h-3.5"
                                                                        aria-hidden="true">
                                                                        <path
                                                                            d="m16 13 5.223 3.482a.5.5 0 0 0 .777-.416V7.87a.5.5 0 0 0-.752-.432L16 10.5">
                                                                        </path>
                                                                        <rect x="2" y="6" width="14" height="12" rx="2">
                                                                        </rect>
                                                                    </svg>
                                                                    18:20
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="pt-3 border-t border-accent/20 flex items-center justify-between">
                                                                <div class="flex items-center gap-2">
                                                                    <div
                                                                        class="w-7 h-7 rounded-full bg-accent/20 flex items-center justify-center text-accent text-xs">
                                                                        S</div>
                                                                    <span class="text-xs">Sonam Kapoor</span>
                                                                </div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="lucide lucide-arrow-right w-4 h-4 text-accent group-hover:translate-x-1 transition-transform"
                                                                    aria-hidden="true">
                                                                    <path d="M5 12h14"></path>
                                                                    <path d="m12 5 7 7-7 7"></path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div> -->
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </main>


<?php
get_footer();
?>