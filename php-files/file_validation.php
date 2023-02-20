<?php
$dir = $target_dir . "default.jpg";
$file =  NULL;
if(empty($_FILES['profilePic']['name'])){
    $imageErr = 0;
}
else{
if(isset($_FILES["profilePic"])){
    $file =$_FILES["profilePic"];
    $file_type = $file["type"];
    $file_name= $file["name"];
    $file_size = $file["size"];
    if ($file_type != "image/jpg" && $file_type != "image/png" && $file_type != "image/jpeg" && $file_type != "image/gif") {
        $fileErr = "* Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $imageErr = 1;
    }
    elseif ($file_size > 10000000) {
    $fileErr = "* image size too large";
    $imageErr = 1;
    }
    elseif (!file_exists($target_dir . $file_name)) {
        if (move_uploaded_file($file["tmp_name"] , $target_dir . $file_name)) {
            $fileErr = "* Upload successfull";
            $imageErr = 0;
            $dir = $target_dir . $file_name;
    }
    else{
        $fileErr = "* Upload failed";
        $imageErr = 1;
    }
}
else{
    $dir = $target_dir . $file_name;
}
}
}
?>
