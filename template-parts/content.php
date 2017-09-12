<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Hola
 */
global $hola_options;
?>

<div <?php post_class( 'single-blog mb-60' ); ?> id="post-<?php the_ID(); ?>">
	<?php if ( $hola_options['blog-settings-featured-image'] ):
		if ( has_post_thumbnail() ): ?>
            <div class="blog-img">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'blog-img' ); ?></a>
            </div>
		<?php else: ?>
            <div class="blog-img">
                <a href="<?php the_permalink(); ?>"><img
                            src="<?php echo get_template_directory_uri(); ?>/img/placeholder.png"
                            alt="Blog Thumbnail"></a>
            </div>
		<?php endif;
	endif; ?>
    <div class="blog-info">
		<?php if ( $hola_options['blog-settings-meta'] ): ?>
            <div class="blog-meta">
                <span><?php
	                // Post Author
	                if ( $hola_options['blog-settings-meta-author'] ) {
		                echo esc_html( 'By ' );
		                the_author_posts_link();
		                echo esc_html( '    ' );
	                }
	                // Post Date
	                if ( $hola_options['blog-settings-meta-date'] ) {
		                echo esc_html( 'On ' ) . get_the_date() . esc_html( '   ' );;
	                }
	                // Post Category
	                if ( $hola_options['blog-settings-meta-cat'] ) {
		                echo esc_html( 'In ' );
		                the_category( ', ' );
		                echo esc_html( '    ' );
	                }
	                //Comment Count
	                if ( $hola_options['blog-settings-meta-comment'] ) {
		                comments_popup_link(
			                esc_html__( 'No comments yet', 'hola' ),
			                esc_html__( '1 Comment', 'hola' ),
			                esc_html__( '% Comments', 'hola' ),
			                '',
			                esc_html__( 'Comments are off for this post', 'hola' )
		                );
	                }
	                ?></span>
            </div>
		<?php endif; ?>
        <div class="blog-text <?php echo is_single() ? 'blog-details-post' : ''; ?>">
			<?php if ( is_single() ) :
				the_title( '<h1>', '</h1>' );
				the_content();
			else: ?>
                <h3>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h3>
				<?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>"
                   class="readmore"><?php echo esc_html( $hola_options['blog-settings-readmore'] ); ?></a>
			<?php endif; ?>
        </div>
    </div>
</div>




