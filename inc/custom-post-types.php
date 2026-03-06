<?php
/**
 * Custom Post Types for Ashton Court Hotel
 *
 * @package Ashton_Court
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Register Custom Post Types
 */
function ashton_register_post_types() {
    
    // Rooms Post Type
    register_post_type('room', array(
        'labels' => array(
            'name'               => __('Rooms', 'ashton-court'),
            'singular_name'      => __('Room', 'ashton-court'),
            'add_new'            => __('Add New Room', 'ashton-court'),
            'add_new_item'       => __('Add New Room', 'ashton-court'),
            'edit_item'          => __('Edit Room', 'ashton-court'),
            'new_item'           => __('New Room', 'ashton-court'),
            'view_item'          => __('View Room', 'ashton-court'),
            'search_items'       => __('Search Rooms', 'ashton-court'),
            'not_found'          => __('No rooms found', 'ashton-court'),
            'not_found_in_trash' => __('No rooms found in Trash', 'ashton-court'),
            'menu_name'          => __('Rooms', 'ashton-court'),
        ),
        'public'             => true,
        'has_archive'        => true,
        'rewrite'            => array('slug' => 'rooms'),
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'menu_icon'          => 'dashicons-building',
        'show_in_rest'       => true,
    ));
    
    // Testimonials Post Type
    register_post_type('testimonial', array(
        'labels' => array(
            'name'               => __('Testimonials', 'ashton-court'),
            'singular_name'      => __('Testimonial', 'ashton-court'),
            'add_new'            => __('Add New Testimonial', 'ashton-court'),
            'add_new_item'       => __('Add New Testimonial', 'ashton-court'),
            'edit_item'          => __('Edit Testimonial', 'ashton-court'),
            'new_item'           => __('New Testimonial', 'ashton-court'),
            'view_item'          => __('View Testimonial', 'ashton-court'),
            'search_items'       => __('Search Testimonials', 'ashton-court'),
            'not_found'          => __('No testimonials found', 'ashton-court'),
            'not_found_in_trash' => __('No testimonials found in Trash', 'ashton-court'),
            'menu_name'          => __('Testimonials', 'ashton-court'),
        ),
        'public'             => true,
        'has_archive'        => false,
        'supports'           => array('title', 'editor', 'thumbnail'),
        'menu_icon'          => 'dashicons-format-quote',
        'show_in_rest'       => true,
    ));
    
    // Team/Staff Post Type
    register_post_type('team', array(
        'labels' => array(
            'name'               => __('Team', 'ashton-court'),
            'singular_name'      => __('Team Member', 'ashton-court'),
            'add_new'            => __('Add Team Member', 'ashton-court'),
            'add_new_item'       => __('Add New Team Member', 'ashton-court'),
            'edit_item'          => __('Edit Team Member', 'ashton-court'),
            'new_item'           => __('New Team Member', 'ashton-court'),
            'view_item'          => __('View Team Member', 'ashton-court'),
            'search_items'       => __('Search Team', 'ashton-court'),
            'not_found'          => __('No team members found', 'ashton-court'),
            'not_found_in_trash' => __('No team members found in Trash', 'ashton-court'),
            'menu_name'          => __('Team', 'ashton-court'),
        ),
        'public'             => true,
        'has_archive'        => false,
        'supports'           => array('title', 'editor', 'thumbnail'),
        'menu_icon'          => 'dashicons-groups',
        'show_in_rest'       => true,
    ));
    
    // Events/Functions Post Type
    register_post_type('event', array(
        'labels' => array(
            'name'               => __('Events', 'ashton-court'),
            'singular_name'      => __('Event', 'ashton-court'),
            'add_new'            => __('Add New Event', 'ashton-court'),
            'add_new_item'       => __('Add New Event', 'ashton-court'),
            'edit_item'          => __('Edit Event', 'ashton-court'),
            'new_item'           => __('New Event', 'ashton-court'),
            'view_item'          => __('View Event', 'ashton-court'),
            'search_items'       => __('Search Events', 'ashton-court'),
            'not_found'          => __('No events found', 'ashton-court'),
            'not_found_in_trash' => __('No events found in Trash', 'ashton-court'),
            'menu_name'          => __('Events', 'ashton-court'),
        ),
        'public'             => true,
        'has_archive'        => true,
        'rewrite'            => array('slug' => 'events'),
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon'          => 'dashicons-calendar-alt',
        'show_in_rest'       => true,
    ));
}
add_action('init', 'ashton_register_post_types');

/**
 * Register Custom Taxonomies
 */
function ashton_register_taxonomies() {
    
    // Room Type Taxonomy
    register_taxonomy('room_type', 'room', array(
        'labels' => array(
            'name'              => __('Room Types', 'ashton-court'),
            'singular_name'     => __('Room Type', 'ashton-court'),
            'search_items'      => __('Search Room Types', 'ashton-court'),
            'all_items'         => __('All Room Types', 'ashton-court'),
            'edit_item'         => __('Edit Room Type', 'ashton-court'),
            'update_item'       => __('Update Room Type', 'ashton-court'),
            'add_new_item'      => __('Add New Room Type', 'ashton-court'),
            'new_item_name'     => __('New Room Type Name', 'ashton-court'),
            'menu_name'         => __('Room Types', 'ashton-court'),
        ),
        'hierarchical'      => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'rewrite'           => array('slug' => 'room-type'),
        'show_in_rest'      => true,
    ));
    
    // Room Amenity Taxonomy
    register_taxonomy('room_amenity', 'room', array(
        'labels' => array(
            'name'              => __('Amenities', 'ashton-court'),
            'singular_name'     => __('Amenity', 'ashton-court'),
            'search_items'      => __('Search Amenities', 'ashton-court'),
            'all_items'         => __('All Amenities', 'ashton-court'),
            'edit_item'         => __('Edit Amenity', 'ashton-court'),
            'update_item'       => __('Update Amenity', 'ashton-court'),
            'add_new_item'      => __('Add New Amenity', 'ashton-court'),
            'new_item_name'     => __('New Amenity Name', 'ashton-court'),
            'menu_name'         => __('Amenities', 'ashton-court'),
        ),
        'hierarchical'      => false,
        'show_ui'           => true,
        'show_admin_column' => true,
        'rewrite'           => array('slug' => 'amenity'),
        'show_in_rest'      => true,
    ));
    
    // Event Type Taxonomy
    register_taxonomy('event_type', 'event', array(
        'labels' => array(
            'name'              => __('Event Types', 'ashton-court'),
            'singular_name'     => __('Event Type', 'ashton-court'),
            'search_items'      => __('Search Event Types', 'ashton-court'),
            'all_items'         => __('All Event Types', 'ashton-court'),
            'edit_item'         => __('Edit Event Type', 'ashton-court'),
            'update_item'       => __('Update Event Type', 'ashton-court'),
            'add_new_item'      => __('Add New Event Type', 'ashton-court'),
            'new_item_name'     => __('New Event Type Name', 'ashton-court'),
            'menu_name'         => __('Event Types', 'ashton-court'),
        ),
        'hierarchical'      => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'rewrite'           => array('slug' => 'event-type'),
        'show_in_rest'      => true,
    ));
}
add_action('init', 'ashton_register_taxonomies');

/**
 * Add Custom Meta Boxes for Rooms
 */
function ashton_room_meta_boxes() {
    add_meta_box(
        'room_details',
        __('Room Details', 'ashton-court'),
        'ashton_room_details_callback',
        'room',
        'normal',
        'high'
    );
    
    add_meta_box(
        'room_gallery',
        __('Room Gallery', 'ashton-court'),
        'ashton_room_gallery_callback',
        'room',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'ashton_room_meta_boxes');

/**
 * Room Details Meta Box Callback
 */
function ashton_room_details_callback($post) {
    wp_nonce_field('ashton_room_details', 'ashton_room_details_nonce');
    
    $price = get_post_meta($post->ID, '_room_price', true);
    $size = get_post_meta($post->ID, '_room_size', true);
    $bed_type = get_post_meta($post->ID, '_room_bed_type', true);
    $max_guests = get_post_meta($post->ID, '_room_max_guests', true);
    $view = get_post_meta($post->ID, '_room_view', true);
    $has_balcony = get_post_meta($post->ID, '_room_has_balcony', true);
    ?>
    <div class="ashton-meta-box">
        <p>
            <label for="room_price"><strong><?php _e('Price Per Night (£)', 'ashton-court'); ?></strong></label><br>
            <input type="number" id="room_price" name="room_price" value="<?php echo esc_attr($price); ?>" min="0" step="0.01">
        </p>
        <p>
            <label for="room_size"><strong><?php _e('Room Size (sq m)', 'ashton-court'); ?></strong></label><br>
            <input type="number" id="room_size" name="room_size" value="<?php echo esc_attr($size); ?>" min="0">
        </p>
        <p>
            <label for="room_bed_type"><strong><?php _e('Bed Type', 'ashton-court'); ?></strong></label><br>
            <select id="room_bed_type" name="room_bed_type">
                <option value=""><?php _e('Select Bed Type', 'ashton-court'); ?></option>
                <option value="single" <?php selected($bed_type, 'single'); ?>><?php _e('Single', 'ashton-court'); ?></option>
                <option value="double" <?php selected($bed_type, 'double'); ?>><?php _e('Double', 'ashton-court'); ?></option>
                <option value="twin" <?php selected($bed_type, 'twin'); ?>><?php _e('Twin', 'ashton-court'); ?></option>
                <option value="king" <?php selected($bed_type, 'king'); ?>><?php _e('King', 'ashton-court'); ?></option>
                <option value="super-king" <?php selected($bed_type, 'super-king'); ?>><?php _e('Super King', 'ashton-court'); ?></option>
            </select>
        </p>
        <p>
            <label for="room_max_guests"><strong><?php _e('Maximum Guests', 'ashton-court'); ?></strong></label><br>
            <input type="number" id="room_max_guests" name="room_max_guests" value="<?php echo esc_attr($max_guests); ?>" min="1" max="10">
        </p>
        <p>
            <label for="room_view"><strong><?php _e('View', 'ashton-court'); ?></strong></label><br>
            <select id="room_view" name="room_view">
                <option value=""><?php _e('Select View', 'ashton-court'); ?></option>
                <option value="sea" <?php selected($view, 'sea'); ?>><?php _e('Sea View', 'ashton-court'); ?></option>
                <option value="garden" <?php selected($view, 'garden'); ?>><?php _e('Garden View', 'ashton-court'); ?></option>
                <option value="town" <?php selected($view, 'town'); ?>><?php _e('Town View', 'ashton-court'); ?></option>
                <option value="estuary" <?php selected($view, 'estuary'); ?>><?php _e('Estuary View', 'ashton-court'); ?></option>
            </select>
        </p>
        <p>
            <label for="room_has_balcony">
                <input type="checkbox" id="room_has_balcony" name="room_has_balcony" value="1" <?php checked($has_balcony, '1'); ?>>
                <strong><?php _e('Has Balcony', 'ashton-court'); ?></strong>
            </label>
        </p>
    </div>
    <?php
}

/**
 * Room Gallery Meta Box Callback
 */
function ashton_room_gallery_callback($post) {
    wp_nonce_field('ashton_room_gallery', 'ashton_room_gallery_nonce');
    
    $gallery = get_post_meta($post->ID, '_room_gallery', true);
    $gallery_ids = $gallery ? explode(',', $gallery) : array();
    ?>
    <div class="ashton-gallery-meta-box">
        <p><?php _e('Add images to the room gallery. These will be displayed in the room detail page.', 'ashton-court'); ?></p>
        <div id="room-gallery-container">
            <?php foreach ($gallery_ids as $id) : 
                if ($id) :
                    $image = wp_get_attachment_image_src($id, 'thumbnail');
                    if ($image) : ?>
                        <div class="gallery-image" data-id="<?php echo esc_attr($id); ?>">
                            <img src="<?php echo esc_url($image[0]); ?>" alt="">
                            <button type="button" class="remove-image">&times;</button>
                        </div>
                    <?php endif;
                endif;
            endforeach; ?>
        </div>
        <input type="hidden" id="room_gallery" name="room_gallery" value="<?php echo esc_attr($gallery); ?>">
        <button type="button" id="add-gallery-images" class="button"><?php _e('Add Images', 'ashton-court'); ?></button>
    </div>
    <style>
        .ashton-gallery-meta-box #room-gallery-container {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 15px;
        }
        .ashton-gallery-meta-box .gallery-image {
            position: relative;
            width: 100px;
            height: 100px;
        }
        .ashton-gallery-meta-box .gallery-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 4px;
        }
        .ashton-gallery-meta-box .remove-image {
            position: absolute;
            top: -5px;
            right: -5px;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: #dc3545;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 14px;
            line-height: 1;
        }
    </style>
    <script>
        jQuery(document).ready(function($) {
            var frame;
            
            $('#add-gallery-images').on('click', function(e) {
                e.preventDefault();
                
                if (frame) {
                    frame.open();
                    return;
                }
                
                frame = wp.media({
                    title: '<?php _e('Select Gallery Images', 'ashton-court'); ?>',
                    button: { text: '<?php _e('Add to Gallery', 'ashton-court'); ?>' },
                    multiple: true
                });
                
                frame.on('select', function() {
                    var attachments = frame.state().get('selection').toJSON();
                    var ids = $('#room_gallery').val() ? $('#room_gallery').val().split(',') : [];
                    
                    attachments.forEach(function(attachment) {
                        if (ids.indexOf(attachment.id.toString()) === -1) {
                            ids.push(attachment.id);
                            var thumb = attachment.sizes.thumbnail ? attachment.sizes.thumbnail.url : attachment.url;
                            var $div = $('<div>', { 'class': 'gallery-image', 'data-id': attachment.id });
                            var $img = $('<img>', { src: thumb, alt: '' });
                            var $btn = $('<button>', { type: 'button', 'class': 'remove-image', html: '&times;' });
                            $div.append($img).append($btn);
                            $('#room-gallery-container').append($div);
                        }
                    });
                    
                    $('#room_gallery').val(ids.join(','));
                });
                
                frame.open();
            });
            
            $(document).on('click', '.remove-image', function() {
                var $parent = $(this).parent();
                var id = $parent.data('id').toString();
                var ids = $('#room_gallery').val().split(',').filter(function(i) {
                    return i !== id;
                });
                $('#room_gallery').val(ids.join(','));
                $parent.remove();
            });
        });
    </script>
    <?php
}

/**
 * Save Room Meta
 */
function ashton_save_room_meta($post_id) {
    // Check nonces
    if (!isset($_POST['ashton_room_details_nonce']) || 
        !wp_verify_nonce($_POST['ashton_room_details_nonce'], 'ashton_room_details')) {
        return;
    }
    
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    // Save room details
    if (isset($_POST['room_price'])) {
        update_post_meta($post_id, '_room_price', sanitize_text_field($_POST['room_price']));
    }
    if (isset($_POST['room_size'])) {
        update_post_meta($post_id, '_room_size', sanitize_text_field($_POST['room_size']));
    }
    if (isset($_POST['room_bed_type'])) {
        update_post_meta($post_id, '_room_bed_type', sanitize_text_field($_POST['room_bed_type']));
    }
    if (isset($_POST['room_max_guests'])) {
        update_post_meta($post_id, '_room_max_guests', sanitize_text_field($_POST['room_max_guests']));
    }
    if (isset($_POST['room_view'])) {
        update_post_meta($post_id, '_room_view', sanitize_text_field($_POST['room_view']));
    }
    
    $has_balcony = isset($_POST['room_has_balcony']) ? '1' : '0';
    update_post_meta($post_id, '_room_has_balcony', $has_balcony);
    
    // Save gallery
    if (isset($_POST['room_gallery'])) {
        update_post_meta($post_id, '_room_gallery', sanitize_text_field($_POST['room_gallery']));
    }
}
add_action('save_post_room', 'ashton_save_room_meta');

/**
 * Add Testimonial Meta Box
 */
function ashton_testimonial_meta_boxes() {
    add_meta_box(
        'testimonial_details',
        __('Guest Details', 'ashton-court'),
        'ashton_testimonial_details_callback',
        'testimonial',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'ashton_testimonial_meta_boxes');

/**
 * Testimonial Details Meta Box Callback
 */
function ashton_testimonial_details_callback($post) {
    wp_nonce_field('ashton_testimonial_details', 'ashton_testimonial_details_nonce');
    
    $guest_location = get_post_meta($post->ID, '_guest_location', true);
    $stay_date = get_post_meta($post->ID, '_stay_date', true);
    $rating = get_post_meta($post->ID, '_rating', true);
    ?>
    <div class="ashton-meta-box">
        <p>
            <label for="guest_location"><strong><?php _e('Guest Location', 'ashton-court'); ?></strong></label><br>
            <input type="text" id="guest_location" name="guest_location" value="<?php echo esc_attr($guest_location); ?>" class="regular-text" placeholder="e.g., London, UK">
        </p>
        <p>
            <label for="stay_date"><strong><?php _e('Stay Date', 'ashton-court'); ?></strong></label><br>
            <input type="month" id="stay_date" name="stay_date" value="<?php echo esc_attr($stay_date); ?>">
        </p>
        <p>
            <label for="rating"><strong><?php _e('Rating (1-5)', 'ashton-court'); ?></strong></label><br>
            <select id="rating" name="rating">
                <option value="5" <?php selected($rating, '5'); ?>>★★★★★ (5)</option>
                <option value="4" <?php selected($rating, '4'); ?>>★★★★☆ (4)</option>
                <option value="3" <?php selected($rating, '3'); ?>>★★★☆☆ (3)</option>
                <option value="2" <?php selected($rating, '2'); ?>>★★☆☆☆ (2)</option>
                <option value="1" <?php selected($rating, '1'); ?>>★☆☆☆☆ (1)</option>
            </select>
        </p>
    </div>
    <?php
}

/**
 * Save Testimonial Meta
 */
function ashton_save_testimonial_meta($post_id) {
    if (!isset($_POST['ashton_testimonial_details_nonce']) || 
        !wp_verify_nonce($_POST['ashton_testimonial_details_nonce'], 'ashton_testimonial_details')) {
        return;
    }
    
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    if (isset($_POST['guest_location'])) {
        update_post_meta($post_id, '_guest_location', sanitize_text_field($_POST['guest_location']));
    }
    if (isset($_POST['stay_date'])) {
        update_post_meta($post_id, '_stay_date', sanitize_text_field($_POST['stay_date']));
    }
    if (isset($_POST['rating'])) {
        $rating = absint($_POST['rating']);
        $rating = max(1, min(5, $rating));
        update_post_meta($post_id, '_rating', $rating);
    }
}
add_action('save_post_testimonial', 'ashton_save_testimonial_meta');
