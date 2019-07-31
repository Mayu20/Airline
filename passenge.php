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
          <a href="flight_show.php" class="w3-bar-item w3-button">Ticket Booking</a>
          <a href="Login.php" class="w3-bar-item w3-button">Ticket Cancallation</a>
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

      <a href="login.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Logout</a>
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


  <!--personal details-->
  <!--<fieldset class="fieldset3">-->
  <label for=""><b>Passenger Details</b></label>
  <br>
  <form action="passenger.php" method="POST">
    <table width="400" border="2" cellpadding="2" cellspacing='1' id="mytable">
      <tr bgcolor="#2ECCFA">
        <td>From:</td>
        <td>To :</td>
        <td>DEPT DATE:</td>
        <td>Flight Name:</td>
        <td>Flight No: </td>
      </tr>
      <tr>
        <td>
          <h3><b> <?php echo  $_SESSION['froml']; ?></b></h3>
        </td>

        <td>
          <h3><b><?php echo $_SESSION['tol']; ?></b></h3>
        </td>
        <td>

          <h3> <b><?php echo $_SESSION['dept']; ?></b></h3>
        </td>

        <?php
        $query = "SELECT fname, fno FROM flight_booking where dept='$_SESSION[dept] ' AND froml='$_SESSION[froml] '  AND tol='$_SESSION[tol]'";

        if ($result = mysqli_query($conn, $query)) {

          /* fetch associative array */
          while ($row = mysqli_fetch_assoc($result)) {
            ?><td>
              <h3><b><?php printf("%s ", $row["fname"]); ?></b></h3>
              <h3><b>
            </td>
            <td><b><?php
                    printf("%s ", $row["fno"]); ?></b></h3>
            </td><?php
                }

                /* free result set */
                mysqli_free_result($result);
              } ?>
      </tr>
    </table>
    <br><br>
    <label for="">Name:</label>
    <td><input type="text" name="name"><br><br>
      <label for="">Contact</label>
    <td><input type="text" name="contact"><br><br>
      <label for="">Email</label>
    <td><input type="text" name="email"><br><br>
      <label for="">Age:</label>
    <td><input type="number" name="Age"><br><br>
      <label for="">Address:</label>
    <td><input type="text" name="address"><br><br>


      <br><br>

      <input type="submit" name="submit" value="Book">&nbsp;&nbsp;<input type="reset" value="Cancel">


  </form>
  </fieldset>
</body>

</html>