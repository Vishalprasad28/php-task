<?php
if (isset($_REQUEST['email'])) {
    $email = $_REQUEST['email'];
    
    if (empty($email)) {
        $isemailerror = 1;
        $emailErr = "*Empty";
    }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $isemailerror = 1;
        $emailErr = "*Invalid Email";
    } else {
        $isemailerror = 0;
        $emailErr = "*valid Email";
    }
}

?>