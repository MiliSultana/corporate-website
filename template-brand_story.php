<?php 
// Template Name:Brand Story

get_header();?>


<main id="main-content" class="flex-1">
                            <div class="overflow-hidden bg-[#faf9f6]">
                                <div class="fixed top-0 left-0 right-0 h-1.5 bg-[#E2A45F] origin-left z-50"
                                    ></div>
                                <section
                                    class="relative py-24 lg:py-32 bg-gradient-to-br from-[#4A3B32] via-[#2C1810] to-[#1A0F0A] text-white overflow-hidden">
                                    <div class="absolute inset-0 opacity-20">
                                        <div class="absolute inset-0"
                                            style="background-image: radial-gradient(circle at 20% 50%, rgba(226, 164, 95, 0.4) 0%, transparent 50%), radial-gradient(circle at 80% 80%, rgba(229, 127, 109, 0.4) 0%, transparent 50%), radial-gradient(circle at 40% 20%, rgba(243, 230, 226, 0.3) 0%, transparent 50%);">
                                        </div>
                                    </div>
                                    
                                    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
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
                                                    <span class="text-primary font-medium">Brand-origin</span>
                                                </li>
                                            </ol>
                                        </nav>
                                        <!-- <div class="text-center max-w-5xl mx-auto mt-16"
                                            >
                                            <div class="inline-block mb-6 px-4 py-2 bg-[#E2A45F]/20 backdrop-blur-sm border border-[#E2A45F]/40 rounded-full"
                                                ><span
                                                    class="text-[#E2A45F] font-medium tracking-wide text-sm uppercase">The
                                                    Founder's Story</span></div>
                                            <h1 class="text-4xl md:text-5xl lg:text-7xl font-serif mb-8 leading-tight">
                                                Sevora: <span class="text-[#E2A45F] italic">Confidence, Curated</span>
                                            </h1>
                                            <div class="w-24 h-1 bg-[#E2A45F] mx-auto mb-8 rounded-full"
                                                ></div>
                                            <p
                                                class="text-xl md:text-3xl text-white/90 font-light max-w-3xl mx-auto leading-relaxed">
                                                Every good outfit begins with a feeling. <br><span
                                                    class="text-[#E2A45F]">For me, it started with frustration.</span>
                                            </p>
                                        </div> -->
                                        <?php if (have_rows('founder_sections')) : ?>
    <?php while (have_rows('founder_sections')) : the_row(); 
        $badge = get_sub_field('badge_text');
        $prefix = get_sub_field('heading_prefix');
        $highlight = get_sub_field('heading_highlight');
        $description = get_sub_field('description');
    ?>
        <div class="text-center max-w-5xl mx-auto mt-16">

            <?php if ($badge) : ?>
                <div class="inline-block mb-6 px-4 py-2 bg-[#E2A45F]/20 backdrop-blur-sm border border-[#E2A45F]/40 rounded-full">
                    <span class="text-[#E2A45F] font-medium tracking-wide text-sm uppercase">
                        <?php echo esc_html($badge); ?>
                    </span>
                </div>
            <?php endif; ?>

            <?php if ($prefix || $highlight) : ?>
                <h1 class="text-4xl md:text-5xl lg:text-7xl font-serif mb-8 leading-tight">
                    <?php echo esc_html($prefix); ?>
                    <?php if ($highlight) : ?>
                        <span class="text-[#E2A45F] italic">
                            <?php echo esc_html($highlight); ?>
                        </span>
                    <?php endif; ?>
                </h1>
            <?php endif; ?>

            <div class="w-24 h-1 bg-[#E2A45F] mx-auto mb-8 rounded-full"></div>

            <?php if ($description) : ?>
                <p class="text-xl md:text-3xl text-white/90 font-light max-w-3xl mx-auto leading-relaxed">
                    <?php echo nl2br(esc_html($description)); ?>
                </p>
            <?php endif; ?>

        </div>
    <?php endwhile; ?>
<?php endif; ?>

                                    </div>
                                </section>
                                <!-- <section class="py-24 lg:py-32 relative">
                                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                                        <div class="grid lg:grid-cols-2 gap-16 items-center">
                                            <div class="relative" >
                                                <div
                                                    class="absolute -top-10 -left-10 w-24 h-24 bg-[#E2A45F]/10 rounded-full blur-2xl">
                                                </div>
                                                <div class="flex items-center gap-4 mb-6">
                                                    <div
                                                        class="w-12 h-12 bg-[#4A3B32] rounded-full flex items-center justify-center text-white">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="lucide lucide-shirt w-6 h-6"
                                                            aria-hidden="true">
                                                            <path
                                                                d="M20.38 3.46 16 2a4 4 0 0 1-8 0L3.62 3.46a2 2 0 0 0-1.34 2.23l.58 3.47a1 1 0 0 0 .99.84H6v10c0 1.1.9 2 2 2h8a2 2 0 0 0 2-2V10h2.15a1 1 0 0 0 .99-.84l.58-3.47a2 2 0 0 0-1.34-2.23z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                    <span
                                                        class="text-sm font-bold tracking-widest uppercase text-[#4A3B32]/60">Chapter
                                                        I</span>
                                                </div>
                                                <h2
                                                    class="text-4xl md:text-5xl font-serif text-[#4A3B32] mb-8 leading-tight">
                                                    The Uniform of <br><span
                                                        class="italic text-[#E2A45F]">Conformity</span></h2>
                                                <div class="space-y-6 text-lg text-gray-600 leading-relaxed font-light">
                                                    <p>For most of my life, clothes were like background music - always
                                                        playing, never noticed.</p>
                                                    <p>As a kid, fashion wasn’t a concept; it was functional, a basic
                                                        necessity. In high school, my "style" would revolve around a
                                                        black pair of pants and a white shirt. Every year on Eid, I
                                                        would buy the exact same thing - not as a festive outfit but for
                                                        the sake of blatant continuity.</p>
                                                    <p>I attended classes six days a week and wore one standard uniform
                                                        to school. So, this turned into a practical solution in the
                                                        early years of high school.</p>
                                                    <p>Fast-forward to Kolkata: I was building businesses with strategy
                                                        and intention, yet dressing like a man who was outsourcing his
                                                        personality from shop assistants. "This is fine," they’d say,
                                                        and apparently so was I.</p>
                                                </div>
                                            </div>
                                            <div class="relative bg-white p-10 md:p-14 rounded-3xl shadow-[0_30px_60px_rgba(0,0,0,0.08)] border border-[#E2A45F]/20"
                                                >
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-quote w-16 h-16 text-[#E2A45F]/20 mb-6 absolute top-8 right-8"
                                                    aria-hidden="true">
                                                    <path
                                                        d="M16 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z">
                                                    </path>
                                                    <path
                                                        d="M5 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z">
                                                    </path>
                                                </svg>
                                                <div class="relative z-10">
                                                    <p
                                                        class="text-2xl md:text-3xl font-serif italic text-[#4A3B32] mb-8 leading-relaxed">
                                                        "My closet expanded, but my sense of style was still rooted in a
                                                        pair of black trousers and several white shirts. Accidentally, I
                                                        ended up inventing a new uniform for myself: formal shirts,
                                                        formal trousers, formal…life?"</p>
                                                    <div class="flex items-center gap-4">
                                                        <div class="w-12 h-1 bg-[#E2A45F] rounded-full"></div>
                                                        <span
                                                            class="text-sm uppercase tracking-widest text-gray-400">The
                                                            Realization</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section> -->

<?php if (have_rows('story_chapters')) : ?>
    <?php while (have_rows('story_chapters')) : the_row(); 
        $icon_svg = get_sub_field('chapter_icon_svg');
        $chapter_label = get_sub_field('chapter_label');
        $heading_main = get_sub_field('heading_main');
        $heading_highlight = get_sub_field('heading_highlight');
        $quote = get_sub_field('quote_text');
        $quote_label = get_sub_field('quote_footer_label');
    ?>

<section class="py-24 lg:py-32 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">

            <!-- LEFT CONTENT -->
            <div class="relative">
                <div class="absolute -top-10 -left-10 w-24 h-24 bg-[#E2A45F]/10 rounded-full blur-2xl"></div>

                <div class="flex items-center gap-4 mb-6">
                    <div class="w-12 h-12 bg-[#4A3B32] rounded-full flex items-center justify-center text-white">
                        <?php if ($icon_svg) : ?>
                            <?php echo $icon_svg; ?>
                        <?php endif; ?>
                    </div>

                    <?php if ($chapter_label) : ?>
                        <span class="text-sm font-bold tracking-widest uppercase text-[#4A3B32]/60">
                            <?php echo esc_html($chapter_label); ?>
                        </span>
                    <?php endif; ?>
                </div>

                <h2 class="text-4xl md:text-5xl font-serif text-[#4A3B32] mb-8 leading-tight">
                    <?php echo esc_html($heading_main); ?><br>
                    <span class="italic text-[#E2A45F]">
                        <?php echo esc_html($heading_highlight); ?>
                    </span>
                </h2>

                <?php if (have_rows('content_paragraphs')) : ?>
                    <div class="space-y-6 text-lg text-gray-600 leading-relaxed font-light">
                        <?php while (have_rows('content_paragraphs')) : the_row(); ?>
                            <p><?php echo esc_html(get_sub_field('paragraph_text')); ?></p>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>

            <!-- RIGHT QUOTE CARD -->
            <div class="relative bg-white p-10 md:p-14 rounded-3xl shadow-[0_30px_60px_rgba(0,0,0,0.08)] border border-[#E2A45F]/20">

                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-quote w-16 h-16 text-[#E2A45F]/20 mb-6 absolute top-8 right-8"
                    aria-hidden="true">
                    <path d="M16 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z"/>
                    <path d="M5 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z"/>
                </svg>

                <div class="relative z-10">
                    <p class="text-2xl md:text-3xl font-serif italic text-[#4A3B32] mb-8 leading-relaxed">
                        <?php echo esc_html($quote); ?>
                    </p>

                    <div class="flex items-center gap-4">
                        <div class="w-12 h-1 bg-[#E2A45F] rounded-full"></div>
                        <span class="text-sm uppercase tracking-widest text-gray-400">
                            <?php echo esc_html($quote_label); ?>
                        </span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<?php endwhile; ?>
<?php endif; ?>


                                <!-- <section class="py-24 lg:py-32 bg-[#2C1810] text-white relative overflow-hidden">
                                    <div
                                        class="absolute top-0 right-0 w-1/2 h-full bg-[#E2A45F]/5 -skew-x-12 transform translate-x-32">
                                    </div>
                                    <div
                                        class="absolute bottom-0 left-0 w-64 h-64 bg-[#E57F6D]/10 rounded-full blur-3xl">
                                    </div>
                                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                                        <div class="grid lg:grid-cols-12 gap-12 lg:gap-20 items-center">
                                            <div class="lg:col-span-5 order-2 lg:order-1"
                                                >
                                                <div class="relative group">
                                                    <div
                                                        class="absolute inset-0 bg-[#E2A45F] rounded-2xl transform rotate-3 opacity-20 group-hover:rotate-6 transition-transform duration-500">
                                                    </div>
                                                    <div
                                                        class="absolute inset-0 bg-[#E2A45F] rounded-2xl transform -rotate-2 opacity-20 group-hover:-rotate-4 transition-transform duration-500 delay-75">
                                                    </div>
                                                    <img src="images/mm.png"
                                                        alt="Mashum Mollah, Founder of Sevora"
                                                        class="relative rounded-2xl shadow-2xl w-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700">
                                                    <div class="absolute -bottom-8 -right-8 bg-[#faf9f6] text-[#4A3B32] p-6 rounded-xl shadow-[0_20px_40px_rgba(0,0,0,0.3)] max-w-xs hidden md:block"
                                                       >
                                                        <p class="font-serif italic text-lg leading-snug">"Confidence
                                                            shouldn't be an accident. It should be curated."</p>
                                                        <div
                                                            class="mt-4 flex items-center justify-between border-t border-[#4A3B32]/10 pt-3">
                                                            <p
                                                                class="text-xs font-bold uppercase tracking-wide text-[#E2A45F]">
                                                                Mashum Mollah</p>
                                                            <span class="text-xs text-gray-400">Founder</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="lg:col-span-7 order-1 lg:order-2"
                                                >
                                                <div class="flex items-center gap-4 mb-6">
                                                    <div
                                                        class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center text-[#E2A45F]">
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
                                                    <span
                                                        class="text-sm font-bold tracking-widest uppercase text-white/40">Chapter
                                                        II</span>
                                                </div>
                                                <h2 class="text-4xl md:text-6xl font-serif mb-10 leading-none">Identity
                                                    Crisis, <br><span class="text-[#E2A45F] italic">Table for One</span>
                                                </h2>
                                                <div
                                                    class="space-y-8 text-lg md:text-xl text-white/80 leading-relaxed font-light">
                                                    <p>And then one fine Sunday, everything changed. A friend’s fiancée
                                                        casually detonated the truth at the dinner table:</p>
                                                    <div class="relative pl-8">
                                                        <div
                                                            class="absolute left-0 top-0 bottom-0 w-1 bg-gradient-to-b from-[#E2A45F] to-transparent">
                                                        </div>
                                                        <p class="text-3xl md:text-4xl font-serif text-white italic">
                                                            "Mashum is always in formals."</p>
                                                    </div>
                                                    <p><strong class="text-white font-medium">Boom. Identity crisis,
                                                            table for me.</strong></p>
                                                    <p>I went home, opened my wardrobe, and finally saw it: I didn’t
                                                        have style. I had a long, loyal habit disguised as style. As an
                                                        entrepreneur in my late 20s, this was a devastating realization.
                                                    </p>
                                                    <p class="bg-white/5 p-6 rounded-lg border border-white/10">I could
                                                        build successful businesses from scratch, yet fail to dress in a
                                                        way that felt authentic to me. And if I, someone confident in so
                                                        many other aspects of life, felt this confusion, how many others
                                                        were silently experiencing the same?</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section> -->


                                <?php if (have_rows('founder_chapters')) : ?>
<?php while (have_rows('founder_chapters')) : the_row();

    $icon_svg = get_sub_field('chapter_icon_svg');
    $chapter_label = get_sub_field('chapter_label');
    $heading_main = get_sub_field('heading_main');
    $heading_highlight = get_sub_field('heading_highlight');
    $image = get_sub_field('chapter_image');
    $image_quote = get_sub_field('image_quote');
    $quote_author = get_sub_field('quote_author');
    $quote_role = get_sub_field('quote_role');

?>
<section class="py-24 lg:py-32 bg-[#2C1810] text-white relative overflow-hidden">

    <div class="absolute top-0 right-0 w-1/2 h-full bg-[#E2A45F]/5 -skew-x-12 transform translate-x-32"></div>
    <div class="absolute bottom-0 left-0 w-64 h-64 bg-[#E57F6D]/10 rounded-full blur-3xl"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid lg:grid-cols-12 gap-12 lg:gap-20 items-center">

            <!-- IMAGE COLUMN -->
            <div class="lg:col-span-5 order-2 lg:order-1">
                <div class="relative group">

                    <div class="absolute inset-0 bg-[#E2A45F] rounded-2xl transform rotate-3 opacity-20 group-hover:rotate-6 transition-transform duration-500"></div>
                    <div class="absolute inset-0 bg-[#E2A45F] rounded-2xl transform -rotate-2 opacity-20 group-hover:-rotate-4 transition-transform duration-500 delay-75"></div>

                    <?php if ($image) : ?>
                        <img src="<?php echo esc_url($image['url']); ?>"
                             alt="<?php echo esc_attr($image['alt']); ?>"
                             class="relative rounded-2xl shadow-2xl w-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700">
                    <?php endif; ?>

                    <?php if ($image_quote) : ?>
                        <div class="absolute -bottom-8 -right-8 bg-[#faf9f6] text-[#4A3B32] p-6 rounded-xl shadow-[0_20px_40px_rgba(0,0,0,0.3)] max-w-xs hidden md:block">
                            <p class="font-serif italic text-lg leading-snug">
                                "<?php echo esc_html($image_quote); ?>"
                            </p>
                            <div class="mt-4 flex items-center justify-between border-t border-[#4A3B32]/10 pt-3">
                                <p class="text-xs font-bold uppercase tracking-wide text-[#E2A45F]">
                                    <?php echo esc_html($quote_author); ?>
                                </p>
                                <span class="text-xs text-gray-400">
                                    <?php echo esc_html($quote_role); ?>
                                </span>
                            </div>
                        </div>
                    <?php endif; ?>

                </div>
            </div>

            <!-- CONTENT COLUMN -->
            <div class="lg:col-span-7 order-1 lg:order-2">

                <div class="flex items-center gap-4 mb-6">
                    <div class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center text-[#E2A45F]">
                        <?php echo $icon_svg; ?>
                    </div>
                    <span class="text-sm font-bold tracking-widest uppercase text-white/40">
                        <?php echo esc_html($chapter_label); ?>
                    </span>
                </div>

                <h2 class="text-4xl md:text-6xl font-serif mb-10 leading-none">
                    <?php echo esc_html($heading_main); ?><br>
                    <span class="text-[#E2A45F] italic">
                        <?php echo esc_html($heading_highlight); ?>
                    </span>
                </h2>

                <?php if (have_rows('content_blocks')) : ?>
                <div class="space-y-8 text-lg md:text-xl text-white/80 leading-relaxed font-light">

                    <?php while (have_rows('content_blocks')) : the_row();
                        $type = get_sub_field('block_type');
                        $text = get_sub_field('block_text');
                    ?>

                        <?php if ($type === 'text') : ?>
                            <p><?php echo esc_html($text); ?></p>

                        <?php elseif ($type === 'highlight') : ?>
                            <div class="relative pl-8">
                                <div class="absolute left-0 top-0 bottom-0 w-1 bg-gradient-to-b from-[#E2A45F] to-transparent"></div>
                                <p class="text-3xl md:text-4xl font-serif text-white italic">
                                    "<?php echo esc_html($text); ?>"
                                </p>
                            </div>

                        <?php elseif ($type === 'callout') : ?>
                            <p class="bg-white/5 p-6 rounded-lg border border-white/10">
                                <?php echo esc_html($text); ?>
                            </p>
                        <?php endif; ?>

                    <?php endwhile; ?>

                </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>

<?php endwhile; ?>
<?php endif; ?>

                                <!-- <section class="py-24 lg:py-32 relative bg-white">
                                    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                                        <div class="text-center" >
                                            <div
                                                class="inline-flex items-center justify-center w-16 h-16 bg-[#E2A45F]/10 rounded-full mb-8">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-gem w-8 h-8 text-[#E2A45F]" aria-hidden="true">
                                                    <path d="M10.5 3 8 9l4 13 4-13-2.5-6"></path>
                                                    <path
                                                        d="M17 3a2 2 0 0 1 1.6.8l3 4a2 2 0 0 1 .013 2.382l-7.99 10.986a2 2 0 0 1-3.247 0l-7.99-10.986A2 2 0 0 1 2.4 7.8l2.998-3.997A2 2 0 0 1 7 3z">
                                                    </path>
                                                    <path d="M2 9h20"></path>
                                                </svg>
                                            </div>
                                            <h2
                                                class="text-4xl md:text-6xl font-serif text-[#4A3B32] mb-12 leading-tight">
                                                So I set out to change the <br>experience entirely.</h2>
                                            <p
                                                class="text-2xl md:text-3xl text-gray-500 font-light mb-16 italic leading-relaxed max-w-3xl mx-auto">
                                                "People stand in front of their closets - overflowing with clothes, yet
                                                missing the pieces that made them ‘feel like themselves.’ Fashion was
                                                supposed to empower, yet too often it overwhelmed."</p>
                                            <div class="text-lg text-gray-600 mb-12">And thus was born <span
                                                    class="font-bold text-[#4A3B32] text-xl">Sevora</span>.</div>
                                            <div
                                                class="bg-[#FAF7F2] p-8 md:p-16 rounded-[2.5rem] border border-[#E2A45F]/20 my-20 shadow-[0_20px_60px_rgba(226,164,95,0.1)]">
                                                <h3 class="text-2xl md:text-4xl font-serif text-[#4A3B32] mb-12">I
                                                    believe confidence shouldn’t be an accident.</h3>
                                                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                                                    <div class="group relative bg-white p-6 rounded-2xl border border-[#E2A45F]/10 hover:border-[#E2A45F] hover:shadow-lg transition-all cursor-default"
                                                        >
                                                        <div
                                                            class="absolute top-3 right-3 w-2 h-2 rounded-full bg-[#E2A45F] opacity-0 group-hover:opacity-100 transition-opacity">
                                                        </div>
                                                        <span
                                                            class="text-sm md:text-base uppercase tracking-widest text-[#4A3B32] font-semibold group-hover:text-[#E2A45F] transition-colors">Curated</span>
                                                    </div>
                                                    <div class="group relative bg-white p-6 rounded-2xl border border-[#E2A45F]/10 hover:border-[#E2A45F] hover:shadow-lg transition-all cursor-default"
                                                        >
                                                        <div
                                                            class="absolute top-3 right-3 w-2 h-2 rounded-full bg-[#E2A45F] opacity-0 group-hover:opacity-100 transition-opacity">
                                                        </div>
                                                        <span
                                                            class="text-sm md:text-base uppercase tracking-widest text-[#4A3B32] font-semibold group-hover:text-[#E2A45F] transition-colors">Thoughtfully</span>
                                                    </div>
                                                    <div class="group relative bg-white p-6 rounded-2xl border border-[#E2A45F]/10 hover:border-[#E2A45F] hover:shadow-lg transition-all cursor-default"
                                                        >
                                                        <div
                                                            class="absolute top-3 right-3 w-2 h-2 rounded-full bg-[#E2A45F] opacity-0 group-hover:opacity-100 transition-opacity">
                                                        </div>
                                                        <span
                                                            class="text-sm md:text-base uppercase tracking-widest text-[#4A3B32] font-semibold group-hover:text-[#E2A45F] transition-colors">Intentionally</span>
                                                    </div>
                                                    <div class="group relative bg-white p-6 rounded-2xl border border-[#E2A45F]/10 hover:border-[#E2A45F] hover:shadow-lg transition-all cursor-default"
                                                        >
                                                        <div
                                                            class="absolute top-3 right-3 w-2 h-2 rounded-full bg-[#E2A45F] opacity-0 group-hover:opacity-100 transition-opacity">
                                                        </div>
                                                        <span
                                                            class="text-sm md:text-base uppercase tracking-widest text-[#4A3B32] font-semibold group-hover:text-[#E2A45F] transition-colors">Expertly</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="text-left space-y-8 text-lg md:text-xl text-gray-600 leading-relaxed font-light">
                                                <p>And this belief became the spark behind my brand. It started with
                                                    traveling - through studios, ateliers, and emerging design houses -
                                                    hand-selecting labels that didn’t just make garments, but crafted
                                                    identity.</p>
                                                <p>And then came in stylists, creators, and fashion experts; people who
                                                    understood that what you wear is an extension of who you are. The
                                                    result? A one-stop destination where every piece has a purpose,
                                                    every label has a story, and every outfit is designed to make you
                                                    stand taller.</p>
                                                <div
                                                    class="border-l-4 border-[#E2A45F] pl-6 py-2 my-8 bg-gray-50 rounded-r-lg">
                                                    <p class="font-bold text-[#4A3B32] text-xl mb-2">This isn’t fast
                                                        fashion. This isn’t endless scrolling.</p>
                                                    <p class="text-gray-500 italic">This is a curated collection built
                                                        to elevate you: your life, your ambition, your everyday.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section> -->


                                <?php if (have_rows('experience_sections')) : ?>
<?php while (have_rows('experience_sections')) : the_row(); ?>

<section class="py-24 lg:py-32 relative bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">

            <!-- ICON -->
            <?php if ($icon = get_sub_field('icon_svg')) : ?>
                <div class="inline-flex items-center justify-center w-16 h-16 bg-[#E2A45F]/10 rounded-full mb-8">
                    <?php echo $icon; ?>
                </div>
            <?php endif; ?>

            <!-- HEADING -->
            <h2 class="text-4xl md:text-6xl font-serif text-[#4A3B32] mb-12 leading-tight">
                <?php echo wp_kses_post(get_sub_field('main_heading')); ?>
            </h2>

            <!-- INTRO QUOTE -->
            <p class="text-2xl md:text-3xl text-gray-500 font-light mb-16 italic leading-relaxed max-w-3xl mx-auto">
                "<?php echo esc_html(get_sub_field('intro_quote')); ?>"
            </p>

            <!-- BRAND LINE -->
            <div class="text-lg text-gray-600 mb-12">
                <?php echo esc_html(get_sub_field('brand_line')); ?>
                <span class="font-bold text-[#4A3B32] text-xl">
                    <?php echo esc_html(get_sub_field('brand_name')); ?>
                </span>.
            </div>

            <!-- BELIEF BOX -->
            <div class="bg-[#FAF7F2] p-8 md:p-16 rounded-[2.5rem] border border-[#E2A45F]/20 my-20 shadow-[0_20px_60px_rgba(226,164,95,0.1)]">

                <h3 class="text-2xl md:text-4xl font-serif text-[#4A3B32] mb-12">
                    <?php echo esc_html(get_sub_field('belief_heading')); ?>
                </h3>

                <?php if (have_rows('values')) : ?>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                    <?php while (have_rows('values')) : the_row(); ?>
                        <div class="group relative bg-white p-6 rounded-2xl border border-[#E2A45F]/10 hover:border-[#E2A45F] hover:shadow-lg transition-all cursor-default">
                            <div class="absolute top-3 right-3 w-2 h-2 rounded-full bg-[#E2A45F] opacity-0 group-hover:opacity-100 transition-opacity"></div>
                            <span class="text-sm md:text-base uppercase tracking-widest text-[#4A3B32] font-semibold group-hover:text-[#E2A45F] transition-colors">
                                <?php echo esc_html(get_sub_field('value_text')); ?>
                            </span>
                        </div>
                    <?php endwhile; ?>
                </div>
                <?php endif; ?>

            </div>

            <!-- PARAGRAPHS -->
            <?php if (have_rows('paragraphs')) : ?>
            <div class="text-left space-y-8 text-lg md:text-xl text-gray-600 leading-relaxed font-light">
                <?php while (have_rows('paragraphs')) : the_row(); ?>
                    <p><?php echo esc_html(get_sub_field('paragraph_text')); ?></p>
                <?php endwhile; ?>

                <!-- CALLOUT -->
                <?php if (have_rows('callouts')) : ?>
    <?php while (have_rows('callouts')) : the_row(); ?>
        <div class="border-l-4 border-[#E2A45F] pl-6 py-2 my-8 bg-gray-50 rounded-r-lg">
            <p class="font-bold text-[#4A3B32] text-xl mb-2">
                <?php echo esc_html(get_sub_field('callout_title')); ?>
            </p>
            <p class="text-gray-500 italic">
                <?php echo esc_html(get_sub_field('callout_text')); ?>
            </p>
        </div>
    <?php endwhile; ?>
<?php endif; ?>

            </div>
            <?php endif; ?>

        </div>
    </div>
</section>

<?php endwhile; ?>
<?php endif; ?>

                                <!-- <section class="py-24 lg:py-32 bg-[#E2A45F]/10 relative overflow-hidden">
                                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
                                        <div >
                                            <h2 class="text-4xl md:text-6xl font-serif text-[#4A3B32] mb-8">Welcome to
                                                Sevora: <br><span class="text-[#E2A45F] italic">Curated,
                                                    Confidence.</span></h2>
                                            <p
                                                class="text-xl md:text-2xl text-gray-600 max-w-3xl mx-auto mb-16 leading-relaxed">
                                                It’s more than a tagline, it’s our promise. Today, Sevora exists with a
                                                single purpose: to help you discover pieces that shape your presence and
                                                amplify your individuality.</p>
                                            <div
                                                class="max-w-2xl mx-auto transform hover:scale-105 transition-transform duration-300">
                                                <button data-slot="button"
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
                                            <div class="mt-20">
                                                <p class="font-serif italic text-[#4A3B32]/60 text-lg">Mashum Mollah</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="absolute top-0 left-0 w-96 h-96 bg-white/40 rounded-full blur-3xl -translate-x-1/2 -translate-y-1/2">
                                    </div>
                                    <div
                                        class="absolute bottom-0 right-0 w-96 h-96 bg-[#E2A45F]/20 rounded-full blur-3xl translate-x-1/2 translate-y-1/2">
                                    </div>
                                </section> -->

                                <?php if (have_rows('welcome_sections')) : ?>
    <?php while (have_rows('welcome_sections')) : the_row(); ?>
        <section class="py-24 lg:py-32 bg-[#E2A45F]/10 relative overflow-hidden">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
                <div>
                    <h2 class="text-4xl md:text-6xl font-serif text-[#4A3B32] mb-8">
                        <?php echo esc_html(get_sub_field('heading')); ?><br>
                        <span class="text-[#E2A45F] italic">
                            <?php echo esc_html(get_sub_field('highlight_text')); ?>
                        </span>
                    </h2>

                    <p class="text-xl md:text-2xl text-gray-600 max-w-3xl mx-auto mb-16 leading-relaxed">
                        <?php echo esc_html(get_sub_field('description')); ?>
                    </p>

                    <div class="max-w-2xl mx-auto transform hover:scale-105 transition-transform duration-300">
                        <a href="<?php echo esc_url(get_sub_field('button_url')); ?>"
                           class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full text-sm font-medium duration-200 h-[52px] px-8 py-3.5 bg-gradient-to-r from-accent to-[#C8915D] hover:from-[#C8915D] hover:to-accent text-white shadow-lg hover:shadow-xl transition-all">

                            <?php if ($svg = get_sub_field('button_svg')) : ?>
                                <span class="w-4 h-4 mr-2">
                                    <?php echo $svg; ?>
                                </span>
                            <?php endif; ?>

                            <?php echo esc_html(get_sub_field('button_text')); ?>
                        </a>
                    </div>

                    <?php if ($author = get_sub_field('author_name')) : ?>
                        <div class="mt-20">
                            <p class="font-serif italic text-[#4A3B32]/60 text-lg">
                                <?php echo esc_html($author); ?>
                            </p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Decorative Backgrounds -->
            <div class="absolute top-0 left-0 w-96 h-96 bg-white/40 rounded-full blur-3xl -translate-x-1/2 -translate-y-1/2"></div>
            <div class="absolute bottom-0 right-0 w-96 h-96 bg-[#E2A45F]/20 rounded-full blur-3xl translate-x-1/2 translate-y-1/2"></div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>

                            </div>
                        </main>


<?php
get_footer();
?>