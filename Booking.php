<?php include("DB.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Booking</title>
    <?php include("Assets.php"); ?>
</head>

<body>
    <?php $page = "booking";
    include('Header.php'); ?>
	<div class="container">
			<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/59.jpg"  class="d-block w-100" style="height:50vh" alt="...">
			</div></div></div></div>

    <br>
    <div class="container">
        <h3>Room Reservation</h3>
        <div class="row">

            <div class="col-md-12">
                <form action="insertBooking.php" method="post">
                    <div class="form-group">
                        <label>Your Fullname</label>
                        <input type="text" name="name" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Package</label>
                        <select class="form-control" id="roomSelect" name="roomPackage">
                            <option value="_blank"></option>
                            <option value="Delux Room">Delux Room</option>
                            <option value="Superior Room">Superior Room</option>
                            <option value="Eco Budget Room">Eco Budget Room</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Checking</label>
                        <input type="date" name="checkin" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Your Address</label>
                        <input type="text" name="address" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Contact Number</label>
                        <input type="text" name="contact" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Your E-Mail</label>
                        <input type="text" name="email" class="form-control">
                    </div>
                    <button class="btn btn-primary" type="submit">Submit</button>
                </form>
                <br><br>
            </div>

        </div>
    </div>
    <?php include('Footer.php') ;?>
</body>

</html>