<?php
session_start();


$url = 'localhost';
$username = 'root';
$password = '';
$conn = mysqli_connect($url, $username, $password, "airline1");
if (!$conn) {
    die('Could not Connect My Sql:' . mysql_error());
}

if (isset($_POST['confirm'])) {
$name=$_SESSION['name'];
$froml = $_SESSION['froml'];
$fname=$_SESSION['fname'];
$fno = $_SESSION['fno'];
$tol=$_SESSION['tol'];
$dept = $_SESSION['dept'];
$contact=$_SESSION['contact'];
$email=$_SESSION['email'];
$Age=$_SESSION['Age'];
$address=$_SESSION['address'];
//$seatNo=$_SESSION['SeatNo'];


$query =("INSERT INTO booking(froml,tol,fname,fno,dept,name,email,contact,Age,address) 
VALUES ('$froml','$tol','$fname','$fno','$dept','$name','$email','$contact','$Age','$address')");
if (mysqli_query($conn, $query)) {
   
    echo "Your Booking Successful " ;
?>
<a href="Airline1.php " >OK</a><?php

    } else {
    echo "Error occurred: " ;

    }
}  

/*if ($result) {
 echo '<p class="success">Your registration was successful!</p>';
 //  header("location:login.php"); 
}
 else {

    echo "Something went wrong!</p>";
}
}
*/
?>