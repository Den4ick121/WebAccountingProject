
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Purchasing Order</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type = "text/css" href="../css/adminCSS.css">
	<link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
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
				<li ><a href="homeAdmin.php">Home</a></li>
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
					<li ><a href="purchasingOrderAdmin.php" class = "aWhiteActive">Purchasing Order</a></li>
					<li><a href="inventoryFileAdmin.php" class = "aWhite">Inventory</a></li>
					<li><a href="supplierInfoAdmin.php" class = "aWhite">Supplier Information</a></li>
					<li><a href="paymentAdmin.php" class = "aWhite">Payment</a></li>
				</ol>
			</div>
		</div>

<div id = "inputDiv">
	<fieldset>
			<h1 class = "headDesign"> Purchasing Order </h1>
						<hr>
		<div class = "form-row">
				<div class ="form-group col-md-4">
				<form action="http://www.example.com/profile.php">
			<p>Choose payer: </p>
					<select name="payer" class="form-control">
						<option value="MacDonalds">MacDonalds </option>
						<option value="BurgerKing"> BurgerKing </option>
						<option value="KFC">KFC </option>
					</select>
				</form>
			</div>

			<div class ="form-group col-md-4">
				<form action="http://www.example.com/profile.php">
				<p>Cash and cash equivalents: </p>
			<select name="cash" class="form-control">
				<option value="dollars"> Dollars </option>
				<option value="Gold"> Gold </option>
				<option value="Kidney">Kidney </option>
			</select>
				</form>
			</div>

			<div class ="form-group col-md-4">
			<h1 class = "headingDesighn"> Balance <span id="balance">000$</span></h1>
			</div>

		</div>

		<div class = "form-row">
			<div class ="form-group col-md-4">
				<form action="http://www.example.com/bookings/method="post" >
					<p> Date </p>
					<input type="date" name="date" class="form-control"/><br />
				</form>
			</div>

			<div class ="form-group col-md-4">
				<form action="http://www.example.com/profile.php">
					<p>Choose payment method: </p>
					<select name="payment" class="form-control">
						<option value="Visa"> Visa </option>
						<option value="Bitcoin"> Bitcoin </option>
						<option value="Dollars"> Dollars </option>
					</select>
				</form>
			</div>

			<div class ="form-group col-md-4">
				<p>Order No.</p>
				<input type="text" name="order" class="form-control"/>
			</div>

		</div>

			<div class = "form-row">
				<div class ="form-group col-md-12">
					<input type ="button" value = "Submit a line" id = "anotherSubmitButton" class="btn btn-primary btn-lg btn-block"/>
				</div>
			</div>
		</fieldset>
	</div>
</br>
	<div id = "tableDiv"> 

			<table class = "table table-bordered" >

				<thead>
				<tr>
					<th scope="column"></th>
					<th scope="column">Date</th>
					<th scope="column">Order No.</th>
					<th scope="column">Quantity</th>
					<th scope="column">Unit Price</th>
					<th scope="column">Vendor</th>
					<th scope="column">TOTAL</th>

				</tr>
				</thead>
				<tbody>
				<tr>
					<td scope = "row"><input id="checkBox" type="checkbox"/></td>
					<td>30th of Februrary</td>
					<td id = "Order">1234</td>
					<td>Empty</td>
					<td>100$</td>
					<td>Disney</td>
					<td>Empty</td>
					
				</tr>
				<tr>
					<td scope = "row"><input id="checkBox" type="checkbox"/></td>
					<td>30th of Februrary</td>
					<td id = "Order">1235</td>
					<td>Empty</td>
					<td>100$</td>
					<td>Disney</td>
					<td>Empty</td>

				</tr>
				<tr>
					<td scope = "row"><input id="checkBox" type="checkbox"/></td>
					<td>30th of Februrary</td>
					<td id = "Order">1236</td>
					<td>Empty</td>
					<td>100$</td>
					<td>Disney</td>
					<td>Empty</td>

				</tr>
				<tr>
					<td scope = "row"><input id="checkBox" type="checkbox"/></td>
					<td>30th of Februrary</td>
					<td id = "Order">1237</td>
					<td>Empty</td>
					<td>100$</td>
					<td>Disney</td>
					<td>Empty</td>

				</tr>
				<tr>
					<td scope = "row"><input id="checkBox" type="checkbox"/></td>
					<td>30th of Februrary</td>
					<td id = "Order">1238</td>
					<td>Empty</td>
					<td>100$</td>
					<td>Disney</td>
					<td>WHEW!</td>

				</tr>
				</tbody>
			</table>
					<div class = "form-row">
						<div class ="form-group col-md-3 col-md-offset-5">
							<input type="search" id="search" placeholder="Seach by order No.">
						</div>
						<div class ="form-group col-md-2">
								<input type ="button" value = "Edit a line" id = "button" class="btn btn-primary btn-md"/>
						</div>
						<div class ="form-group col-md-2">

								<input type ="button" value = "Clear a line" id = "button" class="btn btn-primary btn-md"/>
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
                    <li><a href="services.html"> Our Services</a> </li>
                    <li><a href="contact.html"> Contact Us</a> </li>
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