<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Hola
 */

?>

<div <?php post_class('single-blog mb-60'); ?> id="post-<?php the_ID(); ?>">
	<?php if ( has_post_thumbnail() ): ?>
    <div class="blog-img">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('blog-img' ); ?></a>
    </div>
	<?php else: ?>
    <div class="blog-img">
        <a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/placeholder.png" alt="Blog Thumbnail"></a>
    </div>
	<?php endif; ?>
    <div class="blog-info">
        <div class="blog-meta">
            <span>By <?php the_author_posts_link(); ?>, On <?php echo get_the_date(); ?>, <?php comments_popup_link( __('No comments yet','hola'), __('1 Comment','hola'), __('% Comments','hola'), '', __('Comments are off for this post', 'hola')); ?></span>
        </div>
        <div class="blog-text <?php echo is_single() ? 'blog-details-post' : ''; ?> ">
			<?php if ( is_single() ) : ?>
                <h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			<?php else: ?>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>" class="readmore">Read more</a>
			<?php endif; ?>
        </div>
    </div>
</div>




