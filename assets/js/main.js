
;(function($){
	$(document).ready(function(){

		$('body').addClass('js');

		// Slick for Slider
		$('.slideraccueil').slick({
			prevArrow:"<img class='a-left control-c prev slick-prev' src='wp-content/themes/theme_festival/assets/img/arrow-left.svg'>",
			nextArrow:"<img class='a-right control-c next slick-next' src='wp-content/themes/theme_festival/assets/img/arrow-right.svg'>",
			autoplay: true,
			dots: false,
			infinite: true,
			speed: 300,
			slidesToShow: 3,
			slidesToScroll: 1,
			responsive: [
				{
					breakpoint: 600,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 2
					}
				},
				{
					breakpoint: 480,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				}
			]
		});

		/********************************************
		* 		Bootstrap
		********************************************/
		// tooltips
		// $('a[data-toggle="tooltip"]').tooltip();

		/********************************************
		* 		appear
		********************************************/

		// appearOrnot = $('.appearornot');
		// appearOrnot.each(function () {
		// 	if ($(window).width() > 992) {
		// 		$(this).attr('data-appear-top-offset', $(this).height() * 4).appear();
		// 	}
		// 	else
		// 		$(this).attr('data-appear-top-offset', $(this).height() * -0.4).appear();
		// }).appear();
		// appearOrnot
		// 	.on('appear', function (event, $all_appeared_elements) {
		// 		$(this).addClass('yesisit');
		// 	});

		/********************************************
		* 		slideout.js navigation menu
		********************************************/
		var slideout = new Slideout({
			'panel': document.getElementById('playground'),
			'menu': document.getElementById('navmob'),
			'padding': 256,
			'tolerance': 70
		});
		// Toggle button
		$('.js-slideout-toggle').on('click', function() {
			slideout.open();
		});

		function close(eve) {
			eve.preventDefault();
			slideout.close();
		}
		slideout
		.on('beforeopen', function() {
			this.panel.classList.add('panel-open');
		})
		.on('open', function() {
			this.panel.addEventListener('click', close);
		})
		.on('beforeclose', function() {
			this.panel.classList.remove('panel-open');
			this.panel.removeEventListener('click', close);
		});



		/********************************************
		* 		when items become links
		********************************************/
		// ex 1: <div data-link="http://www.redpik.net">...</div>
		// ex 2: <div data-link="http://www.redpik.net" data-blank="1">...</div>
		$('[data-link]').on('click', function() {
			var url = $(this).data('link');
			var blank = $(this).data('blank');
			if (blank)
			window.open(url);
			else {
				window.location = url;
			}
			return false;
		});
		// propagation problem?
		$('[data-link] a').on('click', function(e) {
			e.stopPropagation();
		});



		/********************************************
		* 		rel attribute for galleries
		********************************************/
		$('.gallery').each(function() {
			var $_gal = $(this);
			var idgal = $_gal.attr('id');
			$('a', $_gal).attr('rel', idgal);
		});



		/********************************************
		* 		Popin images with fancybox
		********************************************/
		$('.fancybox, a[href$=".jpg"], a[href$=".jpeg"], a[href$=".png"], a[href$=".gif"]').fancybox({
			padding: 6,
			openEffect: 'elastic'
		});



		/********************************************
		* 		fitvids.js
		********************************************/
		$(".entry-content").fitVids();
		$(".entry-content").fitVids({ customSelector: "iframe[src*='dailymotion.com']"});

	});
})(window.jQuery);
