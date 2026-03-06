<?php
if (!defined('ABSPATH')) exit;
/**
 * Front Page Template
 *
 * Uses ACF Flexible Content when available.
 * Falls back to hardcoded sections if ACF is not active or no sections are defined.
 *
 * @package Ashton_Court
 */

get_header();

// ACF fields are read directly in the hardcoded template below.
// Each section checks for ACF values and falls back to defaults.
ashton_frontpage_render();

get_footer();


/**
 * Original hardcoded homepage content as fallback.
 * This renders the exact same output as the original front-page.php.
 */
function ashton_frontpage_render() {
    $acf = function_exists('get_field');

    // Hero fields from ACF (with fallbacks)
    $hero_eyebrow = $acf ? get_field('hero_eyebrow') : '';
    $hero_t1      = $acf ? get_field('hero_title_line_1') : '';
    $hero_t2      = $acf ? get_field('hero_title_line_2') : '';
    $hero_desc    = $acf ? get_field('hero_description') : '';
    $hero_loc     = $acf ? get_field('hero_location') : '';
    $hero_bg      = $acf ? get_field('hero_bg_image') : '';

    if (!$hero_eyebrow) $hero_eyebrow = 'Est. 1890 · Devon Coast';
    if (!$hero_t1) $hero_t1 = 'Where Comfort';
    if (!$hero_t2) $hero_t2 = 'Meets the Coast';
    if (!$hero_desc) $hero_desc = 'A friendly seaside retreat with stunning views of the Exe Estuary.';
    if (!$hero_loc) $hero_loc = 'Exmouth, Devon';
    if (!$hero_bg) $hero_bg = esc_url(ASHTON_THEME_URI) . '/assets/images/hero-bg.jpg';
?>

<!-- Hero Section -->
<section class="hero-section hero-cinematic hero-elegant hero-with-image" id="hero">
    <div class="hero-background">
        <div class="hero-bg-image">
            <img src="<?php echo esc_url($hero_bg); ?>" alt="Ashton Court Hotel View">
        </div>
        <!-- Gradient Overlay -->
        <div class="hero-gradient-mesh">
            <div class="gradient-orb gradient-orb-1"></div>
            <div class="gradient-orb gradient-orb-2"></div>
            <div class="gradient-orb gradient-orb-3"></div>
            <div class="gradient-orb gradient-orb-4"></div>
        </div>
        <div class="hero-color-overlay"></div>
        <div class="hero-noise"></div>
    </div>
    
    <!-- Main Hero Content -->
    <div class="hero-content">
        <div class="container">
            <div class="hero-inner">
                <!-- Refined Hero Typography -->
                <div class="hero-eyebrow">
                    <span class="eyebrow-line"></span>
                    <span class="eyebrow-text"><?php echo esc_html($hero_eyebrow); ?></span>
                    <span class="eyebrow-line"></span>
                </div>
                
                <h1 class="hero-headline">
                    <span class="headline-top"><?php echo esc_html($hero_t1); ?></span>
                    <span class="headline-accent"><?php echo esc_html($hero_t2); ?></span>
                </h1>
                
                <p class="hero-description">
                    <?php echo esc_html($hero_desc); ?><br>
                    <span class="description-location"><?php echo esc_html($hero_loc); ?></span>
                </p>
            </div>
        </div>
    </div>
    
    <!-- Inline Booking Widget -->
    <div class="hero-booking-widget" data-animate="fade-up" data-delay="800">
        <div class="container">
            <form class="booking-bar" id="hero-booking-form">
                <?php wp_nonce_field('ashton_booking_form', 'booking_nonce'); ?>
                <div class="booking-bar-inner">
                    <!-- Check In -->
                    <div class="booking-field">
                        <label for="hero-checkin">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                                <line x1="16" y1="2" x2="16" y2="6"/>
                                <line x1="8" y1="2" x2="8" y2="6"/>
                                <line x1="3" y1="10" x2="21" y2="10"/>
                            </svg>
                            <span>Check In</span>
                        </label>
                        <input type="date" id="hero-checkin" name="checkin" required>
                    </div>
                    
                    <div class="booking-divider"></div>
                    
                    <!-- Check Out -->
                    <div class="booking-field">
                        <label for="hero-checkout">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                                <line x1="16" y1="2" x2="16" y2="6"/>
                                <line x1="8" y1="2" x2="8" y2="6"/>
                                <line x1="3" y1="10" x2="21" y2="10"/>
                            </svg>
                            <span>Check Out</span>
                        </label>
                        <input type="date" id="hero-checkout" name="checkout" required>
                    </div>
                    
                    <div class="booking-divider"></div>
                    
                    <!-- Guests -->
                    <div class="booking-field booking-field-select">
                        <label for="hero-guests">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/>
                                <circle cx="9" cy="7" r="4"/>
                                <path d="M23 21v-2a4 4 0 00-3-3.87"/>
                                <path d="M16 3.13a4 4 0 010 7.75"/>
                            </svg>
                            <span>Guests</span>
                        </label>
                        <select id="hero-guests" name="guests">
                            <option value="1">1 Guest</option>
                            <option value="2" selected>2 Guests</option>
                            <option value="3">3 Guests</option>
                            <option value="4">4 Guests</option>
                            <option value="5">5+ Guests</option>
                        </select>
                    </div>
                    
                    <div class="booking-divider"></div>
                    
                    <!-- Rooms -->
                    <div class="booking-field booking-field-select">
                        <label for="hero-rooms">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/>
                                <polyline points="9 22 9 12 15 12 15 22"/>
                            </svg>
                            <span>Rooms</span>
                        </label>
                        <select id="hero-rooms" name="rooms">
                            <option value="1" selected>1 Room</option>
                            <option value="2">2 Rooms</option>
                            <option value="3">3 Rooms</option>
                            <option value="4">4+ Rooms</option>
                        </select>
                    </div>
                    
                    <!-- Submit Button -->
                    <button type="submit" class="booking-submit">
                        <span>Check Availability</span>
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="11" cy="11" r="8"/>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"/>
                        </svg>
                    </button>
                </div>
                
                <!-- Price Indicator -->
                <div class="booking-price-hint">
                    <span>From <strong>&pound;<?php echo esc_html(get_theme_mod('ashton_starting_price', '70')); ?></strong> per night</span>
                    <span class="separator">&bull;</span>
                    <span>Best Rate Guaranteed</span>
                </div>
            </form>
        </div>
    </div>
    
    <!-- Clock PMS SDK for overlay booking with pre-filled dates -->
    <link rel="stylesheet" href="https://static-assets.clock-software.com/wbe_v2/clock-pms-wbe-integration.css">
    <link rel="stylesheet" href="https://static-assets.clock-software.com/wbe_v2/clock-pms-wbe-reminder.css">
    <script defer src="https://static-assets.clock-software.com/wbe_v2/clock-pms-wbe-integration.js"></script>
    
    <script>
    (function() {
        function initClockPms() {
            if (typeof window.clockPmsWbeInit === 'function') {
                window.clockPmsWbeInit({
                    wbeBaseUrl: "https://sky-eu1.clock-software.com/spa/pms-wbe/#/hotel/11928",
                    entrypoint: "rooms",
                    defaultMode: "standard",
                    roundedCorners: true,
                    language: null,
                });
                return true;
            }
            return false;
        }

        document.addEventListener('DOMContentLoaded', function() {
            if (!initClockPms()) {
                var checkInterval = setInterval(function() {
                    if (initClockPms()) {
                        clearInterval(checkInterval);
                    }
                }, 500);
                setTimeout(function() { clearInterval(checkInterval); }, 10000);
            }
        });

        var form = document.getElementById('hero-booking-form');
        if (!form) return;
        
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            var checkin = document.getElementById('hero-checkin').value;
            var checkout = document.getElementById('hero-checkout').value;
            var guests = document.getElementById('hero-guests').value;
            
            if (typeof window.clockPmsWbeShow === 'function') {
                window.clockPmsWbeShow({
                    arrival: checkin || null,
                    departure: checkout || null,
                    adults: parseInt(guests) || 2,
                    children: 0,
                    submit: true,
                });
            } else {
                window.open('https://sky-eu1.clock-software.com/spa/pms-wbe/#/hotel/11928', '_blank', 'noopener');
            }
        });
    })();
    </script>
    
    <!-- Scroll Indicator -->
    <div class="hero-scroll" data-animate="fade-up" data-delay="1000">
        <div class="scroll-mouse">
            <div class="scroll-wheel"></div>
        </div>
        <span>Discover</span>
    </div>
    
</section>

<?php
    // Essence section ACF fields
    $ess_tag    = ($acf ? get_field('essence_tag') : '') ?: 'The Essence';
    $ess_title  = ($acf ? get_field('essence_title') : '') ?: 'A Historic Haven';
    $ess_em     = ($acf ? get_field('essence_title_italic') : '') ?: 'on Louisa Terrace';
    $ess_lead   = ($acf ? get_field('essence_lead') : '') ?: "The Ashton Court is situated on Louisa Terrace, part of the town's historic Beacon, where many notable people chose to make their homes during Exmouth's Georgian heyday.";
    $ess_body   = ($acf ? get_field('essence_body') : '') ?: '<p>The Hotel is just 200 yards from the beach and enjoys magnificent views of the Exe estuary and the beautiful coastline stretching out towards Torbay.</p><p>Our attractive coronation gardens overlooking the Esplanade provide a tranquil spot in which to relax and watch the fishing boats and pleasure craft pass back and forth along the shoreline.</p>';
    $ess_image  = ($acf ? get_field('essence_image') : '') ?: esc_url(get_template_directory_uri()) . '/assets/images/garden.jpg';
    $ess_btn    = ($acf ? get_field('essence_button_text') : '') ?: 'Discover Our Story';
    $ess_link   = ($acf ? get_field('essence_button_link') : '') ?: home_url('/about/');
    $ess_s1n    = ($acf ? get_field('essence_stat1_num') : '') ?: '200';
    $ess_s1l    = ($acf ? get_field('essence_stat1_label') : '') ?: 'yards to beach';
    $ess_s2n    = ($acf ? get_field('essence_stat2_num') : '') ?: '45';
    $ess_s2l    = ($acf ? get_field('essence_stat2_label') : '') ?: 'sea view rooms';
    $ess_s3n    = ($acf ? get_field('essence_stat3_num') : '') ?: '5.0';
    $ess_s3l    = ($acf ? get_field('essence_stat3_label') : '') ?: 'guest rating';
?>

<!-- Essence Section -->
<section class="essence-section" id="essence">
    <div class="essence-container">
        <div class="essence-image-side">
            <div class="essence-image-box">
                <img src="<?php echo esc_url($ess_image); ?>" alt="Ashton Court Gardens">
            </div>
            <div class="essence-stats-card">
                <div class="stat-item">
                    <span class="stat-num"><?php echo esc_html($ess_s1n); ?></span>
                    <span class="stat-label"><?php echo esc_html($ess_s1l); ?></span>
                </div>
                <div class="stat-divider"></div>
                <div class="stat-item">
                    <span class="stat-num"><?php echo esc_html($ess_s2n); ?></span>
                    <span class="stat-label"><?php echo esc_html($ess_s2l); ?></span>
                </div>
                <div class="stat-divider"></div>
                <div class="stat-item">
                    <span class="stat-num"><?php echo esc_html($ess_s3n); ?></span>
                    <span class="stat-label"><?php echo esc_html($ess_s3l); ?></span>
                </div>
            </div>
        </div>
        
        <div class="essence-content-side">
            <span class="essence-tag"><?php echo esc_html($ess_tag); ?></span>
            <h2 class="essence-title"><?php echo esc_html($ess_title); ?><br><em><?php echo esc_html($ess_em); ?></em></h2>
            <p class="essence-lead"><?php echo esc_html($ess_lead); ?></p>
            <div class="essence-body-text"><?php echo wp_kses_post($ess_body); ?></div>
            
            <div class="essence-icons">
                <div class="icon-item">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"/></svg>
                    <span>Dog Friendly</span>
                </div>
                <div class="icon-item">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/></svg>
                    <span>Weddings</span>
                </div>
                <div class="icon-item">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                    <span>Long Stay</span>
                </div>
            </div>
            
            <a href="<?php echo esc_url($ess_link); ?>" class="essence-btn">
                <?php echo esc_html($ess_btn); ?>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
            </a>
        </div>
    </div>
</section>

<!-- Gallery Strip -->
<section class="gallery-strip">
    <div class="gallery-marquee">
        <div class="gallery-track">
            <div class="gallery-item">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/sea-facing-double-2.png" alt="Sea Facing Double Room">
                <span class="gallery-caption">Sea Facing Double</span>
            </div>
            <div class="gallery-item">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/sea-facing-family.png" alt="Sea Facing Family Room">
                <span class="gallery-caption">Sea Facing Family</span>
            </div>
            <div class="gallery-item">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/hotelbar.jpg" alt="Hotel Bar">
                <span class="gallery-caption">Hotel Bar</span>
            </div>
            <div class="gallery-item">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/rear-facing-double.png" alt="Rear Facing Double Room">
                <span class="gallery-caption">Rear Facing Double</span>
            </div>
            <div class="gallery-item">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/breakfast.jpg" alt="Breakfast">
                <span class="gallery-caption">Breakfast</span>
            </div>
            <div class="gallery-item">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/sea-facing-twin-1.png" alt="Sea Facing Twin Room">
                <span class="gallery-caption">Sea Facing Twin</span>
            </div>
            <div class="gallery-item">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/sea-facing-double-2.png" alt="Sea Facing Double Room">
                <span class="gallery-caption">Sea Facing Double</span>
            </div>
            <div class="gallery-item">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/sea-facing-family.png" alt="Sea Facing Family Room">
                <span class="gallery-caption">Sea Facing Family</span>
            </div>
            <div class="gallery-item">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/hotelbar.jpg" alt="Hotel Bar">
                <span class="gallery-caption">Hotel Bar</span>
            </div>
            <div class="gallery-item">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/rear-facing-double.png" alt="Rear Facing Double Room">
                <span class="gallery-caption">Rear Facing Double</span>
            </div>
            <div class="gallery-item">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/breakfast.jpg" alt="Breakfast">
                <span class="gallery-caption">Breakfast</span>
            </div>
            <div class="gallery-item">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/view-exe.jpg" alt="Exe View">
                <span class="gallery-caption">Exe Estuary</span>
            </div>
        </div>
    </div>
</section>

<!-- Features Strip -->
<section class="features-strip">
    <div class="features-strip-inner">
        <div class="feature-item" data-animate="fade-up">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1">
                <path d="M18 8h1a4 4 0 010 8h-1M2 8h16v9a4 4 0 01-4 4H6a4 4 0 01-4-4V8zM6 1v3M10 1v3M14 1v3"/>
            </svg>
            <span>Full English Breakfast</span>
        </div>
        <div class="feature-item" data-animate="fade-up" data-delay="50">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1">
                <path d="M5 12.55a11 11 0 0114.08 0M1.42 9a16 16 0 0121.16 0M8.53 16.11a6 6 0 016.95 0M12 20h.01"/>
            </svg>
            <span>High Speed WiFi</span>
        </div>
        <div class="feature-item" data-animate="fade-up" data-delay="100">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1">
                <rect x="1" y="3" width="15" height="13" rx="2" ry="2"/>
                <path d="M16 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2"/>
                <circle cx="5.5" cy="18" r="2"/>
                <circle cx="18.5" cy="18" r="2"/>
            </svg>
            <span>Free Parking</span>
        </div>
        <div class="feature-item" data-animate="fade-up" data-delay="150">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1">
                <rect x="2" y="7" width="20" height="14" rx="2" ry="2"/>
                <path d="M16 3v4M8 3v4M2 11h20"/>
            </svg>
            <span>Lift to All Floors</span>
        </div>
        <div class="feature-item" data-animate="fade-up" data-delay="200">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1">
                <circle cx="12" cy="12" r="10"/>
                <path d="M12 6v6l4 2"/>
            </svg>
            <span>Dog Friendly</span>
        </div>
    </div>
</section>

<?php
    // Rooms section ACF fields
    $rm_tag  = ($acf ? get_field('rooms_tagline') : '') ?: 'Accommodation';
    $rm_t    = ($acf ? get_field('rooms_title') : '') ?: 'Refined Comfort, Breathtaking Views';
    $rm_sub  = ($acf ? get_field('rooms_subtitle') : '') ?: 'Each of our 45 ensuite rooms offers a unique blend of comfort and coastal charm, with the majority featuring stunning sea views.';
    $rm_btn  = ($acf ? get_field('rooms_button_text') : '') ?: 'View All Rooms';
?>
<!-- Rooms Preview Section -->
<section class="rooms-section section-padding bg-light" id="rooms-preview">
    <div class="container">
        <div class="section-header centered">
            <span class="section-tagline"><?php echo esc_html($rm_tag); ?></span>
            <h2 class="section-title"><?php echo esc_html($rm_t); ?></h2>
            <p class="section-subtitle"><?php echo esc_html($rm_sub); ?></p>
        </div>
        
        <div class="rooms-showcase">
            <!-- Room 1: Sea Facing Single -->
            <article class="room-card-new">
                <div class="room-card-image">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/sea-facing-single-1.png" alt="Sea Facing Single Room">
                    <div class="room-card-badge">Sea View</div>
                    <div class="room-card-overlay">
                        <a href="<?php echo esc_url(home_url('/rooms/')); ?>" class="room-view-btn">
                            <span>View Room</span>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                        </a>
                    </div>
                </div>
                <div class="room-card-body">
                    <div class="room-meta">
                        <span class="room-type">Sea Facing</span>
                        <span class="room-bed">Single Bed</span>
                    </div>
                    <h3 class="room-name">Sea Facing Single Room</h3>
                    <p class="room-desc">A cosy retreat for solo travellers with stunning sea views. Comfortable and well-appointed with ensuite bathroom and WiFi.</p>
                    <div class="room-footer">
                        <a href="<?php echo esc_url(home_url('/rooms/')); ?>" class="room-link">Details &rarr;</a>
                    </div>
                </div>
            </article>
            
            <!-- Room 2: Sea Facing Double -->
            <article class="room-card-new featured">
                <div class="room-card-image">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/sea-facing-double-2.png" alt="Sea Facing Double Room">
                    <div class="room-card-badge gold">Most Popular</div>
                    <div class="room-card-overlay">
                        <a href="<?php echo esc_url(home_url('/rooms/')); ?>" class="room-view-btn">
                            <span>View Room</span>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                        </a>
                    </div>
                </div>
                <div class="room-card-body">
                    <div class="room-meta">
                        <span class="room-type">Sea Facing</span>
                        <span class="room-bed">Double Bed</span>
                    </div>
                    <h3 class="room-name">Sea Facing Double Room</h3>
                    <p class="room-desc">Spacious and elegant with breathtaking sea views. Features ensuite bathroom, flat-screen TV, and complimentary WiFi.</p>
                    <div class="room-footer">
                        <a href="<?php echo esc_url(home_url('/rooms/')); ?>" class="room-link">Details &rarr;</a>
                    </div>
                </div>
            </article>
            
            <!-- Room 3: Sea Facing Family -->
            <article class="room-card-new">
                <div class="room-card-image">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/sea-facing-family.png" alt="Sea Facing Family Room">
                    <div class="room-card-badge">Family</div>
                    <div class="room-card-overlay">
                        <a href="<?php echo esc_url(home_url('/rooms/')); ?>" class="room-view-btn">
                            <span>View Room</span>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                        </a>
                    </div>
                </div>
                <div class="room-card-body">
                    <div class="room-meta">
                        <span class="room-type">Sea Facing</span>
                        <span class="room-bed">Multiple Beds</span>
                    </div>
                    <h3 class="room-name">Sea Facing Family Room</h3>
                    <p class="room-desc">The ultimate family seaside experience. Generous space for everyone with sea views, ensuite bathroom and all modern amenities.</p>
                    <div class="room-footer">
                        <a href="<?php echo esc_url(home_url('/rooms/')); ?>" class="room-link">Details &rarr;</a>
                    </div>
                </div>
            </article>
        </div>
        
        <?php
        $rooms = new WP_Query(array(
            'post_type'      => 'room',
            'posts_per_page' => 3,
            'orderby'        => 'menu_order',
            'order'          => 'ASC',
        ));
        
        if ($rooms->have_posts()) :
        ?>
        <div class="rooms-grid" style="display:none;">
            <?php
            $delay = 0;
            while ($rooms->have_posts()) : $rooms->the_post();
                $price = get_post_meta(get_the_ID(), '_room_price', true);
                $view = get_post_meta(get_the_ID(), '_room_view', true);
                $bed_type = get_post_meta(get_the_ID(), '_room_bed_type', true);
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
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <line x1="5" y1="12" x2="19" y2="12"/>
                                    <polyline points="12 5 19 12 12 19"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="room-card-content">
                        <div class="room-card-meta">
                            <?php if ($view) : ?>
                                <span class="room-view"><?php echo esc_html(ucfirst($view)); ?> View</span>
                            <?php endif; ?>
                            <?php if ($bed_type) : ?>
                                <span class="room-bed"><?php echo esc_html(ucfirst(str_replace('-', ' ', $bed_type))); ?> Bed</span>
                            <?php endif; ?>
                        </div>
                        <h3 class="room-card-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h3>
                        <?php if (has_excerpt()) : ?>
                            <p class="room-card-excerpt"><?php echo esc_html(get_the_excerpt()); ?></p>
                        <?php endif; ?>
                        <div class="room-card-footer">
                            <div class="room-price">
                                <span class="price-from">From</span>
                                <span class="price-amount">&pound;<?php echo $price ? esc_html($price) : '70'; ?></span>
                                <span class="price-period">/ night</span>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="link-arrow small">
                                <span>Details</span>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <line x1="5" y1="12" x2="19" y2="12"/>
                                    <polyline points="12 5 19 12 12 19"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>
            <?php
                    $delay += 100;
                endwhile;
                wp_reset_postdata();
            else :
                $default_rooms = array(
                    array('name' => 'Sea View Deluxe', 'view' => 'Sea', 'bed' => 'King', 'price' => '95'),
                    array('name' => 'Garden Suite', 'view' => 'Garden', 'bed' => 'Super King', 'price' => '120'),
                    array('name' => 'Family Room', 'view' => 'Sea', 'bed' => 'Double + Twin', 'price' => '110'),
                );
                $delay = 0;
                foreach ($default_rooms as $room) :
            ?>
                <article class="room-card" data-animate="fade-up" data-delay="<?php echo esc_attr($delay); ?>">
                    <div class="room-card-image">
                        <div class="image-fallback">
                            <span><?php echo esc_html($room['name']); ?></span>
                        </div>
                        <div class="room-card-overlay">
                            <a href="<?php echo esc_url(home_url('/rooms/')); ?>" class="room-card-link">
                                <span>View Room</span>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <line x1="5" y1="12" x2="19" y2="12"/>
                                    <polyline points="12 5 19 12 12 19"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="room-card-content">
                        <div class="room-card-meta">
                            <span class="room-view"><?php echo esc_html($room['view']); ?> View</span>
                            <span class="room-bed"><?php echo esc_html($room['bed']); ?> Bed</span>
                        </div>
                        <h3 class="room-card-title">
                            <a href="<?php echo esc_url(home_url('/rooms/')); ?>"><?php echo esc_html($room['name']); ?></a>
                        </h3>
                        <p class="room-card-excerpt">Experience comfort with stunning views of the Devon coastline.</p>
                        <div class="room-card-footer">
                            <div class="room-price">
                                <span class="price-from">From</span>
                                <span class="price-amount">&pound;<?php echo esc_html($room['price']); ?></span>
                                <span class="price-period">/ night</span>
                            </div>
                            <a href="<?php echo esc_url(home_url('/rooms/')); ?>" class="link-arrow small">
                                <span>Details</span>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <line x1="5" y1="12" x2="19" y2="12"/>
                                    <polyline points="12 5 19 12 12 19"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>
            <?php
                    $delay += 100;
                endforeach;
            endif;
            ?>
        </div>
        
        <div class="section-action centered" data-animate="fade-up">
            <a href="<?php echo esc_url(home_url('/rooms/')); ?>" class="btn btn-secondary">
                <span><?php echo esc_html($rm_btn); ?></span>
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                    <line x1="5" y1="12" x2="19" y2="12"/>
                    <polyline points="12 5 19 12 12 19"/>
                </svg>
            </a>
        </div>
    </div>
</section>

<?php
    // Experience section ACF fields
    $exp_t   = ($acf ? get_field('experience_title') : '') ?: 'More Than';
    $exp_em  = ($acf ? get_field('experience_title_italic') : '') ?: 'Just a Stay';
    $exp_d   = ($acf ? get_field('experience_description') : '') ?: 'From intimate celebrations to culinary journeys, every moment at Ashton Court is crafted with care.';
    $exp_panels = array();
    for ($pi = 1; $pi <= 4; $pi++) {
        $exp_panels[] = array(
            'title' => ($acf ? get_field("exp_panel_{$pi}_title") : '') ?: '',
            'text'  => ($acf ? get_field("exp_panel_{$pi}_text") : '') ?: '',
            'link'  => ($acf ? get_field("exp_panel_{$pi}_link") : '') ?: '',
        );
    }
    $default_panels = array(
        array('title' => "Coronation\nGardens", 'text' => 'Relax in our tranquil private gardens overlooking the sea', 'link' => home_url('/about/'), 'link_text' => 'Discover', 'image' => '/assets/images/garden.jpg'),
        array('title' => "Dream\nWeddings", 'text' => 'Say "I do" with the sea as your witness', 'link' => home_url('/weddings/'), 'link_text' => 'Plan Your Day', 'image' => '/assets/images/view-exe.jpg'),
        array('title' => "The\nBar", 'text' => 'Unwind with a drink and enjoy the relaxed atmosphere', 'link' => home_url('/menus/'), 'link_text' => 'Explore', 'image' => '/assets/images/hotelbar.jpg'),
        array('title' => "Private\nEvents", 'text' => 'Bespoke functions with stunning views', 'link' => home_url('/functions/'), 'link_text' => 'Enquire', 'image' => '/assets/images/restaurant.png'),
    );
    foreach ($exp_panels as $i => &$ep) {
        if (empty($ep['title'])) $ep['title'] = $default_panels[$i]['title'];
        if (empty($ep['text']))  $ep['text']  = $default_panels[$i]['text'];
        if (empty($ep['link']))  $ep['link']  = $default_panels[$i]['link'];
    }
    unset($ep);
?>
<!-- The Ashton Experience -->
<section class="ashton-experience" id="experience">
    <div class="exp-intro">
        <div class="exp-intro-content">
            <span class="exp-number">03</span>
            <h2 class="exp-headline"><?php echo esc_html($exp_t); ?><br><em><?php echo esc_html($exp_em); ?></em></h2>
            <p class="exp-desc"><?php echo esc_html($exp_d); ?></p>
        </div>
    </div>
    
    <div class="exp-horizontal-wrapper">
        <div class="exp-horizontal-track">
            <!-- Item 1: Gardens -->
            <a href="<?php echo esc_url(home_url('/about/')); ?>" class="exp-panel exp-panel-link">
                <div class="exp-panel-bg">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/garden.jpg" alt="Coronation Gardens">
                </div>
                <div class="exp-panel-overlay"></div>
                <div class="exp-panel-content">
                    <span class="panel-num">01</span>
                    <h3>Coronation<br>Gardens</h3>
                    <p>Relax in our tranquil private gardens overlooking the sea</p>
                    <span class="panel-link">Discover</span>
                </div>
            </a>
            
            <!-- Item 2: Weddings -->
            <a href="<?php echo esc_url(home_url('/weddings/')); ?>" class="exp-panel exp-panel-link">
                <div class="exp-panel-bg">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/view-exe.jpg" alt="Weddings">
                </div>
                <div class="exp-panel-overlay"></div>
                <div class="exp-panel-content">
                    <span class="panel-num">02</span>
                    <h3>Dream<br>Weddings</h3>
                    <p>Say "I do" with the sea as your witness</p>
                    <span class="panel-link">Plan Your Day</span>
                </div>
            </a>
            
            <!-- Item 3: Bar -->
            <a href="<?php echo esc_url(home_url('/menus/')); ?>" class="exp-panel exp-panel-link">
                <div class="exp-panel-bg">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/hotelbar.jpg" alt="The Bar">
                </div>
                <div class="exp-panel-overlay"></div>
                <div class="exp-panel-content">
                    <span class="panel-num">03</span>
                    <h3>The<br>Bar</h3>
                    <p>Unwind with a drink and enjoy the relaxed atmosphere</p>
                    <span class="panel-link">Explore</span>
                </div>
            </a>
            
            <!-- Item 4: Events -->
            <a href="<?php echo esc_url(home_url('/functions/')); ?>" class="exp-panel exp-panel-link">
                <div class="exp-panel-bg">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/restaurant.png" alt="Private Events">
                </div>
                <div class="exp-panel-overlay"></div>
                <div class="exp-panel-content">
                    <span class="panel-num">04</span>
                    <h3>Private<br>Events</h3>
                    <p>Bespoke functions with stunning views</p>
                    <span class="panel-link">Enquire</span>
                </div>
            </a>
        </div>
    </div>
</section>


<?php
    // Reviews section ACF fields
    $rev_t   = ($acf ? get_field('reviews_title') : '') ?: 'Loved by Our Guests';
    $rev_s   = ($acf ? get_field('reviews_subtitle') : '') ?: 'Real experiences from real travellers on Google';
    $rev_url = ($acf ? get_field('reviews_google_url') : '') ?: 'https://www.google.com/travel/search?q=ashton+court+hotel';
    $reviews = array();
    for ($ri = 1; $ri <= 4; $ri++) {
        $reviews[] = array(
            'text'   => ($acf ? get_field("review_{$ri}_text") : '') ?: '',
            'author' => ($acf ? get_field("review_{$ri}_author") : '') ?: '',
            'rating' => ($acf ? get_field("review_{$ri}_rating") : '') ?: 5,
        );
    }
    $default_reviews = array(
        array('text' => 'Stayed here for 3 nights. We had a twin room with sea view and it was wonderful. Dog friendly and so accommodating. The hotel is literally on the sea front. Full English was lovely. Room was spacious, clean with a hot powerful shower. We will definitely be back.', 'author' => 'Shareen Akhtar'),
        array('text' => 'Close to the seafront and less than five minutes to the beach. The rooms are lovely with charm. Really spacious with comfortable beds. Stunning sea views right across the Riviera. The staff are friendly and helpful. Will definitely come again!', 'author' => 'O James'),
        array('text' => 'Very close to beach and the panoramic views are amazing. Watching boats, ferries up and down the estuary. Well situated and easily accessed. The stay was great and relaxing. Loved the smart TV! Lots to do nearby - watersports, cycling, walking along the promenade.', 'author' => 'Ann Illingworth'),
        array('text' => 'The location was fantastic - only a 2 minute walk to the sea front. I stayed in a single room which was very spacious with a tidy ensuite bathroom. The staff were all very friendly and welcoming with a laid back, relaxed atmosphere. Breakfast was great, fresh cooked to order!', 'author' => 'Stacey Wall'),
    );
    foreach ($reviews as $i => &$rv) {
        if (empty($rv['text']))   $rv['text']   = $default_reviews[$i]['text'];
        if (empty($rv['author'])) $rv['author'] = $default_reviews[$i]['author'];
        if (empty($rv['rating'])) $rv['rating'] = 5;
    }
    unset($rv);
?>
<!-- Google Reviews Section -->
<section class="google-reviews-section" id="reviews">
    <div class="reviews-container">
        <div class="reviews-header" data-animate="fade-up">
            <h2 class="reviews-title"><?php echo esc_html($rev_t); ?></h2>
            <p class="reviews-subtitle"><?php echo esc_html($rev_s); ?></p>
        </div>

        <!-- Reviews Grid -->
        <div class="reviews-grid-premium">
            <!-- Review 1 -->
            <article class="review-card-premium" data-animate="fade-up">
                <div class="review-quote-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1">
                        <path d="M3 21c3 0 7-1 7-8V5c0-1.25-.756-2.017-2-2H4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2 1 0 1 0 1 1v1c0 1-1 2-2 2s-1 .008-1 1.031V21c0 1 0 1 1 1z"/>
                        <path d="M15 21c3 0 7-1 7-8V5c0-1.25-.757-2.017-2-2h-4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2h.75c0 2.25.25 4-2.75 4v3c0 1 0 1 1 1z"/>
                    </svg>
                </div>
                <div class="review-stars-row">
                    <svg viewBox="0 0 24 24" fill="#BF9B60"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg viewBox="0 0 24 24" fill="#BF9B60"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg viewBox="0 0 24 24" fill="#BF9B60"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg viewBox="0 0 24 24" fill="#BF9B60"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg viewBox="0 0 24 24" fill="#BF9B60"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                </div>
                <p class="review-text-premium">"Stayed here for 3 nights. We had a twin room with sea view and it was wonderful. Dog friendly and so accommodating. The hotel is literally on the sea front. Full English was lovely. Room was spacious, clean with a hot powerful shower. We will definitely be back."</p>
                <div class="review-author-premium">
                    <span class="author-name-premium">Shareen Akhtar</span>
                    <span class="author-source">Google Review</span>
                </div>
            </article>

            <!-- Review 2 -->
            <article class="review-card-premium" data-animate="fade-up" data-delay="100">
                <div class="review-quote-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1">
                        <path d="M3 21c3 0 7-1 7-8V5c0-1.25-.756-2.017-2-2H4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2 1 0 1 0 1 1v1c0 1-1 2-2 2s-1 .008-1 1.031V21c0 1 0 1 1 1z"/>
                        <path d="M15 21c3 0 7-1 7-8V5c0-1.25-.757-2.017-2-2h-4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2h.75c0 2.25.25 4-2.75 4v3c0 1 0 1 1 1z"/>
                    </svg>
                </div>
                <div class="review-stars-row">
                    <svg viewBox="0 0 24 24" fill="#BF9B60"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg viewBox="0 0 24 24" fill="#BF9B60"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg viewBox="0 0 24 24" fill="#BF9B60"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg viewBox="0 0 24 24" fill="#BF9B60"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg viewBox="0 0 24 24" fill="#BF9B60"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                </div>
                <p class="review-text-premium">"Close to the seafront and less than five minutes to the beach. The rooms are lovely with charm. Really spacious with comfortable beds. Stunning sea views right across the Riviera. The staff are friendly and helpful. Will definitely come again!"</p>
                <div class="review-author-premium">
                    <span class="author-name-premium">O James</span>
                    <span class="author-source">Google Review</span>
                </div>
            </article>

            <!-- Review 3 -->
            <article class="review-card-premium" data-animate="fade-up" data-delay="200">
                <div class="review-quote-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1">
                        <path d="M3 21c3 0 7-1 7-8V5c0-1.25-.756-2.017-2-2H4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2 1 0 1 0 1 1v1c0 1-1 2-2 2s-1 .008-1 1.031V21c0 1 0 1 1 1z"/>
                        <path d="M15 21c3 0 7-1 7-8V5c0-1.25-.757-2.017-2-2h-4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2h.75c0 2.25.25 4-2.75 4v3c0 1 0 1 1 1z"/>
                    </svg>
                </div>
                <div class="review-stars-row">
                    <svg viewBox="0 0 24 24" fill="#BF9B60"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg viewBox="0 0 24 24" fill="#BF9B60"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg viewBox="0 0 24 24" fill="#BF9B60"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg viewBox="0 0 24 24" fill="#BF9B60"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg viewBox="0 0 24 24" fill="#BF9B60"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                </div>
                <p class="review-text-premium">"Very close to beach and the panoramic views are amazing. Watching boats, ferries up and down the estuary. Well situated and easily accessed. The stay was great and relaxing. Loved the smart TV! Lots to do nearby - watersports, cycling, walking along the promenade."</p>
                <div class="review-author-premium">
                    <span class="author-name-premium">Ann Illingworth</span>
                    <span class="author-source">Google Review</span>
                </div>
            </article>

            <!-- Review 4 -->
            <article class="review-card-premium" data-animate="fade-up" data-delay="300">
                <div class="review-quote-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1">
                        <path d="M3 21c3 0 7-1 7-8V5c0-1.25-.756-2.017-2-2H4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2 1 0 1 0 1 1v1c0 1-1 2-2 2s-1 .008-1 1.031V21c0 1 0 1 1 1z"/>
                        <path d="M15 21c3 0 7-1 7-8V5c0-1.25-.757-2.017-2-2h-4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2h.75c0 2.25.25 4-2.75 4v3c0 1 0 1 1 1z"/>
                    </svg>
                </div>
                <div class="review-stars-row">
                    <svg viewBox="0 0 24 24" fill="#BF9B60"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg viewBox="0 0 24 24" fill="#BF9B60"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg viewBox="0 0 24 24" fill="#BF9B60"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg viewBox="0 0 24 24" fill="#BF9B60"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg viewBox="0 0 24 24" fill="#BF9B60"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                </div>
                <p class="review-text-premium">"The location was fantastic - only a 2 minute walk to the sea front. I stayed in a single room which was very spacious with a tidy ensuite bathroom. The staff were all very friendly and welcoming with a laid back, relaxed atmosphere. Breakfast was great, fresh cooked to order!"</p>
                <div class="review-author-premium">
                    <span class="author-name-premium">Stacey Wall</span>
                    <span class="author-source">Google Review</span>
                </div>
            </article>
        </div>

        <!-- CTA -->
        <div class="reviews-cta" data-animate="fade-up">
            <a href="https://www.google.com/travel/search?q=ashton+court+hotel" target="_blank" rel="noopener" class="btn-view-reviews">
                <svg class="google-icon-small" viewBox="0 0 24 24" width="20" height="20">
                    <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                    <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                    <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                    <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                </svg>
                <span>Read All Reviews on Google</span>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <line x1="7" y1="17" x2="17" y2="7"/>
                    <polyline points="7 7 17 7 17 17"/>
                </svg>
            </a>
        </div>
    </div>
</section>

<?php
}
