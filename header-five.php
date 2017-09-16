<?php
/**
 * The header style two for our theme
 *
 * This is the template that displays all of the <head> section and everything
 * up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hola
 */
global $hola_options;
?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- header-start -->
<header>
    <div class="header-area gray-bg <?php echo esc_attr( $hola_options['blog-logo-style'] ); ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="logo">
					    <?php
					    if ( $hola_options['blog-logo-select'] == 'text' ) : ?>
                            <h1 class="site-title"><a
                                        href="<?php echo esc_url( home_url( '/' ) ); ?>"
                                        rel="home"><?php bloginfo( 'name' ); ?></a>
                            </h1><!-- .site-title -->
					    <?php else : ?>
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"
                               rel="home"><img
                                        src="<?php echo esc_url( $hola_options['blog-logo-image']['url'] ); ?>"
                                        alt="<?php bloginfo( 'name' ); ?>"/></a>
						    <?php
					    endif;
					    ?>
                    </div><!-- .logo -->
                </div><!-- .col-lg-3 .col-md-3 -->
                <div class="col-lg-9 col-md-9">
                    <div class="main-menu text-right">
					    <?php
					    wp_nav_menu( array(
						    'theme_location' => 'menu-1',
						    'walker'         => new Hola_Nav_Walker(),
						    'container'      => 'nav',
					    ) );
					    ?>
                    </div><!-- .main-menu .text-right -->
                    <div class="mobile-menu"></div>
                </div><!-- .col-lg-9 .col-md-9 -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .header-area -->
</header>
<?php if ( $hola_options['blog-logo-style'] == 'headroom' ) : ?>
    <div class="header-space"></div>
<?php endif; ?>
<!-- header-end -->