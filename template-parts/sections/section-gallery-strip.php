<?php
if (!defined('ABSPATH')) exit;

$images = get_sub_field('images');
$theme_uri = esc_url(get_template_directory_uri());

$default_images = array(
    array('url' => $theme_uri . '/assets/images/sea-facing-double-2.png', 'alt' => 'Sea Facing Double', 'title' => 'Sea Facing Double'),
    array('url' => $theme_uri . '/assets/images/sea-facing-family.png', 'alt' => 'Sea Facing Family', 'title' => 'Sea Facing Family'),
    array('url' => $theme_uri . '/assets/images/hotelbar.jpg', 'alt' => 'Hotel Bar', 'title' => 'Hotel Bar'),
    array('url' => $theme_uri . '/assets/images/rear-facing-double.png', 'alt' => 'Rear Facing Double', 'title' => 'Rear Facing Double'),
    array('url' => $theme_uri . '/assets/images/breakfast.jpg', 'alt' => 'Breakfast', 'title' => 'Breakfast'),
    array('url' => $theme_uri . '/assets/images/sea-facing-twin-1.png', 'alt' => 'Sea Facing Twin', 'title' => 'Sea Facing Twin'),
);

if (empty($images)) $images = $default_images;
?>

<section class="gallery-strip">
    <div class="gallery-marquee">
        <div class="gallery-track">
            <?php foreach ($images as $img) :
                $url = is_array($img) && isset($img['url']) ? $img['url'] : '';
                $alt = is_array($img) && isset($img['alt']) ? $img['alt'] : '';
                $caption = is_array($img) && isset($img['title']) ? $img['title'] : $alt;
            ?>
                <div class="gallery-item">
                    <img src="<?php echo esc_url($url); ?>" alt="<?php echo esc_attr($alt); ?>">
                    <span class="gallery-caption"><?php echo esc_html($caption); ?></span>
                </div>
            <?php endforeach; ?>
            <?php foreach ($images as $img) :
                $url = is_array($img) && isset($img['url']) ? $img['url'] : '';
                $alt = is_array($img) && isset($img['alt']) ? $img['alt'] : '';
                $caption = is_array($img) && isset($img['title']) ? $img['title'] : $alt;
            ?>
                <div class="gallery-item">
                    <img src="<?php echo esc_url($url); ?>" alt="<?php echo esc_attr($alt); ?>">
                    <span class="gallery-caption"><?php echo esc_html($caption); ?></span>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
