<?php
/**
 * Template Name: About Individual
 *
 * @package WPGeeky
 * @since WPGeeky 1.0
 */
get_header();
global $wpgeeky_options;
?>

    <!-- breadcrumbs-section-start -->
<?php get_template_part( 'template-parts/breadcrumbs' ); ?>
    <!-- breadcrumbs-section-end -->

    <!-- about-me-section-start -->
    <section class="about-me-area ptb-120">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="about-me-img">
						<?php if ( $my_image = $wpgeeky_options['about-me-img'] ): ?>
                            <img src="<?php echo esc_url( $my_image['url'] ); ?>"
                                 alt="<?php echo esc_attr( $wpgeeky_options['about-me-heading'] ); ?>"/>
						<?php endif; ?>
                    </div><!-- .about-me-img -->
                </div><!-- .col-lg-4 col-md-4 col-sm-6 -->
                
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="about-me-info">
                        <h2><?php echo esc_html( $wpgeeky_options['about-me-heading'] ); ?></h2>
                        <span><?php echo esc_html( $wpgeeky_options['about-me-designation'] ); ?></span>
                        <p><?php echo esc_html( $wpgeeky_options['about-me-p'] ); ?></p>
						<?php if ( $wpgeeky_options['about-me-cv']['url'] ) : ?>
                            <a href="<?php echo esc_url( $wpgeeky_options['about-me-cv']['url'] ); ?>"
                               class="aboutme-btn">DOWNLOAD RESUME</a>
						<?php endif; ?>
                    </div><!-- .about-me-info -->
                </div><!-- .col-lg-4 .col-md-4 .col-sm-6 -->
                
                <!-- skills-section-start -->
				<?php get_template_part( 'template-parts/skills' ); ?>
                <!-- skills-section-end -->
                
            </div><!-- .row -->
        </div><!-- .container -->
    </section><!-- .about-me-area .ptb-120 -->
    <!-- about-me-section-end -->
<?php
get_template_part( 'template-parts/progress', 'counter' );
get_template_part( 'template-parts/team' );
get_template_part( 'template-parts/clients' );
get_footer();