<?php
require('../DB.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM package WHERE id=$id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
mysqli_close($con);
header("Location: addRooms.php"); 
?>