jQuery(document).ready(function($){
	
	// Sticky Header
	$(window).scroll(function() {    
		var scroll = $(this).scrollTop();
		if (scroll >= 40) {
			$('#header-site').addClass('header-scrolling');
			$('body').addClass('scrolling');
		} else {
			$('#header-site').removeClass('header-scrolling');
			$('body').removeClass('scrolling');
		}
	});
	
	// Limit max height of hero container to screen height
	/*var pageHeight = $(window).height();
	var navHeight = pageHeight - 110; // based on height of nav bar
	var pageHeightCSS = navHeight + 'px';
	$('.hero').css( 'max-height', pageHeightCSS );
	$('.header-carousel').css( 'max-height', pageHeightCSS );
	$('.carousel-inner .item').css( 'max-height', pageHeightCSS );*/
	
	// Toggle captions
	$( '.show-caption' ).click(function(event) {
	  	event.preventDefault();
		$( '.carousel-caption' ).toggleClass( 'has-caption' );
		$( '.carousel-indicators' ).toggleClass( 'has-caption' );
		$( this ).toggleClass( 'has-caption' );
		$( this ).blur();
	});
	
	// Show rest of index modules
	$( '.load-button .btn-load' ).click(function(event) {
	  	event.preventDefault();
		$( this ).parent( '.load-button' ).addClass( 'off' );
		$( this ).parent( '.load-button' ).siblings( '.off' ).removeClass( 'off' );
	});
	
	// Check if element is scrolled into view
	function isScrolledIntoView(elem) {
		var docViewTop = $(window).scrollTop();
		var docViewBottom = docViewTop + $(window).height();

		var elemTop = $(elem).offset().top;
		var elemBottom = elemTop + $(elem).height();

		return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
	}
	
	// If element is scrolled into view, fade it in
	$(window).scroll(function() {
		$('.module').each(function() {
			if (isScrolledIntoView(this) === true) {
				$(this).addClass('loaded');
			}
		});
//		$('.single .intro').each(function() {
//			if (isScrolledIntoView(this) === true) {
//				$(this).addClass('loaded');
//			}
//		});
	});
	
});