<?php
if (!defined('ABSPATH')) exit;
/**
 * Template Name: Accessibility
 * Page for displaying the Accessibility Statement
 *
 * @package Ashton_Court
 */

get_header();

$acf = function_exists('get_field');
$f = function($name, $default = '') {
    global $acf;
    $v = $acf ? get_post_meta(get_the_ID(), $name, true) : '';
    return $v ?: $default;
};

$acc_default_content = '<h2>Our Commitment</h2>
<p>At Ashton Court Hotel, we are committed to providing a welcoming and comfortable experience for all our guests, regardless of ability or disability. We continually strive to improve accessibility across our hotel and our website to ensure everyone can enjoy their stay on the beautiful Devon coast.</p>

<h2>Hotel Accessibility</h2>

<h3>Getting Here</h3>
<ul>
<li>The hotel is located at 5-6 Louisa Terrace, Exmouth, with on-site parking available (subject to availability).</li>
<li>The main entrance is accessible from street level.</li>
<li>Exmouth railway station is approximately 1 mile from the hotel.</li>
</ul>

<h3>Inside the Hotel</h3>
<ul>
<li>Ashton Court Hotel is a traditional Victorian building. Due to the historic nature of the property, some areas may have limited accessibility.</li>
<li>Ground floor rooms are available for guests with mobility difficulties — please request at the time of booking.</li>
<li>The hotel does not currently have a lift. Upper floor rooms are accessed via stairs.</li>
<li>Our reception team are always available to assist guests with luggage and any other requirements.</li>
</ul>

<h3>Dining</h3>
<ul>
<li>Our breakfast room is accessible on the ground floor.</li>
<li>We are happy to accommodate dietary requirements, allergies, and intolerances — please inform us in advance or at the time of ordering.</li>
<li>Large print menus are available upon request.</li>
</ul>

<h3>Assistance Dogs</h3>
<p>Registered assistance dogs are welcome at Ashton Court Hotel at no additional charge. Please let us know at the time of booking so we can ensure appropriate arrangements are made for your comfort.</p>

<h2>Website Accessibility</h2>
<p>We aim to make our website as accessible as possible. We have taken the following steps:</p>
<ul>
<li>Clear, readable fonts and adequate colour contrast throughout the site.</li>
<li>Alt text on images to support screen reader users.</li>
<li>Logical heading structure for easy navigation.</li>
<li>The website is designed to be responsive and usable across all devices and screen sizes.</li>
<li>Navigation is accessible via keyboard.</li>
</ul>
<p>We are continually working to improve the accessibility of our website and welcome any feedback.</p>

<h2>Need Assistance?</h2>
<p>If you have any specific accessibility requirements, questions, or need assistance planning your stay, please do not hesitate to contact us. Our team will be happy to help:</p>
<ul>
<li><strong>Email:</strong> reception@ashtoncourthotel.co.uk</li>
<li><strong>Phone:</strong> +44 (0)1395 263002</li>
<li><strong>Address:</strong> Ashton Court Hotel, 5-6 Louisa Terrace, Exmouth, Devon EX8 2AQ</li>
</ul>
<p>We are always happy to discuss your individual needs and do our best to accommodate any special requirements to make your stay as enjoyable as possible.</p>

<h2>Feedback</h2>
<p>We value your feedback on our accessibility. If you experience any difficulty accessing our hotel or website, or have suggestions for improvement, please contact us. Your input helps us create a better experience for everyone.</p>';

$acc_content = $f('acc_content', $acc_default_content);
?>

<div class="container"><?php ashton_breadcrumbs(); ?></div>

<article class="single-page legal-page">
    
    <!-- Page Hero -->
    <section class="page-hero">
        <div class="page-hero-content" data-animate="fade-up">
            <h1 class="page-hero-title"><?php echo esc_html($f('acc_title', 'Accessibility')); ?></h1>
        </div>
    </section>
    
    <!-- Page Content -->
    <section class="page-content section-padding">
        <div class="container">
            <div class="legal-content" data-animate="fade-up">
                <p class="legal-updated">Last updated: <?php echo esc_html(date('F Y')); ?></p>
                <?php echo wp_kses_post($acc_content); ?>
            </div>
        </div>
    </section>
</article>

<style>
.legal-content {
    max-width: 800px;
    margin: 0 auto;
}
.legal-updated {
    color: #8A8A8A;
    font-size: 0.875rem;
    font-style: italic;
    margin-bottom: 2.5rem;
    padding-bottom: 1.5rem;
    border-bottom: 1px solid #E8E4DC;
}
.legal-content h2 {
    font-family: var(--font-heading, 'Cormorant Garamond', serif);
    font-size: clamp(1.4rem, 1.2rem + 0.8vw, 1.8rem);
    font-weight: 500;
    color: #1A1A1A;
    margin-top: 2.5rem;
    margin-bottom: 1rem;
}
.legal-content h3 {
    font-family: var(--font-heading, 'Cormorant Garamond', serif);
    font-size: clamp(1.1rem, 1rem + 0.5vw, 1.4rem);
    font-weight: 500;
    color: #1A1A1A;
    margin-top: 1.75rem;
    margin-bottom: 0.75rem;
}
.legal-content p {
    color: #4A4A4A;
    line-height: 1.8;
    margin-bottom: 1rem;
}
.legal-content ul {
    margin-bottom: 1.5rem;
    padding-left: 1.5rem;
}
.legal-content li {
    color: #4A4A4A;
    line-height: 1.8;
    margin-bottom: 0.5rem;
}
.legal-content a {
    color: #B8956B;
    text-decoration: underline;
}
.legal-content a:hover {
    color: #9A7A54;
}
</style>

<?php get_footer(); ?>
