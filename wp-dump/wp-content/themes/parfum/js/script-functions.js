/*
 * Parfum sripts
 */

jQuery(document).ready(function() {

	jQuery(".search-top-bar #btn-search").hide();

	jQuery(".toggle-search").click(function() {
		jQuery(".wrapper-search-top-bar").toggle(500);
		jQuery(".wrapper-search-top-bar .txt-search").focus();
	});

	jQuery(".boton-menu-movil").click(function() {
		jQuery("#menu-movil").toggle();
	});

	jQuery(".boton-menu-movil-sin-top-bar").click(function() {
		jQuery("#menu-movil").toggle();
	});

	jQuery("ul.nav-menu > li > a").mouseover(function() {
		jQuery("ul.nav-menu > li > a").removeClass('selected-menu-item');
		jQuery(this).addClass('selected-menu-item');
	});

	jQuery('.main-navigation').mouseleave(function(){
		jQuery("ul.nav-menu a").removeClass('selected-menu-item');
	});

	jQuery(".ir-arriba").click(function() {
		jQuery('html, body').animate({ scrollTop: 0 }, 'fast');
	});

	// Mostrar/Ocultar botón 'Volver arriba'
	if (jQuery('.ir-arriba').length) { // Comprobamos que exista el div (se ha podido desactivar en las opciones)
		var refScroll = jQuery('#main');
		var refScroll_offset = refScroll.offset();

		jQuery(window).on('scroll', function() {
			if(jQuery(window).scrollTop() > refScroll_offset.top) {
			  jQuery(".ir-arriba").show(500);
			  //jQuery('.site-header').addClass('fixed');
			} else {
			  jQuery(".ir-arriba").hide();
			  //jQuery('.site-header').removeClass('fixed');
			}
		});
	}

	// Colapsar y expandir menús en dispositivos móviles
	jQuery('.menu-movil-enlaces li.menu-item-has-children').addClass('submenu-toggle');
	jQuery('.menu-movil-enlaces li.menu-item-has-children').addClass('submenu-colapsado');

	jQuery('li.submenu-toggle').click(function(e) {
		var menu_id = jQuery(this).attr('id');

		if (jQuery('li#' + menu_id).hasClass('submenu-colapsado')){

			jQuery('li#' + menu_id).toggleClass('submenu-expandido');
			jQuery('li#' + menu_id + ' > ul').toggle();

		}else{

			jQuery('li#' + menu_id).toggleClass('submenu-colapsado');
			jQuery('li#' + menu_id + ' > ul').toggle();

		}

		e.stopPropagation();

	});

});
