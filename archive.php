<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WPGeeky
 */
global $wpgeeky_options;
get_header();
get_template_part( 'template-parts/breadcrumbs' ); ?>

    <!-- blog-section-start -->
    <section class="blog-area blog-page ptb-120">
        <div class="container">
			<?php
			if ( have_posts() ) : ?>
                <div class="row">
                    <div class="<?php echo esc_attr( ( $wpgeeky_options['blog-settings-sidebar'] == 'none' ) ? 'col-xs-12' : ( ( $wpgeeky_options['blog-settings-sidebar'] == 'left' ) ? 'col-sm-8 col-md-8 col-md-push-4' : 'col-md-8 col-sm-8' ) ); ?>">
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
									?>
                                </div><!-- .col-sm-12 .col-md-12 -->
								<?php
							endwhile;
							?>
                        </div><!-- .row -->
                    </div><!-- .col-md-8 col-sm-8 -->
					<?php get_sidebar(); ?>
                </div><!-- .row -->
				<?php
                // pagination
				wpgeeky_numeric_posts_nav();
			else :
				get_template_part( 'template-parts/content', 'none' );
			endif; ?>
        </div><!-- .container -->
    </section><!-- .blog-area .blog-page .ptb-120 -->
    <!-- blog-section-end -->
<?php
get_footer();