<?php
if (!defined('ABSPATH')) exit;
/**
 * Template Name: Rooms Page
 * 
 * @package Ashton_Court
 */

get_header();

$acf = function_exists('get_field');
$f = function($name, $default = '') {
    global $acf;
    $v = $acf ? get_post_meta(get_the_ID(), $name, true) : '';
    return $v ?: $default;
};
?>

<div class="container"><?php ashton_breadcrumbs(); ?></div>

<!-- Page Hero -->
<section class="page-hero">
    <div class="page-hero-content" data-animate="fade-up">
        <span class="section-tagline"><?php echo esc_html($f('rooms_hero_tagline', 'Accommodation')); ?></span>
        <h1 class="page-hero-title"><?php echo esc_html($f('rooms_hero_title', 'Our Rooms')); ?></h1>
        <p class="page-hero-subtitle"><?php echo esc_html($f('rooms_hero_subtitle', 'Each of our 45 ensuite rooms offers a unique blend of comfort and coastal charm, with the majority featuring stunning sea views across the Exe estuary.')); ?></p>
    </div>
</section>

<!-- Room Filter -->
<section class="room-filter section-padding">
    <div class="container">
        <div class="filter-bar" data-animate="fade-up">
            <div class="filter-group">
                <label for="filter-view">View</label>
                <select id="filter-view" name="view">
                    <option value="">All Views</option>
                    <option value="sea">Sea View</option>
                    <option value="garden">Garden View</option>
                    <option value="estuary">Estuary View</option>
                    <option value="town">Town View</option>
                </select>
            </div>
            
            <div class="filter-group">
                <label for="filter-type">Room Type</label>
                <select id="filter-type" name="type">
                    <option value="">All Types</option>
                    <?php
                    $room_types = get_terms(array(
                        'taxonomy' => 'room_type',
                        'hide_empty' => true,
                    ));
                    if (!is_wp_error($room_types)) :
                        foreach ($room_types as $type) :
                    ?>
                        <option value="<?php echo esc_attr($type->slug); ?>"><?php echo esc_html($type->name); ?></option>
                    <?php
                        endforeach;
                    endif;
                    ?>
                </select>
            </div>
            
            <div class="filter-group">
                <label for="filter-guests">Guests</label>
                <select id="filter-guests" name="guests">
                    <option value="">Any</option>
                    <option value="1">1 Guest</option>
                    <option value="2">2 Guests</option>
                    <option value="3">3 Guests</option>
                    <option value="4">4+ Guests</option>
                </select>
            </div>
            
            <button type="button" class="btn btn-secondary filter-reset" style="display: none;">
                Clear Filters
            </button>
        </div>
    </div>
</section>

<!-- Rooms Grid -->
<section class="rooms-archive section-padding bg-light">
    <div class="container">
        <div class="rooms-grid-large">
            <?php
            $rooms = new WP_Query(array(
                'post_type'      => 'room',
                'posts_per_page' => -1,
                'orderby'        => 'menu_order',
                'order'          => 'ASC',
            ));
            
            if ($rooms->have_posts()) :
                $delay = 0;
                while ($rooms->have_posts()) : $rooms->the_post();
                    $price = get_post_meta(get_the_ID(), '_room_price', true);
                    $size = get_post_meta(get_the_ID(), '_room_size', true);
                    $view = get_post_meta(get_the_ID(), '_room_view', true);
                    $bed_type = get_post_meta(get_the_ID(), '_room_bed_type', true);
                    $max_guests = get_post_meta(get_the_ID(), '_room_max_guests', true);
                    $has_balcony = get_post_meta(get_the_ID(), '_room_has_balcony', true);
                    $amenities = wp_get_post_terms(get_the_ID(), 'room_amenity', array('fields' => 'names'));
            ?>
                <article class="room-card-large" 
                         data-animate="fade-up" 
                         data-delay="<?php echo esc_attr($delay); ?>"
                         data-view="<?php echo esc_attr($view); ?>"
                         data-guests="<?php echo esc_attr($max_guests); ?>">
                    
                    <div class="room-card-image-large">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('room-gallery'); ?>
                        <?php else : ?>
                            <div class="image-fallback">
                                <span><?php the_title(); ?></span>
                            </div>
                        <?php endif; ?>
                        
                        <?php if ($view) : ?>
                            <span class="room-badge"><?php echo esc_html(ucfirst($view)); ?> View</span>
                        <?php endif; ?>
                    </div>
                    
                    <div class="room-card-content-large">
                        <div class="room-card-header">
                            <h2 class="room-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            <div class="room-price-large">
                                <span class="price-from">From</span>
                                <span class="price-amount">£<?php echo $price ? esc_html($price) : '70'; ?></span>
                                <span class="price-period">/ night</span>
                            </div>
                        </div>
                        
                        <div class="room-specs">
                            <?php if ($size) : ?>
                                <div class="spec-item">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                        <rect x="3" y="3" width="18" height="18" rx="2"/>
                                    </svg>
                                    <span><?php echo esc_html($size); ?> m²</span>
                                </div>
                            <?php endif; ?>
                            
                            <?php if ($bed_type) : ?>
                                <div class="spec-item">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                        <path d="M2 4v16M22 4v16M6 12h12M6 12c0-2 1-4 3-4h6c2 0 3 2 3 4"/>
                                        <rect x="2" y="12" width="20" height="6" rx="1"/>
                                    </svg>
                                    <span><?php echo esc_html(ucfirst(str_replace('-', ' ', $bed_type))); ?> Bed</span>
                                </div>
                            <?php endif; ?>
                            
                            <?php if ($max_guests) : ?>
                                <div class="spec-item">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                        <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/>
                                        <circle cx="9" cy="7" r="4"/>
                                        <path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/>
                                    </svg>
                                    <span>Up to <?php echo esc_html($max_guests); ?> guests</span>
                                </div>
                            <?php endif; ?>
                            
                            <?php if ($has_balcony) : ?>
                                <div class="spec-item">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                        <rect x="4" y="10" width="16" height="10" rx="1"/>
                                        <path d="M4 10V6a2 2 0 012-2h12a2 2 0 012 2v4"/>
                                    </svg>
                                    <span>Private Balcony</span>
                                </div>
                            <?php endif; ?>
                        </div>
                        
                        <?php if (has_excerpt()) : ?>
                            <p class="room-description"><?php echo esc_html(get_the_excerpt()); ?></p>
                        <?php endif; ?>
                        
                        <?php if (!empty($amenities) && !is_wp_error($amenities)) : ?>
                            <div class="room-amenities">
                                <?php foreach (array_slice($amenities, 0, 5) as $amenity) : ?>
                                    <span class="amenity-tag"><?php echo esc_html($amenity); ?></span>
                                <?php endforeach; ?>
                                <?php if (count($amenities) > 5) : ?>
                                    <span class="amenity-tag more">+<?php echo esc_html(count($amenities) - 5); ?> more</span>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                        
                        <div class="room-card-actions">
                            <a href="<?php the_permalink(); ?>" class="btn btn-secondary">
                                <span>View Details</span>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <line x1="5" y1="12" x2="19" y2="12"/>
                                    <polyline points="12 5 19 12 12 19"/>
                                </svg>
                            </a>
                            <button type="button" class="btn btn-primary open-booking-modal" data-room="<?php echo get_the_ID(); ?>">
                                <span>Book Now</span>
                            </button>
                        </div>
                    </div>
                </article>
            <?php
                    $delay = min($delay + 100, 400);
                endwhile;
                wp_reset_postdata();
            else :
            ?>
                <?php
                $default_rooms = array(
                    array('name' => 'Standard Double', 'view' => 'Town', 'bed' => 'Double', 'price' => '70', 'size' => '18', 'guests' => '2'),
                    array('name' => 'Superior Sea View', 'view' => 'Sea', 'bed' => 'King', 'price' => '95', 'size' => '22', 'guests' => '2'),
                    array('name' => 'Deluxe Estuary Suite', 'view' => 'Estuary', 'bed' => 'Super King', 'price' => '120', 'size' => '28', 'guests' => '2'),
                    array('name' => 'Family Room', 'view' => 'Sea', 'bed' => 'Double + Twin', 'price' => '110', 'size' => '32', 'guests' => '4'),
                    array('name' => 'Garden View Twin', 'view' => 'Garden', 'bed' => 'Twin', 'price' => '80', 'size' => '20', 'guests' => '2'),
                    array('name' => 'Premium Suite', 'view' => 'Sea', 'bed' => 'Super King', 'price' => '150', 'size' => '35', 'guests' => '2'),
                );
                $delay = 0;
                foreach ($default_rooms as $room) :
                ?>
                <article class="room-card-large" data-animate="fade-up" data-delay="<?php echo esc_attr($delay); ?>">
                    <div class="room-card-image-large">
                        <div class="image-fallback">
                            <span><?php echo esc_html($room['name']); ?></span>
                        </div>
                        <span class="room-badge"><?php echo esc_html($room['view']); ?> View</span>
                    </div>
                    
                    <div class="room-card-content-large">
                        <div class="room-card-header">
                            <h2 class="room-title"><?php echo esc_html($room['name']); ?></h2>
                            <div class="room-price-large">
                                <span class="price-from">From</span>
                                <span class="price-amount">£<?php echo esc_html($room['price']); ?></span>
                                <span class="price-period">/ night</span>
                            </div>
                        </div>
                        
                        <div class="room-specs">
                            <div class="spec-item">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                    <rect x="3" y="3" width="18" height="18" rx="2"/>
                                </svg>
                                <span><?php echo esc_html($room['size']); ?> m²</span>
                            </div>
                            <div class="spec-item">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                    <path d="M2 4v16M22 4v16M6 12h12M6 12c0-2 1-4 3-4h6c2 0 3 2 3 4"/>
                                    <rect x="2" y="12" width="20" height="6" rx="1"/>
                                </svg>
                                <span><?php echo esc_html($room['bed']); ?> Bed</span>
                            </div>
                            <div class="spec-item">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                    <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/>
                                    <circle cx="9" cy="7" r="4"/>
                                </svg>
                                <span>Up to <?php echo esc_html($room['guests']); ?> guests</span>
                            </div>
                        </div>
                        
                        <p class="room-description">Experience coastal comfort with stunning views and modern amenities. Each room features premium bedding, ensuite bathroom, and complimentary WiFi.</p>
                        
                        <div class="room-amenities">
                            <span class="amenity-tag">Free WiFi</span>
                            <span class="amenity-tag">Ensuite</span>
                            <span class="amenity-tag">TV</span>
                            <span class="amenity-tag">Tea/Coffee</span>
                        </div>
                        
                        <div class="room-card-actions">
                            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-secondary">
                                <span>View Details</span>
                            </a>
                            <button type="button" class="btn btn-primary open-booking-modal">
                                <span>Book Now</span>
                            </button>
                        </div>
                    </div>
                </article>
                <?php
                    $delay = min($delay + 100, 400);
                endforeach;
            endif;
            ?>
        </div>
    </div>
</section>

<!-- Room Inclusions -->
<section class="room-inclusions section-padding">
    <div class="container">
        <div class="section-header centered" data-animate="fade-up">
            <span class="section-tagline"><?php echo esc_html($f('rooms_inc_tagline', 'Included')); ?></span>
            <h2 class="section-title"><?php echo esc_html($f('rooms_inc_title', 'Every Stay Includes')); ?></h2>
        </div>
        
        <div class="inclusions-grid">
            <div class="inclusion-item" data-animate="fade-up">
                <div class="inclusion-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1">
                        <path d="M18 8h1a4 4 0 010 8h-1M2 8h16v9a4 4 0 01-4 4H6a4 4 0 01-4-4V8zM6 1v3M10 1v3M14 1v3"/>
                    </svg>
                </div>
                <h3><?php echo esc_html($f('rooms_inc1_title', 'Full English Breakfast')); ?></h3>
                <p><?php echo esc_html($f('rooms_inc1_desc', 'Start each day with our delicious full English breakfast, served fresh from 7:30am to 9:30am.')); ?></p>
            </div>
            
            <div class="inclusion-item" data-animate="fade-up" data-delay="100">
                <div class="inclusion-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1">
                        <path d="M5 12.55a11 11 0 0114.08 0M1.42 9a16 16 0 0121.16 0M8.53 16.11a6 6 0 016.95 0M12 20h.01"/>
                    </svg>
                </div>
                <h3><?php echo esc_html($f('rooms_inc2_title', 'High-Speed WiFi')); ?></h3>
                <p><?php echo esc_html($f('rooms_inc2_desc', 'Stay connected with complimentary high-speed WiFi throughout the hotel.')); ?></p>
            </div>
            
            <div class="inclusion-item" data-animate="fade-up" data-delay="200">
                <div class="inclusion-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1">
                        <rect x="1" y="3" width="15" height="13" rx="2" ry="2"/>
                        <path d="M16 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2"/>
                        <circle cx="5.5" cy="18" r="2"/>
                        <circle cx="18.5" cy="18" r="2"/>
                    </svg>
                </div>
                <h3><?php echo esc_html($f('rooms_inc3_title', 'Free Parking')); ?></h3>
                <p><?php echo esc_html($f('rooms_inc3_desc', 'Enjoy complimentary on-site parking, subject to availability.')); ?></p>
            </div>
            
            <div class="inclusion-item" data-animate="fade-up" data-delay="300">
                <div class="inclusion-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1">
                        <rect x="2" y="7" width="20" height="14" rx="2" ry="2"/>
                        <path d="M16 3v4M8 3v4"/>
                    </svg>
                </div>
                <h3><?php echo esc_html($f('rooms_inc4_title', 'Lift Access')); ?></h3>
                <p><?php echo esc_html($f('rooms_inc4_desc', 'Easy access to all floors with our passenger lift.')); ?></p>
            </div>
        </div>
    </div>
</section>

<style>
/* Room Filter */
.room-filter {
    padding-top: var(--space-2xl);
    padding-bottom: var(--space-2xl);
}

.filter-bar {
    display: flex;
    flex-wrap: wrap;
    gap: var(--space-lg);
    align-items: flex-end;
    justify-content: center;
}

.filter-group {
    display: flex;
    flex-direction: column;
    gap: var(--space-sm);
}

.filter-group label {
    font-size: var(--text-xs);
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    color: var(--color-text-muted);
}

.filter-group select {
    min-width: 160px;
    padding: var(--space-md);
    border: 1px solid var(--color-border);
    border-radius: var(--radius-sm);
    background-color: var(--color-bg);
    font-size: var(--text-sm);
    cursor: pointer;
}

/* Rooms Grid Large */
.rooms-grid-large {
    display: flex;
    flex-direction: column;
    gap: var(--space-3xl);
}

.room-card-large {
    display: grid;
    grid-template-columns: 1fr;
    gap: var(--space-xl);
    background-color: var(--color-bg);
    overflow: hidden;
}

@media (min-width: 768px) {
    .room-card-large {
        grid-template-columns: 1fr 1fr;
    }
    
    .room-card-large:nth-child(even) .room-card-image-large {
        order: 2;
    }
}

.room-card-image-large {
    position: relative;
    aspect-ratio: 4/3;
}

.room-card-image-large img,
.room-card-image-large .image-fallback {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.room-badge {
    position: absolute;
    top: var(--space-lg);
    left: var(--space-lg);
    padding: var(--space-sm) var(--space-md);
    background-color: var(--color-bg);
    font-size: var(--text-xs);
    font-weight: 500;
    letter-spacing: 0.05em;
    text-transform: uppercase;
}

.room-card-content-large {
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding: var(--space-2xl);
}

@media (min-width: 768px) {
    .room-card-content-large {
        padding: var(--space-3xl);
    }
}

.room-card-header {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: flex-start;
    gap: var(--space-md);
    margin-bottom: var(--space-xl);
}

.room-title {
    font-size: var(--text-2xl);
}

.room-title a {
    color: var(--color-text);
}

.room-title a:hover {
    color: var(--color-accent);
}

.room-price-large {
    display: flex;
    align-items: baseline;
    gap: var(--space-xs);
}

.room-specs {
    display: flex;
    flex-wrap: wrap;
    gap: var(--space-lg);
    margin-bottom: var(--space-lg);
}

.spec-item {
    display: flex;
    align-items: center;
    gap: var(--space-sm);
    color: var(--color-text-muted);
    font-size: var(--text-sm);
}

.spec-item svg {
    color: var(--color-accent);
}

.room-description {
    color: var(--color-text-body);
    margin-bottom: var(--space-lg);
    line-height: 1.7;
}

.room-amenities {
    display: flex;
    flex-wrap: wrap;
    gap: var(--space-sm);
    margin-bottom: var(--space-xl);
}

.amenity-tag {
    padding: var(--space-xs) var(--space-md);
    background-color: var(--color-bg-alt);
    font-size: var(--text-xs);
    color: var(--color-text-muted);
    border-radius: var(--radius-sm);
}

.room-card-actions {
    display: flex;
    flex-wrap: wrap;
    gap: var(--space-md);
    margin-top: auto;
}

/* Inclusions */
.inclusions-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: var(--space-2xl);
}

@media (min-width: 768px) {
    .inclusions-grid {
        grid-template-columns: repeat(4, 1fr);
    }
}

.inclusion-item {
    text-align: center;
}

.inclusion-icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 64px;
    height: 64px;
    margin-bottom: var(--space-lg);
    color: var(--color-accent);
}

.inclusion-item h3 {
    font-size: var(--text-lg);
    margin-bottom: var(--space-sm);
}

.inclusion-item p {
    font-size: var(--text-sm);
    color: var(--color-text-muted);
    line-height: 1.6;
}
</style>


<?php get_footer(); ?>
