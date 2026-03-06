<?php
if (!defined('ABSPATH')) exit;
/**
 * Template Name: About Page
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

<?php
$hero_label = $f('about_hero_label', 'Est. 1890');
$hero_title_raw = $f('about_hero_title', 'A Historic|Sanctuary|by the Sea');
$hero_title_parts = explode('|', $hero_title_raw);
$hero_subtitle = $f('about_hero_subtitle', 'Where Georgian elegance meets the Devon coast');
?>
<!-- Cinematic Hero -->
<section class="about-hero-cinematic">
    <div class="about-hero-background">
        <div class="about-hero-bg-image">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/garden.jpg" alt="Ashton Court Hotel">
        </div>
        <div class="about-hero-gradient-mesh">
            <div class="about-gradient-orb about-gradient-orb-1"></div>
            <div class="about-gradient-orb about-gradient-orb-2"></div>
            <div class="about-gradient-orb about-gradient-orb-3"></div>
            <div class="about-gradient-orb about-gradient-orb-4"></div>
        </div>
        <div class="about-hero-color-overlay"></div>
        <div class="about-hero-noise"></div>
    </div>
    <div class="about-hero-content">
        <span class="about-hero-label" data-animate="fade-up"><?php echo esc_html($hero_label); ?></span>
        <h1 class="about-hero-title" data-animate="fade-up" data-delay="100">
            <?php foreach ($hero_title_parts as $i => $part) : ?>
                <span class="title-line<?php echo $i === 1 ? ' accent' : ''; ?>"><?php echo esc_html(trim($part)); ?></span>
            <?php endforeach; ?>
        </h1>
        <p class="about-hero-subtitle" data-animate="fade-up" data-delay="200"><?php echo esc_html($hero_subtitle); ?></p>
        <div class="scroll-indicator" data-animate="fade-up" data-delay="300">
            <div class="scroll-line"></div>
            <span>Discover Our Story</span>
        </div>
    </div>
</section>

<!-- Opening Statement -->
<section class="about-opening">
    <div class="container">
        <div class="opening-content" data-animate="fade-up">
            <div class="opening-quote">
                <svg class="quote-mark" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M3 21c3 0 7-1 7-8V5c0-1.25-.756-2.017-2-2H4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2 1 0 1 0 1 1v1c0 1-1 2-2 2s-1 .008-1 1.031V21c0 1 0 1 1 1z"/>
                </svg>
                <blockquote><?php echo esc_html($f('about_quote', 'This panoramic scene, enchanting all year round, greets us afresh every morning.')); ?></blockquote>
            </div>
        </div>
    </div>
</section>

<!-- Heritage Section -->
<section class="about-heritage">
    <div class="heritage-wrapper">
        <div class="heritage-image-col" data-animate="fade-right">
            <div class="heritage-image">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/view-exe.jpg" alt="Exe Estuary View">
            </div>
            <div class="heritage-badge">
                <span class="badge-number">200</span>
                <span class="badge-text">Yards to Beach</span>
            </div>
        </div>
        <div class="heritage-content-col">
            <div class="heritage-content" data-animate="fade-left">
                <span class="section-label"><?php echo esc_html($f('about_heritage_label', 'Our Heritage')); ?></span>
                <h2 class="heritage-title"><?php echo wp_kses_post($f('about_heritage_title', 'Situated on <em>Louisa Terrace</em>, part of the town\'s historic Beacon')); ?></h2>
                <div class="heritage-text"><?php echo wp_kses_post($f('about_heritage_text', '<p>The Ashton Court stands where many notable people chose to make their homes during Exmouth\'s Georgian heyday.</p><p>The Hotel enjoys magnificent views of the Exe estuary and the beautiful coastline stretching out towards Torbay.</p>')); ?></div>
                <div class="heritage-stats">
                    <div class="stat-item">
                        <span class="stat-number"><?php echo esc_html($f('about_heritage_stat1_num', '130+')); ?></span>
                        <span class="stat-label"><?php echo esc_html($f('about_heritage_stat1_label', 'Years of History')); ?></span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number"><?php echo esc_html($f('about_heritage_stat2_num', '1000s')); ?></span>
                        <span class="stat-label"><?php echo esc_html($f('about_heritage_stat2_label', 'Happy Guests')); ?></span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number"><?php echo esc_html($f('about_heritage_stat3_num', '∞')); ?></span>
                        <span class="stat-label"><?php echo esc_html($f('about_heritage_stat3_label', 'Memories Made')); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Panoramic View Section -->
<section class="about-panoramic-new">
    <div class="panoramic-parallax">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/view-exe.jpg" alt="Exe Estuary View">
    </div>
    <div class="panoramic-gradient-overlay"></div>
    
    <div class="panoramic-content-wrapper">
        <div class="panoramic-badge" data-animate="fade-down">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                <circle cx="12" cy="12" r="10"/>
                <path d="M12 16v-4M12 8h.01"/>
            </svg>
            <span>Est. 1890</span>
        </div>
        
        <h2 class="panoramic-title" data-animate="fade-up">
            <span class="title-small"><?php echo esc_html($f('about_pano_title_small', 'Magnificent Views of the')); ?></span>
            <span class="title-large"><?php echo esc_html($f('about_pano_title_large', 'Exe Estuary')); ?></span>
        </h2>
        
        <p class="panoramic-description" data-animate="fade-up" data-delay="100">
            <?php echo esc_html($f('about_pano_description', 'Watch fishing boats and pleasure craft pass back and forth along the shoreline from our coronation gardens overlooking the Esplanade.')); ?>
        </p>
        
        <div class="panoramic-features" data-animate="fade-up" data-delay="200">
            <div class="panoramic-feature">
                <div class="feature-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/>
                        <circle cx="12" cy="10" r="3"/>
                    </svg>
                </div>
                <span>200 Yards to Beach</span>
            </div>
            <div class="panoramic-feature">
                <div class="feature-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/>
                        <circle cx="9" cy="7" r="4"/>
                        <path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/>
                    </svg>
                </div>
                <span>Dog Friendly</span>
            </div>
            <div class="panoramic-feature">
                <div class="feature-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                        <line x1="16" y1="2" x2="16" y2="6"/>
                        <line x1="8" y1="2" x2="8" y2="6"/>
                        <line x1="3" y1="10" x2="21" y2="10"/>
                    </svg>
                </div>
                <span>Year-Round Beauty</span>
            </div>
        </div>
    </div>
    
    <div class="panoramic-scroll-hint">
        <div class="scroll-line"></div>
    </div>
</section>

<!-- What We Offer - Premium Redesign -->
<section class="offerings-premium">
    <div class="offerings-premium-header">
        <div class="container">
            <span class="premium-label" data-animate="fade-up"><?php echo esc_html($f('about_offerings_label', 'Experience Ashton Court')); ?></span>
            <h2 class="premium-title" data-animate="fade-up" data-delay="100"><?php echo esc_html($f('about_offerings_title', 'More Than Just a Stay')); ?></h2>
            <p class="premium-subtitle" data-animate="fade-up" data-delay="200"><?php echo esc_html($f('about_offerings_subtitle', 'Discover the unique experiences that make your visit unforgettable')); ?></p>
        </div>
    </div>
    
    <div class="offerings-showcase">
        <!-- Item 1: Weddings -->
        <div class="showcase-item" data-animate="fade-up">
            <div class="showcase-image">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/view-exe.jpg" alt="Dream Weddings">
                <div class="showcase-overlay"></div>
            </div>
            <div class="showcase-content">
                <div class="showcase-number">01</div>
                <h3 class="showcase-title"><?php echo esc_html($f('about_offer1_title', 'Dream Weddings')); ?></h3>
                <p class="showcase-desc"><?php echo esc_html($f('about_offer1_desc', 'Say "I do" with the sea as your witness. Our stunning gardens and panoramic views create the perfect backdrop for your special day.')); ?></p>
                <a href="<?php echo esc_url(home_url('/weddings/')); ?>" class="showcase-link">
                    <?php echo esc_html($f('about_offer1_link_text', 'Plan Your Day')); ?>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </a>
            </div>
        </div>
        
        <!-- Item 2: Private Events -->
        <div class="showcase-item reverse" data-animate="fade-up" data-delay="100">
            <div class="showcase-image">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/restaurant.png" alt="Private Events">
                <div class="showcase-overlay"></div>
            </div>
            <div class="showcase-content">
                <div class="showcase-number">02</div>
                <h3 class="showcase-title"><?php echo esc_html($f('about_offer2_title', 'Private Functions')); ?></h3>
                <p class="showcase-desc"><?php echo esc_html($f('about_offer2_desc', 'From intimate gatherings to corporate events, our versatile spaces adapt to your needs with stunning coastal views and impeccable service.')); ?></p>
                <a href="<?php echo esc_url(home_url('/functions/')); ?>" class="showcase-link">
                    <?php echo esc_html($f('about_offer2_link_text', 'Explore Options')); ?>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </a>
            </div>
        </div>
        
        <!-- Item 3: Long Stay -->
        <div class="showcase-item" data-animate="fade-up" data-delay="200">
            <div class="showcase-image">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/doubleroom.jpg" alt="Extended Stays">
                <div class="showcase-overlay"></div>
            </div>
            <div class="showcase-content">
                <div class="showcase-number">03</div>
                <h3 class="showcase-title"><?php echo esc_html($f('about_offer3_title', 'Extended Stays')); ?></h3>
                <p class="showcase-desc"><?php echo esc_html($f('about_offer3_desc', 'Make Ashton Court your home away from home. Enjoy special rates for longer visits, whether for work or a proper seaside escape.')); ?></p>
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="showcase-link">
                    <?php echo esc_html($f('about_offer3_link_text', 'Enquire Now')); ?>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </a>
            </div>
        </div>
        
        <!-- Item 4: Dog Friendly -->
        <div class="showcase-item reverse" data-animate="fade-up" data-delay="300">
            <div class="showcase-image">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/garden.jpg" alt="Dog Friendly">
                <div class="showcase-overlay"></div>
            </div>
            <div class="showcase-content">
                <div class="showcase-number">04</div>
                <h3 class="showcase-title"><?php echo esc_html($f('about_offer4_title', 'Dog Friendly')); ?></h3>
                <p class="showcase-desc"><?php echo esc_html($f('about_offer4_desc', 'Your four-legged family members are always welcome! Enjoy our private rear garden and nearby dog-friendly beaches together.')); ?></p>
                <a href="<?php echo esc_url(home_url('/rooms/')); ?>" class="showcase-link">
                    <?php echo esc_html($f('about_offer4_link_text', 'Book Pet-Friendly')); ?>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>


<!-- Values Section -->
<section class="about-values-section">
    <div class="container">
        <div class="values-header" data-animate="fade-up">
            <span class="section-label"><?php echo esc_html($f('about_values_label', 'Our Values')); ?></span>
            <h2><?php echo esc_html($f('about_values_title', 'What Guides Us')); ?></h2>
        </div>
        
        <div class="values-carousel">
            <div class="value-item" data-animate="fade-up">
                <div class="value-number">01</div>
                <div class="value-content">
                    <h3><?php echo esc_html($f('about_val1_title', 'Warm Hospitality')); ?></h3>
                    <p><?php echo esc_html($f('about_val1_desc', 'Genuine, heartfelt service that makes every guest feel welcome and valued from arrival to departure.')); ?></p>
                </div>
            </div>
            
            <div class="value-item" data-animate="fade-up" data-delay="100">
                <div class="value-number">02</div>
                <div class="value-content">
                    <h3><?php echo esc_html($f('about_val2_title', 'Attention to Detail')); ?></h3>
                    <p><?php echo esc_html($f('about_val2_desc', 'From the presentation of your room to the quality of your breakfast, every detail matters to us.')); ?></p>
                </div>
            </div>
            
            <div class="value-item" data-animate="fade-up" data-delay="200">
                <div class="value-number">03</div>
                <div class="value-content">
                    <h3><?php echo esc_html($f('about_val3_title', 'Local Pride')); ?></h3>
                    <p><?php echo esc_html($f('about_val3_desc', 'We champion local suppliers, celebrate Devon\'s heritage, and actively support our coastal community.')); ?></p>
                </div>
            </div>
            
            <div class="value-item" data-animate="fade-up" data-delay="300">
                <div class="value-number">04</div>
                <div class="value-content">
                    <h3><?php echo esc_html($f('about_val4_title', 'Sustainable Future')); ?></h3>
                    <p><?php echo esc_html($f('about_val4_desc', 'Committed to reducing our environmental impact and preserving Devon\'s beautiful coastline for generations.')); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Final CTA -->
<section class="about-final-cta">
    <div class="cta-bg">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/hero-bg.jpg" alt="Ashton Court">
        <div class="cta-overlay"></div>
    </div>
    <div class="cta-content" data-animate="fade-up">
        <h2><?php echo wp_kses_post($f('about_cta_title', 'Begin Your <em>Ashton Court</em> Story')); ?></h2>
        <p><?php echo esc_html($f('about_cta_text', 'All the pleasures of the Seafront are just a short stroll away, with the amenities of the town within easy walking distance.')); ?></p>
        <div class="cta-buttons">
            <button type="button" class="btn-cta-primary" id="about-book-btn">
                <span><?php echo esc_html($f('about_cta_button', 'Reserve Your Stay')); ?></span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
            </button>
            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn-cta-secondary">
                <span>Get in Touch</span>
            </a>
        </div>
    </div>
</section>

<!-- Clock PMS SDK -->
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
                if (initClockPms()) clearInterval(checkInterval);
            }, 500);
            setTimeout(function() { clearInterval(checkInterval); }, 10000);
        }

        var bookBtn = document.getElementById('about-book-btn');
        if (bookBtn) {
            bookBtn.addEventListener('click', function() {
                if (typeof window.clockPmsWbeShow === 'function') {
                    window.clockPmsWbeShow({
                        arrival: null,
                        departure: null,
                        adults: 2,
                        children: 0,
                        submit: false,
                    });
                } else {
                    window.open('https://sky-eu1.clock-software.com/spa/pms-wbe/#/hotel/11928', '_blank', 'noopener');
                }
            });
        }
    });
})();
</script>

<?php get_footer(); ?>
