$(document).ready(function () {
    // open nav bar element
    $(function () {
        $(".page-header .nav-bar-btns .fa-bars").click(function () {
            $(".page-header .nav-bar-element").css("transform", "scaleX(1)");
            setTimeout(function () {
                $(".page-header .bg-black-for-nav-bar").show();
            }, 300)
        });
    })
    // close nav bar element
    $(function () {
        $(".page-header .nav-bar-element .fa-times").click(function () {
            $(".page-header .nav-bar-element").css("transform", "scaleX(0)");
            $(".page-header .bg-black-for-nav-bar").hide();
        })
        $(".page-header .bg-black-for-nav-bar").click(function () {
            $(".page-header .nav-bar-element").css("transform", "scaleX(0)");
            $(this).hide();
        })
    })
});