<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php" style="color:skyblue">Southern Pearl</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link <?php if($page == "home") {echo 'active';};?>" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if($page == "room") {echo 'active';};?>" href="Rooms.php">Rooms</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if($page == "booking") {echo 'active';};?>" href="Booking.php">Booking</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if($page == "about") {echo 'active';};?>" href="About.php">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if($page == "contact") {echo 'active';};?>" href="Contact.php">Contact</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        <ul class="navbar-nav m-1">
            <li class="nav-item">
                <a class="nav-link <?php if($page == "admin") {echo 'active';};?>" href="Admin-Login.php">Admin Login  &nbsp;<i class="fa fa-sign-in"></i></a>
            </li>
        </ul>
    </div>
</nav>