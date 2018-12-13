/**
 * Smooth Scroll to Anchors
 */
$('a[href^="#"]').on('click', function (e) {
    var target = $(this).attr('href');

    if ($(target).length) {
        $('html, body').animate({scrollTop: $(target).offset().top - 60}, 1000);
    }
    e.preventDefault();
});

/**
 * Typed.js Init
 */
var typed = new Typed('#typed', {
    strings: ["это то, что заставит вас остановиться и наблюдать."],
    typeSpeed: 50,
    showCursor: false,
    cursorChar: '.',
    autoInsertCss: false
});

/**
 * Fixing contacts line
 */
$(function () {
    $(window).on('scroll load', function () {
        if ($(window).scrollTop() > $('.header').outerHeight()) {
            $('.contacts').addClass('fixed');
            $('#second-screen').addClass('mt90');
        } else {
            $('.contacts').removeClass('fixed');
            $('#second-screen').removeClass('mt90');
        }
    });
});