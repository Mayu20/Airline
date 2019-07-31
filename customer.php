<html>

<head>
  <title>Airline Reservation</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet " href="css\home.css">
</head>


<body background="images\As.png">

  <!-- Navbar -->
  <div class="w3-topnav">
    <div class="w3-bar w3-theme-d2 w3-left-align">
      <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
      <a href="Airline1.php" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>Home</a>
      <a href="AddAdmin.html" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Add Admin</a>
      <div class="w3-dropdown-hover w3-hide-small">
        <button class="w3-button" title="Notifications">Manage Flight<i class="fa fa-caret-down"></i></button>
        <div class="w3-dropdown-content w3-card-4 w3-bar-block">
          <a href="home.html" class="w3-bar-item w3-button">Add Flight</a>
          <a href="flightre.php" class="w3-bar-item w3-button">Delete Flight </a>
          <a href="flightre.php" class="w3-bar-item w3-button">Update Flight</a>
        </div>
      </div>
      <div class="w3-dropdown-hover w3-hide-small">
        <button class="w3-button" title="Notifications">Report<i class="fa fa-caret-down"></i></button>
        <div class="w3-dropdown-content w3-card-4 w3-bar-block">
          <a href="flightre.php" class="w3-bar-item w3-button">Airline Report</a>
          <a href=".html" class="w3-bar-item w3-button">Customer Report </a>

        </div>
      </div>
      <a href="profile.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">My Profile</a>
      <a href="Airline1.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Logout</a>
    </div>
    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
      <a href="home.html" class="w3-bar-item w3-button">Home</a>
      <a href="admin.html" class="w3-bar-item w3-button">Add Admin</a>
      <a href="home.html" class="w3-bar-item w3-button">Add Flight</a>
      <a href="flightre.php" class="w3-bar-item w3-button">Delete Flight</a>
    </div>
  </div>


  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
    <a href="admin.html" class="w3-bar-item w3-button">Admin Login</a>
    <a href="contact.html" class="w3-bar-item w3-button">My Booking</a>
    <a href="Airline1.php" class="w3-bar-item w3-button">Logout</a>
  </div>
  </div><br>
</body>

</html>
<br><br>
<?php
session_start();
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = "airline1";
$conn = mysqli_connect($servername, $username, $password, "$dbname");
if (!$conn) {
  die('Could not Connect My Sql:' . mysql_error());
}
if (isset($_POST['report'])) {
  $fname = $_POST['fname'];
  $fno = $_POST['fno'];
 ?>
 <h3>customer Report</h3>
 <?php
  $sql = "SELECT * FROM 
  `booking`  WHERE  fname='$fname' AND fno='$fno' ";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    ?><table>
                        <tr>
                            
                            <?php
                            echo "<br><td><b></b>Name:&nbsp;&nbsp;&nbsp;</td>";

                            echo "<td><b></b>Email:&nbsp;&nbsp;&nbsp;</td>";

                            echo "<td><b></b>&nbsp;&nbsp;Age:&nbsp;&nbsp;&nbsp;</td>";

                            echo "<td><b>From Location:</b>&nbsp;&nbsp;&nbsp;</td>";

                            echo "<td><b>to Location</b>&nbsp;&nbsp;&nbsp;</td>";
                           
                            ?>
                        </tr>
                        <tr>
                            <?php
                            echo "<td>";
                            echo $row["name"];
                            echo "</td><td>";
                            echo $row["email"];
                            echo "</td><td>&nbsp;&nbsp;";
                            echo $row["Age"];
                            echo "</td><td>";
                            echo $row["froml"];
                            echo "</td><td>";
                            echo $row["tol"];
                            echo "</td>";
  }
}
}
?>

      