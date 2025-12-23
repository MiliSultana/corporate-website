<?php get_header(); ?>

<main id="main-content" class="flex-1">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="overflow-hidden">

<!-- ================= HERO SECTION ================= -->
<section class="relative h-[60vh] lg:h-[70vh]">
    <?php if (has_post_thumbnail()) : ?>
        <?php the_post_thumbnail('full', [
            'class' => 'w-full h-full object-cover',
            'alt'   => get_the_title()
        ]); ?>
    <?php endif; ?>

    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>

    <div class="absolute bottom-0 left-0 right-0 p-8">
        <div class="max-w-4xl mx-auto">

            <!-- Back -->
            <a href="<?php echo esc_url( wp_get_referer() ?: get_post_type_archive_link('post') ); ?>"
               class="inline-flex items-center gap-2 text-white/80 hover:text-white mb-4 transition-colors">
                ← Back to Blog
            </a>

            <!-- Category -->
            <?php $cat = get_the_category(); if (!empty($cat)) : ?>
                <div class="inline-block mb-4 px-3 py-1 bg-accent rounded-full text-sm text-accent-foreground">
                    <?php echo esc_html($cat[0]->name); ?>
                </div>
            <?php endif; ?>

            <!-- Title -->
            <h1 class="text-4xl md:text-5xl lg:text-6xl text-white mb-4">
                <?php the_title(); ?>
            </h1>

            <!-- Meta -->
            <div class="flex flex-wrap items-center gap-4 text-white/80">

                <div class="flex items-center gap-2">
                    <div class="w-10 h-10 rounded-full bg-accent/30 flex items-center justify-center text-white">
                        <?php echo strtoupper(substr(get_the_author(), 0, 1)); ?>
                    </div>
                    <span><?php the_author(); ?></span>
                </div>

                <span>•</span>

                <span><?php echo get_the_date('M j, Y'); ?></span>

                <span>•</span>

                <?php
                $words = str_word_count(strip_tags(get_the_content()));
                $read_time = ceil($words / 200);
                ?>
                <span><?php echo $read_time; ?> min read</span>

            </div>

        </div>
    </div>
</section>

<!-- ================= CONTENT ================= -->
<section class="py-16 bg-white">
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

    <!-- Share -->
    <div class="mb-12 pb-8 border-b border-accent/20">
        <h3 class="text-sm uppercase tracking-wide text-muted-foreground mb-3">
            Share this article
        </h3>
        <div class="flex gap-3">
            <a target="_blank"
               href="https://wa.me/?text=<?php echo urlencode(get_permalink()); ?>"
               class="p-3 rounded-lg border border-accent/20 hover:bg-accent hover:text-white transition-all">
               WhatsApp
            </a>
            <a target="_blank"
               href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink()); ?>"
               class="p-3 rounded-lg border border-accent/20 hover:bg-accent hover:text-white transition-all">
               Twitter
            </a>
            <a target="_blank"
               href="https://www.linkedin.com/company/sevora-india/"
               class="p-3 rounded-lg border border-accent/20 hover:bg-accent hover:text-white transition-all">
               LinkedIn
            </a>
        </div>
    </div>

    <!-- Article -->
    <div class="prose prose-lg max-w-none">
        <?php the_content(); ?>
    </div>

    <!-- Author -->
    <div class="mt-16 pt-8 border-t border-accent/20">
        <div class="flex gap-6 bg-secondary p-8 rounded-lg">
            <div class="w-20 h-20 rounded-full bg-accent/20 flex items-center justify-center text-accent text-2xl">
                <?php echo strtoupper(substr(get_the_author(), 0, 1)); ?>
            </div>
            <div>
                <h3 class="text-2xl mb-2"><?php the_author(); ?></h3>
                <p class="text-muted-foreground mb-4">
                    <?php echo get_the_author_meta('description'); ?>
                </p>
                <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"
                   class="text-accent hover:underline">
                    More articles by <?php the_author(); ?>
                </a>
            </div>
        </div>
    </div>

</div>
</section>

<!-- ================= RELATED POSTS ================= -->
<section class="py-16 bg-secondary">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

<h2 class="text-3xl mb-8">Related Articles</h2>

<div class="grid md:grid-cols-3 gap-8">
<?php
$related = new WP_Query([
    'post_type'      => 'post',
    'posts_per_page' => 3,
    'post__not_in'   => [get_the_ID()]
]);

while ($related->have_posts()) : $related->the_post(); ?>
    <a class="group" href="<?php the_permalink(); ?>">
        <div class="bg-white rounded-lg overflow-hidden border border-accent/20 hover:border-accent hover:shadow-lg transition-all">
            <div class="relative h-48 overflow-hidden">
                <?php the_post_thumbnail('medium', [
                    'class' => 'w-full h-full object-cover group-hover:scale-110 transition-transform duration-700'
                ]); ?>
            </div>
            <div class="p-6">
                <h3 class="text-xl mb-2 group-hover:text-accent transition-colors">
                    <?php the_title(); ?>
                </h3>
                <p class="text-sm text-muted-foreground">
                    <?php echo get_the_date(); ?>
                </p>
            </div>
        </div>
    </a>
<?php endwhile; wp_reset_postdata(); ?>
</div>

</div>
</section>
<section class="py-20 bg-primary text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">

        <h2 class="text-4xl md:text-5xl mb-6">Enjoy This Article?</h2>

        <p class="text-xl text-white/90 mb-8">
            Subscribe to our newsletter for more fashion insights and exclusive content.
        </p>

        <a href="#footer-newsletter"
           class="inline-flex items-center justify-center gap-2 whitespace-nowrap
                  rounded-full text-sm font-medium transition-all duration-200
                  hover:scale-105 hover:shadow-lg active:scale-100
                  shadow-[0_8px_24px_rgba(0,0,0,0.12)]
                  h-[52px] px-8 py-3.5
                  bg-accent text-white hover:bg-accent/90">
            Subscribe Now
        </a>

    </div>
</section>



</div>

<?php endwhile; endif; ?>
</main>



<?php get_footer(); ?>



