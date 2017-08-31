<?php
/**
 * The header style two for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
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
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!-- header-start -->
<header>
    <div class="header-area header-area-4 header-area-8 <?php echo $hola_options['blog-logo-style']; ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="logo">
	                    <?php
	                    if ( $hola_options['blog-logo-select'] == 'text' ) : ?>
                            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
	                    <?php else : ?>
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo $hola_options['blog-logo-image']['url']; ?>" alt="<?php bloginfo( 'name' ); ?>" /></a>
		                    <?php
	                    endif;
	                    ?>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9">
                    <div class="main-menu text-right">
			            <?php
			            wp_nav_menu(array(
				            'theme_location' => 'menu-1',
				            'walker' => new Hola_Nav_Walker(),
				            'container' => 'nav',
			            ));
			            ?>
                    </div>
                    <div class="mobile-menu"></div>
                </div>
            </div>
        </div>
    </div>
</header>
<?php if ( $hola_options['blog-logo-style'] == 'headroom' ) : ?>
    <div class="header-space"></div>
<?php endif; ?>
<!-- header-end -->