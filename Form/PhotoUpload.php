<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["PhotoToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$final_file = $target_dir . $name .'(Photo).'. $imageFileType;
$check = getimagesize($_FILES["PhotoToUpload"]["tmp_name"]);
if($check !== false) 
{
    $uploadOk = 1;
} 
else 
{
    $uploadOk = 0;
}
if (file_exists($target_file)) 
{
    echo "Sorry, Image file already exists.";
    $uploadOk = 0;
}
if ($_FILES["PhotoToUpload"]["size"] > 500000) 
{
    echo "Sorry, Image file is too large.";
    $uploadOk = 0;
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"&& $imageFileType != "gif" ) 
{
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

if ($uploadOk == 0) 
{
    echo "Sorry, your file was not uploaded.";

} else 
{
    if (move_uploaded_file($_FILES["PhotoToUpload"]["tmp_name"], $final_file)) 
    {
      
    } 
    else 
    {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>