<?php
if (!defined('ABSPATH')) exit;
/**
 * Archive Template for Rooms
 * Beautiful showcase page with external booking
 *
 * @package Ashton_Court
 */

get_header();
?>
<div class="container"><?php ashton_breadcrumbs(); ?></div>
<?php
$booking_url = 'https://sky-eu1.clock-software.com/spa/pms-wbe/#/hotel/11928';
$theme_uri = ASHTON_THEME_URI;
?>

<style>
/* ==========================================
   ROOMS PAGE - Premium Design
   ========================================== */

/* Hero */
.rooms-hero {
    position: relative;
    width: 100%;
    height: 70vh;
    min-height: 500px;
    max-height: 800px;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    background-color: #2c3e2d;
}
.rooms-hero-bg {
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    z-index: 0;
}
.rooms-hero-bg img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center 40%;
    display: block;
}
.rooms-hero-overlay {
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    background: linear-gradient(to bottom, rgba(26,26,26,0.55) 0%, rgba(26,26,26,0.7) 100%);
    z-index: 1;
}
.rooms-hero-content {
    position: relative;
    z-index: 2;
    text-align: center;
    padding: 2rem 1.5rem;
    max-width: 800px;
    margin: 0 auto;
    width: 100%;
}
.rooms-hero-title {
    font-family: var(--font-heading, 'Cormorant Garamond', serif);
    font-size: clamp(2.8rem, 2rem + 3.5vw, 5rem);
    font-weight: 400;
    color: #fff;
    line-height: 1.15;
    margin: 1rem 0 1.25rem;
}
.rooms-hero-subtitle {
    font-family: var(--font-body, 'Jost', sans-serif);
    font-size: clamp(1rem, 0.95rem + 0.3vw, 1.125rem);
    color: rgba(255,255,255,0.8);
    line-height: 1.7;
    max-width: 600px;
    margin: 0 auto 2.5rem;
}
.btn-rooms-hero {
    display: inline-flex;
    align-items: center;
    gap: 0.75rem;
    padding: 1rem 2.5rem;
    background: #B8956B;
    color: #fff;
    font-family: var(--font-body, 'Jost', sans-serif);
    font-size: 0.875rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    text-decoration: none;
    border-radius: 2px;
    transition: all 0.4s ease;
}
.btn-rooms-hero:hover {
    background: #9A7A54;
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(184,149,107,0.4);
    color: #fff;
}

/* Room Showcase Section */
.rooms-showcase {
    background: #FDFCFA;
    width: 100% !important;
    padding: clamp(4rem, 3rem + 5vw, 8rem) 0;
}
.rooms-showcase-container {
    width: 100% !important;
    max-width: 1400px !important;
    margin-left: auto !important;
    margin-right: auto !important;
    padding-left: clamp(1.5rem, 1rem + 2vw, 3rem);
    padding-right: clamp(1.5rem, 1rem + 2vw, 3rem);
    box-sizing: border-box;
}
.rooms-intro {
    text-align: center !important;
    max-width: 650px !important;
    margin: 0 auto 4rem !important;
}
.rooms-intro-text {
    color: #4A4A4A;
    font-size: clamp(1rem, 0.95rem + 0.3vw, 1.125rem);
    line-height: 1.8;
    margin-top: 1rem;
}

/* Room Showcase Cards - Using Flexbox */
.room-showcase-card {
    display: flex !important;
    flex-direction: row !important;
    align-items: center;
    gap: 4rem;
    margin-bottom: 5rem;
    width: 100% !important;
    box-sizing: border-box;
}
.room-showcase-card:last-of-type {
    margin-bottom: 0;
}
.room-showcase-reverse {
    flex-direction: row-reverse !important;
}
.room-showcase-image {
    position: relative;
    border-radius: 4px;
    overflow: hidden;
    flex: 0 0 50% !important;
    max-width: 50% !important;
    min-height: 350px;
}
.room-showcase-image img {
    width: 100% !important;
    height: 100% !important;
    min-height: 350px;
    object-fit: cover !important;
    display: block !important;
    position: absolute;
    top: 0;
    left: 0;
    transition: transform 0.8s cubic-bezier(0.16, 1, 0.3, 1);
}
.room-showcase-card:hover .room-showcase-image img {
    transform: scale(1.03);
}
.room-showcase-info {
    flex: 1 1 0% !important;
    min-width: 0;
}
.room-showcase-badge {
    position: absolute;
    top: 1.25rem;
    left: 1.25rem;
    padding: 0.4rem 1rem;
    background: #B8956B;
    color: #fff;
    font-family: var(--font-body, 'Jost', sans-serif);
    font-size: 0.7rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.12em;
    border-radius: 2px;
    z-index: 2;
}
.room-showcase-reverse .room-showcase-badge {
    left: auto;
    right: 1.25rem;
}
.room-showcase-info {
    width: 100%;
}
.room-showcase-label {
    display: block;
    font-family: var(--font-body, 'Jost', sans-serif);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.2em;
    color: #B8956B;
    margin-bottom: 0.5rem;
}
.room-showcase-title {
    font-family: var(--font-heading, 'Cormorant Garamond', serif);
    font-size: clamp(1.8rem, 1.4rem + 1.5vw, 2.5rem);
    font-weight: 400;
    color: #1A1A1A;
    margin-bottom: 1rem;
    line-height: 1.2;
}
.room-showcase-desc {
    color: #4A4A4A;
    line-height: 1.75;
    margin-bottom: 1.5rem;
}

/* Room Features */
.room-showcase-features {
    list-style: none;
    padding: 0;
    margin: 0 0 1.75rem;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 0.75rem;
}
.room-showcase-features li {
    display: flex;
    align-items: center;
    gap: 0.6rem;
    font-size: 0.875rem;
    color: #4A4A4A;
}
.room-showcase-features svg {
    color: #B8956B;
    flex-shrink: 0;
}

/* Book Room Button */
.btn-room-book {
    display: inline-flex;
    align-items: center;
    gap: 0.6rem;
    padding: 0.85rem 2rem;
    background: #1A1A1A;
    color: #fff;
    font-family: var(--font-body, 'Jost', sans-serif);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    text-decoration: none;
    border-radius: 2px;
    transition: all 0.4s ease;
}
.btn-room-book:hover {
    background: #B8956B;
    color: #fff;
    transform: translateY(-1px);
    box-shadow: 0 4px 15px rgba(184,149,107,0.3);
}

/* Highlights Strip */
.rooms-highlights {
    background: #1A1A1A;
    padding: 4rem 0;
    width: 100%;
}
.rooms-highlights > .container {
    width: 100%;
    max-width: 1400px;
    margin-left: auto;
    margin-right: auto;
    padding-left: clamp(1.5rem, 1rem + 2vw, 3rem);
    padding-right: clamp(1.5rem, 1rem + 2vw, 3rem);
    box-sizing: border-box;
}
.highlights-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 2.5rem;
}
.highlight-item {
    text-align: center;
    padding: 1rem;
}
.highlight-item svg {
    color: #B8956B;
    margin-bottom: 1rem;
}
.highlight-item h4 {
    font-family: var(--font-heading, 'Cormorant Garamond', serif);
    font-size: 1.25rem;
    font-weight: 500;
    color: #fff;
    margin-bottom: 0.4rem;
}
.highlight-item p {
    font-size: 0.875rem;
    color: rgba(255,255,255,0.6);
    line-height: 1.5;
}

/* View Feature Section */
.rooms-view-feature {
    background: #F5F3EF;
    width: 100%;
    padding: clamp(4rem, 3rem + 5vw, 8rem) 0;
}
.rooms-view-feature > .container {
    width: 100%;
    max-width: 1400px;
    margin-left: auto;
    margin-right: auto;
    padding-left: clamp(1.5rem, 1rem + 2vw, 3rem);
    padding-right: clamp(1.5rem, 1rem + 2vw, 3rem);
    box-sizing: border-box;
}
.view-feature-grid {
    display: grid;
    grid-template-columns: 1.1fr 0.9fr;
    gap: 4rem;
    align-items: center;
}
.view-feature-image {
    border-radius: 4px;
    overflow: hidden;
    aspect-ratio: 3/2;
}
.view-feature-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}
.view-feature-content p {
    color: #4A4A4A;
    line-height: 1.8;
    margin-bottom: 1rem;
}
.view-feature-content .link-arrow {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    color: #B8956B;
    font-weight: 500;
    text-decoration: none;
    margin-top: 1rem;
    transition: gap 0.3s ease;
}
.view-feature-content .link-arrow:hover {
    gap: 0.8rem;
}

/* Booking Widget */
.rooms-booking-widget {
    background: #fff;
    width: 100%;
    padding: 0;
    position: relative;
    z-index: 10;
}
.rooms-booking-inner {
    width: 100%;
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 clamp(1.5rem, 1rem + 2vw, 3rem);
    box-sizing: border-box;
}
.rooms-booking-bar {
    display: flex;
    align-items: center;
    gap: 0;
    background: #fff;
    border-radius: 4px;
    box-shadow: 0 15px 50px rgba(0,0,0,0.12), 0 5px 15px rgba(0,0,0,0.08);
    margin-top: -2.5rem;
    position: relative;
    z-index: 10;
    overflow: hidden;
    border: 1px solid #E8E4DC;
}
.rooms-booking-field {
    flex: 1;
    padding: 1.25rem 1.5rem;
    display: flex;
    flex-direction: column;
    gap: 0.35rem;
    border-right: 1px solid #E8E4DC;
    position: relative;
}
.rooms-booking-field:last-of-type {
    border-right: none;
}
.rooms-booking-field label {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-family: var(--font-body, 'Jost', sans-serif);
    font-size: 0.65rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    color: #B8956B;
}
.rooms-booking-field label svg {
    color: #B8956B;
}
.rooms-booking-field input,
.rooms-booking-field select {
    border: none;
    outline: none;
    background: transparent;
    font-family: var(--font-body, 'Jost', sans-serif);
    font-size: 1rem;
    color: #1A1A1A;
    padding: 0;
    width: 100%;
    cursor: pointer;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}
.rooms-booking-field input[type="date"]::-webkit-calendar-picker-indicator {
    opacity: 0.5;
    cursor: pointer;
}
.rooms-booking-submit {
    flex-shrink: 0;
    padding: 0 2.5rem;
    background: #B8956B;
    color: #fff;
    border: none;
    cursor: pointer;
    font-family: var(--font-body, 'Jost', sans-serif);
    font-size: 0.8rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.12em;
    display: flex;
    align-items: center;
    gap: 0.75rem;
    min-height: 100%;
    align-self: stretch;
    transition: background 0.3s ease;
}
.rooms-booking-submit:hover {
    background: #9A7A54;
}

@media (max-width: 768px) {
    .rooms-booking-bar {
        flex-direction: column;
        margin-top: -2rem;
    }
    .rooms-booking-field {
        width: 100%;
        border-right: none;
        border-bottom: 1px solid #E8E4DC;
        padding: 1rem 1.25rem;
        box-sizing: border-box;
    }
    .rooms-booking-submit {
        width: 100%;
        padding: 1.25rem 2rem;
        justify-content: center;
    }
}

/* CTA Section */
.rooms-cta {
    position: relative;
    padding: 7rem 0;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    min-height: 500px;
}
.rooms-cta-bg {
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    z-index: 0;
}
.rooms-cta-bg img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}
.rooms-cta-overlay {
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    background: linear-gradient(135deg, rgba(26,26,26,0.85) 0%, rgba(44,62,45,0.8) 100%);
    z-index: 1;
}
.rooms-cta-content {
    position: relative;
    z-index: 2;
    text-align: center;
    max-width: 700px;
    padding: 0 1.5rem;
    margin: 0 auto;
    width: 100%;
}
.rooms-cta-title {
    font-family: var(--font-heading, 'Cormorant Garamond', serif);
    font-size: clamp(2.2rem, 1.6rem + 2.5vw, 3.5rem);
    font-weight: 400;
    color: #fff;
    margin: 1rem 0 1.25rem;
    line-height: 1.15;
}
.rooms-cta-text {
    font-size: clamp(1rem, 0.95rem + 0.3vw, 1.125rem);
    color: rgba(255,255,255,0.75);
    line-height: 1.7;
    margin-bottom: 2.5rem;
}
.rooms-cta-actions {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 1.25rem;
    flex-wrap: wrap;
}
.btn-cta-primary {
    display: inline-flex;
    align-items: center;
    gap: 0.75rem;
    padding: 1.1rem 2.5rem;
    background: #B8956B;
    color: #fff;
    font-family: var(--font-body, 'Jost', sans-serif);
    font-size: 0.875rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.12em;
    text-decoration: none;
    border-radius: 2px;
    transition: all 0.4s ease;
}
.btn-cta-primary:hover {
    background: #fff;
    color: #1A1A1A;
    transform: translateY(-2px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.2);
}
.btn-cta-secondary {
    display: inline-flex;
    align-items: center;
    gap: 0.6rem;
    padding: 1.1rem 2rem;
    background: transparent;
    color: #fff;
    font-family: var(--font-body, 'Jost', sans-serif);
    font-size: 0.875rem;
    font-weight: 500;
    text-decoration: none;
    border: 1px solid rgba(255,255,255,0.35);
    border-radius: 2px;
    transition: all 0.4s ease;
}
.btn-cta-secondary:hover {
    background: rgba(255,255,255,0.1);
    border-color: rgba(255,255,255,0.6);
    color: #fff;
}
.rooms-cta-note {
    font-size: 0.75rem;
    color: rgba(255,255,255,0.45);
    margin-top: 2rem;
    letter-spacing: 0.03em;
}

/* Eyebrow override for rooms page */
.rooms-hero .hero-eyebrow,
.rooms-cta .hero-eyebrow {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 1.25rem;
    margin-bottom: 0.5rem;
}
.rooms-hero .eyebrow-line,
.rooms-cta .eyebrow-line {
    display: block;
    width: 40px !important;
    height: 1px;
    background: rgba(255,255,255,0.4);
}
.rooms-hero .eyebrow-text,
.rooms-cta .eyebrow-text {
    font-family: var(--font-body, 'Jost', sans-serif);
    font-size: 0.7rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.25em;
    color: rgba(255,255,255,0.8);
}

/* ==========================================
   RESPONSIVE
   ========================================== */
@media (max-width: 1024px) {
    .room-showcase-card {
        gap: 2.5rem !important;
    }
    .highlights-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 768px) {
    .rooms-hero {
        height: 55vh;
        min-height: 400px;
    }
    .room-showcase-card,
    .room-showcase-card.room-showcase-reverse {
        flex-direction: column !important;
        gap: 2rem !important;
    }
    .room-showcase-image {
        flex: 0 0 auto !important;
        max-width: 100% !important;
        width: 100% !important;
        min-height: 250px;
    }
    .room-showcase-features {
        grid-template-columns: 1fr;
    }
    .view-feature-grid {
        grid-template-columns: 1fr;
        gap: 2rem;
    }
    .rooms-cta {
        padding: 5rem 0;
        min-height: auto;
    }
    .rooms-cta-actions {
        flex-direction: column;
    }
    .rooms-cta-actions a {
        width: 100%;
        justify-content: center;
    }
}

@media (max-width: 480px) {
    .highlights-grid {
        grid-template-columns: 1fr;
    }
    .rooms-hero {
        height: 50vh;
        min-height: 350px;
    }
    .rooms-hero-title {
        font-size: clamp(2rem, 8vw, 3rem);
    }
    .rooms-hero-subtitle {
        font-size: 0.9rem;
    }
    .rooms-booking-bar {
        margin-top: -1.5rem;
    }
    .rooms-booking-field {
        padding: 0.85rem 1rem;
    }
    .rooms-booking-submit {
        padding: 1rem 1.5rem;
        font-size: 0.7rem;
    }
    .room-showcase-image {
        min-height: 220px !important;
    }
    .room-showcase-title {
        font-size: 1.5rem !important;
    }
    .btn-room-book {
        width: 100%;
        justify-content: center;
    }
    .rooms-cta-title {
        font-size: clamp(1.8rem, 7vw, 2.5rem);
    }
}
</style>

<!-- Page Hero - Full Width with Overlay -->
<section class="rooms-hero">
    <div class="rooms-hero-bg">
        <img src="<?php echo esc_url($theme_uri); ?>/assets/images/sea-facing-double-1.png" alt="Ashton Court Hotel - Sea Facing Double Room">
    </div>
    <div class="rooms-hero-overlay"></div>
    <div class="rooms-hero-content">
        <div class="hero-eyebrow">
            <span class="eyebrow-line"></span>
            <span class="eyebrow-text">Accommodation</span>
            <span class="eyebrow-line"></span>
        </div>
        <h1 class="rooms-hero-title">Your Seaside Retreat Awaits</h1>
        <p class="rooms-hero-subtitle">
            Choose from <?php echo esc_html(get_theme_mod('ashton_total_rooms', '45')); ?> beautifully appointed ensuite rooms, 
            each offering comfort, character, and stunning views of the Devon coast.
        </p>
        <a href="#rooms-booking-form" class="btn-rooms-hero" onclick="document.getElementById('rooms-checkin').focus(); return false;">
            <span>Check Availability</span>
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <line x1="5" y1="12" x2="19" y2="12"/>
                <polyline points="12 5 19 12 12 19"/>
            </svg>
        </a>
    </div>
</section>

<!-- Booking Widget -->
<section class="rooms-booking-widget">
    <div class="rooms-booking-inner">
        <form class="rooms-booking-bar" id="rooms-booking-form">
            <?php wp_nonce_field('ashton_booking_form', 'booking_nonce'); ?>
            <div class="rooms-booking-field">
                <label for="rooms-checkin">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                        <line x1="16" y1="2" x2="16" y2="6"/>
                        <line x1="8" y1="2" x2="8" y2="6"/>
                        <line x1="3" y1="10" x2="21" y2="10"/>
                    </svg>
                    Check In
                </label>
                <input type="date" id="rooms-checkin" name="checkin" required>
            </div>
            <div class="rooms-booking-field">
                <label for="rooms-checkout">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                        <line x1="16" y1="2" x2="16" y2="6"/>
                        <line x1="8" y1="2" x2="8" y2="6"/>
                        <line x1="3" y1="10" x2="21" y2="10"/>
                    </svg>
                    Check Out
                </label>
                <input type="date" id="rooms-checkout" name="checkout" required>
            </div>
            <div class="rooms-booking-field">
                <label for="rooms-guests">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/>
                        <circle cx="12" cy="7" r="4"/>
                    </svg>
                    Guests
                </label>
                <select id="rooms-guests" name="guests">
                    <option value="1">1 Guest</option>
                    <option value="2" selected>2 Guests</option>
                    <option value="3">3 Guests</option>
                    <option value="4">4 Guests</option>
                    <option value="5">5+ Guests</option>
                </select>
            </div>
            <button type="submit" class="rooms-booking-submit">
                <span>Check Availability</span>
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="11" cy="11" r="8"/>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"/>
                </svg>
            </button>
        </form>
    </div>
</section>

<!-- ========== SEA FACING ROOMS ========== -->
<section style="background: #FDFCFA; width: 100%; padding: clamp(4rem, 3rem + 5vw, 8rem) 0;">
    <div style="width: 100%; max-width: 1400px; margin-left: auto; margin-right: auto; padding-left: clamp(1.5rem, 1rem + 2vw, 3rem); padding-right: clamp(1.5rem, 1rem + 2vw, 3rem); box-sizing: border-box;">
        <div style="text-align: center; max-width: 650px; margin: 0 auto 4rem auto;">
            <span class="section-tagline" style="opacity:1; transform:none;">Sea Facing Rooms</span>
            <h2 class="section-title" style="opacity:1; transform:none;">Wake Up to the Sea</h2>
            <p style="color: #4A4A4A; font-size: clamp(1rem, 0.95rem + 0.3vw, 1.125rem); line-height: 1.8; margin-top: 1rem;">
                Our sea facing rooms offer stunning views across the Exe Estuary. Watch the boats drift by, 
                catch a spectacular Devon sunset, and enjoy the tranquil waterside atmosphere.
            </p>
        </div>

        <!-- 1. Sea Facing Double Room -->
        <div style="display: flex; flex-direction: row; align-items: center; gap: 4rem; margin-bottom: 5rem; width: 100%; box-sizing: border-box;">
            <div style="position: relative; border-radius: 4px; overflow: hidden; flex: 0 0 50%; max-width: 50%; min-height: 380px;">
                <img src="<?php echo esc_url($theme_uri); ?>/assets/images/sea-facing-double-2.png" alt="Sea Facing Double Room" style="width: 100%; height: 100%; min-height: 380px; object-fit: cover; display: block; position: absolute; top: 0; left: 0;">
                <div class="room-showcase-badge" style="position: absolute; top: 1.25rem; left: 1.25rem; padding: 0.4rem 1rem; background: #B8956B; color: #fff; font-size: 0.7rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.12em; border-radius: 2px; z-index: 2;">Most Popular</div>
            </div>
            <div style="flex: 1 1 0%; min-width: 0;">
                <span class="room-showcase-label">Sea Facing Double</span>
                <h3 class="room-showcase-title">Sea Facing Double Room</h3>
                <p class="room-showcase-desc">
                    Our most popular choice. Enjoy breathtaking sea views from the comfort of a beautifully 
                    appointed double room, complete with ensuite bathroom and all the amenities you need for a perfect stay.
                </p>
                <ul class="room-showcase-features">
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                        <span>Sleeps 2 guests</span>
                    </li>
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7z"/><circle cx="12" cy="12" r="3"/></svg>
                        <span>Sea view</span>
                    </li>
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg>
                        <span>Ensuite bathroom</span>
                    </li>
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="M2 8h20"/></svg>
                        <span>Flat screen TV</span>
                    </li>
                </ul>
                <a href="<?php echo esc_url($booking_url); ?>" target="_blank" rel="noopener" class="btn-room-book">
                    <span>Book This Room</span>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="5" y1="12" x2="19" y2="12"/>
                        <polyline points="12 5 19 12 12 19"/>
                    </svg>
                </a>
            </div>
        </div>

        <!-- 2. Sea Facing Twin Room -->
        <div style="display: flex; flex-direction: row-reverse; align-items: center; gap: 4rem; margin-bottom: 5rem; width: 100%; box-sizing: border-box;">
            <div style="position: relative; border-radius: 4px; overflow: hidden; flex: 0 0 50%; max-width: 50%; min-height: 380px;">
                <img src="<?php echo esc_url($theme_uri); ?>/assets/images/sea-facing-twin-1.png" alt="Sea Facing Twin Room" style="width: 100%; height: 100%; min-height: 380px; object-fit: cover; display: block; position: absolute; top: 0; left: 0;">
                <div class="room-showcase-badge" style="position: absolute; top: 1.25rem; right: 1.25rem; padding: 0.4rem 1rem; background: #B8956B; color: #fff; font-size: 0.7rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.12em; border-radius: 2px; z-index: 2;">Sea View</div>
            </div>
            <div style="flex: 1 1 0%; min-width: 0;">
                <span class="room-showcase-label">Sea Facing Twin</span>
                <h3 class="room-showcase-title">Sea Facing Twin Room</h3>
                <p class="room-showcase-desc">
                    Perfect for friends or colleagues travelling together. Two comfortable single beds 
                    with wonderful sea views, ensuite facilities, and all the comforts of home.
                </p>
                <ul class="room-showcase-features">
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                        <span>Sleeps 2 guests</span>
                    </li>
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7z"/><circle cx="12" cy="12" r="3"/></svg>
                        <span>Sea view</span>
                    </li>
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg>
                        <span>Ensuite bathroom</span>
                    </li>
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M18 8h1a4 4 0 010 8h-1M2 8h16v9a4 4 0 01-4 4H6a4 4 0 01-4-4V8zM6 1v3M10 1v3M14 1v3"/></svg>
                        <span>Tea &amp; coffee making</span>
                    </li>
                </ul>
                <a href="<?php echo esc_url($booking_url); ?>" target="_blank" rel="noopener" class="btn-room-book">
                    <span>Book This Room</span>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="5" y1="12" x2="19" y2="12"/>
                        <polyline points="12 5 19 12 12 19"/>
                    </svg>
                </a>
            </div>
        </div>

        <!-- 3. Sea Facing Single Room -->
        <div style="display: flex; flex-direction: row; align-items: center; gap: 4rem; margin-bottom: 5rem; width: 100%; box-sizing: border-box;">
            <div style="position: relative; border-radius: 4px; overflow: hidden; flex: 0 0 50%; max-width: 50%; min-height: 380px;">
                <img src="<?php echo esc_url($theme_uri); ?>/assets/images/sea-facing-single-1.png" alt="Sea Facing Single Room" style="width: 100%; height: 100%; min-height: 380px; object-fit: cover; display: block; position: absolute; top: 0; left: 0;">
                <div class="room-showcase-badge" style="position: absolute; top: 1.25rem; left: 1.25rem; padding: 0.4rem 1rem; background: #B8956B; color: #fff; font-size: 0.7rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.12em; border-radius: 2px; z-index: 2;">Sea View</div>
            </div>
            <div style="flex: 1 1 0%; min-width: 0;">
                <span class="room-showcase-label">Sea Facing Single</span>
                <h3 class="room-showcase-title">Sea Facing Single Room</h3>
                <p class="room-showcase-desc">
                    A cosy retreat for solo travellers with the bonus of stunning sea views. 
                    Compact yet comfortable, with everything you need for a relaxing seaside break.
                </p>
                <ul class="room-showcase-features">
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                        <span>Single occupancy</span>
                    </li>
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7z"/><circle cx="12" cy="12" r="3"/></svg>
                        <span>Sea view</span>
                    </li>
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg>
                        <span>Ensuite bathroom</span>
                    </li>
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                        <span>Complimentary Wi-Fi</span>
                    </li>
                </ul>
                <a href="<?php echo esc_url($booking_url); ?>" target="_blank" rel="noopener" class="btn-room-book">
                    <span>Book This Room</span>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="5" y1="12" x2="19" y2="12"/>
                        <polyline points="12 5 19 12 12 19"/>
                    </svg>
                </a>
            </div>
        </div>

        <!-- 4. Sea Facing Family Room -->
        <div style="display: flex; flex-direction: row-reverse; align-items: center; gap: 4rem; margin-bottom: 0; width: 100%; box-sizing: border-box;">
            <div style="position: relative; border-radius: 4px; overflow: hidden; flex: 0 0 50%; max-width: 50%; min-height: 380px;">
                <img src="<?php echo esc_url($theme_uri); ?>/assets/images/sea-facing-family.png" alt="Sea Facing Family Room" style="width: 100%; height: 100%; min-height: 380px; object-fit: cover; display: block; position: absolute; top: 0; left: 0;">
                <div class="room-showcase-badge" style="position: absolute; top: 1.25rem; right: 1.25rem; padding: 0.4rem 1rem; background: #B8956B; color: #fff; font-size: 0.7rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.12em; border-radius: 2px; z-index: 2;">Family Favourite</div>
            </div>
            <div style="flex: 1 1 0%; min-width: 0;">
                <span class="room-showcase-label">Sea Facing Family</span>
                <h3 class="room-showcase-title">Sea Facing Family Room</h3>
                <p class="room-showcase-desc">
                    The ultimate family seaside experience. Generous space for the whole family with spectacular 
                    sea views, ensuite facilities, and extra room for the little ones to enjoy.
                </p>
                <ul class="room-showcase-features">
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                        <span>Sleeps up to 4 guests</span>
                    </li>
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7z"/><circle cx="12" cy="12" r="3"/></svg>
                        <span>Sea view</span>
                    </li>
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                        <span>Extra living space</span>
                    </li>
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M18 8h1a4 4 0 010 8h-1M2 8h16v9a4 4 0 01-4 4H6a4 4 0 01-4-4V8zM6 1v3M10 1v3M14 1v3"/></svg>
                        <span>Tea &amp; coffee making</span>
                    </li>
                </ul>
                <a href="<?php echo esc_url($booking_url); ?>" target="_blank" rel="noopener" class="btn-room-book">
                    <span>Book This Room</span>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="5" y1="12" x2="19" y2="12"/>
                        <polyline points="12 5 19 12 12 19"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ========== REAR FACING ROOMS ========== -->
<section style="background: #F5F3EF; width: 100%; padding: clamp(4rem, 3rem + 5vw, 8rem) 0;">
    <div style="width: 100%; max-width: 1400px; margin-left: auto; margin-right: auto; padding-left: clamp(1.5rem, 1rem + 2vw, 3rem); padding-right: clamp(1.5rem, 1rem + 2vw, 3rem); box-sizing: border-box;">
        <div style="text-align: center; max-width: 650px; margin: 0 auto 4rem auto;">
            <span class="section-tagline" style="opacity:1; transform:none;">Rear Facing Rooms</span>
            <h2 class="section-title" style="opacity:1; transform:none;">Garden Tranquility</h2>
            <p style="color: #4A4A4A; font-size: clamp(1rem, 0.95rem + 0.3vw, 1.125rem); line-height: 1.8; margin-top: 1rem;">
                Our rear facing rooms overlook the beautiful mature Devon gardens, offering a peaceful 
                retreat surrounded by nature. The perfect backdrop for a restful night's sleep.
            </p>
        </div>

        <!-- 5. Rear Facing Double Room -->
        <div style="display: flex; flex-direction: row; align-items: center; gap: 4rem; margin-bottom: 5rem; width: 100%; box-sizing: border-box;">
            <div style="position: relative; border-radius: 4px; overflow: hidden; flex: 0 0 50%; max-width: 50%; min-height: 380px;">
                <img src="<?php echo esc_url($theme_uri); ?>/assets/images/rear-facing-double.png" alt="Rear Facing Double Room" style="width: 100%; height: 100%; min-height: 380px; object-fit: cover; display: block; position: absolute; top: 0; left: 0;">
                <div class="room-showcase-badge" style="position: absolute; top: 1.25rem; left: 1.25rem; padding: 0.4rem 1rem; background: #B8956B; color: #fff; font-size: 0.7rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.12em; border-radius: 2px; z-index: 2;">Garden View</div>
            </div>
            <div style="flex: 1 1 0%; min-width: 0;">
                <span class="room-showcase-label">Rear Facing Double</span>
                <h3 class="room-showcase-title">Rear Facing Double Room</h3>
                <p class="room-showcase-desc">
                    A comfortable double room overlooking the peaceful Devon gardens. 
                    Enjoy a quiet retreat with quality furnishings, ensuite bathroom, and all modern amenities.
                </p>
                <ul class="room-showcase-features">
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                        <span>Sleeps 2 guests</span>
                    </li>
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                        <span>Garden view</span>
                    </li>
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg>
                        <span>Ensuite bathroom</span>
                    </li>
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="M2 8h20"/></svg>
                        <span>Flat screen TV</span>
                    </li>
                </ul>
                <a href="<?php echo esc_url($booking_url); ?>" target="_blank" rel="noopener" class="btn-room-book">
                    <span>Book This Room</span>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="5" y1="12" x2="19" y2="12"/>
                        <polyline points="12 5 19 12 12 19"/>
                    </svg>
                </a>
            </div>
        </div>

        <!-- 6. Rear Facing Twin Room -->
        <div style="display: flex; flex-direction: row-reverse; align-items: center; gap: 4rem; margin-bottom: 5rem; width: 100%; box-sizing: border-box;">
            <div style="position: relative; border-radius: 4px; overflow: hidden; flex: 0 0 50%; max-width: 50%; min-height: 380px;">
                <img src="<?php echo esc_url($theme_uri); ?>/assets/images/rear-facing-twin.png" alt="Rear Facing Twin Room" style="width: 100%; height: 100%; min-height: 380px; object-fit: cover; display: block; position: absolute; top: 0; left: 0;">
                <div class="room-showcase-badge" style="position: absolute; top: 1.25rem; right: 1.25rem; padding: 0.4rem 1rem; background: #B8956B; color: #fff; font-size: 0.7rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.12em; border-radius: 2px; z-index: 2;">Garden View</div>
            </div>
            <div style="flex: 1 1 0%; min-width: 0;">
                <span class="room-showcase-label">Rear Facing Twin</span>
                <h3 class="room-showcase-title">Rear Facing Twin Room</h3>
                <p class="room-showcase-desc">
                    Two comfortable single beds in a peaceful garden-facing setting. Ideal for friends or 
                    colleagues who prefer their own sleeping space whilst enjoying a tranquil outlook.
                </p>
                <ul class="room-showcase-features">
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                        <span>Sleeps 2 guests</span>
                    </li>
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                        <span>Garden view</span>
                    </li>
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg>
                        <span>Ensuite bathroom</span>
                    </li>
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M18 8h1a4 4 0 010 8h-1M2 8h16v9a4 4 0 01-4 4H6a4 4 0 01-4-4V8zM6 1v3M10 1v3M14 1v3"/></svg>
                        <span>Tea &amp; coffee making</span>
                    </li>
                </ul>
                <a href="<?php echo esc_url($booking_url); ?>" target="_blank" rel="noopener" class="btn-room-book">
                    <span>Book This Room</span>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="5" y1="12" x2="19" y2="12"/>
                        <polyline points="12 5 19 12 12 19"/>
                    </svg>
                </a>
            </div>
        </div>

        <!-- 7. Rear Facing Single Room -->
        <div style="display: flex; flex-direction: row; align-items: center; gap: 4rem; margin-bottom: 5rem; width: 100%; box-sizing: border-box;">
            <div style="position: relative; border-radius: 4px; overflow: hidden; flex: 0 0 50%; max-width: 50%; min-height: 380px;">
                <img src="<?php echo esc_url($theme_uri); ?>/assets/images/rear-facing-single.png" alt="Rear Facing Single Room" style="width: 100%; height: 100%; min-height: 380px; object-fit: cover; display: block; position: absolute; top: 0; left: 0;">
                <div class="room-showcase-badge" style="position: absolute; top: 1.25rem; left: 1.25rem; padding: 0.4rem 1rem; background: #B8956B; color: #fff; font-size: 0.7rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.12em; border-radius: 2px; z-index: 2;">Great Value</div>
            </div>
            <div style="flex: 1 1 0%; min-width: 0;">
                <span class="room-showcase-label">Rear Facing Single</span>
                <h3 class="room-showcase-title">Rear Facing Single Room</h3>
                <p class="room-showcase-desc">
                    A great value option for solo travellers and business guests. Cosy and well-appointed 
                    with a peaceful garden outlook, ensuite bathroom, and all essential amenities.
                </p>
                <ul class="room-showcase-features">
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                        <span>Single occupancy</span>
                    </li>
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                        <span>Garden view</span>
                    </li>
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg>
                        <span>Ensuite bathroom</span>
                    </li>
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                        <span>Complimentary Wi-Fi</span>
                    </li>
                </ul>
                <a href="<?php echo esc_url($booking_url); ?>" target="_blank" rel="noopener" class="btn-room-book">
                    <span>Book This Room</span>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="5" y1="12" x2="19" y2="12"/>
                        <polyline points="12 5 19 12 12 19"/>
                    </svg>
                </a>
            </div>
        </div>

        <!-- 8. Rear Facing Family Room -->
        <div style="display: flex; flex-direction: row-reverse; align-items: center; gap: 4rem; margin-bottom: 0; width: 100%; box-sizing: border-box;">
            <div style="position: relative; border-radius: 4px; overflow: hidden; flex: 0 0 50%; max-width: 50%; min-height: 380px;">
                <img src="<?php echo esc_url($theme_uri); ?>/assets/images/rear-facing-family.png" alt="Rear Facing Family Room" style="width: 100%; height: 100%; min-height: 380px; object-fit: cover; display: block; position: absolute; top: 0; left: 0;">
                <div class="room-showcase-badge" style="position: absolute; top: 1.25rem; right: 1.25rem; padding: 0.4rem 1rem; background: #B8956B; color: #fff; font-size: 0.7rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.12em; border-radius: 2px; z-index: 2;">Family Favourite</div>
            </div>
            <div style="flex: 1 1 0%; min-width: 0;">
                <span class="room-showcase-label">Rear Facing Family</span>
                <h3 class="room-showcase-title">Rear Facing Family Room</h3>
                <p class="room-showcase-desc">
                    A spacious family room with a calming garden outlook. Plenty of room for the whole family 
                    to spread out, with ensuite facilities and all the comforts for a memorable Devon holiday.
                </p>
                <ul class="room-showcase-features">
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                        <span>Sleeps up to 4 guests</span>
                    </li>
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                        <span>Garden view</span>
                    </li>
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                        <span>Extra living space</span>
                    </li>
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M18 8h1a4 4 0 010 8h-1M2 8h16v9a4 4 0 01-4 4H6a4 4 0 01-4-4V8zM6 1v3M10 1v3M14 1v3"/></svg>
                        <span>Tea &amp; coffee making</span>
                    </li>
                </ul>
                <a href="<?php echo esc_url($booking_url); ?>" target="_blank" rel="noopener" class="btn-room-book">
                    <span>Book This Room</span>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="5" y1="12" x2="19" y2="12"/>
                        <polyline points="12 5 19 12 12 19"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Highlights Strip -->
<section class="rooms-highlights">
    <div class="container">
        <div class="highlights-grid">
            <div class="highlight-item">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2">
                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                </svg>
                <h4>Best Rate Guarantee</h4>
                <p>Book direct for the lowest price, always.</p>
            </div>
            <div class="highlight-item">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2">
                    <rect x="1" y="3" width="15" height="13"/><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/>
                </svg>
                <h4>Free Parking</h4>
                <p>Complimentary on-site parking, subject to availability.</p>
            </div>
            <div class="highlight-item">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2">
                    <path d="M18 8h1a4 4 0 010 8h-1M2 8h16v9a4 4 0 01-4 4H6a4 4 0 01-4-4V8zM6 1v3M10 1v3M14 1v3"/>
                </svg>
                <h4>Full English Breakfast</h4>
                <p>Start every morning with a freshly cooked breakfast.</p>
            </div>
            <div class="highlight-item">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2">
                    <circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/>
                </svg>
                <h4>Free Wi-Fi</h4>
                <p>Stay connected with complimentary high-speed Wi-Fi.</p>
            </div>
        </div>
    </div>
</section>

<!-- Exe Estuary View Feature -->
<section class="rooms-view-feature">
    <div class="container">
        <div class="view-feature-grid">
            <div class="view-feature-image">
                <img src="<?php echo esc_url($theme_uri); ?>/assets/images/view-exe.jpg" alt="Exe Estuary View">
            </div>
            <div class="view-feature-content">
                <span class="section-tagline" style="opacity:1; transform:none;">The View</span>
                <h2 class="section-title" style="opacity:1; transform:none;">Wake Up to the Exe Estuary</h2>
                <p>
                    Many of our rooms offer breathtaking views across the Exe Estuary. Watch the boats drift by, 
                    catch a spectacular Devon sunset, or simply enjoy the tranquil waterside atmosphere that makes 
                    Ashton Court truly special.
                </p>
                <p>
                    Our garden-facing rooms provide a peaceful retreat surrounded by mature Devon gardens — 
                    the perfect backdrop for a restful night's sleep.
                </p>
                <a href="<?php echo esc_url($booking_url); ?>" target="_blank" rel="noopener" class="link-arrow">
                    <span>View Available Rooms</span>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="5" y1="12" x2="19" y2="12"/>
                        <polyline points="12 5 19 12 12 19"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Final CTA Section -->
<section class="rooms-cta">
    <div class="rooms-cta-bg">
        <img src="<?php echo esc_url($theme_uri); ?>/assets/images/view-exe.jpg" alt="Book Your Stay at Ashton Court Hotel">
    </div>
    <div class="rooms-cta-overlay"></div>
    <div class="rooms-cta-content">
        <div class="hero-eyebrow">
            <span class="eyebrow-line"></span>
            <span class="eyebrow-text">Reservations</span>
            <span class="eyebrow-line"></span>
        </div>
        <h2 class="rooms-cta-title">Ready to Book Your Stay?</h2>
        <p class="rooms-cta-text">
            Check availability, view live rates, and secure your room in just a few clicks.<br>
            Best rate guaranteed when you book direct.
        </p>
        <div class="rooms-cta-actions">
            <a href="<?php echo esc_url($booking_url); ?>" target="_blank" rel="noopener" class="btn-cta-primary">
                <span>Check Availability &amp; Book Now</span>
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                    <line x1="16" y1="2" x2="16" y2="6"/>
                    <line x1="8" y1="2" x2="8" y2="6"/>
                    <line x1="3" y1="10" x2="21" y2="10"/>
                </svg>
            </a>
            <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', ashton_get_phone())); ?>" class="btn-cta-secondary">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/>
                </svg>
                <span>Call <?php echo esc_html(ashton_get_phone()); ?></span>
            </a>
        </div>
        <p class="rooms-cta-note">Free cancellation on most rooms · No booking fees · Secure payment</p>
    </div>
</section>

<!-- Clock PMS SDK -->
<link rel="stylesheet" href="https://static-assets.clock-software.com/wbe_v2/clock-pms-wbe-integration.css">
<link rel="stylesheet" href="https://static-assets.clock-software.com/wbe_v2/clock-pms-wbe-reminder.css">
<script defer src="https://static-assets.clock-software.com/wbe_v2/clock-pms-wbe-integration.js"></script>

<script>
(function() {
    // Initialize Clock PMS Widget
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

    // Open Clock PMS overlay with optional dates
    function openClockPms(arrival, departure, adults) {
        if (typeof window.clockPmsWbeShow === 'function') {
            window.clockPmsWbeShow({
                arrival: arrival || null,
                departure: departure || null,
                adults: parseInt(adults) || 2,
                children: 0,
                submit: true,
            });
        } else {
            // Fallback: open in new tab
            window.open('https://sky-eu1.clock-software.com/spa/pms-wbe/#/hotel/11928', '_blank', 'noopener');
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        // Init Clock PMS SDK
        if (!initClockPms()) {
            var checkInterval = setInterval(function() {
                if (initClockPms()) clearInterval(checkInterval);
            }, 500);
            setTimeout(function() { clearInterval(checkInterval); }, 10000);
        }

        // Set min dates on booking widget
        var today = new Date().toISOString().split('T')[0];
        var tomorrow = new Date();
        tomorrow.setDate(tomorrow.getDate() + 1);
        tomorrow = tomorrow.toISOString().split('T')[0];

        var checkinInput = document.getElementById('rooms-checkin');
        var checkoutInput = document.getElementById('rooms-checkout');

        if (checkinInput) {
            checkinInput.min = today;
            checkinInput.value = today;
        }
        if (checkoutInput) {
            checkoutInput.min = tomorrow;
            checkoutInput.value = tomorrow;
        }

        // Auto-update checkout min when checkin changes
        if (checkinInput) {
            checkinInput.addEventListener('change', function() {
                var nextDay = new Date(this.value);
                nextDay.setDate(nextDay.getDate() + 1);
                var nextDayStr = nextDay.toISOString().split('T')[0];
                checkoutInput.min = nextDayStr;
                if (checkoutInput.value && new Date(checkoutInput.value) <= new Date(this.value)) {
                    checkoutInput.value = nextDayStr;
                }
            });
        }

        // Booking form submit - open Clock PMS overlay with dates
        var bookingForm = document.getElementById('rooms-booking-form');
        if (bookingForm) {
            bookingForm.addEventListener('submit', function(e) {
                e.preventDefault();
                var checkin = document.getElementById('rooms-checkin').value;
                var checkout = document.getElementById('rooms-checkout').value;
                var guests = document.getElementById('rooms-guests').value;
                openClockPms(checkin, checkout, guests);
            });
        }

        // All "Book This Room" buttons - open Clock PMS overlay
        document.querySelectorAll('.btn-room-book, .btn-cta-primary, .view-feature-content .link-arrow').forEach(function(btn) {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                // Use dates from the booking widget if filled
                var checkin = document.getElementById('rooms-checkin') ? document.getElementById('rooms-checkin').value : null;
                var checkout = document.getElementById('rooms-checkout') ? document.getElementById('rooms-checkout').value : null;
                var guests = document.getElementById('rooms-guests') ? document.getElementById('rooms-guests').value : '2';
                openClockPms(checkin, checkout, guests);
            });
        });
    });
})();
</script>

<?php get_footer(); ?>
