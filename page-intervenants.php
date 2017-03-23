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
	<div class="row" id="list_intervenants">
		<?php
				if ( !function_exists('get_field') ) return;
				$items_les_intervenants = get_field('les_intervenants');

				foreach ($items_les_intervenants as $item_inter) {
					echo '<div class="col-xs-12 col-sm-4">';
						echo '<div class="image_intervenant">';
							echo '<img src="' . $item_inter['photo_intervenant'][url] . '"/>';
						echo '</div>';
						echo '<div class="caption">';
								echo '<h2>' . $item_inter['nom_intervenant'] . '</h2>';
								echo '<p>' . $item_inter['description_intervenant'] . '</p>';
						echo '</div>';
					echo '</div>';
				}
				?>
	</div>
	<?php echo '<div class="clearfix"></div>'; ?>
</div>


<?php get_footer(); ?>
