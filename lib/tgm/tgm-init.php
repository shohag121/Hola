<?php

/**
 * TGM Init Class
 */
require_once get_template_directory() . '/lib/tgm/class-tgm-plugin-activation.php';

function wpgeeky_options_register_required_plugins() {
	
	$plugins = array(
		array(
			'name'               => 'Redux Framework',
			'slug'               => 'redux-framework',
			'required'           => true,
			'force_activation'   => true,
			'force_deactivation' => true,
		),
		array(
			'name'               => 'CMB2',
			'slug'               => 'cmb2',
			'required'           => true,
			'force_activation'   => true,
			'force_deactivation' => true,
		),
		array(
			'name'               => 'Contact Form 7',
			'slug'               => 'contact-form-7',
			'required'           => true,
			'force_activation'   => true,
			'force_deactivation' => false,
		),
		array(
			'name'               => 'One Click Demo Import',
			'slug'               => 'one-click-demo-import',
			'required'           => true,
			'force_activation'   => true,
			'force_deactivation' => true,
		),
		array(
			'name'   => 'WPGeeky Library',
			'slug'   => 'wpgeeky-lib',
			'required'           => true,
			'force_activation'   => true,
			'force_deactivation' => false,
			'source' => 'https://github.com/bdCalling/WPGeeky-Library/archive/master.zip',
		),
		
	);
	
	$config = array(
		'domain'       => 'wpgeeky',
		// Text domain - likely want to be the same as your theme.
		'default_path' => '',
		// Default absolute path to pre-packaged plugins
		//'parent_menu_slug' 	=> 'plugins.php', 				// Default parent menu slug
		//'parent_url_slug' 	=> 'plugins.php', 				// Default parent URL slug
		'parent_slug'  => 'themes.php',
		'capability'   => 'manage_options',
		'menu'         => 'install-required-plugins',
		// Menu slug
		'has_notices'  => true,
		// Show admin notices or not
		'is_automatic' => true,
		// Automatically activate plugins after installation or not
	);
	
	tgmpa( $plugins, $config );
	
}

add_action( 'tgmpa_register', 'wpgeeky_options_register_required_plugins' );