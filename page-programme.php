<?php
/*
Template Name: Programme
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
		the_field('titre_page_programme');
		?>
	</h1>

	<p class="text-center"><?php
		the_field('texte_informatif_programme');
		?>
	</p>
	<div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist" id="menu_tab_programme">
    <li role="presentation" class="active"><a href="#programme25" aria-controls="programme25" role="tab" data-toggle="tab">Jeudi 25 Mai</a></li>
    <li role="presentation"><a href="#programme26" aria-controls="programme26" role="tab" data-toggle="tab">Vendredi 26 Mai</a></li>
    <li role="presentation"><a href="#programme27" aria-controls="programme27" role="tab" data-toggle="tab">Samedi 27 Mai</a></li>
    <li role="presentation"><a href="#programme28" aria-controls="programme28" role="tab" data-toggle="tab">Dimanche 28 Mai</a></li>
		<li role="presentation"><a href="#programmeplus" aria-controls="programmeplus" role="tab" data-toggle="tab">Les + du festival</a></li>
  </ul>

  <!-- Tab panes -->
	<!-- Tab Jeudi 25 Mai -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="programme25">
			<?php
				if ( !function_exists('get_field') ) return;
				$items_programme_25 = get_field('programme_jeudi_25_mai');
				echo '<div class="row">';
				foreach ($items_programme_25 as $item_programme25) {
					echo '<div class="col-sm-4">';
						echo '<div class="bloc_uni_prog">';
							echo '<h2>' . $item_programme25['nom_de_lactivite_25'] . '</h2>';
							echo '<p class="description_programme">' . $item_programme25['description_de_lactivite_25'] . '</p>';
							echo '<p class="horaire_programme">' . $item_programme25['horaire_de_lactivite_25'] . '</p>';
							echo '<a class="green-button" href="#">Prochainement</a>';
						echo '</div>';
					echo '</div>';
				}
				echo '</div>';
				?>
		</div>
		<!-- Tab Vendredi 26 Mai -->
    <div role="tabpanel" class="tab-pane" id="programme26">
			<?php
				if ( !function_exists('get_field') ) return;
				$items_programme26 = get_field('programme_vendredi_26_mai');
				echo '<div class="row">';
				foreach ($items_programme26 as $item_programme26) {
					echo '<div class="col-sm-4">';
						echo '<div class="bloc_uni_prog">';
							echo '<h2>' . $item_programme26['nom_de_lactivite_26'] . '</h2>';
							echo '<p class="description_programme">' . $item_programme26['description_de_lactivite_26'] . '</p>';
							echo '<p class="horaire_programme">' . $item_programme26['horaire_de_lactivite_26'] . '</p>';
							echo '<a class="green-button" href="#">Je m\'inscris !</a>';
						echo '</div>';
					echo '</div>';
				}
				echo '</div>';
				?>
		</div>
		<!-- Tab Samedi 27 Mai -->
    <div role="tabpanel" class="tab-pane" id="programme27">
			<?php
				if ( !function_exists('get_field') ) return;
				$items_programme27 = get_field('programme_samedi_27_mai');
				echo '<div class="row">';
				foreach ($items_programme27 as $item_programme27) {
					echo '<div class="col-sm-4">';
						echo '<div class="bloc_uni_prog">';
							echo '<h2>' . $item_programme27['nom_de_lactivite_27'] . '</h2>';
							echo '<p class="description_programme">' . $item_programme27['description_de_lactivite_27'] . '</p>';
							echo '<p class="horaire_programme">' . $item_programme27['horaire_de_lactivite_27'] . '</p>';
							echo '<a class="green-button" href="#">Je m\'inscris !</a>';
						echo '</div>';
					echo '</div>';
				}
				echo '</div>';
			?>
		</div>
		<!-- Tab Dimanche 28 Mai -->
    <div role="tabpanel" class="tab-pane" id="programme28">
			<?php
				if ( !function_exists('get_field') ) return;
				$items_programme28 = get_field('programme_dimanche_28_mai');
				echo '<div class="row">';
				foreach ($items_programme28 as $item_programme28) {
					echo '<div class="col-sm-4">';
						echo '<div class="bloc_uni_prog">';
							echo '<h2>' . $item_programme28['nom_de_lactivite_28'] . '</h2>';
							echo '<p class="description_programme">' . $item_programme28['description_de_lactivite_28'] . '</p>';
							echo '<p class="horaire_programme">' . $item_programme28['horaire_de_lactivite_28'] . '</p>';
							echo '<a class="green-button" href="#">Je m\'inscris !</a>';
						echo '</div>';
					echo '</div>';
				}
				echo '</div>';
			?>
		</div>
		<div role="tabpanel" class="tab-pane" id="programmeplus">
			<?php
				if ( !function_exists('get_field') ) return;
				$items_programmeplus = get_field('les_+_du_festival');
				echo '<div class="row">';
				foreach ($items_programmeplus as $item_programmeplus) {
					echo '<div class="col-sm-4">';
						echo '<div class="bloc_uni_prog">';
							echo '<h2>' . $item_programmeplus['nom_de_lactivite_+'] . '</h2>';
							echo '<p class="description_programme">' . $item_programmeplus['horaire_de_lactivite_+'] . '</p>';
							echo '<p class="horaire_programme">' . $item_programmeplus['description_de_lactivite_+'] . '</p>';
						echo '</div>';
					echo '</div>';
				}
				echo '</div>';
				?>
			</div>
  </div>
</div>
</div>

<?php get_footer(); ?>
