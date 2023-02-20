<!DOCTYPE html>
<html lang="en">
<?php session_start(); 
if($_SESSION["Loggedin"] == false)
header("Refresh:0;url=index.php");

require_once("person.php");
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/viewpage.css">
    <script src="../js-files/jqueryfiles/jquery-3.6.1.min.js"></script>
    <title>Login Form</title>
</head>
<body>
  <div class="container">
  <div class="pic_and_name">
            <div class="image_container">
                <?php
                //initializing the variableswith the session values
                $person = unserialize($_SESSION["person_details"]);
                $fullname = $person->full_Name;
                $email = $person->email;
                $phone = $person->phone;
                $pic_path = $person->pic_path;
                $marks = $person->marks;
                ?>
                <img src="<?php echo $pic_path; ?>" alt="#">
            </div>
            <div class="name_and_contact">
                <h1><span>Hello!</span>
                <?php
                echo $fullname;
                ?>
            </h1>
              <!-- contact details are printed here -->
            <ul>
                <li><?php echo $email; ?></li>
                <li><?php echo $phone; ?></li>
            </ul>
            </div>
        </div>
    <h2 class="table_head">Your marks</h2>
<table>
   <tr>
      <th>Subject</th>
      <th>Marks</th>
   </tr>
   <?php
   foreach ($marks as $sub => $marks) {
   ?>
      <tr>
         <td><?php echo $sub ?></td>
         <td><?php echo $marks ?></td>
      </tr>
   <?php
   }
   ?>
</table>
<button class="pdf-gen-button"><a href="pdf_gen.php" target="blank">Generate PDF</a></button>
  </div>
</body>
</html>