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
if (isset($_POST['add'])) {
  $fname = $_POST['fname'];
  $fno = $_POST['fno'];
  $froml = $_POST['froml'];
  $tol = $_POST['tol'];
  $dept = $_POST['dept'];
  $returnf = $_POST['returnf'];
  $seat_capacity = $_POST['seat_capacity'];
  $Economy_Fares = $_POST['Economy_Fares'];
  $Business_Fares = $_POST['Business_Fares'];
  $sql = "INSERT INTO flight_booking (fname, fno, froml,tol,dept,returnf,seat_capacity,Economy_Fares,Business_Fares) 
	 VALUES ('$fname', '$fno', '$froml','$tol','$dept','$returnf',$seat_capacity,$Economy_Fares,$Business_Fares)";
  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully !<br><br>";
    $result = mysqli_query($conn, "select * from flight_booking order by id desc limit 1 ");
    while ($row = mysqli_fetch_array($result)) {
      echo "<br><b>Flight Name:</b>&nbsp;&nbsp;" . $row['fname'] .
        "<br><b>Flight No :</b>&nbsp;&nbsp;" . $row['fno'] . "<br><b>From Location:</b>&nbsp;&nbsp;"
        . $row['froml'] . "<br><b>To Location:</b>&nbsp;&nbsp;" . $row['tol']
        . "<br><b>Dept time:</b>&nbsp;&nbsp;" . $row['dept'] . "<b><br>Return time:</b>&nbsp;&nbsp"
        . $row['returnf'] . "<b><br>seat Capacity:</b>" . $row['seat_capacity']
        . " <b><br>Economy_Fares:</b>" . $row['Economy_Fares'] .
        "<b><br>Business_Fares:</b>" . $row['Business_Fares'];
      echo "<br />";
    }
  } else {
    echo "Error: " . $sql . "
" . mysqli_error($conn);
  }
  mysqli_close($conn);
}
