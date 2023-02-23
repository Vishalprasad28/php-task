<?php
if(empty($_REQUEST["marks"])){
    $ismarksErr = 1;
}{
//separating the string depending upon new line character
$array=explode("\n",$_REQUEST["marks"]);
$marks = array();

foreach($array as $value){
if(preg_match("/[a-zA-Z]+[|][0-9]+/", $value))
{
//further separating the string depending upon '|' character
$temp = explode("|",$value);
//storing in key value pairs to avoid storing the duplicate values
if($temp[0]!=""&&$temp[1]!=""){
if($temp[1]>100 || $temp[1]< 0 || !is_numeric($temp[1])){
    $temp[1] ="invalid";
    $ismarksErr = 1;
    $marksErr = "*Invalid Formate";
}
$marks[$temp[0]] = $temp[1];
}
}
else{
if($value != "") {   
$ismarksErr = 1;
$marksErr = "*Invalid Formate";
break;
}
}
}
}
?>