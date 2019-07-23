<?php
session_start();
$passenger = $_SESSION["passenger"];
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = "airline1";
$conn = mysqli_connect($servername, $username, $password, "$dbname");
if (!$conn) {
    die('Could not Connect My Sql:' . mysql_error());
}
if (isset($_POST['submit'])) {

   
        $name = $_POST['name'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];
        $Age = $_POST['Age'];
        $address = $_POST['address'];
        $sql = "INSERT INTO person (name, contact,email,Age,address) 
     VALUES ('$name', '$contact', '$email','$Age','$address')";
     
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully !";
     
        } else {
            echo "Error: " . $sql . "
" . mysqli_error($conn);
        }
     
    mysqli_close($conn);
}
