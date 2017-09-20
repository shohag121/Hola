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
			<?php
            the_content();
			$args = array(
				'before'           => '<div class="nav-pagination">',
				'after'            => '</div>',
				'link_before'      => '',
				'link_after'       => '',
				'next_or_number'   => 'next',
				'separator'        => ' ',
				'nextpagelink'     => esc_html__( 'Continue Reading', 'hola' ),
				'previouspagelink' => esc_html__( 'Previous Content', 'hola' ),
				'pagelink'         => '%',
				'echo'             => 1
			);
			wp_link_pages( $args );
			?>
        </div><!-- .blog-text .blog-details-post -->
    </div><!-- .blog-info -->
</div><!-- .single-blog mb-60 -->