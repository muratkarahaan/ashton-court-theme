<?php
if (!defined('ABSPATH')) exit;
/**
 * 404 Error Page Template
 *
 * @package Ashton_Court
 */

get_header();
?>

<section class="error-404-section">
    <div class="container">
        <div class="error-content" data-animate="fade-up">
            <span class="error-code">404</span>
            <h1 class="error-title">Page Not Found</h1>
            <p class="error-message">The page you're looking for seems to have wandered off like the tide. Let us help you find your way.</p>
            
            <div class="error-actions">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary">
                    <span>Return Home</span>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/>
                        <polyline points="9 22 9 12 15 12 15 22"/>
                    </svg>
                </a>
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-secondary">
                    <span>Contact Us</span>
                </a>
            </div>
            
            <div class="error-links">
                <h2>You might be looking for:</h2>
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/rooms/')); ?>">Our Rooms</a></li>
                    <li><a href="<?php echo esc_url(home_url('/dining/')); ?>">Dining</a></li>
                    <li><a href="<?php echo esc_url(home_url('/weddings/')); ?>">Weddings</a></li>
                    <li><a href="<?php echo esc_url(home_url('/contact/')); ?>">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<style>
.error-404-section {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: var(--space-4xl) 0;
    background: linear-gradient(135deg, var(--color-bg) 0%, var(--color-bg-alt) 100%);
}

.error-content {
    max-width: 600px;
    margin: 0 auto;
}

.error-code {
    display: block;
    font-family: var(--font-heading);
    font-size: clamp(6rem, 15vw, 12rem);
    font-weight: 300;
    line-height: 1;
    color: var(--color-border);
    margin-bottom: var(--space-lg);
}

.error-title {
    font-size: var(--text-3xl);
    margin-bottom: var(--space-lg);
}

.error-message {
    font-size: var(--text-lg);
    color: var(--color-text-muted);
    margin-bottom: var(--space-2xl);
}

.error-actions {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: var(--space-md);
    margin-bottom: var(--space-4xl);
}

.error-links h2 {
    font-size: var(--text-lg);
    margin-bottom: var(--space-lg);
}

.error-links ul {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: var(--space-lg);
}

.error-links a {
    color: var(--color-accent);
    font-weight: 500;
}

.error-links a:hover {
    text-decoration: underline;
}
</style>

<?php get_footer(); ?>
