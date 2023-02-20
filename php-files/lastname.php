<?php
if (isset($_REQUEST['lname'])) {
    $lname = $_REQUEST['lname'];
    if (empty($lname) || !preg_match("/^[a-zA-Z-' ]*$/", $lname)) {
        $islnameerror = 1;
        $lnameErr = "*Invalid formate";
    } else {
        $islnameerror = 0;
        $lnameErr = "*valid formate";
    }
}
?>