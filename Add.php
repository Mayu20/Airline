<?php
 
include('config.php');
session_start();
 
if (isset($_POST['register'])) {
 
    $username = $_POST['username'];
    $password = $_POST['password'];
    $Contact=$_POST['Contact'];
    $Email=$_POST['Email'];
  //password encryption
    $password_hash = password_hash($password, PASSWORD_BCRYPT);
 
        $query = $connection->prepare("INSERT INTO admin_registration(username,PASSWORD,Contact,Email) VALUES ('$username','$password_hash','$Contact','$Email') ");
        $query->bindParam("username", $username, PDO::PARAM_STR);
        $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
        $query->bindParam("Contact", $Contact, PDO::PARAM_STR);
        $query->bindParam("Email", $Email, PDO::PARAM_STR);
      
        $result = $query->execute();
        if ($result) {
            
            header("location:Admin.html"); 
        }else {
            echo '<p class="error">Something went wrong!</p>';
        }
    }
