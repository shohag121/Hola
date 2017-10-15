<?php
function wpgeeky_ocdi_import_files() {
	return array(
		array(
			'import_file_name'             => 'Home Style One',
			'categories'                   => array( 'Multipurpose', 'Portfolio' ),
			'local_import_file'            => trailingslashit( get_template_directory() ) . 'lib/ocdi/demo/content.xml',
			'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'lib/ocdi/demo/widgets.wie',
			'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'lib/ocdi/demo/customizer.dat',
			'local_import_redux'           => array(
				array(
					'file_path'   => trailingslashit( get_template_directory() ) . 'lib/ocdi/demo/redux_options.json',
					'option_name' => 'wpgeeky_options',
				),
			),
			'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'lib/ocdi/preview/home-one.jpg',
			'import_notice'                => __( 'After you import this demo, set your home page template to "Home Style One"', 'wpgeeky' ),
			'preview_url'                  => 'https://preview.wpgeeky.com/hola/',
		),
		array(
			'import_file_name'             => 'Home Style Two',
			'categories'                   => array( 'Multipurpose', 'Portfolio' ),
			'local_import_file'            => trailingslashit( get_template_directory() ) . 'lib/ocdi/demo/content.xml',
			'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'lib/ocdi/demo/widgets.wie',
			'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'lib/ocdi/demo/customizer.dat',
			'local_import_redux'           => array(
				array(
					'file_path'   => trailingslashit( get_template_directory() ) . 'lib/ocdi/demo/redux_options.json',
					'option_name' => 'wpgeeky_options',
				),
			),
			'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'lib/ocdi/preview/home-two.jpg',
			'import_notice'                => __( 'After you import this demo, set your home page template to "Home Style Two"', 'wpgeeky' ),
			'preview_url'                  => 'https://preview.wpgeeky.com/hola/home-two/',
		),
		array(
			'import_file_name'             => 'Home Style Three',
			'categories'                   => array( 'Multipurpose', 'Portfolio' ),
			'local_import_file'            => trailingslashit( get_template_directory() ) . 'lib/ocdi/demo/content.xml',
			'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'lib/ocdi/demo/widgets.wie',
			'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'lib/ocdi/demo/customizer.dat',
			'local_import_redux'           => array(
				array(
					'file_path'   => trailingslashit( get_template_directory() ) . 'lib/ocdi/demo/redux_options.json',
					'option_name' => 'wpgeeky_options',
				),
			),
			'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'lib/ocdi/preview/home-three.jpg',
			'import_notice'                => __( 'After you import this demo, set your home page template to "Home Style Three"', 'wpgeeky' ),
			'preview_url'                  => 'https://preview.wpgeeky.com/hola/home-three/',
		),
		array(
			'import_file_name'             => 'Home Style Four',
			'categories'                   => array( 'Multipurpose', 'Portfolio' ),
			'local_import_file'            => trailingslashit( get_template_directory() ) . 'lib/ocdi/demo/content.xml',
			'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'lib/ocdi/demo/widgets.wie',
			'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'lib/ocdi/demo/customizer.dat',
			'local_import_redux'           => array(
				array(
					'file_path'   => trailingslashit( get_template_directory() ) . 'lib/ocdi/demo/redux_options.json',
					'option_name' => 'wpgeeky_options',
				),
			),
			'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'lib/ocdi/preview/home-four.jpg',
			'import_notice'                => __( 'After you import this demo, set your home page template to "Home Style Four"', 'wpgeeky' ),
			'preview_url'                  => 'https://preview.wpgeeky.com/hola/home-four/',
		),
		array(
			'import_file_name'             => 'Home Style Five',
			'categories'                   => array( 'Multipurpose', 'Portfolio' ),
			'local_import_file'            => trailingslashit( get_template_directory() ) . 'lib/ocdi/demo/content.xml',
			'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'lib/ocdi/demo/widgets.wie',
			'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'lib/ocdi/demo/customizer.dat',
			'local_import_redux'           => array(
				array(
					'file_path'   => trailingslashit( get_template_directory() ) . 'lib/ocdi/demo/redux_options.json',
					'option_name' => 'wpgeeky_options',
				),
			),
			'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'lib/ocdi/preview/home-five.jpg',
			'import_notice'                => __( 'After you import this demo, set your home page template to "Home Style Five"', 'wpgeeky' ),
			'preview_url'                  => 'https://preview.wpgeeky.com/hola/home-five/',
		),
		array(
			'import_file_name'             => 'Home Style Six',
			'categories'                   => array( 'Multipurpose', 'Portfolio' ),
			'local_import_file'            => trailingslashit( get_template_directory() ) . 'lib/ocdi/demo/content.xml',
			'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'lib/ocdi/demo/widgets.wie',
			'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'lib/ocdi/demo/customizer.dat',
			'local_import_redux'           => array(
				array(
					'file_path'   => trailingslashit( get_template_directory() ) . 'lib/ocdi/demo/redux_options.json',
					'option_name' => 'wpgeeky_options',
				),
			),
			'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'lib/ocdi/preview/home-six.jpg',
			'import_notice'                => __( 'After you import this demo, set your home page template to "Home Style Six"', 'wpgeeky' ),
			'preview_url'                  => 'https://preview.wpgeeky.com/hola/home-six/',
		),
		array(
			'import_file_name'             => 'Home Style Seven',
			'categories'                   => array( 'Multipurpose', 'Portfolio' ),
			'local_import_file'            => trailingslashit( get_template_directory() ) . 'lib/ocdi/demo/content.xml',
			'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'lib/ocdi/demo/widgets.wie',
			'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'lib/ocdi/demo/customizer.dat',
			'local_import_redux'           => array(
				array(
					'file_path'   => trailingslashit( get_template_directory() ) . 'lib/ocdi/demo/redux_options.json',
					'option_name' => 'wpgeeky_options',
				),
			),
			'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'lib/ocdi/preview/home-seven.jpg',
			'import_notice'                => __( 'After you import this demo, set your home page template to "Home Style Seven"', 'wpgeeky' ),
			'preview_url'                  => 'https://preview.wpgeeky.com/hola/home-seven/',
		),
		array(
			'import_file_name'             => 'Home Style Eight',
			'categories'                   => array( 'Multipurpose', 'Portfolio' ),
			'local_import_file'            => trailingslashit( get_template_directory() ) . 'lib/ocdi/demo/content.xml',
			'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'lib/ocdi/demo/widgets.wie',
			'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'lib/ocdi/demo/customizer.dat',
			'local_import_redux'           => array(
				array(
					'file_path'   => trailingslashit( get_template_directory() ) . 'lib/ocdi/demo/redux_options.json',
					'option_name' => 'wpgeeky_options',
				),
			),
			'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'lib/ocdi/preview/home-eight.jpg',
			'import_notice'                => __( 'After you import this demo, set your home page template to "Home Style Eight"', 'wpgeeky' ),
			'preview_url'                  => 'https://preview.wpgeeky.com/hola/home-eight/',
		),
		array(
			'import_file_name'             => 'Home Style Nine',
			'categories'                   => array( 'Multipurpose', 'Portfolio' ),
			'local_import_file'            => trailingslashit( get_template_directory() ) . 'lib/ocdi/demo/content.xml',
			'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'lib/ocdi/demo/widgets.wie',
			'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'lib/ocdi/demo/customizer.dat',
			'local_import_redux'           => array(
				array(
					'file_path'   => trailingslashit( get_template_directory() ) . 'lib/ocdi/demo/redux_options.json',
					'option_name' => 'wpgeeky_options',
				),
			),
			'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'lib/ocdi/preview/home-nine.jpg',
			'import_notice'                => __( 'After you import this demo, set your home page template to "Home Style Nine"', 'wpgeeky' ),
			'preview_url'                  => 'https://preview.wpgeeky.com/hola/home-nine/',
		),
		array(
			'import_file_name'             => 'Home Style Ten',
			'categories'                   => array( 'Multipurpose', 'Portfolio' ),
			'local_import_file'            => trailingslashit( get_template_directory() ) . 'lib/ocdi/demo/content.xml',
			'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'lib/ocdi/demo/widgets.wie',
			'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'lib/ocdi/demo/customizer.dat',
			'local_import_redux'           => array(
				array(
					'file_path'   => trailingslashit( get_template_directory() ) . 'lib/ocdi/demo/redux_options.json',
					'option_name' => 'wpgeeky_options',
				),
			),
			'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . 'lib/ocdi/preview/home-ten.jpg',
			'import_notice'                => __( 'After you import this demo, set your home page template to "Home Style Ten"', 'wpgeeky' ),
			'preview_url'                  => 'https://preview.wpgeeky.com/hola/home-ten/',
		),
	);
}
add_filter( 'pt-ocdi/import_files', 'wpgeeky_ocdi_import_files' );

// setting up the demo
function wpgeeky_ocdi_after_import( $selected_import ) {
	// Assign menus to their locations.
	$main_menu = get_term_by( 'name', 'Menu 1', 'nav_menu' );
	
	set_theme_mod( 'nav_menu_locations', array(
			'menu-1' => $main_menu->term_id,
		)
	);
	
	if ( 'Home Style One' === $selected_import['import_file_name'] ) {
		
		// Assign front page and posts page (blog page).
		$front_page_id = get_page_by_title( 'Home' );
		$blog_page_id  = get_page_by_title( 'Blog' );
		
		update_option( 'show_on_front', 'page' );
		update_option( 'page_on_front', $front_page_id->ID );
		update_option( 'page_for_posts', $blog_page_id->ID );
	} elseif ( 'Home Style Two' === $selected_import['import_file_name'] ) {
		
		// Assign front page and posts page (blog page).
		$front_page_id = get_page_by_title( 'Home Two' );
		$blog_page_id  = get_page_by_title( 'Blog' );
		
		update_option( 'show_on_front', 'page' );
		update_option( 'page_on_front', $front_page_id->ID );
		update_option( 'page_for_posts', $blog_page_id->ID );
	} elseif ( 'Home Style Three' === $selected_import['import_file_name'] ) {
		
		// Assign front page and posts page (blog page).
		$front_page_id = get_page_by_title( 'Home Three' );
		$blog_page_id  = get_page_by_title( 'Blog' );
		
		update_option( 'show_on_front', 'page' );
		update_option( 'page_on_front', $front_page_id->ID );
		update_option( 'page_for_posts', $blog_page_id->ID );
	} elseif ( 'Home Style Four' === $selected_import['import_file_name'] ) {
		
		// Assign front page and posts page (blog page).
		$front_page_id = get_page_by_title( 'Home Four' );
		$blog_page_id  = get_page_by_title( 'Blog' );
		
		update_option( 'show_on_front', 'page' );
		update_option( 'page_on_front', $front_page_id->ID );
		update_option( 'page_for_posts', $blog_page_id->ID );
	} elseif ( 'Home Style Five' === $selected_import['import_file_name'] ) {
		
		// Assign front page and posts page (blog page).
		$front_page_id = get_page_by_title( 'Home Five' );
		$blog_page_id  = get_page_by_title( 'Blog' );
		
		update_option( 'show_on_front', 'page' );
		update_option( 'page_on_front', $front_page_id->ID );
		update_option( 'page_for_posts', $blog_page_id->ID );
	} elseif ( 'Home Style Six' === $selected_import['import_file_name'] ) {
		
		// Assign front page and posts page (blog page).
		$front_page_id = get_page_by_title( 'Home Six' );
		$blog_page_id  = get_page_by_title( 'Blog' );
		
		update_option( 'show_on_front', 'page' );
		update_option( 'page_on_front', $front_page_id->ID );
		update_option( 'page_for_posts', $blog_page_id->ID );
	} elseif ( 'Home Style Seven' === $selected_import['import_file_name'] ) {
		
		// Assign front page and posts page (blog page).
		$front_page_id = get_page_by_title( 'Home Seven' );
		$blog_page_id  = get_page_by_title( 'Blog' );
		
		update_option( 'show_on_front', 'page' );
		update_option( 'page_on_front', $front_page_id->ID );
		update_option( 'page_for_posts', $blog_page_id->ID );
	} elseif ( 'Home Style Eight' === $selected_import['import_file_name'] ) {
		
		// Assign front page and posts page (blog page).
		$front_page_id = get_page_by_title( 'Home Eight' );
		$blog_page_id  = get_page_by_title( 'Blog' );
		
		update_option( 'show_on_front', 'page' );
		update_option( 'page_on_front', $front_page_id->ID );
		update_option( 'page_for_posts', $blog_page_id->ID );
	} elseif ( 'Home Style Nine' === $selected_import['import_file_name'] ) {
		
		// Assign front page and posts page (blog page).
		$front_page_id = get_page_by_title( 'Home Nine' );
		$blog_page_id  = get_page_by_title( 'Blog' );
		
		update_option( 'show_on_front', 'page' );
		update_option( 'page_on_front', $front_page_id->ID );
		update_option( 'page_for_posts', $blog_page_id->ID );
	} elseif ( 'Home Style Ten' === $selected_import['import_file_name'] ) {
		
		// Assign front page and posts page (blog page).
		$front_page_id = get_page_by_title( 'Home Ten' );
		$blog_page_id  = get_page_by_title( 'Blog' );
		
		update_option( 'show_on_front', 'page' );
		update_option( 'page_on_front', $front_page_id->ID );
		update_option( 'page_for_posts', $blog_page_id->ID );
	}
}
add_action( 'pt-ocdi/after_import', 'wpgeeky_ocdi_after_import' );

// remove theme branding
add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );
