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
	var navHeight = pageHeight - 116; // based on height of nav bar
	var pageHeightCSS = navHeight + "px";
	$(".hero").css( "max-height", pageHeightCSS );
	
	// Toggle captions
	$( ".show-caption" ).click(function(event) {
	  	event.preventDefault();
		$( ".carousel-caption" ).slideToggle( function() {
			// Animation complete.
	  	});
	});
	
	// Prevent scrolling on Hero map
	$(".hero.map").click(function(){$(this).find('iframe').addClass('clicked')}).mouseleave(function(){ $(this).find('iframe').removeClass('clicked')});
	
});