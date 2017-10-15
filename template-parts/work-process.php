<?php
/**
 * Template Part Work Process
 *
 * @package WPGeeky
 * @since WPGeeky 1.0
 */
global $wpgeeky_options;
?>
<!-- work-process-section-start -->
<section class="work-process-area ptb-120 gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <div class="section-title">
                    <h2><?php echo esc_html( $wpgeeky_options['work-heading'] ); ?></h2>
                    <p><?php echo esc_html( $wpgeeky_options['work-description'] ); ?></p>
                </div><!-- .section-title -->
            </div><!-- .col-lg-5 col-md-5 .col-sm-12 -->
            <div class="col-lg-7 col-md-7 col-sm-12">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="single-process text-center">
                            <span class="<?php echo esc_attr( $wpgeeky_options['work-process-1-icon'] ); ?>"></span>
                            <h3><?php echo esc_html( $wpgeeky_options['work-process-1-title'] ); ?></h3>
                        </div><!-- .single-process .text-center -->
                    </div><!-- .col-lg-4 .col-md-4 .col-sm-4 -->
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="single-process text-center">
                            <span class="<?php echo esc_attr( $wpgeeky_options['work-process-2-icon'] ); ?>"></span>
                            <h3><?php echo esc_html( $wpgeeky_options['work-process-2-title'] ); ?></h3>
                        </div><!-- .single-process .text-center -->
                    </div><!-- .col-lg-4 .col-md-4 .col-sm-4 -->
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="single-process text-center">
                            <span class="<?php echo esc_attr( $wpgeeky_options['work-process-3-icon'] ); ?>"></span>
                            <h3><?php echo esc_html( $wpgeeky_options['work-process-3-title'] ); ?></h3>
                        </div><!-- .single-process .text-center -->
                    </div><!-- .col-lg-4 .col-md-4 .col-sm-4 -->
                </div><!-- .row -->
            </div><!-- .col-lg-7 .col-md-7 .col-sm-12 -->
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .work-process-area .ptb-120 .gray-bg -->
<!-- work-section-area-end -->