<?php
/*
Template Name: Pratiques
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
		the_field('titre_page_pratique');
		?>
	</h1>
</div>

<?php get_footer(); ?>
