<?php
if (!defined('ABSPATH')) exit;

$title    = get_sub_field('title') ?: '';
$text     = get_sub_field('text') ?: '';
$btn_text = get_sub_field('button_text') ?: 'Book Now';
$btn_link = get_sub_field('button_link') ?: home_url('/rooms/');
$bg_image = get_sub_field('background_image') ?: '';
?>

<section class="cta-section" data-animate="fade-up">
    <div class="cta-bg-wrapper">
        <?php if ($bg_image) : ?>
            <img src="<?php echo esc_url($bg_image); ?>" alt="" class="cta-bg-image" loading="lazy">
        <?php endif; ?>
        <div class="cta-overlay"></div>
    </div>
    <div class="container">
        <div class="cta-content">
            <?php if ($title) : ?><h2 class="cta-title"><?php echo esc_html($title); ?></h2><?php endif; ?>
            <?php if ($text) : ?><p class="cta-text"><?php echo esc_html($text); ?></p><?php endif; ?>
            <a href="<?php echo esc_url($btn_link); ?>" class="btn btn-primary">
                <span><?php echo esc_html($btn_text); ?></span>
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
            </a>
        </div>
    </div>
</section>
