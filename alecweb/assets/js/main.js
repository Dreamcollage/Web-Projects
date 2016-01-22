function transform() {
    if (window.innerWidth > 480) {
        $('#main').animate({
            width: "100%"
        }, 600, "swing");
    }
    $('#main').animate({
        height: "74em"
    }, 600, "swing");

    setTimeout(function () {
        $('#extra').fadeIn(800);
        $('#transform').remove();
    }, 700);
    setTimeout(function () {
        $('#main').css("height", "auto")
    }, 1300);
}