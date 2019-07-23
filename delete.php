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
	
    mysqli_query($conn,"delete from `addfl` where id='$id'");
    header('location:flightre.php');
    
?>