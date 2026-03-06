<?php
/**
 * Ashton Court Hotel Theme Functions
 *
 * @package Ashton_Court
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

define('ASHTON_THEME_VERSION', '1.0.2');
define('ASHTON_THEME_DIR', get_template_directory());
define('ASHTON_THEME_URI', get_template_directory_uri());

/**
 * Theme Setup
 */
function ashton_court_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script'
    ));
    add_theme_support('custom-logo', array(
        'height'      => 80,
        'width'       => 250,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    add_theme_support('responsive-embeds');
    add_theme_support('editor-styles');
    
    // Register navigation menus
    register_nav_menus(array(
        'primary'   => __('Primary Menu', 'ashton-court'),
        'footer'    => __('Footer Menu', 'ashton-court'),
    ));
    
    // Add image sizes
    add_image_size('hero-large', 1920, 1080, true);
    add_image_size('hero-medium', 1280, 720, true);
    add_image_size('room-card', 600, 400, true);
    add_image_size('room-gallery', 1200, 800, true);
    add_image_size('testimonial', 100, 100, true);
}
add_action('after_setup_theme', 'ashton_court_setup');

/**
 * Enqueue Scripts and Styles
 */
function ashton_court_scripts() {
    // Google Fonts - Cormorant Garamond & Jost
    wp_enqueue_style(
        'ashton-google-fonts',
        'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500&family=Jost:wght@300;400;500;600&display=swap',
        array(),
        null
    );
    
    // Main Stylesheet
    wp_enqueue_style(
        'ashton-main-style',
        ASHTON_THEME_URI . '/assets/css/main.css',
        array(),
        ASHTON_THEME_VERSION
    );
    
    // Animations CSS
    wp_enqueue_style(
        'ashton-animations',
        ASHTON_THEME_URI . '/assets/css/animations.css',
        array('ashton-main-style'),
        ASHTON_THEME_VERSION
    );
    
    // Responsive CSS
    wp_enqueue_style(
        'ashton-responsive',
        ASHTON_THEME_URI . '/assets/css/responsive.css',
        array('ashton-main-style'),
        ASHTON_THEME_VERSION
    );
    
    // Lenis Smooth Scroll
    wp_enqueue_script(
        'lenis',
        'https://unpkg.com/@studio-freight/lenis@1.0.42/dist/lenis.min.js',
        array(),
        '1.0.42',
        true
    );
    
    // GSAP for animations
    wp_enqueue_script(
        'gsap',
        'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js',
        array(),
        '3.12.2',
        true
    );
    
    // GSAP ScrollTrigger
    wp_enqueue_script(
        'gsap-scrolltrigger',
        'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js',
        array('gsap'),
        '3.12.2',
        true
    );
    
    // Main JavaScript
    wp_enqueue_script(
        'ashton-main-js',
        ASHTON_THEME_URI . '/assets/js/main.js',
        array('gsap', 'gsap-scrolltrigger', 'lenis'),
        ASHTON_THEME_VERSION,
        true
    );
    
    // Animations JavaScript
    wp_enqueue_script(
        'ashton-animations-js',
        ASHTON_THEME_URI . '/assets/js/animations.js',
        array('ashton-main-js'),
        ASHTON_THEME_VERSION,
        true
    );
    
    // Booking JavaScript
    wp_enqueue_script(
        'ashton-booking-js',
        ASHTON_THEME_URI . '/assets/js/booking.js',
        array('ashton-main-js'),
        ASHTON_THEME_VERSION,
        true
    );
    
    // Localize script for AJAX
    wp_localize_script('ashton-main-js', 'ashtonAjax', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
        'nonce'   => wp_create_nonce('ashton_nonce'),
        'homeUrl' => home_url(),
    ));
}
add_action('wp_enqueue_scripts', 'ashton_court_scripts');

/**
 * Include Custom Post Types
 */
require_once ASHTON_THEME_DIR . '/inc/custom-post-types.php';

/**
 * Include Customizer Settings
 */
require_once ASHTON_THEME_DIR . '/inc/customizer.php';

/**
 * Include Booking System
 */
require_once ASHTON_THEME_DIR . '/inc/booking-system.php';

/**
 * Include ACF Field Definitions (only when ACF is active)
 */
if (class_exists('ACF')) {
    require_once ASHTON_THEME_DIR . '/inc/acf-fields.php';

    // Use Classic Editor for pages so ACF Flexible Content fields are fully visible
    add_filter('use_block_editor_for_post_type', function($use, $post_type) {
        if ($post_type === 'page') return false;
        return $use;
    }, 10, 2);
}

/**
 * Custom Body Classes
 */
function ashton_court_body_classes($classes) {
    $classes[] = 'ashton-court-theme';
    
    if (is_front_page()) {
        $classes[] = 'is-home';
    }
    
    if (is_page_template('page-rooms.php')) {
        $classes[] = 'is-rooms';
    }
    
    return $classes;
}
add_filter('body_class', 'ashton_court_body_classes');

/**
 * Disable WordPress Emoji
 */
function ashton_disable_emojis() {
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
}
add_action('init', 'ashton_disable_emojis');

/**
 * Remove WordPress Version from Head
 */
remove_action('wp_head', 'wp_generator');

/**
 * Add Preload for Critical Resources
 */
function ashton_preload_resources() {
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
    echo '<link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500&family=Jost:wght@300;400;500;600&display=swap">';
}
add_action('wp_head', 'ashton_preload_resources', 1);

/**
 * Custom Excerpt Length
 */
function ashton_excerpt_length($length) {
    return 25;
}
add_filter('excerpt_length', 'ashton_excerpt_length');

/**
 * Custom Excerpt More
 */
function ashton_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'ashton_excerpt_more');

/**
 * Register Widget Areas
 */
function ashton_widgets_init() {
    register_sidebar(array(
        'name'          => __('Footer Widget 1', 'ashton-court'),
        'id'            => 'footer-1',
        'description'   => __('Footer widget area 1', 'ashton-court'),
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));
    
    register_sidebar(array(
        'name'          => __('Footer Widget 2', 'ashton-court'),
        'id'            => 'footer-2',
        'description'   => __('Footer widget area 2', 'ashton-court'),
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'ashton_widgets_init');

/**
 * AJAX Handler for Booking Form
 */
function ashton_handle_booking() {
    check_ajax_referer('ashton_nonce', 'nonce');
    
    $check_in = sanitize_text_field($_POST['check_in']);
    $check_out = sanitize_text_field($_POST['check_out']);
    $guests = intval($_POST['guests']);
    $room_type = sanitize_text_field($_POST['room_type']);
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $phone = sanitize_text_field($_POST['phone']);
    $special_requests = sanitize_textarea_field($_POST['special_requests']);
    
    $to = get_option('admin_email');
    $subject = 'New Booking Request - Ashton Court Hotel';
    $message = "New booking request received:\n\n";
    $message .= "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Phone: $phone\n";
    $message .= "Check-in: $check_in\n";
    $message .= "Check-out: $check_out\n";
    $message .= "Guests: $guests\n";
    $message .= "Room Type: $room_type\n";
    $message .= "Special Requests: $special_requests\n";
    
    $sent = wp_mail($to, $subject, $message);
    
    if ($sent) {
        wp_send_json_success(array(
            'message' => 'Your booking request has been received. We will contact you shortly to confirm your reservation.'
        ));
    } else {
        wp_send_json_error(array(
            'message' => 'There was an error processing your request. Please call us directly at +44 (0)1395 263002.'
        ));
    }
}
add_action('wp_ajax_ashton_booking', 'ashton_handle_booking');
add_action('wp_ajax_nopriv_ashton_booking', 'ashton_handle_booking');

/**
 * AJAX Handler for Contact Form
 */
function ashton_handle_contact() {
    check_ajax_referer('ashton_nonce', 'nonce');
    
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $subject = sanitize_text_field($_POST['subject']);
    $message = sanitize_textarea_field($_POST['message']);
    
    $to = get_option('admin_email');
    $email_subject = 'Contact Form: ' . $subject;
    $email_message = "New contact form submission:\n\n";
    $email_message .= "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Subject: $subject\n\n";
    $email_message .= "Message:\n$message\n";
    
    $headers = array('Reply-To: ' . $name . ' <' . $email . '>');
    
    $sent = wp_mail($to, $email_subject, $email_message, $headers);
    
    if ($sent) {
        wp_send_json_success(array(
            'message' => 'Thank you for your message. We will respond within 24 hours.'
        ));
    } else {
        wp_send_json_error(array(
            'message' => 'There was an error sending your message. Please email us directly at reception@ashtoncourthotel.co.uk'
        ));
    }
}
add_action('wp_ajax_ashton_contact', 'ashton_handle_contact');
add_action('wp_ajax_nopriv_ashton_contact', 'ashton_handle_contact');

/**
 * Theme Activation - Create Pages, Menu, and Default Content
 */
function ashton_theme_activation() {
    // Pages to create
    $pages = array(
        array(
            'title'    => 'Home',
            'template' => '',
            'content'  => '',
        ),
        array(
            'title'    => 'Rooms',
            'template' => 'page-rooms.php',
            'content'  => '',
        ),
        array(
            'title'    => 'Dining',
            'template' => 'page-dining.php',
            'content'  => '',
        ),
        array(
            'title'    => 'Weddings',
            'template' => 'page-weddings.php',
            'content'  => '',
        ),
        array(
            'title'    => 'Functions',
            'template' => 'page-functions.php',
            'content'  => '',
        ),
        array(
            'title'    => 'About',
            'template' => 'page-about.php',
            'content'  => '',
        ),
        array(
            'title'    => 'Contact',
            'template' => 'page-contact.php',
            'content'  => '',
        ),
        array(
            'title'    => 'Privacy Policy',
            'template' => 'page-privacy-policy.php',
            'content'  => '',
        ),
        array(
            'title'    => 'Terms & Conditions',
            'template' => 'page-terms-conditions.php',
            'content'  => '',
        ),
        array(
            'title'    => 'Accessibility',
            'template' => 'page-accessibility.php',
            'content'  => '',
        ),
    );
    
    $page_ids = array();
    
    foreach ($pages as $page) {
        // Check if page already exists
        $existing_query = new WP_Query(array(
            'post_type'      => 'page',
            'title'          => $page['title'],
            'posts_per_page' => 1,
        ));
        $existing = $existing_query->have_posts() ? $existing_query->posts[0] : null;
        
        if (!$existing) {
            $page_data = array(
                'post_title'   => $page['title'],
                'post_content' => $page['content'],
                'post_status'  => 'publish',
                'post_type'    => 'page',
                'post_author'  => 1,
            );
            
            $page_id = wp_insert_post($page_data);
            
            if ($page_id && !is_wp_error($page_id)) {
                if (!empty($page['template'])) {
                    update_post_meta($page_id, '_wp_page_template', $page['template']);
                }
                $page_ids[$page['title']] = $page_id;
            }
        } else {
            $page_ids[$page['title']] = $existing->ID;
            // Update template if needed
            if (!empty($page['template'])) {
                update_post_meta($existing->ID, '_wp_page_template', $page['template']);
            }
        }
    }
    
    // Set Home as front page
    if (isset($page_ids['Home'])) {
        update_option('page_on_front', $page_ids['Home']);
        update_option('show_on_front', 'page');
    }
    
    // Create Primary Menu
    $menu_name = 'Primary Menu';
    $menu_exists = wp_get_nav_menu_object($menu_name);
    
    if (!$menu_exists) {
        $menu_id = wp_create_nav_menu($menu_name);
        
        // Add menu items
        $menu_items = array(
            'Home'      => '',
            'About'     => '',
            'Rooms'     => '',
            'Dining'    => '',
            'Weddings'  => '',
            'Functions' => '',
            'Contact'   => '',
        );
        
        $order = 1;
        foreach ($menu_items as $title => $parent) {
            if (isset($page_ids[$title])) {
                wp_update_nav_menu_item($menu_id, 0, array(
                    'menu-item-title'     => $title,
                    'menu-item-object'    => 'page',
                    'menu-item-object-id' => $page_ids[$title],
                    'menu-item-type'      => 'post_type',
                    'menu-item-status'    => 'publish',
                    'menu-item-position'  => $order,
                ));
            }
            $order++;
        }
        
        // Assign menu to primary location
        $locations = get_theme_mod('nav_menu_locations');
        $locations['primary'] = $menu_id;
        set_theme_mod('nav_menu_locations', $locations);
    }
    
    // Create Default Rooms
    ashton_create_default_rooms();
    
    // Create Default Testimonials
    ashton_create_default_testimonials();
    
    // Set default theme mods
    set_theme_mod('ashton_phone', '+44 (0)1395 263002');
    set_theme_mod('ashton_email', 'reception@ashtoncourthotel.co.uk');
    set_theme_mod('ashton_street', '5-6 Louisa Terrace');
    set_theme_mod('ashton_city', 'Exmouth');
    set_theme_mod('ashton_postcode', 'EX8 2AQ');
    set_theme_mod('ashton_hero_title', 'Where the Exe Estuary Meets Timeless Elegance');
    set_theme_mod('ashton_hero_subtitle', 'A sanctuary of refined hospitality on the Devon coast');
    set_theme_mod('ashton_starting_price', '70');
    set_theme_mod('ashton_total_rooms', '45');
    
    // Flush rewrite rules
    flush_rewrite_rules();
}
add_action('after_switch_theme', 'ashton_theme_activation');

/**
 * Create Default Rooms
 */
function ashton_create_default_rooms() {
    $rooms = array(
        array(
            'title'       => 'Standard Double Room',
            'description' => 'A comfortable and well-appointed room perfect for a relaxing stay. Features a double bed, ensuite bathroom, and modern amenities.',
            'price'       => 70,
            'size'        => 18,
            'bed_type'    => 'double',
            'max_guests'  => 2,
            'view'        => 'town',
            'balcony'     => false,
        ),
        array(
            'title'       => 'Superior Sea View',
            'description' => 'Wake up to stunning views of the Exe estuary. This spacious room features a king-size bed and panoramic windows overlooking the coastline.',
            'price'       => 95,
            'size'        => 22,
            'bed_type'    => 'king',
            'max_guests'  => 2,
            'view'        => 'sea',
            'balcony'     => false,
        ),
        array(
            'title'       => 'Deluxe Estuary Suite',
            'description' => 'Our premium suite offers the ultimate in comfort and views. Featuring a super king bed, separate seating area, and breathtaking estuary panoramas.',
            'price'       => 120,
            'size'        => 28,
            'bed_type'    => 'super-king',
            'max_guests'  => 2,
            'view'        => 'estuary',
            'balcony'     => true,
        ),
        array(
            'title'       => 'Family Room',
            'description' => 'Ideal for families, this spacious room features a double bed and twin beds, with plenty of room for everyone to relax.',
            'price'       => 110,
            'size'        => 32,
            'bed_type'    => 'double',
            'max_guests'  => 4,
            'view'        => 'sea',
            'balcony'     => false,
        ),
        array(
            'title'       => 'Garden View Twin',
            'description' => 'A peaceful retreat overlooking our beautiful gardens. Features two single beds and a tranquil atmosphere.',
            'price'       => 80,
            'size'        => 20,
            'bed_type'    => 'twin',
            'max_guests'  => 2,
            'view'        => 'garden',
            'balcony'     => false,
        ),
        array(
            'title'       => 'Premium Coastal Suite',
            'description' => 'The pinnacle of luxury at Ashton Court. A magnificent suite with private balcony, super king bed, and uninterrupted views stretching to Torbay.',
            'price'       => 150,
            'size'        => 35,
            'bed_type'    => 'super-king',
            'max_guests'  => 2,
            'view'        => 'sea',
            'balcony'     => true,
        ),
    );
    
    foreach ($rooms as $room) {
        // Check if room already exists
        $existing_query = new WP_Query(array(
            'post_type'      => 'room',
            'title'          => $room['title'],
            'posts_per_page' => 1,
        ));
        $existing = $existing_query->have_posts() ? $existing_query->posts[0] : null;
        
        if (!$existing) {
            $room_id = wp_insert_post(array(
                'post_title'   => $room['title'],
                'post_content' => $room['description'],
                'post_excerpt' => wp_trim_words($room['description'], 20),
                'post_status'  => 'publish',
                'post_type'    => 'room',
                'post_author'  => 1,
            ));
            
            if ($room_id && !is_wp_error($room_id)) {
                update_post_meta($room_id, '_room_price', $room['price']);
                update_post_meta($room_id, '_room_size', $room['size']);
                update_post_meta($room_id, '_room_bed_type', $room['bed_type']);
                update_post_meta($room_id, '_room_max_guests', $room['max_guests']);
                update_post_meta($room_id, '_room_view', $room['view']);
                update_post_meta($room_id, '_room_has_balcony', $room['balcony'] ? '1' : '0');
            }
        }
    }
}

/**
 * Create Default Testimonials
 */
function ashton_create_default_testimonials() {
    $testimonials = array(
        array(
            'name'     => 'Subhrojit Shome',
            'content'  => 'A beautiful, cozy and view worthy place to stay in Exmouth, Devon. The family room we stayed in had an amazing view of Exmouth beach. Located at a walkable distance from the beach and town hall, this place has all the things checked if you\'re travelling with family.',
            'location' => 'London, UK',
            'rating'   => 5,
        ),
        array(
            'name'     => 'Denis Parker',
            'content'  => 'We booked last minute. The room was a good price but was small but suited us since it had everything we needed for one night\'s stay and was very clean. The breakfast was included and was very good with choice of cereals and full English.',
            'location' => 'Bristol, UK',
            'rating'   => 5,
        ),
        array(
            'name'     => 'John Smith',
            'content'  => 'My wife & I have just returned from a four night stay at the Ashton Court Hotel & was very pleasantly surprised how good this hotel was. A lovely clean hotel which has had quite a lot of refurbishment work carried out recently.',
            'location' => 'Manchester, UK',
            'rating'   => 5,
        ),
    );
    
    foreach ($testimonials as $testimonial) {
        // Check if testimonial already exists
        $existing_query = new WP_Query(array(
            'post_type'      => 'testimonial',
            'title'          => $testimonial['name'],
            'posts_per_page' => 1,
        ));
        $existing = $existing_query->have_posts() ? $existing_query->posts[0] : null;
        
        if (!$existing) {
            $testimonial_id = wp_insert_post(array(
                'post_title'   => $testimonial['name'],
                'post_content' => $testimonial['content'],
                'post_status'  => 'publish',
                'post_type'    => 'testimonial',
                'post_author'  => 1,
            ));
            
            if ($testimonial_id && !is_wp_error($testimonial_id)) {
                update_post_meta($testimonial_id, '_guest_location', $testimonial['location']);
                update_post_meta($testimonial_id, '_rating', $testimonial['rating']);
            }
        }
    }
}

/**
 * Auto-create legal pages (Privacy Policy, Terms & Conditions, Accessibility)
 * Ensures pages exist, are published, and have the correct template assigned.
 */
function ashton_create_legal_pages() {
    // Only run once - check option flag to avoid DB queries on every request
    $legal_pages_version = '1.1';
    if (get_option('ashton_legal_pages_version') === $legal_pages_version) {
        return;
    }

    $legal_pages = array(
        array(
            'title'    => 'Privacy Policy',
            'slug'     => 'privacy-policy',
            'template' => 'page-privacy-policy.php',
        ),
        array(
            'title'    => 'Terms & Conditions',
            'slug'     => 'terms-conditions',
            'template' => 'page-terms-conditions.php',
        ),
        array(
            'title'    => 'Accessibility',
            'slug'     => 'accessibility',
            'template' => 'page-accessibility.php',
        ),
    );

    $needs_flush = false;

    foreach ($legal_pages as $page_data) {
        $existing = get_page_by_path($page_data['slug']);

        if (!$existing) {
            $page_id = wp_insert_post(array(
                'post_title'   => $page_data['title'],
                'post_name'    => $page_data['slug'],
                'post_status'  => 'publish',
                'post_type'    => 'page',
                'post_author'  => 1,
                'post_content' => '',
            ));
            if ($page_id && !is_wp_error($page_id)) {
                update_post_meta($page_id, '_wp_page_template', $page_data['template']);
                $needs_flush = true;
            }
        } else {
            // Ensure page is published (WordPress default Privacy Policy is created as draft)
            if ($existing->post_status !== 'publish') {
                wp_update_post(array(
                    'ID'          => $existing->ID,
                    'post_status' => 'publish',
                    'post_name'   => $page_data['slug'],
                ));
                $needs_flush = true;
            }
            // Ensure correct template is set even if page already exists
            update_post_meta($existing->ID, '_wp_page_template', $page_data['template']);
        }
    }

    if ($needs_flush) {
        flush_rewrite_rules();
    }

    update_option('ashton_legal_pages_version', $legal_pages_version);
}
add_action('init', 'ashton_create_legal_pages');

/* ============================================
   SEO: Open Graph & Twitter Card Meta Tags
   ============================================ */
function ashton_seo_meta_tags() {
    $site_name = get_bloginfo('name');
    $site_url = home_url('/');
    $default_image = esc_url(ASHTON_THEME_URI) . '/assets/images/hero-bg.jpg';
    $locale = get_locale();

    // 404 pages should not be indexed
    if (is_404()) {
        echo '<meta name="robots" content="noindex, nofollow">' . "\n";
        return;
    }

    if (is_front_page()) {
        $title = $site_name . ' | Seafront Hotel in Exmouth, Devon';
        $description = 'A charming seaside hotel with stunning views of the Exe Estuary. Enjoy comfortable rooms, delicious dining, and warm Devon hospitality at Ashton Court Hotel, Exmouth.';
        $url = $site_url;
        $type = 'website';
    } elseif (is_singular('room')) {
        $title = get_the_title() . ' | ' . $site_name;
        $description = wp_trim_words(get_the_excerpt(), 30, '...');
        $url = get_permalink();
        $type = 'product';
        if (has_post_thumbnail()) {
            $default_image = get_the_post_thumbnail_url(get_the_ID(), 'hero-large');
        }
    } elseif (is_page()) {
        $page_descriptions = array(
            'about'            => 'Discover the story of Ashton Court Hotel, a historic seafront hotel established in 1890 on the beautiful Devon coast in Exmouth.',
            'rooms'            => 'Browse our comfortable sea-facing and rear-facing rooms at Ashton Court Hotel, Exmouth. All rooms include breakfast and free parking.',
            'weddings'         => 'Plan your dream wedding at Ashton Court Hotel, Exmouth. Stunning estuary views, bespoke menus, and dedicated wedding coordination.',
            'functions'        => 'Host your private event at Ashton Court Hotel. Perfect for celebrations, corporate functions, and special occasions in Exmouth, Devon.',
            'menus'            => 'Explore our dining menus at Ashton Court Hotel. From full English breakfast to bespoke function menus and drinks packages.',
            'contact'          => 'Get in touch with Ashton Court Hotel, Exmouth. Book your stay, plan an event, or enquire about our rooms and services.',
            'privacy-policy'   => 'Read the privacy policy of Ashton Court Hotel, Exmouth. Learn how we protect your personal data.',
            'terms-conditions' => 'Terms and conditions for booking and staying at Ashton Court Hotel, Exmouth, Devon.',
            'accessibility'    => 'Accessibility information for Ashton Court Hotel, Exmouth. We strive to welcome all guests.',
        );
        $slug = get_post_field('post_name', get_the_ID());
        $title = get_the_title() . ' | ' . $site_name;
        $description = isset($page_descriptions[$slug]) ? $page_descriptions[$slug] : get_bloginfo('description');
        $url = get_permalink();
        $type = 'website';
    } elseif (is_post_type_archive('room')) {
        $title = 'Our Rooms | ' . $site_name;
        $description = 'Browse all rooms at Ashton Court Hotel, Exmouth. Sea-facing, rear-facing, single, double, twin, and family rooms available.';
        $url = get_post_type_archive_link('room');
        $type = 'website';
    } elseif (is_home()) {
        $title = 'Blog | ' . $site_name;
        $description = 'Latest news, events, and updates from Ashton Court Hotel, Exmouth. Discover Devon travel tips, seasonal offers, and hotel highlights.';
        $blog_page_id = get_option('page_for_posts');
        $url = $blog_page_id ? get_permalink($blog_page_id) : home_url('/blog/');
        $type = 'website';
    } else {
        $title = wp_get_document_title();
        $description = get_bloginfo('description') ?: 'Ashton Court Hotel, a charming seafront hotel in Exmouth, Devon.';
        $url = home_url(esc_url(wp_unslash($_SERVER['REQUEST_URI'])));
        $type = 'website';
    }

    $description = wp_strip_all_tags($description);
    ?>
    <!-- SEO Meta Tags -->
    <meta name="description" content="<?php echo esc_attr($description); ?>">
    <link rel="canonical" href="<?php echo esc_url($url); ?>">

    <!-- Open Graph -->
    <meta property="og:locale" content="<?php echo esc_attr($locale); ?>">
    <meta property="og:type" content="<?php echo esc_attr($type); ?>">
    <meta property="og:title" content="<?php echo esc_attr($title); ?>">
    <meta property="og:description" content="<?php echo esc_attr($description); ?>">
    <meta property="og:url" content="<?php echo esc_url($url); ?>">
    <meta property="og:site_name" content="<?php echo esc_attr($site_name); ?>">
    <meta property="og:image" content="<?php echo esc_url($default_image); ?>">
    <meta property="og:image:width" content="1920">
    <meta property="og:image:height" content="1080">
    <meta property="og:image:type" content="image/jpeg">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo esc_attr($title); ?>">
    <meta name="twitter:description" content="<?php echo esc_attr($description); ?>">
    <meta name="twitter:image" content="<?php echo esc_url($default_image); ?>">

    <!-- Additional SEO -->
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="geo.region" content="GB-DEV">
    <meta name="geo.placename" content="Exmouth">
    <meta name="geo.position" content="50.6189;-3.4138">
    <meta name="ICBM" content="50.6189, -3.4138">
    <?php
}
add_action('wp_head', 'ashton_seo_meta_tags', 2);


/* ============================================
   SEO: JSON-LD Schema Structured Data
   ============================================ */
function ashton_schema_markup() {
    if (is_404()) return;

    $site_name = get_bloginfo('name');
    $site_url = home_url('/');
    $logo_url = esc_url(ASHTON_THEME_URI) . '/assets/images/logo.png';
    $hero_image = esc_url(ASHTON_THEME_URI) . '/assets/images/hero-bg.jpg';
    $phone = ashton_get_phone();
    $email = ashton_get_email();

    $schemas = array();

    // Organization Schema (all pages)
    $schemas[] = array(
        '@context' => 'https://schema.org',
        '@type'  => 'Organization',
        '@id'    => $site_url . '#organization',
        'name'   => $site_name,
        'url'    => $site_url,
        'logo'   => array(
            '@type'  => 'ImageObject',
            'url'    => $logo_url,
            'width'  => 250,
            'height' => 80,
        ),
        'contactPoint' => array(
            '@type'             => 'ContactPoint',
            'telephone'         => $phone,
            'contactType'       => 'reservations',
            'availableLanguage' => 'English',
        ),
        'sameAs' => array_values(array_filter(ashton_get_social_links())),
    );

    // Hotel Schema (homepage)
    if (is_front_page()) {
        $schemas[] = array(
            '@context'    => 'https://schema.org',
            '@type'       => 'Hotel',
            '@id'         => $site_url . '#hotel',
            'name'        => $site_name,
            'description' => 'A charming seaside hotel with stunning views of the Exe Estuary. Comfortable rooms, delicious dining, and warm Devon hospitality.',
            'url'         => $site_url,
            'telephone'   => $phone,
            'email'       => $email,
            'image'       => array($hero_image),
            'logo'        => $logo_url,
            'priceRange'  => '££',
            'currenciesAccepted' => 'GBP',
            'paymentAccepted'    => 'Cash, Credit Card, Debit Card',
            'address'     => array(
                '@type'           => 'PostalAddress',
                'streetAddress'   => '5-6 Louisa Terrace',
                'addressLocality' => 'Exmouth',
                'addressRegion'   => 'Devon',
                'postalCode'      => 'EX8 2AQ',
                'addressCountry'  => 'GB',
            ),
            'geo' => array(
                '@type'     => 'GeoCoordinates',
                'latitude'  => 50.6189,
                'longitude' => -3.4138,
            ),
            'hasMap'       => 'https://maps.google.com/?q=Ashton+Court+Hotel+Exmouth',
            'starRating'   => array(
                '@type'       => 'Rating',
                'ratingValue' => '4',
            ),
            'amenityFeature' => array(
                array('@type' => 'LocationFeatureSpecification', 'name' => 'Free Parking', 'value' => true),
                array('@type' => 'LocationFeatureSpecification', 'name' => 'Free WiFi', 'value' => true),
                array('@type' => 'LocationFeatureSpecification', 'name' => 'Breakfast Included', 'value' => true),
                array('@type' => 'LocationFeatureSpecification', 'name' => 'Restaurant', 'value' => true),
                array('@type' => 'LocationFeatureSpecification', 'name' => 'Bar', 'value' => true),
                array('@type' => 'LocationFeatureSpecification', 'name' => 'Lift Access', 'value' => true),
                array('@type' => 'LocationFeatureSpecification', 'name' => 'Dog Friendly', 'value' => true),
            ),
            'checkinTime'  => '15:00',
            'checkoutTime' => '10:30',
            'numberOfRooms' => 13,
            'petsAllowed'  => true,
        );

        // Special Offer Schema (if offer bar is enabled)
        $offer_enabled = get_theme_mod('ashton_offer_enabled', true);
        $offer_text    = get_theme_mod('ashton_offer_text', '25% off stay & drinks when you book direct with us');
        $offer_period  = get_theme_mod('ashton_offer_period', 'February & March only — excluding holidays');

        if ($offer_enabled && $offer_text) {
            $current_year = date('Y');
            $schemas[] = array(
                '@context'       => 'https://schema.org',
                '@type'          => 'Offer',
                'name'           => $offer_text,
                'description'    => $offer_text . '. ' . $offer_period . '.',
                'url'            => $site_url,
                'priceCurrency'  => 'GBP',
                'availability'   => 'https://schema.org/InStock',
                'validFrom'      => $current_year . '-02-01',
                'validThrough'   => $current_year . '-03-31',
                'eligibleRegion' => array(
                    '@type' => 'Place',
                    'name'  => 'United Kingdom',
                ),
                'offeredBy' => array(
                    '@type' => 'Hotel',
                    '@id'   => $site_url . '#hotel',
                ),
            );
        }
    }

    // Single Room Schema
    if (is_singular('room')) {
        $room_id = get_the_ID();
        $price = get_post_meta($room_id, '_room_price', true);
        $bed_type = get_post_meta($room_id, '_room_bed_type', true);
        $view = get_post_meta($room_id, '_room_view', true);
        $max_guests = get_post_meta($room_id, '_room_max_guests', true);
        $room_image = has_post_thumbnail() ? get_the_post_thumbnail_url($room_id, 'hero-large') : $hero_image;

        $schemas[] = array(
            '@context'    => 'https://schema.org',
            '@type'       => 'HotelRoom',
            'name'        => get_the_title(),
            'description' => wp_strip_all_tags(get_the_excerpt()),
            'url'         => get_permalink(),
            'image'       => $room_image,
            'bed'         => array(
                '@type'       => 'BedDetails',
                'typeOfBed'   => ucfirst(str_replace('-', ' ', $bed_type)),
                'numberOfBeds' => 1,
            ),
            'occupancy' => array(
                '@type'    => 'QuantitativeValue',
                'maxValue' => intval($max_guests),
            ),
            'offers' => array(
                '@type'         => 'Offer',
                'price'         => $price,
                'priceCurrency' => 'GBP',
                'availability'  => 'https://schema.org/InStock',
                'validFrom'     => date('Y-m-d'),
                'priceValidUntil' => date('Y-12-31'),
                'url'           => get_permalink(),
            ),
            'containedInPlace' => array(
                '@type' => 'Hotel',
                'name'  => $site_name,
                'url'   => $site_url,
            ),
        );
    }

    // Contact Page Schema
    if (is_page('contact')) {
        $schemas[] = array(
            '@context'    => 'https://schema.org',
            '@type'       => 'LocalBusiness',
            '@id'         => $site_url . '#localbusiness',
            'name'        => $site_name,
            'image'       => $hero_image,
            'telephone'   => $phone,
            'email'       => $email,
            'url'         => $site_url,
            'priceRange'  => '££',
            'address'     => array(
                '@type'           => 'PostalAddress',
                'streetAddress'   => '5-6 Louisa Terrace',
                'addressLocality' => 'Exmouth',
                'addressRegion'   => 'Devon',
                'postalCode'      => 'EX8 2AQ',
                'addressCountry'  => 'GB',
            ),
            'geo' => array(
                '@type'     => 'GeoCoordinates',
                'latitude'  => 50.6189,
                'longitude' => -3.4138,
            ),
            'openingHoursSpecification' => array(
                '@type'     => 'OpeningHoursSpecification',
                'dayOfWeek' => array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'),
                'opens'     => '00:00',
                'closes'    => '23:59',
            ),
        );
    }

    // Weddings Page Schema
    if (is_page('weddings')) {
        $schemas[] = array(
            '@context'    => 'https://schema.org',
            '@type'       => 'EventVenue',
            'name'        => $site_name . ' - Wedding Venue',
            'description' => 'Beautiful wedding venue overlooking the Exe Estuary in Exmouth, Devon. Bespoke menus, stunning views, and dedicated coordination.',
            'url'         => get_permalink(),
            'image'       => esc_url(ASHTON_THEME_URI) . '/assets/images/wedding.jpg',
            'address'     => array(
                '@type'           => 'PostalAddress',
                'streetAddress'   => '5-6 Louisa Terrace',
                'addressLocality' => 'Exmouth',
                'addressRegion'   => 'Devon',
                'postalCode'      => 'EX8 2AQ',
                'addressCountry'  => 'GB',
            ),
            'maximumAttendeeCapacity' => 120,
        );
    }

    // Functions Page Schema
    if (is_page('functions')) {
        $schemas[] = array(
            '@context'    => 'https://schema.org',
            '@type'       => 'EventVenue',
            'name'        => $site_name . ' - Event Venue',
            'description' => 'Private event venue in Exmouth, Devon. Perfect for celebrations, corporate events, parties, and special occasions with stunning estuary views.',
            'url'         => get_permalink(),
            'image'       => $hero_image,
            'address'     => array(
                '@type'           => 'PostalAddress',
                'streetAddress'   => '5-6 Louisa Terrace',
                'addressLocality' => 'Exmouth',
                'addressRegion'   => 'Devon',
                'postalCode'      => 'EX8 2AQ',
                'addressCountry'  => 'GB',
            ),
            'maximumAttendeeCapacity' => 120,
        );
    }

    // BreadcrumbList Schema (all pages except homepage)
    if (!is_front_page()) {
        $breadcrumb_items = array();
        $breadcrumb_items[] = array(
            '@type'    => 'ListItem',
            'position' => 1,
            'name'     => 'Home',
            'item'     => $site_url,
        );

        if (is_singular('room')) {
            $breadcrumb_items[] = array(
                '@type'    => 'ListItem',
                'position' => 2,
                'name'     => 'Rooms',
                'item'     => get_post_type_archive_link('room'),
            );
            $breadcrumb_items[] = array(
                '@type'    => 'ListItem',
                'position' => 3,
                'name'     => get_the_title(),
                'item'     => get_permalink(),
            );
        } elseif (is_post_type_archive('room')) {
            $breadcrumb_items[] = array(
                '@type'    => 'ListItem',
                'position' => 2,
                'name'     => 'Rooms',
                'item'     => get_post_type_archive_link('room'),
            );
        } elseif (is_page()) {
            $breadcrumb_items[] = array(
                '@type'    => 'ListItem',
                'position' => 2,
                'name'     => get_the_title(),
                'item'     => get_permalink(),
            );
        }

        $schemas[] = array(
            '@context'        => 'https://schema.org',
            '@type'           => 'BreadcrumbList',
            'itemListElement' => $breadcrumb_items,
        );
    }

    // WebSite Schema (all pages)
    $schemas[] = array(
        '@context' => 'https://schema.org',
        '@type'    => 'WebSite',
        '@id'      => $site_url . '#website',
        'name'     => $site_name,
        'url'      => $site_url,
        'publisher' => array(
            '@id' => $site_url . '#organization',
        ),
        'potentialAction' => array(
            '@type'       => 'SearchAction',
            'target'      => array(
                '@type'        => 'EntryPoint',
                'urlTemplate'  => $site_url . '?s={search_term_string}',
            ),
            'query-input' => 'required name=search_term_string',
        ),
    );

    foreach ($schemas as $schema) {
        echo '<script type="application/ld+json">' . wp_json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) . '</script>' . "\n";
    }
}
add_action('wp_head', 'ashton_schema_markup', 3);

/* ============================================
   SEO: Breadcrumb Navigation
   ============================================ */
function ashton_breadcrumbs() {
    if (is_front_page()) return;

    $home_url = home_url('/');
    $separator = '<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>';

    echo '<nav class="breadcrumbs" aria-label="Breadcrumb">';
    echo '<ol class="breadcrumb-list" itemscope itemtype="https://schema.org/BreadcrumbList">';

    echo '<li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
    echo '<a href="' . esc_url($home_url) . '" itemprop="item"><span itemprop="name">Home</span></a>';
    echo '<meta itemprop="position" content="1">';
    echo '</li>';

    $position = 2;

    if (is_singular('room')) {
        echo '<li class="breadcrumb-separator">' . $separator . '</li>';
        echo '<li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
        echo '<a href="' . esc_url(get_post_type_archive_link('room')) . '" itemprop="item"><span itemprop="name">Rooms</span></a>';
        echo '<meta itemprop="position" content="' . $position . '">';
        echo '</li>';
        $position++;

        echo '<li class="breadcrumb-separator">' . $separator . '</li>';
        echo '<li class="breadcrumb-item current" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
        echo '<span itemprop="name">' . esc_html(get_the_title()) . '</span>';
        echo '<meta itemprop="item" content="' . esc_url(get_permalink()) . '">';
        echo '<meta itemprop="position" content="' . $position . '">';
        echo '</li>';
    } elseif (is_post_type_archive('room')) {
        echo '<li class="breadcrumb-separator">' . $separator . '</li>';
        echo '<li class="breadcrumb-item current" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
        echo '<span itemprop="name">Rooms</span>';
        echo '<meta itemprop="item" content="' . esc_url(get_post_type_archive_link('room')) . '">';
        echo '<meta itemprop="position" content="' . $position . '">';
        echo '</li>';
    } elseif (is_page()) {
        echo '<li class="breadcrumb-separator">' . $separator . '</li>';
        echo '<li class="breadcrumb-item current" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
        echo '<span itemprop="name">' . esc_html(get_the_title()) . '</span>';
        echo '<meta itemprop="item" content="' . esc_url(get_permalink()) . '">';
        echo '<meta itemprop="position" content="' . $position . '">';
        echo '</li>';
    } elseif (is_404()) {
        echo '<li class="breadcrumb-separator">' . $separator . '</li>';
        echo '<li class="breadcrumb-item current"><span>Page Not Found</span></li>';
    }

    echo '</ol>';
    echo '</nav>';
}

/* ============================================
   SEO: Add loading="lazy" to content images
   ============================================ */
function ashton_lazy_load_images($content) {
    if (is_admin()) return $content;
    $content = preg_replace('/<img(?!.*loading=)([^>]*)>/i', '<img loading="lazy"$1>', $content);
    return $content;
}
add_filter('the_content', 'ashton_lazy_load_images');
add_filter('post_thumbnail_html', 'ashton_lazy_load_images');

/* ============================================
   SEO: Improve WordPress title tag
   ============================================ */
function ashton_document_title_parts($title) {
    if (is_front_page()) {
        $title['title'] = get_bloginfo('name') . ' | Seafront Hotel in Exmouth, Devon';
        unset($title['tagline']);
    }
    return $title;
}
add_filter('document_title_parts', 'ashton_document_title_parts');

function ashton_document_title_separator($sep) {
    return '|';
}
add_filter('document_title_separator', 'ashton_document_title_separator');

/* ============================================
   SEO: Ping search engines on post publish
   ============================================ */
function ashton_ping_search_engines() {
    $sitemap_url = home_url('/wp-sitemap.xml');
    wp_remote_get('https://www.google.com/ping?sitemap=' . urlencode($sitemap_url), array('blocking' => false));
    wp_remote_get('https://www.bing.com/ping?sitemap=' . urlencode($sitemap_url), array('blocking' => false));
}
add_action('publish_post', 'ashton_ping_search_engines');
add_action('publish_page', 'ashton_ping_search_engines');
add_action('publish_room', 'ashton_ping_search_engines');

/* ============================================
   SEO: Enhanced robots.txt
   ============================================ */
function ashton_custom_robots_txt($output, $public) {
    $site_url = home_url('/');
    $output  = "User-agent: *\n";
    $output .= "Allow: /\n";
    $output .= "Disallow: /wp-admin/\n";
    $output .= "Allow: /wp-admin/admin-ajax.php\n";
    $output .= "Disallow: /wp-includes/\n";
    $output .= "Disallow: /wp-content/plugins/\n";
    $output .= "Disallow: /wp-content/cache/\n";
    $output .= "Disallow: /wp-content/uploads/wpcf7_uploads/\n";
    $output .= "Disallow: /wp-json/\n";
    $output .= "Disallow: /?s=\n";
    $output .= "Disallow: /search/\n\n";
    $output .= "# Sitemap\n";
    $output .= "Sitemap: " . $site_url . "wp-sitemap.xml\n";
    return $output;
}
add_filter('robots_txt', 'ashton_custom_robots_txt', 10, 2);

/* ============================================
   SEO: Add hreflang tag
   ============================================ */
function ashton_hreflang_tag() {
    if (is_404()) return;

    if (is_front_page()) {
        $url = home_url('/');
    } elseif (is_post_type_archive('room')) {
        $url = get_post_type_archive_link('room');
    } elseif (is_home()) {
        $blog_page_id = get_option('page_for_posts');
        $url = $blog_page_id ? get_permalink($blog_page_id) : home_url('/blog/');
    } else {
        $url = get_permalink();
    }

    echo '<link rel="alternate" hreflang="en-GB" href="' . esc_url($url) . '">' . "\n";
    echo '<link rel="alternate" hreflang="x-default" href="' . esc_url($url) . '">' . "\n";
}
add_action('wp_head', 'ashton_hreflang_tag', 4);

/* ============================================
   SEO: Clean up WordPress head
   ============================================ */
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);

/* ============================================
   SEO: Add theme color for mobile browsers
   ============================================ */
function ashton_theme_color_meta() {
    echo '<meta name="theme-color" content="#FDFCFA">' . "\n";
    echo '<meta name="apple-mobile-web-app-status-bar-style" content="default">' . "\n";
}
add_action('wp_head', 'ashton_theme_color_meta', 1);