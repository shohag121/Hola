<?php
/**
 * Template Name: About Agency
 *
 * @package Hola
 * @since Hola 1.0
 */
get_header();
global $hola_options;
?>
    <!-- breadcrumbs-section-start -->
    <?php get_template_part( 'template-parts/breadcrumbs' ); ?>
    <!-- breadcrumbs-section-end -->
    <!-- about-us-section-area-start -->
    <section class="about-us-area ptb-120">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="about-us-inner text-center">
                        <h2><?php echo esc_html( $hola_options['about-us-heading'] ); ?></h2>
                        <p><?php echo esc_html( $hola_options['about-us-description'] ); ?></p>
                    </div><!-- .about-us-inner .text-center -->
                </div><!-- .col-md-12 -->
            </div><!-- .row -->
        </div><!-- .container -->
    </section><!-- .about-us-area .ptb-120 -->
    <!-- about-us-section-area-end -->

    <!-- about-us-block-area-start -->
    <section class="about-us-block-area bg-opacity-1 ptb-120"
             style="background: rgba(0, 0, 0, 0) url('<?php echo esc_url( $hola_options['about-us-block-img']['url'] ); ?>') no-repeat scroll center center / cover">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="about-block-info text-center">
                        <h3><?php echo esc_html( $hola_options['about-us-block-heading'] ); ?></h3>
                        <p><?php echo esc_html( $hola_options['about-us-block-description'] ); ?></p>
                    </div><!-- .about-block-info .text-center -->
                </div><!-- .col-md-8 .col-md-offset-2 -->
            </div><!-- .row -->
        </div><!-- .container -->
    </section><!-- .about-us-block-area .bg-opacity-1 .ptb-120 -->
    <!-- about-us-block-area-end -->
<?php
get_template_part( 'template-parts/progress', 'counter' );
get_template_part( 'template-parts/team' );
get_template_part( 'template-parts/clients' );
get_footer();