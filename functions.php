<?php
/**
 * Hola functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Hola
 */

if ( ! function_exists( 'hola_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function hola_setup() {

	/*
	 * Add Theme Library files
	 */
	require get_template_directory() . '/lib/admin-init.php';

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Hola, use a find and replace
	 * to change 'hola' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'hola', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
	/**
	 * Enable custom image size for post thumbnail
	 */
	
	add_image_size( 'blog-img', 750, 403, true );
	add_image_size( 'slider-img', 1920, 600, true );
	add_image_size( 'member-img', 270, 400, true );
	add_image_size( 'client-img', 120, 60, true );
	add_image_size( 'home-news-img', 370, 250, true );
	add_image_size( 'portfolio-img', 1140, 600, true );
	add_image_size( 'portfolio-img-sqr', 360, 350, true );
	add_image_size( 'portfolio-single', 400, 400, true );
	add_image_size( 'portfolio-single-h', 400, 842, true );
	add_image_size( 'portfolio-single-w', 830, 400, true );
	add_image_size( 'portfolio-single-wh', 830, 842, true );
	add_image_size( 'client-img-testimonial', 80, 80, true );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'hola' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'hola_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 28,
		'width'       => 84,
		'flex-width'  => true,
		'flex-height' => true,
	) );
}
endif;
add_action( 'after_setup_theme', 'hola_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function hola_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'hola_content_width', 1120 );
}
add_action( 'after_setup_theme', 'hola_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function hola_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'hola' ),
		'id'            => 'sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'hola' ),
		'before_widget' => '<div id="%1$s" class="single-widget %2$s mb-60">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'hola_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function hola_scripts() {
	global $hola_options;
	
	//all styles
	wp_enqueue_style( 'hola-fonts', '//fonts.googleapis.com/css?family=Dosis:400,500,600,700,800|Roboto:100,300,400,500,700,900', array()  );
	wp_enqueue_style( 'hola-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array()  );
	wp_enqueue_style( 'hola-font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array()  );
	wp_enqueue_style( 'hola-et-line-fonts', get_template_directory_uri() . '/assets/css/et-line-fonts.css', array()  );
	wp_enqueue_style( 'hola-themify-icons', get_template_directory_uri() . '/assets/css/themify-icons.css', array()  );
	wp_enqueue_style( 'hola-animate', get_template_directory_uri() . '/assets/css/animate.css', array()  );
	wp_enqueue_style( 'hola-animated-text', get_template_directory_uri() . '/assets/css/animated-text.css', array()  );
	wp_enqueue_style( 'hola-meanmenu', get_template_directory_uri() . '/assets/css/meanmenu.css', array()  );
	wp_enqueue_style( 'hola-owl.carousel', get_template_directory_uri() . '/assets/css/owl.carousel.css', array()  );
	wp_enqueue_style( 'hola-magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array()  );
	wp_enqueue_style( 'hola-style', get_stylesheet_uri() );
	// User's custom css
	if ( isset( $hola_options['css_editor'] ) ) {
		$custom_css = $hola_options['css_editor']."\r\n";
		wp_add_inline_style('hola-style', $custom_css );
	}
	
	//All scripts
	wp_enqueue_script( 'jquery');
	wp_enqueue_script( 'hola-bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'hola-isotope-pkgd-js', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'hola-imagesloaded-pkgd-js', get_template_directory_uri() . '/assets/js/imagesloaded.pkgd.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'hola-waypoints-js', get_template_directory_uri() . '/assets/js/waypoints.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'hola-wow-js', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'hola-owl-carousel-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'hola-jquery-meanmenu-js', get_template_directory_uri() . '/assets/js/jquery.meanmenu.js', array('jquery'), '', true );
	wp_enqueue_script( 'hola-plugins-js', get_template_directory_uri() . '/assets/js/plugins.js', array('jquery'), '', true );
	wp_enqueue_script( 'hola-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '', true );
	wp_enqueue_script( 'hola-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '', true );
	wp_enqueue_script( 'hola-main-js', get_template_directory_uri() . '/assets/js/main.js', array('hola-plugins-js'), '', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	// User's custom js
	if ( isset( $hola_options['js_editor'] ) ) {
		$custom_js = $hola_options['js_editor'];
		wp_add_inline_script('hola-main-js', $custom_js );
	}
}
add_action( 'wp_enqueue_scripts', 'hola_scripts' );


/*
 * Tag cloud set default font size
 */
function hola_set_tag_cloud_font_size($args) {
	$args['smallest'] = 10; /* Set the smallest size to 10pt */
	$args['largest'] = 20;  /* set the largest size to 20pt */
	return $args;
}
add_filter('widget_tag_cloud_args','hola_set_tag_cloud_font_size');


//Contact Form 7 integration
function hola_contact7_form_content( $template, $prop ) {
	if ( 'form' == $prop ) {
		return implode( '',
			array(
			'<div class="row">',
				'<div class="col-md-6 col-sm-6 col-xs-12">',
					'[text* your-name placeholder"Name"]',
				'</div>',
				'<div class="col-md-6 col-sm-6 col-xs-12">',
					'[email* your-email placeholder"Email"]',
				'</div>',
				'<div class="col-md-12 col-sm-12 col-xs-12">',
					'[text* your-subject placeholder"Subject"]',
				'</div>',
				'<div class="col-md-12 col-sm-12 col-xs-12">',
					'[textarea* your-message placeholder"Message"]',
				'</div>',
				'<div class="col-md-12 col-sm-12 col-xs-12">',
					'[submit class:cont-submit class:btn-contact "Send Message"]',
				'</div>',
			'</div>',
		) );
	} else {
		return $template;
	}
}
add_filter( 'wpcf7_default_template', 'hola_contact7_form_content', 10, 2 );
// Default title override for contact form 7
function mod_contact7_form_title( $template ) {
	$template->set_title( 'Contact Pages Form' );
    return $template;
}
add_filter( 'wpcf7_contact_form_default_pack', 'mod_contact7_form_title' );


/**
 * Editor Style added
 */
function hola_theme_add_editor_styles() {
	$font_url = str_replace( ',', '%2C', '//fonts.googleapis.com/css?family=Dosis:400,500,600,700,800|Roboto:100,300,400,500,700,900' );
	add_editor_style( $font_url );
}
add_action( 'after_setup_theme', 'hola_theme_add_editor_styles' );




// Replaces the excerpt "[...]" text
function hola_excerpt_dot_fix($more) {
	global $post;
	return '';
}
add_filter('excerpt_more', 'hola_excerpt_dot_fix');


/**
 * Implement One Click Demo Import feature.
 */
require get_template_directory() . '/lib/ocdi/init.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Breadcrumbs
 */
require get_template_directory() . '/inc/breadcrumbs.php';

/**
 * Navigation walker
 */
require get_template_directory() . '/inc/class-hola-nav-walker.php';

/**
 * Comment walker
 */
require get_template_directory() . '/inc/class-bootstrap-comment-walker.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
