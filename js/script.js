function addFaqListener() {
    /*$("#faq > dl").on("mouseenter", function (evt) {

        $("#faq > dl").not($(this)).each(function(key, el) {
            if ($(el).data("persistant") === undefined) {
                console.log($(el).data("persistant") === undefined);
                $(el).find("dd").slideUp(300);
            }
        });
        $(this).find("dd").slideDown(300);
    });*/

    $("#faq").find("dl").on("click", function (evt) {
        // $("#faq > dl > dd").not($(this).find("dd")).slideUp(300);
        if ($(this).data("persistant")) {
            $(this).removeData("persistant");
        } else {
            $(this).data("persistant", true);
        }
        if ($(this).data("persistant")) {
            $(this).find("dd").slideDown(300);
        } else {
            $(this).find("dd").slideUp(300);
        }
    });
}

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

    addFaqListener();

    $('#faq-aside').find("a").on("click", function(evt) {
        var parent = $(this).parent();
        parent.html('<img class="loader" src="images/loading.gif"/>');
        parent.load("view/questionsFaq.php#faq", addFaqListener);
    });

    $('#add-movie').on('click', function(evt) {
        $('main').load('view/movieCreationForm.php', function() {
            console.log("Success");
        });
    });
});
