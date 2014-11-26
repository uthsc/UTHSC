/**
 * The nav stuff
 */
(function( $ ){

	'use strict';

	var body = $('body'),
		mask = document.createElement("div"),
        wrapper = $( "#wrapper" ),
		togglePushLeft = $( ".toggle-push-left" ),
		togglePushRight = $( ".toggle-push-right" ),
		pushMenuLeft = $( ".push-menu-left" ),
		pushMenuRight = $( ".push-menu-right" ),
        windowLocation,
		activeNav
	;
	mask.className = "mask";

    function getWindowLocation() {
        var loc = body.scrollTop();
        return loc;
    }

    function scrollToLocation(location) {
        body.scrollTop(location);
    }

    function toggleMenu(menuClass){
        windowLocation = getWindowLocation();
        body.addClass(menuClass);
        document.body.appendChild(mask);
        activeNav = menuClass;
        //console.log(windowLocation);
        scrollToLocation(0);
    }

    togglePushLeft.click(function(){
        toggleMenu("pml-open");
    });

    togglePushRight.click(function(){
        toggleMenu("pmr-open");
    });

    /* hide active menu if mask is clicked */
	mask.addEventListener( "click", function(){

		body.removeClass( activeNav );
		activeNav = "";
		document.body.removeChild(mask);
        scrollToLocation(windowLocation)
	} );

	/* hide active menu if close menu button is clicked */
	[].slice.call(document.querySelectorAll(".close-menu")).forEach(function(el,i){
		el.addEventListener( "click", function(){
			body.removeClass( activeNav );
			activeNav = "";
			document.body.removeChild(mask);
		} );
	});
})( jQuery );