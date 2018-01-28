
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Customer Details</title>

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
				<li ><a href="homeAdmin.php">Home</a></li>
				<li><a href="cashCollectionAdmin.php">Revenue</a></li>
				<li><a href="purchasingOrderAdmin.php">Expendetur</a></li>
				<li><a href="reportsAdmin.php">Reports</a></li>
				<li><a href="chartOfAccountsAdmin.php">Chart of Accounts</a></li>
				<li><a href="help.php">Help</a></li>

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
					  <li><a href="salesTransactionsAdmin.php" class = "aWhite">Sales Transaction</a></li>
					  <li><a href="customerDetailsAdmin.php" class = "aWhiteActive">Customer Details</a></li>
				</ol>
			</div>
		</div>
		
	<div id = "inputDiv">
		<fieldset>
			<h1 class = "headDesign"> Customer Details Form </h1>
<hr>
				<div class = "form-row">
								<div class ="form-group col-md-6">
									<form>
									<p> Customer Name </p>
									<input type="text" class="form-control">
									</form>
								</div>
								
								<div class ="form-group col-md-6" >
									<form>
										<p> Phone Number </p>  
										<input type="text" class="form-control">
									</form>
								</div>
				</div>

				<div class = "form-row">
								<div class="form-group col-md-3" >
									<form>
										<p> E-Mail</p>  
										<input type="email" class="form-control">
									</form>
								</div>
								
								<div  class ="form-group col-md-3">
									<form>
										<p>Contact Person Name</p>  
										<input type="text" class="form-control">
									</form>
								</div>
								
								<div class ="form-group col-md-6">
									<form>
										<p> Contact Person Phone </p>  
										<input type="text" class="form-control">
									</form>
								</div>
				</div>
				
				<div class = "form-row">
								<div class ="form-group col-md-12">
									<form>
										<p> Remark</p>  
										<input type="text" class="form-control">
									</form>
								</div>							
				</div>
				
				<div class = "form-row">

								<div class ="form-group col-md-8">
									<form>
										<p> Address</p>  
										<input type="text" class="form-control">
									</form>
								</div>
								
								<div class ="form-group col-md-4">
								<input type ="button" value = "Submit" id = "submitButton" class="btn btn-primary btn-lg btn-block"/>
								</div>								
				</div>
				
				</fieldset>
	</div>
</br>	
	<div id = "tableDiv">
	
				<h2 class = "headDesign"> Supplier Information File  </h2>

				<div class = "form-row">
					<div class ="form-group col-md-4 col-md-offset-3">
						<input type="search" id="search" placeholder="Seach by Name"/>
					</div>
					<div class ="form-group col-md-2">
						<input type ="button" value = "Edit a customer profile" id = "customerSearchButton" class="btn btn-primary btn-md"/>
					</div>
					<div class ="form-group col-md-3">
						<input type ="button" value = "Delete a customer profile" id = "customerSearchButton" class="btn btn-primary btn-md"/>
					</div>
					
				</div>	
			<table class = "table table-bordered">

				<thead>
				<tr>
					<th></th>
					<th>Customer Name </th>
					<th>Phone Number</th>
					<th colspan = "2"> Address </th>
					
				</tr>
				</thead>
				<tbody>
				<tr>
					<td rowspan = "5"><input id="checkBox" type="checkbox"/></td>
					<td id="Order">Homer Simspon</td>
					<td>420-420-666</td>
					<td colspan = "2">Home ave 4/20</td>
					
				</tr>
				<tr>
					<th >Email Address</th>
					<th colspan = "3"> Remark</th>
				</tr>
				<tr>
					<td>wow@mail.omg</td>
					<td colspan = "3">Ate all donuts</td>
				</tr>
				
				<tr>
					<th colspan = "2">Contact Person Name</th>
					<th colspan = "2">Contact Person Phone Number</th>

				</tr>
				<tr>
					<td colspan = "2">Your Amazing Friend</td>
					<td colspan = "2">8-916-664-20-69</td>
				</tr>
				</tbody>
			</table>
</br>
			<table class = "table table-bordered">

				<thead>
				<tr>
					<th></th>
					<th>Customer Name </th>
					<th>Phone Number</th>
					<th colspan = "2"> Address</th>
					
				</tr>
				</thead>
				<tbody>
				<tr>
					<td rowspan = "5"><input id="checkBox" type="checkbox"/></td>
					<td id="Order">Aperture Science</td>
					<td>420-420-666</td>
					<td colspan = "2">Springfield Spooning St. 4/20</td>
					
				</tr>
				<tr>
					<th >Email Address</th>
					<th colspan = "3"> Remark</th>
				</tr>
				<tr>
					<td>wow@mail.omg</td>
					<td colspan = "3">Tried to poison me once</td>
				</tr>
				
				<tr>
					<th colspan = "2">Contact Person Name</th>
					<th colspan = "2">Contact Person Phone Number</th>

				</tr>
				<tr>
					<td colspan = "2">Your Amazing Friend</td>
					<td colspan = "2">8-916-664-20-69</td>
				</tr>
				</tbody>
			</table>
</br>
			<table class = "table table-bordered">

				<thead>
				<tr>
					<th></th>
					<th>Customer Name </th>
					<th>Phone Number</th>
					<th colspan = "2"> Address</th>
					
				</tr>
				</thead>
				<tbody>
				<tr>
					<td rowspan = "5"><input id="checkBox" type="checkbox"/></td>
					<td id="Order">I dont remember</td>
					<td>Maybe 566-56-... ehhh</td>
					<td colspan = "2">Where?</td>
					
				</tr>
				<tr>
					<th >Email Address</th>
					<th colspan = "3"> Remark</th>
				</tr>
				<tr>
					<td>I think it's on gmail</td>
					<td colspan = "3">Don't remember that person at all. Wierd.</td>
				</tr>
				
				<tr>
					<th colspan = "2">Contact Person Name</th>
					<th colspan = "2">Contact Person Phone Number</th>

				</tr>
				<tr>
					<td colspan = "2">Your Amazing Friend</td>
					<td colspan = "2">8-916-664-20-69</td>
				</tr>
				</tbody>
			</table>
</br>			
			<table class = "table table-bordered">

				<thead>
				<tr>
					<th></th>
					<th>Customer Name </th>
					<th>Phone Number</th>
					<th colspan = "2"> Address</th>
					
				</tr>
				</thead>
				<tbody>
				<tr>
					<td rowspan = "5"><input id="checkBox" type="checkbox"/></td>
					<td id="Order">Egor</td>
					<td>123-456-789</td>
					<td colspan = "2">Srinakarin 46</td>
					
				</tr>
				<tr>
					<th >Email Address</th>
					<th colspan = "3"> Remark</th>
				</tr>
				<tr>
					<td>hottestBeard_0nTheB1ock@hotmail.com</td>
					<td colspan = "3">Want to finish this project</td>
				</tr>
				
				<tr>
					<th colspan = "2">Contact Person Name</th>
					<th colspan = "2">Contact Person Phone Number</th>

				</tr>
				<tr>
					<td colspan = "2">Your Amazing Friend</td>
					<td colspan = "2">8-916-664-20-69</td>
				</tr>
				</tbody>
			</table>				
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