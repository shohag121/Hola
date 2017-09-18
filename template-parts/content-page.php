<?php
/**
 * Template part for displaying page content in page.php
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
	<?php endif; ?>
    <div class="blog-info">
        <div class="blog-text blog-details-post">
            <h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
        </div><!-- .blog-text .blog-details-post -->
    </div><!-- .blog-info -->
</div><!-- .single-blog mb-60 -->