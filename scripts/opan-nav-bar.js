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
            $(".has-options").each(function(){
                $(this).removeClass("nav-link-active");
                $(this).children(".nav-link-options").slideUp();    
            })
        })
        $(".page-header .bg-black-for-nav-bar").click(function () {
            $(".page-header .nav-bar-element").css("transform", "scaleX(0)");
            $(this).hide();
            $(".has-options").each(function(){
                $(this).removeClass("nav-link-active");
                $(this).children(".nav-link-options").slideUp();    
            })
        })
        $(".options a").click(function(){
            $(".page-header .nav-bar-element").css("transform", "scaleX(0)");
            $(".page-header .bg-black-for-nav-bar").hide();
        })
        
    })

    // open and close options
    $(function () {
        $(".has-options").click(function () {
            if($(this).hasClass("nav-link-active")){
                $(this).toggleClass("nav-link-active");
                $(this).children(".nav-link-options").slideUp();    
            }else{
                $(this).toggleClass("nav-link-active");
                $(this).children(".nav-link-options").slideDown();
            }
        })
    })
});