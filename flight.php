<?php
session_start();
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = "airline1";
$conn = mysqli_connect($servername, $username, $password, "$dbname");
if (!$conn) {
	die('Could not Connect My Sql:' . mysql_error());
}
if (isset($_POST['add'])) {
	$fname = $_POST['fname'];
	$fno = $_POST['fno'];
	$froml = $_POST['froml'];
	$tol = $_POST['tol'];
	$dept = $_POST['dept'];
	$returnf = $_POST['returnf'];
	$sql = "INSERT INTO addfl (fname, fno, froml,tol,dept,returnf) 
	 VALUES ('$fname', '$fno', '$froml','$tol','$dept','$returnf')";
	if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
		$result = mysqli_query($conn,"SELECT * FROM addfl limit 1");
		while($row = mysqli_fetch_array($result))
		  {
		  echo "<br>flight Name". $row['fname'] . "<br>flight No " . $row['fno']."<br>from location:". $row['froml']."<br>To Location". $row['tol']."<br>Dept time". $row['dept']."Return time". $row['returnf'];
		  echo "<br />";
		  }
	}
	 else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	}
	mysqli_close($conn);
}
