<?php
/**
 * Template Name: Service One
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

    <!-- service-section-start -->
    <section class="service-area service-page ptb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h2><?php echo esc_html( $hola_options['service-heading'] ); ?></h2>
                        <p><?php echo esc_html( $hola_options['service-description'] ); ?></p>
                    </div><!-- .section-title .text-center -->
                </div><!-- .col-lg-12 -->
            </div><!-- .row -->

            <!-- single-services-start -->
			<?php get_template_part( 'template-parts/services' ); ?>
            <!-- single-services-end -->

        </div><!-- .container -->
    </section><!-- .service-area .service-page .ptb-120 -->
    <!-- service-section-end -->
<?php
get_template_part( 'template-parts/work-process' );
get_template_part( 'template-parts/news' );
get_footer();