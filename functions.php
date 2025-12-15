<?php
/* =========================================================
   THEME SUPPORT
========================================================= */
add_theme_support('post-thumbnails');
add_theme_support('custom-header');

/* =========================================================
   REGISTER MENUS
========================================================= */
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

/* =========================================================
   ENQUEUE STYLES
========================================================= */
function corporate_enqueue_scripts() {
    wp_enqueue_style('corporate-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'corporate_enqueue_scripts');

/* =========================================================
   PRIMARY HEADER MENU LINK CLASSES
========================================================= */
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

/* =========================================================
   FOOTER COLUMN MENU WALKER
========================================================= */
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

/* =========================================================
   SUB FOOTER INLINE MENU WALKER (WITH DOT SEPARATOR)
========================================================= */
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

/* =========================================================
   FOOTER WIDGET AREAS
========================================================= */
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

    // Social Icons
    register_sidebar([
        'name' => 'Footer Social Icons',
        'id' => 'footer-social',
        'before_widget' => '<div class="footer-social flex items-center gap-4">',
        'after_widget'  => '</div>',
    ]);

    // Copyright
    register_sidebar([
        'name' => 'Footer Copyright',
        'id' => 'footer-copy',
        'before_widget' => '<div class="footer-copy text-center md:text-left">',
        'after_widget'  => '</div>',
    ]);
}
add_action('widgets_init', 'sevora_register_footer_widgets');
