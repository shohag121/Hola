<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Hola
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 *
 * @return array
 */
function hola_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}
	
	return $classes;
}

add_filter( 'body_class', 'hola_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable
 * articles.
 */
function hola_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}

add_action( 'wp_head', 'hola_pingback_header' );


/**
 * Custom Search box
 */

function hola_search_form( $form ) {
	
	ob_start()
	?>
    <div class="blog-search">
        <form role="search" method="get"
              action="<?php echo home_url( '/' ); ?>">
            <input placeholder="Search..." type="text" name="s" id="s"
                   value="<?php echo get_search_query(); ?>">
            <button class="submit" type="submit"><i class="fa fa-search"
                                                    aria-hidden="true"></i>
            </button>
        </form>
    </div>
	<?php
	return ob_get_clean();
}

add_filter( 'get_search_form', 'hola_search_form', 100 );


/**
 * Olite Numeric Post Navigation
 */
function hola_numeric_posts_nav() {
	
	if ( is_singular() ) {
		return;
	}
	
	global $wp_query;
	
	/** Stop execution if there's only 1 page */
	if ( $wp_query->max_num_pages <= 1 ) {
		return;
	}
	
	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	$max   = intval( $wp_query->max_num_pages );
	
	/**    Add current page to the array */
	if ( $paged >= 1 ) {
		$links[] = $paged;
	}
	
	/**    Add the pages around the current page to the array */
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}
	
	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}
	
	echo '<div class="col-md-12 text-center"><div class="pagination"><ul>' . "\n";
	
	/**    Previous Post Link */
	if ( get_previous_posts_link() ) {
		printf( '<li>%s</li>' . "\n", get_previous_posts_link( '<' ) );
	}
	
	/**    Link to first page, plus ellipses if necessary */
	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? ' class="active"' : '';
		
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
		
		if ( ! in_array( 2, $links ) ) {
			echo '<li>...</li>';
		}
	}
	
	/**    Link to current page, plus 2 pages in either direction if necessary */
	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
	}
	
	/**    Link to last page, plus ellipses if necessary */
	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) ) {
			echo '<li>...</li>' . "\n";
		}
		
		$class = $paged == $max ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
	}
	
	/**    Next Post Link */
	if ( get_next_posts_link() ) {
		printf( '<li>%s</li>' . "\n", get_next_posts_link( '>' ) );
	}
	
	echo '</ul></div></div>' . "\n";
	
}
