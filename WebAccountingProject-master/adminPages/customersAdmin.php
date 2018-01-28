
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Sales Transaction</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type = "text/css" href="../css/design.css">

  </head>
  <body>
	<div id="Home">

		 <div id="logo">
		 </div>

	
        <nav class="navbar navbar-inverse bg-inverse" id = "navbar">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="Home.php">Skynet Accouting Systems</a>
    </div>
    <ul class="nav navbar-nav">
	<li ><a href="homeAdmin.php">Home</a></li>
	<li><a href="purchasingOrderAdmin.php">Expendetur</a></li>
      <li><a href="salesTransactionAdmin.php">Sales</a></li>
	  <li><a href="../home.php">Exit</a></li>

    </ul>
  </div>
</nav>
<div class="container">

        <div class="row">
            <div class="col-sm-12 ">

				<ol class="breadcrumb" id = "secondNavbar">
				  <li><a href="salesTransactionAdmin.php">All Sales</a></li>
				  <li class="active"><a href="customersAdmin.php">Customers</a></li>
				</ol>
			</div>
		</div>
        <div class="row">
            <div class="col-sm-12 ">
				<div class="btn-group">
			  <button type="button" class="btn btn-default btn-lg dropdown-toggle" 
			  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> New Customer<span class="caret"></span>
			  </button>
			  
			  <ul class="dropdown-menu">
				<li><a href="#">Action</a></li>
				<li><a href="#">Another action</a></li>
				<li><a href="#">Something else here</a></li>
				<li role="separator" class="divider"></li>
				<li><a href="#">Separated link</a></li>
			  </ul>
				</div>
			</div>
		</div>

</br>		
	<div class="row">
            <div class="col-sm-12 ">

	<div id="chartCustomersdiv"></div>	
			</div>
	</div>
</br>
	
	<div class="row">
            <div class="col-sm-12 ">

	<div class="panel panel-default" ">
  <!-- Default panel contents -->
  <div class="panel-heading"><h1> Customers </h1> 
  <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
	  
  </div>

  <!-- Table -->
  <table class="table table-dark" id = "tableTest>
<tr>
      <th scope="col">Customer/Company</th>
      <th scope="col">Phone</th>
      <th scope="col">Open Balance</th>
      <th scope="col">Action</th>
    </tr>
    <tr>
      <th scope="row">Long Dong</th>
      <td>06-664-20-69</td>
      <td>420$</td>
      <td>Ahmed</td>

    </tr>
    <tr>
      <th scope="row">Long Dong</th>
      <td>06-664-20-69</td>
      <td>420$</td>
      <td>Ahmed</td>
    </tr>
    <tr>
      <th scope="row">Long Dong</th>
      <td>06-664-20-69</td>
      <td>420$</td>
      <td>Ahmed</td>
    </tr>
	<tr>
      <th scope="row">Long Dong</th>
      <td>06-664-20-69</td>
      <td>420$</td>
      <td>Ahmed</td>
    </tr>
	
	
</table>
			</div>
		</div>
	</div>
</br>

</div>

<div class="footer-section">
    <div class="footer">
  <div class="container">
        <div class="col-md-4 footer-one">
          <div class="foot-logo">
              <img src="http://smarthead.ancorathemes.com/wp-content/uploads/2016/12/footer_logo.png">
          </div> 
           
           <p>Providing Life Changing Experiences Through Education. Class That Fit Your Busy Life. Closer to Home
                </p>
            <div class="social-icons"> 
               <a href="https://www.facebook.com/"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
               <a href="https://twitter.com/"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
              <a href="https://plus.google.com/"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
              <a href="mailto:bootsnipp@gmail.com"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
          </div>
        </div>
        <div class="col-md-2 footer-two">
           <h5>Quick Links</h5>
              <ul>
                    <li><a href="#"> About Us</a> </li>
                    <li><a href="#"> Our News</a> </li>
                    <li><a href="services.php"> Our Services</a> </li>
                    <li><a href="contact.php"> Contact Us</a> </li>
                  </ul>
                  
        </div>
        <div class="col-md-2 footer-three">
           <h5>Services</h5>
              <ul>
                    <li><a href="#"> About Us</a> </li>
                    <li><a href="#"> Our News</a> </li>
                    <li><a href="services.php"> Our Services</a> </li>
                    <li><a href="contact.php"> Contact Us</a> </li>
                  </ul>
                  
        </div>
        <div class="col-md-4 footer-four">
           <h5>Contact Us</h5>
             <img src="http://iacademy.mikado-themes.com/wp-content/uploads/2017/05/footer-img-1.png">  
                  
        </div>
        
    
    
    
    
    
    <div class="clearfix"></div>
  </div>
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
            <div class="col-sm-6  ">
                <div class="copyright-text pull-right">
                <p> <a href="Home.php">Home</a> | <a href="#">Privacy</a> |<a href="#">Terms & Conditions</a> | <a href="#">Refund Policy</a> </p>
              </div>          
                          
            </div> <!-- End Col -->
          </div>
        </div>
    </div>
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://use.fontawesome.com/dd40cb5b47.js"></script>
  
  <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
	<script src="https://www.amcharts.com/lib/3/serial.js"></script>
	<script type="text/javascript" src="../js/chartCustomers.js"></script>

	<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
	<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
	<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
  </body>