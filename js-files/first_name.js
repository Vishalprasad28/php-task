$(document).ready(function(){
    $("#fname").keyup(function () {
        var fname = $("#fname").val();
        $.post("../php-files/fieldvalidation.php",{
            fname: fname
        }, function (data, status) {
            var jsonData = $.parseJSON(data);
            if (jsonData.isfnameErr == 1) {
                $("body").addClass("gradient");
                $(".user-form").addClass("errored-form-shadow");
                $(".fname-error").addClass("error-full");
                $(".fname-error").removeClass("error-free");
                $("#fname").addClass("error-full-box");
                $(".fname-error").text(jsonData.fnameErr);
            }
            else {
                $("body").removeClass("gradient");
                $(".user-form").removeClass("errored-form-shadow");
                $(".fname-error").addClass("error-free");
                $(".fname-error").removeClass("error-full");
                $("#fname").removeClass("error-full-box");
                $(".fname-error").text(jsonData.fnameErr);
            }
        });
    });
});