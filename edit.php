<?php
$url = 'localhost';
$username = 'root';
$password = '';
$conn = mysqli_connect($url, $username, $password, "airline1");
if (!$conn) {
    die('Could not Connect My Sql:' . mysql_error());
}
$id = $_GET['id'];
$query = mysqli_query($conn, "select * from `flight_booking` where id='$id'");
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
    <form method="POST" action="edit.php?id=<?php echo $id; ?>">
    <label><b>Flight Name:</b>&nbsp;&nbsp;</label><?php echo $row['fname']; ?><br><br>
        <label><b>Flight No:</b></label>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['fno']; ?><br><br>
        <label><b>From Location:</b></label>&nbsp;&nbsp;<?php echo $row['froml']; ?><br><br>
        <label><b>Dept Time:&nbsp;&nbsp;</b></label>
        
        <input id="datetimepicker" title="datetimepicker"  value="<?php echo $row['dept']; ?>" name="dept">
        <script>
      $(document).ready(function () {
          // create DateTimePicker from input HTML element
          $("#datetimepicker").kendoDateTimePicker({
              value: new Date(),
              dateInput: true
          });
      });
  </script>
 <br><br>
        <label><b>Return Time:&nbsp;&nbsp;</b></label><input id="datetimepicker1" title="datetimepicker"  value="<?php echo $row['returnf']; ?>" name="returnf">
        <script>
      $(document).ready(function () {
          // create DateTimePicker from input HTML element
          $("#datetimepicker1").kendoDateTimePicker({
              value: new Date(),
              dateInput: true
          });
      });
  </script>
        <br><br><br>
        <input type="submit" name="submit">&nbsp;&nbsp;
        <a href="flightre.php">Back</a>
    </form>
<?php

$id = $_GET['id'];

if(isset($_POST['submit']))
{
//$fname = $_POST['fname'];
//$fno = $_POST['fno'];
//$froml = $_POST['froml'];
//$tol = $_POST['tol'];
$dept = $_POST['dept'];
$returnf = $_POST['returnf'];

mysqli_query($conn, "update `flight_booking` set  dept='$dept' ,returnf='$returnf' where id='$id'");
//header('location:flightre.php');
}
?>
