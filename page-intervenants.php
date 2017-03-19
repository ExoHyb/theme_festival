<?php
/*
Template Name: Intervenants
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
		the_field('titre_page_inter');
		?>
	</h1>
	<div class="row">
		<?php
				if ( !function_exists('get_field') ) return;
				$items_les_intervenants = get_field('les_intervenants');

				foreach ($items_les_intervenants as $item_inter) {
					echo '<div class="col-sm-4 text-center">';
						echo '<div class="thumbnail">';
						echo '<img src="';
							echo $item_inter['photo_intervenant']['url'];
						echo '"/>';
						echo '<div class="caption">';
						echo '<h2>';
							echo $item_inter['nom_intervenant'];
						echo '</h2>';
						echo '<p>';
						echo $item_inter['description_intervenant'];
						echo '</p>';
					echo '</div>';
					echo '</div>';
					echo '</div>';
				}
				?>
	</div>
</div>


<?php get_footer(); ?>
