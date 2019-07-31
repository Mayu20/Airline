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
if (isset($_POST['next'])) {

    

    

        ?>
        <br> <br> <br>
        <table width="400" border="2" cellpadding="2" cellspacing='1' id="mytable">
            <tr bgcolor="#2ECCFA">
                <td>From:</td>
                <td>To :</td>
                <td>DEPT DATE:</td>
                <td>Flight Name:</td>
                <td>Flight No: </td>
            </tr>
            <tr>
                <td>
                    <h3><b> <?php echo  $_SESSION['froml']; ?></b></h3>
                </td>

                <td>
                    <h3><b><?php echo $_SESSION['tol']; ?></b></h3>
                </td>
                <td>

                    <h3> <b><?php echo $_SESSION['dept']; ?></b></h3>
                </td>

                <?php
                $query = "SELECT fname, fno FROM flight_booking where dept='$_SESSION[dept] ' AND froml='$_SESSION[froml] '  AND tol='$_SESSION[tol]'";

                if ($result = mysqli_query($conn, $query)) {

                    /* fetch associative array */
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?><td>
                            <h3><b><?php printf("%s ",$_SESSION['fname']= $row["fname"]); ?></b></h3>
                            <h3><b>
                        </td>
                        <td><b><?php
                                printf("%s ",$_SESSION['fno']= $row["fno"]); ?></b></h3>
                        </td><?php
                            }

                            /* free result set */
                            mysqli_free_result($result);
                        } ?>
            </tr>
        </table>
        <br><br><br>
        <table width="400" border="2" cellpadding="2" cellspacing='1' id="mytable">
            <tr bgcolor="#2ECCFA">

                <td> Name </td>
                <td> Contact </td>
                <td> Email </td>
                <td> Age </td>
                <td> address</td>
                <td>seat no</td>

            </tr>
            <tr>
            <?php
    $_SESSION['counter']=$_POST['counter'];

            // $row = mysqli_fetch($sql) ;
          //  $result = mysqli_query($conn, "select * from passenger_detail order by pid desc limit 1 ");
  //  while ($row = mysqli_fetch_array($result)) {
      echo "<td>&nbsp;&nbsp;" . $_SESSION['name'] .
        "</td><td>&nbsp;&nbsp;" . $_SESSION['contact'] . "</td><td>&nbsp;&nbsp;"
        . $_SESSION['email'] . "</td><td>&nbsp;&nbsp;" . $_SESSION['Age']
        . "</td><td>&nbsp;&nbsp;" . $_SESSION['address'] . "</td><td>&nbsp;&nbsp;" . $_SESSION['counter'] ;
      echo "</td><br />";
    
  ?>
            </tr>
                   <br><br><br>  
            <?php

            //}

            ?>
        </table>
        <form action="book.php" method="post">
      
        <input type="submit" value="confirm"  name ="confirm"  onclick="window.location.href = ''"></button> 
           </form>

<?php
            mysqli_close($conn);
        
  }
  else {
      echo "error";
  }