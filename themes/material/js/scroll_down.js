//function fadeBlocksIn() {
//    $('.fadeInBlock').each(function (i) {
//
//        var top_of_object = $(this).position().top;
//        var bottom_of_window = $(window).scrollTop() + $(window).height();
//
//        bottom_of_window = bottom_of_window - 50;
//
//        if (top_of_object < bottom_of_window) {
//            $(this).animate({'opacity': '1'}, 500);
//        }
//    });
//}
//
//$(function () {
//    fadeBlocksIn();
//
//    $(window).scroll(function () {
//        fadeBlocksIn();
//    });
//});

$(window).ready(function () {
    fadeInBlock = $('.fadeInBlock');
    $("#back-to-top").removeClass('to-top');
    /* Every time the window is scrolled ... */
    $(window).scroll(function () {
        /* ------------------------------------------------------------------------ */
        /* BACK TO TOP 
         /* ------------------------------------------------------------------------ */

        if ($(window).scrollTop() > 300) {
            $("#back-to-top").addClass('to-top');
        } else {
            $("#back-to-top").removeClass('to-top');
        }
        /* Check the location of each desired element */
        fadeInBlock.each(function (i) {

            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();

            bottom_of_window = bottom_of_window + 500;

            /* If the object is completely visible in the window, fade it it */
            if (bottom_of_window > bottom_of_object) {
                $(this).addClass('animated fadeIn');
                $('#both,#info').addClass('animated fadeIn');
            }
        });

    });

});

/* ------------------------------------------------------------------------ */
/* BACK TO TOP 
 /* ------------------------------------------------------------------------ */

$('#back-to-top, .back-to-top').click(function () {
    $('html, body').animate({scrollTop: 0}, '800');
    return false;
});

