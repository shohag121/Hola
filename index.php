<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Hola
 */
global $hola_options;
get_header(); ?>


<?php get_template_part( 'template-parts/breadcrumbs' ); ?>
    <!-- blog-section-start -->
    <section class="blog-area blog-page ptb-120">
        <div class="container">
			
			<?php
			if ( have_posts() ) : ?>
                <div class="row">
                    <div class="<?php echo ( $hola_options['blog-settings-sidebar'] == 'none' ) ? 'col-xs-12' : ( ( $hola_options['blog-settings-sidebar'] == 'left' ) ? 'col-sm-8 col-md-8 col-md-push-4' : 'col-md-8 col-sm-8' ); ?>">
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
                                </div>
								<?php
							endwhile;
							?>
                        </div>
                    </div>
					<?php get_sidebar(); ?>
                </div>
				
				
				<?php
				
                // Page navigation
				hola_numeric_posts_nav();
			
			else :
				
				get_template_part( 'template-parts/content', 'none' );
			
			endif; ?>
        </div>
    </section>
    <!-- blog-section-end -->

<?php
get_footer();
