$(document).ready(function(){
    if($("#fname").val() != "" || $("#lname").val() != "")
    $("#fullname").val($("#fname").val() + " " + $("#lname").val());
    $("#fname,#lname").keyup(function () {
    var fname = $("#fname").val();
    var lname = $("#lname").val();
    $("#fullname").val("");
    $("#fullname").val(fname + " " + lname);
});
});

