
<?php
include("../Guest/auth_admin.php");
include('dbconn.php');
$login_id=$_SESSION['admin_id'];
$details=mysqli_query($conn,"SELECT *FROM tbl_admin WHERE adminId='$login_id'");
if($details)
{
$profile=mysqli_fetch_array($details);
}

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
                 
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MANAGE CAB?<span class="caret"></span></a>

                        <ul class="dropdown-menu">
                            <li><a href="view_model.php">Manage Model</a></li>
                            <li><a href="view_type.php">Manage Type</a></li>
                        
                        </ul>
                    </li>
                    

                    <li class="active"><a href="../Guest/logout.php">Logout</a></li>
                 
    </section>