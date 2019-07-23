

<?php
// Start the session
session_start();
$id = $_SESSION["id"] //Session variable id retrieved
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css\register.css">
  <script src="javascript\home.js"></script> 
</head>

<body background="images\As.png">
<div class="w3-topnav">
    <div class="w3-bar w3-theme-d2 w3-left-align">
      <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2"
        href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
      <a href="home.html" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>Home</a>

      <div class="w3-dropdown-hover w3-hide-small">
        <button class="w3-button" title="Notifications">Manage Flight<i class="fa fa-caret-down"></i></button>
        <div class="w3-dropdown-content w3-card-4 w3-bar-block">
          <a href="home.html" class="w3-bar-item w3-button">Add Flight</a>
          <a href="flightre.php" class="w3-bar-item w3-button">Delete Flight </a>
          <a href="flightre.php" class="w3-bar-item w3-button">Update Flight</a>
        </div>
      </div>
      <div class="w3-dropdown-hover w3-hide-small">
        <button class="w3-button" title="Notifications">Manage Customer<i class="fa fa-caret-down"></i></button>
        <div class="w3-dropdown-content w3-card-4 w3-bar-block">
          <a href="flightre.php" class="w3-bar-item w3-button">view Customer</a>
          <a href="route.html" class="w3-bar-item w3-button">list of customer </a>

        </div>
      </div>

      <a href="profile.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">My Profile</a>
      <a href="Airline1.html" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Logout</a>
    </div>
    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
      <a href="#team" class="w3-bar-item w3-button">Home</a>
      <a href="#w" class="w3-bar-item w3-button">Add Admin</a>
      <a href="About.html" class="w3-bar-item w3-button">Add Flight</a>
      <a href="contact.html" class="w3-bar-item w3-button">Delete Flight</a>
    </div>
  </div>
  <br>
  
    <div class="container">
        
        <?php
        //Establish a connection with the DB
        $host = "localhost";
        $user = "root";
        $password = "";
        $dbname = "airline1";
        $conn = new mysqli($host, $user, $password, $dbname);
        ?>
        <!-- Have to collect this data from Teacher Database -->
       
        <table style="text-align:center">
          
        <h1>Your Personal Details</h1>
                    <?php
                    $sql = "SELECT username,Contact,Email FROM login1 WHERE id=$id";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr><td><b>Name:</b></td><td>";
                            echo $row["username"];
                            echo "<tr><td><b>Contact:</b></td><td>";
                            echo $row["Contact"];
                            echo "<tr><td><b>Email:<b></td><td>";
                            echo $row["Email"];
                            
                        }
                    } else {
                        echo "Unregistered user. Sign Up first.";
                    }
                    ?>
              
        <tr>
       
                <td><button class="button0" name="edit" onclick="window.location.href='AddAdmin.html'">
                    Edit Your Details
                </button></td>
                <td><button class="button1" name="delete" onclick="window.location.href=''">
                Delete Your Account
                </button></td>
            
            
        </table>
      
                </div>
    
    </body>
        <!-- Modal -->
       


</html>
