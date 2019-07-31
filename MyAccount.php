<?php
// Start the session
session_start();
$id = $_SESSION["id"];
$username = $_SESSION['username']; //Session variable id retrieved
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body background="images\bs.jpg">
    <link rel="stylesheet" href="st.css">
    <div class="w3-top">
        <div class="w3-bar w3-theme-d2 w3-left-align">
            <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
            <a href="Airline1.php" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>Home</a>
            <a href="flight_show.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Flight
                Booking</i></a>&nbsp;&nbsp;&nbsp;
            <a href="MyAccount.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Ticket Cancellation</i></a>&nbsp;&nbsp;
            <a href="flight_show.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Search Flight</i></a>&nbsp;&nbsp;
            <a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Logout</i></a><br>
            <br<br>
        </div>
        <!--Navigation bar on small screen-->
        <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
            <a href="flight_show.php" class="w3-bar-item w3-button">Flight Booking</a>
            <a href="MyAccount.php" class="w3-bar-item w3-button">Ticket Cancellation</a>
            <a href="flight_show.php" class="w3-bar-item w3-button">Search Flight</a>
            <a href="#" class="w3-bar-item w3-button">Logout</a>
        </div>
    </div>

    </head>

    <body>

        <body>
            <div class="container">

                <?php
                //Establish a connection with the DB
                $host = "localhost";
                $user = "root";
                $password = "";
                $dbname = "airline1";
                $conn = new mysqli($host, $user, $password, $dbname);
                ?>
                <!-- Have to collect this data from registration Database -->
                <!--personal details--><br><br>
                <h3>Your Personal Details</h3>
                <?php
                $sql = "SELECT username, email, phone FROM registration WHERE id=$id";

                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<br><b>Name:</b>&nbsp;&nbsp;&nbsp;";
                        echo $row["username"];
                        echo "<br><b>Email-id:</b>&nbsp;&nbsp;&nbsp;";
                        echo $row["email"];
                        echo "<br><b>Mobile No.:</b>&nbsp;&nbsp;&nbsp;";
                        echo $row["phone"];
                    }
                } else {
                    echo "Unregistered user. Sign Up first.";
                }
                ?>

                <br><br>

                <button class="button0" name="edit" onclick="window.location.href=''">
                    Edit Your Details
                </button>
                <button class="button1" name="delete" onclick="window.location.href=''">
                    Delete Your Account
                </button>



            </div>
            <!--My Booking-->
            <?php

            $sql = "SELECT * FROM booking where name='$username'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    ?><table>
                        <tr>
                            <h3>My Booking</h3>
                            <?php
                            echo "<br><td><b>From Location</b>&nbsp;&nbsp;&nbsp;</td>";

                            echo "<td><b>To Location</b>&nbsp;&nbsp;&nbsp;</td>";

                            echo "<td><b>Flight Name</b>&nbsp;&nbsp;&nbsp;</td>";

                            echo "<td><b>Flight No</b>&nbsp;&nbsp;&nbsp;</td>";

                            echo "<td><b>Name</b>&nbsp;&nbsp;&nbsp;</td>";
                            echo  "<td><b> Action</td><b>";
                            ?>
                        </tr>
                        <tr>
                            <?php
                            echo "<td>";
                            echo $row["froml"];
                            echo "</td><td>";
                            echo $row["tol"];
                            echo "</td><td>";
                            echo $row["fname"];
                            echo "</td><td>";
                            echo $row["fno"];
                            echo "</td><td>";
                            echo $row["name"];
                            echo "</td>";
                            echo "<td>"
                            ?>
                            <a href="cancel.php?book_id=<?php echo $row['book_id']; ?>" onclick="return confirm('Are you sure to Cancel?')"><b style="color:black">Cancel Ticket</b></a>

                        <?php
                        }
                    }

                    ?>
                </tr>
            </table>




        </body>

</html>