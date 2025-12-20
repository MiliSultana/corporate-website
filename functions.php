<?php

add_theme_support('post-thumbnails');
add_theme_support('custom-header');

function sevora_register_menus() {
    register_nav_menus([
        'primary-menu' => 'Header Menu',
        'footer-menu1' => 'Footer – Company',
        'footer-menu2' => 'Footer – Services',
        'footer-menu3' => 'Footer – Support',
        'footer-menu4' => 'Footer – Policies',
        'sub-footer'   => 'Sub Footer'
    ]);
}
add_action('after_setup_theme', 'sevora_register_menus');


function corporate_enqueue_scripts() {
    wp_enqueue_style('corporate-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'corporate_enqueue_scripts');

function add_menu_link_classes($atts, $item, $args) {

    if (isset($args->theme_location) && $args->theme_location === 'primary-menu') {

        // Default link style
        $atts['class'] = 'transition-colors hover:text-accent text-white';

        // Active link
        if (in_array('current-menu-item', $item->classes)) {
            $atts['class'] = 'transition-colors hover:text-accent text-accent';
        }
    }

    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_menu_link_classes', 10, 3);


class Footer_Menu_Walker extends Walker_Nav_Menu {

    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {

        $output .= '<li class="menu-item">';
        $output .= '<a href="' . esc_url($item->url) . '" class="text-white/80 hover:text-accent transition-colors">';
        $output .= esc_html($item->title);
        $output .= '</a>';
    }

    public function end_el(&$output, $item, $depth = 0, $args = null) {
        $output .= '</li>';
    }
}


class Sub_Footer_Walker extends Walker_Nav_Menu {

    private $count = 0;

    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {

        if ($this->count > 0) {
            $output .= '<span class="text-white/40 mx-2">•</span>';
        }

        $output .= '<li class="inline-flex items-center">';
        $output .= '<a href="' . esc_url($item->url) . '" class="hover:text-accent transition-colors">';
        $output .= esc_html($item->title);
        $output .= '</a>';
        $output .= '</li>';

        $this->count++;
    }

    public function start_lvl(&$output, $depth = 0, $args = null) {}
    public function end_lvl(&$output, $depth = 0, $args = null) {}
}


function sevora_register_footer_widgets() {

    $footer_widgets = [
        'footer-1' => 'Footer Column 1',
        'footer-2' => 'Footer Column 2 – Company',
        'footer-3' => 'Footer Column 3 – Services',
        'footer-4' => 'Footer Column 4 – Support',
        'footer-5' => 'Footer Column 5 – Policies',
    ];

    foreach ($footer_widgets as $id => $name) {
        register_sidebar([
            'name'          => $name,
            'id'            => $id,
            'before_widget' => '<div class="footer-widget">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="mb-4">',
            'after_title'   => '</h4>',
        ]);
    }

    register_sidebar([
        'name' => 'Footer Social Icons',
        'id' => 'footer-social',
        'before_widget' => '<div class="footer-social flex items-center gap-4">',
        'after_widget'  => '</div>',
    ]);

    register_sidebar([
        'name' => 'Footer Copyright',
        'id' => 'footer-copy',
        'before_widget' => '<div class="footer-copy text-center md:text-left">',
        'after_widget'  => '</div>',
    ]);
}
add_action('widgets_init', 'sevora_register_footer_widgets');

function sevora_enqueue_assets() {
    wp_enqueue_script('jquery');

    wp_enqueue_script(
        'swiper-js',
        'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js',
        [],
        null,
        true
    );
    
    wp_enqueue_style(
        'swiper-css',
        'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css',
        [],
        null
    );

    // Custom JS
    wp_enqueue_script(
        'custom-js',
        get_template_directory_uri() . '/assets/js/custom.js',
        ['jquery'],
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'sevora_enqueue_assets');







// Function to display About Page app_sections
function display_about_app_sections() {
    $about_page = get_page_by_title('About'); // Change 'About' if your page title is different
    if (!$about_page) return; // Exit if page not found

    $about_page_id = $about_page->ID;

    // Check if repeater exists
    if (have_rows('app_sections', $about_page_id)) :
        while (have_rows('app_sections', $about_page_id)) : the_row();

            $badge = get_sub_field('app_badge_text');
            $badge_icon = get_sub_field('badge_icon');
            $heading = get_sub_field('app_heading');
            $description = get_sub_field('app_description');
            $img = get_sub_field('app_image');
            ?>

            <section class="py-12 lg:py-16 bg-primary text-white relative overflow-hidden">
                <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="grid lg:grid-cols-2 gap-8 items-center">
                        <!-- Left Column -->
                        <div>
                            <?php if ($badge) : ?>
                                <div class="inline-flex items-center gap-2 mb-4 px-4 py-2 bg-accent/30 backdrop-blur-sm border border-accent rounded-full">
                                    <?php if ($badge_icon) echo $badge_icon; ?>
                                    <span><?php echo esc_html($badge); ?></span>
                                </div>
                            <?php endif; ?>

                            <?php if ($heading) : ?>
                                <h2 class="text-3xl md:text-4xl mb-3"><?php echo esc_html($heading); ?></h2>
                            <?php endif; ?>

                            <?php if ($description) : ?>
                                <p class="text-white/90 mb-4"><?php echo esc_html($description); ?></p>
                            <?php endif; ?>

                            <!-- Features -->
                            <?php if (have_rows('app_features', $about_page_id)) : ?>
                                <div class="grid md:grid-cols-2 gap-2.5 mb-4">
                                    <?php while (have_rows('app_features', $about_page_id)) : the_row(); ?>
                                        <div class="flex items-start gap-2.5 bg-white/10 backdrop-blur-sm p-2.5 rounded-xl border border-white/20 hover:border-accent transition-all cursor-pointer shadow-[0_8px_16px_rgba(0,0,0,0.1)]">
                                            <div class="w-9 h-9 bg-gradient-to-br from-accent to-[#C8915D] rounded-full flex items-center justify-center shrink-0 text-white shadow-lg">
                                                <?php echo get_sub_field('feature_icon'); ?>
                                            </div>
                                            <div>
                                                <h4 class="mb-0.5 font-semibold text-sm"><?php echo esc_html(get_sub_field('feature_title')); ?></h4>
                                                <p class="text-xs text-white/70 leading-relaxed"><?php echo esc_html(get_sub_field('feature_description')); ?></p>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            <?php endif; ?>

                            <!-- Buttons -->
                            <?php if (have_rows('app_buttons', $about_page_id)) : ?>
    <div class="flex flex-col sm:flex-row gap-3">
        <?php while (have_rows('app_buttons', $about_page_id)) : the_row(); 
            $text = get_sub_field('button_text');
            $url = get_sub_field('button_url');
            $icon = get_sub_field('download_icon'); // SVG or HTML from ACF
        ?>
            <a href="<?php echo esc_url($url); ?>" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-full text-sm font-medium duration-200 disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg:not([class*='size-'])]:size-5 shrink-0 [&_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive hover:scale-105 active:scale-100 shadow-[0_8px_24px_rgba(0,0,0,0.12)] h-[52px] px-8 py-3.5 bg-primary hover:bg-primary/90 text-white group border border-accent/20 hover:border-accent/40 hover:shadow-[0_8px_24px_rgba(226,164,95,0.3)] transition-all">
                <?php 
                // Output SVG icon from ACF field if exists
                if ($icon) {
                    echo $icon;
                } else { ?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-download w-5 h-5 mr-2" aria-hidden="true">
                        <path d="M12 15V3"></path>
                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                        <path d="m7 10 5 5 5-5"></path>
                    </svg>
                <?php } ?>
                <?php echo esc_html($text); ?>
            </a>
        <?php endwhile; ?>
    </div>
<?php endif; ?>

                        </div>

                        <!-- Right Column Image -->
                        <div class="relative lg:block hidden">
                            <?php if ($img) : ?>
                                <div class="relative h-[500px] flex items-center justify-center">
                                    <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>" class="max-h-full w-auto rounded-3xl shadow-2xl">
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>

        <?php endwhile;
    endif;
}


//form submission

add_action('admin_menu', function () {
    add_menu_page(
        'Contact Submissions',
        'Contact Submissions',
        'manage_options',
        'contact-submissions',
        'render_contact_submissions_page',
        'dashicons-email-alt2',
        25
    );
});

add_action('wp_ajax_submit_contact_form', 'handle_contact_form');
add_action('wp_ajax_nopriv_submit_contact_form', 'handle_contact_form');

function handle_contact_form() {

    check_ajax_referer('contact_form_nonce', 'nonce');

    $entry = [
        'first_name'   => sanitize_text_field($_POST['first_name']),
        'last_name'    => sanitize_text_field($_POST['last_name']),
        'email'        => sanitize_email($_POST['email']),
        'phone'        => sanitize_text_field($_POST['phone']),
        'department'   => sanitize_text_field($_POST['department']),
        'subject'      => sanitize_text_field($_POST['subject']),
        'message'      => sanitize_textarea_field($_POST['message']),
        'submitted_at' => current_time('Y-m-d H:i:s'),
    ];

    $existing = get_field('contact_entries', 'option');
    if (!$existing) $existing = [];

    $existing[] = $entry;

    update_field('contact_entries', $existing, 'option');

    wp_send_json([
        'success' => true,
        'message' => 'Thank you! Your message has been sent.'
    ]);
}
function render_contact_submissions_page() {
    ?>
    <div class="wrap">
        <h1>Contact Submissions</h1>

        <?php
        $entries = get_field('contact_entries', 'option');

        // Safety check
        if (!is_array($entries) || empty($entries)) {
            echo '<p>No contact submissions found.</p>';
            return;
        }

        // Show latest first
        $entries = array_reverse($entries);
        ?>

        <table class="widefat fixed striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Department</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Submitted At</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($entries as $entry): ?>
                    <tr>
                        <td>
                            <?php echo esc_html(
                                ($entry['first_name'] ?? '') . ' ' . ($entry['last_name'] ?? '')
                            ); ?>
                        </td>
                        <td><?php echo esc_html($entry['email'] ?? ''); ?></td>
                        <td><?php echo esc_html($entry['department'] ?? ''); ?></td>
                        <td><?php echo esc_html($entry['subject'] ?? ''); ?></td>
                        <td><?php echo esc_html($entry['message'] ?? ''); ?></td>
                        <td><?php echo esc_html($entry['submitted_at'] ?? ''); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?php
}
add_action('init', 'handle_contact_form_submission');

function handle_contact_form_submission() {

    if (
        !isset($_POST['contact_submit']) ||
        !isset($_POST['contact_nonce']) ||
        !wp_verify_nonce($_POST['contact_nonce'], 'contact_form_submit')
    ) {
        return;
    }

    $new_entry = [
        'first_name'   => sanitize_text_field($_POST['first_name'] ?? ''),
        'last_name'    => sanitize_text_field($_POST['last_name'] ?? ''),
        'email'        => sanitize_email($_POST['email'] ?? ''),
        'phone'        => sanitize_text_field($_POST['phone'] ?? ''),
        'department'   => sanitize_text_field($_POST['department'] ?? ''),
        'subject'      => sanitize_text_field($_POST['subject'] ?? ''),
        'message'      => sanitize_textarea_field($_POST['message'] ?? ''),
        'submitted_at' => current_time('Y-m-d H:i:s'),
    ];

    // Get existing entries
    $entries = get_field('contact_entries', 'option');

    if (!is_array($entries)) {
        $entries = [];
    }

    // Add new entry
    $entries[] = $new_entry;

    // Save back to ACF Options Page
    update_field('contact_entries', $entries, 'option');

    // Prevent resubmission
    wp_redirect(add_query_arg('submitted', 'true', wp_get_referer()));
    exit;
}
