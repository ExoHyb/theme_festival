<?php
/*
Template Name: Accueil
*/
?>

<?php get_header(); ?>

<div id="main" role="main">
	<?php while (have_posts()) : the_post(); ?>
		<div class="entry-content clearfix">
			<?php the_content(); ?>
      <h2 class="text-center"><?php
				the_field('titre_intervenants');
				?>
      </h2>

  <div class="text-center slideraccueil">
    <?php

    $slideraccueils = get_field('slider_intervenants');

    if( $slideraccueils ): ?>
      <?php foreach( $slideraccueils as $slideraccueil ): ?>
        <div class="text-center">
                 <img class="img-responsive" src="<?php echo $slideraccueil['sizes']['thumbnail']; ?>" alt="<?php echo $slideraccueil['alt']; ?>" />
         </div>
     <?php endforeach; ?>
   <?php endif; ?>
  </div>

      <h2 class="text-center"><?php
  			the_field('titre_randonnees');
  			?>
      </h2>

      <div class="row">
         <?php

         $imagerandos = get_field('gallerie_randonnees');

         if( $imagerandos ): ?>
         <ul>
           <?php foreach( $imagerandos as $imagerando ): ?>
             <div class="col-sm-4">
                      <img class="img-responsive" src="<?php echo $imagerando['sizes']['thumbnail']; ?>" alt="<?php echo $imagerando['alt']; ?>" />
              </div>
          <?php endforeach; ?>
        </ul>
        <?php endif; ?>
      </div>
      <div class="text-center">
        <a href="randofestival-mende.fr/inscription" class="green-button"><?php
        the_field('lien_inscription');
        ?>
      </a>
      </div>

      <h2 class="text-center"><?php
      	the_field('titre_instagram');
      ?>
      </h2>
		</div>
	<?php endwhile; ?>
</div>

<?php get_footer(); ?>
