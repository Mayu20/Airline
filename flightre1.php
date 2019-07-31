<?php

session_start();


$url = 'localhost';
$username = 'root';
$password = '';
$conn = mysqli_connect($url, $username, $password, "airline1");
if (!$conn) {
    die('Could not Connect My Sql:' . mysql_error());
}

?>
<!DOCTYPE html>
<html>

<head>
    <title> Retrive data</title>
    <link rel="stylesheet" href="css\register.css">
</head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://kendo.cdn.telerik.com/2019.2.619/styles/kendo.common-material.min.css" />
<link rel="stylesheet" href="https://kendo.cdn.telerik.com/2019.2.619/styles/kendo.material.min.css" />
<link rel="stylesheet" href="https://kendo.cdn.telerik.com/2019.2.619/styles/kendo.material.mobile.min.css" />

<script src="https://kendo.cdn.telerik.com/2019.2.619/js/jquery.min.js"></script>
<script src="https://kendo.cdn.telerik.com/2019.2.619/js/kendo.all.min.js"></script>

<body background="images\As.png">
    <div class="w3-topnav">
        <div class="w3-bar w3-theme-d2 w3-left-align">
            <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
            <a href="Airline1.html" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>Home</a>
            <div class="w3-dropdown-hover w3-hide-small">
                <button class="w3-button" title="Notifications">Manage Your Trip <i class="fa fa-caret-down"></i></button>
                <div class="w3-dropdown-content w3-card-4 w3-bar-block">
                    <a href="flight_show.php" class="w3-bar-item w3-button">Flight Booking</a>

                    <a href="login.php" class="w3-bar-item w3-button" onclick="showAlert()">Ticket Cancallation</a>
                    <a href="schedule.html" class="w3-bar-item w3-button">Flight Schedule</a>
                    <a href="Login.php" class="w3-bar-item w3-button"> Time Table</a>
                </div>
            </div>
            <a href="special.html" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Special Offer</a>
            <a href="About.html" class="w3-bar-item w3-button w3-hide-small w3-hover-white">About Us</a>
            <div class="w3-dropdown-hover w3-hide-small">
                <button class="w3-button" title="Notifications">Contact<i class="fa fa-caret-down"></i></button>
                <div class="w3-dropdown-content w3-card-4 w3-bar-block">
                    <a href="contact.html" class="w3-bar-item w3-button">Contact Details</a>
                    <a href="route.html" class="w3-bar-item w3-button">Route MAp </a>
                    <a href="#" class="w3-bar-item w3-button">Frequently Asked Question</a>
                </div>
            </div>
            <div class="w3-dropdown-hover w3-hide-small">
                <button class="w3-button" title="Notifications">Login<i class="fa fa-caret-down"></i></button>
                <div class="w3-dropdown-content w3-card-4 w3-bar-block">
                    <a href="Admin.html" class="w3-bar-item w3-button">Admin</a>
                    <a href="login.php" class="w3-bar-item w3-button">User</a>
                </div>
            </div>
            <a href="register.html" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Register</a>
        </div>
        <!-- Navbar on small screens -->
        <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
            <a href="#team" class="w3-bar-item w3-button">Manage Your Trip</a>
            <a href="#w" class="w3-bar-item w3-button">Special Offer</a>
            <a href="About.html" class="w3-bar-item w3-button">About Us</a>
            <a href="contact.html" class="w3-bar-item w3-button">Contact</a>
        </div>
    </div>
    <br>
    <h3>Flight Availble</h3>
    <?php
    $froml = $_POST["froml"];
    $dept = $_POST["dept"];
    $tol = $_POST["tol"];
    $passenger = $_POST['passenger'];
    $_SESSION['froml']=$_POST['froml'];
    $_SESSION['tol']=$_POST['tol'];
    $_SESSION['dept']=$_POST['dept'];
  
   // $_SESSION['returnf']=$_POST['returnf'];
        ?>

    <?php
    $result = mysqli_query($conn, "SELECT fb.froml, fb.tol,fb.fname,fb.fno,fb.dept,fb.returnf,s.isAvailbale, COUNT(s.seatID) As seats FROM `flight_booking` fb
    LEFT JOIN `seat_booking` s ON s.`fno` = fb.id
    WHERE fb.froml = '$froml' AND fb.tol = '$tol' AND fb.dept = '$dept' AND (SELECT COUNT(`seatID`) FROM `seat_booking` WHERE `isAvailbale` = 1)>= $passenger
    AND s.`isAvailbale`=1");
    //$fetched=mysqli_query($result);
   
    if (mysqli_num_rows($result) > 0) {
        ?>
        <br> <br> <br>
        <table width="400" border="2" cellpadding="2" cellspacing='1' id="mytable">
            <tr bgcolor="#2ECCFA">

                <td> Flight Name </td>
                <td> Flight No </td>
                <td> From City </td>
                <td> To City </td>
                <td> Dept Time </td>
                <td> Arrival Time </td>
                <td> Seat Available </td>
                <td> Action </td>

            </tr>
            <?php

            $i = 0;
            while ($row = mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <td> <?php echo $row["fname"] ?> </td>
                    <td> <?php echo $row["fno"] ?> </td>
                    <td> <?php echo $row["froml"] ?> </td>
                    <td> <?php echo $row["tol"] ?> </td>
                    <td> <?php echo $row["dept"] ?> </td>
                    <td> <?php echo $row["returnf"] ?> </td>
                    <td> <?php echo $row["seats"] ?> </td>
                    <td> <a href= "passenge.php"> Book
                </tr>

                <?php
                $i++;
            }

            ?>
        </table>
    <?php
    } else {
        echo "No result found";
    }
    ?>
    