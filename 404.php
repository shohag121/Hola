<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Hola
 */

get_header(); ?>

    <!-- not-found-section-start -->
    <section class="not-found-area ptb-120">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="not-found-content text-center">
                        <div class="not-found-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/404.png" alt="404 Error" />
                        </div>
                        <h2><?php esc_html_e( 'Ooopps.! The Page You Were Looking For, Couldn\'t Be Found.', 'hola' ); ?></h2>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="not-found-btn">back to home</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- not-found-section-end -->

<?php
get_footer();
