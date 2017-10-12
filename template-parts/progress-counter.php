<?php
/**
 * Template Part Progress counter
 *
 * @package HolaWP
 * @since HolaWP 1.0
 */
global $hola_options;
?>
<!-- progress-counter-section-start -->
<section class="fun-fact-area fun-fact-area-3 gray-bg ptb-100">
    <div class="container">
        <div class="row">

            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <div class="single-count text-center">
                    <h2 class="counter"><?php echo esc_html( $hola_options['progress-one-value'] ); ?></h2>
                    <span><?php echo esc_html( $hola_options['progress-one'] ); ?></span>
                </div><!-- .single-count .text-center -->
            </div><!-- .col-lg-3 .col-md-3 .col-sm-4 .col-xs-12 -->
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <div class="single-count text-center">
                    <h2 class="counter"><?php echo esc_html( $hola_options['progress-two-value'] ); ?></h2>
                    <span><?php echo esc_html( $hola_options['progress-two'] ); ?></span>
                </div><!-- .single-count .text-center -->
            </div><!-- .col-lg-3 .col-md-3 .col-sm-4 .col-xs-12 -->
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <div class="single-count text-center">
                    <h2 class="counter"><?php echo esc_html( $hola_options['progress-three-value'] ); ?></h2>
                    <span><?php echo esc_html( $hola_options['progress-three'] ); ?></span>
                </div><!-- .single-count .text-center -->
            </div><!-- .col-lg-3 .col-md-3 .col-sm-4 .col-xs-12 -->
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <div class="single-count text-center">
                    <h2 class="counter"><?php echo esc_html( $hola_options['progress-four-value'] ); ?></h2>
                    <span><?php echo esc_html( $hola_options['progress-four'] ); ?></span>
                </div><!-- .single-count .text-center -->
            </div><!-- .col-lg-3 .col-md-3 .col-sm-4 .col-xs-12 -->

        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .fun-fact-area .fun-fact-area-3 .gray-bg .ptb-100 -->
<!-- progress-counter-section-end -->
