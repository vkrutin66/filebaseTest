


$(function() {
    $( ".logo_a" ).click(function() {
        $(".section").addClass("hide");
        $(".section_logo").removeClass("hide");
    });
    $( ".auth_button" ).click(function() {
        $(".section").addClass("hide");
        $(".section_auth").removeClass("hide");
    });
    $( ".enter_button" ).click(function() {
        $(".section").addClass("hide");
        $(".section_enter").removeClass("hide");
    });



});