<?php
if(isset($_REQUEST['fname'])) {
    $fname = $_REQUEST['fname'];
    if (empty($fname) || !preg_match("/^[a-zA-Z-' ]*$/", $fname)) {
        $isfnameerror = 1;
        $fnameErr = "*Invalid formate";
    } else {
        $isfnameerror = 0;
        $fnameErr = "*valid formate";
    }

}
?>