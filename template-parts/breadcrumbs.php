<!-- breadcrumbs-section-start -->
<section class="section breadcrumbs-area gray-bg ptb-120">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumbs text-center">
					<?php
					if ( is_home() && get_option( 'page_for_posts' ) ) {
						echo '<h2>' . esc_html( get_the_title( get_option( 'page_for_posts' ) ) ) . '</h2>';
					} elseif ( is_archive() ) {
						the_archive_title( '<h2>', '</h2>' );
					} elseif ( is_search() ) {
						printf(
							'<h2>'
							. esc_html__( 'Search Results for: %s', 'hola' )
							. '</h2>',
							get_search_query()
						);
					}
					if ( function_exists( 'hola_breadcrumbs' ) ) {
						hola_breadcrumbs();
					}
					?>

                </div><!-- .breadcrumbs .text-center -->
            </div><!-- .col-md-12 -->
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .section .breadcrumbs-area .gray-bg .ptb-120 -->
<!-- breadcrumbs-section-end -->