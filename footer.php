<?php if (!defined('ABSPATH')) exit; ?>
</main><!-- #site-main -->

<!-- Premium Footer -->
<footer class="site-footer-new" id="site-footer">
    
    <!-- Main Footer Content -->
    <div class="footer-main-new">
        <div class="container">
            <div class="footer-grid-new">
                
                <!-- Column 1: Brand -->
                <div class="footer-col footer-brand-col">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="footer-logo-link">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/ashtoncourtlogo.png" alt="Ashton Court Hotel" class="footer-logo-image">
                    </a>
                    <p class="footer-brand-text">A historic sanctuary where the Exe Estuary meets timeless coastal elegance. Experience Devon's finest hospitality since 1890.</p>
                    <div class="footer-social-new">
                        <?php $social = ashton_get_social_links(); ?>
                        <a href="<?php echo esc_url($social['facebook'] ?: '#'); ?>" target="_blank" rel="noopener" aria-label="Facebook">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/>
                            </svg>
                        </a>
                        <a href="<?php echo esc_url($social['instagram'] ?: '#'); ?>" target="_blank" rel="noopener" aria-label="Instagram">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="2" y="2" width="20" height="20" rx="5" ry="5"/>
                                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z"/>
                                <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/>
                            </svg>
                        </a>
                        <a href="<?php echo esc_url($social['tripadvisor'] ?: '#'); ?>" target="_blank" rel="noopener" aria-label="TripAdvisor">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <circle cx="12" cy="14" r="9"/>
                                <circle cx="8" cy="14" r="2" fill="white"/>
                                <circle cx="16" cy="14" r="2" fill="white"/>
                                <path d="M4 10l4-5h8l4 5" fill="none" stroke="currentColor" stroke-width="2"/>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Column 2: Quick Links -->
                <div class="footer-col">
                    <h4 class="footer-col-title">Explore</h4>
                    <ul class="footer-links-list">
                        <li><a href="<?php echo esc_url(home_url('/rooms/')); ?>">Our Rooms</a></li>
                        <li><a href="<?php echo esc_url(home_url('/menus/')); ?>">Restaurant & Bar</a></li>
                        <li><a href="<?php echo esc_url(home_url('/weddings/')); ?>">Weddings</a></li>
                        <li><a href="<?php echo esc_url(home_url('/functions/')); ?>">Private Events</a></li>
                        <li><a href="<?php echo esc_url(home_url('/about/')); ?>">Our Story</a></li>
                        <li><a href="<?php echo esc_url(home_url('/contact/')); ?>">Contact Us</a></li>
                    </ul>
                </div>
                
                <!-- Column 3: Amenities -->
                <div class="footer-col">
                    <h4 class="footer-col-title">Amenities</h4>
                    <ul class="footer-links-list">
                        <li><span class="amenity-item">✓ Full English Breakfast</span></li>
                        <li><span class="amenity-item">✓ Free High-Speed WiFi</span></li>
                        <li><span class="amenity-item">✓ Complimentary Parking</span></li>
                        <li><span class="amenity-item">✓ Lift Access</span></li>
                        <li><span class="amenity-item">✓ Dog Friendly</span></li>
                        <li><span class="amenity-item">✓ Sea View Rooms</span></li>
                    </ul>
                </div>
                
                <!-- Column 4: Contact -->
                <div class="footer-col">
                    <h4 class="footer-col-title">Contact</h4>
                    <?php $address = ashton_get_address(); ?>
                    <div class="footer-contact-block">
                        <div class="contact-row">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/>
                                <circle cx="12" cy="10" r="3"/>
                            </svg>
                            <div>
                                <p><?php echo esc_html($address['street']); ?></p>
                                <p><?php echo esc_html($address['city']); ?> <?php echo esc_html($address['postcode']); ?></p>
                                <p>United Kingdom</p>
                            </div>
                        </div>
                        <div class="contact-row">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/>
                            </svg>
                            <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', ashton_get_phone())); ?>"><?php echo esc_html(ashton_get_phone()); ?></a>
                        </div>
                        <div class="contact-row">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                                <polyline points="22,6 12,13 2,6"/>
                            </svg>
                            <a href="mailto:<?php echo esc_attr(ashton_get_email()); ?>"><?php echo esc_html(ashton_get_email()); ?></a>
                        </div>
                    </div>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="footer-cta-btn">Book Direct & Save</a>
                </div>
                
            </div>
        </div>
    </div>
    
    <!-- Footer Bottom -->
    <div class="footer-bottom-new">
        <div class="container">
            <div class="footer-bottom-content">
                <p class="copyright-new">&copy; <?php echo esc_html(date('Y')); ?> Ashton Court Hotel. All rights reserved.</p>
                <nav class="footer-legal-new">
                    <a href="<?php echo esc_url(home_url('/privacy-policy/')); ?>">Privacy Policy</a>
                    <a href="<?php echo esc_url(home_url('/terms-conditions/')); ?>">Terms & Conditions</a>
                    <a href="<?php echo esc_url(home_url('/accessibility/')); ?>">Accessibility</a>
                </nav>
            </div>
        </div>
    </div>
    
</footer>

<?php wp_footer(); ?>

</body>
</html>
