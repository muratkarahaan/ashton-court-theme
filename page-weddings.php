<?php
if (!defined('ABSPATH')) exit;
/**
 * Template Name: Weddings Page
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

$hero_lines = explode('|', $f('wed_hero_title', 'Your|Perfect|Day'));
?>

<div class="container"><?php ashton_breadcrumbs(); ?></div>

<!-- Cinematic Wedding Hero -->
<section class="wedding-hero-cinematic">
    <div class="hero-media">
        <img src="<?php echo esc_url(ASHTON_THEME_URI); ?>/assets/images/wedding.jpg" alt="Wedding Venue">
        <div class="hero-overlay"></div>
    </div>
    
    <div class="hero-particles">
        <?php for($i = 0; $i < 30; $i++): ?>
        <div class="particle"></div>
        <?php endfor; ?>
    </div>
    
    <div class="hero-content-wrapper">
        <div class="hero-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
            </svg>
        </div>
        <h1 class="hero-title">
            <span class="title-line line-1"><?php echo esc_html($hero_lines[0] ?? 'Your'); ?></span>
            <span class="title-line line-2"><?php echo esc_html($hero_lines[1] ?? 'Perfect'); ?></span>
            <span class="title-line line-3"><?php echo esc_html($hero_lines[2] ?? 'Day'); ?></span>
        </h1>
        <p class="hero-subtitle"><?php echo esc_html($f('wed_hero_subtitle', 'Where Dreams Become Cherished Memories')); ?></p>
    </div>
    
    <div class="hero-stats-bar">
        <div class="stat-item">
            <span class="stat-number" data-count="<?php echo esc_attr($f('wed_stat1_num', '100')); ?>">0</span>
            <span class="stat-label"><?php echo esc_html($f('wed_stat1_label', 'Years of Excellence')); ?></span>
        </div>
        <div class="stat-divider"></div>
        <div class="stat-item">
            <span class="stat-number" data-count="<?php echo esc_attr($f('wed_stat2_num', '45')); ?>">0</span>
            <span class="stat-label"><?php echo esc_html($f('wed_stat2_label', 'Guest Rooms')); ?></span>
        </div>
        <div class="stat-divider"></div>
        <div class="stat-item">
            <span class="stat-number" data-count="<?php echo esc_attr($f('wed_stat3_num', '70')); ?>">0</span>
            <span class="stat-label"><?php echo esc_html($f('wed_stat3_label', 'Max Guests')); ?></span>
        </div>
    </div>
</section>

<!-- Luxury Introduction -->
<section class="wedding-intro-luxury">
    <div class="intro-luxury-grid">
        <div class="intro-visual-side">
            <img src="<?php echo esc_url(ASHTON_THEME_URI); ?>/assets/images/wedding2.jpg" alt="Wedding at Ashton Court">
            <div class="visual-overlay"></div>
            <div class="visual-badge">
                <span class="badge-number">100</span>
                <span class="badge-text">Years of Excellence</span>
            </div>
        </div>
        <div class="intro-content-side">
            <div class="content-inner">
                <?php $intro_hl = explode('|', $f('wed_intro_headline', 'Where Love Stories|Begin')); ?>
                <span class="intro-label"><?php echo esc_html($f('wed_intro_label', 'Welcome to Ashton Court')); ?></span>
                <h2 class="intro-headline"><?php echo esc_html($intro_hl[0] ?? 'Where Love Stories'); ?><br><span><?php echo esc_html($intro_hl[1] ?? 'Begin'); ?></span></h2>
                <div class="intro-divider">
                    <span></span>
                    <svg viewBox="0 0 24 24" fill="currentColor">
                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                    </svg>
                    <span></span>
                </div>
                <p class="intro-lead"><?php echo esc_html($f('wed_intro_lead', 'One of the most special days of your life deserves an unforgettable setting.')); ?></p>
                <p><?php echo esc_html($f('wed_intro_body1', 'Our beautifully situated 45-bedroom hotel, with breathtaking coastal views, features an elegant restaurant/function-suite and dance floor with Private Access and Private Bar — offering one of the finest local venues for a glorious wedding reception.')); ?></p>
                <p><?php echo esc_html($f('wed_intro_body2', 'Our highly talented chefs complement the occasion with a magnolious selection of menu choices, adapted to suit your personal tastes. From the moment you arrive until you leave for your honeymoon, every detail will be taken care of by our friendly and professional team.')); ?></p>
                
                <div class="intro-features">
                    <div class="feature">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 21h18M5 21V7l7-4 7 4v14M9 21v-6h6v6"/></svg>
                        <span>Elegant Function Suite</span>
                    </div>
                    <div class="feature">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M8 22h8M12 11v11M17 2l-5 9H9l3-9h5z"/></svg>
                        <span>Private Bar</span>
                    </div>
                    <div class="feature">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path d="M12 8v4l3 3"/></svg>
                        <span>Dance Floor</span>
                    </div>
                    <div class="feature">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7z"/><circle cx="12" cy="12" r="3"/></svg>
                        <span>Coastal Views</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Wedding Package Section -->
<section class="wedding-package-section">
    <div class="container">
        <div class="package-layout">
            <div class="package-left">
                <div class="package-card-premium">
                    <div class="card-top">
                        <span class="card-season"><?php echo esc_html($f('wed_pkg_year', '2026')); ?></span>
                        <h2>Wedding<br>Package</h2>
                    </div>
                    <div class="card-price">
                        <span class="price-value"><?php echo esc_html($f('wed_pkg_price', '£39.50')); ?></span>
                        <span class="price-label">per person</span>
                    </div>
                    <div class="card-stats">
                        <div class="stat">
                            <span class="stat-value">30-70</span>
                            <span class="stat-label">Day Guests</span>
                        </div>
                        <div class="stat-divider"></div>
                        <div class="stat">
                            <span class="stat-value">100</span>
                            <span class="stat-label">Evening</span>
                        </div>
                        <div class="stat-divider"></div>
                        <div class="stat">
                            <span class="stat-value">3</span>
                            <span class="stat-label">Courses</span>
                        </div>
                    </div>
                    <p class="card-note"><?php echo esc_html($f('wed_pkg_note', 'Everything you need for your perfect day')); ?></p>
                </div>
            </div>
            <div class="package-right">
                <h3>What's Included</h3>
                <ul class="package-includes-list">
                    <li>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Welcome Drinks & Canapés Options</span>
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Chef's 3-Course Wedding Breakfast</span>
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Endless Tea & Coffee</span>
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Evening Finger Buffet Selection</span>
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Dedicated Wedding Planner</span>
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Elegant Function Suite & Dance Floor</span>
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Cake Stand & Knife</span>
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Half-Price for Children Under 13</span>
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>No Extra Charge for Friday/Saturday</span>
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Day-time Room Hire Included</span>
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Service & VAT Included</span>
                    </li>
                </ul>
                <p class="entertainment-note">Entertainment available from <?php echo esc_html($f('wed_ent_price', '£150')); ?></p>
            </div>
        </div>
    </div>
</section>


<!-- Drinks Packages - Interactive Cards -->
<section class="wedding-drinks-section">
    <div class="section-bg-accent"></div>
    <div class="container">
        <div class="section-header-fancy">
            <span class="header-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M8 22h8M12 11v11M17 2l-5 9H9l3-9h5z"/></svg></span>
            <h2><?php echo esc_html($f('wed_drinks_title', 'Drinks Packages')); ?></h2>
            <p><?php echo esc_html($f('wed_drinks_subtitle', 'Toast to your love story')); ?></p>
        </div>
        
        <div class="drinks-cards-container">
            <div class="drink-card" data-tier="1">
                <div class="card-glow"></div>
                <div class="card-content">
                    <div class="card-tier">Pack One</div>
                    <div class="card-price">
                        <span class="price"><?php echo esc_html($f('wed_drinks_pack1_price', '£15.50')); ?></span>
                        <span class="per">per head</span>
                    </div>
                    <ul class="card-features">
                        <li>
                            <span class="drink-icon">•</span>
                            <span>1 × Bucks Fizz, Pimms or Mocktail</span>
                        </li>
                        <li>
                            <span class="drink-icon">•</span>
                            <span>1 × Wine or Beer with meal</span>
                        </li>
                        <li>
                            <span class="drink-icon">•</span>
                            <span>1 × Prosecco for Toast</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="drink-card" data-tier="2">
                <div class="card-glow"></div>
                <div class="card-content">
                    <div class="card-tier">Pack Two</div>
                    <div class="card-price">
                        <span class="price"><?php echo esc_html($f('wed_drinks_pack2_price', '£19.00')); ?></span>
                        <span class="per">per head</span>
                    </div>
                    <ul class="card-features">
                        <li>
                            <span class="drink-icon">•</span>
                            <span>1 × Bucks Fizz, Pimms or Mocktail</span>
                        </li>
                        <li>
                            <span class="drink-icon">•</span>
                            <span>1 × Wine or Beer with meal</span>
                        </li>
                        <li>
                            <span class="drink-icon">•</span>
                            <span>1 × Champagne for Toast</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="drink-card" data-tier="3">
                <div class="card-glow"></div>
                <div class="card-content">
                    <div class="card-tier">Pack Three</div>
                    <div class="card-price">
                        <span class="price"><?php echo esc_html($f('wed_drinks_pack3_price', '£19.00')); ?></span>
                        <span class="per">per head</span>
                    </div>
                    <ul class="card-features">
                        <li>
                            <span class="drink-icon">•</span>
                            <span>1 × Bucks Fizz, Pimms or Mocktail</span>
                        </li>
                        <li>
                            <span class="drink-icon">•</span>
                            <span>2 × Wine or Beer with meal</span>
                        </li>
                        <li>
                            <span class="drink-icon">•</span>
                            <span>1 × Prosecco for Toast</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="drink-card premium" data-tier="4">
                <div class="card-badge">Premium</div>
                <div class="card-glow"></div>
                <div class="card-content">
                    <div class="card-tier">Pack Four</div>
                    <div class="card-price">
                        <span class="price"><?php echo esc_html($f('wed_drinks_pack4_price', '£22.00')); ?></span>
                        <span class="per">per head</span>
                    </div>
                    <ul class="card-features">
                        <li>
                            <span class="drink-icon">•</span>
                            <span>1 × Bucks Fizz, Pimms or Mocktail</span>
                        </li>
                        <li>
                            <span class="drink-icon">•</span>
                            <span>2 × Wine or Beer with meal</span>
                        </li>
                        <li>
                            <span class="drink-icon">•</span>
                            <span>1 × Champagne for Toast</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="additional-drinks">
            <h4>À La Carte Drinks</h4>
            <div class="drinks-price-ribbon">
                <span>House Wine £19/bottle</span>
                <span>Pimms/Bucks Fizz £6.50</span>
                <span>Wine Glass £5.50</span>
                <span>Prosecco £5.50</span>
                <span>Champagne £9.50</span>
                <span>Lager/Beer £5.50/pint</span>
            </div>
        </div>
    </div>
</section>

<!-- Canapés Feature -->
<section class="canapes-section">
    <div class="container">
        <div class="canapes-banner">
            <div class="banner-content">
                <span class="banner-label">Add to your package</span>
                <h2><?php echo esc_html($f('wed_canapes_title', 'Canapés on Arrival')); ?></h2>
                <p><?php echo esc_html($f('wed_canapes_desc', 'Selection of tantalising Canapés (×3 per person) served from silver platters to your guests as they mingle')); ?></p>
            </div>
            <div class="banner-price">
                <span class="price"><?php echo esc_html($f('wed_canapes_price', '£7.50')); ?></span>
                <span class="per">per person</span>
            </div>
            <a href="<?php echo esc_url(home_url('/menus/#canape')); ?>" class="banner-btn">
                View Options
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
            </a>
        </div>
    </div>
</section>

<!-- Wedding Breakfast Menu - Tabbed -->
<section class="wedding-menu-section">
    <div class="menu-bg-texture"></div>
    <div class="container">
        <div class="menu-header-elegant">
            <div class="menu-title-wrapper">
                <span class="menu-subtitle">3 Course</span>
                <h2><?php echo esc_html($f('wed_breakfast_title', 'Gourmet Wedding Breakfast')); ?></h2>
                <div class="menu-price-badge">
                    <span><?php echo esc_html($f('wed_breakfast_price', '£39.50')); ?></span> per person
                </div>
            </div>
            <p class="menu-instruction"><?php echo wp_kses_post($f('wed_breakfast_instruction', 'Select any <strong>two starters</strong>, <strong>two mains</strong>, and <strong>two desserts</strong> for your guests')); ?></p>
        </div>
        
        <div class="menu-tabs-container">
            <div class="menu-tabs">
                <button class="menu-tab active" data-tab="starters">Starters</button>
                <button class="menu-tab" data-tab="soups">Soups</button>
                <button class="menu-tab" data-tab="mains-meat">Meat</button>
                <button class="menu-tab" data-tab="mains-fish">Fish</button>
                <button class="menu-tab" data-tab="vegetarian">Vegetarian</button>
                <button class="menu-tab" data-tab="desserts">Desserts</button>
                <button class="menu-tab" data-tab="children">Children</button>
            </div>
            
            <div class="menu-panels">
                <!-- Starters Panel -->
                <div class="menu-panel active" id="panel-starters">
                    <div class="menu-grid">
                        <div class="menu-item-elegant">
                            <h4>Chef's Selection of Soups</h4>
                            <p>served with warm bread roll</p>
                        </div>
                        <div class="menu-item-elegant">
                            <h4>Italian Tuna & Pasta Salad</h4>
                            <p>Cannelina beans, sour-dough bread</p>
                        </div>
                        <div class="menu-item-elegant">
                            <h4>Chilled Honeydew Melon</h4>
                            <p>summer fruits, raspberry coulis</p>
                        </div>
                        <div class="menu-item-elegant">
                            <h4>Creamy Garlic Mushrooms</h4>
                            <p>rosemary focaccia, truffle oil</p>
                        </div>
                        <div class="menu-item-elegant">
                            <h4>Traditional Prawn Cocktail</h4>
                            <p>Marie-Rose, lemon, brown bread</p>
                        </div>
                        <div class="menu-item-elegant">
                            <h4>Deep-Fried Breaded Brie</h4>
                            <p>salad garnish, cranberry sauce</p>
                        </div>
                        <div class="menu-item-elegant">
                            <h4>Pressed Ham Hock</h4>
                            <p>Piccalilli, toasted ciabatta</p>
                        </div>
                        <div class="menu-item-elegant">
                            <h4>Sautéed King Prawns</h4>
                            <p>garlic butter, ginger, noodles</p>
                        </div>
                        <div class="menu-item-elegant">
                            <h4>Fanned Avocado with Prawns</h4>
                            <p>spicy Mayo, fresh rocket</p>
                        </div>
                        <div class="menu-item-elegant">
                            <h4>Toasted Goats Cheese</h4>
                            <p>salad leaves, fruity chutney</p>
                        </div>
                    </div>
                </div>
                
                <!-- Soups Panel -->
                <div class="menu-panel" id="panel-soups">
                    <div class="soups-intro">
                        <span class="chef-note">Chef is renowned for his splendid Soups!</span>
                        <p>All served with warm fresh bread roll and butter</p>
                    </div>
                    <div class="menu-grid compact">
                        <div class="menu-item-simple">Cream of Tomato with fresh basil & garlic croutons</div>
                        <div class="menu-item-simple">Cream of Mushroom and Thyme</div>
                        <div class="menu-item-simple">Cream of Chicken with fresh coriander</div>
                        <div class="menu-item-simple">Leek and Potato with crème fraîche</div>
                        <div class="menu-item-simple">French Onion with cheese en croute</div>
                        <div class="menu-item-simple">Seasonal Vegetable with croutons</div>
                        <div class="menu-item-simple premium">Lobster Bisque with brandy & cream <span class="supplement">+£2.00</span></div>
                    </div>
                </div>
                
                <!-- Meat Mains Panel -->
                <div class="menu-panel" id="panel-mains-meat">
                    <p class="panel-intro">Served with seasonal vegetables. Specify roasted or new potatoes.</p>
                    <div class="menu-grid">
                        <div class="menu-item-elegant">
                            <h4>Roasted Breast of Chicken</h4>
                            <p>spring-onion mash, Madeira mushroom sauce</p>
                        </div>
                        <div class="menu-item-elegant">
                            <h4>Roasted Crown of Devon Turkey</h4>
                            <p>apricot sage stuffing, bacon-wrapped chipolatas</p>
                        </div>
                        <div class="menu-item-elegant">
                            <h4>Honey-Roast Loin of Pork</h4>
                            <p>West-Country cider and apple sauce</p>
                        </div>
                        <div class="menu-item-elegant">
                            <h4>Pan-Fried Pork Tenderloin</h4>
                            <p>smoky bacon, red onion, plum sauce</p>
                        </div>
                        <div class="menu-item-elegant">
                            <h4>Braised Lamb Shank</h4>
                            <p>garlic-cream potato, rosemary gravy</p>
                        </div>
                        <div class="menu-item-elegant">
                            <h4>Confit Duck Leg</h4>
                            <p>roasted squash, cherry sauce</p>
                        </div>
                        <div class="menu-item-elegant">
                            <h4>Mediterranean Beef Casserole</h4>
                            <p>mushroom sauce, garlic sauté potatoes</p>
                        </div>
                        <div class="menu-item-elegant">
                            <h4>Prime Roast Topside of Beef</h4>
                            <p>Yorkshire pudding, horseradish sauce</p>
                        </div>
                    </div>
                </div>
                
                <!-- Fish Mains Panel -->
                <div class="menu-panel" id="panel-mains-fish">
                    <div class="menu-grid">
                        <div class="menu-item-elegant">
                            <h4>Baked Supreme of Salmon</h4>
                            <p>Parma Ham, lime and dill dressing</p>
                        </div>
                        <div class="menu-item-elegant">
                            <h4>Poached Lemon Sole Paupiette</h4>
                            <p>salmon & prawn mousse, Champagne sauce</p>
                        </div>
                        <div class="menu-item-elegant">
                            <h4>Grilled Sea Bass Fillets</h4>
                            <p>tomato courgette tart, red wine sauce</p>
                        </div>
                        <div class="menu-item-elegant">
                            <h4>Local Cod Fillet</h4>
                            <p>onions, lemon, herbs, white wine</p>
                        </div>
                        <div class="menu-item-elegant">
                            <h4>Oven-Roasted Turbot Steak</h4>
                            <p>creamy Hollandaise, fresh herbs</p>
                        </div>
                        <div class="menu-item-elegant">
                            <h4>Baked Plaice Fillets</h4>
                            <p>Sage Rösti, wild mushrooms, port sauce</p>
                        </div>
                    </div>
                </div>
                
                <!-- Vegetarian Panel -->
                <div class="menu-panel" id="panel-vegetarian">
                    <div class="veg-badge">🌿 Vegetarian Options</div>
                    <div class="menu-grid">
                        <div class="menu-item-elegant veg">
                            <h4>Mushroom, Cranberry & Brie Wellington</h4>
                        </div>
                        <div class="menu-item-elegant veg">
                            <h4>Wild Mushroom & Leek Crumble</h4>
                            <p>light garlic cream</p>
                        </div>
                        <div class="menu-item-elegant veg">
                            <h4>Spinach & Ricotta Tortellini</h4>
                            <p>pesto cream, sun-blushed tomatoes</p>
                        </div>
                        <div class="menu-item-elegant veg">
                            <h4>Baked Stuffed Aubergine</h4>
                            <p>wild mushrooms, goats cheese crust</p>
                        </div>
                        <div class="menu-item-elegant veg">
                            <h4>Roasted Stuffed Red Peppers</h4>
                            <p>Ratatouille, rich cheese sauce</p>
                        </div>
                    </div>
                </div>
                
                <!-- Desserts Panel -->
                <div class="menu-panel" id="panel-desserts">
                    <div class="menu-grid">
                        <div class="menu-item-elegant">
                            <h4>Homemade Apple Pie</h4>
                            <p>Devonshire custard & clotted cream</p>
                        </div>
                        <div class="menu-item-elegant">
                            <h4>Bread and Butter Pudding</h4>
                            <p>clotted cream</p>
                        </div>
                        <div class="menu-item-elegant">
                            <h4>Blackcurrant & Vodka Cheesecake</h4>
                            <p>runny double cream</p>
                        </div>
                        <div class="menu-item-elegant">
                            <h4>Two-Tone Chocolate Torte</h4>
                            <p>raspberry coulis</p>
                        </div>
                        <div class="menu-item-elegant">
                            <h4>Strawberry Pavlova</h4>
                            <p>fresh cream</p>
                        </div>
                        <div class="menu-item-elegant">
                            <h4>Fresh Fruit Salad</h4>
                            <p>Devonshire clotted cream</p>
                        </div>
                        <div class="menu-item-elegant">
                            <h4>Chocolate Hazelnut Tart</h4>
                            <p>vanilla ice cream</p>
                        </div>
                        <div class="menu-item-elegant premium">
                            <h4>West Country Cheese Trio</h4>
                            <p>blue, Cheddar, soft + biscuits</p>
                            <span class="supplement">+£7.50 or +£2.50 substitute</span>
                        </div>
                    </div>
                    <div class="dessert-extra">
                        <span>Add 50ml Taylors Port +£4.00</span>
                    </div>
                </div>
                
                <!-- Children Panel -->
                <div class="menu-panel" id="panel-children">
                    <div class="children-pricing-header">
                        <div class="price-tier">Under 2: <strong>Free</strong></div>
                        <div class="price-tier">Under 13: <strong>Half Price</strong></div>
                        <div class="price-tier">13+: <strong>Full Price</strong></div>
                    </div>
                    <div class="children-menu-layout">
                        <div class="course-column">
                            <h4>Starters</h4>
                            <ul>
                                <li>Garlic bread ±cheese</li>
                                <li>Fresh melon</li>
                                <li>Homemade soup</li>
                                <li>Tomato & Mozzarella</li>
                            </ul>
                        </div>
                        <div class="course-column">
                            <h4>Mains</h4>
                            <ul>
                                <li>Roast chicken, gravy, peas, chips</li>
                                <li>Penne pasta, tomato sauce</li>
                                <li>Fish goujons, chips, peas</li>
                                <li>Cauliflower cheese, fries</li>
                            </ul>
                        </div>
                        <div class="course-column">
                            <h4>Desserts</h4>
                            <ul>
                                <li>Fruit salad & ice cream</li>
                                <li>Chocolate brownie</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Evening Buffet -->
<section class="evening-buffet-section">
    <div class="container">
        <div class="buffet-card">
            <div class="buffet-card-header">
                <div class="header-left">
                    <h2><?php echo esc_html($f('wed_buffet_title', 'Evening Finger Buffet')); ?></h2>
                    <p><?php echo esc_html($f('wed_buffet_subtitle', 'Bite-sized tasty portions to keep your guests satisfied')); ?></p>
                </div>
                <div class="header-right">
                    <div class="price-tags">
                        <div class="price-tag">
                            <span class="tag-label">6 choices</span>
                            <span class="tag-price"><?php echo esc_html($f('wed_buffet_price1', '£15')); ?></span>
                        </div>
                        <span class="price-or">or</span>
                        <div class="price-tag featured">
                            <span class="tag-label">8 choices</span>
                            <span class="tag-price"><?php echo esc_html($f('wed_buffet_price2', '£18')); ?></span>
                            <span class="tag-note">inc. sweets & tea/coffee</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="buffet-card-body">
                <div class="buffet-grid">
                    <div class="buffet-col savoury">
                        <h4>Savoury Selection</h4>
                        <div class="items-list">
                            <span>Sandwich Selection</span>
                            <span>Glazed Sausage Rolls</span>
                            <span>Mini Tartlets</span>
                            <span>Vegetable Samosa</span>
                            <span>Pizza Slices</span>
                            <span>Honey Rosemary Sausages</span>
                            <span>Crudités & Humus</span>
                            <span>Vol-au-vents</span>
                            <span>Quiche Slices</span>
                            <span>Fish Goujons</span>
                            <span>Cocktail Pasties</span>
                            <span>Potato Wedges</span>
                            <span>Scotch Eggs</span>
                            <span>Chicken Goujons</span>
                            <span>Tikka Chicken</span>
                        </div>
                    </div>
                    <div class="buffet-col sweets">
                        <h4>Sweet Options</h4>
                        <div class="items-list">
                            <span>Chocolate Profiteroles</span>
                            <span>Mini Fruit Tartlets</span>
                            <span>Mini Brownies</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Your Day Section -->
<section class="your-day-section">
    <div class="container">
        <div class="day-header">
            <span class="day-label"><?php echo esc_html($f('wed_day_label', 'The Perfect Reception')); ?></span>
            <h2><?php echo esc_html($f('wed_day_title', 'Your Wedding Day')); ?></h2>
        </div>
        
        <div class="day-steps">
            <div class="step">
                <span class="step-number">01</span>
                <div class="step-content">
                    <h4><?php echo esc_html($f('wed_step1_title', 'Arrival & Reception')); ?></h4>
                    <p><?php echo esc_html($f('wed_step1_desc', 'Guests arrive for welcome drinks. Traditional line-up or mingle freely before the announcement.')); ?></p>
                </div>
            </div>
            <div class="step">
                <span class="step-number">02</span>
                <div class="step-content">
                    <h4><?php echo esc_html($f('wed_step2_title', 'Wedding Breakfast')); ?></h4>
                    <p><?php echo esc_html($f('wed_step2_desc', 'Your 3-course gourmet meal served in our elegant function suite.')); ?></p>
                </div>
            </div>
            <div class="step">
                <span class="step-number">03</span>
                <div class="step-content">
                    <h4><?php echo esc_html($f('wed_step3_title', 'Cake & Speeches')); ?></h4>
                    <p><?php echo esc_html($f('wed_step3_desc', 'Cut the cake together, followed by toasts and the Best Man\'s speech.')); ?></p>
                </div>
            </div>
            <div class="step">
                <span class="step-number">04</span>
                <div class="step-content">
                    <h4><?php echo esc_html($f('wed_step4_title', 'Evening Party')); ?></h4>
                    <p><?php echo esc_html($f('wed_step4_desc', 'Dance floor opens, finger buffet served. Celebrate until midnight!')); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Entertainment -->
<section class="entertainment-premium">
    <div class="ent-premium-bg">
        <div class="ent-glow ent-glow-1"></div>
        <div class="ent-glow ent-glow-2"></div>
        <div class="ent-lines"></div>
    </div>
    
    <div class="ent-premium-inner">
        <div class="ent-header">
            <span class="ent-badge"><?php echo esc_html($f('wed_ent_badge', 'Complete Your Celebration')); ?></span>
            <h2><?php echo esc_html($f('wed_ent_title', 'Entertainment')); ?></h2>
            <div class="ent-divider">
                <span></span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M9 18V5l12-2v13"/><circle cx="6" cy="18" r="3"/><circle cx="18" cy="16" r="3"/></svg>
                <span></span>
            </div>
        </div>
        
        <div class="ent-cards-wrap">
            <div class="ent-card" data-delay="0">
                <div class="ent-card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path d="M8 14s1.5 2 4 2 4-2 4-2"/><line x1="9" y1="9" x2="9.01" y2="9"/><line x1="15" y1="9" x2="15.01" y2="9"/></svg>
                </div>
                <h4>Solo Vocalists</h4>
                <span class="ent-card-glow"></span>
            </div>
            <div class="ent-card" data-delay="1">
                <div class="ent-card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="M2 8h20"/><path d="M7 4v16"/><path d="M12 4v16"/><path d="M17 4v16"/></svg>
                </div>
                <h4>Pianists</h4>
                <span class="ent-card-glow"></span>
            </div>
            <div class="ent-card" data-delay="2">
                <div class="ent-card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10c.926 0 1.648-.746 1.648-1.688 0-.437-.18-.835-.437-1.125-.29-.289-.438-.652-.438-1.125a1.64 1.64 0 0 1 1.668-1.668h1.996c3.051 0 5.555-2.503 5.555-5.555C21.965 6.012 17.461 2 12 2z"/></svg>
                </div>
                <h4>Harpists</h4>
                <span class="ent-card-glow"></span>
            </div>
            <div class="ent-card" data-delay="3">
                <div class="ent-card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><polygon points="10,8 16,12 10,16"/></svg>
                </div>
                <h4>Discos</h4>
                <span class="ent-card-glow"></span>
            </div>
            <div class="ent-card" data-delay="4">
                <div class="ent-card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M9 18V5l12-2v13"/><circle cx="6" cy="18" r="3"/><circle cx="18" cy="16" r="3"/></svg>
                </div>
                <h4>Live Bands</h4>
                <span class="ent-card-glow"></span>
            </div>
            <div class="ent-card" data-delay="5">
                <div class="ent-card-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>
                </div>
                <h4>Speciality Acts</h4>
                <span class="ent-card-glow"></span>
            </div>
        </div>
        
        <div class="ent-bottom">
            <div class="ent-price-tag">
                <span class="price-label">From</span>
                <span class="price-amount"><?php echo esc_html($f('wed_ent_price', '£150')); ?></span>
            </div>
            <div class="ent-partner-badge">
                <span>In partnership with</span>
                <strong><?php echo esc_html($f('wed_ent_partner', 'Eclipse Entertainment')); ?></strong>
            </div>
        </div>
    </div>
    
    <div class="ent-license-bar">
        <div class="license-inner">
            <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg> Licensed Venue</span>
            <span>East Devon District Council • PLWA0395</span>
            <span>Max 100 guests</span>
            <span>Music until midnight</span>
        </div>
    </div>
</section>

<!-- Booking Info Cards -->
<section class="booking-info-section">
    <div class="container">
        <h2><?php echo esc_html($f('wed_info_title', 'Important Information')); ?></h2>
        
        <div class="info-cards-grid">
            <div class="info-card">
                <div class="card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div>
                <h4><?php echo esc_html($f('wed_info1_title', 'Deposit')); ?></h4>
                <p><?php echo wp_kses_post($f('wed_info1_text', 'Non-refundable <strong>£500</strong> to secure your date')); ?></p>
            </div>
            
            <div class="info-card">
                <div class="card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg></div>
                <h4><?php echo esc_html($f('wed_info2_title', 'Final Numbers')); ?></h4>
                <p><?php echo wp_kses_post($f('wed_info2_text', 'Confirm <strong>21 days</strong> prior to wedding (minimum charged)')); ?></p>
            </div>
            
            <div class="info-card">
                <div class="card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"/><line x1="1" y1="10" x2="23" y2="10"/></svg></div>
                <h4><?php echo esc_html($f('wed_info3_title', 'Full Payment')); ?></h4>
                <p><?php echo wp_kses_post($f('wed_info3_text', '<strong>7 working days</strong> before the function')); ?></p>
            </div>
            
            <div class="info-card">
                <div class="card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div>
                <h4><?php echo esc_html($f('wed_info4_title', 'Guest Numbers')); ?></h4>
                <p><?php echo wp_kses_post($f('wed_info4_text', 'Min <strong>30</strong> • Max <strong>70</strong> day • Max <strong>100</strong> evening')); ?></p>
            </div>
            
            <div class="info-card">
                <div class="card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg></div>
                <h4><?php echo esc_html($f('wed_info5_title', 'Accommodation')); ?></h4>
                <p><?php echo wp_kses_post($f('wed_info5_text', '40+ guests: <strong>Free bridal suite</strong> + 10% off guest rooms')); ?></p>
            </div>
            
            <div class="info-card">
                <div class="card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"/></svg></div>
                <h4><?php echo esc_html($f('wed_info6_title', 'Evening Room')); ?></h4>
                <p><?php echo wp_kses_post($f('wed_info6_text', '<strong>Free</strong> with buffet order, otherwise £300')); ?></p>
            </div>
        </div>
        
        <div class="accessibility-note">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M10.29 3.86L1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.71 3.86a2 2 0 00-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
            <p>The hotel is a Grade II listed property. Please discuss accessibility requirements with our team.</p>
        </div>
    </div>
</section>


<style>
/* ========================================
   WEDDING PAGE - CINEMATIC STYLES
   ======================================== */

/* Hero Section */
.wedding-hero-cinematic {
    position: relative;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    overflow: hidden;
}

.hero-media {
    position: absolute;
    inset: 0;
    z-index: -2;
}

.hero-media img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    animation: heroZoom 20s ease-in-out infinite alternate;
}

@keyframes heroZoom {
    0% { transform: scale(1); }
    100% { transform: scale(1.1); }
}

.hero-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(26, 60, 52, 0.9) 0%, rgba(15, 40, 32, 0.85) 50%, rgba(10, 30, 25, 0.9) 100%);
}

.hero-particles {
    position: absolute;
    inset: 0;
    z-index: -1;
    overflow: hidden;
}

.particle {
    position: absolute;
    width: 4px;
    height: 4px;
    background: rgba(184, 149, 107, 0.6);
    border-radius: 50%;
    animation: particleFloat 15s infinite;
}

.particle:nth-child(odd) {
    animation-duration: 20s;
    background: rgba(255, 255, 255, 0.3);
}

@keyframes particleFloat {
    0%, 100% {
        transform: translateY(100vh) translateX(0);
        opacity: 0;
    }
    10% { opacity: 1; }
    90% { opacity: 1; }
    100% {
        transform: translateY(-100vh) translateX(100px);
        opacity: 0;
    }
}

.particle:nth-child(1) { left: 5%; animation-delay: 0s; }
.particle:nth-child(2) { left: 10%; animation-delay: 1s; }
.particle:nth-child(3) { left: 15%; animation-delay: 2s; }
.particle:nth-child(4) { left: 20%; animation-delay: 3s; }
.particle:nth-child(5) { left: 25%; animation-delay: 4s; }
.particle:nth-child(6) { left: 30%; animation-delay: 5s; }
.particle:nth-child(7) { left: 35%; animation-delay: 6s; }
.particle:nth-child(8) { left: 40%; animation-delay: 7s; }
.particle:nth-child(9) { left: 45%; animation-delay: 8s; }
.particle:nth-child(10) { left: 50%; animation-delay: 9s; }
.particle:nth-child(11) { left: 55%; animation-delay: 0.5s; }
.particle:nth-child(12) { left: 60%; animation-delay: 1.5s; }
.particle:nth-child(13) { left: 65%; animation-delay: 2.5s; }
.particle:nth-child(14) { left: 70%; animation-delay: 3.5s; }
.particle:nth-child(15) { left: 75%; animation-delay: 4.5s; }
.particle:nth-child(16) { left: 80%; animation-delay: 5.5s; }
.particle:nth-child(17) { left: 85%; animation-delay: 6.5s; }
.particle:nth-child(18) { left: 90%; animation-delay: 7.5s; }
.particle:nth-child(19) { left: 95%; animation-delay: 8.5s; }
.particle:nth-child(20) { left: 8%; animation-delay: 9.5s; }
.particle:nth-child(21) { left: 18%; animation-delay: 10s; }
.particle:nth-child(22) { left: 28%; animation-delay: 11s; }
.particle:nth-child(23) { left: 38%; animation-delay: 12s; }
.particle:nth-child(24) { left: 48%; animation-delay: 13s; }
.particle:nth-child(25) { left: 58%; animation-delay: 14s; }
.particle:nth-child(26) { left: 68%; animation-delay: 10.5s; }
.particle:nth-child(27) { left: 78%; animation-delay: 11.5s; }
.particle:nth-child(28) { left: 88%; animation-delay: 12.5s; }
.particle:nth-child(29) { left: 98%; animation-delay: 13.5s; }
.particle:nth-child(30) { left: 3%; animation-delay: 14.5s; }

.hero-content-wrapper {
    text-align: center;
    padding: 2rem;
    margin-top: 80px;
}

.hero-badge {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 80px;
    height: 80px;
    border: 2px solid var(--color-accent);
    border-radius: 50%;
    margin-bottom: 2rem;
    animation: pulse 2s ease-in-out infinite;
}

.hero-badge svg {
    width: 40px;
    height: 40px;
    color: var(--color-accent);
}

@keyframes pulse {
    0%, 100% { transform: scale(1); opacity: 1; }
    50% { transform: scale(1.1); opacity: 0.8; }
}

.hero-title {
    margin-bottom: 1.5rem;
}

.title-line {
    display: block;
    font-family: var(--font-heading);
    color: white;
    line-height: 1.1;
    opacity: 0;
    animation: titleReveal 0.8s ease-out forwards;
}

.line-1 {
    font-size: clamp(1.5rem, 4vw, 2.5rem);
    font-weight: 300;
    letter-spacing: 0.3em;
    text-transform: uppercase;
    animation-delay: 0.2s;
}

.line-2 {
    font-size: clamp(4rem, 12vw, 10rem);
    font-weight: 400;
    color: var(--color-accent);
    animation-delay: 0.4s;
}

.line-3 {
    font-size: clamp(3rem, 8vw, 6rem);
    font-weight: 300;
    animation-delay: 0.6s;
}

@keyframes titleReveal {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.hero-subtitle {
    font-family: var(--font-heading);
    font-size: clamp(1rem, 2.5vw, 1.5rem);
    font-style: italic;
    color: rgba(255, 255, 255, 0.8);
    opacity: 0;
    animation: fadeInUp 0.8s ease-out 0.8s forwards;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.hero-scroll-indicator {
    position: absolute;
    bottom: 120px;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 0.5rem;
    opacity: 0;
    animation: fadeInUp 0.8s ease-out 1s forwards;
}

.hero-scroll-indicator span {
    font-size: 0.75rem;
    letter-spacing: 0.2em;
    text-transform: uppercase;
    color: rgba(255, 255, 255, 0.6);
}

.scroll-line {
    width: 1px;
    height: 40px;
    background: linear-gradient(to bottom, var(--color-accent), transparent);
    animation: scrollPulse 2s ease-in-out infinite;
}

@keyframes scrollPulse {
    0%, 100% { transform: scaleY(1); opacity: 1; }
    50% { transform: scaleY(0.5); opacity: 0.5; }
}

.hero-stats-bar {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 3rem;
    padding: 1.5rem 2rem;
    background: rgba(0, 0, 0, 0.3);
    backdrop-filter: blur(10px);
}

.stat-item {
    text-align: center;
}

.stat-number {
    display: block;
    font-family: var(--font-heading);
    font-size: 2.5rem;
    color: var(--color-accent);
}

.stat-label {
    font-size: 0.75rem;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    color: rgba(255, 255, 255, 0.7);
}

.stat-divider {
    width: 1px;
    height: 40px;
    background: rgba(255, 255, 255, 0.2);
}

/* Luxury Introduction */
.wedding-intro-luxury {
    position: relative;
    overflow: hidden;
}

.intro-luxury-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    min-height: 100vh;
}

@media (max-width: 1024px) {
    .intro-luxury-grid {
        grid-template-columns: 1fr;
        min-height: auto;
    }
}

.intro-visual-side {
    position: relative;
    overflow: hidden;
}

@media (max-width: 1024px) {
    .intro-visual-side {
        min-height: 500px;
    }
}

.intro-visual-side > img {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    animation: kenBurns 12s ease-in-out infinite alternate;
}

@keyframes kenBurns {
    0% {
        transform: scale(1) translateX(0);
    }
    100% {
        transform: scale(1.15) translateX(-2%);
    }
}

.visual-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(26, 60, 52, 0.3) 0%, rgba(15, 40, 32, 0.4) 100%);
}

.visual-badge {
    position: absolute;
    bottom: 40px;
    left: 40px;
    z-index: 2;
    padding: 1.5rem 2rem;
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(10px);
    display: flex;
    flex-direction: column;
    text-align: center;
}

.visual-badge .badge-number {
    font-family: var(--font-heading);
    font-size: 3rem;
    line-height: 1;
    color: var(--color-accent);
}

.visual-badge .badge-text {
    font-size: 0.7rem;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    color: var(--color-text);
    margin-top: 0.25rem;
}

.intro-content-side {
    display: flex;
    align-items: center;
    padding: 80px;
    background: linear-gradient(135deg, #faf9f7 0%, white 100%);
}

@media (max-width: 1024px) {
    .intro-content-side {
        padding: 60px 40px;
    }
}

.content-inner {
    max-width: 550px;
}

.intro-label {
    display: inline-block;
    font-size: 0.8rem;
    letter-spacing: 0.2em;
    text-transform: uppercase;
    color: var(--color-accent);
    margin-bottom: 1rem;
    padding: 0.5rem 1rem;
    background: rgba(184, 149, 107, 0.1);
    border-radius: 30px;
}

.intro-headline {
    font-size: clamp(2.5rem, 5vw, 3.5rem);
    line-height: 1.2;
    margin-bottom: 1.5rem;
}

.intro-headline span {
    color: var(--color-accent);
    font-style: italic;
}

.intro-divider {
    display: flex;
    align-items: center;
    gap: 1rem;
    margin-bottom: 2rem;
}

.intro-divider span {
    flex: 1;
    height: 1px;
    background: linear-gradient(90deg, var(--color-accent), transparent);
}

.intro-divider span:last-child {
    background: linear-gradient(90deg, transparent, var(--color-accent));
}

.intro-divider svg {
    width: 24px;
    height: 24px;
    color: var(--color-accent);
}

.intro-content-side .intro-lead {
    font-size: 1.25rem;
    font-weight: 500;
    color: var(--color-text);
    margin-bottom: 1.5rem;
    line-height: 1.6;
}

.intro-content-side p {
    font-size: 1rem;
    line-height: 1.8;
    color: #666;
    margin-bottom: 1rem;
}

.intro-features {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1rem;
    margin-top: 2rem;
    padding-top: 2rem;
    border-top: 1px solid rgba(0, 0, 0, 0.1);
}

.intro-features .feature {
    display: flex;
    align-items: center;
    gap: 0.75rem;
}

.intro-features .feature svg {
    width: 24px;
    height: 24px;
    color: var(--color-accent);
    flex-shrink: 0;
}

.intro-features .feature span {
    font-size: 0.9rem;
    font-weight: 500;
    color: var(--color-text);
}

/* Package Section */
.wedding-package-section {
    padding: 100px 0;
    background: linear-gradient(180deg, #faf9f7 0%, white 100%);
}

.package-layout {
    display: grid;
    grid-template-columns: 1fr 1.2fr;
    gap: 60px;
    align-items: start;
}

@media (max-width: 968px) {
    .package-layout {
        grid-template-columns: 1fr;
        gap: 40px;
    }
}

.package-left {
    position: sticky;
    top: 120px;
}

@media (max-width: 968px) {
    .package-left {
        position: relative;
        top: 0;
    }
}

.package-card-premium {
    background: linear-gradient(135deg, #1a3c34 0%, #0f2820 100%);
    color: white;
    padding: 3rem;
    border-radius: 16px;
    text-align: center;
    position: relative;
    overflow: hidden;
}

.package-card-premium::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, var(--color-accent), #d4b896);
}

.card-top {
    margin-bottom: 2rem;
}

.card-season {
    display: inline-block;
    font-size: 0.75rem;
    letter-spacing: 0.2em;
    text-transform: uppercase;
    color: var(--color-accent);
    padding: 0.5rem 1rem;
    border: 1px solid var(--color-accent);
    margin-bottom: 1rem;
}

.card-top h2 {
    font-size: 2.5rem;
    line-height: 1.2;
    color: white;
}

.card-price {
    margin-bottom: 2rem;
    padding: 1.5rem 0;
    border-top: 1px solid rgba(255,255,255,0.1);
    border-bottom: 1px solid rgba(255,255,255,0.1);
}

.price-value {
    display: block;
    font-family: var(--font-heading);
    font-size: 4rem;
    color: var(--color-accent);
    line-height: 1;
}

.price-label {
    display: block;
    font-size: 0.8rem;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    color: rgba(255,255,255,0.6);
    margin-top: 0.5rem;
}

.card-stats {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 1.5rem;
    margin-bottom: 1.5rem;
}

.card-stats .stat {
    text-align: center;
}

.stat-value {
    display: block;
    font-family: var(--font-heading);
    font-size: 1.5rem;
    color: white;
}

.stat-label {
    font-size: 0.65rem;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    color: rgba(255,255,255,0.5);
}

.stat-divider {
    width: 1px;
    height: 30px;
    background: rgba(255,255,255,0.2);
}

.card-note {
    font-size: 0.9rem;
    color: rgba(255,255,255,0.7);
    font-style: italic;
    margin: 0;
}

.package-right {
    background: white;
    padding: 3rem;
    border-radius: 12px;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.08);
}

.package-right h3 {
    font-size: 1.5rem;
    margin-bottom: 2rem;
    padding-bottom: 1rem;
    border-bottom: 2px solid var(--color-accent);
}

.package-includes-list {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.package-includes-list li {
    display: flex;
    align-items: flex-start;
    gap: 1rem;
}

.package-includes-list svg {
    width: 20px;
    height: 20px;
    color: var(--color-accent);
    flex-shrink: 0;
    margin-top: 2px;
}

.package-includes-list span {
    font-size: 1rem;
    color: var(--color-text-body);
}

.entertainment-note {
    margin-top: 2rem;
    padding-top: 1.5rem;
    border-top: 1px solid var(--color-border);
    font-size: 0.9rem;
    color: var(--color-text-muted);
    font-style: italic;
}


/* Drinks Section */
.wedding-drinks-section {
    position: relative;
    padding: 100px 0;
    background: #faf9f7;
    overflow: hidden;
}

.section-bg-accent {
    position: absolute;
    top: 0;
    right: -200px;
    width: 600px;
    height: 600px;
    background: radial-gradient(circle, rgba(184, 149, 107, 0.1) 0%, transparent 70%);
}

.section-header-fancy {
    text-align: center;
    margin-bottom: 3rem;
}

.header-icon {
    display: flex;
    justify-content: center;
    margin-bottom: 1rem;
}

.header-icon svg {
    width: 60px;
    height: 60px;
    color: var(--color-accent);
}

.section-header-fancy h2 {
    font-size: 2.5rem;
    margin-bottom: 0.5rem;
}

.section-header-fancy p {
    color: #888;
    font-style: italic;
}

.drinks-cards-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 1.5rem;
    margin-bottom: 3rem;
}

.drink-card {
    position: relative;
    background: white;
    border-radius: 16px;
    overflow: hidden;
    transition: all 0.4s ease;
}

.drink-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 30px 60px rgba(0, 0, 0, 0.15);
}

.card-glow {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, var(--color-accent), #d4a574);
    opacity: 0;
    transition: opacity 0.3s ease;
}

.drink-card:hover .card-glow {
    opacity: 1;
}

.drink-card.premium {
    background: linear-gradient(135deg, #1a3c34 0%, #0f2820 100%);
    color: white;
}

.drink-card.premium .card-glow {
    opacity: 1;
    height: 6px;
}

.card-badge {
    position: absolute;
    top: 1rem;
    right: 1rem;
    background: var(--color-accent);
    color: white;
    padding: 0.25rem 0.75rem;
    border-radius: 20px;
    font-size: 0.75rem;
    font-weight: 600;
}

.card-content {
    padding: 2rem;
}

.card-tier {
    font-size: 0.85rem;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    opacity: 0.7;
    margin-bottom: 0.5rem;
}

.card-price {
    margin-bottom: 1.5rem;
}

.card-price .price {
    font-family: var(--font-heading);
    font-size: 2.5rem;
    color: var(--color-accent);
}

.drink-card.premium .card-price .price {
    color: var(--color-accent);
}

.card-price .per {
    font-size: 0.85rem;
    opacity: 0.7;
}

.card-features {
    display: flex;
    flex-direction: column;
    gap: 0.75rem;
}

.card-features li {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    font-size: 0.9rem;
}

.drink-icon {
    font-size: 1rem;
    color: var(--color-accent);
    font-weight: bold;
}

.additional-drinks {
    text-align: center;
    padding: 2rem;
    background: white;
    border-radius: 12px;
}

.additional-drinks h4 {
    margin-bottom: 1rem;
    color: #666;
}

.drinks-price-ribbon {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 1rem;
}

.drinks-price-ribbon span {
    padding: 0.5rem 1rem;
    background: #f5f5f5;
    border-radius: 20px;
    font-size: 0.85rem;
}

/* Canapés Section */
.canapes-section {
    padding: 40px 0;
    background: #faf9f7;
}

.canapes-banner {
    display: flex;
    align-items: center;
    gap: 3rem;
    padding: 2.5rem 3rem;
    background: linear-gradient(135deg, #1a3c34 0%, #0f2820 100%);
    border-radius: 12px;
}

@media (max-width: 968px) {
    .canapes-banner {
        flex-direction: column;
        text-align: center;
        gap: 1.5rem;
        padding: 2rem;
    }
}

.banner-content {
    flex: 1;
    color: white;
}

.banner-label {
    display: inline-block;
    font-size: 0.7rem;
    letter-spacing: 0.15em;
    text-transform: uppercase;
    color: var(--color-accent);
    margin-bottom: 0.5rem;
}

.banner-content h2 {
    font-size: 1.75rem;
    margin-bottom: 0.5rem;
    color: white;
}

.banner-content p {
    font-size: 0.95rem;
    opacity: 0.8;
    margin: 0;
    line-height: 1.5;
}

.banner-price {
    text-align: center;
    padding: 0 2rem;
    border-left: 1px solid rgba(255,255,255,0.2);
    border-right: 1px solid rgba(255,255,255,0.2);
}

@media (max-width: 968px) {
    .banner-price {
        border: none;
        padding: 1rem 0;
        border-top: 1px solid rgba(255,255,255,0.2);
        border-bottom: 1px solid rgba(255,255,255,0.2);
        width: 100%;
    }
}

.banner-price .price {
    display: block;
    font-family: var(--font-heading);
    font-size: 2.5rem;
    color: var(--color-accent);
    line-height: 1;
}

.banner-price .per {
    font-size: 0.75rem;
    color: rgba(255,255,255,0.6);
    text-transform: uppercase;
    letter-spacing: 0.1em;
}

.banner-btn {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 1rem 1.5rem;
    background: var(--color-accent);
    color: white;
    border-radius: 6px;
    font-size: 0.9rem;
    font-weight: 500;
    transition: all 0.3s ease;
    white-space: nowrap;
}

.banner-btn:hover {
    background: white;
    color: var(--color-text);
}

.banner-btn svg {
    width: 18px;
    height: 18px;
}

/* Menu Section */
.wedding-menu-section {
    position: relative;
    padding: 100px 0;
    background: #faf9f7;
}

.menu-bg-texture {
    position: absolute;
    inset: 0;
    background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23b8956b' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}

.menu-header-elegant {
    position: relative;
    text-align: center;
    margin-bottom: 3rem;
}

.menu-subtitle {
    display: block;
    font-size: 0.9rem;
    letter-spacing: 0.2em;
    text-transform: uppercase;
    color: var(--color-accent);
    margin-bottom: 0.5rem;
}

.menu-header-elegant h2 {
    font-size: 2.5rem;
    margin-bottom: 1rem;
}

.menu-price-badge {
    display: inline-block;
    padding: 0.5rem 1.5rem;
    background: var(--color-accent);
    color: white;
    border-radius: 30px;
    margin-bottom: 1rem;
}

.menu-price-badge span {
    font-family: var(--font-heading);
    font-size: 1.25rem;
}

.menu-instruction {
    max-width: 600px;
    margin: 0 auto;
    color: #666;
}

.menu-tabs-container {
    position: relative;
}

.menu-tabs {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 0.5rem;
    margin-bottom: 2rem;
    padding: 1rem;
    background: white;
    border-radius: 12px;
}

.menu-tab {
    padding: 0.75rem 1.5rem;
    background: transparent;
    border: 2px solid transparent;
    border-radius: 30px;
    font-size: 0.9rem;
    cursor: pointer;
    transition: all 0.3s ease;
}

.menu-tab:hover {
    background: #f5f5f5;
}

.menu-tab.active {
    background: var(--color-accent);
    color: white;
}

.menu-panels {
    position: relative;
}

.menu-panel {
    display: none;
    animation: fadeIn 0.3s ease;
}

.menu-panel.active {
    display: block;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
}

.menu-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
    gap: 1rem;
}

.menu-grid.compact {
    grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
}

.menu-item-elegant {
    background: white;
    padding: 1.5rem;
    border-radius: 8px;
    border-left: 3px solid var(--color-accent);
    transition: all 0.3s ease;
}

.menu-item-elegant:hover {
    transform: translateX(5px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.menu-item-elegant h4 {
    font-size: 1rem;
    margin-bottom: 0.25rem;
}

.menu-item-elegant p {
    font-size: 0.85rem;
    color: #888;
    margin: 0;
}

.menu-item-elegant.veg {
    border-color: #4a9f4a;
}

.menu-item-elegant.premium {
    border-color: #d4a574;
    background: linear-gradient(135deg, #faf9f7 0%, white 100%);
}

.menu-item-simple {
    background: white;
    padding: 1rem 1.5rem;
    border-radius: 8px;
    font-size: 0.9rem;
}

.menu-item-simple.premium {
    background: linear-gradient(135deg, rgba(184, 149, 107, 0.1) 0%, white 100%);
    border: 1px solid var(--color-accent);
}

.supplement {
    display: inline-block;
    margin-left: 0.5rem;
    padding: 0.2rem 0.5rem;
    background: var(--color-accent);
    color: white;
    border-radius: 4px;
    font-size: 0.75rem;
}

.soups-intro {
    text-align: center;
    margin-bottom: 2rem;
}

.chef-note {
    display: block;
    font-family: var(--font-heading);
    font-size: 1.25rem;
    font-style: italic;
    color: var(--color-accent);
    margin-bottom: 0.5rem;
}

.panel-intro {
    text-align: center;
    color: #666;
    margin-bottom: 2rem;
}

.veg-badge {
    text-align: center;
    font-size: 1.25rem;
    color: #4a9f4a;
    margin-bottom: 2rem;
}

.dessert-extra {
    text-align: center;
    margin-top: 2rem;
    padding: 1rem;
    background: linear-gradient(135deg, rgba(184, 149, 107, 0.1) 0%, transparent 100%);
    border-radius: 8px;
}

.dessert-extra span {
    font-size: 0.9rem;
    color: var(--color-accent-dark);
}

.children-pricing-header {
    display: flex;
    justify-content: center;
    gap: 2rem;
    flex-wrap: wrap;
    margin-bottom: 2rem;
    padding: 1rem;
    background: linear-gradient(135deg, rgba(184, 149, 107, 0.1) 0%, transparent 100%);
    border-radius: 8px;
}

.price-tier {
    font-size: 0.9rem;
}

.children-menu-layout {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 2rem;
}

.course-column h4 {
    font-size: 1rem;
    color: var(--color-accent);
    margin-bottom: 1rem;
    padding-bottom: 0.5rem;
    border-bottom: 2px solid var(--color-accent);
}

.course-column li {
    padding: 0.5rem 0;
    font-size: 0.9rem;
    color: #666;
}

/* Evening Buffet */
.evening-buffet-section {
    padding: 60px 0;
    background: #faf9f7;
}

.buffet-card {
    background: white;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.06);
}

.buffet-card-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 2rem;
    padding: 2rem 2.5rem;
    background: linear-gradient(135deg, #1a3c34 0%, #0f2820 100%);
    color: white;
}

@media (max-width: 768px) {
    .buffet-card-header {
        flex-direction: column;
        text-align: center;
    }
}

.header-left h2 {
    font-size: 1.75rem;
    margin-bottom: 0.25rem;
    color: white;
}

.header-left p {
    font-size: 0.9rem;
    opacity: 0.7;
    margin: 0;
}

.price-tags {
    display: flex;
    align-items: center;
    gap: 1rem;
}

.price-tag {
    text-align: center;
    padding: 0.75rem 1.25rem;
    background: rgba(255,255,255,0.1);
    border-radius: 8px;
}

.price-tag.featured {
    background: var(--color-accent);
}

.tag-label {
    display: block;
    font-size: 0.7rem;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    opacity: 0.8;
}

.tag-price {
    display: block;
    font-family: var(--font-heading);
    font-size: 1.75rem;
    line-height: 1.2;
}

.tag-note {
    display: block;
    font-size: 0.65rem;
    opacity: 0.7;
    margin-top: 0.25rem;
}

.price-or {
    font-style: italic;
    opacity: 0.5;
    font-size: 0.9rem;
}

.buffet-card-body {
    padding: 2.5rem;
    background: linear-gradient(180deg, #f8f7f5 0%, #f0eeeb 100%);
}

.buffet-grid {
    display: grid;
    grid-template-columns: 1fr 300px;
    gap: 2rem;
}

@media (max-width: 868px) {
    .buffet-grid {
        grid-template-columns: 1fr;
    }
}

.buffet-col h4 {
    font-size: 0.8rem;
    letter-spacing: 0.15em;
    text-transform: uppercase;
    color: var(--color-accent);
    margin-bottom: 1.25rem;
}

.buffet-col.sweets h4 {
    color: #8b6b6b;
}

.items-list {
    display: flex;
    flex-wrap: wrap;
    gap: 0.6rem;
}

.items-list span {
    padding: 0.6rem 1.2rem;
    background: white;
    border-radius: 25px;
    font-size: 0.85rem;
    color: var(--color-text);
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
    transition: all 0.2s ease;
}

.items-list span:hover {
    background: var(--color-accent);
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(184, 149, 107, 0.3);
}

.buffet-col.sweets .items-list span:hover {
    background: #8b6b6b;
    box-shadow: 0 4px 12px rgba(139, 107, 107, 0.3);
}

/* Your Day Section */
.your-day-section {
    padding: 80px 0;
    background: white;
}

.day-header {
    text-align: center;
    margin-bottom: 4rem;
}

.day-label {
    display: inline-block;
    font-size: 0.75rem;
    letter-spacing: 0.2em;
    text-transform: uppercase;
    color: var(--color-accent);
    margin-bottom: 0.5rem;
}

.day-header h2 {
    font-size: clamp(2rem, 4vw, 2.5rem);
}

.day-steps {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 2rem;
}

@media (max-width: 968px) {
    .day-steps {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 568px) {
    .day-steps {
        grid-template-columns: 1fr;
    }
}

.step {
    text-align: center;
    padding: 2rem;
    background: #faf9f7;
    border-radius: 12px;
    transition: all 0.3s ease;
}

.step:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08);
}

.step-number {
    display: inline-block;
    font-family: var(--font-heading);
    font-size: 2.5rem;
    color: var(--color-accent);
    margin-bottom: 1rem;
    opacity: 0.5;
}

.step-content h4 {
    font-size: 1.1rem;
    margin-bottom: 0.75rem;
}

.step-content p {
    font-size: 0.9rem;
    color: var(--color-text-muted);
    line-height: 1.6;
    margin: 0;
}


/* Entertainment Premium */
.entertainment-premium {
    position: relative;
    background: linear-gradient(180deg, #0a1f1a 0%, #0d2922 50%, #0a1f1a 100%);
    color: white;
    overflow: hidden;
    padding: 100px 0 0;
}

.ent-premium-bg {
    position: absolute;
    inset: 0;
    pointer-events: none;
}

.ent-glow {
    position: absolute;
    border-radius: 50%;
    filter: blur(100px);
    opacity: 0.3;
}

.ent-glow-1 {
    width: 400px;
    height: 400px;
    background: var(--color-accent);
    top: -100px;
    left: 10%;
    animation: entFloat 8s ease-in-out infinite;
}

.ent-glow-2 {
    width: 300px;
    height: 300px;
    background: #2a9d8f;
    bottom: 0;
    right: 15%;
    animation: entFloat 10s ease-in-out infinite reverse;
}

@keyframes entFloat {
    0%, 100% { transform: translate(0, 0); }
    50% { transform: translate(30px, -30px); }
}

.ent-lines {
    position: absolute;
    inset: 0;
    background-image: 
        linear-gradient(90deg, rgba(184, 149, 107, 0.03) 1px, transparent 1px),
        linear-gradient(rgba(184, 149, 107, 0.03) 1px, transparent 1px);
    background-size: 60px 60px;
}

.ent-premium-inner {
    position: relative;
    z-index: 2;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 40px;
}

.ent-header {
    text-align: center;
    margin-bottom: 60px;
}

.ent-badge {
    display: inline-block;
    padding: 0.6rem 1.5rem;
    background: linear-gradient(135deg, rgba(184, 149, 107, 0.2), rgba(184, 149, 107, 0.05));
    border: 1px solid rgba(184, 149, 107, 0.3);
    border-radius: 30px;
    font-size: 0.7rem;
    letter-spacing: 0.2em;
    text-transform: uppercase;
    color: var(--color-accent);
    margin-bottom: 1.5rem;
}

.ent-header h2 {
    font-size: clamp(3rem, 6vw, 4.5rem);
    margin-bottom: 1.5rem;
    background: linear-gradient(135deg, #fff 0%, rgba(255,255,255,0.7) 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.ent-divider {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 1.5rem;
}

.ent-divider span {
    width: 80px;
    height: 1px;
    background: linear-gradient(90deg, transparent, var(--color-accent), transparent);
}

.ent-divider svg {
    width: 30px;
    height: 30px;
    color: var(--color-accent);
}

.ent-cards-wrap {
    display: grid;
    grid-template-columns: repeat(6, 1fr);
    gap: 20px;
    margin-bottom: 60px;
}

@media (max-width: 1100px) {
    .ent-cards-wrap {
        grid-template-columns: repeat(3, 1fr);
    }
}

@media (max-width: 600px) {
    .ent-cards-wrap {
        grid-template-columns: repeat(2, 1fr);
    }
}

.ent-card {
    position: relative;
    background: linear-gradient(145deg, rgba(255,255,255,0.08), rgba(255,255,255,0.02));
    border: 1px solid rgba(255,255,255,0.1);
    border-radius: 16px;
    padding: 2rem 1rem;
    text-align: center;
    cursor: pointer;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    overflow: hidden;
}

.ent-card::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, var(--color-accent), #2a9d8f);
    opacity: 0;
    transition: opacity 0.4s ease;
}

.ent-card:hover {
    transform: translateY(-8px);
    border-color: var(--color-accent);
    box-shadow: 0 20px 40px rgba(184, 149, 107, 0.2);
}

.ent-card:hover::before {
    opacity: 1;
}

.ent-card-glow {
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: radial-gradient(circle, rgba(184,149,107,0.3) 0%, transparent 70%);
    opacity: 0;
    transition: opacity 0.4s ease;
    pointer-events: none;
}

.ent-card:hover .ent-card-glow {
    opacity: 1;
}

.ent-card-icon {
    position: relative;
    z-index: 2;
    width: 50px;
    height: 50px;
    margin: 0 auto 1rem;
    display: flex;
    align-items: center;
    justify-content: center;
}

.ent-card-icon svg {
    width: 100%;
    height: 100%;
    color: var(--color-accent);
    transition: color 0.4s ease;
}

.ent-card:hover .ent-card-icon svg {
    color: white;
}

.ent-card h4 {
    position: relative;
    z-index: 2;
    font-size: 0.95rem;
    font-weight: 500;
    margin: 0;
    color: rgba(255, 255, 255, 0.9);
    transition: color 0.4s ease;
}

.ent-card:hover h4 {
    color: white;
}

.ent-bottom {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 60px;
    padding-bottom: 60px;
}

@media (max-width: 600px) {
    .ent-bottom {
        flex-direction: column;
        gap: 2rem;
    }
}

.ent-price-tag {
    display: flex;
    align-items: baseline;
    gap: 0.75rem;
}

.price-label {
    font-size: 1rem;
    opacity: 0.6;
}

.price-amount {
    font-family: var(--font-heading);
    font-size: 3.5rem;
    color: var(--color-accent);
    text-shadow: 0 0 30px rgba(184, 149, 107, 0.5);
}

.ent-partner-badge {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 1rem 2rem;
    background: rgba(255,255,255,0.05);
    border-radius: 12px;
    border: 1px solid rgba(255,255,255,0.1);
}

.ent-partner-badge span {
    font-size: 0.7rem;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    opacity: 0.5;
    margin-bottom: 0.25rem;
}

.ent-partner-badge strong {
    color: var(--color-accent);
    font-size: 1.1rem;
}

.ent-license-bar {
    background: rgba(0,0,0,0.4);
    border-top: 1px solid rgba(255,255,255,0.05);
}

.license-inner {
    max-width: 1200px;
    margin: 0 auto;
    padding: 1rem 40px;
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 2rem;
    font-size: 0.75rem;
    opacity: 0.5;
}

.license-inner span {
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.license-inner svg {
    color: var(--color-accent);
}

/* Booking Info */
.booking-info-section {
    padding: 100px 0;
    background: #faf9f7;
}

.booking-info-section h2 {
    text-align: center;
    font-size: 2.5rem;
    margin-bottom: 3rem;
}

.info-cards-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 1.5rem;
    margin-bottom: 2rem;
}

.info-card {
    background: white;
    padding: 2rem;
    border-radius: 12px;
    text-align: center;
    transition: all 0.3s ease;
}

.info-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
}

.card-icon {
    display: flex;
    justify-content: center;
    margin-bottom: 1rem;
}

.card-icon svg {
    width: 40px;
    height: 40px;
    color: var(--color-accent);
}

.info-card h4 {
    font-size: 1rem;
    margin-bottom: 0.5rem;
}

.info-card p {
    font-size: 0.9rem;
    color: #666;
    margin: 0;
}

.info-card strong {
    color: var(--color-accent);
}

.accessibility-note {
    display: flex;
    align-items: center;
    gap: 1rem;
    max-width: 600px;
    margin: 0 auto;
    padding: 1.5rem;
    background: #fff3cd;
    border-radius: 12px;
    border-left: 4px solid #ffc107;
}

.accessibility-note svg {
    width: 30px;
    height: 30px;
    color: #ffc107;
    flex-shrink: 0;
}

.accessibility-note p {
    font-size: 0.9rem;
    margin: 0;
}

/* Responsive */
@media (max-width: 768px) {
    .hero-stats-bar {
        flex-direction: column;
        gap: 1rem;
    }
    
    .stat-divider {
        display: none;
    }
    
    .package-price-display .amount {
        font-size: 6rem;
    }
    
    .package-features-grid {
        grid-template-columns: 1fr;
    }
    
    .gallery-item {
        width: 280px;
        height: 350px;
    }
    
    .gallery-item.large {
        width: 350px;
    }
    
    .timeline-line {
        left: 30px;
    }
}

@media (max-width: 768px) {
    .wedding-hero-cinematic {
        min-height: 100vh;
        min-height: 100dvh;
        padding-top: var(--header-height, 100px);
    }
    
    .hero-content-wrapper {
        margin-top: 0;
        padding: 1.5rem;
    }
    
    .hero-stats-bar {
        position: relative;
        bottom: auto;
        margin-top: auto;
    }
}

@media (max-width: 480px) {
    .wedding-hero-cinematic {
        padding-top: var(--header-height, 80px);
    }

    .line-2 {
        font-size: clamp(3rem, 10vw, 5rem);
    }
    
    .line-3 {
        font-size: clamp(2.5rem, 7vw, 4rem);
    }
    
    .hero-stats-bar {
        padding: 1rem;
        gap: 0.75rem;
    }
    
    .stat-value {
        font-size: 1.8rem;
    }
    
    .intro-content-side {
        padding: 40px 20px;
    }
    
    .intro-visual-side {
        min-height: 350px;
    }
    
    .package-price-display .amount {
        font-size: 4.5rem;
    }
    
    .menu-tabs {
        gap: 0.5rem;
    }
    
    .menu-tab-btn {
        padding: 0.6rem 1rem;
        font-size: 0.65rem;
    }
    
    .drinks-cards-container {
        grid-template-columns: 1fr;
    }
    
    .menu-grid {
        grid-template-columns: 1fr;
    }
    
    .ent-cards-wrap {
        grid-template-columns: 1fr 1fr;
        gap: 0.75rem;
    }
    
    .gallery-item {
        width: 250px;
        height: 300px;
    }
    
    .gallery-item.large {
        width: 300px;
    }
    
    .cta-buttons {
        flex-direction: column;
    }
    
    .cta-buttons a {
        width: 100%;
        justify-content: center;
        text-align: center;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Counter animation
    const counters = document.querySelectorAll('.stat-number[data-count]');
    const observerOptions = { threshold: 0.5 };
    
    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const el = entry.target;
                const target = parseInt(el.dataset.count);
                let current = 0;
                const increment = target / 50;
                const timer = setInterval(() => {
                    current += increment;
                    if (current >= target) {
                        el.textContent = target;
                        clearInterval(timer);
                    } else {
                        el.textContent = Math.floor(current);
                    }
                }, 30);
                counterObserver.unobserve(el);
            }
        });
    }, observerOptions);
    
    counters.forEach(counter => counterObserver.observe(counter));
    
    // Menu tabs
    const menuTabs = document.querySelectorAll('.menu-tab');
    const menuPanels = document.querySelectorAll('.menu-panel');
    
    menuTabs.forEach(tab => {
        tab.addEventListener('click', () => {
            const target = tab.dataset.tab;
            
            menuTabs.forEach(t => t.classList.remove('active'));
            menuPanels.forEach(p => p.classList.remove('active'));
            
            tab.classList.add('active');
            document.getElementById('panel-' + target).classList.add('active');
        });
    });
    
    // Horizontal scroll with mouse wheel
    const galleryContainer = document.querySelector('.gallery-scroll-container');
    if (galleryContainer) {
        galleryContainer.addEventListener('wheel', (e) => {
            if (Math.abs(e.deltaY) > Math.abs(e.deltaX)) {
                e.preventDefault();
                galleryContainer.scrollLeft += e.deltaY;
            }
        }, { passive: false });
    }
});
</script>

<?php get_footer(); ?>
