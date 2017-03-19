<?php
/*
Template Name: Partenaires
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
		the_field('titre_page_partenaire');
		?>
	</h1>

	<div class="text-center">

	<p class="text-center"><?php
		the_field('description_page_partenaire');
		?>
	</p>
</div>

	<h2 class="text-center"><?php
		the_field('titre_partenaire_1');
		?>
	</h2>

	<div class="row">
		 <?php

		 $imagepartenaires1 = get_field('partenaire_galerie_1');

		 if( $imagepartenaires1 ): ?>
		 <ul>
			 <?php foreach( $imagepartenaires1 as $imagepartenaire1 ): ?>
				 <div class="col-sm-4">
									<img class="img-responsive" src="<?php echo $imagepartenaire1['sizes']['thumbnail']; ?>" alt="<?php echo $imagepartenaire1['alt']; ?>" />
					</div>
			<?php endforeach; ?>
		</ul>
		<?php endif; ?>
	</div>
<hr/>
	<h2 class="text-center"><?php
		the_field('titre_partenaire_2');
		?>
	</h2>

	<div class="row">
		 <?php

		 $imagepartenaires2 = get_field('partenaire_galerie_2');

		 if( $imagepartenaires2 ): ?>
		 <ul>
			 <?php foreach( $imagepartenaires2 as $imagepartenaire2 ): ?>
				 <div class="col-sm-4">
									<img class="img-responsive" src="<?php echo $imagepartenaire2['sizes']['thumbnail']; ?>" alt="<?php echo $imagepartenaire2['alt']; ?>" />
					</div>
			<?php endforeach; ?>
		</ul>
		<?php endif; ?>
	</div>
</div>

<?php get_footer(); ?>
