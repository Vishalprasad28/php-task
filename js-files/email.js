$(document).ready(function(){
	$("#email").keyup(function(){
		var email = $("#email").val();
		$.post("../php-files/fieldvalidation.php",{
			email: email
		}, function (data, status) {
			var jsonData = $.parseJSON(data);
			if (jsonData.isemailErr == 1) {
				$(".user-form").addClass("errored-form-shadow");
				$("body").addClass("gradient");
				$(".email-error").addClass("error-full");
				$(".email-error").removeClass("error-free");
				$("#email").addClass("error-full-box");
				$(".email-error").text(jsonData.emailErr);
			}
			else {
				$("body").removeClass("gradient");
				$(".user-form").removeClass("errored-form-shadow");
				$(".email-error").addClass("error-free");
				$(".email-error").removeClass("error-full");
				$("#email").removeClass("error-full-box");
				$(".email-error").text(jsonData.emailErr);
			}
		});
	});
});