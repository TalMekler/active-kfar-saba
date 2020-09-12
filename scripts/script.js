$(document).ready(function () {
    // show the imgs in the landing page
    $(function () {
        $(".main-content .center .logo-img").css("transform", "scale(1)");
        $(".main-content .center .logo-img").css("opacity", "1");
        $(".main-content .center h1").css("transform", "translateX(-50%) scale(1)");
        $(".main-content .center h1").css("opacity", "1");

        setTimeout(function () {
            if ($(document).width() > 699) {
                $(".main-content .right img").css("left", "50%");
                $(".main-content .left img").css("left", "50%");
            } else {
                $(".main-content .right img").css("left", "0%");
                $(".main-content .left img").css("left", "100%");
            }
            $(".main-content .right img").css("opacity", "1");
            $(".main-content .left img").css("opacity", "1");
        }, 1000)
    })

});