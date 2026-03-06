<?php
/**
 * Booking System Functions
 *
 * @package Ashton_Court
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Get Available Room Types for Booking Form
 */
function ashton_get_room_types_for_booking() {
    $room_types = get_terms(array(
        'taxonomy'   => 'room_type',
        'hide_empty' => true,
    ));
    
    if (is_wp_error($room_types) || empty($room_types)) {
        // Return default room types if none are set
        return array(
            'standard'    => __('Standard Room', 'ashton-court'),
            'superior'    => __('Superior Room', 'ashton-court'),
            'deluxe'      => __('Deluxe Room', 'ashton-court'),
            'sea-view'    => __('Sea View Room', 'ashton-court'),
            'family'      => __('Family Room', 'ashton-court'),
            'suite'       => __('Suite', 'ashton-court'),
        );
    }
    
    $types = array();
    foreach ($room_types as $type) {
        $types[$type->slug] = $type->name;
    }
    
    return $types;
}

/**
 * Get Rooms for Booking
 */
function ashton_get_rooms_for_booking() {
    $rooms = get_posts(array(
        'post_type'      => 'room',
        'posts_per_page' => -1,
        'orderby'        => 'menu_order',
        'order'          => 'ASC',
    ));
    
    $room_data = array();
    
    foreach ($rooms as $room) {
        $price = get_post_meta($room->ID, '_room_price', true);
        $max_guests = get_post_meta($room->ID, '_room_max_guests', true);
        $view = get_post_meta($room->ID, '_room_view', true);
        
        $room_data[] = array(
            'id'         => $room->ID,
            'title'      => $room->post_title,
            'price'      => $price ? floatval($price) : 70,
            'max_guests' => $max_guests ? intval($max_guests) : 2,
            'view'       => $view,
            'thumbnail'  => get_the_post_thumbnail_url($room->ID, 'room-card'),
        );
    }
    
    return $room_data;
}

/**
 * Calculate Booking Price
 */
function ashton_calculate_booking_price($room_id, $check_in, $check_out, $guests) {
    $base_price = get_post_meta($room_id, '_room_price', true);
    $base_price = $base_price ? floatval($base_price) : 70;
    
    // Calculate number of nights
    $check_in_date = new DateTime($check_in);
    $check_out_date = new DateTime($check_out);
    $nights = $check_in_date->diff($check_out_date)->days;
    
    if ($nights < 1) {
        $nights = 1;
    }
    
    // Calculate total
    $total = $base_price * $nights;
    
    // Add extra guest fee if applicable
    $max_guests = get_post_meta($room_id, '_room_max_guests', true);
    $max_guests = $max_guests ? intval($max_guests) : 2;
    
    if ($guests > 2 && $guests <= $max_guests) {
        $extra_guests = $guests - 2;
        $extra_guest_fee = 20 * $extra_guests * $nights;
        $total += $extra_guest_fee;
    }
    
    return array(
        'base_price'       => $base_price,
        'nights'           => $nights,
        'guests'           => $guests,
        'extra_guest_fee'  => isset($extra_guest_fee) ? $extra_guest_fee : 0,
        'total'            => $total,
    );
}

/**
 * Render Booking Form
 */
function ashton_render_booking_form($args = array()) {
    $defaults = array(
        'style'      => 'modal', // 'modal', 'inline', 'compact'
        'show_rooms' => true,
        'class'      => '',
    );
    
    $args = wp_parse_args($args, $defaults);
    $room_types = ashton_get_room_types_for_booking();
    
    ob_start();
    ?>
    <form class="ashton-booking-form <?php echo esc_attr($args['style']); ?> <?php echo esc_attr($args['class']); ?>" data-form="booking">
        <div class="booking-form-grid">
            <div class="form-group">
                <label for="booking-check-in"><?php _e('Check In', 'ashton-court'); ?></label>
                <input type="date" id="booking-check-in" name="check_in" required min="<?php echo esc_attr(date('Y-m-d')); ?>">
            </div>
            
            <div class="form-group">
                <label for="booking-check-out"><?php _e('Check Out', 'ashton-court'); ?></label>
                <input type="date" id="booking-check-out" name="check_out" required min="<?php echo esc_attr(date('Y-m-d', strtotime('+1 day'))); ?>">
            </div>
            
            <div class="form-group">
                <label for="booking-guests"><?php _e('Guests', 'ashton-court'); ?></label>
                <select id="booking-guests" name="guests" required>
                    <option value="1">1 <?php _e('Guest', 'ashton-court'); ?></option>
                    <option value="2" selected>2 <?php _e('Guests', 'ashton-court'); ?></option>
                    <option value="3">3 <?php _e('Guests', 'ashton-court'); ?></option>
                    <option value="4">4 <?php _e('Guests', 'ashton-court'); ?></option>
                </select>
            </div>
            
            <?php if ($args['show_rooms']) : ?>
            <div class="form-group">
                <label for="booking-room-type"><?php _e('Room Type', 'ashton-court'); ?></label>
                <select id="booking-room-type" name="room_type">
                    <option value=""><?php _e('Any Room', 'ashton-court'); ?></option>
                    <?php foreach ($room_types as $slug => $name) : ?>
                        <option value="<?php echo esc_attr($slug); ?>"><?php echo esc_html($name); ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <?php endif; ?>
        </div>
        
        <div class="booking-form-details" style="display: none;">
            <div class="form-row">
                <div class="form-group">
                    <label for="booking-name"><?php _e('Full Name', 'ashton-court'); ?></label>
                    <input type="text" id="booking-name" name="name" required>
                </div>
                
                <div class="form-group">
                    <label for="booking-email"><?php _e('Email', 'ashton-court'); ?></label>
                    <input type="email" id="booking-email" name="email" required>
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="booking-phone"><?php _e('Phone', 'ashton-court'); ?></label>
                    <input type="tel" id="booking-phone" name="phone" required>
                </div>
            </div>
            
            <div class="form-group">
                <label for="booking-requests"><?php _e('Special Requests', 'ashton-court'); ?></label>
                <textarea id="booking-requests" name="special_requests" rows="3" placeholder="<?php _e('Any special requirements or requests...', 'ashton-court'); ?>"></textarea>
            </div>
        </div>
        
        <div class="booking-form-actions">
            <button type="button" class="btn btn-check-availability"><?php _e('Check Availability', 'ashton-court'); ?></button>
            <button type="submit" class="btn btn-primary btn-book-now" style="display: none;"><?php _e('Complete Booking', 'ashton-court'); ?></button>
        </div>
        
        <div class="booking-form-message"></div>
    </form>
    <?php
    return ob_get_clean();
}

/**
 * Booking Form Shortcode
 */
function ashton_booking_form_shortcode($atts) {
    $atts = shortcode_atts(array(
        'style'      => 'inline',
        'show_rooms' => 'true',
        'class'      => '',
    ), $atts, 'ashton_booking');
    
    return ashton_render_booking_form(array(
        'style'      => $atts['style'],
        'show_rooms' => $atts['show_rooms'] === 'true',
        'class'      => $atts['class'],
    ));
}
add_shortcode('ashton_booking', 'ashton_booking_form_shortcode');

/**
 * Check Room Availability (AJAX)
 */
function ashton_check_availability() {
    check_ajax_referer('ashton_nonce', 'nonce');
    
    $check_in = sanitize_text_field($_POST['check_in']);
    $check_out = sanitize_text_field($_POST['check_out']);
    $guests = intval($_POST['guests']);
    $room_type = sanitize_text_field($_POST['room_type']);
    
    // Validate dates
    $check_in_date = new DateTime($check_in);
    $check_out_date = new DateTime($check_out);
    $today = new DateTime();
    
    if ($check_in_date < $today) {
        wp_send_json_error(array('message' => __('Check-in date cannot be in the past.', 'ashton-court')));
    }
    
    if ($check_out_date <= $check_in_date) {
        wp_send_json_error(array('message' => __('Check-out must be after check-in.', 'ashton-court')));
    }
    
    $available_rooms = ashton_get_rooms_for_booking();
    
    if (!empty($room_type)) {
        // Filter by room type
        $filtered_rooms = array();
        foreach ($available_rooms as $room) {
            $room_types = wp_get_post_terms($room['id'], 'room_type', array('fields' => 'slugs'));
            if (in_array($room_type, $room_types)) {
                $filtered_rooms[] = $room;
            }
        }
        $available_rooms = $filtered_rooms;
    }
    
    // Filter by guest capacity
    $available_rooms = array_filter($available_rooms, function($room) use ($guests) {
        return $room['max_guests'] >= $guests;
    });
    
    if (empty($available_rooms)) {
        wp_send_json_error(array('message' => __('No rooms available for your selected criteria. Please try different dates or contact us directly.', 'ashton-court')));
    }
    
    wp_send_json_success(array(
        'message' => sprintf(__('%d room(s) available for your dates.', 'ashton-court'), count($available_rooms)),
        'rooms'   => array_values($available_rooms),
    ));
}
add_action('wp_ajax_ashton_check_availability', 'ashton_check_availability');
add_action('wp_ajax_nopriv_ashton_check_availability', 'ashton_check_availability');
