
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Supplier Info</title>

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
					<li><a href="supplierInfoAdmin.php" class = "aWhiteActive">Supplier Information</a></li>
					<li><a href="paymentAdmin.php" class = "aWhite">Payment</a></li>
				</ol>
			</div>
		</div>
	<div id = "inputDiv">
	<fieldset>
		<h2 class = "headDesign"> Supplier Form </h2>
		<hr>
		<div class = "form-row">
							<div class="form-group col-md-6">
								<form>
									<p> Name of company: </p> 
									<input type="text" class="form-control">
								</form>
							</div>

							<div class ="form-group col-md-6">
								<form>
									<p> Name of contact: </p>  
									<input type="text" class="form-control">
								</form>
							</div>

				</div>

				<div class = "form-row">
							<div class="form-group col-md-4">
								<form>
									<p> Account number: </p>  
									<input type="text" class="form-control">
								</form>
							</div>

							<div class ="form-group col-md-4">
								<form>
									<p> Email adress: </p>  
									<input type="email" class="form-control">
								</form>
							</div>

							<div class ="form-group col-md-4">
								<form>
									<p> Supplier Number: </p>  
									<input type="text" class="form-control">
								</form>
							</div>
				</div>

				<div class = "form-row">
							<div class="form-group col-md-12">
								<form>
									<p> Address </p>  
									<input type="text" class="form-control">
								</form>
							</div>

				</div>
				</br>
			<div class = "form-row">
				<div class ="form-group col-md-12">
								<form action="http://www.example.com/profile.php" >
									<p align="left">Supplier Status: </p>
										<select name="status" class="form-control">
										<option value="good" class = "green" >Good Supplier </option>
										<option value= "okay">Okay! </option>
										<option value="bad"> Bad </option>
										<option value="reallyBad">Awful Do Not Work With</option>
									</select>
								</form>
				</div>
			<div class = "form-row">
				<div class ="form-group col-md-12">
					<input type ="button" value = "Add a line" id = "formButton" class="btn btn-primary btn-lg btn-block"/>

				</div>
			</div>
			
		</fieldset>
	</div>
</br>
	<div id = "tableDiv"> 
			<h2 class = "headDesign"> Supplier Information File  </h2>
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
					
			<table class = "table table-bordered">

				<thead>
				<tr>
					<th></th>
					<th>Name of Company</th>
					<th>Name of Contact</th>
					<th>Supplier Number</th>	
				</tr>
				</thead>
				<tbody>
				<tr>
					<td rowspan = "7"><input id="checkBox" type="checkbox"/></td>
					<td>Aperture Science</td>
					<td>Glados</td>
					<td>420-420-666</td>							
				</tr>
				<tr>
					<th >Email Address</th>
					<th colspan = "2">Account Number</th>
				</tr>
				<tr>
					<td>wow@mail.omg</td>
					<td colspan = "2">8-916-664-20-69</td>
				</tr>
				<tr>
					<th colspan = "3"> Address</th>

				</tr>
				<tr>
					<td colspan = "3">Springfield Spooning St. 4/20</td>
				</tr>
				<tr>
					<th colspan = "3"> Status </th>
				</tr>
				<tr>
					<td class = "status" id = "status" colspan = "3"> <span id="supplierStatus">...</span></td>
				</tr>
				</tbody>
			</table>
			</br>
			<table class = "table table-bordered">

				<thead>
				<tr>
					<th></th>
					<th>Name of Company</th>
					<th>Name of Contact</th>
					<th>Supplier Number</th>	
				</tr>
				</thead>
				<tbody>
				<tr>
					<td rowspan = "7"><input id="checkBox" type="checkbox"/></td>
					<td>Aperture Science</td>
					<td>Glados</td>
					<td>420-420-666</td>							
				</tr>
				<tr>
					<th >Email Address</th>
					<th colspan = "2">Account Number</th>
				</tr>
				<tr>
					<td>wow@mail.omg</td>
					<td colspan = "2">8-916-664-20-69</td>
				</tr>
				<tr>
					<th colspan = "3"> Address</th>

				</tr>
				<tr>
					<td colspan = "3">Springfield Spooning St. 4/20</td>
				</tr>
				<tr>
					<th colspan = "3"> Status </th>
				</tr>
				<tr>
					<td class = "status" id = "status" colspan = "3"> <span id="supplierStatus">...</span></td>
				</tr>
				</tbody>
			</table>
			</br>
			<table class = "table table-bordered">

				<thead>
				<tr>
					<th></th>
					<th>Name of Company</th>
					<th>Name of Contact</th>
					<th>Supplier Number</th>	
				</tr>
				</thead>
				<tbody>
				<tr>
					<td rowspan = "7"><input id="checkBox" type="checkbox"/></td>
					<td>Aperture Science</td>
					<td>Glados</td>
					<td>420-420-666</td>							
				</tr>
				<tr>
					<th >Email Address</th>
					<th colspan = "2">Account Number</th>
				</tr>
				<tr>
					<td>wow@mail.omg</td>
					<td colspan = "2">8-916-664-20-69</td>
				</tr>
				<tr>
					<th colspan = "3"> Address</th>

				</tr>
				<tr>
					<td colspan = "3">Springfield Spooning St. 4/20</td>
				</tr>
				<tr>
					<th colspan = "3"> Status </th>
				</tr>
				<tr>
					<td class = "status" id = "status" colspan = "3"> <span id="supplierStatus">...</span></td>
				</tr>
				</tbody>
			</table>
			</br>
			<table class = "table table-bordered">

				<thead>
				<tr>
					<th></th>
					<th>Name of Company</th>
					<th>Name of Contact</th>
					<th>Supplier Number</th>	
				</tr>
				</thead>
				<tbody>
				<tr>
					<td rowspan = "7"><input id="checkBox" type="checkbox"/></td>
					<td>Aperture Science</td>
					<td>Glados</td>
					<td>420-420-666</td>							
				</tr>
				<tr>
					<th >Email Address</th>
					<th colspan = "2">Account Number</th>
				</tr>
				<tr>
					<td>wow@mail.omg</td>
					<td colspan = "2">8-916-664-20-69</td>
				</tr>
				<tr>
					<th colspan = "3"> Address</th>

				</tr>
				<tr>
					<td colspan = "3">Springfield Spooning St. 4/20</td>
				</tr>
				<tr>
					<th colspan = "3"> Status </th>
				</tr>
				<tr>
					<td class = "status" id = "status" colspan = "3"> <span id="supplierStatus">...</span></td>
				</tr>
				</tbody>
			</table>
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