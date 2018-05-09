jQuery(document).ready(function($){
	
	// Sticky Header
	var headerWrap = $("#header-site");
	$(window).scroll(function() {    
		var scroll = $(this).scrollTop();
		if (scroll >= 40) {
			headerWrap.addClass("header-fixed");
		} else {
			headerWrap.removeClass("header-fixed");
		}
	});
	
	// Hover state for content modules
	$(".module").hover(function(){ //animation done using css
		$(this).attr('style', '').toggleClass('active inactive');
	});
	
	// Limit max height of hero container to screen height
	var pageHeight = $(window).height();
	var navHeight = pageHeight - 110; // based on height of nav bar
	var pageHeightCSS = navHeight + "px";
	$(".hero").css( "max-height", pageHeightCSS );
	$(".header-carousel").css( "max-height", pageHeightCSS );
	$(".carousel-inner .item").css( "max-height", pageHeightCSS );
	
	// Toggle captions
	$( ".show-caption" ).click(function(event) {
	  	event.preventDefault();
		$( ".header-page" ).toggleClass( "has-caption" );
		$( ".carousel-caption" ).toggleClass( "has-caption" );
		$( ".carousel-indicators" ).toggleClass( "has-caption" );
		$( this ).toggleClass( "has-caption" );
		$( this ).blur();
//		$( ".carousel-caption" ).slideToggle( function() {
//			// Animation complete.
//	  	});
	});
	
	// Prevent scrolling on Hero map
	$(".hero.map").click(function(){$(this).find('iframe').addClass('clicked')}).mouseleave(function(){ $(this).find('iframe').removeClass('clicked')});
	
	// Show rest of index modules
	$( '.load-button .btn-load' ).click(function(event) {
	  	event.preventDefault();
		$( this ).parent( '.load-button' ).addClass( 'off' );
		$( this ).parent( '.load-button' ).siblings( '.off' ).removeClass( 'off' );
	});
	
});