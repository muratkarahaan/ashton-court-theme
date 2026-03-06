<?php
if (!defined('ABSPATH')) exit;

$features = get_sub_field('features');

$icon_map = array(
    'breakfast' => '<path d="M18 8h1a4 4 0 010 8h-1M2 8h16v9a4 4 0 01-4 4H6a4 4 0 01-4-4V8zM6 1v3M10 1v3M14 1v3"/>',
    'wifi' => '<path d="M5 12.55a11 11 0 0114.08 0M1.42 9a16 16 0 0121.16 0M8.53 16.11a6 6 0 016.95 0M12 20h.01"/>',
    'parking' => '<rect x="1" y="3" width="15" height="13" rx="2" ry="2"/><path d="M16 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2"/><circle cx="5.5" cy="18" r="2"/><circle cx="18.5" cy="18" r="2"/>',
    'lift' => '<rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 3v4M8 3v4M2 11h20"/>',
    'dog' => '<circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/>',
);

$default_features = array(
    array('label' => 'Full English Breakfast', 'icon' => 'breakfast'),
    array('label' => 'High Speed WiFi', 'icon' => 'wifi'),
    array('label' => 'Free Parking', 'icon' => 'parking'),
    array('label' => 'Lift to All Floors', 'icon' => 'lift'),
    array('label' => 'Dog Friendly', 'icon' => 'dog'),
);

if (empty($features)) $features = $default_features;
?>

<section class="features-strip">
    <div class="features-strip-inner">
        <?php $delay = 0; foreach ($features as $feat) : ?>
            <div class="feature-item" data-animate="fade-up"<?php if ($delay > 0) echo ' data-delay="' . esc_attr($delay) . '"'; ?>>
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1">
                    <?php
                    $icon_key = isset($feat['icon']) ? $feat['icon'] : '';
                    echo isset($icon_map[$icon_key]) ? $icon_map[$icon_key] : $icon_map['breakfast'];
                    ?>
                </svg>
                <span><?php echo esc_html($feat['label']); ?></span>
            </div>
        <?php $delay += 50; endforeach; ?>
    </div>
</section>
