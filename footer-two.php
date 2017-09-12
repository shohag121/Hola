<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hola
 */
global $hola_options;
?>

<!-- footer-start -->
<footer>
    <div class="footer-area footer-area-2 ptb-120 default-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="footer-widget text-center">
                                <div class="footer-icon">
                                    <span class="icon-map-pin"></span>
                                </div>
                                <p><?php echo esc_html( $hola_options['footer-address'] ); ?></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="footer-widget text-center">
                                <div class="footer-icon">
                                    <span class="icon-envelope"></span>
                                </div>
                                <p>
                                    <a href="mailto:<?php echo sanitize_email( $hola_options['footer-email'] ); ?>"><?php echo sanitize_email( $hola_options['footer-email'] ); ?></a>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="footer-widget text-center">
                                <div class="footer-icon">
                                    <span class="icon-phone"></span>
                                </div>
                                <p><?php echo esc_html( $hola_options['footer-telephone'] ); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="footer-widget text-right">
                        <div class="footer-logo mb-30">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"
                               rel="home"><img
                                        src="<?php echo $hola_options['footer-logo-image']['url']; ?>"
                                        alt="<?php bloginfo( 'name' ); ?>"/></a>
                        </div>
                        <div class="widget-social-icon">
                            <a href="<?php echo esc_url( $hola_options['footer-social-fb'] ); ?>"><span
                                        class="ti-facebook"></span></a>
                            <a href="<?php echo esc_url( $hola_options['footer-social-tw'] ); ?>"><span
                                        class="ti-twitter"></span></a>
                            <a href="<?php echo esc_url( $hola_options['footer-social-gp'] ); ?>"><span
                                        class="ti-google"></span></a>
                            <a href="<?php echo esc_url( $hola_options['footer-social-in'] ); ?>"><span
                                        class="ti-linkedin"></span></a>
                            <a href="<?php echo esc_url( $hola_options['footer-social-db'] ); ?>"><span
                                        class="ti-dribbble"></span></a>
                        </div>
                        <div class="copyright">
                            <p>&copy; <?php echo date( 'Y' ); ?> <a
                                        href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>,
                                All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer-end -->

<?php wp_footer(); ?>

</body>
</html>
