
$(document).ready(function () {
    $toggle = $(".toggle i");
    $slider = $(".header .nav .nav-link .first");
    $slider2 = $(".header .nav .nav-link .second");
    $package = $("#package");
    $social = $(".social i");
    $toggle.click(function () {
        $slider.slideToggle(500);
    });
    $package.click(function() {
        $slider2.toggle(500);
    })
});