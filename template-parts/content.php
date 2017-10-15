<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WPGeeky
 */
global $wpgeeky_options;
?>

<div <?php post_class( 'single-blog mb-60' ); ?> id="post-<?php the_ID(); ?>">
	<?php if ( $wpgeeky_options['blog-settings-featured-image'] ):
		if ( has_post_thumbnail() ): ?>
            <div class="blog-img">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'blog-img' ); ?></a>
            </div><!-- .blog-img -->
		<?php else: ?>
            <div class="blog-img">
                <a href="<?php the_permalink(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder.png" alt="Blog Thumbnail">
                </a>
            </div><!-- .blog-img -->
		<?php endif;
	endif; ?>
    <div class="blog-info">
		<?php if ( $wpgeeky_options['blog-settings-meta'] ): ?>
            <div class="blog-meta">
                <span><?php
	                // Post Author
	                if ( $wpgeeky_options['blog-settings-meta-author'] ) {
		                echo esc_html__( 'By ', 'wpgeeky' );
		                the_author_posts_link();
		                echo esc_html( '&nbsp;&nbsp;&nbsp;&nbsp;' );
	                }
	                // Post Date
	                if ( $wpgeeky_options['blog-settings-meta-date'] ) {
		                echo esc_html__( 'On ' , 'wpgeeky') . get_the_date() . esc_html( '&nbsp;&nbsp;&nbsp;&nbsp;' );;
	                }
	                // Post Category
	                if ( $wpgeeky_options['blog-settings-meta-cat'] ) {
		                echo esc_html__( 'In ', 'wpgeeky' );
		                the_category( ', ' );
		                echo esc_html( '&nbsp;&nbsp;&nbsp;&nbsp;' );
	                }
	                //Comment Count
	                if ( $wpgeeky_options['blog-settings-meta-comment'] ) {
		                comments_popup_link(
			                esc_html__( 'No comments yet', 'wpgeeky' ),
			                esc_html__( '1 Comment', 'wpgeeky' ),
			                esc_html__( '% Comments', 'wpgeeky' ),
			                '',
			                esc_html__( 'Comments are off for this post', 'wpgeeky' )
		                );
	                }
	                ?></span>
            </div><!-- .blog-meta -->
		<?php endif; ?>
        <div class="blog-text <?php echo is_single() ? 'blog-details-post' : ''; ?>">
			<?php if ( is_single() ) :
				the_title( '<h1>', '</h1>' );
				the_content();
				$args = array(
					'before'           => '<div class="nav-pagination">',
					'after'            => '</div>',
					'link_before'      => '',
					'link_after'       => '',
					'next_or_number'   => 'next',
					'separator'        => ' ',
					'nextpagelink'     => esc_html__( 'Continue Reading', 'wpgeeky' ),
					'previouspagelink' => esc_html__( 'Previous Content', 'wpgeeky' ),
					'pagelink'         => '%',
					'echo'             => 1
				);
				wp_link_pages( $args );
				// post tags
				the_tags( '<div class="meta-tag">', '', '</div>' );
                else: ?>
                <h3>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h3>
				<?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>" class="readmore"><?php echo esc_html( $wpgeeky_options['blog-settings-readmore'] ); ?></a>
			<?php endif; ?>
        </div><!-- .blog-text -->
    </div><!-- .blog-info -->
</div><!-- .single-blog .mb-60 -->




