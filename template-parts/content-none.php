<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WPGeeky
 */

?>

<div class="row">
    <div class="col-md-8 col-sm-8">
        <div class="single-blog mb-60">
			<?php
			if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
                <p><?php
					printf(
						wp_kses(
						/* translators: 1: link to WP admin new post page. */
							__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'wpgeeky' ),
							array(
								'a' => array(
									'href' => array(),
                                ),
                            )
						),
						esc_url( admin_url( 'post-new.php' ) )
					);
					?></p>
			<?php elseif ( is_search() ) : ?>
                <h3><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'wpgeeky' ); ?></h3>
				<?php
				get_search_form();
			else : ?>
                <h3><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'wpgeeky' ); ?></h3>
				<?php
				get_search_form();
			endif; ?>
        </div><!-- .single-blog mb-60 -->
    </div><!-- .col-md-8 col-sm-8 -->
	<?php get_sidebar(); ?>
</div><!-- .row -->