<?php
if (!defined('ABSPATH')) exit;

$title  = get_sub_field('title') ?: '';
$images = get_sub_field('images');

if (empty($images)) return;
?>

<section class="gallery-section section-padding">
    <div class="container">
        <?php if ($title) : ?><h2 class="section-title centered"><?php echo esc_html($title); ?></h2><?php endif; ?>
        <div class="gallery-grid">
            <?php foreach ($images as $img) : ?>
                <div class="gallery-grid-item">
                    <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>" loading="lazy">
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
