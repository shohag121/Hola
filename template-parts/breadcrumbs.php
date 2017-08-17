
<!-- breadcrumbs-section-start -->
<section class="section breadcrumbs-area gray-bg ptb-120">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="breadcrumbs text-center">
					<h2><?php
					if ( is_archive() ) {
						the_archive_title( );
					} else if ( is_search() ) {
						printf( esc_html__( 'Search Results for: %s', 'hola' ), get_search_query() );
					} else {
						single_post_title();
                    }
					?></h2>
				
					<?php hola_breadcrumbs(); ?>
					
				</div>
			</div>
		</div>
	</div>
</section>
<!-- breadcrumbs-section-end -->