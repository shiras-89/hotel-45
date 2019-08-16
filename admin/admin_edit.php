<?php
require('../DB.php');

$id=$_REQUEST['id'];

$query = "SELECT * from package where id='".$id."'";

$result = mysqli_query($con, $query) or die (mysqli_error());

$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Edit</title>
<?php include ('Assets.php');?>
</head>
<body>
<?php include('Navigation.php'); ?>
<br><br>
<div class="container">
<h3>Update Room</h3>
<br>
<?php
$status = "";

if(isset($_POST['new']) && $_POST['new']==1)
{
	$id = $_REQUEST['id'];

    $package = $_REQUEST["package"];
    $price = $_REQUEST["newPrice"];


$update = "UPDATE package SET packageName='".$package."', price='".$price."' WHERE id='".$id."'";

mysqli_query($con,$update) or die(mysqli_error($con));

$status = "Updated Successfully. </br></br><a href='addRooms.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />

		<div class="form-group">
			<label>Package: </label>
				<input type="text" name="package" class="form-control" value="<?php echo $row['packageName'];?>"> 
		</div> 

		<br>

		<div class="form-group">
			<label>Price:</label>
				<input type="text" name="newPrice" class="form-control" value="<?php echo $row['price'];?>"> 
		</div>

		<input type="submit" class="btn btn-primary" value="Update">

</form>
<?php } mysqli_close($con); ?>

<br /><br /><br /><br />

</div>
</div>

</body>
</html>