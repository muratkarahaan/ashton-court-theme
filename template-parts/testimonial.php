<?php
if (!defined('ABSPATH')) exit;
/**
 * Template Part: Testimonial Card
 * 
 * @package Ashton_Court
 */

$rating = get_post_meta(get_the_ID(), '_rating', true);
$location = get_post_meta(get_the_ID(), '_guest_location', true);
?>

<article class="testimonial-card" data-animate="fade-up">
    <div class="testimonial-rating">
        <?php for ($i = 1; $i <= 5; $i++) : ?>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="<?php echo esc_attr($i <= ($rating ?: 5) ? 'currentColor' : 'none'); ?>" stroke="currentColor" stroke-width="1.5">
                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
            </svg>
        <?php endfor; ?>
    </div>
    <div class="testimonial-content">
        <?php the_content(); ?>
    </div>
    <div class="testimonial-author">
        <?php if (has_post_thumbnail()) : ?>
            <div class="author-image">
                <?php the_post_thumbnail('testimonial'); ?>
            </div>
        <?php endif; ?>
        <div class="author-info">
            <span class="author-name"><?php the_title(); ?></span>
            <?php if ($location) : ?>
                <span class="author-location"><?php echo esc_html($location); ?></span>
            <?php endif; ?>
        </div>
    </div>
</article>
