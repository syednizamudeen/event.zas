(function ($) {
    "use strict";

    //Auto Close Alert
    $(".alert-success, .alert-info, .alert-warning, .alert-danger").fadeTo(2000, 500).slideUp(500, function(){
        $(".alert-success, .alert-info, .alert-warning, .alert-danger").parent().parent().parent().slideUp(500);
    }); // ./Auto Close Alert

    //Smoth Scroll
    $(function () {
        $('.nav-link, .smoth-scroll').on('click', function (event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top - 0
            }, 1000);
            event.preventDefault();
        });
    });    
    
    /*::::::::::::::::::::::::::::::::::::
    Preloader
    ::::::::::::::::::::::::::::::::::::*/
    $(window).on('load', function () {
        $('.preloader').fadeOut();
    });    

}(jQuery));
