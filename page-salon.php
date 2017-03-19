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
	<p class="text-center"><?php
		the_field('description_salon');
		?>
	</p>
	<h2 class="text-center"><?php
		the_field('titre_2_salon');
		?>
	</h2>
	<p class="text-center"><?php
		the_field('horaire_salon');
		?>
	</p>
</div>

<?php get_footer(); ?>
