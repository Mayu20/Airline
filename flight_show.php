<?php
session_start();

?>
<!DOCTYPE html>
<html>
<title>Flight Booking</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="javascript\home.js"></script>


<link rel="stylesheet" href="https://kendo.cdn.telerik.com/2019.2.619/styles/kendo.common-material.min.css" />
<link rel="stylesheet" href="https://kendo.cdn.telerik.com/2019.2.619/styles/kendo.material.min.css" />
<link rel="stylesheet" href="https://kendo.cdn.telerik.com/2019.2.619/styles/kendo.material.mobile.min.css" />

<script src="https://kendo.cdn.telerik.com/2019.2.619/js/jquery.min.js"></script>
<script src="https://kendo.cdn.telerik.com/2019.2.619/js/kendo.all.min.js"></script>

<link rel="stylesheet" href="css\st.css">

<body background="images\bs.jpg">

  <!-- Navbar -->
  <div class="w3-top">
    <div class="w3-bar w3-theme-d2 w3-left-align">
      <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2"
        href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
      <a href="Airline1.html" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>Home</a>
      <a href="login.html" class="w3-bar-item w3-button w3-hide-small w3-hover-white" onclick="showAlert()">Ticket
        Cancellation</a>
      <a href="special.html" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Special Offer</a>
      <a href="login.html" class="w3-bar-item w3-button w3-hide-small w3-hover-white" onclick="showAlert()">My
        Booking</a>
      <div class="w3-dropdown-hover w3-hide-small">
        <button class="w3-button" title="Notifications">Login<i class="fa fa-caret-down"></i></button>
        <div class="w3-dropdown-content w3-card-4 w3-bar-block">
          <a href="#" class="w3-bar-item w3-button">Admin</a>
          <a href="login.html" class="w3-bar-item w3-button">User</a>
        </div>
      </div>
      <a href="register.html" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Register</a>
    </div>


    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
      <a href="#team" class="w3-bar-item w3-button">Admin Login</a>
      <a href="contact.html" class="w3-bar-item w3-button">My Booking</a>
      <a href="Airline1.html" class="w3-bar-item w3-button">Logout</a>
    </div>
  </div><br>
  <!--flight book form-->
  <label for="flight">
    <h1><b><i>Book Ticket</i></b></h1>
  </label>
  <fieldset class="fieldset2">
    <form action="flightre1.php" method="POST" class="container">

      <h1><b>Book a Flight</b></h1>
      <input type="radio" id="chkNo" name="chkPassPort" onclick="ShowHideDiv()" />One Way&nbsp;&nbsp;&nbsp;
      <input type="radio" id="chkYes" name="chkPassPort" onclick="ShowHideDiv()" />Round Trip<br><br>
      <div id="example">

        <label for="search" class="required"><b>From&nbsp;&nbsp;&nbsp;</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="search" id="search" name="from" required validationMessage="Select city" /><span
          class="k-invalid-msg" data-for="search"></span>
        <br>

        <!--script for filter-->
        <script>
          $(document).ready(function () {
            var data = [
              "Mumbai",
              "Delhi",
              "Bengluru",
              "Kolkata",
              "Hydrabad",
              "Singapore",
              "Ahemdabad",
              "pune"
            ];

            $("#search").kendoAutoComplete({
              dataSource: data,
              separator: ", "
            });


          });
        </script>
      </div>
      <br>

      <label for="psw"><b>To&nbsp;&nbsp;&nbsp;</b></label>&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="countries" placeholder="To" name="to" required><br>




      <script>
        $(document).ready(function () {
          var data = [
            "Agartala, India",
            "Amritsar, India",
            "Athens, grece",
            "Ahmedabad, India",
            "Bengluru India",
            "Bhopal,India",
            "Bhubneshwar,India",
            "Brussels,India",
            "Belgium",
            "Chennai,India",
            "Chandigarh,India",
            "Coimbatore,India",
            "Colombo,Sri Lanka",
            "Dehradun,India",
            "Delhi",
            "Dubai,UAE",
            "Goa ,India",
            "Hong Kong,Homg Kong",
            "Hydrabad,Hydrabad",
            "Indore,India",
            "Istabul,Turkey",
            "Jammu,India",
            "Jaipur,India",
            "Kolkata,India",
            "Kuwait,India",
            "Kochi,India"
          ];

          //create AutoComplete UI component
          $("#countries").kendoAutoComplete({
            dataSource: data,
            filter: "startswith",
            placeholder: "Select Destination...",
            separator: ", "
          });
        });
      </script>


      <br>



      <label for="text"><b>Dept Date</b></label>
      <input id="start" name="dept" value="10/10/2011" />
      <br><br>



      <script type="text/javascript">
        function ShowHideDiv() {
          var chkYes = document.getElementById("chkYes");
          var dvPassport = document.getElementById("dvPassport");
          dvPassport.style.display = chkYes.checked ? "block" : "none";
        }
      </script>

      <div id="dvPassport" style="display: none"><b>
          Arrival:</b> <input type="text" id="end" name=return />
      </div>


      <script>
        function show2() {
          document.getElementById('end').style.display = 'none';
        }

        function show1() {
          document.getElementById('end').style.display = 'block';
        }
      </script>
      <script>
        $(document).ready(function () {
          function startChange() {
            var startDate = start.value(),
              endDate = end.value();

            if (startDate) {
              startDate = new Date(startDate);
              startDate.setDate(startDate.getDate());
              end.min(startDate);
            } else if (endDate) {
              start.max(new Date(endDate));
            } else {
              endDate = new Date();
              start.max(endDate);
              end.min(endDate);
            }
          }

          function endChange() {
            var endDate = end.value(),
              startDate = start.value();

            if (endDate) {
              endDate = new Date(endDate);
              endDate.setDate(endDate.getDate());
              start.max(endDate);
            } else if (startDate) {
              end.min(new Date(startDate));
            } else {
              endDate = new Date();
              start.max(endDate);
              end.min(endDate);
            }
          }

          var today = kendo.date.today();

          var start = $("#start").kendoDateTimePicker({
            value: today,
            change: startChange,
            parseFormats: ["dd/MM/yyyy"]
          }).data("kendoDateTimePicker");

          var end = $("#end").kendoDateTimePicker({
            value: today,
            change: endChange,
            parseFormats: ["dd/MM/yyyy"]
          }).data("kendoDateTimePicker");

          start.max(end.value());
          end.min(start.value());
        });
      </script>

      </div>


      <br>
      <label for="class"><b>class&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>&nbsp;&nbsp;&nbsp;
      <input type="text" name="class">
      <br><br>
      <label for="psw"><b>Passenger&nbsp;</b></label>
      <input type="number" name="passenger">
      <br><br>


      <center><button class=" w3-button w3-round-xxlarge w3-blue" type="submit"><b>Search Flight</b></button></center>
    </form>

    <br>


  </fieldset>

</body>

</html>