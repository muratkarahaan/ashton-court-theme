<?php
if (!defined('ABSPATH')) exit;

$eyebrow    = get_sub_field('eyebrow') ?: 'Est. 1890 · Devon Coast';
$title_1    = get_sub_field('title_line_1') ?: 'Where Comfort';
$title_2    = get_sub_field('title_line_2') ?: 'Meets the Coast';
$desc       = get_sub_field('description') ?: 'A friendly seaside retreat with stunning views of the Exe Estuary.';
$location   = get_sub_field('location') ?: 'Exmouth, Devon';
$bg_image   = get_sub_field('background_image') ?: esc_url(ASHTON_THEME_URI) . '/assets/images/hero-bg.jpg';
?>

<section class="hero-section hero-cinematic hero-elegant hero-with-image" id="hero">
    <div class="hero-background">
        <div class="hero-bg-image">
            <img src="<?php echo esc_url($bg_image); ?>" alt="Ashton Court Hotel View">
        </div>
        <div class="hero-gradient-mesh">
            <div class="gradient-orb gradient-orb-1"></div>
            <div class="gradient-orb gradient-orb-2"></div>
            <div class="gradient-orb gradient-orb-3"></div>
            <div class="gradient-orb gradient-orb-4"></div>
        </div>
        <div class="hero-color-overlay"></div>
        <div class="hero-noise"></div>
    </div>
    
    <div class="hero-content">
        <div class="container">
            <div class="hero-inner">
                <div class="hero-eyebrow">
                    <span class="eyebrow-line"></span>
                    <span class="eyebrow-text"><?php echo esc_html($eyebrow); ?></span>
                    <span class="eyebrow-line"></span>
                </div>
                
                <h1 class="hero-headline">
                    <span class="headline-top"><?php echo esc_html($title_1); ?></span>
                    <span class="headline-accent"><?php echo esc_html($title_2); ?></span>
                </h1>
                
                <p class="hero-description">
                    <?php echo esc_html($desc); ?><br>
                    <span class="description-location"><?php echo esc_html($location); ?></span>
                </p>
            </div>
        </div>
    </div>
    
    <div class="hero-booking-widget" data-animate="fade-up" data-delay="800">
        <div class="container">
            <form class="booking-bar" id="hero-booking-form">
                <?php wp_nonce_field('ashton_booking_form', 'booking_nonce'); ?>
                <div class="booking-bar-inner">
                    <div class="booking-field">
                        <label for="hero-checkin">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                            <span>Check In</span>
                        </label>
                        <input type="date" id="hero-checkin" name="checkin" required>
                    </div>
                    <div class="booking-divider"></div>
                    <div class="booking-field">
                        <label for="hero-checkout">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                            <span>Check Out</span>
                        </label>
                        <input type="date" id="hero-checkout" name="checkout" required>
                    </div>
                    <div class="booking-divider"></div>
                    <div class="booking-field booking-field-select">
                        <label for="hero-guests">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
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
                    <div class="booking-field booking-field-select">
                        <label for="hero-rooms">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                            <span>Rooms</span>
                        </label>
                        <select id="hero-rooms" name="rooms">
                            <option value="1" selected>1 Room</option>
                            <option value="2">2 Rooms</option>
                            <option value="3">3 Rooms</option>
                            <option value="4">4+ Rooms</option>
                        </select>
                    </div>
                    <button type="submit" class="booking-submit">
                        <span>Check Availability</span>
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                    </button>
                </div>
                <div class="booking-price-hint">
                    <span>From <strong>&pound;<?php echo esc_html(get_theme_mod('ashton_starting_price', '70')); ?></strong> per night</span>
                    <span class="separator">&bull;</span>
                    <span>Best Rate Guaranteed</span>
                </div>
            </form>
        </div>
    </div>
    
    <link rel="stylesheet" href="https://static-assets.clock-software.com/wbe_v2/clock-pms-wbe-integration.css">
    <link rel="stylesheet" href="https://static-assets.clock-software.com/wbe_v2/clock-pms-wbe-reminder.css">
    <script defer src="https://static-assets.clock-software.com/wbe_v2/clock-pms-wbe-integration.js"></script>
    <script>
    (function() {
        function initClockPms() {
            if (typeof window.clockPmsWbeInit === 'function') {
                window.clockPmsWbeInit({wbeBaseUrl:"https://sky-eu1.clock-software.com/spa/pms-wbe/#/hotel/11928",entrypoint:"rooms",defaultMode:"standard",roundedCorners:true,language:null});
                return true;
            }
            return false;
        }
        document.addEventListener('DOMContentLoaded', function() {
            if (!initClockPms()) {
                var ci = setInterval(function() { if (initClockPms()) clearInterval(ci); }, 500);
                setTimeout(function() { clearInterval(ci); }, 10000);
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
                window.clockPmsWbeShow({arrival:checkin||null,departure:checkout||null,adults:parseInt(guests)||2,children:0,submit:true});
            } else {
                window.open('https://sky-eu1.clock-software.com/spa/pms-wbe/#/hotel/11928','_blank','noopener');
            }
        });
    })();
    </script>
    
    <div class="hero-scroll" data-animate="fade-up" data-delay="1000">
        <div class="scroll-mouse"><div class="scroll-wheel"></div></div>
        <span>Discover</span>
    </div>
</section>
