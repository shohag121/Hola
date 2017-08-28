<?php
add_action( 'cmb2_admin_init', 'hola_posrfolio_metaboxes' );
/**
 * Define the metabox and field configurations.
 */
function hola_posrfolio_metaboxes() {
	
	// Start with an underscore to hide fields from custom fields list
	$prefix = '_hola_';
	
	/**
	 * Initiate the metabox
	 */
	$portfolio = new_cmb2_box( array(
		'id'            => 'portfolio_meta',
		'title'         => __( 'Project Information', 'hola' ),
		'object_types'  => array( 'hola_portfolio', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );
	
	// Portfolio Image size
	$portfolio->add_field( array(
		'name'       => __( 'Project Image Size', 'hola' ),
		'desc'       => __( 'Project client name here.', 'hola' ),
		'id'         => $prefix . 'project_img_size',
		'type'             => 'select',
		'show_option_none' => true,
		'options'          => array(
			'w' => __( 'Double Width', 'hola' ),
			'h'   => __( 'Double Height', 'hola' ),
			'wh'     => __( 'Double Height Width', 'hola' ),
		),
	) );
	
	// Project Client Name
	$portfolio->add_field( array(
		'name'       => __( 'Client Name', 'hola' ),
		'desc'       => __( 'Project client name here.', 'hola' ),
		'id'         => $prefix . 'project_client',
		'type'       => 'text',
	) );
	// Project End Date
	$portfolio->add_field( array(
		'name'       => __( 'Completed On', 'hola' ),
		'desc'       => __( 'Project End Date.', 'hola' ),
		'id'         => $prefix . 'project_date',
		'type'       => 'text_date',
	) );
	// Project Required Skills
	$portfolio->add_field( array(
		'name'       => __( 'Skills', 'hola' ),
		'desc'       => __( 'Project Required Skills.', 'hola' ),
		'id'         => $prefix . 'project_skills',
		'type'       => 'text',
		'repeatable' => true,
		'text' => array(
			'add_row_text' => 'Add Another Skill',
		),
	) );
	
	// URL text field
	$portfolio->add_field( array(
		'name' => __( 'Project URL', 'hola' ),
		'desc' => __( 'Project Demo URL Here.', 'hola' ),
		'id'   => $prefix . 'project_url',
		'type' => 'text_url',
	) );
	
	// URL text field
	$portfolio->add_field( array(
		'name' => __( 'Project Images', 'hola' ),
		'desc' => __( 'Project Preview Imges Here.', 'hola' ),
		'id'   => $prefix . 'project_images',
		'type' => 'file_list',
		 'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
		 'query_args' => array( 'type' => 'image' ), // Only images attachment
		'text' => array(
			'add_upload_files_text' => 'Add or Upload Images', // default: "Add or Upload Files"
			'file_text' => 'Image', // default: "File:"
		),
	) );
	
	// URL text field
	$portfolio->add_field( array(
		'name' => __( 'Project Video', 'hola' ),
		'desc' => __( 'Project Preview Video Here.', 'hola' ),
		'id'   => $prefix . 'project_video',
		'type' => 'oembed',
		
	) );
	
	
	// metabox for team
	/**
	 * Initiate the metabox
	 */
	$team = new_cmb2_box( array(
		'id'            => 'team_meta',
		'title'         => __( 'Member Information', 'hola' ),
		'object_types'  => array( 'hola_team', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );
	
	// Member designation
	$team->add_field( array(
		'name'       => __( 'Designation', 'hola' ),
		'desc'       => __( 'Member designation.', 'hola' ),
		'id'         => $prefix . 'team_designation',
		'type'       => 'text',
	) );
	
	// Member's twitter URL
	$team->add_field( array(
		'name'       => __( 'Twitter URL', 'hola' ),
		'desc'       => __( 'Profile URL.', 'hola' ),
		'id'         => $prefix . 'team_twitter',
		'type'       => 'text_url',
	) );
	
	// Member's facebook URL
	$team->add_field( array(
		'name'       => __( 'Facebook URL', 'hola' ),
		'desc'       => __( 'Profile URL.', 'hola' ),
		'id'         => $prefix . 'team_facebook',
		'type'       => 'text_url',
	) );
	// Member's facebook URL
	$team->add_field( array(
		'name'       => __( 'LinkedIn URL', 'hola' ),
		'desc'       => __( 'Profile URL.', 'hola' ),
		'id'         => $prefix . 'team_linkedin',
		'type'       => 'text_url',
	) );
	
	
	
	// metabox for clients
	/**
	 * Initiate the metabox
	 */
	$team = new_cmb2_box( array(
		'id'            => 'clients_meta',
		'title'         => __( 'Client Information', 'hola' ),
		'object_types'  => array( 'hola_clients', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );
	
	// Member designation
	$team->add_field( array(
		'name'       => __( 'Client URL', 'hola' ),
		'desc'       => __( 'Client\'s Website URL.', 'hola' ),
		'id'         => $prefix . 'client_url',
		'type'       => 'text',
	) );
	
	
	
	
	
	
	
	
	
	
	
	
	
	// <-- metabox end
}