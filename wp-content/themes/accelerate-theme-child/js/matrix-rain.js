jQuery( document ).ready( function( $ ) {
    // $() will work as an alias for jQuery() inside of this function


$.fn.Matrix = function (options) {
    var container = $(this);
    container.addClass("matrix");
    container.children().each(function () {
        $(this).css("-webkit-animation-duration", Math.floor((Math.random() * 20) + 3) + "s").css("animation-duration", Math.floor((Math.random() * 20) + 3) + "s").css("-ms-animation-duration", Math.floor((Math.random() * 20) + 3) + "s").css("-moz-animation-duration", Math.floor((Math.random() * 20) + 3) + "s").css("left", Math.floor((Math.random() * parseInt($(container).width())) + 10)).css("font-size", Math.floor((Math.random() * 20) + 10) + "px");
    });
};

$(function ($) {
    $("#matrix").Matrix();
});


} );

// https://jsfiddle.net/adiioo7/cVp6t/
