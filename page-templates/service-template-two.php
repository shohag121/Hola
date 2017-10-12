<?php
/**
 * Template Name: Service Two
 *
 * @package HolaWP
 * @since HolaWP 1.0
 */
get_header();
global $hola_options;
?>
    <!-- breadcrumbs-section-start -->
<?php get_template_part( 'template-parts/breadcrumbs' ); ?>
    <!-- breadcrumbs-section-end -->

    <!-- about-section-start -->
    <section class="about-area ptb-120">
        <div class="container">
            <div class="row">
                
                <!-- features-section-start -->
				<?php get_template_part( 'template-parts/features' ); ?>
                <!-- features-section-end -->
                
                <!-- skills-section-start -->
				<?php get_template_part( 'template-parts/skills' ); ?>
                <!-- skills-section-end -->
                
            </div><!-- .row -->
        </div><!-- .container -->
    </section><!-- .about-area ptb-120 -->
    <!-- about-section-end -->

    <!-- service-section-start -->
    <section class="service-area ptb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title padd-l">
                        <h2><?php echo esc_html( $hola_options['service-heading'] ); ?></h2>
                        <p><?php echo esc_html( $hola_options['service-description'] ); ?></p>
                    </div><!-- .section-title .padd-l -->
                </div><!-- .col-lg-12 -->
            </div><!-- .row -->
            <!-- single-services-start -->
			<?php get_template_part( 'template-parts/services' ); ?>
            <!-- single-services-end -->
        </div><!-- .container -->
    </section>
    <!-- service-section-end -->

    <!-- padding top fixed -->
    <div class="pt-120"></div>
<?php
get_template_part( 'template-parts/clients' );
get_footer();