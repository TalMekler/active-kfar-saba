$(document).ready(function () {
    // video controll
    $(function () {
        $(".media-item video").click(function () {
            if ($(this).hasClass("video-playing")) {
                $(this).removeClass("video-playing");
            } else {
                $(".media-item video").each(function () {
                    $(this).removeClass("video-playing");
                })
                $(this).addClass("video-playing");
            }
            $(".media-item video").each(function () {
                $(this)[0].pause();
            });
            $(".video-playing")[0].play();
        })
    })


});