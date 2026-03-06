<?php
if (!defined('ABSPATH')) exit;

$title   = get_sub_field('title') ?: '';
$content = get_sub_field('content') ?: '';
$bg      = get_sub_field('background') ?: 'white';

$bg_class = '';
if ($bg === 'light') $bg_class = ' bg-light';
elseif ($bg === 'dark') $bg_class = ' bg-dark text-light';
?>

<section class="text-block-section section-padding<?php echo esc_attr($bg_class); ?>">
    <div class="container">
        <?php if ($title) : ?><h2 class="section-title"><?php echo esc_html($title); ?></h2><?php endif; ?>
        <div class="text-block-content"><?php echo wp_kses_post($content); ?></div>
    </div>
</section>
