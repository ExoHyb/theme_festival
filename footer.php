		</div>
	</div>

	<footer id="colophon" role="contentinfo">
		<div class="container text-center">
			<div id="space_footer"></div>
			<div class="row">	
				<div class="col-sm-offset-5 col-sm-2">
					<a href="http://randofestival-mende.fr/mention-legales">Mentions Légales</a>
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

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-97931866-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
