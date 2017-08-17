<?php
/**
 * Template Name: Home Style 1
 *
 * @package WordPress
 * @subpackage Hola
 * @since Hola 1.0
 */

get_header();
global $hola_options;
?>
    <!-- slider-section-start -->
    <section class="slider-area slider-bg ptb-200">
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
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="about-info">
                        <div class="section-title">
                            <h2><?php echo $hola_options['home-about-heading']; ?></h2>
                        </div>
                        <p><?php echo $hola_options['home-about-description']; ?></p>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="about-inner-box">
                                <h3><?php echo $hola_options['home-about-feature-1']; ?></h3>
                                <p><?php echo $hola_options['home-about-feature-1-description']; ?></p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="about-inner-box icon-2">
                                <h3><?php echo $hola_options['home-about-feature-2']; ?></h3>
                                <p><?php echo $hola_options['home-about-feature-2-description']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="about-info skill-section">
                        <div class="section-title">
                            <h2><?php echo $hola_options['home-skills-heading']; ?></h2>
                        </div>
                        <div class="progress_bar">
                            <div class="progress">
                                <div class="lead"><?php echo $hola_options['home-skills-name-one']; ?></div>
                                <div class="progress-bar wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".1s" role="progressbar" aria-valuenow="<?php echo $hola_options['home-skills-percent-one']; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $hola_options['home-skills-percent-one']; ?>%;">
                                    <span><?php echo $hola_options['home-skills-percent-one']; ?>%</span>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="lead"><?php echo $hola_options['home-skills-name-two']; ?></div>
                                <div class="progress-bar wow fadeInLeft" data-wow-duration="1.6s" data-wow-delay=".4s" role="progressbar" aria-valuenow="<?php echo $hola_options['home-skills-percent-two']; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $hola_options['home-skills-percent-two']; ?>%;">
                                    <span><?php echo $hola_options['home-skills-percent-two']; ?>%</span>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="lead"><?php echo $hola_options['home-skills-name-three']; ?></div>
                                <div class="progress-bar wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".8s" role="progressbar" aria-valuenow="<?php echo $hola_options['home-skills-percent-three']; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $hola_options['home-skills-percent-three']; ?>%;">
                                    <span><?php echo $hola_options['home-skills-percent-three']; ?>%</span>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="lead"><?php echo $hola_options['home-skills-name-four']; ?></div>
                                <div class="progress-bar wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".8s" role="progressbar" aria-valuenow="<?php echo $hola_options['home-skills-percent-four']; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $hola_options['home-skills-percent-four']; ?>%;">
                                    <span><?php echo $hola_options['home-skills-percent-four']; ?>%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                        <h2><?php echo $hola_options['home-service-heading']; ?></h2>
                        <p><?php echo $hola_options['home-service-description']; ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 margin-fix">
                    <div class="single-service text-center">
                        <div class="service-icon">
                            <i class="<?php echo $hola_options['home-service-one-icon']; ?>"></i>
                        </div>
                        <div class="service-text">
                            <h3><?php echo $hola_options['home-service-one-title']; ?></h3>
                            <p><?php echo $hola_options['home-service-one-description']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 margin-fix">
                    <div class="single-service text-center">
                        <div class="service-icon">
                            <i class="<?php echo $hola_options['home-service-two-icon']; ?>"></i>
                        </div>
                        <div class="service-text">
                            <h3><?php echo $hola_options['home-service-two-title']; ?></h3>
                            <p><?php echo $hola_options['home-service-two-description']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 margin-fix">
                    <div class="single-service text-center">
                        <div class="service-icon">
                            <i class="<?php echo $hola_options['home-service-three-icon']; ?>"></i>
                        </div>
                        <div class="service-text">
                            <h3><?php echo $hola_options['home-service-three-title']; ?></h3>
                            <p><?php echo $hola_options['home-service-three-description']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 margin-fix">
                    <div class="single-service text-center">
                        <div class="service-icon">
                            <i class="<?php echo $hola_options['home-service-four-icon']; ?>"></i>
                        </div>
                        <div class="service-text">
                            <h3><?php echo $hola_options['home-service-four-title']; ?></h3>
                            <p><?php echo $hola_options['home-service-four-description']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 margin-fix">
                    <div class="single-service text-center">
                        <div class="service-icon">
                            <i class="<?php echo $hola_options['home-service-five-icon']; ?>"></i>
                        </div>
                        <div class="service-text">
                            <h3><?php echo $hola_options['home-service-five-title']; ?></h3>
                            <p><?php echo $hola_options['home-service-five-description']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 margin-fix">
                    <div class="single-service text-center">
                        <div class="service-icon">
                            <i class="<?php echo $hola_options['home-service-six-icon']; ?>"></i>
                        </div>
                        <div class="service-text">
                            <h3><?php echo $hola_options['home-service-six-title']; ?></h3>
                            <p><?php echo $hola_options['home-service-six-description']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
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
    <!-- work-process-section-start -->
    <section class="work-process-area ptb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <div class="section-title">
                        <h2><?php echo $hola_options['home-work-heading']; ?></h2>
                        <p><?php echo $hola_options['home-work-description']; ?></p>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="single-process text-center">
                                <span class="<?php echo $hola_options['home-work-process-1-icon']; ?>"></span>
                                <h3><?php echo $hola_options['home-work-process-1-title']; ?></h3>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="single-process text-center">
                                <span class="<?php echo $hola_options['home-work-process-2-icon']; ?>"></span>
                                <h3><?php echo $hola_options['home-work-process-2-title']; ?></h3>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="single-process text-center">
                                <span class="<?php echo $hola_options['home-work-process-3-icon']; ?>"></span>
                                <h3><?php echo $hola_options['home-work-process-3-title']; ?></h3>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- work-section-area-end -->
    <!-- blog-section-start -->
    <section class="blog-area ptb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h2><?php echo $hola_options['home-news-heading']; ?></h2>
                        <p><?php echo $hola_options['home-news-description']; ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
				<?php
				$cat = '';
				if ($hola_options['home-news-category']){
					foreach ($hola_options['home-news-category'] as $single_cat){
						$cat = $cat . $single_cat;
						if (!(end($hola_options['home-news-category']) == $single_cat )){
							$cat = $cat . ",";
						}
					}
					
				}
				
				// the query
				$the_news = new WP_Query( array( 'cat' => $cat , 'ignore_sticky_posts'=> true, 'posts_per_page' => 3 ) ); ?>
				<?php if ( $the_news->have_posts() ) : ?>
                    <!-- pagination here -->
                    <!-- the loop -->
					<?php while ( $the_news->have_posts() ) : $the_news->the_post(); ?>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 <?php echo ($the_news->current_post === 2) ? 'hidden-sm': '' ?>">
                            <div class="single-blog">
								<?php if ( has_post_thumbnail() ): ?>
                                    <div class="blog-img">
                                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('home-news-img' ); ?></a>
                                    </div>
								<?php else: ?>
                                    <div class="blog-img">
                                        <a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/placeholder-mini.png" alt="Blog Thumbnail"></a>
                                    </div>
								<?php endif; ?>
                                <div class="blog-info">
                                    <div class="blog-meta">
                                        <span>By <?php the_author_posts_link(); ?>, On <?php echo get_the_date(); ?></span>
                                    </div>
                                    <div class="blog-text">
                                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        <p><?php the_excerpt(); ?></p>
                                        <a href="<?php the_permalink(); ?>" class="readmore">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
					<?php endwhile; ?>
                    <!-- end of the loop -->
                    <!-- pagination here -->
					<?php wp_reset_postdata(); ?>
				<?php else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.','hola' ); ?></p>
				<?php endif; ?>

            </div>
        </div>
    </section>
    <!-- blog-section-end -->
<?php
get_footer();