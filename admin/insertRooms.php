<?php
include("../DB.php");

$Destination = 'uploaded';
        if(!isset($_FILES['upload_image']) || !is_uploaded_file($_FILES['upload_image']['tmp_name'])){
            $NewImageName= 'default.png';
            move_uploaded_file($_FILES['upload_image']['tmp_name'], "$Destination/$NewImageName");
        }
        else{
            $RandomNum   = rand(0, 9999999999);
            $ImageName = str_replace(' ','-',strtolower($_FILES['upload_image']['name']));
            $ImageType = $_FILES['upload_image']['type'];
            $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
            $ImageExt = str_replace('.','',$ImageExt);
            $ImageName = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
            $NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;
            move_uploaded_file($_FILES['upload_image']['tmp_name'], "$Destination/$NewImageName");
        }


$roomPackage = $_POST['roomPackage'];
$price = $_POST['price'];
$addRooms = "INSERT INTO package (packageName,price,roomImage) VALUES ('$roomPackage','$price','$NewImageName')";
$sql = mysqli_query($con, $addRooms) or die("failed: " . mysqli_connect_error());

mysqli_close($con);

header("Location: addRooms.php");
?>