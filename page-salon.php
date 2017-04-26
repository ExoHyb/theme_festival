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
	<h1><?php the_field('titre_page_salon'); ?></h1>
	<div class="row">
		<div class="col-sm-5">
			<div class="globdesc-salon">
				<p id="dsc-sal"><?php the_field('description_salon'); ?></p>
				<h2><?php the_field('titre_2_salon'); ?></h2>
				<p ><?php the_field('horaire_salon'); ?></p>
				<h2><?php the_field('devenir_exposant'); ?></h2>
			</div>
		</div>
		<div class="col-sm-7">
			<h2>Plan du salon</h2>
			<?php
			$image = get_field('carte_du_salon');
			if( !empty($image) ):
				?>
				<img class="plan_salon" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				<?php
			endif;
			?>
		</div>
	</div>
	<!-- Les exposants -->
		<div class="row">
			<h2>Les exposants</h2>
			<!-- Les équpementiers -->
				<div class="col-sm-4">
					<div class="bloc-uni-salon">
					<h3>Les Équipementiers</h3>
					<div class="row">
						<div class="col-xs-6">
							<h4>Exposant:</h4>
						</div>
						<div class="col-xs-6">
							<h4>Stand:</h4>
						</div>
					</div>
					<?php
						if ( !function_exists('get_field') ) return;
						$items_exposants = get_field('exposant_equipementiers');

						foreach ($items_exposants as $item_exposant) {
							echo '<div class="row">';
								echo '<div class="col-xs-6">';
									echo '<p>' . $item_exposant['nom_exposant_equipementier'] . '</p>';
								echo '</div>';
								echo '<div class="col-xs-6">';
									echo '<p style="word-wrap: break-word">' . $item_exposant['stand_equipementier'] . '</p>';
								echo '</div>';
							echo '</div>';
							break;
						}
					?>
				</div>
			</div>
			<!-- Les offices du tourisme -->
				<div class="col-sm-4">
					<div class="bloc-uni-salon">
					<h3>Les Exposants Institutionnels</h3>
					<div class="row">
						<div class="col-xs-6">
							<h4>Exposant:</h4>
						</div>
						<div class="col-xs-6">
							<h4>Stand:</h4>
						</div>
					</div>
					<?php
						if ( !function_exists('get_field') ) return;
						$items_exposants = get_field('exposant_office');

						foreach ($items_exposants as $item_exposant) {
							echo '<div class="row">';
								echo '<div class="col-xs-6">';
									echo '<p>' . $item_exposant['nom_exposant_office'] . '</p>';
								echo '</div>';
								echo '<div class="col-xs-6">';
									echo '<p style="word-wrap: break-word">' . $item_exposant['stand_office'] . '</p>';
								echo '</div>';
							echo '</div>';
							break;
						}
					?>
				</div>
			</div>
			<!-- Les produits locaux -->
				<div class="col-sm-4">
					<div class="bloc-uni-salon">
					<h3>Les Produits Locaux</h3>
					<div class="row">
						<div class="col-xs-6">
							<h4>Exposant:</h4>
						</div>
						<div class="col-xs-6">
							<h4>Stand:</h4>
						</div>
					</div>
					<?php
						if ( !function_exists('get_field') ) return;
						$items_exposants = get_field('exposant_produits_locaux');

						foreach ($items_exposants as $item_exposant) {
							echo '<div class="row">';
								echo '<div class="col-xs-6">';
									echo '<p>' . $item_exposant['nom_exposant_produits_locaux'] . '</p>';
								echo '</div>';
								echo '<div class="col-xs-6">';
									echo '<p style="word-wrap: break-word">' . $item_exposant['stand_produits_locaux'] . '</p>';
								echo '</div>';
							echo '</div>';
							break;
						}
					?>
				</div>
			</div>
			<!-- Les librairies -->
				<div class="col-sm-4 col-sm-offset-2">
					<div class="bloc-uni-salon">
					<h3>Les Librairies</h3>
					<div class="row">
						<div class="col-xs-6">
							<h4>Exposant:</h4>
						</div>
						<div class="col-xs-6">
							<h4>Stand:</h4>
						</div>
					</div>
					<?php
						if ( !function_exists('get_field') ) return;
						$items_exposants = get_field('exposant_librairie');

						foreach ($items_exposants as $item_exposant) {
							echo '<div class="row">';
								echo '<div class="col-xs-6">';
									echo '<p>' . $item_exposant['nom_exposant_librairie'] . '</p>';
								echo '</div>';
								echo '<div class="col-xs-6">';
									echo '<p style="word-wrap: break-word">' . $item_exposant['stand_librairie'] . '</p>';
								echo '</div>';
							echo '</div>';
							break;
						}
					?>
				</div>
			</div>
			<!-- Les grands itinéraires pédestre -->
				<div class="col-sm-4">
					<div class="bloc-uni-salon">
					<h3>Les Grands Itinéraires Pédestre</h3>
					<div class="row">
						<div class="col-xs-6">
							<h4>Exposant:</h4>
						</div>
						<div class="col-xs-6">
							<h4>Stand:</h4>
						</div>
					</div>
					<?php
						if ( !function_exists('get_field') ) return;
						$items_exposants = get_field('exposant_itineraire_pedestre');

						foreach ($items_exposants as $item_exposant) {
							echo '<div class="row">';
								echo '<div class="col-xs-6">';
									echo '<p>' . $item_exposant['nom_exposant_itineraire_pedestre'] . '</p>';
								echo '</div>';
								echo '<div class="col-xs-6">';
									echo '<p style="word-wrap: break-word">' . $item_exposant['stand_itineraire_pedestre'] . '</p>';
								echo '</div>';
							echo '</div>';
							break;
						}
					?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
