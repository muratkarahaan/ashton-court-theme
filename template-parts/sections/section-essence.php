<?php
if (!defined('ABSPATH')) exit;

$tag        = get_sub_field('tag') ?: 'The Essence';
$title      = get_sub_field('title') ?: 'A Historic Haven';
$title_em   = get_sub_field('title_italic') ?: 'on Louisa Terrace';
$lead       = get_sub_field('lead_text') ?: 'The Ashton Court is situated on Louisa Terrace, part of the town\'s historic Beacon, where many notable people chose to make their homes during Exmouth\'s Georgian heyday.';
$body       = get_sub_field('body_text') ?: '<p>The Hotel is just 200 yards from the beach and enjoys magnificent views of the Exe estuary and the beautiful coastline stretching out towards Torbay.</p><p>Our attractive coronation gardens overlooking the Esplanade provide a tranquil spot in which to relax and watch the fishing boats and pleasure craft pass back and forth along the shoreline.</p>';
$image      = get_sub_field('image') ?: esc_url(get_template_directory_uri()) . '/assets/images/garden.jpg';
$btn_text   = get_sub_field('button_text') ?: 'Discover Our Story';
$btn_link   = get_sub_field('button_link') ?: home_url('/about/');

$stats = get_sub_field('stats');
$default_stats = array(
    array('number' => '200', 'label' => 'yards to beach'),
    array('number' => '45', 'label' => 'sea view rooms'),
    array('number' => '5.0', 'label' => 'guest rating'),
);
if (empty($stats)) $stats = $default_stats;
?>

<section class="essence-section" id="essence">
    <div class="essence-container">
        <div class="essence-image-side">
            <div class="essence-image-box">
                <img src="<?php echo esc_url($image); ?>" alt="Ashton Court Gardens">
            </div>
            <?php if (!empty($stats)) : ?>
            <div class="essence-stats-card">
                <?php foreach ($stats as $i => $stat) : ?>
                    <?php if ($i > 0) : ?><div class="stat-divider"></div><?php endif; ?>
                    <div class="stat-item">
                        <span class="stat-num"><?php echo esc_html($stat['number']); ?></span>
                        <span class="stat-label"><?php echo esc_html($stat['label']); ?></span>
                    </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
        
        <div class="essence-content-side">
            <span class="essence-tag"><?php echo esc_html($tag); ?></span>
            <h2 class="essence-title"><?php echo esc_html($title); ?><br><em><?php echo esc_html($title_em); ?></em></h2>
            <p class="essence-lead"><?php echo esc_html($lead); ?></p>
            <div class="essence-text"><?php echo wp_kses_post($body); ?></div>
            
            <div class="essence-icons">
                <div class="icon-item">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"/></svg>
                    <span>Dog Friendly</span>
                </div>
                <div class="icon-item">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/></svg>
                    <span>Weddings</span>
                </div>
                <div class="icon-item">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                    <span>Long Stay</span>
                </div>
            </div>
            
            <a href="<?php echo esc_url($btn_link); ?>" class="essence-btn">
                <?php echo esc_html($btn_text); ?>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
            </a>
        </div>
    </div>
</section>
