/* ========================================================================= */
/*    Preloader
/* ========================================================================= */

jQuery(window).load(function() {
    jQuery("#preloader").delay(1000).fadeOut("slow");
});


$(document).ready(function() {

    new WOW().init();
    
    //jQuery to collapse the navbar on scroll
    $(window).scroll(function() {
        if ($(".navbar").offset().top > 50) {
            $(".navbar-fixed-top").addClass("top-nav-collapse");
        } else {
            $(".navbar-fixed-top").removeClass("top-nav-collapse");
        }
    });

    //jQuery for page scrolling feature - requires jQuery Easing plugin
    $(function() {
        $('.navbar-nav li a').bind('click', function(event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top
            }, 1500, 'easeInOutExpo');
            event.preventDefault();
        });

        $('.page-scroll a').bind('click', function(event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top - 80
            }, 1500, 'easeInOutExpo');
            event.preventDefault();
        });
    });

    //when on top nothing will be active
    // $(window).scroll(function() {
    //     if ($(window).scrollTop() < 20)
    //         $('.active').removeClass('active');
    // });

    $('.navbar-nav li a').click(function() {        
        $(this).addClass('active').siblings().removeClass('active');
    });

});