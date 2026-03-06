<?php
if (!defined('ABSPATH')) exit;

$title    = get_sub_field('title') ?: 'More Than';
$title_em = get_sub_field('title_italic') ?: 'Just a Stay';
$desc     = get_sub_field('description') ?: 'From intimate celebrations to culinary journeys, every moment at Ashton Court is crafted with care.';
$panels   = get_sub_field('panels');

$theme_uri = esc_url(get_template_directory_uri());
$default_panels = array(
    array('title' => "Coronation\nGardens", 'text' => 'Relax in our tranquil private gardens overlooking the sea', 'link_text' => 'Discover', 'link' => home_url('/about/'), 'image' => $theme_uri . '/assets/images/garden.jpg'),
    array('title' => "Dream\nWeddings", 'text' => 'Say "I do" with the sea as your witness', 'link_text' => 'Plan Your Day', 'link' => home_url('/weddings/'), 'image' => $theme_uri . '/assets/images/view-exe.jpg'),
    array('title' => "The\nBar", 'text' => 'Unwind with a drink and enjoy the relaxed atmosphere', 'link_text' => 'Explore', 'link' => home_url('/menus/'), 'image' => $theme_uri . '/assets/images/hotelbar.jpg'),
    array('title' => "Private\nEvents", 'text' => 'Bespoke functions with stunning views', 'link_text' => 'Enquire', 'link' => home_url('/functions/'), 'image' => $theme_uri . '/assets/images/restaurant.png'),
);

if (empty($panels)) $panels = $default_panels;
?>

<section class="ashton-experience" id="experience">
    <div class="exp-intro">
        <div class="exp-intro-content">
            <span class="exp-number">03</span>
            <h2 class="exp-headline"><?php echo esc_html($title); ?><br><em><?php echo esc_html($title_em); ?></em></h2>
            <p class="exp-desc"><?php echo esc_html($desc); ?></p>
        </div>
    </div>
    
    <div class="exp-horizontal-wrapper">
        <div class="exp-horizontal-track">
            <?php $num = 1; foreach ($panels as $panel) :
                $p_title = isset($panel['title']) ? $panel['title'] : '';
                $p_text = isset($panel['text']) ? $panel['text'] : '';
                $p_link_text = isset($panel['link_text']) ? $panel['link_text'] : 'Discover';
                $p_link = isset($panel['link']) ? $panel['link'] : '#';
                $p_image = isset($panel['image']) ? $panel['image'] : '';
            ?>
                <a href="<?php echo esc_url($p_link); ?>" class="exp-panel exp-panel-link">
                    <div class="exp-panel-bg">
                        <img src="<?php echo esc_url($p_image); ?>" alt="<?php echo esc_attr(str_replace("\n", ' ', $p_title)); ?>">
                    </div>
                    <div class="exp-panel-overlay"></div>
                    <div class="exp-panel-content">
                        <span class="panel-num"><?php echo esc_html(str_pad($num, 2, '0', STR_PAD_LEFT)); ?></span>
                        <h3><?php echo nl2br(esc_html($p_title)); ?></h3>
                        <p><?php echo esc_html($p_text); ?></p>
                        <span class="panel-link"><?php echo esc_html($p_link_text); ?></span>
                    </div>
                </a>
            <?php $num++; endforeach; ?>
        </div>
    </div>
</section>
