<?php
/*
Template Name: Accueil
*/
?>

<?php get_header(); ?>

<div id="main" role="main">
	<?php while (have_posts()) : the_post(); ?>
		<div class="entry-content clearfix">
			<div id="contenu_principal">
					<?php the_content(); ?>
			</div>

			<!-- slider intervenants -->
			<div id="slide-inter">
				<?php
					echo '<h2>';
						the_field('titre_intervenants');
					echo '</h2>';
				?>

				<div class=" row slideraccueil">
						<?php
						$slideraccueils = get_field('slider_intervenants');

							if( $slideraccueils ):
								foreach( $slideraccueils as $slideraccueil ):
									echo '<div class="">';
										echo '<a href="' . $slideraccueil[lien] . '"><img class="img-responsive images_slider" src="' . $slideraccueil['photo']['sizes']['thumbnail'] . '" alt="' . $slideraccueil['alt'] . '" />';
										echo '<h3 class="nom_intervenant">' . $slideraccueil[nom_de_lintervenant] . '</h3></a>';
									echo '</div>';
								endforeach;
							endif;
						?>
				</div>
			</div>
			<!-- /slider intervenants -->

			<!-- galerie randonnées -->
			<?php
				echo '<h2>';
					the_field('titre_randonnees');
				echo '</h2>';
			?>

			<div class="grid">
				<div class="grid-sizer"></div>
				<?php
				$imagerandos = get_field('gallerie_randonnees');
					if( $imagerandos ):
							foreach( $imagerandos as $imagerando ):
									echo '<div class="grid-item">';
										echo '<a href="' . $imagerando[url] . '"><img class="img-responsive" src="' . $imagerando['sizes']['large'] . '" alt="' . $imagerando['alt'] . '" /></a>';
									echo '</div>';
							endforeach;
					endif;
				?>
			</div>
			<!-- /galerie randonnées -->

			<!-- button inscription -->
			<div id="bloc_inscription">
				<?php
						echo '<a href="randofestival-mende.fr/inscription" class="green-button">';
							the_field('lien_inscription');
						echo '</a>';
				?>
			</div>
			<!-- /button inscription -->

			<!-- bloc instagram -->
			<div id="bloc_instagram">
				<?php
						echo '<h2>';
						the_field('titre_instagram');
						echo '</h2>';
				?>
			</div>
			<!-- /bloc instagram -->

		<?php endwhile; ?>
</div>

<?php get_footer(); ?>
