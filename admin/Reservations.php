<?php include("Auth.php");
include("../DB.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include("Assets.php"); ?>
    <title>Reservations</title>
</head>

<body>
    <?php include("Navigation.php"); ?>
    <br> <br>
    <div class="container">
        <div class="row">
            <h2>Reservations</h2>
            <div class="col-md-12">
                <?php

                $data = "SELECT * FROM reservations";

                $result = mysqli_query($con, $data);

                if (mysqli_num_rows($result) > 0) {
                    echo '<table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">Fullname</th>
                            <th scope="col">Package</th>
                            <th scope="col">Checkin Date</th>
                            <th scope="col">Address</th>
                            <th scope="col">Contact</th>
                            <th scope="col">E-Mail</th>
                          </tr>
                        </thead>';

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '
                            <tbody>
                              <tr>
                                <td>' . $row['clientName'] . '</td>
                                <td>' . $row['room'] . '</td>
                                <td>' . $row['check_in'] . '</td>
                                <td>' . $row['address'] . '</td>
                                <td>' . $row['contactNumber'] . '</td>
                                <td>' . $row['email'] . '</td>
                              </tr>
                            </tbody>';
                    }
                    echo '</table>';
                } else {
                    echo "No Reservations";
                }
                ?>
            </div>
        </div>
    </div>

</body>

</html>