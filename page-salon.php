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

	<div class="row">
		<h2 class="text-center">Les exposants</h2>

	<div class="col-sm-3">
		<h3 class="text-center">Les Équipementiers</h3>
		<div class="row">
			<div class="col-md-6">
				<h4>Exposant:</h4>
			</div>
			<div class="col-md-6">
				<h4>Stand</h4>
			</div>
		</div>
		<?php
				if ( !function_exists('get_field') ) return;
				$items_exposants = get_field('exposant_equipementiers');

				foreach ($items_exposants as $item_exposant) {
					echo "<div class='row'>";

					echo "<div class='col-md-6'>";
						echo '<p>';
						echo $item_exposant['nom_exposant_equipementier'];
						echo '</p>';
						echo '</div>';

						echo "<div class='col-md-6'>";
						echo '<p>';
						echo $item_exposant['stand_equipementier'];
						echo '</p>';
						echo '</div>';
						echo '</div>';

				}
				?>
	</div>

	<div class="col-sm-3">
		<h3 class="text-center">Les Offices du Tourisme</h3>
		<div class="row">
			<div class="col-md-6">
				<h4>Exposant:</h4>
			</div>
			<div class="col-md-6">
				<h4>Stand</h4>
			</div>
		</div>
		<?php
				if ( !function_exists('get_field') ) return;
				$items_exposants = get_field('exposant_office');

				foreach ($items_exposants as $item_exposant) {
					echo "<div class='row'>";
					echo "<div class='col-md-6'>";
						echo '<p>';
						echo $item_exposant['nom_exposant_office'];
						echo '</p>';
						echo '</div>';
						echo "<div class='col-md-6'>";
						echo '<p>';
						echo $item_exposant['stand_office'];
						echo '</p>';
						echo '</div>';
						echo '</div>';

				}
				?>
	</div>

	<div class="col-sm-3">
		<h3 class="text-center">Les Produits Locaux</h3>
		<div class="row">
			<div class="col-md-6">
				<h4>Exposant:</h4>
			</div>
			<div class="col-md-6">
				<h4>Stand</h4>
			</div>
		</div>
		<?php
				if ( !function_exists('get_field') ) return;
				$items_exposants = get_field('exposant_produits_locaux');

				foreach ($items_exposants as $item_exposant) {
					echo "<div class='row'>";
					echo "<div class='col-md-6'>";
						echo '<p>';
						echo $item_exposant['nom_exposant_produits_locaux'];
						echo '</p>';
						echo '</div>';
						echo "<div class='col-md-6'>";
						echo '<p>';
						echo $item_exposant['stand_produits_locaux'];
						echo '</p>';
						echo '</div>';
						echo '</div>';

				}
				?>
	</div>

	<div class="col-sm-3">
		<h3 class="text-center">Les Librairies</h3>
		<div class="row">
			<div class="col-md-6">
				<h4>Exposant:</h4>
			</div>
			<div class="col-md-6">
				<h4>Stand</h4>
			</div>
		</div>
		<?php
				if ( !function_exists('get_field') ) return;
				$items_exposants = get_field('exposant_librairie');

				foreach ($items_exposants as $item_exposant) {
					echo "<div class='row'>";
					echo "<div class='col-md-6'>";
						echo '<p>';
						echo $item_exposant['nom_exposant_librairie'];
						echo '</p>';
						echo '</div>';
						echo "<div class='col-md-6'>";
						echo '<p>';
						echo $item_exposant['stand_librairie'];
						echo '</p>';
						echo '</div>';
						echo '</div>';

				}
				?>
	</div>

	<div class="col-sm-3">
		<h3 class="text-center">Les Grands Itinéraires Pédestre</h3>
		<div class="row">
			<div class="col-md-6">
				<h4>Exposant:</h4>
			</div>
			<div class="col-md-6">
				<h4>Stand</h4>
			</div>
		</div>
		<?php
				if ( !function_exists('get_field') ) return;
				$items_exposants = get_field('exposant_itineraire_pedestre');

				foreach ($items_exposants as $item_exposant) {
					echo "<div class='row'>";
					echo "<div class='col-md-6'>";
						echo '<p>';
						echo $item_exposant['nom_exposant_itineraire_pedestre'];
						echo '</p>';
						echo '</div>';
						echo "<div class='col-md-6'>";
						echo '<p>';
						echo $item_exposant['stand_itineraire_pedestre'];
						echo '</p>';
						echo '</div>';
						echo '</div>';

				}
				?>
	</div>
</div>
</div>

<?php get_footer(); ?>
