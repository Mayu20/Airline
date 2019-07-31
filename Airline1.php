<?php

?>


<!DOCTYPE html>
<html>
<title>Airline Reservation</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--Kendo library-->
<link rel="stylesheet " href="css\home.css">
<link rel="stylesheet" href="https://kendo.cdn.telerik.com/2019.2.619/styles/kendo.common-material.min.css" />
<link rel="stylesheet" href="https://kendo.cdn.telerik.com/2019.2.619/styles/kendo.material.min.css" />
<link rel="stylesheet" href="https://kendo.cdn.telerik.com/2019.2.619/styles/kendo.material.mobile.min.css" />

<script src="https://kendo.cdn.telerik.com/2019.2.619/js/jquery.min.js"></script>
<script src="https://kendo.cdn.telerik.com/2019.2.619/js/kendo.all.min.js"></script>


<script src="javascript\home.js"></script>

<head>

</head>

<body id="myPage">


  <!-- Navbar -->
  <div class="w3-topnav">
    <div class="w3-bar w3-theme-d2 w3-left-align">
      <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
      <a href="Airline1.php" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>Home</a>
      <div class="w3-dropdown-hover w3-hide-small">
        <button class="w3-button" title="Notifications">Manage Your Trip <i class="fa fa-caret-down"></i></button>
        <div class="w3-dropdown-content w3-card-4 w3-bar-block">
          <a href="flight_show.php" class="w3-bar-item w3-button">Flight Booking</a>

          <a href="login.php" class="w3-bar-item w3-button" onclick="showAlert()">Ticket Cancallation</a>
        </div>
      </div>
      <a href="special.html" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Special Offer</a>
      <a href="About.html" class="w3-bar-item w3-button w3-hide-small w3-hover-white">About Us</a>
      <div class="w3-dropdown-hover w3-hide-small">
        <button class="w3-button" title="Notifications">Contact<i class="fa fa-caret-down"></i></button>
        <div class="w3-dropdown-content w3-card-4 w3-bar-block">
          <a href="contact.html" class="w3-bar-item w3-button">Contact Details</a>
          <a href="route.html" class="w3-bar-item w3-button">Route MAp </a>
          <a href="#" class="w3-bar-item w3-button">Frequently Asked Question</a>
        </div>
      </div>
      <div class="w3-dropdown-hover w3-hide-small">
        <button class="w3-button" title="Notifications">Login<i class="fa fa-caret-down"></i></button>
        <div class="w3-dropdown-content w3-card-4 w3-bar-block">
          <a href="Admin.html" class="w3-bar-item w3-button">Admin</a>
          <a href="login.php" class="w3-bar-item w3-button">User</a>
        </div>
      </div>
      <a href="register.html" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Register</a>
    </div>
    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
      <a href="login.php" class="w3-bar-item w3-button">Ticket Booking</a>
      <a href="login.php" class="w3-bar-item w3-button">Ticket Cancellation</a>
      <a href="special.html" class="w3-bar-item w3-button">Special Offer</a>
      <a href="About.html" class="w3-bar-item w3-button">About Us</a>
      <a href="contact.html" class="w3-bar-item w3-button">Contact</a>
    </div>
  </div>
  <!-- Automatic Slideshow Images -->
  <div class=" w3-center">

    <img src="images\ck.jpg" style="width:100%">
  </div>
  <!-- flight search form-->

  <form action="flightre1.php" method="POST" class="container">

    <h1><b>Book a Flight</b></h1>
    <input type="radio" id="chkNo" name="chkPassPort" onclick="ShowHideDiv()" />One Way&nbsp;&nbsp;&nbsp;
    <input type="radio" id="chkYes" name="chkPassPort" onclick="ShowHideDiv()" />Round Trip<br><br>
    <div id="example">
      <div class="demo-section k-content">
        <label for="search" class="required"><b>From&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="search" id="search" name="froml" required validationMessage="Select city" style="width: 220px;" /><span class="k-invalid-msg" data-for="search"></span>
        <br></div>
    </div>
    <!--script for filter-->
    <script>
      $(document).ready(function() {
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
    <div id="example">
      <div class="demo-section k-content">
        <label for="psw"><b>To&nbsp;&nbsp;&nbsp;</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="countries" placeholder="To" name="tol" required style="width:65%"><br>


      </div>

      <script>
        $(document).ready(function() {
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
    </div>

    <br>

    <div id="example">

      <div class="demo-section k-content">

        <label for="text"><b>Dept Time&nbsp;&nbsp;</b></label>
        <input id="datetimepicker1" name="dept" value="10/10/2011" style="width:65%" />

        <script>
          $(document).ready(function() {
            // create DateTimePicker from input HTML element
            $("#datetimepicker1").kendoDateTimePicker({
              value: new Date(),
              dateInput: true
            });
          });
        </script>
        <br><br>

      </div>
      <script type="text/javascript">
        function ShowHideDiv() {
          var chkYes = document.getElementById("chkYes");
          var dvPassport = document.getElementById("dvPassport");
          dvPassport.style.display = chkYes.checked ? "block" : "none";
        }
      </script>

      <div id="dvPassport" style="display: none"><b>
          Return Time</b> <input type="text" id="datetimepicker" name=return style="width:65%" />
      </div>
      <script>
        $(document).ready(function() {
          // create DateTimePicker from input HTML element
          $("#datetimepicker").kendoDateTimePicker({
            value: new Date(),
            dateInput: true
          });
        });
      </script>

      <script>
        function show2() {
          document.getElementById('end').style.display = 'none';
        }

        function show1() {
          document.getElementById('end').style.display = 'block';
        }
      </script>


    </div>


    <br>
    <label for="class"><b>class</b></label>
    <input type="text" name="class" style="width:60%">
    <br>
    <label for="Passenger"><b>Passenger&nbsp;&nbsp;</b></label>
    <input type="number" name="passenger" style="width:65%">
    <br><br>


    <button type="submit" class="btn" name="search">Search Flight</button>
  </form>

  <!-- Work Row -->

  <div class="w3-row-padding w3-padding-64 w3-theme-l1" id="work">


    <label for="offer" style="font-size:xx-large">Offer<a href="special.html" class="v1 w3-large">View all</a></label>
    <div class="w3-quarter">
      <div class="w3-card w3-white">
        <img src="images\ho.jpg" alt="Snow" style="width:100%">

      </div>
    </div>

    <div class="w3-quarter">
      <div class="w3-card w3-white">
        <img src="images\ia.png" alt="Lights" style="width:100%">

      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-card w3-white">
        <img src="images\re.png" alt="Lights" style="width:67%">

      </div>
    </div>

    <div class="w3-quarter">
      <div class="w3-card w3-white">
        <img src="images\sa1.jpg" alt="Mountains" style="width:100%">
      </div>
    </div>
  </div>
  <!--work row for Popular destination-->


  <div class="w3-row-padding w3-padding-64 #f9e6ba w3-theme-l3" id="work">


    <h2 class="w3-center">Popular Destination<a href="destination.html" class="w3-right w3-large" style="color:blue">view all</a>
    </h2>

    <div class=" mySlides w3-card w3-white">

      <img src="images\Amritsar.jpg" class="img2">
      <h1>Amritsar</h1>
    </div>
    <div class=" mySlides w3-card w3-white">
      <img src="images\bangk.jpg" class="img2">
      <h1>Bangkok</h1>
    </div>
    <div class=" mySlides w3-card w3-white">
      <img src="images\duba.jpg" class="img2">
      <h1>Dubai</h1>
    </div>
    <div class=" mySlides w3-card w3-white">
      <img src="images\Mum.jpg" class="img2">
      <h1>Mumbai</h1>
    </div>
    <div class=" mySlides w3-card w3-white">
      <img src="images\goy.jpg" class="img2">
      <h1>Goa</h1>
    </div>
    <div class=" mySlides w3-card w3-white">
      <img src="images\a.jpg" class="img2">
      <h1>Agra</h1>
    </div>
    <div class=" mySlides w3-card w3-white">
      <img src="images\lon.jpg" class="img2">
      <h1>London</h1>
    </div>

    <button class="prev" onclick="plusSlides(-1)">&#10094;</button>
    <button class="next" onclick="plusSlides(1)">&#10095;</button>
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
      <span class="dot" onclick="currentSlide(4)"></span>
      <span class="dot" onclick="currentSlide(5)"></span>
      <span class="dot" onclick="currentSlide(6)"></span>
      <span class="dot" onclick="currentSlide(7)"></span>
      <script src="javascript\home.js"></script>

    </div>
  </div>

  <section class="ftco-section ftco-wrap-about ftco-no-pb w3-theme-l2">

    <span class="subheading">
      <h1>About Us</h1>
    </span>
    <h2>Air India</h2>
    </div>
    <div class="row">
      <div class="column">
        <p>Air India is the flag carrier airline of India, headquartered at New Delhi.<br>
          It is owned by Air India Limited, a government-owned enterprise, and operates a<br>
          fleet of Airbus and Boeing aircraft serving 94 domestic and international destinations.<br>
          The airline has its hub at Indira Gandhi International Airport, New Delhi,<br>
          alongside several focus cities across India. Air India is the largest international<br>
          carrier out of India with an 18.6% market share.Over 60 international destinations <br>
          are served by Air India across four continents. The airline became the 27th member <br>
          of Star Alliance on 11 July 2014. <br>
          The airline was founded by J. R. D. Tata as Tata Airlines in 1932;</p>
      </div>
      <div class="column">
        <img src="images\air1.jpg" class="img1">
      </div>
    </div>
  </section>
  <!-- Footer -->
  <footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
    <h4>Follow Us</h4>
    <a class="w3-button w3-large w3-blue" href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
    <a class="w3-button w3-large w3-blue" href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter"></i></a>
    <a class="w3-button w3-large w3-blue" href="javascript:void(0)" title="Google +"><i class="fa fa-google-plus"></i></a>
    <a class="w3-button w3-large w3-blue" href="javascript:void(0)" title="Google +"><i class="fa fa-instagram"></i></a>
    <a class="w3-button w3-large w3-blue w3-hide-small" href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin"></i></a><br>
    <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">Airindia</a>

    <div class="show w3-tooltip w3-right">
      <span class="w3-text w3-padding w3-teal w3-hide-small">Go To Top</span>
      <a class="w3-button w3-theme" href="#myPage"><span class="w3-xlarge">
          <i class="fa fa-chevron-circle-up"></i></span></a>
    </div>
  </footer>



</body>

</html>