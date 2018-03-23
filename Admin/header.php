<?php
session_start();
if($_SESSION['logged']!=true){
    echo "<script>window.location.replace('login.php');</script>";
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Senehe Niwasa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <!-- Graph CSS -->
    <link href="css/lines.css" rel='stylesheet' type='text/css' />
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <link rel="icon" href="images/icon.png">
    <!----webfonts--->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
    <!---//webfonts--->
    <!-- Nav CSS -->
    <link href="css/custom.css" rel="stylesheet">
    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/metisMenu.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- Graph JavaScript -->
    <script src="js/d3.v3.js"></script>
    <script src="js/rickshaw.js"></script>
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="css/myStyle.css">

</head>
<body>
<div id="wrapper">
    <!-- Navigation -->
    <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Senehe Niwasa</a>
        </div>
        <!-- /.navbar-header -->
        <ul class="nav navbar-nav navbar-right">

            <li class="dropdown">
                <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="images/dp.png"></a>
                <ul class="dropdown-menu">
                    <li class="m_2"><a href="login.php" onclick="logOut"><i class="fa fa-lock"></i> Logout</a></li>
                </ul>
            </li>

        </ul>


        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" >

                    <!--Dashboard-->
                    <li>
                        <a href="index.php" class="h"><i class="fa fa-dashboard fa-fw nav_icon"></i>Dashboard</a>
                    </li>

                    <!--Manage Rooms-->
                    <li>
                        <a href="manage-rooms.php" class="h"><i class="fa fa-book fa-fw nav_icon"></i>Manage Rooms</a>
                    </li>

                    <!--View Reports-->
                    <li>
                        <a href="#"><i class="fa fa-laptop nav_icon"></i>View Reports</span></a>
                    </li>
                    <li>
                        <a href="guest-details.php" class="h">&emsp;   Guest Details</a>
                    </li>
<!--                    <li>-->
<!--                        <a href="../C/monthly-income.php">&emsp;   Monthly Income</a>-->
<!--                    </li>-->

                    <li>
                        <a href="monthly-income.php" class="h">&emsp;   Annual Income</a>
                    </li>

                    <!--Cancel Reservation-->
                    <li>
                        <a href="cancel-reservation.php" class="h"><i class="fa fa-crosshairs nav_icon"></i>Cancel Reservation</a>
                    </li>

                    <!--Mails-->
                    <li>
                        <a href="#"><i class="fa fa-envelope nav_icon"></i>Check Mails</a>
                    </li>
                    <li>
                        <a href="inbox.php" class="h">&emsp;   Inbox</a>
                    </li>
                    <li>
                        <a href="compose.php" class="h">&emsp;   Compose email</a>
                    </li>

                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>
