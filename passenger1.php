<?php
session_start();
$passenger = $_SESSION["passenger"];


?>
<!DOCTYPE html>
<html>
<title>Passenger Details</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css\st.css">


<body background=" images\bs.jpg">

    <!--navigation bar-->
    <div class="w3-top">
        <div class="w3-bar w3-theme-d2 w3-left-align">
            <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
            <a href="Airline1.php" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>Home</a>
            <div class="w3-dropdown-hover w3-hide-small">
                <button class="w3-button" title="Notifications">Manage Your Trip <i class="fa fa-caret-down"></i></button>
                <div class="w3-dropdown-content w3-card-4 w3-bar-block">
                    <a href="Flight.html" class="w3-bar-item w3-button">Ticket Booking</a>
                    <a href="Login.html" class="w3-bar-item w3-button">Ticket Cancallation</a>
                    <a href="#" class="w3-bar-item w3-button">Flight Schedule</a>
                    <a href="#" class="w3-bar-item w3-button"> Time Table</a>
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

            <a href="login.html.html" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Logout</a>
        </div>
        <!-- Navbar on small screens -->
        <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
            <a href="#team" class="w3-bar-item w3-button">Manage Your Trip</a>
            <a href="special.html" class="w3-bar-item w3-button">Special Offer</a>
            <a href="About.html" class="w3-bar-item w3-button">About Us</a>
            <a href="contact.html" class="w3-bar-item w3-button">Contact</a>
            <a href="#" class="w3-bar-item w3-button">Search</a>
        </div>
    </div><br><br>






    <fieldset class="fieldset3">
        <label for="">Passenger Details</label>
        <form action="passenger.php" method="POST">

            <label for="name">Name&nbsp;&nbsp;
            <input type="text" name="name"><br><br>
            <label for="name">contact&nbsp;&nbsp;
             <input type="text" name=contact><br><br>
             <label for="name">email&nbsp;&nbsp;
             <input type="text" name="email"><br><br>
            <label for="name">Age&nbsp;&nbsp;
             <input type="number" name="Age"><br><br>
            <label for="name">address&nbsp;&nbsp;
            <input type=text name="address">


<button type="reset" class="b5"><b>Cancel</button></b>&nbsp;
       <button type="submit" name="submit" class="b5"><b>Make Payment </b></button>
        </form>
    </fieldset>


</body>

</html>