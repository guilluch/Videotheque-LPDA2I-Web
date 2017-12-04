$(document).ready(function () {
    /*$('aside').hide(2000);
    $('img').fadeOut();
    $('nav').slideUp(500).delay(1000).slideDown(500);*/

    $('#hideAside').on('click', function() {
        $('aside').hide();
    });

    $('#fadeImg').on('click', function() {
        $('img').fadeOut();
    });

    $('#toggleMenu').on('click', function() {
        $('nav ul').slideToggle();
    });

    $('dd').on('click', function(evt) {
        alert($(this).text());
        evt.stopPropagation();
    });
});