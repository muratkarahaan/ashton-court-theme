<?php
if (!defined('ABSPATH')) exit;
/**
 * Template Name: Privacy Policy
 * Page for displaying the Privacy Policy
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

$privacy_default = '<h2>1. Introduction</h2>
<p>Ashton Court Hotel (&ldquo;we&rdquo;, &ldquo;our&rdquo;, &ldquo;us&rdquo;) is committed to protecting and respecting your privacy. This Privacy Policy explains how we collect, use, store, and protect your personal information when you visit our website, make a reservation, or stay at our hotel located at 5-6 Louisa Terrace, Exmouth, Devon EX8 2AQ, United Kingdom.</p>

<h2>2. Information We Collect</h2>
<p>We may collect the following types of personal information:</p>
<ul>
<li><strong>Booking Information:</strong> Name, email address, telephone number, postal address, payment card details, arrival and departure dates, room preferences, and any special requests.</li>
<li><strong>Website Usage:</strong> IP address, browser type, pages visited, time spent on pages, and other analytical data through cookies.</li>
<li><strong>Communication:</strong> Records of correspondence if you contact us by email, telephone, or through our website contact form.</li>
<li><strong>Guest Records:</strong> Information provided during your stay, including dietary requirements, accessibility needs, and feedback.</li>
</ul>

<h2>3. How We Use Your Information</h2>
<p>We use your personal information for the following purposes:</p>
<ul>
<li>To process and manage your room reservations</li>
<li>To provide you with hotel services during your stay</li>
<li>To communicate with you regarding your booking or enquiry</li>
<li>To process payments securely</li>
<li>To send you marketing communications (only with your consent)</li>
<li>To improve our website and services</li>
<li>To comply with legal and regulatory obligations</li>
</ul>

<h2>4. Legal Basis for Processing</h2>
<p>We process your personal data under the following legal bases as defined by the UK General Data Protection Regulation (UK GDPR):</p>
<ul>
<li><strong>Contract:</strong> Processing necessary to fulfil your booking and provide our services.</li>
<li><strong>Legitimate Interest:</strong> To improve our services and manage our business operations.</li>
<li><strong>Consent:</strong> For marketing communications and non-essential cookies.</li>
<li><strong>Legal Obligation:</strong> To comply with applicable laws and regulations.</li>
</ul>

<h2>5. Data Sharing</h2>
<p>We may share your personal information with:</p>
<ul>
<li><strong>Payment Processors:</strong> To securely handle transactions.</li>
<li><strong>Booking Platforms:</strong> Such as Clock PMS, our property management system, to manage reservations.</li>
<li><strong>Service Providers:</strong> Third parties who assist in operating our website and business, bound by confidentiality agreements.</li>
<li><strong>Legal Authorities:</strong> When required by law or to protect our rights.</li>
</ul>
<p>We will never sell your personal information to third parties.</p>

<h2>6. Cookies</h2>
<p>Our website uses cookies to enhance your browsing experience. Cookies are small text files stored on your device. We use:</p>
<ul>
<li><strong>Essential Cookies:</strong> Required for the website to function properly.</li>
<li><strong>Analytics Cookies:</strong> To understand how visitors interact with our website.</li>
<li><strong>Third-Party Cookies:</strong> From services such as our booking engine.</li>
</ul>
<p>You can manage your cookie preferences through your browser settings.</p>

<h2>7. Data Retention</h2>
<p>We retain your personal data only for as long as necessary to fulfil the purposes for which it was collected, typically for a period of up to 6 years after your last stay, in accordance with our legal and business obligations.</p>

<h2>8. Your Rights</h2>
<p>Under the UK GDPR, you have the following rights:</p>
<ul>
<li>The right to access your personal data</li>
<li>The right to rectification of inaccurate data</li>
<li>The right to erasure (&ldquo;right to be forgotten&rdquo;)</li>
<li>The right to restrict processing</li>
<li>The right to data portability</li>
<li>The right to object to processing</li>
<li>The right to withdraw consent at any time</li>
</ul>
<p>To exercise any of these rights, please contact us using the details below.</p>

<h2>9. Data Security</h2>
<p>We implement appropriate technical and organisational measures to protect your personal data against unauthorised access, alteration, disclosure, or destruction. All payment transactions are encrypted and processed through secure, PCI-compliant systems.</p>

<h2>10. Contact Us</h2>
<p>If you have any questions about this Privacy Policy or wish to exercise your rights, please contact us:</p>
<ul>
<li><strong>Email:</strong> reception@ashtoncourthotel.co.uk</li>
<li><strong>Phone:</strong> +44 (0)1395 263002</li>
<li><strong>Address:</strong> Ashton Court Hotel, 5-6 Louisa Terrace, Exmouth, Devon EX8 2AQ</li>
</ul>
<p>You also have the right to lodge a complaint with the Information Commissioner&rsquo;s Office (ICO) at <a href="https://ico.org.uk" target="_blank" rel="noopener">ico.org.uk</a>.</p>';

$privacy_content = $f('privacy_content', $privacy_default);
?>

<div class="container"><?php ashton_breadcrumbs(); ?></div>

<article class="single-page legal-page">
    
    <!-- Page Hero -->
    <section class="page-hero">
        <div class="page-hero-content" data-animate="fade-up">
            <h1 class="page-hero-title"><?php echo esc_html($f('privacy_title', 'Privacy Policy')); ?></h1>
        </div>
    </section>
    
    <!-- Page Content -->
    <section class="page-content section-padding">
        <div class="container">
            <div class="legal-content" data-animate="fade-up">
                <p class="legal-updated">Last updated: <?php echo esc_html(date('F Y')); ?></p>
                <?php echo wp_kses_post($privacy_content); ?>
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
