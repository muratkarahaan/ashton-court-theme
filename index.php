<?php
if (!defined('ABSPATH')) exit;
/**
 * The main template file
 *
 * @package Ashton_Court
 */

get_header();
?>

<div class="container"><?php ashton_breadcrumbs(); ?></div>

<section class="archive-section section-padding">
    <div class="container">
        
        <?php if (is_home() && !is_front_page()) : ?>
            <header class="archive-header">
                <h1 class="archive-title"><?php single_post_title(); ?></h1>
            </header>
        <?php endif; ?>
        
        <?php if (have_posts()) : ?>
            
            <div class="posts-grid">
                <?php while (have_posts()) : the_post(); ?>
                    
                    <article id="post-<?php the_ID(); ?>" <?php post_class('post-card'); ?>>
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="post-card-image">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('room-card'); ?>
                                </a>
                            </div>
                        <?php endif; ?>
                        
                        <div class="post-card-content">
                            <div class="post-card-meta">
                                <time datetime="<?php echo get_the_date('c'); ?>">
                                    <?php echo get_the_date(); ?>
                                </time>
                            </div>
                            
                            <h2 class="post-card-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            
                            <div class="post-card-excerpt">
                                <?php the_excerpt(); ?>
                            </div>
                            
                            <a href="<?php the_permalink(); ?>" class="link-arrow" aria-label="<?php echo esc_attr('Read more about ' . get_the_title()); ?>">
                                <span>Read More</span>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <line x1="5" y1="12" x2="19" y2="12"/>
                                    <polyline points="12 5 19 12 12 19"/>
                                </svg>
                            </a>
                        </div>
                    </article>
                    
                <?php endwhile; ?>
            </div>
            
            <div class="archive-pagination">
                <?php
                the_posts_pagination(array(
                    'mid_size'  => 2,
                    'prev_text' => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="15 18 9 12 15 6"/></svg>',
                    'next_text' => '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>',
                ));
                ?>
            </div>
            
        <?php else : ?>
            
            <div class="no-posts">
                <h1>No posts found</h1>
                <p>There are no posts to display at this time.</p>
            </div>
            
        <?php endif; ?>
        
    </div>
</section>

<style>
.archive-section {
    padding-top: calc(var(--header-height) + var(--space-section));
}

.archive-header {
    margin-bottom: var(--space-4xl);
}

.archive-title {
    font-size: var(--text-4xl);
}

.posts-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: var(--space-2xl);
}

@media (min-width: 768px) {
    .posts-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (min-width: 1024px) {
    .posts-grid {
        grid-template-columns: repeat(3, 1fr);
    }
}

.post-card {
    background: var(--color-bg);
    overflow: hidden;
    transition: transform var(--duration-normal) var(--ease-smooth),
                box-shadow var(--duration-normal) var(--ease-smooth);
}

.post-card:hover {
    transform: translateY(-4px);
    box-shadow: var(--shadow-lg);
}

.post-card-image {
    aspect-ratio: 16/10;
    overflow: hidden;
}

.post-card-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform var(--duration-slow) var(--ease-smooth);
}

.post-card:hover .post-card-image img {
    transform: scale(1.05);
}

.post-card-content {
    padding: var(--space-xl);
}

.post-card-meta {
    font-size: var(--text-xs);
    color: var(--color-text-muted);
    text-transform: uppercase;
    letter-spacing: 0.1em;
    margin-bottom: var(--space-md);
}

.post-card-title {
    font-size: var(--text-xl);
    margin-bottom: var(--space-md);
}

.post-card-title a {
    color: var(--color-text);
}

.post-card-title a:hover {
    color: var(--color-accent);
}

.post-card-excerpt {
    color: var(--color-text-muted);
    font-size: var(--text-sm);
    margin-bottom: var(--space-lg);
}

.archive-pagination {
    margin-top: var(--space-4xl);
    display: flex;
    justify-content: center;
}

.archive-pagination .nav-links {
    display: flex;
    gap: var(--space-sm);
}

.archive-pagination a,
.archive-pagination span {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    border: 1px solid var(--color-border);
    transition: all var(--duration-fast) var(--ease-smooth);
}

.archive-pagination a:hover {
    background: var(--color-text);
    border-color: var(--color-text);
    color: var(--color-text-light);
}

.archive-pagination .current {
    background: var(--color-accent);
    border-color: var(--color-accent);
    color: var(--color-text-light);
}

.no-posts {
    text-align: center;
    padding: var(--space-5xl) 0;
}

.no-posts h2 {
    margin-bottom: var(--space-md);
}

.no-posts p {
    color: var(--color-text-muted);
}
</style>

<?php get_footer(); ?>
