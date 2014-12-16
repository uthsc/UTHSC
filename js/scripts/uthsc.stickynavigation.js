/*Fixed Navigation*/
$(document).ready(function () {

    /*
     * Calculate the height of <header>
     * Use outerHeight() instead of height() if have padding
     */
    var aboveHeight = $('#uthsc-header').outerHeight() + $('#breadcrumbs').outerHeight() + 20;

    /*
     * when scroll
     */
    $(window).scroll(function () {

        /*
         * if scrolled down more than the header’s height
         */
        if ($(window).scrollTop() > aboveHeight) {

            /*
             * if yes, add “fixed” class to the <nav>
             * add padding top to the #content
             * (value is same as the height of the nav)
             */
            $('#uthsc-navigation-alt').addClass('fixed').css('top', '0').next()
                .css('padding-top', '60px');
        } else {

            /*
             * when scroll up or less than aboveHeight,
             * remove the “fixed” class, and the padding-top
             */
            $('#uthsc-navigation-alt').removeClass('fixed').next()
                .css('padding-top', '0');
        }
    });
});