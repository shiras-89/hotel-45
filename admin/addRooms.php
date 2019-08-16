<?php include("Auth.php");
include("../DB.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include("Assets.php"); ?>
    <title>Add Rooms</title>
</head>

<body>
    <?php include("Navigation.php"); ?>
    <br><br>
    <div class="container">
        <h2>Add Rooms</h2> <br>
        <div class="row">

            <div class="col md 12"> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Add
                </button> <br>
            </div>
        </div>
        <br>
        <div class="row">

            <?php
            $data = "SELECT * FROM package";
            $result = mysqli_query($con, $data);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while ($row = mysqli_fetch_assoc($result)) {
                    echo
                        '<div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                    <img src="../images/Rooms.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Package: &nbsp;' . $row["packageName"] . '</h5>
                    <p class="card-text"><b>Price: &nbsp;</b>' . $row["price"] . '</p>
                            
                    <a href="admin_edit.php?id=' . $row['id'] . '">
                        <button class="btn-xs btn-warning">Edit</button>
                    </a>             
                    <a onclick="javascript:confirmationDelete($(this));return false;" href="admin_delete.php?id=' . $row['id'] . '">
                        <button class="btn-xs btn-danger">Delete</button>
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
    </div>

    <!-- Add Roomd Modal  -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="insertRooms.php" method="post" enctype="multipart/form-data" name="addRoom">
                        <div class="form-group">
                            <label>Room Package</label>
                            <select name="roomPackage" id="roomPackage" class="form-control">
                                <option value="_blank"></option>
                                <option value="Delux Room">Delux Room</option>
                                <option value="Superior Room">Superior Room</option>
                                <option value="Eco Budget Room">Eco Budget Room</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Price</label>
                            <input type="text" name="price" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Upload Room Image</label>
                            <input type="file" class="form-control-file" name="upload_image" id="upload_image">
                        </div>
                        <button class="btn btn-success" type="submit" name="submit">Save</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>