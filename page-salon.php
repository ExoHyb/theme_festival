<?php
/*
Template Name: Salon
*/
?>

<?php get_header(); ?>

<div id="main" role="main">

	<?php while (have_posts()) : the_post(); ?>
		<div class="entry-content clearfix">
			<?php the_content(); ?>
		</div>
	<?php endwhile; ?>
	<h1 class="text-center"><?php
	the_field('titre_page_salon');
	?>
</h1>
	<div class="row">
		<div style="margin-top: 1em;" class="col-sm-5">


	<p class="text-center"><?php
		the_field('description_salon');
		?>
	</p>
	<h2 class="text-center"><?php
		the_field('titre_2_salon');
		?>
	</h2>
	<p ><?php
		the_field('horaire_salon');
		?>
	</p>
	<div><?php
		the_field('devenir_exposant');
		?>
		</div>
		</div>

		<div class="col-sm-7">
			<div class="text-center">
				<h2>Plan du salon</h2>
			<?php

			$image = get_field('carte_du_salon');

			if( !empty($image) ): ?>

			<img class="plan_salon" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

		<?php endif; ?>

				</div>
		</div>

	</div>
</div>

<?php get_footer(); ?>
