<?php
/**
 * Template Part Features
 *
 * @package Hola
 * @since Hola 1.0
 */
global $hola_options;
?>
<div class="col-lg-8 col-md-8 col-sm-12">
	<div class="about-info">
		<div class="section-title">
			<h2><?php echo $hola_options['features-heading']; ?></h2>
		</div>
		<p><?php echo $hola_options['features-description']; ?></p>
	</div>
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6">
			<div class="about-inner-box">
				<h3><?php echo $hola_options['features-feature-1']; ?></h3>
				<p><?php echo $hola_options['features-feature-1-description']; ?></p>
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6">
			<div class="about-inner-box icon-2">
				<h3><?php echo $hola_options['features-feature-2']; ?></h3>
				<p><?php echo $hola_options['features-feature-2-description']; ?></p>
			</div>
		</div>
	</div>
</div>
