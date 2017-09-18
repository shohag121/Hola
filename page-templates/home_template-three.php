<?php
/**
 * Template Name: Home Style 3
 *
 * @package Hola
 * @since Hola 1.0
 */

get_header( 'three' );
global $hola_options;
?>
    <!-- slider-section-start -->
    <section class="slider-area slider-area-2 slider-area-3">
		
		<?php
        //Query for all hola_slider
		$the_slider = new WP_Query( array(
			'post_type'      => 'hola_slider',
			'posts_per_page' => - 1,
		) );
		if ( $the_slider->have_posts() ) : ?>
            <div class="slider-active owl-carousel">
                <!-- the loop -->
				<?php while ( $the_slider->have_posts() ) : $the_slider->the_post(); ?>
                    <div class="single-slider bg-opacity-1"
                         style="background: rgba(0, 0, 0, 0) url(<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'slider-img' ) ) ?>) no-repeat scroll center center / cover; height: 600px;">
                        <div class="table">
                            <div class="table-cell">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="slider-text">
												<?php the_content(); ?>
                                            </div><!-- .slider-text -->
                                        </div><!-- .col-lg-12 -->
                                    </div><!-- .row -->
                                </div><!-- .container -->
                            </div><!-- .table-cell -->
                        </div><!-- .table -->
                    </div><!-- .single-slider -->
				<?php endwhile; ?>
                <!-- end of the loop -->
            </div><!-- .slider-active .owl-carousel -->
			<?php wp_reset_postdata(); ?>
		<?php else : ?>
            <div class="single-slider bg-opacity-1" style="height: 600px;">
                <div class="table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="slider-text">
                                        <h2><?php esc_html_e( 'Sorry, no slide matched your criteria.' ,'hola'); ?></h2>
                                    </div><!-- .slider-text -->
                                </div><!-- .col-lg-12 -->
                            </div><!-- .row -->
                        </div><!-- .container -->
                    </div><!-- .table-cell -->
                </div><!-- .table -->
            </div><!-- .single-slider bg-opacity-1 -->
		<?php endif; ?>
    </section>
    <!-- slider-section-end -->

    <!-- portfolio-section-start -->
    <section class="portfolio-area portfolio-area-2 ptb-120">
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
                'post_type'      => 'hola_portfolio',
			    'posts_per_page' => 10,
            ) );
			if ( $portfolios->have_posts() ) : ?>
                <!-- pagination here -->
                <div class="row">
                    <div class="grid">
                        <!-- the loop -->
						<?php while ( $portfolios->have_posts() ) : $portfolios->the_post();
							$img_size = get_post_meta( get_the_ID(), '_hola_project_img_size', 1 );
							//Defining the class with image size
							if ( $img_size == 'w' ) {
								$class = "6";
							} elseif ( $img_size == 'h' ) {
								$class = "3";
							} elseif ( $img_size == 'wh' ) {
								$class = "6";
							} else {
								$class = "3";
							}
							?>
                            <div class="col-md-<?php echo esc_attr( $class ); ?> col-sm-6 col-xs-12 grid-item <?php
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
										} else if ( $img_size == 'h' ) {
											the_post_thumbnail( 'portfolio-single-h' );
										} else if ( $img_size == 'wh' ) {
											the_post_thumbnail( 'portfolio-single-hw' );
										} else {
											the_post_thumbnail( 'portfolio-single' );
										}
										?>
                                    </div><!-- .portfolio-img -->
                                    <div class="portfolio-text">
                                        <div class="text-container">
                                            <div class="text-wrapper">
                                                <a class="img-poppu" href="<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'full' ) ); ?>">
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
                    <a href="<?php echo esc_url( get_post_type_archive_link( 'hola_portfolio' ) ); ?>">view more</a>
                </div><!-- .view-more .text-center -->
			<?php else : ?>
                <p><?php esc_html_e( 'Sorry, no portfolio yet.', 'hola' ); ?></p>
			<?php endif; ?>
        </div><!-- .container -->
    </section><!-- .portfolio-area .portfolio-area-2 .ptb-120 -->
    <!-- portfolio-section-end -->
<?php
get_template_part( 'template-parts/progress-counter' );
get_template_part( 'template-parts/news' );
get_footer();