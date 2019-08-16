<?php
include("DB.php");

$name = $_POST['name'];
$package = $_POST['roomPackage'];
$checkIn = $_POST['checkin'];
$address = $_POST['address'];
$contact = $_POST['contact'];
$email = $_POST['email'];

$dataInsert = "INSERT INTO reservations (clientName,room,check_in,address,contactNumber,email) VALUES ('$name','$package','$checkIn','$address','$contact','$email')";

$results = mysqli_query($con,$dataInsert);

if(!$results){
    echo "Error: " . $results . "<br>" . mysqli_error($con);
} else {
    header("Location: bookingSuccess.php");
} 

mysqli_close($con);
?>