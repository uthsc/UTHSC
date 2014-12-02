/**
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