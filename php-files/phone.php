<?php
if (isset($_REQUEST['phone'])) {
    $phone = $_REQUEST['phone'];
    if (empty($phone)) {
        $isphoneerror = 1;
        $phoneErr = "*Empty";
    }
    elseif(strlen($phone)>13){
        $isphoneerror = 1;
        $phoneErr = "*Invalid Length";
    }
    elseif(!preg_match("/[+][9][1][6-9][0-9]{9}/",$phone)){
        $isphoneerror = 1;
        $phoneErr = "*Not An Indian Number";
    }
     else {
        $isphoneerror = 0;
        $phoneErr = "*valid Number";
    }
}
?>