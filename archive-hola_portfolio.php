<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Hola
 */

get_header();
get_template_part( 'template-parts/breadcrumbs' ); ?>

    <!-- portfolio-section-end -->
    <section class="portfolio-area ptb-120">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
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
						    // display button for every portfolio category
							echo '<button data-filter=".' . esc_attr( $term->slug ) . '">' . esc_html( $term->name ) . '</button>';
						}
						?>
                    </div><!-- .portfolio-menu .text-center .mb-30 -->
                </div><!-- .col-xs-12 -->
            </div><!-- .row -->
            
            <div class="row">
                <div class="grid">
					<?php
					// get all portfolios
					$portfolios = new WP_Query( array(
						'post_type'      => 'hola_portfolio',
						'posts_per_page' => - 1,
                    ) );
					if ( $portfolios->have_posts() ) : ?>
                        <!-- the loop -->
						<?php while ( $portfolios->have_posts() ) : $portfolios->the_post(); ?>
                            <div class="col-md-4 col-sm-6 col-xs-12 grid-item <?php
							$portfolio_names = get_the_terms( get_the_ID(), 'portfolio_category' );
							foreach ( $portfolio_names as $portfolio_name ) {
								echo esc_attr( $portfolio_name->slug ) . esc_attr( ' ');
							}
							?>">
                                <div class="portfolio-style-3">
                                    <div class="portfolio-img img-hover">
										<?php the_post_thumbnail( 'full' ); ?>
                                        <a class="img-poppu" href="<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'full' ) ); ?>">
                                            <p class="icon-animation-2"><span class="icon-focus"></span></p>
                                        </a>
                                    </div><!-- .portfolio-img .img-hover -->
                                    <div class="portfolio-text-4">
                                        <div class="text-container-2">
                                            <h3>
                                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                            </h3>
                                            <span><?php
												$portfolio_names = get_the_terms( get_the_ID(), 'portfolio_category' );
												foreach ( $portfolio_names as $portfolio_name ) {
													// print portfolio categories names
												    echo esc_html( $portfolio_name->name );
												    //seperator
												    if ( ! ( end( $portfolio_names ) == $portfolio_name ) ){
													    esc_html( ', ' );
                                                    }
												}
												?></span>
                                        </div><!-- .text-container-2 -->
                                    </div><!-- .portfolio-text-4 -->
                                </div><!-- .portfolio-style-3 -->
                            </div><!-- .grid-item -->
						<?php endwhile; ?>
                        <!-- end of the loop -->
						<?php wp_reset_postdata(); ?>
					<?php else : ?>
                        <p><?php esc_html_e( 'Sorry, no portfolio yet.', 'hola' ); ?></p>
					<?php endif; ?>
                </div><!-- .grid -->
            </div><!-- .row -->

        </div><!-- .container -->
    </section><!-- .portfolio-area .ptb-120 -->
    <!-- portfolio-section-end -->
<?php
get_footer();
