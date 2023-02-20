$(document).ready(function(){
    $("#lname").keyup(function(){
        var lname = $("#lname").val();
        $.post("../php-files/fieldvalidation.php",{
            lname: lname
        }, function (data, status) {
            var jsonData = $.parseJSON(data);
            if (jsonData.islnameErr == 1) {
                $("body").addClass("gradient");
                $(".user-form").addClass("errored-form-shadow");
                $(".lname-error").addClass("error-full");
                $(".lname-error").removeClass("error-free");
                $("#lname").addClass("error-full-box");
                $(".lname-error").text(jsonData.lnameErr);
            }
            else {
                $(".user-form").removeClass("errored-form-shadow");
                $("body").removeClass("gradient");
                $(".lname-error").addClass("error-free");
                $(".lname-error").removeClass("error-full");
                $("#lname").removeClass("error-full-box");
                $(".lname-error").text(jsonData.lnameErr);
            }
        });
    });
});