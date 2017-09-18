<?php
/**
 * Template Part Features
 *
 * @package Hola
 * @since Hola 1.0
 */
global $hola_options;
?>
<div class="col-lg-8 col-md-8 col-sm-12">
    <div class="about-info">
        <div class="section-title">
            <h2><?php echo esc_html( $hola_options['features-heading'] ); ?></h2>
        </div><!-- .section-title -->
        <p><?php echo esc_html( $hola_options['features-description'] ); ?></p>
    </div><!-- .about-info -->
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="about-inner-box">
                <h3><?php echo esc_html( $hola_options['features-feature-1'] ); ?></h3>
                <p><?php echo esc_html( $hola_options['features-feature-1-description'] ); ?></p>
            </div><!-- .about-inner-box -->
        </div><!-- .col-lg-6 .col-md-6 .col-sm-6 -->
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="about-inner-box icon-2">
                <h3><?php echo esc_html( $hola_options['features-feature-2'] ); ?></h3>
                <p><?php echo esc_html( $hola_options['features-feature-2-description'] ); ?></p>
            </div><!-- .about-inner-box icon-2 -->
        </div><!-- .col-lg-6 .col-md-6 .col-sm-6 -->
    </div><!-- .row -->
</div><!-- .col-lg-8 .col-md-8 .col-sm-12 -->
