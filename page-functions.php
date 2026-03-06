<?php
if (!defined('ABSPATH')) exit;
/**
 * Template Name: Functions & Events Page
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

<!-- Cinematic Hero -->
<section class="functions-hero-cinematic">
    <div class="hero-media">
        <img src="<?php echo esc_url(ASHTON_THEME_URI); ?>/assets/images/restaurant.png" alt="Functions at Ashton Court">
        <div class="hero-overlay"></div>
    </div>
    
    <div class="func-hero-content">
        <div class="func-hero-top-line"></div>
        <span class="func-hero-badge"><?php echo esc_html($f('func_hero_badge', 'Private Functions & Events')); ?></span>
        
        <h1>
            <span class="func-title-small"><?php echo esc_html($f('func_hero_title_small', 'Have Your Special Event at')); ?></span>
            <span class="func-title-main"><?php echo esc_html($f('func_hero_title_main', 'Ashton Court')); ?></span>
        </h1>
        
        <div class="func-hero-divider">
            <span></span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
            <span></span>
        </div>
        
        <p class="func-hero-subtitle"><?php echo wp_kses_post($f('func_hero_subtitle', 'Create unforgettable memories with stunning sea views,<br>bespoke menus, and impeccable service')); ?></p>
        
        <div class="func-pricing-showcase">
            <div class="func-pricing-card">
                <div class="func-pricing-header">
                    <span class="func-pricing-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                    </span>
                    <span class="func-pricing-type">Evening</span>
                </div>
                <div class="func-pricing-detail">3 Course Dinner</div>
                <?php $ep = explode('.', $f('func_hero_price_evening', '39.50')); ?>
                <div class="func-pricing-amount">£<?php echo esc_html($ep[0]); ?><span>.<?php echo esc_html($ep[1] ?? '50'); ?></span></div>
                <div class="func-pricing-note">per person</div>
            </div>
            
            <div class="func-pricing-or">
                <span>or</span>
            </div>
            
            <div class="func-pricing-card">
                <div class="func-pricing-header">
                    <span class="func-pricing-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="5"/><line x1="12" y1="1" x2="12" y2="3"/><line x1="12" y1="21" x2="12" y2="23"/><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/><line x1="1" y1="12" x2="3" y2="12"/><line x1="21" y1="12" x2="23" y2="12"/><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"/><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"/></svg>
                    </span>
                    <span class="func-pricing-type">Luncheon</span>
                </div>
                <div class="func-pricing-detail">2 Course Meal</div>
                <?php $lp = explode('.', $f('func_hero_price_luncheon', '32.50')); ?>
                <div class="func-pricing-amount">£<?php echo esc_html($lp[0]); ?><span>.<?php echo esc_html($lp[1] ?? '50'); ?></span></div>
                <div class="func-pricing-note">per person</div>
            </div>
        </div>
        
        <div class="func-hero-features">
            <span><?php echo esc_html($f('func_hero_feature1', 'Min 30 guests')); ?></span>
            <span class="func-dot"></span>
            <span><?php echo esc_html($f('func_hero_feature2', 'Tea/Coffee included')); ?></span>
            <span class="func-dot"></span>
            <span><?php echo esc_html($f('func_hero_feature3', 'No weekend charges')); ?></span>
        </div>
    </div>
    
</section>

<!-- Introduction Banner - Premium -->
<section class="func-intro-premium">
    <div class="func-intro-bg">
        <div class="func-intro-pattern"></div>
    </div>
    
    <div class="func-intro-content">
        <div class="func-intro-center">
            <div class="func-intro-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1">
                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                </svg>
            </div>
            <span class="func-intro-label"><?php echo esc_html($f('func_intro_label', 'Bespoke Menus')); ?></span>
            <h2><?php echo wp_kses_post($f('func_intro_title', 'Create Your Perfect<br><em>Function Menu</em>')); ?></h2>
            <p><?php echo wp_kses_post($f('func_intro_desc', "Select from our 'fixed-price' special-occasion menu options.<br>All items are within the fixed-price, making selection and budgeting simple.")); ?></p>
        </div>
        
        <div class="func-intro-features">
            <div class="func-feature-card">
                <div class="feature-card-inner">
                    <div class="feature-number">30+</div>
                    <div class="feature-text">
                        <span>Minimum</span>
                        <strong>Guests</strong>
                    </div>
                </div>
            </div>
            
            <div class="func-feature-card">
                <div class="feature-card-inner">
                    <div class="feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M18 8h1a4 4 0 010 8h-1M2 8h16v9a4 4 0 01-4 4H6a4 4 0 01-4-4V8z"/><line x1="6" y1="1" x2="6" y2="4"/><line x1="10" y1="1" x2="10" y2="4"/><line x1="14" y1="1" x2="14" y2="4"/></svg>
                    </div>
                    <div class="feature-text">
                        <span>Tea & Coffee</span>
                        <strong>Included</strong>
                    </div>
                </div>
            </div>
            
            <div class="func-feature-card">
                <div class="feature-card-inner">
                    <div class="feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                    </div>
                    <div class="feature-text">
                        <span>Fri & Sat</span>
                        <strong>No Extra Charge</strong>
                    </div>
                </div>
            </div>
            
            <div class="func-feature-card">
                <div class="feature-card-inner">
                    <div class="feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                    </div>
                    <div class="feature-text">
                        <span>Timing</span>
                        <strong>Flexible</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Elegant Menu Section -->
<section class="func-menu-elegant">
    <div class="menu-elegant-inner">
        
        <!-- Course 01: First Course -->
        <div class="elegant-course" id="first-course">
            <div class="course-header-elegant">
                <div class="course-num">01</div>
                <div class="course-info">
                    <span class="course-tag">To Begin</span>
                    <h2>First Course</h2>
                </div>
                <div class="course-note">Fixed-price unless supplement stated</div>
            </div>
            
            <div class="menu-list">
                <div class="menu-row">
                    <span class="dish-name">Daily Soup of Goodness</span>
                    <span class="dish-dots"></span>
                    <span class="dish-desc">Served with crusty rolls</span>
                </div>
                <div class="menu-row">
                    <span class="dish-name">Fanned Melon & Orange Platter</span>
                    <span class="dish-dots"></span>
                    <span class="dish-desc">With mango coulis</span>
                </div>
                <div class="menu-row">
                    <span class="dish-name">Local Fish Cakes</span>
                    <span class="dish-dots"></span>
                    <span class="dish-desc">With a lemon and lime salsa</span>
                </div>
                <div class="menu-row supplement">
                    <span class="dish-name">Lobster Bisque Soup <em>+£2</em></span>
                    <span class="dish-dots"></span>
                    <span class="dish-desc">Laced with brandy and cream</span>
                </div>
                <div class="menu-row">
                    <span class="dish-name">Port & Cinnamon Mulled Melon</span>
                    <span class="dish-dots"></span>
                    <span class="dish-desc">With spiced and sliced orange</span>
                </div>
                <div class="menu-row">
                    <span class="dish-name">Sautéed Garlic Mushrooms</span>
                    <span class="dish-dots"></span>
                    <span class="dish-desc">Creamy sauce on rosemary croûte</span>
                </div>
                <div class="menu-row">
                    <span class="dish-name">Italian Tuna</span>
                    <span class="dish-dots"></span>
                    <span class="dish-desc">Cannellini beans, pasta salad</span>
                </div>
                <div class="menu-row supplement">
                    <span class="dish-name">Traditional Prawn Cocktail <em>+£1</em></span>
                    <span class="dish-dots"></span>
                    <span class="dish-desc">Marie-Rose sauce, brown bread</span>
                </div>
                <div class="menu-row">
                    <span class="dish-name">Egg & Prawn Mayonnaise</span>
                    <span class="dish-dots"></span>
                    <span class="dish-desc">With diced tomato, lettuce</span>
                </div>
                <div class="menu-row">
                    <span class="dish-name">Coronation Chicken</span>
                    <span class="dish-dots"></span>
                    <span class="dish-desc">Toasted seeded bread, watercress</span>
                </div>
                <div class="menu-row supplement">
                    <span class="dish-name">Fanned Avocado with Prawns <em>+£1</em></span>
                    <span class="dish-dots"></span>
                    <span class="dish-desc">Toasted sesame seed dressing</span>
                </div>
                <div class="menu-row">
                    <span class="dish-name">Avocado & Smoked Bacon Salad</span>
                    <span class="dish-dots"></span>
                    <span class="dish-desc">Garlic croutons, pesto vinaigrette</span>
                </div>
                <div class="menu-row">
                    <span class="dish-name">Toasted Goats Cheese</span>
                    <span class="dish-dots"></span>
                    <span class="dish-desc">Crisp salad, fruity chutney</span>
                </div>
            </div>
        </div>
        
        <div class="course-divider">
            <span></span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
            <span></span>
        </div>
        
        <!-- Course 02: Fish Course -->
        <div class="elegant-course fish" id="fish-course">
            <div class="course-header-elegant">
                <div class="course-num">02</div>
                <div class="course-info">
                    <span class="course-tag">Optional</span>
                    <h2>Fish Course</h2>
                </div>
                <div class="course-note">One selection only please</div>
            </div>
            
            <div class="fish-course-grid">
                <div class="fish-item">
                    <h4>Fillets of Plaice Mornay</h4>
                    <p>Rolled in spinach</p>
                    <span class="fish-supp">+£10</span>
                </div>
                <div class="fish-item">
                    <h4>Sole Roulade Alsace</h4>
                    <p>With white wine and grapes</p>
                    <span class="fish-supp">+£12</span>
                </div>
                <div class="fish-item palate">
                    <h4>Palate Cleanser</h4>
                    <p>Tangy champagne sorbet</p>
                    <span class="fish-supp">+£5</span>
                </div>
            </div>
        </div>
        
        <div class="course-divider">
            <span></span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
            <span></span>
        </div>
        
        <!-- Course 03: Main Course -->
        <div class="elegant-course" id="main-course">
            <div class="course-header-elegant">
                <div class="course-num">03</div>
                <div class="course-info">
                    <span class="course-tag">The Heart of the Meal</span>
                    <h2>Main Course</h2>
                </div>
                <div class="course-note">All served with fresh vegetables and potatoes</div>
            </div>
            
            <div class="menu-list two-col">
                <div class="menu-row">
                    <span class="dish-name">Roasted Local Pork</span>
                    <span class="dish-dots"></span>
                    <span class="dish-desc">Apple sauce, sage stuffing</span>
                </div>
                <div class="menu-row">
                    <span class="dish-name">Slow Braised Lamb Hock</span>
                    <span class="dish-dots"></span>
                    <span class="dish-desc">North-African, mushroom risotto</span>
                </div>
                <div class="menu-row">
                    <span class="dish-name">Char-Grilled Lamb Cutlets</span>
                    <span class="dish-dots"></span>
                    <span class="dish-desc">Rosemary, mint-gravy sauce</span>
                </div>
                <div class="menu-row">
                    <span class="dish-name">Roasted Devon Turkey</span>
                    <span class="dish-dots"></span>
                    <span class="dish-desc">Cranberry stuffing, pigs in blankets</span>
                </div>
                <div class="menu-row">
                    <span class="dish-name">Roasted Corn-Fed Chicken</span>
                    <span class="dish-dots"></span>
                    <span class="dish-desc">Orange stuffing, bacon rolls</span>
                </div>
                <div class="menu-row">
                    <span class="dish-name">Normandy Chicken Breast</span>
                    <span class="dish-dots"></span>
                    <span class="dish-desc">Brie, brandy, apple cream</span>
                </div>
                <div class="menu-row">
                    <span class="dish-name">Peppered Chicken Breast</span>
                    <span class="dish-dots"></span>
                    <span class="dish-desc">Rich creamy pepper sauce</span>
                </div>
                <div class="menu-row">
                    <span class="dish-name">Roasted Topside of Beef</span>
                    <span class="dish-dots"></span>
                    <span class="dish-desc">Yorkshire pudding, horseradish</span>
                </div>
                <div class="menu-row supplement">
                    <span class="dish-name">Steamed Monkfish & Prawns <em>+£5</em></span>
                    <span class="dish-dots"></span>
                    <span class="dish-desc">Lemongrass, chilli, lime</span>
                </div>
                <div class="menu-row">
                    <span class="dish-name">Baked Salmon Fillet</span>
                    <span class="dish-dots"></span>
                    <span class="dish-desc">Buttered spinach, Noilly Prat</span>
                </div>
            </div>
            
            <!-- Vegetarian Sub-section -->
            <div class="veg-subsection">
                <div class="veg-header">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                    <span>Vegetarian Options</span>
                </div>
                <div class="menu-list two-col">
                    <div class="menu-row">
                        <span class="dish-name">Baked Vegetable Tart</span>
                        <span class="dish-dots"></span>
                        <span class="dish-desc">Apple cream, hint of mint</span>
                    </div>
                    <div class="menu-row">
                        <span class="dish-name">Tomato & Courgette Cannelloni</span>
                        <span class="dish-dots"></span>
                        <span class="dish-desc">Melting mozzarella</span>
                    </div>
                    <div class="menu-row">
                        <span class="dish-name">Mediterranean Vegetables</span>
                        <span class="dish-dots"></span>
                        <span class="dish-desc">Crisp filo, pesto cream</span>
                    </div>
                    <div class="menu-row">
                        <span class="dish-name">Parsnip & Potato Rosti</span>
                        <span class="dish-dots"></span>
                        <span class="dish-desc">Stir-fried leeks, garlic chive</span>
                    </div>
                    <div class="menu-row">
                        <span class="dish-name">Mixed Vegetable Strudel</span>
                        <span class="dish-dots"></span>
                        <span class="dish-desc">Sweet-pepper, asparagus</span>
                    </div>
                    <div class="menu-row">
                        <span class="dish-name">Ravioli of Goats Cheese</span>
                        <span class="dish-dots"></span>
                        <span class="dish-desc">Ratatouille, pesto cream</span>
                    </div>
                    <div class="menu-row">
                        <span class="dish-name">Chargrilled Aubergine Tower</span>
                        <span class="dish-dots"></span>
                        <span class="dish-desc">Mushroom, goats cheese</span>
                    </div>
                    <div class="menu-row">
                        <span class="dish-name">Chargrilled Polenta</span>
                        <span class="dish-dots"></span>
                        <span class="dish-desc">Wild mushrooms, parmesan</span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="course-divider">
            <span></span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
            <span></span>
        </div>
        
        <!-- Course 04: Desserts -->
        <div class="elegant-course" id="desserts">
            <div class="course-header-elegant">
                <div class="course-num">04</div>
                <div class="course-info">
                    <span class="course-tag">Sweet Finale</span>
                    <h2>Desserts</h2>
                </div>
                <div class="course-note">The perfect ending to your celebration</div>
            </div>
            
            <div class="dessert-grid">
                <div class="dessert-item featured">
                    <h4>Two-Tone Belgian Chocolate Torte</h4>
                    <p>Light & dark chocolate, Devonshire clotted cream</p>
                </div>
                <div class="dessert-item">
                    <h4>Hot Apple Strudel</h4>
                    <p>Butterscotch sauce, vanilla ice cream</p>
                </div>
                <div class="dessert-item">
                    <h4>Olde English Spotted Dick</h4>
                    <p>With Devonshire custard</p>
                </div>
                <div class="dessert-item">
                    <h4>Home Made Ice Creams</h4>
                    <p>With Devonshire clotted cream</p>
                </div>
                <div class="dessert-item">
                    <h4>Chef's Chocolate Brownie</h4>
                    <p>Extra special, vanilla ice cream</p>
                </div>
                <div class="dessert-item">
                    <h4>3 Cheese Selection</h4>
                    <p>Biscuits, celery, grapes, apple</p>
                </div>
            </div>
        </div>
        
    </div>
</section>

<!-- What's Included -->
<section class="functions-included">
    <div class="included-inner">
        <div class="included-header">
            <span class="included-badge"><?php echo esc_html($f('func_incl_badge', 'Everything You Need')); ?></span>
            <h2><?php echo esc_html($f('func_incl_title', "What's Included")); ?></h2>
        </div>
        
        <div class="included-grid">
            <div class="included-item">
                <div class="included-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                </div>
                <h4><?php echo esc_html($f('func_incl1_title', 'No Choice Menus')); ?></h4>
                <p><?php echo esc_html($f('func_incl1_desc', "Select a 'safe' choice for everyone - no fuss, no pre-ordering necessary")); ?></p>
            </div>
            <div class="included-item">
                <div class="included-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                </div>
                <h4><?php echo esc_html($f('func_incl2_title', 'Vegetarian Always Available')); ?></h4>
                <p><?php echo esc_html($f('func_incl2_desc', 'Main course vegetarian/vegan options always available on the day')); ?></p>
            </div>
            <div class="included-item">
                <div class="included-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                </div>
                <h4><?php echo esc_html($f('func_incl3_title', 'Multiple Menu Options')); ?></h4>
                <p><?php echo esc_html($f('func_incl3_desc', 'No extra charges for multiple menu options (max 3 per course)')); ?></p>
            </div>
            <div class="included-item">
                <div class="included-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                </div>
                <h4><?php echo esc_html($f('func_incl4_title', 'No Weekend Charges')); ?></h4>
                <p><?php echo esc_html($f('func_incl4_desc', 'No extra charge for Friday or Saturday functions')); ?></p>
            </div>
            <div class="included-item">
                <div class="included-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                </div>
                <h4><?php echo esc_html($f('func_incl5_title', 'Free Parking')); ?></h4>
                <p><?php echo esc_html($f('func_incl5_desc', 'No charges for parking (subject to availability)')); ?></p>
            </div>
            <div class="included-item">
                <div class="included-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                </div>
                <h4><?php echo esc_html($f('func_incl6_title', 'Coronation Gardens')); ?></h4>
                <p><?php echo esc_html($f('func_incl6_desc', 'Exclusive use of spectacular Exe-estuary/sea-facing gardens')); ?></p>
            </div>
        </div>
    </div>
</section>

<!-- Function Extras -->
<section class="functions-extras">
    <div class="extras-content">
        <h2>Function Extras</h2>
        <p>Our Function Coordinator will be pleased to discuss various options</p>
        
        <div class="extras-list">
            <div class="extra-item">
                <span class="extra-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M9 18V5l12-2v13"/><circle cx="6" cy="18" r="3"/><circle cx="18" cy="16" r="3"/></svg>
                </span>
                <span>Evening DJ or Entertainment</span>
            </div>
            <div class="extra-item">
                <span class="extra-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M18 8h1a4 4 0 010 8h-1M2 8h16v9a4 4 0 01-4 4H6a4 4 0 01-4-4V8z"/></svg>
                </span>
                <span>Drinks Packages Available</span>
            </div>
            <div class="extra-item">
                <span class="extra-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path d="M8 14s1.5 2 4 2 4-2 4-2"/><line x1="9" y1="9" x2="9.01" y2="9"/><line x1="15" y1="9" x2="15.01" y2="9"/></svg>
                </span>
                <span>Canapés & Finger Buffets</span>
            </div>
            <div class="extra-item">
                <span class="extra-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"/><path d="M12 6v6l4 2"/></svg>
                </span>
                <span>Hot & Cold Buffets</span>
            </div>
            <div class="extra-item">
                <span class="extra-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
                </span>
                <span>Vegan & Special Dietary Options</span>
            </div>
        </div>
    </div>
</section>

<!-- Sample Event -->
<section class="sample-event-section">
    <div class="sample-event-card">
        <div class="event-card-header">
            <span class="event-type">Sample Menu</span>
            <h3>Celebrate the Engagement</h3>
            <p class="event-subtitle">of Rachel & Jason</p>
        </div>
        
        <div class="event-menu">
            <div class="event-course">
                <span class="course-name">First Course</span>
                <ul>
                    <li>Fanned Melon & Orange Platter with mango coulis</li>
                    <li>Sautéed Garlic Mushrooms with creamy sauce on rosemary croûte</li>
                </ul>
            </div>
            <div class="event-course">
                <span class="course-name">Main Course</span>
                <ul>
                    <li>Roasted Topside of Beef with Yorkshire pudding and horseradish</li>
                    <li>Roasted Crown of Devon Turkey with cranberry stuffing</li>
                    <li>Spinach & Ricotta Tortellini in pesto cream (V)</li>
                </ul>
            </div>
            <div class="event-course">
                <span class="course-name">To Finish</span>
                <ul>
                    <li>Two-Tone Belgian Chocolate Torte with clotted cream</li>
                    <li>Hot Apple Strudel with butterscotch sauce</li>
                </ul>
            </div>
            <div class="event-course final">
                <span class="course-name">To Complete</span>
                <p>Coffee or Tea and Luxury Chocolates</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact CTA -->
<section class="functions-contact">
    <div class="contact-inner">
        <div class="contact-content">
            <span class="contact-badge"><?php echo esc_html($f('func_cta_badge', 'Ready to Plan?')); ?></span>
            <h2><?php echo esc_html($f('func_cta_title', "Let's Create Your Perfect Event")); ?></h2>
            <p><?php echo esc_html($f('func_cta_desc', 'Contact our dedicated Function Coordinator to discuss your requirements and arrange a venue viewing.')); ?></p>
            
            <div class="contact-details">
                <?php $phone = $f('func_cta_phone', '01395 263002'); ?>
                <a href="tel:<?php echo esc_attr($phone); ?>" class="contact-link">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.362 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
                    <span><?php echo esc_html($phone); ?></span>
                </a>
                <?php $email = $f('func_cta_email', 'reception@ashtoncourthotel.co.uk'); ?>
                <a href="mailto:<?php echo esc_attr($email); ?>" class="contact-link">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                    <span><?php echo esc_html($email); ?></span>
                </a>
            </div>
            
            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="contact-btn">
                <span>Send Enquiry</span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
            </a>
        </div>
        
        <div class="contact-info-card">
            <h4><?php echo esc_html($f('func_contact_hotel', 'Ashton Court Hotel')); ?></h4>
            <p><?php echo wp_kses_post($f('func_contact_address', '5-6 Louisa Terrace<br>Exmouth, Devon EX8 2AQ')); ?></p>
            <div class="info-divider"></div>
            <p class="info-note"><?php echo wp_kses_post($f('func_contact_note', 'Minimum 30 persons for all functions<br>Issue 005 • January 2025 - December 2026')); ?></p>
        </div>
    </div>
</section>

<style>
/* ========================================
   FUNCTIONS PAGE - PREMIUM STYLES
   ======================================== */

/* Hero Section */
.functions-hero-cinematic {
    position: relative;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    overflow: hidden;
    padding: 120px 20px 80px;
}

.functions-hero-cinematic .hero-media {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 1;
}

.functions-hero-cinematic .hero-media img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.functions-hero-cinematic .hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(180deg, 
        rgba(15, 40, 32, 0.75) 0%, 
        rgba(26, 60, 52, 0.85) 50%,
        rgba(15, 40, 32, 0.95) 100%);
    z-index: 2;
}

.func-hero-content {
    position: relative;
    z-index: 10;
    text-align: center;
    color: white;
    width: 100%;
    max-width: 1400px;
    padding: 0 40px;
}

.func-hero-top-line {
    display: none;
}

.func-hero-badge {
    display: inline-block;
    padding: 0.6rem 2.5rem;
    background: transparent;
    border: 1px solid rgba(184, 149, 107, 0.4);
    font-size: 0.7rem;
    letter-spacing: 0.25em;
    text-transform: uppercase;
    color: var(--color-accent);
    margin-bottom: 2rem;
}

.func-hero-content h1 {
    margin-bottom: 2rem;
}

.func-title-small {
    display: block;
    font-family: var(--font-body);
    font-size: clamp(1.1rem, 2.5vw, 1.5rem);
    font-weight: 300;
    letter-spacing: 0.2em;
    text-transform: uppercase;
    color: rgba(255, 255, 255, 0.85);
    margin-bottom: 0.75rem;
}

.func-title-main {
    display: block;
    font-family: var(--font-heading);
    font-size: clamp(4rem, 10vw, 7rem);
    font-style: italic;
    color: white;
    line-height: 1;
}

.func-hero-divider {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 2rem;
    margin-bottom: 2rem;
}

.func-hero-divider span {
    width: 120px;
    height: 1px;
    background: linear-gradient(90deg, transparent, rgba(184, 149, 107, 0.5), transparent);
}

.func-hero-divider svg {
    width: 28px;
    height: 28px;
    color: var(--color-accent);
    opacity: 0.7;
}

.func-hero-subtitle {
    font-size: clamp(1rem, 2vw, 1.25rem);
    font-style: italic;
    opacity: 0.7;
    margin-bottom: 4rem;
    line-height: 1.8;
    max-width: 700px;
    margin-left: auto;
    margin-right: auto;
}

/* Premium Pricing Cards - Wide Layout */
.func-pricing-showcase {
    display: flex;
    align-items: stretch;
    justify-content: center;
    gap: 0;
    margin-bottom: 3rem;
    max-width: 900px;
    margin-left: auto;
    margin-right: auto;
}

@media (max-width: 700px) {
    .func-pricing-showcase {
        flex-direction: column;
        max-width: 350px;
    }
}

.func-pricing-card {
    position: relative;
    flex: 1;
    padding: 2.5rem 3rem;
    background: linear-gradient(135deg, rgba(255,255,255,0.08), rgba(255,255,255,0.02));
    border: 1px solid rgba(255, 255, 255, 0.12);
    backdrop-filter: blur(10px);
    transition: all 0.4s ease;
}

.func-pricing-card:first-child {
    border-radius: 8px 0 0 8px;
    border-right: none;
}

.func-pricing-card:last-child {
    border-radius: 0 8px 8px 0;
    border-left: none;
}

@media (max-width: 700px) {
    .func-pricing-card:first-child {
        border-radius: 8px 8px 0 0;
        border-right: 1px solid rgba(255, 255, 255, 0.12);
        border-bottom: none;
    }
    
    .func-pricing-card:last-child {
        border-radius: 0 0 8px 8px;
        border-left: 1px solid rgba(255, 255, 255, 0.12);
        border-top: none;
    }
}

.func-pricing-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 3px;
    background: linear-gradient(90deg, transparent 20%, var(--color-accent) 50%, transparent 80%);
}

.func-pricing-card:hover {
    background: linear-gradient(135deg, rgba(255,255,255,0.12), rgba(255,255,255,0.04));
}

.func-pricing-header {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.6rem;
    margin-bottom: 0.5rem;
}

.func-pricing-icon {
    width: 20px;
    height: 20px;
}

.func-pricing-icon svg {
    width: 100%;
    height: 100%;
    color: var(--color-accent);
}

.func-pricing-type {
    font-size: 0.75rem;
    letter-spacing: 0.15em;
    text-transform: uppercase;
    color: var(--color-accent);
}

.func-pricing-detail {
    font-size: 0.9rem;
    opacity: 0.6;
    margin-bottom: 0.75rem;
}

.func-pricing-amount {
    font-family: var(--font-heading);
    font-size: clamp(2.5rem, 5vw, 3.5rem);
    color: white;
    line-height: 1;
    margin-bottom: 0.25rem;
}

.func-pricing-amount span {
    font-size: 0.5em;
    opacity: 0.6;
}

.func-pricing-note {
    font-size: 0.8rem;
    opacity: 0.4;
    letter-spacing: 0.05em;
}

.func-pricing-or {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0 0.5rem;
    background: linear-gradient(180deg, rgba(255,255,255,0.08), rgba(255,255,255,0.02));
    border-top: 1px solid rgba(255, 255, 255, 0.12);
    border-bottom: 1px solid rgba(255, 255, 255, 0.12);
}

.func-pricing-or span {
    font-family: var(--font-heading);
    font-style: italic;
    font-size: 0.9rem;
    opacity: 0.4;
}

@media (max-width: 700px) {
    .func-pricing-or {
        padding: 0.5rem 0;
        border-left: 1px solid rgba(255, 255, 255, 0.12);
        border-right: 1px solid rgba(255, 255, 255, 0.12);
        border-top: none;
        border-bottom: none;
    }
}

/* Hero Features - Wide */
.func-hero-features {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 3rem;
    font-size: 0.85rem;
    opacity: 0.5;
    letter-spacing: 0.1em;
}

.func-dot {
    width: 5px;
    height: 5px;
    background: var(--color-accent);
    border-radius: 50%;
    opacity: 0.6;
}

@media (max-width: 700px) {
    .func-hero-features {
        flex-direction: column;
        gap: 0.75rem;
    }
    
    .func-dot {
        display: none;
    }
}


/* Intro Banner - Premium */
.func-intro-premium {
    position: relative;
    padding: 100px 0;
    background: #f9f7f4;
    overflow: hidden;
}

.func-intro-bg {
    position: absolute;
    inset: 0;
    pointer-events: none;
}

.func-intro-pattern {
    position: absolute;
    inset: 0;
    background-image: 
        radial-gradient(circle at 20% 50%, rgba(184, 149, 107, 0.08) 0%, transparent 50%),
        radial-gradient(circle at 80% 50%, rgba(26, 60, 52, 0.06) 0%, transparent 50%);
}

.func-intro-pattern::before {
    content: '';
    position: absolute;
    inset: 0;
    background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23b8956b' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
    opacity: 0.5;
}

.func-intro-content {
    position: relative;
    z-index: 2;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 40px;
}

.func-intro-center {
    text-align: center;
    margin-bottom: 60px;
}

.func-intro-icon {
    width: 60px;
    height: 60px;
    margin: 0 auto 1.5rem;
}

.func-intro-icon svg {
    width: 100%;
    height: 100%;
    color: var(--color-accent);
}

.func-intro-label {
    display: inline-block;
    padding: 0.4rem 1.5rem;
    background: linear-gradient(135deg, rgba(184, 149, 107, 0.15), rgba(184, 149, 107, 0.05));
    border-radius: 20px;
    font-size: 0.7rem;
    letter-spacing: 0.2em;
    text-transform: uppercase;
    color: var(--color-accent);
    margin-bottom: 1.5rem;
}

.func-intro-center h2 {
    font-size: clamp(2rem, 4vw, 3rem);
    color: var(--color-text);
    line-height: 1.3;
    margin-bottom: 1.5rem;
}

.func-intro-center h2 em {
    font-style: italic;
    color: var(--color-accent);
}

.func-intro-center > p {
    font-size: 1.1rem;
    color: var(--color-text-muted);
    line-height: 1.8;
    max-width: 600px;
    margin: 0 auto;
}

/* Feature Cards */
.func-intro-features {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 1.5rem;
}

@media (max-width: 968px) {
    .func-intro-features {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 500px) {
    .func-intro-features {
        grid-template-columns: 1fr;
    }
}

.func-feature-card {
    position: relative;
    background: white;
    border-radius: 16px;
    padding: 2rem;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    overflow: hidden;
}

.func-feature-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 3px;
    background: linear-gradient(90deg, var(--color-accent), #d4ac6e);
    transform: scaleX(0);
    transition: transform 0.4s ease;
}

.func-feature-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.12);
}

.func-feature-card:hover::before {
    transform: scaleX(1);
}

.feature-card-inner {
    display: flex;
    align-items: center;
    gap: 1rem;
}

.feature-number {
    font-family: var(--font-heading);
    font-size: 2.5rem;
    color: var(--color-accent);
    line-height: 1;
}

.feature-icon {
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, rgba(184, 149, 107, 0.15), rgba(184, 149, 107, 0.05));
    border-radius: 12px;
    flex-shrink: 0;
}

.feature-icon svg {
    width: 22px;
    height: 22px;
    color: var(--color-accent);
}

.feature-text {
    display: flex;
    flex-direction: column;
}

.feature-text span {
    font-size: 0.75rem;
    color: var(--color-text-muted);
    letter-spacing: 0.05em;
}

.feature-text strong {
    font-size: 1rem;
    color: var(--color-text);
    font-weight: 600;
}

/* ========================================
   ELEGANT MENU SECTION
   ======================================== */
.func-menu-elegant {
    background: #faf8f5;
    padding: 80px 0;
}

.menu-elegant-inner {
    max-width: 1000px;
    margin: 0 auto;
    padding: 0 40px;
}

/* Course Header */
.elegant-course {
    margin-bottom: 60px;
}

.course-header-elegant {
    display: flex;
    align-items: center;
    gap: 1.5rem;
    margin-bottom: 2.5rem;
    padding-bottom: 1.5rem;
    border-bottom: 1px solid rgba(184, 149, 107, 0.2);
}

.course-num {
    font-family: var(--font-heading);
    font-size: 3.5rem;
    line-height: 1;
    color: var(--color-accent);
    opacity: 0.4;
}

.course-info {
    flex: 1;
}

.course-tag {
    display: block;
    font-size: 0.65rem;
    letter-spacing: 0.2em;
    text-transform: uppercase;
    color: var(--color-accent);
    margin-bottom: 0.25rem;
}

.course-info h2 {
    font-size: clamp(1.75rem, 3vw, 2.25rem);
    color: var(--color-text);
    margin: 0;
}

.course-note {
    font-size: 0.8rem;
    font-style: italic;
    color: var(--color-text-muted);
    white-space: nowrap;
}

@media (max-width: 768px) {
    .course-header-elegant {
        flex-wrap: wrap;
    }
    
    .course-note {
        width: 100%;
        white-space: normal;
        margin-top: 0.5rem;
    }
}

/* Menu List */
.menu-list {
    display: flex;
    flex-direction: column;
    gap: 0;
}

.menu-list.two-col {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 0 3rem;
}

@media (max-width: 768px) {
    .menu-list.two-col {
        grid-template-columns: 1fr;
    }
}

.menu-row {
    display: flex;
    align-items: baseline;
    gap: 0.75rem;
    padding: 1rem 0;
    border-bottom: 1px solid rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
}

.menu-row:hover {
    background: rgba(184, 149, 107, 0.05);
    padding-left: 0.5rem;
    padding-right: 0.5rem;
    margin-left: -0.5rem;
    margin-right: -0.5rem;
}

.dish-name {
    font-family: var(--font-heading);
    font-size: 1.05rem;
    color: var(--color-text);
    white-space: nowrap;
}

.dish-name em {
    font-style: normal;
    font-family: var(--font-body);
    font-size: 0.8rem;
    color: var(--color-accent);
    font-weight: 600;
    margin-left: 0.5rem;
}

.menu-row.supplement .dish-name {
    color: var(--color-accent);
}

.dish-dots {
    flex: 1;
    border-bottom: 1px dotted rgba(0, 0, 0, 0.2);
    min-width: 20px;
    margin-bottom: 4px;
}

.dish-desc {
    font-size: 0.85rem;
    color: var(--color-text-muted);
    font-style: italic;
    text-align: right;
    max-width: 200px;
}

/* Course Divider */
.course-divider {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 1.5rem;
    padding: 40px 0;
}

.course-divider span {
    width: 100px;
    height: 1px;
    background: linear-gradient(90deg, transparent, rgba(184, 149, 107, 0.4), transparent);
}

.course-divider svg {
    width: 24px;
    height: 24px;
    color: var(--color-accent);
    opacity: 0.5;
}

/* Fish Course Grid */
.fish-course-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 1.5rem;
}

@media (max-width: 768px) {
    .fish-course-grid {
        grid-template-columns: 1fr;
    }
}

.fish-item {
    text-align: center;
    padding: 2rem 1.5rem;
    background: white;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.04);
    transition: all 0.3s ease;
}

.fish-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.fish-item.palate {
    background: linear-gradient(135deg, rgba(184, 149, 107, 0.1), rgba(184, 149, 107, 0.02));
    border: 1px solid rgba(184, 149, 107, 0.2);
}

.fish-item h4 {
    font-size: 1.1rem;
    color: var(--color-text);
    margin-bottom: 0.5rem;
}

.fish-item p {
    font-size: 0.85rem;
    color: var(--color-text-muted);
    font-style: italic;
    margin-bottom: 1rem;
}

.fish-supp {
    display: inline-block;
    padding: 0.35rem 1rem;
    background: var(--color-accent);
    color: white;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 500;
}

/* Vegetarian Subsection */
.veg-subsection {
    margin-top: 3rem;
    padding-top: 2rem;
    border-top: 2px solid #4caf50;
}

.veg-header {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    margin-bottom: 1.5rem;
}

.veg-header svg {
    width: 24px;
    height: 24px;
    color: #4caf50;
}

.veg-header span {
    font-size: 0.75rem;
    letter-spacing: 0.15em;
    text-transform: uppercase;
    color: #4caf50;
    font-weight: 600;
}

/* Dessert Grid */
.dessert-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 1.5rem;
}

@media (max-width: 900px) {
    .dessert-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 600px) {
    .dessert-grid {
        grid-template-columns: 1fr;
    }
}

.dessert-item {
    padding: 1.5rem;
    background: white;
    border-radius: 8px;
    text-align: center;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.04);
    transition: all 0.3s ease;
}

.dessert-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.dessert-item.featured {
    grid-column: span 3;
    background: linear-gradient(135deg, #3e2723, #5d4037);
    color: white;
    padding: 2rem;
}

@media (max-width: 900px) {
    .dessert-item.featured {
        grid-column: span 2;
    }
}

@media (max-width: 600px) {
    .dessert-item.featured {
        grid-column: span 1;
    }
}

.dessert-item h4 {
    font-size: 1rem;
    margin-bottom: 0.5rem;
}

.dessert-item.featured h4 {
    font-size: 1.25rem;
    color: white;
}

.dessert-item p {
    font-size: 0.85rem;
    color: var(--color-text-muted);
    margin: 0;
}

.dessert-item.featured p {
    color: rgba(255, 255, 255, 0.7);
}

/* What's Included */
.functions-included {
    background: linear-gradient(135deg, #1a3c34 0%, #0f2820 100%);
    color: white;
    padding: 100px 0;
}

.included-inner {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 40px;
}

.included-header {
    text-align: center;
    margin-bottom: 60px;
}

.included-badge {
    display: inline-block;
    padding: 0.5rem 1.25rem;
    background: rgba(184, 149, 107, 0.2);
    border: 1px solid rgba(184, 149, 107, 0.3);
    border-radius: 25px;
    font-size: 0.7rem;
    letter-spacing: 0.15em;
    text-transform: uppercase;
    color: var(--color-accent);
    margin-bottom: 1rem;
}

.included-header h2 {
    font-size: clamp(2rem, 4vw, 3rem);
    color: white;
}

.included-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2rem;
}

@media (max-width: 968px) {
    .included-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 600px) {
    .included-grid {
        grid-template-columns: 1fr;
    }
}

.included-item {
    padding: 2rem;
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 16px;
    transition: all 0.3s ease;
}

.included-item:hover {
    background: rgba(255, 255, 255, 0.08);
    transform: translateY(-5px);
}

.included-icon {
    width: 40px;
    height: 40px;
    margin-bottom: 1rem;
}

.included-icon svg {
    width: 100%;
    height: 100%;
    color: var(--color-accent);
}

.included-item h4 {
    font-size: 1.1rem;
    color: white;
    margin-bottom: 0.5rem;
}

.included-item p {
    font-size: 0.9rem;
    color: rgba(255, 255, 255, 0.6);
    margin: 0;
}

/* Function Extras */
.functions-extras {
    background: var(--color-accent);
    padding: 60px 0;
}

.extras-content {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 40px;
    text-align: center;
}

.extras-content h2 {
    font-size: 2rem;
    color: white;
    margin-bottom: 0.5rem;
}

.extras-content > p {
    color: rgba(255, 255, 255, 0.8);
    margin-bottom: 2.5rem;
}

.extras-list {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 1.5rem;
}

.extra-item {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    padding: 1rem 1.5rem;
    background: rgba(255, 255, 255, 0.15);
    border-radius: 30px;
    color: white;
    font-size: 0.95rem;
    transition: all 0.3s ease;
}

.extra-item:hover {
    background: rgba(255, 255, 255, 0.25);
    transform: translateY(-3px);
}

.extra-icon {
    width: 24px;
    height: 24px;
}

.extra-icon svg {
    width: 100%;
    height: 100%;
}

/* Sample Event */
.sample-event-section {
    padding: 100px 0;
    background: #f8f6f3;
}

.sample-event-card {
    max-width: 700px;
    margin: 0 auto;
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
}

.event-card-header {
    background: linear-gradient(135deg, #1a3c34 0%, #0f2820 100%);
    padding: 3rem;
    text-align: center;
    color: white;
}

.event-type {
    display: inline-block;
    padding: 0.4rem 1rem;
    background: rgba(184, 149, 107, 0.3);
    border-radius: 20px;
    font-size: 0.7rem;
    letter-spacing: 0.15em;
    text-transform: uppercase;
    color: var(--color-accent);
    margin-bottom: 1rem;
}

.event-card-header h3 {
    font-size: 1.75rem;
    margin-bottom: 0.25rem;
    color: white;
}

.event-subtitle {
    font-style: italic;
    opacity: 0.8;
    font-size: 1.1rem;
}

.event-menu {
    padding: 2.5rem 3rem;
}

.event-course {
    margin-bottom: 2rem;
    padding-bottom: 2rem;
    border-bottom: 1px solid #eee;
}

.event-course:last-child {
    margin-bottom: 0;
    padding-bottom: 0;
    border-bottom: none;
}

.course-name {
    display: block;
    font-size: 0.7rem;
    letter-spacing: 0.15em;
    text-transform: uppercase;
    color: var(--color-accent);
    margin-bottom: 1rem;
    font-weight: 600;
}

.event-course ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.event-course li {
    position: relative;
    padding-left: 1.5rem;
    margin-bottom: 0.75rem;
    font-size: 0.95rem;
    color: var(--color-text-muted);
}

.event-course li::before {
    content: '';
    position: absolute;
    left: 0;
    top: 0.5em;
    width: 6px;
    height: 6px;
    background: var(--color-accent);
    border-radius: 50%;
}

.event-course.final {
    text-align: center;
    background: #f8f6f3;
    margin: 0 -3rem -2.5rem;
    padding: 1.5rem 3rem;
}

.event-course.final p {
    margin: 0;
    font-size: 0.95rem;
    color: var(--color-text-muted);
}

/* Contact Section */
.functions-contact {
    background: linear-gradient(135deg, #1a3c34 0%, #0f2820 100%);
    padding: 100px 0;
}

.contact-inner {
    display: grid;
    grid-template-columns: 1fr auto;
    gap: 60px;
    align-items: center;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 40px;
}

@media (max-width: 968px) {
    .contact-inner {
        grid-template-columns: 1fr;
        text-align: center;
    }
}

.contact-content {
    color: white;
}

.contact-badge {
    display: inline-block;
    font-size: 0.7rem;
    letter-spacing: 0.2em;
    text-transform: uppercase;
    color: var(--color-accent);
    margin-bottom: 1rem;
}

.contact-content h2 {
    font-size: clamp(2rem, 4vw, 3rem);
    margin-bottom: 1rem;
    color: white;
}

.contact-content > p {
    font-size: 1.1rem;
    opacity: 0.8;
    margin-bottom: 2rem;
}

.contact-details {
    display: flex;
    gap: 2rem;
    margin-bottom: 2rem;
}

@media (max-width: 600px) {
    .contact-details {
        flex-direction: column;
        gap: 1rem;
    }
}

.contact-link {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    color: rgba(255, 255, 255, 0.8);
    transition: color 0.3s ease;
}

.contact-link:hover {
    color: var(--color-accent);
}

.contact-link svg {
    width: 20px;
    height: 20px;
    flex-shrink: 0;
}

.contact-btn {
    display: inline-flex;
    align-items: center;
    gap: 0.75rem;
    padding: 1rem 2rem;
    background: var(--color-accent);
    color: white;
    border-radius: 30px;
    font-weight: 500;
    transition: all 0.3s ease;
}

.contact-btn:hover {
    background: #fff;
    color: #1A1A1A;
    transform: translateY(-3px);
    box-shadow: 0 10px 30px rgba(184, 149, 107, 0.3);
}

.contact-btn svg {
    width: 18px;
    height: 18px;
}

.contact-info-card {
    padding: 2.5rem;
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 20px;
    text-align: center;
    color: white;
}

.contact-info-card h4 {
    font-size: 1.25rem;
    color: var(--color-accent);
    margin-bottom: 0.5rem;
}

.contact-info-card > p {
    opacity: 0.7;
    line-height: 1.6;
}

.info-divider {
    width: 60px;
    height: 1px;
    background: rgba(255, 255, 255, 0.2);
    margin: 1.5rem auto;
}

.info-note {
    font-size: 0.8rem;
    opacity: 0.5;
}

/* Mobile (max 480px) */
@media (max-width: 480px) {
    .func-hero-cinematic {
        min-height: 450px;
    }
    
    .func-hero-content {
        padding: 0 1rem;
    }
    
    .func-hero-features {
        flex-direction: column;
        gap: 1rem;
    }
    
    .func-intro-features {
        grid-template-columns: 1fr;
    }
    
    .func-pricing-showcase {
        max-width: 100%;
    }
    
    .func-pricing-card {
        padding: 2rem 1.25rem;
    }
    
    .func-price-amount {
        font-size: 2.5rem;
    }
    
    .dish-name {
        white-space: normal;
        word-break: break-word;
    }
    
    .included-grid {
        grid-template-columns: 1fr;
    }
    
    .contact-inner {
        grid-template-columns: 1fr;
        padding: 0 1rem;
    }
    
    .contact-info-card {
        padding: 1.5rem;
    }
    
    .contact-btn {
        width: 100%;
        justify-content: center;
    }
}
</style>

<?php get_footer(); ?>
