<!DOCTYPE html>
<head>
    <title>Accounting company</title>
    <link rel="stylesheet" type = "text/css" href="css/design.css">

</head>
<body>
	<div id="Home">

		 <div id="logo">
		  

		 </div>

	
        <nav class="navbar navbar-inverse bg-inverse">
      <div class="navbar-header">
         <h1 class = "headerDesign">Skynet Accounting Systems</h1>
      </div>
    <ul class="nav navbar-nav">
        <li class="active"><a href="login.php">Login</a></li>
        <li><a href="register.php">Register</a></li>
        <li><a href="Home.php">Home</a></li>
        <li><a href="services.php">Our Service</a></li>
        <li><a href="career.php">Career</a></li>
        <li><a href="contact.php">About us & Contact</a></li>
    </ul>
</nav>
</div>


<h1 id = "header">Login: </h1>
<br>
  <div id = "login" class="container">
<form id="form_id" method="post" name="myform">
  <div class="foot-logo">
              <img src="img/login.png">
          </div>
    <label for="username">Username</label>
    <input type="text" name="name" class="form-control" id="username" placeholder="Enter Username">
    <br>
    <label for="password">Password</label>
    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
    <br>
  <input type="button" class="btn btn-success" value="Login" id="submit" onclick="validate()"/>
</form>
  </div>
</br>







<div class="footer-section">
    <div class="footer">
  <div class="container">
        <div class="col-md-4">
        <h1> Skynet Accounting Systems </h1>
           
  
    </div>
        <div class="col-md-8" id = "divNavbar">
           <h5>Quick Links</h5>
              <ul class="breadcrumb" id = "footerNavbar">
                    <li><a href="#"> About Us</a> </li>
                    <li><a href="#"> Our News</a> </li>
                    <li><a href="services.php"> Our Services</a> </li>
                    <li><a href="contact.php"> Contact Us</a> </li>
                  </ul>
                  
        </div>
         
    <div class="clearfix"></div>
  </div>
</div>
<div class="footer-bottom">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 ">
              <div class="copyright-text">
                <p>CopyRight © 2017 Digital All Rights Reserved</p>
              </div>
            </div> <!-- End Col -->
                                
          </div>
        </div>
    </div>
</div>

<script src="js/sign.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/dd40cb5b47.js"></script>

  <!--Chart-->
  
    <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
	<script src="https://www.amcharts.com/lib/3/serial.js"></script>
	<script type="text/javascript" src="js/chart.js"></script>

	<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
	<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
	<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
</body>
