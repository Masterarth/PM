$(document).ready(function () {

    $('.collapsible').collapsible({
        accordion: false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
    });

    $('.parallax').parallax();

    $(".button-collapse").sideNav();

    $('.tabs-wrapper').pushpin({top: $('.tabs-wrapper').offset().top});

});

