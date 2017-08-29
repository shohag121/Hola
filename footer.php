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
                                </div>
                                <p>25/5 South Street,New York,USA</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="footer-widget text-center">
                                <div class="footer-icon">
                                    <span class="icon-envelope"></span>
                                </div>
                                <p><a href="#">www.perculatheme.com</a></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="footer-widget text-center">
                                <div class="footer-icon">
                                    <span class="icon-phone"></span>
                                </div>
                                <p>+0-151-545-4596</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="footer-widget text-right">
                        <div class="footer-logo mb-30">
                            <a href="index.html"><img src="img/logo.png" alt="" /></a>
                        </div>
                        <div class="widget-social-icon">
                            <a href="#"><span class="ti-linkedin"></span></a>
                            <a href="#"><span class="ti-twitter"></span></a>
                            <a href="#"><span class="ti-skype"></span></a>
                            <a href="#"><span class="ti-google"></span></a>
                            <a href="#"><span class="ti-dribbble"></span></a>
                        </div>
                        <div class="copyright">
                            <p>&copy; <?php  echo date('Y'); ?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>, All Rights Reserved</p>
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