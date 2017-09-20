<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Hola
 */

?>

<div <?php post_class( 'single-blog mb-60' ); ?> id="post-<?php the_ID(); ?>">
	<?php if ( has_post_thumbnail() ): ?>
        <div class="blog-img">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'blog-img' ); ?></a>
        </div><!-- .blog-img -->
	<?php else: ?>
        <div class="blog-img">
            <a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder.png" alt="Blog Thumbnail"></a>
        </div><!-- .blog-img -->
	<?php endif; ?>
    <div class="blog-info">
        <div class="blog-meta">
            <span><?php echo esc_html__('By ', 'hola');the_author_posts_link(); ?>
                , <?php echo esc_html__('On ','hola') . get_the_date(); ?>
                , <?php comments_popup_link( esc_html__( 'No comments yet', 'hola' ), esc_html__( '1 Comment', 'hola' ), esc_html__( '% Comments', 'hola' ), '', esc_html__( 'Comments are off for this post', 'hola' ) ); ?></span>
        </div><!-- .blog-meta -->
        <div class="blog-text <?php echo is_single() ? 'blog-details-post' : ''; ?> ">
            <h3>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h3>
			<?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>" class="readmore">Read more</a>
        </div><!-- .blog-text -->
    </div><!-- .blog-info -->
</div><!-- .single-blog .mb-60 -->