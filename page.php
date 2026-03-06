<?php
if (!defined('ABSPATH')) exit;
/**
 * The template for displaying all pages
 *
 * @package Ashton_Court
 */

get_header();
?>

<div class="container"><?php ashton_breadcrumbs(); ?></div>

<article id="post-<?php the_ID(); ?>" <?php post_class('single-page'); ?>>
    
    <!-- Page Hero -->
    <section class="page-hero">
        <div class="page-hero-content" data-animate="fade-up">
            <h1 class="page-hero-title"><?php the_title(); ?></h1>
        </div>
    </section>
    
    <!-- Page Content -->
    <section class="page-content section-padding">
        <div class="container">
            <div class="page-content-inner" data-animate="fade-up">
                <?php the_content(); ?>
            </div>
        </div>
    </section>
    
</article>

<style>
.single-page .page-content-inner {
    max-width: 800px;
    margin: 0 auto;
}

.single-page .page-content-inner h2 {
    margin-top: var(--space-3xl);
    margin-bottom: var(--space-lg);
}

.single-page .page-content-inner h3 {
    margin-top: var(--space-2xl);
    margin-bottom: var(--space-md);
}

.single-page .page-content-inner p {
    margin-bottom: var(--space-lg);
}

.single-page .page-content-inner ul,
.single-page .page-content-inner ol {
    margin-bottom: var(--space-lg);
    padding-left: var(--space-xl);
}

.single-page .page-content-inner li {
    margin-bottom: var(--space-sm);
}

.single-page .page-content-inner img {
    margin: var(--space-2xl) 0;
}

.single-page .page-content-inner blockquote {
    border-left: 3px solid var(--color-accent);
    padding-left: var(--space-xl);
    margin: var(--space-2xl) 0;
    font-style: italic;
    color: var(--color-text-muted);
}
</style>

<?php get_footer(); ?>
