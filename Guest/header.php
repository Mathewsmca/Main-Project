<?php
if(!isset($_SESSION['cus_id']))
echo "<script> window.location.href='#'; </script>";
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>Taxibooking</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

    <!-- PRE LOADER -->
    <section class="preloader">
        <div class="spinner">
            <span class="spinner-rotate"></span>
        </div>
    </section>


    <!-- MENU -->
    <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
        <div class="container">

            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                <!-- lOGO TEXT HERE -->
                <a href="#" class="navbar-brand">GO CABS</a>
            </div>

            <!-- MENU LINKS -->
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-nav-first">
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="modelview.php">Book now</a></li>
                    <li><a href="offers.html">Offers</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About<span class="caret"></span></a>

                        <ul class="dropdown-menu">
                            <li><a href="blog-posts.html">Blog</a></li>
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="team.html">Team</a></li>
                            <li><a href="testimonials.html">Testimonials</a></li>
                            <li><a href="terms.html">Terms</a></li>
                        </ul>
                    </li>
                    
                    <li><a href="contact.html">Contact Us</a></li>
                    <li><a href="driverreg.php">Register A Cab?</a></li>
                    <li><a href="login.php">LOGIN</a></li>
         
                        </ul>
                    </li>
                </ul>
            </div>

        </div>
    </section>