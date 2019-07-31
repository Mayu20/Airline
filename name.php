<?php
//$mysql->commit();
session_start();
$_SESSION['rowId'] = $_POST['rowId'];
$_SESSION['columnId'] = $_POST['columnId'];
            echo "<h3>";
            echo "Please enter the name for each seat:<br><p>&nbsp</p>";
            echo "";
            foreach($_POST['seats'] AS $seat) {
                $rowId = substr($seat, 0, 1);
                $columnId = substr($seat, 1);
                echo $rowId . $columnId . '</br><form method="post" name="input" action="pt2.php" >
<input name="name" type="text"/></br>';
            }
?>

<input type="submit" name="Submit" value="insert" />
</form>