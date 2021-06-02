<?php
include(__DIR__ . '/../config/constant.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo HTTP_ASSETS ?>css/style.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--animition links counter-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha512-CEiA+78TpP9KAIPzqBvxUv8hy41jyI3f2uHi7DGp/Y/Ka973qgSdybNegWFciqh6GrN2UePx2KkflnQUbUhNIA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha512-d8F1J2kyiRowBB/8/pAWsqUl0wSEOkG5KATkVV4slfblq9VRQ6MyDZVxWl2tWd+mPhuCbpTB4M7uU/x9FlgQ9Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Responsive Animated Navbar</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <nav>
                    <h5 class=" pl-2 mt-4 text-primary">Travel Pakistan</h5>
                    <div class="hamburger">
                        <div class="line1"></div>
                        <div class="line2"></div>
                        <div class="line3"></div>
                    </div>
                    <ul class="nav-links">
                        <li class="active"><a href=" <?php echo BASE_URL ?>index.php">Home</a></li>
                        <li>
                            <a class="nav-link dropdown-toggle m-0 p-0 " href="#" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Services</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item m-0 pl-3" href="#">Local</a>
                                <a class="dropdown-item m-0 pl-3" href="#">Bussiness</a>
                            </div>
                        </li>
                        <li>
                            <a class="nav-link dropdown-toggle m-0  p-0" href="#" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Travels</a>
                            <div class="dropdown-menu ">
                                <a class="dropdown-item pl-3 m-0" href="">Offer</a>
                                <a class="dropdown-item pl-3 m-0" href="#">Group Book</a>
                                <a class="dropdown-item pl-3 m-0" href="#">Unaccompained Minor</a>
                                <a class="dropdown-item pl-3 m-0" href="#">Time Table</a>
                                <a class="dropdown-item pl-3 m-0" href="#">FAQ terms & condition</a>
                            </div>
                        </li>
                        <li><a href=" <?php echo BASE_URL ?>about.php ">About Us</a></li>
                        <li><a href="#">Destinations</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li>
                            <!-- <button class="login-button m-0" href="#">Login</button> -->

                            <div class="dropdown">
                                <i class="fa fa-user pt-1" id="media" aria-hidden="true" style=" margin-left: 10px; font-size: 24px;"></i>
                                <span class="dropdown-toggle login " data-toggle="dropdown">Login</span>

                                <div class="dropdown-menu">
                                    <a class="dropdown-item  m-0 pl-3 " href="login.html">User</a>
                                    <a class="dropdown-item m-0 pl-3" href="<?php echo BASE_URL ?>admin.php">Admin</a>

                                </div>
                            </div>
                        </li>

                    </ul>
                </nav>
            </div>
        </div>
    </div>