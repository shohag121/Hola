<?php
/**
 * Template Name: Home Style 10
 *
 * @package Hola
 * @since Hola 1.0
 */

get_header( 'five' );
global $hola_options;
?>

    <!-- portfolio-section-start -->
    <section class="portfolio-area ptb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="portfolio-menu text-center mb-30">
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
                    </div><!-- .portfolio-menu .text-center .mb-30 -->
                </div><!-- .col-lg-12  -->
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
                            <div class="col-md-6 col-sm-6 col-xs-12 grid-item <?php
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
                                    </div><!-- .row -->
                                    <div class="portfolio-text">
                                        <div class="text-container">
                                            <div class="text-wrapper">
                                                <a class="img-poppu" href="<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'full' ) ); ?>">
                                                    <p class="icon-animation">
                                                        <span class="icon-focus"></span>
                                                    </p>
                                                </a><!-- .icon-animation -->
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
                    </div><!-- .grid-->
                </div><!-- .row -->
                <div class="view-more text-center">
                    <a href="<?php echo esc_url( get_post_type_archive_link( 'hola_portfolio' ) ); ?>">view more</a>
                </div>
			<?php else : ?>
                <p><?php esc_html_e( 'Sorry, no portfolio yet.', 'hola' ); ?></p>
			<?php endif; ?>
        </div><!-- .container-->
    </section><!-- .portfolio-area .ptb-120-->
    <!-- portfolio-section-end -->
<?php
get_template_part( 'template-parts/testimonials' );
get_template_part( 'template-parts/team' );
get_footer();