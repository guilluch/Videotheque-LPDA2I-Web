var persistant = false;

$(document).ready(function () {
    /*$("aside").hide(2000);
    $("img").fadeOut();
    $("nav").slideUp(500).delay(1000).slideDown(500);*/

    $("#hideAside").on("click", function() {
        $("aside").hide(300);
    });

    $("#fadeImg").on("click", function() {
        $("img").fadeOut(300);
    });

    $("#toggleMenu").on("click", function() {
        $("nav ul").slideToggle(300);
    });

    /*$("dd").on("click", function(evt) {
        alert($(this).text());
        evt.stopPropagation();
    });*/

    $("#faq > dl").on("mouseenter", function (evt) {
        /*if (!persistant) {
            $("#faq > dl > dd").not($(this).find("dd")).slideUp(300);
            $(this).find("dd").slideDown(300);
        }*/

        $("#faq > dl").not($(this)).each(function(key, el) {
            if ($(el).data("persistant") === undefined) {
                console.log($(el).data("persistant") === undefined);
                $(el).find("dd").slideUp(300);
            }
        });
        $(this).find("dd").slideDown(300);
    });

    $("#faq > dl").on("click", function (evt) {
        // $("#faq > dl > dd").not($(this).find("dd")).slideUp(300);
        if ($(this).data("persistant")) {
            $(this).removeData("persistant");
            persistant = false;
        } else {
            $(this).data("persistant", true);
            persistant = true;
        }
        if ($(this).data("persistant")) {
            $(this).find("dd").slideDown(300);
        } else {
            $(this).find("dd").slideUp(300);
        }
    });

    /*$("#faq > dl").on("mouseleave", function () {
        $(this).find("dd").slideUp();
    });*/
});