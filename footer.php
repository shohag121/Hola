<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package HolaWP
 */
global $hola_options;
?>
<!-- footer-start -->
<footer>
    <div class="footer-area ptb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="row">
                        
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="footer-widget text-center">
                                <div class="footer-icon">
                                    <span class="icon-map-pin"></span>
                                </div><!-- .footer-icon -->
                                <p><?php echo esc_html( $hola_options['footer-address'] ); ?></p>
                            </div><!-- .footer-widget .text-center -->
                        </div><!-- .col-lg-4 .col-md-4 .col-sm-4 -->
                        
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="footer-widget text-center">
                                <div class="footer-icon">
                                    <span class="icon-envelope"></span>
                                </div><!-- .footer-icon -->
                                <p>
                                    <a href="mailto:<?php echo sanitize_email( $hola_options['footer-email'] ); ?>"><?php echo sanitize_email( $hola_options['footer-email'] ); ?></a>
                                </p>
                            </div><!-- .footer-widget .text-center -->
                        </div><!-- .col-lg-4 .col-md-4 .col-sm-4 -->
                        
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="footer-widget text-center">
                                <div class="footer-icon">
                                    <span class="icon-phone"></span>
                                </div><!-- .footer-icon -->
                                <p><?php echo esc_html( $hola_options['footer-telephone'] ); ?></p>
                            </div><!-- .footer-widget .text-center -->
                        </div><!-- .col-lg-4 .col-md-4 .col-sm-4 -->
                        
                    </div><!-- .row -->
                </div><!-- .col-lg-8 .col-md-8 .col-sm-12 -->
                
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="footer-widget text-right">
                        <div class="footer-logo mb-30">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"
                               rel="home"><img
                                        src="<?php echo esc_url( $hola_options['footer-logo-image']['url'] ); ?>"
                                        alt="<?php bloginfo( 'name' ); ?>"/></a>
                        </div><!-- .footer-logo .mb-30 -->
                        <div class="widget-social-icon">
	                        <?php if ( $hola_options['footer-social-fb'] ) : ?>
                                <a href="<?php echo esc_url( $hola_options['footer-social-fb'] ); ?>"><span class="ti-facebook"></span></a>
	                        <?php endif;
	                        if ( $hola_options['footer-social-tw'] ) : ?>
                                <a href="<?php echo esc_url( $hola_options['footer-social-tw'] ); ?>"><span class="ti-twitter"></span></a>
	                        <?php endif;
	                        if ( $hola_options['footer-social-gp'] ) : ?>
                                <a href="<?php echo esc_url( $hola_options['footer-social-gp'] ); ?>"><span class="ti-google"></span></a>
	                        <?php endif;
	                        if ( $hola_options['footer-social-in'] ) : ?>
                                <a href="<?php echo esc_url( $hola_options['footer-social-in'] ); ?>"><span class="ti-linkedin"></span></a>
	                        <?php endif;
	                        if ( $hola_options['footer-social-db'] ) : ?>
                                <a href="<?php echo esc_url( $hola_options['footer-social-db'] ); ?>"><span class="ti-dribbble"></span></a>
	                        <?php endif; ?>
                        </div><!-- .widget-social-icon -->
                        <div class="copyright">
                            <p>&copy; <?php echo date( 'Y' ); ?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>, All Rights Reserved</p>
                        </div><!-- .copyright -->
                    </div><!-- .footer-widget text-right -->
                </div><!-- .col-lg-4 .col-md-4 .col-sm-12 -->
                
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .footer-area .ptb-120 .gray-bg -->
</footer>
<!-- footer-end -->

<?php wp_footer(); ?>

</body>
</html>
