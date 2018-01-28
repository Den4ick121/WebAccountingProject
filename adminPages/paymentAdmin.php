
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Payment</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type = "text/css" href="../css/adminCSS.css">

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
				<li ><a href="homeAdmin.php">Home</a></li>
				<li><a href="cashCollectionAdmin.php">Revenue</a></li>
				<li><a href="purchasingOrderAdmin.php">Expendetur</a></li>
				<li><a href="cashCollectionAdmin.php">Reports</a></li>
				<li><a href="cashCollectionAdmin.php">Chart of Accounts</a></li>
				<li><a href="cashCollectionAdmin.php">Help</a></li>

				<li><a href="../home.php" class = "exit">Exit</a></li>
		</ul>
		</nav>

	
	</div>


<div class="container">

        <div class="row">
            <div class="col-md-12 ">

				<ol class="breadcrumb" id = "secondNavbar">
					<li ><a href="purchasingOrderAdmin.php" class = "aWhite">Purchasing Order</a></li>
					<li><a href="inventoryFileAdmin.php" class = "aWhite">Inventory</a></li>
					<li><a href="supplierInfoAdmin.php" class = "aWhite">Supplier Information</a></li>
					<li><a href="paymentAdmin.php" class = "aWhiteActive">Payment</a></li>
				</ol>
			</div>
		</div>

<div id = "inputDiv">
	<fieldset>
			<h1 class = "headDesign"> Payment Screen </h1>
			<hr>
		<div class = "form-row">
			<div class ="form-group col-md-12">
				<p>Transaction No.</p>
				<input type="text" name="order" class="form-control"/>
			</div>

		</div>

		<div class = "form-row">
			<div class ="form-group col-md-12">
				<p>Vendor No.</p>
				<input type="text" name="order" class="form-control"/>
			</div>
			
		</fieldset>
	</div>
</br>
	<div id = "tablePaymentDiv"> 
			<h2 class = "headDesign"> Transaction Summmary </h2>
			<table class = "table">

				<thead>
				<tr>
					<th scope="column"></th>
					<th scope="column">Invoice No.</th>
					<th scope="column">Description</th>
					<th scope="column">Amount Due</th>

				</tr>
				</thead>
				<tbody>
				<tr>
					<td>Cell</td>
					<td>30th of Februrary</td>
					<td>1234</td>
					<td>Empty</td>			
				</tr>
				<tr>
					<td>Cell</td>
					<td>30th of Februrary</td>
					<td>1235</td>
					<td>Empty</td>
				</tr>
				<tr>
					<td>Cell</td>
					<td>30th of Februrary</td>
					<td>1236</td>
					<td>Empty</td>
				</tr>
				<tr>
					<td>Cell</td>
					<td>30th of Februrary</td>
					<td>1237</td>
					<td>Empty</td>
				</tr>
				</tbody>
				<tfoot>
				<tr>
					<td>TOTAL</td>
					<td></td>
					<td></td>
					<td></td>

				</tr>
				</tfoot>
			</table>
				<div class = "form-row">
					<div class ="form-group col-md-12">
					
						<form action="http://www.example.com/profile.php" >
							<p align="left">Payment method: </p>
							<select name="cash" class="form-control">
							<option value="visa">VISA </option>
							<option value="cash">CASH </option>
							<option value="direct dibit">DIRECT DIBIT </option>
							<option value="bank transfer">BANK TRANSFER </option>
							</select>
						</form>			
					</div>
				</div>
				
				<div class = "form-row">
					<div class ="form-group col-md-12">
					
					<input type ="button" value = "Pay and Save" id = "button" class="btn btn-primary btn-lg"/>
					</div>
				</div>		
				
		</div>
	</div>
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