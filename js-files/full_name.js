$(document).ready(function(){
    $("#fname,#lname").keyup(function () {
    var fname = $("#fname").val();
    var lname = $("#lname").val();
    $("#fullname").val("");
    $("#fullname").val(fname + " " + lname);
});
});

