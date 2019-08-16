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
<br><br><br>

    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <center>
                <h2 style="color:greenyellow">Booking Success</h2>
                <br>
                <a href="index.php"><button class="btn btn-success">Go back</button></a>
                </center>
                <br><br>
            </div>

        </div>
    </div>
    <br><br><br>
    <?php include('Footer.php') ;?>
</body>

</html>