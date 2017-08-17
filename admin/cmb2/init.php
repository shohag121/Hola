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
	
	
	// <-- metabox end
}