<?php
 
include('config.php');
session_start();
 
if (isset($_POST['register'])) {
 
    $username = $_POST['username'];
    $password = $_POST['password'];
    $Contact=$_POST['Contact'];
    $Email=$_POST['Email'];
    $password_hash = password_hash($password, PASSWORD_BCRYPT);
 
        $query = $connection->prepare("INSERT INTO login1(username,password) VALUES (:username,:password_hash)");
        $query->bindParam("username", $username, PDO::PARAM_STR);
        $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
        $result = $query->execute();
        if ($result) {
            header("location:Admin.html"); 
        } else {
            echo '<p class="error">Something went wrong!</p>';
        }
}
?>