<?php if (!defined('ABSPATH')) exit; ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    
    <!-- Preload critical fonts -->
    <link rel="preload" href="https://fonts.gstatic.com/s/cormorantgaramond/v16/co3bmX5slCNuHLi8bLeY9MK7whWMhyjYrEPjuw-NxBKL_y94.woff2" as="font" type="font/woff2" crossorigin>
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php
$offer_enabled  = get_theme_mod('ashton_offer_enabled', true);
$offer_badge    = get_theme_mod('ashton_offer_badge', 'Special Offer');
$offer_text     = get_theme_mod('ashton_offer_text', '25% off stay & drinks when you book direct with us');
$offer_period   = get_theme_mod('ashton_offer_period', 'February & March only — excluding holidays');
$offer_cta_text = get_theme_mod('ashton_offer_cta_text', 'Book Now');
$offer_cta_link = get_theme_mod('ashton_offer_cta_link', '');
if (empty($offer_cta_link)) { $offer_cta_link = home_url('/rooms/'); }
$offer_hash     = md5($offer_badge . $offer_text . $offer_period);

if ($offer_enabled && $offer_text) :
?>
<!-- Special Offer Announcement Bar -->
<div class="announcement-bar" id="announcement-bar" data-offer-hash="<?php echo esc_attr($offer_hash); ?>" role="banner" aria-label="Special offer">
    <div class="announcement-bar__inner">
        <div class="announcement-bar__content">
            <?php if ($offer_badge) : ?>
                <span class="announcement-bar__badge">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                    </svg>
                    <?php echo esc_html($offer_badge); ?>
                </span>
            <?php endif; ?>
            <span class="announcement-bar__text"><?php echo esc_html($offer_text); ?></span>
            <?php if ($offer_period) : ?>
                <span class="announcement-bar__divider" aria-hidden="true">|</span>
                <span class="announcement-bar__period"><?php echo esc_html($offer_period); ?></span>
            <?php endif; ?>
        </div>
        <div class="announcement-bar__actions">
            <?php if ($offer_cta_text && $offer_cta_link) : ?>
                <a href="<?php echo esc_url($offer_cta_link); ?>" class="announcement-bar__cta">
                    <?php echo esc_html($offer_cta_text); ?>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="5" y1="12" x2="19" y2="12"/>
                        <polyline points="12 5 19 12 12 19"/>
                    </svg>
                </a>
            <?php endif; ?>
            <button type="button" class="announcement-bar__close" id="announcement-bar-close" aria-label="<?php esc_attr_e('Dismiss offer', 'ashton-court'); ?>">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <line x1="18" y1="6" x2="6" y2="18"/>
                    <line x1="6" y1="6" x2="18" y2="18"/>
                </svg>
            </button>
        </div>
    </div>
</div>
<?php endif; ?>

<!-- Header -->
<header class="site-header" id="site-header">
    <div class="header-inner">
        <!-- Logo -->
        <a href="<?php echo esc_url(home_url('/')); ?>" class="site-logo" aria-label="<?php bloginfo('name'); ?>">
            <img src="<?php echo esc_url(ASHTON_THEME_URI); ?>/assets/images/logo.png" alt="Ashton Court Hotel" class="logo-image">
        </a>
        
        <!-- Navigation -->
        <nav class="main-navigation" id="main-navigation" aria-label="<?php esc_attr_e('Primary Menu', 'ashton-court'); ?>">
            <?php ashton_fallback_menu(); ?>
        </nav>
        
        <!-- Header Actions -->
        <div class="header-actions">
            <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', ashton_get_phone())); ?>" class="header-phone">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                    <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/>
                </svg>
                <span class="phone-text"><?php echo esc_html(ashton_get_phone()); ?></span>
            </a>
            
            
            
            <!-- Mobile Menu Toggle -->
            <button type="button" class="menu-toggle" id="menu-toggle" aria-label="<?php esc_attr_e('Toggle Menu', 'ashton-court'); ?>" aria-expanded="false">
                <span class="hamburger">
                    <span class="line line-1"></span>
                    <span class="line line-2"></span>
                    <span class="line line-3"></span>
                </span>
            </button>
        </div>
    </div>
</header>

<!-- Mobile Menu Overlay -->
<div class="mobile-menu-overlay" id="mobile-menu-overlay">
    <div class="mobile-menu-inner">
        <nav class="mobile-nav" aria-label="<?php esc_attr_e('Mobile Menu', 'ashton-court'); ?>">
            <?php ashton_mobile_menu(); ?>
        </nav>
        
        <div class="mobile-menu-footer">
            <div class="mobile-contact">
                <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', ashton_get_phone())); ?>" class="mobile-phone">
                    <?php echo esc_html(ashton_get_phone()); ?>
                </a>
                <a href="mailto:<?php echo esc_attr(ashton_get_email()); ?>" class="mobile-email">
                    <?php echo esc_html(ashton_get_email()); ?>
                </a>
            </div>
            
            <?php $social = ashton_get_social_links(); ?>
            <?php if (array_filter($social)) : ?>
            <div class="mobile-social">
                <?php if ($social['instagram']) : ?>
                    <a href="<?php echo esc_url($social['instagram']); ?>" target="_blank" rel="noopener" aria-label="Instagram">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5"/>
                            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z"/>
                            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/>
                        </svg>
                    </a>
                <?php endif; ?>
                <?php if ($social['facebook']) : ?>
                    <a href="<?php echo esc_url($social['facebook']); ?>" target="_blank" rel="noopener" aria-label="Facebook">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/>
                        </svg>
                    </a>
                <?php endif; ?>
                <?php if ($social['twitter']) : ?>
                    <a href="<?php echo esc_url($social['twitter']); ?>" target="_blank" rel="noopener" aria-label="Twitter">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"/>
                        </svg>
                    </a>
                <?php endif; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<!-- Booking Modal -->
<div class="booking-modal" id="booking-modal">
    <div class="booking-modal-overlay"></div>
    <div class="booking-modal-container">
        <button type="button" class="booking-modal-close" aria-label="<?php esc_attr_e('Close', 'ashton-court'); ?>">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
            </svg>
        </button>
        
        <div class="booking-modal-content">
            <div class="booking-modal-header">
                <span class="booking-tagline">Reservations</span>
                <h2 class="booking-title">Book Your Stay</h2>
                <p class="booking-subtitle">Experience the finest hospitality on the Devon coast</p>
            </div>
            
            <?php echo ashton_render_booking_form(array('style' => 'modal')); ?>
            
            <div class="booking-modal-footer">
                <p>Need assistance? Call us at <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', ashton_get_phone())); ?>"><?php echo esc_html(ashton_get_phone()); ?></a></p>
            </div>
        </div>
    </div>
</div>

<main class="site-main" id="site-main">

<?php
/**
 * Fallback Menu
 */
function ashton_fallback_menu() {
    ?>
    <ul class="nav-menu">
        <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
        <li><a href="<?php echo esc_url(home_url('/about/')); ?>">About</a></li>
        <li class="menu-item-has-children">
            <a href="<?php echo esc_url(home_url('/rooms/')); ?>">Rooms</a>
            <ul class="sub-menu">
                <li><a href="<?php echo esc_url(home_url('/rooms/')); ?>">All Rooms</a></li>
            </ul>
        </li>
        <li class="menu-item-has-children">
            <a href="<?php echo esc_url(home_url('/menus/')); ?>">Menus</a>
            <ul class="sub-menu">
                <li><a href="<?php echo esc_url(home_url('/menus/#drinks')); ?>">Drinks Packages</a></li>
                <li><a href="<?php echo esc_url(home_url('/menus/#finger')); ?>">Finger Buffet</a></li>
                <li><a href="<?php echo esc_url(home_url('/menus/#canape')); ?>">Canapé Options</a></li>
                <li><a href="<?php echo esc_url(home_url('/menus/#vegan')); ?>">Vegan Menu</a></li>
                <li><a href="<?php echo esc_url(home_url('/menus/#fork')); ?>">Fork Buffet Options</a></li>
                <li><a href="<?php echo esc_url(home_url('/menus/#christmas')); ?>">Christmas</a></li>
                <li><a href="<?php echo esc_url(home_url('/menus/#samples')); ?>">Menu Samples</a></li>
                <li><a href="<?php echo esc_url(home_url('/menus/#bespoke')); ?>">Bespoke Functions</a></li>
            </ul>
        </li>
        <li><a href="<?php echo esc_url(home_url('/weddings/')); ?>">Weddings</a></li>
        <li><a href="<?php echo esc_url(home_url('/functions/')); ?>">Functions</a></li>
        <li><a href="<?php echo esc_url(home_url('/contact/')); ?>">Contact</a></li>
    </ul>
    <?php
}

/**
 * Mobile Menu
 */
function ashton_mobile_menu() {
    ?>
    <ul class="mobile-nav-menu">
        <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
        <li><a href="<?php echo esc_url(home_url('/about/')); ?>">About</a></li>
        <li class="menu-item-has-children">
            <a href="<?php echo esc_url(home_url('/rooms/')); ?>">Rooms</a>
        </li>
        <li class="menu-item-has-children">
            <a href="<?php echo esc_url(home_url('/menus/')); ?>">Menus</a>
            <ul class="sub-menu">
                <li><a href="<?php echo esc_url(home_url('/menus/#drinks')); ?>">Drinks Packages</a></li>
                <li><a href="<?php echo esc_url(home_url('/menus/#finger')); ?>">Finger Buffet</a></li>
                <li><a href="<?php echo esc_url(home_url('/menus/#canape')); ?>">Canapé Options</a></li>
                <li><a href="<?php echo esc_url(home_url('/menus/#vegan')); ?>">Vegan Menu</a></li>
                <li><a href="<?php echo esc_url(home_url('/menus/#fork')); ?>">Fork Buffet Options</a></li>
                <li><a href="<?php echo esc_url(home_url('/menus/#christmas')); ?>">Christmas</a></li>
                <li><a href="<?php echo esc_url(home_url('/menus/#samples')); ?>">Menu Samples</a></li>
                <li><a href="<?php echo esc_url(home_url('/menus/#bespoke')); ?>">Bespoke Functions</a></li>
            </ul>
        </li>
        <li><a href="<?php echo esc_url(home_url('/weddings/')); ?>">Weddings</a></li>
        <li><a href="<?php echo esc_url(home_url('/functions/')); ?>">Functions</a></li>
        <li><a href="<?php echo esc_url(home_url('/contact/')); ?>">Contact</a></li>
    </ul>
    <?php
}
