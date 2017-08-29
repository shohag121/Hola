<?php
/**
 * Template Part Skills
 *
 * @package Hola
 * @since Hola 1.0
 */
global $hola_options;
?>
<div class="col-lg-4 col-md-4 col-sm-12">
	<div class="about-info skill-section">
		<div class="section-title">
			<h2><?php echo $hola_options['skills-heading']; ?></h2>
		</div>
		<div class="progress_bar">
			<div class="progress">
				<div class="lead"><?php echo $hola_options['skills-name-one']; ?></div>
				<div class="progress-bar wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".1s" role="progressbar" aria-valuenow="<?php echo $hola_options['skills-percent-one']; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $hola_options['skills-percent-one']; ?>%;">
					<span><?php echo $hola_options['skills-percent-one']; ?>%</span>
				</div>
			</div>
			<div class="progress">
				<div class="lead"><?php echo $hola_options['skills-name-two']; ?></div>
				<div class="progress-bar wow fadeInLeft" data-wow-duration="1.6s" data-wow-delay=".4s" role="progressbar" aria-valuenow="<?php echo $hola_options['skills-percent-two']; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $hola_options['skills-percent-two']; ?>%;">
					<span><?php echo $hola_options['skills-percent-two']; ?>%</span>
				</div>
			</div>
			<div class="progress">
				<div class="lead"><?php echo $hola_options['skills-name-three']; ?></div>
				<div class="progress-bar wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".8s" role="progressbar" aria-valuenow="<?php echo $hola_options['skills-percent-three']; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $hola_options['skills-percent-three']; ?>%;">
					<span><?php echo $hola_options['skills-percent-three']; ?>%</span>
				</div>
			</div>
			<div class="progress">
				<div class="lead"><?php echo $hola_options['skills-name-four']; ?></div>
				<div class="progress-bar wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".8s" role="progressbar" aria-valuenow="<?php echo $hola_options['skills-percent-four']; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $hola_options['skills-percent-four']; ?>%;">
					<span><?php echo $hola_options['skills-percent-four']; ?>%</span>
				</div>
			</div>
		</div>
	</div>
</div>