<?php
add_action( 'cmb2_admin_init', 'wpgeeky_posrfolio_metaboxes' );
/**
 * Define the metabox and field configurations.
 */
function wpgeeky_posrfolio_metaboxes() {
	
	// Start with an underscore to hide fields from custom fields list
	$prefix = '_wpgeeky_';
	
	/**
	 * Initiate the metabox
	 */
	$portfolio = new_cmb2_box( array(
		'id'            => 'portfolio_meta',
		'title'         => __( 'Project Information', 'wpgeeky' ),
		'object_types'  => array( 'wpgeeky_portfolio', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );
	
	// Portfolio Image size
	$portfolio->add_field( array(
		'name'       => __( 'Project Image Size', 'wpgeeky' ),
		'desc'       => __( 'Project client name here.', 'wpgeeky' ),
		'id'         => $prefix . 'project_img_size',
		'type'             => 'select',
		'show_option_none' => true,
		'options'          => array(
			'w'       => __( 'Double Width', 'wpgeeky' ),
			'h'       => __( 'Double Height', 'wpgeeky' ),
			'wh'      => __( 'Double Height Width', 'wpgeeky' ),
		),
	) );
	
	// Project Client Name
	$portfolio->add_field( array(
		'name'       => __( 'Client Name', 'wpgeeky' ),
		'desc'       => __( 'Project client name here.', 'wpgeeky' ),
		'id'         => $prefix . 'project_client',
		'type'       => 'text',
	) );
	// Project End Date
	$portfolio->add_field( array(
		'name'       => __( 'Completed On', 'wpgeeky' ),
		'desc'       => __( 'Project End Date.', 'wpgeeky' ),
		'id'         => $prefix . 'project_date',
		'type'       => 'text_date',
	) );
	// Project Required Skills
	$portfolio->add_field( array(
		'name'       => __( 'Skills', 'wpgeeky' ),
		'desc'       => __( 'Project Required Skills.', 'wpgeeky' ),
		'id'         => $prefix . 'project_skills',
		'type'       => 'text',
		'repeatable' => true,
		'text' => array(
			'add_row_text' => 'Add Another Skill',
		),
	) );
	
	// URL text field
	$portfolio->add_field( array(
		'name' => __( 'Project URL', 'wpgeeky' ),
		'desc' => __( 'Project Demo URL Here.', 'wpgeeky' ),
		'id'   => $prefix . 'project_url',
		'type' => 'text_url',
	) );
	
	// URL text field
	$portfolio->add_field( array(
		'name' => __( 'Project Images', 'wpgeeky' ),
		'desc' => __( 'Project Preview Imges Here.', 'wpgeeky' ),
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
		'name' => __( 'Project Video', 'wpgeeky' ),
		'desc' => __( 'Project Preview Video Here.', 'wpgeeky' ),
		'id'   => $prefix . 'project_video',
		'type' => 'oembed',
		
	) );
	
	
	// metabox for team
	/**
	 * Initiate the metabox
	 */
	$team = new_cmb2_box( array(
		'id'            => 'team_meta',
		'title'         => __( 'Member Information', 'wpgeeky' ),
		'object_types'  => array( 'wpgeeky_team', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );
	
	// Member designation
	$team->add_field( array(
		'name'       => __( 'Designation', 'wpgeeky' ),
		'desc'       => __( 'Member designation.', 'wpgeeky' ),
		'id'         => $prefix . 'team_designation',
		'type'       => 'text',
	) );
	
	// Member's twitter URL
	$team->add_field( array(
		'name'       => __( 'Twitter URL', 'wpgeeky' ),
		'desc'       => __( 'Profile URL.', 'wpgeeky' ),
		'id'         => $prefix . 'team_twitter',
		'type'       => 'text_url',
	) );
	
	// Member's facebook URL
	$team->add_field( array(
		'name'       => __( 'Facebook URL', 'wpgeeky' ),
		'desc'       => __( 'Profile URL.', 'wpgeeky' ),
		'id'         => $prefix . 'team_facebook',
		'type'       => 'text_url',
	) );
	// Member's facebook URL
	$team->add_field( array(
		'name'       => __( 'LinkedIn URL', 'wpgeeky' ),
		'desc'       => __( 'Profile URL.', 'wpgeeky' ),
		'id'         => $prefix . 'team_linkedin',
		'type'       => 'text_url',
	) );
	
	
	
	// metabox for clients
	/**
	 * Initiate the metabox
	 */
	$team = new_cmb2_box( array(
		'id'            => 'clients_meta',
		'title'         => __( 'Client Information', 'wpgeeky' ),
		'object_types'  => array( 'wpgeeky_clients', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );
	
	// Member designation
	$team->add_field( array(
		'name'       => __( 'Client URL', 'wpgeeky' ),
		'desc'       => __( 'Client\'s Website URL.', 'wpgeeky' ),
		'id'         => $prefix . 'client_url',
		'type'       => 'text',
	) );
	
	
	
	
	// metabox for pricing table
	/**
	 * Initiate the metabox
	 */
	$pricing = new_cmb2_box( array(
		'id'            => 'pricing_meta',
		'title'         => __( 'Table Information', 'wpgeeky' ),
		'object_types'  => array( 'wpgeeky_pricing', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true,
	) );
	
	// Member designation
	$pricing->add_field( array(
		'name'       => __( 'Price', 'wpgeeky' ),
		'desc'       => __( 'Price per terms.', 'wpgeeky' ),
		'id'         => $prefix . 'pricing_price',
		'type'       => 'text',
	) );
	
	// Featured  Box
	$pricing->add_field( array(
		'name'       => __( 'Featured', 'wpgeeky' ),
		'desc'       => __( 'Featured table.', 'wpgeeky' ),
		'id'         => $prefix . 'pricing_selected',
		'type'       => 'checkbox',
	) );
	
	// Features field group
	$group_field_id = $pricing->add_field( array(
		'id'          => $prefix . 'pricing_group',
		'type'        => 'group',
		'description' => __( 'Features for pricing table.', 'wpgeeky' ),
	
		'options'     => array(
			'group_title'   => __( 'Feature {#}', 'wpgeeky' ), // since version 1.1.4, {#} gets replaced by row number
			'add_button'    => __( 'Add Another Feature', 'wpgeeky' ),
			'remove_button' => __( 'Remove Feature', 'wpgeeky' ),
			'sortable'      => true,
		),
	) );
	
	$pricing->add_group_field( $group_field_id, array(
		'name' => 'Feature Name',
		'id'   => $prefix . 'pricing_feature_name',
		'type' => 'text',
	) );
	
	$pricing->add_group_field( $group_field_id, array(
		'name' => 'Description',
		'description' => 'Write a short description for this feature.',
		'id'   => $prefix . 'pricing_feature_description',
		'type' => 'textarea_small',
	) );
	
	// Button Text
	$pricing->add_field( array(
		'name'       => __( 'Button Text', 'wpgeeky' ),
		'desc'       => __( 'Text for buy or subscribe .', 'wpgeeky' ),
		'id'         => $prefix . 'pricing_text',
		'type'       => 'text',
	) );
	
	// Button URL
	$pricing->add_field( array(
		'name'       => __( 'Button URL', 'wpgeeky' ),
		'desc'       => __( 'URL for buy or subscribe .', 'wpgeeky' ),
		'id'         => $prefix . 'pricing_url',
		'type'       => 'text_url',
	) );
	
	
	
	
	
	
	// <-- metabox end
}