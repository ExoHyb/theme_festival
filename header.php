<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
	<?php wp_head(); ?>
	<!-- IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="//cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="//cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body <?php body_class(); ?>>
<div id="playground">

	<div id="mobile-top" class="visible-xs-block">
		<div class="clearfix">
			<?php
			if( defined( '_MOBILE_NAV_' ) && _MOBILE_NAV_ )
				echo '<div class="js-slideout-toggle visible-xs-block col-xs-4"><span></span></div>';
			?>
			<div id="mob-title" class="col-xs-8 text-right">
				<a href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name')); ?>">
					<?php
					echo get_bloginfo('name');
					?>
				</a>
			</div>
		</div>
	</div>

	<header id="top" role="banner">
		<div class="text-center container">

				<a href="http://www.randofestival-mende.fr"><img class="img-responsive social-i" src="<?php bloginfo('template_url'); ?>/assets/img/1488247219_instagram.png" alt="Lien Instagram" /></a>
				<a href="http://www.randofestival-mende.fr"><img class="img-responsive social-f" src="<?php bloginfo('template_url'); ?>/assets/img/1488247121_facebook.png" alt="Lien Facebook" /></a>
				<a href="http://www.randofestival-mende.fr"><img class="img-responsive social-t" src="<?php bloginfo('template_url'); ?>/assets/img/1488247066_twitter.png" alt="Lien Twitter" /></a>
			<a href="http://www.randofestival-mende.fr"><img class="img-responsive img-header" src="<?php bloginfo('template_url'); ?>/assets/img/headerimg.png" alt="Bannière Camp de Base" /></a>

		</div>

		<nav id="nav-main" role="navigation"<?php if( defined( '_MOBILE_NAV_' ) && _MOBILE_NAV_ ) echo ' class="hidden-xs"';?>>
			<div class="container">
				<?php
				if( has_nav_menu('primary_nav') )
					wp_nav_menu(array('theme_location' => 'primary_nav', 'container' => false, 'menu_class' => 'nav nav-pills'));
				?>
			</div>
		</nav>
	</header>

	<div id="wrap">

		<?php if ( function_exists('yoast_breadcrumb') && (is_category() || is_singular()) )
			yoast_breadcrumb('<div class="container"><div id="breadcrumb">','</div></div>');
		?>

		<div class="container" role="document">
