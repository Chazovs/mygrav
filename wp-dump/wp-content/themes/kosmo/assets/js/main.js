/*

Page: main JS
Author: Surjith S M
URI: http://surjithctly.in/
Version: 1.0

*/

(function($) {
    "use strict";


    
	/* ============= Submenu ============= */
	$('ul.main-menu [data-toggle=dropdown]').on('click', function (event) {
	    event.preventDefault();
	    event.stopPropagation();
	    $(this).parent().siblings().removeClass('open');
	    $(this).parent().toggleClass('open');
	});
    /* ============= Homepage Slider ============= */
    if ($('.flexslider').length) {
        $('.flexslider').flexslider({
            animation: "fade"

        });
    }
 
    /****************************************
	   Carousel slider initiation
	 ***************************************/
	  $('.kosmo-carousel').each(function () {
		var carousel = $(this),
			loop = carousel.data('loop'),
			items = carousel.data('items'),
			margin = carousel.data('margin'),
			stagePadding = carousel.data('stage-padding'),
			autoplay = carousel.data('autoplay'),
			autoplayTimeout = carousel.data('autoplay-timeout'),
			smartSpeed = carousel.data('smart-speed'),
			dots = carousel.data('dots'),
			nav = carousel.data('nav'),
			navSpeed = carousel.data('nav-speed'),
			rXsmall = carousel.data('r-x-small'),
			rXsmallNav = carousel.data('r-x-small-nav'),
			rXsmallDots = carousel.data('r-x-small-dots'),
			rXmedium = carousel.data('r-x-medium'),
			rXmediumNav = carousel.data('r-x-medium-nav'),
			rXmediumDots = carousel.data('r-x-medium-dots'),
			rSmall = carousel.data('r-small'),
			rSmallNav = carousel.data('r-small-nav'),
			rSmallDots = carousel.data('r-small-dots'),
			rMedium = carousel.data('r-medium'),
			rMediumNav = carousel.data('r-medium-nav'),
			rMediumDots = carousel.data('r-medium-dots'),
			rLarge = carousel.data('r-large'),
			rLargeNav = carousel.data('r-large-nav'),
			rLargeDots = carousel.data('r-large-dots'),
			center = carousel.data('center');

		carousel.owlCarousel({
			loop: (loop ? true : false),
			items: (items ? items : 4),
			lazyLoad: true,
			margin: (margin ? margin : 0),
			autoplay: (autoplay ? true : false),
			autoplayTimeout: (autoplayTimeout ? autoplayTimeout : 1000),
			smartSpeed: (smartSpeed ? smartSpeed : 250),
			dots: (dots ? true : false),
			nav: (nav ? true : false),
			navText: ["<i class='fa fa-angle-left' aria-hidden='true'></i>", "<i class='fa fa-angle-right' aria-hidden='true'></i>"],
			navSpeed: (navSpeed ? true : false),
			center: (center ? true : false),
			responsiveClass: true,
			responsive: {
				0: {
					items: ( rXsmall ? rXsmall : 1),
					nav: ( rXsmallNav ? true : false),
					dots: ( rXsmallDots ? true : false)
				},
				480: {
					items: ( rXmedium ? rXmedium : 2),
					nav: ( rXmediumNav ? true : false),
					dots: ( rXmediumDots ? true : false)
				},
				768: {
					items: ( rSmall ? rSmall : 3),
					nav: ( rSmallNav ? true : false),
					dots: ( rSmallDots ? true : false)
				},
				992: {
					items: ( rMedium ? rMedium : 5),
					nav: ( rMediumNav ? true : false),
					dots: ( rMediumDots ? true : false)
				},
				1199: {
					items: ( rLarge ? rLarge : 6),
					nav: ( rLargeNav ? true : false),
					dots: ( rLargeDots ? true : false)
				}
			}
		});

	});

    
	
		/*======================================
			Poptrox lightbox gallery
		======================================*/
			var popup_gal = $('.pro-showcase');
			popup_gal.poptrox(
				{
					usePopupNav: true,
					popupPadding: 0,
					selector:'.zoom-img',
					popupNavPreviousSelector: '.nav-previous', // (Advanced) Popup Nav Previous selector
					popupNavNextSelector: '.nav-next' // (Advanced) Popup Nav Next selector

				}
			);
			/*======================================
						Search gallery
			======================================*/
				$(".s-icon").click(function(){
				var redirect_url=$(this).attr("data-url");
				window.location.href=redirect_url;
				});
			



})(jQuery);