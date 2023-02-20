<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/validationpage.css">
    <title>Validation Page</title>
</head>
<style>

</style>
<body>

<?php
//Including the logic for backend validation
session_start();
$erronious = 0;
if($_SERVER["REQUEST_METHOD"] == 'POST'){
include("initialvariables.php");
include("firstname.php");
include("lastname.php");
include("email.php");
include("phone.php");
include("marks_sagrigation.php");
include("file_validation.php");
}
else{
    header("Refresh:0;url=index.php");
}
//checking if all the fields are in correct formate
$valid = (isset($isfnameerror) && $isfnameerror == 0) && (isset($islnameerror) && $islnameerror == 0) && (isset($isphoneerror) && $isphoneerror == 0) && (isset($isemailerror) && $isemailerror == 0) && (isset($imageErr) && $imageErr == 0) && ( $ismarksErr == 0);
if($valid){
    $erronious = 0;
}
else
    $erronious = 1;
 //if there is any error   
if($erronious == 1){
?>
<div class="container">
 <div class="error-full">
<h1>ERROR :(</h1>
   <p><?php 
   if(isset($isfnameerror) && $isfnameerror == 1)
   echo "Firstname: " . $fnameErr; 
   ?></p>
   <p><?php 
   if(isset($islnameerror) && $islnameerror == 1)
   echo "Lastname: " .$lnameErr; 
   ?></p>
   <p><?php 
   if(isset($isemailerror) && $isemailerror == 1)
   echo "Email: " .$emailErr; 
   ?></p>
   <p><?php 
   if(isset($isphoneerror) && $isphoneerror == 1)
   echo "Phone Number: " . $phoneErr; 
   ?></p>
   <p><?php 
   if(isset($imageErr) && $imageErr == 1)
    echo "File: " .$fileErr;
   ?></p>
   <p><?php 
   if($ismarksErr == 1)
      echo "Marks: " . $marksErr;
   ?></p>
 </div>
</div>
<?php
}
else{
    //if its error free
    include("person.php");
    $person = new person($fname,$lname);
    $person->fname = $person->test_input($person->fname);
    $person->lname = $person->test_input($person->lname);
    $person->full_Name = $person->test_input($person->full_Name);
    $person->email = $person->test_input($email);
    $person->phone = $person->test_input($phone);
    $person->pic_path = $dir;
    $person->imageFile = $file;
    $person->marks = $marks;
    $_SESSION["person_details"] =serialize($person);
    $_SESSION["Loggedin"] = true;

?>
<div class="container">
 <div class="error-free">
   <h1>Thank You!</h1>
   <p>Click to see your portfolio</p>
   <button><a href="viewpage.php" target="blank" >Click Me</a></button>
 </div>
</div>
<?php
}
?>
</body>
</html>