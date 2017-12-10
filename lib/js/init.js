(function ($) {
    $(function () {

        $('.button-collapse').sideNav();
        $('.parallax').parallax();
        $('.scrollspy').scrollSpy();

    }); // end of document ready
})(jQuery); // end of jQuery name space

document.addEventListener("DOMContentLoaded", function () {
    $('#loader').delay(1700).fadeOut('slow');

    $('#loader-wrapper')
            .delay(1700)
            .fadeOut();
});