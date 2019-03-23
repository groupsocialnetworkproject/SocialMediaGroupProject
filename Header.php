<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Header CSS file -->
    <link type=text/css rel="stylesheet" href="css/Header.css?version=1">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/favicon.png">
    <!-- Icon library for 'close' icon on mobile menu -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <!-- JQuery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>BetterFace</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <!-- Mobile logo, hidden by default -->
        <div class="logo">
            <img id="menu" src="assets/logo_transparent6.png" alt="logo_menu">
        </div>
        <!-- left side header nav bar -->
        <div class="col" id="links">
            <a href="jobs.php"><span class="hvr-underline-from-center">Jobs</span></a>
            <a href="Under_construction.html"><span class="hvr-underline-from-center">Profile</span></a>
            <a href="forum.php"><span class="hvr-underline-from-center">Forum</span></a>
        </div>
        <!-- Logo -->
        <div class="col" id="logo">
            <a href="home_page.php"><img src="assets/logo_transparent6.png" height="100px" width="100px"></a>
        </div>
        <!-- Right side nav and search bar -->
        <div class="col" id="social">
            <form class="SearchSpace" action="">
                <button type="submit" id="SubmitButton"><i class="fa fa-search"></i></button>
                <input type="text" id="search" name="search" placeholder="Search.." autofill="off" autocomplete="off">
                <span class="glyphicon glyphicon-user" id="icons"></span>
                <span class="glyphicon glyphicon-bell" id="icons2"></span>
                <a href="forum.php" id="forum_link"><span class="glyphicon glyphicon-envelope" id="icons3"></span></a>

                <div class="dropdown">
                    <div class="dropdown-menu" id="searchBox"  style="margin-left: 100px;margin-top: 32.5px;"></div>
                </div>
            </form>
        </div>
    </div>
    <!-- Mobile menu, hidden by default -->
    <div id="mySidenav" class="sidenav">
        <i id="close" class="fa fa-times-circle-o" aria-hidden="true"></i>
        <a href="home_page.php">Home</a>
        <a href="jobs.php">Jobs</a>
        <a href="Under_construction.html">Profile</a>
        <a href="forum.php" target="_blank">Forum</a>
    </div>
    <!-- Mobile search bar, hidden by default -->
    <form class="SearchSpace" action="action_page.php">
        <button type="submit" id="Mobile_SubmitButton"><i class="fa fa-search"></i></button>
        <input type="text" id="mobile-search" name="search" placeholder="Search..">
        <div id="searchBox" ></div>
    </form>
</div>
<!-- Header JavaScript file -->
<script src="js/Header.js"></script>
</body>
</html>
