<?php include('DB.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rooms</title>
    <?php include("Assets.php"); ?>
</head>

<body>
    <?php $page = "room";
    include('Header.php'); ?>
    <div class="container">
		<div class="container">
			<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/59.jpg"  class="d-block w-100" style="height:50vh" alt="...">
			</div></div></div></div>
        <br> <br>
        <center>
            <h4> Rooms </h4>
            <hr>
            <br>
            <div class="row">
                <?php
                $data = "SELECT * FROM package";
                $result = mysqli_query($con, $data);

                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                        <img src="images/Rooms.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Package: &nbsp;' . $row["packageName"] . '</h5>
                        <p class="card-text"><b>Price: &nbsp;</b>' . $row["price"] . '</p></p>
                                
                                    <a href="Booking.php">
                                        <button type="button" class="btn btn-outline-info">Book Now</button>
                                    </a>
                                </div>
                                </div>
                                </div>';
                    }
                } else {
                    echo "0 results";
                }

                ?>

            </div>
        </center>
        <br><br><br><br><br><br>
    </div>
    <?php include('Footer.php'); ?>
</body>

</html>