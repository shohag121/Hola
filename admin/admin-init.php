<?php

    // Load the TGM init if it exists
    if ( file_exists( dirname( __FILE__ ) . '/tgm/tgm-init.php' ) ) {
        require_once dirname( __FILE__ ) . '/tgm/tgm-init.php';
    }
    
	// Load the TGM init if it exists
	if ( file_exists( __DIR__ . '/cmb2/init.php' ) ) {
		require_once __DIR__ . '/cmb2/init.php';
	} elseif ( file_exists(  __DIR__ . '/CMB2/init.php' ) ) {
		require_once __DIR__ . '/CMB2/init.php';
	}
    
     // Load the theme options
    if ( file_exists( dirname( __FILE__ ) . '/options-init.php' ) ) {
        require_once dirname( __FILE__ ) . '/options-init.php';
    }
