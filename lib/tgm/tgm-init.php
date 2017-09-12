<?php

/**
 * TGM Init Class
 */
include_once( 'class-tgm-plugin-activation.php' );

function hola_options_register_required_plugins() {
	
	$plugins = [
		[
			'name'               => 'Redux Framework',
			'slug'               => 'redux-framework',
			'required'           => TRUE,
			'force_activation'   => TRUE,
			'force_deactivation' => TRUE,
		],
		[
			'name'               => 'CMB2',
			'slug'               => 'cmb2',
			'required'           => TRUE,
			'force_activation'   => TRUE,
			'force_deactivation' => TRUE,
		],
		[
			'name'               => 'Contact Form 7',
			'slug'               => 'contact-form-7',
			'required'           => TRUE,
			'force_activation'   => TRUE,
			'force_deactivation' => FALSE,
		],
		[
			'name'               => 'One Click Demo Import',
			'slug'               => 'one-click-demo-import',
			'required'           => TRUE,
			'force_activation'   => TRUE,
			'force_deactivation' => TRUE,
		],
		[
			'name'   => 'Hola Library',
			'slug'   => 'hola-lib',
			'source' => 'https://github.com/bdCalling/Hola-Library/archive/master.zip',
		],
	];
	
	$config = [
		'domain'       => 'hola',
		// Text domain - likely want to be the same as your theme.
		'default_path' => '',
		// Default absolute path to pre-packaged plugins
		//'parent_menu_slug' 	=> 'plugins.php', 				// Default parent menu slug
		//'parent_url_slug' 	=> 'plugins.php', 				// Default parent URL slug
		'parent_slug'  => 'plugins.php',
		'capability'   => 'manage_options',
		'menu'         => 'install-required-plugins',
		// Menu slug
		'has_notices'  => TRUE,
		// Show admin notices or not
		'is_automatic' => TRUE,
		// Automatically activate plugins after installation or not
	];
	
	tgmpa( $plugins, $config );
	
}

add_action( 'tgmpa_register', 'hola_options_register_required_plugins' );