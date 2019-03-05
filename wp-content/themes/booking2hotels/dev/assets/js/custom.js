jQuery(document).ready(function ($) {
	if (window.matchMedia('(min-width: 992px)').matches) {
		$('.fixed-navbar').scrollToFixed();
	}


	$('.gallery_layout').lightGallery({
		thumbnail: true,
		selector: '.gallery_item'
	});
});
$(function () {
	// Toggle Nav on Click
	$('.toggle-nav').click(function () {
		// Calling a function in case you want to expand upon this.
		toggleNav();
	});
});

function toggleNav() {
	if ($('#site-wrapper').hasClass('show-nav')) {
		// Do things on Nav Close
		$('#site-wrapper').removeClass('show-nav');
	} else {
		// Do things on Nav Open
		$('#site-wrapper').addClass('show-nav');
	}
}
(function ($, w) {
	'use strict';
	if (typeof $ === 'undefined') return;
	$('.slide').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		fade: true,
		nextArrow: $('._next_main-slide'),
		prevArrow: $('._prev_main-slide'),
		speed: 900,
		infinite: true,
		cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
		touchThreshold: 100,
		unslick: true,
		margin : 0
	});

})(jQuery, window);
