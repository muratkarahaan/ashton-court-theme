<?php
if (!defined('ABSPATH')) exit;
/**
 * Template Name: Menus Page
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

<!-- Menus Hero -->
<section class="menus-page-hero">
    <div class="menus-hero-bg">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/restaurant.png" alt="Dining">
        <div class="menus-hero-overlay"></div>
    </div>
    <div class="menus-hero-content" data-animate="fade-up">
        <span class="section-tagline"><?php echo esc_html($f('menus_hero_tagline', 'Culinary Excellence')); ?></span>
        <h1 class="menus-hero-title"><?php echo esc_html($f('menus_hero_title', 'Our Menus')); ?></h1>
        <p class="menus-hero-subtitle"><?php echo esc_html($f('menus_hero_subtitle', 'Explore our carefully crafted menus for every occasion')); ?></p>
    </div>
</section>

<!-- Menus Tabs Section -->
<section class="menus-tabs-section">
    <div class="container">
        <div class="menus-intro" data-animate="fade-up">
            <p><?php echo esc_html($f('menus_intro_text', 'From intimate dinners to grand celebrations, our culinary team creates memorable experiences with fresh, locally-sourced ingredients. Select a menu below to explore our offerings.')); ?></p>
        </div>
        
        <!-- Menu Buttons -->
        <div class="menu-buttons-wrapper" data-animate="fade-up">
            <div class="menu-buttons-grid">
                <button class="menu-tab-btn active" data-menu="drinks">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M8 22h8M12 11v11M4.93 3h14.14l-1.67 8H6.6L4.93 3z"/>
                    </svg>
                    <span>Drinks Packages</span>
                </button>
                <button class="menu-tab-btn" data-menu="finger">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <circle cx="12" cy="12" r="10"/>
                        <path d="M8 14s1.5 2 4 2 4-2 4-2"/>
                    </svg>
                    <span>Finger Buffet</span>
                </button>
                <button class="menu-tab-btn" data-menu="canape">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M12 2L2 7l10 5 10-5-10-5z"/>
                        <path d="M2 17l10 5 10-5"/>
                        <path d="M2 12l10 5 10-5"/>
                    </svg>
                    <span>Canapé Options</span>
                </button>
                <button class="menu-tab-btn" data-menu="vegan">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                        <path d="M9 12l2 2 4-4"/>
                    </svg>
                    <span>Vegan Menu</span>
                </button>
                <button class="menu-tab-btn" data-menu="fork">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M3 2v7c0 1.1.9 2 2 2h4a2 2 0 0 0 2-2V2"/>
                        <path d="M7 2v20"/>
                        <path d="M21 15V2a5 5 0 0 0-5 5v6c0 1.1.9 2 2 2h3zm0 0v7"/>
                    </svg>
                    <span>Fork Buffet</span>
                </button>
                <button class="menu-tab-btn featured" data-menu="christmas">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                    </svg>
                    <span>Christmas</span>
                </button>
                <button class="menu-tab-btn" data-menu="samples">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                        <polyline points="14 2 14 8 20 8"/>
                        <line x1="16" y1="13" x2="8" y2="13"/>
                        <line x1="16" y1="17" x2="8" y2="17"/>
                    </svg>
                    <span>Menu Samples</span>
                </button>
                <button class="menu-tab-btn" data-menu="bespoke">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                    </svg>
                    <span>Bespoke Functions</span>
                </button>
            </div>
        </div>
        
        <!-- Menu Content Panels -->
        <div class="menu-panels-container">
            
            <!-- Drinks Packages -->
            <div class="menu-panel active" id="panel-drinks">
                <div class="elegant-menu">
                    <!-- Menu Header -->
                    <div class="elegant-menu-header">
                        <div class="menu-ornament">✦</div>
                        <h2>Drinks Packages</h2>
                        <p class="menu-intro">Red and White house wines are priced at £19.00 per bottle (4-6 glasses per bottle).<br>We usually allow for half a bottle per person, or you may like us to place bottles on the tables.</p>
                    </div>
                    
                    <!-- Packages -->
                    <div class="elegant-packages">
                        <div class="package-row">
                            <div class="package-box">
                                <h3>Pack One <span class="pkg-price">£15.50 per head</span></h3>
                                <div class="package-details">
                                    <div class="pkg-line">
                                        <span class="pkg-dot"></span>
                                        <span>1 glass of Bucks Fizz, Pimms or Mocktail <em>on arrival</em></span>
                                    </div>
                                    <div class="pkg-line">
                                        <span class="pkg-dot"></span>
                                        <span>1 glass of Wine or 1 pint of Lager/Beer <em>with meal</em></span>
                                    </div>
                                    <div class="pkg-line">
                                        <span class="pkg-dot"></span>
                                        <span>1 glass of Prosecco <em>for toast</em></span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="package-box">
                                <h3>Pack Two <span class="pkg-price">£19.00 per head</span></h3>
                                <div class="package-details">
                                    <div class="pkg-line">
                                        <span class="pkg-dot"></span>
                                        <span>1 glass of Bucks Fizz, Pimms or Mocktail <em>on arrival</em></span>
                                    </div>
                                    <div class="pkg-line">
                                        <span class="pkg-dot"></span>
                                        <span>1 glass of Wine or 1 pint of Lager/Beer <em>with meal</em></span>
                                    </div>
                                    <div class="pkg-line highlight">
                                        <span class="pkg-dot gold"></span>
                                        <span>1 glass of <strong>Champagne</strong> <em>for toast</em></span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="package-box">
                                <h3>Pack Three <span class="pkg-price">£19.00 per head</span></h3>
                                <div class="package-details">
                                    <div class="pkg-line">
                                        <span class="pkg-dot"></span>
                                        <span>1 glass of Bucks Fizz, Pimms or Mocktail <em>on arrival</em></span>
                                    </div>
                                    <div class="pkg-line highlight">
                                        <span class="pkg-dot gold"></span>
                                        <span><strong>2 glasses</strong> of Wine or <strong>2 pints</strong> of Lager/Beer <em>with meal</em></span>
                                    </div>
                                    <div class="pkg-line">
                                        <span class="pkg-dot"></span>
                                        <span>1 glass of Prosecco <em>for toast</em></span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="package-box featured">
                                <div class="best-value-tag">Best Value</div>
                                <h3>Pack Four <span class="pkg-price">£22.00 per head</span></h3>
                                <div class="package-details">
                                    <div class="pkg-line">
                                        <span class="pkg-dot"></span>
                                        <span>1 glass of Bucks Fizz, Pimms or Mocktail <em>on arrival</em></span>
                                    </div>
                                    <div class="pkg-line highlight">
                                        <span class="pkg-dot gold"></span>
                                        <span><strong>2 glasses</strong> of Wine or <strong>2 pints</strong> of Lager/Beer <em>with meal</em></span>
                                    </div>
                                    <div class="pkg-line highlight">
                                        <span class="pkg-dot gold"></span>
                                        <span>1 glass of <strong>Champagne</strong> <em>for toast</em></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Divider -->
                    <div class="menu-divider">
                        <span></span>
                        <div class="menu-ornament small">✦</div>
                        <span></span>
                    </div>
                    
                    <!-- Individual Prices -->
                    <div class="elegant-prices">
                        <h3>Individual Drink Prices</h3>
                        <div class="price-list">
                            <div class="price-row">
                                <span class="price-name">Pimms, Bucks Fizz & Mocktails</span>
                                <span class="price-dots"></span>
                                <span class="price-value">£6.50 <small>per glass</small></span>
                            </div>
                            <div class="price-row">
                                <span class="price-name">Red, White & Rosé Wine</span>
                                <span class="price-dots"></span>
                                <span class="price-value">£5.50 <small>per 175ml glass</small></span>
                            </div>
                            <div class="price-row">
                                <span class="price-name">House Wine (Bottle)</span>
                                <span class="price-dots"></span>
                                <span class="price-value">£19.00 <small>per bottle</small></span>
                            </div>
                            <div class="price-row">
                                <span class="price-name">Lager & Beer</span>
                                <span class="price-dots"></span>
                                <span class="price-value">£5.00 <small>per pint</small></span>
                            </div>
                            <div class="price-row">
                                <span class="price-name">Prosecco & Sparkling Wine</span>
                                <span class="price-dots"></span>
                                <span class="price-value">£5.50 <small>per glass</small></span>
                            </div>
                            <div class="price-row">
                                <span class="price-name">Quality Champagne</span>
                                <span class="price-dots"></span>
                                <span class="price-value">£9.50 <small>per glass</small></span>
                            </div>
                            <div class="price-row">
                                <span class="price-name">Bottled Water (Still or Sparkling)</span>
                                <span class="price-dots"></span>
                                <span class="price-value">£3.00 <small>per bottle</small></span>
                            </div>
                            <div class="price-row free">
                                <span class="price-name">Jugs of Iced Water</span>
                                <span class="price-dots"></span>
                                <span class="price-value">Complimentary</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Notes -->
                    <div class="elegant-notes">
                        <p><strong>Free Issue Option:</strong> Should you wish to have 'free issue' of wine with the meal, we will agree on an initial offering and 'count the corks' at £19.00 per bottle of house wine, charging accordingly for all additional bottles.</p>
                        <p><strong>Welcome Drinks:</strong> May be provided by 'free-serve' and charged as extras. Please instruct us accordingly.</p>
                    </div>
                    
                </div>
            </div>

            <!-- Finger Buffet -->
            <div class="menu-panel" id="panel-finger">
                <div class="elegant-menu">
                    <!-- Menu Header -->
                    <div class="elegant-menu-header">
                        <div class="menu-ornament">✦</div>
                        <h2>Finger Buffet Options</h2>
                        <p class="menu-intro">Evening finger buffets are small bite-sized tasty portions. They are usually savoury, but often sweet as well. They provide a perfect interlude for any occasion.</p>
                    </div>
                    
                    <!-- Pricing Options -->
                    <div class="elegant-packages">
                        <div class="package-row" style="grid-template-columns: 1fr 1fr; max-width: 800px; margin: 0 auto;">
                            <div class="package-box">
                                <h3>6 Choices <span class="pkg-price">£15.00 per person</span></h3>
                                <div class="package-details">
                                    <div class="pkg-line">
                                        <span class="pkg-dot"></span>
                                        <span>Select any 6 items from our menu</span>
                                    </div>
                                    <div class="pkg-line">
                                        <span class="pkg-dot"></span>
                                        <span>Tea and/or coffee counts as x1 portion</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="package-box featured">
                                <div class="best-value-tag">Popular</div>
                                <h3>8 Choices <span class="pkg-price">£18.00 per person</span></h3>
                                <div class="package-details">
                                    <div class="pkg-line">
                                        <span class="pkg-dot"></span>
                                        <span>Select any 8 items from our menu</span>
                                    </div>
                                    <div class="pkg-line">
                                        <span class="pkg-dot"></span>
                                        <span>Including sweets if required</span>
                                    </div>
                                    <div class="pkg-line">
                                        <span class="pkg-dot"></span>
                                        <span>Tea and/or coffee counts as x1 portion</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Divider -->
                    <div class="menu-divider">
                        <span></span>
                        <div class="menu-ornament small">✦</div>
                        <span></span>
                    </div>
                    
                    <!-- Selection Items -->
                    <div class="elegant-prices" style="max-width: 1200px;">
                        <h3>Savoury Selection</h3>
                        <div class="buffet-selection-grid">
                            <div class="buffet-item">
                                <span class="buffet-dot"></span>
                                <span>Selection of Sandwiches (brown & white bread)</span>
                            </div>
                            <div class="buffet-item">
                                <span class="buffet-dot"></span>
                                <span>Glazed (pork meat) Sausage Rolls</span>
                            </div>
                            <div class="buffet-item">
                                <span class="buffet-dot"></span>
                                <span>Various Mini Tartlets (meat & vegetarian)</span>
                            </div>
                            <div class="buffet-item">
                                <span class="buffet-dot"></span>
                                <span>Vegetable Samosa</span>
                            </div>
                            <div class="buffet-item">
                                <span class="buffet-dot"></span>
                                <span>Various Pizza Slices (meat/fish & vegetarian)</span>
                            </div>
                            <div class="buffet-item">
                                <span class="buffet-dot"></span>
                                <span>Baked Cocktail Sausages in Honey and Rosemary</span>
                            </div>
                            <div class="buffet-item">
                                <span class="buffet-dot"></span>
                                <span>Vegetarian Crudités with Hummus</span>
                            </div>
                            <div class="buffet-item">
                                <span class="buffet-dot"></span>
                                <span>Vol-au-vents with various fillings (meat & vegetarian)</span>
                            </div>
                            <div class="buffet-item">
                                <span class="buffet-dot"></span>
                                <span>Assorted Quiche slices</span>
                            </div>
                            <div class="buffet-item">
                                <span class="buffet-dot"></span>
                                <span>Fish Goujons with Tartar sauce dip</span>
                            </div>
                            <div class="buffet-item">
                                <span class="buffet-dot"></span>
                                <span>Cocktail meat and/or vegetarian Pasties</span>
                            </div>
                            <div class="buffet-item">
                                <span class="buffet-dot"></span>
                                <span>Potato Wedges with assorted spicy/savoury dips</span>
                            </div>
                            <div class="buffet-item">
                                <span class="buffet-dot"></span>
                                <span>Scotch Eggs</span>
                            </div>
                            <div class="buffet-item">
                                <span class="buffet-dot"></span>
                                <span>Chicken Goujons with various dips</span>
                            </div>
                            <div class="buffet-item">
                                <span class="buffet-dot"></span>
                                <span>Chicken pieces in a Tikka sauce</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Sweet Options -->
                    <div class="elegant-prices" style="max-width: 1200px; margin-top: 40px;">
                        <h3>Sweet Options</h3>
                        <div class="buffet-selection-grid" style="grid-template-columns: repeat(3, 1fr);">
                            <div class="buffet-item">
                                <span class="buffet-dot"></span>
                                <span>Chocolate Profiteroles</span>
                            </div>
                            <div class="buffet-item">
                                <span class="buffet-dot"></span>
                                <span>Mini Individual Fruit Tartlets</span>
                            </div>
                            <div class="buffet-item">
                                <span class="buffet-dot"></span>
                                <span>Mini Chocolate Brownies</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Notes -->
                    <div class="elegant-notes" style="margin-top: 50px;">
                        <p><strong>Tea & Coffee:</strong> Single purchases are available as an extra at £3.00 per person. Whilst we are pleased to serve individually and charge accordingly, it is our usual practice to 'assume' that everyone will have a tea or a coffee and we then supply unlimited top-ups at no additional cost.</p>
                        <p><strong>Please Note:</strong> Evening finger buffets are small bite-sized tasty portions. A finger buffet is not a substantial meal and it is therefore important that all guests are made aware, and are not expecting a full meal.</p>
                    </div>
                    
                </div>
            </div>

            <!-- Canapé Options -->
            <div class="menu-panel" id="panel-canape">
                <div class="elegant-menu">
                    <!-- Menu Header -->
                    <div class="elegant-menu-header">
                        <div class="menu-ornament">✦</div>
                        <h2>Canapé Options</h2>
                        <p class="menu-intro">Please allow minimum of 2 canapés per person (usually 3). Minimum production: 20 of each selection.<br>It is usual to select a maximum of 5 different choices.</p>
                    </div>
                    
                    <!-- Option 1 -->
                    <div class="canape-option-section">
                        <div class="canape-option-header">
                            <h3>Option 1</h3>
                            <span class="canape-price">£2.50 per canapé</span>
                        </div>
                        <div class="canape-items-grid">
                            <div class="canape-item"><span class="buffet-dot"></span><span>Baguetine with parfait de canard & confit d'orange</span></div>
                            <div class="canape-item"><span class="buffet-dot"></span><span>Spicy naan with smoked chicken mousse, coriander & mango</span></div>
                            <div class="canape-item"><span class="buffet-dot"></span><span>Smoked salmon tartar with crème fraiche on rye</span></div>
                            <div class="canape-item"><span class="buffet-dot"></span><span>Toasted blinis with crème fraiche & avruga caviar</span></div>
                            <div class="canape-item"><span class="buffet-dot"></span><span>Grape with cream cheese & pistachio <em>(V)</em></span></div>
                            <div class="canape-item"><span class="buffet-dot"></span><span>Roquefort & pecan nuts on pain de mie <em>(V)</em></span></div>
                        </div>
                    </div>
                    
                    <!-- Option 2 -->
                    <div class="canape-option-section">
                        <div class="canape-option-header">
                            <h3>Option 2</h3>
                            <span class="canape-price">£2.70 per canapé</span>
                        </div>
                        <div class="canape-items-grid">
                            <div class="canape-item"><span class="buffet-dot"></span><span>Smoked salmon with salmon mousse & lemon zest on brown bread</span></div>
                            <div class="canape-item"><span class="buffet-dot"></span><span>Tuna, salmon or vegetarian Hosomaki sushi</span></div>
                            <div class="canape-item"><span class="buffet-dot"></span><span>Cointreau marinated chicken with kumquat sauce</span></div>
                            <div class="canape-item"><span class="buffet-dot"></span><span>Parma ham rose with mixed peppers & fresh roquette</span></div>
                            <div class="canape-item"><span class="buffet-dot"></span><span>Fresh asparagus on crostini with sundried tomato <em>(V)</em></span></div>
                            <div class="canape-item"><span class="buffet-dot"></span><span>North African minted cous cous on carrot <em>(V)</em></span></div>
                            <div class="canape-item"><span class="buffet-dot"></span><span>Tomato & quail egg on crostini with tapenade <em>(V)</em></span></div>
                        </div>
                    </div>
                    
                    <!-- Option 3 -->
                    <div class="canape-option-section">
                        <div class="canape-option-header">
                            <h3>Option 3</h3>
                            <span class="canape-price">£2.90 per canapé</span>
                        </div>
                        <div class="canape-items-grid">
                            <div class="canape-item"><span class="buffet-dot"></span><span>The BLT canapé</span></div>
                            <div class="canape-item"><span class="buffet-dot"></span><span>Toasted French brioche with duck parfait & aubergine relish</span></div>
                            <div class="canape-item"><span class="buffet-dot"></span><span>Roast beef on crouton with horseradish sauce</span></div>
                            <div class="canape-item"><span class="buffet-dot"></span><span>Rosette of smoked salmon with dill mousseline & lemon thyme</span></div>
                            <div class="canape-item"><span class="buffet-dot"></span><span>Mini bagel with cream cheese & smoked salmon</span></div>
                            <div class="canape-item"><span class="buffet-dot"></span><span>Spicy crab on rosti potato</span></div>
                            <div class="canape-item"><span class="buffet-dot"></span><span>Open filo of marinated baby prawns & aioli</span></div>
                            <div class="canape-item"><span class="buffet-dot"></span><span>Fresh pesto bruschetta with roasted peppers, shallots & chives <em>(V)</em></span></div>
                            <div class="canape-item"><span class="buffet-dot"></span><span>French goat cheese with provençal peppers <em>(V)</em></span></div>
                            <div class="canape-item"><span class="buffet-dot"></span><span>Smoked applewood cheese fan with chive on toast <em>(V)</em></span></div>
                            <div class="canape-item"><span class="buffet-dot"></span><span>Waldorf salad <em>(V)</em></span></div>
                        </div>
                    </div>
                    
                    <!-- Option 4 -->
                    <div class="canape-option-section">
                        <div class="canape-option-header">
                            <h3>Option 4</h3>
                            <span class="canape-price">£3.00 per canapé</span>
                        </div>
                        <div class="canape-items-grid">
                            <div class="canape-item"><span class="buffet-dot"></span><span>Quenelle of chicken liver parfait with aubergine relish on crostini</span></div>
                            <div class="canape-item"><span class="buffet-dot"></span><span>Beef carpaccio on crostini with truffle oil & parmesan shavings</span></div>
                            <div class="canape-item"><span class="buffet-dot"></span><span>Smoked duck breast with oriental noodle chervil, chilli sauce</span></div>
                            <div class="canape-item"><span class="buffet-dot"></span><span>Fine beans wrapped with pancetta & spicy French vinaigrette</span></div>
                            <div class="canape-item"><span class="buffet-dot"></span><span>Selection of Japanese fish sushi nigiri</span></div>
                            <div class="canape-item"><span class="buffet-dot"></span><span>Hot smoked salmon tower crostini</span></div>
                            <div class="canape-item"><span class="buffet-dot"></span><span>Chargrilled tuna with spicy tomato salsa on Jamaican sweet potato</span></div>
                            <div class="canape-item"><span class="buffet-dot"></span><span>Crayfish tail with crab mousseline with avruga caviar & chervil</span></div>
                            <div class="canape-item"><span class="buffet-dot"></span><span>Crostini of fresh pesto with chargrilled mozzarella & grilled peppers <em>(V)</em></span></div>
                            <div class="canape-item"><span class="buffet-dot"></span><span>Bundle of vegetable julienne with an aged balsamic dressing <em>(V)</em></span></div>
                            <div class="canape-item"><span class="buffet-dot"></span><span>Grilled artichoke button & porcini mousse on parmesan shortbread <em>(V)</em></span></div>
                            <div class="canape-item"><span class="buffet-dot"></span><span>Soft quail egg on petit-pain with sauce grebiche & lolo rosso <em>(V)</em></span></div>
                        </div>
                    </div>
                    
                    <!-- Option 5 -->
                    <div class="canape-option-section">
                        <div class="canape-option-header">
                            <h3>Option 5</h3>
                            <span class="canape-price">£3.30 per canapé</span>
                        </div>
                        <div class="canape-items-grid">
                            <div class="canape-item"><span class="buffet-dot"></span><span>Foie gras on toasted French brioche with truffle</span></div>
                            <div class="canape-item"><span class="buffet-dot"></span><span>Prime Scottish beef tartar mimosa on Yorkshire pudding</span></div>
                            <div class="canape-item"><span class="buffet-dot"></span><span>Buckwheat blinis with roulade of smoked halibut & avruga caviar</span></div>
                            <div class="canape-item"><span class="buffet-dot"></span><span>King scallop on yellow salsa & fresh herbs</span></div>
                            <div class="canape-item"><span class="buffet-dot"></span><span>Lobster tail with crab mousseline with keta caviar & chervil</span></div>
                            <div class="canape-item"><span class="buffet-dot"></span><span>Mini coldwater prawn tower with lemon & lime chiffonade</span></div>
                            <div class="canape-item"><span class="buffet-dot"></span><span>Chargrilled carrot & zucchini tower with tapenade & salsa peppers <em>(V)</em></span></div>
                            <div class="canape-item"><span class="buffet-dot"></span><span>Tower of roasted Mediterranean vegetables on parmesan shortbread <em>(V)</em></span></div>
                        </div>
                    </div>
                    
                    <!-- Option 6 - Hot -->
                    <div class="canape-option-section">
                        <div class="canape-option-header">
                            <h3>Option 6 - Hot Selection</h3>
                            <span class="canape-price">£2.50 per canapé</span>
                        </div>
                        <div class="canape-items-grid">
                            <div class="canape-item"><span class="buffet-dot"></span><span>Cocktail sausage with herbs & honey</span></div>
                            <div class="canape-item"><span class="buffet-dot"></span><span>Filo tartelette of mashed potato & spanish chorizo</span></div>
                            <div class="canape-item"><span class="buffet-dot"></span><span>Mini bacon muffin</span></div>
                            <div class="canape-item"><span class="buffet-dot"></span><span>Duck pancake with spring onion</span></div>
                            <div class="canape-item"><span class="buffet-dot"></span><span>Baby croque-monsieur</span></div>
                            <div class="canape-item"><span class="buffet-dot"></span><span>Mini cod cake with garden herbs</span></div>
                            <div class="canape-item"><span class="buffet-dot"></span><span>Grilled tuna with pesto & celeriac puree on toast</span></div>
                            <div class="canape-item"><span class="buffet-dot"></span><span>Rustic tartlet eggs florentine <em>(V)</em></span></div>
                            <div class="canape-item"><span class="buffet-dot"></span><span>Filo tartelette with mushroom stroganoff <em>(V)</em></span></div>
                            <div class="canape-item"><span class="buffet-dot"></span><span>Polenta wedges with bocconcini & tomato <em>(V)</em></span></div>
                        </div>
                    </div>
                    
                    <!-- Divider -->
                    <div class="menu-divider">
                        <span></span>
                        <div class="menu-ornament small">✦</div>
                        <span></span>
                    </div>
                    
                    <!-- Sweet Canapés -->
                    <div class="canape-option-section">
                        <div class="canape-option-header">
                            <h3>Sweet Canapés</h3>
                            <span class="canape-price">£2.20 each <small>(min 20 per portion)</small></span>
                        </div>
                        <div class="canape-items-grid">
                            <div class="canape-item"><span class="buffet-dot"></span><span>Fruit tart</span></div>
                            <div class="canape-item"><span class="buffet-dot"></span><span>Chocolate truffle square</span></div>
                            <div class="canape-item"><span class="buffet-dot"></span><span>Chocolate cups</span></div>
                            <div class="canape-item"><span class="buffet-dot"></span><span>Citron tart</span></div>
                            <div class="canape-item"><span class="buffet-dot"></span><span>Strawberry tart</span></div>
                            <div class="canape-item"><span class="buffet-dot"></span><span>Chocolate dipped fruit</span></div>
                            <div class="canape-item"><span class="buffet-dot"></span><span>Mini Florentines</span></div>
                            <div class="canape-item"><span class="buffet-dot"></span><span>Mini eclairs</span></div>
                            <div class="canape-item"><span class="buffet-dot"></span><span>Fondant dipped cape gooseberries</span></div>
                            <div class="canape-item"><span class="buffet-dot"></span><span>Bakewell tarts</span></div>
                            <div class="canape-item"><span class="buffet-dot"></span><span>Mini baba</span></div>
                        </div>
                    </div>
                    
                    <!-- Nibbles -->
                    <div class="canape-option-section" style="margin-top: 40px;">
                        <div class="canape-option-header">
                            <h3>Nibbles</h3>
                        </div>
                        <div class="nibbles-grid">
                            <div class="nibble-item">
                                <span class="nibble-name">Crisps / Peanuts</span>
                                <span class="nibble-price">£1.50 per person</span>
                            </div>
                            <div class="nibble-item">
                                <span class="nibble-name">Kettle chips / Roasted mixed nuts</span>
                                <span class="nibble-price">£1.70 per person</span>
                            </div>
                            <div class="nibble-item">
                                <span class="nibble-name">Marinated olives / Roasted mixed nuts / Assorted rice crackers</span>
                                <span class="nibble-price">£2.00 per person</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Notes -->
                    <div class="elegant-notes" style="margin-top: 50px;">
                        <p><strong>Minimum Order:</strong> There is a minimum order of 90 on all savoury canapés. For further help with your selection please contact the Functions Team.</p>
                        <p><strong>Buffet-Size Options:</strong> For functions where you might want a more substantial option, 'buffet/lunch-size' versions of most of the above menus are available. Please ask the Functions Team for further details.</p>
                    </div>
                    
                </div>
            </div>

            <!-- Vegan Menu -->
            <div class="menu-panel" id="panel-vegan">
                <div class="elegant-menu">
                    <!-- Menu Header -->
                    <div class="elegant-menu-header">
                        <div class="menu-ornament">✦</div>
                        <h2>Vegan Menu Options</h2>
                        <p class="menu-intro">Also suitable for all vegetarian requirements<br><em>Specialist Menu – Supplements may apply</em></p>
                    </div>
                    
                    <!-- Soups -->
                    <div class="vegan-menu-section">
                        <div class="vegan-section-header">
                            <h3>Soups</h3>
                        </div>
                        <div class="vegan-items-grid four-col">
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Lentil & Smoked Tofu Soup</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Beetroot Soup with Chives</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Field Mushroom Soup</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Potato, Onion & Garlic Parsley Soup</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Cabbage Soup with Crispy Seaweed</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Spinach & Rosemary Soup</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Mushroom & Butter Bean Soup</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Pumpkin Soup</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Pea & Coriander Soup</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Cream of Celery Soup</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Wild Garlic Soup</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Lentil Soup</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Herb Broth</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Potato, Spring Onion & Tarragon Soup</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Lentil & Barley Soup</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Carrot & Cumin Soup</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Cream of Cauliflower & Potato Soup</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Tomato Bisque</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Spiced Chick Pea Soup</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Chestnut & Celery Soup</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Autumn Vegetable & Bean Soup</span></div>
                        </div>
                    </div>
                    
                    <!-- Divider -->
                    <div class="menu-divider">
                        <span></span>
                        <div class="menu-ornament small">✦</div>
                        <span></span>
                    </div>
                    
                    <!-- Starters -->
                    <div class="vegan-menu-section">
                        <div class="vegan-section-header">
                            <h3>Starters</h3>
                        </div>
                        <div class="vegan-items-grid three-col">
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Spicy Potato Balls</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Falafel Bites</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Aubergine Toasties</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Millet & Cashew Patties</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Tofu Balls</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Lentil Pâté with Melba Toast</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Tomato & Onion Savouries</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Garlic Mushrooms</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Spicy Tofu Scramble with Bell Pepper and Tomato</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Crudités with Houmous / Tofu Guacamole / Bean & Olive Dip / Aubergine & Tahini Dip</span></div>
                        </div>
                    </div>
                    
                    <!-- Divider -->
                    <div class="menu-divider">
                        <span></span>
                        <div class="menu-ornament small">✦</div>
                        <span></span>
                    </div>
                    
                    <!-- Main Courses -->
                    <div class="vegan-menu-section">
                        <div class="vegan-section-header">
                            <h3>Main Courses</h3>
                        </div>
                        <div class="vegan-items-grid three-col">
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Bulgar Wheat & Chestnut Bake</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Black-Eyed Beans & Chick Pea Stew</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Stuffed Bell Peppers</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Vegetable & White Bean Casserole</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Spaghetti with Sweet Cherry Tomatoes, fresh Marjoram & Extra Virgin Olive Oil</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Bean & Mushroom Stroganoff</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Deep Fried Rice Balls with Sweet & Sour Vegetables</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Pasta with Chanterelles, Tapenade & Flat Leaf Parsley</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Bean & Root Vegetable Pie</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Lentil & Rice Loaf</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Barley with Stir Fried Garden Vegetables</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Chestnut Stew</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Papardelle with Roast Pumpkin, Pine Kernels & Rocket Leaves</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Lentil, Oat & Caraway Seed Burgers</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Pasta with Zucchini & Sugar Snaps</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Bean & Potato Stew</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Spaghetti with Tahini Sauce</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Savoury Vegetable Rice</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Almond & Vegetable Curry</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Pasta, Broccoli & Mushroom Casserole</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Millet & Vegetable Savoury</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Spinach & Mushroom Lasagne</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Aubergines Stuffed with Cashew Nuts</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Leek & Smoked Tofu Au Gratin</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Spicy Tofu Tacos or Tofu Kebabs</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Fragrant Spiced Rice with Beans & Mushrooms</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Provençal Vegetable Stew</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Hazelnut & Cashew Nut Roast or Spicy Rice & Walnut Roast</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Smoked Tofu & Mashed Potato Cakes</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Roasted Mediterranean Vegetable Ragout</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Tofu Jambalaya</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Roasted Vegetables with Cous-cous & a Harissa Style Dressing</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Chestnut & Mushroom Pie</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Macaroni, Mushroom & Tofu Casserole</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Risotto with Broad Beans, Peas, Asparagus & Sugar Snaps</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Mustard Pearl Barley Risotto with Parsley Coulis</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Wild Mushroom Risotto</span></div>
                        </div>
                    </div>
                    
                    <!-- Divider -->
                    <div class="menu-divider">
                        <span></span>
                        <div class="menu-ornament small">✦</div>
                        <span></span>
                    </div>
                    
                    <!-- Salads -->
                    <div class="vegan-menu-section">
                        <div class="vegan-section-header">
                            <h3>Salads</h3>
                        </div>
                        <div class="vegan-items-grid two-col">
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Courgette Salad with Mint, Garlic, Red Chilli, Lemon & Extra Virgin Olive Oil</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Avocado and Mushroom Salad with Vinaigrette</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Rice, Bell Pepper & Tofu Salad</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Kidney Bean Pasta Salad with Cider Wine Vinaigrette</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Warm Rocket Salad with Caramelised Onions & Pine Nuts with Balsamic Dressing</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Japanese Mooli Salad with Mustard Cress & Grilled Lemon Dressing</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Caper Salad Niçoise</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Millet Salad with Spring Onions, Red Peppers & Peas</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Fruit & Nut Coleslaw with Apple, Pineapple & Peanuts</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Three Bean & Walnut or Almond Salad with Herb Vinaigrette</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Avocado, Spring Onion, Coriander & Chilli Salad with Toasted Almonds</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Italian Pasta Salad with Smoked Tofu</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Autumn Green Salad with Herb Vinaigrette</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Globe Artichoke, Pink Grapefruit & Frisee Salad</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Pasta Salad with Red & Yellow Cherry Tomatoes, Olives, Chives, Basil & Sharp Dressing</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Shredded Vegetable & Brown Rice Salad</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Green Bean & Pimiento Salad</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Potato & Artichoke Salad Drizzled with Olive Oil</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Tabbouleh with Spring Onions, Parsley & Mint with Strong Vinaigrette</span></div>
                        </div>
                    </div>
                    
                    <!-- Divider -->
                    <div class="menu-divider">
                        <span></span>
                        <div class="menu-ornament small">✦</div>
                        <span></span>
                    </div>
                    
                    <!-- Accompaniments -->
                    <div class="vegan-menu-section">
                        <div class="vegan-section-header">
                            <h3>Accompaniments</h3>
                        </div>
                        <div class="vegan-items-grid three-col">
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Lemon Rice or Spanish Rice</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Baked Peppers with Cherry Vine Tomatoes, Basil & Marjoram</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Baked New Potatoes with Sea Salt & Rosemary</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Chick Peas with Chilli, Garlic & Thyme</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Roasted Fennel with Cherry Tomatoes, Olives, Garlic & Olive Oil</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Swiss Chard with Cannellini Beans</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Portobella Mushrooms with Parsley Pesto & Balsamic Vinegar</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Tray Baked Artichokes with Almonds, Breadcrumbs & Herbs</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Butternut Squash Stuffed with Rice, Pine Nuts, Porcini Mushrooms & Sun-Dried Tomatoes</span></div>
                        </div>
                    </div>
                    
                    <!-- Divider -->
                    <div class="menu-divider">
                        <span></span>
                        <div class="menu-ornament small">✦</div>
                        <span></span>
                    </div>
                    
                    <!-- Puddings -->
                    <div class="vegan-menu-section">
                        <div class="vegan-section-header">
                            <h3>Puddings</h3>
                        </div>
                        <div class="vegan-items-grid three-col">
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Chocolate Cake with Thick Chocolate Icing or Baked Date & Coconut Layer Cake</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Raspberry Cheesecake or Maple Pecan Tofu Cheesecake</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Vegan Bread & Butter Pudding</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Baked Raisin Pudding or Apple Strudel</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Autumn Fruit, Elderflower & Apple Jelly Terrine</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Autumn Raspberry Jellies / Gin & Tonic Jelly</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>Agen Prunes Stuffed with Walnuts or Poached Plums</span></div>
                            <div class="vegan-item"><span class="buffet-dot"></span><span>A Selection of Ice Creams & Sorbets</span></div>
                        </div>
                    </div>
                    
                </div>
            </div>

            <!-- Fork Buffet -->
            <div class="menu-panel" id="panel-fork">
                <div class="elegant-menu">
                    <!-- Menu Header -->
                    <div class="elegant-menu-header">
                        <div class="menu-ornament">✦</div>
                        <h2>Fork Buffet Options</h2>
                        <p class="menu-intro">Hot & Cold selections available in the Function Room<br><em>Minimum of 30 adult guests required</em></p>
                    </div>
                    
                    <!-- Option 1 -->
                    <div class="fork-buffet-option">
                        <div class="fork-option-header">
                            <div class="fork-option-title">
                                <h3>Option 1</h3>
                                <span class="fork-option-type">Hot & Cold</span>
                            </div>
                            <div class="fork-option-price">£35.95<span>/person</span></div>
                        </div>
                        
                        <div class="fork-course">
                            <h4>Starters</h4>
                            <div class="fork-items">
                                <div class="fork-item"><span class="buffet-dot"></span><span>Soup of your choice (see selection) – soup is served</span></div>
                                <div class="fork-item"><span class="buffet-dot"></span><span>Classic Greenland Prawn Cocktail Salad topped with a Mary-Rose sauce</span></div>
                            </div>
                        </div>
                        
                        <div class="fork-course">
                            <h4>Main Selection</h4>
                            <div class="fork-items-grid">
                                <div class="fork-item"><span class="buffet-dot"></span><span>Chinese Vegetable Spring Rolls</span></div>
                                <div class="fork-item"><span class="buffet-dot"></span><span>Mediterranean Beef Casserole with sautéed garlic potato</span></div>
                                <div class="fork-item"><span class="buffet-dot"></span><span>Chilled Roast Sirloin of Beef accompanied by a horseradish cream dressing</span></div>
                                <div class="fork-item"><span class="buffet-dot"></span><span>Poached Salmon with a Dijon and caper aioli</span></div>
                                <div class="fork-item"><span class="buffet-dot"></span><span>Stilton-stuffed Mushroom Caps</span></div>
                                <div class="fork-item"><span class="buffet-dot"></span><span>Home-cooked Honey-Roast Ham</span></div>
                                <div class="fork-item"><span class="buffet-dot"></span><span>Indonesian Chicken Coconut Curry</span></div>
                                <div class="fork-item"><span class="buffet-dot"></span><span>Roasted Mediterranean Vegetable Quiche</span></div>
                                <div class="fork-item"><span class="buffet-dot"></span><span>Indonesian Vegetable Coconut Curry</span></div>
                            </div>
                        </div>
                        
                        <div class="fork-course">
                            <h4>Accompaniments</h4>
                            <div class="fork-items-inline">
                                <span>Potato Salad</span>
                                <span>Rice Salad</span>
                                <span>Pasta Salad</span>
                                <span>Coleslaw</span>
                                <span>Minted Petit Pois</span>
                                <span>Minted New Potatoes</span>
                            </div>
                        </div>
                        
                        <div class="fork-course">
                            <h4>Desserts</h4>
                            <div class="fork-items">
                                <div class="fork-item"><span class="buffet-dot"></span><span>Homemade Apple Pie with Sauce-Anglais and Devonshire clotted cream</span></div>
                                <div class="fork-item"><span class="buffet-dot"></span><span>Fresh Fruit Salad with Devonshire double cream</span></div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Divider -->
                    <div class="menu-divider">
                        <span></span>
                        <div class="menu-ornament small">✦</div>
                        <span></span>
                    </div>
                    
                    <!-- Option 2 -->
                    <div class="fork-buffet-option">
                        <div class="fork-option-header">
                            <div class="fork-option-title">
                                <h3>Option 2</h3>
                                <span class="fork-option-type">Hot & Cold</span>
                            </div>
                            <div class="fork-option-price">£38.95<span>/person</span></div>
                        </div>
                        
                        <div class="fork-course">
                            <h4>Starters</h4>
                            <div class="fork-items">
                                <div class="fork-item"><span class="buffet-dot"></span><span>Soup of your choice (see selection)</span></div>
                                <div class="fork-item"><span class="buffet-dot"></span><span>Ham Hock & Baby Leek Terrine with tomato and fennel chutney</span></div>
                                <div class="fork-item"><span class="buffet-dot"></span><span>Smoked Salmon, Prawn & Avocado Salad topped with a Mary-Rose sauce</span></div>
                            </div>
                        </div>
                        
                        <div class="fork-course">
                            <h4>Main Selection</h4>
                            <div class="fork-items-grid">
                                <div class="fork-item"><span class="buffet-dot"></span><span>Chinese Vegetable Spring Rolls</span></div>
                                <div class="fork-item"><span class="buffet-dot"></span><span>Chilled Roasted Sirloin of Beef served with a horseradish cream dressing</span></div>
                                <div class="fork-item"><span class="buffet-dot"></span><span>Poached Salmon with a Dijon and caper aioli</span></div>
                                <div class="fork-item"><span class="buffet-dot"></span><span>Individual Chicken Ballantine with a spinach and wild mushroom farce</span></div>
                                <div class="fork-item"><span class="buffet-dot"></span><span>Indonesian Chicken Coconut Curry</span></div>
                                <div class="fork-item"><span class="buffet-dot"></span><span>Stilton-stuffed Mushrooms</span></div>
                                <div class="fork-item"><span class="buffet-dot"></span><span>Home-cooked Honey-Roast Ham</span></div>
                                <div class="fork-item"><span class="buffet-dot"></span><span>Roasted Mediterranean Vegetable Quiche</span></div>
                                <div class="fork-item"><span class="buffet-dot"></span><span>Indonesian Vegetable Coconut Curry</span></div>
                            </div>
                        </div>
                        
                        <div class="fork-course">
                            <h4>Accompaniments</h4>
                            <div class="fork-items-inline">
                                <span>Potato Salad</span>
                                <span>Rice Salad</span>
                                <span>Pasta Salad</span>
                                <span>Coleslaw</span>
                                <span>Minted Petit Pois</span>
                                <span>Piped Cheese & Onion Baby Jacket Potatoes</span>
                            </div>
                        </div>
                        
                        <div class="fork-course">
                            <h4>Desserts</h4>
                            <div class="fork-items">
                                <div class="fork-item"><span class="buffet-dot"></span><span>Two-Tone Chocolate Torte served with a raspberry coulis</span></div>
                                <div class="fork-item"><span class="buffet-dot"></span><span>Home-made Apple Pie with Sauce-Anglais and Devonshire clotted cream</span></div>
                                <div class="fork-item"><span class="buffet-dot"></span><span>Individual Fresh Cream Strawberry Pavlova</span></div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

            <!-- Christmas Functions -->
            <div class="menu-panel" id="panel-christmas">
                <div class="elegant-menu christmas-theme">
                    <!-- Menu Header -->
                    <div class="christmas-menu-header">
                        <div class="christmas-star">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                            </svg>
                        </div>
                        <h2>Christmas Function Menu</h2>
                        <p class="christmas-subtitle">Ashton Court Hotel 2024/25</p>
                    </div>
                    
                    <!-- Pricing Options -->
                    <div class="christmas-pricing-options">
                        <div class="christmas-price-box">
                            <span class="courses">2 Course Dinner</span>
                            <span class="price">£35.00</span>
                        </div>
                        <div class="christmas-price-box featured">
                            <span class="courses">3 Course Dinner</span>
                            <span class="price">£39.50</span>
                        </div>
                    </div>
                    
                    <!-- Starters -->
                    <div class="christmas-course-section">
                        <h3>Starters</h3>
                        <div class="christmas-dishes">
                            <div class="christmas-dish">
                                <span class="buffet-dot"></span>
                                <div class="dish-content">
                                    <span class="dish-name">Broccoli Soup with Goats Cheese and Walnut</span>
                                    <span class="dish-desc">served with a crispy bread roll</span>
                                </div>
                            </div>
                            <div class="christmas-dish">
                                <span class="buffet-dot"></span>
                                <div class="dish-content">
                                    <span class="dish-name">Traditional Prawn Cocktail</span>
                                    <span class="dish-desc">with a festive twist of Scottish smoked salmon and dill</span>
                                </div>
                            </div>
                            <div class="christmas-dish">
                                <span class="buffet-dot"></span>
                                <div class="dish-content">
                                    <span class="dish-name">Pearls of Melon</span>
                                    <span class="dish-desc">with a cool minted champagne syrup</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Divider -->
                    <div class="menu-divider christmas">
                        <span></span>
                        <div class="christmas-ornament">❄</div>
                        <span></span>
                    </div>
                    
                    <!-- Main Course -->
                    <div class="christmas-course-section">
                        <h3>Main Course</h3>
                        <div class="christmas-dishes">
                            <div class="christmas-dish">
                                <span class="buffet-dot"></span>
                                <div class="dish-content">
                                    <span class="dish-name">Baked Supreme of Salmon</span>
                                    <span class="dish-desc">with roasted new potatoes, spinach and chive fish cream sauce</span>
                                </div>
                            </div>
                            <div class="christmas-dish">
                                <span class="buffet-dot"></span>
                                <div class="dish-content">
                                    <span class="dish-name">Slow-cooked Topside of British Beef</span>
                                    <span class="dish-desc">with Yorkshire pudding, horseradish sauce and Red Wine Gravy</span>
                                </div>
                            </div>
                            <div class="christmas-dish">
                                <span class="buffet-dot"></span>
                                <div class="dish-content">
                                    <span class="dish-name">Traditional Roasted Devon Turkey</span>
                                    <span class="dish-desc">with all the festive trimmings</span>
                                </div>
                            </div>
                            <div class="christmas-dish">
                                <span class="buffet-dot"></span>
                                <div class="dish-content">
                                    <span class="dish-name">Goats Cheese, Olive and Sun-Dried Tomato Tart</span>
                                    <span class="dish-desc">with a mixed salad, balsamic vinegar and new potatoes <em>(V)</em></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Divider -->
                    <div class="menu-divider christmas">
                        <span></span>
                        <div class="christmas-ornament">❄</div>
                        <span></span>
                    </div>
                    
                    <!-- Desserts -->
                    <div class="christmas-course-section">
                        <h3>Desserts</h3>
                        <div class="christmas-dishes">
                            <div class="christmas-dish">
                                <span class="buffet-dot"></span>
                                <div class="dish-content">
                                    <span class="dish-name">Warm Chocolate Brownie</span>
                                    <span class="dish-desc">with lashings of rich chocolate sauce & vanilla ice-cream</span>
                                </div>
                            </div>
                            <div class="christmas-dish">
                                <span class="buffet-dot"></span>
                                <div class="dish-content">
                                    <span class="dish-name">Steamed Christmas Pudding</span>
                                    <span class="dish-desc">with brandy sauce, topped with Devonshire clotted cream</span>
                                </div>
                            </div>
                            <div class="christmas-dish">
                                <span class="buffet-dot"></span>
                                <div class="dish-content">
                                    <span class="dish-name">Lemon Tart</span>
                                    <span class="dish-desc">with a citrus Chantilly cream</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Included -->
                    <div class="christmas-included">
                        <div class="included-badge">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M20 6L9 17l-5-5"/>
                            </svg>
                            <span>Unlimited Coffee and Mince Pie included</span>
                        </div>
                    </div>
                    
                </div>
            </div>

            <!-- Menu Samples -->
            <div class="menu-panel" id="panel-samples">
                <div class="elegant-menu">
                    <!-- Menu Header -->
                    <div class="elegant-menu-header">
                        <div class="menu-ornament">✦</div>
                        <h2>Sample Function Menus</h2>
                        <p class="menu-intro">Example set menus for weddings and celebrations<br><em>All menus can be customised to your preferences</em></p>
                    </div>
                    
                    <!-- Sample 1: Celebration -->
                    <div class="sample-menu-full">
                        <div class="sample-menu-title">
                            <span class="sample-number">1</span>
                            <h3>Celebration Menu</h3>
                        </div>
                        
                        <div class="sample-courses-grid">
                            <div class="sample-course-section">
                                <h4>First Course</h4>
                                <div class="sample-dishes">
                                    <div class="sample-dish">
                                        <span class="dish-name">Fanned Melon & Orange Platter</span>
                                        <span class="dish-desc">served with a mango coulis</span>
                                    </div>
                                    <div class="sample-dish">
                                        <span class="dish-name">Sautéed Garlic Mushrooms</span>
                                        <span class="dish-desc">with a creamy sauce, served on a Rosemary crouton with mixed leaves</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="sample-course-section">
                                <h4>Main Course</h4>
                                <div class="sample-dishes">
                                    <div class="sample-dish">
                                        <span class="dish-name">Roasted Topside of Beef</span>
                                        <span class="dish-desc">with Yorkshire pudding and horseradish tartlet and gravy</span>
                                    </div>
                                    <div class="sample-dish">
                                        <span class="dish-name">Roasted Crown Devon Turkey</span>
                                        <span class="dish-desc">with cranberry sage and onion stuffing and pigs in blankets</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="sample-course-section">
                                <h4>To Finish</h4>
                                <div class="sample-dishes">
                                    <div class="sample-dish">
                                        <span class="dish-name">Two-tone Belgian Chocolate Torte</span>
                                        <span class="dish-desc">light and dark chocolate, blended with Devonshire clotted cream</span>
                                    </div>
                                    <div class="sample-dish">
                                        <span class="dish-name">Hot Apple Strudel</span>
                                        <span class="dish-desc">with butterscotch sauce and served with vanilla ice cream</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="sample-footer">
                            <span>Coffee or Tea and Luxury Chocolates</span>
                        </div>
                    </div>
                    
                    <!-- Divider -->
                    <div class="menu-divider">
                        <span></span>
                        <div class="menu-ornament small">✦</div>
                        <span></span>
                    </div>
                    
                    <!-- Sample 2 -->
                    <div class="sample-menu-full">
                        <div class="sample-menu-title">
                            <span class="sample-number">2</span>
                            <h3>Classic Menu</h3>
                        </div>
                        
                        <div class="sample-courses-grid">
                            <div class="sample-course-section">
                                <h4>Starters</h4>
                                <div class="sample-dishes">
                                    <div class="sample-dish">
                                        <span class="dish-name">Leek and Potato Soup</span>
                                        <span class="dish-desc">served with homemade bread</span>
                                    </div>
                                    <div class="sample-dish">
                                        <span class="dish-name">Local Fish Cakes</span>
                                        <span class="dish-desc">served with a lemon and lime salsa</span>
                                    </div>
                                    <div class="sample-dish">
                                        <span class="dish-name">Fresh Sliced and Diced Melon</span>
                                        <span class="dish-desc">and Compote of Fruits served with a mango coulis</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="sample-course-section">
                                <h4>Main Courses</h4>
                                <div class="sample-dishes">
                                    <div class="sample-dish">
                                        <span class="dish-name">Peppered Chicken Breast</span>
                                        <span class="dish-desc">finished in a rich and creamy pepper sauce</span>
                                    </div>
                                    <div class="sample-dish">
                                        <span class="dish-name">Baked Salmon Fillet</span>
                                        <span class="dish-desc">on a bed of buttered spinach and finished with a Noily Prat sauce</span>
                                    </div>
                                    <div class="sample-dish">
                                        <span class="dish-name">Char Grilled Lamb Cutlets</span>
                                        <span class="dish-desc">with rosemary, on a bed of mash in a rich gravy and mint sauce</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="sample-course-section">
                                <h4>Desserts</h4>
                                <div class="sample-dishes">
                                    <div class="sample-dish">
                                        <span class="dish-name">Cheese and Biscuits</span>
                                        <span class="dish-desc">a selection of local (and not so local) cheese</span>
                                    </div>
                                    <div class="sample-dish">
                                        <span class="dish-name">Chef's Extra Special Chocolate Brownie</span>
                                        <span class="dish-desc">served with vanilla ice cream</span>
                                    </div>
                                    <div class="sample-dish">
                                        <span class="dish-name">Baked Apple Strudel</span>
                                        <span class="dish-desc">with Cinnamon Anglaise</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="sample-footer">
                            <span>Including Unlimited Coffee</span>
                        </div>
                    </div>
                    
                    <!-- Divider -->
                    <div class="menu-divider">
                        <span></span>
                        <div class="menu-ornament small">✦</div>
                        <span></span>
                    </div>
                    
                    <!-- Sample 3 -->
                    <div class="sample-menu-full">
                        <div class="sample-menu-title">
                            <span class="sample-number">3</span>
                            <h3>Festive Menu</h3>
                        </div>
                        
                        <div class="sample-courses-grid">
                            <div class="sample-course-section">
                                <h4>Starters</h4>
                                <div class="sample-dishes">
                                    <div class="sample-dish">
                                        <span class="dish-name">Broccoli Soup with Goats Cheese and Walnut</span>
                                    </div>
                                    <div class="sample-dish">
                                        <span class="dish-name">Prawn Cocktail with Avocado and Apple Puree</span>
                                        <span class="dish-desc">with Scottish smoked salmon and dill</span>
                                    </div>
                                    <div class="sample-dish">
                                        <span class="dish-name">Pearls of Melon</span>
                                        <span class="dish-desc">with a cool minted champagne syrup</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="sample-course-section">
                                <h4>Main Course</h4>
                                <div class="sample-dishes">
                                    <div class="sample-dish">
                                        <span class="dish-name">Baked Supreme of Salmon</span>
                                        <span class="dish-desc">with roasted new potatoes, spinach and chive fish cream sauce</span>
                                    </div>
                                    <div class="sample-dish">
                                        <span class="dish-name">Slow-cooked Topside of British Beef</span>
                                        <span class="dish-desc">with Yorkshire pudding and horseradish sauce and Red Wine Gravy</span>
                                    </div>
                                    <div class="sample-dish">
                                        <span class="dish-name">Traditional Roasted Devon Turkey</span>
                                        <span class="dish-desc">with all the festive trimmings</span>
                                    </div>
                                    <div class="sample-dish">
                                        <span class="dish-name">Goats Cheese, Olive and Sun-Dried Tomato Tart</span>
                                        <span class="dish-desc">with a mixed salad, balsamic vinegar and new potatoes <em>(V)</em></span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="sample-course-section">
                                <h4>Desserts</h4>
                                <div class="sample-dishes">
                                    <div class="sample-dish">
                                        <span class="dish-name">Warm Chocolate Brownie</span>
                                        <span class="dish-desc">with lashings of rich chocolate sauce & vanilla ice-cream</span>
                                    </div>
                                    <div class="sample-dish">
                                        <span class="dish-name">Steamed Christmas Pudding</span>
                                        <span class="dish-desc">with brandy sauce, topped with Devonshire clotted cream</span>
                                    </div>
                                    <div class="sample-dish">
                                        <span class="dish-name">Lemon Tart</span>
                                        <span class="dish-desc">with a citrus Chantilly cream</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="sample-footer">
                            <span>Unlimited Coffee and Mince Pie</span>
                        </div>
                    </div>
                    
                    <!-- Divider -->
                    <div class="menu-divider">
                        <span></span>
                        <div class="menu-ornament small">✦</div>
                        <span></span>
                    </div>
                    
                    <!-- Sample 4: Premium 5-Course -->
                    <div class="sample-menu-full premium">
                        <div class="sample-menu-title">
                            <span class="sample-number">4</span>
                            <h3>Premium Five-Course Menu</h3>
                        </div>
                        
                        <div class="sample-courses-grid five-course">
                            <div class="sample-course-section">
                                <h4>First Course</h4>
                                <div class="sample-dishes">
                                    <div class="sample-dish">
                                        <span class="dish-name">Lobster Bisque Soup</span>
                                        <span class="dish-desc">suitably laced with Brandy and Cream, served with Homemade Crusty Bread and Salted Butter</span>
                                    </div>
                                    <div class="sample-dish">
                                        <span class="dish-name">Creamy Garlic Field Mushrooms</span>
                                        <span class="dish-desc">served in a Crisp Filo Pastry Basket with crispy Salad Leaves</span>
                                    </div>
                                    <div class="sample-dish">
                                        <span class="dish-name">Port and Cinnamon Mulled Melon</span>
                                        <span class="dish-desc">with Spiced and sliced Oranges</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="sample-course-section highlight">
                                <h4>Middle Remove</h4>
                                <div class="sample-dishes">
                                    <div class="sample-dish">
                                        <span class="dish-name">Tangy Champagne Sorbet</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="sample-course-section">
                                <h4>Main Remove</h4>
                                <div class="sample-dishes">
                                    <div class="sample-dish">
                                        <span class="dish-name">Roasted Devon Turkey Breast</span>
                                        <span class="dish-desc">with Pecan Nut and Apple Herb Stuffing, Brown Rice, Cranberry Dressing, Corn Kernels and Giblet Gravy</span>
                                    </div>
                                    <div class="sample-dish">
                                        <span class="dish-name">Mustard Glazed Aberdeen Angus Roasted Beef</span>
                                        <span class="dish-desc">with Horseradish Tartlet, Herbed Yorkshire Puddings and a rich Red Wine Gravy</span>
                                    </div>
                                    <div class="sample-dish">
                                        <span class="dish-name">Gently Poached Scottish Salmon Fillet</span>
                                        <span class="dish-desc">on a Fragrant Thai Risotto with a Ginger and Noilly Prat Sauce</span>
                                    </div>
                                    <div class="sample-dish">
                                        <span class="dish-name">Mixed Vegetable Strudel</span>
                                        <span class="dish-desc">with Sweet Pepper Sauce and Asparagus Spears <em>(V)</em></span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="sample-course-section">
                                <h4>Puddings</h4>
                                <div class="sample-dishes">
                                    <div class="sample-dish">
                                        <span class="dish-name">Traditional Steamed Christmas Pudding</span>
                                        <span class="dish-desc">with Clotted Cream or Custard - or both!</span>
                                    </div>
                                    <div class="sample-dish">
                                        <span class="dish-name">Rich Dark Chocolate Rum and Walnut Torte</span>
                                        <span class="dish-desc">with Blackcurrant Coulis and Strawberry</span>
                                    </div>
                                    <div class="sample-dish">
                                        <span class="dish-name">Brandy Snap Manger</span>
                                        <span class="dish-desc">with Wild Berry Sorbet, Fresh Fruit and 'Bethlehem' Clotted Cream</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="sample-footer premium">
                            <span>Filter Coffee, Luxury Chocolates and Mince Pies with Clotted Cream</span>
                        </div>
                    </div>
                    
                    <!-- Divider -->
                    <div class="menu-divider">
                        <span></span>
                        <div class="menu-ornament small">✦</div>
                        <span></span>
                    </div>
                    
                    <!-- Sample 5: The Lap Menu -->
                    <div class="sample-menu-full">
                        <div class="sample-menu-title">
                            <span class="sample-number">5</span>
                            <h3>The Four Course "Lap" Menu</h3>
                        </div>
                        
                        <div class="sample-courses-grid four-course">
                            <div class="sample-course-section">
                                <h4>1st Lap</h4>
                                <div class="sample-dishes">
                                    <div class="sample-dish">
                                        <span class="dish-name">Pea and 'British' (Porky Down) Ham Soup</span>
                                        <span class="dish-desc">with homemade bread and best butter</span>
                                    </div>
                                    <div class="sample-dish">
                                        <span class="dish-name">Sautéed Garlic Mushrooms in a Creamy Sauce</span>
                                        <span class="dish-desc">in a Crisp Filo Basket with Bacon & Spinach</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="sample-course-section">
                                <h4>2nd Lap</h4>
                                <p class="course-note">All served with a selection of fresh Potatoes and Vegetables</p>
                                <div class="sample-dishes">
                                    <div class="sample-dish">
                                        <span class="dish-name">Roasted Devon Turkey</span>
                                        <span class="dish-desc">with Cranberry Sauce & Sage & Onion Stuffing with Smoked Bacon Rolls and Traditional Gravy</span>
                                    </div>
                                    <div class="sample-dish">
                                        <span class="dish-name">Traditional British Roast Beef</span>
                                        <span class="dish-desc">with Horseradish Tartlet, Herbed Yorkshire Puddings and Red Wine Gravy</span>
                                    </div>
                                    <div class="sample-dish">
                                        <span class="dish-name">Mixed Vegetable Strudel</span>
                                        <span class="dish-desc">Filo Pastry Rolled with Herbed Vegetables, Asparagus Spears on Sweet Pepper and Cream Sauce <em>(V)</em></span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="sample-course-section">
                                <h4>3rd Lap</h4>
                                <div class="sample-dishes">
                                    <div class="sample-dish">
                                        <span class="dish-name">Best Bramley Apple Crumble</span>
                                        <span class="dish-desc">with Devon Clotted Cream and Custard</span>
                                    </div>
                                    <div class="sample-dish">
                                        <span class="dish-name">Olde English Spotted Dick</span>
                                        <span class="dish-desc">with Custard and Devon Clotted Cream</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="sample-course-section">
                                <h4>4th Lap</h4>
                                <div class="sample-dishes">
                                    <div class="sample-dish">
                                        <span class="dish-name">Cheese Selection</span>
                                        <span class="dish-desc">Local and nearby County Cheeses served with Biscuits, Celery and Apple</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="sample-footer">
                            <span>Unlimited after Dinner Fresh Coffee served with Luxury Biscuits</span>
                        </div>
                    </div>
                    
                </div>
            </div>

            <!-- Bespoke Functions -->
            <div class="menu-panel" id="panel-bespoke">
                <div class="elegant-menu">
                    <!-- Menu Header -->
                    <div class="elegant-menu-header">
                        <div class="menu-ornament">✦</div>
                        <h2>Create Your Bespoke Function</h2>
                        <p class="menu-intro">Menu choices to design your perfect celebration<br><em>Fixed-price unless supplement stated</em></p>
                    </div>
                    
                    <!-- First Course -->
                    <div class="bespoke-section">
                        <div class="bespoke-section-header">
                            <h3>First Course</h3>
                        </div>
                        <div class="bespoke-items-grid">
                            <div class="bespoke-item">
                                <span class="buffet-dot"></span>
                                <div class="item-content">
                                    <span class="item-name">Soup of your choice</span>
                                    <span class="item-desc">see list of soups for choices, served with crusty rolls</span>
                                </div>
                            </div>
                            <div class="bespoke-item">
                                <span class="buffet-dot"></span>
                                <div class="item-content">
                                    <span class="item-name">Fanned Melon & Orange Platter</span>
                                    <span class="item-desc">with mango coulis</span>
                                </div>
                            </div>
                            <div class="bespoke-item">
                                <span class="buffet-dot"></span>
                                <div class="item-content">
                                    <span class="item-name">Local Fish Cakes</span>
                                    <span class="item-desc">with a lemon and lime salsa</span>
                                </div>
                            </div>
                            <div class="bespoke-item supplement">
                                <span class="buffet-dot"></span>
                                <div class="item-content">
                                    <span class="item-name">Lobster Bisque Soup</span>
                                    <span class="item-desc">suitably laced with brandy and cream, served with crusty bread and salted butter</span>
                                </div>
                                <span class="supplement-badge">+£2.00</span>
                            </div>
                            <div class="bespoke-item">
                                <span class="buffet-dot"></span>
                                <div class="item-content">
                                    <span class="item-name">Sautéed Garlic Mushrooms</span>
                                    <span class="item-desc">with a creamy sauce, served on a Rosemary crouton with mixed leaves</span>
                                </div>
                            </div>
                            <div class="bespoke-item">
                                <span class="buffet-dot"></span>
                                <div class="item-content">
                                    <span class="item-name">Italian Tuna with Cannellini Beans</span>
                                    <span class="item-desc">and Pasta Salad served with crusty bread</span>
                                </div>
                            </div>
                            <div class="bespoke-item supplement">
                                <span class="buffet-dot"></span>
                                <div class="item-content">
                                    <span class="item-name">Traditional Prawn Cocktail</span>
                                    <span class="item-desc">with Marie-Rose sauce on a bed of shredded lettuce with fresh lemon and brown bread</span>
                                </div>
                                <span class="supplement-badge">+£1.00</span>
                            </div>
                            <div class="bespoke-item">
                                <span class="buffet-dot"></span>
                                <div class="item-content">
                                    <span class="item-name">Egg and Prawn Mayonnaise</span>
                                    <span class="item-desc">with diced tomato, lettuce and brown bread</span>
                                </div>
                            </div>
                            <div class="bespoke-item">
                                <span class="buffet-dot"></span>
                                <div class="item-content">
                                    <span class="item-name">Coronation Chicken</span>
                                    <span class="item-desc">served with toasted crusty seeded bread and watercress</span>
                                </div>
                            </div>
                            <div class="bespoke-item">
                                <span class="buffet-dot"></span>
                                <div class="item-content">
                                    <span class="item-name">Avocado and Smoked Bacon Salad</span>
                                    <span class="item-desc">served with garlic croutons and drizzled with pesto vinaigrette</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Palate Cleanser -->
                    <div class="bespoke-highlight-box">
                        <div class="highlight-icon">❄</div>
                        <div class="highlight-content">
                            <span class="highlight-name">Palate Cleanser: Tangy Lemon Sorbet</span>
                            <span class="highlight-supplement">+£5.00 supplement</span>
                        </div>
                    </div>
                    
                    <!-- Divider -->
                    <div class="menu-divider">
                        <span></span>
                        <div class="menu-ornament small">✦</div>
                        <span></span>
                    </div>
                    
                    <!-- Main Course -->
                    <div class="bespoke-section">
                        <div class="bespoke-section-header">
                            <h3>Main Course</h3>
                            <p class="section-note">All main courses are served (where appropriate) with a selection of fresh vegetables and roasted or new potatoes</p>
                        </div>
                        <div class="bespoke-items-grid">
                            <div class="bespoke-item">
                                <span class="buffet-dot"></span>
                                <div class="item-content">
                                    <span class="item-name">Roasted Local Pork</span>
                                    <span class="item-desc">with Apple Sauce & Sage & Onion Stuffing, served with a delicious rich gravy</span>
                                </div>
                            </div>
                            <div class="bespoke-item">
                                <span class="buffet-dot"></span>
                                <div class="item-content">
                                    <span class="item-name">Slow Braised Moroccan Lamb</span>
                                    <span class="item-desc">with roasted vegetables and cous cous with a rich gravy</span>
                                </div>
                            </div>
                            <div class="bespoke-item">
                                <span class="buffet-dot"></span>
                                <div class="item-content">
                                    <span class="item-name">Roasted Crown of Devon Turkey</span>
                                    <span class="item-desc">with cranberry sage and onion stuffing and pigs in blankets</span>
                                </div>
                            </div>
                            <div class="bespoke-item">
                                <span class="buffet-dot"></span>
                                <div class="item-content">
                                    <span class="item-name">Roasted Breast of Chicken</span>
                                    <span class="item-desc">with Cranberry and Orange Stuffing, served with bacon rolls and a rich gravy</span>
                                </div>
                            </div>
                            <div class="bespoke-item">
                                <span class="buffet-dot"></span>
                                <div class="item-content">
                                    <span class="item-name">Peppered Chicken Breast</span>
                                    <span class="item-desc">finished in a rich and creamy pepper sauce</span>
                                </div>
                            </div>
                            <div class="bespoke-item">
                                <span class="buffet-dot"></span>
                                <div class="item-content">
                                    <span class="item-name">Roasted Topside of Beef</span>
                                    <span class="item-desc">with Yorkshire pudding & horseradish tartlet and gravy</span>
                                </div>
                            </div>
                            <div class="bespoke-item">
                                <span class="buffet-dot"></span>
                                <div class="item-content">
                                    <span class="item-name">Baked Salmon Fillet</span>
                                    <span class="item-desc">on a bed of buttered spinach and finished with a prawn and prosecco sauce</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Divider -->
                    <div class="menu-divider">
                        <span></span>
                        <div class="menu-ornament small">✦</div>
                        <span></span>
                    </div>
                    
                    <!-- Vegetarian Options -->
                    <div class="bespoke-section vegetarian">
                        <div class="bespoke-section-header">
                            <h3>Main Course - Vegetarian Options</h3>
                        </div>
                        <div class="bespoke-items-grid">
                            <div class="bespoke-item">
                                <span class="buffet-dot"></span>
                                <div class="item-content">
                                    <span class="item-name">Chef's Very Special Nut Loaf</span>
                                    <span class="item-desc">with vegetable gravy</span>
                                </div>
                            </div>
                            <div class="bespoke-item">
                                <span class="buffet-dot"></span>
                                <div class="item-content">
                                    <span class="item-name">Herbed Baked Tomato and Courgette Pasta</span>
                                    <span class="item-desc">with melting Mozzarella and garlic bread</span>
                                </div>
                            </div>
                            <div class="bespoke-item">
                                <span class="buffet-dot"></span>
                                <div class="item-content">
                                    <span class="item-name">Mediterranean Roasted Vegetables</span>
                                    <span class="item-desc">served with cous cous and a harissa sauce</span>
                                </div>
                            </div>
                            <div class="bespoke-item">
                                <span class="buffet-dot"></span>
                                <div class="item-content">
                                    <span class="item-name">Vegetable Lasagne</span>
                                    <span class="item-desc">served with stir-fried leeks and herbed bread</span>
                                </div>
                            </div>
                            <div class="bespoke-item">
                                <span class="buffet-dot"></span>
                                <div class="item-content">
                                    <span class="item-name">Spinach and Potato Curry</span>
                                    <span class="item-desc">with cumin rice and naan bread</span>
                                </div>
                            </div>
                            <div class="bespoke-item">
                                <span class="buffet-dot"></span>
                                <div class="item-content">
                                    <span class="item-name">Stuffed Peppers</span>
                                    <span class="item-desc">with a duo of sweet-pepper and rustic tomato sauces</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Divider -->
                    <div class="menu-divider">
                        <span></span>
                        <div class="menu-ornament small">✦</div>
                        <span></span>
                    </div>
                    
                    <!-- Dessert -->
                    <div class="bespoke-section">
                        <div class="bespoke-section-header">
                            <h3>Dessert</h3>
                        </div>
                        <div class="bespoke-items-grid">
                            <div class="bespoke-item">
                                <span class="buffet-dot"></span>
                                <div class="item-content">
                                    <span class="item-name">Rich Belgian Chocolate Torte</span>
                                    <span class="item-desc">smooth chocolate, blended with Devonshire clotted cream</span>
                                </div>
                            </div>
                            <div class="bespoke-item">
                                <span class="buffet-dot"></span>
                                <div class="item-content">
                                    <span class="item-name">Hot Apple Strudel with Butterscotch Sauce</span>
                                    <span class="item-desc">served with vanilla ice cream</span>
                                </div>
                            </div>
                            <div class="bespoke-item">
                                <span class="buffet-dot"></span>
                                <div class="item-content">
                                    <span class="item-name">Selection of 'Home Made Ice Creams'</span>
                                    <span class="item-desc">served with Devonshire clotted cream</span>
                                </div>
                            </div>
                            <div class="bespoke-item">
                                <span class="buffet-dot"></span>
                                <div class="item-content">
                                    <span class="item-name">Zing Lemon Tart</span>
                                    <span class="item-desc">served with a raspberry coulis and vanilla ice cream</span>
                                </div>
                            </div>
                            <div class="bespoke-item">
                                <span class="buffet-dot"></span>
                                <div class="item-content">
                                    <span class="item-name">Traditional Apple and Raspberry Crumble</span>
                                    <span class="item-desc">served with custard or vanilla ice cream</span>
                                </div>
                            </div>
                            <div class="bespoke-item">
                                <span class="buffet-dot"></span>
                                <div class="item-content">
                                    <span class="item-name">Belgium Chocolate Fudgecake</span>
                                    <span class="item-desc">served with a warm chocolate sauce</span>
                                </div>
                            </div>
                            <div class="bespoke-item">
                                <span class="buffet-dot"></span>
                                <div class="item-content">
                                    <span class="item-name">Chef's Extra Special Chocolate Brownie</span>
                                    <span class="item-desc">served with vanilla ice cream</span>
                                </div>
                            </div>
                            <div class="bespoke-item">
                                <span class="buffet-dot"></span>
                                <div class="item-content">
                                    <span class="item-name">Fresh Fruit Salad</span>
                                    <span class="item-desc">served with Devonshire clotted cream</span>
                                </div>
                            </div>
                            <div class="bespoke-item">
                                <span class="buffet-dot"></span>
                                <div class="item-content">
                                    <span class="item-name">3 Cheese Selection</span>
                                    <span class="item-desc">with biscuits, celery, grapes and apple</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Note -->
                    <div class="bespoke-note">
                        <p><strong>The above selection is just a small choice of the many options.</strong><br>Please see sample menus or discuss alternatives with our function planner.</p>
                    </div>
                    
                    <!-- CTA -->
                    <div class="bespoke-cta-box">
                        <h3>Let's Create Something Special</h3>
                        <p>Contact our events team to start planning your bespoke celebration.</p>
                        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="menu-enquire-btn">
                            <span>Start Planning Your Event</span>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                        </a>
                    </div>
                    
                </div>
            </div>

        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="menus-cta-section">
    <div class="container">
        <div class="menus-cta-content" data-animate="fade-up">
            <h2><?php echo esc_html($f('menus_cta_title', 'Ready to Plan Your Event?')); ?></h2>
            <p><?php echo esc_html($f('menus_cta_text', 'Our dedicated events team is here to help create your perfect celebration. Contact us to discuss your requirements.')); ?></p>
            <div class="menus-cta-buttons">
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-primary">
                    <span>Get in Touch</span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                </a>
                <a href="tel:+441395263002" class="btn btn-outline-light">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="18" height="18">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                    </svg>
                    <span>+44 (0)1395 263002</span>
                </a>
            </div>
        </div>
    </div>
</section>

<style>
/* Menus Page Hero */
.menus-page-hero {
    position: relative;
    height: 50vh;
    min-height: 400px;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}

.menus-hero-bg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

.menus-hero-bg img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.menus-hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, 
        rgba(45, 80, 80, 0.92) 0%, 
        rgba(30, 60, 60, 0.88) 50%, 
        rgba(20, 45, 45, 0.85) 100%);
}

.menus-hero-content {
    position: relative;
    z-index: 2;
    text-align: center;
    color: white;
    padding: var(--space-xl);
}

.menus-hero-content .section-tagline {
    color: var(--color-accent-light);
    font-size: var(--text-sm);
    letter-spacing: 0.2em;
    text-transform: uppercase;
    margin-bottom: var(--space-md);
    display: block;
}

.menus-hero-title {
    font-family: var(--font-heading);
    font-size: var(--text-5xl);
    font-weight: 400;
    color: white;
    margin-bottom: var(--space-md);
}

.menus-hero-subtitle {
    font-size: var(--text-lg);
    color: rgba(255, 255, 255, 0.8);
    max-width: 500px;
    margin: 0 auto;
}

/* Tabs Section */
.menus-tabs-section {
    padding: var(--space-5xl) 0;
    background: var(--color-bg);
}

.menus-intro {
    text-align: center;
    max-width: 700px;
    margin: 0 auto var(--space-4xl);
}

.menus-intro p {
    font-size: var(--text-lg);
    color: var(--color-text-body);
    line-height: 1.8;
}

/* Menu Buttons */
.menu-buttons-wrapper {
    margin-bottom: var(--space-4xl);
    overflow-x: auto;
    padding-bottom: 10px;
}

.menu-buttons-grid {
    display: flex;
    flex-wrap: nowrap;
    justify-content: center;
    gap: 12px;
    min-width: max-content;
}

.menu-tab-btn {
    display: flex;
    align-items: center;
    gap: 8px;
    white-space: nowrap;
    padding: 12px 20px;
    background: white;
    border: 2px solid var(--color-border);
    border-radius: 50px;
    cursor: pointer;
    transition: all 0.3s ease;
    font-family: var(--font-body);
    font-size: 0.85rem;
    font-weight: 500;
    color: var(--color-text-body);
}

.menu-tab-btn svg {
    width: 20px;
    height: 20px;
    color: var(--color-accent);
    transition: all 0.3s ease;
}

.menu-tab-btn:hover {
    border-color: var(--color-accent);
    background: var(--color-bg-alt);
    transform: translateY(-2px);
}

.menu-tab-btn.active {
    background: linear-gradient(135deg, var(--color-accent) 0%, var(--color-accent-dark) 100%);
    border-color: var(--color-accent);
    color: white;
    box-shadow: 0 4px 20px rgba(184, 149, 107, 0.4);
}

.menu-tab-btn.active svg {
    color: white;
}

.menu-tab-btn.featured {
    border-color: var(--color-accent);
    background: linear-gradient(135deg, rgba(184, 149, 107, 0.1) 0%, white 100%);
}

.menu-tab-btn.featured::before {
    content: '★';
    color: var(--color-accent);
    font-size: 12px;
}

.menu-tab-btn.featured.active {
    background: linear-gradient(135deg, #1a3c34 0%, #0f2820 100%) !important;
    border-color: #1a3c34 !important;
    color: white !important;
}

.menu-tab-btn.featured.active svg {
    color: #ffd700 !important;
}

.menu-tab-btn.featured.active::before {
    color: #ffd700;
}

/* Menu Panels */
.menu-panels-container {
    max-width: 1000px;
    margin: 0 auto;
}

.menu-panel {
    display: none;
    animation: fadeIn 0.4s ease;
}

.menu-panel.active {
    display: block;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.menu-panel-header {
    text-align: center;
    margin-bottom: var(--space-3xl);
    padding-bottom: var(--space-2xl);
    border-bottom: 1px solid var(--color-border);
}

.menu-panel-header h2 {
    font-family: var(--font-heading);
    font-size: var(--text-4xl);
    color: var(--color-text);
    margin-bottom: var(--space-sm);
}

.menu-panel-subtitle {
    font-size: var(--text-lg);
    color: var(--color-text-muted);
}

.menu-panel-content {
    background: white;
    padding: var(--space-3xl);
    border-radius: var(--radius-xl);
    box-shadow: var(--shadow-lg);
}

.menu-description {
    font-size: var(--text-base);
    color: var(--color-text-body);
    line-height: 1.7;
    margin-bottom: var(--space-2xl);
    text-align: center;
    max-width: 700px;
    margin-left: auto;
    margin-right: auto;
}

/* ============================================
   ELEGANT MENU DESIGN
   ============================================ */
.elegant-menu {
    margin: 0 calc(-50vw + 50%);
    width: 100vw;
    background: #faf9f7;
    padding: 60px 0;
}

/* Menu Header */
.elegant-menu-header {
    text-align: center;
    max-width: 700px;
    margin: 0 auto 50px;
    padding: 0 20px;
}

.menu-ornament {
    color: var(--color-accent);
    font-size: 24px;
    margin-bottom: 20px;
    opacity: 0.8;
}

.menu-ornament.small {
    font-size: 16px;
    margin: 0;
}

.elegant-menu-header h2 {
    font-family: var(--font-heading);
    font-size: 2.8rem;
    font-weight: 400;
    color: var(--color-text);
    margin-bottom: 20px;
    letter-spacing: 0.02em;
}

.menu-intro {
    font-size: 1rem;
    color: var(--color-text-muted);
    line-height: 1.8;
}

/* Packages */
.elegant-packages {
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 40px;
}

.package-row {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
    margin-bottom: 20px;
}

.package-row:last-child {
    margin-bottom: 0;
}

@media (max-width: 1100px) {
    .package-row {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 600px) {
    .package-row {
        grid-template-columns: 1fr;
    }
    .elegant-packages {
        padding: 0 20px;
    }
}

.package-box {
    position: relative;
    background: white;
    padding: 30px;
    border-radius: 4px;
    box-shadow: 0 2px 20px rgba(0,0,0,0.04);
}

.package-box.featured {
    background: linear-gradient(135deg, #fffbf5 0%, white 100%);
    box-shadow: 0 2px 30px rgba(184, 149, 107, 0.15);
}

.best-value-tag {
    position: absolute;
    top: -10px;
    left: 30px;
    background: var(--color-accent);
    color: white;
    font-size: 11px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    padding: 5px 15px;
    border-radius: 3px;
}

.package-box h3 {
    font-family: var(--font-heading);
    font-size: 1.4rem;
    font-weight: 400;
    color: var(--color-text);
    margin-bottom: 20px;
    padding-bottom: 15px;
    border-bottom: 1px solid #eee;
    display: flex;
    justify-content: space-between;
    align-items: baseline;
    flex-wrap: wrap;
    gap: 10px;
}

.pkg-price {
    font-size: 1rem;
    color: var(--color-accent-dark);
}

.package-details {
    display: flex;
    flex-direction: column;
    gap: 12px;
}

.pkg-line {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    font-size: 0.95rem;
    color: var(--color-text-body);
    line-height: 1.5;
}

.pkg-line.highlight {
    color: var(--color-text);
}

.pkg-dot {
    width: 6px;
    height: 6px;
    background: var(--color-border-dark);
    border-radius: 50%;
    margin-top: 8px;
    flex-shrink: 0;
}

.pkg-dot.gold {
    background: var(--color-accent);
}

.pkg-line em {
    color: var(--color-text-muted);
    font-style: italic;
}

.pkg-line strong {
    color: var(--color-accent-dark);
}

/* Divider */
.menu-divider {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 20px;
    margin: 50px auto;
    max-width: 300px;
    padding: 0 20px;
}

.menu-divider span {
    flex: 1;
    height: 1px;
    background: var(--color-border);
}

/* Individual Prices */
.elegant-prices {
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 40px;
}

@media (max-width: 600px) {
    .elegant-prices {
        padding: 0 20px;
    }
}

.elegant-prices h3 {
    font-family: var(--font-heading);
    font-size: 1.6rem;
    font-weight: 400;
    color: var(--color-text);
    text-align: center;
    margin-bottom: 30px;
}

.price-list {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 15px;
}

@media (max-width: 1100px) {
    .price-list {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 600px) {
    .price-list {
        grid-template-columns: 1fr;
    }
}

.price-row {
    display: flex;
    align-items: baseline;
    padding: 15px 20px;
    background: white;
    border-radius: 4px;
    box-shadow: 0 2px 15px rgba(0,0,0,0.04);
}

.price-row.free {
    background: linear-gradient(135deg, #f1f8e9 0%, white 100%);
}

.price-name {
    font-size: 0.95rem;
    color: var(--color-text-body);
}

.price-dots {
    flex: 1;
    border-bottom: 1px dotted var(--color-border);
    margin: 0 15px 5px;
    min-width: 30px;
}

.price-value {
    font-family: var(--font-heading);
    font-size: 1.1rem;
    color: var(--color-accent-dark);
    white-space: nowrap;
}

.price-value small {
    font-size: 0.8rem;
    color: var(--color-text-muted);
    font-family: var(--font-body);
}

.price-row.free .price-value {
    color: #4caf50;
}

/* Notes */
.elegant-notes {
    max-width: 1400px;
    margin: 40px auto 0;
    padding: 25px 40px;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 30px;
}

@media (max-width: 800px) {
    .elegant-notes {
        grid-template-columns: 1fr;
        padding: 25px 20px;
    }
}

.elegant-notes p {
    font-size: 0.9rem;
    color: var(--color-text-muted);
    line-height: 1.7;
    margin: 0;
    padding: 20px 25px;
    background: white;
    border-radius: 4px;
    box-shadow: 0 2px 15px rgba(0,0,0,0.04);
}

.elegant-notes strong {
    color: var(--color-text);
    display: block;
    margin-bottom: 8px;
}

/* Buffet Selection Grid */
.buffet-selection-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 12px;
}

@media (max-width: 900px) {
    .buffet-selection-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 500px) {
    .buffet-selection-grid {
        grid-template-columns: 1fr;
    }
}

.buffet-item {
    display: flex;
    align-items: flex-start;
    gap: 10px;
    padding: 12px 15px;
    background: white;
    border-radius: 4px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.03);
    font-size: 0.9rem;
    color: var(--color-text-body);
    line-height: 1.4;
}

.buffet-dot {
    width: 6px;
    height: 6px;
    background: var(--color-accent);
    border-radius: 50%;
    flex-shrink: 0;
    margin-top: 7px;
}

/* Canapé Options */
.canape-option-section {
    max-width: 1200px;
    margin: 0 auto 30px;
    padding: 0 40px;
}

@media (max-width: 600px) {
    .canape-option-section {
        padding: 0 20px;
    }
}

.canape-option-header {
    display: flex;
    justify-content: space-between;
    align-items: baseline;
    margin-bottom: 20px;
    padding-bottom: 12px;
    border-bottom: 1px solid var(--color-border);
    flex-wrap: wrap;
    gap: 10px;
}

.canape-option-header h3 {
    font-family: var(--font-heading);
    font-size: 1.4rem;
    font-weight: 400;
    color: var(--color-text);
    margin: 0;
}

.canape-price {
    font-family: var(--font-heading);
    font-size: 1.1rem;
    color: var(--color-accent-dark);
}

.canape-price small {
    font-size: 0.85rem;
    color: var(--color-text-muted);
}

.canape-items-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 10px;
}

@media (max-width: 900px) {
    .canape-items-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 500px) {
    .canape-items-grid {
        grid-template-columns: 1fr;
    }
}

.canape-item {
    display: flex;
    align-items: flex-start;
    gap: 10px;
    padding: 10px 15px;
    background: white;
    border-radius: 4px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.03);
    font-size: 0.85rem;
    color: var(--color-text-body);
    line-height: 1.4;
}

.canape-item em {
    color: var(--color-accent);
    font-style: normal;
    font-weight: 500;
}

/* Nibbles */
.nibbles-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 15px;
}

@media (max-width: 800px) {
    .nibbles-grid {
        grid-template-columns: 1fr;
    }
}

.nibble-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 20px;
    background: white;
    border-radius: 4px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.03);
    gap: 15px;
}

.nibble-name {
    font-size: 0.9rem;
    color: var(--color-text-body);
}

.nibble-price {
    font-family: var(--font-heading);
    font-size: 1rem;
    color: var(--color-accent-dark);
    white-space: nowrap;
}

/* Vegan Menu */
.vegan-menu-section {
    max-width: 1200px;
    margin: 0 auto 30px;
    padding: 0 40px;
}

@media (max-width: 600px) {
    .vegan-menu-section {
        padding: 0 20px;
    }
}

.vegan-section-header {
    margin-bottom: 20px;
    padding-bottom: 12px;
    border-bottom: 1px solid var(--color-border);
}

.vegan-section-header h3 {
    font-family: var(--font-heading);
    font-size: 1.5rem;
    font-weight: 400;
    color: var(--color-text);
    margin: 0;
    text-align: center;
}

.vegan-items-grid {
    display: grid;
    gap: 10px;
}

.vegan-items-grid.four-col {
    grid-template-columns: repeat(4, 1fr);
}

.vegan-items-grid.three-col {
    grid-template-columns: repeat(3, 1fr);
}

.vegan-items-grid.two-col {
    grid-template-columns: repeat(2, 1fr);
}

@media (max-width: 1000px) {
    .vegan-items-grid.four-col {
        grid-template-columns: repeat(3, 1fr);
    }
}

@media (max-width: 800px) {
    .vegan-items-grid.four-col,
    .vegan-items-grid.three-col {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 500px) {
    .vegan-items-grid.four-col,
    .vegan-items-grid.three-col,
    .vegan-items-grid.two-col {
        grid-template-columns: 1fr;
    }
}

.vegan-item {
    display: flex;
    align-items: flex-start;
    gap: 10px;
    padding: 10px 15px;
    background: white;
    border-radius: 4px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.03);
    font-size: 0.85rem;
    color: var(--color-text-body);
    line-height: 1.4;
}

/* Fork Buffet */
.fork-buffet-option {
    max-width: 1200px;
    margin: 0 auto 40px;
    padding: 30px 40px;
    background: white;
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.05);
}

@media (max-width: 600px) {
    .fork-buffet-option {
        padding: 20px;
        margin: 0 20px 40px;
    }
}

.fork-option-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: 30px;
    padding-bottom: 20px;
    border-bottom: 2px solid var(--color-accent);
    flex-wrap: wrap;
    gap: 15px;
}

.fork-option-title h3 {
    font-family: var(--font-heading);
    font-size: 1.8rem;
    font-weight: 400;
    color: var(--color-text);
    margin: 0 0 5px 0;
}

.fork-option-type {
    display: inline-block;
    font-size: 0.85rem;
    color: var(--color-accent-dark);
    background: rgba(184, 157, 107, 0.1);
    padding: 4px 12px;
    border-radius: 20px;
}

.fork-option-price {
    font-family: var(--font-heading);
    font-size: 2rem;
    color: var(--color-accent-dark);
}

.fork-option-price span {
    font-size: 1rem;
    color: var(--color-text-muted);
}

.fork-course {
    margin-bottom: 25px;
}

.fork-course:last-child {
    margin-bottom: 0;
}

.fork-course h4 {
    font-family: var(--font-heading);
    font-size: 1.1rem;
    font-weight: 500;
    color: var(--color-text);
    margin: 0 0 15px 0;
    padding-bottom: 8px;
    border-bottom: 1px solid var(--color-border);
}

.fork-items {
    display: flex;
    flex-direction: column;
    gap: 8px;
}

.fork-items-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 10px;
}

@media (max-width: 900px) {
    .fork-items-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 500px) {
    .fork-items-grid {
        grid-template-columns: 1fr;
    }
}

.fork-item {
    display: flex;
    align-items: flex-start;
    gap: 10px;
    padding: 10px 15px;
    background: var(--color-cream);
    border-radius: 4px;
    font-size: 0.85rem;
    color: var(--color-text-body);
    line-height: 1.4;
}

.fork-items-inline {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
}

.fork-items-inline span {
    display: inline-block;
    padding: 8px 16px;
    background: var(--color-cream);
    border-radius: 20px;
    font-size: 0.85rem;
    color: var(--color-text-body);
}


/* Packages Grid (Drinks) */
.packages-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: var(--space-xl);
    margin-bottom: var(--space-3xl);
}

.packages-grid.four-col {
    grid-template-columns: repeat(4, 1fr);
}

@media (max-width: 1200px) {
    .packages-grid.four-col {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 768px) {
    .packages-grid,
    .packages-grid.four-col {
        grid-template-columns: 1fr;
    }
}

.package-card {
    position: relative;
    padding: var(--space-xl);
    border-radius: var(--radius-lg);
    text-align: center;
    transition: all 0.3s ease;
}

.package-card.pack-one {
    background: linear-gradient(135deg, #e8f4f4 0%, #d4eaea 100%);
    border: 2px solid #a8d4d4;
}

.package-card.pack-two {
    background: linear-gradient(135deg, #f0e8f4 0%, #e4d4ea 100%);
    border: 2px solid #c4a8d4;
}

.package-card.pack-three {
    background: linear-gradient(135deg, #f4f0e8 0%, #eae4d4 100%);
    border: 2px solid #d4c8a8;
}

.package-card.pack-four {
    background: linear-gradient(135deg, #fff9e6 0%, #ffeeba 100%);
    border: 2px solid var(--color-accent);
}

.package-card.bronze {
    background: linear-gradient(135deg, #f5f0e8 0%, #ebe4d8 100%);
    border: 2px solid #d4c4a8;
}

.package-card.silver {
    background: linear-gradient(135deg, #f8f8f8 0%, #e8e8e8 100%);
    border: 2px solid #c0c0c0;
}

.package-card.gold {
    background: linear-gradient(135deg, #fff9e6 0%, #ffeeba 100%);
    border: 2px solid var(--color-accent);
}

.package-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-lg);
}

.package-ribbon {
    position: absolute;
    top: -10px;
    left: 50%;
    transform: translateX(-50%);
    background: var(--color-accent);
    color: white;
    padding: 5px 15px;
    font-size: var(--text-xs);
    font-weight: 600;
    border-radius: 20px;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    white-space: nowrap;
}

.package-badge {
    font-family: var(--font-heading);
    font-size: var(--text-xl);
    font-weight: 500;
    margin-bottom: var(--space-sm);
    color: var(--color-text);
}

.package-price {
    font-family: var(--font-heading);
    font-size: var(--text-3xl);
    font-weight: 400;
    color: var(--color-accent-dark);
    margin-bottom: var(--space-md);
}

.package-price span {
    font-size: var(--text-sm);
    color: var(--color-text-muted);
}

.package-features {
    list-style: none;
    padding: 0;
    margin: 0;
    text-align: left;
}

.package-features li {
    padding: var(--space-xs) 0;
    padding-left: var(--space-lg);
    position: relative;
    color: var(--color-text-body);
    font-size: var(--text-xs);
    border-bottom: 1px solid rgba(0,0,0,0.05);
    line-height: 1.4;
}

.package-features li:last-child {
    border-bottom: none;
}

.package-features li::before {
    content: '✓';
    position: absolute;
    left: 0;
    color: var(--color-accent);
    font-weight: bold;
}

/* Drinks Pricing Table */
.drinks-pricing-table {
    margin: var(--space-3xl) 0;
    padding: var(--space-2xl);
    background: var(--color-bg-alt);
    border-radius: var(--radius-lg);
}

.drinks-pricing-table h3 {
    font-family: var(--font-heading);
    font-size: var(--text-xl);
    color: var(--color-text);
    text-align: center;
    margin-bottom: var(--space-xl);
    padding-bottom: var(--space-md);
    border-bottom: 2px solid var(--color-accent-light);
}

.pricing-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: var(--space-md);
}

@media (max-width: 1024px) {
    .pricing-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 600px) {
    .pricing-grid {
        grid-template-columns: 1fr;
    }
}

.price-item {
    display: flex;
    flex-direction: column;
    padding: var(--space-md);
    background: white;
    border-radius: var(--radius-md);
    border: 1px solid var(--color-border);
    text-align: center;
    transition: all 0.3s ease;
}

.price-item:hover {
    border-color: var(--color-accent);
    transform: translateY(-2px);
}

.price-item.highlight {
    background: linear-gradient(135deg, #e8f5e9 0%, #c8e6c9 100%);
    border-color: #4caf50;
}

.drink-name {
    font-size: var(--text-sm);
    color: var(--color-text);
    font-weight: 500;
    margin-bottom: var(--space-xs);
}

.drink-price {
    font-family: var(--font-heading);
    font-size: var(--text-lg);
    color: var(--color-accent-dark);
}

.drink-price small {
    font-size: var(--text-xs);
    color: var(--color-text-muted);
    display: block;
}

/* Drinks Note */
.drinks-note {
    margin: var(--space-2xl) 0;
    padding: var(--space-xl);
    background: linear-gradient(135deg, rgba(184, 149, 107, 0.1) 0%, rgba(184, 149, 107, 0.05) 100%);
    border-left: 4px solid var(--color-accent);
    border-radius: 0 var(--radius-md) var(--radius-md) 0;
}

.drinks-note p {
    font-size: var(--text-sm);
    color: var(--color-text-body);
    margin: 0 0 var(--space-sm);
    line-height: 1.6;
}

.drinks-note p:last-child {
    margin-bottom: 0;
}

.drinks-note strong {
    color: var(--color-accent-dark);
}

/* Menu Columns */
.menu-columns {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: var(--space-3xl);
    margin-bottom: var(--space-2xl);
}

.menu-columns.three {
    grid-template-columns: repeat(3, 1fr);
}

@media (max-width: 768px) {
    .menu-columns,
    .menu-columns.three {
        grid-template-columns: 1fr;
    }
}

.menu-column h3 {
    font-family: var(--font-heading);
    font-size: var(--text-xl);
    color: var(--color-accent-dark);
    margin-bottom: var(--space-lg);
    padding-bottom: var(--space-sm);
    border-bottom: 2px solid var(--color-accent-light);
}

.menu-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.menu-list li {
    padding: var(--space-sm) 0;
    padding-left: var(--space-lg);
    position: relative;
    color: var(--color-text-body);
    font-size: var(--text-sm);
    border-bottom: 1px solid var(--color-border);
}

.menu-list li:last-child {
    border-bottom: none;
}

.menu-list li::before {
    content: '';
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    width: 6px;
    height: 6px;
    background: var(--color-accent);
    border-radius: 50%;
}

/* Pricing Highlight */
.pricing-highlight {
    background: var(--color-bg-alt);
    padding: var(--space-xl);
    border-radius: var(--radius-lg);
    text-align: center;
    margin-bottom: var(--space-2xl);
}

.pricing-highlight strong {
    display: block;
    font-family: var(--font-heading);
    font-size: var(--text-2xl);
    color: var(--color-accent-dark);
    margin-bottom: var(--space-xs);
}

.pricing-highlight span {
    color: var(--color-text-muted);
    font-size: var(--text-sm);
}

/* Pricing Tiers */
.pricing-tiers {
    display: flex;
    justify-content: center;
    gap: var(--space-xl);
    margin-bottom: var(--space-2xl);
    flex-wrap: wrap;
}

.tier {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: var(--space-lg) var(--space-2xl);
    background: var(--color-bg-alt);
    border-radius: var(--radius-lg);
    border: 2px solid var(--color-border);
    transition: all 0.3s ease;
}

.tier:hover {
    border-color: var(--color-accent);
    transform: translateY(-3px);
}

.tier-amount {
    font-weight: 600;
    color: var(--color-text);
    margin-bottom: var(--space-xs);
}

.tier-price {
    font-family: var(--font-heading);
    font-size: var(--text-xl);
    color: var(--color-accent-dark);
}

/* Course Items (for Vegan, Sunday) */
.menu-courses {
    margin-bottom: var(--space-2xl);
}

.course-section {
    margin-bottom: var(--space-2xl);
}

.course-section:last-child {
    margin-bottom: 0;
}

.course-section h3 {
    font-family: var(--font-heading);
    font-size: var(--text-xl);
    color: var(--color-accent-dark);
    margin-bottom: var(--space-lg);
    padding-bottom: var(--space-sm);
    border-bottom: 2px solid var(--color-accent-light);
}

.course-items {
    display: flex;
    flex-direction: column;
}

.course-item {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    padding: var(--space-md) 0;
    border-bottom: 1px solid var(--color-border);
}

.course-item:last-child {
    border-bottom: none;
}

.item-info {
    flex: 1;
}

.item-name {
    display: block;
    font-weight: 500;
    color: var(--color-text);
    margin-bottom: 2px;
}

.item-desc {
    font-size: var(--text-sm);
    color: var(--color-text-muted);
}

.item-price {
    font-family: var(--font-heading);
    font-size: var(--text-lg);
    color: var(--color-accent);
    margin-left: var(--space-lg);
    white-space: nowrap;
}

/* Christmas Specific */
.christmas-theme {
    background: linear-gradient(180deg, #f8f5f0 0%, #fff 100%);
}

.christmas-menu-header {
    text-align: center;
    padding: 50px 40px;
    background: linear-gradient(135deg, #1a3c34 0%, #0f2820 100%);
    margin: -60px -60px 40px -60px;
    border-radius: 12px 12px 0 0;
}

@media (max-width: 600px) {
    .christmas-menu-header {
        margin: -30px -20px 30px -20px;
        padding: 30px 20px;
    }
}

.christmas-star svg {
    width: 50px;
    height: 50px;
    color: #ffd700;
    margin-bottom: 15px;
}

.christmas-menu-header h2 {
    font-family: var(--font-heading);
    font-size: 2.2rem;
    font-weight: 400;
    color: white;
    margin: 0 0 10px 0;
}

.christmas-subtitle {
    color: rgba(255, 255, 255, 0.8);
    font-size: 1.1rem;
    margin: 0;
}

.christmas-pricing-options {
    display: flex;
    justify-content: center;
    gap: 30px;
    margin-bottom: 50px;
    flex-wrap: wrap;
    padding: 0 40px;
}

.christmas-price-box {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 25px 50px;
    background: white;
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.08);
    border: 2px solid var(--color-border);
    transition: all 0.3s ease;
}

.christmas-price-box.featured {
    border-color: #1a3c34;
    background: linear-gradient(135deg, #1a3c34 0%, #0f2820 100%);
}

.christmas-price-box .courses {
    font-size: 0.9rem;
    color: var(--color-text-muted);
    margin-bottom: 8px;
    text-transform: uppercase;
    letter-spacing: 0.05em;
}

.christmas-price-box.featured .courses {
    color: rgba(255, 255, 255, 0.8);
}

.christmas-price-box .price {
    font-family: var(--font-heading);
    font-size: 2rem;
    color: var(--color-accent-dark);
}

.christmas-price-box.featured .price {
    color: #ffd700;
}

.christmas-course-section {
    max-width: 900px;
    margin: 0 auto 30px;
    padding: 0 40px;
}

@media (max-width: 600px) {
    .christmas-course-section {
        padding: 0 20px;
    }
}

.christmas-course-section h3 {
    font-family: var(--font-heading);
    font-size: 1.5rem;
    font-weight: 400;
    color: #1a3c34;
    text-align: center;
    margin: 0 0 25px 0;
    padding-bottom: 15px;
    border-bottom: 2px solid #1a3c34;
}

.christmas-dishes {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.christmas-dish {
    display: flex;
    align-items: flex-start;
    gap: 15px;
    padding: 20px;
    background: white;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.04);
}

.christmas-dish .dish-content {
    flex: 1;
}

.christmas-dish .dish-name {
    display: block;
    font-weight: 500;
    color: var(--color-text);
    font-size: 1rem;
    margin-bottom: 5px;
}

.christmas-dish .dish-desc {
    display: block;
    font-size: 0.9rem;
    color: var(--color-text-muted);
    font-style: italic;
}

.christmas-dish .dish-desc em {
    font-style: normal;
    color: var(--color-accent);
    font-weight: 500;
}

.menu-divider.christmas span {
    background: #1a3c34;
    opacity: 0.3;
}

.christmas-ornament {
    color: #1a3c34;
    font-size: 1.2rem;
}

.christmas-included {
    max-width: 900px;
    margin: 40px auto 0;
    padding: 0 40px;
}

.included-badge {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 12px;
    padding: 20px 30px;
    background: linear-gradient(135deg, #1a3c34 0%, #0f2820 100%);
    border-radius: 8px;
    color: white;
}

.included-badge svg {
    width: 24px;
    height: 24px;
    color: #ffd700;
}

.included-badge span {
    font-size: 1rem;
}

.christmas-btn {
    background: linear-gradient(135deg, #c41e3a 0%, #8b0000 100%) !important;
}

.christmas-btn:hover {
    background: linear-gradient(135deg, #d4293f 0%, #a00000 100%) !important;
}

/* Sample Menus Grid */
.sample-menus-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: var(--space-xl);
    margin-bottom: var(--space-3xl);
}

@media (max-width: 768px) {
    .sample-menus-grid {
        grid-template-columns: 1fr;
    }
}

.sample-menu-card {
    position: relative;
    background: var(--color-bg-alt);
    border-radius: var(--radius-lg);
    padding: var(--space-2xl);
    border: 2px solid var(--color-border);
    transition: all 0.3s ease;
}

.sample-menu-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-lg);
    border-color: var(--color-accent);
}

.sample-menu-card.featured {
    border-color: var(--color-accent);
    background: linear-gradient(135deg, rgba(184, 149, 107, 0.1) 0%, white 100%);
}

.sample-menu-card.premium {
    background: linear-gradient(135deg, #1a1a1a 0%, #2a2a2a 100%);
    border-color: var(--color-accent);
}

.sample-menu-card.premium .menu-letter,
.sample-menu-card.premium .menu-price,
.sample-menu-card.premium .course-label,
.sample-menu-card.premium .course-dish {
    color: white;
}

.sample-menu-card.premium .menu-price span {
    color: rgba(255, 255, 255, 0.6);
}

.sample-menu-ribbon {
    position: absolute;
    top: -10px;
    left: 50%;
    transform: translateX(-50%);
    background: var(--color-accent);
    color: white;
    padding: 5px 15px;
    font-size: var(--text-xs);
    font-weight: 600;
    border-radius: 20px;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    white-space: nowrap;
}

.sample-menu-header {
    text-align: center;
    margin-bottom: var(--space-xl);
    padding-bottom: var(--space-lg);
    border-bottom: 1px solid var(--color-border);
}

.menu-letter {
    display: block;
    font-family: var(--font-heading);
    font-size: var(--text-4xl);
    color: var(--color-accent);
    margin-bottom: var(--space-xs);
}

.menu-price {
    font-family: var(--font-heading);
    font-size: var(--text-2xl);
    color: var(--color-text);
}

.menu-price span {
    font-size: var(--text-sm);
    color: var(--color-text-muted);
}

.sample-menu-courses {
    display: flex;
    flex-direction: column;
    gap: var(--space-md);
}

.sample-course {
    text-align: center;
}

.course-label {
    display: block;
    font-size: var(--text-xs);
    text-transform: uppercase;
    letter-spacing: 0.1em;
    color: var(--color-accent);
    margin-bottom: var(--space-xs);
}

.course-dish {
    font-size: var(--text-sm);
    color: var(--color-text-body);
}

/* Sample Menu Full (New Design) */
.sample-menu-full {
    max-width: 1000px;
    margin: 0 auto 50px;
    padding: 40px;
    background: white;
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.06);
}

@media (max-width: 600px) {
    .sample-menu-full {
        padding: 25px;
        margin: 0 20px 40px;
    }
}

.sample-menu-full.premium {
    background: linear-gradient(135deg, #faf8f5 0%, #fff 100%);
    border: 2px solid var(--color-accent);
}

.sample-menu-title {
    display: flex;
    align-items: center;
    gap: 20px;
    margin-bottom: 35px;
    padding-bottom: 20px;
    border-bottom: 2px solid var(--color-accent);
}

.sample-number {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 50px;
    height: 50px;
    background: var(--color-accent);
    color: white;
    font-family: var(--font-heading);
    font-size: 1.5rem;
    border-radius: 50%;
    flex-shrink: 0;
}

.sample-menu-title h3 {
    font-family: var(--font-heading);
    font-size: 1.6rem;
    font-weight: 400;
    color: var(--color-text);
    margin: 0;
}

.sample-courses-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
}

.sample-courses-grid.five-course,
.sample-courses-grid.four-course {
    grid-template-columns: repeat(2, 1fr);
}

@media (max-width: 800px) {
    .sample-courses-grid,
    .sample-courses-grid.five-course,
    .sample-courses-grid.four-course {
        grid-template-columns: 1fr;
    }
}

.sample-course-section {
    padding: 20px;
    background: var(--color-cream);
    border-radius: 8px;
}

.sample-course-section.highlight {
    background: linear-gradient(135deg, rgba(184, 149, 107, 0.15) 0%, rgba(184, 149, 107, 0.05) 100%);
    border: 1px solid var(--color-accent);
}

.sample-course-section h4 {
    font-family: var(--font-heading);
    font-size: 1.1rem;
    font-weight: 500;
    color: var(--color-accent-dark);
    margin: 0 0 15px 0;
    padding-bottom: 10px;
    border-bottom: 1px solid var(--color-border);
    text-align: center;
}

.sample-course-section .course-note {
    font-size: 0.8rem;
    color: var(--color-text-muted);
    font-style: italic;
    text-align: center;
    margin: -10px 0 15px 0;
}

.sample-dishes {
    display: flex;
    flex-direction: column;
    gap: 12px;
}

.sample-dish {
    padding: 12px;
    background: white;
    border-radius: 6px;
}

.sample-dish .dish-name {
    display: block;
    font-weight: 500;
    color: var(--color-text);
    font-size: 0.9rem;
    margin-bottom: 4px;
}

.sample-dish .dish-desc {
    display: block;
    font-size: 0.8rem;
    color: var(--color-text-muted);
    font-style: italic;
}

.sample-dish .dish-desc em {
    font-style: normal;
    color: var(--color-accent);
    font-weight: 500;
}

.sample-footer {
    margin-top: 30px;
    padding: 20px;
    background: var(--color-cream);
    border-radius: 8px;
    text-align: center;
}

.sample-footer span {
    font-size: 0.95rem;
    color: var(--color-text);
    font-weight: 500;
}

.sample-footer.premium {
    background: linear-gradient(135deg, var(--color-accent) 0%, var(--color-accent-dark) 100%);
}

.sample-footer.premium span {
    color: white;
}

/* Bespoke Features */
.bespoke-features {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: var(--space-xl);
    margin-bottom: var(--space-3xl);
}

@media (max-width: 768px) {
    .bespoke-features {
        grid-template-columns: 1fr;
    }
}

.bespoke-feature {
    display: flex;
    gap: var(--space-lg);
    padding: var(--space-xl);
    background: var(--color-bg-alt);
    border-radius: var(--radius-lg);
    transition: all 0.3s ease;
}

.bespoke-feature:hover {
    transform: translateY(-3px);
    box-shadow: var(--shadow-md);
}

.bespoke-icon {
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: white;
    border-radius: var(--radius-md);
    box-shadow: var(--shadow-sm);
    flex-shrink: 0;
}

.bespoke-icon svg {
    width: 24px;
    height: 24px;
    color: var(--color-accent);
}

.bespoke-feature h4 {
    font-family: var(--font-heading);
    font-size: var(--text-lg);
    color: var(--color-text);
    margin-bottom: var(--space-xs);
}

.bespoke-feature p {
    font-size: var(--text-sm);
    color: var(--color-text-muted);
    margin: 0;
    line-height: 1.6;
}

.bespoke-cta {
    text-align: center;
    padding: var(--space-3xl);
    background: linear-gradient(135deg, var(--color-bg-alt) 0%, white 100%);
    border-radius: var(--radius-lg);
    border: 1px solid var(--color-border);
}

.bespoke-cta h3 {
    font-family: var(--font-heading);
    font-size: var(--text-2xl);
    color: var(--color-text);
    margin-bottom: var(--space-sm);
}

.bespoke-cta p {
    color: var(--color-text-muted);
    margin-bottom: var(--space-xl);
}

/* Bespoke Menu New Design */
.bespoke-section {
    max-width: 1100px;
    margin: 0 auto 40px;
    padding: 0 40px;
}

@media (max-width: 600px) {
    .bespoke-section {
        padding: 0 20px;
    }
}

.bespoke-section-header {
    margin-bottom: 25px;
    padding-bottom: 15px;
    border-bottom: 2px solid var(--color-accent);
}

.bespoke-section-header h3 {
    font-family: var(--font-heading);
    font-size: 1.5rem;
    font-weight: 400;
    color: var(--color-text);
    margin: 0;
    text-align: center;
}

.bespoke-section-header .section-note {
    font-size: 0.9rem;
    color: var(--color-text-muted);
    text-align: center;
    margin: 10px 0 0 0;
    font-style: italic;
}

.bespoke-section.vegetarian .bespoke-section-header {
    border-color: #4a9f4a;
}

.bespoke-section.vegetarian .bespoke-section-header h3 {
    color: #3a8a3a;
}

.bespoke-items-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 15px;
}

@media (max-width: 700px) {
    .bespoke-items-grid {
        grid-template-columns: 1fr;
    }
}

.bespoke-item {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    padding: 15px 20px;
    background: white;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.04);
    position: relative;
}

.bespoke-item.supplement {
    border: 1px solid var(--color-accent);
    background: linear-gradient(135deg, rgba(184, 149, 107, 0.05) 0%, white 100%);
}

.bespoke-item .item-content {
    flex: 1;
}

.bespoke-item .item-name {
    display: block;
    font-weight: 500;
    color: var(--color-text);
    font-size: 0.95rem;
    margin-bottom: 4px;
}

.bespoke-item .item-desc {
    display: block;
    font-size: 0.85rem;
    color: var(--color-text-muted);
}

.supplement-badge {
    position: absolute;
    top: -8px;
    right: 15px;
    background: var(--color-accent);
    color: white;
    font-size: 0.75rem;
    font-weight: 600;
    padding: 4px 10px;
    border-radius: 12px;
}

.bespoke-highlight-box {
    max-width: 500px;
    margin: 30px auto;
    display: flex;
    align-items: center;
    gap: 20px;
    padding: 25px 35px;
    background: linear-gradient(135deg, #f0f8ff 0%, #e8f4fc 100%);
    border-radius: 12px;
    border: 2px solid #b8d4e8;
}

.bespoke-highlight-box .highlight-icon {
    font-size: 2rem;
    color: #5ba3d0;
}

.bespoke-highlight-box .highlight-content {
    flex: 1;
}

.bespoke-highlight-box .highlight-name {
    display: block;
    font-family: var(--font-heading);
    font-size: 1.1rem;
    color: var(--color-text);
    margin-bottom: 5px;
}

.bespoke-highlight-box .highlight-supplement {
    font-size: 0.9rem;
    color: var(--color-accent-dark);
    font-weight: 500;
}

.bespoke-note {
    max-width: 800px;
    margin: 40px auto;
    padding: 25px 30px;
    background: var(--color-cream);
    border-radius: 8px;
    text-align: center;
}

.bespoke-note p {
    margin: 0;
    color: var(--color-text-body);
    font-size: 0.95rem;
    line-height: 1.6;
}

.bespoke-cta-box {
    max-width: 600px;
    margin: 40px auto 0;
    text-align: center;
    padding: 40px;
    background: linear-gradient(135deg, var(--color-bg-alt) 0%, white 100%);
    border-radius: 12px;
    border: 1px solid var(--color-border);
}

.bespoke-cta-box h3 {
    font-family: var(--font-heading);
    font-size: 1.5rem;
    color: var(--color-text);
    margin: 0 0 10px 0;
}

.bespoke-cta-box p {
    color: var(--color-text-muted);
    margin: 0 0 25px 0;
}

/* Enquire Button */
.menu-enquire-btn {
    display: inline-flex;
    align-items: center;
    gap: var(--space-sm);
    padding: var(--space-md) var(--space-2xl);
    background: linear-gradient(135deg, var(--color-text) 0%, #2a2a2a 100%);
    color: white;
    text-decoration: none;
    font-size: var(--text-sm);
    font-weight: 500;
    letter-spacing: 0.05em;
    border-radius: 50px;
    transition: all 0.3s ease;
    margin: 0 auto;
    display: flex;
    justify-content: center;
}

.menu-enquire-btn:hover {
    background: linear-gradient(135deg, var(--color-accent) 0%, var(--color-accent-dark) 100%);
    transform: translateY(-2px);
    box-shadow: 0 4px 20px rgba(184, 149, 107, 0.4);
}

.menu-enquire-btn svg {
    width: 16px;
    height: 16px;
    transition: transform 0.3s ease;
}

.menu-enquire-btn:hover svg {
    transform: translateX(5px);
}

/* CTA Section */
.menus-cta-section {
    padding: var(--space-5xl) 0;
    background: linear-gradient(135deg, 
        rgba(45, 80, 80, 1) 0%, 
        rgba(30, 60, 60, 1) 50%, 
        rgba(20, 45, 45, 1) 100%);
}

.menus-cta-content {
    text-align: center;
    max-width: 600px;
    margin: 0 auto;
}

.menus-cta-content h2 {
    font-family: var(--font-heading);
    font-size: var(--text-3xl);
    color: white;
    margin-bottom: var(--space-md);
}

.menus-cta-content p {
    font-size: var(--text-lg);
    color: rgba(255, 255, 255, 0.8);
    margin-bottom: var(--space-2xl);
}

.menus-cta-buttons {
    display: flex;
    justify-content: center;
    gap: var(--space-md);
    flex-wrap: wrap;
}

.btn-outline-light {
    display: inline-flex;
    align-items: center;
    gap: var(--space-sm);
    padding: var(--space-md) var(--space-xl);
    background: transparent;
    border: 2px solid rgba(255, 255, 255, 0.5);
    color: white;
    text-decoration: none;
    font-size: var(--text-sm);
    font-weight: 500;
    letter-spacing: 0.05em;
    border-radius: var(--radius-md);
    transition: all 0.3s ease;
}

.btn-outline-light:hover {
    background: white;
    border-color: white;
    color: var(--color-text);
}

/* Responsive */
@media (max-width: 768px) {
    .menu-tab-btn {
        padding: var(--space-sm) var(--space-lg);
        font-size: var(--text-xs);
    }
    
    .menu-tab-btn svg {
        width: 16px;
        height: 16px;
    }
    
    .menu-panel-content {
        padding: var(--space-xl);
    }
    
    .menu-panel-header.christmas {
        margin: calc(var(--space-xl) * -1);
        margin-bottom: var(--space-xl);
        padding: var(--space-xl);
    }
}

/* Mobile (max 480px) */
@media (max-width: 480px) {
    .menus-page-hero {
        min-height: 300px;
        height: 40vh;
    }
    
    .menus-hero-content {
        padding: 0 1rem;
    }
    
    .menu-buttons-wrapper {
        -webkit-overflow-scrolling: touch;
    }
    
    .menu-tab-btn {
        padding: 0.6rem 1rem;
        font-size: 0.6rem;
        letter-spacing: 0.1em;
    }
    
    .menu-panel-content {
        padding: var(--space-lg);
    }
    
    .packages-grid {
        gap: 1.5rem;
    }
    
    .package-box {
        padding: 2rem 1.25rem;
    }
    
    .package-row {
        grid-template-columns: 1fr;
    }
    
    .price-list {
        grid-template-columns: 1fr;
    }
    
    .price-row .price-name {
        word-break: break-word;
    }
    
    .elegant-packages,
    .elegant-prices {
        padding: 15px;
    }
    
    .menu-grid,
    .menu-grid.compact {
        grid-template-columns: 1fr;
    }
    
    .buffet-selection-grid,
    .canape-items-grid,
    .fork-items-grid {
        grid-template-columns: 1fr;
    }
    
    .sample-menus-grid {
        gap: 1.5rem;
    }
    
    .bespoke-section {
        padding: 0 10px;
    }
    
    .pricing-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<script>
(function() {
    // Tab functionality
    const tabButtons = document.querySelectorAll('.menu-tab-btn');
    const menuPanels = document.querySelectorAll('.menu-panel');
    
    // Function to activate a specific tab
    function activateTab(menuId) {
        // Remove active from all buttons
        tabButtons.forEach(b => b.classList.remove('active'));
        
        // Find and activate the correct button
        const targetBtn = document.querySelector('.menu-tab-btn[data-menu="' + menuId + '"]');
        if (targetBtn) {
            targetBtn.classList.add('active');
        }
        
        // Hide all panels
        menuPanels.forEach(panel => panel.classList.remove('active'));
        
        // Show selected panel
        const targetPanel = document.getElementById('panel-' + menuId);
        if (targetPanel) {
            targetPanel.classList.add('active');
        }
    }
    
    // Check URL hash on page load
    function checkHash() {
        const hash = window.location.hash.replace('#', '');
        if (hash) {
            activateTab(hash);
            // Scroll to panels container after a short delay
            setTimeout(() => {
                const panelsContainer = document.querySelector('.menu-panels-container');
                if (panelsContainer) {
                    panelsContainer.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            }, 300);
        }
    }
    
    // Check hash on page load
    checkHash();
    
    // Also check when hash changes (back/forward navigation)
    window.addEventListener('hashchange', checkHash);
    
    // Tab button click handler
    tabButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            const menuId = btn.dataset.menu;
            
            // Update URL hash without scrolling
            history.pushState(null, null, '#' + menuId);
            
            // Activate the tab
            activateTab(menuId);
            
            // Scroll to panels container smoothly
            const panelsContainer = document.querySelector('.menu-panels-container');
            if (panelsContainer) {
                setTimeout(() => {
                    panelsContainer.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }, 100);
            }
        });
    });
})();
</script>

<?php get_footer(); ?>
