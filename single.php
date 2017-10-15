<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WPGeeky
 */
global $wpgeeky_options;
get_header(); ?>

<?php get_template_part( 'template-parts/breadcrumbs' ); ?>

    <!-- blog-section-start -->
    <section class="blog-area blog-page ptb-120">
        <div class="container">
            <div class="row">
                <div class="<?php echo esc_attr( ( $wpgeeky_options['blog-settings-sidebar'] == 'none' ) ? 'col-xs-12' : ( ( $wpgeeky_options['blog-settings-sidebar'] == 'left' ) ? 'col-sm-8 col-md-8 col-md-push-4' : 'col-md-8 col-sm-8') ); ?>">
                    <div class="row">
						<?php
						
						/* Start the Loop */
						while ( have_posts() ) : the_post(); ?>

                            <div class="col-md-12 col-sm-12">
								<?php
								/*
								 * Include the Post-Format-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
								 */
								get_template_part( 'template-parts/content', get_post_format() );
								//if single post navigation is on
								if ( $wpgeeky_options['blog-settings-post-nav'] ) {
									the_post_navigation();
								}
								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;
								
								?>
                            </div><!-- .col-md-12 .col-sm-12 -->
							<?php
						endwhile;
						?>
                    </div><!-- .row -->
                </div><!-- .col-md-8 .col-sm-8 -->
				<?php get_sidebar(); ?>
            </div><!-- .row -->
        </div><!-- .container -->
    </section><!-- .blog-area .blog-page .ptb-120 -->
    <!-- blog-section-end -->
<?php
get_footer();