<?php
/**
 * Template Part Team
 *
 * @package HolaWP
 * @since HolaWP 1.0
 */
global $hola_options;
?>
<!-- team-section-start -->
<section class="team-area ptb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h2><?php echo esc_html( $hola_options['team-heading'] ); ?></h2>
                    <p><?php echo esc_html( $hola_options['team-description'] ); ?></p>
                </div><!-- .section-title .text-center -->
            </div><!-- .col-lg-12 -->
        </div><!-- .row  -->
        <div class="row">
			<?php
			// the query
			$the_query = new WP_Query( array(
				'post_type'      => 'hola_team',
				'posts_per_page' => 4,
				'order'          => 'ASC',
            ) );
			if ( $the_query->have_posts() ) : ?>
                <!-- the loop -->
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <div class="single-team">
                            <div class="team-img">
								<?php the_post_thumbnail( 'member-img' ); ?>
                                <div class="team-icon">
                                    <a href="<?php echo esc_url( get_post_meta( get_the_ID(), '_hola_team_twitter', 1 ) ); ?>"><i class="fa fa-twitter"></i></a>
                                    <a href="<?php echo esc_url( get_post_meta( get_the_ID(), '_hola_team_facebook', 1 ) ); ?>"><i class="fa fa-facebook"></i></a>
                                    <a href="<?php echo esc_url( get_post_meta( get_the_ID(), '_hola_team_linkedin', 1 ) ); ?>"><i class="fa fa-linkedin"></i></a>
                                </div><!-- .team-icon  -->
                            </div><!-- .team-img  -->
                            <div class="team-info text-center">
                                <h3><?php the_title(); ?></h3>
                                <span><?php echo esc_html( get_post_meta( get_the_ID(), '_hola_team_designation', 1 ) ); ?></span>
                            </div><!-- .team-info text-center  -->
                        </div><!-- .single-team  -->
                    </div><!-- .col-lg-3 .col-md-3 .col-sm-4 .col-xs-12  -->
				<?php endwhile; ?>
                <!-- end of the loop -->
				<?php wp_reset_postdata(); ?>
			<?php else : ?>
                <p><?php esc_html_e( 'Sorry, no member found.', 'hola' ); ?></p>
			<?php endif; ?>
        </div><!-- .row  -->
    </div><!-- .container  -->
</section><!-- .team-area .ptb-120  -->
<!-- team-section-end -->
