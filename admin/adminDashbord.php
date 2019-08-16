<?php include("Auth.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include("Assets.php"); ?>
    <title>Admin Dashbord</title>
</head>

<body>
    <?php include("Navigation.php"); ?>

    <div class="container">
        <br><br>
        <center>
            <h4> Admin Dashbord </h4>
            <hr>
        </center>
        <br>
        <div class="row" align="center">
            <div class="col-md-6">
                <div class="card" style="width: 18rem;">
                    <img src="../images/admin/add.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Add Rooms</h5>
                        <a href="addRooms.php" class="btn btn-outline-info">Click to add</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card" style="width: 18rem;">
                    <img src="../images/admin/view.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">View Reservations</h5>    
                        <a href="Reservations.php" class="btn btn-outline-info">Click to view</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>