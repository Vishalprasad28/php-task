$(document).ready(function(){
    $("#phone").keyup(function(){
        var phone = $("#phone").val();
        $.post("../php-files/fieldvalidation.php",{
            phone: phone
        }, function (data, status) {
            var jsonData = $.parseJSON(data);
            if (jsonData.isphoneErr == 1) {
                $(".user-form").addClass("errored-form-shadow");
                $("body").addClass("gradient");
                $(".phone-error").addClass("error-full");
                $(".phone-error").removeClass("error-free");
                $("#phone").addClass("error-full-box");
                $(".phone-error").text(jsonData.phoneErr);
            }
            else {
                $("body").removeClass("gradient");
                $(".user-form").removeClass("errored-form-shadow");
                $(".phone-error").addClass("error-free");
                $(".phone-error").removeClass("error-full");
                $("#phone").removeClass("error-full-box");
                $(".phone-error").text(jsonData.phoneErr);
            }
        });
    });
});