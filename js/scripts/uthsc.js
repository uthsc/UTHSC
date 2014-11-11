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
    $(window).scroll(function () {
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
    });
});