<?php
 
include('config.php');


session_start();
 
if (isset($_POST['register'])) {

 
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $c_password = $_POST['password1'];
    $password_hash = password_hash($password, PASSWORD_BCRYPT);

    $query = $connection->prepare("SELECT * FROM users WHERE EMAIL=:email");
    $query->bindParam("email", $email, PDO::PARAM_STR);
    $query->execute();
 
    if ($query->rowCount() > 0) {
        echo '<p class="error">The email address is already registered!</p>';
    }
    
    if ($query->rowCount() == 0) {
        $query = $connection->prepare("INSERT INTO users(username,email,phone,password,password1) VALUES (:username,:email,:phone,:password_hash,:password_hash)");
        $query->bindParam("username", $username, PDO::PARAM_STR);
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $query->bindParam("phone", $phone, PDO::PARAM_STR);
        $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
        $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
       
        $result = $query->execute();
 
        if ($result) {
           // echo '<p class="success">Your registration was successful!</p>';
           header("location:login.html"); 
        } else {
            echo '<p class="error">Something went wrong!</p>';
        }
    }
}

?>