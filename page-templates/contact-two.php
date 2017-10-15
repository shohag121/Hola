<?php
/**
 * Template Name: Contact Two
 *
 * @package WPGeeky
 * @since WPGeeky 1.0
 */
global $wpgeeky_options;
get_header();
get_template_part( 'template-parts/breadcrumbs' );
?>

    <!-- contact-page-start -->
    <section class="contact-area ptb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-title text-center">
                        <h2><?php echo esc_html__('GET IN TOUCH!', 'wpgeeky'); ?></h2>
                    </div><!-- .contact-title .text-center -->
                </div><!-- .col-lg-12 -->
            </div><!-- .row -->
            <div class="contact-from">
			    <?php echo do_shortcode( $wpgeeky_options['contact-form'] ); ?>
            </div><!-- .contact-from -->
        </div><!-- .container -->
    </section><!-- .contact-area .ptb-120 -->
    <!-- contact-page-end -->

    <!-- map-section-start -->
    <section class="google-map pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="googleMap"></div>
                </div><!-- .col-lg-12 -->
            </div><!-- .row -->
        </div><!-- .container -->
    </section><!-- .google-map .pb-120 -->
    <!-- map-section-end -->
<?php
get_footer();
