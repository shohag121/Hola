<?php
/**
 * Template Pricing Table
 *
 * @package Hola
 * @since Hola 1.0
 */
global $hola_options;
?>
<!-- pricing-section-area-start -->
<section class="pricing-area ptb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h2><?php echo $hola_options['pricing-heading']; ?></h2>
                    <p><?php echo $hola_options['pricing-description']; ?></p>
                </div>
            </div>
        </div>
        <div class="row">
			<?php
			// the query
			$the_query = new WP_Query( array(
				'post_type' => 'hola_pricing',
				'posts_per_page' => 3,
				'order'      => 'ASC'
			));
			if ( $the_query->have_posts() ) :
				//the loop
				while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="single-pricing <?php echo ( get_post_meta( get_the_ID(), '_hola_pricing_selected', 1 ) ) ? 'active' : ''; ?> text-center">
                            <div class="pricing-top">
                                <h3><?php the_title(); ?></h3>
                                <span><?php echo esc_html( get_post_meta( get_the_ID(), '_hola_pricing_price', 1 ) ); ?></span>
                            </div>
                            <div class="pricing-bottom">
                                <?php
								$items = get_post_meta( get_the_ID(), '_hola_pricing_group', 1 );
								foreach ( $items as $item ) : ?>
                                    <div class="price-list">
                                        <p><?php echo $item['_hola_pricing_feature_name']; ?></p>
                                        <span><?php echo $item['_hola_pricing_feature_description']; ?></span>
                                    </div>
								<?php endforeach; ?>
                            </div>
                            <div class="price-btn">
                                <a href="<?php echo esc_url( get_post_meta( get_the_ID(), '_hola_pricing_url', 1 ) ); ?>"><?php echo esc_html( get_post_meta( get_the_ID(), '_hola_pricing_text', 1 ) ); ?></a>
                            </div>
                        </div>
                    </div>
				<?php endwhile;
				//loop end
				wp_reset_postdata();
			else : ?>
                <p><?php _e( 'Sorry, no pricing table found.', 'hola' ); ?></p>
			<?php endif; ?>

        </div>
    </div>
</section>
<!-- pricing-section-area-end -->