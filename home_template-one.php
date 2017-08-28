<?php
/**
 * Template Name: Home Style 1
 *
 * @package Hola
 * @since Hola 1.0
 */
get_header();
global $hola_options;
?>
    <!-- slider-section-start -->
    <section class="slider-area slider-bg ptb-200" style="background-image: <?php echo $hola_options['home-slider-bg']['url']; ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="slider-text">
                        <h1><?php echo $hola_options['home-slider-h1']; ?></h1>
                        <h2><?php echo $hola_options['home-slider-h2']; ?></h2>
                        <h3 class="cd-headline clip is-full-width">
								<span class="cd-words-wrapper text-black">
									<b class="is-visible"><?php echo $hola_options['home-slider-p1']; ?></b>
									<?php foreach ( $hola_options['home-slider-p'] as $paragraph ):  ?>
                                        <b><?php echo $paragraph; ?></b>
									<?php endforeach; ?>
								</span>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- slider-section-end -->
    <!-- about-section-start -->
    <section class="about-area ptb-120">
        <div class="container">
            <div class="row">
                <!-- features-section-start -->
                <?php get_template_part('template-parts/features'); ?>
                <!-- features-section-end -->
                <!-- skills-section-start -->
                <?php get_template_part('template-parts/skills'); ?>
                <!-- skills-section-end -->
            </div>
        </div>
    </section>
    <!-- about-section-end -->
    <!-- service-section-start -->
    <section class="service-area ptb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title padd-l">
                        <h2><?php echo $hola_options['service-heading']; ?></h2>
                        <p><?php echo $hola_options['service-description']; ?></p>
                    </div>
                </div>
            </div>

            <!-- single-services-start -->
	        <?php get_template_part('template-parts/services'); ?>
            <!-- single-services-end -->

        </div>
    </section>
    <!-- service-section-end -->

    <!-- portfolio-section-start -->
    <section class="portfolio-area ptb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="portfolio-menu mb-30">
                        <button class="active" data-filter="*">ALL</button>
						<?php
						//get all Categoryies from portfolio_category
						$terms = get_terms( array(
							'taxonomy' => 'portfolio_category',
							'orderby' => 'name',
							'order' => 'ASC',
							'hide_empty' => false,
						) );
						foreach($terms as $term){
							echo '<button data-filter=".'. $term->slug .'">'. $term->name .'</button> ';
						}
						?>
                    </div>

                </div>
            </div>
			<?php
			// get all portfolios
			$portfolios = new WP_Query( array( 'post_type' => 'hola_portfolio', 'posts_per_page'=> 10  ) );
			if ( $portfolios->have_posts() ) : ?>
                <!-- pagination here -->
                <div class="row">
                    <div class="grid">


                        <!-- the loop -->
						<?php while ( $portfolios->have_posts() ) : $portfolios->the_post(); ?>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 grid-item <?php
							$portfolio_names = get_the_terms( get_the_ID(), 'portfolio_category');
							foreach ($portfolio_names as $portfolio_name){
								echo $portfolio_name->slug . ' ';
							}
							?>">
                                <div class="single-portfolio">
                                    <div class="portfolio-img">
										<?php the_post_thumbnail( 'full' ); ?>
                                    </div>
                                    <div class="portfolio-text">
                                        <div class="text-container">
                                            <div class="text-wrapper">
                                                <a class="img-poppu" href="<?php echo  esc_url( get_the_post_thumbnail_url(get_the_ID(),'full') ); ?>"><p class="icon-animation"><span class="icon-focus"></span></p></a>
                                                <h3 class="text-animation"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                                <span><?php
													$portfolio_names = get_the_terms( get_the_ID(), 'portfolio_category');
													foreach ($portfolio_names as $portfolio_name){
														echo $portfolio_name->name . ', ';
													}
													?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
						<?php endwhile; ?>
                        <!-- end of the loop -->
                        <!-- pagination here -->
						<?php wp_reset_postdata(); ?>

                    </div>
                </div>
                <div class="view-more text-center">
                    <a href="<?php echo get_post_type_archive_link( 'hola_portfolio' ); ?>">view more</a>
                </div>
			<?php else : ?>
                <p><?php _e( 'Sorry, no portfolio yet.' ,'hola' ); ?></p>
			<?php endif; ?>
        </div>
    </section>
    <!-- portfolio-section-end -->


<?php
get_template_part('template-parts/work-process');
get_template_part('template-parts/news');
get_footer();