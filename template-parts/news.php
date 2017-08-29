<?php
/**
 * Template Part News
 *
 * @package Hola
 * @since Hola 1.0
 */
global $hola_options;
?>
<!-- news-section-start -->
<section class="blog-area ptb-120">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title text-center">
					<h2><?php echo $hola_options['news-heading']; ?></h2>
					<p><?php echo $hola_options['news-description']; ?></p>
				</div>
			</div>
		</div>
		<div class="row">
			<?php
			$cat = '';
			if ( $hola_options['news-category'] ){
				foreach ($hola_options['news-category'] as $single_cat){
					$cat = $cat . $single_cat;
					if (!(end($hola_options['news-category']) == $single_cat )){
						$cat = $cat . ",";
					}
				}
				
			}
			
			// the query
			$the_news = new WP_Query( array( 'cat' => $cat , 'ignore_sticky_posts'=> true, 'posts_per_page' => 3 ) ); ?>
			<?php if ( $the_news->have_posts() ) : ?>
				<!-- pagination here -->
				<!-- the loop -->
				<?php while ( $the_news->have_posts() ) : $the_news->the_post(); ?>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 <?php echo ($the_news->current_post === 2) ? 'hidden-sm': '' ?>">
						<div class="single-blog">
							<?php if ( has_post_thumbnail() ): ?>
								<div class="blog-img">
									<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('news-img' ); ?></a>
								</div>
							<?php else: ?>
								<div class="blog-img">
									<a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/placeholder-mini.png" alt="Blog Thumbnail"></a>
								</div>
							<?php endif; ?>
							<div class="blog-info">
								<div class="blog-meta">
									<span>By <?php the_author_posts_link(); ?>, On <?php echo get_the_date(); ?></span>
								</div>
								<div class="blog-text">
									<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
									<p><?php the_excerpt(); ?></p>
									<a href="<?php the_permalink(); ?>" class="readmore">Read more</a>
								</div>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
				<!-- end of the loop -->
				<!-- pagination here -->
				<?php wp_reset_postdata(); ?>
			<?php else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.','hola' ); ?></p>
			<?php endif; ?>
		
		</div>
	</div>
</section>
<!-- news-section-end -->
