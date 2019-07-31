<?php
$url = 'localhost';
$username = 'root';
$password = '';
$conn = mysqli_connect($url, $username, $password, "airline1");
if (!$conn) {
    die('Could not Connect My Sql:' . mysql_error());
}
$id = $_GET['id'];
$query = mysqli_query($conn, "select * from `admin_registration` where id='$id'");
$row = mysqli_fetch_array($query);


?>
<!DOCTYPE html>
<html>

<head>
    <title>Basic MySQLi Commands</title>
    <!--datetime picker library-->
    <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2019.2.619/styles/kendo.common-material.min.css" />
    <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2019.2.619/styles/kendo.material.min.css" />
    <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2019.2.619/styles/kendo.material.mobile.min.css" />

    <script src="https://kendo.cdn.telerik.com/2019.2.619/js/jquery.min.js"></script>
    <script src="https://kendo.cdn.telerik.com/2019.2.619/js/kendo.all.min.js"></script>
    

</head>

<body background="images\As.png">
    <h2>Edit</h2>
    <form method="POST" action="editprofile.php?id=<?php echo $id; ?>">
    <label><b>username:</b>&nbsp;&nbsp;</label><br><br><?php echo $row['username']; ?><br><br>
        <label><b>email:</b></label><input id="email" title="email"  value="<?php echo $row['Email']; ?>" name="Email"><br><br>
        <label><b>mobile No</b></label>&nbsp;&nbsp;<input id="mobile no" title="phone"  value="<?php echo $row['Contact']; ?>" name="Contact">
        <br><br>
 <br><br>
       
        <br><br><br>
        <input type="submit" name="submit">&nbsp;&nbsp;
        <a href="profile.php">Back</a>
    </form>
<?php

$id = $_GET['id'];

if(isset($_POST['submit']))
{
//$fname = $_POST['fname'];
//$fno = $_POST['fno'];
//$froml = $_POST['froml'];
//$tol = $_POST['tol'];
//$username = $_POST['username'];
$email = $_POST['Email'];
$phone = $_POST['Contact'];

mysqli_query($conn, "update `admin_registration` set  Email='$email' ,Contact='$phone' where id='$id'");
//header('location:flightre.php');
}
?>
