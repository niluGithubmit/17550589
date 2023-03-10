"use strict";


//dropdown menu

$(document).ready(function () {

  $('[data-toggle="offcanvas"]').on('click',function () {
        $('#wrapper').toggleClass('toggled');

  });
  $(".back-icon").on('click',function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
});



$(".dropdown").hover(
    function() {
        $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).fadeIn("50");
        $(this).toggleClass('open');
    },
    function() {
        $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).fadeOut("50");
        $(this).toggleClass('open');
    }
);

