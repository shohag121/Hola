<?php
/**
 * Template Part Progress counter
 *
 * @package Hola
 * @since Hola 1.0
 */
global $hola_options;

?>
<!-- progress-counter-section-start -->
<section class="fun-face-area default-bg ptb-100">
    <div class="container">
        <div class="row">

            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <div class="single-count text-center">
                    <h2 class="counter"><?php echo $hola_options['progress-one-value']; ?></h2>
                    <span><?php echo $hola_options['progress-one']; ?></span>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <div class="single-count text-center">
                    <h2 class="counter"><?php echo $hola_options['progress-two-value']; ?></h2>
                    <span><?php echo $hola_options['progress-two']; ?></span>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <div class="single-count text-center">
                    <h2 class="counter"><?php echo $hola_options['progress-three-value']; ?></h2>
                    <span><?php echo $hola_options['progress-three']; ?></span>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <div class="single-count text-center">
                    <h2 class="counter"><?php echo $hola_options['progress-four-value']; ?></h2>
                    <span><?php echo $hola_options['progress-four']; ?></span>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- progress-counter-section-end -->
