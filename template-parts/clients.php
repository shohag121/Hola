<?php
/**
 * Template Part Clients
 *
 * @package WPGeeky
 * @since WPGeeky 1.0
 */
global $wpgeeky_options;
?>
<!-- clients-section-area-start -->
<section class="clients-section-area pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h2><?php echo esc_html( $wpgeeky_options['client-heading'] ); ?></h2>
                    <p><?php echo esc_html( $wpgeeky_options['client-description'] ); ?></p>
                </div><!-- .section-title .text-center -->
            </div><!-- .col-lg-12 -->
        </div><!-- .row -->
        <div class="row">
			<?php
			// the query
			$the_query = new WP_Query( array(
				'post_type'      => 'wpgeeky_clients',
				'posts_per_page' => 8,
				'order'          => 'ASC',
			) );
			if ( $the_query->have_posts() ) : ?>
            <!-- the loop -->
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                
                    <?php if ( $the_query->current_post === 4 ) : ?>
                        </div><!-- .row -->
                        <div class="row">
                    <?php endif; ?>
                    <div class="col-lg-3 col-md-3 col-sm-4  client-item">
                        <a href="<?php echo esc_url( get_post_meta( get_the_ID(), '_wpgeeky_client_url', 1 ) ); ?>"><?php the_post_thumbnail( 'client-img' ); ?></a>
                    </div><!-- .col-lg-3 .col-md-3 .col-sm-4  .client-item -->
                    
                <?php endwhile; ?>
            <!-- end of the loop -->
			<?php wp_reset_postdata(); ?>
			<?php else : ?>
                <p><?php esc_html_e( 'Sorry, no clients found.', 'wpgeeky' ); ?></p>
			<?php endif; ?>
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .clients-section-area .pb-120 -->
<!-- clients-section-area-end -->
