jQuery(document).ready(function($) {

	var win = $(window),
		body = $(document.body),
		header = $('#header'),
		scrolling = false,
		tester = document.createElement('div');

	Modernizr
		.addTest('ie8', function() {
			tester.innerHTML = '<!' + '--[if IE 8]>x<![endif]-->';
			return tester.innerHTML === 'x';
		})
		.addTest('ie9', function() {
			tester.innerHTML = '<!' + '--[if IE 9]>x<![endif]-->';
			return tester.innerHTML === 'x';
		});

	body
		.on('click', 'a[rel~="external"]', function(event) {
			event.preventDefault();
			window.open(this.href);
		})
		.on('click', '.search-toggle', function() {

			var div = $('.site-search');
			div.toggleClass('is-active');

			if(div.hasClass('is-active')) {

				setTimeout(function() {
					// focus removes placeholder on IE
					// div.find('input').focus();
				}, 100);
			}
		});

	/* =============================================================================
	 * SCROLLING
	 * -------------------------------------------------------------------------- */

	function onScroll() {

		if(scrolling) {
			scrolling = false;

			if(win.scrollTop() > 10) {
				header.addClass('is-sticky');
			} else {
				if(header.hasClass('is-sticky')) {
					header.removeClass('is-sticky');
				}
			}
		}
	}

	setInterval(onScroll, 250);

	// http://ejohn.org/blog/learning-from-twitter/
	win.on('scroll', function() { scrolling = true; }).triggerHandler('scroll');

	/* =============================================================================
	 * SLIDER
	 * -------------------------------------------------------------------------- */

	if(body.hasClass('home')) {

	    body.fitVids();

		$('#banner').find('.slider').bxSlider({

			// http://bxslider.com/options

			mode: (Modernizr.touch) ? 'horizontal' : 'vertical',
			preventDefaultSwipeY: true,
			infiniteLoop: true,
			controls: false,
			pager: true,
			pause: 5000,
			speed: 400,
			easing: 'ease-in-out',
			autoHover: true,
			auto: true
		});

		$('.home-video').on('click', '.video', function(event) {
			var self = $(this),
				video = self.attr('data-video'),
				iframe = '<iframe src="//www.youtube.com/embed/' + video + '?rel=0&controls=1&showinfo=0&autoplay=1" width="1280" height="720" frameborder="0" allowfullscreen></iframe>';
			event.preventDefault();
			self.replaceWith(iframe);
			setTimeout(function() { body.fitVids(); });
		});
	}

	//responsive menu
	$( '.menu-toggle' ).click(function(e){
	    $( '.responsive-nav-holder' ).fadeToggle();
	});

	$( '.responsive-close' ).click(function(e){
	    $( '.responsive-nav-holder' ).fadeToggle();
	});


	$( window ).load(function() {
		var container = document.querySelector('#masonry');
		if (null !== container) {
			var msnry = new Masonry( container, {
			    gutter: 30,
			    itemSelector: '.masonry-item'
			});
		}
	});


	if ( $(window).width() < 970) {
		$('.menu-toggle').click(function() {
	        $('body,html').animate({scrollTop:0},800);
	    });
	}

});
