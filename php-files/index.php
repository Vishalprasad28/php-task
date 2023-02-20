<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
$_SESSION["loggedin"] = false;
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/stylingform.css">
    <script src="../js-files/jqueryfiles/jquery-3.6.1.min.js"></script>
    <title>Login Form</title>
</head>
<body>
    <div class="container form_container">
    <h1 style="text-align:center;">User Form</h1>
    <!-- Form to take user input -->
    <form action="../php-files/validation.php"class="user-form" method="POST" enctype="multipart/form-data">
        <label for="fname">First Name:</label>
        <br>
        <span class="error-container fname-error"></span>
        <br>
        <input type="text" name="fname" id="fname" placeholder="First Name" required title="This is required field" >
        <br>
        <label for="lname">Last Name:</label>
        <br>
        <span class="error-container lname-error"></span>
        <br>
        <input type="text" name="lname" id="lname" placeholder="Last Name" required title="This is required field">
        <br>
        <input type="text" placeholder="Full Name" id="fullname" readonly>
        <br>
        <label for="profilePic">Select a File:</label>
        <br>
        <span class="error-container file-error"></span>
        <br>
        <input type="file" name="profilePic" id="profilePic">
        <br><br>
        <label for="email">Email:</label>
        <br>
        <span class="error-container email-error"></span>
        <br>
        <input type="text" name="email" id="email" placeholder="Email" required title="This is required field">
        <br>
        <label for="phone">Phone:</label>
        <br>
        <span class="error-container phone-error"></span>
        <br>
        <input type="text" name="phone" id="phone" placeholder="+91" required title="This is required field">
        <br>
        <label for="marks">Enter Your Marks:</label>
        <br>
        <span class="error-container marks-error"></span>
        <br>
         <textarea name="marks" id="marks" cols="30" rows="10" placeholder = "Provide your marks in the following formate

         Subject|Marks
         Subject|Marks
         ....

         with each subject in a new line" required></textarea>
        <br>
        <button name="submit_button" class="submit_button">Submit</button>
    </form>
</div>
</body>
<!-- Js file for the live full name -->
<script src="../js-files/full_name.js" ></script>
<!-- Live first name validation -->
<script src="../js-files/first_name.js" ></script>
<!-- Live Last Name Validation -->
<script src="../js-files/last_name.js" ></script>
<!-- Email Validation -->
<script src="../js-files/email.js" ></script>
<!-- Phone Number validation -->
<script src="../js-files/phone.js" ></script>
<!-- Marksheet validation -->
<script src="../js-files/marksheet.js" ></script>
</script>
</html>