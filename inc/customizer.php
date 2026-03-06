<?php
/**
 * Theme Customizer Settings
 *
 * @package Ashton_Court
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Register Customizer Settings
 */
function ashton_customize_register($wp_customize) {
    
    // ========================================
    // Hotel Information Panel
    // ========================================
    $wp_customize->add_panel('ashton_hotel_info', array(
        'title'    => __('Hotel Information', 'ashton-court'),
        'priority' => 30,
    ));
    
    // Contact Information Section
    $wp_customize->add_section('ashton_contact_info', array(
        'title'    => __('Contact Information', 'ashton-court'),
        'panel'    => 'ashton_hotel_info',
        'priority' => 10,
    ));
    
    // Phone Number
    $wp_customize->add_setting('ashton_phone', array(
        'default'           => '+44 (0)1395 263002',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('ashton_phone', array(
        'label'   => __('Phone Number', 'ashton-court'),
        'section' => 'ashton_contact_info',
        'type'    => 'text',
    ));
    
    // Email Address
    $wp_customize->add_setting('ashton_email', array(
        'default'           => 'reception@ashtoncourthotel.co.uk',
        'sanitize_callback' => 'sanitize_email',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('ashton_email', array(
        'label'   => __('Email Address', 'ashton-court'),
        'section' => 'ashton_contact_info',
        'type'    => 'email',
    ));
    
    // Address Section
    $wp_customize->add_section('ashton_address', array(
        'title'    => __('Address', 'ashton-court'),
        'panel'    => 'ashton_hotel_info',
        'priority' => 20,
    ));
    
    // Street Address
    $wp_customize->add_setting('ashton_street', array(
        'default'           => '5-6 Louisa Terrace',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('ashton_street', array(
        'label'   => __('Street Address', 'ashton-court'),
        'section' => 'ashton_address',
        'type'    => 'text',
    ));
    
    // City
    $wp_customize->add_setting('ashton_city', array(
        'default'           => 'Exmouth',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('ashton_city', array(
        'label'   => __('City', 'ashton-court'),
        'section' => 'ashton_address',
        'type'    => 'text',
    ));
    
    // Postcode
    $wp_customize->add_setting('ashton_postcode', array(
        'default'           => 'EX8 2AQ',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('ashton_postcode', array(
        'label'   => __('Postcode', 'ashton-court'),
        'section' => 'ashton_address',
        'type'    => 'text',
    ));
    
    // ========================================
    // Social Media Section
    // ========================================
    $wp_customize->add_section('ashton_social', array(
        'title'    => __('Social Media', 'ashton-court'),
        'panel'    => 'ashton_hotel_info',
        'priority' => 30,
    ));
    
    // Facebook
    $wp_customize->add_setting('ashton_facebook', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('ashton_facebook', array(
        'label'   => __('Facebook URL', 'ashton-court'),
        'section' => 'ashton_social',
        'type'    => 'url',
    ));
    
    // Instagram
    $wp_customize->add_setting('ashton_instagram', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('ashton_instagram', array(
        'label'   => __('Instagram URL', 'ashton-court'),
        'section' => 'ashton_social',
        'type'    => 'url',
    ));
    
    // Twitter/X
    $wp_customize->add_setting('ashton_twitter', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('ashton_twitter', array(
        'label'   => __('Twitter/X URL', 'ashton-court'),
        'section' => 'ashton_social',
        'type'    => 'url',
    ));
    
    // TripAdvisor
    $wp_customize->add_setting('ashton_tripadvisor', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('ashton_tripadvisor', array(
        'label'   => __('TripAdvisor URL', 'ashton-court'),
        'section' => 'ashton_social',
        'type'    => 'url',
    ));
    
    // ========================================
    // Homepage Settings Panel
    // ========================================
    $wp_customize->add_panel('ashton_homepage', array(
        'title'    => __('Homepage Settings', 'ashton-court'),
        'priority' => 40,
    ));
    
    // Hero Section
    $wp_customize->add_section('ashton_hero', array(
        'title'    => __('Hero Section', 'ashton-court'),
        'panel'    => 'ashton_homepage',
        'priority' => 10,
    ));
    
    // Hero Title
    $wp_customize->add_setting('ashton_hero_title', array(
        'default'           => 'Where the Exe Estuary Meets Timeless Elegance',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('ashton_hero_title', array(
        'label'   => __('Hero Title', 'ashton-court'),
        'section' => 'ashton_hero',
        'type'    => 'text',
    ));
    
    // Hero Subtitle
    $wp_customize->add_setting('ashton_hero_subtitle', array(
        'default'           => 'A sanctuary of refined hospitality on the Devon coast',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('ashton_hero_subtitle', array(
        'label'   => __('Hero Subtitle', 'ashton-court'),
        'section' => 'ashton_hero',
        'type'    => 'text',
    ));
    
    // Hero Background Image
    $wp_customize->add_setting('ashton_hero_image', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'ashton_hero_image', array(
        'label'   => __('Hero Background Image', 'ashton-court'),
        'section' => 'ashton_hero',
    )));
    
    // Hero Video (Optional)
    $wp_customize->add_setting('ashton_hero_video', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('ashton_hero_video', array(
        'label'       => __('Hero Background Video URL', 'ashton-court'),
        'description' => __('Optional. MP4 video URL. Will override the image if set.', 'ashton-court'),
        'section'     => 'ashton_hero',
        'type'        => 'url',
    ));
    
    // About Section
    $wp_customize->add_section('ashton_about_section', array(
        'title'    => __('About Section', 'ashton-court'),
        'panel'    => 'ashton_homepage',
        'priority' => 20,
    ));
    
    // About Tagline
    $wp_customize->add_setting('ashton_about_tagline', array(
        'default'           => 'The Essence',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('ashton_about_tagline', array(
        'label'   => __('About Section Tagline', 'ashton-court'),
        'section' => 'ashton_about_section',
        'type'    => 'text',
    ));
    
    // About Title
    $wp_customize->add_setting('ashton_about_title', array(
        'default'           => 'A Historic Haven on Louisa Terrace',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('ashton_about_title', array(
        'label'   => __('About Section Title', 'ashton-court'),
        'section' => 'ashton_about_section',
        'type'    => 'text',
    ));
    
    // About Description
    $wp_customize->add_setting('ashton_about_description', array(
        'default'           => 'The Ashton Court is situated on Louisa Terrace, part of the town\'s historic Beacon, where many notable people chose to make their homes during Exmouth\'s Georgian heyday. The Hotel is just 200 yards from the beach and enjoys magnificent views of the Exe estuary and the beautiful coastline stretching out towards Torbay.',
        'sanitize_callback' => 'wp_kses_post',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('ashton_about_description', array(
        'label'   => __('About Section Description', 'ashton-court'),
        'section' => 'ashton_about_section',
        'type'    => 'textarea',
    ));
    
    // About Image
    $wp_customize->add_setting('ashton_about_image', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'ashton_about_image', array(
        'label'   => __('About Section Image', 'ashton-court'),
        'section' => 'ashton_about_section',
    )));
    
    // ========================================
    // Booking Settings
    // ========================================
    $wp_customize->add_section('ashton_booking', array(
        'title'    => __('Booking Settings', 'ashton-court'),
        'priority' => 50,
    ));
    
    // Starting Price
    $wp_customize->add_setting('ashton_starting_price', array(
        'default'           => '70',
        'sanitize_callback' => 'absint',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('ashton_starting_price', array(
        'label'   => __('Starting Price (£)', 'ashton-court'),
        'section' => 'ashton_booking',
        'type'    => 'number',
    ));
    
    // Total Rooms
    $wp_customize->add_setting('ashton_total_rooms', array(
        'default'           => '45',
        'sanitize_callback' => 'absint',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('ashton_total_rooms', array(
        'label'   => __('Total Number of Rooms', 'ashton-court'),
        'section' => 'ashton_booking',
        'type'    => 'number',
    ));
    
    // External Booking URL (Optional)
    $wp_customize->add_setting('ashton_booking_url', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('ashton_booking_url', array(
        'label'       => __('External Booking URL', 'ashton-court'),
        'description' => __('Optional. If you use an external booking system (Booking.com, etc.), enter the URL here.', 'ashton-court'),
        'section'     => 'ashton_booking',
        'type'        => 'url',
    ));
    // ========================================
    // Section: Special Offer Bar
    // ========================================
    $wp_customize->add_section('ashton_offer_bar', array(
        'title'    => __('Special Offer Bar', 'ashton-court'),
        'priority' => 35,
    ));

    // Enable/Disable
    $wp_customize->add_setting('ashton_offer_enabled', array(
        'default'           => true,
        'sanitize_callback' => 'wp_validate_boolean',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('ashton_offer_enabled', array(
        'label'   => __('Enable Special Offer Bar', 'ashton-court'),
        'section' => 'ashton_offer_bar',
        'type'    => 'checkbox',
    ));

    // Badge Text
    $wp_customize->add_setting('ashton_offer_badge', array(
        'default'           => 'Special Offer',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('ashton_offer_badge', array(
        'label'   => __('Badge Text', 'ashton-court'),
        'section' => 'ashton_offer_bar',
        'type'    => 'text',
    ));

    // Offer Text
    $wp_customize->add_setting('ashton_offer_text', array(
        'default'           => '25% off stay & drinks when you book direct with us',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('ashton_offer_text', array(
        'label'   => __('Offer Text', 'ashton-court'),
        'section' => 'ashton_offer_bar',
        'type'    => 'text',
    ));

    // Offer Period / Conditions
    $wp_customize->add_setting('ashton_offer_period', array(
        'default'           => 'February & March only — excluding holidays',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('ashton_offer_period', array(
        'label'   => __('Offer Period / Conditions', 'ashton-court'),
        'section' => 'ashton_offer_bar',
        'type'    => 'text',
    ));

    // CTA Button Text
    $wp_customize->add_setting('ashton_offer_cta_text', array(
        'default'           => 'Book Now',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('ashton_offer_cta_text', array(
        'label'   => __('CTA Button Text', 'ashton-court'),
        'section' => 'ashton_offer_bar',
        'type'    => 'text',
    ));

    // CTA Button Link
    $wp_customize->add_setting('ashton_offer_cta_link', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('ashton_offer_cta_link', array(
        'label'   => __('CTA Button Link', 'ashton-court'),
        'section' => 'ashton_offer_bar',
        'type'    => 'url',
    ));
}
add_action('customize_register', 'ashton_customize_register');

/**
 * Helper Functions to Get Theme Options
 */
function ashton_get_option($option, $default = '') {
    return get_theme_mod('ashton_' . $option, $default);
}

function ashton_get_phone() {
    return get_theme_mod('ashton_phone', '+44 (0)1395 263002');
}

function ashton_get_email() {
    return get_theme_mod('ashton_email', 'reception@ashtoncourthotel.co.uk');
}

function ashton_get_address() {
    $street = get_theme_mod('ashton_street', '5-6 Louisa Terrace');
    $city = get_theme_mod('ashton_city', 'Exmouth');
    $postcode = get_theme_mod('ashton_postcode', 'EX8 2AQ');
    
    return array(
        'street'   => $street,
        'city'     => $city,
        'postcode' => $postcode,
        'full'     => "$street, $city $postcode",
    );
}

function ashton_get_social_links() {
    return array(
        'facebook'    => get_theme_mod('ashton_facebook', ''),
        'instagram'   => get_theme_mod('ashton_instagram', ''),
        'twitter'     => get_theme_mod('ashton_twitter', ''),
        'tripadvisor' => get_theme_mod('ashton_tripadvisor', ''),
    );
}
