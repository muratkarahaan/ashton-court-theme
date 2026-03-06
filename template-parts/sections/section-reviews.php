<?php
if (!defined('ABSPATH')) exit;

$title      = get_sub_field('title') ?: 'Loved by Our Guests';
$subtitle   = get_sub_field('subtitle') ?: 'Real experiences from real travellers on Google';
$google_url = get_sub_field('google_url') ?: 'https://www.google.com/travel/search?q=ashton+court+hotel';
$reviews    = get_sub_field('review_items');

$default_reviews = array(
    array('text' => 'Stayed here for 3 nights. We had a twin room with sea view and it was wonderful. Dog friendly and so accommodating. The hotel is literally on the sea front. Full English was lovely. Room was spacious, clean with a hot powerful shower. We will definitely be back.', 'author' => 'Shareen Akhtar', 'rating' => 5),
    array('text' => 'Close to the seafront and less than five minutes to the beach. The rooms are lovely with charm. Really spacious with comfortable beds. Stunning sea views right across the Riviera. The staff are friendly and helpful. Will definitely come again!', 'author' => 'O James', 'rating' => 5),
    array('text' => 'Very close to beach and the panoramic views are amazing. Watching boats, ferries up and down the estuary. Well situated and easily accessed. The stay was great and relaxing. Loved the smart TV! Lots to do nearby - watersports, cycling, walking along the promenade.', 'author' => 'Ann Illingworth', 'rating' => 5),
    array('text' => 'The location was fantastic - only a 2 minute walk to the sea front. I stayed in a single room which was very spacious with a tidy ensuite bathroom. The staff were all very friendly and welcoming with a laid back, relaxed atmosphere. Breakfast was great, fresh cooked to order!', 'author' => 'Stacey Wall', 'rating' => 5),
);

if (empty($reviews)) $reviews = $default_reviews;

$star_svg = '<svg viewBox="0 0 24 24" fill="#BF9B60"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>';
$quote_svg = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1"><path d="M3 21c3 0 7-1 7-8V5c0-1.25-.756-2.017-2-2H4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2 1 0 1 0 1 1v1c0 1-1 2-2 2s-1 .008-1 1.031V21c0 1 0 1 1 1z"/><path d="M15 21c3 0 7-1 7-8V5c0-1.25-.757-2.017-2-2h-4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2h.75c0 2.25.25 4-2.75 4v3c0 1 0 1 1 1z"/></svg>';
?>

<section class="google-reviews-section" id="reviews">
    <div class="reviews-container">
        <div class="reviews-header" data-animate="fade-up">
            <h2 class="reviews-title"><?php echo esc_html($title); ?></h2>
            <p class="reviews-subtitle"><?php echo esc_html($subtitle); ?></p>
        </div>

        <div class="reviews-grid-premium">
            <?php $delay = 0; foreach ($reviews as $review) : ?>
                <article class="review-card-premium" data-animate="fade-up"<?php if ($delay > 0) echo ' data-delay="' . esc_attr($delay) . '"'; ?>>
                    <div class="review-quote-icon"><?php echo $quote_svg; ?></div>
                    <div class="review-stars-row">
                        <?php $rating = isset($review['rating']) ? intval($review['rating']) : 5;
                        for ($s = 0; $s < $rating; $s++) echo $star_svg; ?>
                    </div>
                    <p class="review-text-premium">&ldquo;<?php echo esc_html($review['text']); ?>&rdquo;</p>
                    <div class="review-author-premium">
                        <span class="author-name-premium"><?php echo esc_html($review['author']); ?></span>
                        <span class="author-source">Google Review</span>
                    </div>
                </article>
            <?php $delay += 100; endforeach; ?>
        </div>

        <div class="reviews-cta" data-animate="fade-up">
            <a href="<?php echo esc_url($google_url); ?>" target="_blank" rel="noopener" class="btn-view-reviews">
                <svg class="google-icon-small" viewBox="0 0 24 24" width="20" height="20">
                    <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                    <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                    <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                    <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                </svg>
                <span>Read All Reviews on Google</span>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="7" y1="17" x2="17" y2="7"/><polyline points="7 7 17 7 17 17"/></svg>
            </a>
        </div>
    </div>
</section>
