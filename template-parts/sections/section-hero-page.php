<?php
if (!defined('ABSPATH')) exit;

$title    = get_sub_field('title') ?: get_the_title();
$subtitle = get_sub_field('subtitle') ?: '';
$bg_image = get_sub_field('background_image') ?: '';
?>

<section class="page-hero">
    <?php if ($bg_image) : ?>
    <div class="page-hero-bg">
        <img src="<?php echo esc_url($bg_image); ?>" alt="<?php echo esc_attr($title); ?>" loading="eager">
        <div class="page-hero-overlay"></div>
    </div>
    <?php endif; ?>
    <div class="page-hero-content" data-animate="fade-up">
        <h1 class="page-hero-title"><?php echo esc_html($title); ?></h1>
        <?php if ($subtitle) : ?>
            <p class="page-hero-subtitle"><?php echo esc_html($subtitle); ?></p>
        <?php endif; ?>
    </div>
</section>
