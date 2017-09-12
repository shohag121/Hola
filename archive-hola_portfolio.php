<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Hola
 */

get_header(); ?>


<?php get_template_part( 'template-parts/breadcrumbs' ); ?>
    <!-- portfolio-section-end -->
    <section class="portfolio-area ptb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="portfolio-menu text-center mb-30">
                        <button class="active" data-filter="*">ALL</button>
						<?php
						//get all Categoryies from portfolio_category
						$terms = get_terms( [
							'taxonomy'   => 'portfolio_category',
							'orderby'    => 'name',
							'order'      => 'ASC',
							'hide_empty' => FALSE,
						] );
						foreach ( $terms as $term ) {
							echo '<button data-filter=".' . $term->slug . '">' . $term->name . '</button> ';
						}
						?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="grid">
					<?php
					// get all portfolios
					$portfolios = new WP_Query( [
						'post_type'      => 'hola_portfolio',
						'posts_per_page' => - 1,
					] );
					if ( $portfolios->have_posts() ) : ?>
                        <!-- the loop -->
						<?php while ( $portfolios->have_posts() ) : $portfolios->the_post(); ?>
                            <div class="col-md-4 col-sm-6 col-xs-12 grid-item <?php
							$portfolio_names = get_the_terms( get_the_ID(), 'portfolio_category' );
							foreach ( $portfolio_names as $portfolio_name ) {
								echo $portfolio_name->slug . ' ';
							}
							?>">
                                <div class="portfolio-style-3">
                                    <div class="portfolio-img img-hover">
										<?php the_post_thumbnail( 'full' ); ?>
                                        <a class="img-poppu"
                                           href="<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'full' ) ); ?>">
                                            <p class="icon-animation-2"><span
                                                        class="icon-focus"></span>
                                            </p></a>
                                    </div>
                                    <div class="portfolio-text-4">
                                        <div class="text-container-2">
                                            <h3>
                                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                            </h3>
                                            <span><?php
												$portfolio_names = get_the_terms( get_the_ID(), 'portfolio_category' );
												foreach ( $portfolio_names as $portfolio_name ) {
													echo $portfolio_name->name . ', ';
												}
												?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
						<?php endwhile; ?>
                        <!-- end of the loop -->
                        <!-- pagination here -->
						<?php wp_reset_postdata(); ?>
					<?php else : ?>
                        <p><?php esc_html_e( 'Sorry, no portfolio yet.', 'hola' ); ?></p>
					<?php endif; ?>
                </div>
            </div>

        </div>
    </section>
    <!-- portfolio-section-end -->
<?php
get_footer();
