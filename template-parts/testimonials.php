<?php
/**
 * Template Part Testimonials
 *
 * @package Hola
 * @since Hola 1.0
 */
?>
<!-- testimonial-section-start -->
<section class="testimonial-area ptb-120 gray-bg">
    <div class="container">
        <div class="row">
            <h3 class="sr-only"><?php echo esc_html__('Testimonial Area', 'hola')?></h3>
			<?php
			// the query
			$the_query = new WP_Query( [
				'post_type'      => 'hola_testimonial',
				'posts_per_page' => - 1,
				'order'          => 'ASC',
			] );
			if ( $the_query->have_posts() ) : ?>
                <div class="testimonial-active owl-carousel">
                    <!-- the loop -->
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <div class="col-lg-12">
                            <div class="single-testimonial text-center">
                                <div class="testimonial-img mb-20">
									<?php the_post_thumbnail( 'client-img-testimonial' ); ?>
                                </div><!-- .testimonial-img .mb-20 -->
                                <div class="testimonial-info">
									<?php the_content(); ?>
                                    <span><?php the_title(); ?></span>
                                </div><!-- .testimonial-info -->
                            </div><!-- .single-testimonial text-center -->
                        </div><!-- .col-lg-12 -->
					<?php endwhile;
					// end of the loop
					wp_reset_postdata(); ?>
                </div><!-- .testimonial-active owl-carousel -->
			<?php else : ?>
                <p><?php esc_html_e( 'Sorry, no testimonial yet.', 'hola' ); ?></p>
			<?php endif; ?>
        </div><!-- .row -->
    </div><!-- .container -->
</section><!-- .testimonial-area .ptb-120 .gray-bg -->
<!-- testimonial-section-end -->
