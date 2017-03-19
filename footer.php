		</div>
	</div>

	<footer id="colophon" role="contentinfo">
		<div class="container text-center">
			<div class="row">
				<div class="col-sm-offset-3 col-sm-6">
					<p>
						En Partenariat avec Midi Libre
					</p>
				</div>
					<div class="col-sm-3">
						<a href="#"><img class="logo-midi" src="<?php bloginfo('template_url'); ?>/assets/img/midilibre.jpeg" alt="" /></a>
					</div>

				<div class="col-sm-offset-4 col-sm-2">
					<a href="#">Mentions Légales</a>
				</div>
				<div class="col-sm-2">
					<a href="#">Conditions Générales</a>
				</div>

				<div class="col-sm-12">
					<p>
						Copiright 2017 - Tous droits réservés Office du Tourisme Mende
					</p>
				</div>
			</div>
			<?php dynamic_sidebar('footer'); ?>
		</div>
	</footer>
</div>

<?php
if( defined( '_MOBILE_NAV_' ) && _MOBILE_NAV_ ) {
	echo '<div id="navmob">';
	dynamic_sidebar('mobile_menu');
	echo '</div>';
}
?>

<?php wp_footer(); ?>

<?php
if( defined('_TWOOBL_DEV_') && _TWOOBL_DEV_ && current_user_can('activate_plugins') ) {
	echo '<div class="debug-twoobl debug-bottom">';
		echo '<span class="visible-xs-inline label label-danger">xs</span>';
		echo '<span class="visible-sm-inline label label-danger">sm</span>';
		echo '<span class="visible-md-inline label label-danger">md</span>';
		echo '<span class="visible-lg-inline label label-danger">lg</span>';
	echo '</div>';
}
?>

</body>
</html>
