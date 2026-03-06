<?php
if (!defined('ABSPATH')) exit;

$tagline  = get_sub_field('tagline') ?: 'Accommodation';
$title    = get_sub_field('title') ?: 'Refined Comfort, Breathtaking Views';
$subtitle = get_sub_field('subtitle') ?: 'Each of our 45 ensuite rooms offers a unique blend of comfort and coastal charm, with the majority featuring stunning sea views.';
$btn_text = get_sub_field('button_text') ?: 'View All Rooms';
$theme_uri = esc_url(get_template_directory_uri());
?>

<section class="rooms-section section-padding bg-light" id="rooms-preview">
    <div class="container">
        <div class="section-header centered">
            <span class="section-tagline"><?php echo esc_html($tagline); ?></span>
            <h2 class="section-title"><?php echo esc_html($title); ?></h2>
            <p class="section-subtitle"><?php echo esc_html($subtitle); ?></p>
        </div>
        
        <div class="rooms-showcase">
            <article class="room-card-new">
                <div class="room-card-image">
                    <img src="<?php echo $theme_uri; ?>/assets/images/sea-facing-single-1.png" alt="Sea Facing Single Room">
                    <div class="room-card-badge">Sea View</div>
                    <div class="room-card-overlay">
                        <a href="<?php echo esc_url(home_url('/rooms/')); ?>" class="room-view-btn">
                            <span>View Room</span>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                        </a>
                    </div>
                </div>
                <div class="room-card-body">
                    <div class="room-meta"><span class="room-type">Sea Facing</span><span class="room-bed">Single Bed</span></div>
                    <h3 class="room-name">Sea Facing Single Room</h3>
                    <p class="room-desc">A cosy retreat for solo travellers with stunning sea views. Comfortable and well-appointed with ensuite bathroom and WiFi.</p>
                    <div class="room-footer"><a href="<?php echo esc_url(home_url('/rooms/')); ?>" class="room-link">Details &rarr;</a></div>
                </div>
            </article>
            
            <article class="room-card-new featured">
                <div class="room-card-image">
                    <img src="<?php echo $theme_uri; ?>/assets/images/sea-facing-double-2.png" alt="Sea Facing Double Room">
                    <div class="room-card-badge gold">Most Popular</div>
                    <div class="room-card-overlay">
                        <a href="<?php echo esc_url(home_url('/rooms/')); ?>" class="room-view-btn">
                            <span>View Room</span>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                        </a>
                    </div>
                </div>
                <div class="room-card-body">
                    <div class="room-meta"><span class="room-type">Sea Facing</span><span class="room-bed">Double Bed</span></div>
                    <h3 class="room-name">Sea Facing Double Room</h3>
                    <p class="room-desc">Spacious and elegant with breathtaking sea views. Features ensuite bathroom, flat-screen TV, and complimentary WiFi.</p>
                    <div class="room-footer"><a href="<?php echo esc_url(home_url('/rooms/')); ?>" class="room-link">Details &rarr;</a></div>
                </div>
            </article>
            
            <article class="room-card-new">
                <div class="room-card-image">
                    <img src="<?php echo $theme_uri; ?>/assets/images/sea-facing-family.png" alt="Sea Facing Family Room">
                    <div class="room-card-badge">Family</div>
                    <div class="room-card-overlay">
                        <a href="<?php echo esc_url(home_url('/rooms/')); ?>" class="room-view-btn">
                            <span>View Room</span>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                        </a>
                    </div>
                </div>
                <div class="room-card-body">
                    <div class="room-meta"><span class="room-type">Sea Facing</span><span class="room-bed">Multiple Beds</span></div>
                    <h3 class="room-name">Sea Facing Family Room</h3>
                    <p class="room-desc">The ultimate family seaside experience. Generous space for everyone with sea views, ensuite bathroom and all modern amenities.</p>
                    <div class="room-footer"><a href="<?php echo esc_url(home_url('/rooms/')); ?>" class="room-link">Details &rarr;</a></div>
                </div>
            </article>
        </div>
        
        <div class="section-action centered" data-animate="fade-up">
            <a href="<?php echo esc_url(home_url('/rooms/')); ?>" class="btn btn-secondary">
                <span><?php echo esc_html($btn_text); ?></span>
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
            </a>
        </div>
    </div>
</section>
