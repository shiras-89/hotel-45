<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    <?php include("Assets.php"); ?>
</head>

<body>
    <?php $page = "contact";
    include('Header.php'); ?>
	<div class="container">
			<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/59.jpg"  class="d-block w-100" style="height:50vh" alt="...">
			</div></div></div></div>
    <br><br>
	
    <div class="container">
        <center>
            <h4> Contact us </h4>
            <hr>
        </center>
        <div class="row">
            <div class="col-md-3">&nbsp;</div>
            <div class="col-md-6">
                <form name="contactform" method="post" action="send_form_email.php">
                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" name="first_name" maxlength="50" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="last_name">Last Name</label>
                        <input type="text" name="last_name" maxlength="50" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" maxlength="80" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="telephone">Contact Number</label>
                        <input type="text" name="telephone" maxlength="30" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="comments">Comments</label>
                        <textarea name="comments" maxlength="1000" cols="25" rows="6" class="form-control"></textarea>
                    </div>


                    <button type="submit" name="submit" class="btn btn-success">Send</button>

                </form>
            </div>
            <div class="col-md-3">&nbsp;</div>
        </div>
    </div>


    <br><br><br>
    <?php include('Footer.php'); ?>
</body>

</html>