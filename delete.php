<?php  


$url='localhost';
$username='root';
$password='';
$conn=mysqli_connect($url,$username,$password,"airline1");
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}

  

// confirm that the 'id' variable has been set
	$id=$_GET['id'];
	
 //$retval=mysqli_query($conn,"delete from `admin_registration` where id='$id'");

 $sql="Delete from admin_registration where id=$id";

 if (!mysqli_query($conn,$sql))
 {
 die('Error: ' . mysqli_error($conn));
 }
 echo "Record Deleted";
 header("Location:admin.html");

 //mysqli_close($con);
 ?>
