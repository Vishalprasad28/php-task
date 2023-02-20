<?php
if(isset($_REQUEST['marks'])) {
    $marks = $_REQUEST['marks'];
    if (empty($marks)){
        $ismarkserror = 1;
        $marksErr = "*Empty";
    }
    else{
        $ismarkserror = 0;
        $marksErr = "";
    }
}
?>