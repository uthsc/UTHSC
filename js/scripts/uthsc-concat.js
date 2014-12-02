var openTimer;
var closeTimer;
var endTimer;

jQuery(".uthsc-navigation-column").bind('mouseover', openSubMenu);
jQuery("#uthsc-navigation").bind('mouseleave', closeSubMenu);

function expandMenu() {
    $('#uthsc-navigation ul li ul').stop(true, true).slideDown(400);
}

function collapseMenu() {
    $('#uthsc-navigation ul li ul').stop(true, true).slideUp(400);
}

function clearTimer() {
    clearTimeout(closeTimer);
    clearTimeout(openTimer);
}

function openSubMenu() {
    clearTimer();
    openTimer = setTimeout(expandMenu, 400);
}

function closeSubMenu() {
    clearTimer();
    closeTimer = setTimeout(collapseMenu, 400);
}

$(document).ready(function () {
    //Calculate the height of <header>
    //Use outerHeight() instead of height() if have padding
    var aboveHeight = $('#uthsc-header').outerHeight() + $('.top-bar').outerHeight() + $('#breadcrumbs').outerHeight();
    //when scroll
    /*$(window).scroll(function () {
        //if scrolled down more than the header’s height
        if ($(window).scrollTop() > aboveHeight) {
            // if yes, add “fixed” class to the <nav>
            // add padding top to the #content
            //(value is same as the height of the nav)
            $('#uthsc-navigation').addClass('fixed').css('top', '0').next()
                .css('padding-top', '60px');
        } else {
            // when scroll up or less than aboveHeight,
            //remove the “fixed” class, and the padding-top
            $('#uthsc-navigation').removeClass('fixed').next()
                .css('padding-top', '0');
        }
    });*/
});/*!
 * classie v1.0.0
 * class helper functions
 * from bonzo https://github.com/ded/bonzo
 * MIT license
 * 
 * classie.has( elem, 'my-class' ) -> true/false
 * classie.add( elem, 'my-new-class' )
 * classie.remove( elem, 'my-unwanted-class' )
 * classie.toggle( elem, 'my-class' )
 */

/*jshint browser: true, strict: true, undef: true, unused: true */
/*global define: false */

( function( window ) {

'use strict';

// class helper functions from bonzo https://github.com/ded/bonzo

function classReg( className ) {
  return new RegExp("(^|\\s+)" + className + "(\\s+|$)");
}

// classList support for class management
// altho to be fair, the api sucks because it won't accept multiple classes at once
var hasClass, addClass, removeClass;

if ( 'classList' in document.documentElement ) {
  hasClass = function( elem, c ) {
    return elem.classList.contains( c );
  };
  addClass = function( elem, c ) {
    elem.classList.add( c );
  };
  removeClass = function( elem, c ) {
    elem.classList.remove( c );
  };
}
else {
  hasClass = function( elem, c ) {
    return classReg( c ).test( elem.className );
  };
  addClass = function( elem, c ) {
    if ( !hasClass( elem, c ) ) {
      elem.className = elem.className + ' ' + c;
    }
  };
  removeClass = function( elem, c ) {
    elem.className = elem.className.replace( classReg( c ), ' ' );
  };
}

function toggleClass( elem, c ) {
  var fn = hasClass( elem, c ) ? removeClass : addClass;
  fn( elem, c );
}

var classie = {
  // full names
  hasClass: hasClass,
  addClass: addClass,
  removeClass: removeClass,
  toggleClass: toggleClass,
  // short names
  has: hasClass,
  add: addClass,
  remove: removeClass,
  toggle: toggleClass
};

// transport
if ( typeof define === 'function' && define.amd ) {
  // AMD
  define( classie );
} else {
  // browser global
  window.classie = classie;
}

})( window );/**
 * The nav stuff
 */
(function ($) {

    'use strict';

    var body = $('body'),
        mask = document.createElement("div"),
        wrapper = $("#wrapper"),
        togglePushLeft = $(".toggle-push-left"),
        togglePushRight = $(".toggle-push-right"),
        windowLocation,
        loc,
        activeNav;

    mask.className = "mask";

    function getWindowLocation() {
        loc = $(window).scrollTop();
        return loc;
    }

    function scrollToLocation(location) {
        //scroll to location
        $(window).scrollTop(location);

        //log location
        //console.log('scrollTop location: ' + location);
    }

    function toggleMenu(menuClass) {
        //set window location
        windowLocation = getWindowLocation();

        //log window location
        //console.log('toggleMenu window location: ' + getWindowLocation());

        //add menu class to body
        body.addClass(menuClass);

        //append mask
        document.body.appendChild(mask);

        //set active nav
        activeNav = menuClass;

        //scroll to top of nav
        scrollToLocation(0);
    }

    function closeMenu() {
        //debug: log window location
        //console.log(windowLocation);

        //remove activeNav class from body
        body.removeClass(activeNav);

        //clear active nave variable
        activeNav = "";

        //remove mask
        document.body.removeChild(mask);

        //debug: log loc variable
        //console.log('hide mask loc: ' + loc);

        //scroll to loc
        scrollToLocation(loc);
    }

    togglePushLeft.click(function () {
        toggleMenu("pml-open");
    });

    togglePushRight.click(function () {
        toggleMenu("pmr-open");
    });

    /* hide active menu if mask is clicked */
    mask.addEventListener("click", function () {
        closeMenu();
    });

    /* hide active menu if close button is clicked */
    $(".close-menu").click(function () {
        closeMenu();
    });

})(jQuery);