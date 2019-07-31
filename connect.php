<?php


include('config.php');

session_start();
// Store Session Data
//$_SESSION['login_user'] = $username;

if (isset($_POST['login'])) {
    $_SESSION['username'] = $_POST['username'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = $connection->prepare("SELECT * FROM registration WHERE username=:username");
    $query->bindParam("username", $username, PDO::PARAM_STR);
    $query->execute();

    $result = $query->fetch(PDO::FETCH_ASSOC);

    if (!$result) {
        echo '<p class="error">Username password combination is wrong!</p>';
    } else {
        if (password_verify($password, $result['password'])) {
             $_SESSION['id'] = $result['id'];
            echo '<p class="success">Congratulations, you are logged in!</p>';
            header("location:user.php");
        } else {

            echo '<p class="error">Username password combination is wrong!</p>';
        }
    }
}
