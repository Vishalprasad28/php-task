$(document).ready(function(){
    $("#marks").keyup(function(){
        var marks = $("#marks").val();
        $.post("../php-files/fieldvalidation.php",{
            marks: marks
        }, function (data, status) {
            var jsonData = $.parseJSON(data);
            if (jsonData.ismarksErr == 1) {
                $(".marks-error").addClass("error-full");
                $(".marks-error").removeClass("error-free");
                $("#marks").addClass("error-full-box");
                $(".marks-error").text(jsonData.marksErr);
            }
            else {
                $(".marks-error").addClass("error-free");
                $(".marks-error").removeClass("error-full");
                $("#marks").removeClass("error-full-box");
                $(".marks-error").text(jsonData.marksErr);
            }
        });
    });
});