<?php
if (!defined('ABSPATH')) exit;
/**
 * Single Room Template
 *
 * @package Ashton_Court
 */

get_header();
?>
<div class="container"><?php ashton_breadcrumbs(); ?></div>
<?php
// Get room meta
$price = get_post_meta(get_the_ID(), '_room_price', true);
$size = get_post_meta(get_the_ID(), '_room_size', true);
$view = get_post_meta(get_the_ID(), '_room_view', true);
$bed_type = get_post_meta(get_the_ID(), '_room_bed_type', true);
$max_guests = get_post_meta(get_the_ID(), '_room_max_guests', true);
$has_balcony = get_post_meta(get_the_ID(), '_room_has_balcony', true);
$gallery = get_post_meta(get_the_ID(), '_room_gallery', true);
$gallery_ids = $gallery ? explode(',', $gallery) : array();
$amenities = wp_get_post_terms(get_the_ID(), 'room_amenity', array('fields' => 'all'));
?>

<article class="single-room">
    
    <!-- Room Hero -->
    <section class="room-hero">
        <div class="room-hero-gallery">
            <?php if (has_post_thumbnail()) : ?>
                <div class="room-hero-main">
                    <?php the_post_thumbnail('hero-large'); ?>
                </div>
            <?php else : ?>
                <div class="room-hero-main">
                    <div class="image-fallback">
                        <span><?php the_title(); ?></span>
                    </div>
                </div>
            <?php endif; ?>
            
            <?php if (!empty($gallery_ids)) : ?>
                <div class="room-hero-thumbs">
                    <?php foreach (array_slice($gallery_ids, 0, 4) as $index => $id) : 
                        $image = wp_get_attachment_image_src($id, 'room-card');
                        $img_alt = get_post_meta($id, '_wp_attachment_image_alt', true);
                        if (!$img_alt) { $img_alt = get_the_title() . ' - Gallery image ' . ($index + 1); }
                        if ($image) :
                    ?>
                        <div class="room-thumb" data-gallery-index="<?php echo esc_attr($index + 1); ?>">
                            <img src="<?php echo esc_url($image[0]); ?>" alt="<?php echo esc_attr($img_alt); ?>">
                            <?php if ($index === 3 && count($gallery_ids) > 4) : ?>
                                <div class="room-thumb-overlay">
                                    <span>+<?php echo esc_html(count($gallery_ids) - 4); ?></span>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php 
                        endif;
                    endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
        
        <button type="button" class="btn-view-gallery" data-gallery="room">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                <rect x="3" y="3" width="7" height="7"/>
                <rect x="14" y="3" width="7" height="7"/>
                <rect x="3" y="14" width="7" height="7"/>
                <rect x="14" y="14" width="7" height="7"/>
            </svg>
            <span>View Gallery</span>
        </button>
    </section>
    
    <!-- Room Content -->
    <section class="room-content section-padding">
        <div class="container">
            <div class="room-content-grid">
                
                <!-- Main Content -->
                <div class="room-main" data-animate="fade-right">
                    <div class="room-header">
                        <span class="room-type-badge">
                            <?php 
                            $types = wp_get_post_terms(get_the_ID(), 'room_type');
                            if (!empty($types) && !is_wp_error($types)) {
                                echo esc_html($types[0]->name);
                            } else {
                                echo 'Guest Room';
                            }
                            ?>
                        </span>
                        <h1 class="room-title-single"><?php the_title(); ?></h1>
                        
                        <div class="room-quick-specs">
                            <?php if ($size) : ?>
                                <span><?php echo esc_html($size); ?> m²</span>
                            <?php endif; ?>
                            <?php if ($view) : ?>
                                <span><?php echo esc_html(ucfirst($view)); ?> View</span>
                            <?php endif; ?>
                            <?php if ($max_guests) : ?>
                                <span>Up to <?php echo esc_html($max_guests); ?> guests</span>
                            <?php endif; ?>
                        </div>
                    </div>
                    
                    <div class="room-description-full">
                        <?php the_content(); ?>
                        
                        <?php if (!get_the_content()) : ?>
                            <p>Experience the perfect blend of comfort and coastal charm in our <?php the_title(); ?>. Wake up to stunning views and enjoy premium amenities designed for the discerning traveler.</p>
                            <p>Each detail has been carefully considered to ensure your stay is memorable, from the luxurious bedding to the thoughtfully curated room features.</p>
                        <?php endif; ?>
                    </div>
                    
                    <!-- Room Features -->
                    <div class="room-features">
                        <h2>Room Features</h2>
                        
                        <div class="features-grid">
                            <?php if ($bed_type) : ?>
                                <div class="feature-item">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                        <path d="M2 4v16M22 4v16M6 12h12M6 12c0-2 1-4 3-4h6c2 0 3 2 3 4"/>
                                        <rect x="2" y="12" width="20" height="6" rx="1"/>
                                    </svg>
                                    <span><?php echo esc_html(ucfirst(str_replace('-', ' ', $bed_type))); ?> Bed</span>
                                </div>
                            <?php endif; ?>
                            
                            <?php if ($has_balcony) : ?>
                                <div class="feature-item">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                        <rect x="4" y="10" width="16" height="10" rx="1"/>
                                        <path d="M4 10V6a2 2 0 012-2h12a2 2 0 012 2v4"/>
                                    </svg>
                                    <span>Private Balcony</span>
                                </div>
                            <?php endif; ?>
                            
                            <div class="feature-item">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                    <path d="M5 12.55a11 11 0 0114.08 0"/>
                                    <circle cx="12" cy="20" r="1"/>
                                </svg>
                                <span>Free High-Speed WiFi</span>
                            </div>
                            
                            <div class="feature-item">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                    <rect x="2" y="7" width="20" height="15" rx="2" ry="2"/>
                                    <polyline points="17 2 12 7 7 2"/>
                                </svg>
                                <span>Flat Screen TV</span>
                            </div>
                            
                            <div class="feature-item">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                    <path d="M18 8h1a4 4 0 010 8h-1"/>
                                    <path d="M2 8h16v9a4 4 0 01-4 4H6a4 4 0 01-4-4V8z"/>
                                </svg>
                                <span>Tea & Coffee Facilities</span>
                            </div>
                            
                            <div class="feature-item">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                    <path d="M9 6v12M15 6v12M21 6v12M3 6v12"/>
                                    <path d="M3 12h18M3 6h18M3 18h18"/>
                                </svg>
                                <span>Ensuite Bathroom</span>
                            </div>
                            
                            <div class="feature-item">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                    <circle cx="12" cy="12" r="5"/>
                                    <line x1="12" y1="1" x2="12" y2="3"/>
                                    <line x1="12" y1="21" x2="12" y2="23"/>
                                    <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/>
                                    <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/>
                                </svg>
                                <span>Heating & Cooling</span>
                            </div>
                            
                            <div class="feature-item">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                    <rect x="5" y="2" width="14" height="20" rx="2" ry="2"/>
                                    <line x1="12" y1="18" x2="12.01" y2="18"/>
                                </svg>
                                <span>In-Room Safe</span>
                            </div>
                        </div>
                    </div>
                    
                    <?php if (!empty($amenities) && !is_wp_error($amenities)) : ?>
                        <div class="room-amenities-full">
                            <h2>Amenities</h2>
                            <div class="amenities-list">
                                <?php foreach ($amenities as $amenity) : ?>
                                    <span class="amenity-item">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <polyline points="20 6 9 17 4 12"/>
                                        </svg>
                                        <?php echo esc_html($amenity->name); ?>
                                    </span>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                
                <!-- Sidebar - Booking Card -->
                <aside class="room-sidebar" data-animate="fade-left">
                    <div class="booking-card sticky">
                        <div class="booking-card-header">
                            <div class="booking-price">
                                <span class="price-from">From</span>
                                <span class="price-amount">£<?php echo $price ? esc_html($price) : '70'; ?></span>
                                <span class="price-period">/ night</span>
                            </div>
                            <p class="price-note">Breakfast included</p>
                        </div>
                        
                        <div class="booking-card-body">
                            <form class="quick-booking-form">
                                <?php wp_nonce_field('ashton_booking_form', 'booking_nonce'); ?>
                                <div class="form-group">
                                    <label for="room-check-in">Check In</label>
                                    <input type="date" id="room-check-in" name="check_in" required min="<?php echo esc_attr(date('Y-m-d')); ?>">
                                </div>
                                
                                <div class="form-group">
                                    <label for="room-check-out">Check Out</label>
                                    <input type="date" id="room-check-out" name="check_out" required>
                                </div>
                                
                                <div class="form-group">
                                    <label for="room-guests">Guests</label>
                                    <select id="room-guests" name="guests">
                                        <?php for ($i = 1; $i <= ($max_guests ?: 2); $i++) : ?>
                                            <option value="<?php echo esc_attr($i); ?>" <?php selected($i, 2); ?>><?php echo esc_html($i); ?> Guest<?php echo $i > 1 ? 's' : ''; ?></option>
                                        <?php endfor; ?>
                                    </select>
                                </div>
                                
                                <input type="hidden" name="room_id" value="<?php echo get_the_ID(); ?>">
                                
                                <button type="button" class="btn btn-primary btn-block open-booking-modal">
                                    Book This Room
                                </button>
                            </form>
                        </div>
                        
                        <div class="booking-card-footer">
                            <p>Need help? Call us</p>
                            <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', ashton_get_phone())); ?>" class="booking-phone">
                                <?php echo esc_html(ashton_get_phone()); ?>
                            </a>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>
    
    <!-- Other Rooms -->
    <section class="other-rooms section-padding bg-light">
        <div class="container">
            <div class="section-header" data-animate="fade-up">
                <span class="section-tagline">Explore More</span>
                <h2 class="section-title">Other Rooms</h2>
            </div>
            
            <div class="rooms-grid">
                <?php
                $other_rooms = new WP_Query(array(
                    'post_type'      => 'room',
                    'posts_per_page' => 3,
                    'post__not_in'   => array(get_the_ID()),
                    'orderby'        => 'rand',
                ));
                
                if ($other_rooms->have_posts()) :
                    $delay = 0;
                    while ($other_rooms->have_posts()) : $other_rooms->the_post();
                        $other_price = get_post_meta(get_the_ID(), '_room_price', true);
                        $other_view = get_post_meta(get_the_ID(), '_room_view', true);
                ?>
                    <article class="room-card" data-animate="fade-up" data-delay="<?php echo esc_attr($delay); ?>">
                        <div class="room-card-image">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('room-card'); ?>
                            <?php else : ?>
                                <div class="image-fallback">
                                    <span><?php the_title(); ?></span>
                                </div>
                            <?php endif; ?>
                            <div class="room-card-overlay">
                                <a href="<?php the_permalink(); ?>" class="room-card-link">
                                    <span>View Room</span>
                                </a>
                            </div>
                        </div>
                        <div class="room-card-content">
                            <div class="room-card-meta">
                                <?php if ($other_view) : ?>
                                    <span class="room-view"><?php echo esc_html(ucfirst($other_view)); ?> View</span>
                                <?php endif; ?>
                            </div>
                            <h3 class="room-card-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>
                            <div class="room-card-footer">
                                <div class="room-price">
                                    <span class="price-from">From</span>
                                    <span class="price-amount">£<?php echo $other_price ? esc_html($other_price) : '70'; ?></span>
                                    <span class="price-period">/ night</span>
                                </div>
                            </div>
                        </div>
                    </article>
                <?php
                        $delay += 100;
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
            
            <div class="section-action centered" data-animate="fade-up">
                <a href="<?php echo esc_url(home_url('/rooms/')); ?>" class="btn btn-secondary">
                    <span>View All Rooms</span>
                </a>
            </div>
        </div>
    </section>
    
</article>

<!-- Gallery Modal -->
<div class="gallery-modal" id="gallery-modal">
    <div class="gallery-modal-overlay"></div>
    <div class="gallery-modal-container">
        <button type="button" class="gallery-close" aria-label="Close gallery">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
            </svg>
        </button>
        
        <div class="gallery-main">
            <button type="button" class="gallery-nav gallery-prev" aria-label="Previous image">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                    <polyline points="15 18 9 12 15 6"/>
                </svg>
            </button>
            
            <div class="gallery-image-container">
                <?php if (has_post_thumbnail()) : ?>
                    <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'hero-large')); ?>" alt="<?php the_title(); ?>" class="gallery-image active" data-index="0">
                <?php endif; ?>
                
                <?php foreach ($gallery_ids as $index => $id) : 
                    $image = wp_get_attachment_image_src($id, 'hero-large');
                    $modal_alt = get_post_meta($id, '_wp_attachment_image_alt', true);
                    if (!$modal_alt) { $modal_alt = get_the_title() . ' - Photo ' . ($index + 1); }
                    if ($image) :
                ?>
                    <img src="<?php echo esc_url($image[0]); ?>" alt="<?php echo esc_attr($modal_alt); ?>" class="gallery-image" data-index="<?php echo esc_attr($index + 1); ?>">
                <?php 
                    endif;
                endforeach; ?>
            </div>
            
            <button type="button" class="gallery-nav gallery-next" aria-label="Next image">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                    <polyline points="9 18 15 12 9 6"/>
                </svg>
            </button>
        </div>
        
        <div class="gallery-counter">
            <span class="current">1</span> / <span class="total"><?php echo esc_html(count($gallery_ids) + 1); ?></span>
        </div>
    </div>
</div>

<style>
/* Single Room Styles */
.room-hero {
    position: relative;
    margin-top: var(--header-height);
}

.room-hero-gallery {
    display: grid;
    grid-template-columns: 1fr;
    gap: var(--space-sm);
}

@media (min-width: 768px) {
    .room-hero-gallery {
        grid-template-columns: 2fr 1fr;
        max-height: 70vh;
    }
}

.room-hero-main {
    aspect-ratio: 16/10;
    overflow: hidden;
}

@media (min-width: 768px) {
    .room-hero-main {
        aspect-ratio: auto;
        height: 100%;
    }
}

.room-hero-main img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.room-hero-thumbs {
    display: none;
    grid-template-columns: 1fr 1fr;
    gap: var(--space-sm);
}

@media (min-width: 768px) {
    .room-hero-thumbs {
        display: grid;
    }
}

.room-thumb {
    position: relative;
    overflow: hidden;
    cursor: pointer;
}

.room-thumb img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform var(--duration-normal) var(--ease-smooth);
}

.room-thumb:hover img {
    transform: scale(1.05);
}

.room-thumb-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: var(--text-lg);
}

.btn-view-gallery {
    position: absolute;
    bottom: var(--space-lg);
    right: var(--space-lg);
    display: flex;
    align-items: center;
    gap: var(--space-sm);
    padding: var(--space-md) var(--space-lg);
    background: var(--color-bg);
    font-size: var(--text-sm);
    font-weight: 500;
    box-shadow: var(--shadow-lg);
    transition: all var(--duration-fast) var(--ease-smooth);
}

.btn-view-gallery:hover {
    background: var(--color-text);
    color: var(--color-text-light);
}

/* Room Content */
.room-content-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: var(--space-4xl);
}

@media (min-width: 1024px) {
    .room-content-grid {
        grid-template-columns: 1fr 380px;
    }
}

.room-header {
    margin-bottom: var(--space-2xl);
}

.room-type-badge {
    display: inline-block;
    font-size: var(--text-xs);
    font-weight: 500;
    letter-spacing: 0.15em;
    text-transform: uppercase;
    color: var(--color-accent);
    margin-bottom: var(--space-md);
}

.room-title-single {
    font-size: var(--text-4xl);
    margin-bottom: var(--space-lg);
}

.room-quick-specs {
    display: flex;
    flex-wrap: wrap;
    gap: var(--space-lg);
}

.room-quick-specs span {
    font-size: var(--text-sm);
    color: var(--color-text-muted);
}

.room-quick-specs span:not(:last-child)::after {
    content: '•';
    margin-left: var(--space-lg);
    color: var(--color-border);
}

.room-description-full {
    margin-bottom: var(--space-3xl);
    line-height: 1.8;
}

.room-features,
.room-amenities-full {
    margin-bottom: var(--space-3xl);
}

.room-features h2,
.room-amenities-full h2 {
    font-size: var(--text-2xl);
    margin-bottom: var(--space-xl);
}

.features-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: var(--space-lg);
}

@media (min-width: 768px) {
    .features-grid {
        grid-template-columns: repeat(4, 1fr);
    }
}

.feature-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    gap: var(--space-sm);
    padding: var(--space-lg);
    background: var(--color-bg-alt);
}

.feature-item svg {
    color: var(--color-accent);
}

.feature-item span {
    font-size: var(--text-sm);
    color: var(--color-text-body);
}

.amenities-list {
    display: flex;
    flex-wrap: wrap;
    gap: var(--space-md);
}

.amenity-item {
    display: flex;
    align-items: center;
    gap: var(--space-sm);
    padding: var(--space-sm) var(--space-md);
    background: var(--color-bg-alt);
    font-size: var(--text-sm);
}

.amenity-item svg {
    color: var(--color-accent);
}

/* Booking Card */
.booking-card {
    background: var(--color-bg);
    border: 1px solid var(--color-border);
    position: sticky;
    top: calc(var(--header-height) + var(--space-xl));
}

.booking-card-header {
    padding: var(--space-2xl);
    border-bottom: 1px solid var(--color-border);
    text-align: center;
}

.booking-price {
    display: flex;
    align-items: baseline;
    justify-content: center;
    gap: var(--space-xs);
}

.booking-price .price-amount {
    font-family: var(--font-heading);
    font-size: var(--text-3xl);
}

.price-note {
    font-size: var(--text-sm);
    color: var(--color-text-muted);
    margin-top: var(--space-sm);
    margin-bottom: 0;
}

.booking-card-body {
    padding: var(--space-2xl);
}

.quick-booking-form .form-group {
    margin-bottom: var(--space-lg);
}

.btn-block {
    width: 100%;
}

.booking-card-footer {
    padding: var(--space-xl) var(--space-2xl);
    background: var(--color-bg-alt);
    text-align: center;
}

.booking-card-footer p {
    font-size: var(--text-sm);
    color: var(--color-text-muted);
    margin-bottom: var(--space-sm);
}

.booking-phone {
    font-family: var(--font-heading);
    font-size: var(--text-xl);
    color: var(--color-text);
}

/* Gallery Modal */
.gallery-modal {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: var(--z-modal);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    visibility: hidden;
    transition: all var(--duration-normal) var(--ease-smooth);
}

.gallery-modal.active {
    opacity: 1;
    visibility: visible;
}

.gallery-modal-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.95);
}

.gallery-modal-container {
    position: relative;
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: column;
}

.gallery-close {
    position: absolute;
    top: var(--space-lg);
    right: var(--space-lg);
    width: 44px;
    height: 44px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    z-index: 10;
    transition: color var(--duration-fast);
}

.gallery-close:hover {
    color: var(--color-accent);
}

.gallery-main {
    flex: 1;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: var(--space-4xl);
}

.gallery-nav {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    background: rgba(255, 255, 255, 0.1);
    transition: all var(--duration-fast);
}

.gallery-nav:hover {
    background: var(--color-accent);
}

.gallery-prev { left: var(--space-lg); }
.gallery-next { right: var(--space-lg); }

.gallery-image-container {
    position: relative;
    max-width: 90%;
    max-height: 80vh;
}

.gallery-image {
    max-width: 100%;
    max-height: 80vh;
    object-fit: contain;
    display: none;
}

.gallery-image.active {
    display: block;
}

.gallery-counter {
    position: absolute;
    bottom: var(--space-lg);
    left: 50%;
    transform: translateX(-50%);
    color: white;
    font-size: var(--text-sm);
    letter-spacing: 0.1em;
}
</style>

<script>
(function() {
    // Gallery functionality
    const galleryBtn = document.querySelector('.btn-view-gallery');
    const galleryModal = document.getElementById('gallery-modal');
    const galleryClose = galleryModal?.querySelector('.gallery-close');
    const galleryOverlay = galleryModal?.querySelector('.gallery-modal-overlay');
    const galleryPrev = galleryModal?.querySelector('.gallery-prev');
    const galleryNext = galleryModal?.querySelector('.gallery-next');
    const galleryImages = galleryModal?.querySelectorAll('.gallery-image');
    const currentCounter = galleryModal?.querySelector('.gallery-counter .current');
    
    let currentIndex = 0;
    
    function showImage(index) {
        galleryImages.forEach((img, i) => {
            img.classList.toggle('active', i === index);
        });
        currentIndex = index;
        if (currentCounter) currentCounter.textContent = index + 1;
    }
    
    function nextImage() {
        const next = (currentIndex + 1) % galleryImages.length;
        showImage(next);
    }
    
    function prevImage() {
        const prev = (currentIndex - 1 + galleryImages.length) % galleryImages.length;
        showImage(prev);
    }
    
    function openGallery(index = 0) {
        showImage(index);
        galleryModal.classList.add('active');
        document.body.classList.add('modal-open');
    }
    
    function closeGallery() {
        galleryModal.classList.remove('active');
        document.body.classList.remove('modal-open');
    }
    
    if (galleryBtn) {
        galleryBtn.addEventListener('click', () => openGallery(0));
    }
    
    document.querySelectorAll('.room-thumb').forEach((thumb, index) => {
        thumb.addEventListener('click', () => openGallery(index + 1));
    });
    
    if (galleryClose) galleryClose.addEventListener('click', closeGallery);
    if (galleryOverlay) galleryOverlay.addEventListener('click', closeGallery);
    if (galleryPrev) galleryPrev.addEventListener('click', prevImage);
    if (galleryNext) galleryNext.addEventListener('click', nextImage);
    
    document.addEventListener('keydown', (e) => {
        if (!galleryModal?.classList.contains('active')) return;
        if (e.key === 'Escape') closeGallery();
        if (e.key === 'ArrowLeft') prevImage();
        if (e.key === 'ArrowRight') nextImage();
    });
})();
</script>

<?php get_footer(); ?>
