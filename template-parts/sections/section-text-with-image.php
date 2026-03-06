<?php
if (!defined('ABSPATH')) exit;

$title    = get_sub_field('title') ?: '';
$content  = get_sub_field('content') ?: '';
$image    = get_sub_field('image') ?: '';
$position = get_sub_field('image_position') ?: 'left';
$class    = $position === 'right' ? ' image-right' : '';
?>

<section class="text-image-section section-padding<?php echo esc_attr($class); ?>">
    <div class="container">
        <div class="text-image-grid">
            <div class="text-image-media">
                <?php if ($image) : ?>
                    <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($title); ?>" loading="lazy">
                <?php endif; ?>
            </div>
            <div class="text-image-content">
                <?php if ($title) : ?><h2><?php echo esc_html($title); ?></h2><?php endif; ?>
                <?php echo wp_kses_post($content); ?>
            </div>
        </div>
    </div>
</section>
