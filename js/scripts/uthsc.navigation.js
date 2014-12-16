var openTimer;
var closeTimer;
var endTimer;

jQuery(".uthsc-navigation-column").bind('mouseover', openSubMenu);
jQuery("#uthsc-navigation-alt").bind('mouseleave', closeSubMenu);

function expandMenu() {
    $('#uthsc-navigation-alt ul li ul').stop(true, true).slideDown(400);
}

function collapseMenu() {
    $('#uthsc-navigation-alt ul li ul').stop(true, true).slideUp(400);
}

function clearTimer() {
    clearTimeout(closeTimer);
    clearTimeout(openTimer);
}

function openSubMenu() {
    $('#uthsc-navigation-alt').addClass('uthsc-navigation-active');
    clearTimer();
    openTimer = setTimeout(expandMenu, 400);
}

function closeSubMenu() {
    $('#uthsc-navigation-alt').removeClass('uthsc-navigation-active');
    clearTimer();
    closeTimer = setTimeout(collapseMenu, 400);
}

$(document).ready(function () {
    $( '#uthsc-navigation-alt > ul > li > ul' ).hide();
});