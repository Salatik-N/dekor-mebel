jQuery(document).ready(function ($) {

    $("#toggle-nav").click(function () {
        $("#navbar-header").slideToggle(400);
    });

    function windowResizeHandler() {
        if (screen.width < 768) {
            $("#navbar-header").css("display", "none");}
        else if (screen.width > 767) {
            $("#navbar-header").css("display", "flex");
        }   
    }

    window.addEventListener("resize", windowResizeHandler);
});