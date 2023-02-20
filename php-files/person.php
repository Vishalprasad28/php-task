<?php
//Person class is defined here
class person
{
    //declaring the variables
    public $fname = "";
    public $lname = "";
    public $full_Name = "";
    public $phone="";
    public $email="";
    public $imageFile;
    public $pic_path = "../uploads/default.jpg";
    public $marks = array();
    //constructor to set the names here
    function __construct($fname, $lname)
    {
        $this->fname = $fname;
        $this->lname = $lname;
        $this->full_Name = $fname . " " . $lname;
    }
    // Removing unnecessary spaces, slashes and html special chars
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    // validating the Name if it is in proper formate
    function data_validation($data)
    {
        if (!preg_match("/^[a-zA-Z-' ]*$/", $data) || empty($data))
            return true;
        else
            return false;
    }
}
?>