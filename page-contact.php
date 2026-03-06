<?php
if (!defined('ABSPATH')) exit;
/**
 * Template Name: Contact Page
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

$address = ashton_get_address();
?>
<div class="container"><?php ashton_breadcrumbs(); ?></div>
<?php
$social = ashton_get_social_links();
?>

<!-- Cinematic Hero -->
<section class="contact-hero-cinematic">
    <div class="contact-hero-bg">
        <img src="<?php echo esc_url(ASHTON_THEME_URI); ?>/assets/images/view-exe.jpg" alt="Ashton Court Hotel">
        <div class="contact-hero-overlay"></div>
    </div>
    
    <div class="contact-hero-content">
        <span class="contact-badge"><?php echo esc_html($f('contact_hero_badge', "We'd Love to Hear From You")); ?></span>
        <h1><?php echo wp_kses_post($f('contact_hero_title', 'Get in <em>Touch</em>')); ?></h1>
        <p><?php echo esc_html($f('contact_hero_subtitle', 'Reach out for reservations, enquiries, or simply to say hello')); ?></p>
        
        <div class="contact-hero-cards">
            <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', ashton_get_phone())); ?>" class="hero-contact-card">
                <div class="card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.338 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
                </div>
                <span class="card-label">Call Us</span>
                <span class="card-value"><?php echo esc_html(ashton_get_phone()); ?></span>
            </a>
            
            <a href="mailto:<?php echo esc_attr(ashton_get_email()); ?>" class="hero-contact-card">
                <div class="card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                </div>
                <span class="card-label">Email Us</span>
                <span class="card-value"><?php echo esc_html(ashton_get_email()); ?></span>
            </a>
            
            <a href="<?php echo esc_url('https://maps.google.com/?q=' . urlencode($address['full'])); ?>" target="_blank" rel="noopener" class="hero-contact-card">
                <div class="card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                </div>
                <span class="card-label">Visit Us</span>
                <span class="card-value"><?php echo esc_html($address['city']); ?>, Devon</span>
            </a>
        </div>
    </div>
</section>

<!-- Main Contact Section -->
<section class="contact-main-section">
    <div class="contact-main-inner">
        
        <!-- Left: Info & Hours -->
        <div class="contact-info-side">
            <div class="info-block address-block">
                <div class="info-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                </div>
                <div class="info-content">
                    <h3>Address</h3>
                    <address>
                        <?php echo esc_html($address['street']); ?><br>
                        <?php echo esc_html($address['city']); ?><br>
                        <?php echo esc_html($address['postcode']); ?><br>
                        United Kingdom
                    </address>
                    <a href="<?php echo esc_url('https://maps.google.com/?q=' . urlencode($address['full'])); ?>" target="_blank" rel="noopener" class="info-link">
                        Get Directions
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                    </a>
                </div>
            </div>
            
            <div class="info-block features-block">
                <div class="features-grid">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="1" y="3" width="15" height="13" rx="2"/><path d="M16 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2"/><circle cx="5.5" cy="18" r="2"/><circle cx="18.5" cy="18" r="2"/></svg>
                        </div>
                        <span>Free Parking</span>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 12h2M6 12h2M10 12h2M14 12h2M18 12h2M22 12h0"/><path d="M12 2v2M12 6v2"/><circle cx="12" cy="12" r="4"/></svg>
                        </div>
                        <span>Stunning Sea Views</span>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M18 8h1a4 4 0 010 8h-1M2 8h16v9a4 4 0 01-4 4H6a4 4 0 01-4-4V8z"/><line x1="6" y1="1" x2="6" y2="4"/><line x1="10" y1="1" x2="10" y2="4"/><line x1="14" y1="1" x2="14" y2="4"/></svg>
                        </div>
                        <span>Full English Breakfast</span>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M8 2h8l2 4H6l2-4z"/><path d="M6 6v14a2 2 0 002 2h8a2 2 0 002-2V6"/><line x1="12" y1="10" x2="12" y2="16"/></svg>
                        </div>
                        <span>Licensed Bar</span>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                        </div>
                        <span>Family-Run Hotel</span>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        </div>
                        <span>200m to Beach</span>
                    </div>
                </div>
            </div>
            
            <div class="info-block social-block">
                <div class="social-links">
                    <?php if (!empty($social['facebook'])) : ?>
                    <a href="<?php echo esc_url($social['facebook']); ?>" target="_blank" rel="noopener" aria-label="Facebook">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg>
                    </a>
                    <?php endif; ?>
                    <?php if (!empty($social['instagram'])) : ?>
                    <a href="<?php echo esc_url($social['instagram']); ?>" target="_blank" rel="noopener" aria-label="Instagram">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="2" width="20" height="20" rx="5"/><path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
                    </a>
                    <?php endif; ?>
                    <?php if (!empty($social['twitter'])) : ?>
                    <a href="<?php echo esc_url($social['twitter']); ?>" target="_blank" rel="noopener" aria-label="Twitter">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5 0-.278-.028-.556-.08-.83A7.72 7.72 0 0023 3z"/></svg>
                    </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        
        <!-- Right: Contact Form -->
        <div class="contact-form-side">
            <div class="form-card">
                <div class="form-header">
                    <span class="form-badge"><?php echo esc_html($f('contact_form_badge', 'Send a Message')); ?></span>
                    <h2><?php echo esc_html($f('contact_form_title', "We'll Respond Within 24 Hours")); ?></h2>
                </div>
                
                <form class="premium-contact-form ashton-contact-form" method="post">
                    <?php wp_nonce_field('ashton_contact_form', 'contact_nonce'); ?>
                    <div class="form-row">
                        <div class="form-field">
                            <label for="contact-name">Full Name</label>
                            <input type="text" id="contact-name" name="name" required placeholder="Your name">
                        </div>
                    </div>
                    
                    <div class="form-row two-col">
                        <div class="form-field">
                            <label for="contact-email">Email Address</label>
                            <input type="email" id="contact-email" name="email" required placeholder="your@email.com">
                        </div>
                        <div class="form-field">
                            <label for="contact-phone">Phone Number</label>
                            <input type="tel" id="contact-phone" name="phone" placeholder="+44 1234 567890">
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-field">
                            <label for="contact-subject">Subject</label>
                            <select id="contact-subject" name="subject" required>
                                <option value="">Please select an option...</option>
                                <option value="Room Booking Enquiry">Room Booking Enquiry</option>
                                <option value="Event Enquiry">Event Enquiry</option>
                                <option value="Wedding Enquiry">Wedding Enquiry</option>
                                <option value="Restaurant Reservation">Restaurant Reservation</option>
                                <option value="General Enquiry">General Enquiry</option>
                                <option value="Feedback">Feedback</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-field">
                            <label for="contact-message">Your Message</label>
                            <textarea id="contact-message" name="message" rows="5" required placeholder="How can we help you?"></textarea>
                        </div>
                    </div>
                    
                    <div class="form-row checkbox-row">
                        <label class="checkbox-label">
                            <input type="checkbox" name="newsletter" value="1">
                            <span class="checkmark"></span>
                            <span class="checkbox-text">I'd like to receive news and special offers</span>
                        </label>
                    </div>
                    
                    <button type="submit" class="submit-btn">
                        <span>Send Message</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
                    </button>
                    
                    <div class="form-message"></div>
                </form>
            </div>
        </div>
        
    </div>
</section>

<!-- Map Section -->
<section class="contact-map-section">
    <div class="map-wrapper">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2524.8!2d-3.4138!3d50.6189!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x486d9d0a8b94d2e5%3A0x8a5a8a8a8a8a8a8a!2sAshton%20Court%20Hotel!5e0!3m2!1sen!2suk"
            width="100%" 
            height="100%" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy">
        </iframe>
        <div class="map-overlay"></div>
    </div>
    
    <div class="map-info-card">
        <div class="map-card-inner">
            <h3><?php echo esc_html($f('contact_map_title', 'Find Us')); ?></h3>
            <address>
                <?php echo esc_html($address['street']); ?><br>
                <?php echo esc_html($address['city']); ?>, <?php echo esc_html($address['postcode']); ?>
            </address>
            <div class="map-features">
                <span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="1" y="3" width="15" height="13" rx="2"/><path d="M16 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2"/><circle cx="5.5" cy="18" r="2"/><circle cx="18.5" cy="18" r="2"/></svg>
                    Free Parking
                </span>
                <span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M18 8h1a4 4 0 010 8h-1M2 8h16v9a4 4 0 01-4 4H6a4 4 0 01-4-4V8z"/><line x1="6" y1="1" x2="6" y2="4"/></svg>
                    200m to Beach
                </span>
            </div>
            <a href="<?php echo esc_url('https://maps.google.com/?q=' . urlencode($address['full'])); ?>" target="_blank" rel="noopener" class="map-btn">
                Open in Google Maps
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
            </a>
        </div>
    </div>
</section>

<style>
/* ========================================
   CONTACT PAGE - PREMIUM STYLES
   ======================================== */

/* Hero Section */
.contact-hero-cinematic {
    position: relative;
    min-height: 70vh;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    padding: 140px 40px 100px;
}

.contact-hero-bg {
    position: absolute;
    inset: 0;
    z-index: 1;
}

.contact-hero-bg img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.contact-hero-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(180deg, 
        rgba(15, 40, 32, 0.8) 0%, 
        rgba(26, 60, 52, 0.9) 100%);
}

.contact-hero-content {
    position: relative;
    z-index: 10;
    text-align: center;
    color: white;
    max-width: 1200px;
    width: 100%;
}

.contact-badge {
    display: inline-block;
    padding: 0.5rem 1.5rem;
    background: transparent;
    border: 1px solid rgba(184, 149, 107, 0.4);
    font-size: 0.65rem;
    letter-spacing: 0.25em;
    text-transform: uppercase;
    color: var(--color-accent);
    margin-bottom: 1.5rem;
}

.contact-hero-content h1 {
    font-size: clamp(3rem, 8vw, 5rem);
    margin-bottom: 1rem;
    color: white;
}

.contact-hero-content h1 em {
    font-style: italic;
    color: var(--color-accent);
}

.contact-hero-content > p {
    font-size: 1.15rem;
    opacity: 0.8;
    margin-bottom: 3rem;
}

/* Hero Contact Cards */
.contact-hero-cards {
    display: flex;
    justify-content: center;
    gap: 1.5rem;
    flex-wrap: wrap;
}

.hero-contact-card {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 0.75rem;
    padding: 2rem 2.5rem;
    background: rgba(255, 255, 255, 0.08);
    border: 1px solid rgba(255, 255, 255, 0.12);
    border-radius: 12px;
    backdrop-filter: blur(10px);
    color: white;
    min-width: 200px;
    transition: all 0.4s ease;
}

.hero-contact-card:hover {
    background: rgba(255, 255, 255, 0.15);
    transform: translateY(-5px);
    border-color: var(--color-accent);
}

.card-icon {
    width: 40px;
    height: 40px;
}

.card-icon svg {
    width: 100%;
    height: 100%;
    color: var(--color-accent);
}

.card-label {
    font-size: 0.7rem;
    letter-spacing: 0.15em;
    text-transform: uppercase;
    opacity: 0.6;
}

.card-value {
    font-family: var(--font-heading);
    font-size: 1rem;
}

/* Main Contact Section */
.contact-main-section {
    background: #f9f7f4;
    padding: 100px 0;
}

.contact-main-inner {
    display: grid;
    grid-template-columns: 1fr 1.5fr;
    gap: 60px;
    max-width: 1300px;
    margin: 0 auto;
    padding: 0 40px;
}

@media (max-width: 1024px) {
    .contact-main-inner {
        grid-template-columns: 1fr;
        gap: 40px;
    }
}

/* Info Side */
.contact-info-side {
    display: flex;
    flex-direction: column;
    gap: 2.5rem;
    position: sticky;
    top: 120px;
    align-self: flex-start;
}

@media (max-width: 1024px) {
    .contact-info-side {
        position: static;
    }
}

.info-block {
    display: flex;
    gap: 1.5rem;
}

.info-block.social-block {
    flex-direction: column;
    gap: 1rem;
}

.info-icon {
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, var(--color-accent), #d4ac6e);
    border-radius: 12px;
    flex-shrink: 0;
}

.info-icon svg {
    width: 24px;
    height: 24px;
    color: white;
}

.info-content h3 {
    font-size: 1.25rem;
    margin-bottom: 1rem;
    color: var(--color-text);
}

.info-content address {
    font-style: normal;
    line-height: 1.8;
    color: var(--color-text-muted);
    margin-bottom: 1rem;
}

.info-link {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    color: var(--color-accent);
    font-size: 0.9rem;
    font-weight: 500;
    transition: gap 0.3s ease;
}

.info-link:hover {
    gap: 0.75rem;
}

.info-link svg {
    width: 16px;
    height: 16px;
}

/* Hours Grid */
.hours-grid {
    display: flex;
    flex-direction: column;
    gap: 0.75rem;
}

.hour-row {
    display: flex;
    justify-content: space-between;
    padding: 0.75rem 0;
    border-bottom: 1px solid rgba(0, 0, 0, 0.08);
}

.hour-row span:first-child {
    color: var(--color-text-muted);
}

.hour-row span:last-child {
    font-weight: 500;
    color: var(--color-text);
}

/* Features Grid */
.features-block {
    flex-direction: column;
    width: 100%;
}

.features-block h3 {
    font-size: 1.25rem;
    margin-bottom: 1.25rem;
    color: var(--color-text);
}

.features-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1rem;
}

.feature-item {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    padding: 1rem;
    background: white;
    border-radius: 12px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.04);
    transition: all 0.3s ease;
}

.feature-item:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
}

.feature-icon {
    width: 36px;
    height: 36px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, rgba(184, 149, 107, 0.15), rgba(184, 149, 107, 0.05));
    border-radius: 8px;
    flex-shrink: 0;
}

.feature-icon svg {
    width: 18px;
    height: 18px;
    color: var(--color-accent);
}

.feature-item span {
    font-size: 0.85rem;
    font-weight: 500;
    color: var(--color-text);
}

/* Social Links */
.social-block h3 {
    font-size: 1rem;
    margin-bottom: 1rem;
}

.social-links {
    display: flex;
    gap: 1rem;
}

.social-links a {
    width: 48px;
    height: 48px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: white;
    border-radius: 12px;
    color: var(--color-text-muted);
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.06);
    transition: all 0.3s ease;
}

.social-links a:hover {
    background: var(--color-accent);
    color: white;
    transform: translateY(-3px);
}

.social-links svg {
    width: 22px;
    height: 22px;
}

/* Form Side */
.contact-form-side {
    position: relative;
}

.form-card {
    background: white;
    border-radius: 20px;
    padding: 3rem;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
}

.form-header {
    margin-bottom: 2.5rem;
}

.form-badge {
    display: inline-block;
    padding: 0.4rem 1rem;
    background: linear-gradient(135deg, rgba(184, 149, 107, 0.15), rgba(184, 149, 107, 0.05));
    border-radius: 20px;
    font-size: 0.65rem;
    letter-spacing: 0.15em;
    text-transform: uppercase;
    color: var(--color-accent);
    margin-bottom: 1rem;
}

.form-header h2 {
    font-size: clamp(1.5rem, 3vw, 2rem);
    color: var(--color-text);
}

/* Form Fields */
.premium-contact-form .form-row {
    margin-bottom: 1.5rem;
}

.premium-contact-form .form-row.two-col {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1.5rem;
}

@media (max-width: 600px) {
    .premium-contact-form .form-row.two-col {
        grid-template-columns: 1fr;
    }
}

.form-field label {
    display: block;
    font-size: 0.85rem;
    font-weight: 500;
    color: var(--color-text);
    margin-bottom: 0.5rem;
}

.form-field input,
.form-field select,
.form-field textarea {
    width: 100%;
    padding: 1rem 1.25rem;
    border: 1px solid rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    font-size: 1rem;
    background: #f9f7f4;
    transition: all 0.3s ease;
}

.form-field input:focus,
.form-field select:focus,
.form-field textarea:focus {
    outline: none;
    border-color: var(--color-accent);
    background: white;
    box-shadow: 0 0 0 3px rgba(184, 149, 107, 0.1);
}

.form-field textarea {
    resize: vertical;
    min-height: 120px;
}

/* Checkbox */
.checkbox-row {
    margin-bottom: 2rem !important;
}

.checkbox-label {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    cursor: pointer;
}

.checkbox-label input {
    display: none;
}

.checkmark {
    width: 22px;
    height: 22px;
    border: 2px solid rgba(0, 0, 0, 0.2);
    border-radius: 6px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
    flex-shrink: 0;
}

.checkbox-label input:checked + .checkmark {
    background: var(--color-accent);
    border-color: var(--color-accent);
}

.checkbox-label input:checked + .checkmark::after {
    content: '';
    width: 6px;
    height: 10px;
    border: solid white;
    border-width: 0 2px 2px 0;
    transform: rotate(45deg);
    margin-top: -2px;
}

.checkbox-text {
    font-size: 0.9rem;
    color: var(--color-text-muted);
}

/* Submit Button */
.submit-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 0.75rem;
    width: 100%;
    padding: 1.25rem 2rem;
    background: linear-gradient(135deg, var(--color-accent), #d4ac6e);
    border: none;
    border-radius: 10px;
    color: white;
    font-size: 1rem;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.4s ease;
}

.submit-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 30px rgba(184, 149, 107, 0.4);
}

.submit-btn svg {
    width: 18px;
    height: 18px;
}

/* Map Section */
.contact-map-section {
    position: relative;
    height: 500px;
}

.map-wrapper {
    position: absolute;
    inset: 0;
}

.map-wrapper iframe {
    width: 100%;
    height: 100%;
    filter: grayscale(100%) contrast(1.1);
    transition: filter 0.5s ease;
}

.contact-map-section:hover .map-wrapper iframe {
    filter: grayscale(0%);
}

.map-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(90deg, rgba(26, 60, 52, 0.3) 0%, transparent 50%);
    pointer-events: none;
}

.map-info-card {
    position: absolute;
    top: 50%;
    left: 60px;
    transform: translateY(-50%);
    z-index: 10;
}

@media (max-width: 768px) {
    .map-info-card {
        left: 20px;
        right: 20px;
        top: auto;
        bottom: 20px;
        transform: none;
    }
}

.map-card-inner {
    background: white;
    padding: 2rem;
    border-radius: 16px;
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
    max-width: 300px;
}

.map-card-inner h3 {
    font-size: 1.25rem;
    margin-bottom: 1rem;
    color: var(--color-text);
}

.map-card-inner address {
    font-style: normal;
    line-height: 1.6;
    color: var(--color-text-muted);
    margin-bottom: 1.5rem;
}

.map-features {
    display: flex;
    flex-direction: column;
    gap: 0.75rem;
    margin-bottom: 1.5rem;
}

.map-features span {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-size: 0.85rem;
    color: var(--color-accent);
}

.map-features svg {
    width: 18px;
    height: 18px;
}

.map-btn {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.75rem 1.25rem;
    background: var(--color-accent);
    color: white;
    border-radius: 8px;
    font-size: 0.85rem;
    font-weight: 500;
    transition: all 0.3s ease;
}

.map-btn:hover {
    background: #fff;
    color: #1A1A1A;
}

.map-btn svg {
    width: 16px;
    height: 16px;
}

/* Mobile (max 480px) */
@media (max-width: 480px) {
    .contact-hero-cinematic {
        padding: 100px 20px 60px;
    }
    
    .hero-contact-cards {
        flex-direction: column;
        gap: 1rem;
    }
    
    .hero-contact-card {
        min-width: auto;
        width: 100%;
        padding: 1.5rem;
    }
    
    .contact-main-inner {
        padding: 0 20px;
    }
    
    .form-card {
        padding: 2rem 1.25rem;
    }
    
    .info-block {
        flex-direction: column;
        align-items: center;
        text-align: center;
    }
    
    .info-content {
        text-align: center;
    }
    
    .info-content .directions-link {
        justify-content: center;
    }
    
    .features-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 0.75rem;
    }
    
    .feature-item {
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 1rem 0.5rem;
        width: 100%;
    }
    
    .feature-item span {
        font-size: 0.75rem;
    }
    
    .contact-map-section {
        height: 350px;
    }
    
    .map-info-card {
        left: 10px;
        right: 10px;
        bottom: 10px;
        padding: 1.5rem;
    }
}
</style>

<?php get_footer(); ?>
