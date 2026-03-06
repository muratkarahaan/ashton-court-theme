<?php
if (!defined('ABSPATH')) exit;

if (!function_exists('acf_add_local_field_group')) return;

// ============================================
// HOMEPAGE
// ============================================
acf_add_local_field_group(array(
    'key' => 'group_homepage',
    'title' => 'Homepage Sections',
    'fields' => array(
        // ── HERO ──
        array('key' => 'field_tab_hero', 'label' => 'Hero Section', 'type' => 'tab'),
        array('key' => 'field_hero_eyebrow', 'label' => 'Eyebrow Text', 'name' => 'hero_eyebrow', 'type' => 'text'),
        array('key' => 'field_hero_title_1', 'label' => 'Title Line 1', 'name' => 'hero_title_line_1', 'type' => 'text'),
        array('key' => 'field_hero_title_2', 'label' => 'Title Line 2 (Accent)', 'name' => 'hero_title_line_2', 'type' => 'text'),
        array('key' => 'field_hero_desc', 'label' => 'Description', 'name' => 'hero_description', 'type' => 'textarea', 'rows' => 2),
        array('key' => 'field_hero_location', 'label' => 'Location Text', 'name' => 'hero_location', 'type' => 'text'),
        array('key' => 'field_hero_bg', 'label' => 'Background Image', 'name' => 'hero_bg_image', 'type' => 'image', 'return_format' => 'url', 'preview_size' => 'medium', 'instructions' => 'Leave empty to use default'),
        // ── ESSENCE ──
        array('key' => 'field_tab_essence', 'label' => 'About / Essence', 'type' => 'tab'),
        array('key' => 'field_ess_tag', 'label' => 'Tag Text', 'name' => 'essence_tag', 'type' => 'text'),
        array('key' => 'field_ess_title', 'label' => 'Title', 'name' => 'essence_title', 'type' => 'text'),
        array('key' => 'field_ess_title_em', 'label' => 'Title (Italic Part)', 'name' => 'essence_title_italic', 'type' => 'text'),
        array('key' => 'field_ess_lead', 'label' => 'Lead Paragraph', 'name' => 'essence_lead', 'type' => 'textarea', 'rows' => 3),
        array('key' => 'field_ess_body', 'label' => 'Body Text', 'name' => 'essence_body', 'type' => 'wysiwyg', 'toolbar' => 'basic', 'media_upload' => 0),
        array('key' => 'field_ess_image', 'label' => 'Side Image', 'name' => 'essence_image', 'type' => 'image', 'return_format' => 'url', 'preview_size' => 'medium', 'instructions' => 'Leave empty for default'),
        array('key' => 'field_ess_btn_text', 'label' => 'Button Text', 'name' => 'essence_button_text', 'type' => 'text'),
        array('key' => 'field_ess_stat1_num', 'label' => 'Stat 1 Number', 'name' => 'essence_stat1_num', 'type' => 'text', 'wrapper' => array('width' => '25')),
        array('key' => 'field_ess_stat1_label', 'label' => 'Stat 1 Label', 'name' => 'essence_stat1_label', 'type' => 'text', 'wrapper' => array('width' => '25')),
        array('key' => 'field_ess_stat2_num', 'label' => 'Stat 2 Number', 'name' => 'essence_stat2_num', 'type' => 'text', 'wrapper' => array('width' => '25')),
        array('key' => 'field_ess_stat2_label', 'label' => 'Stat 2 Label', 'name' => 'essence_stat2_label', 'type' => 'text', 'wrapper' => array('width' => '25')),
        array('key' => 'field_ess_stat3_num', 'label' => 'Stat 3 Number', 'name' => 'essence_stat3_num', 'type' => 'text', 'wrapper' => array('width' => '25')),
        array('key' => 'field_ess_stat3_label', 'label' => 'Stat 3 Label', 'name' => 'essence_stat3_label', 'type' => 'text', 'wrapper' => array('width' => '25')),
        // ── FEATURES ──
        array('key' => 'field_tab_features', 'label' => 'Features Strip', 'type' => 'tab'),
        array('key' => 'field_feat_1', 'label' => 'Feature 1', 'name' => 'feature_1', 'type' => 'text', 'wrapper' => array('width' => '50')),
        array('key' => 'field_feat_1_icon', 'label' => 'Icon 1', 'name' => 'feature_1_icon', 'type' => 'select', 'choices' => array('breakfast'=>'Breakfast','wifi'=>'WiFi','parking'=>'Parking','lift'=>'Lift','dog'=>'Dog Friendly'), 'wrapper' => array('width' => '50')),
        array('key' => 'field_feat_2', 'label' => 'Feature 2', 'name' => 'feature_2', 'type' => 'text', 'wrapper' => array('width' => '50')),
        array('key' => 'field_feat_2_icon', 'label' => 'Icon 2', 'name' => 'feature_2_icon', 'type' => 'select', 'choices' => array('breakfast'=>'Breakfast','wifi'=>'WiFi','parking'=>'Parking','lift'=>'Lift','dog'=>'Dog Friendly'), 'wrapper' => array('width' => '50')),
        array('key' => 'field_feat_3', 'label' => 'Feature 3', 'name' => 'feature_3', 'type' => 'text', 'wrapper' => array('width' => '50')),
        array('key' => 'field_feat_3_icon', 'label' => 'Icon 3', 'name' => 'feature_3_icon', 'type' => 'select', 'choices' => array('breakfast'=>'Breakfast','wifi'=>'WiFi','parking'=>'Parking','lift'=>'Lift','dog'=>'Dog Friendly'), 'wrapper' => array('width' => '50')),
        array('key' => 'field_feat_4', 'label' => 'Feature 4', 'name' => 'feature_4', 'type' => 'text', 'wrapper' => array('width' => '50')),
        array('key' => 'field_feat_4_icon', 'label' => 'Icon 4', 'name' => 'feature_4_icon', 'type' => 'select', 'choices' => array('breakfast'=>'Breakfast','wifi'=>'WiFi','parking'=>'Parking','lift'=>'Lift','dog'=>'Dog Friendly'), 'wrapper' => array('width' => '50')),
        array('key' => 'field_feat_5', 'label' => 'Feature 5', 'name' => 'feature_5', 'type' => 'text', 'wrapper' => array('width' => '50')),
        array('key' => 'field_feat_5_icon', 'label' => 'Icon 5', 'name' => 'feature_5_icon', 'type' => 'select', 'choices' => array('breakfast'=>'Breakfast','wifi'=>'WiFi','parking'=>'Parking','lift'=>'Lift','dog'=>'Dog Friendly'), 'wrapper' => array('width' => '50')),
        // ── ROOMS ──
        array('key' => 'field_tab_rooms', 'label' => 'Rooms Section', 'type' => 'tab'),
        array('key' => 'field_rooms_tagline', 'label' => 'Tagline', 'name' => 'rooms_tagline', 'type' => 'text'),
        array('key' => 'field_rooms_title', 'label' => 'Title', 'name' => 'rooms_title', 'type' => 'text'),
        array('key' => 'field_rooms_subtitle', 'label' => 'Subtitle', 'name' => 'rooms_subtitle', 'type' => 'textarea', 'rows' => 2),
        array('key' => 'field_rooms_btn', 'label' => 'Button Text', 'name' => 'rooms_button_text', 'type' => 'text'),
        // ── EXPERIENCE ──
        array('key' => 'field_tab_exp', 'label' => 'Experience Section', 'type' => 'tab'),
        array('key' => 'field_exp_title', 'label' => 'Title', 'name' => 'experience_title', 'type' => 'text'),
        array('key' => 'field_exp_title_em', 'label' => 'Title (Italic)', 'name' => 'experience_title_italic', 'type' => 'text'),
        array('key' => 'field_exp_desc', 'label' => 'Description', 'name' => 'experience_description', 'type' => 'textarea', 'rows' => 2),
        array('key' => 'field_exp_p1_title', 'label' => 'Panel 1 Title', 'name' => 'exp_panel_1_title', 'type' => 'text', 'wrapper' => array('width' => '33')),
        array('key' => 'field_exp_p1_text', 'label' => 'Panel 1 Text', 'name' => 'exp_panel_1_text', 'type' => 'text', 'wrapper' => array('width' => '33')),
        array('key' => 'field_exp_p1_link', 'label' => 'Panel 1 Link', 'name' => 'exp_panel_1_link', 'type' => 'page_link', 'wrapper' => array('width' => '34')),
        array('key' => 'field_exp_p2_title', 'label' => 'Panel 2 Title', 'name' => 'exp_panel_2_title', 'type' => 'text', 'wrapper' => array('width' => '33')),
        array('key' => 'field_exp_p2_text', 'label' => 'Panel 2 Text', 'name' => 'exp_panel_2_text', 'type' => 'text', 'wrapper' => array('width' => '33')),
        array('key' => 'field_exp_p2_link', 'label' => 'Panel 2 Link', 'name' => 'exp_panel_2_link', 'type' => 'page_link', 'wrapper' => array('width' => '34')),
        array('key' => 'field_exp_p3_title', 'label' => 'Panel 3 Title', 'name' => 'exp_panel_3_title', 'type' => 'text', 'wrapper' => array('width' => '33')),
        array('key' => 'field_exp_p3_text', 'label' => 'Panel 3 Text', 'name' => 'exp_panel_3_text', 'type' => 'text', 'wrapper' => array('width' => '33')),
        array('key' => 'field_exp_p3_link', 'label' => 'Panel 3 Link', 'name' => 'exp_panel_3_link', 'type' => 'page_link', 'wrapper' => array('width' => '34')),
        array('key' => 'field_exp_p4_title', 'label' => 'Panel 4 Title', 'name' => 'exp_panel_4_title', 'type' => 'text', 'wrapper' => array('width' => '33')),
        array('key' => 'field_exp_p4_text', 'label' => 'Panel 4 Text', 'name' => 'exp_panel_4_text', 'type' => 'text', 'wrapper' => array('width' => '33')),
        array('key' => 'field_exp_p4_link', 'label' => 'Panel 4 Link', 'name' => 'exp_panel_4_link', 'type' => 'page_link', 'wrapper' => array('width' => '34')),
        // ── REVIEWS ──
        array('key' => 'field_tab_reviews', 'label' => 'Reviews Section', 'type' => 'tab'),
        array('key' => 'field_rev_title', 'label' => 'Title', 'name' => 'reviews_title', 'type' => 'text'),
        array('key' => 'field_rev_subtitle', 'label' => 'Subtitle', 'name' => 'reviews_subtitle', 'type' => 'text'),
        array('key' => 'field_rev_url', 'label' => 'Google Reviews URL', 'name' => 'reviews_google_url', 'type' => 'url'),
        array('key' => 'field_rev_1_text', 'label' => 'Review 1', 'name' => 'review_1_text', 'type' => 'textarea', 'rows' => 3),
        array('key' => 'field_rev_1_author', 'label' => 'Author 1', 'name' => 'review_1_author', 'type' => 'text', 'wrapper' => array('width' => '50')),
        array('key' => 'field_rev_1_rating', 'label' => 'Rating 1', 'name' => 'review_1_rating', 'type' => 'number', 'min' => 1, 'max' => 5, 'wrapper' => array('width' => '50')),
        array('key' => 'field_rev_2_text', 'label' => 'Review 2', 'name' => 'review_2_text', 'type' => 'textarea', 'rows' => 3),
        array('key' => 'field_rev_2_author', 'label' => 'Author 2', 'name' => 'review_2_author', 'type' => 'text', 'wrapper' => array('width' => '50')),
        array('key' => 'field_rev_2_rating', 'label' => 'Rating 2', 'name' => 'review_2_rating', 'type' => 'number', 'min' => 1, 'max' => 5, 'wrapper' => array('width' => '50')),
        array('key' => 'field_rev_3_text', 'label' => 'Review 3', 'name' => 'review_3_text', 'type' => 'textarea', 'rows' => 3),
        array('key' => 'field_rev_3_author', 'label' => 'Author 3', 'name' => 'review_3_author', 'type' => 'text', 'wrapper' => array('width' => '50')),
        array('key' => 'field_rev_3_rating', 'label' => 'Rating 3', 'name' => 'review_3_rating', 'type' => 'number', 'min' => 1, 'max' => 5, 'wrapper' => array('width' => '50')),
        array('key' => 'field_rev_4_text', 'label' => 'Review 4', 'name' => 'review_4_text', 'type' => 'textarea', 'rows' => 3),
        array('key' => 'field_rev_4_author', 'label' => 'Author 4', 'name' => 'review_4_author', 'type' => 'text', 'wrapper' => array('width' => '50')),
        array('key' => 'field_rev_4_rating', 'label' => 'Rating 4', 'name' => 'review_4_rating', 'type' => 'number', 'min' => 1, 'max' => 5, 'wrapper' => array('width' => '50')),
    ),
    'location' => array(array(array('param' => 'page_type', 'operator' => '==', 'value' => 'front_page'))),
    'menu_order' => 0, 'position' => 'normal', 'style' => 'default',
));

// ============================================
// ABOUT PAGE
// ============================================
acf_add_local_field_group(array(
    'key' => 'group_about',
    'title' => 'About Page Content',
    'fields' => array(
        // Hero
        array('key' => 'field_ab_tab_hero', 'label' => 'Hero', 'type' => 'tab'),
        array('key' => 'field_ab_hero_label', 'label' => 'Hero Label', 'name' => 'about_hero_label', 'type' => 'text'),
        array('key' => 'field_ab_hero_title', 'label' => 'Hero Title', 'name' => 'about_hero_title', 'type' => 'text', 'instructions' => 'Use | to split into lines, e.g. "A Historic|Sanctuary|by the Sea"'),
        array('key' => 'field_ab_hero_subtitle', 'label' => 'Hero Subtitle', 'name' => 'about_hero_subtitle', 'type' => 'text'),
        // Opening Quote
        array('key' => 'field_ab_tab_opening', 'label' => 'Opening Quote', 'type' => 'tab'),
        array('key' => 'field_ab_quote', 'label' => 'Quote', 'name' => 'about_quote', 'type' => 'textarea', 'rows' => 2),
        // Heritage
        array('key' => 'field_ab_tab_heritage', 'label' => 'Heritage Section', 'type' => 'tab'),
        array('key' => 'field_ab_her_label', 'label' => 'Section Label', 'name' => 'about_heritage_label', 'type' => 'text'),
        array('key' => 'field_ab_her_title', 'label' => 'Title', 'name' => 'about_heritage_title', 'type' => 'text'),
        array('key' => 'field_ab_her_text', 'label' => 'Text', 'name' => 'about_heritage_text', 'type' => 'wysiwyg', 'toolbar' => 'basic', 'media_upload' => 0),
        array('key' => 'field_ab_her_s1n', 'label' => 'Stat 1 Number', 'name' => 'about_heritage_stat1_num', 'type' => 'text', 'wrapper' => array('width' => '25')),
        array('key' => 'field_ab_her_s1l', 'label' => 'Stat 1 Label', 'name' => 'about_heritage_stat1_label', 'type' => 'text', 'wrapper' => array('width' => '25')),
        array('key' => 'field_ab_her_s2n', 'label' => 'Stat 2 Number', 'name' => 'about_heritage_stat2_num', 'type' => 'text', 'wrapper' => array('width' => '25')),
        array('key' => 'field_ab_her_s2l', 'label' => 'Stat 2 Label', 'name' => 'about_heritage_stat2_label', 'type' => 'text', 'wrapper' => array('width' => '25')),
        array('key' => 'field_ab_her_s3n', 'label' => 'Stat 3 Number', 'name' => 'about_heritage_stat3_num', 'type' => 'text', 'wrapper' => array('width' => '25')),
        array('key' => 'field_ab_her_s3l', 'label' => 'Stat 3 Label', 'name' => 'about_heritage_stat3_label', 'type' => 'text', 'wrapper' => array('width' => '25')),
        // Panoramic
        array('key' => 'field_ab_tab_pano', 'label' => 'Panoramic Section', 'type' => 'tab'),
        array('key' => 'field_ab_pano_title_sm', 'label' => 'Title (Small)', 'name' => 'about_pano_title_small', 'type' => 'text'),
        array('key' => 'field_ab_pano_title_lg', 'label' => 'Title (Large)', 'name' => 'about_pano_title_large', 'type' => 'text'),
        array('key' => 'field_ab_pano_desc', 'label' => 'Description', 'name' => 'about_pano_description', 'type' => 'textarea', 'rows' => 2),
        // Offerings (4 items)
        array('key' => 'field_ab_tab_offer', 'label' => 'Offerings (4 Items)', 'type' => 'tab'),
        array('key' => 'field_ab_offer_label', 'label' => 'Section Label', 'name' => 'about_offerings_label', 'type' => 'text'),
        array('key' => 'field_ab_offer_title', 'label' => 'Section Title', 'name' => 'about_offerings_title', 'type' => 'text'),
        array('key' => 'field_ab_offer_subtitle', 'label' => 'Section Subtitle', 'name' => 'about_offerings_subtitle', 'type' => 'text'),
        // Offering 1
        array('key' => 'field_ab_o1_title', 'label' => 'Item 1 Title', 'name' => 'about_offer1_title', 'type' => 'text', 'wrapper' => array('width' => '33')),
        array('key' => 'field_ab_o1_desc', 'label' => 'Item 1 Description', 'name' => 'about_offer1_desc', 'type' => 'textarea', 'rows' => 2, 'wrapper' => array('width' => '34')),
        array('key' => 'field_ab_o1_link_text', 'label' => 'Item 1 Link Text', 'name' => 'about_offer1_link_text', 'type' => 'text', 'wrapper' => array('width' => '33')),
        // Offering 2
        array('key' => 'field_ab_o2_title', 'label' => 'Item 2 Title', 'name' => 'about_offer2_title', 'type' => 'text', 'wrapper' => array('width' => '33')),
        array('key' => 'field_ab_o2_desc', 'label' => 'Item 2 Description', 'name' => 'about_offer2_desc', 'type' => 'textarea', 'rows' => 2, 'wrapper' => array('width' => '34')),
        array('key' => 'field_ab_o2_link_text', 'label' => 'Item 2 Link Text', 'name' => 'about_offer2_link_text', 'type' => 'text', 'wrapper' => array('width' => '33')),
        // Offering 3
        array('key' => 'field_ab_o3_title', 'label' => 'Item 3 Title', 'name' => 'about_offer3_title', 'type' => 'text', 'wrapper' => array('width' => '33')),
        array('key' => 'field_ab_o3_desc', 'label' => 'Item 3 Description', 'name' => 'about_offer3_desc', 'type' => 'textarea', 'rows' => 2, 'wrapper' => array('width' => '34')),
        array('key' => 'field_ab_o3_link_text', 'label' => 'Item 3 Link Text', 'name' => 'about_offer3_link_text', 'type' => 'text', 'wrapper' => array('width' => '33')),
        // Offering 4
        array('key' => 'field_ab_o4_title', 'label' => 'Item 4 Title', 'name' => 'about_offer4_title', 'type' => 'text', 'wrapper' => array('width' => '33')),
        array('key' => 'field_ab_o4_desc', 'label' => 'Item 4 Description', 'name' => 'about_offer4_desc', 'type' => 'textarea', 'rows' => 2, 'wrapper' => array('width' => '34')),
        array('key' => 'field_ab_o4_link_text', 'label' => 'Item 4 Link Text', 'name' => 'about_offer4_link_text', 'type' => 'text', 'wrapper' => array('width' => '33')),
        // Values
        array('key' => 'field_ab_tab_values', 'label' => 'Values (4 Items)', 'type' => 'tab'),
        array('key' => 'field_ab_val_label', 'label' => 'Section Label', 'name' => 'about_values_label', 'type' => 'text'),
        array('key' => 'field_ab_val_title', 'label' => 'Section Title', 'name' => 'about_values_title', 'type' => 'text'),
        array('key' => 'field_ab_v1_title', 'label' => 'Value 1 Title', 'name' => 'about_val1_title', 'type' => 'text', 'wrapper' => array('width' => '50')),
        array('key' => 'field_ab_v1_desc', 'label' => 'Value 1 Text', 'name' => 'about_val1_desc', 'type' => 'text', 'wrapper' => array('width' => '50')),
        array('key' => 'field_ab_v2_title', 'label' => 'Value 2 Title', 'name' => 'about_val2_title', 'type' => 'text', 'wrapper' => array('width' => '50')),
        array('key' => 'field_ab_v2_desc', 'label' => 'Value 2 Text', 'name' => 'about_val2_desc', 'type' => 'text', 'wrapper' => array('width' => '50')),
        array('key' => 'field_ab_v3_title', 'label' => 'Value 3 Title', 'name' => 'about_val3_title', 'type' => 'text', 'wrapper' => array('width' => '50')),
        array('key' => 'field_ab_v3_desc', 'label' => 'Value 3 Text', 'name' => 'about_val3_desc', 'type' => 'text', 'wrapper' => array('width' => '50')),
        array('key' => 'field_ab_v4_title', 'label' => 'Value 4 Title', 'name' => 'about_val4_title', 'type' => 'text', 'wrapper' => array('width' => '50')),
        array('key' => 'field_ab_v4_desc', 'label' => 'Value 4 Text', 'name' => 'about_val4_desc', 'type' => 'text', 'wrapper' => array('width' => '50')),
        // CTA
        array('key' => 'field_ab_tab_cta', 'label' => 'Bottom CTA', 'type' => 'tab'),
        array('key' => 'field_ab_cta_title', 'label' => 'CTA Title', 'name' => 'about_cta_title', 'type' => 'text'),
        array('key' => 'field_ab_cta_text', 'label' => 'CTA Text', 'name' => 'about_cta_text', 'type' => 'textarea', 'rows' => 2),
        array('key' => 'field_ab_cta_btn', 'label' => 'CTA Button Text', 'name' => 'about_cta_button', 'type' => 'text'),
    ),
    'location' => array(array(array('param' => 'page_template', 'operator' => '==', 'value' => 'page-about.php'))),
    'menu_order' => 0, 'position' => 'normal', 'style' => 'default',
));

// ============================================
// FUNCTIONS PAGE
// ============================================
acf_add_local_field_group(array(
    'key' => 'group_functions',
    'title' => 'Functions Page Content',
    'fields' => array(
        // Hero
        array('key' => 'field_func_tab_hero', 'label' => 'Hero', 'type' => 'tab'),
        array('key' => 'field_func_hero_badge', 'label' => 'Hero Badge', 'name' => 'func_hero_badge', 'type' => 'text'),
        array('key' => 'field_func_hero_title_small', 'label' => 'Title (Small)', 'name' => 'func_hero_title_small', 'type' => 'text'),
        array('key' => 'field_func_hero_title_main', 'label' => 'Title (Main)', 'name' => 'func_hero_title_main', 'type' => 'text'),
        array('key' => 'field_func_hero_subtitle', 'label' => 'Subtitle', 'name' => 'func_hero_subtitle', 'type' => 'textarea', 'rows' => 2, 'instructions' => 'HTML allowed: &lt;br&gt;'),
        array('key' => 'field_func_hero_price_evening', 'label' => 'Evening Price', 'name' => 'func_hero_price_evening', 'type' => 'text', 'instructions' => 'e.g. 39.50', 'wrapper' => array('width' => '50')),
        array('key' => 'field_func_hero_price_luncheon', 'label' => 'Luncheon Price', 'name' => 'func_hero_price_luncheon', 'type' => 'text', 'instructions' => 'e.g. 32.50', 'wrapper' => array('width' => '50')),
        array('key' => 'field_func_hero_feature1', 'label' => 'Feature 1', 'name' => 'func_hero_feature1', 'type' => 'text', 'wrapper' => array('width' => '33')),
        array('key' => 'field_func_hero_feature2', 'label' => 'Feature 2', 'name' => 'func_hero_feature2', 'type' => 'text', 'wrapper' => array('width' => '33')),
        array('key' => 'field_func_hero_feature3', 'label' => 'Feature 3', 'name' => 'func_hero_feature3', 'type' => 'text', 'wrapper' => array('width' => '34')),
        // Intro
        array('key' => 'field_func_tab_intro', 'label' => 'Intro', 'type' => 'tab'),
        array('key' => 'field_func_intro_label', 'label' => 'Label', 'name' => 'func_intro_label', 'type' => 'text'),
        array('key' => 'field_func_intro_title', 'label' => 'Title', 'name' => 'func_intro_title', 'type' => 'text', 'instructions' => 'HTML allowed: &lt;br&gt;, &lt;em&gt;'),
        array('key' => 'field_func_intro_desc', 'label' => 'Description', 'name' => 'func_intro_desc', 'type' => 'textarea', 'rows' => 3, 'instructions' => 'HTML allowed: &lt;br&gt;'),
        // What's Included
        array('key' => 'field_func_tab_included', 'label' => "What's Included (6)", 'type' => 'tab'),
        array('key' => 'field_func_incl_badge', 'label' => 'Badge', 'name' => 'func_incl_badge', 'type' => 'text'),
        array('key' => 'field_func_incl_title', 'label' => 'Title', 'name' => 'func_incl_title', 'type' => 'text'),
        array('key' => 'field_func_incl1_title', 'label' => 'Item 1 Title', 'name' => 'func_incl1_title', 'type' => 'text', 'wrapper' => array('width' => '50')),
        array('key' => 'field_func_incl1_desc', 'label' => 'Item 1 Description', 'name' => 'func_incl1_desc', 'type' => 'text', 'wrapper' => array('width' => '50')),
        array('key' => 'field_func_incl2_title', 'label' => 'Item 2 Title', 'name' => 'func_incl2_title', 'type' => 'text', 'wrapper' => array('width' => '50')),
        array('key' => 'field_func_incl2_desc', 'label' => 'Item 2 Description', 'name' => 'func_incl2_desc', 'type' => 'text', 'wrapper' => array('width' => '50')),
        array('key' => 'field_func_incl3_title', 'label' => 'Item 3 Title', 'name' => 'func_incl3_title', 'type' => 'text', 'wrapper' => array('width' => '50')),
        array('key' => 'field_func_incl3_desc', 'label' => 'Item 3 Description', 'name' => 'func_incl3_desc', 'type' => 'text', 'wrapper' => array('width' => '50')),
        array('key' => 'field_func_incl4_title', 'label' => 'Item 4 Title', 'name' => 'func_incl4_title', 'type' => 'text', 'wrapper' => array('width' => '50')),
        array('key' => 'field_func_incl4_desc', 'label' => 'Item 4 Description', 'name' => 'func_incl4_desc', 'type' => 'text', 'wrapper' => array('width' => '50')),
        array('key' => 'field_func_incl5_title', 'label' => 'Item 5 Title', 'name' => 'func_incl5_title', 'type' => 'text', 'wrapper' => array('width' => '50')),
        array('key' => 'field_func_incl5_desc', 'label' => 'Item 5 Description', 'name' => 'func_incl5_desc', 'type' => 'text', 'wrapper' => array('width' => '50')),
        array('key' => 'field_func_incl6_title', 'label' => 'Item 6 Title', 'name' => 'func_incl6_title', 'type' => 'text', 'wrapper' => array('width' => '50')),
        array('key' => 'field_func_incl6_desc', 'label' => 'Item 6 Description', 'name' => 'func_incl6_desc', 'type' => 'text', 'wrapper' => array('width' => '50')),
        // Contact CTA
        array('key' => 'field_func_tab_cta', 'label' => 'Contact CTA', 'type' => 'tab'),
        array('key' => 'field_func_cta_badge', 'label' => 'Badge', 'name' => 'func_cta_badge', 'type' => 'text'),
        array('key' => 'field_func_cta_title', 'label' => 'Title', 'name' => 'func_cta_title', 'type' => 'text'),
        array('key' => 'field_func_cta_desc', 'label' => 'Description', 'name' => 'func_cta_desc', 'type' => 'textarea', 'rows' => 2),
        array('key' => 'field_func_cta_phone', 'label' => 'Phone', 'name' => 'func_cta_phone', 'type' => 'text', 'wrapper' => array('width' => '50')),
        array('key' => 'field_func_cta_email', 'label' => 'Email', 'name' => 'func_cta_email', 'type' => 'email', 'wrapper' => array('width' => '50')),
        // Contact Info Card
        array('key' => 'field_func_tab_contact', 'label' => 'Contact Info Card', 'type' => 'tab'),
        array('key' => 'field_func_contact_hotel', 'label' => 'Hotel Name', 'name' => 'func_contact_hotel', 'type' => 'text'),
        array('key' => 'field_func_contact_address', 'label' => 'Address', 'name' => 'func_contact_address', 'type' => 'textarea', 'rows' => 2, 'instructions' => 'HTML allowed: &lt;br&gt;'),
        array('key' => 'field_func_contact_note', 'label' => 'Note Text', 'name' => 'func_contact_note', 'type' => 'textarea', 'rows' => 2, 'instructions' => 'HTML allowed: &lt;br&gt;'),
    ),
    'location' => array(array(array('param' => 'page_template', 'operator' => '==', 'value' => 'page-functions.php'))),
    'menu_order' => 0, 'position' => 'normal', 'style' => 'default',
));

// ============================================
// WEDDINGS PAGE
// ============================================
acf_add_local_field_group(array(
    'key' => 'group_weddings',
    'title' => 'Weddings Page Content',
    'fields' => array(
        // ── HERO ──
        array('key' => 'field_wed_tab_hero', 'label' => 'Hero', 'type' => 'tab'),
        array('key' => 'field_wed_hero_title', 'label' => 'Hero Title', 'name' => 'wed_hero_title', 'type' => 'text', 'instructions' => 'Use | to split lines, e.g. "Your|Perfect|Day"'),
        array('key' => 'field_wed_hero_subtitle', 'label' => 'Hero Subtitle', 'name' => 'wed_hero_subtitle', 'type' => 'text'),
        // Stats
        array('key' => 'field_wed_stat1_num', 'label' => 'Stat 1 Number', 'name' => 'wed_stat1_num', 'type' => 'text', 'wrapper' => array('width' => '25')),
        array('key' => 'field_wed_stat1_label', 'label' => 'Stat 1 Label', 'name' => 'wed_stat1_label', 'type' => 'text', 'wrapper' => array('width' => '25')),
        array('key' => 'field_wed_stat2_num', 'label' => 'Stat 2 Number', 'name' => 'wed_stat2_num', 'type' => 'text', 'wrapper' => array('width' => '25')),
        array('key' => 'field_wed_stat2_label', 'label' => 'Stat 2 Label', 'name' => 'wed_stat2_label', 'type' => 'text', 'wrapper' => array('width' => '25')),
        array('key' => 'field_wed_stat3_num', 'label' => 'Stat 3 Number', 'name' => 'wed_stat3_num', 'type' => 'text', 'wrapper' => array('width' => '25')),
        array('key' => 'field_wed_stat3_label', 'label' => 'Stat 3 Label', 'name' => 'wed_stat3_label', 'type' => 'text', 'wrapper' => array('width' => '25')),
        // ── INTRO ──
        array('key' => 'field_wed_tab_intro', 'label' => 'Introduction', 'type' => 'tab'),
        array('key' => 'field_wed_intro_label', 'label' => 'Section Label', 'name' => 'wed_intro_label', 'type' => 'text'),
        array('key' => 'field_wed_intro_headline', 'label' => 'Headline', 'name' => 'wed_intro_headline', 'type' => 'text', 'instructions' => 'Use | to split, e.g. "Where Love Stories|Begin"'),
        array('key' => 'field_wed_intro_lead', 'label' => 'Lead Text', 'name' => 'wed_intro_lead', 'type' => 'textarea', 'rows' => 2),
        array('key' => 'field_wed_intro_body1', 'label' => 'Body Paragraph 1', 'name' => 'wed_intro_body1', 'type' => 'textarea', 'rows' => 3),
        array('key' => 'field_wed_intro_body2', 'label' => 'Body Paragraph 2', 'name' => 'wed_intro_body2', 'type' => 'textarea', 'rows' => 3),
        // ── PACKAGE ──
        array('key' => 'field_wed_tab_pkg', 'label' => 'Package', 'type' => 'tab'),
        array('key' => 'field_wed_pkg_year', 'label' => 'Year', 'name' => 'wed_pkg_year', 'type' => 'text', 'wrapper' => array('width' => '33')),
        array('key' => 'field_wed_pkg_price', 'label' => 'Price', 'name' => 'wed_pkg_price', 'type' => 'text', 'wrapper' => array('width' => '33')),
        array('key' => 'field_wed_pkg_note', 'label' => 'Card Note', 'name' => 'wed_pkg_note', 'type' => 'text', 'wrapper' => array('width' => '34')),
        array('key' => 'field_wed_pkg_includes', 'label' => 'Package Includes', 'name' => 'wed_pkg_includes', 'type' => 'wysiwyg', 'toolbar' => 'basic', 'media_upload' => 0, 'instructions' => 'List of included items (use bullet list)'),
        // ── DRINKS ──
        array('key' => 'field_wed_tab_drinks', 'label' => 'Drinks', 'type' => 'tab'),
        array('key' => 'field_wed_drinks_title', 'label' => 'Section Title', 'name' => 'wed_drinks_title', 'type' => 'text'),
        array('key' => 'field_wed_drinks_subtitle', 'label' => 'Section Subtitle', 'name' => 'wed_drinks_subtitle', 'type' => 'text'),
        array('key' => 'field_wed_drinks_p1', 'label' => 'Pack 1 Price', 'name' => 'wed_drinks_pack1_price', 'type' => 'text', 'wrapper' => array('width' => '25')),
        array('key' => 'field_wed_drinks_p2', 'label' => 'Pack 2 Price', 'name' => 'wed_drinks_pack2_price', 'type' => 'text', 'wrapper' => array('width' => '25')),
        array('key' => 'field_wed_drinks_p3', 'label' => 'Pack 3 Price', 'name' => 'wed_drinks_pack3_price', 'type' => 'text', 'wrapper' => array('width' => '25')),
        array('key' => 'field_wed_drinks_p4', 'label' => 'Pack 4 Price', 'name' => 'wed_drinks_pack4_price', 'type' => 'text', 'wrapper' => array('width' => '25')),
        // ── CANAPES ──
        array('key' => 'field_wed_tab_canapes', 'label' => 'Canapés', 'type' => 'tab'),
        array('key' => 'field_wed_canapes_title', 'label' => 'Title', 'name' => 'wed_canapes_title', 'type' => 'text'),
        array('key' => 'field_wed_canapes_desc', 'label' => 'Description', 'name' => 'wed_canapes_desc', 'type' => 'textarea', 'rows' => 2),
        array('key' => 'field_wed_canapes_price', 'label' => 'Price', 'name' => 'wed_canapes_price', 'type' => 'text'),
        // ── WEDDING BREAKFAST ──
        array('key' => 'field_wed_tab_breakfast', 'label' => 'Wedding Breakfast', 'type' => 'tab'),
        array('key' => 'field_wed_breakfast_title', 'label' => 'Title', 'name' => 'wed_breakfast_title', 'type' => 'text'),
        array('key' => 'field_wed_breakfast_price', 'label' => 'Price', 'name' => 'wed_breakfast_price', 'type' => 'text'),
        array('key' => 'field_wed_breakfast_instr', 'label' => 'Instruction Text', 'name' => 'wed_breakfast_instruction', 'type' => 'textarea', 'rows' => 2),
        // ── EVENING BUFFET ──
        array('key' => 'field_wed_tab_buffet', 'label' => 'Evening Buffet', 'type' => 'tab'),
        array('key' => 'field_wed_buffet_title', 'label' => 'Title', 'name' => 'wed_buffet_title', 'type' => 'text'),
        array('key' => 'field_wed_buffet_subtitle', 'label' => 'Subtitle', 'name' => 'wed_buffet_subtitle', 'type' => 'text'),
        array('key' => 'field_wed_buffet_price1', 'label' => 'Price 1 (6 choices)', 'name' => 'wed_buffet_price1', 'type' => 'text', 'wrapper' => array('width' => '50')),
        array('key' => 'field_wed_buffet_price2', 'label' => 'Price 2 (8 choices)', 'name' => 'wed_buffet_price2', 'type' => 'text', 'wrapper' => array('width' => '50')),
        // ── YOUR DAY ──
        array('key' => 'field_wed_tab_day', 'label' => 'Your Day', 'type' => 'tab'),
        array('key' => 'field_wed_day_label', 'label' => 'Section Label', 'name' => 'wed_day_label', 'type' => 'text'),
        array('key' => 'field_wed_day_title', 'label' => 'Section Title', 'name' => 'wed_day_title', 'type' => 'text'),
        array('key' => 'field_wed_step1_title', 'label' => 'Step 1 Title', 'name' => 'wed_step1_title', 'type' => 'text', 'wrapper' => array('width' => '50')),
        array('key' => 'field_wed_step1_desc', 'label' => 'Step 1 Description', 'name' => 'wed_step1_desc', 'type' => 'textarea', 'rows' => 2, 'wrapper' => array('width' => '50')),
        array('key' => 'field_wed_step2_title', 'label' => 'Step 2 Title', 'name' => 'wed_step2_title', 'type' => 'text', 'wrapper' => array('width' => '50')),
        array('key' => 'field_wed_step2_desc', 'label' => 'Step 2 Description', 'name' => 'wed_step2_desc', 'type' => 'textarea', 'rows' => 2, 'wrapper' => array('width' => '50')),
        array('key' => 'field_wed_step3_title', 'label' => 'Step 3 Title', 'name' => 'wed_step3_title', 'type' => 'text', 'wrapper' => array('width' => '50')),
        array('key' => 'field_wed_step3_desc', 'label' => 'Step 3 Description', 'name' => 'wed_step3_desc', 'type' => 'textarea', 'rows' => 2, 'wrapper' => array('width' => '50')),
        array('key' => 'field_wed_step4_title', 'label' => 'Step 4 Title', 'name' => 'wed_step4_title', 'type' => 'text', 'wrapper' => array('width' => '50')),
        array('key' => 'field_wed_step4_desc', 'label' => 'Step 4 Description', 'name' => 'wed_step4_desc', 'type' => 'textarea', 'rows' => 2, 'wrapper' => array('width' => '50')),
        // ── ENTERTAINMENT ──
        array('key' => 'field_wed_tab_ent', 'label' => 'Entertainment', 'type' => 'tab'),
        array('key' => 'field_wed_ent_badge', 'label' => 'Badge Text', 'name' => 'wed_ent_badge', 'type' => 'text'),
        array('key' => 'field_wed_ent_title', 'label' => 'Title', 'name' => 'wed_ent_title', 'type' => 'text'),
        array('key' => 'field_wed_ent_price', 'label' => 'Price', 'name' => 'wed_ent_price', 'type' => 'text'),
        array('key' => 'field_wed_ent_partner', 'label' => 'Partner Name', 'name' => 'wed_ent_partner', 'type' => 'text'),
        // ── IMPORTANT INFO ──
        array('key' => 'field_wed_tab_info', 'label' => 'Important Info', 'type' => 'tab'),
        array('key' => 'field_wed_info_title', 'label' => 'Section Title', 'name' => 'wed_info_title', 'type' => 'text'),
        array('key' => 'field_wed_info1_title', 'label' => 'Card 1 Title', 'name' => 'wed_info1_title', 'type' => 'text', 'wrapper' => array('width' => '30')),
        array('key' => 'field_wed_info1_text', 'label' => 'Card 1 Text', 'name' => 'wed_info1_text', 'type' => 'textarea', 'rows' => 2, 'wrapper' => array('width' => '70')),
        array('key' => 'field_wed_info2_title', 'label' => 'Card 2 Title', 'name' => 'wed_info2_title', 'type' => 'text', 'wrapper' => array('width' => '30')),
        array('key' => 'field_wed_info2_text', 'label' => 'Card 2 Text', 'name' => 'wed_info2_text', 'type' => 'textarea', 'rows' => 2, 'wrapper' => array('width' => '70')),
        array('key' => 'field_wed_info3_title', 'label' => 'Card 3 Title', 'name' => 'wed_info3_title', 'type' => 'text', 'wrapper' => array('width' => '30')),
        array('key' => 'field_wed_info3_text', 'label' => 'Card 3 Text', 'name' => 'wed_info3_text', 'type' => 'textarea', 'rows' => 2, 'wrapper' => array('width' => '70')),
        array('key' => 'field_wed_info4_title', 'label' => 'Card 4 Title', 'name' => 'wed_info4_title', 'type' => 'text', 'wrapper' => array('width' => '30')),
        array('key' => 'field_wed_info4_text', 'label' => 'Card 4 Text', 'name' => 'wed_info4_text', 'type' => 'textarea', 'rows' => 2, 'wrapper' => array('width' => '70')),
        array('key' => 'field_wed_info5_title', 'label' => 'Card 5 Title', 'name' => 'wed_info5_title', 'type' => 'text', 'wrapper' => array('width' => '30')),
        array('key' => 'field_wed_info5_text', 'label' => 'Card 5 Text', 'name' => 'wed_info5_text', 'type' => 'textarea', 'rows' => 2, 'wrapper' => array('width' => '70')),
        array('key' => 'field_wed_info6_title', 'label' => 'Card 6 Title', 'name' => 'wed_info6_title', 'type' => 'text', 'wrapper' => array('width' => '30')),
        array('key' => 'field_wed_info6_text', 'label' => 'Card 6 Text', 'name' => 'wed_info6_text', 'type' => 'textarea', 'rows' => 2, 'wrapper' => array('width' => '70')),
    ),
    'location' => array(array(array('param' => 'page_template', 'operator' => '==', 'value' => 'page-weddings.php'))),
    'menu_order' => 0, 'position' => 'normal', 'style' => 'default',
));

// ============================================
// CONTACT PAGE
// ============================================
acf_add_local_field_group(array(
    'key' => 'group_contact',
    'title' => 'Contact Page Content',
    'fields' => array(
        // ── HERO ──
        array('key' => 'field_ct_tab_hero', 'label' => 'Hero', 'type' => 'tab'),
        array('key' => 'field_ct_hero_badge', 'label' => 'Hero Badge', 'name' => 'contact_hero_badge', 'type' => 'text'),
        array('key' => 'field_ct_hero_title', 'label' => 'Hero Title', 'name' => 'contact_hero_title', 'type' => 'text', 'instructions' => 'HTML allowed, e.g. Get in &lt;em&gt;Touch&lt;/em&gt;'),
        array('key' => 'field_ct_hero_subtitle', 'label' => 'Hero Subtitle', 'name' => 'contact_hero_subtitle', 'type' => 'text'),
        // ── FORM ──
        array('key' => 'field_ct_tab_form', 'label' => 'Form Section', 'type' => 'tab'),
        array('key' => 'field_ct_form_badge', 'label' => 'Form Badge', 'name' => 'contact_form_badge', 'type' => 'text'),
        array('key' => 'field_ct_form_title', 'label' => 'Form Title', 'name' => 'contact_form_title', 'type' => 'text'),
        // ── MAP ──
        array('key' => 'field_ct_tab_map', 'label' => 'Map Section', 'type' => 'tab'),
        array('key' => 'field_ct_map_title', 'label' => 'Map Card Title', 'name' => 'contact_map_title', 'type' => 'text'),
    ),
    'location' => array(array(array('param' => 'page_template', 'operator' => '==', 'value' => 'page-contact.php'))),
    'menu_order' => 0, 'position' => 'normal', 'style' => 'default',
));

// ============================================
// MENUS PAGE
// ============================================
acf_add_local_field_group(array(
    'key' => 'group_menus',
    'title' => 'Menus Page Content',
    'fields' => array(
        // ── HERO ──
        array('key' => 'field_mn_tab_hero', 'label' => 'Hero', 'type' => 'tab'),
        array('key' => 'field_mn_hero_tagline', 'label' => 'Hero Tagline', 'name' => 'menus_hero_tagline', 'type' => 'text'),
        array('key' => 'field_mn_hero_title', 'label' => 'Hero Title', 'name' => 'menus_hero_title', 'type' => 'text'),
        array('key' => 'field_mn_hero_subtitle', 'label' => 'Hero Subtitle', 'name' => 'menus_hero_subtitle', 'type' => 'text'),
        // ── INTRO ──
        array('key' => 'field_mn_tab_intro', 'label' => 'Intro', 'type' => 'tab'),
        array('key' => 'field_mn_intro_text', 'label' => 'Intro Text', 'name' => 'menus_intro_text', 'type' => 'textarea', 'rows' => 3),
        // ── CTA ──
        array('key' => 'field_mn_tab_cta', 'label' => 'Bottom CTA', 'type' => 'tab'),
        array('key' => 'field_mn_cta_title', 'label' => 'CTA Title', 'name' => 'menus_cta_title', 'type' => 'text'),
        array('key' => 'field_mn_cta_text', 'label' => 'CTA Text', 'name' => 'menus_cta_text', 'type' => 'textarea', 'rows' => 2),
    ),
    'location' => array(array(array('param' => 'page_template', 'operator' => '==', 'value' => 'page-menus.php'))),
    'menu_order' => 0, 'position' => 'normal', 'style' => 'default',
));

// ============================================
// ROOMS PAGE
// ============================================
acf_add_local_field_group(array(
    'key' => 'group_rooms',
    'title' => 'Rooms Page Sections',
    'fields' => array(
        array('key' => 'field_tab_rooms_hero', 'label' => 'Hero Section', 'type' => 'tab'),
        array('key' => 'field_rooms_tagline', 'label' => 'Tagline', 'name' => 'rooms_hero_tagline', 'type' => 'text', 'default_value' => 'Accommodation'),
        array('key' => 'field_rooms_title', 'label' => 'Title', 'name' => 'rooms_hero_title', 'type' => 'text', 'default_value' => 'Our Rooms'),
        array('key' => 'field_rooms_subtitle', 'label' => 'Subtitle', 'name' => 'rooms_hero_subtitle', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Each of our 45 ensuite rooms offers a unique blend of comfort and coastal charm, with the majority featuring stunning sea views across the Exe estuary.'),

        array('key' => 'field_tab_rooms_inc', 'label' => 'Every Stay Includes', 'type' => 'tab'),
        array('key' => 'field_rooms_inc_tagline', 'label' => 'Section Tagline', 'name' => 'rooms_inc_tagline', 'type' => 'text', 'default_value' => 'Included'),
        array('key' => 'field_rooms_inc_title', 'label' => 'Section Title', 'name' => 'rooms_inc_title', 'type' => 'text', 'default_value' => 'Every Stay Includes'),
        array('key' => 'field_rooms_inc1_t', 'label' => 'Item 1 Title', 'name' => 'rooms_inc1_title', 'type' => 'text', 'default_value' => 'Full English Breakfast'),
        array('key' => 'field_rooms_inc1_d', 'label' => 'Item 1 Description', 'name' => 'rooms_inc1_desc', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Start each day with our delicious full English breakfast, served fresh from 7:30am to 9:30am.'),
        array('key' => 'field_rooms_inc2_t', 'label' => 'Item 2 Title', 'name' => 'rooms_inc2_title', 'type' => 'text', 'default_value' => 'High-Speed WiFi'),
        array('key' => 'field_rooms_inc2_d', 'label' => 'Item 2 Description', 'name' => 'rooms_inc2_desc', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Stay connected with complimentary high-speed WiFi throughout the hotel.'),
        array('key' => 'field_rooms_inc3_t', 'label' => 'Item 3 Title', 'name' => 'rooms_inc3_title', 'type' => 'text', 'default_value' => 'Free Parking'),
        array('key' => 'field_rooms_inc3_d', 'label' => 'Item 3 Description', 'name' => 'rooms_inc3_desc', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Enjoy complimentary on-site parking, subject to availability.'),
        array('key' => 'field_rooms_inc4_t', 'label' => 'Item 4 Title', 'name' => 'rooms_inc4_title', 'type' => 'text', 'default_value' => 'Lift Access'),
        array('key' => 'field_rooms_inc4_d', 'label' => 'Item 4 Description', 'name' => 'rooms_inc4_desc', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Easy access to all floors with our passenger lift.'),
    ),
    'location' => array(array(array('param' => 'page_template', 'operator' => '==', 'value' => 'page-rooms.php'))),
    'menu_order' => 0, 'position' => 'normal', 'style' => 'default',
));

// ============================================
// ACCESSIBILITY PAGE
// ============================================
acf_add_local_field_group(array(
    'key' => 'group_accessibility',
    'title' => 'Accessibility Page Content',
    'fields' => array(
        array('key' => 'field_acc_title', 'label' => 'Page Title', 'name' => 'acc_title', 'type' => 'text', 'default_value' => 'Accessibility'),
        array('key' => 'field_acc_content', 'label' => 'Page Content', 'name' => 'acc_content', 'type' => 'wysiwyg', 'tabs' => 'all', 'toolbar' => 'full', 'media_upload' => 0, 'instructions' => 'Full page content with headings, paragraphs and lists.'),
    ),
    'location' => array(array(array('param' => 'page_template', 'operator' => '==', 'value' => 'page-accessibility.php'))),
    'menu_order' => 0, 'position' => 'normal', 'style' => 'default',
));

// ============================================
// TERMS & CONDITIONS PAGE
// ============================================
acf_add_local_field_group(array(
    'key' => 'group_terms',
    'title' => 'Terms & Conditions Page Content',
    'fields' => array(
        array('key' => 'field_terms_title', 'label' => 'Page Title', 'name' => 'terms_title', 'type' => 'text', 'default_value' => 'Terms & Conditions'),
        array('key' => 'field_terms_content', 'label' => 'Page Content', 'name' => 'terms_content', 'type' => 'wysiwyg', 'tabs' => 'all', 'toolbar' => 'full', 'media_upload' => 0, 'instructions' => 'Full page content with headings, paragraphs and lists.'),
    ),
    'location' => array(array(array('param' => 'page_template', 'operator' => '==', 'value' => 'page-terms-conditions.php'))),
    'menu_order' => 0, 'position' => 'normal', 'style' => 'default',
));

// ============================================
// PRIVACY POLICY PAGE
// ============================================
acf_add_local_field_group(array(
    'key' => 'group_privacy',
    'title' => 'Privacy Policy Page Content',
    'fields' => array(
        array('key' => 'field_privacy_title', 'label' => 'Page Title', 'name' => 'privacy_title', 'type' => 'text', 'default_value' => 'Privacy Policy'),
        array('key' => 'field_privacy_content', 'label' => 'Page Content', 'name' => 'privacy_content', 'type' => 'wysiwyg', 'tabs' => 'all', 'toolbar' => 'full', 'media_upload' => 0, 'instructions' => 'Full page content with headings, paragraphs and lists.'),
    ),
    'location' => array(array(array('param' => 'page_template', 'operator' => '==', 'value' => 'page-privacy-policy.php'))),
    'menu_order' => 0, 'position' => 'normal', 'style' => 'default',
));
