
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Sales Transaction</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type = "text/css" href="../css/adminCSS.css">
	<link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
  </head>
  <body>
	<div id="Home">

		 <div id="logo">
		 </div>

	
        <nav class="navbar navbar-inverse bg-inverse" id = "navbar">
			<div class="navbar-header">
			   <h1 class = "headerDesign">Skynet Accounting Systems</h1>
			</div>
	
		<ul class="nav navbar-nav">
				<<li ><a href="homeAdmin.php">Home</a></li>
				<li><a href="cashCollectionAdmin.php">Revenue</a></li>
				<li><a href="purchasingOrderAdmin.php">Expendetur</a></li>
				<li><a href="reportsAdmin.php">Reports</a></li>
				<li><a href="chartOfAccountsAdmin.php">Chart of Accounts</a></li>
				<li><a href="cashCollectionAdmin.php">Help</a></li>

				<li><a href="../home.php" class = "exit">Exit</a></li>
		</ul>
		</nav>

	
	</div>

<div class="container">

        <div class="row">
            <div class="col-md-12 ">

				<ol class="breadcrumb" id = "secondNavbar">
				  <li ><a href="cashCollectionAdmin.php" class = "aWhite">Cash Collection</a></li>
					  <li><a href="saleOrderAdmin.php" class = "aWhite">Sale Order</a></li>
					  <li><a href="invoiceAdmin.php" class = "aWhite">Invoice</a></li>
					  <li><a href="salesTransactionsAdmin.php" class = "aWhiteActive">Sales Transaction</a></li>
					  <li><a href="customerDetailsAdmin.php" class = "aWhite">Customer Details</a></li>
				</ol>
			</div>
		</div>
	
	<div id = "tableDiv"> 		
		
		<h2 class = "headDesign"> Sales Transaction </h2>
		<table class = "table table-bordered">
		<thead>
			<tr>
			  <th scope="row"></th>
			  <th scope="col">Date</th>
			  <th scope="col">Type</th>
			  <th scope="col">#</th>
			  <th scope="col">Customer</th>
			  <th scope="col">Due Date</th>
			  <th scope="col">Balance</th>
			  <th scope="col">Total</th>
			  <th scope="col">Status</th>
			  <th scope="col">Action</th>
			</tr>
		</thead>

		<tbody>
	<tr>
			  <td><input id="checkBox" type="checkbox"/></td>
			  <td>1st January</td>
			  <td>Extreme</td>
			  <td>420</td>
			  <td>Ahmed</td>
			  <td>Tomorrow</td>
			  <td>420</td>
			  <td>420</td>
			  <td>Done</td>
			  <td>Wasted</td>
	</tr>
	<tr>
			  <td><input id="checkBox" type="checkbox"/></td>
			  <td>1st January</td>
			  <td>Extreme</td>
			  <td>420</td>
			  <td>Ahmed</td>
			  <td>Tomorrow</td>
			  <td>420</td>
			  <td>420</td>
			  <td>Done</td>
			  <td>Wasted</td>
	</tr>
	<tr>
			  <td><input id="checkBox" type="checkbox"/></td>
			  <td>1st January</td>
			  <td>Extreme</td>
			  <td>420</td>
			  <td>Ahmed</td>
			  <td>Tomorrow</td>
			  <td>420</td>
			  <td>420</td>
			  <td>Done</td>
			  <td>Wasted</td>
	</tr>
			</tbody>
	</table>
					<div class = "form-row">
					<div class ="form-group col-md-4 col-md-offset-4">
						<input type="search" id="search" placeholder="Seach by Number"/>
					</div>
					<div class ="form-group col-md-2">
						<input type ="button" value = "Edit a line" id = "button" class="btn btn-primary btn-md"/>
					</div>
					<div class ="form-group col-md-2">
						<input type ="button" value = "Delete a line" id = "button" class="btn btn-primary btn-md"/>
					</div>
					
				</div>	
					
	</div>
</br>

	
			
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


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/dd40cb5b47.js"></script>
  <script src = "../js/search.js"> </script>
</body>