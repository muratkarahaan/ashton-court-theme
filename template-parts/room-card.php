<?php
if (!defined('ABSPATH')) exit;
/**
 * Template Part: Room Card
 * 
 * @package Ashton_Court
 */

$price = get_post_meta(get_the_ID(), '_room_price', true);
$view = get_post_meta(get_the_ID(), '_room_view', true);
$bed_type = get_post_meta(get_the_ID(), '_room_bed_type', true);
?>

<article class="room-card" data-animate="fade-up">
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
                <span class="price-amount">£<?php echo $price ? esc_html($price) : '70'; ?></span>
                <span class="price-period">/ night</span>
            </div>
            <div class="room-card-actions">
                <a href="<?php the_permalink(); ?>" class="link-arrow small">
                    <span>Details</span>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="5" y1="12" x2="19" y2="12"/>
                        <polyline points="12 5 19 12 12 19"/>
                    </svg>
                </a>
                <a href="https://sky-eu1.clock-software.com/spa/pms-wbe/#/hotel/11928" target="_blank" rel="noopener" class="btn btn-book-room">
                    <span>Book Now</span>
                </a>
            </div>
        </div>
    </div>
</article>
