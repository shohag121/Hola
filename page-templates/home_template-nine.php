<?php
/**
 * Template Name: Home Style 9
 *
 * @package WPGeeky
 * @since WPGeeky 1.0
 */

get_header( 'two' );
global $wpgeeky_options;
?>
    <!-- slider-section-start -->
    <section class="slider-area pt-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="slider-text text-center slider-text-7">
                        <h1><?php echo esc_html( $wpgeeky_options['home-slider-h1'] ); ?></h1>
                        <h2><?php echo esc_html( $wpgeeky_options['home-slider-h2'] ); ?></h2>
                        <h3><?php echo esc_html( $wpgeeky_options['home-slider-p1'] ); ?></h3>
                    </div><!-- .slider-text .text-center .slider-text-7 -->
                </div><!-- .col-lg-12 -->
            </div><!-- .row -->
        </div><!-- .container -->
    </section><!-- .slider-area .pt-80 -->
    <!-- slider-section-end -->

    <!-- portfolio-section-start -->
    <section class="portfolio-area portfolio-area-2 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="portfolio-menu mb-30">
                        <button class="active" data-filter="*">ALL</button>
						<?php
						//get all Categoryies from portfolio_category
						$terms = get_terms( array(
							'taxonomy'   => 'portfolio_category',
							'orderby'    => 'name',
							'order'      => 'ASC',
							'hide_empty' => false,
                        ) );
						foreach ( $terms as $term ) {
							echo '<button data-filter=".' . esc_attr( $term->slug ) . '">' . esc_html( $term->name ) . '</button>';
						}
						?>
                    </div><!-- .portfolio-menu .mb-30 -->
                </div><!-- .col-lg-12 -->
            </div><!-- .row -->
			<?php
			// get 10 portfolios
			$portfolios = new WP_Query( array(
				'post_type'      => 'wpgeeky_portfolio',
				'posts_per_page' => 10,
			) );
			if ( $portfolios->have_posts() ) : ?>
                <div class="row">
                    <div class="grid">
                        <!-- the loop -->
						<?php while ( $portfolios->have_posts() ) : $portfolios->the_post();
							$img_size = get_post_meta( get_the_ID(), '_wpgeeky_project_img_size', 1 ); ?>
                            <div class="col-md-4 col-sm-6 col-xs-12 grid-item <?php
							$portfolio_names = get_the_terms( get_the_ID(), 'portfolio_category' );
							foreach ( $portfolio_names as $portfolio_name ) {
								echo esc_attr( $portfolio_name->slug ) . esc_attr(' ');
							}
							?>">
                                <div class="single-portfolio">
                                    <div class="portfolio-img">
										<?php
										//Defining Image size
										if ( $img_size == 'w' ) {
											the_post_thumbnail( 'portfolio-single-w' );
										} elseif ( $img_size == 'h' ) {
											the_post_thumbnail( 'portfolio-single-h' );
										} elseif ( $img_size == 'wh' ) {
											the_post_thumbnail( 'portfolio-single-hw' );
										} else {
											the_post_thumbnail( 'portfolio-single' );
										}
										?>
                                    </div><!-- .portfolio-img -->
                                    <div class="portfolio-text">
                                        <div class="text-container">
                                            <div class="text-wrapper">
                                                <a class="img-poppu"
                                                   href="<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'full' ) ); ?>">
                                                    <p class="icon-animation">
                                                        <span class="icon-focus"></span>
                                                    </p>
                                                </a><!-- .img-poppu -->
                                                <h3 class="text-animation">
                                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                </h3><!-- .text-animation -->
                                                <span><?php
													$portfolio_names = get_the_terms( get_the_ID(), 'portfolio_category' );
													foreach ( $portfolio_names as $portfolio_name ) {
														echo esc_html( $portfolio_name->name );
														if ( ! ( end( $portfolio_names ) === $portfolio_name ) ) {
															echo esc_html(", ");
														}
													}
													?></span>
                                            </div><!-- .text-wrapper -->
                                        </div><!-- .text-container -->
                                    </div><!-- .portfolio-text -->
                                </div><!-- .single-portfolio -->
                            </div><!-- .grid-item -->
						<?php endwhile; ?>
                        <!-- end of the loop -->
						<?php wp_reset_postdata(); ?>
                    </div><!-- .grid -->
                </div><!-- .row -->
                <div class="view-more text-center">
                    <a href="<?php echo esc_url( get_post_type_archive_link( 'wpgeeky_portfolio' ) ); ?>">view more</a>
                </div><!-- .view-more text-center -->
			<?php else : ?>
                <p><?php esc_html_e( 'Sorry, no portfolio yet.', 'wpgeeky' ); ?></p>
			<?php endif; ?>
        </div><!-- .container -->
    </section><!-- .slider-area pt-80 -->
    <!-- portfolio-section-end -->
<?php
get_template_part( 'template-parts/progress-counter' );
get_template_part( 'template-parts/team' );
get_footer();