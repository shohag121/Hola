<?php
/**
 * The template for displaying all single portfolio
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WPGeeky
 */

get_header(); ?>

<?php get_template_part( 'template-parts/breadcrumbs' ); ?>

    <!--portfolio-details-section-start-->
    <section class="portfolio-details-area ptb-120">
        <div class="container">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="row">
					<?php if ( $files = get_post_meta( get_the_ID(), '_wpgeeky_project_images', 1 ) ) : ?>
                        <div class="col-md-12">
                            <div class="portfolio-details portfolio-slider owl-carousel">
								<?php
								foreach ( (array) $files as $attachment_id => $attachment_url ) {
									echo wp_get_attachment_image( $attachment_id, 'portfolio-img' );
								} ?>
                            </div><!-- .portfolio-details .portfolio-slider .owl-carousel -->
                        </div><!-- .col-md-12 -->
					<?php endif; ?>
					<?php if ( get_post_meta( get_the_ID(), '_wpgeeky_project_video', 1 ) ): ?>
                        <div class="col-md-12">
                            <div class="portfolio-details mt-30">
	                            <?php
                                //get the oEmbed codes
                                $embed_code = wp_oembed_get( esc_url( get_post_meta( get_the_ID(), '_wpgeeky_project_video', 1 ) ), array('class'=>'portfolio-video'));
	                            echo $embed_code;
	                            ?>
                            </div><!-- .portfolio-details .mt-30 -->
                        </div><!-- .col-md-12 -->
					<?php endif; ?>
					<?php if ( has_post_thumbnail() ): ?>
                        <div class="col-md-12">
                            <div class="portfolio-details mt-30">
								<?php the_post_thumbnail( 'portfolio-img' ); ?>
                            </div><!-- .portfolio-details .mt-30 -->
                        </div><!-- .col-md-12 -->
					<?php endif; ?>
                </div><!-- .row -->
                <div class="row pt-60">
                    <div class="col-md-4">
                        <div class="portfolio-meta gray-bg">
                            <ul>
                                <li>
                                    <i class="fa fa-user"></i><span><?php echo esc_html__('Client Name: ', 'wpgeeky'); ?></span><?php echo esc_html( get_post_meta( get_the_ID(), '_wpgeeky_project_client', 1 ) ); ?>
                                </li>
                                <li>
                                    <i class="fa fa-calendar"></i><span><?php echo esc_html__('Completed on: ', 'wpgeeky'); ?></span><?php echo esc_html( get_post_meta( get_the_ID(), '_wpgeeky_project_date', 1 ) ); ?>
                                </li>
                                <li>
                                    <i class="fa fa-coffee"></i><span><?php echo esc_html__('Skills: ', 'wpgeeky'); ?></span><?php
									$skills = get_post_meta( get_the_ID(), '_wpgeeky_project_skills', 1 );
									foreach ( $skills as $skill ) {
										echo esc_html( $skill );
										if ( ! ( end( $skills ) === $skill ) ) {
											echo esc_html(' / ');
										}
									}
									?>
                                </li>
                                <li>
                                    <i class="fa fa-link"></i><span><?php echo esc_html__('Demo:', 'wpgeeky'); ?></span>
                                    <a href="<?php echo esc_url( get_post_meta( get_the_ID(), '_wpgeeky_project_url', 1 ) ); ?>">Live link</a></li>
                            </ul>
                        </div><!-- .portfolio-meta gray-bg -->
                    </div><!-- .col-md-4 -->
                    <div class="col-md-8">
                        <div class="project-desc">
                            <h3><?php the_title(); ?></h3>
							<?php the_content(); ?>
                        </div><!-- .project-desc -->
                    </div><!-- .col-md-8 -->
                </div><!-- .row .pt-60 -->
			<?php endwhile;
			else :
				get_template_part( 'template-parts/content', 'none' );
			endif; ?>
        </div><!-- .container -->
    </section><!-- .portfolio-details-area ptb-120 -->
    <!--portfolio-details-section-end-->
<?php
get_footer();