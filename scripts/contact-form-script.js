$(document).ready(function () {
    $(".main-contact-content .contact-form form .contact-form__input-div input, .main-contact-content .contact-form form .contact-form__input-div textarea").focus(function () {
        $(this).parent().addClass("contact-form__input-div-active");
        console.log($(this).parent()[0])
    });
    $(".main-contact-content .contact-form form .contact-form__input-div input, .main-contact-content .contact-form form .contact-form__input-div textarea").focusout(function () {
        $(this).parent().removeClass("contact-form__input-div-active");
    });

});