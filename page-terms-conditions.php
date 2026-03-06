<?php
if (!defined('ABSPATH')) exit;
/**
 * Template Name: Terms & Conditions
 * Page for displaying the Terms & Conditions
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

$terms_default = '<h2>1. Reservations &amp; Bookings</h2>
<p>All reservations are subject to availability and are confirmed upon receipt of a valid credit or debit card. By making a reservation at Ashton Court Hotel, you agree to these Terms &amp; Conditions. Reservations can be made via our website, by telephone on +44 (0)1395 263002, or by email to reception@ashtoncourthotel.co.uk.</p>

<h2>2. Check-In &amp; Check-Out</h2>
<ul>
<li><strong>Check-in:</strong> From 3:00 PM onwards</li>
<li><strong>Check-out:</strong> By 10:30 AM</li>
<li>Early check-in and late check-out may be available upon request, subject to availability and may incur additional charges.</li>
<li>Guests are required to present a valid form of identification upon check-in.</li>
</ul>

<h2>3. Cancellation Policy</h2>
<p>Our standard cancellation policy is as follows:</p>
<ul>
<li><strong>Free cancellation:</strong> Up to 48 hours before the scheduled arrival date.</li>
<li><strong>Late cancellation:</strong> Cancellations made within 48 hours of arrival will be charged the first night&rsquo;s room rate.</li>
<li><strong>No-show:</strong> Failure to arrive without prior notice will result in a charge of the full booking amount.</li>
<li><strong>Peak periods &amp; special events:</strong> During bank holidays, peak season (July-August), and special events, a non-refundable deposit or different cancellation terms may apply.</li>
</ul>

<h2>4. Payment</h2>
<ul>
<li>We accept all major credit and debit cards (Visa, Mastercard, American Express).</li>
<li>Full payment is required upon check-out unless prior arrangements have been made.</li>
<li>A valid credit or debit card is required to guarantee your reservation.</li>
<li>All rates are quoted in British Pounds (GBP) and are inclusive of VAT at the current rate.</li>
</ul>

<h2>5. Room Rates &amp; Pricing</h2>
<p>Room rates are per room per night and include:</p>
<ul>
<li>Ensuite accommodation</li>
<li>Full English breakfast</li>
<li>Complimentary Wi-Fi</li>
<li>VAT at the prevailing rate</li>
</ul>
<p>Rates may vary depending on the season, room type, and length of stay. The rate confirmed at the time of booking will be honoured.</p>

<h2>6. Parking</h2>
<p>Complimentary on-site parking is available for hotel guests, subject to availability. Ashton Court Hotel cannot accept responsibility for any loss or damage to vehicles or their contents whilst parked on our premises.</p>

<h2>7. Guest Conduct</h2>
<p>We reserve the right to refuse service or ask guests to leave the premises if their behaviour is deemed unacceptable, disruptive, or dangerous to other guests, staff, or the property. In such cases, no refund will be provided.</p>

<h2>8. Smoking Policy</h2>
<p>Ashton Court Hotel is a non-smoking establishment. Smoking (including e-cigarettes and vaping) is not permitted anywhere inside the hotel. Designated outdoor smoking areas are available. A cleaning charge of &pound;150 will apply if evidence of smoking is found in any room.</p>

<h2>9. Pets</h2>
<p>Unfortunately, we are unable to accommodate pets at Ashton Court Hotel, with the exception of registered assistance dogs. Please contact us in advance if you require an assistance dog so we can make appropriate arrangements.</p>

<h2>10. Damage &amp; Liability</h2>
<p>Guests are responsible for any damage caused to hotel property during their stay. The cost of repair or replacement will be charged to the guest&rsquo;s account. Ashton Court Hotel does not accept liability for loss, damage, or theft of guests&rsquo; personal belongings. We recommend that guests ensure their travel insurance covers personal possessions.</p>

<h2>11. Children</h2>
<p>Children of all ages are welcome at Ashton Court Hotel. Children under 12 may share a room with their parents at no additional charge, subject to existing bedding. Cots and additional beds may be available upon request.</p>

<h2>12. Website &amp; Booking Engine</h2>
<p>Online bookings are processed securely through our third-party booking partner, Clock PMS. By making an online booking, you also agree to the terms and conditions of our booking platform provider. We make every effort to ensure that the information on our website is accurate and up to date, but we reserve the right to correct any errors.</p>

<h2>13. Force Majeure</h2>
<p>Ashton Court Hotel shall not be held liable for any failure to perform its obligations where such failure results from circumstances beyond our reasonable control, including but not limited to natural disasters, severe weather, fire, pandemic, government actions, or industrial disputes.</p>

<h2>14. Governing Law</h2>
<p>These Terms &amp; Conditions are governed by the laws of England and Wales. Any disputes arising from these terms shall be subject to the exclusive jurisdiction of the English courts.</p>

<h2>15. Contact Us</h2>
<p>If you have any questions regarding these Terms &amp; Conditions, please contact us:</p>
<ul>
<li><strong>Email:</strong> reception@ashtoncourthotel.co.uk</li>
<li><strong>Phone:</strong> +44 (0)1395 263002</li>
<li><strong>Address:</strong> Ashton Court Hotel, 5-6 Louisa Terrace, Exmouth, Devon EX8 2AQ</li>
</ul>';

$terms_content = $f('terms_content', $terms_default);
?>

<div class="container"><?php ashton_breadcrumbs(); ?></div>

<article class="single-page legal-page">
    
    <!-- Page Hero -->
    <section class="page-hero">
        <div class="page-hero-content" data-animate="fade-up">
            <h1 class="page-hero-title"><?php echo esc_html($f('terms_title', 'Terms & Conditions')); ?></h1>
        </div>
    </section>
    
    <!-- Page Content -->
    <section class="page-content section-padding">
        <div class="container">
            <div class="legal-content" data-animate="fade-up">
                <p class="legal-updated">Last updated: <?php echo esc_html(date('F Y')); ?></p>
                <?php echo wp_kses_post($terms_content); ?>
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
