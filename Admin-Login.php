<?php include('DB.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include('Assets.php'); ?>
    <title>Admin Login</title>
</head>

<body>
    <?php $page = "admin";
    include('Header.php');; ?>
    <br><br>
    <div class="container">
        <center>
            <h4> Admin Login</h4>
            <hr>
            <br><br><br><br>
            <div class="row">
                <div class="col-md-3">&nbsp;</div>
                <div class="col-md-6">

                    <form action="" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Admin E-Mail" name="adminEmail">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Admin Password" name="adminPassword">
                        </div>

                        <button class="btn btn-primary" type="submit" name="submit">Login</button>
                    </form>
                </div>
                <div class="col-md-3">&nbsp;</div>
            </div>
        </center>
    </div>
</body>

</html>

<?php
if (isset($_POST["submit"])) {

    if (!empty($_POST['adminEmail']) && !empty($_POST['adminPassword'])) {
        $email = $_POST['adminEmail'];
        $password = $_POST['adminPassword'];


        $sql = "SELECT * FROM admin WHERE admin='" . $email . "' AND password='" . $password . "' LIMIT 1";
        $query = mysqli_query($con, $sql) or die(mysqli_error($con));


        if (mysqli_num_rows($query) > 0) {
            $row = mysqli_fetch_assoc($query) or die(mysqli_error($con));
            if ($email == $row['admin'] && $password == $row['password']) {
                session_start();
                $_SESSION['sess_users'] = $email;
                /* Redirect browser */
                header("Location: admin/adminDashbord.php");
            }
        } else {
            echo "Invalid username or password!";
        }
    } else {
        echo "All fields are required!";
    }
}
?>