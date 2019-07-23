<?php
session_start();

$url='localhost';
$username='root';
$password='';
$conn=mysqli_connect($url,$username,$password,"airline1");
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}
$result = mysqli_query($conn,"SELECT * FROM addfl");
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
            <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2"
                href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
            <a href="home.html" class="w3-bar-item w3-button w3-teal"><i
                    class="fa fa-home w3-margin-right"></i>Home</a>
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
    <h3>Flight Reports</h3>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<br><br><br>
    <table width="400" border="2" cellpadding="2" cellspacing='1' id="mytable">
           <tr bgcolor="#2ECCFA">
 
    <td>Flight Name</td>
    <td>Flight No</td>
    <td>From City</td>
    <td>To City</td>
    <td>Dept Date</td>
    <td>Return Date</td>
    <td>Action</td>

  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>


       <td><?php echo $row["fname"] ?></td>
    <td><?php echo $row["fno"] ?></td>
    <td><?php echo $row["froml"] ?></td>
    <td><?php echo $row["tol"] ?></td>
    <td><?php echo $row["dept"] ?></td>
    <td><?php echo $row["returnf"] ?></td>
   <td> <a href="edit.php?id=<?php echo $row['id']; ?> " >Edit</a>&nbsp;| <a  href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure to delete?')">Delete</a></td>
</tr>

<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>