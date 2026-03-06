<?php
if (!defined('ABSPATH')) exit;

$title    = get_sub_field('title') ?: '';
$features = get_sub_field('features');

if (empty($features)) return;
?>

<section class="features-grid-section section-padding bg-light">
    <div class="container">
        <?php if ($title) : ?><h2 class="section-title centered"><?php echo esc_html($title); ?></h2><?php endif; ?>
        <div class="features-grid">
            <?php foreach ($features as $feat) : ?>
                <div class="feature-card" data-animate="fade-up">
                    <h3><?php echo esc_html($feat['title']); ?></h3>
                    <?php if (!empty($feat['description'])) : ?>
                        <p><?php echo esc_html($feat['description']); ?></p>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
