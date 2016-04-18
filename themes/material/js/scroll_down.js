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
            $('#first_nav').css('opacity', '0');
            $('#second_nav').css('margin-top', '0px');
            $('#item_nav').css({'font-size': '25px'});
        } else {
            $("#back-to-top").removeClass('to-top');
            $('#first_nav').css('opacity', '1');
            $('#second_nav').css({'margin-top': '35px'});
            $('#item_nav').css({'font-size': '14px'});
        }
        /* Check the location of each desired element */
        fadeInBlock.each(function (i) {

            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            //var bottom_of_window1 = bottom_of_window;

            bottom_of_window = bottom_of_window + 700;
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

