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
	<div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#programme25" aria-controls="programme25" role="tab" data-toggle="tab">Jeudi 25 Mai</a></li>
    <li role="presentation"><a href="#programme26" aria-controls="programme26" role="tab" data-toggle="tab">Vendredi 26 Mai</a></li>
    <li role="presentation"><a href="#programme27" aria-controls="programme27" role="tab" data-toggle="tab">Samedi 27 Mai</a></li>
    <li role="presentation"><a href="#programme28" aria-controls="programme28" role="tab" data-toggle="tab">Dimanche 28 Mai</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="programme25"><?php
				if ( !function_exists('get_field') ) return;
				$items_programme_25 = get_field('programme_jeudi_25_mai');

				foreach ($items_programme_25 as $item_programme25) {

						echo '<p>';
							echo $item_programme25['nom_de_lactivite_25'];
						echo '</p>';
						echo '<p>';
							echo $item_programme25['horaire_de_lactivite_25'];
						echo '</p>';
						echo '<p>';
						echo $item_programme25['description_de_lactivite_25'];
						echo '</p>';
						echo '<div class="text-center">';
						echo "<a href='#'>Je m'inscris !";
						echo '</a>';
						echo '</div>';

				}
				?></div>

    <div role="tabpanel" class="tab-pane" id="programme26"><?php
				if ( !function_exists('get_field') ) return;
				$items_programme26 = get_field('programme_vendredi_26_mai');

				foreach ($items_programme26 as $item_programme26) {

						echo '<p>';
							echo $item_programme26['nom_de_lactivite_26'];
						echo '</p>';

						echo '<p>';
							echo $item_programme26['horaire_de_lactivite_26'];
						echo '</p>';
						echo '<p>';
						echo $item_programme26['description_de_lactivite_26'];
						echo '</p>';
						echo '<div class="text-center">';
						echo "<a href='#'>Je m'inscris !";
						echo '</a>';
						echo '</div>';
				}
				?></div>

    <div role="tabpanel" class="tab-pane" id="programme27"><?php
				if ( !function_exists('get_field') ) return;
				$items_programme27 = get_field('programme_samedi_27_mai');

				foreach ($items_programme27 as $item_programme27) {
						echo '<p>';
							echo $item_programme27['nom_de_lactivite_27'];
						echo '</p>';
						echo '<p>';
							echo $item_programme27['horaire_de_lactivite_27'];
						echo '</p>';
						echo '<p>';
						echo $item_programme27['description_de_lactivite_27'];
						echo '</p>';
						echo '<div class="text-center">';
						echo "<a href='#'>Je m'inscris !";
						echo '</a>';
						echo '</div>';

				}
				?></div>

    <div role="tabpanel" class="tab-pane" id="programme28"><?php
				if ( !function_exists('get_field') ) return;
				$items_programme28 = get_field('programme_dimanche_28_mai');

				foreach ($items_programme28 as $item_programme28) {
						echo '<p>';
							echo $item_programme28['nom_de_lactivite_28'];
						echo '</p>';
						echo '<p>';
							echo $item_programme28['horaire_de_lactivite_28'];
						echo '</p>';
						echo '<p>';
						echo $item_programme28['description_de_lactivite_28'];
						echo '</p>';
						echo '<div class="text-center">';
						echo "<a href='#'>Je m'inscris !";
						echo '</a>';
						echo '</div>';

				}
				?></div>

  </div>

</div>
</div>

<?php get_footer(); ?>
