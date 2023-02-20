<?php
    $validationStatus = array();
    $validationStatus["fnameErr"] = isset($fnameErr)?$fnameErr:"";
    $validationStatus["isfnameErr"] = isset($isfnameerror)?$isfnameerror:"";
    $validationStatus["lnameErr"] = isset($lnameErr)?$lnameErr:"";
    $validationStatus["islnameErr"] = isset($islnameerror)?$islnameerror:"";
    $validationStatus["emailErr"] = isset($emailErr)?$emailErr:"";
    $validationStatus["isemailErr"] = isset($isemailerror)?$isemailerror:"";
    $validationStatus["phoneErr"] = isset($phoneErr)?$phoneErr:"";
    $validationStatus["isphoneErr"] = isset($isphoneerror)?$isphoneerror:"";
    $validationStatus["marksErr"] = isset($marksErr)?$marksErr:"";
    $validationStatus["ismarksErr"] = isset($ismarkserror)?$ismarkserror:"";
    $jsonformate = json_encode($validationStatus);
    print_r($jsonformate);
?>
