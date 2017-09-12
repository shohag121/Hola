<?php
/**
 * The template for displaying all single portfolio
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Hola
 */

get_header(); ?>

<?php get_template_part( 'template-parts/breadcrumbs' ); ?>


    <!--portfolio-details-section-start-->
    <section class="portfolio-details-area ptb-120">
        <div class="container">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="row">
					
					
					<?php if ( $files = get_post_meta( get_the_ID(), '_hola_project_images', 1 ) ) : ?>
                        <div class="col-md-12">

                            <div class="portfolio-details portfolio-slider owl-carousel">
								<?php
								foreach ( (array) $files as $attachment_id => $attachment_url ) {
									echo wp_get_attachment_image( $attachment_id, 'portfolio-img' );
								} ?>
                            </div>
                        </div>
					<?php endif; ?>
					<?php if ( get_post_meta( get_the_ID(), '_hola_project_video', 1 ) ): ?>
                        <div class="col-md-12">
                            <div class="portfolio-details mt-30">
                                <iframe src="<?php echo esc_url( get_post_meta( get_the_ID(), '_hola_project_video', 1 ) ); ?>"
                                        class="portfolio-video"></iframe>
                            </div>
                        </div>
					<?php endif; ?>
					<?php if ( has_post_thumbnail() ): ?>
                        <div class="col-md-12">
                            <div class="portfolio-details mt-30">
								<?php the_post_thumbnail( 'portfolio-img' ); ?>
                            </div>
                        </div>
					<?php endif; ?>
                </div>
                <div class="row pt-60">
                    <div class="col-md-4">
                        <div class="portfolio-meta gray-bg">
                            <ul>
                                <li>
                                    <i class="fa fa-user"></i><span>Client Name:</span><?php echo esc_html( get_post_meta( get_the_ID(), '_hola_project_client', 1 ) ); ?>
                                </li>
                                <li><i class="fa fa-calendar"></i><span>Completed on:</span><?php echo esc_html( get_post_meta( get_the_ID(), '_hola_project_date', 1 ) ); ?>
                                </li>
                                <li>
                                    <i class="fa fa-coffee"></i><span>Skills:</span><?php
									$skills = get_post_meta( get_the_ID(), '_hola_project_skills', 1 );
									foreach ( $skills as $skill ) {
										echo $skill;
										if ( ! ( end( $skills ) === $skill ) ) {
											echo ' / ';
										}
									}
									?></li>
                                <li>
                                    <i class="fa fa-link"></i><span>Demo: </span><a
                                            href="<?php echo esc_url( get_post_meta( get_the_ID(), '_hola_project_url', 1 ) ); ?>">Live
                                        link</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="project-desc">
                            <h3><?php the_title(); ?></h3>
							<?php the_content(); ?>
                        </div>
                    </div>
                </div>
			<?php endwhile;
			else :
				get_template_part( 'template-parts/content', 'none' );
			endif; ?>
        </div>
    </section>
    <!--portfolio-details-section-end-->
<?php
get_footer();