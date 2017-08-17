<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Hola
 */

get_header(); ?>


<?php get_template_part('template-parts/breadcrumbs'); ?>
    <!-- blog-section-start -->
    <section class="blog-area blog-page ptb-120">
        <div class="container">
			
			<?php
			
			if ( have_posts() ) : ?>
                <div class="row">
                    <div class="col-md-8 col-sm-8">
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
				
				hola_numeric_posts_nav();
			
			else :
				
				get_template_part( 'template-parts/content', 'none' );
			
			endif; ?>
        </div>
    </section>
    <!-- blog-section-end -->
<?php
get_footer();
